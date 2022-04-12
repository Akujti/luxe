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
            <h5 class="h5-luxe">Canva Category</h5>
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
                @foreach($canva->categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->title }}</td>
                    <td><img src="{{ asset('storage/'.$category->image) }}" width="70px" height="70px"></td>
                    <td>{{ $category->created_at }}</td>
                    <td>{{ $category->order }}</td>
                    <td>
                        <button class="btn btn-luxe rounded" onclick="update_event({{ $category }})">Edit</button>
                        <button class="btn btn-danger" onclick="delete_event({{ $category }})">Delete</button>
                        <button class="btn btn-primary" onclick="window.location = '{{ route("admin.canva.categories.templates.index",['marketing_id'=> $category->category_id, 'category_id'=> $category->id]) }}'">View</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@include('admin.marketing.canva.modals.categories.create')
@include('admin.marketing.canva.modals.categories.delete')
@include('admin.marketing.canva.modals.categories.update')

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
    };
</script>
@endsection
@endsection
