@extends('layouts.app')
@section('css')
<style>
    a {
        text-decoration: none;
        color: black;
    }

    a:hover {
        color: black;
    }

    .row img {
        object-fit: cover;
    }
</style>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row box-title p-0 m-0 justify-content-center">
        <h3 class="text-center">Please choose a theme below which you want to use. Just click on it and then you can edit.</h3>
    </div>
    <div class="row my-5 justify-content-start">
        @if($templates->count())
            @foreach($templates as $template)
            <div class="col d-flex justify-content-center">
                <div class="template-box">
                    <a href="{{route('canva.marketing.template',['marketingCanva' => $template->canva, 'template' => $template])}}">
                        <img src="{{ asset('storage/'. $template->image) }}" alt="No image found" width="100%" height="303px"
                        onerror="this.src='{{asset('images/no-image.png')}}';">
                        <div class="template-details">
                            <p>{{$template->title}}</p>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        @else <p>No templates found.</p>
        @endif
    </div>
</div>

@endsection