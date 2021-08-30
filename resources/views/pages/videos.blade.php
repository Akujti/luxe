@extends('layouts.app')
@section('js')
<script src="https://vjs.zencdn.net/7.14.3/video.min.js"></script>
@endsection
@section('css')
<link href="https://vjs.zencdn.net/7.14.3/video-js.css" rel="stylesheet" />
@endsection
@section('content')
<style>
</style>
<div class="container">
    <div class="row my-4">
        <div class="col-12 col-lg-6 mb-4">
            <div style="padding:51.24% 0 0 0;position:relative;"><iframe
                    src="https://player.vimeo.com/video/593498358?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479&amp;h=ff70a92394"
                    frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen
                    style="position:absolute;top:0;left:0;width:100%;height:100%;"
                    title="Morning Accountability Call - Daily at 8:30 am - Coming Soon Listings"></iframe></div>
            <script src="https://player.vimeo.com/api/player.js"></script>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <div style="padding:51.24% 0 0 0;position:relative;"><iframe
                    src="https://player.vimeo.com/video/586806536?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479&amp;h=b9299a6fa8"
                    frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen
                    style="position:absolute;top:0;left:0;width:100%;height:100%;"
                    title="Morning Accountability Call  - Daily at 8-30 - Market Update - Aug 9th .mp4"></iframe></div>
            <script src="https://player.vimeo.com/api/player.js"></script>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <div style="padding:56.25% 0 0 0;position:relative;"><iframe
                    src="https://player.vimeo.com/video/589379190?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479&amp;h=3021502b07"
                    frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen
                    style="position:absolute;top:0;left:0;width:100%;height:100%;"
                    title="Morning Accountability Call - Daily at 8:30 am - Guest Speaker - Jay Jay"></iframe></div>
            <script src="https://player.vimeo.com/api/player.js"></script>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <div style="padding:56.25% 0 0 0;position:relative;"><iframe
                    src="https://player.vimeo.com/video/583855695?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479&amp;h=0e15b635b7"
                    frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen
                    style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Zillow 08/04/2021"></iframe>
            </div>
            <script src="https://player.vimeo.com/api/player.js"></script>
        </div>
        <div class="col-12">
            <a href="https://vimeo.com/manage/videos" class="btn btn-luxe w-100">View More</a>
        </div>
    </div>
</div>
@endsection