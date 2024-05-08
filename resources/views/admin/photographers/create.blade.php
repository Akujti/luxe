@extends('admin.layouts.app', ['active' => 'Photographers'])
@section('content')
    <div class="container-fluid">
        <div class="m-0">
            <div class="w-100 d-flex justify-content-between align-items-center mb-5">
                <h5 class="h5-luxe">Create Photographer</h5>
            </div>
            <div class="">
                <form action="{{ route('admin.photographers.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12 form-group">
                            <label for="start">Name</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="name" required>
                            </div>
                        </div>
                        <div class="col-12 form-group">
                            <label for="start">Email</label>
                            <div class="input-group">
                                <input type="email" class="form-control" name="email" required>
                            </div>
                        </div>
                        <div class="col-12 form-group">
                            <label for="start">Avatar</label>
                            <div class="input-group">
                                <input type="file" class="form-control p-1" name="avatar">
                            </div>
                        </div>
                        <div class="form-group col-12">
                            <button type="submit" class="btn btn-luxe">SUBMIT</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
