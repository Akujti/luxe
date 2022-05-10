@extends('layouts.app', ['active' => 'Tools&TrainingVideos', 'subactive' => 'training_videos'])
@section('js')
<script src="https://vjs.zencdn.net/7.14.3/video.min.js"></script>
@endsection
@section('css')
<link href="https://vjs.zencdn.net/7.14.3/video-js.css" rel="stylesheet" />
<style>
    .folder {
        min-height: 300px;
        transition: .2s;
        border: 1px solid rgb(246, 246, 246);
        padding: 5px;
        text-align: center;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0px 0px 12px 0px rgb(0 0 0 / 9%);
    }

    .video {
        min-height: 300px;
        transition: .2s;
        border: 1px solid rgb(246, 246, 246);
        display: flex;
        align-items: center;
        box-shadow: 0px 0px 12px 0px rgb(0 0 0 / 9%);
        border-radius: 10px;
    }

    .video img {
        width: 100%;
        object-fit: cover !important;
        height: 303px;
        border-radius: 10px 10px 0px 0px;
    }

    .video .title {
        font-size: 18px;
        font-family: 'gothicbold';
    }

    .video .time {
        font-size: 16px;
        font-family: 'gothicregular';
    }

    .video a {
        width: 100%;
        color: #262626;
    }

    .folder a {
        color: black;
    }

    .folder p {
        margin: 0;
    }

    .folder .title {
        margin-top: 30px !important;
    }

    .folder:hover {
        transition: .2s;
        transform: translateY(3px);
        cursor: pointer;
    }

    .folder:hover .delete-button {
        display: block;
    }

    .folder img:not(.img) {
        width: 70%;
    }
</style>
@endsection
@section('content')
<style>
</style>
<div class="container-fluid">
    {{-- @include('includes.video_title') --}}
    <div class="row">
        <div class="col-12 title mb-3 text-center">
            <h1 class="font-weight-bold">Welcome to LUXE Online University</h1>
        </div>
        @foreach($videoFolders as $folder)
        <div class="col-12 col-lg-3 mb-4">
            <div class="folder mb-2">
                <a href="{{route('videos')}}?id={{$folder->id}}">
                    <img src="/images/files/video-folder.svg" alt="" class="img" width="200px" height="160px">
                    <p class="title">
                        {{ $folder->title }}
                    </p>
                </a>
            </div>
        </div>
        @endforeach

        @foreach($videos as $video)
        <div class="col-12 col-lg-6 mb-4">
            <div class="video mb-2">
                <a href="{{route('video.single_video', $video->id)}}">
                    <!-- /images/files/video-folder.svg -->
                    <img src="{{ $video->vimeo_details['thumbnail'] }}" alt="" class="img">
                    <div class="p-4">
                        <p class="title">
                            {{ $video->vimeo_details['name'] }}
                        </p>
                        <div class="d-flex justify-content-between">
                            <p class="time p-0 m-0">{{ $video->vimeo_details['created_at'] }}</p>
                            <p class="time p-0 m-0">By <span class="title">LUXE Properties</span></p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        @endforeach

        {{-- <div class="col-12 col-lg-3 mb-4">
            <div class="folder mb-2">
                <a href="{{route('video.folder','working_with_buyers')}}">
                    <img src="/images/files/video-folder.svg" alt="">
                    <p>
                        WORKING WITH BUYERS, SELLERS, & RENTALS
                    </p>
                </a>
            </div>
        </div>
        <div class="col-12 col-lg-3 mb-4">
            <div class="folder mb-2">
                <a href="{{route('video.folder','lead_generation_conversion')}}">
                    <img src="/images/files/video-folder.svg" alt="">
                    <p>
                        LEAD GENERATION & CONVERSION
                    </p>
                </a>
            </div>
        </div>
        <div class="col-12 col-lg-3 mb-4">
            <div class="folder mb-2">
                <a href="{{route('video.folder','business_planning')}}">
                    <img src="/images/files/video-folder.svg" alt="">
                    <p>
                        BUSINESS PLANNING & PERSONAL DEVELOPMENT
                    </p>
                </a>
            </div>
        </div>
        <div class="col-12 col-lg-3 mb-4">
            <div class="folder mb-2">
                <a href="{{route('video.folder','how_to_do_contracts_forms')}}">
                    <img src="/images/files/video-folder.svg" alt="">
                    <p>
                        HOW TO DO CONTRACTS & FORMS
                    </p>
                </a>
            </div>
        </div>
        <div class="col-12 col-lg-3 mb-4">
            <div class="folder mb-2">
                <a href="{{route('video.folder','contracts_to_close')}}">
                    <img src="/images/files/video-folder.svg" alt="">
                    <p>
                        CONTRACTS TO CLOSE
                    </p>
                </a>
            </div>
        </div>
        <div class="col-12 col-lg-3 mb-4">
            <div class="folder mb-2">
                <a href="{{route('video.folder','technology_walkthrough_how_to')}}">
                    <img src="/images/files/video-folder.svg" alt="">
                    <p>
                        TECHNOLOGY WALK-THROUGH & HOW TO
                    </p>
                </a>
            </div>
        </div>
        <div class="col-12 col-lg-3 mb-4">
            <div class="folder mb-2">
                <a href="javascript:void(0)">
                    <img src="/images/files/video-folder.svg" alt="">
                    <p>
                        MARKETING & BRANDING
                    </p>
                </a>
            </div>
        </div>
        <div class="col-12 col-lg-3 mb-4">
            <div class="folder mb-2">
                <a href="{{route('video.folder','inspections_financing_title_insurance')}}">
                    <img src="/images/files/video-folder.svg" alt="">
                    <p>
                        INSPECTIONS, FINANCING, TITLE, INSURANCE
                    </p>
                </a>
            </div>
        </div>
        <div class="col-12 col-lg-3 mb-4">
            <div class="folder mb-2">
                <a href="{{route('video.folder','commercial_real_estate')}}">
                    <img src="/images/files/video-folder.svg" alt="">
                    <p>
                        COMMERCIAL REAL ESTATE
                    </p>
                </a>
            </div>
        </div>
        <div class="col-12">
            <a href="https://vimeo.com/manage/videos" class="btn btn-luxe w-100">View More</a>
        </div> --}}
    </div>
</div>
@endsection