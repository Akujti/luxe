@extends('layouts.app')
@section('content')
    <style>
        .title h1 {
            font-family: 'gothicbold';
        }

        .gallery {
            box-shadow: 0px 0px 12px 0px rgb(0 0 0 / 9%);
            border-radius: 20px;
            overflow: hidden;
        }

        .gallery p {
            position: relative;
            z-index: 100;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.7) 0%, rgba(255, 255, 255, 0) 100%);
            z-index: 99;
            color: white;
        }

        .gallery img {
            height: 250px;
            object-fit: cover;
        }
    </style>
    <div class="container-fluid">
        <div class="w-100 m-0 mb-5">
            <div class="title mb-3 text-center row justify-content-between">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <h1>{{$gallery->title}}</h1>
                </div>
                <div class="col-md-4">
                    @if($gallery->link)
                        <a href="{{$gallery->link}}" target="_blank"
                           class="btn btn-luxe text-center d-block mr-md-0 ml-md-auto mx-auto"
                           style="width:fit-content;">
                            View More</a>
                    @endif
                </div>
            </div>
            <div class="row">
                @foreach($gallery->images as $image)
                    <div class="col-md-4 mb-4">
                        <a href="{{$image->url_large}}" target="_blank" download="">
                            <div class="gallery">
                                <img class="d-block w-100 property-image" src="{{$image->url_small}}">
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
