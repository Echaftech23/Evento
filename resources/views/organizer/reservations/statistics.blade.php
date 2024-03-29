@extends('layouts.dashboard.app')

@section('contents')
<div class="container py-2">
    <div class="row" style="margin-bottom: 50px">
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-header">Events Created</div>
                <div class="card-body">
                    <h5 class="card-title">
                        {{ $statisticsData["eventsCreated"] }}
                    </h5>
                    <p class="card-text">
                        Total number of Your events.
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
                        {{ $statisticsData["pendingReservations"] }}
                    </h5>
                    <p class="card-text">
                        Bookings awaiting your confirmation.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="table-responsive mt-4">
        <table class="table">
            <thead>
                <tr>
                    <th>Event Title</th>
                    <th>Event Period</th>
                    <th>Booked Places</th>
                    <th>Remaining Days</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($events as $event)
                <tr>
                    <td>{{ Str::limit($event->title , 30, '...') }}</td>
                    <td>
                        @if($event->endDate && $event->startDate)
                            {{ \Carbon\Carbon::parse($event->startDate)->diffInDays(\Carbon\Carbon::parse($event->endDate)) + 1 }} days
                        @else
                            N/A
                        @endif
                    </td>


                    <td>
                        {{ $event->capacity }}
                    </td>
                    <td>
                        @if(\Carbon\Carbon::parse($event->StartDate)->gt(now()))
                            Not Started
                        @elseif(\Carbon\Carbon::parse($event->endDate)->gt(now()))
                            {{ \Carbon\Carbon::parse($event->endDate)->endOfDay()->diffInDays(\Carbon\Carbon::now()->startOfDay()) }} days
                        @elseif($event->endDate && \Carbon\Carbon::parse($event->endDate)->lte(\Carbon\Carbon::now()))
                            Ended
                        @else
                            Ongoing
                        @endif

                    </td>
                    <td class="align-middle">
                        <a href="{{ route('home.show', $event) }}" type="button" class="btn btn-primary">View Details</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
