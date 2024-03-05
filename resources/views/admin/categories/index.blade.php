@extends('layouts.dashboard.app')

@section('title', 'Home Category')

@section('contents')
<div class="d-flex align-items-center justify-content-between">
    <h1 class="mb-0">List Category</h1>
    <a href="{{ route('users.create') }}" class="btn btn-info">Add Category</a>
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
                    <a href="{{ route('categories.edit', $category->id)}}" type="button" class="btn btn-warning">Edit</a>
                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Are You sure You want To Delete This Category?')">
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
