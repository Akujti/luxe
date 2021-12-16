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
        background: linear-gradient(180deg, rgba(0, 0, 0, .1) 0%, rgba(255, 255, 255, 0.26) 100%);
        border-radius: 15px;
        border: 1px solid #fff;
        padding: 18px 30px;
        text-transform: uppercase;
    }

    .agents img {
        border-radius: 10px;
        max-height: 350px;
        object-fit: cover;
        object-position: top;
    }

    /* .agents .col.my-2 {
        display: flex;
        flex-flow: column;
        align-self: center;
    } */
</style>
@endsection
@section('content')

<div class="container agents">
    <h1 class="text-center text-white">AGREEMENT AGENTS</h1>
    <div class="row">
        @foreach ($agents as $agent)
        <div class="col my-2">
            <div class="bg-transparent">
                <a href="{{route('agreement.agent',$agent)}}">
                    <div class="card-header">
                        <img src="{{asset('images/agents/'.$agent->image)}}" alt="" class="w-100">
                        <p class="agent-name">{{$agent->name}}</p>
                    </div>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>


@endsection