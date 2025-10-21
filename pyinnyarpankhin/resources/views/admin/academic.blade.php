<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pyinnyar Pankhin Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('assets/css/admin-style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOM8z4+2e5c7e5a5e5a5e5a5e5a5e5a5e5a5e5a5e
    crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                <a href="{{ route('admin') }}#students">
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
                <a href="{{ route('admin') }}#reports">
                    <i class="fas fa-file-alt"></i>
                    <span>Reports</span>
                    <i class="fas fa-angle-down ms-auto"></i>
                </a>
                <ul class="sidebar-submenu">
                    <li><a href="{{ route('admin') }}#reports">Enrollment Reports</a></li>
                    <li><a href="{{ route('admin') }}#reports">Grade Reports</a></li>
                    <li><a href="{{ route('admin') }}#reports">Faculty Workload</a></li>
                    <li><a href="{{ route('admin') }}#reports">Financial Reports</a></li>
                </ul>
            </li>

            <li>
                <a href="{{ route('admin') }}#settings">
                    <i class="fas fa-cog"></i>
                    <span>Settings</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- sidebar end -->

    <!-- Main Content start-->
    <div class="main-content" id="mainContent">
        <!-- Header -->
        <div class="header">
            <h1 style="color: #FF7300;"><i class="fas fa-tachometer-alt me-2" style="color: #FF7300;"></i> Academics Overview</h1>
            <div class="user-info">
                <span style="color: #FF7300;">{{ Auth::user()->name ?? 'Admin User' }}</span>
            </div>
        </div>

        <div class="container mb-5">
            <!-- Main Cards -->
            <div class="row">
                <!-- Degree Management Card -->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="card management-card degree-card">
                        <div class="card-body text-center">
                            <div class="card-icon">
                                <i class="fas fa-graduation-cap" style="color: #3498db;"></i>
                            </div>
                            <h3 class="card-title" style="color: #3498db;">Degree Programs</h3>
                            <p class="card-text" style="color: #6C3420;">Manage all degree programs offered by the university</p>
                            <div class="mt-4">
                                <button class="btn btn-primary action-btn" style="background-color: var(--degree-color); border-color: var(--degree-color);" data-bs-toggle="modal" data-bs-target="#addDegreeModal">
                                    <i class="fas fa-plus"></i> Add Degree
                                </button>
                                <button class="btn btn-outline-primary action-btn view-degrees-btn" style="border-color: var(--degree-color); color: var(--degree-color);">
                                    <i class="fas fa-list"></i> View All
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Duration Management Card -->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="card management-card duration-card">
                        <div class="card-body text-center">
                            <div class="card-icon">
                                <i class="fas fa-clock" style="color: #2ecc71;"></i>
                            </div>
                            <h3 class="card-title" style="color: #2ecc71;">Program Duration</h3>
                            <p class="card-text" style="color: #6C3420;">Configure duration settings for academic programs</p>
                            <div class="mt-4">
                                <button class="btn btn-success action-btn" style="background-color: var(--duration-color); border-color: var(--duration-color);" data-bs-toggle="modal" data-bs-target="#addDurationModal">
                                    <i class="fas fa-cog"></i> Configure
                                </button>
                                <button class="btn btn-outline-success action-btn view-durations-btn" style="border-color: var(--duration-color); color: var(--duration-color);">
                                    <i class="fas fa-chart-bar"></i> Reports
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Major Management Card -->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="card management-card major-card">
                        <div class="card-body text-center">
                            <div class="card-icon">
                                <i class="fas fa-book" style="color: #6C3420;"></i>
                            </div>
                            <h3 class="card-title" style="color: #6C3420;">Majors</h3>
                            <p class="card-text" style="color: #6C3420;">Manage all academic majors and specializations</p>
                            <div class="mt-4">
                                <button class="btn btn-danger action-btn" style="background-color: var(--major-color); border-color: var(--major-color);" data-bs-toggle="modal" data-bs-target="#addMajorModal">
                                    <i class="fas fa-plus"></i> Add Major
                                </button>
                                <button class="btn btn-outline-danger action-btn view-majors-btn" style="border-color: var(--major-color); color: var(--major-color);">
                                    <i class="fas fa-search"></i> Search
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Department Management Card -->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="card management-card department-card">
                        <div class="card-body text-center">
                            <div class="card-icon">
                                <i class="fas fa-building" style="color: #FF7300;"></i>
                            </div>
                            <h3 class="card-title" style="color: #FF7300;">Departments</h3>
                            <p class="card-text" style="color: #6C3420;">Manage academic departments and their configurations</p>
                            <div class="mt-4">
                                <button class="btn btn-warning action-btn" style="color: aliceblue; background-color: var(--department-color); border-color: var(--department-color);" data-bs-toggle="modal" data-bs-target="#addDepartmentModal">
                                    <i class="fas fa-edit"></i> Manage
                                </button>
                                <button class="btn btn-outline-warning action-btn view-departments-btn" style="border-color: var(--department-color); color: var(--department-color);">
                                    <i class="fas fa-users"></i> Staff
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Faculty Management Card -->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="card management-card faculty-card">
                        <div class="card-body text-center">
                            <div class="card-icon">
                                <i class="fas fa-university" style="color: #9b59b6;"></i>
                            </div>
                            <h3 class="card-title" style="color: #9b59b6;">Faculties</h3>
                            <p class="card-text" style="color: #6C3420;">Manage university faculties and their structure</p>
                            <div class="mt-4">
                                <button class="btn action-btn" style="background-color: var(--faculty-color); border-color: var(--faculty-color); color: white;" data-bs-toggle="modal" data-bs-target="#addFacultyModal">
                                    <i class="fas fa-plus"></i> Add Faculty
                                </button>
                                <button class="btn btn-outline-secondary action-btn view-faculties-btn">
                                    <i class="fas fa-sitemap"></i> Structure
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Stats Card -->
                <div class="col-md-6 col-lg-4">
                    <div class="card stats-card shadow-sm">
                        <div class="card-body text-center">
                            <div class="card-icon">
                                <i class="fas fa-chart-pie"></i>
                            </div>
                            <h3 class="card-title">Quick Stats</h3>
                            <div class="row text-center mt-3">
                                <div class="col-6 mb-3">
                                    <div class="p-3 bg-white bg-opacity-10 rounded">
                                        <h4 class="mb-0" id="degrees-count">0</h4>
                                        <small>Degrees</small>
                                    </div>
                                </div>
                                <div class="col-6 mb-3">
                                    <div class="p-3 bg-white bg-opacity-10 rounded">
                                        <h4 class="mb-0" id="majors-count">0</h4>
                                        <small>Majors</small>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="p-3 bg-white bg-opacity-10 rounded">
                                        <h4 class="mb-0" id="departments-count">0</h4>
                                        <small>Departments</small>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="p-3 bg-white bg-opacity-10 rounded">
                                        <h4 class="mb-0" id="faculties-count">0</h4>
                                        <small>Faculties</small>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="#" class="btn btn-light action-btn" id="view-analytics-btn" style="color: #6C3420;">
                                    <i class="fas fa-chart-line me-1" style="color: #6C3420;"></i> View Analytics
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Data Tables Section (hidden by default) -->
        <div class="container mb-5" id="dataTablesSection" style="display: none;">
            <div class="card shadow-sm">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0" id="tableTitle">Data Table</h5>
                    <button type="button" class="btn-close" id="closeTableBtn"></button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="data-table" id="dataTable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Details</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody id="tableBody">
                                <!-- Data will be inserted here by JavaScript -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modals for Data Entry -->
        <!-- Add Degree Modal -->
        <div class="modal fade" id="addDegreeModal" tabindex="-1" aria-labelledby="addDegreeModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" style="--modal-color: var(--degree-color); background-color: var(--degree-color);">
                        <h5 class="modal-title" id="addDegreeModalLabel"><i class="fas fa-graduation-cap me-2"></i>Add New Degree</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="addDegreeForm">
                            <div class="mb-3">
                                <label for="degreeName" class="form-label">Degree Name *</label>
                                <input type="text" class="form-control" id="degreeName" placeholder="e.g., Bachelor of Science" required>
                                <div class="invalid-feedback">Please provide a degree name.</div>
                            </div>
                            <div class="mb-3">
                                <label for="degreeDuration" class="form-label">Duration (Years) *</label>
                                <input type="number" class="form-control" id="degreeDuration" placeholder="e.g., 4" min="1" required>
                                <div class="invalid-feedback">Please provide a valid duration.</div>
                            </div>
                            <div class="mb-3">
                                <label for="degreeDescription" class="form-label">Description</label>
                                <textarea class="form-control" id="degreeDescription" rows="3" placeholder="Brief description of the degree program"></textarea>
                            </div>
                            <button type="submit" class="btn action-btn" style="background-color: var(--degree-color); border-color: var(--degree-color); color: white;">Save Degree</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add Duration Modal -->
        <div class="modal fade" id="addDurationModal" tabindex="-1" aria-labelledby="addDurationModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" style="--modal-color: var(--duration-color); background-color: var(--duration-color);">
                        <h5 class="modal-title" id="addDurationModalLabel"><i class="fas fa-clock me-2"></i>Configure Program Duration</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="addDurationForm">
                            <div class="mb-3">
                                <label for="durationDegree" class="form-label">Degree Program *</label>
                                <input type="text" class="form-control" id="durationDegree" placeholder="e.g., Bachelor of Science" required>
                                <div class="invalid-feedback">Please provide a degree program.</div>
                            </div>
                            <div class="mb-3">
                                <label for="durationYears" class="form-label">Duration (Years) *</label>
                                <input type="number" class="form-control" id="durationYears" placeholder="e.g., 4" min="1" required>
                                <div class="invalid-feedback">Please provide a valid duration.</div>
                            </div>
                            <div class="mb-3">
                                <label for="durationNotes" class="form-label">Notes</label>
                                <textarea class="form-control" id="durationNotes" rows="3" placeholder="Additional notes about duration"></textarea>
                            </div>
                            <button type="submit" class="btn action-btn" style="background-color: var(--duration-color); border-color: var(--duration-color); color: white;">Save Duration</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add Major Modal -->
        <div class="modal fade" id="addMajorModal" tabindex="-1" aria-labelledby="addMajorModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" style="--modal-color: var(--major-color); background-color: var(--major-color);">
                        <h5 class="modal-title" id="addMajorModalLabel"><i class="fas fa-book me-2"></i>Add New Major</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="addMajorForm">
                            <div class="mb-3">
                                <label for="majorName" class="form-label">Major Name *</label>
                                <input type="text" class="form-control" id="majorName" placeholder="e.g., Computer Science" required>
                                <div class="invalid-feedback">Please provide a major name.</div>
                            </div>
                            <div class="mb-3">
                                <label for="majorDepartment" class="form-label">Department *</label>
                                <input type="text" class="form-control" id="majorDepartment" placeholder="e.g., Engineering" required>
                                <div class="invalid-feedback">Please provide a department.</div>
                            </div>
                            <div class="mb-3">
                                <label for="majorDescription" class="form-label">Description</label>
                                <textarea class="form-control" id="majorDescription" rows="3" placeholder="Brief description of the major"></textarea>
                            </div>
                            <button type="submit" class="btn action-btn" style="background-color: var(--major-color); border-color: var(--major-color); color: white;">Save Major</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add Department Modal -->
        <div class="modal fade" id="addDepartmentModal" tabindex="-1" aria-labelledby="addDepartmentModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" style="--modal-color: var(--department-color); background-color: var(--department-color);">
                        <h5 class="modal-title" id="addDepartmentModalLabel"><i class="fas fa-building me-2"></i>Add New Department</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="addDepartmentForm">
                            <div class="mb-3">
                                <label for="departmentName" class="form-label">Department Name *</label>
                                <input type="text" class="form-control" id="departmentName" placeholder="e.g., Engineering" required>
                                <div class="invalid-feedback">Please provide a department name.</div>
                            </div>
                            <div class="mb-3">
                                <label for="departmentFaculty" class="form-label">Faculty *</label>
                                <input type="text" class="form-control" id="departmentFaculty" placeholder="e.g., Faculty of Science" required>
                                <div class="invalid-feedback">Please provide a faculty.</div>
                            </div>
                            <div class="mb-3">
                                <label for="departmentHead" class="form-label">Department Head</label>
                                <input type="text" class="form-control" id="departmentHead" placeholder="e.g., Dr. John Doe">
                            </div>
                            <button type="submit" class="btn action-btn" style="background-color: var(--department-color); border-color: var(--department-color); color: white;">Save Department</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add Faculty Modal -->
        <div class="modal fade" id="addFacultyModal" tabindex="-1" aria-labelledby="addFacultyModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" style="--modal-color: var(--faculty-color); background-color: var(--faculty-color);">
                        <h5 class="modal-title" id="addFacultyModalLabel"><i class="fas fa-university me-2"></i>Add New Faculty</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="addFacultyForm">
                            <div class="mb-3">
                                <label for="facultyName" class="form-label">Faculty Name *</label>
                                <input type="text" class="form-control" id="facultyName" placeholder="e.g., Faculty of Science" required>
                                <div class="invalid-feedback">Please provide a faculty name.</div>
                            </div>
                            <div class="mb-3">
                                <label for="facultyDean" class="form-label">Dean</label>
                                <input type="text" class="form-control" id="facultyDean" placeholder="e.g., Prof. Jane Smith">
                            </div>
                            <div class="mb-3">
                                <label for="facultyDescription" class="form-label">Description</label>
                                <textarea class="form-control" id="facultyDescription" rows="3" placeholder="Brief description of the faculty"></textarea>
                            </div>
                            <button type="submit" class="btn action-btn" style="background-color: var(--faculty-color); border-color: var(--faculty-color); color: white;">Save Faculty</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main content end -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Data storage object
            const universityData = {
                degrees: [],
                durations: [],
                majors: [],
                departments: [],
                faculties: [],

                // Initialize with some sample data if empty
                initSampleData: function() {
                    if(this.degrees.length === 0) {
                        this.degrees = [
                            {id: 1, name: "Bachelor of Science", duration: 4, description: "Undergraduate science degree"},
                            {id: 2, name: "Master of Arts", duration: 2, description: "Graduate arts degree"}
                        ];
                    }
                    if(this.majors.length === 0) {
                        this.majors = [
                            {id: 1, name: "Computer Science", department: "Computer Science", description: "Study of computation and information"},
                            {id: 2, name: "Physics", department: "Physics", description: "Study of matter and energy"}
                        ];
                    }
                    if(this.departments.length === 0) {
                        this.departments = [
                            {id: 1, name: "Computer Science", faculty: "Faculty of Science", head: "Dr. Smith"},
                            {id: 2, name: "Physics", faculty: "Faculty of Science", head: "Dr. Johnson"}
                        ];
                    }
                    if(this.faculties.length === 0) {
                        this.faculties = [
                            {id: 1, name: "Faculty of Science", dean: "Prof. Williams", description: "Science faculty"},
                            {id: 2, name: "Faculty of Arts", dean: "Prof. Brown", description: "Arts faculty"}
                        ];
                    }
                    if(this.durations.length === 0) {
                        this.durations = [
                            {id: 1, degree: "Bachelor of Science", years: 4, notes: "Standard duration"},
                            {id: 2, degree: "Master of Arts", years: 2, notes: "Standard duration"}
                        ];
                    }
                },

                // Generate a new ID
                getNewId: function(collection) {
                    return this[collection].length > 0
                        ? Math.max(...this[collection].map(item => item.id)) + 1
                        : 1;
                },

                // Save data to localStorage
                saveToStorage: function() {
                    localStorage.setItem('universityData_degrees', JSON.stringify(this.degrees));
                    localStorage.setItem('universityData_durations', JSON.stringify(this.durations));
                    localStorage.setItem('universityData_majors', JSON.stringify(this.majors));
                    localStorage.setItem('universityData_departments', JSON.stringify(this.departments));
                    localStorage.setItem('universityData_faculties', JSON.stringify(this.faculties));
                },

                // Load data from localStorage
                loadFromStorage: function() {
                    const degrees = localStorage.getItem('universityData_degrees');
                    const durations = localStorage.getItem('universityData_durations');
                    const majors = localStorage.getItem('universityData_majors');
                    const departments = localStorage.getItem('universityData_departments');
                    const faculties = localStorage.getItem('universityData_faculties');

                    if(degrees) this.degrees = JSON.parse(degrees);
                    if(durations) this.durations = JSON.parse(durations);
                    if(majors) this.majors = JSON.parse(majors);
                    if(departments) this.departments = JSON.parse(departments);
                    if(faculties) this.faculties = JSON.parse(faculties);

                    this.initSampleData();
                },

                // Delete an item from a collection
                deleteItem: function(collection, id) {
                    this[collection] = this[collection].filter(item => item.id !== id);
                    this.saveToStorage();
                    updateStats();
                }
            };

            // Initialize data
            universityData.loadFromStorage();

            // Update stats display
            function updateStats() {
                document.getElementById('degrees-count').textContent = universityData.degrees.length;
                document.getElementById('majors-count').textContent = universityData.majors.length;
                document.getElementById('departments-count').textContent = universityData.departments.length;
                document.getElementById('faculties-count').textContent = universityData.faculties.length;
            }

            // Initialize stats
            updateStats();

            // Show data table
            function showDataTable(title, collection) {
                const tableTitle = document.getElementById('tableTitle');
                const tableBody = document.getElementById('tableBody');
                const dataTablesSection = document.getElementById('dataTablesSection');

                tableTitle.textContent = title;
                tableBody.innerHTML = '';

                universityData[collection].forEach(item => {
                    const row = document.createElement('tr');

                    // Create cells based on collection type
                    if(collection === 'degrees') {
                        row.innerHTML = `
                            <td>${item.id}</td>
                            <td>${item.name}</td>
                            <td>
                                <strong>Duration:</strong> ${item.duration} years<br>
                                <small>${item.description || 'No description'}</small>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-primary btn-table edit-btn" data-id="${item.id}" data-collection="${collection}">
                                    <i class="fas fa-edit"></i> Edit
                                </button>
                                <button class="btn btn-sm btn-danger btn-table delete-btn" data-id="${item.id}" data-collection="${collection}">
                                    <i class="fas fa-trash"></i> Delete
                                </button>
                            </td>
                        `;
                    } else if(collection === 'majors') {
                        row.innerHTML = `
                            <td>${item.id}</td>
                            <td>${item.name}</td>
                            <td>
                                <strong>Department:</strong> ${item.department}<br>
                                <small>${item.description || 'No description'}</small>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-primary btn-table edit-btn" data-id="${item.id}" data-collection="${collection}">
                                    <i class="fas fa-edit"></i> Edit
                                </button>
                                <button class="btn btn-sm btn-danger btn-table delete-btn" data-id="${item.id}" data-collection="${collection}">
                                    <i class="fas fa-trash"></i> Delete
                                </button>
                            </td>
                        `;
                    } else if(collection === 'departments') {
                        row.innerHTML = `
                            <td>${item.id}</td>
                            <td>${item.name}</td>
                            <td>
                                <strong>Faculty:</strong> ${item.faculty}<br>
                                <strong>Head:</strong> ${item.head || 'Not specified'}
                            </td>
                            <td>
                                <button class="btn btn-sm btn-primary btn-table edit-btn" data-id="${item.id}" data-collection="${collection}">
                                    <i class="fas fa-edit"></i> Edit
                                </button>
                                <button class="btn btn-sm btn-danger btn-table delete-btn" data-id="${item.id}" data-collection="${collection}">
                                    <i class="fas fa-trash"></i> Delete
                                </button>
                            </td>
                        `;
                    } else if(collection === 'faculties') {
                        row.innerHTML = `
                            <td>${item.id}</td>
                            <td>${item.name}</td>
                            <td>
                                <strong>Dean:</strong> ${item.dean || 'Not specified'}<br>
                                <small>${item.description || 'No description'}</small>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-primary btn-table edit-btn" data-id="${item.id}" data-collection="${collection}">
                                    <i class="fas fa-edit"></i> Edit
                                </button>
                                <button class="btn btn-sm btn-danger btn-table delete-btn" data-id="${item.id}" data-collection="${collection}">
                                    <i class="fas fa-trash"></i> Delete
                                </button>
                            </td>
                        `;
                    } else if(collection === 'durations') {
                        row.innerHTML = `
                            <td>${item.id}</td>
                            <td>${item.degree}</td>
                            <td>
                                <strong>Duration:</strong> ${item.years} years<br>
                                <small>${item.notes || 'No notes'}</small>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-primary btn-table edit-btn" data-id="${item.id}" data-collection="${collection}">
                                    <i class="fas fa-edit"></i> Edit
                                </button>
                                <button class="btn btn-sm btn-danger btn-table delete-btn" data-id="${item.id}" data-collection="${collection}">
                                    <i class="fas fa-trash"></i> Delete
                                </button>
                            </td>
                        `;
                    }

                    tableBody.appendChild(row);
                });

                dataTablesSection.style.display = 'block';

                // Scroll to the table section
                dataTablesSection.scrollIntoView({ behavior: 'smooth' });
            }

            // Close data table
            document.getElementById('closeTableBtn').addEventListener('click', function() {
                document.getElementById('dataTablesSection').style.display = 'none';
            });

            // Navigation event listeners
            document.getElementById('navDegree').addEventListener('click', function(e) {
                e.preventDefault();
                showDataTable('Degree Programs', 'degrees');
            });

            document.getElementById('navMajor').addEventListener('click', function(e) {
                e.preventDefault();
                showDataTable('Majors', 'majors');
            });

            document.getElementById('navDepartment').addEventListener('click', function(e) {
                e.preventDefault();
                showDataTable('Departments', 'departments');
            });

            document.getElementById('navFaculty').addEventListener('click', function(e) {
                e.preventDefault();
                showDataTable('Faculties', 'faculties');
            });

            // View buttons event listeners
            document.querySelector('.view-degrees-btn').addEventListener('click', function() {
                showDataTable('Degree Programs', 'degrees');
            });

            document.querySelector('.view-majors-btn').addEventListener('click', function() {
                showDataTable('Majors', 'majors');
            });

            document.querySelector('.view-departments-btn').addEventListener('click', function() {
                showDataTable('Departments', 'departments');
            });

            document.querySelector('.view-faculties-btn').addEventListener('click', function() {
                showDataTable('Faculties', 'faculties');
            });

            document.querySelector('.view-durations-btn').addEventListener('click', function() {
                showDataTable('Program Durations', 'durations');
            });

            // Form submission handlers
            document.getElementById('addDegreeForm').addEventListener('submit', function(e) {
                e.preventDefault();

                const name = document.getElementById('degreeName').value;
                const duration = document.getElementById('degreeDuration').value;
                const description = document.getElementById('degreeDescription').value;

                if(!name || !duration) {
                    if(!name) document.getElementById('degreeName').classList.add('is-invalid');
                    if(!duration) document.getElementById('degreeDuration').classList.add('is-invalid');
                    return;
                }

                const newDegree = {
                    id: universityData.getNewId('degrees'),
                    name: name,
                    duration: parseInt(duration),
                    description: description
                };

                universityData.degrees.push(newDegree);
                universityData.saveToStorage();
                updateStats();

                // Close modal and reset form
                bootstrap.Modal.getInstance(document.getElementById('addDegreeModal')).hide();
                this.reset();

                // Show success message or update UI as needed
                alert('Degree program added successfully!');
            });

            document.getElementById('addMajorForm').addEventListener('submit', function(e) {
                e.preventDefault();

                const name = document.getElementById('majorName').value;
                const department = document.getElementById('majorDepartment').value;
                const description = document.getElementById('majorDescription').value;

                if(!name || !department) {
                    if(!name) document.getElementById('majorName').classList.add('is-invalid');
                    if(!department) document.getElementById('majorDepartment').classList.add('is-invalid');
                    return;
                }

                const newMajor = {
                    id: universityData.getNewId('majors'),
                    name: name,
                    department: department,
                    description: description
                };

                universityData.majors.push(newMajor);
                universityData.saveToStorage();
                updateStats();

                bootstrap.Modal.getInstance(document.getElementById('addMajorModal')).hide();
                this.reset();

                alert('Major added successfully!');
            });

            document.getElementById('addDepartmentForm').addEventListener('submit', function(e) {
                e.preventDefault();

                const name = document.getElementById('departmentName').value;
                const faculty = document.getElementById('departmentFaculty').value;
                const head = document.getElementById('departmentHead').value;

                if(!name || !faculty) {
                    if(!name) document.getElementById('
