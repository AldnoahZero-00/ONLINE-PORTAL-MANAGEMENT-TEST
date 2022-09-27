

@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <img src="/img/FCPC_LOGO.jpg" alt="FCPC LOGO" width="500px;">
                <div class="title m-b-md">
                   FIRST CITY PROVIDENTIAL COLLEGE<br />
                    FCPC CAMPUS PORTAL
                </div>
            </div>
        </div>
@endsection