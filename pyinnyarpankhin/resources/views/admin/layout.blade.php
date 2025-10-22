<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Admin Dashboard') - Pyinnyar Pankhin</title>
    <link rel="stylesheet" href="{{ asset('assets/css/admin-style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.css" rel="stylesheet">
</head>
<body>
    <!-- sidebar start -->
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
                <a href="{{ route('admin.users.index') }}">
                    <i class="fas fa-users-cog"></i>
                    <span>User Management</span>
                </a>
            </li>

            <li>
                <a href="{{ route('admin.roles.index') }}">
                    <i class="fas fa-user-shield"></i>
                    <span>Role Management</span>
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

    <!-- Main Content start-->
    <div class="main-content">
        <div class="header">
            <h1 style="color: #FF7300;"><i class="fas fa-tachometer-alt me-2" style="color: #FF7300;"></i> @yield('title', 'Dashboard')</h1>
            <div class="user-info">
                <span>{{ Auth::user()->name ?? 'Admin User' }}</span>
            </div>
        </div>

        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
    <script>
        // Initialize sidebar submenu toggle
        document.querySelectorAll('.has-submenu > a').forEach(item => {
            item.addEventListener('click', function(e) {
                e.preventDefault();
                const submenu = this.parentElement.querySelector('.sidebar-submenu');
                this.parentElement.classList.toggle('active');
            });
        });
    </script>
</body>
</html>
