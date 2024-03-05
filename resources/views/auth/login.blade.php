@extends('layouts.auth.app')

@section('header-title', 'Welcome Back')

@section('contents')
<div class="login-wrap p-4 p-md-5">
    <div class="d-flex">
        <div class="w-100">
            <h3 class="mb-4">Sign In</h3>
        </div>
        <div class="w-100">
            <p class="social-media d-flex justify-content-end">
                <a href="#" class="social-icon d-flex align-items-center justify-content-center">
                    <span class="fa fa-facebook"></span>
                </a>
                <a href="#" class="social-icon d-flex align-items-center justify-content-center">
                    <span class="fa fa-twitter"></span>
                </a>
            </p>
        </div>
    </div>
    <form action="{{ route('login') }}" method="POST" class="signin-form">
        @csrf
        <div class="form-group mb-3">
            <label class="label" for="email">Email</label>
            <input type="text" name="email" class="form-control @error('email')is-invalid @enderror" placeholder="Email" value="{{old('email')}}" autofocus>
            @error('email')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label class="label" for="password">Password</label>
            <input type="password" name="password" class="form-control @error('password')is-invalid @enderror" placeholder="Password">
            @error('password')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
        </div>
        <div class="form-group d-md-flex">
            <div class="w-50 text-left">
                <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
                    <input type="checkbox" name="remember">
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="w-50 text-md-right">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">Forgot Password</a>
                @endif
            </div>
        </div>
    </form>
    <p class="text-center">Not a member? <a data-toggle="tab" href="{{ route('register') }}">Sign Up</a></p>
</div>
@endsection
