@extends('master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            {{-- Menggunakan class Bootstrap untuk judul yang lebih menarik --}}
            <h2 class="mb-4 border-bottom pb-2 text-primary">
                📊 Data Service Used
            </h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-lg border-0"> {{-- Card lebih menonjol dengan shadow-lg dan border-0 --}}
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <span class="fw-bold fs-5">Daftar Service yang Digunakan</span>
                    <a href="{{ url('serviceused/create') }}" class="btn btn-light btn-sm">
                        <i class="lni lni-plus"></i> Tambah Service
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover table-sm"> 
                            <thead class="bg-dark text-white"> {{-- Header berwarna gelap agar kontras --}}
                                <tr>
                                    <th>ID</th>
                                    <th>Nama Service</th>
                                    <th>Proposal No.</th>
                                    <th>Tanggal Dibuat</th>
                                    <th>Status</th>
                                    <th>Total Jam</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($serviceuseds as $service)
                                    <tr>
                                        <td>{{ $service->id }}</td>
                                        <td>{{ $service->name }}</td>
                                        
                                        {{-- 1. Proposal No. --}}
                                        <td class="fw-bold text-info">{{ $service->proposal->number ?? 'N/A' }}</td>
                                        
                                        {{-- 2. Tanggal Dibuat --}}
                                        <td>{{ \Carbon\Carbon::parse($service->created_at)->format('d M Y') }}</td>

                                        {{-- 3. Status Badge (Sudah menggunakan warna) --}}
                                        <td>
                                            @php
                                                $badgeClass = match(strtolower($service->status ?? 'pending')) {
                                                    'done' => 'bg-success',
                                                    'ongoing' => 'bg-warning text-dark',
                                                    'pending' => 'bg-secondary',
                                                    default => 'bg-info'
                                                };
                                            @endphp
                                            <span class="badge {{ $badgeClass }} py-2 px-3">
                                                {{ ucfirst($service->status ?? 'Pending') }}
                                            </span>
                                        </td>

                                        {{-- 4. Time Spent --}}
                                        <td>
                                            <span class="badge bg-danger py-2 px-3"> 
                                                <i class="lni lni-clock-history me-1"></i>
                                                {{ $service->timespent ?? '0:00' }}
                                            </span>
                                        </td>
                                        
                                        {{-- 5. Kolom Aksi --}}
                                        <td>
                                            <a href="{{ url('serviceused/' . $service->id . '/edit') }}" class="btn btn-warning btn-sm">
                                                <i class="lni lni-pencil"></i>
                                            </a>
                                            {{-- Tambahkan form delete di sini --}}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection