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
    @font-face {
        font-family: "gothicbold";
        src: local("gothicbold"),
        url("/fonts/index-page/gothicbold.ttf") format("truetype");
    }
    @font-face {
        font-family: "gothicregular";
        src: local("gothicregular"),
        url("/fonts/index-page/gothicregular.ttf") format("truetype");
    }
    .box {
        background-color: red;
        margin: 5px;
        color: #262626;
        background-color: #F7F7F7;
        border-radius: 30px;
    }
    .box a {
        color: #262626 !important;
        font-family: 'gothicregular';
    }
    .card-title h1 {
        font-family: 'gothicbold';
    }
</style>
<body>

<div class="container-fluid d-flex align-items-center" style="height: 100vh">
    <div class="row justify-content-center w-100">
        <div class="col-md-8">
            <div class="">
                <div class="card-title text-center">
                    <h1>Select Room</h1>
                </div>
                <div class="">
                    <div class="row">
                        @foreach($rooms as $room)
                            <div class="col-lg-4">
                                <div class="box">
                                    <a href="{{route('bookings.index',$room->id)}}"
                                       class="btn w-100 d-flex align-items-center justify-content-center"
                                       style="height: 70px">{{$room->name}}</a>
                                </div>
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
