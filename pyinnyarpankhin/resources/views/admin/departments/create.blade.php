@extends('admin.layout')

@section('title', 'Add Department')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 style="color: #2ecc71;"><i class="fas fa-building me-2" style="color: #2ecc71;"></i>Add Department</h1>
        <a href="{{ route('admin.departments.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Back
        </a>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.departments.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="department_name" class="form-label">Department Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('department_name') is-invalid @enderror"
                                   id="department_name" name="department_name" value="{{ old('department_name') }}" required>
                            <div class="form-text">Enter the full name of the department.</div>
                            @error('department_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror"
                                      id="description" name="description" rows="4">{{ old('description') }}</textarea>
                            <div class="form-text">Provide a brief description of the department (optional).</div>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-success">
                                <i class="fas fa-save"></i> Save
                            </button>
                            <a href="{{ route('admin.departments.index') }}" class="btn btn-secondary">
                                <i class="fas fa-times"></i> Cancel
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
