@extends('layouts.dashboard.app')

@section('contents')
<div class="container py-4">
    <h2>My Statistics</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-header">Events Created</div>
                <div class="card-body">
                    <h5 class="card-title">
                        {{ $statisticsData["eventsCreated"] }}
                    </h5>
                    <p class="card-text">
                        Total number of events you have created.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-header">Total Bookings</div>
                <div class="card-body">
                    <h5 class="card-title">
                        {{ $statisticsData["totalBookings"] }}
                    </h5>
                    <p class="card-text">
                        Total bookings made for your events.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-header">Pending Bookings</div>
                <div class="card-body">
                    <h5 class="card-title">
                        {{ $statisticsData["pendingBookings"] }}
                    </h5>
                    <p class="card-text">
                        Bookings awaiting your confirmation.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <h3>Event Details</h3>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Event Title</th>
                    <th>Event Period</th>
                    <th>Remaining Places</th>
                    <th>Booked Places</th>
                    <th>Remaining Days</th>
                    <th>Details</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($statisticsData['events'] as $event)
                <tr>
                    <td>{{ $event->title }}</td>
                    <td>
                        @if($event->endDate && $event->StartDate)
                        {{ $event->StartDate->diffInDays($event->endDate) + 1 }}
                        days @else N/A @endif
                    </td>
                    <td>
                        {{ $event->capacity }}
                    </td>
                    <td>
                        {{ $event->reservations>where('status', '1') }}
                    </td>
                    <td>
                        @if($event->StartDate > now()) Not Started
                        @elseif($event->endDate > now())
                        {{ $event->endDate->copy()->endOfDay()->diffInDays(now()->startOfDay()) }}
                        days @elseif($event->endDate && $event->endDate <=
                        now()) Ended @else Ongoing @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
