@extends('layouts.app')
@section('js')
@endsection
@section('css')
<style>
    .gothic-bold {
        font-family: 'gothicbold';
    }
    th {
        font-family: 'gothicbold';
    }
</style>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row m-0 w-100 justify-content-center">
        <div class="position-relative w-100 text-center">
            <h1 class="gothic-bold">Emails</h1>
            <button class="btn btn-luxe position-absolute" data-toggle="modal" data-target="#exampleModal"
                style="right: 0;top:0">New</button>
        </div>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th class="col-1">#</th>
                        <th class="col-9">Email</th>
                        <th class="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($emails as $email)
                    <tr>
                        <td>{{++$loop->index}}</td>
                        <td>{{$email->email}}</td>
                        <td class="d-flex"><button class="btn btn-primary mr-2" data-toggle="modal"
                                data-target="#editModal{{$email->id}}">Edit</button>
                            <form action="{{route('agent-emails.destroy',$email)}}" method="POST"
                                onSubmit="return confirm('Are you sure you want to delete this email?');">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <div id="editModal{{$email->id}}" class="modal fade" tabindex="-1" role="dialog">
                        <form action="{{route('agent-emails.update',$email)}}" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Edit Email</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="">Agent's Email</label>
                                            <input type="text" class="form-control" name="email"
                                                value="{{$email->email}}">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-luxe">Save</button>
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
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
    <form action="{{route('agent-emails.store')}}" method="POST">
        @csrf
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">New Email</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
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