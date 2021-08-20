<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Buying Guide</title>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Lato:300,400,700');
        @import url('https://fonts.googleapis.com/css?family=Lato:600');
        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@900&display=swap');

        @import url('https://fonts.googleapis.com/css2?family=Oswald&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@600&display=swap');


        @page {
            padding: 0px;
            margin: 0px;
            size: 1000px 1254px;
        }

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

        body {
            padding: 0px;
            margin: 0px;
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

        .font-600 {
            font-weight: 600
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

        .oswald {
            font-family: 'Oswald';
            font-weight: 400;
        }

        .oswald-med {
            font-family: 'Oswald';
            font-weight: 500;
        }

        .oswald-bold {
            font-family: 'Oswald';
            font-weight: 600;
        }

        .text-center {
            text-align: center;
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

        ul.golden-list {
            list-style: none;
            width: 80%;
        }

        ul.golden-list li {
            font-size: 18px;
        }

        ul.golden-list li::before {
            content: "\2022";
            margin-right: 15px;
            color: #C9A668;
        }

        .absolute {
            position: absolute;
        }

        .page-number-left {
            top: 47px;
            left: 95px;
            font-size: 20px;
        }

        .page-number-right {
            top: 47px;
            left: 840px;
            font-size: 20px;
        }

        .w-100 {
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="page page-1">
        <div class="absolute" style="top:450px;left:50px;">
            <img src="{{$img_1}}" alt="" width="900px" height="700px">
        </div>
        <div class="absolute" style="top:0;left:0;">
            <img src="images/home-didnt-sell/page-1.png" alt="">
        </div>
        <div class="absolute" style="top:1060px;left:160px;">
            <img src="images/home-didnt-sell/logo.png" alt="">
        </div>
        <div class="absolute" style="top:100px;left:150px;">
            <p class="gold font-thin" style="font-size: 80px;">{!! $text_1 !!}</p>
        </div>
        <div class="absolute" style="top:190px;left:270px;">
            <p class="font-bold" style="font-size: 80px;">{!! $text_2 !!}</p>
        </div>
        <div class="absolute" style="top:450px;left:170px;">
            <p class="font-bold white" style="font-size: 100px;">{!! $text_3 !!}</p>
        </div>
        <div class="absolute" style="top:1160px;left:650px;">
            <p class="font-bold" style="font-size: 18px;letter-spacing:6px;">LUXE PROPERTIES LLC</p>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-2">
        <div class="absolute" style="top:130px;right:0;">
            <div style="height:700px;width:320px;
                background:url('{{$img_2}}');
                background-size:cover;
                background-position: left;
            ">
                <h1></h1>
            </div>
        </div>
        <div class="absolute" style="top:0;left:0;">
            <img src="images/home-didnt-sell/page-2.png" alt="">
        </div>
        <div class="absolute page-number-left">
            <p>Page 02</p>
        </div>
        <div class="absolute" style="top:200px;right:400px;text-align:right;">
            <p class="font-thin" style="font-size: 60px;">{!! $text_4 !!}</p>
            <p class="font-bold gold" style="font-size: 75px;margin-top:-35px;">{!! $text_5 !!}</p>
        </div>
        <div class="absolute" style="top:500px;right:700px;text-align:right;">
            <p class="oswald-bold white" style="font-size: 65px;">{!! $text_6 !!}</p>
            <p class="oswald-bold white" style="font-size: 65px;margin-top:-20px;">{!! $text_8 !!}</p>
            <p class="oswald-bold white" style="font-size: 65px;margin-top:-20px;">{!! $text_10 !!}</p>
            <p class="oswald-bold white" style="font-size: 65px;margin-top:-20px;">{!! $text_12 !!}</p>
            <p class="oswald-bold white" style="font-size: 65px;margin-top:-20px;">{!! $text_14 !!}</p>
            <p class="oswald-bold white" style="font-size: 65px;margin-top:-20px;">{!! $text_16 !!}</p>
        </div>
        <div class="absolute" style="top:500px;left:350px;">
            <p class="oswald-med white" style="font-size:20px;line-height:65px;">{!! $text_7 !!}</p>
            <p class="oswald-med white" style="font-size:20px;line-height:65px;">{!! $text_9 !!}</p>
            <p class="oswald-med white" style="font-size:20px;line-height:65px;">{!! $text_11 !!}</p>
            <p class="oswald-med white" style="font-size:20px;line-height:65px;">{!! $text_13 !!}</p>
            <p class="oswald-med white" style="font-size:20px;line-height:65px;">{!! $text_15 !!}</p>
            <p class="oswald-med white" style="font-size:20px;line-height:65px;">{!! $text_17 !!}</p>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-3">
        <div class="absolute" style="top:0;left:0;">
            <img src="images/home-didnt-sell/page-3.png" alt="">
        </div>
        <div class="absolute" style="top:150px;left:-2px;">
            <img src="{{$img_2}}" alt="" width="840px" height="600px">
        </div>
        <div class="absolute page-number-right">
            <p>Page 03</p>
        </div>
        <div class="absolute" style="top:820px;left:220px;">
            <p class="font-thin" style="font-size: 38px;">{!! $text_18 !!}</p>
            <p class="font-bold gold" style="font-size: 45px;margin-top:-25px;">{!! $text_19 !!}</p>
        </div>
        <div class="absolute" style="top:970px;left:220px;right:60px;">
            <p class="font-thin" style="font-size: 18px;">{!! $text_20 !!}</p>
        </div>
        <style>
            .bullet-list {
                list-style: none;
            }

            .bullet-list img {
                width: 6px;
                margin-right: 5px;
                padding-bottom: 3px;
            }
        </style>
        <div class="absolute" style="top:1050px;left:180px;width:350px;">
            <ul class="bullet-list">
                <?php $text_21 = explode("\n", $text_21); ?>
                @foreach ($text_21 as $text)
                <li><span><img src="images/home-didnt-sell/bullet.png" alt=""></span>{{ $text }}</li>
                @endforeach
            </ul>
        </div>
        <div class="absolute" style="top:1050px;left:530px;width:350px;">
            <ul class="bullet-list">
                <?php $text_22 = explode("\n", $text_22); ?>
                @foreach ($text_22 as $text)
                <li><span><img src="images/home-didnt-sell/bullet.png" alt=""></span>{{ $text }}</li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-4">
        <div class="absolute" style="top:130px;right:0;">
            <div style="height:700px;width:420px;
                        background:url('{{$img_3}}');
                        background-size:cover;
                        background-position: left;
                    ">
                <h1></h1>
            </div>
        </div>
        <div class="absolute" style="top:0;left:0;">
            <img src="images/home-didnt-sell/page-4.png" alt="">
        </div>
        <div class="absolute page-number-left">
            <p>Page 04</p>
        </div>
        <div class="absolute" style="top:220px;left:130px;">
            <p class="font-thin" style="font-size: 38px;">{!! $text_23 !!}</p>
            <p class="font-bold gold" style="font-size: 45px;margin-top:-25px;">{!! $text_24 !!}</p>
        </div>
        <div class="absolute" style="top:370px;left:130px;width:42%;">
            <p class="font-thin" style="font-size: 18px;">{!! $text_25 !!}</p>
        </div>
        <div class="absolute" style="top:600px;left:160px;width:42%;">
            <p class="font-thin" style="font-size: 18px;text-align:justify;">{!! $text_26 !!}</p>
        </div>
        <div class="absolute" style="top:900px;left:680px;">
            <p class="font-thin" style="font-size: 32px;line-height:25px;">{!! $text_27 !!}</p>
            <p class="font-bold gold" style="font-size: 40px;line-height:35px;">{!! $text_28 !!}</p>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-5">
        <div class="absolute" style="top:0;left:0;">
            <img src="images/home-didnt-sell/page-5.png" alt="">
        </div>
        <div class="absolute" style="top:130px;left:-2px;">
            <div style="height:600px;width:490px;
                                background:url('{{$img_3}}');
                                background-size:cover;
                                background-position: right;
                            ">
                <h1></h1>
            </div>
        </div>
        <div class="absolute page-number-right">
            <p>Page 05</p>
        </div>
        <div class="absolute" style="top:220px;left:520px;">
            <p class="font-thin" style="font-size: 38px;">{!! $text_29 !!}</p>
            <p class="font-bold gold" style="font-size: 45px;margin-top:-25px;">{!! $text_30 !!}</p>
        </div>
        <div class="absolute" style="top:390px;left:520px;right:100px;">
            <p class="font-thin" style="font-size: 18px;text-align:justify;">{!! $text_31 !!}</p>
        </div>
        <div class="absolute" style="top:830px;left:180px;width:300px;">
            <p class="font-thin" style="font-size: 18px;text-align:justify;">{!! $text_32 !!}</p>
        </div>
        <div class="absolute" style="top:830px;left:520px;width:380px;">
            <p class="font-thin" style="font-size: 18px;text-align:justify;">{!! $text_33 !!}</p>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-6">
        <div class="absolute" style="top:0;left:0;">
            <img src="images/home-didnt-sell/page-6.png" alt="">
        </div>
        <div class="absolute" style="top:130px;right:0;">
            <div style="height:608px;width:440px;
                        background:url('{{$img_4}}');
                        background-size:cover;
                        background-position: left;
                    ">
                <h1></h1>
            </div>
        </div>
        <div class="absolute page-number-left">
            <p>Page 06</p>
        </div>
        <div class="absolute" style="top:200px;left:130px;">
            <p class="font-thin" style="font-size: 38px;">{!! $text_34 !!}</p>
            <p class="font-bold gold" style="font-size: 45px;margin-top:-25px;">{!! $text_35 !!}</p>
        </div>
        <div class="absolute" style="top:350px;left:130px;width:380px;">
            <p class="font-thin" style="font-size: 18px;text-align:justify;">{!! $text_36 !!}</p>
        </div>
        <div class="absolute" style="top:800px;left:150px;right:250px;">
            <p class="font-thin white" style="font-size: 18px;text-align:justify;">{!! $text_37 !!}</p>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-7">
        <div class="absolute" style="top:130px;left:-2px;">
            <div style="height:608px;width:420px;
                                background:url('{{$img_4}}');
                                background-size:cover;
                                background-position: left;
                            ">
                <h1></h1>
            </div>
        </div>
        <div class="absolute" style="top:0;left:0;">
            <img src="images/home-didnt-sell/page-7.png" alt="">
        </div>
        <div class="absolute page-number-right">
            <p>Page 07</p>
        </div>
        <div class="absolute" style="top:220px;left:460px;">
            <p class="font-thin" style="font-size: 38px;">{!! $text_38 !!}</p>
            <p class="font-bold gold" style="font-size: 45px;margin-top:-25px;">{!! $text_39 !!}</p>
        </div>
        <div class="absolute" style="top:350px;left:460px;right:100px;">
            <p class="font-thin" style="font-size: 18px;text-align:justify;">{!! $text_40 !!}</p>
            <p class="gold font-bold" style="text-align: right;font-size:20px;margin-top:20px;">{!! $text_41 !!}</p>
        </div>
        <div class="absolute" style="top:750px;left:190px;width:300px;">
            <p class="font-thin" style="font-size: 18px;text-align:justify;">{!! $text_42 !!}</p>
            <p class="gold font-bold" style="text-align: right;font-size:20px;margin-top:20px;">{!! $text_43 !!}</p>
        </div>
        <div class="absolute" style="top:670px;left:570px;width:330px;">
            <p class="font-thin" style="font-size: 18px;text-align:justify;">{!! $text_44 !!}</p>
            <p class="gold font-bold" style="text-align: right;font-size:20px;margin-top:20px;">{!! $text_45 !!}</p>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-8">
        <div class="absolute" style="top:0;left:0;">
            <img src="images/home-didnt-sell/page-8.png" alt="">
        </div>
        <div class="absolute page-number-left">
            <p>Page 08</p>
        </div>
        <div class="absolute" style="top:140px;right:-280px;">
            <img src="{{$img_5}}" alt="" width="380px" height="320px">
        </div>
        <div class="absolute" style="top:630px;right:-280px;">
            <img src="{{$img_6}}" alt="" width="380px" height="460px">
        </div>
        <div class="absolute" style="top:150px;left:380px;right:200px;">
            <p class="font-thin" style="font-size: 18px;text-align:justify;">{!! $text_46 !!}</p>
            <p class="gold font-bold" style="text-align: right;font-size:20px;margin-top:20px;">{!! $text_47 !!}</p>
        </div>
        <div class="absolute" style="top:550px;left:380px;right:200px;">
            <p class="font-thin white" style="font-size: 18px;text-align:justify;">{!! $text_48 !!}</p>
            <p class="gold font-bold" style="text-align: right;font-size:20px;margin-top:20px;">{!! $text_49 !!}</p>
        </div>
        <div class="absolute" style="top:830px;left:380px;right:200px;">
            <p class="font-thin white" style="font-size: 18px;text-align:justify;">{!! $text_50 !!}</p>
            <p class="gold font-bold" style="text-align: right;font-size:20px;margin-top:20px;">{!! $text_51 !!}</p>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-9">
        <div class="absolute" style="top:0;left:0;">
            <img src="images/home-didnt-sell/page-9.png" alt="">
        </div>
        <div class="absolute page-number-right">
            <p>Page 09</p>
        </div>
        <div class="absolute" style="top:140px;left:-30px;">
            <img src="{{$img_5}}" alt="" width="380px" height="320px">
        </div>
        <div class="absolute" style="top:630px;left:-30px;">
            <img src="{{$img_6}}" alt="" width="380px" height="460px">
        </div>
        <div class="absolute" style="top:270px;left:470px;right:100px;">
            <p class="font-thin" style="font-size: 18px;text-align:justify;">{!! $text_52 !!}</p>
            <p class="gold font-bold" style="text-align: right;font-size:20px;margin-top:20px;">{!! $text_53 !!}</p>
        </div>
        <div class="absolute" style="top:640px;left:470px;right:100px;">
            <p class="font-thin" style="font-size: 18px;text-align:justify;">{!! $text_54 !!}</p>
            <p class="gold font-bold" style="text-align: right;font-size:20px;margin-top:20px;">{!! $text_55 !!}</p>
        </div>
        <div class="absolute" style="top:730px;left:120px;width:170px;">
            <p class="font-thin white" style="font-size: 22px;line-height:20px;">{!! $text_56 !!}</p>
            <p class="font-bold white" style="font-size:26px;margin-bottom:10px;line-height:24px;">{!! $text_57 !!}</p>
            <img src="{{$img_7}}" alt="" width="140px" height="85px;">
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-10">
        <div class="absolute" style="top:0;left:0;">
            <img src="images/home-didnt-sell/page-10.png" alt="">
        </div>
        <div class="absolute page-number-left">
            <p>Page 10</p>
        </div>
        <style>
            .table-list {
                font-size: 18px;
                line-height: 23.43px;
                letter-spacing: -0.3px;
            }
        </style>
        <div class="absolute" style="top:135px;left:160px;">
            <p class="font-thin" style="font-size: 45px;line-height:40px;">{!! $text_58 !!}</p>
            <p class="font-bold gold" style="font-size: 45px;line-height:40px;">{!! $text_59 !!}</p>
        </div>
        <div class="absolute" style="top:263px;left:524px;">
            <p class="font-thin gold" style="font-size: 20px;">Luxe</p>
        </div>
        <div class="absolute" style="top:263px;left:598px;">
            <p class="font-thin white" style="font-size: 20px;">Luxe Premium</p>
        </div>
        <div class="absolute" style="top:263px;left:747px;">
            <p class="font-thin gold" style="font-size: 20px;">Luxe Reserve</p>
        </div>
        <div class="absolute" style="top:1110px;left:170px;">
            <p class="font-thin" style="font-size: 18px;">All options require<br>Broker and Seller Agreement<br>on Price
                and Terms</p>
        </div>
        <div class="absolute" style="top:296px;left:145px;">
            <p class="font-thin table-list">LUXE Pre-Launch Campaign</p>
            <p class="font-thin table-list">Quick-Shot Photos Pre-MLS push to Social Media</p>
            <p class="font-thin table-list">Pre-MLS invitation to preview to email mailing list</p>
            <p class="font-thin table-list">Matter Port</p>
            <p class="font-thin table-list">LUXE Visual</p>
            <p class="font-thin table-list">Professional Photography</p>
            <p class="font-thin table-list">Twilight Photography</p>
            <p class="font-thin table-list">Professionally Printed Brochure</p>
            <p class="font-thin table-list">Professional Video</p>
            <p class="font-thin table-list">Professional Video with Drone</p>
            <p class="font-thin table-list">Professional Interactive Floor Plan</p>
            <p class="font-thin table-list">LUXE Digital</p>
            <p class="font-thin table-list">Wall Street Journal Digital</p>
            <p class="font-thin table-list">NYT Digital</p>
            <p class="font-thin table-list">Coral Gables Newspaper</p>
            <p class="font-thin table-list">Zillow Premium Placement</p>
            <p class="font-thin table-list">Miami Herald Banner</p>
            <p class="font-thin table-list">Realtor.com Enhanced Showcase status Upgrade</p>
            <p class="font-thin table-list">Create Website of Listing w/ Custom URL</p>
            <p class="font-thin table-list">Real Buzz</p>
            <p class="font-thin table-list">Post on Social Media</p>
            <p class="font-thin table-list">Targeted Email Campaign</p>
            <p class="font-thin table-list">Targeted Online Campaign</p>
            <p class="font-thin table-list">Home Finder</p>
            <p class="font-thin table-list">Homes.com</p>
            <p class="font-thin table-list">Juwai</p>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-11">
        <div class="absolute" style="top:0;left:0;">
            <img src="images/home-didnt-sell/page-11.png" alt="">
        </div>
        <div class="absolute page-number-right">
            <p>Page 11</p>
        </div>
        <style>
            .table-list {
                font-size: 18px;
                line-height: 23.43px;
                letter-spacing: -0.3px;
            }
        </style>
        <div class="absolute" style="top:135px;left:160px;">
            <p class="font-thin" style="font-size: 45px;line-height:40px;">{!! $text_60 !!}</p>
            <p class="font-bold gold" style="font-size: 45px;line-height:40px;">{!! $text_61 !!}</p>
        </div>
        <div class="absolute" style="top:263px;left:524px;">
            <p class="font-thin gold" style="font-size: 20px;">Luxe</p>
        </div>
        <div class="absolute" style="top:263px;left:598px;">
            <p class="font-thin white" style="font-size: 20px;">Luxe Premium</p>
        </div>
        <div class="absolute" style="top:263px;left:747px;">
            <p class="font-thin gold" style="font-size: 20px;">Luxe Reserve</p>
        </div>
        <div class="absolute" style="top:1110px;left:170px;">
            <p class="font-thin" style="font-size: 18px;">All options require<br>Broker and Seller Agreement<br>on Price
                and Terms</p>
        </div>
        <div class="absolute" style="top:296px;left:145px;">
            <p class="font-thin table-list">LUXE Communicaion</p>
            <p class="font-thin table-list">Seller's Private Website Login to track activities</p>
            <p class="font-thin table-list">Weekly marketing updates</p>
            <p class="font-thin table-list">Monthly real estate market updates</p>
            <p class="font-thin table-list">Obtain and share feedback from Showing Agents</p>
            <p class="font-thin table-list">LUXE Peace of Mind</p>
            <p class="font-thin table-list">Seller's Home Warranty during duration of Listing</p>
            <p class="font-thin table-list">Transfer of Home Warranty to Buyers</p>
            <p class="font-thin table-list">Premium Home Warranty to Buyers</p>
            <p class="font-thin table-list">LUXE Events</p>
            <p class="font-thin table-list">Pre-Launch Whisper Campaign</p>
            <p class="font-thin table-list">Local Broker Caravan</p>
            <p class="font-thin table-list">Open House</p>
            <p class="font-thin table-list">Special Event</p>
            <p class="font-thin table-list">LUXE Goods</p>
            <p class="font-thin table-list">Coffee Table Book (for Seller and Buyer)</p>
            <p class="font-thin table-list">Neighborly LUXE</p>
            <p class="font-thin table-list">Postcard to neighbors</p>
            <p class="font-thin table-list">Neighbors' only Event</p>
            <p class="font-thin table-list">LUXE Print</p>
            <p class="font-thin table-list">Create Business Card of Listing</p>
            <p class="font-thin table-list">Direct Mail Program</p>
            <p class="font-thin table-list">The Miami Herald Listing and Open Houses</p>
            <p class="font-thin table-list">Brickell Magazine</p>
            <p class="font-thin table-list">Ocean Drive Magazine</p>
        </div>
    </div>

    <div class="page_break"></div>


    <div class="page page-12">
        <div class="absolute" style="top:0;left:0;">
            <img src="images/home-didnt-sell/page-12.png" alt="">
        </div>
        <div class="absolute page-number-left">
            <p>Page 12</p>
        </div>
        <style>
            .table-list {
                font-size: 18px;
                line-height: 23.43px;
                letter-spacing: -0.3px;
            }
        </style>
        <div class="absolute" style="top:135px;left:160px;">
            <p class="font-thin" style="font-size: 45px;line-height:40px;">{!! $text_62 !!}</p>
            <p class="font-bold gold" style="font-size: 45px;line-height:40px;">{!! $text_63 !!}</p>
        </div>
        <div class="absolute" style="top:263px;left:524px;">
            <p class="font-thin gold" style="font-size: 20px;">Luxe</p>
        </div>
        <div class="absolute" style="top:263px;left:598px;">
            <p class="font-thin white" style="font-size: 20px;">Luxe Premium</p>
        </div>
        <div class="absolute" style="top:263px;left:747px;">
            <p class="font-thin gold" style="font-size: 20px;">Luxe Reserve</p>
        </div>
        <div class="absolute" style="top:1110px;left:170px;">
            <p class="font-thin" style="font-size: 18px;">All options require<br>Broker and Seller Agreement<br>on Price
                and Terms</p>
        </div>
        <div class="absolute" style="top:296px;left:145px;">
            <p class="font-thin table-list">Incentive LUXE</p>
            <p class="font-thin table-list">3% to Buyer's Broker</p>
            <p class="font-thin table-list">4% to Buyer's Broker OR Membership to PV <br>Inn and Club to Buyers see note
                (14)</p>
            <p class="font-thin table-list">LUXE Service Professionals (introduction and coordination with; Fees NIC)
            </p>
            <p class="font-thin table-list">Closing and Title Company</p>
            <p class="font-thin table-list">Staging Company</p>
            <p class="font-thin table-list">Landscaping Company</p>
            <p class="font-thin table-list">LUXE Service Professionals (introduction and coordination with; Fees NIC)
            </p>
            <p class="font-thin table-list">Touch Up Professionals</p>
            <p class="font-thin table-list">Clean Out Professionals</p>
            <p class="font-thin table-list">Clean Out Professionals</p>
            <p class="font-thin table-list">What Limited Service Providers Do (which we do as well PLUS all of the
                above)</p>
            <p class="font-thin table-list">YardSign</p>
            <p class="font-thin table-list">MLS</p>
            <p class="font-thin table-list">Office Caravan</p>
            <p class="font-thin table-list">Realtor.com standard Listing</p>
            <p class="font-thin table-list">Zillow</p>
            <p class="font-thin table-list">Trulia</p>
            <p class="font-thin table-list">Yahoo</p>
        </div>
    </div>


    <div class="page_break"></div>

    <div class="page page-13">
        <div class="absolute" style="top:0;left:0;">
            <img src="images/home-didnt-sell/page-13.png" alt="">
        </div>
        <div class="absolute" style="top:250px;left:350px;">
            <img src="{{$img_18}}" alt="" width="555px" height="275px">
        </div>
        <div class="absolute" style="top:580px;left:630px;">
            <img src="{{$img_19}}" alt="" width="185px" height="400px">
        </div>
        <div class="absolute" style="top:1050px;left:100px;">
            <img src="{{$img_20}}" alt="" width="500px" height="145px">
        </div>
        <div class="absolute" style="top:350px;left:150px;">
            <img src="images/home-didnt-sell/divider.png" alt="" width="370px">
        </div>
        <div class="absolute page-number-right">
            <p>Page 13</p>
        </div>
        <div class="absolute" style="top:250px;left:150px;">
            <p class="font-thin white" style="font-size: 32px;">{!! $text_64 !!}</p>
            <p class="font-bold white" style="font-size: 40px;margin-top:-20px;">{!! $text_65 !!}</p>
        </div>
        <div class="absolute" style="top:380px;left:150px;max-width:190px;">
            <p class="font-thin white" style="font-size: 28px;line-height:25px">{!! $text_66 !!}</p>
            <p class="font-thin font-bold" style="font-size: 32px;line-height:28px">{!! $text_67 !!}</p>
        </div>
        <div class="absolute" style="top:670px;left:160px;width:380px;">
            <p class="font-thin white" style="font-size: 19px;text-align:justify;">{!! $text_68 !!}</p>
        </div>
        <div class="absolute" style="top:1040px;left:635px;width:185px;">
            <p class="font-thin" style="font-size: 18px;">{!! $text_69 !!}</p>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-14">
        <div class="absolute" style="top:0;left:0;">
            <img src="images/home-didnt-sell/page-14.png" alt="">
        </div>
        <div class="absolute w-100" style="top:222px;text-align:center">
            <img src="{images/home-didnt-sell/page-20-img-1.png}" alt="" height="120px">
        </div>
        <div class="absolute" style="top:650px;left:200px;">
            <img src="images/home-didnt-sell/page-14-box.png" alt="" height="230px">
        </div>
        <div class="absolute" style="top:382px;left:200px;">
            <img src="{{$img_8}}" alt="" height="265px" width="421px">
        </div>
        <div class="absolute" style="top:382px;left:625px;">
            <img src="{{$img_9}}" alt="" height="125px" width="190px">
        </div>
        <div class="absolute" style="top:512px;left:625px;">
            <img src="{{$img_10}}" alt="" height="133px" width="190px">
        </div>
        <div class="absolute" style="top:628px;left:625px;">
            <img src="{{$img_11}}" alt="" height="133px" width="190px">
        </div>
        <div class="absolute" style="top:750px;left:625px;">
            <img src="{{$img_12}}" alt="" height="133px" width="190px">
        </div>
        <div class="absolute" style="top:880px;left:198px;">
            <img src="{{$img_13}}" alt="" height="230px" width="617px">
        </div>
        <div class="absolute page-number-left">
            <p>Page 14</p>
        </div>
        <div class="absolute" style="top:662px;left:366px;">
            <p class="white" style="font-size: 12px;">INTRODUCING</p>
        </div>
        <div class="absolute" style="top:676px;left:290px;">
            <p class="white" style="font-size: 12px;">{!! $text_70 !!}</p>
        </div>
        <div class="absolute" style="top:700px;left:218px;width:385px;text-align:justify;">
            <p class="white" style="font-size: 12px;">{!! $text_71 !!}</p>
            <p class="white font-thin" style="font-size: 30px;text-align:center;">{!! $text_72 !!}</p>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-15">
        <div class="absolute" style="top:0;left:0;">
            <img src="images/home-didnt-sell/page-15.png" alt="">
        </div>
        <div class="absolute page-number-right">
            <p>Page 15</p>
        </div>
        <div class="absolute" style="top:165px;left:200px;right:160px;">
            <p class="font-thin" style="font-size: 18px;text-align:justify;line-height:18px;">{!! $text_73 !!}</p>
        </div>
        <div class="absolute" style="bottom:710px;left:170px;">
            <p class="font-thin" style="font-size: 20px;line-height:18px;">{!! $text_75 !!}</p>
            <p class="font-bold gold" style="font-size: 25px;line-height:18px;">{!! $text_76 !!}</p>
        </div>
        <div class="absolute" style="bottom:710px;left:340px;right:160px;">
            <p class="font-thin" style="font-size: 18px;text-align:justify;line-height:18px;">{!! $text_74 !!}</p>
        </div>
        <div class="absolute" style="bottom:540px;left:170px;">
            <p class="font-thin" style="font-size: 20px;line-height:18px;">{!! $text_78 !!}</p>
            <p class="font-bold gold" style="font-size: 25px;line-height:18px;">{!! $text_79 !!}</p>
        </div>
        <div class="absolute" style="bottom:540px;left:340px;right:160px;">
            <p class="font-thin" style="font-size: 18px;text-align:justify;line-height:18px;">{!! $text_77 !!}</p>
        </div>
        <div class="absolute" style="bottom:160px;left:170px;">
            <p class="font-thin" style="font-size: 20px;line-height:18px;">{!! $text_81 !!}</p>
            <p class="font-bold white" style="font-size: 25px;line-height:18px;">{!! $text_82 !!}</p>
        </div>
        <div class="absolute" style="bottom:160px;left:340px;right:160px;">
            <p class="font-thin" style="font-size: 18px;text-align:justify;line-height:18px;">{!! $text_80 !!}</p>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-16">
        <div class="absolute" style="top:0;left:0;">
            <img src="images/home-didnt-sell/page-16.png" alt="">
        </div>
        <div class="absolute page-number-left">
            <p>Page 16</p>
        </div>
        <div class="absolute" style="bottom:710px;left:190px;">
            <p class="font-thin" style="font-size: 20px;line-height:18px;">{!! $text_83 !!}</p>
            <p class="font-bold gold" style="font-size: 25px;line-height:18px;">{!! $text_84 !!}</p>
        </div>
        <div class="absolute" style="bottom:710px;left:360px;right:160px;">
            <p class="font-thin" style="font-size: 18px;text-align:justify;line-height:18px;">{!! $text_85 !!}</p>
        </div>
        <div class="absolute" style="bottom:510px;left:190px;">
            <p class="font-thin" style="font-size: 20px;line-height:18px;">{!! $text_86 !!}</p>
            <p class="font-bold gold" style="font-size: 25px;line-height:18px;">{!! $text_87 !!}</p>
        </div>
        <div class="absolute" style="bottom:510px;left:360px;right:160px;">
            <p class="font-thin" style="font-size: 18px;text-align:justify;line-height:18px;">{!! $text_88 !!}</p>
        </div>
        <div class="absolute" style="bottom:370px;left:190px;">
            <p class="font-thin" style="font-size: 20px;line-height:18px;">{!! $text_89 !!}</p>
            <p class="font-bold white" style="font-size: 25px;line-height:18px;">{!! $text_90 !!}</p>
        </div>
        <div class="absolute" style="bottom:370px;left:360px;right:160px;">
            <p class="font-thin" style="font-size: 18px;text-align:justify;line-height:18px;">{!! $text_91 !!}</p>
        </div>
        <div class="absolute" style="bottom:210px;left:190px;">
            <p class="font-thin" style="font-size: 20px;line-height:18px;">{!! $text_92 !!}</p>
            <p class="font-bold white" style="font-size: 25px;line-height:18px;">{!! $text_93 !!}</p>
        </div>
        <div class="absolute" style="bottom:210px;left:360px;right:160px;">
            <p class="font-thin" style="font-size: 18px;text-align:justify;line-height:18px;">{!! $text_94 !!}</p>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-17">
        <div class="absolute" style="top:110px;left:120px;">
            <img src="{{$img_14}}" alt="" width="790px" height="535px">
        </div>
        <div class="absolute" style="top:0;left:0;">
            <img src="images/home-didnt-sell/page-17.png" alt="">
        </div>
        <div class="absolute" style="bottom:0;left:0;">
            <img src="images/home-didnt-sell/rectangle.png" alt="" height="500px">
        </div>
        <div class="absolute" style="top:680px;left:120px;">
            <img src="{{$img_15}}" alt="" width="790px" height="535px">
        </div>
        <div class="absolute" style="top:580px;left:225px;">
            <img src="images/home-didnt-sell/box.png" alt="" width="100px">
        </div>
        <div class="absolute" style="top:1140px;left:725px;">
            <img src="images/home-didnt-sell/box.png" alt="" width="100px">
        </div>
        <div class="absolute page-number-right">
            <p>Page 17</p>
        </div>
        <div class="absolute" style="top:590px;left:150px;">
            <p class="font-700" style="font-size: 30px;letter-spacing:5px;">{!! $text_95 !!}</p>
        </div>
        <div class="absolute" style="top:1160px;left:180px;">
            <p class="font-700" style="font-size: 30px;letter-spacing:5px;">{!! $text_96 !!}</p>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-18">
        <div class="absolute" style="
        top:148px;
        left:0;
        right:0;
        bottom:0;
        background:url('{{$img_16}}');
        background-size:cover;
        ">
            <h1></h1>
        </div>
        <div class="absolute" style="top:0;left:0;">
            <img src="images/home-didnt-sell/page-18.png" alt="">
        </div>
        <div class="absolute page-number-left">
            <p>Page 18</p>
        </div>
        <div class="absolute" style="bottom:770px;left:90px;">
            <p class="font-thin white" style="font-size: 20px;line-height:18px;">{!! $text_98 !!}</p>
            <p class="font-bold gold" style="font-size: 25px;line-height:18px;">{!! $text_99 !!}</p>
        </div>
        <div class="absolute" style="bottom:770px;left:280px;right:300px;">
            <p class="font-thin white" style="font-size: 18px;text-align:justify;line-height:18px;">{!! $text_97 !!}</p>
        </div>
        <div class="absolute" style="bottom:550px;left:240px;">
            <p class="font-thin" style="font-size: 20px;line-height:18px;">{!! $text_101 !!}</p>
            <p class="font-bold gold" style="font-size: 25px;line-height:18px;">{!! $text_102 !!}</p>
        </div>
        <div class="absolute" style="bottom:290px;left:240px;right:250px;">
            <p class="font-thin" style="font-size: 18px;text-align:justify;line-height:18px;">{!! $text_100 !!}</p>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-19">
        <div class="absolute" style="
            top:165px;
            left:0;
            right:650px;
            bottom:0;
            background:url('{{$img_16}}');
            background-size:cover;
            background-position:right;
            ">
            <h1></h1>
        </div>
        <div class="absolute" style="top:0;left:0;">
            <img src="images/home-didnt-sell/page-19.png" alt="">
        </div>
        <div class="absolute" style="top:400px;left:220px;">
            <img src="images/home-didnt-sell/divider.png" alt="">
        </div>
        <div class="absolute page-number-right">
            <p>Page 19</p>
        </div>
        <div class="absolute" style="top:280px;left:220px;">
            <p class="font-thin" style="font-size: 40px;line-height:30px;">{!! $text_103 !!}</p>
            <p class="font-bold gold" style="font-size: 45px;line-height:35px;">{!! $text_104 !!}</p>
        </div>
        <div class="absolute" style="top:450px;left:220px;right:100px;">
            <p class="font-bold gold" style="font-size: 25px;line-height:18px;">{!! $text_105 !!}</p>
            <p class="font-thin" style="font-size: 19px;text-align:justify;line-height:18px;">{!! $text_106 !!}</p>
        </div>
        <div class="absolute" style="top:840px;left:380px;right:100px;">
            <p class="font-thin" style="font-size: 19px;text-align:justify;line-height:18px;">{!! $text_108 !!}</p>
        </div>
        <div class="absolute" style="top:910px;left:150px;">
            <p class="font-bold gold" style="font-size: 28px;line-height:28px;">{!! $text_107 !!}</p>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-20">
        <div class="absolute" style="top:120px;right:-860px;">
            <img src="images/home-didnt-sell/page-20-img-1.png" alt="" height="460px">
        </div>
        <div class="absolute" style="
                top:490px;
                left:800px;
                right:0;
                bottom:465px;
                background:url('{{$img_17}}');
                background-size:cover;
                background-position:left;
                ">
            <h1></h1>
        </div>
        <div class="absolute" style="top:0;left:0;">
            <img src="images/home-didnt-sell/page-20.png" alt="">
        </div>
        <div class="absolute page-number-left">
            <p>Page 20</p>
        </div>
        <div class="absolute" style="top:375px;left:130px;">
            <p class="font-thin" style="font-size: 30px;line-height:30px;">{!! $text_109 !!}</p>
            <p class="font-thin" style="font-size: 45px;line-height:35px;">{!! $text_110 !!}</p>
        </div>
        <div class="absolute" style="top:500px;left:130px;right:260px;">
            <p class="font-bold gold" style="font-size: 25px;line-height:18px;">{!! $text_111 !!}</p>
            <p class="font-thin" style="font-size: 19px;text-align:justify;line-height:18px;">{!! $text_112 !!}</p>
        </div>
        <div class="absolute" style="top:920px;left:200px;right:490px;">
            <p class="font-bold white" style="font-size: 25px;line-height:18px;">{!! $text_113 !!}</p>
            <p class="font-thin" style="font-size: 19px;text-align:justify;line-height:18px;">{!! $text_114 !!}</p>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-21">
        <div class="absolute" style="top:170px;left:-250px;">
            <img src="images/home-didnt-sell/page-20-img-1.png" alt="" height="300px">
        </div>
        <div class="absolute" style="
                top:400px;
                left:0px;
                right:150px;
                bottom:560px;
                background:url('{{$img_17}}');
                background-size:cover;
                background-position:right;
                ">
            <h1></h1>
        </div>
        <div class="absolute" style="top:0;left:0;">
            <img src="images/home-didnt-sell/page-21.png" alt="">
        </div>
        <div class="absolute page-number-right">
            <p>Page 21</p>
        </div>
        <div class="absolute" style="top:905px;right:640px;text-align:right;">
            <p class="font-bold white" style="font-size:30px;line-height:25px;">{!! $text_123 !!}</p>
            <p class="font-bold" style="font-size:30px;line-height:25px;">{!! $text_124 !!}</p>
        </div>
        <div class="absolute" style="top:838px;left:440px;">
            <p class="font-thin" style="font-size:18px;line-height:19px;">{!! $text_115 !!}</p>
            <p class="font-thin" style="font-size:18px;line-height:19px;">{!! $text_116 !!}</p>
            <p class="font-thin" style="font-size:18px;line-height:19px;">{!! $text_136 !!}</p>
            <p class="font-thin" style="font-size:18px;line-height:19px;">{!! $text_117 !!}</p>
            <p class="font-thin" style="font-size:18px;line-height:19px;">{!! $text_118 !!}</p>
            <p class="font-thin" style="font-size:18px;line-height:19px;">{!! $text_119 !!}</p>
            <p class="font-thin" style="font-size:18px;line-height:19px;">{!! $text_120 !!}</p>
            <p class="font-thin" style="font-size:18px;line-height:19px;">{!! $text_121 !!}</p>
            <p class="font-thin" style="font-size:18px;line-height:19px;">{!! $text_122 !!}</p>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-22">
        <div class="absolute" style="
            top:0;
            left:0;
            right:0;
            bottom:0;
            background:url('images/home-didnt-sell/page-22-bg.png');
            background-size:cover;
            background-position:center;
            ">
            <h1></h1>
        </div>
        <div class="absolute" style="top:0;left:-5px;">
            <img src="images/home-didnt-sell/paper.png" alt="">
        </div>
        <div class="absolute" style="top:0;left:0;">
            <img src="images/home-didnt-sell/page-22.png" alt="">
        </div>
        <div class="absolute page-number-left">
            <p class="white">Page 22</p>
        </div>
        <div class="absolute" style="top:230px;left:195px;">
            <p class="font-thin" style="font-size: 30px;line-height:30px;">{!! $text_125 !!}</p>
            <p class="font-bold gold" style="font-size: 45px;line-height:35px;">{!! $text_126 !!}</p>
        </div>
        <div class="absolute" style="top:380px;left:195px;right:195px;text-align:justify">
            <p class="font-bold" style="font-size: 25px;line-height:22px;">{!! $text_127 !!}</p>
            <p class="font-bold gold" style="font-size: 25px;line-height:25px;margin-bottom:20px;">{!! $text_128 !!}</p>
            <p class="font-thin" style="font-size: 18px;line-height:18px;">{!! $text_129 !!}</p>
            <br />
            <p class="font-thin" style="font-size: 18px;line-height:18px;">{!! $text_130 !!}</p>
            <br />
            <p class="font-thin" style="font-size: 18px;line-height:18px;">{!! $text_131 !!}</p>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-23">
        <div class="absolute" style="
            top:0;
            left:0;
            right:0;
            bottom:0;
            background:url('images/home-didnt-sell/page-22-bg.png');
            background-size:cover;
            background-position:right;
            ">
            <h1></h1>
        </div>
        <div class="absolute" style="top:0;left:0;">
            <img src="images/home-didnt-sell/page-23.png" alt="">
        </div>
        <div class="absolute page-number-right">
            <p class="white">Page 23</p>
        </div>
        <div class="absolute" style="top:250px;left:300px;right:195px;text-align:justify">
            <p class="font-thin" style="font-size: 18px;line-height:18px;">{!! $text_132 !!}</p>
            <br />
            <p class="font-thin" style="font-size: 18px;line-height:18px;">{!! $text_133 !!}</p>
        </div>
        <div class="absolute" style="top:830px;left:170px;right:60px;text-align:justify">
            <p class="font-thin white" style="font-size: 20px;line-height:20px;">{!! $text_134 !!}</p>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-24">
        <div class="absolute" style="top:0;left:0;">
            <img src="images/home-didnt-sell/page-24.png" alt="">
        </div>
        <div class="absolute" style="top:980px;left:100px;">
            <img src="images/home-didnt-sell/logo.png" alt="">
        </div>
        <div class="absolute" style="top:1000px;left:300px;">
            <p class="white" style="font-size: 18px;line-height:18px;">
                Coral Gables<br>Kendall<br>Hollywood<br>Orlando
            </p>
        </div>
        <div class="absolute" style="top:1165px;left:300px;">
            <p class="" style="font-size: 18px;line-height:18px;letter-spacing:2px;">WWW.LUXEKNOWS.COM</p>
        </div>
    </div>
</body>

</html>