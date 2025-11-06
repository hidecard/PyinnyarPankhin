@extends('admin.layout')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title" style="color: #6C3428;">Intake Detail for {{ $intake->name }}</h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.intakes.intakes.details.edit', [$intake, $detail]) }}" class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <a href="{{ route('admin.intakes.intakes.details.index', $intake) }}" class="btn btn-secondary btn-sm">
                            <i class="fas fa-arrow-left"></i> Back to Details
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <h5 style="color: #6C3428;">Detail Information</h5>
                            <table class="table table-borderless">
                                <tr>
                                    <th style="color: #6C3428;">ID:</th>
                                    <td style="color: #6C3428;">{{ $detail->id }}</td>
                                </tr>
                                <tr>
                                    <th style="color: #6C3428;">Event Name:</th>
                                    <td style="color: #6C3428;">{{ $detail->event_name }}</td>
                                </tr>
                                <tr>
                                    <th style="color: #6C3428;">Start Date:</th>
                                    <td style="color: #6C3428;">{{ $detail->start_date ? $detail->start_date->format('M d, Y') : 'N/A' }}</td>
                                </tr>
                                <tr>
                                    <th style="color: #6C3428;">End Date:</th>
                                    <td style="color: #6C3428;">{{ $detail->end_date ? $detail->end_date->format('M d, Y') : 'N/A' }}</td>
                                </tr>
                                <tr>
                                    <th style="color: #6C3428;">Created At:</th>
                                    <td style="color: #6C3428;">{{ $detail->created_at->format('M d, Y H:i') }}</td>
                                </tr>
                                <tr>
                                    <th style="color: #6C3428;">Updated At:</th>
                                    <td style="color: #6C3428;">{{ $detail->updated_at->format('M d, Y H:i') }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
