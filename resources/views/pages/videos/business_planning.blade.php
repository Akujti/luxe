@extends('layouts.app', ['active' => 'Tools&TrainingVideos'])
@section('js')
<script src="https://vjs.zencdn.net/7.14.3/video.min.js"></script>
@endsection
@section('css')
<link href="https://vjs.zencdn.net/7.14.3/video-js.css" rel="stylesheet" />
<style>
    .folder {
        min-height: 155px;
        transition: .2s;
        border: 1px solid rgb(246, 246, 246);
        padding: 5px;
        text-align: center;
        position: relative;
    }

    .folder a {
        color: black;
    }

    .folder p {
        margin: 0;
        margin-bottom: 20px;
    }

    .folder:hover {
        transition: .2s;
        transform: translateY(3px);
        cursor: pointer;
    }

    .folder:hover .delete-button {
        display: block;
    }

    .folder img {
        width: 70%;
        height: 220px;
        margin-top: 20px;
    }
</style>
@endsection
@section('content')
<style>
</style>
<div class="container-fluid">
    @include('includes.video_title')
    <div class="row">
        <div class="col-12 col-lg-3 mb-4">
            <div class="folder mb-2">
                <a href="{{route('video.folder','communication_service_clients')}}">
                    <img src="/images/files/video-folder.svg" alt="">
                    <p>
                        Communication, Service & Clients
                    </p>
                </a>
            </div>
        </div>
        <div class="col-12 col-lg-3 mb-4">
            <div class="folder mb-2">
                <a href="{{route('video.folder','personal_development')}}">
                    <img src="/images/files/video-folder.svg" alt="">
                    <p>
                        Personal Development / Mindset
                    </p>
                </a>
            </div>
        </div>
        <div class="col-12">
            <a href="https://vimeo.com/manage/videos" class="btn btn-luxe w-100">View More</a>
        </div>
    </div>
</div>
@endsection