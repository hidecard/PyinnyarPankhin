@extends('admin.layout')

@section('title', 'Events Management')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0 text-gray-800">Events Management</h1>
        <a href="{{ route('admin.events.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Add New Event
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Events List</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Date & Time</th>
                            <th>Location</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($events as $event)
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        @if($event->image)
                                            <img src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->title }}" class="rounded me-2" style="width: 40px; height: 40px; object-fit: cover;">
                                        @else
                                            <div class="bg-light rounded me-2 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                                <i class="fas fa-calendar-alt text-muted"></i>
                                            </div>
                                        @endif
                                        <div>
                                            <strong>{{ $event->title }}</strong>
                                            <br>
                                            <small class="text-muted">{{ Str::limit($event->description, 50) }}</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div>{{ $event->event_date->format('M d, Y') }}</div>
                                    <small class="text-muted">{{ $event->event_time }}</small>
                                </td>
                                <td>{{ $event->location }}</td>
                                <td>
                                    <span class="badge {{ $event->is_active ? 'bg-success' : 'bg-secondary' }}">
                                        {{ $event->is_active ? 'Active' : 'Inactive' }}
                                    </span>
                                </td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('admin.events.show', $event) }}" class="btn btn-sm btn-info" title="View">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="{{ route('admin.events.edit', $event) }}" class="btn btn-sm btn-warning" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('admin.events.toggle', $event) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit" class="btn btn-sm {{ $event->is_active ? 'btn-secondary' : 'btn-success' }}" title="{{ $event->is_active ? 'Deactivate' : 'Activate' }}">
                                                <i class="fas {{ $event->is_active ? 'fa-eye-slash' : 'fa-eye' }}"></i>
                                            </button>
                                        </form>
                                        <form action="{{ route('admin.events.destroy', $event) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this event?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" title="Delete">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center py-4">
                                    <div class="text-muted">
                                        <i class="fas fa-calendar-times fa-3x mb-3"></i>
                                        <p>No events found. <a href="{{ route('admin.events.create') }}">Create your first event</a></p>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            @if($events->hasPages())
                <div class="d-flex justify-content-center mt-4">
                    {{ $events->links() }}
                </div>
            @endif
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
.table th {
    border-top: none;
    font-weight: 600;
    color: #495057;
}

.btn-group .btn {
    margin-right: 2px;
}

.card-header {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
}

.alert-success {
    border-left: 4px solid #28a745;
}
</style>
@endpush

@push('scripts')
<script>
$(document).ready(function() {
    $('#dataTable').DataTable({
        "pageLength": 10,
        "ordering": true,
        "searching": true,
        "responsive": true,
        "language": {
            "search": "Search events:",
            "lengthMenu": "Show _MENU_ events per page",
            "zeroRecords": "No events found",
            "info": "Showing page _PAGE_ of _PAGES_",
            "infoEmpty": "No events available",
            "infoFiltered": "(filtered from _MAX_ total events)"
        }
    });
});
</script>
@endpush
