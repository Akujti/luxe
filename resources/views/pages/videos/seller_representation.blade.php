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
            <iframe src="https://player.vimeo.com/video/546502927?h=ee219cf01e" width="640" height="328" frameborder="0"
                allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/546502927">Nailing Your Listing Presentation | Denisse Uyema | Apr 20th |
                    English | Long
                    Session</a> from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a
                    href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4"><iframe src="https://player.vimeo.com/video/546201500?h=31357f2982"
                width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
                allowfullscreen></iframe>
            <p><a href="https://vimeo.com/546201500">Understanding FIRPTA | Steven E. Gurian | Apr 29th | English | Mini
                    Session</a>
                from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a href="https://vimeo.com">Vimeo</a>.
            </p>
        </div>
        <div class="col-12 col-lg-6 mb-4"><iframe src="https://player.vimeo.com/video/533366843?h=8b76d73b26"
                width="640" height="328" frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
                allowfullscreen></iframe>
            <p><a href="https://vimeo.com/533366843">Nailing Your Listing Presentation | Wesley Ulloa | Jan 25 | English
                    | Long
                    Session</a> from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a
                    href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4"><iframe src="https://player.vimeo.com/video/529534833?h=d766a9eb23"
                width="640" height="328" frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
                allowfullscreen></iframe>
            <p><a href="https://vimeo.com/529534833">Got a Listing, What&#039;s Next? | Denisse Uyema | Mar 9th |
                    English | Long
                    Session</a> from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a
                    href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4"><iframe src="https://player.vimeo.com/video/529428806?h=6b013177ae"
                width="640" height="328" frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
                allowfullscreen></iframe>
            <p><a href="https://vimeo.com/529428806">Staging to Sell COVID Edition | Janice Garcia | Mar 24th | English
                    | Mini
                    Session</a> from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a
                    href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4"><iframe src="https://player.vimeo.com/video/481704662?h=4d862ade93"
                width="640" height="328" frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
                allowfullscreen></iframe>
            <p><a href="https://vimeo.com/481704662">Seller Representation | Katherine Arteta | Nov 13th | English |
                    Mini
                    Session</a> from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a
                    href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4"><iframe src="https://player.vimeo.com/video/466634124?h=d0f9cfc93d"
                width="640" height="328" frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
                allowfullscreen></iframe>
            <p><a href="https://vimeo.com/466634124">Staging for Success | Janice Garcia | Aug 31st | English | Long
                    Session</a>
                from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a href="https://vimeo.com">Vimeo</a>.
            </p>
        </div>
        <div class="col-12 col-lg-6 mb-4"><iframe src="https://player.vimeo.com/video/456733451?h=02dc8a6d04"
                width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
                allowfullscreen></iframe>
            <p><a href="https://vimeo.com/456733451">How to Prep Your Home for AMAZING photos | Steven Vivar | Sept 10th
                    2020 |
                    English | Mini Session</a> from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a
                    href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4"><iframe src="https://player.vimeo.com/video/444562972?h=15baae8d9d"
                width="640" height="328" frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
                allowfullscreen></iframe>
            <p><a href="https://vimeo.com/444562972">What to Know When Selling Land | Wesley Ulloa | July 21 2020 |
                    English | Mini
                    Session</a> from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a
                    href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4"><iframe src="https://player.vimeo.com/video/444562971?h=5c3671c2bd"
                width="640" height="328" frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
                allowfullscreen></iframe>
            <p><a href="https://vimeo.com/444562971">What to Know when Selling A Condo | Wesley Ulloa | July 13 2020 |
                    English |
                    Mini Session</a> from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a
                    href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4"><iframe src="https://player.vimeo.com/video/425670614?h=8215cb78d7"
                width="640" height="328" frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
                allowfullscreen></iframe>
            <p><a href="https://vimeo.com/425670614">Home Staging, Definitions and Proper Showings | Janice Garcia | May
                    28 2020 |
                    English | Mini Session</a> from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a
                    href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4"><iframe src="https://player.vimeo.com/video/289352454?h=ddac64dd54"
                width="640" height="480" frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
                allowfullscreen></iframe>
            <p><a href="https://vimeo.com/289352454">Cut Your Hair, Not Your Fees | Florida Realtors Convention | Oct
                    2018 | English
                    | Long Session</a> from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a
                    href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4"><iframe src="https://player.vimeo.com/video/189214997?h=0704f45d7f"
                width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
                allowfullscreen></iframe>
            <p><a href="https://vimeo.com/189214997">Sasha Farmer - Crushing Your Competition at The Listing Table |
                    Florida
                    Realtors Convention | Oct 2018 | English | Mini Session</a> from <a
                    href="https://vimeo.com/luxeknows">LUXE
                    Properties</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4"><iframe src="https://player.vimeo.com/video/186477372?h=e1c981f5df"
                width="640" height="480" frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
                allowfullscreen></iframe>
            <p><a href="https://vimeo.com/186477372">How to Double Your Rate of Return by 1031 Exchanging | Florida
                    Realtors
                    Convention | Oct 2018 | English | Mini Session</a> from <a href="https://vimeo.com/luxeknows">LUXE
                    Properties</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4"><iframe src="https://player.vimeo.com/video/186469816?h=b0eb82be41"
                width="640" height="480" frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
                allowfullscreen></iframe>
            <p><a href="https://vimeo.com/186469816">Crush Your Competition at the Listing Table (Part 2) | Florida
                    Realtors
                    Convention | Oct 2018 | English | Mini Session</a> from <a href="https://vimeo.com/luxeknows">LUXE
                    Properties</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4"><iframe src="https://player.vimeo.com/video/129485436?h=d64a791a9b"
                width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
                allowfullscreen></iframe>
            <p><a href="https://vimeo.com/129485436">How to do a Net Sheet | Wesley Ulloa | June 2015 | English | Mini
                    Session</a>
                from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a href="https://vimeo.com">Vimeo</a>.
            </p>
        </div>
        <div class="col-12 col-lg-6 mb-4"><iframe src="https://player.vimeo.com/video/641636689?h=7af896318f"
                width="640" height="328" frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
                allowfullscreen></iframe>
            <p><a href="https://vimeo.com/641636689">Addendum Breakdown | Wesley Ulloa | Nov 1st 2021 | English | Long
                    Session</a>
                from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a href="https://vimeo.com">Vimeo</a>.
            </p>
        </div>
        <div class="col-12 col-lg-6 mb-4"><iframe src="https://player.vimeo.com/video/640378938?h=e0f93ff46d"
                width="640" height="328" frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
                allowfullscreen></iframe>
            <p><a href="https://vimeo.com/640378938">AS IS Contract Updates Training | Wesley Ulloa | Oct 28th 2021 |
                    English | Long
                    Session</a> from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a
                    href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4"><iframe src="https://player.vimeo.com/video/136729068?h=c928ce433e"
                width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
                allowfullscreen></iframe>
            <p><a href="https://vimeo.com/136729068">Release &amp; Cancellation of Contract | Wesley Ulloa | Aug 2015 |
                    English |
                    Mini Session</a> from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a
                    href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4"><iframe src="https://player.vimeo.com/video/106963827?h=a0ce4ccb55"
                width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
                allowfullscreen></iframe>
            <p><a href="https://vimeo.com/106963827">Listing Agreement | Wesley Ulloa | Sept 2014 | English | Mini
                    Session</a> from
                <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a href="https://vimeo.com">Vimeo</a>.
            </p>
        </div>
    </div>
</div>
@endsection