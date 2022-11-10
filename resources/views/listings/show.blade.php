@extends('layouts.app', ['active' => '', 'subactive' => ''])
@section('content')
    <div class="container-fluid">
        {{-- <form id="form" action="{{ route('listings.store') }}" class="card form p-3 mb-5" method="POST"
            enctype="multipart/form-data">
            @csrf --}}
        {{-- <div class="card-header">
                <h2 class="text-center my-4">CREATE A LISTING</h2>
            </div> --}}
        <div class="row">
            <div class="form-group col-md-6">
                <img src="{{ asset($listing->main_image) }}" alt="" class="w-100 rounded">
            </div>
            <div class="form-group col-md-6">
                <h3>{{ $listing->address }}</h3>
                <p>Type: {{ $listing->type }}</p>
                <p>Price: {{ $listing->price }}</p>
                <p>Baths: {{ $listing->baths }}</p>
                <p>Beds: {{ $listing->beds }}</p>
                <p>Living Area: {{ $listing->living_area }}</p>
                <p>Lot Size: {{ $listing->lot_size }}</p>
                <p>List Date: {{ $listing->list_date }}</p>
            </div>
        </div>
        {{-- </form> --}}
    </div>
@endsection
