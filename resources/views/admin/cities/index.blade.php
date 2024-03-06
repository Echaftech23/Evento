@extends('layouts.dashboard.app')

@section('title', 'Home City')

@section('contents')
<div class="d-flex align-items-center justify-content-between">
    <h1 class="mb-0">List City</h1>

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Add City
    </button>
</div>



<!-- Modal -->
<div class="modal modal-dialog modal-sm fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title fs-5" id="exampleModalLabel">Add City</h2>
        <button type="button" class="btn-close border-none" data-bs-dismiss="modal" aria-label="Close">x</button>
      </div>
      <div class="modal-body">
        <form action="{{ route('cities.store') }}" method="POST">
            @csrf
            <label class="form-label text-dark" for="city-name">City</label>
            <input type="text" id="city-name" name="name" class="form-control" placeholder="Enter City Name" required>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
  </div>
</div>

<hr />
@if(Session::has('success'))
<div class="d-flex flex-column-reverse align-items-end">
    <div class="alert alert-success col-4" role="alert">
        {{ Session::get('success') }}
    </div>
</div>
@endif
<table class="table table-hover">
    <thead class="table-primary">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Created_At</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @if($cities->count() > 0)
        @foreach($cities as $city)
        <tr>
            <td class="align-middle">{{ $city->id }}</td>
            <td class="align-middle">{{ $city->name }}</td>
            <td class="align-middle">{{ $city->created_at }}</td>
            <td class="align-middle">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#{{$city->id}}">
                        Edit
                    </button>

                    <form action="{{ route('cities.destroy', $city->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Are You sure You want To Delete This City?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger m-0">Delete</button>
                    </form>
                </div>
            </td>
        </tr>

        <!-- Modal -->
        <div class="modal modal-dialog modal-sm fade" id="{{$city->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title fs-5" id="exampleModalLabel">Edit City</h2>
                <button type="button" class="btn-close border-none" data-bs-dismiss="modal" aria-label="Close">x</button>
            </div>
            <div class="modal-body">
                <form action="{{ route('cities.update', $city->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <label class="form-label text-dark" for="city-name">City</label>
                    <input type="text" id="city-name" value="{{$city->name}}" name="name" class="form-control" placeholder="Enter City Name" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
        @endforeach
        @else
        <tr>
            <td class="text-center" colspan="5">City not found</td>
        </tr>
        @endif
    </tbody>
</table>
        <!-- Bootstrap Pagination Links -->
        <div class="pagination justify-content-center">
            {{ $cities->links() }}
        </div>
@endsection
