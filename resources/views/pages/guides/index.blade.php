@extends('layouts.app', ['active' => 'marketing_branding', 'subactive' => 'downloadable_presentations'])
@section('css')
<link href="{{ asset('css/main.min.css') }}" rel="stylesheet">
<style>
    img {
        object-fit: cover;
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
        height: 100px;
        padding-top: 0px;
        margin-top: 0px;
    }
    .box-table #title {
        height: auto !important;
    }

    .upload {
        transition: .2s;
        border: 1px solid rgb(246, 246, 246);
        padding: 5px;
        text-align: center;
        height: 114px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #F7F7F7;
        border-radius: 10px;
        cursor: pointer
    }

    .upload:first-child {
        margin-bottom: 19px;
    }

    .upload img {
        width: 40px;
        height: 40px;
        object-fit: cover;
        margin-top: 19px;
    }

    .upload p {
        font-size: 18px;
        font-family: 'gothicbold';
        color: #262626;
    }

    .folder a {
        color: black;
    }

    .folder p {
        margin: 0;
        font-size: 18px;
        font-family: 'gothicregular';
        color: #262626;
        margin-top: 20px;
    }

    .folder:hover {
        transition: .2s;
        transform: translateY(3px);
        cursor: pointer;
    }

    .folder:hover .delete-button,
    .folder:hover .edit-button {
        display: block;
    }

    .delete-button {
        position: absolute;
        top: -12px;
        right: -12px;
        border: 0;
        color: white;
        height: 34px;
        width: 34px;
        background: none;
        border-radius: 50%;
        cursor: pointer;
        display: none;
    }

    .edit-button {
        background: transparent;
        position: absolute;
        top: -12px;
        left: -20px;
        border: 0;
        color: white;
        cursor: pointer;
        display: none;
        width: 50px;
    }

    .edit-button:focus,
    .delete-button:focus {
        outline: 0 !important;
    }

    .preview-img {
        height: 103px;
        width: 103px;
        object-fit: cover;
    }

    .nav-body {
        display: flex;
        justify-content: space-between;
        margin-bottom: 40px;
        width: 100%;
    }

    .nav-body__sort-view {
        display: flex;
        gap: 40px;
    }

    .nav-body__sort {
        display: flex;
        font-size: 16px;
        align-items: center;
        gap: 10px;
    }

    .sort-view__dropdown p {
        font-weight: bold;
    }

    .nav-body__sort select {
        width: 79px;
        text-align: center;
    }

    .nav-body__view {
        display: flex;
        font-size: 16px;
        align-items: center;
        gap: 10px;
    }

    .nav-body__view p,
    .nav-body__sort p {
        font-size: 16px;
        font-family: 'gothicregular';
        color: #262626;
    }

    .nav-body__view select {
        width: 126px;
        text-align: center;
    }

    .nav-body__create-upload {
        display: flex;
        gap: 20px;
        font-size: 16px;
    }

    .nav-body__create-upload button {
        display: flex;
        align-items: center;
        padding: 10px 18px;
        border: none;
        gap: 8px;
        border-radius: 10px;
        font-family: 'gothicbold';
        cursor: pointer;

    }

    .nav-body__create button {
        font-weight: bold;
        font-size: 16px;
    }

    .nav-body__upload button {
        background: #262626;
        color: #FFFFFF;
        border-radius: 10px;
        font-family: 'gothicbold';
        cursor: pointer;
    }

    .nav-body select {
        background-color: #F7F7F7;
        border: 1px solid #F7F7F7;
        height: 47px;
        border-radius: 10px;
        font-size: 16px;
        font-family: 'gothicbold';
    }

    .box-table .box-file {
        height: 84px !important;
    }

    .box-table .folder {
        min-height: 84px !important;
    }

    @media screen and (max-width: 500px) {
        .container-fluid {
            padding-left: 15px !important;
            padding-right: 15px !important;
        }

        .pd-r {
            padding-right: 0px;
        }

        .pd-l {
            padding-left: 0px !important;
        }

        .md-l {
            margin-left: 0px !important;
        }
    }
</style>
@endsection
@section('content')

