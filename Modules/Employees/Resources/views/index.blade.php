@extends('master')

@section('content')
    <div class="row mb-3">
        <div class="col-md-12">
            <h2>Employee List</h2>
        </div>
    </div>

    {{-- Tampilkan Pesan Sukses atau Error dari Controller --}}
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>All Employees</span>
                    {{-- Tambahkan tombol Add New Employee jika fungsi create diimplementasikan --}}
                    {{-- <a href="{{ route('employees.create') }}" class="btn btn-primary btn-sm">Add New Employee</a> --}}
                </div>
                <div class="card-body">
                    @if($employees->count() > 0)
                        <div class="table-responsive">
                            {{-- Menggunakan table-bordered dan table-hover untuk kerapian --}}
                            <table class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th style="width: 50px;">ID</th>
                                        <th>Name</th>
                                        <th style="width: 120px;">Status</th>
                                        <th style="width: 250px;">Action</th> {{-- Kolom Aksi --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($employees as $employee)
                                        <tr>
                                            <td>{{ $employee->id }}</td>
                                            <td>{{ $employee->fullname ?? '-' }}</td>
                                            
                                            {{-- Kolom Status dengan Badge --}}
                                            <td>
                                                @php
                                                    $status = strtolower($employee->status ?? 'inactive');
                                                    $statusClass = match ($status) {
                                                        'active' => 'badge-success',
                                                        'cuti' => 'badge-warning text-dark',
                                                        'inactive' => 'badge-danger',
                                                        default => 'badge-secondary',
                                                    };
                                                @endphp
                                                <span class="badge {{ $statusClass }}">{{ ucfirst($employee->status) ?? 'N/A' }}</span>
                                            </td>
                                            
                                            {{-- Kolom Action (Fungsi Edit Status Bonus 0.5 point) --}}
                                            <td>
                                                <div class="d-flex flex-wrap">
                                                    {{-- Form Aktif --}}
                                                    <form method="POST" action="{{ route('employees.update_status', $employee->id) }}" class="me-1 mb-1">
                                                        @csrf
                                                        <input type="hidden" name="status" value="active">
                                                        <button type="submit" class="btn btn-sm btn-success" {{ $status == 'active' ? 'disabled' : '' }}>Aktif</button>
                                                    </form>
                                                    
                                                    {{-- Form Cuti --}}
                                                    <form method="POST" action="{{ route('employees.update_status', $employee->id) }}" class="me-1 mb-1">
                                                        @csrf
                                                        <input type="hidden" name="status" value="cuti">
                                                        <button type="submit" class="btn btn-sm btn-warning" {{ $status == 'cuti' ? 'disabled' : '' }}>Cuti</button>
                                                    </form>
                                                    
                                                    {{-- Form Non-Aktif --}}
                                                    <form method="POST" action="{{ route('employees.update_status', $employee->id) }}" class="mb-1">
                                                        @csrf
                                                        <input type="hidden" name="status" value="inactive">
                                                        <button type="submit" class="btn btn-sm btn-danger" {{ $status == 'inactive' ? 'disabled' : '' }}>Non-Aktif</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    @else
                        <div class="alert alert-info">
                            No employees found.
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection