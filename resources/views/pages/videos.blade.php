@extends('layouts.app')
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
    }
</style>
@endsection
@section('content')
<style>
</style>
<div class="container">
    <p class="text-center" style="font-size: 28px">Password to watch videos is: Luxeknows123</p>
    <div class="row my-4">
        <div class="col-12 col-lg-4 mb-4">
            <div class="folder mb-2">
                <a href="{{route('video.folder','first_video_folder')}}">
                    <img src="/images/files/video-folder.png" alt="">
                    <p>
                        Seller Representation
                    </p>
                </a>
            </div>
        </div>
        <div class="col-12 col-lg-4 mb-4">
            <div class="folder mb-2">
                <a href="{{route('video.folder','second_video_folder')}}">
                    <img src="/images/files/video-folder.png" alt="">
                    <p>
                        Buyer Representation
                    </p>
                </a>
            </div>
        </div>
        <div class="col-12 col-lg-4 mb-4">
            <div class="folder mb-2">
                <a href="{{route('video.folder','third_video_folder')}}">
                    <img src="/images/files/video-folder.png" alt="">
                    <p>
                        Tenant Representation
                    </p>
                </a>
            </div>
        </div>
        <div class="col-12 col-lg-4 mb-4">
            <div class="folder mb-2">
                <a href="{{route('video.folder','fourth_video_folder')}}">
                    <img src="/images/files/video-folder.png" alt="">
                    <p>
                        LUXE Tech Training
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