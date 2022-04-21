@extends('admin.layouts.app')

@section('css')
<style>
    th,td {
        text-align: center;
    }
</style>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row m-0">
        <div class="w-100 d-flex justify-content-between align-items-center mb-5">
            <h5 class="h5-luxe">Video Folders</h5>
            <div>
                <button class="btn-luxe" onclick="create()">Create</button>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Parent Folder</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach($videos as $video)
                <tr>
                    <td>{{ $video->id }}</td>
                    <td>{{ $video->title }}</td>
                    <td>{{ $video->parent ? $video->parent->title : '' }}</td>
                    <td>
                        <button class="btn btn-luxe rounded" onclick="update_event({{ $video }})">Edit</button>
                        <button class="btn btn-danger" onclick="delete_event({{ $video }})">Delete</button>
                        <button class="btn btn-primary">View</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
