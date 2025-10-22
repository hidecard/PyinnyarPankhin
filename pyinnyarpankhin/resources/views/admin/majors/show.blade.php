@extends('admin.layout')

@section('title', 'View Major')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 style="color: #2ecc71;"><i class="fas fa-eye me-2" style="color: #2ecc71;"></i>View Major</h1>
        <div>
            <a href="{{ route('admin.majors.edit', $major) }}" class="btn btn-warning me-2">
                <i class="fas fa-edit"></i> Edit
            </a>
            <a href="{{ route('admin.majors.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Back
            </a>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Major Details</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Major Name:</label>
                                <p class="form-control-plaintext">{{ $major->major_name }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Department:</label>
                                <p class="form-control-plaintext">{{ $major->department->department_name ?? 'N/A' }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Created At:</label>
                                <p class="form-control-plaintext">{{ $major->created_at->format('M d, Y H:i') }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Updated At:</label>
                                <p class="form-control-plaintext">{{ $major->updated_at->format('M d, Y H:i') }}</p>
                            </div>
                        </div>
                    </div>

                    @if($major->degrees->count() > 0)
                    <div class="mt-4">
                        <h6 class="fw-bold">Associated Degrees:</h6>
                        <div class="row">
                            @foreach($major->degrees as $degree)
                            <div class="col-md-6 mb-2">
                                <div class="card bg-light">
                                    <div class="card-body py-2">
                                        <strong>{{ $degree->degree_name }}</strong>
                                        <br>
                                        <small class="text-muted">{{ $degree->duration->length }} years</small>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @else
                    <div class="mt-4">
                        <p class="text-muted">No degrees associated with this major.</p>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
