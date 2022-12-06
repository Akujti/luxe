@extends('layouts.app', ['active' => 'Tools&TrainingVideos', 'subactive' => 'training_videos'])
@section('js')
    <script src="https://vjs.zencdn.net/7.14.3/video.min.js"></script>
@endsection
@section('css')
    <link href="https://vjs.zencdn.net/7.14.3/video-js.css" rel="stylesheet" />
    <style>
        .folder {
            text-align: center;
            display: flex;
            align-items: end;
            justify-content: center;
            cursor: pointer;
            background-size: cover !important;
            background-color: #262626 !important;
            box-shadow: 0px 0px 12px 0px rgb(0 0 0 / 9%);
            border-radius: 10px;
            padding: 15px;
        }

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
            width: 100%;
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

        .folder a {
            color: black;
            text-decoration: none;
        }

        .folder p {
            margin: 0;
        }

        .folder .title {
            color: white;
        }

        .folder:hover {
            transition: .2s;
            transform: translateY(3px);
            cursor: pointer;
        }

        .folder:hover .delete-button {
            display: block;
        }

        .folder img:not(.img) {
            width: 70%;
        }
    </style>
@endsection
@section('content')
    <style>
    </style>
    <div class="container-fluid">
        <div class="col-12 title mb-3 text-center">
            <h1 class="font-weight-bold">LUXE Online Video University</h1>
        </div>
        <div class="grid grid-layout mb-3">
            @foreach ($videoFolders as $folder)
                <div class="folder box-item"
                    style="background-image: linear-gradient(0deg, rgba(0,0,0,0.7) 0%, rgba(255,255,255,0) 100%), url({{ asset($folder->image) }})">
                    <a href="{{ route('videos') }}?id={{ $folder->id }}">
                        {{-- <img src="/images/files/video-folder.svg" alt="" class="img" width="200px" height="160px"> --}}
                        <p class="title">
                            {{ $folder->title }}
                        </p>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="row">
            @foreach ($videos as $video)
                <div class="col-12 col-lg-6 mb-4">
                    <div class="video mb-2">
                        <a href="{{ route('video.single_video', $video->id) }}">
                            <!-- /images/files/video-folder.svg -->
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
            @endforeach
        </div>
    </div>
@endsection
