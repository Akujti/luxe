<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>LUXE - PROPERTIES LLC</title>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    {{-- @toastr_css --}}
    @yield('css')
</head>
<style>
    footer {
        position: fixed;
        bottom: 0;
        border-bottom: 10px solid #FFCF40;
        height: 5px;
        width: 100%;
    }

    header {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: auto;
        z-index: 9;
        background: #262626 !important;
        padding-top: 20px;
        padding-bottom: 20px;
        padding-right: 90px;
        padding-left: 75px;
    }

    .header-call a {
        display: block;
        line-height: 30px;
        color: #fff;
        font-size: 20px;
        font-family: Montserrat;
    }

    .header-call a img {
        margin-right: 5px;
        max-height: 35px;
    }

    .btn-luxe {
        background: #FFCF40;
        color: black;
    }

    .contact-details {
        height: 100%;
    }

    .right-contactsd a:first-child {
        max-width: 330px;
    }

    .right-contactsd a {
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
        line-height: 25px;
        color: #FFFFFF;
        font-weight: normal;
        font-family: Montserrat;
        width: auto;
        margin-left: 40px;
    }

    .right-contactsd {
        display: flex;
        align-items: center;
        justify-content: flex-end;
        height: 100%;
    }

    .container {
        padding-top: 155px;
    }

    @media screen and (max-width: 500px) {
        header {
            padding: 0 !important;
        }

        .right-contactsd {
            display: block;
            justify-content: flex-start;
            align-items: baseline;
        }

        .right-contactsd a {
            justify-content: center;
            font-size: 14px;
            margin-top: 5px;
            margin-left: 0 !important;
        }

        .right-contactsd a svg {
            width: 30px !important;
            margin-right: 5px;
        }

        .container {
            padding-top: 20px;
        }

        header {
            position: relative;
        }

        form {
            display: flex;
            justify-content: center;
            margin-bottom: 10px !important;
        }


    }
</style>
<style>
    #regForm {
        background-color: #ffffff;
        margin: auto;
        font-family: Raleway;
        padding: 40px;
    }

    h1 {
        text-align: center;
    }

    /* input {
        margin-right: auto;
        padding: 10px;
        width: 100%;
        font-size: 17px;
        font-family: Raleway;
        border: 1px solid #aaaaaa;
    } */

    /* Mark input boxes that gets an error on validation: */
    input.invalid {
        background-color: #ffdddd;
    }

    /* Hide all steps by default: */
    .tab {
        display: none;
        min-height: 300px;
    }

    button {
        background-color: #04AA6D;
        color: #ffffff;
        border: none;
        padding: 10px 20px;
        font-size: 17px;
        font-family: Raleway;
        cursor: pointer;
    }

    button:hover {
        opacity: 0.8;
    }

    #prevBtn {
        background-color: #bbbbbb;
    }

    /* Make circles that indicate the steps of the form: */
    .step {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbbbbb;
        border: none;
        border-radius: 50%;
        display: inline-block;
        opacity: 0.5;
    }

    .step.active {
        opacity: 1;
    }

    /* Mark the steps that are finished and valid: */
    .step.finish {
        background-color: #FFCF40;
    }

    .wrapper h1 {
        font-weight: 400;
        letter-spacing: 2px;
        background: #FFCF40;
        padding: 10px;
        border-radius: 10px;
    }

    .shadow-box {
        width: 100%;
        display: flex;
        justify-content: space-between;
        border-radius: 10px;
        /* border: 1px solid black; */
        box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075);
        padding: 20px;
        margin-bottom: 20px;
    }

    label {
        margin: 0;
    }

    input[type="radio"],
    input[type="checkbox"] {
        width: 20px;
        height: 20px;
        accent-color: #FFCF40;
    }
