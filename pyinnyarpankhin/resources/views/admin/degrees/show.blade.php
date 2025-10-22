@extends('admin.layout')

@section('title', 'View Degree')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 style="color: #2ecc71;"><i class="fas fa-eye me-2" style="color: #2ecc71;"></i>View Degree</h1>
        <div>
            <a href="{{ route('admin.degrees.edit', $degree) }}" class="btn btn-warning me-2">
                <i class="fas fa-edit"></i> Edit
            </a>
            <a href="{{ route('admin.degrees.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Back
            </a>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Degree Details</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Degree Name:</label>
                                <p class="form-control-plaintext">{{ $degree->degree_name }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Duration:</label>
                                <p class="form-control-plaintext">{{ $degree->duration->length }} years</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Created At:</label>
                                <p class="form-control-plaintext">{{ $degree->created_at->format('M d, Y H:i') }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Updated At:</label>
                                <p class="form-control-plaintext">{{ $degree->updated_at->format('M d, Y H:i') }}</p>
                            </div>
                        </div>
                    </div>

                    @if($degree->majors->count() > 0)
                    <div class="mt-4">
                        <h6 class="fw-bold">Associated Majors:</h6>
                        <div class="row">
                            @foreach($degree->majors as $major)
                            <div class="col-md-6 mb-2">
                                <div class="card bg-light">
                                    <div class="card-body py-2">
                                        <strong>{{ $major->major_name }}</strong>
                                        <br>
                                        <small class="text-muted">{{ $major->department->department_name }}</small>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @else
                    <div class="mt-4">
                        <p class="text-muted">No majors associated with this degree.</p>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
