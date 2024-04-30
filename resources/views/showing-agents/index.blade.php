@extends('layouts.app', ['active' => 'office_staff_directory', 'subactive' => 'showing_agents'])
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
            <h1>Showing Agents</h1>
        </div>
        <div class="row my-4">
            <div class="col-12">
                {!! $custom_section->text !!}
                <hr>
            </div>
            <div class="col-md-5">
                <style>
                    #map {
                        height: 600px;
                        box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075);
                        border-radius: 15px;
                        position: sticky !important;
                        top: 150px;
                    }
                </style>
                <div id="map"></div>
            </div>
            <div class="col-md-7">
                <form method="GET" class="mb-3 d-md-flex">
                    <input name="name" type="text" class="form-control mr-2" placeholder="Search by name">
                    <button class="btn btn-luxe">Search</button>
                </form>
                @foreach ($agents as $agent)
                    <div class="col-12">
                        <div class="row-col">
                            <div class="row-details">
                                <img src="{{ $agent->user->avatar }}" alt="">
                                <div>
                                    <h4>{{ $agent->fullname }}&nbsp;</h4>
                                    <p>Email: {{ $agent->user->email }}&nbsp;</p>
                                    <p>Phone: {{ $agent->phone }}&nbsp;</p>
                                    <p>Languages:
                                        @if ($agent->languages)
                                            @foreach ($agent->languages as $language)
                                                <span>{{ $language }} @if (!$loop->last)
                                                        ,
                                                    @endif
                                            </span>
                                            @endforeach
                                        @endif
                                        &nbsp;
                                    </p>
                                    <p>Address: {{ $agent->address }}</p>
                                    <p>Service Areas: {{ $agent->service_areas }}</p>
                                </div>
                            </div>
                            <button class="btn btn-luxe" data-toggle="modal"
                                    data-target="#modal-{{ $agent->user->id }}">Request
                            </button>
                            <div class="modal modal-new fade" id="modal-{{ $agent->user->id }}">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content bg-white">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Request Agent
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        <div class="modal-body">
                                            <form action="{{ route('request.showing.agents', $agent->user) }}"
                                                  method="post">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">Select Service</label>
                                                    <select name="service" class="form-control" required>
                                                        <option value>-</option>
                                                        <option value="Showing">Showing</option>
                                                        <option value="Inspection">Inspection</option>
                                                        <option value="Appraisal">Appraisal</option>
                                                        <option value="Walkthrough">Walkthrough</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Address</label>
                                                    <input name="address" type="text" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="label">Select Date</label>
                                                    <input type="text" id="datepicker" name="date"
                                                           class="form-control date" autocomplete="off" required>
                                                </div>
                                                <button class="btn btn-luxe" type="submit">Request</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="mt-3">
                    {{ $agents->links() }}
                </div>
            </div>
        </div>
    </div>
    <script
        src="https://maps.googleapis.com/maps/api/js?v=3&key={{ env('GOOGLE_MAPS_API_KEY') }}&callback=initMap&v=weekly"
        defer></script>
    <script src="https://unpkg.com/@googlemaps/markerclusterer/dist/index.min.js"></script>
    <script>
        var counter = 0

        function initMap () {
            var agents = JSON.parse(JSON.stringify(<?php echo json_encode($agents_list); ?>))

            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 10,
                center: new google.maps.LatLng(25.751360, -80.255580),
                mapTypeId: google.maps.MapTypeId.ROADMAP
            })
            var infowindow = new google.maps.InfoWindow()

            var marker, i
            var AllLatLng = []

            agents.forEach((el) => {
                if (el.profile.lng && el.profile.lat) {
                    codeAddress(el.profile, function (coords) {
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
                        })

                        google.maps.event.addListener(marker, 'click', (function (marker, i) {
                            return function () {

                                infowindow.setContent(
                                    '<div class=\'d-flex align-items-center\' style=\'gap:10px;margin-bottom:6px\'>' +
                                    '<img style=\'width:58px;height:58px;border-radius:50%;\' src=\'' +
                                    el.avatar + '\'>' +
                                    '<h5>' + el.profile.fullname + '</h5><br>' +
                                    '</div>' +
                                    'Phone: ' + el.profile.phone +
                                    '<br>Languages: ' + el.profile.languages
                                        .toString() +
                                    '<br>Address: ' + el.profile.address
                                )
                                infowindow.open(map, marker)
                            }
                        })(marker, i))
                    })
                }
            })
        }

        function codeAddress (profile, callback) {
            // let geocoder = new google.maps.Geocoder();
            var locations = [profile.lat, profile.lng]
            callback(locations)
            // geocoder.geocode({
            //     'address': address
            // }, function(results, status) {
            //     locations = [results[0].geometry.location.lat(), results[0].geometry.location.lng()]
            // });
        }
    </script>
    <style>
        #ui-datepicker-div {
            display: none;
            background-color: #fff;
            box-shadow: 0 0.125rem 0.5rem rgba(0, 0, 0, 0.1);
            margin-top: 0.25rem;
            border-radius: 0.5rem;
            padding: 0.5rem;
        }

        .ui-datepicker-calendar thead th {
            padding: 0.25rem 0;
            text-align: center;
            font-size: 0.75rem;
            font-weight: 400;
            color: #78909C;
        }

        .ui-datepicker-calendar tbody td {
            width: 2.5rem;
            text-align: center;
            padding: 0;
        }

        .ui-datepicker-calendar tbody td a {
            margin-bottom: 4px;
            display: block;
            border-radius: 0.25rem;
            line-height: 2rem;
            transition: 0.3s all;
            color: #546E7A;
            font-size: 0.875rem;
            text-decoration: none;
        }

        .ui-datepicker-calendar tbody td a:hover {
            background-color: #262626;
            color: #fff;
        }

        .ui-datepicker-calendar tbody td a.ui-state-active {
            background-color: #262626;
            color: #fff;
        }

        .ui-datepicker-header a.ui-corner-all {
            cursor: pointer;
            position: absolute;
            top: 0;
            width: 2rem;
            height: 2rem;
            margin: 0.5rem;
            border-radius: 0.25rem;
            transition: 0.3s all;
        }

        .ui-datepicker-header a.ui-corner-all:hover {
            background-color: #ECEFF1;
        }

        .ui-datepicker-header a.ui-datepicker-prev {
            left: 0;
            background: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMyIgaGVpZ2h0PSIxMyIgdmlld0JveD0iMCAwIDEzIDEzIj48cGF0aCBmaWxsPSIjNDI0NzcwIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik03LjI4OCA2LjI5NkwzLjIwMiAyLjIxYS43MS43MSAwIDAgMSAuMDA3LS45OTljLjI4LS4yOC43MjUtLjI4Ljk5OS0uMDA3TDguODAzIDUuOGEuNjk1LjY5NSAwIDAgMSAuMjAyLjQ5Ni42OTUuNjk1IDAgMCAxLS4yMDIuNDk3bC00LjU5NSA0LjU5NWEuNzA0LjcwNCAwIDAgMS0xLS4wMDcuNzEuNzEgMCAwIDEtLjAwNi0uOTk5bDQuMDg2LTQuMDg2eiIvPjwvc3ZnPg==");
            background-repeat: no-repeat;
            background-size: 0.5rem;
            background-position: 50%;
            transform: rotate(180deg);
        }

        .ui-datepicker-header a.ui-datepicker-next {
            right: 0;
            background: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMyIgaGVpZ2h0PSIxMyIgdmlld0JveD0iMCAwIDEzIDEzIj48cGF0aCBmaWxsPSIjNDI0NzcwIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik03LjI4OCA2LjI5NkwzLjIwMiAyLjIxYS43MS43MSAwIDAgMSAuMDA3LS45OTljLjI4LS4yOC43MjUtLjI4Ljk5OS0uMDA3TDguODAzIDUuOGEuNjk1LjY5NSAwIDAgMSAuMjAyLjQ5Ni42OTUuNjk1IDAgMCAxLS4yMDIuNDk3bC00LjU5NSA0LjU5NWEuNzA0LjcwNCAwIDAgMS0xLS4wMDcuNzEuNzEgMCAwIDEtLjAwNi0uOTk5bDQuMDg2LTQuMDg2eiIvPjwvc3ZnPg==');
            background-repeat: no-repeat;
            background-size: 10px;
            background-position: 50%;
        }

        .ui-datepicker-header a > span {
            display: none;
        }

        .ui-datepicker-title {
            text-align: center;
            line-height: 2rem;
            margin-bottom: 0.25rem;
            font-size: 0.875rem;
            font-weight: 500;
            padding-bottom: 0.25rem;
        }

        .ui-datepicker-week-col {
            color: #78909C;
            font-weight: 400;
            font-size: 0.75rem;
        }
    </style>
    <script>
        $('#datepicker').datepicker({
            duration: 'fast',
            dateFormat: 'yy-mm-dd'
        })
    </script>
@endsection
