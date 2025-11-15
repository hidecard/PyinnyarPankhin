@extends('admin.layout')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Sub-Subjects</h3>
                    <a href="{{ route('admin.sub-subjects.create') }}" class="btn btn-primary float-right">Add New Sub-Subject</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Subject</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Remark</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($subSubjects as $subSubject)
                            <tr>
                                <td>{{ $subSubject->id }}</td>
                                <td>{{ $subSubject->subject->name }}</td>
                                <td>{{ $subSubject->name }}</td>
                                <td>
                                    <span class="badge badge-{{ $subSubject->status == 'active' ? 'success' : 'secondary' }}">
                                        {{ ucfirst($subSubject->status) }}
                                    </span>
                                </td>
                                <td>{{ $subSubject->remark }}</td>
                                <td>
                                    <a href="{{ route('admin.sub-subjects.show', $subSubject) }}" class="btn btn-info btn-sm">View</a>
                                    <a href="{{ route('admin.sub-subjects.edit', $subSubject) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('admin.sub-subjects.destroy', $subSubject) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="text-center">No sub-subjects found.</td>
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
