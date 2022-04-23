@extends('admin.layouts.app', ['active' => 'Coupons'])

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
<div class="container-fluid">
    <div class="row m-0">
        <div class="w-100 d-flex justify-content-between align-items-center mb-5">
            <h5 class="h5-luxe">Coupons</h5>
            <div>
                <button class="btn btn-luxe px-5 py-2" onclick="create()">Create</button>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Code</th>
                        <th>Price</th>
                        <th>Expired</th>
                        <th>Created at</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($coupons as $coupon)
                    <tr>
                        <td>{{ $coupon->id }}</td>
                        <td>{{ $coupon->code }}</td>
                        <td>${{ $coupon->price }}</td>
                        <td>{{ $coupon->expired ? 'Yes': 'No' }}</td>
                        <td>{{ $coupon->created_at->diffForHumans() }}</td>
                        <td>
                            <button class="btn btn-luxe px-4 py-2" onclick="update_event({{ $coupon }})">Edit</button>
                            <button class="btn btn-danger py-2" onclick="delete_event({{ $coupon }})">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@include('admin.coupons.modals.create')
@include('admin.coupons.modals.delete')
@include('admin.coupons.modals.update')

@section('js')
<script>
    function create() {
        $('.create-event').modal('show');
    };
    function delete_event(row) {
        $('.delete-event').modal('show');
        $('.delete-event').find('#coupon_id').val(row.id);
    };
    function update_event(row) {
        $('.update-event').modal('show');
        $('.update-event').find('#coupon_id').val(row.id);
        $('.update-event').find('#code').val(row.code);
        $('.update-event').find('#price').val(row.price);
    };
</script>
@endsection
@endsection
