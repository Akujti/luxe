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
            <h5 class="h5-luxe">Marketing Canva</h5>
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
                @foreach($canvas as $canva)
                <tr>
                    <td>{{ $canva->id }}</td>
                    <td>{{ $canva->title }}</td>
                    <td><img src="{{ asset('storage/'.$canva->image) }}" width="70px" height="70px"></td>
                    <td>{{ $canva->created_at }}</td>
                    <td>{{ $canva->order }}</td>
                    <td>
                        <button class="btn btn-luxe rounded" onclick="update_event({{ $canva }})">Edit</button>
                        <button class="btn btn-danger" onclick="delete_event({{ $canva }})">Delete</button>
                        <button class="btn btn-primary" onclick="window.location = '{{ route("admin.canva.categories.index", $canva->id) }}'">View</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@include('admin.marketing.canva.modals.create')
@include('admin.marketing.canva.modals.delete')
@include('admin.marketing.canva.modals.update')

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
