@extends('admin.layout')

@section('title', 'Edit Role')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Role: {{ $role->name }}</h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.roles.index') }}" class="btn btn-secondary btn-sm">
                            <i class="fas fa-arrow-left"></i> Back
                        </a>
                    </div>
                </div>
                <form action="{{ route('admin.roles.update', $role) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Role Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                   id="name" name="name" value="{{ old('name', $role->name) }}" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror"
                                      id="description" name="description" rows="3">{{ old('description', $role->description) }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Permissions</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="permissions[]" value="manage_users" id="manage_users"
                                               {{ in_array('manage_users', old('permissions', $role->permissions ?? [])) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="manage_users">
                                            Manage Users
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="permissions[]" value="manage_roles" id="manage_roles"
                                               {{ in_array('manage_roles', old('permissions', $role->permissions ?? [])) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="manage_roles">
                                            Manage Roles
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="permissions[]" value="manage_content" id="manage_content"
                                               {{ in_array('manage_content', old('permissions', $role->permissions ?? [])) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="manage_content">
                                            Manage Content
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="permissions[]" value="view_reports" id="view_reports"
                                               {{ in_array('view_reports', old('permissions', $role->permissions ?? [])) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="view_reports">
                                            View Reports
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="permissions[]" value="manage_settings" id="manage_settings"
                                               {{ in_array('manage_settings', old('permissions', $role->permissions ?? [])) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="manage_settings">
                                            Manage Settings
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="permissions[]" value="view_students" id="view_students"
                                               {{ in_array('view_students', old('permissions', $role->permissions ?? [])) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="view_students">
                                            View Students
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> Update Role
                        </button>
                        <a href="{{ route('admin.roles.index') }}" class="btn btn-secondary">
                            Cancel
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
