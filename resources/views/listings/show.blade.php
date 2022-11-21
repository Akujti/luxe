@extends('layouts.app', ['active' => '', 'subactive' => ''])
@section('content')
    <div class="container-fluid">
        <style>
            .thumbnail {
                width: 100%;
                height: 80px;
                object-fit: cover;
                border-radius: 5px;
                margin-bottom: 10px;
                cursor: pointer;
            }
        </style>
        <div class="row">
            <div class="form-group col-md-6">
                <img id="main-image" src="{{ asset($listing->main_image) }}" alt="" class="w-100 rounded mb-3">
                <div class="row">
                    @php
                        $images = json_decode($listing->images, true);
                    @endphp
                    <div class="col-md-3 col-6">
                        <img src="{{ asset($listing->main_image) }}" class="thumbnail" onclick="setImage(this.src)">
                    </div>
                    @foreach ($images as $image)
                        <div class="col-md-3 col-6">
                            <img src="{{ asset($image) }}" class="thumbnail" onclick="setImage(this.src)">
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="form-group col-md-6">
                <h3>{{ $listing->address }}</h3>
                <hr>
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th>Agent Name</th>
                            <td>{{ $listing->user->profile->fullname }}</td>
                        </tr>
                        <tr>
                            <th>Agent Phone</th>
                            <td>{{ $listing->user->profile->phone }}</td>
                        </tr>
                        <tr>
                            <th>Agent Email</th>
                            <td>{{ $listing->user->email }}</td>
                        </tr>
                        <tr>
                            <th>Type</th>
                            <td>{{ $listing->type }}</td>
                        </tr>
                        <tr>
                            <th>Price</th>
                            <td>${{ number_format($listing->price) }}{{ $listing->rental ? '/mo' : '' }}</td>
                        </tr>
                        <tr>
                            <th>No. of Bathrooms</th>
                            <td>{{ $listing->baths }}</td>
                        </tr>
                        <tr>
                            <th>No. of Bedrooms</th>
                            <td>{{ $listing->beds }}</td>
                        </tr>
                        <tr>
                            <th>Living Area</th>
                            <td>{{ $listing->living_area }} sqft</td>
                        </tr>
                        <tr>
                            <th>Lot Size</th>
                            <td>{{ $listing->lot_size }} sqft</td>
                        </tr>
                        <tr>
                            <th>List Date</th>
                            <td>{{ $listing->list_date }}</td>
                        </tr>
                    </tbody>
                </table>
                @if (auth()->user()->id == $listing->user->id || auth()->user()->isAdmin)
                    <a href="{{ route('listings.edit', $listing) }}" class="btn btn-luxe w-100 mb-3">EDIT LISTING</a>
                    <form action="{{ route('listings.destroy', $listing) }}" method="post" class="mb-3">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger w-100">DELETE LISTING</button>
                    </form>
                @endif
            </div>
        </div>
    </div>
    <script>
        function setImage(url) {
            console.log('url', url);
            $('#main-image').attr("src", url);
        }
    </script>
@endsection
