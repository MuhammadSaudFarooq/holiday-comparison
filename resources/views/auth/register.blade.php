@extends('layouts.auth-master')

@section('content')
    @include('layouts.partials.hero-section')
    <form method="post" action="{{ route('register.perform') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <h1 class="h3 mb-3 fw-normal">Register</h1>
        <div class="form-group form-floating mb-3">
            <label>Email address</label>
            <input type="email" class="form-control" name="email" value="{{ old('email') }}"
                placeholder="name@example.com" required="required" autofocus>
            @if ($errors->has('email'))
                <span class="text-danger text-left">{{ $errors->first('email') }}</span>
            @endif
        </div>
        <div class="form-group form-floating mb-3">
            <label>Username</label>
            <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username"
                required="required" autofocus>
            @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            @endif
        </div>
        <div class="form-group form-floating mb-3">
            <label>Password</label>
            <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password"
                required="required">
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
        </div>
        <div class="form-group form-floating mb-3">
            <label>Confirm Password</label>
            <input type="password" class="form-control" name="password_confirmation"
                value="{{ old('password_confirmation') }}" placeholder="Confirm Password" required="required">
            @if ($errors->has('password_confirmation'))
                <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
            @endif
        </div>
        <div class="form-group form-floating mb-3">
            <label>Already have an account? <a href="{{ url('/login') }}">Login</a> here</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
    </form>
@endsection
