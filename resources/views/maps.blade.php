<html>

<head>
    <title>Places Search Box</title>
</head>

<body>
    <input id="pac-input" class="controls" type="text" placeholder="Search Box" />

    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbvYCR-b_MzBtqFgpY_OJU5oCxrQWwrSI&callback=initAutocomplete&libraries=places&v=weekly"
        defer></script>
    <script>
        function initAutocomplete() {
            const input = document.getElementById("pac-input");
            const searchBox = new google.maps.places.SearchBox(input);
        }
        window.initAutocomplete = initAutocomplete;
    </script>
</body>

</html>
