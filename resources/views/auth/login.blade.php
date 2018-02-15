@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                {{--  <div class="card-header">Login</div>  --}}

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('warning'))
                        <div class="alert alert-warning" role="alert">
                            {{ session('warning') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email" >E-Mail Address</label>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    {{ $errors->first('email') }}
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <small id="PasswordHelp" class="form-text float-right"><a href="{{ route('password.request') }}"> Forgot Your Password? </a></small>
                            <label for="password" >Password</label>
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                    {{ $errors->first('password') }}
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" class="custom-control-input" id="customControlAutosizing"  name="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="custom-control-label" for="customControlAutosizing"> Remember Me </label>
                            </div>
                        </div>

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary btn-block">
                                Login
                            </button>
                        </div>

                        <div class="form-group">
                            <small id="SigninHelp" class="form-text text-muted text-center mt-4"> Do not have an account? <a href="{{ route('register') }}"> Sign Up </a> . </small>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
