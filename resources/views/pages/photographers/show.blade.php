@extends('layouts.app', ['active' => 'office_staff_directory', 'subactive' => 'photographers'])
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
        <div class="title mb-3 text-center">
            <h1>{{$photographer->name}}</h1>
        </div>
        <div class="row mb-3">
            @foreach($photographer->properties as $property)
                <div class="col-md-4 mb-4">
                    <a href="{{route('photographers.show.images',[$photographer,$property])}}" target="_blank">
                        <div class="gallery">
                            <div id="carouselExampleControls-{{$property->id}}" class="carousel slide"
                                 data-ride="carousel">
                                <div class="carousel-inner">
                                    @foreach($property->images as $image)
                                        <div class="carousel-item {{$loop->first ? 'active':''}}">
                                            <img class="d-block w-100 property-image"
                                                 src="{{$image->url_small}}">
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
                            <p class="my-2 text-center position relative">{{$property->address}}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    </div>
@endsection
