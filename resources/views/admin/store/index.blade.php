@extends('admin.layouts.app')

@section('css')
<style>
    th,td {
        text-align: center;
    }
</style>
@endsection
@section('content')
{{ $canva_delete = '' }}
<div class="container-fluid">
    <div class="row m-0">
        <div class="w-100 d-flex justify-content-between align-items-center mb-5">
            <h5 class="h5-luxe">Categories</h5>
            <div>
                <button class="btn-luxe" onclick="create()">Create</button>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Created at</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td> @if($category->image) <img src="{{ asset('storage/'.$category->image) }}" width="70px" height="70px"> @endif</td>
                    <td>{{ $category->created_at }}</td>
                    <td>
                        <button class="btn btn-luxe rounded" onclick="update_event({{ $category }})">Edit</button>
                        <button class="btn btn-danger" onclick="delete_event({{ $category }})">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@include('admin.store.modals.create')
@include('admin.store.modals.delete')
@include('admin.store.modals.update')

@section('js')
<script>
    function create() {
        $('.create-event').modal('show');
    };
    function delete_event(canva) {
        $('.delete-event').modal('show');
        $('.delete-event').find('#canva_id').val(canva.id);
    };
    function update_event(canva) {
        $('.update-event').modal('show');
        $('.update-event').find('#canva_id').val(canva.id);
        $('.update-event').find('#title').val(canva.name);
    };
</script>
@endsection
@endsection
