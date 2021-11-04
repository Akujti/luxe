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

    .folder:hover .delete-button,
    .folder:hover .edit-button {
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

    @media (max-width: 500px) {
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
    @if (Auth::user()->isAdmin)
    <div class="row">
        <div class="col-12">
            <form action="{{route('files.open-house.directory')}}" method="post">
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
    @endif
    <div class="row">
        @if (Auth::user()->isAdmin)
        <div class="col-12 col-lg-2">
            <div class="folder mb-2">
                <a onclick="show_modal()">
                    <img src="/images/files/add.png" alt="">
                    <p>Upload</p>
                </a>
            </div>
        </div>
        @endif
        @foreach ($folders as $folder)
        <div class="col-12 col-lg-2">
            <div class="folder mb-2">
                <a href="{{route('files.index').'?id='.$folder->id}}">
                    <img src="/images/files/folder.png" alt="">
                    <p>
                        {{$folder->title}}
                    </p>
                </a>
                @if (Auth::user()->isAdmin)
                <div class="delete-form">
                    <form action="{{ route('folder.destroy',$folder->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button class="delete-button" type="submit"
                            onclick="return confirm('Are you sure you want to delete this directory?');">
                            X
                        </button>
                    </form>
                </div>
                <div class="edit-form">
                    <button class="edit-button" type="submit" onclick="show_edit_modal({{$folder}})">
                        <img src="{{asset('images/files/pencil.png')}}" alt="">
                    </button>
                </div>
                @endif
            </div>
        </div>
        @endforeach
        @foreach ($files as $file)
        <div class="col-12 col-lg-2">
            <div class="folder mb-2">
                <a href="{{'/storage/'.$file->file}}" target="_blank">
                    @if ($file->type == 'img')
                    <img class="preview-img" src="{{'/storage/'.$file->file}}" alt="">
                    @else
                    <img src="{{'/images/files/'.$file->type.'.png'}}" alt="">
                    @endif
                    <p>
                        {{$file->title}}
                    </p>
                </a>
                <div class="delete-form">
                    <form action="{{ route('file.destroy',$file->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button class="delete-button" type="submit"
                            onclick="return confirm('Are you sure you want to delete this file?');">X
                        </button>
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
                                style="padding: 3px;" required>
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
<div class="edit-folder modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Directory</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('folder.update') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input id="folder_id" type="hidden" name="folder_id">
                    <div class="form-group">
                        <label for="start">{{ __('Directory Name') }}</label>
                        <div class='input-group'>
                            <input id="folder_title" type="text" class="w-100 form-control" name="title">
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
    function show_edit_modal(folder) {
        $('.edit-folder').modal('show');
        $('.edit-folder').find('#folder_id').val(folder.id);
        $('.edit-folder').find('#folder_title').val(folder.title);
        console.log(folder);
    };
</script>