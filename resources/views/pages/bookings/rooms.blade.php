<!DOCTYPE html>
<html lang="en">
<head>
    <title>Rooms</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<style>
    .btn-luxe {
        background: #FFCF40;
        color: black;
    }
</style>
<body style="background-color: gray">

<div class="container d-flex align-items-center" style="height: 100vh">
    <div class="row justify-content-center w-100">
        <div class="col-md-8">
            <div class="card bg-light">
                <div class="card-header text-center">
                    <h1>Select Room</h1>
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach($rooms as $room)
                            <div class="col-lg-4">
                                <a href="{{route('bookings.index',$room->id)}}"
                                   class="btn btn-luxe w-100 m-2 d-flex align-items-center justify-content-center"
                                   style="height: 70px">{{$room->name}}</a>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>

    </div>

</div>

</body>
</html>
