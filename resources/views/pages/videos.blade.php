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
    @include('includes.video_title')
    <div class="row my-4">
        <div class="col-12 col-lg-4 mb-4">
            <div class="folder mb-2">
                <a href="{{route('video.folder','working_with_buyers')}}">
                    <img src="/images/files/video-folder.png" alt="">
                    <p>
                        WORKING WITH BUYERS, SELLERS, & RENTALS
                    </p>
                </a>
            </div>
        </div>
        <div class="col-12 col-lg-4 mb-4">
            <div class="folder mb-2">
                <a href="{{route('video.folder','lead_generation_conversion')}}">
                    <img src="/images/files/video-folder.png" alt="">
                    <p>
                        LEAD GENERATION & CONVERSION
                    </p>
                </a>
            </div>
        </div>
        <div class="col-12 col-lg-4 mb-4">
            <div class="folder mb-2">
                <a href="{{route('video.folder','business_planning')}}">
                    <img src="/images/files/video-folder.png" alt="">
                    <p>
                        BUSINESS PLANNING & PERSONAL DEVELOPMENT
                    </p>
                </a>
            </div>
        </div>
        <div class="col-12 col-lg-4 mb-4">
            <div class="folder mb-2">
                <a href="{{route('video.folder','how_to_do_contracts_forms')}}">
                    <img src="/images/files/video-folder.png" alt="">
                    <p>
                        HOW TO DO CONTRACTS & FORMS
                    </p>
                </a>
            </div>
        </div>
        <div class="col-12 col-lg-4 mb-4">
            <div class="folder mb-2">
                <a href="{{route('video.folder','contracts_to_close')}}">
                    <img src="/images/files/video-folder.png" alt="">
                    <p>
                        CONTRACTS TO CLOSE
                    </p>
                </a>
            </div>
        </div>
        <div class="col-12 col-lg-4 mb-4">
            <div class="folder mb-2">
                <a href="{{route('video.folder','technology_walkthrough_how_to')}}">
                    <img src="/images/files/video-folder.png" alt="">
                    <p>
                        TECHNOLOGY WALK-THROUGH & HOW TO
                    </p>
                </a>
            </div>
        </div>
        <div class="col-12 col-lg-4 mb-4">
            <div class="folder mb-2">
                <a href="javascript:void(0)">
                    <img src="/images/files/video-folder.png" alt="">
                    <p>
                        MARKETING & BRANDING
                    </p>
                </a>
            </div>
        </div>
        <div class="col-12 col-lg-4 mb-4">
            <div class="folder mb-2">
                <a href="{{route('video.folder','inspections_financing_title_insurance')}}">
                    <img src="/images/files/video-folder.png" alt="">
                    <p>
                        INSPECTIONS, FINANCING, TITLE, INSURANCE
                    </p>
                </a>
            </div>
        </div>
        <div class="col-12 col-lg-4 mb-4">
            <div class="folder mb-2">
                <a href="javascript:void(0)">
                    <img src="/images/files/video-folder.png" alt="">
                    <p>
                        COMMERCIAL REAL ESTATE
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