@extends('layouts.app')
@section('js')
<script src="https://vjs.zencdn.net/7.14.3/video.min.js"></script>
@endsection
@section('css')
<link href="https://vjs.zencdn.net/7.14.3/video-js.css" rel="stylesheet" />
<style>
    .video {
        min-height: 300px;
        transition: .2s;
        border: 1px solid rgb(246, 246, 246);
        display: flex;
        align-items: center;
        box-shadow: 0px 0px 12px 0px rgb(0 0 0 / 9%);
        border-radius: 10px;
    }
    .video img {
        width:100%;
        object-fit: cover !important;
        height: 303px;
        border-radius: 10px 10px 0px 0px;
    }
    .video .title {
        font-size: 18px;
        font-family: 'gothicbold';
    }
    .video .time {
        font-size: 16px;
        font-family: 'gothicregular';
    }
    .video a {
        width: 100%;
        color: #262626;
    }
    h5 {
        font-family: 'gothicregular';
    }
</style>
@endsection
@section('content')
<style>
</style>
<div class="container-fluid">
    <div class="row box-title p-0 m-0 mb-4">
        <h5 class="text-center">Results for: {{ request('search') }}</h5>
    </div>
    <div class="row">
        @forelse($videos as $video)
            <div class="col-12 col-lg-6 mb-4">
                <div class="video mb-2">
                    <a href="{{route('video.single_video', $video->id)}}">
                        <img src="{{ $video->vimeo_details['thumbnail'] }}" alt="" class="img">
                        <div class="p-4">
                            <p class="title">
                                {{ $video->vimeo_details['name'] }}
                            </p>
                            <div class="d-flex justify-content-between">
                                <p class="time p-0 m-0">{{ $video->vimeo_details['created_at'] }}</p>
                                <p class="time p-0 m-0">By <span class="title">LUXE Properties</span></p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        @empty
        <p>No Results Found.</p>
        @endforelse
    </div>
    <div class="row p-0 m-0 justify-content-center">
        {{ $videos->appends(request()->input())->links() }}
    </div>
</div>
@endsection