<div class="container-fluid">

    <div class="row m-0 box-title mb-4">
        <div class="nav-body row m-0 p-0">
            <div class="col-12 col-md-6 col-lg-6 nav-body__sort-view pl-0 pd-r">
                <div class="nav-body__sort">
                    <p class="p-0 m-0">Sort By: </p>
                    <select name="" id="change_sort" onchange="change_sort()">
                        <option value="asc" {{ (request('sort')=='asc' || !request('sort')) ? 'selected' : '' }}>A-Z
                        </option>
                        <option value="desc" {{ request('sort')=='desc' ? 'selected' : '' }}>Z-A</option>
                    </select>
                </div>
                <div class="nav-body__view">
                    <p class="m-0 p-0">View:</p>
                    <select name="" id="change_view" onchange="change_view()">
                        <option value="badge" {{ (request('view')=='badge' || !request('view')) ? 'selected' : '' }}>
                            Badge</option>
                        <option value="table" {{ request('view')=='table' ? 'selected' : '' }}>Table</option>
                    </select>
                </div>
            </div>
            <div
                class="col-12 col-md-6 col-lg-6 nav-body__create-upload mt-2 mt-md-0 mt-lg-0 justify-content-center justify-content-lg-end mr-0 pr-0 pd-l">
                @if (Auth::user()->isAdmin)
                <div class="nav-body__upload">
                    <button type="button" onclick="show_modal()">
                        <img src="/images/files/upload.png" alt="">
                        <p class="m-0 p-0">Upload a File</p>
                    </button>
                </div>
                @endif
            </div>
        </div>
    </div>

    @if(!request('view') || request('view') == 'badge')
    <div class="row box-grid">
        @foreach ($files as $file)
        <div class="box-file col-12 col-md-6 col-lg-4">
            <div class="folder">
                <div class="w-100">
                    <a href="{{'/storage/'.$file->file}}" download target="_blank">
                        <p id="title">
                            {{$file->title}}
                        </p>
                        <div class="row m-0 p-0 w-100 justify-content-between align-items-center">
                            <div>
                                <p>&nbsp;</p>
                                <p id="date">
                                    {{ $file->created_at->toDateString() }}
                                </p>
                            </div>
                            <div>
                                @if($file->thumbnail)
                                <img class="preview-img" src="{{'/storage/'.$file->thumbnail}}"
                                    style="width:75px !important; height: 75px !important">
                                @elseif ($file->type == 'img')
                                <img class="preview-img" src="{{'/storage/'.$file->file}}" id="folder-img">
                                @elseif($file->type == 'doc')
                                <img src="{{'/images/files/'.$file->type.'.png'}}" width="45px" height="60px">
                                @else
                                <img src="{{'/images/files/'.$file->type.'.png'}}" width="66px" height="68px">
                                @endif
                            </div>
                        </div>
                    </a>
                    @if (Auth::user()->isAdmin)
                    <div class="delete-form">
                        <form action="{{ route('file.destroy',$file->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="delete-button" type="submit"
                                onclick="return confirm('Are you sure you want to delete this file?');">
                                <img src="{{asset('images/files/delete-icon.svg')}}" alt="">
                            </button>
                        </form>
                    </div>
                    {{--<div class="edit-form">
                        <button class="edit-button" type="submit" onclick="show_edit_file_modal({{$file}})">
                            <img src="{{asset('images/files/pencil-icon.svg')}}" alt="" width="34px" height="34px">
                        </button>
                    </div>--}}
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @else
    <div class="box-table">
        @foreach ($files as $file)
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
                    @if (Auth::user()->isAdmin)
                    <div class="delete-form">
                        <form action="{{ route('file.destroy',$file->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="delete-button" type="submit"
                                onclick="return confirm('Are you sure you want to delete this file?');">
                                <img src="{{asset('images/files/delete-icon.svg')}}" alt="">
                            </button>
                        </form>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endif
</div>
<div class="create-event modal fade modal-new" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Upload A File</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('guides.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="folder_id" value="{{$folder_id}}">
                    <div class="form-group">
                        <label for="start">{{ __('File Name') }}</label>
                        <div class='input-group'>
                            <input type="text" class="w-100 form-control" name="title" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class='input-group'>
                            <div class="form-group w-100">
                                <label for="">File Type</label>
                                <select class="form-control " name="file_type" id="">
                                    <option value="doc">Document</option>
                                    <option value="pdf">PDF</option>
                                    <option value="img">Image</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="start">{{ __('Select File') }}</label>
                        <div class="custom-file">
                            <input type="file" name="file" class="form-control" id="inputGroupFile01"
                                style="padding: 3px;" required>
                        </div>
                    </div>

                    <div class="form-group pt-3">
                        <label for="start">Thumbnail</label>
                        <div class="custom-file">
                            <input type="file" name="thumbnail" class="form-control" id="inputGroupFile01"
                                style="padding: 3px;" onchange="onFileChanged(this)">
                        </div>
                    </div>

                    <div class="w-100">
                        <img src="" alt="" id="preview-image" class="mt-3 d-none w-100">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-luxe" id="save-event">Submit</button>
            </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<div class="edit-file modal fade modal-new" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit File</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('file.update') }}" method="POST" class="m-0" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input id="file_id" type="hidden" name="file_id">
                    <div class="form-group m-0">
                        <label for="start">{{ __('File Name') }}</label>
                        <div class='input-group'>
                            <input id="file_title" type="text" class="w-100 form-control" name="title">
                        </div>
                    </div>
                    <div class="form-group pt-3">
                        <label for="start">Thumbnail</label>
                        <div class="custom-file">
                            <input type="file" name="thumbnail" class="form-control" id="inputGroupFile01"
                                style="padding: 3px;" onchange="onFileChanged(this)">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-luxe" id="save-event">Update</button>
            </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
@endsection
<script>
    function show_modal() {
        $('.create-event').modal('show');
    };

    function show_edit_file_modal(file) {
    $('.edit-file').modal('show');
    $('.edit-file').find('#file_id').val(file.id);
    $('.edit-file').find('#file_title').val(file.title);
    };

    function change_view() {
        var value = document.getElementById('change_view').value;

        window.location.href = '{{ url('user/guides') }}?view=' + value + '<?php if(isset($_GET['sort'])) {echo '&sort='. $_GET['sort'];} ?>'
    }
    function change_sort() {
        var value = document.getElementById('change_sort').value;

        window.location.href = '{{ url('user/guides') }}?sort=' + value + '<?php if(isset($_GET['view'])) {echo '&view='. $_GET['view'];} ?>'
    }

    function onFileChanged(e) {
        const [file] = e.files 
        console.log(URL.createObjectURL(file))
        if (file) {
            $('#preview-image').attr("src", URL.createObjectURL(file));
            $('#preview-image').toggleClass('d-none')
        }
    }
</script>