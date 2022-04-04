<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>LUXE - PROPERTIES LLC</title>


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="{{ asset('css/index-page/style.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
</head>
<style>
    .section-header {
        background-image: url("{{ asset('images/index-page/section_background.png') }}");
    }

    .section-what-different {
        background-image: url("{{ asset('images/index-page/what_makes_us_different_background.png') }}");
    }

    @font-face {
        font-family: "gothicbold";
        src: local("gothicbold"),
        url("{{ asset('fonts/index-page/gothicbold.ttf')}}") format("truetype");
    }

    @font-face {
        font-family: "gothicregular";
        src: local("gothicregular"),
        url("{{ asset('fonts/index-page/gothicregular.ttf')}}") format("truetype");
    }

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
        /* background: #262626 !important; */
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

    .right-contactsd a {
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
        line-height: 25px;
        color: #FFFFFF;
        font-family: 'gothicregular';
        width: auto;
        margin-left: 50px;
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

<body>
    <div id="app">
        <section class="section-header">
            <header>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-lg-2 text-center">
                            <a href="https://myluxehub.com/"><img src="/images/index-page/logo-1.png" alt="" height="74px"></a>
                        </div>
                        <div class="col-12 col-md-12 col-lg-8">
                            <div class="contact-details d-flex justify-content-center justify-content-lg-end">
                                <div class="right-contactsd">
                                    <a href="#">
                                        <span>Approach</span>
                                    </a>
                                    <a href="#">
                                        <span>Marketing</span>
                                    </a>
                                    <a href="#">
                                        <span>Team</span>
                                    </a>
                                    <a href="#">
                                        <span>Partners</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-2 align-self-center text-center">
                            @auth
                            <form action="{{route('logout')}}" method="post" class="">
                                @csrf
                                <button class="btn button px-4 py-2">Log out</button>
                            </form>

                            @endauth
                            @guest
                            <button class="button px-4 py-2">Log in</button>
                            @endguest
                        </div>
                    </div>
                </div>
            </header>

            <section class="section-img">
                <h1>Make the Right Move</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                <button class="button">Our Approach</button>
            </section>
        </section>

        <section class="section-right-move">
            <div class="container p-0">
                <h3 class="section-right-move-title pb-4">Make the right move</h3>
                <p class="p-luxe pb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium labore alias blanditiis quibusdam sapiente dignissimos molestiae animi consequuntur cupiditate beatae temporibus, ullam fugit officiis dolores nemo quas, doloremque perspiciatis soluta!</p>

                <div class="row pt-4 m-0">
                    <div class="col-12 col-lg-3 text-center border-right">
                        <h3 class="h3-luxe">34</h3>

                        <p class="p-luxe">Dedicated Partners <br> to Help you</p>
                    </div>
                    <div class="col-12 col-lg-3 text-center border-right">
                        <h3 class="h3-luxe color-dark-luxe">50+</h3>

                        <p class="p-luxe">Hours Of Live <br> Training Monthly</p>
                    </div>
                    <div class="col-12 col-lg-3 text-center border-right">
                        <h3 class="h3-luxe color-dark-luxe">24/7</h3>

                        <p class="p-luxe">Marketing <br> Support</p>
                    </div>
                    <div class="col-12 col-lg-3 text-center">
                        <h3 class="h3-luxe color-dark-luxe">1800+</h3>

                        <p class="p-luxe">Realtors In <br> The Family</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-what-different">
            <p class="h4-luxe text-white">What makes us different</p>
        </section>
        <footer></footer>
    </div>


</body>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

</html>