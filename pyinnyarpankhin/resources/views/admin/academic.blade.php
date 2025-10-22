@extends('admin.layout')

@section('title', 'Academics Overview')

@section('content')
<div class="container-fluid">
    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 style="color: #FF7300;"><i class="fas fa-tachometer-alt me-2" style="color: #FF7300;"></i> Academics Overview</h1>
        <div class="user-info">
            <span style="color: #FF7300;">Admin User</span>
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
                            <a href="{{ route('admin.degrees.create') }}" class="btn btn-primary action-btn" style="background-color: var(--degree-color); border-color: var(--degree-color);">
                                <i class="fas fa-plus"></i> Add Degree
                            </a>
                            <a href="{{ route('admin.degrees.index') }}" class="btn btn-outline-primary action-btn" style="border-color: var(--degree-color); color: var(--degree-color);">
                                <i class="fas fa-list"></i> View All
                            </a>
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
                            <a href="{{ route('admin.durations.create') }}" class="btn btn-success action-btn" style="background-color: var(--duration-color); border-color: var(--duration-color);">
                                <i class="fas fa-cog"></i> Configure
                            </a>
                            <a href="{{ route('admin.durations.index') }}" class="btn btn-outline-success action-btn" style="border-color: var(--duration-color); color: var(--duration-color);">
                                <i class="fas fa-chart-bar"></i> Reports
                            </a>
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
                            <a href="{{ route('admin.majors.create') }}" class="btn btn-danger action-btn" style="background-color: var(--major-color); border-color: var(--major-color);">
                                <i class="fas fa-plus"></i> Add Major
                            </a>
                            <a href="{{ route('admin.majors.index') }}" class="btn btn-outline-danger action-btn" style="border-color: var(--major-color); color: var(--major-color);">
                                <i class="fas fa-search"></i> Search
                            </a>
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
                            <a href="{{ route('admin.departments.create') }}" class="btn btn-warning action-btn" style="color: aliceblue; background-color: var(--department-color); border-color: var(--department-color);">
                                <i class="fas fa-edit"></i> Manage
                            </a>
                            <a href="{{ route('admin.departments.index') }}" class="btn btn-outline-warning action-btn" style="border-color: var(--department-color); color: var(--department-color);">
                                <i class="fas fa-users"></i> Staff
                            </a>
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
                            <a href="{{ route('admin.faculties.create') }}" class="btn action-btn" style="background-color: var(--faculty-color); border-color: var(--faculty-color); color: white;">
                                <i class="fas fa-plus"></i> Add Faculty
                            </a>
                            <a href="{{ route('admin.faculties.index') }}" class="btn btn-outline-secondary action-btn">
                                <i class="fas fa-sitemap"></i> Structure
                            </a>
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
                                    <h4 class="mb-0" id="degrees-count">{{ $degreesCount ?? 0 }}</h4>
                                    <small>Degrees</small>
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="p-3 bg-white bg-opacity-10 rounded">
                                    <h4 class="mb-0" id="majors-count">{{ $majorsCount ?? 0 }}</h4>
                                    <small>Majors</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="p-3 bg-white bg-opacity-10 rounded">
                                    <h4 class="mb-0" id="departments-count">{{ $departmentsCount ?? 0 }}</h4>
                                    <small>Departments</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="p-3 bg-white bg-opacity-10 rounded">
                                    <h4 class="mb-0" id="faculties-count">{{ $facultiesCount ?? 0 }}</h4>
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
</div>
@endsection
