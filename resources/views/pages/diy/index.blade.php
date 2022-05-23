@extends('layouts.app', ['active' => 'marketing_branding', 'subactive' => 'online_marketing_designer'])
@section('css')
<style>
    body {
        /* background: url('{{asset('images/bg-image1.jpg')}}'); */
        height: 100vh;
        /* background-size: cover;
            background-position: center;
            background-color: rgba(0, 0, 0, 0.7);
            background-blend-mode: color; */

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
        background-color: #262626;
        left: 50%;
        margin-left: -52px;
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
        color: #262626;
    }
    .box-item {
        background-color: #F7F7F7;
        text-align: center;
        height: 311px;
        margin-bottom: 26px;
        border-radius: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
    }

    .box-item img {
        object-fit: cover;
        width: 100%;
    }

    .box-item .icon {
        width: 70px;
        height: 70px;
        object-fit: cover;
    }

    .box-item p {
        font-size: 25px;
        font-family: 'gothicregular';
    }
    a {
        color: #262626;
    }
    .title h1 {
        font-family: 'gothicbold';
        text-align: center;
    }
    .title p {
        font-family: 'gothicregular';
        text-align: center;
    }
</style>
@endsection
@section('content')
<div class="container-fluid">
    <div class="col-12 title mb-3">
        <h1>Online Marketing Designer</h1>
        <p>Please select category which you like to design.</p>
    </div>
    <div class="row align-items-center box-items">
        @foreach($categories as $category)
        <div class="col-12 col-md-6 col-lg-3 my-2">
            <div class="box-item">
                <a href="{{route('user.diy-templates.show', $category)}}">
                    <div>
                        <img class="icon" src="{{ asset('storage/'.$category->image) }}" alt="">
                        <p>{{$category->title}}</p>
                    </div>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection