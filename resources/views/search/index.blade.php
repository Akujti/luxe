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
    h6 {
        font-family: 'gothicbold';
    }
    .box-table .box-file {
        height: 84px !important;
    }

    .box-table .folder {
        min-height: 84px !important;
    }
    .folder {
        min-height: 247px;
        transition: .2s;
        padding: 5px 20px;
        position: relative;
        box-shadow: 0px 0px 12px 0px rgba(0, 0, 0, 0.09);
        border-radius: 10px;
        margin-bottom: 39px;
        display: flex;
        align-items: center;
    }

    .folder #folder-img {
        width: 88px;
        height: 68px;
    }

    .folder #num_of_file {
        font-size: 16px;
        font-family: 'gothicregular';
        color: #262626
    }

    .folder #date {
        color: #757575;
        font-size: 16px;
        font-family: 'gothicregular';
    }

    .folder #title {
        font-size: 20px;
        font-family: 'gothicbold';
        color: #262626;
        padding-top: 0px;
        margin-top: 0px;
    }
    .template-box {
        margin-bottom: 0px !important;
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
        <div class="col-12">
            <div class="row box-title p-0 m-0 mb-2 mt-4">
                <h6 class="text-center"><b>Folders</b></h6>
            </div>
            <div class="box-table">
                @forelse ($folders as $folder)
                <div class="box-file col-md-12 mb-4" style="height: 84px !important;">
                    <div class="folder" style="min-height: 84px !important;">
                        <div class="row p-0 m-0 w-100 d-flex align-items-center"
                            onclick="window.location = '{{route('files.index').'?id='.$folder->id . (isset($_GET['view']) ? '&view='. $_GET['view'] : '' )}}'">
                            <div class="col d-flex align-items-center">
                                <div class="mr-4">
                                    <img src="/images/files/folder.png" alt="" width="45px" height="35px">
                                </div>
                                <p id="title" class="m-0 p-0">{{ $folder->title }}</p>
                            </div>
                            <div class="col row m-0 p-0 w-100 justify-content-between align-items-center">
                                <p id="num_of_file" class="m-0 p-0">
                                    Number of items: {{ $folder->files->count() + $folder->children->count() }}
                                </p>
                                <p id="date" class="m-0 p-0">
                                    {{ !$folder->created_at ? '' : $folder->created_at->toDateString() }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <p class="pl-3">No results found.</p>
                @endforelse

                <div class="w-100 pl-3">
                    {{ $folders->appends($_GET)->links() }}
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="row box-title p-0 m-0 mb-2 mt-4">
                <h6 class="text-center"><b>Files</b></h6>
            </div>
            <div class="box-table">
                @forelse ($files as $file)
                <div class="box-file col-md-12 mb-4">
                    <div class="folder" style="min-height: 84px !important;">
                        <div class="row p-0 m-0 w-100 d-flex align-items-center">
                            <a href="{{'/storage/'.$file->file}}" download target="_blank" class="row m-0 p-0 w-100">
                                <div class="col d-flex align-items-center">
                                    <div class="mr-4">
                                        @if($file->thumbnail)
                                        <img class="preview-img" src="{{'/storage/'.$file->thumbnail}}"
                                            style="width:60px !important; height: 60px !important">
                                        @elseif ($file->type == 'img')
                                        <img class="preview-img" src="{{'/storage/'.$file->file}}"
                                            style="width:60px !important; height: 60px !important">
                                        @elseif($file->type == 'doc')
                                        <img src="{{'/images/files/'.$file->type.'.png'}}" width="45px" height="55px">
                                        @else
                                        <img src="{{'/images/files/'.$file->type.'.png'}}" width="45px" height="55px">
                                        @endif
                                    </div>
                                    <p id="title" class="p-0 m-0">
                                        {{$file->title}}
                                    </p>
                                </div>
                                <div class="col row m-0 p-0 w-100 justify-content-between align-items-center">
                                    <p class="p-0 m-0">&nbsp;</p>
                                    <p id="date" class="p-0 m-0">
                                        {{ $file->created_at->toDateString() }}
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                @empty
                <p class="pl-3">No results found.</p>
                @endforelse
                <div class="w-100 pl-3">
                    {{ $files->appends($_GET)->links() }}
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="row box-title p-0 m-0 mb-2 mt-4">
                <h6 class="text-center"><b>Guides</b></h6>
            </div>
            <div class="box-table">
                @forelse ($guides as $guide)
                <div class="box-file col-md-12 mb-4">
                    <div class="folder" style="min-height: 84px !important;">
                        <div class="row p-0 m-0 w-100 d-flex align-items-center">
                            <a href="{{'/storage/'.$guide->file}}" download target="_blank" class="row m-0 p-0 w-100">
                                <div class="col d-flex align-items-center">
                                    <div class="mr-4">
                                        @if($guide->thumbnail)
                                        <img class="preview-img" src="{{'/storage/'.$guide->thumbnail}}"
                                            style="width:60px !important; height: 60px !important">
                                        @elseif ($guide->type == 'img')
                                        <img class="preview-img" src="{{'/storage/'.$guide->file}}"
                                            style="width:60px !important; height: 60px !important">
                                        @elseif($guide->type == 'doc')
                                        <img src="{{'/images/files/'.$guide->type.'.png'}}" width="45px" height="55px">
                                        @else
                                        <img src="{{'/images/files/'.$guide->type.'.png'}}" width="45px" height="55px">
                                        @endif
                                    </div>
                                    <p id="title" class="p-0 m-0">
                                        {{$guide->title}}
                                    </p>
                                </div>
                                <div class="col row m-0 p-0 w-100 justify-content-between align-items-center">
                                    <p class="p-0 m-0">&nbsp;</p>
                                    <p id="date" class="p-0 m-0">
                                        {{ $guide->created_at->toDateString() }}
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                @empty
                <p class="pl-3">No results found.</p>
                @endforelse
                <div class="w-100 pl-3">
                    {{ $guides->appends($_GET)->links() }}
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="row box-title p-0 m-0 mb-2 mt-4">
                <h6 class="text-center"><b>Videos</b></h6>
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
                <p class="pl-3">No results found.</p>
                @endforelse
                <div class="w-100 pl-3">
                    {{ $videos->appends($_GET)->links() }}
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="row box-title p-0 m-0 mb-2 mt-4">
                <h6 class="text-center"><b>Products</b></h6>
            </div>
            <div class="row p-0 m-0 justify-content-start" style="gap: 34px 73px">
                @forelse($products as $product)
                    <div class="template-box">
                        <a href="{{ route('luxe_store.single_product', ['product_slug' => $product->slug]) }}">
                            <img src="{{ asset('storage/'. $product->preview_image) }}" alt="No image found" width="100%" height="303px"
                            onerror="this.src='{{asset('images/no-image.png')}}';">
                            <div class="template-details">
                                <p>{{ $product->name }}</p>
                                <p id="template-details-price" class="mt-4">
                                    @if(!$product->variants->count())
                                        {{ '$'. $product->price }}
                                    @else
                                        {{
                                            ($product->variants[0]->max_value_price == $product->variants[0]->min_value_price) ?
                                            '$'.$product->variants[0]->max_value_price :
                                            '$' . $product->variants[0]->min_value_price . ' - $'. $product->variants[0]->max_value_price
                                        }}
                                    @endif
                                </p>
                            </div>
                        </a>
                    </div>
                @empty
                    <p>No results found.</p>
                @endforelse
                <div class="w-100">
                    {{ $products->appends($_GET)->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection