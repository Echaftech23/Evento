@extends('layouts.auth.app')

@section('header-title', 'Register Form')

@section('contents')
<div class="login-wrap p-4 p-md-5">
    <form action="{{ route('register') }}" method="POST"  action="{{ route('register') }}" class="signin-form">
        @csrf
        <div class="form-group mb-3">
            <label class="label" for="email">Name</label>
            <input name="name" type="text" class="form-control @error('name')is-invalid @enderror" placeholder="Name" value="{{old('name')}}" autofocus required>
            @error('name')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label class="label" for="email">Email</label>
            <input type="text" name="email" class="form-control @error('email')is-invalid @enderror" placeholder="Email" value="{{old('email')}}" autofocus required>
            @error('email')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label class="label" for="password">Password</label>
            <input type="password" name="password" class="form-control @error('password')is-invalid @enderror" placeholder="Password" autofocus required>
            @error('password')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label class="label" for="password">Confirm Password</label>
            <input name="password_confirmation" type="password" class="form-control @error('password_confirmation')is-invalid @enderror" placeholder="Confirm Password" autofocus required>
            @error('password_confirmation')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign Up</button>
        </div>
    </form>
    <p class="text-center">Already registered? <a data-toggle="tab" href="{{ route('login') }}">Sign In</a></p>
</div>
@endsection
