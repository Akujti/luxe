@extends('layouts.app', ['active' => 'office_staff_directory', 'subactive' => 'optin_agents'])
@section('content')
    <style>
        .row-col {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #E6E6E6;
            padding: 15px 0px
        }

        .row-col img {
            width: 58px;
            height: 58px;
            border-radius: 50%;
            margin-right: 20px;
        }

        .row-col .row-details {
            display: flex;
            justify-content: center;
            align-items: center;
            color: #262626;
        }

        .row-details h4 {
            font-size: 20px;
            font-family: 'gothicbold';
        }

        .row-details p {
            font-family: 'gothicregular';
            font-size: 16px;
            margin: 0px;
            padding: 0px;
        }

        .row-date p {
            font-family: 'gothicregular';
            font-size: 16px;
            margin: 0px;
            padding: 0px;
        }

        h1 {
            font-family: 'gothicbold';
        }

        label {
            font-family: 'gothicregular';
        }
    </style>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <h1>Referral Agents</h1>
        </div>
        <div class="mt-3">
            <form action="{{ route('optin.agents.index') }}" method="GET" class="d-block">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="name">Address</label>
                        <input type="text" name="address" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name">Language</label>
                        <input type="text" name="language" class="form-control">
                    </div>
                </div>
                <div class="form-footer text-right p-0">
                    <input type="submit" class="btn btn-luxe m-0" value="Search">
                </div>
            </form>
        </div>
        <div class="row my-4">
            <div class="col-md-12">
                <style>
                    #map {
                        height: 500px;
                    }
                </style>
                <div id="map"></div>
            </div>
            @foreach ($agents as $agent)
                <div class="col-md-6">
                    <div class="row-col">
                        <div class="row-details">
                            <img src="{{ $agent->avatar }}" alt="">
                            <div>
                                <h4>{{ $agent->profile->fullname }}&nbsp;</h4>
                                <p>Phone: {{ $agent->profile->phone }}&nbsp;</p>
                                <p>Languages:
                                    @if ($agent->profile->languages)
                                        @foreach ($agent->profile->languages as $language)
                                            <span>{{ $language }} @if (!$loop->last)
                                                    ,
                                                @endif
                                            </span>
                                        @endforeach
                                    @endif
                                    &nbsp;
                                </p>
                                <p>Address: {{ $agent->profile->address }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $agents->links() }}
    </div>
    <script src="https://maps.googleapis.com/maps/api/js?v=3&key={{ env('GOOGLE_MAPS_API_KEY') }}&callback=initMap&v=weekly"
        defer></script>
    <script src="https://unpkg.com/@googlemaps/markerclusterer/dist/index.min.js"></script>
    <script>
        var counter = 0

        function initMap() {
            console.log('agents_list');
            console.log(<?php echo count($agents_list); ?>);
            var agents = JSON.parse(JSON.stringify(<?php echo json_encode($agents_list); ?>))

            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 10,
                center: new google.maps.LatLng(25.751360, -80.255580),
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });
            var infowindow = new google.maps.InfoWindow();

            var marker, i;
            var AllLatLng = [];

            agents.forEach((el) => {
                if (el.profile.address) {
                    codeAddress(el.profile.address, function(coords) {
                        AllLatLng.push({
                            lat: coords[0],
                            lng: coords[1]
                        })
                        const svgMarker = {
                            path: "M10.453 14.016l6.563-6.609-1.406-1.406-5.156 5.203-2.063-2.109-1.406 1.406zM12 2.016q2.906 0 4.945 2.039t2.039 4.945q0 1.453-0.727 3.328t-1.758 3.516-2.039 3.070-1.711 2.273l-0.75 0.797q-0.281-0.328-0.75-0.867t-1.688-2.156-2.133-3.141-1.664-3.445-0.75-3.375q0-2.906 2.039-4.945t4.945-2.039z",
                            fillColor: "black",
                            fillOpacity: 0.72,
                            strokeWeight: 0,
                            rotation: 0,
                            scale: 2,
                            anchor: new google.maps.Point(15, 30),
                        };
                        console.log(AllLatLng.filter(x => x.lat == coords[0]).length)
                        if (AllLatLng.filter(x => x.lat == coords[0]).length > 1) {
                            AllLatLng.filter(x => x.lat == coords[0]).forEach((el, i) => {
                                svgMarker.anchor = new google.maps.Point(15 + (i * 10), 30)
                            })
                        }
                        marker = new google.maps.Marker({
                            position: new google.maps.LatLng(coords[0], coords[1], true),
                            icon: svgMarker,
                            map: map
                        });

                        google.maps.event.addListener(marker, 'click', (function(marker, i) {
                            return function() {

                                infowindow.setContent(
                                    "<div class='d-flex align-items-center' style='gap:10px;margin-bottom:6px'>" +
                                    "<img style='width:58px;height:58px;border-radius:50%;' src='" +
                                    el.avatar + "'>" +
                                    "<h5>" + el.profile.fullname + "</h5><br>" +
                                    "</div>" +
                                    "Phone: " + el.profile.phone +
                                    "<br>Languages: " + el.profile.languages
                                    .toString() +
                                    "<br>Address: " + el.profile.address
                                );
                                infowindow.open(map, marker);
                            }
                        })(marker, i));
                    });
                }
            });
        }

        function codeAddress(address, callback) {
            let geocoder = new google.maps.Geocoder();
            var locations;

            geocoder.geocode({
                'address': address
            }, function(results, status) {
                locations = [results[0].geometry.location.lat(), results[0].geometry.location.lng()]
                callback(locations)
            });
        }
    </script>
@endsection
