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
            <iframe src="https://player.vimeo.com/video/577202712?h=ab5dbe41ba" width="640" height="360" frameborder="0"
                allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/577202712">Miami Dade Schools Explained | Janice Garcia | July 7th | English |
                    Mini
                    Session</a> from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a
                    href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/564287075?h=ad58a4e7a8" width="640" height="360" frameborder="0"
                allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/564287075">Purchasing and Selling Real Estate for the International Client |
                    Steven E.
                    Gurian | Jun 17th | English | Mini Session</a> from <a href="https://vimeo.com/luxeknows">LUXE
                    Properties</a> on
                <a href="https://vimeo.com">Vimeo</a>.
            </p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/546207740?h=a9123cdc48" width="640" height="360" frameborder="0"
                allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/546207740">New Realtor 101 How to read a Contract &amp; Financing | Giovanna
                    Calimano |
                    Apr 23rd | English | Long Session</a> from <a href="https://vimeo.com/luxeknows">LUXE Properties</a>
                on <a href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/533357349?h=f5da567a1f" width="640" height="360" frameborder="0"
                allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/533357349">Working With Investors | Wesley Ulloa | Feb 9th | English | Long
                    Session</a>
                from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a href="https://vimeo.com">Vimeo</a>.
            </p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/529541470?h=4e71643afa" width="640" height="360" frameborder="0"
                allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/529541470">How to do a Buyers Consultation | Giovanna Calimano | Mar 26th |
                    English | Long
                    Session</a> from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a
                    href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/501027294?h=d82b4232bd" width="640" height="360" frameborder="0"
                allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/501027294">Managing The Home Inspection | Luis from TruView | Dec 7th |
                    English | Mini
                    Session</a> from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a
                    href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/481710898?h=812349be73" width="640" height="328" frameborder="0"
                allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/481710898">Buyer Representation | Wesley Ulloa | Nov 11th | English | Long
                    Session</a>
                from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a href="https://vimeo.com">Vimeo</a>.
            </p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/479070321?h=294d294328" width="640" height="328" frameborder="0"
                allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/479070321">How to review Taxes | Wesley Ulloa | Nov 4th | English | Mini
                    Session</a> from
                <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a href="https://vimeo.com">Vimeo</a>.
            </p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/422033289?h=a9c907d073" width="640" height="303" frameborder="0"
                allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/422033289">Buyer Process FAQ&#039;s | Giovanna Calimano | May 14 2020 |
                    English | Long
                    Session</a> from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a
                    href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/407802512?h=50daac3987" width="640" height="291" frameborder="0"
                allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/407802512">Working With Investors | Wesley Ulloa | Apr 7th 2020 | English |
                    Long
                    Session</a> from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a
                    href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/366779593?h=00301b43cb" width="640" height="480" frameborder="0"
                allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/366779593">International Buyers- Adding Value and Getting the Deal Closed |
                    Florida
                    Realtors Convention | Oct 2019 | English | Mini Session</a> from <a
                    href="https://vimeo.com/luxeknows">LUXE
                    Properties</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/289464897?h=b13a23630d" width="640" height="480" frameborder="0"
                allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/289464897">Helping Buyers Navigate New Construction | Florida Realtors
                    Convention | Oct
                    2019 | English | Mini Session</a> from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on
                <a href="https://vimeo.com">Vimeo</a>.
            </p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/289464700?h=c55f714f2f" width="640" height="480" frameborder="0"
                allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/289464700">Build a Virtual Listing Machine | Florida Realtors Convention | Oct
                    2019 |
                    English | Mini Session</a> from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a
                    href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/236591955?h=76f1571720" width="640" height="480" frameborder="0"
                allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/236591955">You&#039;re an International Realtor... Whether You Know it or Not!
                    | Florida
                    Realtors Convention | Oct 2019 | English | Mini Session</a> from <a
                    href="https://vimeo.com/luxeknows">LUXE
                    Properties</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/186467420?h=2d145c3daf" width="640" height="480" frameborder="0"
                allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/186467420">Thriving in a Seller&#039;s Market | Florida Realtors Convention |
                    Oct 2019 |
                    English | Mini Session</a> from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a
                    href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/641636689?h=7af896318f" width="640" height="328" frameborder="0"
                allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/641636689">Addendum Breakdown | Wesley Ulloa | Nov 1st 2021 | English | Long
                    Session</a>
                from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a href="https://vimeo.com">Vimeo</a>.
            </p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/640378938?h=e0f93ff46d" width="640" height="328" frameborder="0"
                allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/640378938">AS IS Contract Updates Training | Wesley Ulloa | Oct 28th 2021 |
                    English | Long
                    Session</a> from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a
                    href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/225780969?h=1214b36abf" width="640" height="400" frameborder="0"
                allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/225780969">How to add an appraisal contingency | Wesley Ulloa | July 2017 |
                    English | Long
                    Session</a> from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a
                    href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/225780423?h=19ab0242ba" width="640" height="400" frameborder="0"
                allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/225780423">How to do insurance addendum | Wesley Ulloa | July 2017 | English |
                    Long
                    Session</a> from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a
                    href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/225779526?h=aca8253226" width="640" height="400" frameborder="0"
                allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/225779526">How to Do HOA Addendum | Wesley Ulloa | July 2017 | English | Mini
                    Session</a>
                from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a href="https://vimeo.com">Vimeo</a>.
            </p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/204361621?h=cadd31abe0" width="640" height="360" frameborder="0"
                allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/204361621">Fannie Mae Purchase Addendum | Wesley Ulloa | Feb 2017 | English |
                    Mini
                    Session</a> from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a
                    href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/183486682?h=71c96a7506" width="640" height="360" frameborder="0"
                allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/183486682">How to do a Buyer Brokerage Agreement | Wesley Ulloa | Sept 2016 |
                    English |
                    Mini Session</a> from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a
                    href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/136729069?h=323ccb9cd0" width="640" height="360" frameborder="0"
                allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/136729069">FHA Addendum | Wesley Ulloa | Aug 2015 | English | Mini Session</a>
                from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a href="https://vimeo.com">Vimeo</a>.
            </p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/136729068?h=c928ce433e" width="640" height="360" frameborder="0"
                allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/136729068">Release &amp; Cancellation of Contract | Wesley Ulloa | Aug 2015 |
                    English |
                    Mini Session</a> from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a
                    href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/134990877?h=93714df65f" width="640" height="360" frameborder="0"
                allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/134990877">How to do a Land Contract | Wesley Ulloa | July 2015 | English |
                    Mini
                    Session</a> from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a
                    href="https://vimeo.com">Vimeo</a>.</p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/133704983?h=bf0dfe7656" width="640" height="360" frameborder="0"
                allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/133704983">How to do a Condo Rider | Wesley Ulloa | July 2015 | English | Mini
                    Session</a>
                from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a href="https://vimeo.com">Vimeo</a>.
            </p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/124705570?h=8eb642df33" width="640" height="400" frameborder="0"
                allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/124705570">All About Addendum | Wesley Ulloa | April 2015 | English | Mini
                    Session</a>
                from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a href="https://vimeo.com">Vimeo</a>.
            </p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/108930097?h=643740cfa2" width="640" height="360" frameborder="0"
                allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/108930097">Short Sale Addendum | Wesley Ulloa | Oct 2014 | English | Mini
                    Session</a> from
                <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a href="https://vimeo.com">Vimeo</a>.
            </p>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <iframe src="https://player.vimeo.com/video/107187283?h=0965a44ae4" width="640" height="360" frameborder="0"
                allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <p><a href="https://vimeo.com/107187283">All about Condo Doc | Wesley Ulloa | Sept 2014 | English | Mini
                    Session</a>
                from <a href="https://vimeo.com/luxeknows">LUXE Properties</a> on <a href="https://vimeo.com">Vimeo</a>.
            </p>
        </div>
    </div>
</div>
@endsection