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
            <h5 class="h5-luxe">Category Templates</h5>
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
                    <th>Order</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach($category->templates as $template)
                <tr>
                    <td>{{ $template->id }}</td>
                    <td>{{ $template->title }}</td>
                    <td><img src="{{ asset('storage/'.$template->image) }}" width="70px" height="70px"></td>
                    <td>{{ $template->created_at }}</td>
                    <td>{{ $template->order }}</td>
                    <td>
                        <button class="btn btn-luxe rounded" onclick="update_event({{ $template }})">Edit</button>
                        <button class="btn btn-danger" onclick="delete_event({{ $template }})">Delete</button>
                        <button class="btn btn-primary" onclick="window.location = '{{ $template->url }}'">Url</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@include('admin.marketing.canva.modals.templates.create')
@include('admin.marketing.canva.modals.templates.delete')
@include('admin.marketing.canva.modals.templates.update')

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
        $('.update-event').find('#title').val(canva.title);
        $('.update-event').find('#order').val(canva.order);
        $('.update-event').find('#url').val(canva.url);
    };
</script>
@endsection
@endsection
