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

        .form-group {
            border-bottom: 1px solid rgb(236, 236, 236);
            padding-bottom: 10px;
        }

        .address {
            margin-bottom: 0.5rem
        }

        .location {
            margin-bottom: 0;
            font-size: 20px;
            letter-spacing: 1px;
        }

        .modal p {
            font-family: "gothicregular";
        }

        #modal-location {
            font-size: 22px;
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
                                <button class="btn" onclick="toggleModal('Coral Gables','Keypad 555777#')">View Access
                                    Instructions</button>
                            </div>
                            <div class="form-group ">
                                <p class="location">Midtown</p>
                                <p class="address">30 NW 34 Street #102, Miami, FL 33127</p>
                                <button class="btn" onclick="toggleModal('Midtown','Supra','Alarm 1234')">View
                                    Access
                                    Instructions</button>
                            </div>
                            <div class="form-group ">
                                <p class="location">Kendall</p>
                                <p class="address">12464 SW 127 Avenue, Miami, FL 33186</p>
                                <button class="btn" onclick="toggleModal('Kendall','Lockbox 1986','Alarm 2019')">View
                                    Access
                                    Instructions</button>
                            </div>
                            <div class="form-group ">
                                <p class="location">Miami Lakes</p>
                                <p class="address">17670 NW 78th Avenue #206, Hialeah, FL 33015</p>
                                <button class="btn" onclick="toggleModal('Miami Lakes','Keypad 5557')">View Access
                                    Instructions</button>
                            </div>
                            <div class="form-group ">
                                <p class="location">Homestead</p>
                                <p class="address">2016 NE 8 Street, Homestead, FL 33033</p>
                                <button class="btn" onclick="toggleModal('Homestead','Lockbox 7400')">View Access
                                    Instructions</button>
                            </div>
                            <div class="form-group ">
                                <p class="location">Aventura</p>
                                <p class="address">2875 NE 191 Street #PH5, Aventura, FL 33180</p>
                                <button class="btn" onclick="toggleModal('Aventura','Lockbox 1976')">View Access
                                    Instructions</button>
                            </div>
                            <div class="form-group ">
                                <p class="location">Orlando</p>
                                <p class="address">301 N Tubb Street #104, Oakland, FL 34760</p>
                            </div>
                            <div class="form-group ">
                                <p class="location">South Miami</p>
                                <p class="address">5966 S Dixie Highway #300, South Miami, FL 33143</p>
                                <button class="btn"
                                    onclick="toggleModal('South Miami','Buro Building Open From 8:30am - 5:30pm')">View
                                    Access
                                    Instructions</button>
                            </div>
                            <div class="form-group ">
                                <p class="location">Pembroke Pines</p>
                                <p class="address">1911 NW 150 Avenue #202, Pembroke Pines FL 33028</p>
                            </div>
                            <div class="form-group ">
                                <p class="location">Dadeland -- Coming Soon</p>
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
                    <div class="modal modal-new fade" id="modal">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content bg-white">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Access Instructions</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body pb-0 text-center">
                                    <p id="modal-location"></p>
                                    <p id="modal-text-one"></p>
                                    <p id="modal-text-two"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function toggleModal(location, text_1, text_2) {
            $('#modal-location').text(location);
            $('#modal-text-one').text(text_1);
            $('#modal-text-two').text(text_2);
            $('#modal').modal('show');
        }
    </script>
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
                ['South Miami', 25.70264828581291, -80.2908567003317],
                ['Pembroke Pines', 26.025562885970274, -80.34676792739103],
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