</style>
<style>
    .ui-datepicker-week-end a {
        outline: 1px solid #FFCF40;
    }

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
        background-color: #ffcf406e;
    }

    .ui-datepicker-calendar tbody td a.ui-state-active {
        background-color: #FFCF40;
        color: white;
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

    .ui-datepicker-header a>span {
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

<body>
    <div id="app">
        <header>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-2 text-center">
                        <a href="https://myluxehub.com/"><img src="/images/logo.png" alt="" height="80px"></a>
                    </div>
                    <div class="col-12 col-md-9">
                        <div class="contact-details">
                            <div class="right-contactsd">
                                <a href="https://goo.gl/maps/UxezmFmdTJE8SmJL6">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="43.062" height="43.062"
                                        viewBox="0 0 43.062 43.062">
                                        <g id="vuesax_bold_location" data-name="vuesax/bold/location"
                                            transform="translate(-428 -188)">
                                            <path id="Vector"
                                                d="M31.4,12.021C29.515,3.732,22.284,0,15.933,0h-.018C9.581,0,2.332,3.714.449,12c-2.1,9.258,3.571,17.1,8.7,22.033a9.728,9.728,0,0,0,13.547,0C27.829,29.1,33.5,21.28,31.4,12.021ZM15.933,21.011a5.652,5.652,0,1,1,5.652-5.652A5.651,5.651,0,0,1,15.933,21.011Z"
                                                transform="translate(433.598 191.14)" fill="#ffcf40"></path>
                                            <path id="Vector-2" data-name="Vector" d="M0,0H43.062V43.062H0Z"
                                                transform="translate(428 188)" fill="none" opacity="0"></path>
                                            <path id="Vector-3" data-name="Vector" d="M0,0H43.062V43.062H0Z"
                                                transform="translate(471.062 231.062) rotate(180)" fill="none"
                                                opacity="0"></path>
                                        </g>
                                    </svg>
                                    <span>55 Merrick Way #402<br>Coral Gables, FL 33134</span></a>
                                <a href="http://www.luxeknows.com/">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="43.062" height="43.062"
                                        viewBox="0 0 43.062 43.062">
                                        <g id="vuesax_bold_global" data-name="vuesax/bold/global"
                                            transform="translate(-172 -252)">
                                            <path id="Vector"
                                                d="M8.236,8.2c-.054,0-.126.036-.179.036A17.953,17.953,0,0,1,0,.179C0,.126.036.054.036,0A57.223,57.223,0,0,0,6.728,1.507,60.193,60.193,0,0,0,8.236,8.2Z"
                                                transform="translate(177.49 281.318)" fill="#ffcf40"></path>
                                            <path id="Vector-2" data-name="Vector"
                                                d="M8.343.2A18.11,18.11,0,0,1,0,8.4a54.837,54.837,0,0,0,1.633-6.89A56.125,56.125,0,0,0,8.307,0C8.289.072,8.343.144,8.343.2Z"
                                                transform="translate(201.228 281.318)" fill="#ffcf40"></path>
                                            <path id="Vector-3" data-name="Vector"
                                                d="M8.487,8.487A56.776,56.776,0,0,0,1.633,6.854,50.085,50.085,0,0,0,0,0,18.035,18.035,0,0,1,8.487,8.487Z"
                                                transform="translate(201.228 257.347)" fill="#ffcf40"></path>
                                            <path id="Vector-4" data-name="Vector"
                                                d="M8.379.054A56.067,56.067,0,0,0,6.89,6.728,51.8,51.8,0,0,0,0,8.343,18.11,18.11,0,0,1,8.2,0C8.254,0,8.325.054,8.379.054Z"
                                                transform="translate(177.347 257.49)" fill="#ffcf40"></path>
                                            <path id="Vector-5" data-name="Vector"
                                                d="M12.524,8.236A56.211,56.211,0,0,0,0,8.236,50.909,50.909,0,0,1,1.83.951,2.934,2.934,0,0,0,1.866.556,18.67,18.67,0,0,1,6.262,0,18.52,18.52,0,0,1,10.64.556a2.979,2.979,0,0,0,.054.395A51.516,51.516,0,0,1,12.524,8.236Z"
                                                transform="translate(187.269 255.588)" fill="#ffcf40"></path>
                                            <path id="Vector-6" data-name="Vector"
                                                d="M8.236,12.524a50.315,50.315,0,0,1-7.285-1.83,2.934,2.934,0,0,0-.395-.036A18.67,18.67,0,0,1,0,6.262,18.52,18.52,0,0,1,.556,1.884,2.979,2.979,0,0,0,.951,1.83,53.415,53.415,0,0,1,8.236,0,58.446,58.446,0,0,0,8.236,12.524Z"
                                                transform="translate(175.588 267.269)" fill="#ffcf40"></path>
                                            <path id="Vector-7" data-name="Vector"
                                                d="M8.236,6.262a18.67,18.67,0,0,1-.556,4.4,2.934,2.934,0,0,0-.395.036A54.084,54.084,0,0,1,0,12.524,56.211,56.211,0,0,0,0,0,50.908,50.908,0,0,1,7.285,1.83a1.494,1.494,0,0,0,.395.054A18.64,18.64,0,0,1,8.236,6.262Z"
                                                transform="translate(203.238 267.269)" fill="#ffcf40"></path>
                                            <path id="Vector-8" data-name="Vector"
                                                d="M12.524,0a50.315,50.315,0,0,1-1.83,7.285,2.979,2.979,0,0,0-.054.395,18.52,18.52,0,0,1-4.378.556,18.67,18.67,0,0,1-4.4-.556,2.934,2.934,0,0,0-.036-.395A53.415,53.415,0,0,1,0,0,56.142,56.142,0,0,0,6.262.395,55.873,55.873,0,0,0,12.524,0Z"
                                                transform="translate(187.269 283.238)" fill="#ffcf40"></path>
                                            <path id="Vector-9" data-name="Vector"
                                                d="M13.929,13.929a53.9,53.9,0,0,1-13.5,0,53.9,53.9,0,0,1,0-13.5,53.9,53.9,0,0,1,13.5,0A53.9,53.9,0,0,1,13.929,13.929Z"
                                                transform="translate(186.354 266.354)" fill="#ffcf40"></path>
                                            <path id="Vector-10" data-name="Vector" d="M0,0H43.062V43.062H0Z"
                                                transform="translate(172 252)" fill="none" opacity="0"></path>
                                            <path id="Vector-11" data-name="Vector" d="M0,0H43.062V43.062H0Z"
                                                transform="translate(215.062 295.062) rotate(180)" fill="none"
                                                opacity="0"></path>
                                        </g>
                                    </svg>
                                    <span>http://www.luxeknows.com/</span></a>
                                <a class="btm-phn" href="tel:(305) 809-7650">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="43.062" height="43.062"
                                        viewBox="0 0 43.062 43.062">
                                        <g id="vuesax_bold_call" data-name="vuesax/bold/call"
                                            transform="translate(-108 -188)">
                                            <g id="call" transform="translate(108 188)">
                                                <path id="Vector"
                                                    d="M16.238,23.235l-3.319,3.319a1.8,1.8,0,0,1-2.53.018c-.2-.2-.395-.377-.592-.574a50.981,50.981,0,0,1-5.006-5.867,31.987,31.987,0,0,1-3.517-6.118A15.4,15.4,0,0,1,0,8.146,9.282,9.282,0,0,1,.646,4.683a8.258,8.258,0,0,1,2.063-3A5.257,5.257,0,0,1,6.441,0,3.372,3.372,0,0,1,7.895.323a2.925,2.925,0,0,1,1.2,1l4.163,5.867a6.14,6.14,0,0,1,.718,1.256,2.836,2.836,0,0,1,.251,1.094,2.436,2.436,0,0,1-.377,1.274,6.1,6.1,0,0,1-1,1.274l-1.364,1.417a.96.96,0,0,0-.287.718,1.629,1.629,0,0,0,.054.413c.054.144.108.251.144.359a14.889,14.889,0,0,0,1.669,2.3c.807.933,1.669,1.884,2.6,2.835.179.179.377.359.556.538A1.8,1.8,0,0,1,16.238,23.235Z"
                                                    transform="translate(3.588 3.588)" fill="#ffcf40"></path>
                                                <path id="Vector-2" data-name="Vector"
                                                    d="M22.195,7.7a4.557,4.557,0,0,1-.269,1.525,4.382,4.382,0,0,1-.179.431,7.4,7.4,0,0,1-1.22,1.83A8.089,8.089,0,0,1,17.584,13.6c-.018,0-.036.018-.054.018a9.064,9.064,0,0,1-3.445.664,14.952,14.952,0,0,1-5.849-1.31A31.514,31.514,0,0,1,2.063,9.42C1.364,8.9.664,8.379,0,7.823L5.867,1.956a10.081,10.081,0,0,0,1.328.861c.09.036.2.09.323.144a1.239,1.239,0,0,0,.449.072A.987.987,0,0,0,8.7,2.727l1.364-1.346a5.505,5.505,0,0,1,1.292-1A2.389,2.389,0,0,1,12.631,0a2.863,2.863,0,0,1,1.094.233,6.939,6.939,0,0,1,1.256.7l5.939,4.216A2.722,2.722,0,0,1,21.908,6.3,3.681,3.681,0,0,1,22.195,7.7Z"
                                                    transform="translate(17.225 25.191)" fill="#ffcf40"></path>
                                                <path id="Vector-3" data-name="Vector" d="M0,0H43.062V43.062H0Z"
                                                    transform="translate(43.062 43.062) rotate(180)" fill="none"
                                                    opacity="0"></path>
                                            </g>
                                        </g>
                                    </svg>
                                    <span>(305) 809-7650</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-1 align-self-center">
                        @auth
                        <form action="{{route('logout')}}" method="post" class="">
                            @csrf
                            <input type="submit" class="btn btn-luxe" value="Log Out">
                        </form>
                        @endauth
                    </div>
                </div>
            </div>
        </header>
        <main class="">
            <div class="container wrapper">
                <h1 class="position-relative">Appointments
                    @if (Auth::user() && Auth::user()->isAdmin)
                    <a href="{{route('appointment-addresses.index')}}" class="btn btn-dark position-absolute text-white"
                        style="right: 15px;top:15px">Addresses</a>
                    @endif
                </h1>
                <form id="regForm" action="{{route('appointments.store')}}" method="POST" class="d-block">
                    @csrf
                    <input type="hidden" class="form-control" name="phone">
                    <div class="tab">
                        <h4 class="my-4">1. Choose an address</h4>
                        <hr>
                        <div class="w-100">
                            @foreach ($addresses as $item)
                            <div class="shadow-box">
                                <label for="html">{{$item->title}}</label>
                                <input type="radio" id="html" name="appointment_address" value="{{$item->id}}">
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab">
                        <h4 class="my-4">2. Date & Time</h4>
                        <hr>
                        <div class="form-group">
                            <label for="">Select Date</label>
                            {{-- <input type="date" class="form-control date" name="date" required> --}}
                            <input type="text" id="datepicker" name="date" class="form-control date" autocomplete="off"
                                required>
                            <i>Available days are Saturday and Sunday</i>
                        </div>
                        <label for="html">Select Time Slot</label>
                        <div class="form-group time-group">
                        </div>
                    </div>
                    <div class="tab">3. Your Information</h4>
                        <hr>
                        <div class="form-group">
                            <label for="">Your Name</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="">Phone</label>
                            <input type="text" class="form-control" name="phone" required>
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="">Address</label>
                            <input type="text" class="form-control" name="address">
                        </div>
                        <div class="row">
                            <div class="form-group col-4">
                                <label for="">City</label>
                                <input type="text" class="form-control" name="city">
                            </div>
                            <div class="form-group col-4">
                                <label for="">State</label>
                                <input type="text" class="form-control" name="state">
                            </div>
                            <div class="form-group col-4">
                                <label for="">Zip Code</label>
                                <input type="text" class="form-control" name="zip">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Comments</label>
                            <input type="text" class="form-control" name="comments">
                        </div>
                    </div>
                    <div style="overflow:auto;">
                        <div style="float:right;">
                            <button type="button" id="prevBtn" class="btn" onclick="nextPrev(-1)">Previous</button>
                            <button type="button" id="nextBtn" class="btn btn-luxe" onclick="nextPrev(1)">Next</button>
                        </div>
                    </div>
                    <!-- Circles which indicates the steps of the form: -->
                    <div style="text-align:center;margin-top:40px;">
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                    </div>
                </form>
            </div>
        </main>
    </div>
</body>
<script>
    $(function () {
        $("#datepicker").datepicker({
            duration: "fast",
            beforeShowDay: function(day) {
            var day = day.getDay();
            if (day == 1 || day == 2 || day == 3 || day == 4 || day == 5) {
                return [false]
            } else {
                return [true]
            }
            }
        });
    });
</script>
<script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Book";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "" && y[i].hasAttribute('required')) {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
    if ($('input[type=radio]:checked').length == 0) {
        valid = false;
    }
  }
  if(currentTab == 1){
      console.log($('input[name=time_slot]:checked'));
      if ($('input[name=time_slot]:checked').length == 0) {
        valid = false;
    }
  }
  
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
} 
</script>

<script>
    $(document).ready(()=>{
        const validate = dateString => {
            var date = new Date();
            date.setDate(date.getDate() + 90);
            selected_date = (new Date(dateString))
            console.log(selected_date<date);
            const day = (new Date(dateString)).getDay();
            if (day==1 || day==2 || day==3 || day==4 || day==5 || selected_date>=date) {
                return false;
            }
            return true;
        }
        
        // Sets the value to '' in case of an invalid date
        document.querySelector('.date').onchange = evt => {
            $('.time-group').empty()
            if (!validate(evt.target.value)) {
                evt.target.value = '';                
            }
            else{
                $.ajax({
                    type:'GET',
                    url:'/appointment-timeslots/all?date='+evt.target.value,
                    data:'_token = <?php echo csrf_token() ?>',
                    success:function(data) {
                        data = data.time_slots
                        data.forEach(element => {
                            $('.time-group').append('<div class="shadow-box"> <label for="html">'+element.title+'</label><input type="radio" name="time_slot" value="'+element.id+'"></div>')
                        });
                    }
                });
            }
        }
    })
</script>

</html>