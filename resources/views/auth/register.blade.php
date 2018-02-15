@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card card-default py-auto">
                {{--  <div class="card-header">Register</div>  --}}

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group ">
                            <label for="name">Full Name</label>
                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                            @if ($errors->has('name'))
                                <span class="invalid-feedback">
                                    {{ $errors->first('name') }}
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="username">User Name</label>
                            <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required >
                            @if ($errors->has('username'))
                                <span class="invalid-feedback">
                                    {{ $errors->first('username') }}
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="email">E-Mail Address</label>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    {{ $errors->first('email') }}
                                </span>
                            @else
                                <small id="emailHelp" class="form-text text-muted">We will never share your email with anyone.</small>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                    {{ $errors->first('password') }}
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="password-confirm">Confirm Password</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary btn-block">
                                Register
                            </button>
                        </div

                        <div class="form-group">
                            <small id="FormHelp" class="form-text text-muted text-center mt-2">By creating an account, you agree to our <a href="#">Terms</a>.</small>
                            <small id="SigninHelp" class="form-text text-muted text-center mt-2">Already have an account? <a href="{{ route('login') }}">Sign In</a>.</small>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
