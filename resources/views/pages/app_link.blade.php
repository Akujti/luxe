@extends('layouts.app')
@section('content')
    <style>
        .logo {
            width: 300px;
        }
    </style>
    <div class="container-fluid">
        {{-- @include('includes.video_title') --}}
        <div class="row justify-content-center">
            <div class="col-12 title mb-3 text-center">
                <h1 class="font-weight-bold">THE LUXE HUB APP LINKS</h1>
            </div>
            <div class="col-6 text-center">
                <div class="mb-4">
                    <a href="{{ $link }}">
                        <img class="logo" src="{{ asset('images/apps/apple.svg') }}" alt="">
                    </a>
                </div>
                <div>
                    <a href="https://play.google.com/store/apps/details?id=com.ajroni.theluxehubapp">
                        <img class="logo" src="{{ asset('images/apps/google.svg') }}" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
