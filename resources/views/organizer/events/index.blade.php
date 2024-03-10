@extends('layouts.dashboard.app')

@section('contents')
<div class="d-flex align-items-center justify-content-between">
    <h1 class="mb-0">List Events</h1>

    <a href="{{ route('events.create') }}" class="btn btn-primary">
        Add Event
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
            <th>Category</th>
            <th>capacity</th>
            <th>City</th>
            <th>Address</th>
            <th>Price</th>
            <th>Is_Auto</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @if($events->count() > 0)
        @foreach($events as $event)
        <tr>
            <td class="align-middle">{{ Str::limit($event->title, 14, '...') }}</td>
            <td class="align-middle">{{ Str::limit($event->category->name , 14, '...') }}</td>
            <td class="align-middle">{{ Str::limit($event->capacity , 14, '...') }}</td>
            <td class="align-middle">{{ Str::limit($event->city->name , 14, '...') }}</td>
            <td class="align-middle">{{ Str::limit($event->address , 14, '...') }}</td>
            <td class="align-middle">{{ $event->price }}</td>
            <td class="align-middle">{{ $event->isAuto ? 'Yes' : 'No'}}</td>
            <td class="align-middle">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="{{ route('home.show', $event) }}" type="button" class="btn btn-primary">Detail</a>
                    <a href="{{ route('events.edit', $event) }}" type="button" class="btn btn-warning">Edit</a>
                    <form action="{{ route('events.destroy', $event->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Are You sure You want To Delete This Category?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger m-0">Delete</button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
        @else
        <tr>
            <td class="text-center" colspan="5">Event not found</td>
        </tr>
        @endif
    </tbody>
</table>
        <!-- Bootstrap Pagination Links -->
        <div class="pagination justify-content-center">
            {{ $events->links() }}
        </div>
@endsection
