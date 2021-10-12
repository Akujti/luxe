@extends('layouts.app')
@section('css')
<style>
    body {
        background: url('{{asset('images/bg-image1.jpg')}}');
        height: 100vh;
        background-size: cover;
        background-position: center;
        background-color: rgba(0, 0, 0, 0.7);
        background-blend-mode: color;

    }

    main,
    #app {
        height: 100%;
    }

    main {
        display: flex;
        align-items: center;
    }

    .card-header:after {
        content: '';
        position: absolute;
        bottom: -10px;
        width: 104px;
        height: 2px;
        background-color: rgba(255, 207, 64, 1);
        left: 50%;
        margin-left: -52px;
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
</style>
@endsection
@section('content')

<div class="container">
    <div class="row">
        <div class="col my-2">
            <div class="bg-transparent">
                <a href="{{route('marketing.requests')}}">
                    <div class="card-header">
                        Marketing
                    </div>
                </a>
            </div>
        </div>
        <div class="col my-2">
            <div class="bg-transparent">
                <a href="{{route('general.email.index',['folder'=>'escrow','form'=>'request-store'])}}">
                    <div class="card-header">
                        Rental Escrow Disbursement
                    </div>
                </a>
            </div>
        </div>
        <div class="col my-2">
            <div class="bg-transparent">
                <a href="{{route('general.email.index',['folder'=>'leads','form'=>'index'])}}">
                    <div class="card-header">
                        Leads
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>


@endsection