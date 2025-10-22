@extends('admin.layout')

@section('title', 'Edit Major')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 style="color: #2ecc71;"><i class="fas fa-book me-2" style="color: #2ecc71;"></i>Edit Major</h1>
        <a href="{{ route('admin.majors.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Back
        </a>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.majors.update', $major) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="major_name" class="form-label">Major Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('major_name') is-invalid @enderror"
                                   id="major_name" name="major_name" value="{{ old('major_name', $major->major_name) }}" required>
                            <div class="form-text">Enter the full name of the major.</div>
                            @error('major_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="degree_id" class="form-label">Degree <span class="text-danger">*</span></label>
                            <select class="form-select @error('degree_id') is-invalid @enderror"
                                    id="degree_id" name="degree_id" required>
                                <option value="">Select a degree</option>
                                @foreach($degrees as $degree)
                                    <option value="{{ $degree->id }}" {{ old('degree_id', $major->degrees->first()?->id) == $degree->id ? 'selected' : '' }}>
                                        {{ $degree->degree_name }}
                                    </option>
                                @endforeach
                            </select>
                            <div class="form-text">Select the degree this major belongs to.</div>
                            @error('degree_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-success">
                                <i class="fas fa-save"></i> Update
                            </button>
                            <a href="{{ route('admin.majors.index') }}" class="btn btn-secondary">
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
