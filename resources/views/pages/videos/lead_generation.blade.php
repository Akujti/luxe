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

    iframe {
        width: 100% !important;
        height: 300px !important
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
            <iframe src="https://player.vimeo.com/video/467774925?h=646d5bacf8" width="640" height="360" frameborder="0"
                allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/467774925">Ninja Seller Part 2 &amp; 3 | Larry Kendall | Oct 13 2020 | English
                    | Long
                    Session</a> from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a
                    href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/466633707?h=8a7262db5d" width="640" height="328" frameborder="0"
                allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/466633707">Open House Training | Denisse Uyema | Aug 28 2021 | English | Long
                    Session</a>
                from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a href="https://vimeo.com">Vimeo</a>.
            </p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/465467272?h=dc6634c840" width="640" height="360" frameborder="0"
                allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/465467272">Ninja Selling Part 1 | Larry Kendall | Oct 7th 2020 | English |
                    Long
                    Session</a> from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a
                    href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/450146681?h=3e7a1da368" width="640" height="328" frameborder="0"
                allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/450146681">Facebook and Google Ads | Wesley Ulloa | Aug 11 2020 | English |
                    Long
                    Session</a> from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a
                    href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/444422212?h=83e4b46e01" width="640" height="328" frameborder="0"
                allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/444422212">Video Marketing | Wesley Ulloa | July 23 2020 | English | Mini
                    Session</a> from
                <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a href="https://vimeo.com">Vimeo</a>.
            </p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/444419410?h=17560ba69f" width="640" height="328" frameborder="0"
                allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/444419410">Marketing Your Listings to Get More Buyer Leads | Wesley Ulloa |
                    July 15 2020 |
                    English | Mini Session</a> from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a
                    href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/444418906?h=94f2883aa8" width="640" height="328" frameborder="0"
                allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/444418906">Farming for Gold &amp; Mining For Data
                    | Wesley Ulloa | July 20 2020 | English | Mini Session</a> from <a
                    href="https://vimeo.com/luxeknows">LUXE
                    Properties</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/436777268?h=2fab9d9815" width="640" height="328" frameborder="0"
                allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/436777268">Using Imapp to Generate Leads | Wesley Ulloa | July 8 2020 |
                    English | Mini
                    Session</a> from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a
                    href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/435213342?h=d7c3574c1d" width="640" height="360" frameborder="0"
                allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/435213342">Zillow Premier Agent 101 | Jawad Karim | June 24 2020 | English |
                    Mini
                    Session</a> from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a
                    href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/430817625?h=368e4cbde8" width="640" height="328" frameborder="0"
                allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/430817625">Lead Generation Training | Alfredo Morejon | June 19 2020 | English
                    | Long
                    Session</a> from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a
                    href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/414820770?h=cdbb4a3a9c" width="640" height="291" frameborder="0"
                allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/414820770">Google Ads and Facebook Ads | Wesley Ulloa | May 1st 2020 | English
                    | Long
                    Session</a> from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a
                    href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/408557331?h=b7c4564532" width="640" height="360" frameborder="0"
                allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/408557331">Pt 5 Property Promotion | CINC Accelerated Training | April 2020 |
                    English |
                    Long Session</a> from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a
                    href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/395304852?h=3e1ec5ca2d" width="640" height="360" frameborder="0"
                allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/395304852">Zillow Premier Agent Mindset | Jawad Karim | March 3rd 2020 |
                    English | Long
                    Session</a> from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a
                    href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/366825826?h=939cd68be2" width="640" height="480" frameborder="0"
                allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/366825826">Leaping to the Top of Local Rankings with Google My Business |
                    Florida Realtors
                    Convention | Oct 2019 | English | Mini Session</a> from <a href="https://vimeo.com/luxeknows">LUXE
                    Properties</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/366824471?h=963ed441b4" width="640" height="480" frameborder="0"
                allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/366824471">Spidey&#039;s Web of Referrals - Stay Out of the Friend Zone |
                    Florida Realtors
                    Convention | Oct 2019 | English | Mini Session</a> from <a href="https://vimeo.com/luxeknows">LUXE
                    Properties</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/366815806?h=2feebd8b31" width="640" height="480" frameborder="0"
                allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/366815806">Become &#039;Captain Connection&#039; With Buyers, Sellers and
                    Referrals |
                    Florida Realtors Convention | Oct 2019 | English | Mini Session</a> from <a
                    href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/366789050?h=b4d5d34fc6" width="640" height="480" frameborder="0"
                allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/366789050">Successful Networking | Florida Realtors Convention | Oct 2019 |
                    English | Mini
                    Session</a> from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a
                    href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/366783087?h=e43f15e5b8" width="640" height="480" frameborder="0"
                allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/366783087">Top Ten Hulk-Sized Marketing Strategies to Grow Your Business |
                    Florida
                    Realtors Convention | Oct 2019 | English | Mini Session</a> from <a
                    href="https://vimeo.com/luxeknows">LUXE
                    Properties</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/316815653?h=e150f8f1c5" width="640" height="400" frameborder="0"
                allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/316815653">Researching Your Market | Wesley Ulloa | Feb 2019 | English | Mini
                    Session</a>
                from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a href="https://vimeo.com">Vimeo</a>.
            </p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/289464962?h=ce18889f1a" width="640" height="480" frameborder="0"
                allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/289464962">20 Under $20 &ndash; Real Estate Lead Generating Ideas | Florida
                    Realtors
                    Convention | Oct 2019 | English | Mini Session</a> from <a href="https://vimeo.com/luxeknows">LUXE
                    Properties</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/289463291?h=a43d4a7339" width="640" height="480" frameborder="0"
                allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/289463291">Increase Leads and Referrals Through Social Media Segmentation |
                    Florida
                    Realtors Convention | Oct 2019 | English | Mini Session</a> from <a
                    href="https://vimeo.com/luxeknows">LUXE
                    Properties</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/289344852?h=16f46e21c4" width="640" height="480" frameborder="0"
                allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/289344852">Build and Nurture a $6 Million Customer Base | Florida Realtors
                    Convention |
                    Oct 2019 | English | Mini Session</a> from <a href="https://vimeo.com/luxeknows">LUXE Properties</a>
                on <a href="https://vimeo.com">Vimeo</a>.</p>
        </div>
    </div>
</div>
@endsection