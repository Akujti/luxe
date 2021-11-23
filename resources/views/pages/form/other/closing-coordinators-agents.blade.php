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
    <h1 class="text-center text-white">CLOSING COORDINATORS</h1>
    <div class="row">
        @foreach ($coordinators as $coordinator)
        <div class="col my-2">
            @if (auth()->user() && auth()->user()->isAdmin)
            <form action="{{route('change_status')}}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{$coordinator->id}}">
                <button type="submit" class="btn btn-luxe text-center w-100">{{$coordinator->status ?
                    'Hide':'Show'}}</button>
            </form>
            @endif
            @if ($coordinator->status)
            <div class="bg-transparent">
                <a href="{{route('closing-coordinator',$coordinator->id)}}">
                    <div class="card-header">
                        <img src="{{asset($coordinator->image)}}" alt="" class="w-100">
                        <p class="agent-name">{{$coordinator->name}}</p>
                    </div>
                </a>
            </div>
            @else
            <div class="bg-transparent">
                <div class="card-header">
                    <img src="{{asset($coordinator->image)}}" alt="" class="w-100">
                    <p class="agent-name">Sorry this closing coordinator is not taking any files at the moment
                    </p>
                </div>
            </div>
            @endif

        </div>
        @endforeach
        {{-- <div class="col my-2">
            <div class="bg-transparent">
                <a
                    href="/general/form/other/closing-coordinators?agent_email=victoria@luxeknows.com&agent_text=Closing Coordinator - Basic Package $200 - VIP Package $325">
                    <div class="card-header">
                        <img src="{{asset('images/agents/victoria.jpg')}}" alt="" class="w-100">
                        <p class="agent-name">Victoria Lettieri</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="col my-2">
            <div class="bg-transparent">
                <a
                    href="/general/form/other/closing-coordinators?agent_email=theclosinggenie@gmail.com&agent_text=Senior Closing Coordinator - Standard Package $399">
                    <div class="card-header">
                        <img src="{{asset('images/agents/maribel.jpg')}}" alt="" class="w-100">
                        <p class="agent-name">Maribel Gonzalez</p>
                    </div>
                </a>
            </div>
        </div> --}}
    </div>
</div>


@endsection
