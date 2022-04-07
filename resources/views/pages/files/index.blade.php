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
    .box-file {
        width: 17.7%;
        margin-right: 39px;
    }

    .box-file:nth-child(5n) {
        margin-right: 0px;
    }

    img {
        object-fit: cover;
    }

    .folder {
        min-height: 247px;
        transition: .2s;
        padding: 5px;
        text-align: center;
        position: relative;
        box-shadow: 0px 0px 12px 0px rgba(0, 0, 0, 0.09);
        border-radius: 10px;
        margin-bottom: 39px;
        display: flex;
        align-items: center;
        justify-content: center;
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
    }

    .upload:first-child {
        margin-bottom: 19px;
    }

    .upload img {
        width: 40px;
        height: 40px;
        object-fit: cover;
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

    @media (max-width: 541px) {
        .box-file {
            width: 100%;
            margin-right: 0px;
        }
    }
    @media (min-width: 768px) and (max-width: 980px) {
        .box-file {
            width: calc(50% - 20px);
            margin-right: 39px !important;
        }
        .box-file:nth-child(2n) {
            margin-right: 0px !important;
        }
    }

    @media (min-width: 990px) and (max-width: 1452px){
        .box-file {
            width: 29.7%;
            margin-right: 39px !important;
        }
        .box-file:nth-child(3n) {
            margin-right: 0px !important;
        }
    }

    @media (min-width: 1453px) and (max-width: 1875px){
        .box-file {
            width: 20.7%;
            margin-right: 39px !important;
        }
        .box-file:nth-child(4n) {
            margin-right: 0px !important;
        }
    }
</style>
<div class="container-fluid">
    @if(isset($_GET['id']) && !empty($_GET['id']))
    <div>
        <a href="{{route('files.index')}}" id="back"><img src="/images/files/left-icon.svg" alt=""> Back</a>
    </div>
    @endif
    <div class="row m-0 box-title mb-4">
        <h3 class="m-0 p-0">Luxe Files</h3>
    </div>
    <div class="row m-0">
        @if (Auth::user()->isAdmin)
        <div class="box-file">
            <div class="col-12 p-0">
                <div class="upload">
                    <a onclick="create_folder()">
                        <img src="/images/files/create-folder-icon.svg" alt="">
                        <p>Create a Folder</p>
                    </a>
                </div>
            </div>
            <div class="col-12 p-0">
                <div class="upload">
                    <a onclick="show_modal()">
                        <img src="/images/files/upload-file-icon.svg" alt="">
                        <p>Upload a File</p>
                    </a>
                </div>
            </div>
        </div>
        @endif
        @foreach ($folders as $folder)
        <div class="box-file">
            <div class="folder">
                <a href="{{route('files.index').'?id='.$folder->id}}">
                    <img src="/images/files/folder.png" alt="" width="113px" height="113px">
                    <p>
                        {{$folder->title}}
                    </p>
                </a>
                @if (Auth::user()->isAdmin)
                <div class="delete-form">
                    <form action="{{ route('folder.destroy',$folder->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button class="delete-button" type="submit" onclick="return confirm('Are you sure you want to delete this directory?');">
                            <img src="{{asset('images/files/delete-icon.svg')}}" alt="" width="34px" height="34px">
                        </button>
                    </form>
                </div>
                <div class="edit-form">
                    <button class="edit-button" type="submit" onclick="show_edit_modal({{$folder}})">
                        <img src="{{asset('images/files/pencil-icon.svg')}}" alt="" width="34px" height="34px">
                    </button>
                </div>
                @endif
            </div>
        </div>
        @endforeach
        @foreach ($files as $file)
        <div class="box-file">
            <div class="folder">
                <a href="{{'/storage/'.$file->file}}" download target="_blank">
                    @if ($file->type == 'img')
                    <img class="preview-img" src="{{'/storage/'.$file->file}}" alt="" width="113px" height="113px">
                    @else
                    <img src="{{'/images/files/'.$file->type.'.png'}}" alt="" width="113px" height="113px">
                    @endif
                    <p>
                        {{$file->title}}
                    </p>
                </a>
                <div class="delete-form">
                    <form action="{{ route('file.destroy',$file->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button class="delete-button" type="submit" onclick="return confirm('Are you sure you want to delete this file?');">
                            <img src="{{asset('images/files/delete-icon.svg')}}" alt="">
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- Create File  -->
<div class="create-event modal fade modal-new" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Upload a File</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('files.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="folder_id" value="{{$folder_id}}">
                    <div class="row m-0 p-0">
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
                                <input type="file" name="file" class="form-control" id="inputGroupFile01" style="padding: 3px;" required>
                            </div>
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

<!-- Create Folder  -->
<div class="create-folder modal fade modal-new" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Create a Folder</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form action="{{route('files.open-house.directory')}}" method="post" class="m-0">
                    @csrf
                    <input type="hidden" name="current_directory" value="{{$folder_id}}">
                    <div class="form-group m-0">
                        <label for="">Folder Name</label>
                        <div class='input-group'>
                            <input type="text" class="form-control" name="title" required>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-luxe" id="save-event">Create</button>
            </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<!-- Edit Folder  -->
<div class="edit-folder modal fade modal-new" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Directory</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('folder.update') }}" method="POST" class="m-0">
                    @csrf
                    @method('PUT')
                    <input id="folder_id" type="hidden" name="folder_id">
                    <div class="form-group m-0">
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

    function create_folder() {
        $('.create-folder').modal('show');
    }
</script>