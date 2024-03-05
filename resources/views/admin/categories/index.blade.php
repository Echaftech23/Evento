@extends('layouts.dashboard.app')

@section('title', 'Home Category')

@section('contents')
<div class="d-flex align-items-center justify-content-between">
    <h1 class="mb-0">List Category</h1>

    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Add Category
    </button>
</div>



<!-- Modal -->
<div class="modal modal-dialog modal-sm fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title fs-5" id="exampleModalLabel">Add Category</h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
            <label class="form-label text-dark" for="city-name">Category</label>
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
        @if($categories->count() > 0)
        @foreach($categories as $category)
        <tr>
            <td class="align-middle">{{ $category->id }}</td>
            <td class="align-middle">{{ $category->name }}</td>
            <td class="align-middle">{{ $category->created_at }}</td>
            <td class="align-middle">
                <div class="btn-group" role="group" aria-label="Basic example">
                    {{-- <a href="{{ route('categories.edit', $category->id)}}" type="button" class="btn btn-warning">Edit</a> --}}
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#{{$category->id}}">
                        Edit
                    </button>

                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Are You sure You want To Delete This Category?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger m-0">Delete</button>
                    </form>
                </div>
            </td>
        </tr>

        <!-- Modal -->
        <div class="modal modal-dialog modal-sm fade" id="{{$category->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title fs-5" id="exampleModalLabel">Edit Category</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('categories.update', $category->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <label class="form-label text-dark" for="city-name">Category</label>
                    <input type="text" id="city-name" value="{{$category->name}}" name="name" class="form-control" placeholder="Enter Category Name" required>
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
            <td class="text-center" colspan="5">Category not found</td>
        </tr>
        @endif
    </tbody>
</table>
        <!-- Bootstrap Pagination Links -->
        <div class="pagination justify-content-center">
            {{ $categories->links() }}
        </div>
@endsection
