@extends('admin.layout')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Subjects</h3>
                    <a href="{{ route('admin.subjects.create') }}" class="btn btn-primary float-right">Add New Subject</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Remark</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($subjects as $subject)
                            <tr>
                                <td>{{ $subject->id }}</td>
                                <td>{{ $subject->name }}</td>
                                <td>
                                    <span class="badge badge-{{ $subject->status == 'active' ? 'success' : 'secondary' }}">
                                        {{ ucfirst($subject->status) }}
                                    </span>
                                </td>
                                <td>{{ $subject->remark }}</td>
                                <td>
                                    <a href="{{ route('admin.subjects.show', $subject) }}" class="btn btn-info btn-sm">View</a>
                                    <a href="{{ route('admin.subjects.edit', $subject) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('admin.subjects.destroy', $subject) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="text-center">No subjects found.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
