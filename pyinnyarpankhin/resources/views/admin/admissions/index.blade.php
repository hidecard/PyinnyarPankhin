@extends('admin.layout')

@section('title', 'Admission Management')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Admission Management</h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.admissions.create') }}" class="btn btn-primary btn-sm">
                            <i class="fas fa-plus"></i> Add Admission
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
                <h3 style="color: #6C3428;">All Admissions</h3>
                <a href="{{ route('admin.admissions.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Add New Admission
                </a>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="color: #6C3428;">ID</th>
                                    <th style="color: #6C3428;">Admissions Name</th>
                                    <th style="color: #6C3428;">Email</th>
                                    <th style="color: #6C3428;">Phone</th>
                                    <th style="color: #6C3428;">Department</th>
                                    <th style="color: #6C3428;">Minimum GPA</th>
                                    <th style="color: #6C3428;">Transcripts</th>
                                    <th style="color: #6C3428;">Recommendation</th>
                                    <th style="color: #6C3428;">Edu Degree</th>
                                    <th style="color: #6C3428;">SOP</th>
                                    <th style="color: #6C3428;">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($admissions as $admission)
                                <tr>
                                    <td style="color: #6C3428;">{{ $admission->id }}</td>
                                    <td style="color: #6C3428;">{{ $admission->admissions_name }}</td>
                                    <td style="color: #6C3428;">{{ $admission->email }}</td>
                                    <td style="color: #6C3428;">{{ $admission->phone }}</td>
                                    <td style="color: #6C3428;">{{ $admission->department->department_name ?? 'N/A' }}</td>
                                    <td style="color: #6C3428;">{{ $admission->minimum_gpa }}</td>
                                    <td style="color: #6C3428;">{{ $admission->transcripts }}</td>
                                    <td style="color: #6C3428;">{{ $admission->recommendation }}</td>
                                    <td style="color: #6C3428;">{{ $admission->edu_degree }}</td>
                                    <td style="color: #6C3428;">{{ $admission->sop }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ route('admin.admissions.show', $admission) }}" class="btn btn-sm btn-info">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{ route('admin.admissions.edit', $admission) }}" class="btn btn-sm btn-primary">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('admin.admissions.destroy', $admission) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger"
                                                        onclick="return confirm('Are you sure you want to delete this admission?')">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    @if($admissions->isEmpty())
                    <div class="text-center py-4">
                        <p style="color: #6C3428;">No admissions found.</p>
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
