@extends('layouts.dashboard.app')

@section('contents')
<div class="d-flex align-items-center justify-content-between">
    <h1 class="mb-0">List Reservation</h1>

    <a href="#" class="btn btn-primary">
        Add Reservation
    </a>
</div>

<hr />

@if(Session::has('success'))
<div class="d-flex flex-column-reverse align-items-end">
    <div class="alert alert-success col-4" role="alert">
        {{ Session::get('success') }}
    </div>
</div>
@endif

@if(Session::has('warning'))
<div class="d-flex flex-column-reverse align-items-end">
    <div class="alert alert-warning col-6" role="alert">
        {{ Session::get('warning') }}
    </div>
</div>
@endif

<table class="table table-hover">
    <thead class="table-primary">
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Event_Name</th>
            <th>Event_City</th>
            <th>Address</th>
            <th>Statut</th>
            <th>Capacity</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @if($reservations->count() > 0)
        @foreach($reservations as $reservation)
        <tr>
            <td class="align-middle">{{ $reservation->user->name }}</td>
            <td class="align-middle">{{ $reservation->user->age ? $reservation->user->age  : '---'}}</td>
            <td class="align-middle">{{ Str::limit($reservation->event->title , 20, '...') }}</td>
            <td class="align-middle">{{ $reservation->event->city->name  }}</td>
            <td class="align-middle">{{ $reservation->event->address  }}</td>
            <td class="align-middle">
                @if($reservation->status == 0)
                    <span class="badge badge-warning">Pending</span>
                @elseif($reservation->status == 1)
                    <span class="badge badge-success">Accepted</span>
                @else
                    <span class="badge badge-danger">Rejected</span>
                @endif
            </td>
            <td class="align-middle">{{$reservation->event->capacity}}</td>
            <td class="align-middle">
                <div class="btn-group" role="group" aria-label="Basic example">
                    @switch($reservation->status)
                        @case(0)
                            <form action="{{ route('reservations.update', $reservation) }}" method="POST" type="button" class="btn btn-primary p-0">
                                @csrf
                                @method('PUT')
                                <button class="btn btn-primary">Accept</button>
                            </form>
                            <form action="{{ route('reservations.destroy', $reservation) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Are You sure You want To Reject This Reservation?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger m-0">Reject</button>
                            </form>
                        @break
                        @case(1)
                            <form action="{{ route('reservations.destroy', $reservation) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Are You sure You want To Reject This Reservation?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger m-0">Block</button>
                            </form>
                        @break
                    @endswitch
                </div>
            </td>
        </tr>
        @endforeach
        @else
        <tr>
            <td class="text-center" colspan="5">No Pending Requests not found</td>
        </tr>
        @endif
    </tbody>
</table>
        <!-- Bootstrap Pagination Links -->
        {{-- <div class="pagination justify-content-center">
            {{ $events->links() }}
        </div> --}}
@endsection
