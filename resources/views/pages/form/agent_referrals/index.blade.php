<!DOCTYPE html>
<html lang="en">

<head>
    <title>Forms - MyLuxeHub</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
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

<body>

    <div class="container-fluid d-flex align-items-center" style="height: 100vh">
        <div class="row justify-content-center w-100">
            <div class="col-md-12">
                <div class="">
                    <div class="card-title text-center">
                        <h1>New Agents & Referrals - Select Form</h1>
                    </div>
                    <div class="">
                        <div class="row m-0 p-0">
                            <div class="col-lg-3">
                                <div class="box">
                                    <a href="{{route('general.email.index',['folder'=>'agent_referrals','form'=>'agent-form'])}}"
                                        class="btn d-flex align-items-center justify-content-center"
                                        style="height: 70px">Agent Form</a>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="box">
                                    <a href="{{route('general.email.index',['folder'=>'agent_referrals','form'=>'refer-an-agent'])}}"
                                        class="btn d-flex align-items-center justify-content-center"
                                        style="height: 70px">Refer An Agent</a>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="box">
                                    <a href="{{route('general.email.index',['folder'=>'agent_referrals','form'=>'flex-agent-form'])}}"
                                        class="btn d-flex align-items-center justify-content-center"
                                        style="height: 70px">Flex Agent Form</a>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="box">
                                    <a href="{{url('user/w-9')}}"
                                        class="btn d-flex align-items-center justify-content-center"
                                        style="height: 70px">W-9 Form</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>