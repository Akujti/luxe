@extends('layouts.app', ['active' => 'office_staff_directory', 'subactive' => 'photographers'])
@section('content')
    <style>
        .wrapper h1 {
            font-weight: 400;
            letter-spacing: 2px;
            background: #262626;
            padding: 10px;
            border: 1px solid #dadada;
            border-radius: 10px;
            color: #fff;
        }

        .photographer-card {
            border-radius: 20px;
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
            overflow: hidden;
            height: 100%;
        }

        .photographer-image {
            height: 250px;
            width: 100%;
            object-fit: cover;
        }

        .photographer-info {
            padding: 20px;
        }

        .photographer-info p {
            color: black;
            margin-bottom: 0;
        }

        .photographer-info a:hover {
            text-decoration: none;
        }

        .photographer-name {
            font-weight: 600;
            font-size: 20px;
        }

        .property-image {
            border-radius: 20px;
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
            height: 400px;
            object-fit: cover;
        }

        .carousel-item {
            border-radius: 20px;
        }
    </style>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="">
                    <div class="wrapper">
                        <h1 class="text-center mb-4">Photographers</h1>
                    </div>
                    <div class="row">
                        @foreach($photographers as $photographer)
                            <div class="col-md-3 mb-3">
                                <div class="photographer-card">
                                    <img src="{{ $photographer->avatar_url}}" class="photographer-image">
                                    <div class="photographer-info">
                                        <p class="photographer-name">{{ $photographer->name}}</p>
                                        <p class="photographer-email">{{ $photographer->email}}</p>
                                        <p class="photographer-properties"><a
                                                    href="{{route('photographers.show',$photographer)}}">View Photo
                                                Portfolio</a></p>
                                        @if($photographer->link)
                                            <p class="photographer-link mt-2">
                                                <a target="_blank" href="{{$photographer->link}}"
                                                   class="text-dark">View
                                                    Video / Reel</a>
                                            </p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
