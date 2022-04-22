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
<div class="container-fluid">
    @include('includes.video_title')
    <div class="row">
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/561376601?h=7014c789d2" width="100%" height="300px"
                frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/561376601">Commercial MLS and iMapp | Robert Rodriguez from Miami RE | Jun 8th
                    | English |
                    Mini Session</a> from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a
                    href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/529542321?h=f87a7afd90" width="100%" height="300px"
                frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/529542321">Commercial Industrial and Multifamily Markets | Deni Alvarez | Mar
                    11th |
                    English | Long Session</a> from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a
                    href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/520125659?h=5fcbc9b9ae" width="100%" height="300px"
                frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/520125659">Commercial Lease | Attorney Ken Damas | Feb 12th | English | Mini
                    Session</a>
                from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a href="https://vimeo.com">Vimeo</a>.
            </p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/501028392?h=df2d630147" width="100%" height="300px"
                frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/501028392">Everything you need to know about Multi-family Homes | Deni Alvarez
                    | Jan 15th
                    | English | Long Session</a> from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a
                    href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/481791819?h=db9f9ccec4" width="100%" height="300px"
                frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/481791819">Commercial Real Estate | Deni Alvarez | Nov 17th | English | Long
                    Session</a>
                from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a href="https://vimeo.com">Vimeo</a>.
            </p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/466704411?h=65a5721f1f" width="100%" height="300px"
                frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/466704411">Increase Profitability by Leveraging MORE Commercial Tools | MIAMI
                    RE | Sept 25
                    | English | Long Session</a> from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a
                    href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/435212351?h=d258b5fc70" width="100%" height="300px"
                frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/435212351">Real Estate Tax Strategies | Wesley Ulloa | June 11 2021 | English
                    | Mini
                    Session</a> from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a
                    href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/435189146?h=89df28aea5" width="100%" height="300px"
                frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/435189146">Commercial Real Estate | Wesley Ulloa | June 30 2020 | English |
                    Mini
                    Session</a> from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a
                    href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/425671626?h=f5ee21e93e" width="100%" height="300px"
                frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/425671626">Letters of intent and Commercial Leases | Wesley Ulloa | May 29
                    2020 | English
                    | Mini Session</a> from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a
                    href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/413778029?h=fbd4887fd2" width="100%" height="300px"
                frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/413778029">Business Brokerage | Wesley Ulloa | Apr 30 2021 | English | Long
                    Session</a>
                from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a href="https://vimeo.com">Vimeo</a>.
            </p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/365555913?h=50ae5a2286" width="100%" height="300px"
                frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/365555913">Go Rogue! The Power of Commercial Real Estate | Florida Realtors
                    Convention |
                    Oct 2019 | English | Mini Session</a> from <a href="https://vimeo.com/luxeknows">LUXE Properties</a>
                on <a href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/323264059?h=f461f579fd" width="100%" height="300px"
                frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/323264059">Working with Investors for Flips, Commercial Real Estate | Wesley
                    Ulloa | March
                    2019 | English | Long Session</a> from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on
                <a href="https://vimeo.com">Vimeo</a>.
            </p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/186473054?h=92392ff5df" width="100%" height="300px"
                frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/186473054">Commercial Real Estate Basics | Florida Realtors Convention | Oct
                    2019 |
                    English | Mini Session</a> from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a
                    href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12">
            <a href="https://vimeo.com/manage/videos" class="btn btn-luxe w-100">View More</a>
        </div>
    </div>
</div>
@endsection