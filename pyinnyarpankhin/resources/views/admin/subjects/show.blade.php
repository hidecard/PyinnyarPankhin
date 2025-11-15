@extends('admin.layout')

@section('content')
<div class="container-fluid">
    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.academic') }}">Academics</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.subjects.index') }}">Subjects</a></li>
            <li class="breadcrumb-item active" aria-current="page">Show</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Subject Details</h3>
                    <a href="{{ route('admin.subjects.index') }}" class="btn btn-secondary float-right">Back to Subjects</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>ID</th>
                            <td>{{ $subject->id }}</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>{{ $subject->name }}</td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>
                                <span class="badge badge-{{ $subject->status == 'active' ? 'success' : 'secondary' }}">
                                    {{ ucfirst($subject->status) }}
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <th>Remark</th>
                            <td>{{ $subject->remark }}</td>
                        </tr>
                        <tr>
                            <th>Created At</th>
                            <td>{{ $subject->created_at->format('Y-m-d H:i:s') }}</td>
                        </tr>
                        <tr>
                            <th>Updated At</th>
                            <td>{{ $subject->updated_at->format('Y-m-d H:i:s') }}</td>
                        </tr>
                    </table>
                    <div class="mt-3">
                        <a href="{{ route('admin.subjects.edit', $subject) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.subjects.destroy', $subject) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
