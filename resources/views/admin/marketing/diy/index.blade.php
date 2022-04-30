@extends('admin.layouts.app', ['active' => 'Diy'])

@section('css')
<style>
    th,
    td {
        text-align: center;
    }

    th {
        border: none !important;
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
            <h5 class="h5-luxe">DIY Categories</h5>
            <div>
                <button class="btn btn-luxe px-5 py-2" onclick="create()">Create Category</button>
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
                    @foreach($categories as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->title }}</td>
                        <td><img src="{{ asset('storage/'.$item->image) }}" id="img" width="75px" height="75px">
                        </td>
                        <td>{{ $item->created_at->diffForHumans() }}</td>
                        <td>{{ $item->order }}</td>
                        <td>
                            <button class="btn btn-luxe px-4 py-2" onclick="update_event({{ $item }})">Edit</button>
                            <button class="btn btn-danger py-2" onclick="delete_event({{ $item }})">Delete</button>
                            <button class="btn btn-primary px-3 py-2"
                                onclick="window.location = '{{ route('admin.diy-categories.show', $item->id) }}'">View</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@include('admin.marketing.diy.modals.create')
{{-- @include('admin.marketing.diy.modals.templates.create') --}}
@include('admin.marketing.diy.modals.delete')
{{--@include('admin.marketing.canva.modals.update') --}}

@section('js')
<script>
    function create() {
        $('.create-event').modal('show');
    };
    function create_template() {
        $('.create-template').modal('show');
    };
    function delete_event(item) {
        $('.delete-category').modal('show');
        $('.delete-category').find('#category_id').val(item.id);
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