@extends('layouts.app')
@section('content')
    <style>
        .title h1 {
            font-family: 'gothicbold';
        }

        .gallery {
            box-shadow: 0px 0px 12px 0px rgb(0 0 0 / 9%);
            position: relative;
        }

        .gallery p {
            position: relative;
            z-index: 100;
        }

        .gallery img.property-image {
            height: 250px;
            object-fit: cover;
            border-radius: 20px;
            cursor: pointer;
        }

        .download-link {
            position: absolute;
            top: -10px;
            right: -10px;
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
                @foreach($images as $image)
                    <div class="col-md-4 mb-4">
                        <div class="gallery">
                            <x-preview-image>
                                <img class="d-block w-100 property-image modal-target"
                                     src="{{$image->url_large}}">
                            </x-preview-image>
                            <a href="{{$image->url_large}}" target="_blank" download=""
                               class="download-link">
                                <img src="{{ asset('images/index-page/download.svg') }}" width="34" height="34">
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
