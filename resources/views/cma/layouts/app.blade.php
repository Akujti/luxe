<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="/images/favicon.png">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>LUXE - PROPERTIES LLC</title>
    <!-- Fontawesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- Tidio live chat script -->

    <script src="//code.tidio.co/frrxptsvozhi8x0bfw3gg5xbrc3leqdo.js" async></script>
    <!-- Scripts -->
    <link rel="stylesheet" href="{{ asset('css/root.css') }}">
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index-page/style.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">
    {{--    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">--}}
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    {{-- @toastr_css --}}
    @yield('css')
    <script>
        (function (d) {
            var s = d.createElement('script')
            s.setAttribute('data-position', 2)
            s.setAttribute('data-color', '#262626')
            s.setAttribute('data-account', 'wYGtJlc9Nk')
            s.setAttribute('src', 'https://cdn.userway.org/widget.js');
            (d.body || d.head).appendChild(s)
        })(document)
    </script>
    <noscript>Please ensure Javascript is enabled for purposes of <a href="https://userway.org">website
            accessibility</a></noscript>
</head>
<style>
    @font-face {
        font-family: "gothicbold";
        src: local("gothicbold"),
        url("{{ asset('fonts/index-page/gothicbold.ttf') }}") format("truetype");
    }

    @font-face {
        font-family: "gothicregular";
        src: local("gothicregular"),
        url("{{ asset('fonts/index-page/gothicregular.ttf') }}") format("truetype");
    }

    footer {
        position: fixed;
        bottom: 0;
        border-bottom: 10px solid #FFCF40;
        height: 5px;
        width: 100%;
    }

    .header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 114px;
        z-index: 9;
        background: #262626 !important;
        padding-top: 20px;
        padding-bottom: 20px;
        padding-right: 90px;
        padding-left: 75px;
    }

    header {
        position: relative;
        height: 114px;
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
        background: #262626;
        color: #fff;
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

    .container-fluid {
        margin-top: 60px;
        padding-left: 60px;
        padding-right: 60px;
    }

    @media screen and (max-width: 500px) {

        body .uwy.userway_p2 .uai,
        body .uwy.userway_p3 .uai {
            top: 92% !important;
            left: 55px !important;
        }

        .header {
            padding: 0 !important;
            position: fixed;
            height: 94px;
        }

        header {
            height: 94px;
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

        form {
            display: flex;
            justify-content: center;
            margin-bottom: 10px !important;
        }

        .container-fluid {
            padding-left: 15px !important;
            padding-right: 15px !important;
        }

        #search-input {
            width: 100% !important;
        }

        .search-box-mobile form {
            padding-left: 0px !important;
        }
    }

    #search-input {
        background: transparent;
        padding: 7px;
        border: none;
        border-bottom: 1px solid #fff;
        color: #fff;
    }

    #search-input::placeholder {
        color: #F3F3F3;
    }

    #search-input:focus {
        outline: none;
    }

    .search-box-mobile input {
        width: 80%;
    }

    .active_submenu:focus {
        outline: none;
    }

    .h5-luxe {
        font-family: "gothicbold";
        font-size: 40px;
    }

    .grid {
        display: grid;
        justify-content: center;
        gap: 15px;
    }

    .grid-left {
        justify-content: start;
    }

    .grid .box-item {
        padding-left: 15px;
        padding-right: 15px;
        border-radius: 10px;
    }

    .grid .box-item-padding {
        padding-top: 60px;
    }

    .grid .box-item .title {
        font-size: 20px;
    }

    .grid .box-item p,
    .grid .box-item a {
        text-align: center;
        font-size: 20px;
        font-family: 'gothicregular';
    }

    .grid .box-item-center {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .grid .box-item-end {
        display: flex;
        justify-content: center;
        align-items: flex-end;
    }

    @media (min-width: 1280px) {
        .grid {
            gap: 14px;
        }

        .grid-layout {
            grid-template-columns: 188px 188px 188px 188px;
        }

        .grid-layout-three {
            grid-template-columns: 190px 190px 190px;
        }

        .grid-layout-two {
            grid-template-columns: 190px 190px;
        }

        .grid .box-item {
            height: 190px;
        }

        .grid .box-item .title {
            font-size: 18px;
        }

        .grid .box-item p,
        .grid .box-item a,
        .grid .box-item .title {
            font-size: 18px;
        }

        .grid .box-item-padding {
            padding-top: 30px;
        }
    }

    @media (min-width: 1538px) {
        .grid-layout {
            grid-template-columns: 250px 250px 250px 250px;
        }

        .grid-layout-three {
            grid-template-columns: 250px 250px 250px;
        }

        .grid-layout-two {
            grid-template-columns: 250px 250px;
        }

        .grid .box-item {
            height: 250px;
        }

        .grid .box-item-padding {
            padding-top: 60px;
        }
    }


    @media (max-width: 600px) {

        .grid-layout,
        .grid-layout-three {
            grid-template-columns: 100%;
        }

        .grid .box-item-padding {
            padding-top: 20px;
            padding-bottom: 20px;
        }
    }

    .container-fluid {
        margin-top: 60px;
        padding-left: 60px;
        padding-right: 60px;
    }

    .box-item a,
    .box-item a:hover {
        color: #262626;
        text-decoration: none;
    }

    a:focus {
        outline: none;
    }

</style>

<body>
<div id="app">
    <div class="col p-0 m-0">
        <main class="">
            @yield('content')
        </main>
    </div>
</div>
</body>
@yield('js')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="{{ asset('js/axios.js') }}"></script>
</html>
