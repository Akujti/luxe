@extends('layouts.app', ['active' => '', 'subactive' => ''])
@section('content')
    <style>
        #map {
            height: 400px;
            box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075);
            border-radius: 15px;
        }

        .listing {
            border: 1px solid #ececec;
            border-radius: 10px;
            margin-bottom: 20px;
            overflow: hidden;
            box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075);
            color: black;
        }

        a:hover {
            text-decoration: none !important;
        }

        .listing img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .listing p {
            margin: 0;
        }

        .listing .created-at {
            top: 5px;
            left: 5px;
            font-weight: bold;
            background-color: rgba(0, 0, 0, .4);
            color: white;
            padding: 2px 5px;
            font-size: 12px;
            border-radius: 5px;
        }

        .listing .listing-meta {
            padding: 10px;
            min-height: 140px;
        }

        @media screen and (min-width: 1280px) {
            .listing img {
                height: 250px;
            }
        }

        @media screen and (min-width: 1500px) {
            .listing img {
                height: 290px;
            }
        }

        @media screen and (min-width: 1700px) {
            .listing img {
                height: 400px;
            }
        }

        @media screen and (min-width: 500px) {
            .listings .col-md-6 {
                padding-right: 0;
            }

            #map {
                height: 600px;
                /* position: sticky !important;
                                                                                                                                                                                                top: 150px; */
            }
        }
    </style>
    <div class="container-fluid mb-5">
        {{-- <h1 class="text-center h1-luxe mb-4">COMING SOON LISTINGS</h1> --}}

        <form action="" method="get">
            <label for="">Search LUXE Properties Coming Soon Listings</label>
            <div class="row">
                <div class="col-md-3 form-group">
                    <input type="number" name="zip" class="form-control" placeholder="ZIP Code"
                           value="{{ isset($_GET['zip']) ? $_GET['zip'] : '' }}">
                </div>
                <div class="col-md-3 form-group">
                    <input type="text" name="price" class="form-control" placeholder="Price"
                           value="{{ isset($_GET['price']) ? $_GET['price'] : '' }}">
                </div>
                <div class="col-md-3 form-group">
                    <select name="type" class="form-control">
                        <option value>Property Type</option>
                        <option value="Single Family">Single Family</option>
                        <option value="Condo/Townhouse">Condo/Townhouse</option>
                        <option value="Rental">Rental</option>
                        <option value="Land">Land</option>
                        <option value="Commercial">Commercial</option>
                    </select>
                </div>
                <div class="col-md-3  form-group">
                    <button class="btn btn-luxe w-100 form-control" type="submit">Search</button>
                </div>
            </div>
        </form>
        <hr class="mt-0">
        <div class="row">
            <div class="col-md-5 mb-3">
                <div id="map"></div>
                <a href="{{ route('listings.create') }}" class="btn btn-luxe mt-3 w-100">Create A New
                    Listing To Add</a>
                <form action="{{route('listings.subscribe')}}" method="POST">
                    @csrf
                    @if(!auth()->user()->coming_soon_notifications)
                        <button class="btn btn-luxe mt-3 w-100">Sign Up For
                            Email Alerts For New Coming Soon Listings
                        </button>
                    @else
                        <button class="btn btn-luxe mt-3 w-100">Sign Out For
                            Email Alerts For New Coming Soon Listings
                        </button>
                    @endif
                </form>
            </div>
            <div class="col-md-7 row listings">
                @forelse ($listings as $item)
                    {{-- @if (now() <= \Carbon\Carbon::parse($item->list_date)->addDays(7)) --}}
                    <div class="col-md-6">
                        <a href="{{ route('listings.show', $item) }}">
                            <div class="listing">
                                <div class="position-relative">
                                    <img src="{{ asset($item->main_image) }}" alt="" class="w-100" height="240"
                                         style="object-fit: cover;object-position: center;">
                                    <p class="position-absolute created-at">Coming Soon</p>
                                </div>
                                <div class="listing-meta">
                                    <p class="price">
                                        <b>${{ number_format($item->price) }}{{ $item->rental ? '/mo' : '' }}</b>
                                    </p>
                                    <p class="info"><b>{{ $item->beds }}</b> bd | <b>{{ $item->baths }}</b> ba |
                                        <b>{{ $item->living_area }}</b> sqft
                                    </p>
                                    @if ($item->type == 'Rental')
                                        <p><b>{{ $item->type }}</b></p>
                                    @else
                                        <p><b>{{ $item->type }}</b> for sale</p>
                                    @endif
                                    <p class="address">{{ $item->address }}</p>
                                    <p class="address">{{ $item->user->profile->fullname }}</p>
                                    <p class="address">{{ $item->user->profile->phone }}</p>
                                    <p class="address">{{ $item->user->email }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    {{-- @endif --}}
                @empty
                    No search results
                @endforelse
                {{ $listings->links() }}
            </div>
        </div>
    </div>
    <script
        src="https://maps.googleapis.com/maps/api/js?v=3&key={{ env('GOOGLE_MAPS_API_KEY') }}&callback=initMap&v=weekly"
        defer></script>
    <script>
        function initMap () {
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 10,
                center: new google.maps.LatLng(25.8617, -80.4018),
                mapTypeId: google.maps.MapTypeId.ROADMAP
            })

            var infowindow = new google.maps.InfoWindow()

            var marker, i
            var AllLatLng = []
            var listings = JSON.parse(JSON.stringify(<?php echo json_encode($listings_all); ?>))
            listings.forEach((el) => {
                if (el.lng && el.lat) {
                    console.log(el)
                    codeAddress(el, function (coords) {
                        AllLatLng.push({
                            lat: coords[0],
                            lng: coords[1]
                        })
                        const svgMarker = {
                            path: 'M10.453 14.016l6.563-6.609-1.406-1.406-5.156 5.203-2.063-2.109-1.406 1.406zM12 2.016q2.906 0 4.945 2.039t2.039 4.945q0 1.453-0.727 3.328t-1.758 3.516-2.039 3.070-1.711 2.273l-0.75 0.797q-0.281-0.328-0.75-0.867t-1.688-2.156-2.133-3.141-1.664-3.445-0.75-3.375q0-2.906 2.039-4.945t4.945-2.039z',
                            fillColor: 'black',
                            fillOpacity: 0.72,
                            strokeWeight: 0,
                            rotation: 0,
                            scale: 2,
                            anchor: new google.maps.Point(15, 30),
                        }
                        if (AllLatLng.filter(x => x.lat == coords[0]).length > 1) {
                            AllLatLng.filter(x => x.lat == coords[0]).forEach((el, i) => {
                                svgMarker.anchor = new google.maps.Point(15 + (i * 10), 30)
                            })
                        }
                        marker = new google.maps.Marker({
                            position: new google.maps.LatLng(coords[0], coords[1], true),
                            icon: svgMarker,
                            map: map
                        })
                        let nf = new Intl.NumberFormat('en-US')
                        google.maps.event.addListener(marker, 'click', (function (marker, i) {
                            return function () {
                                infowindow.setContent(
                                    '<div class=\'d-flex align-items-center mb-3 gap-3\' data-id=\'' +
                                    el.id + '\'>' +
                                    '<img style=\'width:58px;height:58px;border-radius:50%;\' src=\'' +
                                    el.main_image + '\'>' +
                                    '<h5>' + el.address + '</h5><br>' +
                                    '</div>' +
                                    'Type: ' + el.type +
                                    '<br>Price: $' + nf.format(el.price) +
                                    '<br>Agent Name: ' + el.user.profile.fullname
                                )
                                infowindow.open(map, marker)
                            }
                        })(marker, i))
                    })
                }
            })
        }

        function codeAddress (el, callback) {
            var locations = [el.lat, el.lng]
            callback(locations)
        }
    </script>
@endsection
