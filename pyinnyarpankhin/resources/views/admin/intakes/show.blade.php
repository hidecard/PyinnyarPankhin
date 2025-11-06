@extends('admin.layout')

@section('title', 'Intake Details')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title mb-0">Intake Details</h4>
                    <div>
                        <a href="{{ route('admin.intakes.intakes.details.index', $intake) }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Manage Details
                        </a>
                        <a href="{{ route('admin.intakes.edit', $intake) }}" class="btn btn-warning">
                            <i class="fas fa-edit"></i> Edit Intake
                        </a>
                        <a href="{{ route('admin.intakes.index') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i> Back to Intakes
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <table class="table table-borderless">
                                <tr>
                                    <th class="w-25">ID:</th>
                                    <td>{{ $intake->id }}</td>
                                </tr>
                                <tr>
                                    <th>Name:</th>
                                    <td>{{ $intake->name }}</td>
                                </tr>
                                <tr>
                                    <th>Created At:</th>
                                    <td>{{ $intake->created_at->format('M d, Y H:i') }}</td>
                                </tr>
                                <tr>
                                    <th>Updated At:</th>
                                    <td>{{ $intake->updated_at->format('M d, Y H:i') }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="mt-4">
                        <h5>Intake Details</h5>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Event Name</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Created At</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($intake->intakeDetails as $detail)
                                        <tr>
                                            <td>{{ $detail->id }}</td>
                                            <td>{{ $detail->event_name }}</td>
                                            <td>{{ $detail->start_date ? $detail->start_date->format('M d, Y') : 'N/A' }}</td>
                                            <td>{{ $detail->end_date ? $detail->end_date->format('M d, Y') : 'N/A' }}</td>
                                            <td>{{ $detail->created_at->format('M d, Y') }}</td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <a href="{{ route('admin.intakes.intakes.details.edit', [$intake, $detail]) }}" class="btn btn-sm btn-warning">
                                                        <i class="fas fa-edit"></i> Edit
                                                    </a>
                                                    <form action="{{ route('admin.intakes.intakes.details.destroy', [$intake, $detail]) }}" method="POST" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this detail?')">
                                                            <i class="fas fa-trash"></i> Delete
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center">No details found for this intake.</td>
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
</div>
@endsection
