<html>
<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>LUXE - PROPERTIES LLC</title>

</head>
<body>
<div class="container h-100">
    <div class="row justify-content-center h-100">
        <div class="col-md-8 align-self-center text-center">
            <img src="{{asset('500.jpg')}}" alt=""
                 class="my-4 w-100">
        </div>
    </div>
</div>
</body>
</html>
