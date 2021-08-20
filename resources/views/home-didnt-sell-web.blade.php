<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Didn't Sell</title>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Lato:300,400,700');
        @import url('https://fonts.googleapis.com/css?family=Lato:600');
        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@900&display=swap');

        @import url('https://fonts.googleapis.com/css2?family=Oswald&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@600&display=swap');

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

        .mb-5 {
            margin-bottom: 5px;
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

        .cropper-container {
            position: fixed !important;
            top: -100px !important;
            z-index: 100;
        }

        .row-image {
            width: 800px;
            height: 1003px;
        }

        .page {
            width: 1000px;
            height: 1257px;
            overflow-x: hidden;
            position: relative;
            zoom: 80% !important;
        }

        label {
            background-color: #FFCF40;
            padding: 10px;
            display: block;
            width: 150px;
            font-family: Lato;
        }

        .row {
            display: flex;
            border-bottom: 5px solid;
        }

        .row-divider {
            height: 3px;
            background-color: black;
        }

        .column-divider {
            min-height: 100%;
            height: 100%;
            width: 100px;
        }

        .row-input {
            width: 100%;
            margin: auto 0;
            max-width: 425px;
        }

        input,
        textarea {
            font-size: 15px;
            margin-top: 10px;
            margin-bottom: 5px;
            width: 100%;
            border: 1px solid #FFCF40;
            font-family: Lato;
        }

        .button {
            margin-top: 50px;
        }

        .generate {
            font-family: "Lato";
            font-weight: 600;
            font-size: 18px;
            padding: 20px;
            background-color: #FFCF40;
            color: white;
            text-decoration: none;
        }

        .flex {
            display: flex;
        }

        .flex div {
            width: 212px;
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

        .cropper-container {
            position: fixed !important;
            top: -100px !important;
            z-index: 100;
        }
    </style>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.9/cropper.js"
    integrity="sha512-oqBsjjSHWqkDx4UKoU+5IUZN2nW2qDp2GFSKw9+mcFm+ZywqfBKp79nfWmGPco2wzTWuE46XpjtCjZ9tFmI12g=="
    crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.9/cropper.css"
    integrity="sha512-949FvIQOibfhLTgmNws4F3DVlYz3FmCRRhJznR22hx76SKkcpZiVV5Kwo0iwK9L6BFuY+6mpdqB2+vDIGVuyHg=="
    crossorigin="anonymous" />

<body>
    <form action="{{ route('pdf.home.didnt.sell') }}" method="POST">
        @csrf
        <div class="row">
            <input hidden id="img_1_input" name="img_1_input" value="images/home-didnt-sell/page-1-bg.jpg">
            <input hidden id="img_2_input" name="img_2_input" value="images/home-didnt-sell/page-2-bg.jpg">
            <input hidden id="img_3_input" name="img_3_input" value="images/home-didnt-sell/page-2-bg.jpg">
            <input hidden id="img_4_input" name="img_4_input" value="images/home-didnt-sell/page-2-bg.jpg">
            <input hidden id="img_5_input" name="img_5_input" value="images/home-didnt-sell/page-9-img-1.png">
            <input hidden id="img_6_input" name="img_6_input" value="images/home-didnt-sell/page-9-img-2.png">
            <input hidden id="img_7_input" name="img_7_input" value="images/home-didnt-sell/zillow.png">
            <input hidden id="img_8_input" name="img_8_input" value="images/home-didnt-sell/page-14-img-1.jpg">
            <input hidden id="img_9_input" name="img_9_input" value="images/home-didnt-sell/page-14-img-2.jpg">

            <input hidden id="img_10_input" name="img_10_input" value="images/home-didnt-sell/page-14-img-3.jpg">
            <input hidden id="img_11_input" name="img_11_input" value="images/home-didnt-sell/page-14-img-4.jpg">
            <input hidden id="img_12_input" name="img_12_input" value="images/home-didnt-sell/page-14-img-5.jpg">
            <input hidden id="img_13_input" name="img_13_input" value="images/home-didnt-sell/page-14-img-6.jpg">
            <input hidden id="img_14_input" name="img_14_input" value="images/home-didnt-sell/page-17-img-1.png">
            <input hidden id="img_15_input" name="img_15_input" value="images/home-didnt-sell/page-17-img-2.png">
            <input hidden id="img_16_input" name="img_16_input" value="images/home-didnt-sell/page-18-bg.png">
            <input hidden id="img_17_input" name="img_17_input" value="images/home-didnt-sell/page-20-bg.png">

            <input hidden id="img_18_input" name="img_18_input" value="images/home-didnt-sell/page-13-img-1.png">
            <input hidden id="img_19_input" name="img_19_input" value="images/home-didnt-sell/page-13-img-2.png">
            <input hidden id="img_20_input" name="img_20_input" value="images/home-didnt-sell/page-13-img-3.png">

            <div class="row-image">
                <img src="" id="image" style="display: none">
                <div class="page page-1">
                    <div class="absolute" style="top:450px;left:50px;">
                        <img id="img_1" src="images/home-didnt-sell/page-1-bg.jpg" alt="" width="900px" height="700px">
                    </div>
                    <div class="absolute" style="top:0;left:0;">
                        <img src="images/home-didnt-sell/page-1.png" alt="">
                    </div>
                    <div class="absolute" style="top:1060px;left:160px;">
                        <img src="images/home-didnt-sell/logo.png" alt="">
                    </div>
                    <div class="absolute" style="top:130px;left:150px;">
                        <p class="gold font-thin text-1" style="font-size: 80px;">My Home</p>
                    </div>
                    <div class="absolute" style="top:230px;left:270px;">
                        <p class="font-bold text-2" style="font-size: 80px;">Didn't Sell...</p>
                    </div>
                    <div class="absolute" style="top:450px;left:170px;">
                        <p class="font-bold white text-3" style="font-size: 100px;">NOW WHAT?</p>
                    </div>
                    <div class="absolute" style="top:1160px;left:650px;">
                        <p class="font-bold" style="font-size: 18px;letter-spacing:6px;">LUXE PROPERTIES LLC</p>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <div>
                    <label for="text-1">Title 1</label>
                    <input type="text" id="text-1" name="text_1" value="My Home">
                </div>
                <div>
                    <label for="text-1">Title 2</label>
                    <input type="text" id="text-2" name="text_2" value="Didn't Sell...">
                </div>
                <div>
                    <label for="text-1">Title 3</label>
                    <input type="text" id="text-3" name="text_3" value="NOW WHAT?">
                </div>
                <div>
                    <label for="page-1-img-1">Main Image</label>
                    <input type="file" id="img-1-input" onchange="image_change('img-1-input',['img_1'],'img_1_input')">
                    <button type="button" onclick="startCropper(1.28)">Crop</button>
                    <button type="button" onclick="crop_image(['img_1'],'img_1_input')">Save Crop</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="row-image">
                <div class="page page-2">
                    <div class="absolute" style="top:130px;left:700px;">
                        <img id="img_2" src="images/home-didnt-sell/page-2-bg.jpg" alt="" width="840px" height="600px">
                    </div>
                    <div class="absolute" style="top:0;left:0;">
                        <img src="images/home-didnt-sell/page-2.png" alt="">
                    </div>
                    <div class="absolute page-number-left">
                        <p>Page 02</p>
                    </div>
                    <div class="absolute" style="top:200px;right:400px;text-align:right;">
                        <p class="font-thin text-4" style="font-size: 60px;">Table of</p>
                        <p class="font-bold gold text-5" style="font-size: 75px;margin-top:-25px;">Content</p>
                    </div>
                    <div class="absolute" style="top:500px;right:700px;text-align:right;">
                        <p class="oswald-bold white text-6" style="font-size: 65px;">3</p>
                        <p class="oswald-bold white text-8" style="font-size: 65px;margin-top:10px;">7</p>
                        <p class="oswald-bold white text-10" style="font-size: 65px;margin-top:10px;">10</p>
                        <p class="oswald-bold white text-12" style="font-size: 65px;margin-top:10px;">13</p>
                        <p class="oswald-bold white text-14" style="font-size: 65px;margin-top:10px;">17</p>
                        <p class="oswald-bold white text-16" style="font-size: 65px;margin-top:10px;">20</p>
                    </div>
                    <div class="absolute" style="top:500px;left:350px;">
                        <p class="oswald-med white text-7" style="font-size:20px;line-height:110px;">RESULTS • DREAMS •
                            GOALS
                        </p>
                        <p class="oswald-med white text-9" style="font-size:20px;line-height:100px;">TESTIMONIALS</p>
                        <p class="oswald-med white text-11" style="font-size:20px;line-height:100px;">LISTING AND
                            SERVICES PLANS
                        </p>
                        <p class="oswald-med white text-13" style="font-size:20px;line-height:110px;">A NEW APPROACH</p>
                        <p class="oswald-med white text-15" style="font-size:20px;line-height:110px;">POINTS OF
                            DIFFERENCE</p>
                        <p class="oswald-med white text-17" style="font-size:20px;line-height:100px;">OUR STORY</p>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <div class="mb-5">
                    <label for="page-1-img-1">Main Image</label>
                    <input type="file" id="img-2-input"
                        onchange="image_change('img-2-input',['img_2','img_2_1'],'img_2_input')">
                    <button type="button" onclick="startCropper(1.4)">Crop</button>
                    <button type="button" onclick="crop_image(['img_2','img_2_1'],'img_2_input')">Save Crop</button>
                </div>
                <div>
                    <label for="text-1">Title 1</label>
                    <input type="text" id="text-4" name="text_4" value="Table of">
                </div>
                <div>
                    <label for="text-1">Title 2</label>
                    <input type="text" id="text-5" name="text_5" value="Content">
                </div>
                <div class="flex">
                    <div>
                        <label for="text-1">Page No.</label>
                        <input type="text" id="text-6" name="text_6" value="3">
                    </div>
                    <div>
                        <label for="text-1">Text</label>
                        <input type="text" id="text-7" name="text_7" value="RESULTS • DREAMS • GOALS">
                    </div>
                </div>
                <div class="flex">
                    <div>
                        <label for="text-1">Page No.</label>
                        <input type="text" id="text-8" name="text_8" value="7">
                    </div>
                    <div>
                        <label for="text-1">Text</label>
                        <input type="text" id="text-9" name="text_9" value="TESTIMONIALS">
                    </div>
                </div>
                <div class="flex">
                    <div>
                        <label for="text-1">Page No.</label>
                        <input type="text" id="text-10" name="text_10" value="10">
                    </div>
                    <div>
                        <label for="text-1">Text</label>
                        <input type="text" id="text-11" name="text_11" value="LISTING AND SERVICES PLANS">
                    </div>
                </div>
                <div class="flex">
                    <div>
                        <label for="text-1">Page No.</label>
                        <input type="text" id="text-12" name="text_12" value="13">
                    </div>
                    <div>
                        <label for="text-1">Text</label>
                        <input type="text" id="text-13" name="text_13" value="A NEW APPROACH">
                    </div>
                </div>
                <div class="flex">
                    <div>
                        <label for="text-1">Page No.</label>
                        <input type="text" id="text-14" name="text_14" value="17">
                    </div>
                    <div>
                        <label for="text-1">Text</label>
                        <input type="text" id="text-15" name="text_15" value="POINTS OF DIFFERENCE">
                    </div>
                </div>
                <div class="flex">
                    <div>
                        <label for="text-1">Page No.</label>
                        <input type="text" id="text-16" name="text_16" value="20">
                    </div>
                    <div>
                        <label for="text-1">Text</label>
                        <input type="text" id="text-17" name="text_17" value="OUR STORY">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="row-image">
                <div class="page page-3">
                    <div class="absolute" style="top:0;left:0;">
                        <img src="images/home-didnt-sell/page-3.png" alt="">
                    </div>
                    <div class="absolute" style="top:150px;left:-2px;">
                        <img id="img_2_1" src="images/home-didnt-sell/page-2-bg.jpg" alt="" width="840px"
                            height="600px">
                    </div>
                    <div class="absolute page-number-right">
                        <p>Page 03</p>
                    </div>
                    <div class="absolute" style="top:820px;left:220px;">
                        <p class="font-thin text-18" style="font-size: 38px;">Do any of These</p>
                        <p class="font-bold gold text-19" style="font-size: 45px;margin-top:-10px;">Empty Promises Sound
                            Familiar?</p>
                    </div>
                    <div class="absolute" style="top:970px;left:220px;right:60px;">
                        <p class="font-thin text-20" style="font-size: 18px;">Hello Mr. and Mrs. Flores,<br>
                            Since your properties are no longer actively on the market, you’ve probably received
                            innumerable calls
                            from real estate
                            agents all making quite a few promises:</p>
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
                        <ul class="bullet-list text-21">
                            <li><span><img src="images/home-didnt-sell/bullet.png" alt=""></span>I’ll sell your home or
                                buy it
                                myself!</li>
                            <li><span><img src="images/home-didnt-sell/bullet.png" alt=""></span>I have the most
                                listings in the
                                area!</li>
                        </ul>
                    </div>
                    <div class="absolute" style="top:1050px;left:530px;width:350px;">
                        <ul class="bullet-list text-22">
                            <li><span><img src="images/home-didnt-sell/bullet.png" alt=""></span>I have a buyer for your
                                home.</li>
                            <li><span><img src="images/home-didnt-sell/bullet.png" alt=""></span>I’m the neighborhood
                                specialist.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <div>
                    <label for="text-1">Title 1</label>
                    <input type="text" id="text-18" name="text_18" value="Do any of These">
                </div>
                <div>
                    <label for="text-1">Title 2</label>
                    <input type="text" id="text-19" name="text_19" value="Empty Promises Sound Familiar?">
                </div>
                <div>
                    <label for="text-1">Text 1</label>
                    <textarea type="text" id="text-20" name="text_20"
                        rows="6">Hello Mr. and Mrs. Flores,
Since your properties are no longer actively on the market, you’ve probably received innumerable calls from real estate agents all making quite a few promises:</textarea>
                </div>
                <div>
                    <label for="text-1">List 1</label>
                    <textarea type="text" id="text-21" name="text_21" rows="6">I’ll sell your home or buy it myself!
I have the most listings in the area!
                    </textarea>
                </div>
                <div>
                    <label for="text-1">List 2</label>
                    <textarea type="text" id="text-22" name="text_22" rows="6">I have a buyer for your home.
I’m the neighborhood specialist.
                    </textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="row-image">
                <div class="page page-4">
                    <div class="absolute" style="top:130px;left:610px;">
                        <img id="img_3_1" src="images/home-didnt-sell/page-2-bg.jpg" alt="" height="600px"
                            width="490px">
                    </div>
                    <div class="absolute" style="top:0;left:0;">
                        <img src="images/home-didnt-sell/page-4.png" alt="">
                    </div>
                    <div class="absolute page-number-left">
                        <p>Page 04</p>
                    </div>
                    <div class="absolute" style="top:220px;left:130px;">
                        <p class="font-thin text-23" style="font-size: 38px;">The Only Result</p>
                        <p class="font-bold gold text-24" style="font-size: 45px;margin-top:-10px;">That Matters is Sold
                        </p>
                    </div>
                    <div class="absolute" style="top:370px;left:130px;width:46%;">
                        <p class="font-thin text-25" style="font-size: 20px;">Wesley Ulloa and LUXE Properties knows
                            that a
                            promise is only
                            as good as the end result. And the only result that
                            ultimately matters is that your home gets said - and sold for the right amount and in the
                            time frame
                            that works for your
                            plans.</p>
                    </div>
                    <div class="absolute" style="top:600px;left:160px;width:42%;">
                        <p class="font-thin text-26" style="font-size: 21px;text-align:justify;">Real estate agents will
                            often
                            say anything
                            to get the LISTING,
                            but many follow a business model that “Lists to List!”.
                            They want to dominate the market with LISTINGS, but are not as concerned if all of the homes
                            really
                            SELL. They are going
                            for a “numbers game” business model: list enough properties and SOME will sell. You can
                            normally spot
                            these agents as
                            they might have a high number of listings. They will take them at any commission and on any
                            terms just
                            to keep a high
                            number of listings going. Where they fall short, however, is that they do not put their
                            money where
                            their mouth is.
                            Their marketing, effort and presence seem to diminish greatly once the listing agreement is
                            signed. Then
                            they are off
                            getting the next listing rather than SELLING their listings. Their listings often “expire”
                            from the
                            market, unsold, just
                            as yours unfortunately has.</p>
                    </div>
                    <div class="absolute" style="top:900px;left:680px;">
                        <p class="font-thin text-27" style="font-size: 32px;line-height:28px;">Our<br>motto
                            is<br>simple,</p>
                        <p class="font-bold gold text-28" style="font-size: 40px;line-height:40px;">“List to<br>Sell!”
                        </p>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <div>
                    <label for="text-1">Title 1</label>
                    <input type="text" id="text-23" name="text_23" value="The Only Result">
                </div>
                <div>
                    <label for="text-1">Title 2</label>
                    <input type="text" id="text-24" name="text_24" value="That Matters is Sold">
                </div>
                <div>
                    <label for="text-1">Text 1</label>
                    <textarea type="text" id="text-25" name="text_25" rows="10">Wesley Ulloa and LUXE Properties knows that a promise is only as good as the end result. And the only result that
                    ultimately matters is that your home gets said - and sold for the right amount and in the time frame that works for your
                    plans.</textarea>
                </div>
                <div>
                    <label for="text-1">Text 1</label>
                    <textarea type="text" id="text-26" name="text_26" rows="10">Real estate agents will often say anything to get the LISTING, but many follow a business model that “Lists to List!”.
                    They want to dominate the market with LISTINGS, but are not as concerned if all of the homes really SELL. They are going
                    for a “numbers game” business model: list enough properties and SOME will sell. You can normally spot these agents as
                    they might have a high number of listings. They will take them at any commission and on any terms just to keep a high
                    number of listings going. Where they fall short, however, is that they do not put their money where their mouth is.
                    Their marketing, effort and presence seem to diminish greatly once the listing agreement is signed. Then they are off
                    getting the next listing rather than SELLING their listings. Their listings often “expire” from the market, unsold, just
                    as yours unfortunately has.</textarea>
                </div>
                <div>
                    <label for="text-1">Title 1</label>
                    <input type="text" id="text-27" name="text_27" value="Our<br>motto is<br>simple,">
                </div>
                <div>
                    <label for="text-1">Title 2</label>
                    <input type="text" id="text-28" name="text_28" value="“List to<br>Sell!“">
                </div>
            </div>
        </div>
        <div class=" row">
            <div class="row-image">
                <div class="page page-5">
                    <div class="absolute" style="top:0;left:0;">
                        <img src="images/home-didnt-sell/page-5.png" alt="">
                    </div>
                    <div class="absolute" style="top:130px;left:-2px;">
                        <img id="img_3" src="images/home-didnt-sell/page-2-bg.jpg" alt="" height="600px" width="490px">
                    </div>
                    <div class="absolute page-number-right">
                        <p>Page 05</p>
                    </div>
                    <div class="absolute" style="top:220px;left:520px;">
                        <p class="font-thin text-29" style="font-size: 38px;">Your Dreams</p>
                        <p class="font-bold gold text-30" style="font-size: 45px;margin-top:-10px;">And Goals Matter</p>
                    </div>
                    <div class="absolute" style="top:390px;left:520px;right:100px;">
                        <p class="font-thin text-31" style="font-size: 21px;text-align:justify;">When things don't go as
                            planned
                            in the sale
                            of a home, it can be easy for a seller to give up on the excitement to move
                            that they once had. You may even be sitting there reading this thinking that it's
                            best to
                            throw the
                            towel in and give up
                            on the dream of selling. Perhaps you are thinking that it is better to wait for an
                            extended
                            period "when
                            the market is
                            better". You may even be questioning whether or not to even work with a real estate
                            agent.
                            You are
                            probably thinking
                            that there must be a better way.</p>
                    </div>
                    <div class="absolute" style="top:830px;left:180px;width:300px;">
                        <p class="font-thin text-32" style="font-size: 18px;text-align:justify;">You are not alone. In
                            fact,
                            competition for
                            qualified Buyers is fierce. The Seller and the Real Estate Professional need
                            to work as a team to make sure that they are getting the home in front of the
                            largest pool
                            of qualified
                            buyers. If this
                            effort falls short, most often through marketing to a large enough selection of well
                            targeted buyers,
                            the property has a
                            good chance of not being seen by the right buyer and therefore does not sell.</p>
                    </div>
                    <div class="absolute" style="top:830px;left:520px;width:380px;">
                        <p class="font-thin text-33" style="font-size: 18px;text-align:justify;">Once a Seller has been
                            through
                            the sales
                            process, I know how frustrating it can be to consider starting the process all
                            over. Having your hopes up, keeping the house in tip top condition, being on call"
                            with
                            short notice to
                            accommodate
                            buyers. You are likely just ready for this process to be over and to be on to the
                            next
                            chapter of your
                            life.</p>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <div class="mb-5">
                    <label for="page-1-img-1">Main Image</label>
                    <input type="file" id="img-3-input"
                        onchange="image_change('img-3-input',['img_3','img_3_1'],'img_3_input')">
                    <button type="button" onclick="startCropper(1.22)">Crop</button>
                    <button type="button" onclick="crop_image(['img_3','img_3_1'],'img_3_input')">Save Crop</button>
                </div>
                <div>
                    <label for="text-1">Title 1</label>
                    <input type="text" id="text-29" name="text_29" value="Your Dreams">
                </div>
                <div>
                    <label for="text-1">Title 2</label>
                    <input type="text" id="text-30" name="text_30" value="And Goals Matter">
                </div>
                <div>
                    <label for="text-1">Text 1</label>
                    <textarea type="text" id="text-31" name="text_31" rows="10">When things don't go as planned in the sale of a home, it can be easy for a seller to give up on the excitement to move
                    that they once had. You may even be sitting there reading this thinking that it's best to throw the towel in and give up
                    on the dream of selling. Perhaps you are thinking that it is better to wait for an extended period "when the market is
                    better". You may even be questioning whether or not to even work with a real estate agent. You are probably thinking
                    that there must be a better way.</textarea>
                </div>
                <div>
                    <label for="text-1">Text 2</label>
                    <textarea type="text" id="text-32" name="text_32" rows="10">You are not alone. In fact, competition for qualified Buyers is fierce. The Seller and the Real Estate Professional need
                    to work as a team to make sure that they are getting the home in front of the largest pool of qualified buyers. If this
                    effort falls short, most often through marketing to a large enough selection of well targeted buyers, the property has a
                    good chance of not being seen by the right buyer and therefore does not sell.</textarea>
                </div>
                <div>
                    <label for="text-1">Text 3</label>
                    <textarea type="text" id="text-33" name="text_33"
                        rows="10">Once a Seller has been through the sales process, I know how frustrating it can be to consider starting the process all
                    over. Having your hopes up, keeping the house in tip top condition, being on call" with short notice to accommodate
                    buyers. You are likely just ready for this process to be over and to be on to the next chapter of your life.</textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="row-image">
                <div class="page page-6">
                    <div class="absolute" style="top:0;left:0;">
                        <img src="images/home-didnt-sell/page-6.png" alt="">
                    </div>
                    <div class="absolute" style="top:130px;right:0;">
                        <img id="img_4" src="images/home-didnt-sell/page-2-bg.jpg" alt="" height="608px" width="420px">
                    </div>
                    <div class="absolute page-number-left">
                        <p>Page 06</p>
                    </div>
                    <div class="absolute" style="top:200px;left:130px;">
                        <p class="font-thin text-34" style="font-size: 38px;">Your Dreams</p>
                        <p class="font-bold gold text-35" style="font-size: 45px;margin-top:-10px;">And Goals Matter</p>
                    </div>
                    <div class="absolute" style="top:350px;left:130px;width:380px;">
                        <p class="font-thin text-36" style="font-size: 20px;text-align:justify;">I truly understand your
                            frustration and am
                            here to tell you it does not have to be like this. You can and will sell your
                            property. The key is to position it correctly and maximize marketing exposure. This
                            is my
                            specialty. I
                            am not excited
                            about listing homes. I am excited about marketing them fully and seeing the delight
                            in my
                            Sellers when
                            they are able to
                            move on with their Dreams. That is why I love my chosen career so much.</p>
                    </div>
                    <div class="absolute" style="top:800px;left:150px;right:250px;">
                        <p class="font-thin white text-37" style="font-size: 20px;text-align:justify;">Marketing homes
                            is our
                            specialty.
                            Wesley Ulloa, LUXE Properties’ founder has been recognized as a top real estate
                            marketing expert nationwide. She speaks and teaches nationally on marketing homes,
                            especially luxury
                            properties as she
                            has been a member of CLHMS for numerous years. She also obtained a Master’s of
                            Science in
                            International
                            Real Estate from
                            Florida International University. She now brings ALL of this vast marketing
                            knowledge and
                            experience now
                            to South
                            Florida to help Sellers market and sell their home. We’d be honored to meet with you
                            to
                            assess your
                            home, the market and
                            create a marketing plan to sell your home.</p>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <div class="mb-5">
                    <label for="page-1-img-1">Main Image</label>
                    <input type="file" id="img-4-input"
                        onchange="image_change('img-4-input',['img_4','img_4_1'],'img_4_input')">
                    <button type="button" onclick="startCropper(.69)">Crop</button>
                    <button type="button" onclick="crop_image(['img_4','img_4_1'],'img_4_input')">Save Crop</button>
                </div>
                <div>
                    <label for="text-1">Title 1</label>
                    <input type="text" id="text-34" name="text_34" value="Your Dreams">
                </div>
                <div>
                    <label for="text-1">Title 2</label>
                    <input type="text" id="text-35" name="text_35" value="And Goals Matter">
                </div>
                <div>
                    <label for="text-1">Text 1</label>
                    <textarea type="text" id="text-36" name="text_36" rows="10">I truly understand your frustration and am here to tell you it does not have to be like this. You can and will sell your
                        property. The key is to position it correctly and maximize marketing exposure. This is my specialty. I am not excited
                        about listing homes. I am excited about marketing them fully and seeing the delight in my Sellers when they are able to
                        move on with their Dreams. That is why I love my chosen career so much.</textarea>
                </div>
                <div>
                    <label for="text-1">Text 2</label>
                    <textarea type="text" id="text-37" name="text_37" rows="10">Marketing homes is our specialty. Wesley Ulloa, LUXE Properties’ founder has been recognized as a top real estate
                        marketing expert nationwide. She speaks and teaches nationally on marketing homes, especially luxury properties as she
                        has been a member of CLHMS for numerous years. She also obtained a Master’s of Science in International Real Estate from
                        Florida International University. She now brings ALL of this vast marketing knowledge and experience now to South
                        Florida to help Sellers market and sell their home. We’d be honored to meet with you to assess your home, the market and
                        create a marketing plan to sell your home.</textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="row-image">
                <div class="page page-7">
                    <div class="absolute" style="top:130px;left:-2px;">
                        <img id="img_4_1" src="images/home-didnt-sell/page-2-bg.jpg" alt="" height="608px"
                            width="420px">
                    </div>
                    <div class="absolute" style="top:0;left:0;">
                        <img src="images/home-didnt-sell/page-7.png" alt="">
                    </div>
                    <div class="absolute page-number-right">
                        <p>Page 07</p>
                    </div>
                    <div class="absolute" style="top:220px;left:460px;">
                        <p class="font-thin text-38" style="font-size: 38px;">Your Dreams</p>
                        <p class="font-bold gold text-39" style="font-size: 45px;margin-top:-10px;">And Goals Matter</p>
                    </div>
                    <div class="absolute" style="top:350px;left:460px;right:100px;">
                        <p class="font-thin text-40" style="font-size: 20px;text-align:justify;">After having my
                            property on the
                            market for
                            little over a year and no offers, we decided to change realtors. Wesley was
                            highly recommended by a friend and we really liked her presentation and
                            professionalism. The
                            property's
                            listing was 100%
                            better with professional photos and videos, and the house started having showings
                            and offers
                            in less
                            than a month. We
                            sold the property and were VERY pleased with the services provided by Wesley & LUXE
                            Properties.”</p>
                        <p class="gold font-bold text-41" style="text-align: right;font-size:20px;margin-top:20px;">—
                            Sandra
                            Leatherwood</p>
                    </div>
                    <div class="absolute" style="top:750px;left:190px;width:300px;">
                        <p class="font-thin text-42" style="font-size: 20px;text-align:justify;">“I really can't picture
                            my home
                            buying
                            experience without Wesley. Her knowledge of real estate is endless. Her keen eye
                            for architecture and design is an enormous plus when you're trying to decide on the
                            right
                            home. Every
                            step of the way I
                            felt informed and secure in my decisions thanks to her. I would highly recommend
                            Wesley to
                            anyone
                            looking to buy, sell
                            or invest in properties.”</p>
                        <p class="gold font-bold text-43" style="text-align: right;font-size:20px;margin-top:20px;">—
                            Marisa
                            Navarro</p>
                    </div>
                    <div class="absolute" style="top:670px;left:570px;width:330px;">
                        <p class="font-thin text-44" style="font-size: 20px;text-align:justify;">"We hired Wesley to
                            handle the
                            sale of our
                            condominium in Brickell. Wesley was very attentive and hands on making sure
                            the property was marketed properly by taking high quality photographs and including
                            the
                            property in
                            mailing lists which
                            generated a large pool of buyers. Her strategy for pricing the property allowed us
                            to sell
                            the property
                            within our
                            desired time frame. Would strongly recommend her if you are looking for an agent in
                            the area
                            who has the
                            knowledge to
                            navigate you through a real estate transaction quickly and efficiently.”</p>
                        <p class="gold font-bold text-45" style="text-align: right;font-size:20px;margin-top:20px;">—
                            Jonathan
                            Alfonso</p>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <div>
                    <label for="text-1">Title 1</label>
                    <input type="text" id="text-38" name="text_38" value="Your Dreams">
                </div>
                <div>
                    <label for="text-1">Title 2</label>
                    <input type="text" id="text-39" name="text_39" value="And Goals Matter">
                </div>
                <div>
                    <label for="text-1">Testimonial 1</label>
                    <textarea type="text" id="text-40" name="text_40"
                        rows="10">After having my property on the market for little over a year and no offers, we decided to change realtors. Wesley was
                    highly recommended by a friend and we really liked her presentation and professionalism. The property's listing was 100%
                    better with professional photos and videos, and the house started having showings and offers in less than a month. We
                    sold the property and were VERY pleased with the services provided by Wesley & LUXE Properties.”</textarea>
                    <input type="text" id="text-41" name="text_41" value="— Sandra Leatherwood">
                </div>
                <div>
                    <label for="text-1">Testimonial 2</label>
                    <textarea type="text" id="text-42" name="text_42" rows="10">“I really can't picture my home buying experience without Wesley. Her knowledge of real estate is endless. Her keen eye
                    for architecture and design is an enormous plus when you're trying to decide on the right home. Every step of the way I
                    felt informed and secure in my decisions thanks to her. I would highly recommend Wesley to anyone looking to buy, sell
                    or invest in properties.”</textarea>
                    <input type="text" id="text-43" name="text_43" value="— Marisa Navarro">
                </div>
                <div>
                    <label for="text-1">Testimonial 3</label>
                    <textarea type="text" id="text-44" name="text_44" rows="10">"We hired Wesley to handle the sale of our condominium in Brickell. Wesley was very attentive and hands on making sure
                    the property was marketed properly by taking high quality photographs and including the property in mailing lists which
                    generated a large pool of buyers. Her strategy for pricing the property allowed us to sell the property within our
                    desired time frame. Would strongly recommend her if you are looking for an agent in the area who has the knowledge to
                    navigate you through a real estate transaction quickly and efficiently.”</textarea>
                    <input type="text" id="text-45" name="text_45" value="— Jonathan Alfonso">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="row-image">
                <div class="page page-8">
                    <div class="absolute" style="top:0;left:0;">
                        <img src="images/home-didnt-sell/page-8.png" alt="">
                    </div>
                    <div class="absolute page-number-left">
                        <p>Page 08</p>
                    </div>
                    <div class="absolute" style="top:140px;right:-280px;">
                        <img id="img_5_1" src="images/home-didnt-sell/page-9-img-1.png" alt="" width="380px"
                            height="320px">
                    </div>
                    <div class="absolute" style="top:630px;right:-280px;">
                        <img id="img_6_1" src="images/home-didnt-sell/page-9-img-2.png" alt="" width="380px"
                            height="460px">
                    </div>
                    <div class="absolute" style="top:150px;left:380px;right:200px;">
                        <p class="font-thin text-46" style="font-size: 20px;text-align:justify;">After having my
                            property on the
                            market for
                            little over a year and no offers, we decided to change realtors. Wesley was
                            highly recommended by a friend and we really liked her presentation and
                            professionalism. The
                            property's
                            listing was 100%
                            better with professional photos and videos, and the house started having showings
                            and offers
                            in less
                            than a month. We
                            sold the property and were VERY pleased with the services provided by Wesley & LUXE
                            Properties.”</p>
                        <p class="gold font-bold text-47" style="text-align: right;font-size:20px;margin-top:20px;">—
                            Sandra
                            Leatherwood</p>
                    </div>
                    <div class="absolute" style="top:550px;left:380px;right:200px;">
                        <p class="font-thin white text-48" style="font-size: 20px;text-align:justify;">My wife and I
                            looked for
                            a home for
                            approximately 2 years with no luck. Along came Wesley. She was knowledgeable, fun,
                            honest, and most importantly, patient. She truly aimed to provide us with listings
                            that were
                            tailored
                            for our needs and
                            taste.”</p>
                        <p class="gold font-bold text-49" style="text-align: right;font-size:20px;margin-top:20px;">—
                            Jorge L.
                            Conforme</p>
                    </div>
                    <div class="absolute" style="top:830px;left:380px;right:200px;">
                        <p class="font-thin white text-50" style="font-size: 20px;text-align:justify;">I interviewed 5
                            different
                            realtors
                            and Wesley was the only one who took the time to explain things to me. She never
                            made
                            me feel like I was a burden even when I asked a hundred questions. She worked hard
                            to get
                            the most money
                            for my property
                            and I did get it over asking price. She even answered some questions about the
                            purchase of
                            my new home
                            even though I was
                            buying it in another city.”</p>
                        <p class="gold font-bold text-51" style="text-align: right;font-size:20px;margin-top:20px;">—
                            Carlyn
                            Little</p>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <div>
                    <label for="text-1">Testimonial 1</label>
                    <textarea type="text" id="text-46" name="text_46"
                        rows="10">After having my property on the market for little over a year and no offers, we decided to change realtors. Wesley was
                    highly recommended by a friend and we really liked her presentation and professionalism. The property's listing was 100%
                    better with professional photos and videos, and the house started having showings and offers in less than a month. We
                    sold the property and were VERY pleased with the services provided by Wesley & LUXE Properties.”</textarea>
                    <input type="text" id="text-47" name="text_47" value="— Sandra Leatherwood">
                </div>
                <div>
                    <label for="text-1">Testimonial 1</label>
                    <textarea type="text" id="text-48" name="text_48" rows="10">My wife and I looked for a home for approximately 2 years with no luck. Along came Wesley. She was knowledgeable, fun,
                    honest, and most importantly, patient. She truly aimed to provide us with listings that were tailored for our needs and
                    taste.”</textarea>
                    <input type="text" id="text-49" name="text_49" value="— Jorge L. Conforme">
                </div>
                <div>
                    <label for="text-1">Testimonial 1</label>
                    <textarea type="text" id="text-50" name="text_50" rows="10">I interviewed 5 different realtors and Wesley was the only one who took the time to explain things to me. She never made
                    me feel like I was a burden even when I asked a hundred questions. She worked hard to get the most money for my property
                    and I did get it over asking price. She even answered some questions about the purchase of my new home even though I was
                    buying it in another city.”</textarea>
                    <input type="text" id="text-51" name="text_51" value="— Carlyn Little">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="row-image">
                <div class="page page-9">
                    <div class="absolute" style="top:0;left:0;">
                        <img src="images/home-didnt-sell/page-9.png" alt="">
                    </div>
                    <div class="absolute page-number-right">
                        <p>Page 09</p>
                    </div>
                    <div class="absolute" style="top:140px;left:-30px;">
                        <img id="img_5" src="images/home-didnt-sell/page-9-img-1.png" alt="" width="380px"
                            height="320px">
                    </div>
                    <div class="absolute" style="top:630px;left:-30px;">
                        <img id="img_6" src="images/home-didnt-sell/page-9-img-2.png" alt="" width="380px"
                            height="460px">
                    </div>
                    <div class="absolute" style="top:270px;left:470px;right:100px;">
                        <p class="font-thin text-52" style="font-size: 20px;text-align:justify;">I have bought and sold
                            with
                            Wesley in the
                            past and they have always made the process simple for me. They go above and
                            beyond and offer great service, when issues have come up they let me know my options
                            to
                            overcome them to
                            get the deal
                            done. I appreciate the attention to detail and look forward to using them again”</p>
                        <p class="gold font-bold text-53" style="text-align: right;font-size:20px;margin-top:20px;">—
                            Bernie Ash
                        </p>
                    </div>
                    <div class="absolute" style="top:640px;left:470px;right:100px;">
                        <p class="font-thin text-54" style="font-size: 20px;text-align:justify;">I was interested in a
                            listing
                            Wesley had,
                            but I didn't have a realtor. Ended up purchasing the property and Wesley
                            represented me as the Buyer's agent while also being the seller's agent. It was a
                            very
                            difficult
                            transaction since
                            property had a tenant at the time, but Wesley made the process as easy as it could
                            possibly
                            be for me.
                            Even though she
                            was the sellers agent from the get go and only met me during the listing process she
                            respected my part
                            of the
                            transaction as professionally as she did the sellers. I would blindly recommend
                            Wesley Ulloa
                            as your
                            next agent, whether
                            it be a sale or a purchase. Follow up skills and professionalism are of the highest
                            magnitude.”</p>
                        <p class="gold font-bold text-55" style="text-align: right;font-size:20px;margin-top:20px;">—
                            Oscar
                            Semino</p>
                    </div>
                    <div class="absolute" style="top:730px;left:120px;width:170px;">
                        <p class="font-thin white text-56" style="font-size: 22px;line-height:20px;">Wesly Ulloa Has
                            been
                            Awarded</p>
                        <p class="font-bold white text-57" style="font-size:26px;margin-bottom:10px;line-height:24px;">
                            The Most
                            Coveted
                            5-Star
                            Agent
                            Award</p>
                        <img id="img_7" src="images/home-didnt-sell/zillow.png" alt="" width="140px" height="85px;">
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <div class="mb-5">
                    <label for="page-1-img-1">First Image</label>
                    <input type="file" id="img-5-input"
                        onchange="image_change('img-5-input',['img_5','img_5_1'],'img_5_input')">
                    <button type="button" onclick="startCropper(1.18)">Crop</button>
                    <button type="button" onclick="crop_image(['img_5','img_5_1'],'img_5_input')">Save Crop</button>
                </div>
                <div>
                    <label for="text-1">Testimonial 1</label>
                    <textarea type="text" id="text-52" name="text_52" rows="10">I have bought and sold with Wesley in the past and they have always made the process simple for me. They go above and
                        beyond and offer great service, when issues have come up they let me know my options to overcome them to get the deal
                        done. I appreciate the attention to detail and look forward to using them again”</textarea>
                    <input type="text" id="text-53" name="text_53" value="— Bernie Ash">
                </div>
                <div class="mb-5">
                    <label for="page-1-img-1">Second Image</label>
                    <input type="file" id="img-6-input"
                        onchange="image_change('img-6-input',['img_6','img_6_1'],'img_6_input')">
                    <button type="button" onclick="startCropper(.82)">Crop</button>
                    <button type="button" onclick="crop_image(['img_6','img_6_1'],'img_6_input')">Save Crop</button>
                </div>
                <div>
                    <label for="text-1">Testimonial 2</label>
                    <textarea type="text" id="text-54" name="text_54"
                        rows="10">I was interested in a listing Wesley had, but I didn't have a realtor. Ended up purchasing the property and Wesley
                    represented me as the Buyer's agent while also being the seller's agent. It was a very difficult transaction since
                    property had a tenant at the time, but Wesley made the process as easy as it could possibly be for me. Even though she
                    was the sellers agent from the get go and only met me during the listing process she respected my part of the
                    transaction as professionally as she did the sellers. I would blindly recommend Wesley Ulloa as your next agent, whether
                    it be a sale or a purchase. Follow up skills and professionalism are of the highest magnitude.”</textarea>
                    <input type="text" id="text-55" name="text_55" value="— Oscar Semino">
                </div>
                <div>
                    <label for="text-1">Title 1</label>
                    <input type="text" id="text-56" name="text_56" value="Wesly Ulloa Has been Awarded">
                </div>
                <div>
                    <label for="text-1">Title 2</label>
                    <input type="text" id="text-57" name="text_57" value="The Most Coveted 5-Star Agent Award">
                </div>
                <div class="mb-5">
                    <label for="page-1-img-1">Third Image</label>
                    <input type="file" id="img-7-input" onchange="image_change('img-7-input',['img_7'],'img_7_input')">
                    <button type="button" onclick="startCropper(1.64)">Crop</button>
                    <button type="button" onclick="crop_image(['img_7'],'img_7_input')">Save Crop</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="row-image">
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
                            margin-bottom: 10px;
                            letter-spacing: -0.3px;
                        }
                    </style>
                    <div class="absolute" style="top:140px;left:160px;">
                        <p class="font-thin text-58" style="font-size: 50px;line-height:40px;">LUXE Properties</p>
                        <p class="font-bold gold text-59" style="font-size: 50px;line-height:60px;">Listing and
                            Servicing Plans
                        </p>
                    </div>
                    <div class="absolute" style="top:267px;left:524px;">
                        <p class="font-thin gold" style="font-size: 20px;">Luxe</p>
                    </div>
                    <div class="absolute" style="top:267px;left:598px;">
                        <p class="font-thin white" style="font-size: 20px;">Luxe Premium</p>
                    </div>
                    <div class="absolute" style="top:267px;left:747px;">
                        <p class="font-thin gold" style="font-size: 20px;">Luxe Reserve</p>
                    </div>
                    <div class="absolute" style="top:1117px;left:170px;">
                        <p class="font-thin" style="font-size: 20px;">All options require<br>Broker and Seller
                            Agreement<br>on Price
                            and Terms</p>
                    </div>
                    <div class="absolute" style="top:30px;left:145px;">
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
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <div>
                    <label for="text-1">Title 1</label>
                    <input type="text" id="text-58" name="text_58" value="LUXE Properties">
                </div>
                <div>
                    <label for="text-1">Title 2</label>
                    <input type="text" id="text-59" name="text_59" value="Listing and Servicing Plans">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="row-image">
                <div class="page page-11">
                    <div class="absolute" style="top:0;left:0;">
                        <img src="images/home-didnt-sell/page-11.png" alt="">
                    </div>
                    <div class="absolute page-number-right">
                        <p>Page 11</p>
                    </div>
                    <div class="absolute" style="top:140px;left:160px;">
                        <p class="font-thin text-60" style="font-size: 50px;line-height:40px;">LUXE Properties</p>
                        <p class="font-bold gold text-61" style="font-size: 50px;line-height:60px;">Listing and
                            Servicing Plans
                        </p>
                    </div>
                    <div class="absolute" style="top:267px;left:524px;">
                        <p class="font-thin gold" style="font-size: 20px;">Luxe</p>
                    </div>
                    <div class="absolute" style="top:267px;left:598px;">
                        <p class="font-thin white" style="font-size: 20px;">Luxe Premium</p>
                    </div>
                    <div class="absolute" style="top:267px;left:747px;">
                        <p class="font-thin gold" style="font-size: 20px;">Luxe Reserve</p>
                    </div>
                    <div class="absolute" style="top:1117px;left:170px;">
                        <p class="font-thin" style="font-size: 20px;">All options require<br>Broker and Seller
                            Agreement<br>on Price
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
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <div>
                    <label for="text-1">Title 1</label>
                    <input type="text" id="text-60" name="text_60" value="LUXE Properties">
                </div>
                <div>
                    <label for="text-1">Title 2</label>
                    <input type="text" id="text-61" name="text_61" value="Listing and Servicing Plans">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="row-image">
                <div class="page page-12">
                    <div class="absolute" style="top:0;left:0;">
                        <img src="images/home-didnt-sell/page-12.png" alt="">
                    </div>
                    <div class="absolute page-number-left">
                        <p>Page 12</p>
                    </div>
                    <div class="absolute" style="top:140px;left:160px;">
                        <p class="font-thin text-62" style="font-size: 50px;line-height:40px;">LUXE Properties</p>
                        <p class="font-bold gold text-63" style="font-size: 50px;line-height:60px;">Listing and
                            Servicing Plans
                        </p>
                    </div>
                    <div class="absolute" style="top:267px;left:524px;">
                        <p class="font-thin gold" style="font-size: 20px;">Luxe</p>
                    </div>
                    <div class="absolute" style="top:267px;left:598px;">
                        <p class="font-thin white" style="font-size: 20px;">Luxe Premium</p>
                    </div>
                    <div class="absolute" style="top:267px;left:747px;">
                        <p class="font-thin gold" style="font-size: 20px;">Luxe Reserve</p>
                    </div>
                    <div class="absolute" style="top:1117px;left:170px;">
                        <p class="font-thin" style="font-size: 20px;">All options require<br>Broker and Seller
                            Agreement<br>on Price
                            and Terms</p>
                    </div>
                    <div class="absolute" style="top:296px;left:145px;">
                        <p class="font-thin table-list">Incentive LUXE</p>
                        <p class="font-thin table-list">3% to Buyer's Broker</p>
                        <p class="font-thin table-list">4% to Buyer's Broker OR Membership to PV <br>Inn and
                            Club to
                            Buyers see note
                            (14)</p>
                        <p class="font-thin table-list" style="margin-top: 19px;">LUXE Service Professionals
                            (introduction and
                            coordination with;
                            Fees NIC)
                        </p>
                        <p class="font-thin table-list">Closing and Title Company</p>
                        <p class="font-thin table-list">Staging Company</p>
                        <p class="font-thin table-list">Landscaping Company</p>
                        <p class="font-thin table-list">LUXE Service Professionals (introduction and
                            coordination with;
                            Fees NIC)
                        </p>
                        <p class="font-thin table-list">Touch Up Professionals</p>
                        <p class="font-thin table-list">Clean Out Professionals</p>
                        <p class="font-thin table-list">Clean Out Professionals</p>
                        <p class="font-thin table-list">What Limited Service Providers Do (which we do as well
                            PLUS all
                            of the
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
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <div>
                    <label for="text-1">Title 1</label>
                    <input type="text" id="text-62" name="text_62" value="LUXE Properties">
                </div>
                <div>
                    <label for="text-1">Title 2</label>
                    <input type="text" id="text-63" name="text_63" value="Listing and Servicing Plans">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="row-image">
                <div class="page page-13">
                    <div class="absolute" style="top:0;left:0;">
                        <img src="images/home-didnt-sell/page-13.png" alt="">
                    </div>
                    <div class="absolute" style="top:250px;left:350px;">
                        <img id="img_18" src="images/home-didnt-sell/page-13-img-1.png" alt="" width="555px"
                            height="275px">
                    </div>
                    <div class="absolute" style="top:580px;left:630px;">
                        <img id="img_19" src="images/home-didnt-sell/page-13-img-2.png" alt="" width="185px"
                            height="400px">
                    </div>
                    <div class="absolute" style="top:1050px;left:100px;">
                        <img id="img_20" src="images/home-didnt-sell/page-13-img-3.png" alt="" width="500px"
                            height="145px">
                    </div>
                    <div class="absolute" style="top:350px;left:150px;">
                        <img src="images/home-didnt-sell/divider.png" alt="" width="370px">
                    </div>
                    <div class="absolute page-number-right">
                        <p>Page 13</p>
                    </div>
                    <div class="absolute" style="top:250px;left:150px;">
                        <p class="font-thin white text-64" style="font-size: 32px;">It’s Time for</p>
                        <p class="font-bold white text-65" style="font-size: 40px;margin-top:-10px;">A New Approach</p>
                    </div>
                    <div class="absolute" style="top:380px;left:150px;max-width:190px;">
                        <p class="font-thin white text-66" style="font-size: 28px;line-height:28px">The
                            Miami<br>Historic<br>Homes Team</p>
                        <p class="font-thin font-bold text-67" style="font-size: 32px;line-height:32px">LUXE
                            Listing<br>Program!
                        </p>
                    </div>
                    <div class="absolute" style="top:670px;left:160px;width:380px;">
                        <p class="font-thin white text-68" style="font-size: 20px;text-align:justify;">Gone are the days
                            when an
                            agent
                            could just
                            put up a listing in the Multiple Listing Service and sit back and wait for
                            another agent to sell the house for them. And if all it took to sell a house was
                            simply
                            putting it in
                            the MLS, wouldn’t
                            everyone be selling their homes themselves? And by now, don’t you owe yourself more
                            than the
                            status quo?
                        </p>
                    </div>
                    <div class="absolute" style="top:1040px;left:635px;width:185px;">
                        <p class="font-thin text-69" style="font-size: 20px;">The Miami Historic<br>Homes Team
                            Listing<br>and
                            Servicing Plan<br>was born!</p>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <div class="mb-5">
                    <label for="page-1-img-1">First Image</label>
                    <input type="file" id="img-18-input"
                        onchange="image_change('img-18-input',['img_18'],'img_18_input')">
                    <button type="button" onclick="startCropper(111/55)">Crop</button>
                    <button type="button" onclick="crop_image(['img_18'],'img_18_input')">Save Crop</button>
                </div>
                <div>
                    <label for="text-1">Title 1</label>
                    <input type="text" id="text-64" name="text_64" value="It’s Time for">
                </div>
                <div>
                    <label for="text-1">Title 2</label>
                    <input type="text" id="text-65" name="text_65" value="A New Approach">
                </div>
                <div>
                    <label for="text-1">Title 3</label>
                    <input type="text" id="text-66" name="text_66" value="The Miami<br>Historic<br>Homes Team">
                </div>
                <div>
                    <label for="text-1">Title 4</label>
                    <input type="text" id="text-67" name="text_67" value="LUXE Listing<br>Program!">
                </div>
                <div class="mb-5">
                    <label for="page-1-img-1">Second Image</label>
                    <input type="file" id="img-19-input"
                        onchange="image_change('img-19-input',['img_19'],'img_19_input')">
                    <button type="button" onclick="startCropper(37/80)">Crop</button>
                    <button type="button" onclick="crop_image(['img_19'],'img_19_input')">Save Crop</button>
                </div>
                <div>
                    <label for="text-1">Text 1</label>
                    <textarea type="text" id="text-68" name="text_68"
                        rows="10">Gone are the days when an agent could just put up a listing in the Multiple Listing Service and sit back and wait for
                        another agent to sell the house for them. And if all it took to sell a house was simply putting it in the MLS, wouldn’t
                        everyone be selling their homes themselves? And by now, don’t you owe yourself more than the status quo?</textarea>
                </div>
                <div>
                    <label for="text-1">Text 2</label>
                    <textarea type="text" id="text-69" name="text_69"
                        rows="5">The Miami Historic<br>Homes Team Listing<br>and Servicing Plan<br>was born!</textarea>
                </div>
                <div class="mb-5">
                    <label for="page-1-img-1">Third Image</label>
                    <input type="file" id="img-20-input"
                        onchange="image_change('img-20-input',['img_20'],'img_20_input')">
                    <button type="button" onclick="startCropper(100/29)">Crop</button>
                    <button type="button" onclick="crop_image(['img_20'],'img_20_input')">Save Crop</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="row-image">
                <div class="page page-14">
                    <div class="absolute" style="top:0;left:0;">
                        <img src="images/home-didnt-sell/page-14.png" alt="">
                    </div>
                    <div class="absolute w-100" style="top:222px;text-align:center">
                        <img src="images/home-didnt-sell/page-20-img-1.png" alt="" height="120px">
                    </div>
                    <div class="absolute" style="top:650px;left:200px;">
                        <img src="images/home-didnt-sell/page-14-box.png" alt="" height="230px">
                    </div>
                    <div class="absolute" style="top:382px;left:200px;">
                        <img id="img_8" src="images/home-didnt-sell/page-14-img-1.jpg" alt="" height="265px"
                            width="421px">
                    </div>
                    <div class="absolute" style="top:382px;left:625px;">
                        <img id="img_9" src="images/home-didnt-sell/page-14-img-2.jpg" alt="" height="125px"
                            width="190px">
                    </div>
                    <div class="absolute" style="top:512px;left:625px;">
                        <img id="img_10" src="images/home-didnt-sell/page-14-img-3.jpg" alt="" height="133px"
                            width="190px">
                    </div>
                    <div class="absolute" style="top:628px;left:625px;">
                        <img id="img_11" src="images/home-didnt-sell/page-14-img-4.jpg" alt="" height="133px"
                            width="190px">
                    </div>
                    <div class="absolute" style="top:750px;left:625px;">
                        <img id="img_12" src="images/home-didnt-sell/page-14-img-5.jpg" alt="" height="133px"
                            width="190px">
                    </div>
                    <div class="absolute" style="top:880px;left:198px;">
                        <img id="img_13" src="images/home-didnt-sell/page-14-img-6.jpg" alt="" height="230px"
                            width="617px">
                    </div>
                    <div class="absolute page-number-left">
                        <p>Page 14</p>
                    </div>
                    <div class="absolute" style="top:662px;left:366px;">
                        <p class="white" style="font-size: 12px;">INTRODUCING</p>
                    </div>
                    <div class="absolute" style="top:676px;left:290px;">
                        <p class="white text-70" style="font-size: 12px;">3504 MAIN LODGE DR • MIAMI • FLORIDA</p>
                    </div>
                    <div class="absolute" style="top:700px;left:218px;width:385px;text-align:justify;">
                        <p class="white text-71" style="font-size: 14px;">This is a single family home that contains
                            7,178 sq ft
                            and was
                            built in 2008. It contains 7 bedrooms and 7 bathrooms.
                            Spectacular Estate Home in the extremely exclusive neighborhood of Camp Biscayne,
                            This home
                            offers a
                            lifestyle of
                            maximum privacy and security while being just steps from the best that Coconut Grove
                            provides. Walking
                            distance to the
                            best schools, shopping and resturants.</p>
                        <p class="white font-thin text-72" style="font-size: 30px;text-align:center;">$4,499,000</p>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <div class="mb-5">
                    <label for="page-1-img-1">First Image</label>
                    <input type="file" id="img-8-input" onchange="image_change('img-8-input',['img_8'],'img_8_input')">
                    <button type="button" onclick="startCropper(421/265)">Crop</button>
                    <button type="button" onclick="crop_image(['img_8'],'img_8_input')">Save Crop</button>
                </div>
                <div class="mb-5">
                    <label for="page-1-img-1">Column Image 1</label>
                    <input type="file" id="img-9-input" onchange="image_change('img-9-input',['img_9'],'img_9_input')">
                    <button type="button" onclick="startCropper(38/25)">Crop</button>
                    <button type="button" onclick="crop_image(['img_9'],'img_9_input')">Save Crop</button>
                </div>
                <div class="mb-5">
                    <label for="page-1-img-1">Column Image 2</label>
                    <input type="file" id="img-10-input"
                        onchange="image_change('img-10-input',['img_10'],'img_10_input')">
                    <button type="button" onclick="startCropper(10/7)">Crop</button>
                    <button type="button" onclick="crop_image(['img_10'],'img_10_input')">Save Crop</button>
                </div>
                <div class="mb-5">
                    <label for="page-1-img-1">Column Image 3</label>
                    <input type="file" id="img-11-input"
                        onchange="image_change('img-11-input',['img_11'],'img_11_input')">
                    <button type="button" onclick="startCropper(10/7)">Crop</button>
                    <button type="button" onclick="crop_image(['img_11'],'img_11_input')">Save Crop</button>
                </div>
                <div class="mb-5">
                    <label for="page-1-img-1">Column Image 4</label>
                    <input type="file" id="img-12-input"
                        onchange="image_change('img-12-input',['img_12'],'img_12_input')">
                    <button type="button" onclick="startCropper(10/7)">Crop</button>
                    <button type="button" onclick="crop_image(['img_12'],'img_12_input')">Save Crop</button>
                </div>
                <div>
                    <label for="text-1">Address</label>
                    <input type="text" id="text-70" name="text_70" value="3504 MAIN LODGE DR • MIAMI • FLORIDA">
                </div>
                <div>
                    <label for="text-1">Text 1</label>
                    <textarea type="text" id="text-71" name="text_71" rows="7">This is a single family home that contains 7,178 sq ft and was built in 2008. It contains 7 bedrooms and 7 bathrooms.
                        Spectacular Estate Home in the extremely exclusive neighborhood of Camp Biscayne, This home offers a lifestyle of
                        maximum privacy and security while being just steps from the best that Coconut Grove provides. Walking distance to the
                        best schools, shopping and resturants.</textarea>
                    <input type="text" id="text-72" name="text_72" value="$4,499,000">
                </div>
                <div class="mb-5">
                    <label for="page-1-img-1">Bottom Image</label>
                    <input type="file" id="img-13-input"
                        onchange="image_change('img-13-input',['img_13'],'img_13_input')">
                    <button type="button" onclick="startCropper(617/230)">Crop</button>
                    <button type="button" onclick="crop_image(['img_13'],'img_13_input')">Save Crop</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="row-image">
                <div class="page page-15">
                    <div class="absolute" style="top:0;left:0;">
                        <img src="images/home-didnt-sell/page-15.png" alt="">
                    </div>
                    <div class="absolute page-number-right">
                        <p>Page 15</p>
                    </div>
                    <div class="absolute" style="top:170px;left:200px;right:160px;">
                        <p class="font-thin text-73" style="font-size: 21px;text-align:justify;line-height:20px;">It’s
                            time for
                            a new agent,
                            new marketing,
                            new buyers, and most of all… new possibilities. Ultimately, our goal is to
                            sell your property for the most money possible. In the process we want to reconnect
                            you with
                            the
                            excitement you
                            originally felt upon first listing. It takes more than the MLS, realtor.com, Trulia,
                            Zillow
                            and an
                            office caravan or
                            open house to sell a home. We have, in fact, created a custom 50+ point LUXE Listing
                            and
                            Servicing Plan
                            for ALL of the
                            LUXE Listings! Here are just some of the ways we achieve this:</p>
                    </div>
                    <div class="absolute" style="bottom:710px;left:170px;">
                        <p class="font-thin text-75" style="font-size: 20px;line-height:18px;">Pre-MLS</p>
                        <p class="font-bold gold text-76" style="font-size: 25px;line-height:25px;">Marketing</p>
                    </div>
                    <div class="absolute" style="bottom:710px;left:340px;right:160px;">
                        <p class="font-thin text-74" style="font-size: 20px;text-align:justify;line-height:20px;">Before
                            we
                            officially list
                            your property for
                            sale in the Multiple Listing Service, we'll begin a targeted pre-Multiple
                            Listing Service campaign catered to specifically garner interest and traffic to your
                            property prior to
                            it even hitting
                            the market. This pre-Launch program allows us to not lose a second of time WHILE
                            preparing
                            to bring your
                            property to the
                            market properly. We only have ONE SHOT at a first impression.</p>
                    </div>
                    <div class="absolute" style="bottom:540px;left:170px;">
                        <p class="font-thin text-78" style="font-size: 20px;line-height:18px;">Professional</p>
                        <p class="font-bold gold text-79" style="font-size: 25px;line-height:25px;">Photography</p>
                    </div>
                    <div class="absolute" style="bottom:540px;left:340px;right:160px;">
                        <p class="font-thin text-77" style="font-size: 20px;text-align:justify;line-height:20px;">Over
                            90% of
                            buyers begin
                            their home searches online, so first impressions matter. This is why our company
                            takes the
                            expense of hiring a professional photographer for every one of our listings,
                            ensuring we
                            show your
                            property in the best
                            light from the very beginning.</p>
                    </div>
                    <div class="absolute" style="bottom:160px;left:170px;">
                        <p class="font-thin text-81" style="font-size: 20px;line-height:18px;">Premium</p>
                        <p class="font-bold white text-82" style="font-size: 25px;line-height:25px;">Online<br>Placement
                        </p>
                    </div>
                    <div class="absolute" style="bottom:160px;left:340px;right:160px;">
                        <p class="font-thin text-80" style="font-size: 20px;text-align:justify;line-height:20px;">You
                            may have
                            heard of real
                            estate syndicate websites like realtor.com, zillow.com, trulia.com and more. Wesley
                            Ulloa
                            and
                            Luxe Properties is known in the real estate industry nationwide for our innovative
                            application of
                            technologies. But any
                            other agent can place you home on the MLS realtor.com, Trulia and Zillow. We go far
                            and
                            above that and
                            include ALL of
                            our Luxe Listings in such sites as the Miami Herald, Miami Times, Miami Agent, and
                            other
                            prime premium
                            sites. Most real
                            estate professional rely on what is available to them for free (Zillow, trulia,
                            their
                            broker's site,
                            etc.). I invest
                            highly in marketing your property online to highly targeted sites, not just free
                            ones.</p>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <div>
                    <label for="text-1">Text 1</label>
                    <textarea type="text" id="text-73" name="text_73" rows="7">It’s time for a new agent, new marketing, new buyers, and most of all… new possibilities. Ultimately, our goal is to
                    sell your property for the most money possible. In the process we want to reconnect you with the excitement you
                    originally felt upon first listing. It takes more than the MLS, realtor.com, Trulia, Zillow and an office caravan or
                    open house to sell a home. We have, in fact, created a custom 50+ point LUXE Listing and Servicing Plan for ALL of the
                    LUXE Listings! Here are just some of the ways we achieve this:</textarea>
                </div>
                <div>
                    <label for="text-1">Text 2</label>
                    <textarea type="text" id="text-74" name="text_74" rows="7">Before we officially list your property for sale in the Multiple Listing Service, we'll begin a targeted pre-Multiple
                    Listing Service campaign catered to specifically garner interest and traffic to your property prior to it even hitting
                    the market. This pre-Launch program allows us to not lose a second of time WHILE preparing to bring your property to the
                    market properly. We only have ONE SHOT at a first impression.</textarea>
                    <input type="text" id="text-75" name="text_75" value="Pre-MLS">
                    <input type="text" id="text-76" name="text_76" value="Marketing">
                </div>
                <div>
                    <label for="text-1">Text 3</label>
                    <textarea type="text" id="text-77" name="text_77" rows="7">Over 90% of buyers begin their home searches online, so first impressions matter. This is why our company takes the
                    expense of hiring a professional photographer for every one of our listings, ensuring we show your property in the best
                    light from the very beginning.</textarea>
                    <input type="text" id="text-78" name="text_78" value="Professional">
                    <input type="text" id="text-79" name="text_79" value="Photography">
                </div>
                <div>
                    <label for="text-1">Text 4</label>
                    <textarea type="text" id="text-80" name="text_80" rows="7">You may have heard of real estate syndicate websites like realtor.com, zillow.com, trulia.com and more. Wesley Ulloa and
                    Luxe Properties is known in the real estate industry nationwide for our innovative application of technologies. But any
                    other agent can place you home on the MLS realtor.com, Trulia and Zillow. We go far and above that and include ALL of
                    our Luxe Listings in such sites as the Miami Herald, Miami Times, Miami Agent, and other prime premium sites. Most real
                    estate professional rely on what is available to them for free (Zillow, trulia, their broker's site, etc.). I invest
                    highly in marketing your property online to highly targeted sites, not just free ones.</textarea>
                    <input type="text" id="text-81" name="text_81" value="Premium">
                    <input type="text" id="text-82" name="text_82" value="Online<br>Placement">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="row-image">
                <div class="page page-16">
                    <div class="absolute" style="top:0;left:0;">
                        <img src="images/home-didnt-sell/page-16.png" alt="">
                    </div>
                    <div class="absolute page-number-left">
                        <p>Page 16</p>
                    </div>
                    <div class="absolute" style="bottom:710px;left:190px;">
                        <p class="font-thin text-83" style="font-size: 20px;line-height:18px;">Professionally</p>
                        <p class="font-bold gold text-84" style="font-size: 25px;line-height:25px;">Printed<br>Brochures
                        </p>
                    </div>
                    <div class="absolute" style="bottom:710px;left:360px;right:160px;">
                        <p class="font-thin text-85" style="font-size: 20px;text-align:justify;line-height:20px;">Most
                            agents
                            simply print
                            the MLS page or something they create on their computer for the information they
                            hand to
                            prospective buyers. At Luxe Properties we have a brochure/ flyer professionally
                            printed for
                            all of our
                            listings. Your
                            property deserves to be presented to the market in the highest possible way, not
                            just a
                            Xerox print out.
                            We also have
                            professionally printed mini business card sized brochures of your listing for you to
                            keep
                            and hand out
                            when you are out
                            and about. Buyers love these little cards.</p>
                    </div>
                    <div class="absolute" style="bottom:510px;left:190px;">
                        <p class="font-thin text-86" style="font-size: 20px;line-height:18px;">Professionally</p>
                        <p class="font-bold gold text-87" style="font-size: 25px;line-height:25px;">Just for
                            Your<br>Listing!
                        </p>
                    </div>
                    <div class="absolute" style="bottom:510px;left:360px;right:160px;">
                        <p class="font-thin text-88" style="font-size: 20px;text-align:justify;line-height:20px;">One of
                            the
                            problems that
                            can occur with listing distribution sites and property websites is that your listing
                            is just
                            one of thousands or millions. We create a website with your property address that is
                            for
                            your property
                            alone! Don't
                            worry: of course you will be on all of those sites. However, your property will have
                            it's
                            own home on
                            the Internet as
                            well.</p>
                    </div>
                    <div class="absolute" style="bottom:370px;left:190px;">
                        <p class="font-thin text-89" style="font-size: 20px;line-height:18px;">Market</p>
                        <p class="font-bold white text-90" style="font-size: 25px;line-height:25px;">Preparation</p>
                    </div>
                    <div class="absolute" style="bottom:370px;left:360px;right:160px;">
                        <p class="font-thin text-91" style="font-size: 20px;text-align:justify;line-height:20px;">
                            Feedback
                            buyers often give
                            of homes that don't sell is that they couldn't envision themselves living in it
                            given the
                            current owner's choice of furnishings and any clutter or imperfections.</p>
                    </div>
                    <div class="absolute" style="bottom:210px;left:190px;">
                        <p class="font-thin text-92" style="font-size: 20px;line-height:18px;">Dedicated</p>
                        <p class="font-bold white text-93" style="font-size: 25px;line-height:25px;">Social
                            Media<br>Promotion
                        </p>
                    </div>
                    <div class="absolute" style="bottom:210px;left:360px;right:160px;">
                        <p class="font-thin text-94" style="font-size: 20px;text-align:justify;line-height:20px;">At
                            Luxe
                            Properties, we
                            have a full-time employee dedicated to the online promotion and social media
                            marketing of
                            your
                            property. The role of our Social Marketing Director is to make sure that we've left
                            no stone
                            unturned in
                            the internet
                            marketing of your property.</p>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <div>
                    <label for="text-1">Text 1</label>
                    <textarea type="text" id="text-85" name="text_85" rows="7">Most agents simply print the MLS page or something they create on their computer for the information they hand to
                    prospective buyers. At Luxe Properties we have a brochure/ flyer professionally printed for all of our listings. Your
                    property deserves to be presented to the market in the highest possible way, not just a Xerox print out. We also have
                    professionally printed mini business card sized brochures of your listing for you to keep and hand out when you are out
                    and about. Buyers love these little cards.</textarea>
                    <input type="text" id="text-83" name="text_83" value="Professionally">
                    <input type="text" id="text-84" name="text_84" value="Printed<br>Brochures">
                </div>
                <div>
                    <label for="text-1">Text 2</label>
                    <textarea type="text" id="text-88" name="text_88" rows="7">One of the problems that can occur with listing distribution sites and property websites is that your listing is just
                    one of thousands or millions. We create a website with your property address that is for your property alone! Don't
                    worry: of course you will be on all of those sites. However, your property will have it's own home on the Internet as
                    well.</textarea>
                    <input type="text" id="text-86" name="text_86" value="Professionally">
                    <input type="text" id="text-87" name="text_87" value="Just for Your<br>Listing!">
                </div>
                <div>
                    <label for="text-1">Text 3</label>
                    <textarea type="text" id="text-91" name="text_91" rows="7">Feedback buyers often give of homes that don't sell is that they couldn't envision themselves living in it given the
                    current owner's choice of furnishings and any clutter or imperfections.</textarea>
                    <input type="text" id="text-89" name="text_89" value="Market">
                    <input type="text" id="text-90" name="text_90" value="Preparation">
                </div>
                <div>
                    <label for="text-1">Text 4</label>
                    <textarea type="text" id="text-94" name="text_94" rows="7">At Luxe Properties, we have a full-time employee dedicated to the online promotion and social media marketing of your
                    property. The role of our Social Marketing Director is to make sure that we've left no stone unturned in the internet
                    marketing of your property.</textarea>
                    <input type="text" id="text-92" name="text_93" value="Dedicated">
                    <input type="text" id="text-93" name="text_92" value="Social Media<br>Promotion">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="row-image">
                <div class="page page-17">
                    <div class="absolute" style="top:110px;left:120px;">
                        <img id="img_14" src="images/home-didnt-sell/page-17-img-1.png" alt="" width="790px"
                            height="535px">
                    </div>
                    <div class="absolute" style="top:0;left:0;">
                        <img src="images/home-didnt-sell/page-17.png" alt="">
                    </div>
                    <div class="absolute" style="bottom:0;left:0;">
                        <img src="images/home-didnt-sell/rectangle.png" alt="" height="500px">
                    </div>
                    <div class="absolute" style="top:680px;left:120px;">
                        <img id="img_15" src="images/home-didnt-sell/page-17-img-2.png" alt="" width="790px"
                            height="535px">
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
                        <p class="font-700 text-95" style="font-size: 30px;letter-spacing:5px;">WWW.LUXEKNOWS.COM</p>
                    </div>
                    <div class="absolute" style="top:1160px;left:180px;">
                        <p class="font-700 text-96" style="font-size: 30px;letter-spacing:5px;">
                            WWW.ALLMIAMIHOUSESFORSALE.COM
                        </p>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <div class="mb-5">
                    <label for="page-1-img-1">First Site</label>
                    <input type="text" id="text-95" name="text_95" value="WWW.LUXEKNOWS.COM">
                    <input type="file" id="img-14-input"
                        onchange="image_change('img-14-input',['img_14'],'img_14_input')">
                    <button type="button" onclick="startCropper(158/107)">Crop</button>
                    <button type="button" onclick="crop_image(['img_14'],'img_14_input')">Save Crop</button>
                </div>

                <div class="mb-5">
                    <label for="page-1-img-1">Second Site</label>
                    <input type="text" id="text-96" name="text_96" value="WWW.ALLMIAMIHOUSESFORSALE.COM">
                    <input type="file" id="img-15-input"
                        onchange="image_change('img-15-input',['img_15'],'img_15_input')">
                    <button type="button" onclick="startCropper(158/107)">Crop</button>
                    <button type="button" onclick="crop_image(['img_15'],'img_15_input')">Save Crop</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="row-image">
                <div class="page page-18">
                    <div class="absolute img_16" style="
                    top:148px;
                    left:0;
                    right:0;
                    bottom:0;
                    background:url('images/home-didnt-sell/page-18-bg.png');
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
                        <p class="font-thin white text-98" style="font-size: 20px;line-height:18px;">5-Star Responses
                        </p>
                        <p class="font-bold gold text-99" style="font-size: 25px;line-height:25px;">Time to
                            Buyer<br>Leads</p>
                    </div>
                    <div class="absolute" style="bottom:770px;left:280px;right:300px;">
                        <p class="font-thin white text-97" style="font-size: 20px;text-align:justify;line-height:20px;">
                            According to a study
                            done
                            by MIT, the odds of contacting a lead more than 5 minutes versus 30 minutes drops
                            100 times.
                            From 5 to 10 minutes the odds decrease by 5 times. Is there any wonder why the
                            average
                            single agent
                            misses so many
                            opportunities to convert buyer leads for their sellers? At Luxe Properties, we have
                            a
                            dedicated inside
                            sales team whose
                            sole job is to respond to and convert buyer leads for your listing. The statistics
                            are
                            clear-- the
                            modern internet
                            consumer moves fast, and expects us to do the same.</p>
                    </div>
                    <div class="absolute" style="bottom:550px;left:240px;">
                        <p class="font-thin text-101" style="font-size: 20px;line-height:18px;">Pro-Active</p>
                        <p class="font-bold gold text-102" style="font-size: 25px;line-height:25px;">Telephone Marketing
                        </p>
                    </div>
                    <div class="absolute" style="bottom:290px;left:240px;right:250px;">
                        <p class="font-thin text-100" style="font-size: 20px;text-align:justify;line-height:20px;">Fewer
                            and
                            fewer real
                            estate agents are becoming skilled at the art of pro-active prospecting. A dirty
                            little
                            secret is
                            that most agents fear rejection and that keeps them from picking up the phone and
                            prospecting for their
                            sellers. Agents
                            like this rely on other agents working through the MLS to sell their listings for
                            them. Luxe
                            agents work
                            toward the rank
                            of Master Salesperson and receive constant coaching that helps them overcome
                            self-limiting
                            behaviors.
                            What all of that
                            really means is that Luxe agents don't just sit back and passively wait for buyers
                            for your
                            listing to
                            come to us, we
                            fearlessly and pro-actively go find them.</p>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <div>
                    <label for="text-1">Text 1</label>
                    <textarea type="text" id="text-97" name="text_97" rows="7">According to a study done by MIT, the odds of contacting a lead more than 5 minutes versus 30 minutes drops 100 times.
                    From 5 to 10 minutes the odds decrease by 5 times. Is there any wonder why the average single agent misses so many
                    opportunities to convert buyer leads for their sellers? At Luxe Properties, we have a dedicated inside sales team whose
                    sole job is to respond to and convert buyer leads for your listing. The statistics are clear-- the modern internet
                    consumer moves fast, and expects us to do the same.</textarea>
                    <input type="text" id="text-98" name="text_98" value="5-Star Responses">
                    <input type="text" id="text-99" name="text_99" value="Time to Buyer<br>Leads">
                </div>
                <div>
                    <label for="text-1">Text 2</label>
                    <textarea type="text" id="text-100" name="text_100" rows="7">Fewer and fewer real estate agents are becoming skilled at the art of pro-active prospecting. A dirty little secret is
                    that most agents fear rejection and that keeps them from picking up the phone and prospecting for their sellers. Agents
                    like this rely on other agents working through the MLS to sell their listings for them. Luxe agents work toward the rank
                    of Master Salesperson and receive constant coaching that helps them overcome self-limiting behaviors. What all of that
                    really means is that Luxe agents don't just sit back and passively wait for buyers for your listing to come to us, we
                    fearlessly and pro-actively go find them.</textarea>
                    <input type="text" id="text-101" name="text_101" value="Pro-Active">
                    <input type="text" id="text-102" name="text_102" value="Telephone Marketing">
                </div>
                <div class="mb-5">
                    <label for="page-1-img-1">Background Image</label>
                    <input type="file" id="img-16-input"
                        onchange="image_change_bg('img-16-input',['img_16'],'img_16_input')">
                    <button type="button" onclick="startCropper(798/884)">Crop</button>
                    <button type="button" onclick="crop_image_bg(['img_16'],'img_16_input')">Save Crop</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="row-image">
                <div class="page page-19">
                    <div class="absolute img_16" style="
                        top:165px;
                        left:0;
                        right:650px;
                        bottom:0;
                        background:url('images/home-didnt-sell/page-18-bg.png');
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
                        <p class="font-thin text-103" style="font-size: 40px;line-height:30px;">Why Should You Hire</p>
                        <p class="font-bold gold text-104" style="font-size: 45px;line-height:50px;">The LUXE TEAM</p>
                    </div>
                    <div class="absolute" style="top:450px;left:220px;right:100px;">
                        <p class="font-bold gold text-105" style="font-size: 25px;line-height:30px;">Communication:</p>
                        <p class="font-thin text-106" style="font-size: 20px;text-align:justify;line-height:20px;">One
                            of
                            the
                            number
                            one complaints we hear over and over is “once my agent stuck a sign in the ground, I
                            never
                            heard from
                            them”, or “I had to chase my agent down all of the time”. Communication is the key
                            to
                            positive
                            relationship. To that
                            end, we have a multifaceted communication program with our Seller which HOLDS US
                            ACCOUNTABLE
                            to what we
                            tell you we are
                            going to do. All Sellers in the LUXE Listing and Service Plan recieve their own
                            personal
                            login where
                            they can get
                            updates on marketing, showing activity, etc. on their property. We then send you
                            weekly
                            updates and
                            large monthly
                            updates that cover everything you need to know: marketing, showing activity,
                            feedback,
                            market changes,
                            etc. We work hard
                            to stay in front of you with information, not play catch up!</p>
                    </div>
                    <div class="absolute" style="top:840px;left:380px;right:100px;">
                        <p class="font-thin text-108" style="font-size: 20px;text-align:justify;line-height:20px;">Most
                            online
                            review systems
                            allow up to 5 stars, and Wesley Ulloa with LUXE Properties we always consider what
                            would
                            compel someone to give us the “5th Star”. When it comes to service we view out
                            competition
                            as Nordstrom,
                            The Ritz
                            Carlton, Disney, and Apple, and it is our intention to take care of our consumers in
                            a way
                            that makes
                            them feel as
                            special as when they interact with those companies.</p>
                    </div>
                    <div class="absolute" style="top:910px;left:150px;">
                        <p class="font-bold gold text-107" style="font-size: 28px;line-height:28px;">5-Star<br>Promise:
                        </p>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <div>
                    <label for="text-1">Title 1</label>
                    <input type="text" id="text-103" name="text_103" value="Why Should You Hire">
                </div>
                <div>
                    <label for="text-1">Title 2</label>
                    <input type="text" id="text-104" name="text_104" value="The LUXE TEAM">
                </div>
                <div>
                    <label for="text-1">Text 1</label>
                    <input type="text" id="text-105" name="text_105" value="Communication:">
                    <textarea type="text" id="text-106" name="text_106" rows="7">One of the number one complaints we hear over and over is “once my agent stuck a sign in the ground, I never heard from
                    them”, or “I had to chase my agent down all of the time”. Communication is the key to positive relationship. To that
                    end, we have a multifaceted communication program with our Seller which HOLDS US ACCOUNTABLE to what we tell you we are
                    going to do. All Sellers in the LUXE Listing and Service Plan recieve their own personal login where they can get
                    updates on marketing, showing activity, etc. on their property. We then send you weekly updates and large monthly
                    updates that cover everything you need to know: marketing, showing activity, feedback, market changes, etc. We work hard
                    to stay in front of you with information, not play catch up!</textarea>
                </div>
                <div>
                    <label for="text-1">Text 2</label>
                    <input type="text" id="text-107" name="text_107" value="5-Star<br>Promise:">
                    <textarea type="text" id="text-108" name="text_108" rows="7">Most online review systems allow up to 5 stars, and Wesley Ulloa with LUXE Properties we always consider what would
                    compel someone to give us the “5th Star”. When it comes to service we view out competition as Nordstrom, The Ritz
                    Carlton, Disney, and Apple, and it is our intention to take care of our consumers in a way that makes them feel as
                    special as when they interact with those companies.</textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="row-image">
                <div class="page page-20">
                    <div class="absolute" style="top:120px;right:-860px;">
                        <img src="images/home-didnt-sell/page-20-img-1.png" alt="" height="460px">
                    </div>
                    <div class="absolute img_17" style="
                            top:490px;
                            left:800px;
                            right:0;
                            bottom:465px;
                            background:url('images/home-didnt-sell/page-20-bg.png');
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
                        <p class="font-thin text-109" style="font-size: 30px;line-height:30px;">Why Should You Hire</p>
                        <p class="font-thin text-110" style="font-size: 45px;line-height:45px;">The LUXE TEAM</p>
                    </div>
                    <div class="absolute" style="top:500px;left:130px;right:260px;">
                        <p class="font-bold gold text-111" style="font-size: 25px;line-height:35px;">Highly-Skilled
                            Sales
                            Force:
                        </p>
                        <p class="font-thin text-112" style="font-size: 21px;text-align:justify;line-height:21px;">
                            Wesley
                            Ulloa
                            has a long
                            history in real estate. She is not only a licensed Broker (as opposed to a real
                            estate
                            salesperson), she owns LUXE Properties, a real estate firm in Coral Gables, Florida,
                            was
                            President of
                            Miami YPN, is a
                            member of NAHREP, MIAMI Association of Realtors, a member of CLHMS Designee, and a
                            Master’s
                            of Science
                            in International
                            Real Estate. Wesley knows real estate (read more in the coming pages on Wesley’s
                            background
                            and how that
                            helps you, the
                            Seller, sell your home).</p>
                    </div>
                    <div class="absolute" style="top:920px;left:200px;right:490px;">
                        <p class="font-bold white text-113" style="font-size: 25px;line-height:30px;">Market
                            Preparation:
                        </p>
                        <p class="font-thin text-114" style="font-size: 20px;text-align:justify;line-height:21px;">
                            Feedback
                            buyers often give
                            of homes that don’t sell is that they couldn’t envision themselves living in it
                            given the
                            current owner’s choice of furnishings and any clutter or imperfections.</p>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <div>
                    <label for="text-1">Title 1</label>
                    <input type="text" id="text-109" name="text_109" value="Why Should You Hire">
                </div>
                <div>
                    <label for="text-1">Title 2</label>
                    <input type="text" id="text-110" name="text_110" value="The LUXE TEAM">
                </div>
                <div>
                    <label for="text-1">Text 1</label>
                    <input type="text" id="text-111" name="text_111" value="Highly-Skilled Sales Force:">
                    <textarea type="text" id="text-112" name="text_112" rows="7">Wesley Ulloa has a long history in real estate. She is not only a licensed Broker (as opposed to a real estate
                    salesperson), she owns LUXE Properties, a real estate firm in Coral Gables, Florida, was President of Miami YPN, is a
                    member of NAHREP, MIAMI Association of Realtors, a member of CLHMS Designee, and a Master’s of Science in International
                    Real Estate. Wesley knows real estate (read more in the coming pages on Wesley’s background and how that helps you, the
                    Seller, sell your home).</textarea>
                </div>
                <div>
                    <label for="text-1">Text 2</label>
                    <input type="text" id="text-113" name="text_113" value="Market Preparation:">
                    <textarea type="text" id="text-114" name="text_114" rows="7">Feedback buyers often give of homes that don’t sell is that they couldn’t envision themselves living in it given the
                    current owner’s choice of furnishings and any clutter or imperfections.</textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="row-image">
                <div class="page page-21">
                    <div class="absolute" style="top:170px;left:-250px;">
                        <img src="images/home-didnt-sell/page-20-img-1.png" alt="" height="300px">
                    </div>
                    <div class="absolute img_17" style="
                            top:400px;
                            left:0px;
                            right:150px;
                            bottom:560px;
                            background:url('images/home-didnt-sell/page-20-bg.png');
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
                        <p class="font-bold white text-123" style="font-size:30px;line-height:25px;">Our</p>
                        <p class="font-bold text-124" style="font-size:30px;line-height:25px;">Core<br>Values</p>
                    </div>
                    <style>
                        .line-height-list {
                            line-height: 26.2px;
                        }
                    </style>
                    <div class="absolute" style="top:838px;left:440px;">
                        <p class="font-thin line-height-list text-115" style="font-size:20px;">Under promise and over
                            deliver</p>
                        <p class="font-thin line-height-list text-116" style="font-size:20px;">Exemplary communication
                        </p>
                        <p class="font-thin line-height-list text-136" style="font-size:20px;">Driving Innovation &
                            Change
                        </p>
                        <p class="font-thin line-height-list text-117" style="font-size:20px;">Exemplifying Vibrant
                            Leadership &
                            Follower-ship</p>
                        <p class="font-thin line-height-list text-118" style="font-size:20px;">Delivering 5-Star
                            Customer
                            Service
                        </p>
                        <p class="font-thin line-height-list text-119" style="font-size:20px;">Holding Powerful Moods of
                            Passion
                            &
                            Productivity</p>
                        <p class="font-thin line-height-list text-120" style="font-size:20px;">Leaving Our Egos At the
                            Door</p>
                        <p class="font-thin line-height-list text-121" style="font-size:20px;">Enjoying the Journey</p>
                        <p class="font-thin line-height-list text-122" style="font-size:20px;">Win-Win Transactions</p>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <div class="mb-5">
                    <label for="page-1-img-1">Main Image</label>
                    <input type="file" id="img-17-input"
                        onchange="image_change_bg('img-17-input',['img_17'],'img_17_input')">
                    <button type="button" onclick="startCropper(213/59)">Crop</button>
                    <button type="button" onclick="crop_image_bg(['img_17'],'img_17_input')">Save Crop</button>
                </div>
                <div>
                    <label for="text-1">Title</label>
                    <input type="text" id="text-123" name="text_123" value="Our">
                    <input type="text" id="text-124" name="text_124" value="Core<br>Values">
                </div>
                <div>
                    <label for="text-1">List</label>
                    <input type="text" id="text-115" name="text_115" value="Under promise and over deliver">
                    <input type="text" id="text-116" name="text_116" value="Exemplary communication">
                    <input type="text" id="text-135" name="text_135" value="Driving Innovation & Change">
                    <input type="text" id="text-117" name="text_117"
                        value="Exemplifying Vibrant Leadership & Follower-ship">
                    <input type="text" id="text-118" name="text_118" value="Delivering 5-Star Customer Service">
                    <input type="text" id="text-119" name="text_119"
                        value="Holding Powerful Moods of Passion & Productivity">
                    <input type="text" id="text-120" name="text_120" value="Leaving Our Egos At the Door">
                    <input type="text" id="text-121" name="text_121" value="Enjoying the Journey">
                    <input type="text" id="text-122" name="text_122" value="Win-Win Transactions">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="row-image">
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
                        <p class="font-thin text-125" style="font-size: 30px;line-height:30px;">Introducing</p>
                        <p class="font-bold gold text-126" style="font-size: 45px;line-height:45px;">LUXE Properties</p>
                    </div>
                    <div class="absolute" style="top:380px;left:195px;right:195px;text-align:justify">
                        <p class="font-bold text-127" style="font-size: 25px;line-height:25px;">Luxe Properties…</p>
                        <p class="font-bold gold text-128" style="font-size: 25px;line-height:25px;margin-bottom:20px;">
                            A
                            New
                            Breed Of
                            Realtors Redefining The
                            Real Estate Experience.</p>
                        <p class="font-thin text-129" style="font-size: 21px;line-height:21px;">At LUXE Properties, we
                            take pride
                            in building
                            relationships based on the promise and understanding that each client and
                            every property is unique. Our focus is to utilize creative outside-of-the-box
                            strategies to
                            make a match
                            between our
                            clients and the right property. We achieve this goal by delivering the utmost
                            service and
                            optimizing the
                            latest
                            technology available in real estate to provide accurate, reliable, and real time
                            information
                            to our
                            clients.</p>
                        <br />
                        <p class="font-thin text-130" style="font-size: 21px;line-height:21px;">At LUXE Properties, our
                            multilingual team of
                            expert Realtors is unmatched when it comes to service, market knowledge,
                            integrity, creativity, and a keen understanding of our client’s needs. We strive to
                            make
                            your real
                            estate dreams a
                            reality.</p>
                        <br />
                        <p class="font-thin text-131" style="font-size: 21px;line-height:21px;">The LUXE Properties team
                            seeks to
                            partner
                            with you every step of the way. Even more importantly, we value creating and
                            maintaining lifelong relationships with our clients. So, whether you are buying,
                            selling, or
                            considering
                            real estate
                            investing in South Florida, LUXE Properties is here to serve you and all of your
                            real estate
                            needs.</p>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <div>
                    <label for="text-1">Title 1</label>
                    <input type="text" id="text-125" name="text_125" value="Introducing">
                    <input type="text" id="text-126" name="text_126" value="LUXE Properties">
                </div>
                <div>
                    <label for="text-1">Title 2</label>
                    <input type="text" id="text-127" name="text_127" value="Luxe Properties…">
                    <input type="text" id="text-128" name="text_128"
                        value="A New Breed Of Realtors Redefining The Real Estate Experience.">
                </div>
                <div>
                    <label for="text-1">Text</label>
                    <textarea type="text" id="text-129" name="text_129"
                        rows="7">At LUXE Properties, we take pride in building relationships based on the promise and understanding that each client and
                    every property is unique. Our focus is to utilize creative outside-of-the-box strategies to make a match between our
                    clients and the right property. We achieve this goal by delivering the utmost service and optimizing the latest
                    technology available in real estate to provide accurate, reliable, and real time information to our clients.</textarea>
                    <textarea type="text" id="text-130" name="text_130" rows="7">At LUXE Properties, our multilingual team of expert Realtors is unmatched when it comes to service, market knowledge,
                    integrity, creativity, and a keen understanding of our client’s needs. We strive to make your real estate dreams a
                    reality.</textarea>
                    <textarea type="text" id="text-131" name="text_131"
                        rows="7">The LUXE Properties team seeks to partner with you every step of the way. Even more importantly, we value creating and
                    maintaining lifelong relationships with our clients. So, whether you are buying, selling, or considering real estate
                    investing in South Florida, LUXE Properties is here to serve you and all of your real estate needs.</textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="row-image">
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
                        <p class="font-thin text-132" style="font-size: 21px;line-height:21px;">Wesley has a passion for
                            historic
                            homes and
                            loves sharing her knowledge of working with, renovating, researching, owning
                            and of course selling historic homes in South Florida. She has come to appreciate
                            the quirks
                            and enjoys
                            investigating
                            the stories of those who have lived and shaped the historic homes found spread
                            throughout
                            Miami today.
                        </p>
                        <br />
                        <p class="font-thin text-133" style="font-size: 21px;line-height:21px;">Wesley Ulloa is the
                            founder of
                            LUXE
                            Properties, born and raised in Miami, she has more than fourteen years of experience
                            in South Florida real estate. Prior to graduating with a Bachelor’s Degree in
                            Business
                            Administration
                            and a Master’s of
                            Science in International Real Estate from Florida International University, Wesley
                            started
                            her real
                            estate career at
                            Fortune International Realty. Wesley worked for over eight years as an agent and
                            specialized
                            all facets
                            of real estate
                            sales; not limited to but including new development sales, investments, and luxury
                            properties.</p>
                    </div>
                    <div class="absolute" style="top:830px;left:170px;right:60px;text-align:justify">
                        <p class="font-thin white text-134" style="font-size: 23px;line-height:23px;">Wesley is active
                            in
                            multiple
                            organizations, in 2019 she was the President of Miami YPN and is currently a member
                            of the
                            NAHREP, MIAMI Association of Realtors and the CLHMS Designee. In just fourteen years
                            in the
                            industry,
                            Wesley has closed
                            over 800 transactions totaling more than $200,000,000 in sales volume. Her fourteen
                            years of
                            experience
                            has rounded her
                            abilities, which allows her to offer her clients a full service experience. Wesley
                            continues
                            to inspire
                            others with her
                            work ethic and industry expertise.</p>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <div>
                    <label for="text-1">Text</label>
                    <textarea type="text" id="text-132" name="text_132"
                        rows="7">Wesley has a passion for historic homes and loves sharing her knowledge of working with, renovating, researching, owning
                    and of course selling historic homes in South Florida. She has come to appreciate the quirks and enjoys investigating
                    the stories of those who have lived and shaped the historic homes found spread throughout Miami today.</textarea>
                    <textarea type="text" id="text-133" name="text_133"
                        rows="10">Wesley Ulloa is the founder of LUXE Properties, born and raised in Miami, she has more than fourteen years of experience
                    in South Florida real estate. Prior to graduating with a Bachelor’s Degree in Business Administration and a Master’s of
                    Science in International Real Estate from Florida International University, Wesley started her real estate career at
                    Fortune International Realty. Wesley worked for over eight years as an agent and specialized all facets of real estate
                    sales; not limited to but including new development sales, investments, and luxury properties.</textarea>
                    <textarea type="text" id="text-134" name="text_134" rows="13">Wesley is active in multiple organizations, in 2019 she was the President of Miami YPN and is currently a member of the
                    NAHREP, MIAMI Association of Realtors and the CLHMS Designee. In just fourteen years in the industry, Wesley has closed
                    over 800 transactions totaling more than $200,000,000 in sales volume. Her fourteen years of experience has rounded her
                    abilities, which allows her to offer her clients a full service experience. Wesley continues to inspire others with her
                    work ethic and industry expertise.</textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="row-image">
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
                        <p class="" style="font-size: 18px;line-height:18px;letter-spacing:2px;">
                            WWW.LUXEKNOWS.COM</p>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <div class="button">
                    <button type="submit" name="action" value="Generate" class="generate" style="">Generate</button>
                    <button type="submit" name="action" value="Save" class="generate">Save</button>

                    <br />
                    JSON Upload:
                    <input type="file" id="jsonFileUpload" onchange="jsonFileUploaded()" />
                </div>
            </div>
        </div>
    </form>
</body>

<script>
    $("input").change(function(event) {
            var event_id = event.target.id;
            var event_element = $("#" + event_id)
            var export_var = $("." + event_id);
            export_var.html(event_element.val());
        });

        $("textarea").change(function(event) {
            var event_id = event.target.id;
            if (event_id == "text-21") {
                var arrayOfLines = $('#text-21').val().split('\n');
                var text = "";
                var i;
                for (i = 0; i < arrayOfLines.length; i++) { 
                    text +="<li><span><img src='images/home-didnt-sell/bullet.png'></span>"+arrayOfLines[i]+"</li>" ; 
                }
                $('.text-21').html(text); 
            }
            else if (event_id == "text-22") {
                var arrayOfLines = $('#text-22').val().split('\n');
                var text = "";
                var i;
                for (i = 0; i < arrayOfLines.length; i++) { 
                    text +="<li><span><img src='images/home-didnt-sell/bullet.png'></span>"+arrayOfLines[i]+"</li>" ; 
                }
                $('.text-22').html(text); 
            }
            else{            
                var event_element = $("#" + event_id)
                var export_var = $("." + event_id);
                export_var.html(event_element.val());
            }
        });
    

    var cropper;
    function startCropper(ratio){
        var image = document.getElementById("image");
        $(".page").css("opacity", "0");
        cropper = new Cropper(image, {
            aspectRatio: ratio,
        });
    }
    
    function image_change(file_input,image_src,image_input) {
        var form_data = new FormData();
        form_data.append("file", $("#"+file_input)[0].files[0]);
        $.ajax({
            url: '/uploadimage',
            data: form_data,
            type: 'post',
            cache: false,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-Token': $('[name="_token"]').val()
            },
            success: function(output) {
                $("#image").attr('src', 'uploadedimages/' + output)
                getBase64Image(document.getElementById('image'), function(base64) {
                    image_src.forEach(element => {
                        $("#"+element).attr('src', 'uploadedimages/' + output);                        
                    });
                    $("input[name="+image_input+"]").val('uploadedimages/' + output);
                });
            }
        });
    }
    
    function crop_image(image,image_input) {
        cropper.getCroppedCanvas().toBlob((blob) => {
            const form_data = new FormData();
            form_data.append('file', blob, 'example.png');
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: 'post',
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                'X-CSRF-Token': $('[name="_token"]').val()
                },
                success: function(output) {
                    cropper.destroy();
                    $("#image").attr('src', 'uploadedimages/' + output)
                    getBase64Image(document.getElementById("image"), function(base64) {
                        image.forEach(element => {
                            $("#"+element).attr('src', 'uploadedimages/' + output);
                        });
                        $("input[name="+image_input+"]").val('uploadedimages/' + output);
                    });
                }
            });        
        });
        $(".page").css("opacity", "1");
    }

    function image_change_bg(file_input,image_src,image_input) {
        var form_data = new FormData();
        form_data.append("file", $("#"+file_input)[0].files[0]);
        $.ajax({
            url: '/uploadimage',
            data: form_data,
            type: 'post',
            cache: false,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-Token': $('[name="_token"]').val()
            },
            success: function(output) {
                $("#image").attr('src', 'uploadedimages/' + output)
                getBase64Image(document.getElementById('image'), function(base64) {
                    image_src.forEach(element => {
                        $("."+element).css('background-image', 'url(uploadedimages/' + output + ')')                     
                    });
                    $("input[name="+image_input+"]").val('uploadedimages/' + output);
                });
            }
        });
    }
    
    function crop_image_bg(image,image_input) {
        cropper.getCroppedCanvas().toBlob((blob) => {
            const form_data = new FormData();
            form_data.append('file', blob, 'example.png');
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: 'post',
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                'X-CSRF-Token': $('[name="_token"]').val()
                },
                success: function(output) {
                    cropper.destroy();
                    $("#image").attr('src', 'uploadedimages/' + output)
                    getBase64Image(document.getElementById("image"), function(base64) {
                        image.forEach(element => {
                            $("."+element).css('background-image', 'url(uploadedimages/' + output + ')')
                        });
                        $("input[name="+image_input+"]").val('uploadedimages/' + output);
                    });
                }
            });        
        });
        $(".page").css("opacity", "1");
    }

    function convert(oldImag, callback) {
        var img = new Image();
        img.onload = function() {
            callback(img)
        }
        img.setAttribute('crossorigin', 'anonymous');
        img.src = oldImag.src;
    }
    
    function getBase64Image(img, callback) {
        convert(img, function(newImg) {
            var canvas = document.createElement("canvas");
            canvas.width = newImg.width;
            canvas.height = newImg.height;
            var ctx = canvas.getContext("2d");
            ctx.drawImage(newImg, 0, 0);
            var base64 = canvas.toDataURL("image/png");
            callback(base64)
        })
    }

    function jsonFileUploaded() {
    var reader = new FileReader();
    reader.onload = onJsonFileLoad;
    reader.readAsText(document.getElementById("jsonFileUpload").files[0]);
    }
    
    function onJsonFileLoad(event) {
    // console.log(event.target.result);
    var obj = JSON.parse(event.target.result);
    // console.log(obj);
    jQuery.each(obj, function(i, val) {
    // var item = $("#" + i);
    var item = $("[name =" + i + "]");
    $(item).val(val);
    // console.log("i: " + i + " - val: " + val);
    console.log("i: " + i + " - val: " + val);
    
    // console.log("[data-name-replace=" + i + "]");
    // var itemAttributeToReplace = $(item).attr("VAL");
    // console.log(item, itemAttributeToReplace);
    // $("." + i).val(val);
    // if (itemAttributeToReplace == "HTML") {
    // $(item).html(val);
    // } else if (itemAttributeToReplace == "VAL") {
    // $(item).val(val);
    // } else {
    // $(item).attr(itemAttributeToReplace, val)
    // }
    $(item).trigger("change");
    });
    }
  
</script>

</html>