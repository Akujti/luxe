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
            <h5 class="h5-luxe">Products</h5>
            <div>
                <button class="btn-luxe" onclick="window.location.href = '{{ route("admin.luxe_store.products.new_product") }}'">Create</button>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Sale Price</th>
                    <th>Created at</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td> @if($product->preview_image) <img src="{{ asset('storage/'.$product->preview_image) }}" width="70px" height="70px"> @endif</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->sale_price }}</td>
                    <td>{{ $product->created_at }}</td>
                    <td>
                        <button class="btn btn-luxe rounded" onclick="window.location = '{{ route("admin.luxe_store.products.new_product", $product->id) }}'">Edit</button>
                        <button class="btn btn-danger" onclick="delete_event({{ $product }})">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-center">
        {{ $products->links() }}
    </div>
</div>

@include('admin.store.modals.products.delete')

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
