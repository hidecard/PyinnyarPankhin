@extends('admin.layout')

@section('title', 'Add Tuition Fee')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 style="color: #FF7300;"><i class="fas fa-dollar-sign me-2" style="color: #FF7300;"></i>Add Tuition Fee</h1>
        <a href="{{ route('admin.tuitions.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Back
        </a>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.tuitions.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="degree_id" class="form-label">Degree <span class="text-danger">*</span></label>
                            <select class="form-select @error('degree_id') is-invalid @enderror"
                                    id="degree_id" name="degree_id" required>
                                <option value="">Select Degree</option>
                                @foreach($degrees as $degree)
                                    <option value="{{ $degree->id }}" {{ old('degree_id') == $degree->id ? 'selected' : '' }}>
                                        {{ $degree->degree_name }}
                                    </option>
                                @endforeach
                            </select>
                            <div class="form-text">Select the degree program for this tuition fee.</div>
                            @error('degree_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="fees" class="form-label">Fees ($) <span class="text-danger">*</span></label>
                            <input type="number" step="0.01" class="form-control @error('fees') is-invalid @enderror"
                                   id="fees" name="fees" value="{{ old('fees') }}" required min="0">
                            <div class="form-text">Enter the tuition fee amount in dollars.</div>
                            @error('fees')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-success">
                                <i class="fas fa-save"></i> Save
                            </button>
                            <a href="{{ route('admin.tuitions.index') }}" class="btn btn-secondary">
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
