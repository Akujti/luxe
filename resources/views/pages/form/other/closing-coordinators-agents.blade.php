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
        padding: 18px 0;
        text-transform: uppercase;
    }

    .agents img {
        border-radius: 10px;
        max-height: 350px;
        object-fit: cover;
        object-position: top;
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