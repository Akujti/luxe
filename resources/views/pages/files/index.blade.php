@extends('layouts.app')
@section('css')
<link href="{{ asset('css/main.min.css') }}" rel="stylesheet">
<style>
    .fc-event-title {
        color: black;
    }

    .fc-h-event {
        background: #FFCF40;
        border: 1px solid rgb(136, 136, 136);
        margin-bottom: 3px;
    }
</style>
@endsection
@section('content')
<style>
    .wrapper {
        position: relative;
    }

    .wrapper h1 {
        font-weight: 400;
        letter-spacing: 2px;
        background: #FFCF40;
        padding: 10px;
        border: 1px solid #dadada;
        border-radius: 10px;
    }

    .wrapper .btn {
        position: absolute;
        top: 25%;
        right: 25px;
        background: black;
        border-color: black;
        color: white;
    }

    .wrapper .btn a {
        color: white;
    }

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

    .delete-button {
        position: absolute;
        top: -12px;
        right: -12px;
        background: #ff3c22;
        border: 0;
        color: white;
        height: 25px;
        width: 25px;
        border-radius: 50%;
        cursor: pointer;
        display: none;
    }

    @media(max-width:500px) {
        .folder img {
            width: 35%;
        }
    }
</style>
<div class="container">
    <div class="wrapper text-lg-center text-left mb-4 gold">
        <h1>LUXE FILES</h1>
        <button id="back" class="btn"><a href="{{route('files.index')}}">Back</a></button>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="{{route('files.new.directory')}}" method="post">
                @csrf
                <input type="hidden" name="current_directory" value="{{$folder_id}}">
                <div class="form-group">
                    <div class='input-group'>
                        <input type="text" class="form-control" name="title" placeholder="New Directory" required>
                        <div class="input-group-append">
                            <button class="btn btn-luxe" type="submit">Create</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-lg-2">
            <div class="folder mb-2">
                <a onclick="show_modal()">
                    <img src="/images/files/add.png" alt="">
                    <p>Upload</p>
                </a>
            </div>
        </div>
        @foreach ($folders as $folder)
        <div class="col-12 col-lg-2">
            <div class="folder mb-2">
                <a href="{{route('files.index').'?id='.$folder->id}}">
                    <img src="/images/files/folder.png" alt="">
                    <p>
                        {{$folder->title}}
                    </p>
                </a>
                <div class="delete-form">
                    <form action="{{ route('folder.destroy',$folder->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button class="delete-button" type="submit">X</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
        @foreach ($files as $file)
        <div class="col-12 col-lg-2">
            <div class="folder mb-2">
                <a href="{{'/storage/'.$file->file}}" target="_blank">
                    <img src="{{'/images/files/'.$file->type.'.png'}}" alt="">
                    <p>
                        {{$file->title}}
                    </p>
                </a>
                <div class="delete-form">
                    <form action="{{ route('file.destroy',$file->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button class="delete-button" type="submit">X</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<div class="create-event modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Upload A File</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('files.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="folder_id" value="{{$folder_id}}">
                    <div class="form-group">
                        <label for="start">{{ __('File Name') }}</label>
                        <div class='input-group'>
                            <input type="text" class="w-100 form-control" name="title">
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
                                style="padding: 3px;">
                        </div>
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
@endsection
<script>
    function show_modal() {
        $('.create-event').modal('show');
    };
</script>