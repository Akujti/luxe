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
            <iframe src="https://player.vimeo.com/video/556336773?h=ff0e1d0abd" width="100%" height="300px"
                frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/556336773">kvCORE Orientation | Irais Hernandez | May 21st | Spanish | Mini
                    Session</a>
                from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a href="https://vimeo.com">Vimeo</a>.
            </p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/520079763?h=11a3268966" width="100%" height="300px"
                frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/520079763">KvCore Training | Irais Hernandez | Feb 22nd | English | Mini
                    Session</a> from
                <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
        </div>
    </div>
</div>
@endsection