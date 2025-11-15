@extends('admin.layout')

@section('title', 'Tuition Fees')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 style="color: #FF7300;"><i class="fas fa-dollar-sign me-2" style="color: #FF7300;"></i>Tuition Fees</h1>
        <a href="{{ route('admin.tuitions.create') }}" class="btn btn-success">
            <i class="fas fa-plus"></i> Add Tuition Fee
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Degree</th>
                            <th>Fees ($)</th>
                            <th>Created At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($tuitions as $tuition)
                            <tr>
                                <td>{{ $tuition->id }}</td>
                                <td>{{ $tuition->degree->degree_name }}</td>
                                <td>${{ number_format($tuition->fees, 2) }}</td>
                                <td>{{ $tuition->created_at->format('M d, Y') }}</td>
                                <td>
                                    <a href="{{ route('admin.tuitions.show', $tuition) }}" class="btn btn-sm btn-info">
                                        <i class="fas fa-eye"></i> View
                                    </a>
                                    <a href="{{ route('admin.tuitions.edit', $tuition) }}" class="btn btn-sm btn-warning">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <form action="{{ route('admin.tuitions.destroy', $tuition) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
                                            <i class="fas fa-trash"></i> Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">No tuition fees found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
