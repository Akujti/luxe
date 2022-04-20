<!DOCTYPE html>
<html lang="en">

<head>
    <title>Forms - MyLuxeHub</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <style>
            .box {
                background-color: red;
                margin: 5px;
                color: #262626;
                background-color: #F7F7F7;
                border-radius: 30px;
            }
            .box a{
                color: #262626 !important;
                font-family: 'gothicregular';
            }
            .card-title h1 {
                font-family: 'gothicbold';
            }
        </style>
</head>

<body>

    <div class="container d-flex align-items-center" style="height: 100vh">
        <div class="row justify-content-center w-100">
            <div class="col-md-8">
                <div class="">
                    <div class="card-title text-center">
                        <h1>Escrow - Select Form</h1>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col box">
                                <a href="{{route('general.email.index',['folder'=>'escrow','form'=>'request-store'])}}"
                                    class="btn w-100 d-flex align-items-center justify-content-center"
                                    style="height: 70px">Request Store - Rental Escrow Disbursement</a>
                            </div>
                            <div class="col box">
                                <a href="{{route('general.email.index',['folder'=>'escrow','form'=>'request-escrow-letter'])}}"
                                    class="btn w-100 d-flex align-items-center justify-content-center"
                                    style="height: 70px;">Request Escrow Letter</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>

</body>

</html>