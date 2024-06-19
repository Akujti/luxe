@extends('layouts.app', ['active' => '', 'subactive' => ''])
@section('content')
    <div class="{{auth()->check() ? 'container-fluid':'container mt-5'}}">
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
                    @if ($images)
                        @foreach ($images as $image)
                            <div class="col-md-3 col-6">
                                <img src="{{ asset($image) }}" class="thumbnail" onclick="setImage(this.src)">
                            </div>
                        @endforeach
                    @endif

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
                @auth
                    <div class="row">
                        @if (auth()->user()->id == $listing->user->id || auth()->user()->isAdmin)
                            <div class="col-md-4">
                                <a href="{{ route('listings.edit', $listing) }}"
                                   class="btn btn-luxe w-100 mb-3">EDIT</a>
                            </div>
                            <div class="col-md-4">
                                <form action="{{ route('listings.destroy', $listing) }}"
                                      onsubmit="return confirm('Are you sure you want to delete this listing?')"
                                      method="post" class="mb-3">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger w-100">DELETE</button>
                                </form>
                            </div>
                        @endif
                        <div class="col-md-4">
                            <button onclick="copyLink()" class="btn btn-luxe w-100">COPY LINK</button>
                        </div>
                    </div>
                @endauth
            </div>
        </div>
    </div>
    <script>
        function setImage (url) {
            if (url) {
                $('#main-image').attr('src', url)
            }
        }

        function copyLink () {
            var dummy = document.createElement('input'), text = window.location.href
            document.body.appendChild(dummy)
            dummy.value = text
            dummy.select()
            document.execCommand('copy')
            document.body.removeChild(dummy)
            toastr.success('Shareable Link Copied')
        }
    </script>
@endsection
