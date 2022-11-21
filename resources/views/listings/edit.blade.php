@extends('layouts.app', ['active' => '', 'subactive' => ''])
@section('content')
    <div class="container-fluid">
        <form id="form" action="{{ route('listings.update', $listing) }}" class="card form p-3 mb-5" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-header">
                <h2 class="text-center my-4">EDIT LISTING</h2>
            </div>
            <div class="card-body">
                <div class="row">
                    @if (auth()->user()->isAdmin)
                        <div class="form-group col-md-12">
                            <label for="name">Agent</label>
                            <input type="text" name="agent_email" class="form-control" placeholder="Enter agent's email"
                                value="{{ $listing->user->email }}">
                        </div>
                    @endif
                    <div class="form-group col-md-6">
                        <label for="name">Type</label>
                        <select name="type" required class="form-control">
                            <option value>-</option>
                            <option value="Single Family" {{ $listing->type == 'Single Family' ? 'selected' : '' }}>Single
                                Family</option>
                            <option value="Condo/Townhouse" {{ $listing->type == 'Condo/Townhouse' ? 'selected' : '' }}>
                                Condo/Townhouse</option>
                            <option value="Rental" {{ $listing->type == 'Rental' ? 'selected' : '' }}>Rental</option>
                            <option value="Land" {{ $listing->type == 'Land' ? 'selected' : '' }}>Land</option>
                            <option value="Commercial" {{ $listing->type == 'Commercial' ? 'selected' : '' }}>Commercial
                            </option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name">Address</label>
                        <input type="text" name="address" class="form-control map-search" required
                            placeholder="Enter address" value="{{ $listing->address }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name">Price</label>
                        <input type="number" name="price" class="form-control" required value="{{ $listing->price }}">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="rentalCheck" name="rental"
                                style="margin-top: 0.4rem;" {{ $listing->rental ? 'checked' : '' }} />
                            <span class="form-check-label" for="rentalCheck">Is rental?</span>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name">Bathrooms</label>
                        <input type="number" name="baths" class="form-control" required value="{{ $listing->baths }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name">Bedrooms</label>
                        <input type="number" name="beds" class="form-control" required value="{{ $listing->beds }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name">Living Area</label>
                        <input type="number" name="living_area" class="form-control" required
                            value="{{ $listing->living_area }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name">Lot Size</label>
                        <input type="number" name="lot_size" class="form-control" required
                            value="{{ $listing->lot_size }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name">List Date</label>
                        <input type="date" name="list_date" class="form-control" required
                            value="{{ $listing->list_date }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name">Main Image</label>
                        <input type="file" name="main_image" class="form-control p-1">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name">Other Images</label>
                        <input type="file" name="images[]" class="form-control p-1" multiple>
                    </div>
                    <div class="text-center w-100">
                        <input type="submit" class="btn btn-luxe w-100" value="UPDATE">
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
