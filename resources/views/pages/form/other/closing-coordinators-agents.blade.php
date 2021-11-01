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

    .agent-name {
        margin-top: 20px;
    }

    .agents img {
        border-radius: 10px
    }
</style>
@endsection
@section('content')

<div class="container agents">
    <h1 class="text-center text-white">CLOSING COORDINATORS</h1>
    <div class="row">
        <div class="col my-2">
            <div class="bg-transparent">
                <a href="/general/form/other/closing-coordinators?agent_email=denisse@luxeknows.com">
                    <div class="card-header">
                        <img src="{{asset('images/agents/dennise.jpg')}}" alt="" class="w-100">
                        <p class="agent-name">Denisse Uyema</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="col my-2">
            <div class="bg-transparent">
                <a href="/general/form/other/closing-coordinators?agent_email=victoria@luxeknows.com">
                    <div class="card-header">
                        <img src="{{asset('images/agents/victoria.jpg')}}" alt="" class="w-100">
                        <p class="agent-name">Victoria Lettieri</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="col my-2">
            <div class="bg-transparent">
                <a href="/general/form/other/closing-coordinators?agent_email=theclosinggenie@gmail.com">
                    <div class="card-header">
                        <img src="{{asset('images/agents/maribel.jpg')}}" alt="" class="w-100">
                        <p class="agent-name">Maribel Gonzalez</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>


@endsection