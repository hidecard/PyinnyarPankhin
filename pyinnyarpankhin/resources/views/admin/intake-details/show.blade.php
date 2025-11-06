@extends('admin.layout')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title" style="color: #6C3428;">Intake Detail Details</h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.intake-details.index') }}" class="btn btn-secondary btn-sm">
                            <i class="fas fa-arrow-left"></i> Back to Details
                        </a>
                        <a href="{{ route('admin.intake-details.edit', $intakeDetail) }}" class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label style="color: #6C3428;"><strong>ID:</strong></label>
                                <p style="color: #6C3428;">{{ $intakeDetail->id }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label style="color: #6C3428;"><strong>Event Name:</strong></label>
                                <p style="color: #6C3428;">{{ $intakeDetail->event_name }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label style="color: #6C3428;"><strong>Start Date:</strong></label>
                                <p style="color: #6C3428;">{{ $intakeDetail->start_date ? $intakeDetail->start_date->format('M d, Y') : 'N/A' }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label style="color: #6C3428;"><strong>End Date:</strong></label>
                                <p style="color: #6C3428;">{{ $intakeDetail->end_date ? $intakeDetail->end_date->format('M d, Y') : 'N/A' }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label style="color: #6C3428;"><strong>Created At:</strong></label>
                                <p style="color: #6C3428;">{{ $intakeDetail->created_at->format('M d, Y H:i') }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label style="color: #6C3428;"><strong>Updated At:</strong></label>
                                <p style="color: #6C3428;">{{ $intakeDetail->updated_at->format('M d, Y H:i') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
