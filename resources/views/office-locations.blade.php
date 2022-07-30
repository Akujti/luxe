@extends('layouts.app', ['active' => 'office_staff_directory', 'subactive' => 'office_locations'])
@section('content')
    <style>
        .wrapper h1 {
            font-weight: 400;
            letter-spacing: 2px;
            background: #262626;
            padding: 10px;
            border: 1px solid #dadada;
            border-radius: 10px;
            color: #fff;
        }

        .address {
            border-bottom: 1px solid rgb(236, 236, 236)
        }

        .location {
            margin-bottom: 0;
            font-size: 20px;
            letter-spacing: 1px;
        }
    </style>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card form p-3">
                    <div class="wrapper">
                        <h1 class="text-center my-4">Office Locations</h1>
                    </div>
                    <div class="card-body row">
                        <div class="col-md-6">
                            <div class="form-group ">
                                <p class="location">Coral Gables</p>
                                <p class="address">55 Merrick Way #402, Coral Gables, FL 33134</p>
                            </div>
                            <div class="form-group ">
                                <p class="location">Midtown</p>
                                <p class="address">30 NW 34 Street #102, Miami, FL 33127</p>
                            </div>
                            <div class="form-group ">
                                <p class="location">Kendall</p>
                                <p class="address">12464 SW 127 Avenue, Miami, FL 33186</p>
                            </div>
                            <div class="form-group ">
                                <p class="location">Miami Lakes</p>
                                <p class="address">17670 NW 78th Avenue #206, Hialeah, FL 33015</p>
                            </div>
                            <div class="form-group ">
                                <p class="location">Homestead</p>
                                <p class="address">2016 NE 8 Street, Homestead, FL 33033</p>
                            </div>
                            <div class="form-group ">
                                <p class="location">Aventura</p>
                                <p class="address">2875 NE 191 Street #PH5, Aventura, FL 33180</p>
                            </div>
                            <div class="form-group ">
                                <p class="location">Orlando</p>
                                <p class="address">301 N Tubb Street #104, Oakland, FL 34760</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <style>
                                #map {
                                    height: 100%;
                                }
                            </style>
                            <div id="map"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&callback=initMap&v=weekly"
        defer></script>
    <script src="https://unpkg.com/@googlemaps/markerclusterer/dist/index.min.js"></script>

    <script>
        function initMap() {
            var locations = [
                ['Coral Gables', 25.751360, -80.255580],
                ['Midtown', 25.800800, -80.195480],
                ['Kendall', 25.652240, -80.398340],
                ['Miami Lakes', 25.863142, -80.3240134],
                ['Homestead', 25.477298, -80.452697],
                ['Aventura', 25.952880, -80.143430],
                ['Orlando', 28.5525227, -81.628067],
            ];

            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 10,
                center: new google.maps.LatLng(25.751360, -80.255580),
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });

            var infowindow = new google.maps.InfoWindow();

            var marker, i;
            const svgMarker = {
                path: "M10.453 14.016l6.563-6.609-1.406-1.406-5.156 5.203-2.063-2.109-1.406 1.406zM12 2.016q2.906 0 4.945 2.039t2.039 4.945q0 1.453-0.727 3.328t-1.758 3.516-2.039 3.070-1.711 2.273l-0.75 0.797q-0.281-0.328-0.75-0.867t-1.688-2.156-2.133-3.141-1.664-3.445-0.75-3.375q0-2.906 2.039-4.945t4.945-2.039z",
                fillColor: "black",
                fillOpacity: 0.72,
                strokeWeight: 0,
                rotation: 0,
                scale: 2,
                anchor: new google.maps.Point(15, 30),
            };
            for (i = 0; i < locations.length; i++) {
                marker = new google.maps.Marker({
                    position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                    icon: svgMarker,
                    map: map
                });

                google.maps.event.addListener(marker, 'click', (function(marker, i) {
                    return function() {
                        infowindow.setContent(locations[i][0]);
                        infowindow.open(map, marker);
                    }
                })(marker, i));
            }
        }
    </script>
@endsection
