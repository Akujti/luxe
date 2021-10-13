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
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/556384376?h=78a953499c" width="100%" height="300px"
                frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/556384376">Seller Presentation | Wesley Ulloa | May 19th | English | Long
                    Session</a> from
                <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a href="https://vimeo.com">Vimeo</a>.
            </p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/546502927?h=ee219cf01e" width="100%" height="300px"
                frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/546502927">Nailing Your Listing Presentation | Denisse Uyema | Apr 20th |
                    English | Long
                    Session</a> from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a
                    href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/546201500?h=31357f2982" width="100%" height="300px"
                frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/546201500">Understanding FIRPTA | Steven E. Gurian | Apr 29th | English | Mini
                    Session</a>
                from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a href="https://vimeo.com">Vimeo</a>.
            </p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/533366843?h=8b76d73b26" width="100%" height="300px"
                frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/533366843">Nailing Your Listing Presentation | Wesley Ulloa | Jan 25 | English
                    | Long
                    Session</a> from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a
                    href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/529534833?h=d766a9eb23" width="100%" height="300px"
                frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/529534833">Got a Listing, What&#039;s Next? | Denisse Uyema | Mar 9th |
                    English | Long
                    Session</a> from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a
                    href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/529428806?h=6b013177ae" width="100%" height="300px"
                frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/529428806">Staging to Sell COVID Edition | Janice Garcia | Mar 24th | English
                    | Mini
                    Session</a> from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a
                    href="https://vimeo.com">Vimeo</a>.</p>
        </div>
    </div>
</div>
@endsection