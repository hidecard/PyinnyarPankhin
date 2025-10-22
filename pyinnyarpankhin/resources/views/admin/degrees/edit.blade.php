@extends('admin.layout')

@section('title', 'Edit Degree')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 style="color: #2ecc71;"><i class="fas fa-edit me-2" style="color: #2ecc71;"></i>Edit Degree</h1>
        <a href="{{ route('admin.degrees.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Back
        </a>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.degrees.update', $degree) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="degree_name" class="form-label">Degree Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('degree_name') is-invalid @enderror"
                                   id="degree_name" name="degree_name" value="{{ old('degree_name', $degree->degree_name) }}" required>
                            <div class="form-text">Enter the full name of the degree (e.g., Bachelor of Science in Computer Science).</div>
                            @error('degree_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="duration_id" class="form-label">Duration <span class="text-danger">*</span></label>
                            <select class="form-select @error('duration_id') is-invalid @enderror"
                                    id="duration_id" name="duration_id" required>
                                <option value="">Select Duration</option>
                                @foreach($durations as $duration)
                                    <option value="{{ $duration->id }}" {{ old('duration_id', $degree->duration_id) == $duration->id ? 'selected' : '' }}>
                                        {{ $duration->length }} years
                                    </option>
                                @endforeach
                            </select>
                            <div class="form-text">Select the duration for this degree program.</div>
                            @error('duration_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-success">
                                <i class="fas fa-save"></i> Update
                            </button>
                            <a href="{{ route('admin.degrees.index') }}" class="btn btn-secondary">
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
