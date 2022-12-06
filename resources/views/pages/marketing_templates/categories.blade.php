@extends('layouts.app', ['active' => 'marketing_branding', 'subactive' => 'canva_marketing_designer'])
@section('css')
    <style>
        body {
            /* background: url('{{ asset('images/bg-image1.jpg') }}'); */
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
            <h1>Canva Marketing Designer</h1>
            <p>Please select the category which you would like to design.</p>
        </div>
        <div class="grid grid-layout">
            @foreach ($marketing_categories as $category)
                <div class="box-item">
                    <a href="{{ route('canva.marketing.request', $category) }}">
                        <div>
                            <img class="icon" src="{{ asset('storage/' . $category->image) }}" alt="">
                            <p>{{ $category->title }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
