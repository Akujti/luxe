<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>LUXE - PROPERTIES LLC</title>

    <!-- Scripts -->
    <link rel="stylesheet" href="{{ asset('css/root.css') }}">
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
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
        
    }
</style>

<body>
    <div id="app">
        <header>
            <div class="header">
                <div class="container-flud">
                    <div class="row m-0">
                        <div class="col-3 col-md-3 align-items-center d-flex d-lg-none d-xl-none justify-content-center justify-content-md-end order-12 mr-0 pr-0">
                            <button class="toggleSidebar btn text-white bg-transparent p-0 m-0">
                                <img src="/images/index-page/hamburger-menu-icon.svg" width="40px" height="40px" alt="">
                            </button>
                        </div>
                        <div class="col-9 col-md-9 col-lg-2 text-center text-md-left text-lg-left text-xl-left ml-0 pl-0 py-2 py-md-0 py-lg-0">
                            <a href="{{ url('/home') }}"><img src="/images/logo.png" alt="" height="73px"></a>
                        </div>
                        <div class="col-6 col-md-6 col-lg-10 mr-0 pr-0 d-none d-lg-flex d-xl-flex justify-content-end">
                            <div class="contact-details">
                                <div class="right-contactsd">
                                    <a href="#"><img src="/images/feedback-icon.svg" alt=""></a>
                                    <a href="#"><img src="/images/account-icon.svg" alt=""></a>
                                    <a href="#"><img src="/images/search-icon.svg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="row d-flex w-100 m-0">
        <div class="sidebar d-none d-lg-flex">
            <div class="sidebar-main">
                <div class="row p-0 m-0 justify-content-center">
                    <div class="sidebar-logo-details row p-0 d-flex d-lg-none d-xl-none m-0 my-3">
                        <div class="w-100 d-flex align-items-center justify-content-between d-md-none">
                            <img src="/images/logo.png" height="50px" alt="" onclick="window.location.href = '{{ url("/home") }}'">
                            <button class="toggleSidebar btn text-white bg-transparent p-0 m-0">
                                <img src="/images/index-page/close-icon.svg" width="40px" height="40px" alt="">
                            </button>
                        </div>
                        <div class="w-100 sidebar-logo-details-details d-flex align-items-center">
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="#"><img src="/images/feedback-icon.svg" alt=""></a>
                                <a href="#"><img src="/images/account-icon.svg" alt=""></a>
                                <a href="#"><img src="/images/search-icon.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar__item sidebar-navigation">
                        <ul>
                            <li class="row m-0 @if(Request::path() == 'home' && !isset($_GET['dir'])) active selected @endif"><a href="{{ url('/home') }}">Dashboard </a></li>
                            <li class="row m-0 @if(isset($_GET['dir']) && $_GET['dir'] == 'leads') active selected @endif {{ (isset($active) && $active == 'Leads') ? 'active selected': '' }}">
                                <a href="{{ url('/home?dir=leads') }}">Leads </a>
                                <em id="li-plus"><img src="/images/plus.png"></em>
                                <em id="li-minus"><img src="/images/minus.png"></em>

                                <ul class="w-100">
                                    <li><a href="{{ url("general/form/leads/index") }}">Zillow Premiere</a></li>
                                    <li><a href="{{ url("general/form/leads/request-leads") }}">Request 25 Cinc Leads</a></li>
                                    <li><a href="{{ url("general/form/leads/opcity-leads") }}">Sign Up for Opcity Leads</a></li>
                                    <li><a href="{{ url("general/form/leads/prime-street-leads") }}">Prime Street Leads</a></li>
                                </ul>
                            </li>
                            <li class="row m-0 @if(isset($_GET['dir']) && $_GET['dir'] == 'tools_training_videos') active selected @endif {{ (isset($active) && $active == 'Tools&TrainingVideos') ? 'active selected': '' }}">
                                <a href="{{ url('/home?dir=tools_training_videos') }}">Tools & Training Videos</a>
                                <em id="li-plus"><img src="/images/plus.png"></em>
                                <em id="li-minus"><img src="/images/minus.png"></em>
    
                                <ul class="w-100">
                                    <li><a href="{{ url("user/videos") }}">Training Videos</a></li>
                                    <li><a href="{{ url("user/written-email-templates") }}">Email Templates</a></li>
                                    <li><a href="{{ url("user/links") }}">Link to other services</a></li>
                                    <li><a href="{{ url("general/form/agent_referrals/index") }}">New Agents & Referrals</a></li>
                                    <li><a href="{{ url("bookings") }}">Conference Room</a></li>
                                    <li><a href="{{ url("user/files") }}">Office Documents</a></li>
                                    <li><a href="{{ url("general/form/other/photoshoots-for-listings") }}">Photoshoot for Listings</a></li>
                                    <li><a target="_blank" href="{{ url("resume") }}">Resume Builder</a></li>
                                </ul>
                            </li>
                            <li class="row m-0 @if(isset($_GET['dir']) && $_GET['dir'] == 'marketing') active selected @endif {{ (isset($active) && $active == 'Marketing') ? 'active selected': '' }}">
                                <a href="{{ url('/home?dir=marketing') }}">Marketing</a>
                                <em id="li-plus"><img src="/images/plus.png"></em>
                                <em id="li-minus"><img src="/images/minus.png"></em>
    
                                <ul class="w-100">
                                    <li><a href="{{ url("marketing-home") }}">DIY Marketing</a></li>
                                    <li><a href="https://realtorprint.com/collections/luxe">Print Marketing</a></li>
                                    <li><a href="{{ url("user/guides") }}">Downloadble Guides</a></li>
                                    <li><a href="{{ route('canva.marketing.requests') }}">Canva Templates</a></li>
                                </ul>
                            </li>
                            <li class="row m-0 @if(Request::path() == 'user/events') active @endif">
                                <a href="{{ url('/user/events') }}">Training & Events</a>
                            </li>
                            <li class="row m-0 @if(isset($_GET['dir']) && $_GET['dir'] == 'service_staff_requests') active selected @endif {{ (isset($active) && $active == 'Service&StaffRequests') ? 'active selected': '' }}">
                                <a href="{{ url('/home?dir=service_staff_requests') }}">Service & Staff Requests</a>
                                <em id="li-plus"><img src="/images/plus.png"></em>
                                <em id="li-minus"><img src="/images/minus.png"></em>

                                <ul class="w-100">
                                    <li><a href="{{ url("general/form/escrow/index") }}">Rental Escrow Disbursement</a></li>
                                    <li><a href="{{ url("listing-coordinators") }}">Listing Coordinators</a></li>
                                    <li><a href="{{ url("general/form/other/closing-coordinators-agents") }}">Closing Coordinators</a></li>
                                    <li><a href="{{ url("agreement-agents") }}">Mentors</a></li>
                                    <li><a href="{{ url("general/form/other/photoshoots-for-listings") }}">Photoshoot for Listings</a></li>
                                    <li><a href="{{ url("general/form/other/wire-instructions-request") }}">Wire Instructions Request</a></li>
                                    <li><a href="{{ url("general/form/other/logo-creation-request") }}">Logo Creation Request</a></li>
                                    <li><a href="{{ url("general/form/staff-request/new-agent-business-plan") }}">New Agent Business Plan</a></li>
                                    <li><a href="{{ url("general/form/staff-request/2022-business-plan") }}">2022 Business Plan</a></li>
                                    <li><a href="{{ url("general/form/staff-request/follow-up-business-plan") }}">Follow-up Business Plan</a></li>
                                    <li><a href="{{ url("appointments/create") }}">Open House Signup</a></li>
                                </ul>
                            </li>
                            <li class="row m-0 {{ (isset($active) && $active == 'Store') ? 'active': '' }}">
                                <a href="{{ url('/store') }}">Luxe Product Store</a>
                            </li>
                            <li class="row m-0 @if(Request::path() == 'form') active @endif">
                                <a href="{{ url('/form') }}">Luxe Lending</a>
                            </li>
                            <li class="row m-0 @if(Request::path() == 'office-locations') active @endif">
                                <a href="{{ url('/office-locations') }}">Office Locations</a>
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar-details">
                        <p class="d-flex align-items-center" onclick="window.location = 'https://goo.gl/maps/UxezmFmdTJE8SmJL6'">
                            <span><img src="/images/index-page/location-icon.svg" alt=""></span>
                            <span class="text">55 Merrick Way #402 <br> Coral Gables, FL 33134</span>
                        </p>
                        <p class="d-flex align-items-center" onclick="window.location = 'http://www.luxeknows.com/'">
                            <span><img src="/images/index-page/web-icon.svg" alt=""></span>
                            <span class="text">www.luxeknows.com</span>
                        </p>
                        <p class="d-flex align-items-center" onclick="window.location = 'tel:(305) 809-7650'">
                            <span><img src="/images/index-page/phone-icon-white.svg" alt=""></span>
                            <span class="text">(305) 809-7650</span>
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <div class="col p-0 m-0">
            <main class="">
                @yield('content')
            </main>
        </div>
        </div>
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
        toastr.options =
        {
            "closeButton": true,
            "progressBar": true
        }
    toastr.error("{{ $error }}");
    @endforeach
        @endif
        @if(Session::has('message'))
        toastr.options =
        {
            "closeButton": true,
            "progressBar": true
        }
    toastr.success("{{ session('message') }}");
    @endif

        @if(Session::has('error'))
        toastr.options =
        {
            "closeButton": true,
            "progressBar": true
        }
    toastr.error("{{ session('error') }}");
    @endif

        @if(Session::has('info'))
        toastr.options =
        {
            "closeButton": true,
            "progressBar": true
        }
    toastr.info("{{ session('info') }}");
    @endif

        @if(Session::has('warning'))
        toastr.options =
        {
            "closeButton": true,
            "progressBar": true
        }
    toastr.warning("{{ session('warning') }}");
    @endif
