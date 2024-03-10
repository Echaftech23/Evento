@extends('layouts.dashboard.app')


@section('contents')
<h1 class="mb-0">User Detail</h1>
<hr />

<div class="d-flex justify-content-center p-3">
    <img class="img-profile rounded-circle" src="https://startbootstrap.github.io/startbootstrap-sb-admin-2/img/undraw_profile.svg" width="140px" alt="Profile Image">
</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Name</label>
        <input type="text" name="name" class="form-control" placeholder="name" value="{{ $user->name }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Phone</label>
        <input type="text" name="phone" class="form-control" placeholder="00-00000-000" value="{{ $user->phone }}" readonly>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Email</label>
        <input type="text" name="email" class="form-control" placeholder="email" value="{{ $user->email }}" readonly>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Created At</label>
        <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $user->created_at }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Updated At</label>
        <input type="text" name="publication_year" class="form-control" placeholder="published At" value="{{ $user->updated_at }}" readonly>
    </div>
</div>
@endsection
