<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pyinnyar Pankhin Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('assets/css/admin-style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOM8z4+2e5c7e5a5e5a5e5a5e5a5e5a5e5a5e
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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

            <li class="has-submenu">
                <a href="">
                    <i class="fas fa-graduation-cap"></i>
                    <span>Academic</span>
                    <i class="fas fa-angle-down ms-auto"></i>
                </a>
                <ul class="sidebar-submenu">
                    <li><a href="{{ route('admin.academic') }}" id="navDegree">Degree Programs</a></li>
                    <li><a href="{{ route('admin.academic') }}" id="navMajor">Majors</a></li>
                    <li><a href="{{ route('admin.academic') }}" id="navDepartment">Departments</a></li>
                    <li><a href="{{ route('admin.academic') }}" id="navFaculty">Faculties</a></li>
                </ul>
            </li>

            <li>
                <a href="{{ route('admin.students') }}" class="active">
                    <i class="fas fa-users"></i>
                    <span>Students</span>
                </a>
            </li>

            <li class="has-submenu">
                <a href="{{ route('admin') }}#calendar">
                    <i class="fas fa-calendar-alt"></i>
                    <span>Academic Calendar</span>
                    <i class="fas fa-angle-down ms-auto"></i>
                </a>
                <ul class="sidebar-submenu">
                    <li><a href="{{ route('admin') }}#calendar">Events</a></li>
                    <li><a href="{{ route('admin') }}#calendar">Holidays</a></li>
                    <li><a href="{{ route('admin') }}#calendar">Exam Schedule</a></li>
                </ul>
            </li>

            <li class="has-submenu">
                <a href="{{ route('admin.reports') }}">
                    <i class="fas fa-file-alt"></i>
                    <span>Reports</span>
                    <i class="fas fa-angle-down ms-auto"></i>
                </a>
                <ul class="sidebar-submenu">
                    <li><a href="{{ route('admin.reports') }}">Enrollment Reports</a></li>
                    <li><a href="{{ route('admin.reports') }}">Grade Reports</a></li>
                    <li><a href="{{ route('admin.reports') }}">Faculty Workload</a></li>
                    <li><a href="{{ route('admin.reports') }}">Financial Reports</a></li>
                </ul>
            </li>

            <li>
                <a href="{{ route('admin.settings') }}">
                    <i class="fas fa-cog"></i>
                    <span>Settings</span>
                </a>
            </li>
        </ul>
    </div>

    <div class="main-content">
        <div class="header">
            <h1 style="color: #FF7300;"><i class="fas fa-users me-2"></i>Student Management</h1>
            <div class="user-info">
                <span style="color: #FF7300;">{{ Auth::user()->name ?? 'Admin User' }}</span>
            </div>
        </div>

        <!-- Dashboard Cards -->
        <div class="dashboard-cards mb-4">
            <div class="card stats-card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <div class="card-title">Total Students</div>
                            <div class="card-value">2,450</div>
                            <small class="text-white">+5% from last year</small>
                        </div>
                        <div class="card-icon">
                            <i class="fas fa-users fa-3x"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card stats-card" style="background: linear-gradient(135deg, #28a745 0%, #20c997 100%);">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <div class="card-title">New Admissions</div>
                            <div class="card-value">187</div>
                            <small class="text-white">This semester</small>
                        </div>
                        <div class="card-icon">
                            <i class="fas fa-user-plus fa-3x"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card stats-card" style="background: linear-gradient(135deg, #ffc107 0%, #fd7e14 100%);">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <div class="card-title">Graduating</div>
                            <div class="card-value">320</div>
                            <small class="text-white">This year</small>
                        </div>
                        <div class="card-icon">
                            <i class="fas fa-user-graduate fa-3x"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card stats-card" style="background: linear-gradient(135deg, #dc3545 0%, #e83e8c 100%);">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <div class="card-title">At Risk</div>
                            <div class="card-value">45</div>
                            <small class="text-white">Need intervention</small>
                        </div>
                        <div class="card-icon">
                            <i class="fas fa-exclamation-circle fa-3x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Student Search and Filters -->
        <div class="card mb-4">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="card-title" style="color: #FF7300;"><i class="fas fa-search me-2"></i>Student Search & Filters</h5>
                    <button class="btn btn-primary" onclick="openStudentModal()">
                        <i class="fas fa-plus me-1"></i> Add Student
                    </button>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="searchInput" style="color: #6C3428;">Search</label>
                            <input type="text" class="form-control" id="searchInput" placeholder="Search by name or ID" style="color: #6C3428;">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="departmentFilter" style="color: #6C3428;">Department</label>
                            <select class="form-control" id="departmentFilter" style="color: #6C3428;">
                                <option>All Departments</option>
                                <option>Computer Science</option>
                                <option>Mathematics</option>
                                <option>Physics</option>
                                <option>English</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="yearFilter" style="color: #6C3428;">Year</label>
                            <select class="form-control" id="yearFilter" style="color: #6C3428;">
                                <option>All Years</option>
                                <option>First Year</option>
                                <option>Second Year</option>
                                <option>Third Year</option>
                                <option>Fourth Year</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label style="color: #6C3428;">&nbsp;</label>
                            <button class="btn btn-primary w-100" id="filterBtn">Filter</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Student Management Table -->
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0" style="color: #6C3428;"><i class="fas fa-table me-2"></i>Student Records</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table data-table">
                        <thead>
                            <tr>
                                <th style="color: #6C3428;">Student ID</th>
                                <th style="color: #6C3428;">Name</th>
                                <th style="color: #6C3428;">Department</th>
                                <th style="color: #6C3428;">Year</th>
                                <th style="color: #6C3428;">Status</th>
                                <th style="color: #6C3428;">GPA</th>
                                <th style="color: #6C3428;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="color: #6C3428;">20230045</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets/images/user3.jpg') }}" alt="Student" class="rounded-circle me-2" width="30" height="30">
                                        <span style="color: #6C3428;">John Doe</span>
                                    </div>
                                </td>
                                <td style="color: #6C3428;">Computer Science</td>
                                <td style="color: #6C3428;">Third Year</td>
                                <td><span class="badge bg-success">Active</span></td>
                                <td style="color: #6C3428;">3.75</td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-outline-primary" title="View"><i class="fas fa-eye"></i></button>
                                        <button class="btn btn-sm btn-outline-warning" title="Edit"><i class="fas fa-edit"></i></button>
                                        <button class="btn btn-sm btn-outline-danger" title="Delete"><i class="fas fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="color: #6C3428;">20230128</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets/images/user 2.jpg') }}" alt="Student" class="rounded-circle me-2" width="30" height="30">
                                        <span style="color: #6C3428;">Jane Smith</span>
                                    </div>
                                </td>
                                <td style="color: #6C3428;">Mathematics</td>
                                <td style="color: #6C3428;">Second Year</td>
                                <td><span class="badge bg-success">Active</span></td>
                                <td style="color: #6C3428;">3.92</td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-outline-primary" title="View"><i class="fas fa-eye"></i></button>
                                        <button class="btn btn-sm btn-outline-warning" title="Edit"><i class="fas fa-edit"></i></button>
                                        <button class="btn btn-sm btn-outline-danger" title="Delete"><i class="fas fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="color: #6C3428;">20230217</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets/images/user4.jpg') }}" alt="Student" class="rounded-circle me-2" width="30" height="30">
                                        <span style="color: #6C3428;">Robert Johnson</span>
                                    </div>
                                </td>
                                <td style="color: #6C3428;">Physics</td>
                                <td style="color: #6C3428;">Fourth Year</td>
                                <td><span class="badge bg-warning">Probation</span></td>
                                <td style="color: #6C3428;">2.15</td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-outline-primary" title="View"><i class="fas fa-eye"></i></button>
                                        <button class="btn btn-sm btn-outline-warning" title="Edit"><i class="fas fa-edit"></i></button>
                                        <button class="btn btn-sm btn-outline-danger" title="Delete"><i class="fas fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="color: #6C3428;">20230389</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets/images/user 1.jpg') }}" alt="Student" class="rounded-circle me-2" width="30" height="30">
                                        <span style="color: #6C3428;">Emily Wilson</span>
                                    </div>
                                </td>
                                <td style="color: #6C3428;">English</td>
                                <td style="color: #6C3428;">First Year</td>
                                <td><span class="badge bg-success">Active</span></td>
                                <td style="color: #6C3428;">3.45</td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-outline-primary" title="View"><i class="fas fa-eye"></i></button>
                                        <button class="btn btn-sm btn-outline-warning" title="Edit"><i class="fas fa-edit"></i></button>
                                        <button class="btn btn-sm btn-outline-danger" title="Delete"><i class="fas fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="color: #6C3428;">20230456</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets/images/user5.jpg') }}" alt="Student" class="rounded-circle me-2" width="30" height="30">
                                        <span style="color: #6C3428;">Michael Brown</span>
                                    </div>
                                </td>
                                <td style="color: #6C3428;">Computer Science</td>
                                <td style="color: #6C3428;">Second Year</td>
                                <td><span class="badge bg-danger">Inactive</span></td>
                                <td style="color: #6C3428;">1.89</td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-outline-primary" title="View"><i class="fas fa-eye"></i></button>
                                        <button class="btn btn-sm btn-outline-warning" title="Edit"><i class="fas fa-edit"></i></button>
                                        <button class="btn btn-sm btn-outline-danger" title="Delete"><i class="fas fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">
                <nav aria-label="Table navigation">
                    <ul class="pagination justify-content-center mb-0">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <!-- Student Profile Preview -->
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0" style="color: #6C3428;"><i class="fas fa-user me-2"></i>Student Profile Preview</h5>
                    </div>
                    <div class="card-body">
                        <div class="student-profile">
                            <img src="{{ asset('assets/images/user3.jpg') }}" alt="Student" class="profile-image mb-3">
                            <div class="profile-details">
                                <h4 class="profile-name" style="color: #6C3428;">John Doe</h4>
                                <div class="profile-id mb-3" style="color: #6C3428;">ID: 20230045</div>
                                <div class="profile-meta">
                                    <div class="meta-item mb-2">
                                        <span class="meta-icon me-2"><i class="fas fa-building"></i></span>
                                        <span style="color: #6C3428;">Computer Science Department</span>
                                    </div>
                                    <div class="meta-item mb-2">
                                        <span class="meta-icon me-2"><i class="fas fa-calendar-alt"></i></span>
                                        <span style="color: #6C3428;">Third Year</span>
                                    </div>
                                    <div class="meta-item mb-2">
                                        <span class="meta-icon me-2"><i class="fas fa-envelope"></i></span>
                                        <span style="color: #6C3428;">john.doe@university.edu</span>
                                    </div>
                                    <div class="meta-item">
                                        <span class="meta-icon me-2"><i class="fas fa-phone"></i></span>
                                        <span style="color: #6C3428;">(555) 123-4567</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0" style="color: #6C3428;"><i class="fas fa-chart-line me-2"></i>Academic Performance</h5>
                    </div>
                    <div class="card-body">
                        <canvas id="performanceChart" height="200"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Current Courses -->
        <div class="card mt-4">
            <div class="card-header">
                <h5 class="mb-0" style="color: #6C3428;"><i class="fas fa-book me-2"></i>Current Courses</h5>
            </div>
            <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center" style="color: #6C3428;">
                        CS-101 - Introduction to Computer Science
                        <span class="badge bg-primary rounded-pill">A</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center" style="color: #6C3428;">
                        MATH-201 - Calculus II
                        <span class="badge bg-primary rounded-pill">B+</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center" style="color: #6C3428;">
                        PHYS-101 - General Physics
                        <span class="badge bg-primary rounded-pill">A-</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center" style="color: #6C3428;">
                        ENG-101 - English Composition
                        <span class="badge bg-primary rounded-pill">A</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Student Modal -->
    <div id="studentModal" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="color: #6C3428;">Add New Student</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="studentForm">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="firstName" class="form-label" style="color: #6C3428;">First Name</label>
                                    <input type="text" class="form-control" id="firstName" required style="color: #6C3428;">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="lastName" class="form-label" style="color: #6C3428;">Last Name</label>
                                    <input type="text" class="form-control" id="lastName" required style="color: #6C3428;">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="studentId" class="form-label" style="color: #6C3428;">Student ID</label>
                                    <input type="text" class="form-control" id="studentId" required style="color: #6C3428;">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="dob" class="form-label" style="color: #6C3428;">Date of Birth</label>
                                    <input type="date" class="form-control" id="dob" required style="color: #6C3428;">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="department" class="form-label" style="color: #6C3428;">Department</label>
                                    <select class="form-control" id="department" required style="color: #6C3428;">
                                        <option value="">Select Department</option>
                                        <option>Computer Science</option>
                                        <option>Mathematics</option>
                                        <option>Physics</option>
                                        <option>English</option>
                                        <option>Biology</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="year" class="form-label" style="color: #6C3428;">Year</label>
                                    <select class="form-control" id="year" required style="color: #6C3428;">
                                        <option value="">Select Year</option>
                                        <option>First Year</option>
                                        <option>Second Year</option>
                                        <option>Third Year</option>
                                        <option>Fourth Year</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="email" class="form-label" style="color: #6C3428;">Email</label>
                                    <input type="email" class="form-control" id="email" required style="color: #6C3428;">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="phone" class="form-label" style="color: #6C3428;">Phone</label>
                                    <input type="tel" class="form-control" id="phone" required style="color: #6C3428;">
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="address" class="form-label" style="color: #6C3428;">Address</label>
                            <textarea class="form-control" id="address" rows="3" style="color: #6C3428;"></textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label for="photo" class="form-label" style="color: #6C3428;">Student Photo</label>
                            <input type="file" class="form-control" id="photo" style="color: #6C3428;">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" onclick="saveStudent()">Save Student</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>

    <script>
        $(document).ready(function() {
            // Initialize sidebar submenu toggle
            $('.has-submenu > a').on('click', function(e) {
                e.preventDefault();

                // Close other open submenus
                $(this).parent().siblings().removeClass('active').find('.sidebar-submenu').slideUp();

                // Toggle current submenu
                $(this).parent().toggleClass('active');
                $(this).next('.sidebar-submenu').slideToggle();
            });

            // Initialize with active submenu if on that page
            $('.sidebar-menu li.has-submenu').each(function() {
                if ($(this).find('a.active').length) {
                    $(this).addClass('active');
                    $(this).find('.sidebar-submenu').show();
                }
            });

            // Initialize Performance Chart
            const performanceCtx = document.getElementById('performanceChart').getContext('2d');
            const performanceChart = new Chart(performanceCtx, {
                type: 'bar',
                data: {
                    labels: ['Semester 1', 'Semester 2', 'Semester 3', 'Semester 4', 'Semester 5'],
                    datasets: [{
                        label: 'GPA',
                        data: [3.2, 3.5, 3.7, 3.6, 3.8],
                        backgroundColor: '#FF7300',
                        borderColor: '#FF7300',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: false,
                            min: 2.0,
                            max: 4.0
                        }
                    }
                }
            });

            // Filter functionality
            $('#filterBtn').click(function() {
                // Implement filtering logic here
                alert('Filter applied!');
            });

            // Search functionality
            $('#searchInput').on('keyup', function() {
                const value = $(this).val().toLowerCase();
                $('.data-table tbody tr').filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
                });
            });
        });

        // Student Modal Functions
        function openStudentModal() {
            $('#studentModal').modal('show');
        }

        function saveStudent() {
            // Here you would typically save the student data to your backend
            alert('Student saved successfully!');
            $('#studentModal').modal('hide');
            // Reset form
            document.getElementById('studentForm').reset();
        }
    </script>
</body>
</html>
