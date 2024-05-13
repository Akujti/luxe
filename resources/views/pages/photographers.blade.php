@extends('layouts.app', ['active' => 'office_staff_directory', 'subactive' => 'office_locations'])
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
            /*height: 100%;*/
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
            margin-bottom: 0;
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
                                <div class="photographer-card position-sticky" style="top:150px">
                                    <img src="{{ $photographer->avatar_url}}" class="photographer-image">
                                    <div class="photographer-info">
                                        <p class="photographer-name">{{ $photographer->name}}</p>
                                        <p class="photographer-email">{{ $photographer->email}}</p>
                                        <p class="photographer-properties">{{ $photographer->properties()->count()}}
                                            {{$photographer->properties()->count() ==1 ? 'property':'properties'}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9 mb-3">
                                @foreach($photographer->properties as $property)
                                    <div class="">
                                        <div id="carouselExampleControls-{{$property->id}}" class="carousel slide"
                                             data-ride="carousel">
                                            <div class="carousel-inner">
                                                @foreach($property->images as $image)
                                                    <div class="carousel-item {{$loop->first ? 'active':''}}">
                                                        <img class="d-block w-100 property-image"
                                                             src="{{$image->url_large}}"
                                                             alt="First slide">
                                                    </div>
                                                @endforeach
                                            </div>
                                            <a class="carousel-control-prev"
                                               href="#carouselExampleControls-{{$property->id}}"
                                               role="button"
                                               data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next"
                                               href="#carouselExampleControls-{{$property->id}}"
                                               role="button"
                                               data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                        <h4 class="mb-0 mt-3 text-center">{{$property->address}}</h4>
                                    </div>
                                    <hr>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
