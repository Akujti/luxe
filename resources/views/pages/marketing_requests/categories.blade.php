@extends('layouts.app')
@section('css')
    <style>
        body {
            background: url('https://myluxehub.com/wp-content/uploads/2018/10/bg-top.jpg?id=372');
            height: 100vh;
            background-size: cover;
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
                            <div class="card-body text-center">
                                <img src="{{$category->image}}" alt="">
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
