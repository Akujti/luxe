@extends('layouts.app')
@section('css')
@endsection
@section('content')
<div class="container-fluid">
    <div class="row box-title p-0 m-0">
        <h3 class="text-center">{{ $template->title }}</h3>
    </div>
    <div class="row my-5 justify-content-start">
        @if($templates->count())
        @foreach($templates as $template)
        <div class="col d-flex justify-content-center">
            <div class="template-box">
                <a href="{{ $template->url }}" target="_blank">
                    <img src="{{ asset('storage/'. $template->image) }}" alt="No image found" width="100%" height="303px" onerror="this.src='{{asset('images/no-image.png')}}';">
                    <div class="template-details d-flex justify-content-between align-items-center">
                        <p>{{$template->title}}</p>
                        <div>
                            <span><img src="/images/index-page/download-icon.svg" alt=""></span>
                            <span><img src="/images/index-page/edit-icon.svg" alt=""></span>
                        </div>
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