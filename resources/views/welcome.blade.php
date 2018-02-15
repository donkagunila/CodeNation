@extends('layouts.app')

@section('content')
    <section class="flex-center position-ref full-height border-bottom">
        {{--  @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                @endauth
            </div>
        @endif  --}}

        <div class="content">
            <div class="mb-5">
                <h1 >Find & Hire talented freelancers.</h1>
                <p class="lead mt-5" >You need top quality freelancers who can make your business thrive.</p>
            </div>

            <form >
                <div class="input-group mb-5">
                    <input type="text" class="form-control" name="searchterm" placeholder="Tell us what freelance service you need e.g Design a Company Logo" aria-label="Tell us what freelance service you need e.g Design a Company Logo" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary px-5" type="button">Get Quote</button>
                    </div>
                </div>
            </form>

            <div class="links mb-5">
                <a href="#">Web, Software & IT</a>
                <a href="#">Design</a>
                <a href="#">Art & Multimedia</a>
                <a href="#">Engineering & Architecture</a>
            </div>
        </div>
    </section>
@endsection
