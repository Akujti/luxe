@extends('admin.layouts.app', ['active' => 'Videos'])

@section('css')
<style>
    th,td {
        text-align: center;
    }
    th {
        border:none !important;
        font-family: 'gothicbold';
        font-size: 18px;
        font-weight: bold;
    }
    td {
        font-family: 'gothicregular';
        height: 120px !important;
        vertical-align: middle !important;
    }
    .btn {
        border-radius: 10px !important;
    }
    #img {
        border-radius: 10px;
    }
    @media (max-width: 576px) {
        .form-group {
            padding: 0px !important;
        }
    }
    .language-item, .language-item-new {
        display: flex;
        width: 100%;
        justify-content: space-between;
        align-items: center;
        font-family: 'gothicregular';
        margin-bottom: 7px;
    }
    .language-item input, .language-item-new input {
        padding: 7px;
        height: 45px;
        margin: 0px;
    }
    .btn-create {
        display: flex;
        align-items: center;
        padding: 10px 18px;
        border: none;
        gap: 8px;
        border-radius: 10px;
        font-family: 'gothicbold';
        cursor: pointer;
    }
</style>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row m-0">
        <div class="w-100 row p-0 m-0 d-flex justify-content-between align-items-center mb-5">
            @if(request('video_id'))
            <div>
                <a href="{{ route('admin.videos.index') }}?id={{ request('prev_id') }}" id="back"><img src="/images/files/left-icon.svg" alt=""> Back</a>
                <h5 class="h5-luxe">{{ $single_video->vimeo_details['name'] }}</h5>
            </div>
            @else
            <h5 class="h5-luxe">Video management</h5>
            @endif
            <div class="d-flex" style="gap:10px;">
                @if(request('id'))
                    <button class="btn btn-luxe px-3 py-2" onclick="create_video()">
                        <img src="/images/files/upload.png" alt="">
                        Create Video
                    </button>
                @endif
                @if(request('video_id'))
                    <button class="btn btn-luxe px-3 py-2" onclick="create_file()">
                        <img src="/images/files/upload.png" alt="">
                        Upload File
                    </button>
                @endif
                @if(!request('video_id'))
                    <button class="btn btn-create px-3 py-2" onclick="create()">
                        <img src="/images/files/circle-plus.png" alt="">
                        Create Folder
                    </button>
                @endif
            </div>
        </div>
        @if(!request('video_id'))
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th class="col-4">Name</th>
                        <th class="col-4">Created at</th>
                        <th class="col-4">Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($folders as $folder)
                    <tr>
                        <td class="col-4">{{ $folder->title }}</td>
                        <td class="col-4">{{ $folder->created_at->diffForHumans() }}</td>
                        <td class="col-4">
                            <button class="btn btn-luxe px-4 py-2" onclick="update_event({{ $folder }})">Edit</button>
                            <button class="btn btn-danger py-2" onclick="delete_event({{ $folder }})">Delete</button>
                            <button class="btn btn-primary py-2"><a href="{{ route('admin.videos.index') }}?id={{ $folder->id }}" class="text-light">View</a></button>
                        </td>
                    </tr>
                    @empty
                        <td colspan="3">No Folder Found.</td>
                    @endforelse
                </tbody>
            </table>
        </div>
        @endif

        @if(request('id'))
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Preview Image</th>
                        <th>Vimeo Id</th>
                        <th>Created at</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($videos as $video)
                    <tr>
                        <td><img src="{{ $video->vimeo_details['thumbnail'] }}" id="img" width="75px" height="75px"></td>
                        <td>{{ $video->video_id }}</td>
                        <td>{{ $video->created_at->diffForHumans() }}</td>
                        <td>
                            <button class="btn btn-luxe px-4 py-2" onclick="update_video({{ $video }})">Edit</button>
                            <button class="btn btn-danger py-2" onclick="delete_video({{ $video }})">Delete</button>
                            <button class="btn btn-primary py-2"><a class="text-light" href="{{ route('admin.videos.index') }}?video_id={{ $video->id }}&prev_id={{ request('id') }}">Files</a></button>
                        </td>
                    </tr>
                    @empty
                        <td colspan="4">No Video Found.</td>
                    @endforelse
                </tbody>
            </table>
        </div>
        @endif

        @if(request('video_id'))
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Type</th>
                        <th>Created at</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($single_video->files as $file)
                    <tr>
                        <td>{{ $file->title }}</td>
                        <td>{{ $file->type }}</td>
                        <td>{{ $file->created_at->diffForHumans() }}</td>
                        <td>
                            <button class="btn btn-luxe px-4 py-2" onclick="update_file({{ $file }})">Edit</button>
                            <button class="btn btn-danger py-2" onclick="delete_file({{ $file }})">Delete</button>
                        </td>
                    </tr>
                    @empty
                        <td colspan="4">No File Found.</td>
                    @endforelse
                </tbody>
            </table>
        </div>
        @endif
    </div>
</div>

@include('admin.videos.modals.create')
@include('admin.videos.modals.delete')
@include('admin.videos.modals.update')

@include('admin.videos.modals.create_video')
@include('admin.videos.modals.delete_video')
@include('admin.videos.modals.update_video')

@include('admin.videos.modals.file.create')
@include('admin.videos.modals.file.update')
@include('admin.videos.modals.file.delete')
@section('js')
<script>
    function create() {
        $('.create-event').modal('show');
    };
    function delete_event(row) {
        $('.delete-event').modal('show');
        $('.delete-event').find('#video_id').val(row.id);
    };
    function update_event(row) {
        $('.update-event').modal('show');
        $('.update-event').find('#video_id').val(row.id);
        $('.update-event').find('#title').val(row.title);
    };

    function create_video() {
        $('.create-event-video').modal('show');
    };
    function delete_video(row) {
        $('.delete-event-video').modal('show');
        $('.delete-event-video').find('#id').val(row.id);
    };
    function update_video(row) {
        $('.update-event-video').modal('show');
        $('.update-event-video').find('#id').val(row.id);
        $('.update-event-video').find('#video_id').val(row.video_id);
    };

    function create_file() {
        $('.create-file').modal('show');
    };
    function delete_file(row) {
        $('.delete-file').modal('show');
        $('.delete-file').find('#file_id').val(row.id);
    };
    function update_file(row) {
        $('.update-file').modal('show');
        $('.update-file').find('#file_id').val(row.id);
        $('.update-file').find('#title').val(row.title);
    };
</script>
@endsection
@endsection
