@extends('layouts.app', ['active' => '', 'subactive' => ''])
@section('content')
    <div class="container-fluid">
        <form id="form" action="{{ route('listings.store') }}" class="card form p-3 mb-5" method="POST"
            enctype="multipart/form-data">
            @csrf
            <div class="card-header">
                <h2 class="text-center my-4">CREATE A LISTING</h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="name">Type</label>
                        <select name="type" required class="form-control">
                            <option value>-</option>
                            <option value="House">House</option>
                            <option value="Condo">Condo</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name">Address</label>
                        <input type="text" name="address" class="form-control map-search" required
                            placeholder="Enter address">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name">Price</label>
                        <input type="number" name="price" class="form-control" required value="0">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name">Baths</label>
                        <input type="number" name="baths" class="form-control" required value="0">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name">Beds</label>
                        <input type="number" name="beds" class="form-control" required value="0">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name">Living Area</label>
                        <input type="number" name="living_area" class="form-control" required value="0">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name">Lot Size</label>
                        <input type="number" name="lot_size" class="form-control" required value="0">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name">List Date</label>
                        <input type="date" name="list_date" class="form-control" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name">Main Image</label>
                        <input type="file" name="main_image" class="form-control p-1" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name">Other Images</label>
                        <input type="file" name="images[]" class="form-control p-1" required multiple>
                    </div>
                    <div class="text-center w-100">
                        <input type="submit" class="btn btn-luxe w-100" value="CREATE">
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
