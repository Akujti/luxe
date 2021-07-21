<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Single Property</title>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Lato:300,400,700');
        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@900&display=swap');

        * {
            font-family: 'Lato';
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p {
            margin: 0;
        }

        h1 {
            font-size: 80px;
            line-height: 45px;
        }

        h4 {
            font-size: 45px;
            line-height: 25px;
        }

        .page_break {
            page-break-before: always;
        }

        @page {
            padding: 0px;
            margin: 0px;
        }

        body {
            padding: 0px;
            margin: 0px;
        }

        .page-background {
            background-repeat: no-repeat;
            background-size: cover;
            height: 100%;
            position: absolute;
            bottom: 0px;
            width: 100%;
        }

        .black {
            color: black !important;
        }

        .gold {
            color: #C9A668 !important;
        }

        .white {
            color: white !important;
        }

        .font-thin {
            font-weight: 300;
        }

        .font-regular {
            font-weight: 400;
        }

        .font-700 {
            font-weight: 700
        }

        .font-bold {
            font-weight: 900;
        }

        .font-size-20 {
            font-size: 20px;
        }

        .font-size-25 {
            font-size: 25px;
        }

        .text-center {
            text-align: center;
        }

        .absolute {
            position: absolute;
        }

        .background-right {
            background-position: right;
        }

        .background-left {
            background-position: left;
        }

        .background-center {
            background-position: center;
        }

        .float-right {
            float: right;
        }

        .list-style-none {
            list-style: none;
        }

        .mb-10 {
            margin-bottom: 10px;
        }

        .mb-15 {
            margin-bottom: 15px;
        }

        .mb-20 {
            margin-bottom: 20px;
        }

        .mb-25 {
            margin-bottom: 25px;
        }

        .mb-30 {
            margin-bottom: 30px;
        }

        .mb-35 {
            margin-bottom: 35px;
        }

        .mb-40 {
            margin-bottom: 40px;
        }

        .mb-50 {
            margin-bottom: 50px;
        }

        .mb-60 {
            margin-bottom: 60px;
        }

        .mb-70 {
            margin-bottom: 70px;
        }

        .mb-80 {
            margin-bottom: 80px;
        }

        .mb-100 {
            margin-bottom: 100px;
        }

        .mb-150 {
            margin-bottom: 150px;
        }

        .page-bottom {
            position: absolute;
            bottom: 0px;
            width: 100%;
        }

        .big-title {
            letter-spacing: 15px;
            font-size: 120px;
        }

        h1.cover-page {
            font-size: 170px;
            line-height: 160px;
            font-weight: 300;
            margin: -10px 0;
        }

        h2.cover-page {
            font-size: 72px;
            line-height: 67px;
            font-weight: 900;
            padding-left: 13px;
            letter-spacing: -4px;
            margin-top: -15px;
            margin-bottom: 2px;
        }

        .text-20 {
            font-size: 20px;
        }

        .page-number {
            height: 17%;
            position: absolute;
            background-repeat: no-repeat;
            background-size: auto;
            background-position: right;
            text-align: right;
        }

        .page-number h2 {
            font-size: 40px;
            line-height: 25px;
        }

        .page-number h3 {
            font-size: 30px;
            line-height: 25px;
        }

        .page-number h4 {
            font-size: 20px;
            line-height: 10px;
        }

        h2.cover-page-thin {
            font-size: 70px;
            margin-left: 100px;
        }

        h1.cover-page-thin {
            font-size: 120px;
        }

        .page-4-2 .luxe-pro-info {
            z-index: 100;
        }

        .page-4-2 .luxe-pro-info .spacer {
            margin-top: 150px;
        }

        .page-4-2 .luxe-pro-info .content {
            background-image: url("images/home-selling/Asset 9.png");
            background-size: auto;
            height: 90%;
            background-repeat: no-repeat;
            background-size: 90% 80%;
            margin-left: 45px;
        }

        .page-4-2 .content .section {
            max-width: 150px;
            text-align: center;
            position: absolute;
            color: white;
        }

        .page-4-2 .content .section .section-content-top {
            font-size: 72px;
            font-weight: 300;
        }

        .page-4-2 .content .section .section-content-bottom {
            font-size: 23px;
            text-transform: uppercase;
            font-weight: 300;
        }

        .page-4-2 .content .section-1 {
            top: 140px;
            left: 315px;
        }

        .page-4-2 .content .section-2 {
            top: 260px;
            left: 83px;
        }

        .page-4-2 .content .section-3 {
            top: 260px;
            left: 545px;
        }

        .page-4-2 .content .section-4 {
            top: 515px;
            left: 90px;
        }

        .page-4-2 .content .section-5 {
            top: 515px;
            left: 530px;
        }

        .page-4-2 .content .section-6 {
            top: 640px;
            left: 325px;
        }

        .page-4-2 .bg-image {
            width: 130%;
            position: absolute;
            left: -800px;
            z-index: 1;
        }

        .page-4-2 .text {
            top: 900px;
            left: 250px;
            position: absolute;
        }

        .page-4-2 .text hr {
            border: 1.5pt solid #C6A467;
            width: 362px;
            margin-left: -5px;
        }

        .page-4-2 .text p {
            font-weight: 300;
            max-width: 450px;
        }

        .page-5-2 .heading {
            z-index: 100;
        }

        .page-5-2 .heading .subtitle-top {
            position: absolute;
            top: 10px;
            left: 240px;
            font-weight: 300;
            font-size: 54px;
        }

        .page-5-2 .heading .title {
            margin-top: 130px;
            margin-left: 10px;
            margin-bottom: -10px;
            font-weight: 300;
            font-size: 148px;
            color: #C5A367;
        }

        .page-5-2 .heading .subtitle-bottom {
            font-size: 56px;
            margin-left: 200px;
            font-weight: 300;
        }

        .page-5-2 .content {
            z-index: 100;
            position: absolute;
            top: 250px;
            left: 240px;
            max-width: 450px;
        }

        .page-5-2 .content p {
            font-family: 'Lato';
            font-weight: 300;
        }

        .page-5-2 .content ul {
            list-style-image: url('images/home-selling/check-large.png');
        }

        .page-5-2 .content li {
            margin-bottom: 5px;
            font-weight: 300;
        }

        .page-6-2 ul {
            list-style-image: url('images/home-selling/check-large.png');
        }

        .page-6-2 li {
            margin-bottom: 2px;
            font-weight: 300;
        }
    </style>
</head>

<body>
    <div class="page page-1">
        <div class="container">
            <div class="absolute" style="top:30%">
                <h1 class="big-title font-thin mb-40">{{$page_1_text_1 }}</h1>
                <h1 class="big-title gold font-thin mb-40">{{$page_1_text_4 }} </h1>
                <h1 class="big-title gold font-thin mb-20">{{$page_1_text_2 }}</h1>
                <h1 class="font-thin">{{$page_1_text_3}}</h1>
            </div>
            <div class="page-bottom text-center">
                <img src="images/Asset 1.png" alt="">
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-2 page-background" style="background-image:url('{{ $page_2_1_img_1 }}')">
        <div class="container">
            <div class="absolute" style="top:37%;">
                <h1 class="cover-page gold">LUXE</h1>
                <h2 class="cover-page white">PROPERTIES</h2>
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-3 page-background" style="background-image:url('images/single-property/page-3.png')">
        <div class="container">
            <div class="absolute" style="top:5%;left:50px;">
                <h2 class="font-thin mb-20" style="font-size:45px;">{{$page_3_text_1 }}</h2>
                <h1 class="gold font-thin mb-20" style="font-size:105px;">{{ $page_3_text_2}}</h1>
                <h1 class="font-thin" style="font-size:105px;">{{ $page_3_text_3}}</h1>
            </div>

            <div class="absolute" style="top:18%;left:250px;width:450px;">
                <p class="font-thin text-20">{{ $page_3_text_4 }}</p>
                <br>
                <p class="font-thin text-20">{{ $page_3_text_5 }}</p>
            </div>

            <div class="page-number" style="background-image: url('images/single-property/02.png');top:37%;">
                <div class="text" style="margin-top: 130px;margin-right: 150px;">
                    <h3 class="font-thin gold">THE</h3>
                    <h2 class="font-thin">HOME</h2>
                    <h2 class="font-thin gold">SELLING</h2>
                    <h4 class="font-thin">GUIDE</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-4 page-background" style="background-image:url('{{ $page_4_img_1 }}');">
        <div class="container">
            <div class="absolute" style="top:35%;left:100px;">
                <h2 class="cover-page-thin font-thin white mb-40">Meet</h2>
                <h1 class="cover-page-thin font-thin gold">The Agent</h1>
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-5">
        <div class="container">
            <div class="absolute" style="top:8%;left:100px;">
                <h1 class="gold font-thin" style="font-size: 150px;margin-bottom:-20px;">{{ $page_5_text_1 }}</h1>
                <h2 class="font-thin mb-80" style="font-size: 80px;margin-left:100px;">{{ $page_5_text_2 }}</h2>

                <div style="max-width: 650px">
                    <?php $page_5_text_3 = explode("\n", $page_5_text_3); ?>
                    @foreach ($page_5_text_3 as $page_5_text_3)
                    <p class="font-thin mb-20">{{ $page_5_text_3 }}</p>
                    @endforeach
                    <br>
                    <h2 class="font-thin">-{{ $page_5_text_1 }} {{ $page_5_text_2 }}</h2>
                </div>
            </div>
            <div class="page-number" style="background-image: url('images/single-property/04.png');bottom:1%;">
                <div class="text" style="margin-top: 30px;margin-right:150px;">
                    <h3 class="font-thin gold">THE</h3>
                    <h2 class="font-thin">HOME</h2>
                    <h2 class="font-thin gold">SELLING</h2>
                    <h4 class="font-thin">GUIDE</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-6 page-background" style="background-image:url('{{ $page_6_img_1 }}');">
        <div class="container">
            <div class="absolute" style="top:33%;left:50px;">
                <h2 class="cover-page-thin font-thin white mb-40">Our</h2>
                <h1 class="cover-page-thin font-thin gold">Commitment</h1>
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-7">
        <div class="container">
            <div class="absolute" style="top:3%;left:100px;">
                <h2 class="font-thin mb-10" style="font-size: 50px;margin-left:400px;">{{ $page_7_text_1 }}</h2>
                <h1 class="gold font-thin" style="font-size: 120px;margin-bottom:-10px;">{{ $page_7_text_2 }}</h1>
                <h2 class="font-thin" style="font-size: 50px;">{{ $page_7_text_3 }}</h2>
            </div>
            <div class="absolute" style="top:25%;left:100px;">
                <div class="mb-50">
                    <img src="images/single-property/Asset 5.png" alt="" width="200px">
                </div>
                <div class="mb-50">
                    <img src="images/single-property/Asset 6.png" alt="" width="200px">
                </div>
                <div class="mb-50">
                    <img src="images/single-property/Asset 7.png" alt="" width="200px">
                </div>
            </div>
            <div class="absolute" style="top:24%;left:320px;">
                <h2 class="font-bold gold" style="width: 300px;font-size:30px;line-height:20px;">{{ $page_7_text_4 }}
                </h2>
                <p class="font-thin">{{ $page_7_text_5}}</p>
            </div>
            <div class="absolute" style="top:47%;left:320px;">
                <h2 class="font-bold gold" style="width: 300px;font-size:30px;line-height:20px;">{{ $page_7_text_6 }}
                </h2>
                <p class="font-thin">{{ $page_7_text_7 }}</p>
            </div>
            <div class="absolute" style="top:70%;left:320px;">
                <h2 class="font-bold gold" style="width: 300px;font-size:30px;line-height:20px;">{{ $page_7_text_8 }}
                </h2>
                <p class="font-thin">{{ $page_7_text_9}}</p>
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-8 page-background" style="background-image:url('{{ $page_8_img_1 }}');">
        <div class="container">
            <div class="absolute" style="top:33%;left:50px;">
                <h2 class="cover-page-thin font-thin white mb-40">The</h2>
                <h1 class="cover-page-thin font-thin gold">Power</h1>
                <h2 class="cover-page-thin font-thin white mb-40">of Our Brand</h2>
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div
        style="top:0;bottom:0;right:630px;position:absolute;background-image: url('{{$page_9_img_1}}');background-size: cover;background-position:bottom right;background-repeat: no-repeat;height:100%">
        <h1></h1>
    </div>
    <div class="page page-9 page-4-2"
        style="top:0;bottom:0;right:0;position:absolute;background-size: cover;background-position: -700px -5px;background-repeat: no-repeat;">
        <div class="luxe-pro-info">
            <div class="spacer"></div>
            <div class="content">
                <div class="section section-1">
                    <span class="section-content-top">{{ $page_9_text_1}}</span>
                    <br>
                    <span class="section-content-bottom">{{ $page_9_text_2}}</span>
                </div>
                <div class="section section-2">
                    <span class="section-content-top">{{ $page_9_text_3}}</span>
                    <br>
                    <span class="section-content-bottom">{{ $page_9_text_4}}</span>
                </div>
                <div class="section section-3">
                    <span class="section-content-top">{{ $page_9_text_5}}</span>
                    <br>
                    <span class="section-content-bottom">{{ $page_9_text_6}}</span>
                </div>
                <div class="section section-4">
                    <span class="section-content-top">{{ $page_9_text_7}}</span>
                    <br>
                    <span class="section-content-bottom">{{ $page_9_text_8}}</span>
                </div>
                <div class="section section-5">
                    <span class="section-content-top">{{ $page_9_text_9}}</span>
                    <br>
                    <span class="section-content-bottom">{{ $page_9_text_10}}</span>
                </div>
                <div class="section section-6">
                    <span class="section-content-top">{{ $page_9_text_11}}</span>
                    <br>
                    <span class="section-content-bottom">{{ $page_9_text_12}}</span>
                </div>
            </div>
            <div class="text">
                <hr>
                <p>{{ $page_9_text_13}}</p>
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-10 page-background" style="background-image:url('{{ $page_10_img_1 }}');">
        <div class="container">
            <div class="absolute" style="top:43%;left:30px;">
                <h1 class="font-thin gold" style="font-size:170px;margin-bottom:-20px;">Marketing</h1>
                <h2 class="font-thin white mb-40" style="margin-left:400px;font-size:50px;">Showcase</h2>
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div
        style="top:0;bottom:0;right:630px;position:absolute;background-image: url('{{$page_11_img_1}}');background-size: cover;background-position:bottom right;background-repeat: no-repeat;height:100%">
        <h1></h1>
    </div>
    <div class="page page-11 page-5-2"
        style="top:0;bottom:0;right:0;position:absolute;background-size: cover;background-position: -700px -5px;background-repeat: no-repeat;">
        <div class="container">
            <div class="heading">
                <h2 class="subtitle-top">Tailored Listing</h2>
                <h1 class="title"><span style="color:white;">Ex</span>posure</h1>
                <h1 class="subtitle-bottom">Strategy</h1>
            </div>
            <div class="content">
                <p>{{ $page_11_text_1}}</p>
                <p>{{ $page_11_text_2}}:</p>
                <ul>
                    <?php $page_11_text_3 = explode("\n", $page_11_text_3); ?>
                    @foreach ($page_11_text_3 as $page_11_text_3)
                    <li>{{ $page_11_text_3 }}</li>
                    @endforeach
                    {{-- <li>{{ $page_11_text_3}}</li> --}}
                    {{-- <li>Professional HD Videos</li>
                    <li>Professional HD Photography</li>
                    <li>Professional Drone Videography</li>
                    <li>Custom reporting on specific buyer profiles for each listing</li>
                    <li>Direct Mail Marketing to targeted demographics</li>
                    <li>Email Campaigns to targeted demographics</li>
                    <li>PPC Google campaign to targeted demographics</li>
                    <li>Targeted advertising in China, South America and Europe</li>
                    <li>Targeted Social Media Advertising</li>
                    <li>Syndication to over 100 online portals</li>
                    <li>Premium placement on all major real estate portals includ- ing Zillow, Trulia & Realtor.com</li>
                    <li>International MLS Marketing</li>
                    <li>Print advertisements in local newspaper and magazines</li>
                    <li>Broker’s Open</li>
                    <li>Bi-weekly Open Houses</li>
                    <li>Signage including web domain riders</li> --}}
                </ul>
                <p>{{ $page_11_text_4}}</p>
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-12 page-background" style="background-image:url('{{ $page_12_img_1 }}');">
        <div class="container">
            <div class="absolute" style="top:43%;left:30px;">
                <h1 class="font-thin gold" style="font-size:170px;margin-bottom:-20px;">Marketing</h1>
                <h2 class="font-thin white mb-40" style="margin-left:400px;font-size:50px;">Timeframe</h2>
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div
        style="top:0;bottom:0;right:630px;position:absolute;background-image: url('{{$page_12_img_1}}');background-size: cover;background-position:bottom right;background-repeat: no-repeat;height:100%">
        <h1></h1>
    </div>
    <div class="page page-13 page-6-2" style="background-size: cover;top:0;bottom:0;right:0;position:absolute;">
        <div class="container">
            <div class="week" style="z-index:50;position:absolute;top:150px;">
                <img class="" src="images/home-selling/yellow-fade.png" alt="" style="width:45%;">
                <h2 style="color:white;font-weight:300;font-size:40px;margin-top:-70px;margin-left:180px;">Week 1</h2>
            </div>
            <div class="week" style="z-index:50;position:absolute;top:300px;">
                <img class="" src="images/home-selling/yellow-fade.png" alt="" style="width:45%;">
                <h2 style="color:white;font-weight:300;font-size:40px;margin-top:-70px;margin-left:180px;">Week 3</h2>
            </div>
            <div class="week" style="z-index:50;position:absolute;top:450px;">
                <img class="" src="images/home-selling/yellow-fade.png" alt="" style="width:45%;">
                <h2 style="color:white;font-weight:300;font-size:40px;margin-top:-70px;margin-left:180px;">Week 5</h2>
            </div>
            <div class="week" style="z-index:50;position:absolute;top:600px;">
                <img class="" src="images/home-selling/yellow-fade.png" alt="" style="width:45%;">
                <h2 style="color:white;font-weight:300;font-size:40px;margin-top:-70px;margin-left:180px;">Week 7</h2>
            </div>
            <div class="week" style="z-index:50;position:absolute;top:750px;">
                <img class="" src="images/home-selling/yellow-fade.png" alt="" style="width:45%;">
                <h2 style="color:white;font-weight:300;font-size:40px;margin-top:-70px;margin-left:180px;">Week 9</h2>
            </div>
            <div class="list-week-1" style="position: absolute;left:360px;top:80px;">
                <ul>
                    <?php $page_13_text_1 = explode("\n", $page_13_text_1); ?>
                    @foreach ($page_13_text_1 as $page_13_text_1)
                    <li>{{ $page_13_text_1 }}</li>
                    @endforeach
                    {{-- <li>{{ $page_13_text_1 }}</li> --}}
                    {{-- <li>Photography & video session</li>
                    <li>Home is listed on MLS + International MLS</li>
                    <li>Personalized website created for home</li>
                    <li>Make sure listing syndicated to all sites</li> --}}
                </ul>
            </div>
            <div class="list-week-3" style="position: absolute;left:360px;top:230px;">
                <ul>
                    <?php $page_13_text_2 = explode("\n", $page_13_text_2); ?>
                    @foreach ($page_13_text_2 as $page_13_text_2)
                    <li>{{ $page_13_text_2 }}</li>
                    @endforeach
                    {{-- <li>{{ $page_13_text_2 }}</li> --}}
                    {{-- <li>Virtual tour posted on YouTube and shared</li>
                    <li>Blog post with Facebook sponsored ad</li>
                    <li>Additional Social Media Posts</li>
                    <li>Open House (if applicable)</li> --}}
                </ul>
            </div>
            <div class="list-week-5" style="position: absolute;left:360px;top:400px;">
                <ul>
                    <?php $page_13_text_3 = explode("\n", $page_13_text_3); ?>
                    @foreach ($page_13_text_3 as $page_13_text_3)
                    <li>{{ $page_13_text_3 }}</li>
                    @endforeach
                    {{-- <li>{{ $page_13_text_3 }}</li> --}}
                    {{-- <li>Targeted email campaign to area's owners</li>
                    <li>Brokers' open for select agents who specialize in the area</li>
                    <li>Begin preparing direct mail piece</li> --}}
                </ul>
            </div>
            <div class="list-week-7" style="position: absolute;left:360px;top:540px;">
                <ul>
                    <?php $page_13_text_4 = explode("\n", $page_13_text_4); ?>
                    @foreach ($page_13_text_4 as $page_13_text_4)
                    <li>{{ $page_13_text_4 }}</li>
                    @endforeach
                    {{-- <li>{{ $page_13_text_4 }}</li> --}}
                    {{-- <li>Personal outreach to other agents</li>
                    <li>Open houses</li>
                    <li>Continually monitor social media posts, blog posts and websites for potential buyers</li> --}}
                </ul>
            </div>
            <div class="list-week-9" style="position: absolute;left:360px;top:700px;">
                <ul>
                    <?php $page_13_text_5 = explode("\n", $page_13_text_5); ?>
                    @foreach ($page_13_text_5 as $page_13_text_5)
                    <li>{{ $page_13_text_5 }}</li>
                    @endforeach
                    {{-- <li>{{ $page_13_text_1 }}</li> --}}
                    {{-- <li>Monitor PPC for listing</li>
                    <li>Review analytics for Facebook Sponsored Ad</li>
                    <li>Revise website and social media postings</li>
                    <li>Review with client to make adjustments if needed</li> --}}
                </ul>
            </div>
            <div class="page-number" style="background-image: url('images/single-property/12.png');bottom:1%;">
                <div class="text" style="margin-top: 30px;margin-right:150px;">
                    <h3 class="font-thin gold">THE</h3>
                    <h2 class="font-thin">HOME</h2>
                    <h2 class="font-thin gold">SELLING</h2>
                    <h4 class="font-thin">GUIDE</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page-14 page-7-1">
        <div class="luxe-pro-info">
            <div class="row-1"
                style="background-image: url('{{ $page_14_img_1 }}');height:33%;position:absolute;top:0;background-size: cover;">
                <h1></h1>
            </div>
            <div class="row-2"
                style="background-image: url('{{ $page_14_img_2 }}');height:34%;position:absolute;top:33%;background-size: cover;">
                <h1></h1>
            </div>
            <div class="row-3"
                style="background-image: url('{{ $page_14_img_3 }}');height:33%;position:absolute;bottom:0;background-size: cover;">
                <h1></h1>
            </div>
            <div class="text" style="position:absolute;top:50%">
                <h1 style="font-size: 188px;color:white;letter-spacing: -12px;font-weight: 300;">Property</h1>
                <h2 style="font-size: 80px;color:white;font-weight: 300;letter-spacing: 24px;margin-left:20px;">Showcase
                </h2>
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page-15 page-7-2"
        style="right:70%;background-image: url('{{ $page_14_img_1 }}');height:33%;position:absolute;top:0;background-size: cover;background-position: center;background-position: 0px 0px;background-repeat:no-repeat;">
        <h1></h1>
    </div>
    <div class="page-15 page-7-2"
        style="right:70%;background-image: url('{{ $page_14_img_2 }}');height:34%;position:absolute;top:33%;background-size: cover;background-position: center;background-position: 0px 0px;background-repeat:no-repeat;">
        <h1></h1>
    </div>
    <div class="page-15 page-7-2"
        style="right:70%;background-image: url('{{ $page_14_img_3 }}');height:33%;position:absolute;bottom:0;background-size: cover;background-position: center;background-position: 0px 0px;background-repeat:no-repeat;">
        <h1></h1>
    </div>
    <div class="page-15 page-7-2" style="z-index:100;">
        <div class="section" style="position: absolute;top:50px;left:10px;">
            <img src="images/home-selling/Asset 13-4.png" alt="" style="position:absolute;">
            <div class="text" style="margin-top: 50px;z-index:1000;margin-left:70px;">
                <p style="font-size: 46px;line-height:-20px;color:white;">{{ $page_15_text_1 }}</p>
                <p style="font-size: 50px;line-height:40px;font-weight:900;">{{ $page_15_text_2 }}</p>
            </div>
        </div>
        <div class="section" style="position: absolute;top:400px;left:10px;">
            <img src="images/home-selling/Asset 13-4.png" alt="" style="position:absolute;">
            <div class="text" style="margin-top: 50px;z-index:1000;margin-left:70px;">
                <p style="font-size: 46px;line-height:-20px;color:white;">{{ $page_15_text_5 }}</p>
                <p style="font-size: 50px;line-height:40px;font-weight:900;">{{ $page_15_text_6 }}</p>
            </div>
        </div>
        <div class="section" style="position: absolute;top:800px;left:10px;">
            <img src="images/home-selling/Asset 13-4.png" alt="" style="position:absolute;">
            <div class="text" style="margin-top: 50px;z-index:1000;margin-left:70px;">
                <p style="font-size: 46px;line-height:-20px;color:white;">{{ $page_15_text_7}}</p>
                <p style="font-size: 50px;line-height:40px;font-weight:900;">{{ $page_15_text_8 }}</p>
            </div>
        </div>
        <div class="section" style="position: absolute;top:50px;left:430px;">
            <p style="font-weight: 300;">{{ $page_15_text_3 }}</p>
        </div>
        <div class="section" style="position: absolute;top:400px;left:430px;">
            <p style="font-weight: 300;">{{ $page_15_text_4 }}</p>
        </div>
        <div class="section" style="position: absolute;top:800px;left:430px;">
            <p style="font-weight: 300;">{{ $page_15_text_9 }}</p>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page-16 page-8-1"
        style="background-image: url('images/home-selling/Asset 14.png');height:100%;position:absolute;top:0;background-size: cover;background-position: center;">
        <h1></h1>
    </div>

    <div class="page_break"></div>

    <div class="page page-17 page-8-2">
        <div class="container" style="margin-left:50px;">
            <div class="heading">
                <h2 class="subtitle-top" style="font-weight: 300;font-size:70px;margin-left:10px;">Our</h2>
                <h1 class="title" style="font-size: 190px;color:#C6A467;font-weight:300;line-height:130px;">Digital</h1>
                <h1 class="subtitle-bottom" style="font-weight: 300;font-size: 75px;margin-left:280px;">
                    Advantage</h1>
            </div>
            <div class="content">
                <p style="font-weight: 300;padding-right:100px;">{{$page_17_text_2}}</p>
                {{-- <p style="font-weight: 300;padding-right:100px;">All our syndication portals display your home with:</p> --}}
                <ul style="list-style-image: url('images/home-selling/check-large.png');">
                    <?php $page_17_text_2 = explode("\n", $page_17_text_2); ?>
                    @foreach ($page_17_text_2 as $page_17_text_2)
                    <li style="margin-bottom: 15px;font-weight: 400;">{{$page_17_text_2}}</li>
                    {{-- <li style="margin-bottom: 15px;font-weight: 400;">Daily Updates</li>
                    <li style="margin-bottom: 15px;font-weight: 400;">Local Information on Area</li>
                    <li style="margin-bottom: 15px;font-weight: 400;">Property Information</li> --}}
                    @endforeach
                </ul>
                <p style="font-weight: 300;padding-right:100px;">{{$page_17_text_3}}</p>
                <p style="font-weight: 300;padding-right:100px;">Custom reporting includes:</p>
                <ul style="list-style-image: url('images/home-selling/check-large.png');">
                    <?php $page_17_text_4 = explode("\n", $page_17_text_4); ?>
                    @foreach($page_17_text_4 as $key => $value)
                    <li style="margin-bottom: 15px;font-weight: 400;">{{$value}}</li>
                    @endforeach
                    {{-- <li style="margin-bottom: 15px;font-weight: 400;">Search List Views</li>
                    <li style="margin-bottom: 15px;font-weight: 400;">Property Details Views</li>
                    <li style="margin-bottom: 15px;font-weight: 400;">Saved Searches</li> --}}
                    {{-- @endforeach --}}
                </ul>
            </div>
            <div class="page-number" style="background-image: url('images/single-property/06.png');bottom:1%;">
                <div class="text" style="margin-top: 30px;margin-right:150px;">
                    <h3 class="font-thin gold">THE</h3>
                    <h2 class="font-thin">HOME</h2>
                    <h2 class="font-thin gold">SELLING</h2>
                    <h4 class="font-thin">GUIDE</h4>
                </div>
            </div>

        </div>
    </div>

    <div class="page_break"></div>

    <div class="page-18"
        style="background-image: url('images/single-property/page-18.png');height:100%;position:absolute;top:0;background-size: cover;background-position: left;">
        <div class="pc" style="margin-top:440px;margin-left:180px;">
            <img src="{{ $page_18_img_1 }}" alt="" width="620px" height="400px">
        </div>
        <div class="tablet" style="margin-top:-140px;z-index:100;margin-left:35px;">
            <img src="images/single-property/tablet.png" alt="">
            <div style="margin-top:-415px;margin-left:7px;">
                <img src="{{ $page_18_img_2 }}" alt="" width="232px" height="310px">
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div
        style="top:0;bottom:0;right:630px;position:absolute;background-image: url('images/single-property/page-18-1.png');background-size: cover;background-position:bottom right;background-repeat: no-repeat;height:100%">
        <h1></h1>
    </div>
    <div class="page page-19 page-9-2"
        style="top:0;left:-500px;bottom:0;right:0;position:absolute;background-size: cover;background-position: -600px -5px;background-repeat: no-repeat;">
        <div style="margin-left:520px;padding-right:35px;">
            <div class="heading" style="z-index:1000;">
                <h2 class="subtitle-top" style="font-weight: 300;font-size:70px;margin-left:170px;margin-bottom:20px;">
                    Exclusive</h2>
                <h1 class="title" style="font-size: 150px;color:#C6A467;font-weight:300;margin-left:-10px;"><span
                        style="color: white;">Pr</span>operty</h1>
                <h1 class="subtitle-bottom" style="font-weight: 300;font-size: 75px;margin-left:250px;">Sites</h1>
            </div>
            <div class="content" style="margin-left:165px;">
                <p style="font-weight: 300;">{{ $page_19_text_1 }}</p>
                <br>
                <p style="font-weight: 300;">{{ $page_19_text_2 }}</p>
                <h3 style="color: #C5A367;font-size: 35px;font-weight: 900;margin-bottom:-20px;">Features</h3>
                <ul style="list-style-image: url('images/home-selling/check-large.png');">
                    <?php $page_19_text_3 = explode("\n", $page_19_text_3); ?>
                    @foreach ($page_19_text_3 as $page_19_text_3)
                    <li style="margin-bottom: 5px;font-weight: 400;">{{ $page_19_text_3 }}</li>
                    {{-- <li style="margin-bottom: 5px;font-weight: 400;">Schools in Area</li>
                    <li style="margin-bottom: 5px;font-weight: 400;">Video and Photo Showcase</li>
                    <li style="margin-bottom: 5px;font-weight: 400;">Map</li> --}}
                    @endforeach
                </ul>
                <h3 style="color: #C5A367;font-size: 35px;font-weight: 900;margin-bottom:-20px;">Capabilities</h3>
                <ul style="list-style-image: url('images/home-selling/check-large.png');">
                    <?php $page_19_text_4 = explode("\n", $page_19_text_4); ?>
                    @foreach ($page_19_text_4 as $page_19_text_4)
                    <li style="margin-bottom: 5px;font-weight: 400;">{{ $page_19_text_4 }}</li>
                    {{-- <li style="margin-bottom: 5px;font-weight: 400;">Search Engine Optimization</li>
                    <li style="margin-bottom: 5px;font-weight: 400;">Lead Capture Tools</li>
                    <li style="margin-bottom: 5px;font-weight: 400;">Mobile Optimization</li> --}}
                    @endforeach
                </ul>
                <p style="font-weight: 300;">{{ $page_19_text_5 }}</p>
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page-20 page-10-1">
        <div class="row-1"
            style="background-image: url('{{ $page_20_img_1 }}');height:33%;position:absolute;top:0;background-size: cover;">
            <h1></h1>
        </div>
        <div class="row-2"
            style="background-image: url('{{ $page_20_img_2 }}');height:34%;position:absolute;top:33%;background-size: cover;">
            <h1></h1>
        </div>
        <div class="row-3"
            style="background-image: url('{{ $page_20_img_3 }}');height:33%;position:absolute;bottom:0;background-size: cover;">
            <h1></h1>
        </div>
        <div class="absolute">
            <h1 style="z-index: 100;background-image: url('images/home-selling/Asset 16-3.png');background-position: right;background-repeat: no-repeat;text-align:right;    color: #fff;padding-bottom:15px;
    font-size: 28px;">{{ $page_20_text_1 }}</h1>
            <h1 style="margin-top:320px;z-index: 100;background-image: url('images/home-selling/Asset 16-3.png');background-position: right;background-repeat: no-repeat;text-align:right;    color: #fff;padding-bottom:15px;
    font-size: 28px;">{{ $page_20_text_2 }}</h1>
            <h1 style="margin-top:320px;z-index: 100;background-image: url('images/home-selling/Asset 16-3.png');background-position: right;background-repeat: no-repeat;text-align:right;    color: #fff;padding-bottom:15px;
    font-size: 28px;">{{ $page_20_text_3 }}</h1>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-21 page-10-2">
        <div class="heading">
            <h2 class="subtitle-top" style="font-weight: 300;font-size:70px;margin-left:380px;margin-bottom:50px;">Our
            </h2>
            <h1 class="title" style="padding-left: 50px;font-size: 190px;color:#C6A467;font-weight:300;">Online
            </h1>
            <h1 class="subtitle-bottom" style="font-weight: 300;font-size: 75px;margin-left:220px;margin-bottom:-10px;">
                Presence</h1>
        </div>
        <div class="content" style="padding-left: 50px;">
            <h1 style="font-size: 35px;color: #C5A367;font-weight:900;">{{ $page_21_text_1 }}</h1>

            <p style="font-weight: 300;padding-right:50px;">{{ $page_21_text_2 }}</p>

            <h1 style="font-size: 35px;color: #C5A367;font-weight:900;">
                {{ $page_21_text_3 }}</h1>

            <p style="font-weight: 300;padding-right:50px;">{{ $page_21_text_4 }}</p>

            <h1 style="font-size: 35px;color: #C5A367;font-weight:900;">{{ $page_21_text_5 }}</h1>

            <p style="font-weight: 300;padding-right:50px;">{{ $page_21_text_6 }}</p>

        </div>
    </div>

    <div class="page_break"></div>


    <div class="page-22 page-11-1">
        <div class="section1"
            style="background-image: url('{{ $page_22_img_1 }}');height:50%;position:absolute;top:-25px;background-size: contain;background-position: center;background-repeat: no-repeat;">
            <h1></h1>
        </div>
        <div class="section2"
            style="background-color: #C6A467;z-index:100;position:absolute;top:30%;margin:auto 60px;padding:30px;">
            <h1></h1>
            <div class="column-1" style="max-width: 65%; padding-top:65px;">
                <img src="{{ $page_22_img_2 }}" alt="" width="362px" height="245px">
                <div class="introducing"
                    style="background: #000;height: 258px;padding: 6px;width:90%; margin-top:-40px;">
                    <div class="inner" style="background: #262626;height:245px;padding:6px;">
                        <h2 style="text-align: center;font-weight: 400;font-size: 12px;margin:0;color:white;">
                            INTRODUCING</h2>
                        <h2
                            style="text-align: center;font-weight: 400;font-size: 12px;margin:0;color:white;border-bottom:1px solid white;">
                            {{ $page_22_text_1 }}</h2>
                        <p style="color: #fff;font-size: 12px;">{{ $page_22_text_2 }}</p>
                        <h2 style="text-align: center;color: #fff;font-size: 22px;font-weight: 300;">
                            {{ $page_22_text_3 }}</h2>
                    </div>
                </div>
            </div>
            <img src="{{ $page_22_img_7 }}" alt="" style="z-index: 1000;" width="600px" height="230px">
        </div>
        <div class="column-2" style="position:absolute;width:210px;max-width:210px;top:32%; left:60%;z-index:100;">
            <div>
                <img src="{{ $page_22_img_3 }}" alt="" width="210px" height="130px">
            </div>
            <div>
                <img src="{{ $page_22_img_4 }}" alt="" width="210px" height="130px">
            </div>
            <div>
                <img src="{{ $page_22_img_5 }}" alt="" width="210px" height="130px">
            </div>
            <div>
                <img src="{{ $page_22_img_6 }}" alt="" width="210px" height="130px">
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-23">
        <div class="heading">
            <h2 class="subtitle-top"
                style="font-weight: 300;font-size:70px;margin-left:350px;margin-top:50px;margin-bottom:30px;">Your
            </h2>
            <h1 class="title" style="padding-left: 50px;font-size: 190px;color:#C6A467;font-weight:300;">Home
            </h1>
            <h1 class="subtitle-bottom" style="font-weight: 300;font-size: 75px;margin-left:220px;margin-bottom:-10px;">
                In Print</h1>
        </div>
        <div class="content" style="padding-left: 50px;padding-top:50px;">
            <h1 style="font-size: 35px;color: #C5A367;font-weight:900;">{{$page_23_text_1}}</h1>

            <p style="font-weight: 300;padding-right:50px;">{{$page_23_text_2}}</p>

            <h1 style="font-size: 35px;color: #C5A367;font-weight:900;">{{$page_23_text_3}}</h1>

            <p style="font-weight: 300;padding-right:50px;">{{$page_23_text_4}}</p>

            <h1 style="font-size: 35px;color: #C5A367;font-weight:900;">{{$page_23_text_5}}</h1>

            <p style="font-weight: 300;padding-right:50px;">{{$page_23_text_6}}</p>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-24 page-background" style="background-image:url('{{ $page_24_img_1 }}');">
        <div class="container">
            <div class="absolute" style="top:52%;left:30px;">
                <h2 class="font-thin white mb-40" style="margin-left:10px;margin-bottom:50px;font-size:80px;">Social
                </h2>
                <h1 class="font-thin gold" style="font-size:170px;margin-bottom:-20px;">Media</h1>
                <h2 class="font-thin white mb-40" style="margin-left:270px;font-size:50px;">Influence</h2>
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div
        style="top:0;bottom:0;right:630px;position:absolute;background-image: url('{{$page_25_img_1}}');background-size: cover;background-position:bottom right;background-repeat: no-repeat;height:100%">
        <h1></h1>
    </div>
    <div class="page page-12 page-12-2"
        style="top:0;left:-500px;bottom:0;right:0;position:absolute;background-size: cover;background-position: -600px -5px;background-repeat: no-repeat;">
        <div class="content" style="margin-left:280px;margin-top:50px;">
            <p style="font-weight: 300;margin-left:450px;width:350px;">{{ $page_25_text_1 }}</p>
            <br>
            {{-- <p style="font-weight: 300;margin-left:450px;width:350px;">It has increasingly become one of our greatest
                tools to
                market not only our exclusive listings but also our closings, referrals, and testimonials to gain an
                engaged following.</p> --}}

            <h1 style="font-size: 35px;color: #C5A367;font-weight:900;margin-bottom:-5px;margin-left:450px;">
                Luxe Properties Stats</h1>

            <ul style="list-style-image: url('images/home-selling/check-large.png');">
                {{-- <?php //$page_12_2_text_4_array = explode("\n", $page_12_2_text_4); ?>
                @foreach ($page_12_2_text_4_array as $string_array) --}}
                <li style="margin-bottom: 5px;font-weight: 300;margin-left:450px;">30,000+ followers across Twitter,
                    LinkedIn, and Instagram</li>
                <li style="margin-bottom: 5px;font-weight: 300;margin-left:450px;">9,000+ Views on Youtube channel</li>
                <li style="margin-bottom: 5px;font-weight: 300;margin-left:450px;">3,000+ Likes on Facebook; 10,000+
                    users reached</li>
                {{-- @endforeach --}}
            </ul>

            <p style="font-weight: 300;margin-left:450px;">With a steadily growing following on all our social media
                channels, Facebook Sponsored Ads add another dimension to our reach. Our Facebook Ads are highly
                targeted to attract the most qualified buyers and interested parties.</p>
            <div style="margin-left:450px;margin-top:30px;">
                <img src="images/home-selling/social1.jpg" alt="" style="width: 35px;margin-right: 10px;">
                <p style="font-weight: 300;margin-top:-40px;margin-left:50px;margin-bottom:0px;">{{ $page_25_text_2 }}
                </p>
            </div>
            <div style="margin-left:450px;">
                <img src="images/home-selling/social2.jpg" alt="" style="width: 35px;margin-right: 10px;">
                <p style="font-weight: 300;margin-top:-40px;margin-left:50px;margin-bottom:0px;">{{ $page_25_text_3 }}
                </p>
            </div>
            <div style="margin-left:450px;">
                <img src="images/home-selling/social3.jpg" alt="" style="width: 35px;margin-right: 10px;">
                <p style="font-weight: 300;margin-top:-40px;margin-left:50px;margin-bottom:0px;">{{ $page_25_text_4 }}
                </p>
            </div>
            <div style="margin-left:450px;">
                <img src="images/home-selling/social4.jpg" alt="" style="width: 35px;margin-right: 10px;">
                <p style="font-weight: 300;margin-top:-40px;margin-left:50px;margin-bottom:0px;">{{ $page_25_text_5 }}
                </p>
            </div>
            <div style="margin-left:450px;">
                <img src="images/home-selling/social5.jpg" alt="" style="width: 35px;margin-right: 10px;">
                <p style="font-weight: 300;margin-top:-40px;margin-left:50px;margin-bottom:0px;">{{ $page_25_text_6 }}
                </p>
            </div>
            <div style="margin-left:450px;">
                <img src="images/home-selling/social6.jpg" alt="" style="width: 35px;margin-right: 10px;">
                <p style="font-weight: 300;margin-top:-40px;margin-left:50px;margin-bottom:0px;">
                    {{ $page_25_text_7 }}
                </p>
            </div>
            <div style="margin-left:450px;">
                <img src="images/home-selling/social7.jpg" alt="" style="width: 35px;margin-right: 10px;">
                <p style="font-weight: 300;margin-top:-40px;margin-left:50px;margin-bottom:0px;">
                    {{ $page_25_text_8 }}
                </p>
            </div>
            <div style="margin-left:450px;">
                <img src="images/home-selling/social8.jpg" alt="" style="width: 35px;margin-right: 10px;">
                <p style="font-weight: 300;margin-top:-40px;margin-left:50px;margin-bottom:0px;">
                    {{ $page_25_text_9 }}</p>
            </div>
        </div>
        <div class="page-number" style="background-image: url('images/single-property/24.png');bottom:1%;">
            <div class="text" style="margin-top: 30px;margin-right:150px;">
                <h3 class="font-thin gold">THE</h3>
                <h2 class="font-thin">HOME</h2>
                <h2 class="font-thin gold">SELLING</h2>
                <h4 class="font-thin">GUIDE</h4>
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-26 page-background" style="background-image:url('{{ $page_26_img_1 }}');">
        <div class="container">
            <div class="absolute" style="top:30%;left:30px;">
                <h2 class="font-thin white mb-40" style="margin-left:10px;margin-bottom:50px;font-size:80px;">Strategic
                </h2>
                <h1 class="font-thin gold" style="font-size:170px;margin-bottom:-20px;">Property</h1>
                <h2 class="font-thin white mb-40" style="margin-left:320px;font-size:50px;">Tours</h2>
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div
        style="top:0;bottom:0;right:630px;position:absolute;background-image: url('{{$page_26_img_1}}');background-size: cover;background-position:bottom right;background-repeat: no-repeat;height:100%">
        <h1></h1>
    </div>
    <div class="page page-27"
        style="position:absolute;background-size: cover;background-position: -700px -5px;background-repeat: no-repeat;">
        <div class="container">
            <div class="content" style="margin-top: 50px;margin-left:200px;margin-right:150px;">
                <h3 style="color: #C5A367;font-size: 35px;font-weight: 900;">{{ $page_27_text_1 }}</h3>
                <p class="font-thin">{{ $page_27_text_3 }}</p>
                <ul style="list-style-image: url('images/home-selling/check-large.png');">
                    <li class="font-thin">Invite prequalified brokers and agents specializing in neighborhood</li>
                    <li class="font-thin">Coordinate with other firms to schedule in sequence for maximum exposure in
                        neighborhood</li>
                    <li class="font-thin">Coordinate with title firms and lenders to expand potential reach</li>
                </ul>
                <h3 style="color: #C5A367;font-size: 35px;font-weight: 900;">{{ $page_27_text_2 }}</h3>
                <p class="font-thin">{{ $page_27_text_5 }}</p>
                <ul style="list-style-image: url('images/home-selling/check-large.png');">
                    <li class="font-thin">Personalized email marketing campaigns to contact database</li>
                    <li class="font-thin">Posting dates and times on the MLS, Zillow, Trulia, Realtor.com and other
                        syndication portals
                    </li>
                    <li class="font-thin">Creative out of the box methods to attract potential buyers such as food
                        trucks, open house
                        flags and balloons</li>
                </ul>
            </div>

            <div class="page-number" style="background-image: url('images/single-property/26.png');bottom:1%;">
                <div class="text" style="margin-top: 30px;margin-right:150px;">
                    <h3 class="font-thin gold">THE</h3>
                    <h2 class="font-thin">HOME</h2>
                    <h2 class="font-thin gold">SELLING</h2>
                    <h4 class="font-thin">GUIDE</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-28 page-background" style="background-image:url('{{ $page_28_img_1 }}');">
        <div class="container">
            <div class="absolute" style="top:30%;left:30px;">
                <h2 class="font-thin white mb-40" style="margin-left:10px;margin-bottom:50px;font-size:80px;">Recent
                </h2>
                <h1 class="font-thin gold" style="font-size:170px;margin-bottom:-20px;">Sales</h1>
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div
        style="top:0;bottom:0;right:630px;position:absolute;background-image: url('{{$page_28_img_1}}');background-size: cover;background-position:bottom right;background-repeat: no-repeat;height:100%">
        <h1></h1>
    </div>
    <div class="page page-29"
        style="position:absolute;background-size: cover;background-position: -700px -5px;background-repeat: no-repeat;">
        <div class="content" style="margin-top:120px;">
            <div class="section"
                style="margin-left:120px;background-color: #C5A367;padding-top:20px;padding-bottom:35px;border-radius:100px;margin-bottom:20px;">
                <div style="padding-top:0px;padding-bottom:20px;">
                    <div class="circle" style="float:left;border-radius: 600%;margin-bottom:30px;">
                        <div class="inner-section" style="border-radius: 550%;">
                            <img src="{{ $page_29_img_1 }}" alt="" width="166" height="166"
                                style="border-radius: 500%;margin-left:20px;">
                        </div>
                    </div>
                </div>
                <div class="circle-text" style="margin-left: 30px;">
                    <p style="color:white;font-size: 26px;">{{ $page_29_text_1 }}</p>
                    <p style="font-size:14px;">{{ $page_29_text_2 }}</p>
                    <p style="font-size:14px;">{{ $page_29_text_3 }}</p>
                    <p style="font-size:14px;">{{ $page_29_text_4 }}</p>
                    <p style="font-size:14px;">{{ $page_29_text_5 }}</p>
                    <p style="font-size:14px;">{{ $page_29_text_6 }}</p>
                </div>
            </div>
            <div class="section"
                style="margin-top:30px;margin-left:120px;background-color: #C5A367;padding-top:20px;padding-bottom:35px;border-radius:100px;margin-bottom:20px;">
                <div style="padding-top:0px;padding-bottom:20px;">
                    <div class="circle" style="float:left;border-radius: 600%;margin-bottom:30px;">
                        <div class="inner-section" style="border-radius: 550%;">
                            <img src="{{ $page_29_img_2 }}" alt="" width="166" height="166"
                                style="border-radius: 500%;margin-left:20px;">
                        </div>
                    </div>
                </div>
                <div class="circle-text" style="margin-left: 30px;">
                    <p style="color:white;font-size: 26px;">{{ $page_29_text_7 }}</p>
                    <p style="font-size:14px;">{{ $page_29_text_8 }}</p>
                    <p style="font-size:14px;">{{ $page_29_text_9 }}</p>
                    <p style="font-size:14px;">{{ $page_29_text_10 }}</p>
                    <p style="font-size:14px;">{{ $page_29_text_11 }}</p>
                    <p style="font-size:14px;">{{ $page_29_text_12 }}</p>
                </div>
            </div>
            <div class="section"
                style="margin-top:30px;margin-left:120px;background-color: #C5A367;padding-top:20px;padding-bottom:35px;border-radius:100px;">
                <div style="padding-top:0px;padding-bottom:20px;">
                    <div class="circle" style="float:left;border-radius: 600%;margin-bottom:30px;">
                        <div class="inner-section" style="border-radius: 550%;">
                            <img src="{{ $page_29_img_3 }}" alt="" width="166" height="166"
                                style="border-radius: 500%;margin-left:20px;">
                        </div>
                    </div>
                </div>
                <div class="circle-text" style="margin-left: 30px;">
                    <p style="color:white;font-size: 26px;">{{ $page_29_text_13 }}</p>
                    <p style="font-size:14px;">{{ $page_29_text_14 }}</p>
                    <p style="font-size:14px;">{{ $page_29_text_15 }}</p>
                    <p style="font-size:14px;">{{ $page_29_text_16 }}</p>
                    <p style="font-size:14px;">{{ $page_29_text_17 }}</p>
                    <p style="font-size:14px;">{{ $page_29_text_18 }}</p>
                </div>
            </div>
            <div class="section"
                style="margin-top:30px;margin-left:120px;background-color: #C5A367;padding-top:20px;padding-bottom:35px;border-radius:100px;margin-bottom:20px;">
                <div style="padding-top:0px;padding-bottom:20px;">
                    <div class="circle" style="float:left;border-radius: 600%;margin-bottom:30px;">
                        <div class="inner-section" style="border-radius: 550%;">
                            <img src="{{ $page_29_img_4 }}" alt="" width="166" height="166"
                                style="border-radius: 500%;margin-left:20px;">
                        </div>
                    </div>
                </div>
                <div class="circle-text" style="margin-left: 30px;">
                    <p style="color:white;font-size: 26px;">{{ $page_29_text_19 }}</p>
                    <p style="font-size:14px;">{{ $page_29_text_20 }}</p>
                    <p style="font-size:14px;">{{ $page_29_text_21 }}</p>
                    <p style="font-size:14px;">{{ $page_29_text_22 }}</p>
                    <p style="font-size:14px;">{{ $page_29_text_23 }}</p>
                    <p style="font-size:14px;">{{ $page_29_text_24 }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-30 page-background" style="background-image:url('{{ $page_30_img_1 }}');">
        <div class="container">
            <div class="absolute" style="top:30%;left:30px;">
                <h2 class="font-thin white mb-40" style="margin-left:10px;margin-bottom:50px;font-size:80px;">Recent
                </h2>
                <h1 class="font-thin gold" style="font-size:170px;margin-bottom:-20px;">Listings</h1>
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div
        style="top:0;bottom:0;right:630px;position:absolute;background-image: url('{{$page_30_img_1}}');background-size: cover;background-position:bottom right;background-repeat: no-repeat;height:100%">
        <h1></h1>
    </div>
    <div class="page page-31"
        style="position:absolute;background-size: cover;background-position: -700px -5px;background-repeat: no-repeat;">
        <div class="content" style="margin-top:70px;">
            <div class="section" style="margin-left:170px;">
                <div style="padding-top:0px;">
                    <div class="circle"
                        style="background-color: #C5A367;padding:10px;border-radius: 600%;margin-top:-20px;width:175px;">
                        <div class="inner-section" style="background-color: white;padding:5px;border-radius: 550%;">
                            <img src="{{ $page_31_img_1 }}" alt="" width="166" height="166"
                                style="border-radius: 500%;">
                        </div>
                    </div>
                </div>
                <div class="circle-text" style="margin-left:220px;margin-top:-250px;">
                    <p style="color: #C5A367;font-size: 26px;">{{ $page_31_text_1 }}</p>
                    <p style="">PRICE:{{ $page_31_text_2 }}</p>
                    <p style="">BEDS/BATHS:{{ $page_31_text_3 }}</p>
                    <p style="">LIVING AREA:{{ $page_31_text_4 }}</p>
                    <p style="">LOT SIZE:{{ $page_31_text_5 }}</p>
                </div>
            </div>
            <div class="section" style="margin-top:100px;margin-left:120px;">
                <div style="padding-top:0px;">
                    <div class="circle"
                        style="background-color: black;padding:10px;border-radius: 600%;margin-top:-20px;width:175px;">
                        <div class="inner-section" style="background-color: white;padding:5px;border-radius: 550%;">
                            <img src="{{ $page_31_img_2 }}" alt="" width="166" height="166"
                                style="border-radius: 500%;">
                        </div>
                    </div>
                </div>
                <div class="circle-text" style="margin-left:220px;margin-top:-250px;">
                    <p style="color: #C5A367;font-size: 26px;">{{ $page_31_text_6 }}</p>
                    <p style="">PRICE:{{ $page_31_text_7 }}</p>
                    <p style="">BEDS/BATHS:{{ $page_31_text_8 }}</p>
                    <p style="">LIVING AREA:{{ $page_31_text_9 }}</p>
                    <p style="">LOT SIZE:{{ $page_31_text_10 }}</p>
                </div>
            </div>
            <div class="section" style="margin-top:100px;margin-left:170px;">
                <div style="padding-top:0px;">
                    <div class="circle"
                        style="background-color: #C5A367;padding:10px;border-radius: 600%;margin-top:-20px;width:175px;">
                        <div class="inner-section" style="background-color: white;padding:5px;border-radius: 550%;">
                            <img src="{{ $page_31_img_3 }}" alt="" width="166" height="166"
                                style="border-radius: 500%;">
                        </div>
                    </div>
                </div>
                <div class="circle-text" style="margin-left:220px;margin-top:-250px;">
                    <p style="color: #C5A367;font-size: 26px;">{{ $page_31_text_11 }}</p>
                    <p style="">PRICE:{{ $page_31_text_12 }}</p>
                    <p style="">BEDS/BATHS:{{ $page_31_text_13 }}</p>
                    <p style="">LIVING AREA:{{ $page_31_text_14 }}</p>
                    <p style="">LOT SIZE:{{ $page_31_text_15 }}</p>
                </div>
            </div>
            <div class="section" style="margin-top:100px;margin-left:120px;">
                <div style="padding-top:0px;">
                    <div class="circle"
                        style="background-color: black;padding:10px;border-radius: 600%;margin-top:-20px;width:175px;">
                        <div class="inner-section" style="background-color: white;padding:5px;border-radius: 550%;">
                            <img src="{{ $page_31_img_4 }}" alt="" width="166" height="166"
                                style="border-radius: 500%;">
                        </div>
                    </div>
                </div>
                <div class="circle-text" style="margin-left:220px;margin-top:-250px;">
                    <p style="color: #C5A367;font-size: 26px;">{{ $page_31_text_16 }}</p>
                    <p style="">PRICE:{{ $page_31_text_17 }}</p>
                    <p style="">BEDS/BATHS:{{ $page_31_text_18 }}</p>
                    <p style="">LIVING AREA:{{ $page_31_text_19 }}</p>
                    <p style="">LOT SIZE:{{ $page_31_text_20 }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-32 page-background" style="background-image:url('{{ $page_32_img_1 }}');">
        <div class="container">
            <div class="absolute" style="top:30%;left:30px;">
                <h2 class="font-thin white mb-50" style="margin-left:10px;margin-bottom:50px;font-size:80px;">Happy
                </h2>
                <h1 class="font-thin gold" style="font-size:170px;margin-bottom:-20px;">Clients</h1>
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div
        style="top:0;bottom:0;right:630px;position:absolute;background-image: url('{{$page_32_img_1}}');background-size: cover;background-position:bottom right;background-repeat: no-repeat;height:100%">
        <h1></h1>
    </div>
    <div class="page page-33"
        style="position:absolute;background-size: cover;background-position: -600px -5px;background-repeat: no-repeat;">
        <div class="content" style="">
            <div class="section" style="border:1px solid gray;height:230px;min-height:230px;margin:50px 75px;">
                <img src="{{ $page_33_img_1 }}" alt="" style="float: left;margin-bottom:-30px;" width="230px"
                    height="230px">
                <div class="text" style="position: absolute;padding:30px;">
                    <p style="font-weight: 300;font-size:16px;">{{ $page_33_text_1 }}</p>
                    <p style="font-size: 22px;color: #C5A367;margin-left:25px;">{{ $page_33_text_3 }}</p>
                </div>
            </div>
            <img src="images/home-selling/divider-1.png" alt="" height="230px"
                style="position: absolute;z-index:100;left:190px;top:50px;">

            <div class="section" style="border:1px solid gray;height:230px;min-height:230px;margin:50px 75px;">
                <img src="{{ $page_33_img_2 }}" alt="" style="float: left;margin-bottom:-30px;" width="230px"
                    height="230px">
                <div class="text" style="position: absolute;padding:30px;">
                    <p style="font-weight: 300;font-size:16px;">{{ $page_33_text_2 }}</p>
                    <p style="font-size: 22px;color: #C5A367;margin-left:25px;"> {{ $page_33_text_4 }}</p>
                </div>
            </div>
            <img src="images/home-selling/divider-1.png" alt="" height="230px"
                style="position: absolute;z-index:100;left:190px;top:383px;">

            <div class="section" style="border:1px solid gray;height:230px;min-height:230px;margin:50px 75px;">
                <img src="{{ $page_33_img_3 }}" alt="" style="float: left;margin-bottom:-30px;" width="230px"
                    height="230px">
                <div class="text" style="position: absolute;padding:30px;">
                    <p style="font-weight: 300;font-size:16px;">{{ $page_33_text_5 }}</p>
                    <p style="font-size: 22px;color: #C5A367;margin-left:25px;">{{ $page_33_text_6 }}</p>
                </div>
            </div>
            <img src="images/home-selling/divider-1.png" alt="" height="230px"
                style="position: absolute;z-index:100;left:190px;top:715px;">
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-34 page-background" style="background-image:url('{{ $page_34_img_1 }}');">
        <div class="container">
            <div class="absolute" style="top:30%;left:30px;">
                <h2 class="font-thin white mb-50" style="margin-left:300px;margin-bottom:20px;font-size:80px;">LUXE
                </h2>
                <h1 class="font-thin gold" style="font-size:140px;margin-bottom:-20px;">Testimonials</h1>
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page-35"
        style="background-image: url('images/single-property/page-35.jpg');height:100%;position:absolute;top:0;background-size: cover;background-position: center;">
        <h1></h1>
    </div>

    <div class="page_break"></div>

    <div class="page-36">
        <div class="page-bottom text-center">
            <img src="images/last.png" alt="">
        </div>
    </div>
</body>

</html>