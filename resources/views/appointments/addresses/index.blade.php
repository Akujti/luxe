@extends('layouts.app')
@section('js')
@endsection
@section('css')
@endsection
@section('content')
<div class="container">
    <div class="row m-0 w-100 justify-content-center">
        <h1>Addresses</h1><button class="btn btn-luxe" data-toggle="modal" data-target="#exampleModal">New</button>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col-3">#</th>
                        <th scope="col">Address</th>
                        <th scope="col-3">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($addresses as $address)
                    <tr>
                        <td>{{++$loop->index}}</td>
                        <td>{{$address->title}}</td>
                        <td><button class="btn btn-primary">Edit</button><button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<div id="exampleModal" class="modal fade" tabindex="-1" role="dialog">
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
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-luxe">Save</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection