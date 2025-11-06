@extends('admin.layout')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title" style="color: #6C3428;">Intake Details for {{ $intake->name }}</h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.intakes.intakes.details.create', $intake) }}" class="btn btn-primary btn-sm">
                            <i class="fas fa-plus"></i> Add Detail
                        </a>
                        <a href="{{ route('admin.intakes.show', $intake) }}" class="btn btn-secondary btn-sm">
                            <i class="fas fa-arrow-left"></i> Back to Intake
                        </a>
                    </div>
                </div>
                <div class="card-body">
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

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="color: #6C3428;">ID</th>
                                    <th style="color: #6C3428;">Event Name</th>
                                    <th style="color: #6C3428;">Start Date</th>
                                    <th style="color: #6C3428;">End Date</th>
                                    <th style="color: #6C3428;">Created At</th>
                                    <th style="color: #6C3428;">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($intakeDetails as $detail)
                                    <tr>
                                        <td style="color: #6C3428;">{{ $detail->id }}</td>
                                        <td style="color: #6C3428;">{{ $detail->event_name }}</td>
                                        <td style="color: #6C3428;">{{ $detail->start_date ? $detail->start_date->format('M d, Y') : 'N/A' }}</td>
                                        <td style="color: #6C3428;">{{ $detail->end_date ? $detail->end_date->format('M d, Y') : 'N/A' }}</td>
                                        <td style="color: #6C3428;">{{ $detail->created_at->format('M d, Y') }}</td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href="{{ route('admin.intakes.intakes.details.show', [$intake, $detail]) }}" class="btn btn-sm btn-info">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a href="{{ route('admin.intakes.intakes.details.edit', [$intake, $detail]) }}" class="btn btn-sm btn-warning">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form action="{{ route('admin.intakes.intakes.details.destroy', [$intake, $detail]) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this detail?')">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center" style="color: #6C3428;">No details found for this intake.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
