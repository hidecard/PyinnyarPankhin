@extends('admin.layout')

@section('title', 'User Management')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">User Management</h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.users.create') }}" class="btn btn-primary btn-sm">
                            <i class="fas fa-plus"></i> Add User
                        </a>
                    </div>
                </div>
                <div class="card-body">

        <div class="container-fluid">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3 style="color: #6C3428;">All Users</h3>
                <a href="{{ route('admin.users.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Add New User
                </a>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="color: #6C3428;">ID</th>
                                    <th style="color: #6C3428;">Name</th>
                                    <th style="color: #6C3428;">Email</th>
                                    <th style="color: #6C3428;">Role</th>
                                    <th style="color: #6C3428;">Created At</th>
                                    <th style="color: #6C3428;">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td style="color: #6C3428;">{{ $user->id }}</td>
                                    <td style="color: #6C3428;">{{ $user->name }}</td>
                                    <td style="color: #6C3428;">{{ $user->email }}</td>
                                    <td>
                                        <span class="badge bg-{{ $user->hasRole('admin') ? 'danger' : ($user->hasRole('teacher') ? 'warning' : 'primary') }}">
                                            {{ ucfirst($user->roles->first()->name ?? 'No Role') }}
                                        </span>
                                    </td>
                                    <td style="color: #6C3428;">{{ $user->created_at->format('M d, Y') }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ route('admin.users.show', $user) }}" class="btn btn-sm btn-info">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-sm btn-primary">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            @if($user->id !== auth()->id())
                                            <form action="{{ route('admin.users.destroy', $user) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger"
                                                        onclick="return confirm('Are you sure you want to delete this user?')">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    @if($users->isEmpty())
                    <div class="text-center py-4">
                        <p style="color: #6C3428;">No users found.</p>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
