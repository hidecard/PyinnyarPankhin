@extends('admin.layout')

@section('title', 'Event Details')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0 text-gray-800">Event Details</h1>
        <div>
            <a href="{{ route('admin.events.edit', $event) }}" class="btn btn-warning me-2">
                <i class="fas fa-edit"></i> Edit Event
            </a>
            <a href="{{ route('admin.events.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Back to Events
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex justify-content-between align-items-center">
                    <h6 class="m-0 font-weight-bold text-primary">{{ $event->title }}</h6>
                    <span class="badge {{ $event->is_active ? 'bg-success' : 'bg-secondary' }} fs-6">
                        {{ $event->is_active ? 'Active' : 'Inactive' }}
                    </span>
                </div>
                <div class="card-body">
                    @if($event->image)
                        <div class="text-center mb-4">
                            <img src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->title }}" class="img-fluid rounded shadow" style="max-height: 300px;">
                        </div>
                    @endif

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <h5 class="text-primary"><i class="fas fa-calendar-alt me-2"></i>Event Date</h5>
                            <p class="mb-0">{{ $event->event_date->format('l, F j, Y') }}</p>
                        </div>
                        <div class="col-md-6">
                            <h5 class="text-primary"><i class="fas fa-clock me-2"></i>Event Time</h5>
                            <p class="mb-0">{{ $event->event_time }}</p>
                        </div>
                    </div>

                    <div class="mb-3">
                        <h5 class="text-primary"><i class="fas fa-map-marker-alt me-2"></i>Location</h5>
                        <p class="mb-0">{{ $event->location }}</p>
                    </div>

                    <div class="mb-3">
                        <h5 class="text-primary"><i class="fas fa-align-left me-2"></i>Description</h5>
                        <div class="border rounded p-3 bg-light">
                            {!! nl2br(e($event->description)) !!}
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="text-primary"><i class="fas fa-calendar-plus me-2"></i>Created</h5>
                            <p class="mb-0">{{ $event->created_at->format('M j, Y \a\t g:i A') }}</p>
                        </div>
                        <div class="col-md-6">
                            <h5 class="text-primary"><i class="fas fa-edit me-2"></i>Last Updated</h5>
                            <p class="mb-0">{{ $event->updated_at->format('M j, Y \a\t g:i A') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-info">Quick Actions</h6>
                </div>
                <div class="card-body">
                    <div class="d-grid gap-2">
                        <form action="{{ route('admin.events.toggle', $event) }}" method="POST" class="d-inline">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn {{ $event->is_active ? 'btn-outline-secondary' : 'btn-outline-success' }} w-100">
                                <i class="fas {{ $event->is_active ? 'fa-eye-slash' : 'fa-eye' }} me-2"></i>
                                {{ $event->is_active ? 'Deactivate Event' : 'Activate Event' }}
                            </button>
                        </form>

                        <a href="{{ route('admin.events.edit', $event) }}" class="btn btn-outline-warning w-100">
                            <i class="fas fa-edit me-2"></i>Edit Event
                        </a>

                        <button type="button" class="btn btn-outline-info w-100" onclick="window.print()">
                            <i class="fas fa-print me-2"></i>Print Details
                        </button>
                    </div>
                </div>
            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-warning">Event Status</h6>
                </div>
                <div class="card-body">
                    @php
                        $now = now();
                        $eventDateTime = $event->event_date->copy()->setTimeFromTimeString($event->event_time);
                        $daysUntil = ceil($now->diffInDays($eventDateTime, false));
                    @endphp

                    @if($eventDateTime->isPast())
                        <div class="alert alert-secondary">
                            <i class="fas fa-history me-2"></i>
                            <strong>Event Completed</strong><br>
                            This event has already taken place.
                        </div>
                    @elseif($daysUntil <= 0)
                        <div class="alert alert-success">
                            <i class="fas fa-calendar-day me-2"></i>
                            <strong>Today!</strong><br>
                            This event is happening today.
                        </div>
                    @elseif($daysUntil == 1)
                        <div class="alert alert-warning">
                            <i class="fas fa-calendar-alt me-2"></i>
                            <strong>Tomorrow</strong><br>
                            Event is scheduled for tomorrow.
                        </div>
                    @elseif($daysUntil <= 7)
                        <div class="alert alert-info">
                            <i class="fas fa-calendar-week me-2"></i>
                            <strong>Coming Soon</strong><br>
                            Event is in {{ $daysUntil }} days.
                        </div>
                    @else
                        <div class="alert alert-light">
                            <i class="fas fa-calendar-check me-2"></i>
                            <strong>Upcoming</strong><br>
                            Event is in {{ $daysUntil }} days.
                        </div>
                    @endif

                    @if(!$event->is_active)
                        <div class="alert alert-danger mt-2">
                            <i class="fas fa-eye-slash me-2"></i>
                            <strong>Inactive Event</strong><br>
                            This event is currently hidden from public view.
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
.card-header {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
}

.text-primary {
    color: #667eea !important;
}

.alert {
    border: none;
    border-radius: 8px;
}

.btn-outline-secondary:hover, .btn-outline-success:hover, .btn-outline-warning:hover, .btn-outline-info:hover {
    color: white;
}

@media print {
    .btn, .card-header, .alert {
        display: none !important;
    }

    .card {
        border: none !important;
        box-shadow: none !important;
    }

    body {
        background: white !important;
    }
}
</style>
@endpush
