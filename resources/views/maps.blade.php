<html>

<head>
    <title>Places Search Box</title>
</head>

<body>
    <input id="pac-input" class="controls" type="text" placeholder="Search Box" />

    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbvYCR-b_MzBtqFgpY_OJU5oCxrQWwrSI&callback=initMap&libraries=places&libraries=geometry&v=weekly"
        defer></script>
    <script script>
        console.log('Position', 1);

        function initMap() {
            const triangleCoords = [{
                    lat: -79.2526245,
                    lng: 27.4351652
                },
                {
                    lat: -76.9070435,
                    lng: 27.3668890
                },
                {
                    lat: -76.8768311,
                    lng: 25.7998912
                },
                {
                    lat: -77.5991821,
                    lng: 25.7603198
                },
                {
                    lat: -78.4121704,
                    lng: 25.9531056
                },
                {
                    lat: -79.2388916,
                    lng: 26.4090906
                },
                {
                    lat: -79.2553711,
                    lng: 27.4327275
                },
            ];

            const bermudaTriangle = new google.maps.Polygon({
                paths: triangleCoords
            });

            var currPosition = new google.maps.LatLng(-70.2553711, 27.4327275)
            const inside = google.maps.geometry.poly.containsLocation(
                currPosition,
                bermudaTriangle
            ) ? true : false;
            console.log('Position', inside);
        }
        window.initMap = initMap;
    </script>
    {{-- <script>
        function initAutocomplete() {
            const input = document.getElementById("pac-input");
            const searchBox = new google.maps.places.SearchBox(input);
        }
        window.initAutocomplete = initAutocomplete;
    </script> --}}
</body>

</html>
