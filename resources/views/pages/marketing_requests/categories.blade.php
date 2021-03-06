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

        main, #app {
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
            @foreach($marketing_categories as $category)
                <div class="col my-2">
                    <div class="bg-transparent">
                        <a href="{{route('marketing.request',$category)}}">
                            <div class="card-body text-center p-0">
                                <img src="{{$category->image}}" alt="" width="92" height="92">
                            </div>
                            <div class="card-header">
                                {{$category->title}}
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


@endsection
