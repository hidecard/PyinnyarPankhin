<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pyinnyar Pankhin Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('assets/css/admin-style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOM8z4+2e5c7e5a5e5a5e5a5e5a5e5a5e5a5e5a5e5a5e
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.css" rel="stylesheet">
</head>
<body>
    <!-- Sidebar start -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <h3><i class="fas fa-university me-2"></i>Pyinnyar Pankhin</h3>
            <small>Admin Dashboard</small>
        </div>

        <ul class="sidebar-menu">
            <li>
                <a href="{{ route('admin') }}">
                    <i class="fas fa-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li>
                <a href="{{ route('admin.users.index') }}" class="active">
                    <i class="fas fa-users-cog"></i>
                    <span>User Management</span>
                </a>
            </li>

            <li>
                <a href="{{ route('admin.settings') }}">
                    <i class="fas fa-cog"></i>
                    <span>Settings</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- sidebar end -->

    <div class="main-content">
        <div class="header">
            <h2 style="color: #FF7300;"><i class="fas fa-user me-2"></i>User Details</h2>
            <div class="user-profile">
                <span style="color: #FF7300;">{{ Auth::user()->name ?? 'Admin User' }}</span>
            </div>
        </div>

        <div class="container-fluid mt-4">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 style="color: #6C3428;"><i class="fas fa-user-circle me-2"></i>{{ $user->name }}</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" style="color: #6C3428;"><strong>Name:</strong></label>
                                        <p style="color: #6C3428;">{{ $user->name }}</p>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" style="color: #6C3428;"><strong>Email:</strong></label>
                                        <p style="color: #6C3428;">{{ $user->email }}</p>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" style="color: #6C3428;"><strong>Role:</strong></label>
                                        <span class="badge bg-primary">{{ ucfirst($user->role) }}</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" style="color: #6C3428;"><strong>Created At:</strong></label>
                                        <p style="color: #6C3428;">{{ $user->created_at->format('M d, Y H:i') }}</p>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" style="color: #6C3428;"><strong>Last Updated:</strong></label>
                                        <p style="color: #6C3428;">{{ $user->updated_at->format('M d, Y H:i') }}</p>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" style="color: #6C3428;"><strong>Email Verified:</strong></label>
                                        @if($user->email_verified_at)
                                            <span class="badge bg-success">Verified</span>
                                        @else
                                            <span class="badge bg-warning">Not Verified</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 style="color: #6C3428;"><i class="fas fa-cogs me-2"></i>Actions</h4>
                        </div>
                        <div class="card-body">
                            <div class="d-grid gap-2">
                                <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-warning">
                                    <i class="fas fa-edit me-2"></i>Edit User
                                </a>
                                <form action="{{ route('admin.users.destroy', $user) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this user?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger w-100">
                                        <i class="fas fa-trash me-2"></i>Delete User
                                    </button>
                                </form>
                                <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">
                                    <i class="fas fa-arrow-left me-2"></i>Back to Users
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
</body>
</html>
