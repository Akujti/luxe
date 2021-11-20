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
        <div class="col-12 col-lg-6 mb-4"><iframe src="https://player.vimeo.com/video/520009698?h=82d8504764"
                width="640" height="328" frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
                allowfullscreen></iframe>
            <p><a href="https://vimeo.com/520009698">The Rental Game | Juan Suarez | Mar 4th | English | Long
                    Session</a> from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a
                    href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4"><iframe src="https://player.vimeo.com/video/366801126?h=15c92b6bda"
                width="640" height="480" frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
                allowfullscreen></iframe>
            <p><a href="https://vimeo.com/366801126">Clarifying Service Animals | Florida Realtors Convention | Oct 2019
                    | English |
                    Mini Session</a> from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a
                    href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4"><iframe src="https://player.vimeo.com/video/134888536?h=541859aef0"
                width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
                allowfullscreen></iframe>
            <p><a href="https://vimeo.com/134888536">How to do a Lease | Wesley Ulloa | July 2015 | English | Mini
                    Session</a> from
                <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a href="https://vimeo.com">Vimeo</a>.
            </p>
        </div>
        <div class="col-12 col-lg-6 mb-4"><iframe src="https://player.vimeo.com/video/133791225?h=3a17ffe922"
                width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
                allowfullscreen></iframe>
            <p><a href="https://vimeo.com/133791225">How to do a Rental Listing Agreement | Wesley Ulloa | July 2015 |
                    English |
                    Mini Session</a> from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a
                    href="https://vimeo.com">Vimeo</a>.</p>
        </div>
    </div>
</div>
@endsection