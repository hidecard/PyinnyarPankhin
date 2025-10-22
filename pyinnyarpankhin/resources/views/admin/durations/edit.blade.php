@extends('admin.layout')

@section('title', 'Edit Duration')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 style="color: #2ecc71;"><i class="fas fa-clock me-2" style="color: #2ecc71;"></i>Edit Duration</h1>
        <a href="{{ route('admin.durations.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Back
        </a>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.durations.update', $duration) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="length" class="form-label">Duration Length <span class="text-danger">*</span></label>
                            <input type="number" class="form-control @error('length') is-invalid @enderror"
                                   id="length" name="length" value="{{ old('length', $duration->length) }}" min="1" max="10" required>
                            <div class="form-text">Enter the duration in years (1-10).</div>
                            @error('length')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-success">
                                <i class="fas fa-save"></i> Update
                            </button>
                            <a href="{{ route('admin.durations.index') }}" class="btn btn-secondary">
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
