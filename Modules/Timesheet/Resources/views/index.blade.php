@extends('master')

@section('content')
    <div class="row mb-3">
        <div class="col-md-12">
            <h2>Timesheet List</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span>All Recorded Timesheets</span>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Karyawan</th>
                                    <th>Proposal Number</th>
                                    <th>Service Name</th>
                                    <th>Waktu Mulai</th>
                                    <th>Waktu Selesai</th>
                                    <th>Total Jam</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($timesheets as $ts)
                                    <tr>
                                        <td>{{ \Carbon\Carbon::parse($ts->date)->format('d M Y') }}</td>
                                        <td>{{ $ts->employee->fullname ?? 'N/A' }}</td> 
                                        <td>{{ $ts->serviceused->proposal->number ?? 'N/A' }}</td>
                                        <td>{{ $ts->serviceused->name ?? 'N/A' }}</td>
                                        <td>{{ $ts->timestart }}</td>
                                        <td>{{ $ts->timefinish }}</td>
                                        <td><strong>{{ $ts->total_time }}</strong></td> 
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