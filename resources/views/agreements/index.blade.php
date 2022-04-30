@extends('layouts.app', ['active' => 'Service&StaffRequests', 'subactive' => 'mentors'])
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
        color: #262626;
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
        background: #262626;
        border-radius: 15px;
        color: #fff;
        padding: 18px 30px;
        text-transform: uppercase;
        font-size: 16px;
    }

    .agents img {
        border-radius: 10px;
        max-height: 235px;
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
    <h1 class="text-center h1-luxe">MENTORS</h1>
    <div class="row">
        @foreach ($agents as $agent)
        <div class="col-12 col-lg-3 my-2">
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