@extends('admin.layout')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Sub-Subject Details</h3>
                    <a href="{{ route('admin.sub-subjects.index') }}" class="btn btn-secondary float-right">Back to Sub-Subjects</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>ID</th>
                            <td>{{ $subSubject->id }}</td>
                        </tr>
                        <tr>
                            <th>Subject</th>
                            <td>{{ $subSubject->subject->name }}</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>{{ $subSubject->name }}</td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>
                                <span class="badge badge-{{ $subSubject->status == 'active' ? 'success' : 'secondary' }}">
                                    {{ ucfirst($subSubject->status) }}
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <th>Remark</th>
                            <td>{{ $subSubject->remark }}</td>
                        </tr>
                        <tr>
                            <th>Created At</th>
                            <td>{{ $subSubject->created_at->format('Y-m-d H:i:s') }}</td>
                        </tr>
                        <tr>
                            <th>Updated At</th>
                            <td>{{ $subSubject->updated_at->format('Y-m-d H:i:s') }}</td>
                        </tr>
                    </table>
                    <div class="mt-3">
                        <a href="{{ route('admin.sub-subjects.edit', $subSubject) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.sub-subjects.destroy', $subSubject) }}" method="POST" style="display: inline;">
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
