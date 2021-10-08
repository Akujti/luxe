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
    <div class="row my-4">
        <div class="col-12 col-lg-6 mb-4">
            <div style="padding:56.25% 0 0 0;position:relative;"><iframe
                    src="https://player.vimeo.com/video/583855695?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479&amp;h=0e15b635b7"
                    frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen
                    style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Zillow 08/04/2021"></iframe>
            </div>
            <script src="https://player.vimeo.com/api/player.js"></script>
        </div>
    </div>
</div>
@endsection