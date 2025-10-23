@extends('admin.layout')

@section('title', 'Admission Details')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Admission Details</h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.admissions.edit', $admission) }}" class="btn btn-primary btn-sm">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <a href="{{ route('admin.admissions.index') }}" class="btn btn-secondary btn-sm">
                            <i class="fas fa-arrow-left"></i> Back
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h5 style="color: #6C3428;">Applicant Information</h5>
                            <table class="table table-borderless">
                                <tr>
                                    <th style="color: #6C3428;">ID:</th>
                                    <td style="color: #6C3428;">{{ $admission->id }}</td>
                                </tr>
                                <tr>
                                    <th style="color: #6C3428;">Name:</th>
                                    <td style="color: #6C3428;">{{ $admission->admissions_name }}</td>
                                </tr>
                                <tr>
                                    <th style="color: #6C3428;">Email:</th>
                                    <td style="color: #6C3428;">{{ $admission->email }}</td>
                                </tr>
                                <tr>
                                    <th style="color: #6C3428;">Phone:</th>
                                    <td style="color: #6C3428;">{{ $admission->phone }}</td>
                                </tr>
                                <tr>
                                    <th style="color: #6C3428;">Department:</th>
                                    <td style="color: #6C3428;">{{ $admission->department->department_name ?? 'N/A' }}</td>
                                </tr>
                                <tr>
                                    <th style="color: #6C3428;">Minimum GPA:</th>
                                    <td style="color: #6C3428;">{{ $admission->minimum_gpa }}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <h5 style="color: #6C3428;">Application Details</h5>
                            <table class="table table-borderless">
                                <tr>
                                    <th style="color: #6C3428;">Transcripts:</th>
                                    <td style="color: #6C3428;">{{ $admission->transcripts }}</td>
                                </tr>
                                <tr>
                                    <th style="color: #6C3428;">Recommendation:</th>
                                    <td style="color: #6C3428;">{{ $admission->recommendation }}</td>
                                </tr>
                                <tr>
                                    <th style="color: #6C3428;">Educational Degree:</th>
                                    <td style="color: #6C3428;">{{ $admission->edu_degree }}</td>
                                </tr>
                                <tr>
                                    <th style="color: #6C3428;">Statement of Purpose:</th>
                                    <td style="color: #6C3428;">{{ $admission->sop }}</td>
                                </tr>
                                <tr>
                                    <th style="color: #6C3428;">Created At:</th>
                                    <td style="color: #6C3428;">{{ $admission->created_at->format('M d, Y H:i') }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