</script>

<script>
    $('.toggleSidebar').click(function () {
        $('.sidebar').toggleClass('active');
    })
    @if(Request::path() !== 'home')
        $('a[href*="'+document.URL+'"').addClass('active_submenu')
    @endif
    $(function(){
        var $ul   =   $('.sidebar-navigation > ul');
        
        $ul.find('li em').click(function(e){
            var $li = $(this).parent();
            
            if($li.find('ul').length > 0){
            e.preventDefault();
            
            if($li.hasClass('selected')){
                
                $li.removeClass('selected').find('li').removeClass('selected');
                $li.find('ul').slideUp(400);
                $li.find('a em').removeClass('mdi-flip-v');
                $(this).find('img').attr("src","/images/plus.png")
            }else{
                $(this).find('img').attr("src","/images/minus.png")
                if($li.parents('li.selected').length == 0){
                $ul.find('li').removeClass('selected');
                $ul.find('ul').slideUp(400);
                $ul.find('li a em').removeClass('mdi-flip-v');
                }else{
                $li.parent().find('li').removeClass('selected');
                $li.parent().find('> li ul').slideUp(400);
                $li.parent().find('> li a em').removeClass('mdi-flip-v');
                }
                
                $li.addClass('selected');
                $li.find('>ul').slideDown(400);
                $li.find('>a>em').addClass('mdi-flip-v');
            }
            }
        });
        
        $('.sidebar-navigation > ul ul').each(function(i){
            if($(this).find('>li>ul').length > 0){
            var paddingLeft = $(this).parent().parent().find('>li>a').css('padding-left');
            var pIntPLeft   = parseInt(paddingLeft);
            var result      = pIntPLeft + 20;
            
            $(this).find('>li>a').css('padding-left',result);
            }else{
            var paddingLeft = $(this).parent().parent().find('>li>a').css('padding-left');
            var pIntPLeft   = parseInt(paddingLeft);
            var result      = pIntPLeft + 20;
            
            $(this).find('>li>a').css('padding-left',result).parent().addClass('selected--last');
            }
        });
        
        var t = ' li > ul ';
        for(var i=1;i<=10;i++){
            $('.sidebar-navigation > ul > ' + t.repeat(i)).addClass('subMenuColor' + i);
        }

        });
</script>
</html>