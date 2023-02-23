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
    <!-- Css -->
    <link rel="stylesheet" href="{{ asset('css/admin/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/root.css') }}">
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" defer></script>

    <!-- CKE Editor -->
    <script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>

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
        /* position: fixed; */
        width: 100%;
        height: auto;
        z-index: 9;
        background: #262626 !important;
        padding-top: 20px;
        padding-bottom: 20px;
    }


    header {
        position: relative;
        /* height: 120px; */
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
        margin-top: 40px;
        padding-left: 60px;
        padding-right: 60px;
    }

    header .container-fluid {
        margin-top: 0px !important;
    }

    @media screen and (max-width: 500px) {
        .header {
            padding: 0 !important;
            position: fixed;
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

        .container-fluid {
            padding-left: 15px;
            padding-right: 15px;
        }

        form {
            display: flex;
            justify-content: center;
            margin-bottom: 10px !important;
        }

        .h5-luxe {
            font-size: 25px !important;
        }
    }

    .nav>li>a:hover,
    .nav>li>a:focus,
    .dropdown-menu a:hover,
    .dropdown-menu a:focus {
        background-color: #262626 !important;
        color: #fff !important;
    }

    .update-event {
        padding-left: 0px !important;
    }

    .btn-logout {
        padding: 0px;
        margin: 0px;
        background: none;
        border: none;
        color: #262626;
    }

    .btn-logout:hover {
        color: #fff;
    }

    .dropdown-menu {
        background: #262626;
    }
</style>

<body>
    <div id="app">
        <header>
            <div class="header">
                <div class="container-fluid">
                    <div class="row m-0">
                        <div
                            class="col-3 col-md-3 align-items-center d-flex d-lg-none d-xl-none d-md-none justify-content-center justify-content-md-end order-12 mr-0 pr-0">
                            <button class="toggleSidebar btn text-white bg-transparent p-0 m-0">
                                <img src="/images/index-page/hamburger-menu-icon.svg" width="40px" height="40px"
                                    alt="">
                            </button>
                        </div>
                        <div
                            class="col-9 col-md-6 col-lg-2 text-center text-md-left text-lg-left text-xl-left ml-0 pl-0 py-2 py-md-0 py-lg-0">
                            <a href="{{ url('/home') }}"><img src="/images/logo.png" alt="" height="74px"></a>
                        </div>
                        <div
                            class="col-6 col-md-6 col-lg-10 mr-0 pr-0 d-none d-md-flex d-lg-flex d-xl-flex justify-content-end">
                            <div class="contact-details">
                                <div class="right-contactsd">
                                    {{-- <a href="#"><img src="/images/admin/flash-icon.svg" alt=""></a>
                                    <a href="#"><img src="/images/admin/notification-icon.svg" alt=""></a>
                                    <a href="#"><img src="/images/feedback-icon.svg" alt=""></a> --}}
                                </div>
                            </div>

                            <div class="dropdown-profile">
                                <ul class="navbar__dropdown d-flex justify-content-center align-items-center">
                                    <li class="nav-item dropdown">
                                        <a class="d-flex align-items-center nav-link dropdown-toggle m-0 p-0"
                                            href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <img id="user-logo-dropdown" src="{{ auth()->user()->avatar }}">
                                            <span id="user-name-dropdown">Me</span>
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <a class="dropdown-item" href="#">
                                                <div class="">
                                                    <form action="{{ route('logout') }}" method="post" class="m-0">
                                                        @csrf
                                                        <button class="btn btn-logout"><span
                                                                class="item-box">Logout</span></button>
                                                    </form>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-navigation">
                <div class="container-fluid">
                    <div class="row m-0 d-none d-md-flex d-lg-flex d-xl-flex">
                        <div class="col-3 col-sm-7 col-md-12 col-lg-12 p-0">
                            <nav class="row">
                                <a href="{{ route('admin.index') }}"
                                    class="{{ isset($active) && $active == 'Dashboard' ? 'active selected' : '' }}">Dashboard</a>
                                <a href="{{ route('admin.broker-sumo.index') }}"
                                    class="{{ isset($active) && $active == 'Brokersumo' ? 'active selected' : '' }}">Brokersumo</a>
                                <a href="{{ route('admin.forms.index') }}"
                                    class="{{ isset($active) && $active == 'Forms' ? 'active selected' : '' }}">Forms</a>
                                <a href="{{ route('admin.form-submit.index') }}"
                                    class="{{ isset($active) && $active == 'Form Submissions' ? 'active selected' : '' }}">Form
                                    Submissions</a>
                                <a href="{{ route('admin.w-9.index') }}"
                                    class="{{ isset($active) && $active == 'W-9 Submissions' ? 'active selected' : '' }}">W-9
                                    Submissions</a>
                                <a href="{{ route('admin.diy-categories.index') }}"
                                    class="{{ isset($active) && $active == 'Diy' ? 'active selected' : '' }}">DIY</a>
                                <a href="{{ route('admin.marketing-requests.index') }}"
                                    class="{{ isset($active) && $active == 'Marketing_requests' ? 'active selected' : '' }}">Marketing
                                    Requests</a>
                                <a href="{{ route('admin.canva.marketing.index_admin') }}"
                                    class="{{ isset($active) && $active == 'Marketing_canva' ? 'active selected' : '' }}">Canva</a>
                                <a class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                    role="button" aria-haspopup="true" aria-expanded="false"
                                    style="color:#a8a8a8 !important;cursor: pointer;">
                                    Store
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a href="{{ route('admin.orders.index') }}"
                                        class="{{ isset($active) }}">Orders</a>
                                    <a href="{{ route('admin.orders.marketing.menu.index') }}"
                                        class="{{ isset($active) }}">Marketing Orders</a>
                                    <a href="{{ route('admin.luxe_store.index') }}"
                                        class="{{ isset($active) && $active == 'Categories' ? 'active selected' : '' }}">Categories</a>
                                    <a href="{{ route('admin.luxe_store.products.index') }}"
                                        class="{{ isset($active) && $active == 'Products' ? 'active selected' : '' }}">Products</a>
                                    <a href="{{ route('admin.luxe_store.coupons.index') }}"
                                        class="{{ isset($active) && $active == 'Coupons' ? 'active selected' : '' }}">Coupons</a>
                                </div>
                                <a href="{{ route('admin.users.index') }}"
                                    class="{{ isset($active) && $active == 'Users' ? 'active selected' : '' }}">Users</a>
                                <a href="{{ route('admin.videos.index') }}"
                                    class="{{ isset($active) && $active == 'Videos' ? 'active selected' : '' }}">Videos</a>
                                <a href="{{ route('admin.email_blasts.index') }}"
                                    class="{{ isset($active) && $active == 'Email-blasts' ? 'active selected' : '' }}">Email
                                    Blasts</a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div>
            <div class="sidebar d-none">
                <div class="sidebar-main">
                    <div class="row p-0 m-0 justify-content-center">
                        <div class="sidebar-logo-details row p-0 d-flex d-lg-none d-xl-none m-0 my-3">
                            <div class="w-100 d-flex align-items-center justify-content-between d-md-none">
                                <img src="/images/logo.png" height="50px" alt="">
                                <button class="toggleSidebar btn text-white bg-transparent p-0 m-0">
                                    <img src="/images/index-page/close-icon.svg" width="40px" height="40px"
                                        alt="">
                                </button>
                            </div>
                            <div class="w-100 sidebar-logo-details-details d-flex align-items-center">
                                <div class="row m-0 w-100 d-flex justify-content-between align-items-center">
                                    <a href="#"><img src="/images/admin/flash-icon.svg" alt=""></a>
                                    <a href="#"><img src="/images/admin/notification-icon.svg"
                                            alt=""></a>
                                    <a href="#"><img src="/images/feedback-icon.svg" alt=""></a>
                                    <div class="dropdown-profile">
                                        <ul class="navbar__dropdown d-flex justify-content-center align-items-center">
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle m-0 p-0" href="#"
                                                    id="navbarDropdownMenuLink" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <img id="user-logo-dropdown" src="{{ auth()->user()->avatar }}">
                                                </a>

                                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                                    <a class="dropdown-item" href="#">
                                                        <div class="">
                                                            <form action="{{ route('logout') }}" method="post"
                                                                class="p-0 m-0">
                                                                @csrf
                                                                <button class="btn btn-logout"><span
                                                                        class="item-box">Logout</span></button>
                                                            </form>
                                                        </div>
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar__item sidebar-navigation">
                            <ul>
                                <li class="{{ isset($active) && $active == 'Dashboard' ? 'active selected' : '' }}">
                                    <a href="{{ route('admin.index') }}">Dashboard</a>
                                </li>
                                <li class="{{ isset($active) && $active == 'Forms' ? 'active selected' : '' }}">
                                    <a href="{{ route('admin.forms.index') }}">Forms</a>
                                </li>
                                <li class="{{ isset($active) && $active == 'Forms' ? 'active selected' : '' }}">
                                    <a href="{{ route('admin.form-submit.index') }}">Form Submissions</a>
                                </li>
                                <li
                                    class="{{ isset($active) && $active == 'Marketing_requests' ? 'active selected' : '' }}">
                                    <a href="{{ route('admin.marketing-requests.index') }}">Marketing
                                        Requests</a>
                                </li>
                                <li
                                    class="{{ isset($active) && $active == 'Marketing_canva' ? 'active selected' : '' }}">
                                    <a href="{{ route('admin.canva.marketing.index_admin') }}">Canva</a>
                                </li>
                                <li class="{{ isset($active) && $active == 'Orders' ? 'active selected' : '' }}">
                                    <a href="{{ route('admin.orders.index') }}">Orders</a>
                                </li>
                                <li class="{{ isset($active) && $active == 'Categories' ? 'active selected' : '' }}">
                                    <a href="{{ route('admin.luxe_store.index') }}">Categories</a>
                                </li>
                                <li class="{{ isset($active) && $active == 'Products' ? 'active selected' : '' }}">
                                    <a href="{{ route('admin.luxe_store.products.index') }}">Products</a>
                                </li>
                                <li class="{{ isset($active) && $active == 'Coupons' ? 'active selected' : '' }}">
                                    <a href="{{ route('admin.luxe_store.coupons.index') }}">Coupons</a>
                                </li>
                                <li class="{{ isset($active) && $active == 'Users' ? 'active selected' : '' }}">
                                    <a href="{{ route('admin.users.index') }}">Users</a>
                                </li>
                                <li class="{{ isset($active) && $active == 'Videos' ? 'active selected' : '' }}">
                                    <a href="{{ route('admin.videos.index') }}">Videos</a>
                                </li>
                                <li
                                    class="{{ isset($active) && $active == 'Email-blasts' ? 'active selected' : '' }}">
                                    <a href="{{ route('admin.email_blasts.index') }}">Email Blasts</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <main class="">
            @yield('content')
        </main>
    </div>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            @php
                toastr()->error($error);
            @endphp
        @endforeach
    @endif

</body>
@yield('js')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script type="text/javascript">
    toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };
</script>
<script>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.error("{{ $error }}");
        @endforeach
    @endif
    @if (Session::has('message'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.success("{{ session('message') }}");
    @endif

    @if (Session::has('error'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.error("{{ session('error') }}");
    @endif

    @if (Session::has('info'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.info("{{ session('info') }}");
    @endif

    @if (Session::has('warning'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.warning("{{ session('warning') }}");
    @endif
</script>
<script>
    $('.toggleSidebar').click(function() {
        $('.sidebar').toggleClass('active');
    })
</script>

</html>
