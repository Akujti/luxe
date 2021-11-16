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
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/366814638?h=cebffa9b9c" width="100%" height="300px"
                frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/366814638">Your Hidden Power- Exceptional Customer Service | Florida Realtors
                    Convention |
                    Oct 2019 | English | Mini Session</a> from <a href="https://vimeo.com/luxeknows">LUXE Properties</a>
                on <a href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/365607188?h=e66ede2569" width="100%" height="300px"
                frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/365607188">How Brokers Can Channel Their Inner &#039;Groot&#039; to Connect
                    with Consumers
                    | Realtors Convention | Oct 2019 | English | Long Session</a> from <a
                    href="https://vimeo.com/luxeknows">LUXE
                    Properties</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/289366630?h=a09ecd41b4" width="100%" height="300px"
                frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/289366630">You Have Seven Seconds &ndash; Make Them Count | Florida Realtors
                    Convention |
                    Oct 2019 | English | Long Session</a> from <a href="https://vimeo.com/luxeknows">LUXE Properties</a>
                on <a href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/289134064?h=d5858347aa" width="100%" height="300px"
                frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/289134064">Communicate Clearly | Florida Realtors Convention | Oct 2019 |
                    English | Mini
                    Session</a> from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a
                    href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4"><iframe src="https://player.vimeo.com/video/289132979?h=6e8ee77e48"
                width="100%" height="300px" frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
                allowfullscreen></iframe>
            <p><a href="https://vimeo.com/289132979">Kiss, Bow or Shake Hands | Florida Realtors Convention | Oct 2019 |
                    English |
                    Mini Session</a> from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a
                    href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4"><iframe src="https://player.vimeo.com/video/288786052?h=900c11b786"
                width="100%" height="300px" frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
                allowfullscreen></iframe>
            <p><a href="https://vimeo.com/288786052">The Business of Storytelling | Florida Realtors Convention | Oct
                    2019 | English
                    | Mini Session</a> from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a
                    href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4"><iframe src="https://player.vimeo.com/video/236597366?h=04fd35bb8f"
                width="100%" height="300px" frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
                allowfullscreen></iframe>
            <p><a href="https://vimeo.com/236597366">The Art of Reading the Client - Create Chemistry Not Conflict |
                    Florida
                    Realtors Convention | Oct 2019 | English | Mini Session</a> from <a
                    href="https://vimeo.com/luxeknows">LUXE
                    Properties</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4"><iframe src="https://player.vimeo.com/video/236594566?h=a0a1766372"
                width="100%" height="300px" frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
                allowfullscreen></iframe>
            <p><a href="https://vimeo.com/236594566">What Buyers and Sellers Want | Florida Realtors Convention | Oct
                    2019 | English
                    | Mini Session</a> from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a
                    href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4"><iframe src="https://player.vimeo.com/video/236582730?h=a233596c53"
                width="100%" height="300px" frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
                allowfullscreen></iframe>
            <p><a href="https://vimeo.com/236582730">Delighting Our Millennial Customers | Florida Realtors Convention |
                    Oct 2019 |
                    English | Mini Session</a> from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a
                    href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4"><iframe src="https://player.vimeo.com/video/186474748?h=b40d8a79ff"
                width="100%" height="300px" frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
                allowfullscreen></iframe>
            <p><a href="https://vimeo.com/186474748">Going the Extra 1% - Remarkable Customer Experience | Florida
                    Realtors
                    Convention | Oct 2019 | English | Mini Session</a> from <a href="https://vimeo.com/luxeknows">LUXE
                    Properties</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
        </div>
    </div>
</div>
@endsection