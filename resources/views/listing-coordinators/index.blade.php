@extends('layouts.app', ['active' => 'leads_services_support', 'subactive' => 'request_listing_closing_coordinators'])
@section('css')
    <style>
        body {
            height: 100vh;
        }

        main,
        #app {
            height: 100%;
        }

        main {
            display: flex;
            align-items: center;
        }

        .card-header {
            font-size: 18px;
            color: #ffffff;
            line-height: 22px;
            text-align: center;
            padding: 0;
            background: none;
            border: none;
            padding-top: 10px;
        }


        a:hover {
            text-decoration: none;
        }

        .agent-name {
            margin-top: 20px;
            background-color: #262626;
            color: #fff;
            border-radius: 15px;
            border: 1px solid #fff;
            padding: 18px 25px;
            text-transform: uppercase;
        }

        .agents img {
            border-radius: 10px;
            max-height: 350px;
            object-fit: cover;
            object-position: top;
        }

        .h1-luxe {
            font-family: 'gothicbold';
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid agents">
        <h1 class="text-center h1-luxe">LISTING COORDINATORS</h1>
        <div class="row justify-content-center">
            @foreach ($coordinators as $coordinator)
                <div class="col-md-3 my-2">
                    @if (auth()->user() && auth()->user()->isAdmin)
                        <form action="{{ route('listing_coordinator.change_status', ['id' => $coordinator->id]) }}"
                            method="POST">
                            @csrf
                            <button type="submit"
                                class="btn-luxe text-center w-100">{{ $coordinator->status ? 'Hide' : 'Show' }}</button>
                        </form>
                    @endif
                    @if ($coordinator->status)
                        <div class="bg-transparent">
                            <a href="{{ route('listing-coordinators.show', $coordinator->id) }}">
                                <div class="card-header">
                                    <img src="{{ asset($coordinator->image) }}" alt="" class="w-100">
                                    <p class="agent-name">{{ $coordinator->name }}</p>
                                </div>
                            </a>
                        </div>
                    @else
                        <div class="bg-transparent">
                            <div class="card-header">
                                <img src="{{ asset($coordinator->image) }}" alt="" class="w-100">
                                <p class="agent-name">Sorry this listing coordinator is not taking any files at the moment
                                </p>
                            </div>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
@endsection
