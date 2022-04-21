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

    .section-priceless {
        background-image: url("{{ asset('images/index-page/your_time_priceless_background.png') }}");
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
</style>

<body>
    <div id="app">
        <section class="section-header">
            <header id="header">
                <div class="container-fluid">
                    <nav class="navbar navbar-light light-blue lighten-4 d-flex d-lg-none d-xl-none">

                        <a class="navbar-brand" href="#"><img src="images/logo.png" alt="" height="74px"></a>
                        <button class="navbar-toggler toggler-example text-white p-0 m-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="30" height="30" focusable="false" class="hamburger-menu">
                                <title>Menu</title>
                                <path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M4 7h22M4 15h22M4 23h22"></path>
                            </svg>
                        </button>
                        <div class="sidebar">
                            <div class="sidebar__item">
                                <div class="mb-5">
                                    <button class="navbar-toggler toggler-example text-white p-0 m-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="close">&times;</span>
                                    </button>
                                </div>
                                <div class="sidebar__item-menu">
                                    <a href="#approach">
                                        <span>Approach</span>
                                    </a>
                                </div>
                                <div class="sidebar__item-menu">
                                    <a href="#marketing">
                                        <span>Marketing</span>
                                    </a>
                                </div>
                                <div class="sidebar__item-menu">
                                    <a href="#team">
                                        <span>Team</span>
                                    </a>
                                </div>
                                <div class="sidebar__item-menu">
                                    <a href="#partners">
                                        <span>Partners</span>
                                    </a>
                                </div>
                                <div class="sidebar__item-menu">
                                    <a href="{{ url('/home') }}">
                                        <span>Dashboard</span>
                                    </a>
                                </div>

                                @auth
                                <div class="sidebar__item-menu">
                                    <a href="#">
                                        <form action="{{route('logout')}}" method="post" class="">
                                            @csrf
                                            <button class="btn btn-link text-dark p-0" style="font-size: 18px !important;">Log out</button>
                                        </form>
                                    </a>
                                </div>

                                @endauth

                                @guest
                                <div class="sidebar__item-menu">
                                    <a href="{{ route('login') }}">
                                        <span>Log in</span>
                                    </a>
                                </div>
                                @endguest
                            </div>
                        </div>
                    </nav>
                    <div class="row d-none d-lg-flex d-xl-flex">
                        <div class="col-12 col-lg-2 text-center">
                            <a href="#"><img src="/images/logo.png" alt="" height="74px"></a>
                        </div>
                        <div class="col-12 col-md-12 col-lg-8">
                            <div class="contact-details d-flex justify-content-center justify-content-lg-end">
                                <div class="right-contactsd">
                                    <a href="#approach">
                                        <span>Approach</span>
                                    </a>
                                    <a href="#marketing">
                                        <span>Marketing</span>
                                    </a>
                                    <a href="#team">
                                        <span>Team</span>
                                    </a>
                                    <a href="#partners">
                                        <span>Partners</span>
                                    </a>
                                    <a href="{{ url('/home') }}">
                                        <span>Dashboard</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-2 align-self-center text-center account-form">
                            @auth
                            <form action="{{route('logout')}}" method="post" class="">
                                @csrf
                                <button class="btn button py-2" style="font-size: 16px !important;">Log out</button>
                            </form>

                            @endauth
                            @guest
                            <button class="button py-2" style="font-size: 16px !important;" onclick="window.location='{{ route("login") }}'" role="button">Log in</button>
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

        <section class="section-right-move" id="approach">
            <div class="container p-0">
                <h3 class="section-right-move-title pb-4">Make the right move</h3>
                <p class="p-luxe pb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium labore alias blanditiis quibusdam sapiente dignissimos molestiae animi consequuntur cupiditate beatae temporibus, ullam fugit officiis dolores nemo quas, doloremque perspiciatis soluta!</p>

                <div class="row pt-4 m-0">
                    <div class="col-12 col-md-6 col-lg-3 text-center br-right">
                        <h3 class="h3-luxe">34</h3>

                        <p class="p-luxe">Dedicated Partners <br> to Help you</p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 text-center br-right">
                        <h3 class="h3-luxe color-dark-luxe">50+</h3>

                        <p class="p-luxe">Hours Of Live <br> Training Monthly</p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 text-center br-right">
                        <h3 class="h3-luxe color-dark-luxe">24/7</h3>

                        <p class="p-luxe">Marketing <br> Support</p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 text-center">
                        <h3 class="h3-luxe color-dark-luxe">1800+</h3>

                        <p class="p-luxe">Realtors In <br> The Family</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-what-different">
            <p class="h4-luxe text-white">What makes us different</p>
        </section>

        <section class="section-products" id="marketing">
            <div class="container p-0">
                <ul class="nav nav-tabs row m-0 mx-2 mx-md-0 mx-lg-0 mx-xl-0" id="myTab" role="tablist">
                    <li class="nav-item col-6 col-md-3 m-0 p-0">
                        <a class="nav-link mrsm active" id="social-media-tab" data-toggle="tab" href="#social-media" role="tab" aria-controls="social-media" aria-selected="true">Social Media Posts</a>
                    </li>
                    <li class="nav-item col-6 col-md-3 m-0 p-0">
                        <a class="nav-link" id="door-hangers-tab" data-toggle="tab" href="#door-hangers" role="tab" aria-controls="door-hangers" aria-selected="false">Door Hangers</a>
                    </li>
                    <li class="nav-item col-6 col-md-3 m-0 p-0">
                        <a class="nav-link mrsm" id="flyers-tab" data-toggle="tab" href="#flyers" role="tab" aria-controls="flyers" aria-selected="false">Flyers</a>
                    </li>
                    <li class="nav-item col-6 col-md-3 m-0 p-0">
                        <a class="nav-link" id="presentations-tab" data-toggle="tab" href="#presentations" role="tab" aria-controls="presentations" aria-selected="false">Presentations</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active text-center pt-5" id="social-media" role="tabpanel">
                        <div class="social-media-panel">
                            <img src="images/index-page/social_media.png" loading="lazy" alt="">

                            <div class="social-media-text">
                                <h6 class="h6-luxe pb-3">Social Media Done Right</h6>
                                <p class="p-luxe">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, veniam vitae dignissimos temporibus error quis.</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade text-center pt-5" id="door-hangers" role="tabpanel">
                        <h6 class="h6-luxe pb-3">Door Hangers</h6>
                        <p class="p-luxe">he standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                    </div>
                    <div class="tab-pane fade text-center pt-5" id="flyers" role="tabpanel">
                        <h6 class="h6-luxe pb-3">Flyers</h6>
                        <p class="p-luxe">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                    </div>
                    <div class="tab-pane fade text-center pt-5" id="presentations" role="tabpanel">
                        <h6 class="h6-luxe pb-3">Presentations</h6>
                        <p class="p-luxe">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-our-team" id="team">
            <div class="container p-0 text-center">
                <h6 class="h6-luxe pb-4">Our Team</h6>

                <p class="p-luxe pb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat assumenda ipsum libero dolorem in corporis quisquam, possimus quo, consequuntur incidunt ducimus id rerum minus est vero dolore tenetur animi natus!</p>

                <div class="row m-0 border-bottom mb-5 pb-5">
                    <div class="col-12 col-md-6 d-flex text-left">
                        <div class="our-team-image mr-4">
                            <img src="images/index-page/person_1.png" loading="lazy" alt="">
                        </div>
                        <div class="our-team-text">
                            <h6>Denisse Uyema</h6>
                            <p class="p-luxe">Real Estate Professional, Luxe Properties Associate</p>

                            <p class="our-team-text-phone"><img src="images/index-page/phone-icon.svg" alt=""> (305) 978 - 6801</p>

                            <p class="our-team-text-email"><a href="#">Email Me</a></p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 d-flex text-left">
                        <div class="our-team-image mr-4">
                            <img src="images/index-page/person_2.png" loading="lazy" alt="">
                        </div>
                        <div class="our-team-text">
                            <h6>Denisse Uyema</h6>
                            <p class="p-luxe">Real Estate Professional, Luxe Properties Associate</p>

                            <p class="our-team-text-phone"><img src="images/index-page/phone-icon.svg" alt=""> (305) 978 - 6801</p>

                            <p class="our-team-text-email"><a href="#">Email Me</a></p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 d-flex text-left mt-4">
                        <div class="our-team-image mr-4">
                            <img src="images/index-page/person_3.png" loading="lazy" alt="">
                        </div>
                        <div class="our-team-text">
                            <h6>Denisse Uyema</h6>
                            <p class="p-luxe">Real Estate Professional, Luxe Properties Associate</p>

                            <p class="our-team-text-phone"><img src="images/index-page/phone-icon.svg" alt=""> (305) 978 - 6801</p>

                            <p class="our-team-text-email"><a href="#">Email Me</a></p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 d-flex text-left mt-4">
                        <div class="our-team-image mr-4">
                            <img src="images/index-page/person_4.png" loading="lazy" alt="">
                        </div>
                        <div class="our-team-text">
                            <h6>Denisse Uyema</h6>
                            <p class="p-luxe">Real Estate Professional, Luxe Properties Associate</p>

                            <p class="our-team-text-phone"><img src="images/index-page/phone-icon.svg" alt=""> (305) 978 - 6801</p>

                            <p class="our-team-text-email"><a href="#">Email Me</a></p>
                        </div>
                    </div>
                </div>

                <div class="row m-0 person-row">
                    <div class="col">
                        <img src="images/index-page/person_5.png" loading="lazy" alt="">
                        <h6 class="mt-2">George Porter</h6>
                        <p class="p-luxe">Broker</p>
                    </div>
                    <div class="col">
                        <img src="images/index-page/person_6.png" loading="lazy" alt="">
                        <h6 class="mt-2">Darlene Long</h6>
                        <p class="p-luxe">Broker</p>
                    </div>
                    <div class="col">
                        <img src="images/index-page/person_7.png" loading="lazy" alt="">
                        <h6 class="mt-2">Guy Banks</h6>
                        <p class="p-luxe">Broker</p>
                    </div>
                    <div class="col">
                        <img src="images/index-page/person_8.png" loading="lazy" alt="">
                        <h6 class="mt-2">George Miller</h6>
                        <p class="p-luxe">Customer</p>
                    </div>
                    <div class="col">
                        <img src="images/index-page/person_9.png" loading="lazy" alt="">
                        <h6 class="mt-2">Rose Elliott</h6>
                        <p class="p-luxe">Customer</p>
                    </div>
                </div>

                <div class="row m-0 justify-content-center join-our-team my-4">
                    <button class="btn btn-dark">JOIN OUR TEAM</button>
                </div>
            </div>
        </section>

        <section class="section-priceless">
            <div>
                <p class="h4-luxe text-white">Your Time is Priceless</p>
                <p class="p-luxe text-white pb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores dolorum esse quaerat molestias impedit laboriosam non, consequatur voluptas culpa qui id cumque quidem deserunt ab possimus ipsam saepe, asperiores aut.</p>

                <button class="btn button px-5 py-3">book interview</button>
            </div>
        </section>
        <section class="section-partners" id="partners">
            <div class="container-fluid">
                <div class="row m-0">
                    <div class="col-12 col-md-6 col-lg-3">
                        <img src="images/index-page/partner_1.png" alt="">
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <img src="images/index-page/partner_2.png" alt="">
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <img src="images/index-page/partner_3.png" alt="">
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <img src="images/index-page/partner_4.png" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="section-clients mt-4">
            <div class="container p-0">
                <h6 class="h6-luxe text-center">Our Clients Push us Forward</h6>

                <div class="mt-5 pt-5">
                    <div class="row m-0">
                        <div class="col-12 d-flex justify-content-center">
                            <div class="w-75 row m-0 justify-content-between">
                                <img src="images/index-page/client_1.png" id="img" alt="">
                                <img src="images/index-page/client_2.png" id="img" alt="">
                            </div>
                        </div>

                        <div class="col-12 row m-0 d-flex justify-content-between align-items-center">
                            <img src="images/index-page/client_3.png" id="img" alt="">
                            <div class="text-center px-5 col-12 col-md order-1 order-md-0">
                                <img src="images/index-page/client_4.png" id="center-img" alt="">
                                <p class="p-luxe mb-4">"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et fugiat obcaecati cum officiis hic voluptate, cumque repellendus ad quisquam voluptates error iure animi dignissimos."</p>
                                <h6>Jackie Watson</h6>
                                <p class="p-luxe">Owner of Property</p>
                            </div>
                            <img src="images/index-page/client_5.png" id="img" alt="">
                        </div>

                        <div class="col-12 d-flex justify-content-center">
                            <div class="w-75 row m-0 justify-content-between">
                                <img src="images/index-page/client_6.png" id="img" alt="">
                                <img src="images/index-page/client_7.png" id="img" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br><br>
        <footer>
            <div class="container-fluid">
                <div class="row m-0 align-items-center px-0 px-md-4 px-lg-4 px-xl-4">
                    <div class="col-12 col-md-6 col-lg-2 col-xl-2">
                        <img src="/images/logo.png" alt="" height="74px">
                    </div>
                    <div class="col-12 order-md-12 order-lg-1 col-md-12 col-lg-7 col-xl-7 row m-0 d-flex justify-content-around align-items-center border-left mt-4 mt-md-0 mt-lg-0">
                        <p class="p-luxe text-white m-0 col-12 col-md-8 d-flex align-items-center"><img src="images/index-page/location-icon.svg" class="mr-2"> 55 Merrick Way #402, Coral Gables, FL 33134</p>
                        <p class="p-luxe text-white m-0 mt-2 mt-md-0 mt-lg-0 col-12 col-md-3 d-flex align-items-center"><img src="images/index-page/phone-icon-white.svg" class="mr-2"> (305) 809-7650</p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 col-xl-3 mt-4 mt-md-0 mt-lg-0 justify-self-end ml-0 order-md-1 order-lg-12">
                        <div class="subscribe">
                            <input type="email" placeholder="Email Address">
                            <button>Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-top mt-5 px-5 pb-2 pt-4">
                <div class="container-fluid">
                    <div class="row m-0 copyrights justify-content-between">
                        <div>
                            <p>&copy; <?php echo date('Y') ?> Luxe Properties. All rights reserved.</p>
                        </div>

                        <div class="social-icons text-center">
                            <a href="#"><img src="images/index-page/facebook-icon.svg" alt=""></a>
                            <a href="#"><img src="images/index-page/twitter-icon.svg" alt=""></a>
                            <a href="#"><img src="images/index-page/linkedin-icon.svg" alt=""></a>
                            <a href="#"><img src="images/index-page/instagram-icon.svg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <a id="scrollTop" href="#header"><img src="images/index-page/arrow-up.png" width="20" alt=""></a>

</body>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<script>
    $('.hamburger-menu').on('click', function() {
        $('.sidebar').toggleClass('active');
        $('.hamburger-menu').toggleClass('active');
        $('.close').toggleClass('active');
    })

    $('.close').on('click', function() {
        $('.sidebar').toggleClass('active');
        $('.hamburger-menu').toggleClass('active');
        $('.close').toggleClass('active');
    })

    var mybutton = document.getElementById("scrollTop");

    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

</script>

</html>