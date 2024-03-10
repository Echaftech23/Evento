@extends('layouts.dashboard.app')

@section('contents')
<div class="d-flex align-items-center justify-content-between">
    <h1 class="mb-0">List Users</h1>
    <a href="#" class="btn btn-info">Add User</a>
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
            <th>Image</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Budget</th>
            <th>Created_At</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @if($users->count() > 0)
        @foreach($users as $user)
        <tr>
            <td class="align-middle">{{ $loop->iteration }}</td>
            <td class="align-middle"><img class="img-profile rounded-circle" width="35px" src="https://startbootstrap.github.io/startbootstrap-sb-admin-2/img/undraw_profile.svg"></td>
            <td class="align-middle">{{ $user->name }}</td>
            <td class="align-middle">protected</td>
            <td class="align-middle">{{ (strlen($user->phone) > 15 ? substr($user->phone, 0, 15) . '...' : ($user->phone ? $user->phone : 'No phone number provided')) }}</td>
            <td class="align-middle">
                @if($user->status == 0)
                    <span class="badge badge-warning">Pending</span>
                @elseif($user->status == 1)
                    <span class="badge badge-primary">Accepted</span>
                @else
                    <span class="badge badge-danger">Rejected</span>
                @endif
            </td>
            <td class="align-middle">{{ $user->created_at }}</td>
            <td class="align-middle">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="{{ route('users.show', $user->id) }}" type="button" class="btn btn-success">Detail</a>
                    @switch($user->status)
                        @case(0)
                            <form action="{{ route('users.destroy', $user) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Are You sure You want To Reject This User?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger m-0">Block</button>
                            </form>
                        @break
                        @case(1)
                            <form action="{{ route('users.destroy', $user) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Are You sure You want To Reject This User?')">
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
            <td class="text-center" colspan="5">User not found</td>
        </tr>
        @endif
    </tbody>
</table>
 <!-- Bootstrap Pagination Links -->
    <div class="pagination justify-content-center">
        {{ $users->links() }}
    </div>
@endsection
