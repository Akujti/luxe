@extends('layouts.app', ['active' => 'leads_services_support', 'subactive' => 'open_house_signup'])
@section('js')
@endsection
@section('css')
<style>
    h1 {
        font-family: 'gothicbold';
    }
    th {
        font-family: 'gothicbold';
    }
    tr {
        font-family: 'gothicregular';
    }
    td {
        vertical-align: middle !important;
    }
</style>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row m-0 w-100 justify-content-center">
        <div class="position-relative w-100 text-center">
            <h1>Addresses</h1>
            <button class="btn btn-luxe position-absolute" data-toggle="modal" data-target="#exampleModal"
                style="right: 0;top:0">New</button>
        </div>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th class="col-1">#</th>
                        <th class="col-4">Address</th>
                        <th class="col-4">Email</th>
                        <th class="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($addresses as $address)
                    <tr>
                        <td>{{++$loop->index}}</td>
                        <td>{{$address->title}}</td>
                        <td>{{$address->email}}</td>
                        <td class="d-flex"><button class="btn btn-luxe mr-2" data-toggle="modal"
                                data-target="#editModal{{$address->id}}">Edit</button>
                            <form action="{{route('appointment-addresses.destroy',$address)}}" method="POST"
                                onSubmit="return confirm('Are you sure you want to delete this address?');">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <div id="editModal{{$address->id}}" class="modal fade modal-new" tabindex="-1" role="dialog">
                        <form action="{{route('appointment-addresses.update',$address)}}" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Edit Address</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="">Title</label>
                                            <input type="text" class="form-control" name="title"
                                                value="{{$address->title}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Agent's Email</label>
                                            <input type="text" class="form-control" name="email"
                                                value="{{$address->email}}">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn"
                                            data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-luxe">Save</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<div id="exampleModal" class="modal fade modal-new" tabindex="-1" role="dialog">
    <form action="{{route('appointment-addresses.store')}}" method="POST">
        @csrf
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">New Address</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="form-group">
                        <label for="">Agent's Email</label>
                        <input type="text" class="form-control" name="email">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-luxe">Save</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection