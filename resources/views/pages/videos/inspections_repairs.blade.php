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

    iframe {
        width: 100% !important;
        height: 300px !important
    }
</style>
@endsection
@section('content')
<style>
</style>
<div class="container">
    @include('includes.video_title')
    <div class="row my-4">
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/466617205?h=6ff28ebfca" width="100%" height="328"
                frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/466617205">Architecture Types, Finishes, Costs Analysis | Wesley Ulloa | Sept
                    30 2020 |
                    English | Long Session</a> from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a
                    href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/289463492?h=92887afd8c" width="100%" height="480"
                frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/289463492">Home Inspections: The 411 You Need to Avoid a 911 | Florida
                    Realtors Convention
                    | Oct 2019 | English | Long Session</a> from <a href="https://vimeo.com/luxeknows">LUXE
                    Properties</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/289365943?h=b4a8e4fb60" width="100%" height="480"
                frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/289365943">Q &amp; A on Condos, CAMs &amp; HOAs &ndash; All You Need to Know
                    and More! |
                    Florida Realtors Convention | Oct 2019 | English | Mini Session</a> from <a
                    href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/281492384?h=081fdb6152" width="100%" height="360"
                frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/281492384">Everything You Need to Know about Permits, Construction and
                    Violations | Wesley
                    Ulloa | June 2017 | English | Long Session</a> from <a href="https://vimeo.com/luxeknows">LUXE
                    Properties</a> on
                <a href="https://vimeo.com">Vimeo</a>.
            </p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/264525658?h=1033f54d83" width="100%" height="360"
                frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/264525658">Inspection Training | Wesley Ulloa | April 2018 | English | Long
                    Session</a>
                from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a href="https://vimeo.com">Vimeo</a>.
            </p>
        </div>
    </div>
</div>
@endsection