<!DOCTYPE html>
<html>

<head>
    <title>Laravel 8 Generate PDF From View</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Lato:300,400,700');
        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@900&display=swap');

        * {
            font-family: 'Lato';
        }

        @page {
            padding: 0px;
            margin: 0px;
        }

        body {
            padding: 0px;
            margin: 0px;
        }

        .page {
            padding: 40px;
        }

        .page-1 .text-wrap {
            margin-top: 300px;
        }

        .page-1 h1 {
            font-family: 'Lato';
        }

        .page-1 .title {
            letter-spacing: 5px;
            font-size: 170px;
            color: #C5A467;
            line-height: 130px;
            margin: 0;
            font-weight: 300;
        }

        .page-1 .title-1 {
            margin-bottom: -30px;
        }

        .page-1 .subtitle-top {
            font-size: 86px;
            line-height: 66px;
            font-weight: 300;
            margin-bottom: -10px;
        }

        .page-1 .subtitle-bottom {
            font-size: 95px;
            line-height: 125px;
            letter-spacing: 70px;
            font-weight: 300;
            margin-top: -60px;
        }

        .page-1 .page-bottom {
            text-align: center;
        }

        .page-bottom {
            position: absolute;
            bottom: 0px;
            width: 100%;
        }

        .page_break {
            page-break-before: always;
        }

        .page-2-1 .luxe-pro-info {
            background-image: url("{{ $page_2_1_img_1 }}");
            background-repeat: no-repeat;
            background-size: cover;
            height: 100%;
            position: absolute;
            bottom: 0px;
            width: 100%;
        }

        .page-2-1 .luxe-pro-info .text {
            position: absolute;
            bottom: 25%;
        }

        .page-2-1 .luxe-pro-info h1 {
            font-size: 170px;
            line-height: 160px;
            font-family: 'Lato';
            font-weight: 300;
            margin: -10px 0;
            color: #C5A367;
        }

        .page-2-1 .luxe-pro-info h2 {
            font-size: 72px;
            line-height: 67px;
            font-family: 'Lato';
            font-weight: 900;
            padding-left: 13px;
            letter-spacing: -4px;
            color: #fff;
            margin-top: -15px;
            margin-bottom: 2px;
        }

        .page-2-2 {
            background-image: url("images/home-selling/high-res/P2.png");
            background-size: contain;
            background-repeat: no-repeat;
        }

        .page-2-2 .first-part {
            height: 90%;
        }

        .page-2-2 .first-part .subtitle-top,
        .page-3-2 .heading .subtitle-top {
            font-size: 40px;
            line-height: 35px;
            font-family: 'Lato';
            font-weight: 300;
            margin-bottom: -40px;
        }

        .page-2-2 .first-part .title,
        .page-3-2 .heading .title {
            font-size: 100px;
            line-height: 50px;
            font-family: 'Lato';
            font-weight: 300;
            color: #C6A467;
        }

        .page-2-2 .first-part .subtitle-bottom {
            font-size: 111px;
            line-height: 50px;
            font-family: 'Lato';
            font-weight: 300;
            color: #535353;
            margin-top: -40px;
        }

        .page-2-2 .first-part .content p {
            width: 420px;
            margin: 0 auto;
            font-size: 18px;
            font-weight: 300;
            color: #222;
            line-height: 1.05;
            padding-left: 39px;
            padding-top: 35px;
        }

        .second-part {
            height: 17%;
            position: absolute;
            bottom: 0px;
            background-repeat: no-repeat;
            background-size: auto;
            background-position: right;
            text-align: right;
        }

        .second-part img {
            height: 280px;
            margin-top: -200px;
        }

        .second-part .text {
            z-index: 100;
            margin-top: 50px;
            margin-right: 100px;
        }

        .first-title {
            color: #C5A367;
            font-size: 30px !important;
            line-height: 0px !important;
            font-weight: 300 !important;
            letter-spacing: 3px;
        }

        .second-title {
            color: #000 !important;
            font-weight: 300 !important;
            font-size: 38px;
            line-height: 25px;
        }

        .third-title {
            font-weight: 300 !important;
            font-size: 38px;
            line-height: 25px;
            color: #C5A367;
            letter-spacing: -1px;
        }

        .fourth-title {
            color: #000;
            font-size: 20px;
            font-weight: 300;
            letter-spacing: 7px;
            margin-right: -4px !important;
            line-height: 0px !important;
        }

        .page-3-1 .luxe-pro-info {
            background-image: url("{{ $page_3_1_img_1 }}");
            background-size: cover;
            height: 100%;
            position: absolute;
            bottom: 0px;
            width: 100%;
        }

        .page-3-1 .luxe-pro-info .text {
            position: absolute;
            bottom: 25%;
            left: 80px;
        }

        .page-3-1 .luxe-pro-info h2 {
            line-height: 20px;
            padding-left: 175px;
            font-size: 90px;
            color: #fff;
            position: absolute;
            z-index: 100;
            margin: 0 !important;
            font-weight: 300;
        }

        .page-3-1 .luxe-pro-info h1 {
            line-height: 190px;
            font-size: 140px;
            text-align: center;
            font-weight: 300;
            margin: -90px auto auto auto;
            color: #C5A367;
            position: absolute;
            z-index: 100;
            letter-spacing: -0.1em;
        }

        .page-3-2 .heading .subtitle-bottom {
            margin-top: 0;
            font-size: 60px;
            line-height: 56px;
            font-weight: 300;
            margin-bottom: 50px;
        }

        .page-3-2 .content .objective {
            position: absolute;
        }

        .page-3-2 .content .objective-2 {
            top: 250px;
        }

        .page-3-2 .content .objective-3 {
            top: 500px;
        }

        .page-3-2 .content .objective img {
            position: absolute;
            width: 200px;
        }

        .page-3-2 .content .objective .objective-image-2 img {
            margin-top: 400px !important;
        }

        .page-3-2 .content .objective .ojective-text {
            position: absolute;
            left: 260px;
        }

        .page-3-2 .content .objective .ojective-text h2 {
            max-width: 300px;
            font-size: 32px;
            font-weight: 900;
            color: #C5A367;
            position: absolute;
            top: -25px;
            line-height: 25px;
        }

        .page-3-2 .content .objective .ojective-text p {
            font-weight: 300;
            font-size: 14px;
            color: #000;
            line-height: 20px;
            position: absolute;
            top: 50px
        }

        .page-4-1 .luxe-pro-info {
            background-image: url("{{$page_4_1_img_1}}");
            background-size: cover;
            height: 100%;
            position: absolute;
            bottom: 0px;
            width: 100%;
        }

        .page-4-1 .luxe-pro-info .text {
            z-index: 100;
            position: absolute;
            bottom: 55%;
            left: 80px;
        }

        .page-4-1 .luxe-pro-info h2 {
            line-height: 18px;
            padding-left: 165px;
            font-size: 80px;
            color: #fff;
            z-index: 100;
            position: absolute;
            margin: 0 !important;
            margin-bottom: -30px !important;
            font-weight: 300;
        }

        .page-4-1 .luxe-pro-info h1 {
            line-height: 190px;
            font-size: 180px;
            text-align: center;
            font-weight: 300;
            margin: -90px auto;
            margin-bottom: -120px;
            color: #C5A367;
            position: absolute;
            z-index: 100;
            letter-spacing: -0.1em;
        }

        .page-4-1 .luxe-pro-info .subtitle {
            line-height: 45px;
            padding-left: 135px;
            font-size: 80px;
            color: #fff;
            z-index: 100;
            margin-top: 145px !important;
            font-weight: 300;
        }

        .page-4-1 img {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: 1;
        }

        .page-4-2 .luxe-pro-info {
            z-index: 100;
        }

        .page-4-2 .luxe-pro-info .spacer {
            margin-top: 150px;
        }

        .page-4-2 .luxe-pro-info .content {
            background-image: url("images/home-selling/high-res/Asset 9.png");
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

        .page-5-1 {
            background-image: url("{{$page_5_1_img_1}}");
            background-size: cover;
            height: 100%;
            position: absolute;
            bottom: 0px;
            width: 100%;
        }

        .page-5-1 .luxe-pro-info {
            height: 100%;
            position: absolute;
            bottom: 50%;
            width: 100%;
            z-index: 1000;
        }

        .page-5-1 .text {
            z-index: 100;
            position: absolute;
            bottom: 50%;
            left: 80px;
        }

        .page-5-1 .text h1 {
            font-size: 165px;
            color: #C5A367;
            font-weight: 300;
            letter-spacing: -12px;
            line-height: 140px;
            margin-bottom: -115px;
        }

        .page-5-1 .text h2 {
            font-size: 60px;
            color: white;
            font-weight: 300;
            margin-left: 280px;
        }

        .page-5-2 .bg-image {
            width: 140%;
            position: absolute;
            left: -800px;
            top: 0;
            z-index: 1;
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
            margin-top: -100px;
            margin-bottom: -100px;
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

        .page-6-1 .luxe-pro-info {
            background-image: url("{{$page_6_1_img_1}}");
            background-size: cover;
            height: 100%;
            position: absolute;
            bottom: 0px;
            width: 100%;
        }

        .page-6-1 .text {
            z-index: 100;
            position: absolute;
            bottom: 53%;
            left: 80px;
        }

        .page-6-1 .text h1 {
            font-size: 165px;
            color: #C5A367;
            font-weight: 300;
            letter-spacing: -12px;
            line-height: 140px;
            margin-bottom: -115px;
        }

        .page-6-1 .text h2 {
            font-size: 60px;
            color: white;
            font-weight: 300;
            margin-left: 280px;
        }

        .page-6-2 .bg-image {
            width: 140%;
            position: absolute;
            left: -800px;
            top: 0;
            z-index: 1;
        }

        .page-6-2 ul {
            list-style-image: url('images/home-selling/check-large.png');
        }

        .page-6-2 li {
            margin-bottom: 2px;
            font-weight: 300;
        }

        .page-12-1 .luxe-pro-info {
            background-image: url("{{$page_12_img_1}}");
            background-size: cover;
            height: 100%;
            position: absolute;
            bottom: 0px;
            width: 100%;
        }

        .page-12-1 .luxe-pro-info .text,
        .page-13-1 .luxe-pro-info .text {
            z-index: 100;
            position: absolute;
            bottom: 30%;
            left: 90px;
        }

        .page-12-1 .luxe-pro-info h2,
        .page-13-1 .luxe-pro-info h2 {
            line-height: 18px;
            font-size: 90px;
            color: #fff;
            z-index: 100;
            position: absolute;
            margin: 0 !important;
            font-weight: 300;
        }

        .page-12-1 .luxe-pro-info h1,
        .page-13-1 .luxe-pro-info h1 {
            line-height: 190px;
            font-size: 140px;
            text-align: center;
            font-weight: 300;
            margin: -70px auto;
            color: #C5A367;
            position: absolute;
            z-index: 100;
            letter-spacing: -0.1em;
        }

        .page-12-1 .luxe-pro-info .subtitle,
        .page-13-1 .luxe-pro-info .subtitle {
            line-height: 45px;
            padding-left: 175px;
            font-size: 45px;
            color: #fff;
            z-index: 100;
            margin-top: 125px !important;
            font-weight: 300;
        }

        .page-13-1 {
            background-image: url("{{$page_13_img_1}}");
            background-size: cover;
            height: 100%;
            position: absolute;
            bottom: 0px;
            width: 100%;
        }

        /* .page-13-2 .second-part {
            height: 17%;
            position: absolute;
            bottom: 0px;
            background-repeat: no-repeat;
            background-size: auto;
            background-position: right;
            text-align: right;
        } */

        .page-14-1 {
            background-image: url("{{$page_14_img_1}}");
            background-size: cover;
            height: 100%;
            position: absolute;
            bottom: 0px;
            width: 100%;
        }

        .page-14-2 {
            background-image: url("images/home-selling/high-res/Asset 22.png");
            background-size: contain;
            height: 100%;
            position: absolute;
            top: 20px;
            left: 20px;
            right: 20px;
            width: 100%;
            background-repeat: no-repeat;
        }

        .page-15-1 {
            background-image: url("{{$page_15_img_1}}");
            background-size: cover;
            height: 100%;
            position: absolute;
            bottom: 0px;
            width: 100%;
        }

        /* .page-15-2 .second-part {
            height: 17%;
            position: absolute;
            bottom: 0px;
            background-repeat: no-repeat;
            background-size: auto;
            background-position: right;
            text-align: right;
        } */

        .page-16-1 {
            background-image: url("{{$page_16_img_1}}");
            background-size: cover;
            height: 100%;
            position: absolute;
            bottom: 0px;
            width: 100%;
        }

        .page-17-1 {
            background-image: url("{{$page_17_img_1}}");
            background-size: cover;
            height: 100%;
            position: absolute;
            bottom: 0px;
            width: 100%;
        }

        .page-18-1 {
            background-image: url("{{$page_18_img_1}}");
            background-size: cover;
            height: 100%;
            position: absolute;
            bottom: 0px;
            width: 100%;
        }
    </style>
</head>

<body>
    <!-- <a href="http://127.0.0.1:8000/create-pdf-file">Download PDF</a> -->

    <div class="page page-1 page-1-2">
        <div class="text-wrap">
            <h1 class="subtitle-top">{{ $page_1_1_text_1}}</h1>
            <h1 class="title title-1">{{ $page_1_1_text_2}}</h1>
            <h1 class="title title-2">{{ $page_1_1_text_3}}</h1>
            <h1 class="subtitle-bottom">{{ $page_1_1_text_4}}</h1>
        </div>
        <div class="page-bottom">
            <img src="images/home-selling/high-res/logo-simple.png" alt="" width="300px
            ">
        </div>
    </div>
    <div class="page_break"></div>
    <div class="page-2 page-2-1">
        <div class="luxe-pro-info">
            <div class="text">
                <h1>LUXE</h1>
                <h2>PROPERTIES</h2>
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-2 page-2-2">
        <div class="first-part">
            <div class="text">
                <h2 class="subtitle-top">{{ $page_2_2_text_1}}</h2>
                <h1 class="title">{{ $page_2_2_text_2}}</h1>
                <h1 class="subtitle-bottom">{{ $page_2_2_text_5}}</h1>
            </div>
            <div class="content">
                <p>{{ $page_2_2_text_3}}</p>
                <p>{{ $page_2_2_text_4}}</p>
            </div>
        </div>
        <div class="second-part">
            <div class="text">
                <span class="first-title">THE</span><br>
                <span class="second-title">HOME</span><br>
                <span class="third-title">SELLING</span><br>
                <span class="fourth-title">GUIDE</span><br>
            </div>
            <img src="images/home-selling/high-res/02.png" alt="">
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page-3 page-3-1">
        <div class="luxe-pro-info">
            <div class="text">
                <h2>Our</h2>
                <h1>Commitment</h1>
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-3 page-3-2">
        <div class="heading">
            <h2 class="subtitle-top" style="text-align: center;font-size:50px">{{ $page_3_2_text_1}}</h2>
            <h1 class="title" style="margin-bottom: 0px;">{{ $page_3_2_text_2}}</h1>
            <h1 class="subtitle-bottom">{{ $page_3_2_text_3}}</h1>
        </div>
        <div class="content">
            <div class="objective objective-1">
                <div class="ojective-image ojective-image-1">
                    <img src="images/home-selling/high-res/Asset 5.png" alt="">
                </div>
                <div class="ojective-text ojective-text-1">
                    <h2 class="title">{{ $page_3_2_text_4}}</h2>
                    <p class="text">{{ $page_3_2_text_5}}</p>
                </div>
            </div>
            <div class="objective objective-2">
                <div class="ojective-image ojective-image-2">
                    <img src="images/home-selling/high-res/Asset 6.png" alt="">
                </div>
                <div class="ojective-text ojective-text-2">
                    <h2 class="title">{{ $page_3_2_text_6}}</h2>
                    <p class="text">{{ $page_3_2_text_7}}</p>
                </div>
            </div>
            <div class="objective objective-3">
                <div class="ojective-image ojective-image-3">
                    <img src="images/home-selling/high-res/Asset 7.png" alt="">
                </div>
                <div class="ojective-text ojective-text-3">
                    <h2 class="title">{{ $page_3_2_text_8}}</h2>
                    <p class="text">{{ $page_3_2_text_9}}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page-4 page-4-1">
        <div class="luxe-pro-info">
            <div class="text">
                <h2>The</h2>
                <h1>Power</h1>
                <h2 class="subtitle">of Our Brand</h2>
            </div>
        </div>
    </div>

    <div class="page_break"></div>
    <div
        style="top:0;bottom:0;right:600px;position:absolute;background-image: url('{{$page_4_1_img_1}}');background-size: cover;background-position:bottom right;background-repeat: no-repeat;height:100%">
        <h1></h1>
    </div>
    <div class="page-4 page-4-2"
        style="top:0;bottom:0;right:0px;position:absolute;;background-size: cover;background-repeat: no-repeat;">
        <div class="luxe-pro-info">
            <div class="spacer"></div>
            <div class="content">
                <div class="section section-1">
                    <span class="section-content-top">{{ $page_4_2_text_1}}</span>
                    <br>
                    <span class="section-content-bottom">{{ $page_4_2_text_2}}</span>
                </div>
                <div class="section section-2">
                    <span class="section-content-top">{{ $page_4_2_text_3}}</span>
                    <br>
                    <span class="section-content-bottom">{{ $page_4_2_text_4}}</span>
                </div>
                <div class="section section-3">
                    <span class="section-content-top">{{ $page_4_2_text_5}}</span>
                    <br>
                    <span class="section-content-bottom">{{ $page_4_2_text_6}}</span>
                </div>
                <div class="section section-4">
                    <span class="section-content-top">{{ $page_4_2_text_7}}</span>
                    <br>
                    <span class="section-content-bottom">{{ $page_4_2_text_8}} </span>
                </div>
                <div class="section section-5">
                    <span class="section-content-top">{{ $page_4_2_text_9}}</span>
                    <br>
                    <span class="section-content-bottom">{{ $page_4_2_text_10}}</span>
                </div>
                <div class="section section-6">
                    <span class="section-content-top">{{ $page_4_2_text_11}}</span>
                    <br>
                    <span class="section-content-bottom">{{ $page_4_2_text_12}}</span>
                </div>
            </div>
            <div class="text">
                <hr>
                <p>{{ $page_4_2_text_13}}</p>
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page-5 page-5-1">
        <div class="luxe-pro-info">
            <div class="text">
                <h1>Marketing</h1>
                <h2>Showcase</h2>
            </div>
        </div>
    </div>

    <div class="page_break"></div>
    <div
        style="top:0;bottom:0;right:600px;position:absolute;background-image: url('{{$page_5_1_img_1}}');background-size: cover;background-position:bottom right;background-repeat: no-repeat;height:100%">
        <h1></h1>
    </div>
    <div class="page page-5 page-5-2"
        style="top:0;bottom:0;position:absolute;background-size: cover;background-repeat: no-repeat;">
        <div class="heading">
            <h2 class="subtitle-top">Tailored Listing</h2>
            <h1 class="title"><span style="color:white;">Ex</span>posure</h1>
            <h1 class="subtitle-bottom">Strategy</h1>
        </div>
        <div class="content">
            <p>{{ $page_5_2_text_1}}</p>
            <p>{{ $page_5_2_text_2}}</p>
            <ul>
                <?php $page_5_2_text_3_array = explode("\n", $page_5_2_text_3); ?>
                @foreach ($page_5_2_text_3_array as $string_array)
                <li>{{ $string_array }}</li>
                @endforeach
            </ul>
            <p>{{ $page_5_2_text_4}}</p>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page-6 page-6-1">
        <div class="luxe-pro-info">
            <div class="text">
                <h1>Marketing</h1>
                <h2>Timeframe</h2>
            </div>
        </div>
    </div>

    <div class="page_break"></div>
    <div
        style="top:0;bottom:0;right:600px;position:absolute;background-image: url('{{$page_6_1_img_1}}');background-size: cover;background-position:bottom right;background-repeat: no-repeat;height:100%">
        <h1></h1>
    </div>
    <div class="page page-6 page-6-2" style="z-index:100;">
        <div class="week" style="z-index:50;position:absolute;top:150px;">
            <img class="" src="images/home-selling/yellow-fade.png" alt="" style="width:45%;">
            <h2 style="color:white;font-weight:300;font-size:40px;margin-top:-70px;margin-left:180px;">
                {{$page_6_2_text_1_1}}</h2>
        </div>
        <div class="week" style="z-index:50;position:absolute;top:300px;">
            <img class="" src="images/home-selling/yellow-fade.png" alt="" style="width:45%;">
            <h2 style="color:white;font-weight:300;font-size:40px;margin-top:-70px;margin-left:180px;">
                {{$page_6_2_text_1_2}}</h2>
        </div>
        <div class="week" style="z-index:50;position:absolute;top:450px;">
            <img class="" src="images/home-selling/yellow-fade.png" alt="" style="width:45%;">
            <h2 style="color:white;font-weight:300;font-size:40px;margin-top:-70px;margin-left:180px;">
                {{$page_6_2_text_1_3}}</h2>
        </div>
        <div class="week" style="z-index:50;position:absolute;top:600px;">
            <img class="" src="images/home-selling/yellow-fade.png" alt="" style="width:45%;">
            <h2 style="color:white;font-weight:300;font-size:40px;margin-top:-70px;margin-left:180px;">
                {{$page_6_2_text_1_4}}</h2>
        </div>
        <div class="week" style="z-index:50;position:absolute;top:750px;">
            <img class="" src="images/home-selling/yellow-fade.png" alt="" style="width:45%;">
            <h2 style="color:white;font-weight:300;font-size:40px;margin-top:-70px;margin-left:180px;">
                {{$page_6_2_text_1_5}}</h2>
        </div>
        <div class="list-week-1" style="position: absolute;left:360px;top:80px;">
            <ul>
                <?php $page_6_2_text_1_array = explode("\n", $page_6_2_text_1); ?>
                @foreach ($page_6_2_text_1_array as $string_array)
                <li>{{ $string_array }}</li>
                @endforeach
            </ul>
        </div>
        <div class="list-week-3" style="position: absolute;left:360px;top:250px;">
            <ul>
                <?php $page_6_2_text_2_array = explode("\n", $page_6_2_text_2); ?>
                @foreach ($page_6_2_text_2_array as $string_array)
                <li>{{ $string_array }}</li>
                @endforeach
            </ul>
        </div>
        <div class="list-week-5" style="position: absolute;left:360px;top:420px;">
            <ul>
                <?php $page_6_2_text_3_array = explode("\n", $page_6_2_text_3); ?>
                @foreach ($page_6_2_text_3_array as $string_array)
                <li>{{ $string_array }}</li>
                @endforeach
            </ul>
        </div>
        <div class="list-week-7" style="position: absolute;left:360px;top:580px;">
            <ul>
                <?php $page_6_2_text_4_array = explode("\n", $page_6_2_text_4); ?>
                @foreach ($page_6_2_text_4_array as $string_array)
                <li>{{ $string_array }}</li>
                @endforeach
            </ul>
        </div>
        <div class="list-week-9" style="position: absolute;left:360px;top:740px;">
            <ul>
                <?php $page_6_2_text_5_array = explode("\n", $page_6_2_text_5); ?>
                @foreach ($page_6_2_text_5_array as $string_array)
                <li>{{ $string_array }}</li>
                @endforeach
            </ul>
        </div>
        <div class="second-part">
            <div class="text">
                <span class="first-title">THE</span><br>
                <span class="second-title">HOME</span><br>
                <span class="third-title">SELLING</span><br>
                <span class="fourth-title">GUIDE</span><br>
            </div>
            <img src="images/home-selling/high-res/10.png" alt="">
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page-7 page-7-1">
        <div class="luxe-pro-info">
            <div class="row-1"
                style="background-image: url('{{$page_7_1_1_img_1}}');height:33%;position:absolute;top:0;background-size: cover;">
                <h1></h1>
            </div>
            <div class="row-2"
                style="background-image: url('{{$page_7_1_2_img_1}}');height:34%;position:absolute;top:33%;background-size: cover;">
                <h1></h1>
            </div>
            <div class="row-3"
                style="background-image: url('{{$page_7_1_3_img_1}}');height:33%;position:absolute;bottom:0;background-size: cover;">
                <h1></h1>
            </div>
            <div class="text" style="position:absolute;top:22%">
                <h1 style="font-size: 188px;color:white;letter-spacing: -12px;font-weight: 300;">Property</h1>
                <h2
                    style="font-size: 80px;color:white;font-weight: 300;letter-spacing: 24px;margin-top: -200px;margin-left:20px;">
                    Showcase</h2>
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page-7 page-7-2"
        style="right:70%;background-image: url('{{$page_7_1_1_img_1}}');height:33%;position:absolute;top:0;background-size: cover;background-position: center;background-position: 0px 0px;background-repeat:no-repeat;">
        <h1></h1>
    </div>
    <div class="page-7 page-7-2"
        style="right:70%;background-image: url('{{$page_7_1_2_img_1}}');height:34%;position:absolute;top:33%;background-size: cover;background-position: center;background-position: 0px 0px;background-repeat:no-repeat;">
        <h1></h1>
    </div>
    <div class="page-7 page-7-2"
        style="right:70%;background-image: url('{{$page_7_1_3_img_1}}');height:33%;position:absolute;bottom:0;background-size: cover;background-position: center;background-position: 0px 0px;background-repeat:no-repeat;">
        <h1></h1>
    </div>
    <div class="page-7 page-7-2" style="z-index:100;">
        <div class="section" style="position: absolute;top:50px;left:10px;">
            <img src="images/home-selling/Asset 13-4.png" alt="" style="position:absolute;">
            <div class="text" style="margin-top: -30px;z-index:1000;margin-left:70px;">
                <p style="font-size: 46px;line-height:20px;color:white;">{{ $page_7_2_text_1}}</p>
                <p style="font-size: 50px;font-weight:900;line-height:0px;">{{ $page_7_2_text_2}}</p>
            </div>
        </div>
        <div class="section" style="position: absolute;top:400px;left:10px;">
            <img src="images/home-selling/Asset 13-4.png" alt="" style="position:absolute;">
            <div class="text" style="margin-top: -30px;z-index:1000;margin-left:70px;">
                <p style="font-size: 46px;line-height:20px;color:white;">{{ $page_7_2_text_3}}</p>
                <p style="font-size: 50px;font-weight:900;line-height:0px;">{{ $page_7_2_text_4}}</p>
            </div>
        </div>
        <div class="section" style="position: absolute;top:800px;left:10px;">
            <img src="images/home-selling/Asset 13-4.png" alt="" style="position:absolute;">
            <div class="text" style="margin-top: -30px;z-index:1000;margin-left:70px;">
                <p style="font-size: 46px;line-height:20px;color:white;">{{ $page_7_2_text_5}}</p>
                <p style="font-size: 50px;font-weight:900;line-height:0px;">{{ $page_7_2_text_6}}</p>
            </div>
        </div>
        <div class="section" style="position: absolute;top:30px;left:430px;right:60px;">
            <p style="font-weight: 300;font-size:15px;">{{ $page_7_2_text_7}}</p>
        </div>
        <div class="section" style="position: absolute;top:370px;left:430px;right:60px;">
            <p style="font-weight: 300;font-size:15px;">{{ $page_7_2_text_8}}</p>
        </div>
        <div class="section" style="position: absolute;top:780px;left:430px;right:60px;">
            <p style="font-weight: 300;font-size:15px;">{{ $page_7_2_text_9}}</p>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page-8 page-8-1"
        style="background-image: url('images/home-selling/high-res/Asset 14.png');height:100%;position:absolute;top:0;background-size: 100.5% 1130px;background-position: center;">
        <h1></h1>
    </div>

    <div class="page_break"></div>
    <style>
        .narrow-text {
            font-size: 15px;
            line-height: 12px;
            padding-right: 200px;
        }
    </style>
    <div class="page page-8 page-8-2" style="padding-left: 100px;">
        <div class="heading">
            <h2 class="subtitle-top"
                style="font-weight: 300;font-size:70px;margin-bottom:-200px;margin-left:10px;margin-top:-10px;">Our</h2>
            <h1 class="title"
                style="font-size: 160px;color:#C6A467;font-weight:300;margin-bottom:-110px;letter-spacing:-1px;">Digital
            </h1>
            <h1 class="subtitle-bottom" style="font-weight: 300;font-size: 60px;margin-left:230px;margin-bottom:-10px;">
                Advantage</h1>
        </div>
        <div class="content">
            <p class="narrow-text" style="font-weight: 300;">{{ $page_8_2_text_1}}</p>
            <p class="narrow-text" style="font-weight: 300;">{{ $page_8_2_text_2}}</p>
            <ul style="list-style-image: url('images/home-selling/check-large.png');">
                <?php $page_8_2_text_3_array = explode("\n", $page_8_2_text_3); ?>
                @foreach ($page_8_2_text_3_array as $string_array)
                <li style="margin-bottom: 5px;font-weight: 400;">{{ $string_array }}</li>
                @endforeach
            </ul>
            <p class="narrow-text" style="font-weight: 300;">{{ $page_8_2_text_4}}</p>
            <p class="narrow-text" style="font-weight: 300;">{{ $page_8_2_text_5}}</p>
            <ul style="list-style-image: url('images/home-selling/check-large.png');">
                <?php $page_8_2_text_6_array = explode("\n", $page_8_2_text_6); ?>
                @foreach ($page_8_2_text_6_array as $string_array)
                <li style="margin-bottom: 5px;font-weight: 400;">{{ $string_array }}</li>
                @endforeach
            </ul>
        </div>
        <div class="second-part">
            <div class="text">
                <span class="first-title">THE</span><br>
                <span class="second-title">HOME</span><br>
                <span class="third-title">SELLING</span><br>
                <span class="fourth-title">GUIDE</span><br>
            </div>
            <img src="images/home-selling/high-res/14.png" alt="">
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page-9 page-9-1"
        style="background-image: url('{{$page_9_1_img_1}}');height:100%;position:absolute;top:0;background-size: cover;background-position: left;">
        <h1></h1>
    </div>

    <div class="page_break"></div>

    <div class="page page-9 page-9-2"
        style="top:0;left:-500px;bottom:0;right:0;position:absolute;background-image: url('{{$page_9_1_img_1}}');background-size: cover;background-position: -600px -5px;background-repeat: no-repeat;">
        <div style="margin-left:515px;">
            <div class="heading" style="z-index:1000;">
                <h2 class="subtitle-top"
                    style="font-weight: 300;font-size:70px;margin-bottom:-250px;margin-left:170px;margin-top:-50px;">
                    Exclusive</h2>
                <h1 class="title"
                    style="font-size: 150px;color:#C6A467;font-weight:300;margin-bottom:-130px;margin-left:-10px;"><span
                        style="color: white;">Pr</span>operty</h1>
                <h1 class="subtitle-bottom"
                    style="font-weight: 300;font-size: 75px;margin-left:250px;margin-bottom:-10px;">Sites</h1>
            </div>
            <div class="content" style="margin-left:165px;">
                <p class="narrow-text" style="font-weight: 300;padding-right:20px;">{{ $page_9_2_text_1}}</p>
                <p class="narrow-text" style="font-weight: 300;padding-right:20px;">{{ $page_9_2_text_2}}</p>
                <h3 style="color: #C5A367;font-size: 35px;font-weight: 900;margin-bottom:-20px;">Features</h3>
                <ul style="list-style-image: url('images/home-selling/check-large.png');">
                    <?php $page_9_2_text_3_array = explode("\n", $page_9_2_text_3); ?>
                    @foreach ($page_9_2_text_3_array as $string_array)
                    <li style="margin-bottom: 5px;font-weight: 400;">{{ $string_array}}</li>
                    @endforeach
                </ul>
                <h3 style="color: #C5A367;font-size: 35px;font-weight: 900;margin-bottom:-20px;">Capabilities</h3>
                <ul style="list-style-image: url('images/home-selling/check-large.png');">
                    <?php $page_9_2_text_4_array = explode("\n", $page_9_2_text_4); ?>
                    @foreach ($page_9_2_text_4_array as $string_array)
                    <li style="margin-bottom: 5px;font-weight: 400;">{{ $string_array}}</li>
                    @endforeach
                </ul>
                <p class="narrow-text" style="font-weight: 300;padding-right:20px;">{{ $page_9_2_text_5}}</p>
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page-10 page-10-1">
        <div class="section1"
            style="background-image: url('{{$page_10_1_img_1}}');height:50%;position:absolute;top:0;background-size: cover;background-position: left;">
            <h1></h1>
        </div>
        <div class="section1"
            style="background-image: url('{{$page_10_1_img_2}}');height:53%;position:absolute;top:50%;background-size: cover;background-position: left;">
            <h1></h1>
        </div>
        <h1 style="z-index: 100;background-image: url('images/home-selling/Asset 16-3.png');background-position: right;background-repeat: no-repeat;text-align:right;    color: #fff;padding-bottom:5px;
    font-size: 28px;">{{ $page_10_1_text_1}}</h1>
        <h1 style="margin-top:520px;z-index: 100;background-image: url('images/home-selling/Asset 16-3.png');background-position: right;background-repeat: no-repeat;text-align:right;    color: #fff;padding-bottom:5px;
    font-size: 28px;">{{ $page_10_1_text_2}}</h1>
    </div>

    <div class="page_break"></div>

    <div class="page page-10 page-10-2">
        <div class="heading">
            <h2 class="subtitle-top"
                style="font-weight: 300;font-size:60px;margin-bottom:-310px;margin-left:340px;margin-top:-10px;">Our
            </h2>
            <h1 class="title"
                style="padding-left: 50px;font-size: 160px;color:#C6A467;font-weight:300;margin-bottom:-120px;letter-spacing:-1px;">
                Online
            </h1>
            <h1 class="subtitle-bottom" style="font-weight: 300;font-size: 65px;margin-left:160px;margin-bottom:-10px;">
                Presence</h1>
        </div>
        <div class="content" style="padding-left: 50px;">
            <p style="font-weight: 300;padding-right:50px;">{{ $page_10_2_text_1}}</p>
            <h1 style="font-size: 35px;color: #C5A367;font-weight:900;margin-bottom:-30px;">{{ $page_10_2_text_2}}</h1>

            <p style="font-weight: 300;padding-right:50px;">{{ $page_10_2_text_3}}</p>

            <h1 style="font-size: 35px;color: #C5A367;font-weight:900;margin-bottom:-30px;">{{ $page_10_2_text_4}}</h1>

            <p style="font-weight: 300;padding-right:50px;">{{ $page_10_2_text_5}}</p>

        </div>
        <div class="second-part">
            <div class="text">
                <span class="first-title">THE</span><br>
                <span class="second-title">HOME</span><br>
                <span class="third-title">SELLING</span><br>
                <span class="fourth-title">GUIDE</span><br>
            </div>
            <img src="images/home-selling/high-res/18.png" alt="">
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page-11 page-11-1">
        <div class="section1"
            style="background-image: url('{{$page_11_1_img_1}}');height:50%;position:absolute;top:-25px;background-size: contain;background-position: center;background-repeat: no-repeat;">
            <h1></h1>
        </div>
        <div class="section2"
            style="background-color: #C6A467;z-index:100;position:absolute;top:30%;margin:auto 60px;padding:30px;">
            <h1></h1>
            <div class="column-1" style="max-width: 65%; padding-top:65px;">
                <img src="{{$page_11_1_img_2}}" alt="" width="370px">
                <div class="introducing"
                    style="background: #000;height: 258px;padding: 6px;width:90%; margin-top:-40px;">
                    <div class="inner" style="background: #262626;height:245px;padding:6px;">
                        <h2 style="text-align: center;font-weight: 400;font-size: 12px;margin:0;color:white;">
                            INTRODUCING</h2>
                        <h2
                            style="text-align: center;font-weight: 400;font-size: 12px;margin:0;color:white;border-bottom:1px solid white;">
                            {{ $page_11_1_text_1}}</h2>
                        <p style="color: #fff;font-size: 12px;">{{ $page_11_1_text_2}}</p>
                        <h2 style="text-align: center;color: #fff;font-size: 22px;font-weight: 300;">
                            {{ $page_11_1_text_3}}</h2>
                    </div>
                </div>
            </div>
            <img src="{{$page_11_1_img_6}}" alt="" style="z-index: 1000;" width="600px" height="225px">
        </div>
        <div class="column-2" style="position:absolute;width:210px;max-width:210px;top:32%; left:60%;z-index:100;">
            <div>
                <img src="{{$page_11_1_img_2}}" alt="" width="210px" height="130px">
            </div>
            <div>
                <img src="{{$page_11_1_img_3}}" alt="" width="210px" height="130px">
            </div>
            <div>
                <img src="{{$page_11_1_img_4}}" alt="" width="210px" height="130px">
            </div>
            <div>
                <img src="{{$page_11_1_img_5}}" alt="" width="210px" height="130px">
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-11 page-11-2" style="padding-left:150px;padding-right:150px;">
        <div class="heading">
            <h2 class="subtitle-top" style="font-weight: 300;font-size:60px;position: absolute;top:80px;left:300px;">
                Your
            </h2>
            <h1 class="title"
                style="padding-left: 50px;font-size: 170px;color:#C6A467;font-weight:300;margin-bottom:-120px;margin-top:-50px;">
                Home
            </h1>
            <h1 class="subtitle-bottom" style="font-weight: 300;font-size: 60px;margin-left:290px;margin-bottom:-10px;">
                In Print</h1>
        </div>
        <div class="content" style="padding-left: 50px;">
            <h1 style="font-size: 35px;color: #C5A367;font-weight:900;margin-bottom:-30px;">{{ $page_11_2_text_1}}</h1>

            <p style="font-weight: 300;padding-right:50px;font-size:14px;">{{ $page_11_2_text_2}}</p>

            <h1 style="font-size: 35px;color: #C5A367;font-weight:900;margin-bottom:-30px;">{{ $page_11_2_text_3}}</h1>

            <p style="font-weight: 300;padding-right:50px;font-size:14px;">{{ $page_11_2_text_4}}</p>

            <h1 style="font-size: 35px;color: #C5A367;font-weight:900;margin-bottom:-30px;">{{ $page_11_2_text_5}}</h1>

            <p style="font-weight: 300;padding-right:50px;font-size:14px;">{{ $page_11_2_text_6}}</p>

        </div>
    </div>

    <div class="page_break"></div>

    <div class="page-12 page-12-1">
        <div class="luxe-pro-info">
            <div class="text">
                <h2>Social</h2>
                <h1>Media</h1>
                <h2 class="subtitle">Influence</h2>
            </div>
        </div>
    </div>

    <div class="page_break"></div>
    <div
        style="top:0;bottom:0;right:600px;position:absolute;background-image: url('{{$page_12_img_1}}');background-size: cover;background-position:bottom right;background-repeat: no-repeat;height:100%">
        <h1></h1>
    </div>
    <div class="page page-12 page-12-2"
        style="top:0;left:-500px;bottom:0;right:0;position:absolute;background-position: -600px -5px;background-repeat: no-repeat;">
        <div class="content" style="margin-left:250px;">
            <p style="font-weight: 300;margin-left:450px;">{{ $page_12_2_text_1}}</p>
            <p style="font-weight: 300;margin-left:450px;">{{ $page_12_2_text_2}}</p>

            <h1 style="font-size: 35px;color: #C5A367;font-weight:900;margin-bottom:-5px;margin-left:450px;">
                {{ $page_12_2_text_3}}</h1>

            <ul style="list-style-image: url('images/home-selling/check-large.png');">
                <?php $page_12_2_text_4_array = explode("\n", $page_12_2_text_4); ?>
                @foreach ($page_12_2_text_4_array as $string_array)
                <li style="margin-bottom: 5px;font-weight: 300;margin-left:450px;">{{ $string_array}}</li>
                @endforeach
            </ul>

            <p style="font-weight: 300;margin-left:450px;">{{ $page_12_2_text_5}}</p>
            <div style="margin-left:450px;margin-bottom:-22px;">
                <img src="images/home-selling/social1.jpg" alt="" style="float:left;width: 35px;margin-right: 10px;">
                <p style="font-weight: 300;margin-top: 3px;">{{ $page_12_2_text_6}}</p>
            </div>
            <div style="margin-left:450px;margin-bottom:-22px;">
                <img src="images/home-selling/social2.jpg" alt=""
                    style="float:left;width: 35px;margin-right: 10px;margin-top: 13px;">
                <p style="font-weight: 300;">{{ $page_12_2_text_7}}</p>
            </div>
            <div style="margin-left:450px;margin-bottom:-22px;">
                <img src="images/home-selling/social3.jpg" alt=""
                    style="float:left;width: 35px;margin-right: 10px;margin-top: 13px;">
                <p style="font-weight: 300;">{{ $page_12_2_text_8}}</p>
            </div>
            <div style="margin-left:450px;margin-bottom:-22px;">
                <img src="images/home-selling/social4.jpg" alt=""
                    style="float:left;width: 35px;margin-right: 10px;margin-top: 13px;">
                <p style="font-weight: 300;">{{ $page_12_2_text_9}}</p>
            </div>
            <div style="margin-left:450px;margin-bottom:-22px;">
                <img src="images/home-selling/social5.jpg" alt=""
                    style="float:left;width: 35px;margin-right: 10px;margin-top: 13px;">
                <p style="font-weight: 300;">{{ $page_12_2_text_10}}</p>
            </div>
            <div style="margin-left:450px;margin-bottom:-22px;">
                <img src="images/home-selling/social6.jpg" alt=""
                    style="float:left;width: 35px;margin-right: 10px;margin-top: 13px;">
                <p style="font-weight: 300;">{{ $page_12_2_text_11}}</p>
            </div>
            <div style="margin-left:450px;margin-bottom:-22px;">
                <img src="images/home-selling/social7.jpg" alt=""
                    style="float:left;width: 35px;margin-right: 10px;margin-top: 13px;">
                <p style="font-weight: 300;">{{ $page_12_2_text_12}}</p>
            </div>
            <div style="margin-left:450px;margin-bottom:-22px;">
                <img src="images/home-selling/social8.jpg" alt=""
                    style="float:left;width: 35px;margin-right: 10px;margin-top: 13px;">
                <p style="font-weight: 300;">{{ $page_12_2_text_13}}</p>
            </div>
        </div>
        <div class="second-part">
            <div class="text">
                <span class="first-title">THE</span><br>
                <span class="second-title">HOME</span><br>
                <span class="third-title">SELLING</span><br>
                <span class="fourth-title">GUIDE</span><br>
            </div>
            <img src="images/home-selling/high-res/22.png" alt="">
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page-13 page-13-1">
        <div class="content" style="position: absolute;bottom: 53%;left: 90px;">
            <h2 style="font-weight: 300;color:white;font-size:80px;margin-bottom:-195px;margin-left:10px;">Strategic
            </h2>
            <h1 style="font-weight: 300;color:#C5A367;font-size:140px;margin-bottom:-100px;letter-spacing:-0.05em">
                Property</h1>
            <h2 style="font-weight: 300;color:white;font-size:45px;margin-left:270px;">Tours</h2>
        </div>
    </div>

    <div class="page_break"></div>
    <div
        style="top:0;bottom:0;right:600px;position:absolute;background-image: url('{{$page_13_img_1}}');background-size: cover;background-position:bottom right;background-repeat: no-repeat;height:100%">
        <h1></h1>
    </div>
    <div class="page page-13 page-13-2"
        style="top:0;left:-500px;bottom:0;right:0;position:absolute;background-repeat: no-repeat;">
        <div class="content" style="margin-left:250px;">
            <h1 style="font-size: 35px;color: #C5A367;font-weight:900;margin-bottom:-5px;margin-left:450px;">
                {{ $page_13_2_text_1}}</h1>
            <p style="font-weight: 300;margin-left:450px;">{{ $page_13_2_text_2}}</p>

            <ul style="list-style-image: url('images/home-selling/check-large.png');">
                <?php $page_13_2_text_3_array = explode("\n", $page_13_2_text_3); ?>
                @foreach ($page_13_2_text_3_array as $string_array)
                <li style="margin-bottom: 5px;font-weight: 300;margin-left:450px;">{{ $string_array}}</li>
                @endforeach
                <li style="margin-bottom: 5px;font-weight: 300;margin-left:450px;">Invite prequalified brokers and
                    agents specializing in neighborhood</li>
                <li style="margin-bottom: 5px;font-weight: 300;margin-left:450px;">Coordinate with other firms to
                    schedule in sequence for maximum
                    exposure in neighborhood</li>
                <li style="margin-bottom: 5px;font-weight: 300;margin-left:450px;">Coordinate with other firms to
                    schedule in sequence for maximum
                    exposure in neighborhood</li>
            </ul>

            <h1 style="font-size: 35px;color: #C5A367;font-weight:900;margin-bottom:-5px;margin-left:450px;">
                {{ $page_13_2_text_4}}</h1>
            <p style="font-weight: 300;margin-left:450px;">{{ $page_13_2_text_5}}</p>
            <p style="font-weight: 300;margin-left:450px;">{{ $page_13_2_text_6}}</p>

            <ul style="list-style-image: url('images/home-selling/check-large.png');">
                <?php $page_13_2_text_6_array = explode("\n", $page_13_2_text_6); ?>
                @foreach ($page_13_2_text_6_array as $string_array)
                <li style="margin-bottom: 5px;font-weight: 300;margin-left:450px;">{{ $string_array}}</li>
                @endforeach
                <li style="margin-bottom: 5px;font-weight: 300;margin-left:450px;">Invite prequalified brokers and
                    agents specializing in neighborhood</li>
                <li style="margin-bottom: 5px;font-weight: 300;margin-left:450px;">Coordinate with other firms to
                    schedule in sequence for maximum
                    exposure in neighborhood</li>
                <li style="margin-bottom: 5px;font-weight: 300;margin-left:450px;">Coordinate with other firms to
                    schedule in sequence for maximum
                    exposure in neighborhood</li>
            </ul>
        </div>
        <div class="second-part">
            <div class="text">
                <span class="first-title">THE</span><br>
                <span class="second-title">HOME</span><br>
                <span class="third-title">SELLING</span><br>
                <span class="fourth-title">GUIDE</span><br>
            </div>
            <img src="images/home-selling/high-res/24.png" alt="">
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page-14 page-14-1">
        <div class="content" style="position: absolute;bottom: 57%;left:80px;">
            <h2 style="font-weight: 300;color:white;font-size:90px;margin-bottom:-190px;margin-left:250px;">LUXE</h2>
            <h1 style="font-weight: 300;color:#C5A367;font-size:130px;margin-bottom:-100px;letter-spacing:-0.05em">
                Testimonials</h1>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-14 page-14-2">
        <p style="position: absolute;top:280px; width:480px;font-weight:300;left:80px;">Satisfying the client
            is the minimum
            goal for staying in business. We constantly tweak and embrace change in order to improve our systems,
            processes and services to go beyond the expected.
            <br><br>
            Here are just a few of our wonderful clients showing some client love!</p>
        <p style="position: absolute;top:478px; width:300px;font-weight:300;left:180px;font-size:14px;">
            I thank the whole organization for their professionalism in doing business, and wish you the very best of
            success for the years to come! Keep up the GREAT WORK!”
        </p>
        <p style="position: absolute;top:620px; width:280px;font-weight:300;left:265px;font-size:14px;">
            I am very happy with the results obtained. Definitely, I would recommend LUXE Properties to my friends, and
            family!”
        </p>
        <p style="position: absolute;top:755px; width:350px;font-weight:300;left:350px;font-size:14px;">
            LUXE realtors are truly committed to selling/leasing your property; they are passionate about finding
            solutions and display throughout the journey utmost ethical behavior in all of their transactions. With LUXE
            on your side, you know that your home is in great hands which takes the worry off the customer making the
            process stress free.”
        </p>
    </div>

    <div class="page_break"></div>

    <div class="page-15 page-15-1">
        <div class="content" style="position: absolute;bottom: 55%;">
            <h2 style="font-weight: 300;color:white;font-size:50px;margin-bottom:-200px;margin-left:240px;">Meet</h2>
            <h1 style="font-weight: 300;color:#C5A367;font-size:140px;margin-bottom:-100px;margin-left:120px;">TheAgent
            </h1>
        </div>
    </div>

    <div class="page_break"></div>
    <div
        style="top:0;bottom:0;right:600px;position:absolute;background-image: url('{{$page_15_img_1}}');background-size: cover;background-position:bottom right;background-repeat: no-repeat;height:100%">
        <h1></h1>
    </div>
    <div class="page page-15 page-15-2"
        style="top:0;left:-500px;bottom:0;right:0;position:absolute;background-position: -600px -5px;background-repeat: no-repeat;">
        <div class="content" style="margin-left:250px;">
            <h1
                style="font-size: 135px;color:#C5A367;font-weight:300;margin-bottom:-65px;margin-top:-75px;margin-left:250px;">
                <span
                    style="color: white;">{{substr($page_15_2_text_1, 0, 2)}}</span>{{substr($page_15_2_text_1, 2, 100)}}
            </h1>
            <h1 style="font-size: 35px;font-weight:300;margin-bottom:-5px;margin-left:450px;">{{$page_15_2_text_2}}</h1>

            <p style="font-weight: 300;margin-left:450px;">{{ $page_15_2_text_3}}</p>
            <p style="font-weight: 300;margin-left:450px;">{{ $page_15_2_text_4}}</p>
            <p style="font-weight: 300;margin-left:450px;">{{ $page_15_2_text_5}}</p>

        </div>
        <div class="second-part">
            <div class="text">
                <span class="first-title">THE</span><br>
                <span class="second-title">HOME</span><br>
                <span class="third-title">SELLING</span><br>
                <span class="fourth-title">GUIDE</span><br>
            </div>
            <img src="images/home-selling/high-res/28.png" alt="">
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page-16 page-16-1">
        <div class="content" style="position: absolute;bottom: 55%;">
            <h2 style="font-weight: 300;color:white;font-size:100px;margin-bottom:-200px;margin-left:120px;">Recent</h2>
            <h1 style="font-weight: 300;color:#C5A367;font-size:140px;margin-bottom:-100px;margin-left:120px;">Lisitings
            </h1>
        </div>
    </div>

    <div class="page_break"></div>

    <div
        style="top:0;bottom:0;right:600px;position:absolute;background-image: url('{{$page_16_img_1}}');background-size: cover;background-position:bottom right;background-repeat: no-repeat;height:100%">
        <h1></h1>
    </div>
    <div class="page page-16 page-16-2"
        style="top:0;left:-500px;bottom:0;right:0;position:absolute;background-position: -600px -5px;background-repeat: no-repeat;">
        <div class="content" style="margin-left:450px;">
            <div class="section" style="margin-left:170px;">
                <div style="padding-top:0px;">
                    <div class="circle"
                        style="background-color: #C5A367;float:left;padding:10px;border-radius: 600%;margin-top:20px;">
                        <div class="inner-section" style="background-color: white;padding:5px;border-radius: 550%;">
                            <img src="{{$page_16_2_img_1}}" alt="" width="166" height="166"
                                style="border-radius: 500%;">
                        </div>
                    </div>
                </div>
                <div class="circle-text" style="margin-left: 30px;">
                    <p style="color: #C5A367;font-size: 26px;margin-bottom:-10px;">{{ $page_16_2_text_1}}</p>
                    <p style="margin-bottom:-10px;">{{ $page_16_2_text_2}}</p>
                    <p style="margin-bottom:-10px;">{{ $page_16_2_text_3}}</p>
                    <p style="margin-bottom:-10px;">{{ $page_16_2_text_4}}</p>
                    <p style="margin-bottom:-10px;">{{ $page_16_2_text_5}}</p>
                </div>
            </div>
            <div class="section" style="margin-left:120px;margin-top:10px;">
                <div style="padding-top:0px;">
                    <div class="circle"
                        style="margin-left:-200px;background-color: black;float:left;padding:10px;border-radius: 600%;margin-top:20px;">
                        <div class="inner-section" style="background-color: white;padding:5px;border-radius: 550%;">
                            <img src="{{$page_16_2_img_2}}" alt="" width="166" height="166"
                                style="border-radius: 500%;">
                        </div>
                    </div>
                </div>
                <div class="circle-text" style="margin-left: 230px;">
                    <p style="font-size: 26px;margin-bottom:-10px;">{{ $page_16_2_text_6}}</p>
                    <p style="margin-bottom:-10px;">{{ $page_16_2_text_7}}</p>
                    <p style="margin-bottom:-10px;">{{ $page_16_2_text_8}}</p>
                    <p style="margin-bottom:-10px;">{{ $page_16_2_text_9}}</p>
                    <p style="margin-bottom:-10px;">{{ $page_16_2_text_10}}</p>
                </div>
            </div>
            <div class="section" style="margin-left:170px;margin-top:10px;">
                <div style="padding-top:0px;">
                    <div class="circle"
                        style="background-color: #C5A367;float:left;padding:10px;border-radius: 600%;margin-top:20px;">
                        <div class="inner-section" style="background-color: white;padding:5px;border-radius: 550%;">
                            <img src="{{$page_16_2_img_3}}" alt="" width="166" height="166"
                                style="border-radius: 500%;">
                        </div>
                    </div>
                </div>
                <div class="circle-text" style="margin-left: 30px;">
                    <p style="color: #C5A367;font-size: 26px;margin-bottom:-10px;">{{ $page_16_2_text_11}}</p>
                    <p style="margin-bottom:-10px;">{{ $page_16_2_text_12}}</p>
                    <p style="margin-bottom:-10px;">{{ $page_16_2_text_13}}</p>
                    <p style="margin-bottom:-10px;">{{ $page_16_2_text_14}}</p>
                    <p style="margin-bottom:-10px;">{{ $page_16_2_text_15}}</p>
                </div>
            </div>
            <div class="section" style="margin-left:120px;margin-top:10px;">
                <div style="padding-top:0px;">
                    <div class="circle"
                        style="margin-left:-200px;background-color: black;float:left;padding:10px;border-radius: 600%;margin-top:20px;">
                        <div class="inner-section" style="background-color: white;padding:5px;border-radius: 550%;">
                            <img src="{{$page_16_2_img_4}}" alt="" width="166" height="166"
                                style="border-radius: 500%;">
                        </div>
                    </div>
                </div>
                <div class="circle-text" style="margin-left: 230px;">
                    <p style="font-size: 26px;margin-bottom:-10px;">{{ $page_16_2_text_16}}</p>
                    <p style="margin-bottom:-10px;">{{ $page_16_2_text_17}}</p>
                    <p style="margin-bottom:-10px;">{{ $page_16_2_text_18}}</p>
                    <p style="margin-bottom:-10px;">{{ $page_16_2_text_19}}</p>
                    <p style="margin-bottom:-10px;">{{ $page_16_2_text_20}}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page-17 page-17-1">
        <div class="content" style="position: absolute;bottom: 55%;">
            <h2 style="font-weight: 300;color:white;font-size:100px;margin-bottom:-200px;margin-left:120px;">Recent</h2>
            <h1 style="font-weight: 300;color:#C5A367;font-size:140px;margin-bottom:-100px;margin-left:120px;">Sales
            </h1>
        </div>
    </div>

    <div class="page_break"></div>

    <div
        style="top:0;bottom:0;right:600px;position:absolute;background-image: url('{{$page_17_img_1}}');background-size: cover;background-position:bottom right;background-repeat: no-repeat;height:100%">
        <h1></h1>
    </div>
    <div class="page page-17 page-17-2"
        style="top:0;left:-500px;bottom:0;right:0;position:absolute;background-position: -600px -5px;background-repeat: no-repeat;">
        <div class="content" style="margin-left:450px;">
            <div class="section"
                style="margin-left:170px;background-color: #C5A367;padding-bottom:20px;border-radius:700%;margin-bottom:20px;">
                <div style="padding-top:0px;padding-bottom:20px;">
                    <div class="circle" style="float:left;border-radius: 600%;margin-bottom:30px;">
                        <div class="inner-section" style="border-radius: 550%;">
                            <img src="{{$page_17_2_img_1}}" alt="" width="166" height="166"
                                style="border-radius: 500%;margin-top:20px;margin-left:20px;">
                        </div>
                    </div>
                </div>
                <div class="circle-text" style="margin-left: 30px;">
                    <p style="color:white;font-size: 26px;margin-bottom:-10px;">{{ $page_17_2_text_1}}</p>
                    <p style="margin-bottom:-10px;font-size:14px;">{{ $page_17_2_text_2}}</p>
                    <p style="margin-bottom:-10px;font-size:14px;">{{ $page_17_2_text_3}}</p>
                    <p style="margin-bottom:-10px;font-size:14px;">{{ $page_17_2_text_4}}</p>
                    <p style="margin-bottom:-10px;font-size:14px;">{{ $page_17_2_text_5}}</p>
                    <p style="margin-bottom:-10px;font-size:14px;">{{ $page_17_2_text_6}}</p>
                </div>
            </div>

            <div class="section"
                style="margin-left:170px;background-color: #C5A367;padding-bottom:20px;border-radius:700%;margin-bottom:20px;">
                <div style="padding-top:0px;padding-bottom:20px;">
                    <div class="circle" style="float:left;border-radius: 600%;margin-bottom:30px;">
                        <div class="inner-section" style="border-radius: 550%;">
                            <img src="{{$page_17_2_img_2}}" alt="" width="166" height="166"
                                style="border-radius: 500%;margin-top:20px;margin-left:20px;">
                        </div>
                    </div>
                </div>
                <div class="circle-text" style="margin-left: 30px;">
                    <p style="color:white;font-size: 26px;margin-bottom:-10px;">{{ $page_17_2_text_7}}</p>
                    <p style="margin-bottom:-10px;font-size:14px;">{{ $page_17_2_text_8}}</p>
                    <p style="margin-bottom:-10px;font-size:14px;">{{ $page_17_2_text_9}}</p>
                    <p style="margin-bottom:-10px;font-size:14px;">{{ $page_17_2_text_10}}</p>
                    <p style="margin-bottom:-10px;font-size:14px;">{{ $page_17_2_text_11}}</p>
                    <p style="margin-bottom:-10px;font-size:14px;">{{ $page_17_2_text_12}}</p>
                </div>
            </div>

            <div class="section"
                style="margin-left:170px;background-color: #C5A367;padding-bottom:20px;border-radius:700%;margin-bottom:20px;">
                <div style="padding-top:0px;padding-bottom:20px;">
                    <div class="circle" style="float:left;border-radius: 600%;margin-bottom:30px;">
                        <div class="inner-section" style="border-radius: 550%;">
                            <img src="{{$page_17_2_img_3}}" alt="" width="166" height="166"
                                style="border-radius: 500%;margin-top:20px;margin-left:20px;">
                        </div>
                    </div>
                </div>
                <div class="circle-text" style="margin-left: 30px;">
                    <p style="color:white;font-size: 26px;margin-bottom:-10px;">{{ $page_17_2_text_13}}</p>
                    <p style="margin-bottom:-10px;font-size:14px;">{{ $page_17_2_text_14}}</p>
                    <p style="margin-bottom:-10px;font-size:14px;">{{ $page_17_2_text_15}}</p>
                    <p style="margin-bottom:-10px;font-size:14px;">{{ $page_17_2_text_16}}</p>
                    <p style="margin-bottom:-10px;font-size:14px;">{{ $page_17_2_text_17}}</p>
                    <p style="margin-bottom:-10px;font-size:14px;">{{ $page_17_2_text_18}}</p>
                </div>
            </div>

            <div class="section"
                style="margin-left:170px;background-color: #C5A367;padding-bottom:20px;border-radius:700%;margin-bottom:20px;">
                <div style="padding-top:0px;padding-bottom:20px;">
                    <div class="circle" style="float:left;border-radius: 600%;margin-bottom:30px;">
                        <div class="inner-section" style="border-radius: 550%;">
                            <img src="{{$page_17_2_img_4}}" alt="" width="166" height="166"
                                style="border-radius: 500%;margin-top:20px;margin-left:20px;">
                        </div>
                    </div>
                </div>
                <div class="circle-text" style="margin-left: 30px;">
                    <p style="color:white;font-size: 26px;margin-bottom:-10px;">{{ $page_17_2_text_19}}</p>
                    <p style="margin-bottom:-10px;font-size:14px;">{{ $page_17_2_text_20}}</p>
                    <p style="margin-bottom:-10px;font-size:14px;">{{ $page_17_2_text_21}}</p>
                    <p style="margin-bottom:-10px;font-size:14px;">{{ $page_17_2_text_22}}</p>
                    <p style="margin-bottom:-10px;font-size:14px;">{{ $page_17_2_text_23}}</p>
                    <p style="margin-bottom:-10px;font-size:14px;">{{ $page_17_2_text_24}}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page-18 page-18-1">
        <div class="content" style="position: absolute;bottom: 55%;">
            <h2 style="font-weight: 300;color:white;font-size:80px;margin-bottom:-170px;margin-left:150px;">Happy</h2>
            <h1 style="font-weight: 300;color:#C5A367;font-size:140px;margin-bottom:-90px;margin-left:120px;">Clients
            </h1>
            <h2 style="font-weight: 300;color:white;font-size:40px;margin-bottom:-150px;margin-left:230px;">Testimonials
            </h2>
        </div>
    </div>

    <div class="page_break"></div>

    <div
        style="top:0;bottom:0;right:600px;position:absolute;background-image: url('{{$page_18_img_1}}');background-size: cover;background-position:bottom right;background-repeat: no-repeat;height:100%">
        <h1></h1>
    </div>
    <div class="page page-18 page-18-2"
        style="top:0;left:-20px;bottom:0;right:0;position:absolute;background-position: -600px -5px;background-repeat: no-repeat;">
        <div class="content" style="">
            <div class="section" style="border:1px solid gray;height:230px;min-height:230px;margin:50px 75px;">
                <img src="{{ $page_19_img_1 }}" alt="" style="float: left;margin-bottom:-30px;" width="230px"
                    height="230px">
                <div class="text" style="position: absolute;top:-20px;padding:30px;">
                    <p style="font-weight: 300;font-size:16px;">{{ $page_18_2_text_1 }}</p>
                    <p style="font-size: 22px;color: #C5A367;margin-left:25px;">{{ $page_18_2_text_2 }}</p>
                </div>
            </div>
            <img src="images/home-selling/divider-1.png" alt="" height="230px"
                style="position: absolute;z-index:100;left:230px;top:92px;">

            <div class="section" style="border:1px solid gray;height:230px;min-height:230px;margin:50px 75px;">
                <img src="{{ $page_19_img_2 }}" alt="" style="float: left;margin-bottom:-30px;" width="230px"
                    height="230px">
                <div class="text" style="position: absolute;top:-20px;padding:30px;">
                    <p style="font-weight: 300;font-size:16px;">{{ $page_18_2_text_3 }}</p>
                    <p style="font-size: 22px;color: #C5A367;margin-left:25px;"> {{ $page_18_2_text_4 }}</p>
                </div>
            </div>
            <img src="images/home-selling/divider-1.png" alt="" height="230px"
                style="position: absolute;z-index:100;left:230px;top:424px;">

            <div class="section" style="border:1px solid gray;height:230px;min-height:230px;margin:50px 75px;">
                <img src="{{ $page_19_img_3 }}" alt="" style="float: left;margin-bottom:-30px;" width="230px"
                    height="230px">
                <div class="text" style="position: absolute;top:-20px;padding:30px;">
                    <p style="font-weight: 300;font-size:16px;">{{$page_18_2_text_5 }}</p>
                    <p style="font-size: 22px;color: #C5A367;margin-left:25px;">{{ $page_18_2_text_6 }}</p>
                </div>
            </div>
            <img src="images/home-selling/divider-1.png" alt="" height="230px"
                style="position: absolute;z-index:100;left:230px;top:756px;">
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page-19 page-19-1">
        <div class="page-bottom" style="position: absolute;bottom: 20px;text-align: center;">
            <img src="images/home-selling/high-res/logo.png" alt="" width="400px">
        </div>
    </div>

</body>

</html>