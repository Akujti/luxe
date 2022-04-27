@extends('admin.layouts.app', ['active' => 'Marketing_canva'])

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
</style>
@endsection
@section('content')
{{ $canva_delete = '' }}
<div class="container-fluid">
    <div class="row m-0">
        <div class="w-100 d-flex justify-content-between align-items-center mb-5">
            <h5 class="h5-luxe">Canva Subcategory</h5>
            <div>
                <button class="btn btn-luxe px-5 py-2" onclick="create()">Create</button>
            </div>
        </div>
        <div class="table-responsive">
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
                        <td><img src="{{ asset('storage/'.$category->image) }}" id="img" width="75px" height="75px"></td>
                        <td>{{ $category->created_at->diffForHumans() }}</td>
                        <td>{{ $category->order }}</td>
                        <td>
                            <button class="btn btn-luxe px-4 py-2" onclick="update_event({{ $category }})">Edit</button>
                            <button class="btn btn-danger py-2" onclick="delete_event({{ $category }})">Delete</button>
                            <button class="btn btn-primary px-4 py-2" onclick="window.location = '{{ route("admin.canva.categories.templates.index",['marketing_id'=> $category->category_id, 'category_id'=> $category->id]) }}'">View</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
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