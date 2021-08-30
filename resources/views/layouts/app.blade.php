<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">

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
        min-height: 100px;
        border-bottom: 5px solid #FFCF40;
        background: #262626;
    }

    .header-call a {
        display: block;
        line-height: 30px;
        color: #fff;
        font-size: 13px;
    }

    .header-call a img {
        margin-right: 5px;
        max-height: 20px;
    }

    .btn-luxe {
        background: #FFCF40;
        color: black;
    }
</style>

<body>
    <div id="app">
        <header>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <div class="header-call">
                            <a href="#"><img src="https://designsbyluxe.com/wp-content/themes/Luxe/img/location.png"
                                    alt=""> 55 Merrick Way
                                #402 Coral Gables, FL 33134</a>
                            <a href="http://www.luxeknows.com/"><img
                                    src="https://designsbyluxe.com/wp-content/themes/Luxe/img/tv.png" alt="">
                                http://www.luxeknows.com/</a>
                            <a class="btm-phn" href="tel:(305) 809-7650"><img
                                    src="https://designsbyluxe.com/wp-content/themes/Luxe/img/phone.png" alt="">
                                (305) 809-7650</a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 text-center">
                        <img src="/images/logo.png" alt="" height="80px">
                    </div>
                    <div class="col-12 col-lg-4"></div>
                </div>
            </div>
        </header>

        <main class="py-4">
            @yield('content')
        </main>

        <footer></footer>
    </div>
    @if ($errors->any())
    @foreach ($errors->all() as $error)
    @php
    toastr()->error($error);
    @endphp
    @endforeach
    @endif
    {{-- @jquery
    @toastr_js
    @toastr_render --}}

</body>
@yield('js')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script type="text/javascript">
    toastr.options = {"closeButton":false,"debug":false,"newestOnTop":false,"progressBar":false,"positionClass":"toast-top-right","preventDuplicates":false,"onclick":null,"showDuration":"300","hideDuration":"1000","timeOut":"5000","extendedTimeOut":"1000","showEasing":"swing","hideEasing":"linear","showMethod":"fadeIn","hideMethod":"fadeOut"};
</script>
<script>
    @if(Session::has('message'))
toastr.options =
{
"closeButton" : true,
"progressBar" : true
}
toastr.success("{{ session('message') }}");
@endif

@if(Session::has('error'))
toastr.options =
{
"closeButton" : true,
"progressBar" : true
}
toastr.error("{{ session('error') }}");
@endif

@if(Session::has('info'))
toastr.options =
{
"closeButton" : true,
"progressBar" : true
}
toastr.info("{{ session('info') }}");
@endif

@if(Session::has('warning'))
toastr.options =
{
"closeButton" : true,
"progressBar" : true
}
toastr.warning("{{ session('warning') }}");
@endif
</script>

</html>