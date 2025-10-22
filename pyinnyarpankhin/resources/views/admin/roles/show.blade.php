@extends('admin.layout')

@section('title', 'Role Details')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Role Details: {{ $role->name }}</h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.roles.edit', $role) }}" class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <a href="{{ route('admin.roles.index') }}" class="btn btn-secondary btn-sm">
                            <i class="fas fa-arrow-left"></i> Back
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <dl class="row">
                                <dt class="col-sm-4">Name:</dt>
                                <dd class="col-sm-8">{{ $role->name }}</dd>

                                <dt class="col-sm-4">Description:</dt>
                                <dd class="col-sm-8">{{ $role->description ?? 'N/A' }}</dd>

                                <dt class="col-sm-4">Created At:</dt>
                                <dd class="col-sm-8">{{ $role->created_at->format('M d, Y H:i') }}</dd>

                                <dt class="col-sm-4">Updated At:</dt>
                                <dd class="col-sm-8">{{ $role->updated_at->format('M d, Y H:i') }}</dd>
                            </dl>
                        </div>
                        <div class="col-md-6">
                            <h5>Permissions:</h5>
                            @if($role->permissions && count($role->permissions) > 0)
                                <ul class="list-group">
                                    @foreach($role->permissions as $permission)
                                        <li class="list-group-item">{{ ucwords(str_replace('_', ' ', $permission)) }}</li>
                                    @endforeach
                                </ul>
                            @else
                                <p class="text-muted">No permissions assigned.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mt-3">
                <div class="card-header">
                    <h3 class="card-title">Users with this Role ({{ $role->users->count() }})</h3>
                </div>
                <div class="card-body">
                    @if($role->users->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-sm table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($role->users as $user)
                                        <tr>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                <a href="{{ route('admin.users.show', $user) }}" class="btn btn-info btn-sm">
                                                    <i class="fas fa-eye"></i> View
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <p class="text-muted">No users assigned to this role.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
