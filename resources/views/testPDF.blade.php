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
            margin-top: 150px;
        }

        .page-1 h1 {
            font-family: 'Lato';
        }

        .page-1 .title {
            letter-spacing: 15px;
            font-size: 140px;
            color: #C5A467;
            line-height: 115px;
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
            margin-bottom: -20px;
        }

        .page-1 .subtitle-bottom {
            font-size: 120px;
            line-height: 125px;
            letter-spacing: 63px;
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
            background-image: url("images/home-selling/listing_one.jpg");
            background-repeat: no-repeat;
            background-size: auto;
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
            background-repeat: no-repeat;
            background-size: cover;
            background-image: url("images/home-selling/P2.png");
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

        .page-2-2 .second-part {
            height: 17%;
            position: absolute;
            bottom: 0px;
            background-repeat: no-repeat;
            background-size: auto;
            background-image: url("images/home-selling/no-2.png");
            background-position: right;
            text-align: right;
        }

        .page-2-2 .second-part .text {
            margin-top: 30px;
            margin-right: 150px;
        }

        .page-2-2 .first-title {
            color: #C5A367;
            font-size: 30px !important;
            line-height: 0px !important;
            font-weight: 300 !important;
            letter-spacing: 3px;
        }

        .page-2-2 .second-title {
            color: #000 !important;
            font-weight: 300 !important;
            font-size: 38px;
            line-height: 25px;
        }

        .page-2-2 .third-title {
            font-size: 43px;
            font-weight: 300 !important;
            line-height: 30px;
            color: #C5A367;
            letter-spacing: 3px;
        }

        .page-2-2 .fourth-title {
            color: #000;
            font-size: 20px;
            font-weight: 300;
            letter-spacing: 7px;
            margin-right: -4px !important;
            line-height: 0px !important;
        }

        .page-3-1 .luxe-pro-info {
            background-image: url("images/home-selling/page-3.png");
            background-size: cover;
            height: 100%;
            position: absolute;
            bottom: 0px;
            width: 100%;
        }

        .page-3-1 .luxe-pro-info .text {
            position: absolute;
            bottom: 25%;
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
            margin: -70px auto;
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
            background-size: cover;
            height: 100%;
            position: absolute;
            bottom: 0px;
            width: 100%;
            position: relative;
        }

        .page-4-1 .luxe-pro-info .text {
            z-index: 100;
            position: absolute;
            bottom: 55%;
        }

        .page-4-1 .luxe-pro-info h2 {
            line-height: 18px;
            padding-left: 175px;
            font-size: 90px;
            color: #fff;
            z-index: 100;
            position: absolute;
            margin: 0 !important;
            font-weight: 300;
        }

        .page-4-1 .luxe-pro-info h1 {
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

        .page-4-1 .luxe-pro-info .subtitle {
            line-height: 45px;
            padding-left: 175px;
            font-size: 90px;
            color: #fff;
            z-index: 100;
            margin-top: 165px !important;
            font-weight: 300;
        }

        .page-4-1 img{
          position: absolute;
          width: 100%;
          height: 100%;
          z-index: -1;
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

        .page-5-1 .luxe-pro-info {
            background-image: url("images/home-selling/Asset 10.png");
            background-size: cover;
            height: 100%;
            position: absolute;
            bottom: 0px;
            width: 100%;
        }

        .page-5-1 .text {
            z-index: 100;
            position: absolute;
            bottom: 10%;
        }

        .page-5-1 .text h1 {
            font-size: 195px;
            color: #C5A367;
            font-weight: 300;
            letter-spacing: -12px;
            line-height: 140px;
            margin-bottom: -130px;
        }

        .page-5-1 .text h2 {
            font-size: 70px;
            color: white;
            font-weight: 300;
            margin-left: 320px;
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
            margin-bottom: 15px;
            font-weight: 300;
        }

        .page-6-1 .luxe-pro-info {
            background-image: url("images/home-selling/Asset 11.png");
            background-size: cover;
            height: 100%;
            position: absolute;
            bottom: 0px;
            width: 100%;
        }

        .page-6-1 .text {
            z-index: 100;
            position: absolute;
            bottom: 40%;
        }

        .page-6-1 .text h1 {
            font-size: 195px;
            color: #C5A367;
            font-weight: 300;
            letter-spacing: -12px;
            line-height: 140px;
            margin-bottom: -130px;
        }

        .page-6-1 .text h2 {
            font-size: 70px;
            color: white;
            font-weight: 300;
            margin-left: 320px;
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
            margin-bottom: 5px;
            font-weight: 300;
        }

        .page-6-2 .second-part {
            height: 17%;
            position: absolute;
            bottom: 0px;
            background-repeat: no-repeat;
            background-size: auto;
            background-image: url("images/home-selling/10.png");
            background-position: right;
            text-align: right;
        }

        .page-6-2 .second-part .text {
            margin-top: 30px;
            margin-right: 150px;
        }

        .page-6-2 .first-title {
            color: #C5A367;
            font-size: 30px !important;
            line-height: 0px !important;
            font-weight: 300 !important;
            letter-spacing: 3px;
        }

        .page-6-2 .second-title {
            color: #000 !important;
            font-weight: 300 !important;
            font-size: 38px;
            line-height: 25px;
        }

        .page-6-2 .third-title {
            font-size: 43px;
            font-weight: 300 !important;
            line-height: 30px;
            color: #C5A367;
            letter-spacing: 3px;
        }

        .page-6-2 .fourth-title {
            color: #000;
            font-size: 20px;
            font-weight: 300;
            letter-spacing: 7px;
            margin-right: -4px !important;
            line-height: 0px !important;
        }

        .page-8-2 .second-part {
            height: 17%;
            position: absolute;
            bottom: 0px;
            background-repeat: no-repeat;
            background-size: auto;
            background-image: url("images/home-selling/14.png");
            background-position: right;
            text-align: right;
        }

        .page-8-2 .second-part .text,
        .page-10-2 .second-part .text,
        .page-12-2 .second-part .text,
        .page-13-2 .second-part .text,
        .page-15-2 .second-part .text {
            margin-top: 30px;
            margin-right: 150px;
        }

        .page-8-2 .first-title,
        .page-10-2 .first-title,
        .page-12-2 .first-title,
        .page-13-2 .first-title,
        .page-15-2 .first-title {
            color: #C5A367;
            font-size: 30px !important;
            line-height: 0px !important;
            font-weight: 300 !important;
            letter-spacing: 3px;
        }

        .page-8-2 .second-title,
        .page-10-2 .second-title,
        .page-12-2 .second-title,
        .page-13-2 .second-title,
        .page-15-2 .second-title {
            color: #000 !important;
            font-weight: 300 !important;
            font-size: 38px;
            line-height: 25px;
        }

        .page-8-2 .third-title,
        .page-10-2 .third-title,
        .page-12-2 .third-title,
        .page-13-2 .third-title,
        .page-15-2 .third-title {
            font-size: 43px;
            font-weight: 300 !important;
            line-height: 30px;
            color: #C5A367;
            letter-spacing: 3px;
        }

        .page-8-2 .fourth-title,
        .page-10-2 .fourth-title,
        .page-12-2 .fourth-title,
        .page-13-2 .fourth-title,
        .page-15-2 .fourth-title {
            color: #000;
            font-size: 20px;
            font-weight: 300;
            letter-spacing: 7px;
            margin-right: -4px !important;
            line-height: 0px !important;
        }

        .page-10-2 .second-part {
            height: 17%;
            position: absolute;
            bottom: 0px;
            background-repeat: no-repeat;
            background-size: auto;
            background-image: url("images/home-selling/18.png");
            background-position: right;
            text-align: right;
        }

        .page-12-2 .second-part {
            height: 17%;
            position: absolute;
            bottom: 0px;
            background-repeat: no-repeat;
            background-size: auto;
            background-image: url("images/home-selling/22.png");
            background-position: right;
            text-align: right;
        }

        .page-12-1 .luxe-pro-info {
            background-image: url("images/home-selling/Asset 19.png");
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
            background-image: url("images/home-selling/Asset 20.png");
            background-size: cover;
            height: 100%;
            position: absolute;
            bottom: 0px;
            width: 100%;
        }

        .page-13-2 .second-part {
            height: 17%;
            position: absolute;
            bottom: 0px;
            background-repeat: no-repeat;
            background-size: auto;
            background-image: url("images/home-selling/24.png");
            background-position: right;
            text-align: right;
        }

        .page-14-1 {
            background-image: url("images/home-selling/Asset 21.png");
            background-size: cover;
            height: 100%;
            position: absolute;
            bottom: 0px;
            width: 100%;
        }

        .page-14-2 {
            background-image: url("images/home-selling/Asset 22.jpg");
            background-size: contain;
            height: 100%;
            position: absolute;
            bottom: 0px;
            width: 100%;
            background-repeat: no-repeat;
        }

        .page-15-1 {
            background-image: url("images/home-selling/Asset 23.png");
            background-size: cover;
            height: 100%;
            position: absolute;
            bottom: 0px;
            width: 100%;
        }

        .page-15-2 .second-part {
            height: 17%;
            position: absolute;
            bottom: 0px;
            background-repeat: no-repeat;
            background-size: auto;
            background-image: url("images/home-selling/28.png");
            background-position: right;
            text-align: right;
        }

        .page-16-1 {
            background-image: url("images/home-selling/Asset 24.png");
            background-size: cover;
            height: 100%;
            position: absolute;
            bottom: 0px;
            width: 100%;
        }

        .page-17-1 {
            background-image: url("images/home-selling/Asset 25.png");
            background-size: cover;
            height: 100%;
            position: absolute;
            bottom: 0px;
            width: 100%;
        }

        .page-18-1 {
            background-image: url("images/home-selling/Asset 26.png");
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
            <img src="images/Asset 1.png" alt="">
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
                    <img src="images/home-selling/Asset 5.png" alt="">
                </div>
                <div class="ojective-text ojective-text-1">
                    <h2 class="title">{{ $page_3_2_text_4}}</h2>
                    <p class="text">{{ $page_3_2_text_5}}</p>
                </div>
            </div>
            <div class="objective objective-2">
                <div class="ojective-image ojective-image-2">
                    <img src="images/home-selling/Asset 6.png" alt="">
                </div>
                <div class="ojective-text ojective-text-2">
                    <h2 class="title">{{ $page_3_2_text_6}}</h2>
                    <p class="text">{{ $page_3_2_text_7}}</p>
                </div>
            </div>
            <div class="objective objective-3">
                <div class="ojective-image ojective-image-3">
                    <img src="images/home-selling/Asset 7.png" alt="">
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
            <img src="{{ $page_4_1_img_1 }}" id="imageBackground">
            <div class="text">
                <h2>The</h2>
                <h1>Power</h1>
                <h2 class="subtitle">of Our Brand</h2>
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page-4 page-4-2">
        <img class="bg-image" src="images/home-selling/Asset 8.png" alt="">
        <div class="luxe-pro-info">
            <div class="spacer"></div>
            <div class="content">
                <div class="section section-1">
                    <span class="section-content-top">4</span>
                    <br>
                    <span class="section-content-bottom">Locations</span>
                </div>
                <div class="section section-2">
                    <span class="section-content-top">325</span>
                    <br>
                    <span class="section-content-bottom">Real Estate Agents</span>
                </div>
                <div class="section section-3">
                    <span class="section-content-top">61</span>
                    <br>
                    <span class="section-content-bottom">% Growth 2019</span>
                </div>
                <div class="section section-4">
                    <span class="section-content-top">67</span>
                    <br>
                    <span class="section-content-bottom">Days On Market</span>
                </div>
                <div class="section section-5">
                    <span class="section-content-top">3500</span>
                    <br>
                    <span class="section-content-bottom">Homes Sold</span>
                </div>
                <div class="section section-6">
                    <span class="section-content-top">98</span>
                    <br>
                    <span class="section-content-bottom">% List To Sale Price</span>
                </div>
            </div>
            <div class="text">
                <hr>
                <p>The LUXE Properties team has unparalleled history with successful home sales in the Greater Miami area. We have sold nearly 2,100 homes on average within less than 90 days. Our team delivers exceptional results.</p>
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

    <div class="page page-5 page-5-2">
        <img class="bg-image" src="images/home-selling/Asset 10.png" alt="">
        <div class="heading">
            <h2 class="subtitle-top">Tailored Listing</h2>
            <h1 class="title"><span style="color:white;">Ex</span>posure</h1>
            <h1 class="subtitle-bottom">Strategy</h1>
        </div>
        <div class="content">
            <p>Our specialized agents and marketing team work together to ensure your home is properly positioned in the marketplace for maximum exposure, both digitally and in print.</p>
            <p>Each property listing is marketed using the personalized materials below:</p>
            <ul>
                @for ($i = 0; $i <= 5; $i++) <li>Personalized website of home listing</li>
                    @endfor
            </ul>
            <p>Our marketing will maximize interest through our personalized campaigns created exclusively for your home, which will assist in achieving the greatest results.</p>
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

    <div class="page page-6 page-6-2">
        <img class="bg-image" src="images/home-selling/Asset 11.png" alt="">
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
        <div class="list-week-1" style="position: absolute;left:400px;top:80px;">
            <ul>
                @for ($y = 0; $y < 5; $y++) <li>Signage is placed</li>
                    @endfor
            </ul>
        </div>
        <div class="list-week-3" style="position: absolute;left:400px;top:250px;">
            <ul>
                @for ($y = 0; $y < 5; $y++) <li>Signage is placed</li>
                    @endfor
            </ul>
        </div>
        <div class="list-week-5" style="position: absolute;left:400px;top:420px;">
            <ul>
                @for ($y = 0; $y < 4; $y++) <li>Signage is placed</li>
                    @endfor
            </ul>
        </div>
        <div class="list-week-7" style="position: absolute;left:400px;top:580px;">
            <ul>
                @for ($y = 0; $y < 4; $y++) <li>Signage is placed</li>
                    @endfor
            </ul>
        </div>
        <div class="list-week-9" style="position: absolute;left:400px;top:740px;">
            <ul>
                @for ($y = 0; $y < 5; $y++) <li>Signage is placed</li>
                    @endfor
            </ul>
        </div>
        <div class="second-part">
            <div class="text">
                <span class="first-title">THE</span><br>
                <span class="second-title">HOME</span><br>
                <span class="third-title">SELLING</span><br>
                <span class="fourth-title">GUIDE</span><br>
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page-7 page-7-1">
        <div class="luxe-pro-info">
            <div class="row-1" style="background-image: url('images/home-selling/Asset 13-1.png');height:33%;position:absolute;top:0;background-size: cover;">
                <h1></h1>
            </div>
            <div class="row-2" style="background-image: url('images/home-selling/Asset 13-2.png');height:34%;position:absolute;top:33%;background-size: cover;">
                <h1></h1>
            </div>
            <div class="row-3" style="background-image: url('images/home-selling/Asset 13-3.png');height:33%;position:absolute;bottom:0;background-size: cover;">
                <h1></h1>
            </div>
            <div class="text" style="position:absolute;top:22%">
                <h1 style="font-size: 188px;color:white;letter-spacing: -12px;font-weight: 300;">Property</h1>
                <h2 style="font-size: 80px;color:white;font-weight: 300;letter-spacing: 24px;margin-top: -200px;margin-left:20px;">Showcase</h2>
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page-7 page-7-2" style="background-image: url('images/home-selling/Asset 13-1.png');height:33%;position:absolute;top:0;background-size: cover;background-position: center;background-position: -900px 0px;background-repeat:no-repeat;">
        <h1></h1>
    </div>
    <div class="page-7 page-7-2" style="background-image: url('images/home-selling/Asset 13-2.png');height:34%;position:absolute;top:33%;background-size: cover;background-position: center;background-position: -930px 0px;background-repeat:no-repeat;">
        <h1></h1>
    </div>
    <div class="page-7 page-7-2" style="background-image: url('images/home-selling/Asset 13-3.png');height:33%;position:absolute;bottom:0;background-size: cover;background-position: center;background-position: -908px 0px;background-repeat:no-repeat;">
        <h1></h1>
    </div>
    <div class="page-7 page-7-2" style="z-index:100;">
        <div class="section" style="position: absolute;top:50px;left:10px;">
            <img src="images/home-selling/Asset 13-4.png" alt="" style="position:absolute;">
            <div class="text" style="margin-top: -30px;z-index:1000;margin-left:70px;">
                <p style="font-size: 46px;line-height:20px;color:white;">Professional</p>
                <p style="font-size: 50px;font-weight:900;line-height:0px;">Photography</p>
            </div>
        </div>
        <div class="section" style="position: absolute;top:400px;left:10px;">
            <img src="images/home-selling/Asset 13-4.png" alt="" style="position:absolute;">
            <div class="text" style="margin-top: -30px;z-index:1000;margin-left:70px;">
                <p style="font-size: 46px;line-height:20px;color:white;">Professional</p>
                <p style="font-size: 50px;font-weight:900;line-height:0px;">Videography</p>
            </div>
        </div>
        <div class="section" style="position: absolute;top:800px;left:10px;">
            <img src="images/home-selling/Asset 13-4.png" alt="" style="position:absolute;">
            <div class="text" style="margin-top: -30px;z-index:1000;margin-left:70px;">
                <p style="font-size: 46px;line-height:20px;color:white;">Optional Drone</p>
                <p style="font-size: 50px;font-weight:900;line-height:0px;">Videography</p>
            </div>
        </div>
        <div class="section" style="position: absolute;top:50px;left:430px;">
            <p style="font-weight: 300;">LUXE listings receive the luxury treatment from beginning to end. It is proven that listings with professional real estate photographs sell 32% faster and at a higher price. All homes listed with LUXE include professional photography along with staging recommendations from our agents. These stunning high quality images of the interior/exterior of your property will be the cornerstone of our marketing materials, inviting homebuyers to want to see more of your home.</p>
        </div>
        <div class="section" style="position: absolute;top:400px;left:430px;">
            <p style="font-weight: 300;">LUXE listings receive the luxury treatment from beginning to end. It is proven that listings with professional real estate photographs sell 32% faster and at a higher price. All homes listed with LUXE include professional photography along with staging recommendations from our agents. These stunning high quality images of the interior/exterior of your property will be the cornerstone of our marketing materials, inviting homebuyers to want to see more of your home.</p>
        </div>
        <div class="section" style="position: absolute;top:800px;left:430px;">
            <p style="font-weight: 300;">LUXE listings receive the luxury treatment from beginning to end. It is proven that listings with professional real estate photographs sell 32% faster and at a higher price. All homes listed with LUXE include professional photography along with staging recommendations from our agents. These stunning high quality images of the interior/exterior of your property will be the cornerstone of our marketing materials, inviting homebuyers to want to see more of your home.</p>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page-8 page-8-1" style="background-image: url('images/home-selling/Asset 14.png');height:100%;position:absolute;top:0;background-size: cover;background-position: center;">
        <h1></h1>
    </div>

    <div class="page_break"></div>

    <div class="page page-8 page-8-2">
        <div class="heading">
            <h2 class="subtitle-top" style="font-weight: 300;font-size:70px;margin-bottom:-250px;margin-left:10px;margin-top:-50px;">Our</h2>
            <h1 class="title" style="font-size: 190px;color:#C6A467;font-weight:300;margin-bottom:-130px;">Digital</h1>
            <h1 class="subtitle-bottom" style="font-weight: 300;font-size: 75px;margin-left:280px;margin-bottom:-10px;">Advantage</h1>
        </div>
        <div class="content">
            <p style="font-weight: 300;padding-right:100px;">Our clients benefit from property exposure through shared listing syndication on a carefully chosen list of top real estate websites syndication on a carefully chosen list of top real estate websites and desired neighborhood websites where potential buyers frequently gather real estate information when looking for a home aided in choosing these distinct portals.</p>
            <p style="font-weight: 300;padding-right:100px;">All our syndication portals display your home with:</p>
            <ul style="list-style-image: url('images/home-selling/check-large.png');">
                @for ($i = 0; $i < 4; $i++) <li style="margin-bottom: 15px;font-weight: 400;">Personalized website of home listing</li>
                    @endfor
            </ul>
            <p style="font-weight: 300;padding-right:100px;">In addition to listing syndication, custom reporting will be provided for every channel to show how much exposure each listing is receiving from every channel to show how much exposure each listing is receiving from featured when possible on each of these online channels to ensure featured when possible on each of these online channels to ensure</p>
            <p style="font-weight: 300;padding-right:100px;">Custom reporting includes:</p>
            <ul style="list-style-image: url('images/home-selling/check-large.png');">
                @for ($i = 0; $i < 3; $i++) <li style="margin-bottom: 15px;font-weight: 400;">Personalized website of home listing</li>
                    @endfor
            </ul>
        </div>
        <div class="second-part">
            <div class="text">
                <span class="first-title">THE</span><br>
                <span class="second-title">HOME</span><br>
                <span class="third-title">SELLING</span><br>
                <span class="fourth-title">GUIDE</span><br>
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page-9 page-9-1" style="background-image: url('images/home-selling/Asset 15.png');height:100%;position:absolute;top:0;background-size: cover;background-position: left;">
        <h1></h1>
    </div>

    <div class="page_break"></div>

    <div class="page page-9 page-9-2" style="top:0;left:-500px;bottom:0;right:0;position:absolute;background-image: url('images/home-selling/Asset 15.png');background-size: cover;background-position: -600px -5px;background-repeat: no-repeat;">
        <div style="margin-left:515px;">
            <div class="heading" style="z-index:1000;">
                <h2 class="subtitle-top" style="font-weight: 300;font-size:70px;margin-bottom:-250px;margin-left:170px;margin-top:-50px;">Exclusive</h2>
                <h1 class="title" style="font-size: 150px;color:#C6A467;font-weight:300;margin-bottom:-130px;margin-left:-10px;"><span style="color: white;">Pr</span>operty</h1>
                <h1 class="subtitle-bottom" style="font-weight: 300;font-size: 75px;margin-left:250px;margin-bottom:-10px;">Sites</h1>
            </div>
            <div class="content" style="margin-left:165px;">
                <p style="font-weight: 300;padding-right:100px;">Pushing for unparalleled exposure for every LUXE Property client, each home listed with LUXE Properties receives a personalized website. Complete with its own unique domain of your street address, this site will also be syndicated to more than 30 major property search portals such as Zillow, Trulia and Realtor.com. This link, while highlighting a property’s best features, allows us to showcase the home with ease. The exclusive domain will provide a personalized site that does not feature any other competitive homes.</p>
                <p style="font-weight: 300;padding-right:100px;">These striking sites include all of the most important marketing features of your home and the latest online capabilities including:</p>
                <h3 style="color: #C5A367;font-size: 35px;font-weight: 900;margin-bottom:-20px;">Features</h3>
                <ul style="list-style-image: url('images/home-selling/check-large.png');">
                    @for ($i = 0; $i < 4; $i++) <li style="margin-bottom: 5px;font-weight: 400;">Personalized website of home listing</li>
                        @endfor
                </ul>
                <h3 style="color: #C5A367;font-size: 35px;font-weight: 900;margin-bottom:-20px;">Capabilities</h3>
                <ul style="list-style-image: url('images/home-selling/check-large.png');">
                    @for ($i = 0; $i < 3; $i++) <li style="margin-bottom: 5px;font-weight: 400;">Personalized website of home listing</li>
                        @endfor
                </ul>
                <p style="font-weight: 300;">This powerful online marketing tool impresses buyers and when advertised in print or online, gets interested buyers to the information they seek instantly.</p>
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page-10 page-10-1">
        <div class="section1" style="background-image: url('images/home-selling/Asset 16-1.png');height:50%;position:absolute;top:0;background-size: cover;background-position: left;">
            <h1></h1>
        </div>
        <div class="section1" style="background-image: url('images/home-selling/Asset 16-2.png');height:53%;position:absolute;top:50%;background-size: cover;background-position: left;">
            <h1></h1>
        </div>
        <h1 style="z-index: 100;background-image: url('images/home-selling/Asset 16-3.png');background-position: right;background-repeat: no-repeat;text-align:right;    color: #fff;padding-bottom:5px;
    font-size: 28px;">www.LUXEknows.com</h1>
        <h1 style="position:absolute;bottom:3%;right:0;z-index: 100;background-image: url('images/home-selling/Asset 16-3.png');background-position: right;background-repeat: no-repeat;text-align:right;    color: #fff;padding-bottom:5px;
    font-size: 28px;">www.allmiamihouseforsale.com</h1>
    </div>

    <div class="page_break"></div>

    <div class="page page-10 page-10-2">
        <div class="heading">
            <h2 class="subtitle-top" style="font-weight: 300;font-size:70px;margin-bottom:-290px;margin-left:350px;margin-top:-50px;">Our</h2>
            <h1 class="title" style="padding-left: 50px;font-size: 190px;color:#C6A467;font-weight:300;margin-bottom:-130px;">Online</h1>
            <h1 class="subtitle-bottom" style="font-weight: 300;font-size: 75px;margin-left:220px;margin-bottom:-10px;">Presence</h1>
        </div>
        <div class="content" style="padding-left: 50px;">
            <p style="font-weight: 300;padding-right:50px;">Having a strong online presence has widely become one of the most important tools in real estate, with 90% of buyers starting their home search online. LUXE Properties is committed to maintaining a powerful online presence fueled by engagement and up-to-date information on trends in the marketplace through our various proprietary websites as well as our social media outlets.</p>
            <h1 style="font-size: 35px;color: #C5A367;font-weight:900;margin-bottom:-30px;">www.LUXEknows.com</h1>

            <p style="font-weight: 300;padding-right:50px;">Our principal website features various content, from our exclusive listings to agent profiles and our blog posts. Here you can access our agent’s biographies, get in contact with any member of our team, and browse the MLS. We utilize our blog to showcase our latest listings, which are shared to various social media and online outlets. Many of our home listings are shared over 200 times throughout the web.</p>

            <h1 style="font-size: 35px;color: #C5A367;font-weight:900;margin-bottom:-30px;">www.allmiamihousesforsale.com</h1>

            <p style="font-weight: 300;padding-right:50px;">Our fully integrated MLS portal allows any user to receive a personalized response quickly via phone or email from one of our professional agents, be notified of new properties that match the user’s preferences, have the ability to save favorites and searches for easier access, request showings or more information on any listing and subscribe to customized property alerts. All LUXE listings are featured on this site and marketed using exclusive Pay-Per-Click campaigns.</p>

        </div>
        <div class="second-part">
            <div class="text">
                <span class="first-title">THE</span><br>
                <span class="second-title">HOME</span><br>
                <span class="third-title">SELLING</span><br>
                <span class="fourth-title">GUIDE</span><br>
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page-11 page-11-1">
        <div class="section1" style="background-image: url('images/home-selling/Asset 17.jpg');height:50%;position:absolute;top:-25px;background-size: contain;background-position: center;background-repeat: no-repeat;">
            <h1></h1>
        </div>
        <div class="section2" style="background-color: #C6A467;z-index:100;position:absolute;top:30%;margin:auto 60px;padding:30px;">
            <h1></h1>
            <div class="column-1" style="max-width: 65%; padding-top:65px;">
                <img src="images/home-selling/Asset 18-1.jpg" alt="" width="370px">
                <div class="introducing" style="background: #000;height: 258px;padding: 6px;width:90%; margin-top:-40px;">
                    <div class="inner" style="background: #262626;height:245px;padding:6px;">
                        <h2 style="text-align: center;font-weight: 400;font-size: 12px;margin:0;color:white;">INTRODUCING</h2>
                        <h2 style="text-align: center;font-weight: 400;font-size: 12px;margin:0;color:white;border-bottom:1px solid white;">3504 MAIN LODGE DR • MIAMI • FLORIDA</h2>
                        <p style="color: #fff;font-size: 12px;">This is a single family home that contains 7,178 sq ft and was built in 2008. It contains 7 bedrooms and 7 bathrooms. Spectacular Estate Home in the extremely exclusive neighborhood of Camp Biscayne, This home offers a lifestyle of maximum privacy and security while being just steps from the best that Coconut Grove provides. Walking distance to the best schools, shopping and resturants.</p>
                        <h2 style="text-align: center;color: #fff;font-size: 22px;font-weight: 300;">$4,499,000</h2>
                    </div>
                </div>
            </div>
            <img src="images/home-selling/Asset 18-6.jpg" alt="" style="z-index: 1000;">
        </div>
        <div class="column-2" style="position:absolute;width:210px;max-width:210px;top:32%; left:60%;z-index:100;">
            <div>
                <img src="images/home-selling/Asset 18-2.jpg" alt="" width="210px" height="130px">
            </div>
            <div>
                <img src="images/home-selling/Asset 18-3.jpg" alt="" width="210px" height="130px">
            </div>
            <div>
                <img src="images/home-selling/Asset 18-4.jpg" alt="" width="210px" height="130px">
            </div>
            <div>
                <img src="images/home-selling/Asset 18-5.jpg" alt="" width="210px" height="130px">
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-11 page-11-2">
        <div class="heading">
            <h2 class="subtitle-top" style="font-weight: 300;font-size:70px;margin-bottom:-290px;margin-left:350px;margin-top:-50px;">Your</h2>
            <h1 class="title" style="padding-left: 50px;font-size: 190px;color:#C6A467;font-weight:300;margin-bottom:-130px;">Home</h1>
            <h1 class="subtitle-bottom" style="font-weight: 300;font-size: 75px;margin-left:220px;margin-bottom:-10px;">In Print</h1>
        </div>
        <div class="content" style="padding-left: 50px;">
            <h1 style="font-size: 35px;color: #C5A367;font-weight:900;margin-bottom:-30px;">Direct Mail Marketing</h1>

            <p style="font-weight: 300;padding-right:50px;">Once a home is listed with LUXE Properties, our in-house marketing specialists get to work on designing a personalized marketing piece announcing the sale of your property. Targeted direct mail has a 495% increased response rate compared to traditional print direct mail. Through a comprehensive analysis of neighborhood homes sales and specific demographics, our marketers are able to identify the profile of a property’s most probable purchaser. In addition to targeted direct mail, we also focus on your surrounding neighborhood to reach the biggest endorsers for the area, your neighbors. Your neighbors may have friends and families who desire to live nearby.</p>

            <h1 style="font-size: 35px;color: #C5A367;font-weight:900;margin-bottom:-30px;">Luxury Brochures</h1>

            <p style="font-weight: 300;padding-right:50px;">Each LUXE listing receives a personalized luxury brochure placed in the home for any broker’s open, showings or open houses. These luxury brochures include high-quality images of the home and a list of features and amenities. These brochures ensure your home is memorable and at the forefront as buyers enter and leave. They aid buyers and their agents overcome most objections and questions before even leaving the home.</p>

            <h1 style="font-size: 35px;color: #C5A367;font-weight:900;margin-bottom:-30px;">Floor Plans</h1>

            <p style="font-weight: 300;padding-right:50px;">LUXE Properties offers customized floor plan services to effectively engage buyer’s interest in your property. When just viewing real estate photos online, it can be difficult for buyersee how the home’s layout flows. Floor plans help display where rooms are located in context to one another and provide an idea of important details, such as the way the space is oriented.</p>

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

    <div class="page page-12 page-12-2" style="top:0;left:-500px;bottom:0;right:0;position:absolute;background-image: url('images/home-selling/Asset 19.png');background-size: cover;background-position: -600px -5px;background-repeat: no-repeat;">
        <div class="content" style="margin-left:250px;">
            <p style="font-weight: 300;margin-left:450px;">Social media influence has continuously become one of our great-est assets. Whether it is through promotion of our newest listings or interaction with our followers, our connection to social media elicits another outlet of promotion for all properties listed with LUXE.</p>
            <p style="font-weight: 300;margin-left:450px;">It has increasingly become one of our greatest tools to market not only our exclusive listings but also our closings, referrals, and testimonials to gain an engaged following.</p>

            <h1 style="font-size: 35px;color: #C5A367;font-weight:900;margin-bottom:-5px;margin-left:450px;">Luxe Properties Stats</h1>

            <ul style="list-style-image: url('images/home-selling/check-large.png');">
                <li style="margin-bottom: 5px;font-weight: 300;margin-left:450px;">30,000+ followers across Twitter, LinkedIn, and Instagram</li>
                <li style="margin-bottom: 5px;font-weight: 300;margin-left:450px;">9,000+ Views on Youtube channel</li>
                <li style="margin-bottom: 5px;font-weight: 300;margin-left:450px;">3,000+ Likes on Facebook; 10,000+ users reached</li>
            </ul>

            <p style="font-weight: 300;margin-left:450px;">With a steadily growing following on all our social media channels, Facebook Sponsored Ads add another dimension to our reach. Our Facebook Ads are highly targeted to attract the most qualified buyers and interested parties.</p>
            <div style="margin-left:450px;margin-bottom:-22px;">
                <img src="images/home-selling/social1.jpg" alt="" style="float:left;width: 35px;margin-right: 10px;">
                <p style="font-weight: 300;margin-top: 3px;">app.luxeknows.com/luxe/</p>
            </div>
            <div style="margin-left:450px;margin-bottom:-22px;">
                <img src="images/home-selling/social2.jpg" alt="" style="float:left;width: 35px;margin-right: 10px;margin-top: 13px;">
                <p style="font-weight: 300;">@luxepropertiesmia</p>
            </div>
            <div style="margin-left:450px;margin-bottom:-22px;">
                <img src="images/home-selling/social3.jpg" alt="" style="float:left;width: 35px;margin-right: 10px;margin-top: 13px;">
                <p style="font-weight: 300;">LUXE Properties, LLC.</p>
            </div>
            <div style="margin-left:450px;margin-bottom:-22px;">
                <img src="images/home-selling/social4.jpg" alt="" style="float:left;width: 35px;margin-right: 10px;margin-top: 13px;">
                <p style="font-weight: 300;">@luxepropertiesmia</p>
            </div>
            <div style="margin-left:450px;margin-bottom:-22px;">
                <img src="images/home-selling/social5.jpg" alt="" style="float:left;width: 35px;margin-right: 10px;margin-top: 13px;">
                <p style="font-weight: 300;">@luxeproperties</p>
            </div>
            <div style="margin-left:450px;margin-bottom:-22px;">
                <img src="images/home-selling/social6.jpg" alt="" style="float:left;width: 35px;margin-right: 10px;margin-top: 13px;">
                <p style="font-weight: 300;">linkedin.com/company/luxe-properties-llc</p>
            </div>
            <div style="margin-left:450px;margin-bottom:-22px;">
                <img src="images/home-selling/social7.jpg" alt="" style="float:left;width: 35px;margin-right: 10px;margin-top: 13px;">
                <p style="font-weight: 300;">pinterest.com/luxeproperties</p>
            </div>
            <div style="margin-left:450px;margin-bottom:-22px;">
                <img src="images/home-selling/social8.jpg" alt="" style="float:left;width: 35px;margin-right: 10px;margin-top: 13px;">
                <p style="font-weight: 300;">youtube.com/c/LUXEProperties</p>
            </div>
        </div>
        <div class="second-part">
            <div class="text">
                <span class="first-title">THE</span><br>
                <span class="second-title">HOME</span><br>
                <span class="third-title">SELLING</span><br>
                <span class="fourth-title">GUIDE</span><br>
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page-13 page-13-1">
        <div class="content" style="position: absolute;bottom: 50%;">
            <h2 style="font-weight: 300;color:white;font-size:90px;margin-bottom:-180px;">Strategic</h2>
            <h1 style="font-weight: 300;color:#C5A367;font-size:140px;margin-bottom:-100px;">Property</h1>
            <h2 style="font-weight: 300;color:white;font-size:45px;margin-left:270px;">Tours</h2>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-13 page-13-2" style="top:0;left:-500px;bottom:0;right:0;position:absolute;background-image: url('images/home-selling/Asset 20.png');background-size: cover;background-position: -600px -5px;background-repeat: no-repeat;">
        <div class="content" style="margin-left:250px;">
            <h1 style="font-size: 35px;color: #C5A367;font-weight:900;margin-bottom:-5px;margin-left:450px;">Broker’s Open</h1>
            <p style="font-weight: 300;margin-left:450px;">The LUXE Properties team will host a broker’s open event for select agents who specialize in the area. This will bring cooperating agents and firms together, condensing some of the showing activi-ty into a set timeframe. These events allow us to receive immedi-ate authentic feedback on the home, its price and its competitive qualities when compared to the other homes on the market. Our broker’s open events are marketed through the following avenues:</p>

            <ul style="list-style-image: url('images/home-selling/check-large.png');">
                <li style="margin-bottom: 5px;font-weight: 300;margin-left:450px;">Invite prequalified brokers and agents specializing in neighborhood</li>
                <li style="margin-bottom: 5px;font-weight: 300;margin-left:450px;">Coordinate with other firms to schedule in sequence for maximum exposure in neighborhood</li>
                <li style="margin-bottom: 5px;font-weight: 300;margin-left:450px;">Coordinate with title firms and lenders to expand potential reach</li>
            </ul>

            <h1 style="font-size: 35px;color: #C5A367;font-weight:900;margin-bottom:-5px;margin-left:450px;">Broker’s Open</h1>
            <p style="font-weight: 300;margin-left:450px;">Public open houses will also be hosted on various weekends in order to ensure we are attracting buyers via every possible avenue. In a study by the National Association of Realtors, 45% of buyers attended open houses as a source of information. The more exposure, the better and this will continually increase the velocity of the sale of your property. Our open houses are marketed through the following avenues:</p>

            <ul style="list-style-image: url('images/home-selling/check-large.png');">
                <li style="margin-bottom: 5px;font-weight: 300;margin-left:450px;">Personalized email marketing campaigns to contact database</li>
                <li style="margin-bottom: 5px;font-weight: 300;margin-left:450px;">Posting dates and times on the MLS, Zillow, Trulia, Realtor.com and other syndication portals</li>
                <li style="margin-bottom: 5px;font-weight: 300;margin-left:450px;">Creative out-of-the-box methods to attract potential buyers such as food trucks, open house flags and balloons</li>
            </ul>
        </div>
        <div class="second-part">
            <div class="text">
                <span class="first-title">THE</span><br>
                <span class="second-title">HOME</span><br>
                <span class="third-title">SELLING</span><br>
                <span class="fourth-title">GUIDE</span><br>
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page-14 page-14-1">
        <div class="content" style="position: absolute;bottom: 55%;">
            <h2 style="font-weight: 300;color:white;font-size:90px;margin-bottom:-180px;margin-left:250px;">LUXE</h2>
            <h1 style="font-weight: 300;color:#C5A367;font-size:140px;margin-bottom:-100px;">Testimonials</h1>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-14 page-14-2">

    </div>

    <div class="page_break"></div>

    <div class="page-15 page-15-1">
        <div class="content" style="position: absolute;bottom: 55%;">
            <h2 style="font-weight: 300;color:white;font-size:50px;margin-bottom:-200px;margin-left:240px;">Meet</h2>
            <h1 style="font-weight: 300;color:#C5A367;font-size:140px;margin-bottom:-100px;margin-left:120px;">TheAgent</h1>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-15 page-15-2" style="top:0;left:-500px;bottom:0;right:0;position:absolute;background-image: url('images/home-selling/Asset 23.png');background-size: cover;background-position: -600px -5px;background-repeat: no-repeat;">
        <div class="content" style="margin-left:250px;">
            <h1 style="font-size: 135px;color:#C5A367;font-weight:300;margin-bottom:-65px;margin-top:-75px;margin-left:250px;"><span style="color: white;">Fe</span>rnando</h1>
            <h1 style="font-size: 35px;font-weight:300;margin-bottom:-5px;margin-left:450px;">J. Grullon</h1>

            <p style="font-weight: 300;margin-left:450px;">Fernando is a Certiﬁed Residential Specialist (CRS) which is the highest credential awarded to residential sales agents, managers and brokers by the National Association of Realtors. Along with his successful real estate career, Fernando holds a Masters Degree in International Business Administration from Spain and a Law Degree from the Dominican Republic.</p>
            <p style="font-weight: 300;margin-left:450px;">Fernando has served as a Council Member of the Young Professionals Network Leadership Board and as a State Director for the Miami Association of Realtors since 2016. He has been a Real Estate Professional in Miami since 2014, winning the Leading-Edge Society Award of BHHS Florida Realty in 2015, and recognized since 2016 as a "Top Producer" at Luxe Properties.</p>
            <p style="font-weight: 300;margin-left:450px;">Fernando Grullon guides every client through the real estate process with empathy, commitment, and integrity, Offering them a pleasant experience and a memorable transaction from beginning to end.</p>

        </div>
        <div class="second-part">
            <div class="text">
                <span class="first-title">THE</span><br>
                <span class="second-title">HOME</span><br>
                <span class="third-title">SELLING</span><br>
                <span class="fourth-title">GUIDE</span><br>
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page-16 page-16-1">
        <div class="content" style="position: absolute;bottom: 55%;">
            <h2 style="font-weight: 300;color:white;font-size:100px;margin-bottom:-200px;margin-left:120px;">Recent</h2>
            <h1 style="font-weight: 300;color:#C5A367;font-size:140px;margin-bottom:-100px;margin-left:120px;">Lisitings</h1>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-16 page-16-2" style="top:0;left:-500px;bottom:0;right:0;position:absolute;background-image: url('images/home-selling/Asset 24.png');background-size: cover;background-position: -600px -5px;background-repeat: no-repeat;">
        <div class="content" style="margin-left:450px;">
            <div class="section" style="margin-left:170px;">
                <div style="padding-top:0px;">
                    <div class="circle" style="background-color: #C5A367;float:left;padding:10px;border-radius: 600%;margin-top:20px;">
                        <div class="inner-section" style="background-color: white;padding:5px;border-radius: 550%;">
                            <img src="images/home-selling/Asset 24-1.jpg" alt="" width="166" height="166" style="border-radius: 500%;">
                        </div>
                    </div>
                </div>
                <div class="circle-text" style="margin-left: 30px;">
                    <p style="color: #C5A367;font-size: 26px;margin-bottom:-10px;">6495 SW 15 TERRACE</p>
                    <p style="margin-bottom:-10px;">PRICE: $2,375,000</p>
                    <p style="margin-bottom:-10px;">BEDS/BATHS: 6/6</p>
                    <p style="margin-bottom:-10px;">PRICE: $2,375,000</p>
                    <p style="margin-bottom:-10px;">LIVING AREA: 6,395 SQ FT</p>
                    <p style="margin-bottom:-10px;">LOT SIZE: 38,768 SQ FT</p>
                </div>
            </div>
            <div class="section" style="margin-left:120px;margin-top:10px;">
                <div style="padding-top:0px;">
                    <div class="circle" style="background-color: black;float:left;padding:10px;border-radius: 600%;margin-top:20px;">
                        <div class="inner-section" style="background-color: white;padding:5px;border-radius: 550%;">
                            <img src="images/home-selling/Asset 24-2.jpg" alt="" width="166" height="166" style="border-radius: 500%;">
                        </div>
                    </div>
                </div>
                <div class="circle-text" style="margin-left: 30px;">
                    <p style="font-size: 26px;margin-bottom:-10px;">6495 SW 15 TERRACE</p>
                    <p style="margin-bottom:-10px;">PRICE: $2,375,000</p>
                    <p style="margin-bottom:-10px;">BEDS/BATHS: 6/6</p>
                    <p style="margin-bottom:-10px;">PRICE: $2,375,000</p>
                    <p style="margin-bottom:-10px;">LIVING AREA: 6,395 SQ FT</p>
                    <p style="margin-bottom:-10px;">LOT SIZE: 38,768 SQ FT</p>
                </div>
            </div>
            <div class="section" style="margin-left:170px;margin-top:10px;">
                <div style="padding-top:0px;">
                    <div class="circle" style="background-color: #C5A367;float:left;padding:10px;border-radius: 600%;margin-top:20px;">
                        <div class="inner-section" style="background-color: white;padding:5px;border-radius: 550%;">
                            <img src="images/home-selling/Asset 24-3.jpg" alt="" width="166" height="166" style="border-radius: 500%;">
                        </div>
                    </div>
                </div>
                <div class="circle-text" style="margin-left: 30px;">
                    <p style="color: #C5A367;font-size: 26px;margin-bottom:-10px;">6495 SW 15 TERRACE</p>
                    <p style="margin-bottom:-10px;">PRICE: $2,375,000</p>
                    <p style="margin-bottom:-10px;">BEDS/BATHS: 6/6</p>
                    <p style="margin-bottom:-10px;">PRICE: $2,375,000</p>
                    <p style="margin-bottom:-10px;">LIVING AREA: 6,395 SQ FT</p>
                    <p style="margin-bottom:-10px;">LOT SIZE: 38,768 SQ FT</p>
                </div>
            </div>
            <div class="section" style="margin-left:120px;margin-top:10px;">
                <div style="padding-top:0px;">
                    <div class="circle" style="background-color: black;float:left;padding:10px;border-radius: 600%;margin-top:20px;">
                        <div class="inner-section" style="background-color: white;padding:5px;border-radius: 550%;">
                            <img src="images/home-selling/Asset 24-4.jpg" alt="" width="166" height="166" style="border-radius: 500%;">
                        </div>
                    </div>
                </div>
                <div class="circle-text" style="margin-left: 30px;">
                    <p style="font-size: 26px;margin-bottom:-10px;">6495 SW 15 TERRACE</p>
                    <p style="margin-bottom:-10px;">PRICE: $2,375,000</p>
                    <p style="margin-bottom:-10px;">BEDS/BATHS: 6/6</p>
                    <p style="margin-bottom:-10px;">PRICE: $2,375,000</p>
                    <p style="margin-bottom:-10px;">LIVING AREA: 6,395 SQ FT</p>
                    <p style="margin-bottom:-10px;">LOT SIZE: 38,768 SQ FT</p>
                </div>
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page-17 page-17-1">
        <div class="content" style="position: absolute;bottom: 55%;">
            <h2 style="font-weight: 300;color:white;font-size:100px;margin-bottom:-200px;margin-left:120px;">Recent</h2>
            <h1 style="font-weight: 300;color:#C5A367;font-size:140px;margin-bottom:-100px;margin-left:120px;">Sales</h1>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-17 page-17-2" style="top:0;left:-500px;bottom:0;right:0;position:absolute;background-image: url('images/home-selling/Asset 25.png');background-size: cover;background-position: -600px -5px;background-repeat: no-repeat;">
        <div class="content" style="margin-left:450px;">
            <div class="section" style="margin-left:170px;background-color: #C5A367;padding-bottom:20px;border-radius:700%;margin-bottom:20px;">
                <div style="padding-top:0px;padding-bottom:20px;">
                    <div class="circle" style="float:left;border-radius: 600%;margin-bottom:30px;">
                        <div class="inner-section" style="border-radius: 550%;">
                            <img src="images/home-selling/Asset 24-1.jpg" alt="" width="166" height="166" style="border-radius: 500%;margin-top:20px;margin-left:20px;">
                        </div>
                    </div>
                </div>
                <div class="circle-text" style="margin-left: 30px;">
                    <p style="color:white;font-size: 26px;margin-bottom:-10px;">6495 SW 25 TERRACE</p>
                    <p style="margin-bottom:-10px;font-size:14px;">PRICE: $2,375,000</p>
                    <p style="margin-bottom:-10px;font-size:14px;">BEDS/BATHS: 6/6</p>
                    <p style="margin-bottom:-10px;font-size:14px;">LIVING AREA: 6,395 SQ FT</p>
                    <p style="margin-bottom:-10px;font-size:14px;">LOT SIZE: 38,768 SQ FT</p>
                    <p style="margin-bottom:-10px;font-size:14px;">DAYS ON MARKET: 7</p>
                </div>
            </div>

            <div class="section" style="margin-left:170px;background-color: #C5A367;padding-bottom:20px;border-radius:700%;margin-bottom:20px;">
                <div style="padding-top:0px;padding-bottom:20px;">
                    <div class="circle" style="float:left;border-radius: 600%;margin-bottom:30px;">
                        <div class="inner-section" style="border-radius: 550%;">
                            <img src="images/home-selling/Asset 24-1.jpg" alt="" width="166" height="166" style="border-radius: 500%;margin-top:20px;margin-left:20px;">
                        </div>
                    </div>
                </div>
                <div class="circle-text" style="margin-left: 30px;">
                    <p style="color:white;font-size: 26px;margin-bottom:-10px;">6495 SW 25 TERRACE</p>
                    <p style="margin-bottom:-10px;font-size:14px;">PRICE: $2,375,000</p>
                    <p style="margin-bottom:-10px;font-size:14px;">BEDS/BATHS: 6/6</p>
                    <p style="margin-bottom:-10px;font-size:14px;">LIVING AREA: 6,395 SQ FT</p>
                    <p style="margin-bottom:-10px;font-size:14px;">LOT SIZE: 38,768 SQ FT</p>
                    <p style="margin-bottom:-10px;font-size:14px;">DAYS ON MARKET: 7</p>
                </div>
            </div>

            <div class="section" style="margin-left:170px;background-color: #C5A367;padding-bottom:20px;border-radius:700%;margin-bottom:20px;">
                <div style="padding-top:0px;padding-bottom:20px;">
                    <div class="circle" style="float:left;border-radius: 600%;margin-bottom:30px;">
                        <div class="inner-section" style="border-radius: 550%;">
                            <img src="images/home-selling/Asset 24-1.jpg" alt="" width="166" height="166" style="border-radius: 500%;margin-top:20px;margin-left:20px;">
                        </div>
                    </div>
                </div>
                <div class="circle-text" style="margin-left: 30px;">
                    <p style="color:white;font-size: 26px;margin-bottom:-10px;">6495 SW 25 TERRACE</p>
                    <p style="margin-bottom:-10px;font-size:14px;">PRICE: $2,375,000</p>
                    <p style="margin-bottom:-10px;font-size:14px;">BEDS/BATHS: 6/6</p>
                    <p style="margin-bottom:-10px;font-size:14px;">LIVING AREA: 6,395 SQ FT</p>
                    <p style="margin-bottom:-10px;font-size:14px;">LOT SIZE: 38,768 SQ FT</p>
                    <p style="margin-bottom:-10px;font-size:14px;">DAYS ON MARKET: 7</p>
                </div>
            </div>

            <div class="section" style="margin-left:170px;background-color: #C5A367;padding-bottom:20px;border-radius:700%;margin-bottom:20px;">
                <div style="padding-top:0px;padding-bottom:20px;">
                    <div class="circle" style="float:left;border-radius: 600%;margin-bottom:30px;">
                        <div class="inner-section" style="border-radius: 550%;">
                            <img src="images/home-selling/Asset 24-1.jpg" alt="" width="166" height="166" style="border-radius: 500%;margin-top:20px;margin-left:20px;">
                        </div>
                    </div>
                </div>
                <div class="circle-text" style="margin-left: 30px;">
                    <p style="color:white;font-size: 26px;margin-bottom:-10px;">6495 SW 25 TERRACE</p>
                    <p style="margin-bottom:-10px;font-size:14px;">PRICE: $2,375,000</p>
                    <p style="margin-bottom:-10px;font-size:14px;">BEDS/BATHS: 6/6</p>
                    <p style="margin-bottom:-10px;font-size:14px;">LIVING AREA: 6,395 SQ FT</p>
                    <p style="margin-bottom:-10px;font-size:14px;">LOT SIZE: 38,768 SQ FT</p>
                    <p style="margin-bottom:-10px;font-size:14px;">DAYS ON MARKET: 7</p>
                </div>
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page-18 page-18-1">
        <div class="content" style="position: absolute;bottom: 55%;">
            <h2 style="font-weight: 300;color:white;font-size:80px;margin-bottom:-170px;margin-left:150px;">Happy</h2>
            <h1 style="font-weight: 300;color:#C5A367;font-size:140px;margin-bottom:-90px;margin-left:120px;">Clients</h1>
            <h2 style="font-weight: 300;color:white;font-size:40px;margin-bottom:-150px;margin-left:230px;">Testimonials</h2>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-18 page-18-2" style="top:0;left:-500px;bottom:0;right:0;position:absolute;background-image: url('images/home-selling/Asset 26.png');background-size: cover;background-position: -600px -5px;background-repeat: no-repeat;">
        <div class="content" style="margin-left:550px;">
            <div class="section" style="border:1px solid gray;margin-bottom:20px;padding-bottom:0px;">
                <img src="images/home-selling/Asset 27.png" alt="" style="float: left;margin-bottom:-30px;" height="230px">
                <img src="images/home-selling/divider-1.png" alt="" height="230px" style="margin-left:-114px;z-index:100;margin-top:47px;margin-bottom:-50px;">
                <div class="text" style="position: absolute;padding-left:30px;">
                    <p style="font-weight: 300;font-size:16px;">"Awesomeness Customer Services!!! Dedication and Total commitment to his client's, He help us with care to ﬁnd us our Home. We highly recommend Mrs. Fernando Grullon"</p>
                    <p style="font-size: 22px;color: #C5A367;margin-left:25px;">- Mrs. Mercy</p>
                </div>
            </div>

            <div class="section" style="border:1px solid gray;margin-bottom:20px;">
                <img src="images/home-selling/Asset 27.png" alt="" style="float: left;margin-bottom:-30px;" height="230px">
                <img src="images/home-selling/divider-1.png" alt="" height="230px" style="margin-left:-114px;z-index:100;margin-top:47px;margin-bottom:-50px;">
                <div class="text" style="position: absolute;padding-left:30px;">
                    <p style="font-weight: 300;font-size:16px;">"Awesomeness Customer Services!!! Dedication and Total commitment to his client's, He help us with care to ﬁnd us our Home. We highly recommend Mrs. Fernando Grullon"</p>
                    <p style="font-size: 22px;color: #C5A367;margin-left:25px;">- Mrs. Mercy</p>
                </div>
            </div>

            <div class="section" style="border:1px solid gray;margin-bottom:20px;">
                <img src="images/home-selling/Asset 27.png" alt="" style="float: left;margin-bottom:-30px;" height="230px">
                <img src="images/home-selling/divider-1.png" alt="" height="230px" style="margin-left:-114px;z-index:100;margin-top:47px;margin-bottom:-50px;">
                <div class="text" style="position: absolute;padding-left:30px;">
                    <p style="font-weight: 300;font-size:16px;">"Awesomeness Customer Services!!! Dedication and Total commitment to his client's, He help us with care to ﬁnd us our Home. We highly recommend Mrs. Fernando Grullon"</p>
                    <p style="font-size: 22px;color: #C5A367;margin-left:25px;">- Mrs. Mercy</p>
                </div>
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page-19 page-19-1">
        <div class="page-bottom" style="position: absolute;bottom: 20px;text-align: center;">
            <img src="images/last.png" alt="">
        </div>
    </div>

</body>

</html>
