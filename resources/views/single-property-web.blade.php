<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Single Property</title>

    @include('includes.fonts')
    <style>
        @import url("https://fonts.googleapis.com/css?family=Lato:300,400,700");
        @import url("https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap");
        @import url("https://fonts.googleapis.com/css2?family=Lato:wght@900&display=swap");

        * {
            font-family: "Lato";
        }

        .page {
            max-width: 650px;
        }

        .flex {
            display: flex;
        }

        .flex label {
            margin: 10px auto 30px auto !important;
        }

        label {
            background-color: #262626;
            color: #fff;
            padding: 10px;
            display: block;
            width: 150px;
            font-family: 'gothicbold';
            font-size: 15px;
        }

        .row {
            min-height: 1000px;
            display: flex;
            justify-content: center;
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
            margin: auto 0;
            min-width: 370px;
        }

        .row-image {
            height: 850px;
        }

        input,
        textarea {
            font-size: 15px;
            margin-top: 10px;
            margin-bottom: 30px;
            width: calc(100% - 20px);
            border: 1px solid #262626;
            padding: 10px;
            font-family: 'gothicregular';
        }

        .generate {
            font-family: "gothicbold";
            font-weight: 600;
            font-size: 18px;
            padding: 15px 40px;
            border:1px solid #e8e8e8;
            background-color: #e8e8e8;
            color: #000;
            text-decoration: none;
            border-radius: 10px;
        }

        .page-background {
            background-repeat: no-repeat;
            background-size: cover;
            height: 100%;
            position: relative;
            bottom: 0px;
            width: 650px;
            margin-top: 50px;
        }

        .black {
            color: black !important;
        }

        .gold {
            color: #c9a668 !important;
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
            font-weight: 700;
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
            position: relative;
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

        .my-0 {
            margin: 0 auto;
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
            position: relative;
            bottom: 0px;
            width: 100%;
        }

        .big-title {
            letter-spacing: 6px;
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
            height: 55%;
            position: relative;
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
            /* background-size: 90% 80%; */
            margin-left: 45px;
        }

        .page-4-2 .content .section {
            max-width: 150px;
            text-align: center;
            color: white;
        }

        .page-4-2 .content .section .section-content-top {
            font-size: 50px;
            font-weight: 300;
        }

        .page-4-2 .content .section .section-content-bottom {
            font-size: 23px;
            text-transform: uppercase;
            font-weight: 300;
        }

        .page-4-2 .content .section-1 {
            padding-top: 20px;
            padding-bottom: 30px;
            margin-left: 170px;
        }

        .page-4-2 .content .section-2 {
            margin-top: -20px;
            margin-left: 5px;
        }

        .page-4-2 .content .section-3 {
            margin-left: 335px;
            margin-top: -115px;
        }

        .page-4-2 .content .section-4 {
            margin-top: 70px;
            margin-left: 5px;
        }

        .page-4-2 .content .section-5 {
            margin-top: -115px;
            margin-left: 335px;
        }

        .page-4-2 .content .section-6 {
            margin-left: 170px;
            margin-top: 10px;
            padding-bottom: 20px;
        }

        .page-4-2 .bg-image {
            width: 130%;
            left: -800px;
            z-index: 1;
        }

        .page-4-2 .text {
            top: 900px;
            left: 250px;
        }

        .page-4-2 .text hr {
            border: 1.5pt solid #c6a467;
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
            top: 10px;
            margin-left: 250px;
            font-weight: 300;
            font-size: 54px;
        }

        .page-5-2 .heading .title {
            margin-top: -55px;
            margin-left: -6px;
            margin-bottom: -10px;
            font-weight: 300;
            font-size: 148px;
            color: #c5a367;
        }

        .page-5-2 .heading .subtitle-bottom {
            font-size: 56px;
            margin-left: 200px;
            font-weight: 300;
        }

        .page-5-2 .content {
            z-index: 100;
            top: 250px;
            margin-left: 200px;
            max-width: 450px;
        }

        .page-5-2 .content p {
            font-family: "Lato";
            font-weight: 300;
        }

        .page-5-2 .content ul {
            list-style-image: url("images/home-selling/check-large.png");
        }

        .page-5-2 .content li {
            margin-bottom: 5px;
            font-weight: 300;
        }

        .page-6-2 ul {
            list-style-image: url("images/home-selling/check-large.png");
        }

        .page-6-2 li {
            margin-bottom: 2px;
            font-weight: 300;
        }

        .week {
            margin: 110px auto;
        }

        .page-8-2 .second-part {
            height: 17%;
            bottom: 0px;
            background-repeat: no-repeat;
            background-size: auto;
            background-image: url("images/home-selling/14.png");
            background-position: right;
            text-align: right;
            padding: 20px 0px;
        }

        .abs {
            position: absolute;
        }

        .page-bg-image {
            top: 0;
            bottom: 0;
            right: 500px;
            position: absolute;
            background-size:
                cover;
            background-position: bottom right;
            background-repeat: no-repeat;
            height: 100%;
            width: 100%;
        }
        button {
            background-color: #e8e8e8;
            border: 1px solid #e8e8e8;
            padding: 10px;
            color: #262626;
            font-family: 'gothicbold';
            border-radius: 10px;
        }
        .mt-1 {
            margin-top: 5px;
        }
        .mt-3 {
            margin-top: 15px;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.9/cropper.js"
        integrity="sha512-oqBsjjSHWqkDx4UKoU+5IUZN2nW2qDp2GFSKw9+mcFm+ZywqfBKp79nfWmGPco2wzTWuE46XpjtCjZ9tFmI12g=="
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.9/cropper.css"
        integrity="sha512-949FvIQOibfhLTgmNws4F3DVlYz3FmCRRhJznR22hx76SKkcpZiVV5Kwo0iwK9L6BFuY+6mpdqB2+vDIGVuyHg=="
        crossorigin="anonymous" />
</head>

<body>
    <form method="post" action=" {{ route('pdf.single.property') }} " method="POST">
        @csrf
        <div class="row">
            <div class="row-image">
                <div class="page page-1">
                    <div class="container">
                        <div class="absolute" style="top: 30%;">
                            <h1 class="page-1-text-1 big-title font-thin my-0">3504</h1>
                            <h1 class="page-1-text-4 big-title gold font-thin my-0">MAIN</h1>
                            <h1 class="page-1-text-2  big-title gold font-thin my-0">LODGE DR</h1>
                            <h1 class="page-1-text-3 font-thin my-0 mb-40" style="font-size: 60px;">MIAMI • FLORIDA</h1>
                        </div>
                        <div class="text-center" style="margin-top:180px;">
                            <img src="images/Asset 1.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <label for="page-1-text-1">Number</label>
                <input type="text" id="page-1-text-1" name="page_1_text_1" value="3504" />
                <label for="page-1-text-4">Address</label>
                <input type="text" id="page-1-text-4" name="page_1_text_4" value="MAIN " />
                <label for="page-1-text-1">Address</label>
                <input type="text" id="page-1-text-2" name="page_1_text_2" value="LODGE DR" />
                <label for="page-1-text-1">City / State</label>
                <input type="text" id="page-1-text-3" name="page_1_text_3" value="MIAMI • FLORIDA" />
            </div>
        </div>

        <div class="row-divider"></div>

        <div class="row">
            <div class="row-image">
                <div class="page page-2 page-background"
                    style="background-image: url('images/single-property/page-2.png');">
                    <img src="" id="imageBackground-page-2-1" style="display: none;" />
                    <input hidden name="page_2_1_img_1" value="images/single-property/page-2.png" />
                    <div class="container">
                        <div class="absolute" style="position: absolute; bottom: 8px; left: 16px;">
                            <h1 class="cover-page gold">LUXE</h1>
                            <h2 class="cover-page white">PROPERTIES</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <div class="button">
                    <label>Image 1</label>
                    <button type="button" class="mt-3" onclick="openInputFile('imageBackgroundInput-page-2-1')">Choose Image</button><br>
                    <input type="file" id="imageBackgroundInput-page-2-1"
                        onchange="imageBackgroundInputChanged_page_2_1()" style="display: none;"/>
                    <button type="button" class="mt-1" onclick="startCropper_page_2_1()">Crop</button>
                    <button type="button" onclick="cropImage_page_2_1()">Save Crop</button>
                </div>
            </div>
        </div>
        <script></script>

        <div class="row-divider"></div>

        <div class="row">
            <div class="row-image">
                <div class="page page-3 page-background"
                    style="background-image: url('images/single-property/page-3.png');">
                    <div class="container">
                        <div class="absolute" style="top: 5%; left: 50px;">
                            <h2 class="page-3-text-1 font-thin my-0" style="font-size: 42px;">A New Breed of Realtors
                                Redefining</h2>
                            <h1 class="page-3-text-2 gold font-thin my-0" style="font-size: 90px;">The Real Estate</h1>
                            <h1 class="page-3-text-3 font-thin my-0" style="font-size: 95px;">Experience</h1>
                        </div>

                        <div class="absolute" style="top: 18%; left: 250px; width: 450px;">
                            <p class="page-3-text-4 font-thin text-20">
                                At LUXE Properties, we take pride in building relationships based on the premise and
                                understanding that each client is unique, along with their respective properties. We aim
                                to delight and surprise our
                                clients, deliver exceptional service and exceed expectations throughout the transaction.
                                Our company utilizes the latest technology to stay abreast of market trends and deliver
                                innovative solutions for
                                our LUXE clients.
                            </p>
                            <br />
                            <p class="page-3-text-5 font-thin text-20 page-3-text-5">
                                The LUXE Properties team seeks to partner with you every step of the way. So, whether
                                you are buying, selling, or considering real estate in South Florida, LUXE Properties is
                                here to make your LUXE real
                                estate experience your best move yet.
                            </p>
                        </div>

                        <div class="page-number"
                            style="background-image: url('images/single-property/02.png'); margin-top: -70px; left: 10%;">
                            <div class="text" style="margin-top: 130px; margin-right: 150px;">
                                <h3 class="font-thin gold">THE</h3>
                                <h2 class="font-thin">HOME</h2>
                                <h2 class="font-thin gold">SELLING</h2>
                                <h4 class="font-thin">GUIDE</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input" style="margin-left: 20px;">
                <label for="page-3-text-1">Title</label>
                <input type="text" id="page-3-text-1" name="page_3_text_1" value="A New Breed of Realtors Redefining" />
                <label for="page-3-text-2">Title</label>
                <input type="text" id="page-3-text-2" name="page_3_text_2" value="The Real Estate" />
                <label for="page-3-text-3">Title</label>
                <input type="text" id="page-3-text-3" name="page_3_text_3" value="Experience" />
                <label for="page-3-text-4">Desc 1</label>
                <textarea id="page-3-text-4" name="page_3_text_4" rows="4">
At LUXE Properties, we take pride in building relationships based on the premise and understanding that each client is unique, along with their respective properties. We aim to delight and surprise our clients, deliver exceptional service and exceed expectations throughout the transaction. Our company utilizes the latest technology to stay abreast of market trends and deliver innovative solutions for our LUXE clients.
                    </textarea>
                <label for="page-3-text-5">Desc 2</label>
                <textarea id="page-3-text-5" name="page_3_text_5" rows="4">The LUXE Properties team seeks to partner with you every step of the way. So, whether you are buying, selling, or considering real estate in South Florida, LUXE Properties is here to make your LUXE real estate experience your best move yet
                     </textarea>
            </div>
        </div>

        <div class="row-divider"></div>

        <div class="row">
            <div class="row-image">
                <div class="page page-4 page-background"
                    style="background-image: url('images/single-property/page-4.jpg'); margin-left: -10px;">
                    <img src="" id="imageBackground-page-4-1" style="display: none;" />
                    <input hidden name="page_4_img_1" value="images/single-property/page-4.jpg" />
                    <div class="container">
                        <div class="absolute" style="position: absolute; bottom: 70px; right: 120px;">
                            <h2 class="cover-page-thin font-thin white my-0" style="">Meet</h2>
                            <h1 class="cover-page-thin font-thin gold my-0">The Agent</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <div class="button">
                    <label>Image 1</label>
                    <button type="button" class="mt-3" onclick="openInputFile('imageBackgroundInput-page-4-1')">Choose Image</button><br>
                    <input type="file" id="imageBackgroundInput-page-4-1"
                        onchange="imageBackgroundInputChanged_page_4_1()" style="display: none;"/>
                    <button type="button" class="mt-1" onclick="startCropper_page_4_1()">Crop</button>
                    <button type="button" onclick="cropImage_page_4_1()">Save Crop</button>
                </div>
            </div>
        </div>

        <div class="row-divider"></div>

        <div class="row">
            <div class="row-image">
                <div class="page page-5">
                    <div class="container">
                        <div class="absolute" style="top: 8%; left: -10px;">
                            <h1 class="gold font-thin my-0 page-5-text-1"
                                style="font-size: 150px; margin-bottom: -20px;">Roger</h1>
                            <h2 class="font-thin my-0  page-5-text-2" style="font-size: 80px; margin-left: 100px;">
                                Cabrera</h2>

                            <div style="max-width: 650px;">
                                <p class="font-thin  page-5-text-3">
                                    As a Certified Luxury Home Marketing Specialist (CLHMS), I market and show your home
                                    to prospective qualified buyers, negotiate the purchase contract, oversee the
                                    inspections, handle all necessary
                                    paperwork, and supervise the closing. I make sure your needs are met in every phase
                                    of the listing, from start to finish.
                                    <br><br>
                                    As a dedicated and experienced professional, I offer a wealth of knowledge and
                                    expertise in marketing luxury real estate and provide unparalleled service to
                                    clients selling or seeking homes in
                                    prestigious neighborhoods throughout South Florida.
                                    <br><br>
                                    Selling your home is a challenging and time consuming process. Being a member of the
                                    Institute for Luxury Home Marketing affords me a referral network in 152 countries
                                    with 193,826 agencies enabling
                                    me to market your home to affluent prospects from around the world.
                                    <br><br>
                                    My objective is to market your home for the highest
                                    possible price, in the shortest time, with the least hassle.
                                    <br><br>
                                    Thank you for the opportunity to earn your trust. I
                                    am eager to serve you.
                                </p>
                                <h2 class="font-thin">-<span class="page-5-text-1">Roger</span> <span
                                        class="page-5-text-2">Cabrera</span></h2>
                            </div>
                        </div>
                        <div class="page-number"
                            style="background-image: url('images/single-property/04.png'); margin-top: -35px; left: 8%;">
                            <div class="text" style="margin-top: 30px; margin-right: 150px;">
                                <h3 class="font-thin gold">THE</h3>
                                <h2 class="font-thin">HOME</h2>
                                <h2 class="font-thin gold">SELLING</h2>
                                <h4 class="font-thin">GUIDE</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <label for="page-5-text-1">Name</label>
                <input type="text" id="page-5-text-1" name="page_5_text_1" value="Roger" />
                <label for="page-5-text-2">Sur Name</label>
                <input type="text" id="page-5-text-2" name="page_5_text_2" value="Cabrera" />
                <label for="page-5-text-3">Description</label>
                <textarea id="page-5-text-3" name="page_5_text_3" rows="10">
                        As a Certified Luxury Home Marketing Specialist (CLHMS), I market and show your home to prospective qualified buyers, negotiate the purchase contract, oversee the inspections, handle all necessary paperwork, and supervise the closing. I make sure your needs are met in every phase of the listing, from start to finish.
                        As a dedicated and experienced professional, I offer a wealth of knowledge and expertise in marketing luxury real estate and provide unparalleled service to clients selling or seeking homes in prestigious neighborhoods throughout South Florida.
                        Selling your home is a challenging and time consuming process. Being a member of the Institute for Luxury Home Marketing affords me a referral network in 152 countries with 193,826 agencies enabling me to market your home to affluent prospects from around the world.
                        My objective is to market your home for the highest possible price, in the shortest time, with the least hassle.
                        Thank you for the opportunity to earn your trust. I am eager to serve you.
                    </textarea>
            </div>
        </div>

        <div class="row-divider"></div>

        <div class="row">
            <div class="row-image">
                <div class="page page-6 page-background"
                    style="background-image: url('images/single-property/page-6.png');">
                    <img src="" id="imageBackground-page-6-1" style="display: none;" />
                    <input hidden name="page_6_img_1" value="images/single-property/page-6.png" />
                    <div class="container">
                        <div class="absolute" style="position: absolute; bottom: 150px; right: 76px;">
                            <h2 class="cover-page-thin font-thin white my-0" style="margin-bottom: -40px;">Our</h2>
                            <h1 class="cover-page-thin font-thin gold my-0" style="font-size: 100px;">Commitment</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <div class="button">
                    <label>Image 1</label>
                    <button type="button" class="mt-3" onclick="openInputFile('imageBackgroundInput-page-6-1')">Choose Image</button><br>
                    <input type="file" id="imageBackgroundInput-page-6-1"
                        onchange="imageBackgroundInputChanged_page_6_1()" style="display: none;"/>
                    <button type="button" class="mt-1" onclick="startCropper_page_6_1()">Crop</button>
                    <button type="button" onclick="cropImage_page_6_1()">Save Crop</button>
                </div>
            </div>
        </div>
        <script></script>

        <div class="row-divider"></div>

        <div class="row">
            <div class="row-image">
                <div class="page page-7">
                    <div class="container">
                        <div class="absolute" style="top: 3%; left: -30px;">
                            <h2 class="font-thin mb-10 my-0 page-7-text-1 "
                                style="font-size: 50px; margin-left: 400px;">Key</h2>
                            <h1 class="gold font-thin my-0 page-7-text-2 " style="font-size: 120px;">Objectives</h1>
                            <h2 class="font-thin my-0 page-7-text-3" style="font-size: 50px;">When Listing Your Home
                            </h2>
                        </div>
                        <div class="absolute" style="top: -6%; left: -30px;">
                            <div class="mb-50">
                                <img src="images/single-property/Asset 5.png" alt="" width="200px" />
                            </div>
                            <div class="mb-50">
                                <img src="images/single-property/Asset 6.png" alt="" width="200px" />
                            </div>
                            <div class="mb-50">
                                <img src="images/single-property/Asset 7.png" alt="" width="200px" />
                            </div>
                        </div>
                        <div style="margin-top: -775px; width: 440px;">
                            <div class="absolute" style="top: -6%; left: 210px;">
                                <div class="abs" style="top:-22px;">
                                    <h2 class="font-bold gold page-7-text-4"
                                        style="width: 300px; font-size: 30px; line-height: 25px;">For The Highest
                                        Possible
                                        Price</h2>
                                    <p class="font-thin page-7-text-5">
                                        Utilizing our pricing strategy along with our in-house appraisal services, LUXE
                                        agents ensure your home is properly valued to garner maximum exposure in the
                                        marketplace. Our pricing approach together
                                        with our tailored marketing program increases demand resulting in a higher sales
                                        price for our listings.
                                    </p>
                                </div>
                            </div>
                            <div class="absolute" style="top: 47%; left: 210px;">
                                <div class="abs" style="top:220px;">
                                    <h2 class="font-bold gold page-7-text-6"
                                        style="width: 300px; font-size: 30px; line-height: 25px;">In The Shortest Amount
                                        Of
                                        Time</h2>
                                    <p class="font-thin page-7-text-7">
                                        The ability to advise on market timing is one of LUXE’s competitive advantages.
                                        Our
                                        custom marketing program is consistent and predictable giving us a number of
                                        reliable metrics that can help identify
                                        how long it will take each listing to sell. The majority of the homes sold with
                                        LUXE
                                        in 2017 closed in 90 days or less.
                                    </p>
                                </div>
                            </div>
                            <div class="absolute" style="margin-top: 75px; left: 210px;">
                                <div class="abs" style="top:475px;">
                                    <h2 class="font-bold gold page-7-text-8"
                                        style="width: 300px; font-size: 30px; line-height: 25px;">
                                        With The Least Hassle
                                    </h2>
                                    <p class="font-thin page-7-text-9">
                                        Once you list with LUXE, you can sit back and relax. Our specialized departments
                                        cover all aspects of the home sale process from marketing your home all the way
                                        up
                                        to closing. Our company has a “let
                                        us handle that for you” approach to the sale. We’ve redeﬁned our process so
                                        precisely that nothing falls through the cracks.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input" style="margin-left: 102px;">
                <label for="page-7-text-1">Title</label>
                <input type="text" id="page-7-text-1" name="page_7_text_1" value="Key" />
                <label for="page-7-text-2">Title</label>
                <input type="text" id="page-7-text-2" name="page_7_text_2" value="Objectives" />
                <label for="page-7-text-3">Title</label>
                <input type="text" id="page-7-text-3" name="page_7_text_3" value="When Listing Your Home" />
                <label for="page-7-text-4">Title</label>
                <input type="text" id="page-7-text-4" name="page_7_text_4" value="For The Highest Possible Price" />
                <label for="page-7-text-5">Desc</label>
                <textarea id="page-7-text-5" name="page_7_text_5" rows="5">
Utilizing our pricing strategy along with our in-house appraisal services, LUXE agents ensure your  home is properly valued to garner maximum exposure in  the marketplace. Our pricing approach together with our  tailored marketing program increases demand resulting  in a higher sales price for our listings.
                    </textarea>
                <label for="page-7-text-6">Title</label>
                <input type="text" id="page-7-text-6" name="page_7_text_6" value="In The Shortest Amount Of Time" />
                <label for="page-7-text-7">Desc</label>
                <textarea id="page-7-text-7" name="page_7_text_7" rows="7">
The ability to advise on market timing is one of LUXE’s competitive advantages. Our custom marketing program  is consistent and predictable giving us a number of  reliable metrics that can help identify how long it will  take each listing to sell. The majority of the homes sold  with LUXE in 2017 closed in 90 days or less.
                    </textarea>
                <label for="page-7-text-8">Title</label>
                <input type="text" id="page-7-text-8" name="page_7_text_8" value="With The Least Hassle" />
                <label for="page-7-text-9">Desc</label>
                <textarea id="page-7-text-9" name="page_7_text_9" rows="4">
Once you list with LUXE, you can sit back and relax. Our specialized departments cover all aspects of the home sale process from marketing your home all the way up to closing. Our company has a “let us handle that for you” approach to the sale. We’ve redeﬁned our process so precisely that nothing falls through the cracks..
                    </textarea>
            </div>
        </div>

        <div class="row-divider"></div>

        <div class="row">
            <div class="row-image">
                <div class="page page-8 page-background"
                    style="background-image: url('images/single-property/page-8.png');">
                    <img src="" id="imageBackground-page-8-1" style="display: none;" />
                    <input hidden name="page_8_img_1" value="images/single-property/page-8.png" />
                    <div class="container">
                        <div class="absolute" style="position: absolute; bottom: 120px; right: 116px;">
                            <h2 class="cover-page-thin font-thin white my-0" style="margin-bottom: -50px;">The</h2>
                            <h1 class="cover-page-thin font-thin gold my-0" style="margin-bottom: -30px;">Power</h1>
                            <h2 class="cover-page-thin font-thin white my-0">of Our Brand</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <div class="button">
                    <label>Image 1</label>
                    <button type="button" class="mt-3" onclick="openInputFile('imageBackgroundInput-page-8-1')">Choose Image</button><br>
                    <input type="file" id="imageBackgroundInput-page-8-1"
                        onchange="imageBackgroundInputChanged_page_8_1()" style="display: none;"/>
                    <button type="button" class="mt-1" onclick="startCropper_page_8_1()">Crop</button>
                    <button type="button" onclick="cropImage_page_8_1()">Save Crop</button>
                </div>
            </div>
        </div>

        <script></script>

        <div class="row-divider"></div>

        <div class="row" style="min-height: 855px;">
            <div class="row-image">
                <div class="page page-9 page-4-2"
                    style="position: relative; overflow:hidden;background-size: cover; background-position: -520px -5px; background-repeat: no-repeat; width: 800px; margin-left: -100px;height:855px;">
                    <div class="page-bg-image" style="background-image: url('images/single-property/page-8.png');">
                        <h1></h1>
                    </div>
                    <div class="luxe-pro-info" style="margin-left:40px;position: absolute;">
                        <img src="" id="imageBackground-page-9-1" style="display: none;" />
                        <input hidden name="page_9_img_1" value="images/single-property/page-8.png" />
                        <div class="content">
                            <div class="section section-1">
                                <span class="section-content-top page-9-text-1">4</span>
                                <br />
                                <span class="section-content-bottom page-9-text-2">LOCATIONS</span>
                            </div>
                            <div class="section section-2">
                                <span class="section-content-top page-9-text-3">300</span>
                                <br />
                                <span class="section-content-bottom page-9-text-4">REAL ESTATE AGENTS</span>
                            </div>
                            <div class="section section-3">
                                <span class="section-content-top page-9-text-5">61</span>
                                <br />
                                <span class="section-content-bottom page-9-text-6">% GROWTH 2017</span>
                            </div>
                            <div class="section section-4">
                                <span class="section-content-top page-9-text-7">72</span>
                                <br />
                                <span class="section-content-bottom page-9-text-8">DAYS ON MARKET</span>
                            </div>
                            <div class="section section-5">
                                <span class="section-content-top page-9-text-9">2100</span>
                                <br />
                                <span class="section-content-bottom page-9-text-10">HOMES SOLD</span>
                            </div>
                            <div class="section section-6">
                                <span class="section-content-top page-9-text-11">97</span>
                                <br />
                                <span class="section-content-bottom page-9-text-12">% LIST TO SALE PRICE</span>
                            </div>
                        </div>
                        <div class="text" style="margin-left: 130px;margin-top:40px;">
                            <hr />
                            <p class="page-9-text-13">
                                The LUXE Properties team has unparalleled history with successful home sales in the
                                Greater Miami area. We have sold nearly 2,100 homes on average within less than 90 days.
                                Our team delivers exceptional
                                results.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                {{-- <div class="button">
                    <label>Background</label>
                    <input type="file" id="imageBackgroundInput-page-9-1"
                        onchange="imageBackgroundInputChanged_page_9_1()" />
                    <button type="button" onclick="startCropper_page_9_1()">Crop</button>
                    <button type="button" onclick="cropImage_page_9_1()">Save Crop</button>
                </div> --}}

                <div class="flex">
                    <label for="page-9-text-1">Title</label>
                    <input type="text" id="page-9-text-1" name="page_9_text_1" value="4" />

                    <label for="page-9-text-2">Subtitle</label>
                    <input type="text" id="page-9-text-2" name="page_9_text_2" value="LOCATIONS" />
                </div>
                <div class="flex">
                    <label for="page-9-text-3">Title</label>
                    <input type="text" id="page-9-text-3" name="page_9_text_3" value="320" />

                    <label for="page-9-text-4">Subtitle</label>
                    <input type="text" id="page-9-text-4" name="page_9_text_4" value="REAL ESTATE AGENTS" />
                </div>
                <div class="flex">
                    <label for="page-9-text-5">Title</label>
                    <input type="text" id="page-9-text-5" name="page_9_text_5" value="61" />

                    <label for="page-9-text-6">Subtitle</label>
                    <input type="text" id="page-9-text-6" name="page_9_text_6" value="% GROWTH 2019" />
                </div>
                <div class="flex">
                    <label for="page-9-text-7">Title</label>
                    <input type="text" id="page-9-text-7" name="page_9_text_7" value="72" />

                    <label for="page-9-text-8">Subtitle</label>
                    <input type="text" id="page-9-text-8" name="page_9_text_8" value="DAYS ON MARKET" />
                </div>
                <div class="flex">
                    <label for="page-9-text-9">Title</label>
                    <input type="text" id="page-9-text-9" name="page_9_text_9" value="2100" />

                    <label for="page-9-text-10">Subtitle</label>
                    <input type="text" id="page-9-text-10" name="page_9_text_10" value="HOMES SOLD" />
                </div>
                <div class="flex">
                    <label for="page-9-text-11">Title</label>
                    <input type="text" id="page-9-text-11" name="page_9_text_11" value="97" />

                    <label for="page-9-text-12">Subtitle</label>
                    <input type="text" id="page-9-text-12" name="page_9_text_12" value="% LIST TO SALE PRICE" />
                </div>
                <div class="flex">
                    <label for="page-9-text-13">Title</label>
                    <textarea id="page-9-text-13" name="page_9_text_13" rows="4">
The LUXE Properties team has unparalleled history with successful home sales in the Greater Miami area. We have sold nearly 2,100 homes on average within less than 90 days. Our team delivers exceptional results.
                        </textarea>
                </div>
            </div>
        </div>
        <script></script>

        <div class="row-divider"></div>

        <div class="row">
            <div class="row-image">
                <div class="page page-10 page-background"
                    style="background-image: url('images/single-property/page-10.png');">
                    <img src="" id="imageBackground-page-10-1" style="display: none;" />
                    <input hidden name="page_10_img_1" value="images/single-property/page-10.png" />
                    <div class="container">
                        <div class="absolute" style="position: absolute; bottom: 90px; right: 11px;">
                            <h1 class="font-thin gold my-0" style="font-size: 145px; margin-bottom: -20px;">Marketing
                            </h1>
                            <h2 class="font-thin white my-0" style="margin-left: 300px; font-size: 50px;">Showcase</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <div class="button">
                    <label>Image 1</label>
                    <button type="button" class="mt-3" onclick="openInputFile('imageBackgroundInput-page-10-1')">Choose Image</button><br>
                    <input type="file" id="imageBackgroundInput-page-10-1"
                        onchange="imageBackgroundInputChanged_page_10_1()" style="display: none;"/>
                    <button type="button" class="mt-1" onclick="startCropper_page_10_1()">Crop</button>
                    <button type="button" onclick="cropImage_page_10_1()">Save Crop</button>
                </div>
            </div>
        </div>

        <div class="row-divider"></div>

        <div class="row" style="height: 1200px;">
            <div class="row-image">
                <div class="page page-11 page-5-2"
                    style="overflow: hidden;position:relative;background-size: cover; background-position: -615px -5px; background-repeat: no-repeat;height:1005px;">
                    <img src="" id="imageBackground-page-11-1" style="display: none;" />
                    <input hidden name="page_11_img_1" value="images/single-property/page-10.png" />
                    <div class="page-bg-image" style="background-image: url('images/single-property/page-10.png');">
                        <h1></h1>
                    </div>
                    <div class="container">
                        <div class="heading" style="position: relative;">
                            <h2 class="subtitle-top my-0">Tailored Listing</h2>
                            <h1 class="title my-0"><span style="color: white;">Ex</span>posure</h1>
                            <h1 class="subtitle-bottom my-0">Strategy</h1>
                        </div>
                        <div class="content ">
                            <p class="page-11-text-1">Our specialized agents and marketing team work together to ensure
                                your home is properly positioned in the marketplace for maximum exposure, both digitally
                                and in print.</p>
                            <p class="page-11-text-2">Each property listing is marketed using the personalized materials
                                below:</p>
                            <ul class="page-11-text-3">
                                <li>Personalized website of home listing</li>
                                <li>Professional HD Videos</li>
                                <li>Professional HD Photography</li>
                                <li>Professional Drone Videography</li>
                                <li>Custom reporting on specific buyer profiles for each listing</li>
                                <li>Direct Mail Marketing to targeted demographics</li>
                                <li>Email Campaigns to targeted demographics</li>
                                <li>PPC Google campaign to targeted demographics</li>
                                <li>Targeted advertising in China, South America and Europe</li>
                                <li>Targeted Social Media Advertising</li>
                                <li>Syndication to over 100 online portals</li>
                                <li>Premium placement on all major real estate portals includ- ing Zillow, Trulia &
                                    Realtor.com</li>
                                <li>International MLS Marketing</li>
                                <li>Print advertisements in local newspaper and magazines</li>
                                <li>Broker’s Open</li>
                                <li>Bi-weekly Open Houses</li>
                                <li>Signage including web domain riders</li>
                            </ul>
                            <p class="page-11-text-4">Our marketing will maximize interest through our personalized
                                campaigns created exclusively for your home, which will assist in achieving the greatest
                                results.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <label for="page-11-text-1">Top Desc </label>
                <textarea id="page-11-text-1" name="page_11_text_1" rows="4">
Our specialized agents and marketing team work together to ensure your home is properly positioned in the marketplace for maximum exposure, both digitally and in print.
                    </textarea>
                <label for="page-11-text-2">Middle Checkmark</label>
                <textarea id="page-11-text-2" name="page_11_text_2"
                    rows="4">Each property listing is marketed using the personalized materials below:</textarea>
                <label for="page-11-text-3">Bottom Desc</label>
                <textarea id="page-11-text-3" name="page_11_text_3" rows="7">
Personalized website of home listing
Professional HD Videos
Professional HD Photography
Professional Drone Videography
Custom reporting on specific buyer profiles for each listing
Direct Mail Marketing to targeted demographics
Email Campaigns to targeted demographics
PPC Google campaign to targeted demographics
Targeted advertising in China, South America and Europe
Targeted Social Media Advertising
Syndication to over 100 online portals
Premium placement on all major real estate portals includ- ing Zillow, Trulia & Realtor.com
International MLS Marketing
Print advertisements in local newspaper and magazines
Broker’s Open
Bi-weekly Open Houses
Signage including web domain riders
                    </textarea>
                <label for="page-11-text-4">Text</label>
                <textarea id="page-11-text-4" name="page_11_text_4" rows="4">
Our marketing will maximize interest through our personalized campaigns created exclusively for your home, which will assist in achieving the greatest results.

                    </textarea>
            </div>
        </div>

        <div class="row-divider"></div>

        <div class="row">
            <div class="row-image">
                <div class="page page-12 page-background"
                    style="background-image: url('images/single-property/page-12.png');">
                    <img src="" id="imageBackground-page-12-1" style="display: none;" />
                    <input hidden name="page_12_img_1" value="images/single-property/page-12.png" />
                    <div class="container">
                        <div class="absolute" style="position: absolute; bottom: 60px; right: 11px;">
                            <h1 class="font-thin gold my-0" style="font-size: 140px; margin-bottom: -20px;">Marketing
                            </h1>
                            <h2 class="font-thin white my-0" style="margin-left: 300px; font-size: 50px;">Timeframe</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <div class="button">
                    <label>Image 1</label>
                    <button type="button" class="mt-3" onclick="openInputFile('imageBackgroundInput-page-12-1')">Choose Image</button><br>
                    <input type="file" id="imageBackgroundInput-page-12-1"
                        onchange="imageBackgroundInputChanged_page_12_1()" style="display: none;"/>
                    <button type="button" class="mt-1" onclick="startCropper_page_12_1()">Crop</button>
                    <button type="button" onclick="cropImage_page_12_1()">Save Crop</button>
                </div>
            </div>
        </div>

        <div class="row-divider"></div>

        <div class="row" style="height: 1100px">
            <div class="row-image">
                <div class="page page-13 page-6-2"
                    {{-- style="background-image: url('images/single-property/page-12.png'); background-size: cover;" --}}>
                    <div class="container" style="height: 1100px;width:460px;position:relative;">
                        <div class="week" style="z-index: 50; top: 150px;">
                            <img class="" src="images/home-selling/yellow-fade.png" alt="" style="width: 285px" />
                            <h2
                                style="color: white; font-weight: 300; font-size: 40px; margin-top: -50px; margin-left: 140px;">
                                Week 1
                            </h2>
                        </div>
                        <div class="week" style="z-index: 50; top: 300px;">
                            <img class="" src="images/home-selling/yellow-fade.png" alt="" style="width: 285px" />
                            <h2
                                style="color: white; font-weight: 300; font-size: 40px; margin-top: -50px; margin-left: 140px;">
                                Week 3
                            </h2>
                        </div>
                        <div class="week" style="z-index: 50; top: 450px;">
                            <img class="" src="images/home-selling/yellow-fade.png" alt="" style="width: 285px" />
                            <h2
                                style="color: white; font-weight: 300; font-size: 40px; margin-top: -50px; margin-left: 140px;">
                                Week 5
                            </h2>
                        </div>
                        <div class="week" style="z-index: 50; top: 600px;">
                            <img class="" src="images/home-selling/yellow-fade.png" alt="" style="width: 285px" />
                            <h2
                                style="color: white; font-weight: 300; font-size: 40px; margin-top: -50px; margin-left: 140px;">
                                Week 7
                            </h2>
                        </div>
                        <div class="week" style="z-index: 50; top: 750px;">
                            <img class="" src="images/home-selling/yellow-fade.png" alt="" style="width: 285px" />
                            <h2
                                style="color: white; font-weight: 300; font-size: 40px; margin-top: -50px; margin-left: 140px;">
                                Week 9
                            </h2>
                        </div>
                        <div style="position: relative; left: 300px; margin-top: -800px;">
                            <div class="list-week-1" style="left: 380px; top: 80px;">
                                <ul class="page-13-text-1">
                                    <li>Signage is placed</li>
                                    <li>Photography & video session</li>
                                    <li>Home is listed on MLS + International MLS</li>
                                    <li>Personalized website created for home</li>
                                    <li>Make sure listing syndicated to all sites</li>
                                </ul>
                            </div>
                            <div class="list-week-3" style="left: 360px; top: 230px;">
                                <ul class="page-13-text-2">
                                    <li>Email blast campaign</li>
                                    <li>Virtual tour posted on YouTube and shared</li>
                                    <li>Blog post with Facebook sponsored ad</li>
                                    <li>Additional Social Media Posts</li>
                                    <li>Open House (if applicable)</li>
                                </ul>
                            </div>
                            <div class="list-week-5" style="left: 360px; top: 400px;">
                                <ul class="page-13-text-3">
                                    <li>Open houses</li>
                                    <li>Targeted email campaign to area's owners</li>
                                    <li>Brokers' open for select agents who specialize in the area</li>
                                    <li>Begin preparing direct mail piece</li>
                                </ul>
                            </div>
                            <div class="list-week-7" style="left: 360px; top: 550px; max-width: 700px;">
                                <ul class="page-13-text-4">
                                    <li>Direct mail is sent</li>
                                    <li>Personal outreach to other agents</li>
                                    <li>Open houses</li>
                                    <li style="">Continually monitor social media posts, blog posts and websites for
                                        potential buyers</li>
                                </ul>
                            </div>
                            <div class="list-week-9" style="left: 360px; top: 700px;">
                                <ul class="page-13-text-5">
                                    <li>Open Houses</li>
                                    <li>Monitor PPC for listing</li>
                                    <li>Review analytics for Facebook Sponsored Ad</li>
                                    <li>Revise website and social media postings</li>
                                    <li>Review with client to make adjustments if needed</li>
                                </ul>
                            </div>
                        </div>
                        <div class="page-number abs"
                            style="background-image: url('images/single-property/12.png'); bottom: 12%; left: 100%;height:auto;">
                            <div class="text" style="margin-top: 30px; margin-right: 120px;">
                                <h3 class="font-thin gold">THE</h3>
                                <h2 class="font-thin">HOME</h2>
                                <h2 class="font-thin gold">SELLING</h2>
                                <h4 class="font-thin">GUIDE</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input" style="margin-left: 220px;">
                <label for="page-13-text-1">Week 1</label>
                <textarea id="page-13-text-1" name="page_13_text_1" rows="4">
                        Signage is placed
                        Photography & video session
                        Home is listed on MLS + International MLS
                        Personalized website created for home
                        Make sure listing syndicated to all sites

                    </textarea>
                <label for="page-13-text-2">Week 3</label>
                <textarea id="page-13-text-2" name="page_13_text_2" rows="4">
                        Email blast campaign
                        Virtual tour posted on YouTube and shared
                        Blog post with Facebook sponsored ad
                        Additional Social Media Posts
                        Open House (if applicable)

                    </textarea>
                <label for="page-13-text-3">Week 5</label>
                <textarea id="page-13-text-3" name="page_13_text_3" rows="4">
                        Open houses
                        Targeted email campaign to area's owners
                        Brokers' open for select agents who specialize in the area
                        Begin preparing direct mail piece

                    </textarea>
                <label for="page-13-text-4">Week 7</label>
                <textarea id="page-13-text-4" name="page_13_text_4" rows="4">
                        Direct mail is sent
                        Personal outreach to other agents
                        Open houses
                        Continually monitor social media posts, blog posts and websites for potential buyers

                    </textarea>
                <label for="page-13-text-5">Week 9</label>
                <textarea id="page-13-text-5" name="page_13_text_5" rows="4">
                        Open Houses
                        Monitor PPC for listing
                        Review analytics for Facebook Sponsored Ad
                        Revise website and social media postings
                        Review with client to make adjustments if needed
                        

                    </textarea>
            </div>
        </div>

        <div class="row-divider"></div>

        <div class="row">
            <div class="row-image">
                <img src="" id="imageBackground-page-14-1" style="display: none;" />
                <input hidden name="page_14_img_1" value="images/single-property/Asset 8.jpg" />
                <img src="" id="imageBackground-page-14-2" style="display: none;" />
                <input hidden name="page_14_img_2" value="images/single-property/Asset 9.jpg" />
                <img src="" id="imageBackground-page-14-3" style="display: none;" />
                <input hidden name="page_14_img_3" value="images/single-property/Asset 10.jpg" />
                <div class="page page-14 page-7-1" style="margin-right: 60px;">
                    <div class="luxe-pro-info">
                        <div class="row-14-1"
                            style="background-image: url('images/single-property/Asset 8.jpg'); padding-top: 43%; height: 33%; top: 0; background-size: cover; margin-bottom: -22px;">
                            <h1></h1>
                        </div>
                        <div class="row-14-2"
                            style="background-image: url('images/single-property/Asset 9.jpg'); padding-top: 43%; height: 34%; background-size: cover; margin-bottom: -22px;">
                            <h1></h1>
                        </div>
                        <div class="row-14-3"
                            style="background-image: url('images/single-property/Asset 10.jpg'); padding-top: 43%; height: 33%; bottom: 0; background-size: cover;">
                            <h1></h1>
                        </div>
                        <div class="text" style="margin-top: -600px;">
                            <h1 class="my-0"
                                style="font-size: 188px; color: white; letter-spacing: -12px; font-weight: 300;">
                                Property
                            </h1>
                            <h2 class="my-0"
                                style="font-size: 80px; color: white; font-weight: 300; letter-spacing: 24px; margin-left: 20px;">
                                Showcase
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <div class="button">
                    <label>Image 1</label>
                    <button type="button" class="mt-3" onclick="openInputFile('imageBackgroundInput-page-14-1')">Choose Image</button><br>
                    <input type="file" id="imageBackgroundInput-page-14-1"
                        onchange="imageBackgroundInputChanged_page_14_1()" style="display: none;"/>
                    <button type="button" class="mt-1" onclick="startCropper_page_14_1()">Crop</button>
                    <button type="button" onclick="cropImage_page_14_1()">Save Crop</button>
                </div>
                <div class="button mt-3">
                    <label>Image 2</label>
                    <button type="button" class="mt-3" onclick="openInputFile('imageBackgroundInput-page-14-2')">Choose Image</button><br>
                    <input type="file" id="imageBackgroundInput-page-14-2"
                        onchange="imageBackgroundInputChanged_page_14_2()" style="display: none;" />
                    <button type="button" class="mt-1" onclick="startCropper_page_14_2()">Crop</button>
                    <button type="button" onclick="cropImage_page_14_2()">Save Crop</button>
                </div>
                <div class="button mt-3">
                    <label>Image 3</label>
                    <button type="button" class="mt-3" onclick="openInputFile('imageBackgroundInput-page-14-3')">Choose Image</button><br>
                    <input type="file" id="imageBackgroundInput-page-14-3"
                        onchange="imageBackgroundInputChanged_page_14_3()" style="display: none;" />
                    <button type="button" class="mt-1" onclick="startCropper_page_14_3()">Crop</button>
                    <button type="button" onclick="cropImage_page_14_3()">Save Crop</button>
                </div>
            </div>
        </div>

        <script></script>
        <div class="row-divider"></div>

        <div class="row">
            <div class="row-image">
                <img src="" id="imageBackground-page-15-1" style="display: none;" />
                <input hidden name="page_15_img_1" value="images/single-property/Asset 8.jpg" />
                <img src="" id="imageBackground-page-15-2" style="display: none;" />
                <input hidden name="page_15_img_2" value="images/single-property/Asset 9.jpg" />
                {{-- <div class="page15-1" style="
                            margin-left: 250px;
                            background-image: url('images/home-selling/Asset 13-1.png');
                            padding: 20%;
                            top: 20%;
                            background-size: cover;
                            background-position: center;
                            background-position: -1220px 10px;
                            background-repeat: no-repeat;
                        ">
                    <h1></h1>
                </div>

                <div class="page15-2" style="
                            margin-top: -35px;
                            margin-left: 250px;
                            background-image: url('images/home-selling/Asset 13-1.png');
                            padding: 20%;
                            top: 20%;
                            background-size: cover;
                            background-position: center;
                            background-position: -1220px 10px;
                            background-repeat: no-repeat;
                        ">
                    <h1></h1>
                </div> --}}

                <div class="content" style="height: 1005px;width: 800px;">
                    <div class="page page-15"
                        style="z-index: 100; margin-top: 50px; margin-bottom: 345px; max-width:775px;">
                        <div class="section" style="top: 50px; left: 10px;">
                            <img src="images/home-selling/Asset 13-4.png" alt="" style="" />
                            <div class="text"
                                style="margin-top: -30px; z-index: 1000; margin-left: 70px; margin-top: -145px;">
                                <p class="page-7-2-text-1 page-15-text-1"
                                    style="font-size: 46px; line-height: 20px; color: white; ">
                                    Professional
                                </p>
                                <p class="page-7-2-text-2 page-15-text-2"
                                    style="font-size: 50px; font-weight: 900; line-height: 0px;">
                                    Photography
                                </p>
                            </div>
                        </div>
                        <div class="section" style="margin-top: 150px;">
                            <img src="images/home-selling/Asset 13-4.png" alt="" style="" />
                            <div class="text"
                                style="margin-top: -30px; z-index: 1000; margin-left: 70px; margin-top: -145px;">
                                <p class="page-7-2-text-3 page-15-text-5"
                                    style="font-size: 46px; line-height: 20px; color: white;">
                                    Professional
                                </p>
                                <p class="page-7-2-text-4 page-15-text-6"
                                    style="font-size: 50px; font-weight: 900; line-height: 0px;">
                                    Videography
                                </p>
                            </div>
                        </div>
                        <div class="section" style="margin-top: 150px;">
                            <img src="images/home-selling/Asset 13-4.png" alt="" style="" />
                            <div class="text"
                                style="margin-top: -30px; z-index: 1000; margin-left: 70px; margin-top: -145px;">
                                <p class="page-7-2-text-5 page-15-text-7"
                                    style="font-size: 46px; line-height: 20px; color: white;">
                                    Optional Drone
                                </p>
                                <p class="page-7-2-text-6 page-15-text-8"
                                    style="font-size: 50px; font-weight: 900; line-height: 0px;">
                                    Videography
                                </p>
                            </div>
                        </div>
                        <div class="text" style="margin-top: -625px; margin-left: 400px;position:relative;">
                            <div class="section abs" style="">
                                <p class="page-7-2-text-7 page-15-text-3" style="font-weight: 300;    width: 360px;">
                                    LUXE listings receive the luxury treatment from beginning to end. It is proven that
                                    listings with professional real estate photographs sell 32% faster and at a higher
                                    price. All homes listed with LUXE
                                    include professional photography along with staging recommendations from our agents.
                                    These stunning high quality images of the interior/exterior of your property will be
                                    the cornerstone of our
                                    marketing materials, inviting homebuyers to want to see more of your home.
                                </p>
                            </div>
                            <div class="section abs" style="top:235px;">
                                <p class="page-7-2-text-8 page-15-text-4" style="font-weight: 300;    width: 360px;">
                                    As we continuously seek to maximize awareness of your home, we have incorporated
                                    virtual tours for the buyer on the go or international buyers. YouTube has rapidly
                                    become the number one online video
                                    site making our channel the perfect online video destination for limitless exposure
                                    of the properties represented by our team. With video being 53% more likely to
                                    generate a first-page Google ranking,
                                    we optimize each tour towards its target market based on location and demographics.
                                </p>
                            </div>
                            <div class="section abs" style="top: 470px;">
                                <p class="page-7-2-text-9 page-15-text-9" style="font-weight: 300;    width: 360px;">
                                    Through the use of drone footage combined with high-definition videography, we are
                                    able to create stunning aerial tours for each of our exclusive listings. Our drone
                                    videography offers panoramic views
                                    of a property to showcase its exterior amenities such as pools, the footprint of the
                                    home and surrounding areas of interest.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <div class="flex">
                </div>

                <div class="flex">
                    <label for="page-15-text-1">Title</label>
                    <input type="text" id="page-15-text-1" name="page_15_text_1" value="Professional" />
                    <label for="page-15-text-2">Sub Title</label>
                    <input type="text" id="page-15-text-2" name="page_15_text_2" value="Photography" />
                </div>
                <label for="page-15-text-3">Desc</label>
                <textarea id="page-15-text-3" name="page_15_text_3" rows="4">
LUXE listings receive the luxury treatment from beginning to end. It is proven that listings with professional real estate photographs sell 32% faster and at a higher price. All homes listed with LUXE include professional photography along with staging recommendations from our agents. These stunning high quality images of the interior/exterior of your property will be the cornerstone of our marketing materials, inviting homebuyers to want to see more of your home.

                    </textarea>
                <label for="page-15-text-4">Desc</label>
                <textarea id="page-15-text-4" name="page_15_text_4" rows="4">
As we continuously seek to maximize awareness of your home, we have incorporated virtual tours for the buyer on the go or international buyers. YouTube has rapidly become the number one online video site making our channel the perfect online video destination for limitless exposure of the properties represented by our team. With video being 53% more likely to generate a first-page Google ranking, we optimize each tour towards its target market based on location and demographics.

                    </textarea>
                <div class="flex">
                    <label for="page-15-text-5">Title</label>
                    <input type="text" id="page-15-text-5" name="page_15_text_5" value="Professional" />
                    <label for="page-15-text-6">Sub Title</label>
                    <input type="text" id="page-15-text-6" name="page_15_text_6" value="Videography" />
                </div>
                <div class="flex">
                    <label for="page-15-text-7">Title</label>
                    <input type="text" id="page-15-text-7" name="page_15_text_7" value="Optional Drone" />
                    <label for="page-15-text-8">Sub Title</label>
                    <input type="text" id="page-15-text-8" name="page_15_text_8" value="Videography" />
                </div>
                <label for="page-15-text-9">Desc</label>
                <textarea id="page-15-text-9" name="page_15_text_9" rows="4">
Through the use of drone footage combined with high-definition videography, we are able to create stunning aerial tours for each of our exclusive listings. Our drone videography offers panoramic views of a property to showcase its exterior amenities such as pools, the footprint of the home and surrounding areas of interest.

                    </textarea>
            </div>
        </div>

        <div class="row-divider"></div>

        <div class="row">
            <div class="row-image">
                <div class="page page-34 page-background"
                    style="background-image: url('images/home-selling/Asset 14.png'); margin-left: -20px;">
                    <div class="container">
                        <div class="absolute" style="position: absolute; bottom: 80px; left: 16px;"></div>
                    </div>
                </div>
            </div>

            <div class="column-divider"></div>
            <div class="row-input"></div>
        </div>

        <div class="row-divider"></div>

        <div class="row">
            <div class="page page-17 page-8-2" style="margin-right:100px;">
                <div class="container">
                    <div class="heading">
                        <h2 class="subtitle-top"
                            style="font-weight: 300; font-size: 70px; margin-left: 200px; margin-bottom: -100px;">Our
                        </h2>
                        <h1 class="title"
                            style="font-size: 190px; color: #c6a467; font-weight: 300; line-height: 130px; margin-left: 200px; margin-bottom: -20px;">
                            Digital
                        </h1>
                        <h1 class="subtitle-bottom"
                            style="font-weight: 300; font-size: 75px; margin-left: 399px; bottom: ;">
                            Advantage
                        </h1>
                    </div>
                    <div class="content">
                        <p class="page-17-text-1" style="font-weight: 300; margin-left: 200px;">
                            Our clients benefit from property exposure through shared listing syndication on a carefully
                            chosen list of top real estate websites worldwide. Researching potential buyer’s lifestyle,
                            specific demographics
                            and desired neighborhood websites where potential buyers frequently gather real estate
                            information when looking for a
                            home aided in choosing these distinct portals.
                        </p>
                        <p style="font-weight: 300; margin-left: 200px;">All our syndication
                            portals display your home with:</p>
                        <ul class="page-17-text-2"
                            style="list-style-image: url('images/home-selling/check-large.png');">
                            <li style="margin-bottom: 15px; font-weight: 400; margin-left: 200px;">Mobile Optimization
                            </li>
                            <li style="margin-bottom: 15px; font-weight: 400; margin-left: 200px;">Daily Updates</li>
                            <li style="margin-bottom: 15px; font-weight: 400; margin-left: 200px;">Local Information on
                                Area</li>
                            <li style="margin-bottom: 15px; font-weight: 400; margin-left: 200px;">Property Information
                            </li>
                            {{-- @endforeach --}}
                        </ul>
                        <p class="page-17-text-3" style="font-weight: 300;margin-left: 200px;">In addition to listing
                            syndication, custom reporting will be provided for every channel to show how much exposure
                            each
                            listing is receiving from each online portal. Targeted display ads and premium placement
                            will be featured when possible
                            on each of these online channels to ensure maximum exposure for our home listings.
                        </p>
                        <p style="font-weight: 300; margin-left: 200px;">Custom reporting
                            includes:</p>
                        <ul class="page-17-text-4"
                            style="list-style-image: url('images/home-selling/check-large.png');">
                            {{--
                                <?php //$page_8_2_text_6_array = explode("\n", $page_8_2_text_6); ?>
                                @foreach ($page_8_2_text_6_array as $string_array) --}}
                            <li style="margin-bottom: 15px; font-weight: 400; margin-left: 200px;">Listing Views</li>
                            <li style="margin-bottom: 15px; font-weight: 400; margin-left: 200px;">Search List Views
                            </li>
                            <li style="margin-bottom: 15px; font-weight: 400; margin-left: 200px;">Property Details
                                Views</li>
                            <li style="margin-bottom: 15px; font-weight: 400; margin-left: 200px;">Saved Searches</li>
                            {{-- @endforeach --}}
                        </ul>
                    </div>
                    <div class="page-number"
                        style="background-image: url('images/single-property/06.png'); bottom: 1%; margin-left: -300px;">
                        <div class="text" style="margin-top: 30px; margin-right: 130px;">
                            <h3 class="font-thin gold">THE</h3>
                            <h2 class="font-thin">HOME</h2>
                            <h2 class="font-thin gold">SELLING</h2>
                            <h4 class="font-thin">GUIDE</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="column-divider"></div>
            <div class="row-input" style="margin-right: 150px;">
                <label for="page_17_text_1">Content </label>
                <textarea id="page-17-text-1" name="page_17_text_1" rows="4">Our clients benefit from property exposure through shared listing syndication on a carefully chosen list of top real
                estate websites worldwide. Researching potential buyer’s lifestyle, specific demographics and desired neighborhood
                websites where potential buyers frequently gather real estate information when looking for a home aided in choosing
                these distinct portals.</textarea>
                <label for="page-17-text-2">Content </label>
                <textarea id="page-17-text-2" name="page_17_text_2" rows="4">
                        Mobile Optimization
                        Daily Updates
                        Local Information on Area
                        Property Information
    
                    </textarea>
                <label for="page-17-text_3">Content</label>
                <textarea id="page-17-text-3" name="page_17_text_3" rows="4">In addition to listing syndication, custom reporting will be provided for every channel to show how much exposure each
                listing is receiving from each online portal. Targeted display ads and premium placement will be featured when possible
                on each of these online channels to ensure maximum exposure for our home listings.</textarea>
                <label for="page-17-text-4">Content</label>
                <textarea id="page-17-text-4" name="page_17_text_4" rows="4">
                        Listing Views
                        Search List Views
                        Property Details Views
                        Saved Searches
                    </textarea>
            </div>
        </div>

        <div class="row-divider"></div>

        <div class="row">
            <div class="row-image" style="margin-left: -130px;">
                <img src="" id="imageBackground-page-18-1" style="display: none;" />
                <input hidden name="page_18_img_1" value="images/single-property/pc-content.png" />
                <img src="" id="imageBackground-page-18-2" style="display: none;" />
                <input hidden name="page_18_img_2" value="images/single-property/tablet-content.jpg" />
                <div class="page page-18"
                    style="background-image: url('images/single-property/page-18.png'); height: 100%; top: ; background-size: cover; background-position: left; width: 627px;">


                    <div class="pc" style="margin-top: 40px; margin-left: 180px;">
                        <img id="section18-1" src="images/single-property/pc-content.png" alt=""
                            style="margin-top: 330px; margin-left: -50px;" width="480px" height="305px" />
                    </div>
                    <div class="tablet" style="margin-top: -130px; z-index: 100; margin-left: 25px;">
                        <img src="images/single-property/tablet.png" alt="" style="margin-top: -40px;" />
                        <div style="margin-top: -415px; margin-left: 10px;">
                            <img id="section18-2" src="images/single-property/tablet-content.jpg" alt="" width="227px"
                                height="305px" style="margin-top: 70px;" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="row-input">
                <div class="button" style="margin-left: 164px;">
                    <label>Image 1</label>
                    <button type="button" class="mt-3" onclick="openInputFile('imageBackgroundInput-page-18-1')">Choose Image</button><br>
                    <input type="file" id="imageBackgroundInput-page-18-1"
                        onchange="imageBackgroundInputChanged_page_18_1()" style="display: none;"/>
                    <button type="button" class="mt-1" onclick="startCropper_page_18_1()">Crop</button>
                    <button type="button" onclick="cropImage_page_18_1()">Save Crop</button>
                </div>
                <div class="button mt-3" style="margin-left: 164px;">
                    <label>Image 2</label>
                    <button type="button" class="mt-3" onclick="openInputFile('imageBackgroundInput-page-18-2')">Choose Image</button><br>
                    <input type="file" id="imageBackgroundInput-page-18-2"
                        onchange="imageBackgroundInputChanged_page_18_2()" style="display: none;" />
                    <button type="button" class="mt-1" onclick="startCropper_page_18_2()">Crop</button>
                    <button type="button" onclick="cropImage_page_18_2()">Save Crop</button>
                </div>
            </div>
        </div>
        <script></script>
        <div class="row-divider"></div>
        <div class="row">
            <div class="page page-19 page-9-2"
                style="background-image: url('images/single-property/page-18-1.png'); background-size: cover; background-position: -760px -5px; background-repeat: no-repeat;height:1005px;max-width: 802px;">
                <div style="margin-left: 540px;">
                    <img src="" id="imageBackground-page-19-1" style="display: none;" />
                    <input hidden name="page_19_img_1" value="images/single-property/page-18-1.png" />
                    <div class="content">
                        <div class="heading" style="z-index: 100;margin-top: -65px;">
                            <h2 class="subtitle-top"
                                style="font-weight: 100; font-size: 70px; margin-left: -300px; margin-bottom: -150px;">
                                Exclusive
                            </h2>
                            <h1 class="title"
                                style="font-size: 150px; color: #c6a467; font-weight: 300; margin-left: -470px; margin-bottom: -80px; t">
                                <span style="color: white;">Pr</span>operty</h1>
                            <h1 class="subtitle-bottom" style="font-weight: 300; font-size: 75px; margin-left: -300px;">
                                Sites
                            </h1>
                        </div>
                        <div class="content" style="margin-left: -250px;">
                            <p class="page-19-text-1" style="font-weight: 300; margin-left: -50px;">
                                Pushing for unparalleled exposure for every LUXE Property client, each home listed with
                                LUXE Properties receives a personalized website. Complete with its own unique domain of
                                your street address, this
                                site will also be syndicated to more than 30 major property search portals such as
                                Zillow, Trulia and Realtor.com. This link, while highlighting a property’s best
                                features, allows us to showcase the home
                                with ease. The exclusive domain will provide a personalized site that does not feature
                                any other competitive homes.
                            </p>
                            <br />
                            <p class="page-19-text-2" style="font-weight: 300; margin-left: -50px;">These striking sites
                                include all of the most important marketing features of your home and the latest online
                                capabilities including:</p>
                            <h3
                                style="color: #c5a367; font-size: 35px; font-weight: 900; margin-bottom: -20px; margin-left: -50px;">
                                Features
                            </h3>
                            <ul class="page-19-text-3"
                                style="list-style-image: url('images/home-selling/check-large.png');">
                                {{--
                                    <?php //$page_9_2_text_3_array = explode("\n", $page_9_2_text_3); ?>
                                    @foreach ($page_9_2_text_3_array as $string_array) --}}
                                <li style="margin-bottom: 5px; font-weight: 400; margin-left: -50px;">Property Details
                                </li>
                                <li style="margin-bottom: 5px; font-weight: 400; margin-left: -50px;">Schools in Area
                                </li>
                                <li style="margin-bottom: 5px; font-weight: 400; margin-left: -50px;">Video and Photo
                                    Showcase</li>
                                <li style="margin-bottom: 5px; font-weight: 400; margin-left: -50px;">Map</li>
                                {{-- @endforeach --}}
                            </ul>
                            <h3
                                style="color: #c5a367; font-size: 35px; font-weight: 900; margin-bottom: -20px; margin-left: -50px;">
                                Capabilities
                            </h3>
                            <ul class="page-19-text-4"
                                style="list-style-image: url('images/home-selling/check-large.png');">
                                <li style="margin-bottom: 5px; font-weight: 400; margin-left: -50px;">Custom Domain</li>
                                <li style="margin-bottom: 5px; font-weight: 400; margin-left: -50px;">Search Engine
                                    Optimization</li>
                                <li style="margin-bottom: 5px; font-weight: 400; margin-left: -50px;">Lead Capture Tools
                                </li>
                                <li style="margin-bottom: 5px; font-weight: 400; margin-left: -50px;">Mobile
                                    Optimization</li>
                            </ul>
                            <p class="page-19-text-5" style="font-weight: 300; margin-left: -50px;">
                                This powerful online marketing tool impresses buyers and when advertised in print or
                                online, gets interested buyers to the information they seek instantly.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <script></script>
            <div class="row-input" style="margin-right: 100px;">
                {{--
                    <div class="button">
                        <input type="file" id="imageBackgroundInput-page-19-1" onchange="imageBackgroundInputChanged_page_19_1()" />
                        <button type="button" onclick="startCropper_page_19_1()">Crop</button>
                        <button type="button" onclick="cropImage_page_19_1()">Save Crop</button>
                    </div>
                    --}}
                <label for="page-19-text-1">Desc</label>
                <textarea id="page-19-text-1" name="page_19_text_1" rows="4">
Pushing for unparalleled exposure for every LUXE Property client, each home listed with LUXE Properties receives a personalized website. Complete with its own unique domain of your street address, this site will also be syndicated to more than 30 major property search portals such as Zillow, Trulia and Realtor.com. This link, while highlighting a property’s best features, allows us to showcase the home with ease. The exclusive domain will provide a personalized site that does not feature any other competitive homes.
                    </textarea>

                <label for="page-19-text-2">Desc</label>
                <textarea id="page-19-text-2" name="page_19_text_2" rows="4">These striking sites include all of the most important marketing features of your home and the latest online
                capabilities including: </textarea>

                <label for="page-19-text-3">Features</label>

                <textarea id="page-19-text-3" name="page_19_text_3" rows="4">
                        Property Details
                        Schools in Area
                        Video and Photo Showcase
                        Map 

                    </textarea>

                <label for="page-19-text-4">Capabilities</label>

                <textarea id="page-19-text-4" name="page_19_text_4" rows="4">
                        Custom Domain
                        Search Engine Optimization
                        Lead Capture Tools
                        Mobile Optimization 
                </textarea>

                <label for="page-19-text-5">Desc</label>
                <textarea id="page-19-text-5" name="page_19_text_5" rows="4">
This powerful online marketing tool impresses buyers and when  advertised in print or online, gets interested buyers to the information they seek instantly.
                    </textarea>
            </div>
        </div>

        <div class="row-divider"></div>

        <div class="row">
            <div class="" style="max-width:600px;">
                <img src="" id="imageBackground-page-20-1" style="display: none;" />
                <input hidden name="page_20_img_1" value="images/single-property/page-20-1.png" />
                <img src="" id="imageBackground-page-20-2" style="display: none;" />
                <input hidden name="page_20_img_2" value="images/single-property/page-20-2.png" />
                <img src="" id="imageBackground-page-20-3" style="display: none;" />
                <input hidden name="page_20_img_3" value="images/single-property/page-20-3.png" />
            </div>
            <div class="page page-20 page-10-1" style="margin-left: -05px;">
                <div class="row-1"
                    style="background-image: url('images/single-property/page-20-1.png'); height: 30%; top: 0; background-size: cover; margin-bottom: -30px;">
                    <h1></h1>
                </div>

                <div class="row-2"
                    style="background-image: url('images/single-property/page-20-2.png'); height: 30%; top: 153%; background-size: cover; margin-bottom: -30px;">
                    <h1></h1>
                </div>

                <div class="row-3"
                    style="background-image: url('images/single-property/page-20-3.png'); height: 30%; bottom: 0; background-size: cover;">
                    <h1></h1>
                </div>
                <div class="content">
                    <div class="absolute" style="bottom: 840px;width: 640px;">
                        <h1 style="
                                    z-index: 100;
                                    background-image: url('images/home-selling/Asset 16-3.png');
                                    background-position: right;
                                    background-repeat: no-repeat;
                                    text-align: right;
                                    color: #fff;
                                    margin-bottom: -80px;
                                    font-size: 28px;
                                ">
                            <div class="page-20-text-1" style="">www.LUXEknows.com</div>
                        </h1>
                        <h1 class="page-20-text-2" style="
                                    margin-top: 320px;
                                    z-index: 100;
                                    background-image: url('images/home-selling/Asset 16-3.png');
                                    background-position: right;
                                    background-repeat: no-repeat;

                                    text-align: right;
                                    color: #fff;
                                    margin-bottom: -60px;

                                    font-size: 28px;
                                    top: 50%;
                                ">
                            www.allmiamihousesforsale.com
                        </h1>
                        <h1 class="page-20-text-3" style="
                                    margin-top: 320px;
                                    z-index: 100;
                                    background-image: url('images/home-selling/Asset 16-3.png');
                                    background-position: right;
                                    background-repeat: no-repeat;
                                    text-align: right;
                                    color: #fff;
                                    margin-bottom: -40px;
                                    font-size: 28px;
                                ">
                            www.RogerCabrera.com
                        </h1>
                    </div>
                </div>
            </div>
            <div class="row-input" style="margin-left: 390px;">
                <div class="button">
                    <label>Image 1</label>
                    <button type="button" class="mt-3" onclick="openInputFile('imageBackgroundInput-page-20-1')">Choose Image</button><br>
                    <input type="file" id="imageBackgroundInput-page-20-1"
                        onchange="imageBackgroundInputChanged_page_20_1()" style="display: none;"/>
                    <button type="button" class="mt-1" onclick="startCropper_page_20_1()">Crop</button>
                    <button type="button" onclick="cropImage_page_20_1()">Save Crop</button>
                    <label for="page-20-text-1" class="mt-1">Title 1</label>
                    <input type="text" id="page-20-text-1" name="page_20_text_1" value="www.LUXEknows.com" />
                </div>
                <div class="button">
                    <label>Image 2</label>
                    <button type="button" class="mt-3" onclick="openInputFile('imageBackgroundInput-page-20-2')">Choose Image</button><br>
                    <input type="file" id="imageBackgroundInput-page-20-2"
                        onchange="imageBackgroundInputChanged_page_20_2()" style="display: none;"/>
                    <button type="button" class="mt-1" onclick="startCropper_page_20_2()">Crop</button>
                    <button type="button" onclick="cropImage_page_20_2()">Save Crop</button>
                    <label for="page-20-text-2" class="mt-1">Title 2</label>
                    <input type="text" id="page-20-text-2" name="page_20_text_2"
                        value="www.allmiamihousesforsale.com" />
                </div>
                <div class="button">
                    <label>Image 3</label>
                    <button type="button" class="mt-3" onclick="openInputFile('imageBackgroundInput-page-20-3')">Choose Image</button><br>
                    <input type="file" id="imageBackgroundInput-page-20-3"
                        onchange="imageBackgroundInputChanged_page_20_3()" style="display: none;"/>
                    <button type="button" class="mt-1" onclick="startCropper_page_20_3()">Crop</button>
                    <button type="button" onclick="cropImage_page_20_3()">Save Crop</button>
                    <label for="page-20-text-3" class="mt-1">Title 3</label>
                    <input type="text" id="page-20-text-3" name="page_20_text_3" value="www.RogerCabrera.com" />
                </div>
            </div>
        </div>
        <script></script>
        <div class="row-divider"></div>

        <div class="row" style="height: 1025px;">
            <div class="row-image">
                <div class="page page-21 page-10-2">
                    <div class="heading">
                        <h2 class="subtitle-top"
                            style="font-weight: 300; font-size: 70px; margin-left: 380px; margin-bottom: -195px;">Our
                        </h2>
                        <h1 class="title"
                            style="padding-left: 50px; font-size: 190px; color: #c6a467; font-weight: 300; margin-bottom: -100px;">
                            Online
                        </h1>
                        <h1 class="subtitle-bottom"
                            style="font-weight: 300; font-size: 75px; margin-left: 220px; margin-bottom: 90px;">
                            Presence
                        </h1>
                    </div>
                    <div class="content" style="padding-left: 50px;">
                        <h1 class="page-21-text-1" style="font-size: 35px; color: #c5a367; font-weight: 900;">
                            www.LUXEknows.com</h1>

                        <p class="page-21-text-2" style="font-weight: 300;">
                            Our principal website features various content, from our exclusive listings to agent
                            profiles and our blog posts. Here you can access our agent’s biographies, get in contact
                            with any member of our team, and
                            browse the MLS. We utilize our blog to showcase our latest listings, which are shared to
                            various social media and online outlets. Many of our home listings are shared over 200 times
                            throughout the web.
                        </p>

                        <h1 class="page-21-text-3" style="font-size: 35px; color: #c5a367; font-weight: 900;">
                            www.allmiamihousesforsale.com
                        </h1>

                        <p class="page-21-text-4" style="font-weight: 300;">
                            Our fully integrated MLS portal allows any user to receive a personalized response quickly
                            via phone or email from one of our professional agents, be notified of new properties that
                            match the user’s
                            preferences, have the ability to save favorites and searches for easier access, request
                            showings or more informa-tion on any listing and subscribe to customized property alerts.
                            All LUXE listings are featured
                            on this site and marketed using exclusive Pay-Per-Click campaigns.
                        </p>

                        <h1 class="page-21-text-5" style="font-size: 35px; color: #c5a367; font-weight: 900;">
                            www.RogerCabrera.com</h1>

                        <p class="page-21-text-6" style="font-weight: 300;">
                            Having a strong online presence has widely become one of the most important tools in real
                            estate, with 90% of buyers starting their home search online. LUXE Properties is committed
                            to maintaining a powerful
                            online presence fueled by engagement and up-to-date information on trends in the marketplace
                            through our various proprietary websites as well as our social media outlets.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row-input" style="margin-right: 150px;">
                <div class="flex">
                    <label for="page-21-text-1">Website 1</label>
                    <input type="text" id="page-21-text-1" name="page_21_text_1" value="www.LUXEknows.com" />
                </div>
                <div class="flex">
                    <label for="page-21-text-2">Content 1</label>
                    <textarea id="page-21-text-2" name="page_21_text_2" rows="7">
Our principal website features various content, from our exclusive listings to agent profiles and our blog posts. Here you can access our agent’s biographies, get in contact with any member of our team, and browse the MLS. We utilize our blog to showcase our latest listings, which are shared to various social media and online outlets. Many of our home listings are shared over 200 times throughout the web.
                        </textarea>
                </div>
                <div class="flex">
                    <label for="ppage-21-text-3">Website 2</label>
                    <input type="text" id="page-21-text-3" name="page_21_text_3"
                        value="www.allmiamihousesforsale.com" />
                </div>
                <div class="flex">
                    <label for="page-21-text-4">Content 2</label>
                    <textarea id="page-21-text-4" name="page_21_text_4" rows="7">
Our fully integrated MLS portal allows any user to receive a personalized response quickly via phone or email from one of our professional agents, be notified of new properties that match the user’s preferences, have the ability to save favorites and searches for easier access, request showings or more informa-tion on any listing and subscribe to customized property alerts. All LUXE listings are featured on this site and marketed using exclusive Pay-Per-Click campaigns.
                        </textarea>
                </div>
                <div class="flex">
                    <label for="page-21-text-5">Website 3</label>
                    <input type="text" id="page-21-text-5" name="page_21_text_5" value="www.RogerCabrera.com" />
                </div>
                <div class="flex">
                    <label for="page-21-text-6">Content 3</label>
                    <textarea id="page-21-text-6" name="page_21_text_6" rows="7">
Having a strong online presence has widely become one of the most important tools in real estate, with 90% of buyers starting their home search online. LUXE Properties is committed to maintaining a powerful online presence fueled by engagement and up-to-date information on trends in the marketplace through our various proprietary websites as well as our social media outlets.
                        </textarea>
                </div>
            </div>
        </div>

        <div class="row-divider"></div>

        <div class="row" style="height: 1240px;overflow:hidden;">
            <div class="row-image">
                <img src="" id="imageBackground-page-22-1" style="display: none;" />
                <input hidden name="page_22_img_1" value="images/home-selling/Asset 17.jpg" />
                <img src="" id="imageBackground-page-22-2" style="display: none;" />
                <input hidden name="page_22_img_2" value="images/home-selling/Asset 18-1.jpg" />
                <img src="" id="imageBackground-page-22-3" style="display: none;" />
                <input hidden name="page_22_img_3" value="images/home-selling/Asset 18-2.jpg" />
                <img src="" id="imageBackground-page-22-4" style="display: none;" />
                <input hidden name="page_22_img_4" value="images/home-selling/Asset 18-3.jpg" />
                <img src="" id="imageBackground-page-22-5" style="display: none;" />
                <input hidden name="page_22_img_5" value="images/home-selling/Asset 18-4.jpg" />
                <img src="" id="imageBackground-page-22-6" style="display: none;" />
                <input hidden name="page_22_img_6" value="images/home-selling/Asset 18-5.jpg" />
                <img src="" id="imageBackground-page-22-7" style="display: none;" />
                <input hidden name="page_22_img_7" value="images/home-selling/Asset 18-6.jpg" />
                <div class="page page-22" style="max-width:800px;">
                    <div class="text" style="max-width: 780px;">
                        <div class="section1" style="
                                    margin-top: -140px;
                                    margin-bottom: -250px;
                                    background-image: url('images/home-selling/Asset 17.jpg');
                                    padding-top: 100%;
                                    top: -25px;
                                    background-size: contain;
                                    background-position: center;
                                    background-repeat: no-repeat;
                                "></div>
                        <div class="section2"
                            style="background-color: #c6a467; z-index: 100; top: 30%; margin: auto 60px; padding: 30px;">
                            <h1></h1>
                            <div class="column-1" style="max-width: 65%;">
                                <img id="page-22-img-2" src="images/home-selling/Asset 18-1.jpg" alt="" width="362px"
                                    height="245px" />
                                <div class="introducing"
                                    style="background: #000; height: 270px; padding: 6px; width: 90%;">
                                    <div class="inner" style="background: #262626; height: 255px; padding: 6px;">
                                        <h2
                                            style="text-align: center; font-weight: 400; font-size: 12px; margin: 0; color: white;">
                                            INTRODUCING</h2>
                                        <h2 class="page-22-text-1"
                                            style="text-align: center; font-weight: 400; font-size: 12px; margin: 0; color: white; border-bottom: 1px solid white;">
                                            3504 MAIN LODGE DR • MIAMI • FLORIDA</h2>
                                        <p class="page-22-text-2" style="color: #fff; font-size: 12px;">
                                            This is a single family home that contains 7,178 sq ft and was built in
                                            2008. It contains 7 bedrooms and 7 bathrooms. Spectacular Estate Home in the
                                            extremely exclusive neighborhood of Camp
                                            Biscayne, This home offers a lifestyle of maximum privacy and security while
                                            being just steps from the best that Coconut Grove provides. Walking distance
                                            to the best schools, shopping and
                                            resturants.
                                        </p>
                                        <h2 class="page-22-text-3"
                                            style="text-align: center; color: #fff; font-size: 22px; font-weight: 300;">
                                            $4,499,000</h2>
                                    </div>
                                </div>
                            </div>
                            <img id="page-22-img-7" src="images/home-selling/Asset 18-6.jpg" alt=""
                                style="z-index: 1000;" width="600px" height="230px" />
                        </div>
                        <div class="column-2"
                            style="margin-bottom: 260px; margin-top: -790px; margin-left: 480px; width: 210px; max-width: 210px; top: 32%; left: 60%; z-index: 100;">
                            <div>
                                <img id="page-22-img-3" src="images/home-selling/Asset 18-2.jpg" alt="" width="210px"
                                    height="130px" />
                            </div>
                            <div>
                                <img id="page-22-img-4" src="images/home-selling/Asset 18-3.jpg" alt="" width="210px"
                                    height="130px" />
                            </div>
                            <div>
                                <img id="page-22-img-5" src="images/home-selling/Asset 18-4.jpg" alt="" width="210px"
                                    height="130px" />
                            </div>
                            <div>
                                <img id="page-22-img-6" src="images/home-selling/Asset 18-5.jpg" alt="" width="210px"
                                    height="130px" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script></script>
            <div class="column-divider"></div>
            <div class="row-input">
                <div class="button" style="margin-top: 0; margin-bottom: 50px;">
                    <label>Top</label>
                    <button type="button" class="mt-3" onclick="openInputFile('imageBackgroundInput-page-22-1')">Choose Image</button><br>
                    <input type="file" id="imageBackgroundInput-page-22-1"
                        onchange="imageBackgroundInputChanged_page_22_1()" style="display: none;"/>
                    <button type="button" class="mt-1" onclick="startCropper_page_22_1()">Crop</button>
                    <button type="button" onclick="cropImage_page_22_1()">Save Crop</button>
                </div>
                <div class="flex">
                    <label for="page-22-text-1">Location</label>
                    <input type="text" id="page-22-text-1" name="page_22_text_1"
                        value="3504 MAIN LODGE DR • MIAMI • FLORIDA" />
                </div>
                <div class="flex">
                    <label for="page-22-text-2">Text</label>
                    <textarea id="page-22-text-2" name="page_22_text_2" rows="7">
This is a single family home that contains 7,178 sq ft and was built in 2008. It contains 7 bedrooms and 7 bathrooms. Spectacular Estate Home in the extremely exclusive neighborhood of Camp Biscayne, This home offers a lifestyle of maximum privacy and security while being just steps from the best that Coconut Grove provides. Walking distance to the best schools, shopping and resturants.
                        </textarea>
                </div>
                <div class="flex">
                    <label for="page-22-text-3">Price</label>
                    <input type="text" id="page-22-text-3" name="page_22_text_3" value="$4,499,000" />
                </div>
                <div class="flex">
                    <div class="button" style="width:50%;margin-top: 0; margin-bottom: 50px;">
                        <label style="margin: 0 !important;">Left Top</label>
                        <button type="button" class="mt-3" onclick="openInputFile('imageBackgroundInput-page-22-2')">Choose Image</button><br>
                        <input type="file" id="imageBackgroundInput-page-22-2"
                                onchange="imageBackgroundInputChanged_page_22_2()" style="display: none;"/>
                        <button type="button" class="mt-1" onclick="startCropper_page_22_2()">Crop</button>
                        <button type="button" onclick="cropImage_page_22_2()">Save Crop</button>
                    </div>
                    <div class="button" style="margin-top: 0; margin-bottom: 50px;">
                        <label style="margin: 0 !important;">Right 1</label>
                        <button type="button" class="mt-3" onclick="openInputFile('imageBackgroundInput-page-22-3')">Choose Image</button><br>
                        <input type="file" id="imageBackgroundInput-page-22-3"
                                onchange="imageBackgroundInputChanged_page_22_3()" style="display: none;"/>
                        <button type="button" class="mt-1" onclick="startCropper_page_22_3()">Crop</button>
                        <button type="button" onclick="cropImage_page_22_3()">Save Crop</button>
                    </div>
                </div>
                <div class="flex">
                    <div class="button" style="width:50%;margin-top: 0; margin-bottom: 50px;">
                        <label style="margin: 0 !important;">Right 2</label>
                        <button type="button" class="mt-3" onclick="openInputFile('imageBackgroundInput-page-22-4')">Choose Image</button><br>
                        <input type="file" id="imageBackgroundInput-page-22-4"
                                onchange="imageBackgroundInputChanged_page_22_4()" style="display: none;"/>
                        <button type="button" class="mt-1" onclick="startCropper_page_22_4()">Crop</button>
                        <button type="button" onclick="cropImage_page_22_4()">Save Crop</button>
                    </div>
                    <div class="button" style="margin-top: 0; margin-bottom: 50px;">
                        <label style="margin: 0 !important;">Right 3</label>
                        <button type="button" class="mt-3" onclick="openInputFile('imageBackgroundInput-page-22-5')">Choose Image</button><br>
                        <input type="file" id="imageBackgroundInput-page-22-5"
                                onchange="imageBackgroundInputChanged_page_22_5()" style="display: none;"/>
                        <button type="button" class="mt-1" onclick="startCropper_page_22_5()">Crop</button>
                        <button type="button" onclick="cropImage_page_22_5()">Save Crop</button>
                    </div>
                </div>
                <div class="flex">
                    <div class="button" style="width:50%;margin-top: 0; margin-bottom: 50px;">
                        <label style="margin: 0 !important;">Right 4</label>
                        <button type="button" class="mt-3" onclick="openInputFile('imageBackgroundInput-page-22-6')">Choose Image</button><br>
                        <input type="file" id="imageBackgroundInput-page-22-6"
                                onchange="imageBackgroundInputChanged_page_22_6()" style="display: none;"/>
                        <button type="button" class="mt-1" onclick="startCropper_page_22_6()">Crop</button>
                        <button type="button" onclick="cropImage_page_22_6()">Save Crop</button>
                    </div>
                    <div class="button" style="margin-top: 0; margin-bottom: 50px;">
                        <label style="margin: 0 !important;">Bottom</label>
                        <button type="button" class="mt-3" onclick="openInputFile('imageBackgroundInput-page-22-7')">Choose Image</button><br>
                        <input type="file" id="imageBackgroundInput-page-22-7"
                                onchange="imageBackgroundInputChanged_page_22_7()" style="display: none;"/>
                        <button type="button" class="mt-1" onclick="startCropper_page_22_7()">Crop</button>
                        <button type="button" onclick="cropImage_page_22_7()">Save Crop</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row-divider"></div>

        <div class="row">
            <div class="row-image">
                <div class="page page-23" style="min-width: 860px;margin-right:30px;">
                    <div class="heading">
                        <h2 class="subtitle-top"
                            style="font-weight: 300; font-size: 70px; margin-left: 535px; margin-top: 50px; margin-bottom: -205px;">
                            Your
                        </h2>
                        <h1 class="title"
                            style="padding-left: 230px; font-size: 190px; color: #c6a467; font-weight: 300; margin-bottom: -80px;">
                            Home
                        </h1>
                        <h1 class="subtitle-bottom"
                            style="font-weight: 300; font-size: 75px; margin-left: 405px; margin-bottom: -50px;">
                            In Print
                        </h1>
                    </div>
                    <div class="content" style="padding-left: 50px; padding-top: 50px; padding-left: 230px;">
                        <h1 class="page-23-text-1" style="font-size: 30px; color: #c5a367; font-weight: 900;">Direct
                            Mail Marketing</h1>

                        <p class="page-23-text-2" style="font-weight: 300;">
                            Once a home is listed with LUXE Properties, our in-house marketing specialists get to work
                            on designing a personalized marketing piece announcing the sale of your property. Targeted
                            direct mail has a 495%
                            increased response rate compared to traditional print direct mail. Through a comprehensive
                            analysis of neighborhood homes sales and specific demographics, our marketers are able to
                            identify the profile of a
                            property’s most probable purchaser. In addition to targeted direct mail, we also focus on
                            your surrounding neighborhood to reach the biggest endorsers for the area, your neighbors.
                            Your neighbors may have
                            friends and families who desire to live nearby.
                        </p>

                        <h1 class="page-23-text-3" style="font-size: 30px; color: #c5a367; font-weight: 900;">Luxury
                            Brochures</h1>

                        <p class="page-23-text-4" style="font-weight: 300;">
                            Each LUXE listing receives a personalized luxury brochure placed in the home for any
                            broker’s open, showings or open houses. These luxury brochures include high-quality images
                            of the home and a list of
                            features and amenities. These brochures ensure your home is memorable and at the forefront
                            as buyers enter and leave. They aid buyers and their agents overcome most objections and
                            questions before even
                            leaving the home.
                        </p>

                        <h1 class="page-23-text-5" style="font-size: 30px; color: #c5a367; font-weight: 900;">Floor
                            Plans</h1>

                        <p class="page-23-text-6" style="font-weight: 300;">
                            LUXE Properties offers customized floor plan services to effectively engage buyer’s interest
                            in your property. When just viewing real estate photos online, it can be difficult for
                            buyersee how the home’s
                            layout flows. Floor plans help display where rooms are located in context to one another and
                            provide an idea of important details, such as the way the space is oriented.
                        </p>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input" style="margin-right: 150px;">
                <label for="page-23-text-1" style="">Title 1 </label>
                <input type="text" id="page-23-text-1" name="page_23_text_1" value="Direct Mail Marketing " />
                <label for="page-23-text-2">Content 1</label>
                <textarea id="page-23-text-2" name="page_23_text_2" rows="4">
Once a home is listed with LUXE Properties, our in-house marketing specialists get to work on designing a personalized marketing piece announcing the sale of your property. Targeted direct mail has a 495% increased response rate compared to traditional print direct mail. Through a comprehensive analysis of neighborhood homes sales and specific demographics, our marketers are able to identify the profile of a property’s most probable purchaser. In addition to targeted direct mail, we also focus on your surrounding neighborhood to reach the biggest endorsers for the area, your neighbors. Your neighbors may have friends and families who desire to live nearby.

                    </textarea>
                <label for="page-23-text-3">Title 2</label>
                <input type="text" id="page-23-text-3" name="page_23_text_3" value="Luxury Brochures
                    " />
                <label for="page-23-text-4">Content 2</label>
                <textarea id="page-23-text-4" name="page_23_text_4" rows="4">
 Each LUXE listing receives a personalized luxury brochure placed in the home for any broker’s open, showings or open houses. These luxury brochures include high-quality images of the home and a list of features and amenities. These brochures ensure your home is memorable and at the forefront as buyers enter and leave. They aid buyers and their agents overcome most objections and questions before even leaving the home.
                    </textarea>
                <label for="page-23-text-5">Title 3</label>
                <input type="text" id="page-23-text-5" name="page_23_text_5" value="Floor Plans
                    " />
                <label for="page-23-text-6">Content 3</label>
                <textarea id="page-23-text-6" name="page_23_text_6" rows="4">
 LUXE Properties offers customized floor plan services to effectively engage buyer’s interest in your property. When just viewing real estate photos online, it can be difficult for buyersee how the home’s layout flows. Floor plans help display where rooms are located in context to one another and provide an idea of important details, such as the way the space is oriented.

                    </textarea>
            </div>
        </div>

        <div class="row-divider"></div>

        <div class="row">
            <div class="row-image">
                <div class="page page-24 page-background"
                    style="background-image: url('images/single-property/page-24.jpg'); margin-left: -90px;">
                    <img src="" id="imageBackground-page-24-1" style="display: none;" />
                    <input hidden name="page_24_img_1" value="images/single-property/page-24.jpg" />

                    <div class="container">
                        <div class="absolute" style="position: absolute; bottom: 50px; left: 16px;">
                            <h2 class="font-thin white mb-40" style="margin-bottom: -160px; font-size: 80px;">Social
                            </h2>
                            <h1 class="font-thin gold" style="font-size: 170px; margin-bottom: -80px;">Media</h1>
                            <h2 class="font-thin white mb-40" style="margin-left:270px;font-size:50px; bot">Influence
                            </h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="column-divider"></div>
            <div class="row-input">
                <div class="button">
                    <label>Image</label>
                    <button type="button" class="mt-3" onclick="openInputFile('imageBackgroundInput-page-24-1')">Choose Image</button><br>
                    <input type="file" id="imageBackgroundInput-page-24-1"
                        onchange="imageBackgroundInputChanged_page_24_1()" style="display: none;"/>
                    <button type="button" class="mt-1" onclick="startCropper_page_24_1()">Crop</button>
                    <button type="button" onclick="cropImage_page_24_1()">Save Crop</button>
                </div>
            </div>
        </div>

        <div class="row-divider"></div>

        <div class="row">
            <div class="row-image" style="margin-left: -40px;height:1055px;">
                <div class="page page-25 page-12-2" style="
                            left: 20px;
                            bottom: 0;
                            right: 500px;
                            background-size: cover;
                            background-position: -600px -5px;
                            background-repeat: no-repeat;
                            position: relative;
                            overflow:hidden;
                            height:1055px;
                        ">
                    <img src="" id="imageBackground-page-25-1" style="display: none;" />
                    <input hidden name="page_25_img_1" value="images/single-property/page-24.jpg" />
                    <div class="page-bg-image" style="background-image: url('images/single-property/page-24.jpg');">
                        <h1></h1>
                    </div>
                    <div class="content" style="margin-left: -95px; margin-top: 50px;">
                        <p class="page-25-text-1" style="font-weight: 300; margin-left: 300px; width: 350px;">
                            Social media influence has continuously become one of our greatest assets. Whether it is
                            through promotion of our newest listings or interaction with our followers, our connection
                            to social media elicits
                            another outlet of promotion for all properties listed with LUXE.
                        </p>
                        <br />
                        <p style="font-weight: 300; margin-left: 300px; width: 350px;">
                            It has increasingly become one of our greatest tools to market not only our exclusive
                            listings but also our closings, referrals, and testimonials to gain an engaged following.
                        </p>

                        <h1
                            style="font-size: 35px; color: #c5a367; font-weight: 900; margin-bottom: -5px; margin-left: 300px;">
                            Luxe Properties Stats
                        </h1>

                        <ul style="list-style-image: url('images/home-selling/check-large.png');">
                            {{--
                                <?php //$page_12_2_text_4_array = explode("\n", $page_12_2_text_4); ?>
                                @foreach ($page_12_2_text_4_array as $string_array) --}}
                            <li style="margin-bottom: 5px; font-weight: 300; margin-left: 300px;">30,000+ followers
                                across Twitter, LinkedIn, and Instagram</li>
                            <li style="margin-bottom: 5px; font-weight: 300; margin-left: 300px;">9,000+ Views on
                                Youtube channel</li>
                            <li style="margin-bottom: 5px; font-weight: 300; margin-left: 300px;">3,000+ Likes on
                                Facebook; 10,000+ users reached</li>
                            {{-- @endforeach --}}
                        </ul>

                        <p style="font-weight: 300; margin-left: 300px;">
                            With a steadily growing following on all our social media channels, Facebook Sponsored Ads
                            add another dimension to our reach. Our Facebook Ads are highly targeted to attract the most
                            qualified buyers and
                            interested parties.
                        </p>
                        <div style="margin-left: 300px; margin-top: 30px;">
                            <img src="images/home-selling/social1.jpg" alt=""
                                style="width: 35px; margin-right: 10px;" />
                            <p class="page-25-text-2"
                                style="font-weight: 300; margin-top: -40px; margin-left: 50px; margin-bottom: 15px;">
                                app.luxeknows.com/luxe/
                            </p>
                        </div>
                        <div style="margin-left: 300px;">
                            <img src="images/home-selling/social2.jpg" alt=""
                                style="width: 35px; margin-right: 10px;" />
                            <p class="page-25-text-3"
                                style="font-weight: 300; margin-top: -40px; margin-left: 50px; margin-bottom: 15px;">
                                @luxepropertiesmia
                            </p>
                        </div>
                        <div style="margin-left: 300px;">
                            <img src="images/home-selling/social3.jpg" alt=""
                                style="width: 35px; margin-right: 10px;" />
                            <p class="page-25-text-4"
                                style="font-weight: 300; margin-top: -40px; margin-left: 50px; margin-bottom: 15px;">
                                LUXE Properties, LLC.</p>
                        </div>
                        <div style="margin-left: 300px;">
                            <img src="images/home-selling/social4.jpg" alt=""
                                style="width: 35px; margin-right: 10px;" />
                            <p class="page-25-text-5"
                                style="font-weight: 300; margin-top: -40px; margin-left: 50px; margin-bottom: 15px;">
                                @luxepropertiesmia
                            </p>
                        </div>
                        <div style="margin-left: 300px;">
                            <img src="images/home-selling/social5.jpg" alt=""
                                style="width: 35px; margin-right: 10px;" />
                            <p class="page-25-text-6"
                                style="font-weight: 300; margin-top: -40px; margin-left: 50px; margin-bottom: 15px;">
                                @luxeproperties
                            </p>
                        </div>
                        <div style="margin-left: 300px;">
                            <img src="images/home-selling/social6.jpg" alt=""
                                style="width: 35px; margin-right: 10px;" />
                            <p class="page-25-text-7"
                                style="font-weight: 300; margin-top: -40px; margin-left: 50px; margin-bottom: 15px;">
                                linkedin.com/company/luxe-properties-llc
                            </p>
                        </div>
                        <div style="margin-left: 300px;">
                            <img src="images/home-selling/social7.jpg" alt=""
                                style="width: 35px; margin-right: 10px;" />
                            <p class="page-25-text-8"
                                style="font-weight: 300; margin-top: -40px; margin-left: 50px; margin-bottom: 15px;">
                                pinterest.com/luxeproperties
                            </p>
                        </div>
                        <div style="margin-left: 300px;">
                            <img src="images/home-selling/social8.jpg" alt=""
                                style="width: 35px; margin-right: 10px;" />
                            <p class="page-25-text-9"
                                style="font-weight: 300; margin-top: -40px; margin-left: 50px; margin-bottom: 15px;">
                                youtube.com/c/LUXEProperties
                            </p>
                        </div>
                    </div>
                    <div class="page-number"
                        style="background-image: url('images/single-property/24.png'); top: 75px;background-position: top right;">
                        <div class="text" style="margin-top: -80px; margin-right: 150px;">
                            <h3 class="font-thin gold">THE</h3>
                            <h2 class="font-thin">HOME</h2>
                            <h2 class="font-thin gold">SELLING</h2>
                            <h4 class="font-thin">GUIDE</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input" style="margin-left:850px:">
                <label for="page-25-text-1" class="mt-1">Content </label>
                <textarea id="page-25-text-1" name="page_25_text_1" rows="4">
 Social media inﬂuence has continuously become one of our great-est assets. Whether it is through promotion of our newest listings or interaction with our followers, our connection to social media elicits another outlet of promotion for all properties listed with LUXE.
  It has increasingly become one of our greatest tools to market not only our exclusive listings but also our closings, referrals, and testimonials to gain an engaged following.
                    </textarea>
                <label for="page-25-text-2">Social Luxe </label>
                <input type="text" id="page-25-text-2" name="page_25_text_2" value="app.luxeknows.com/luxe/" />
                <label for="page-25-text-3">Social link </label>
                <input type="text" id="page-25-text-3" name="page_25_text_3" value="@luxepropertiesmia" />
                <label for="page-25-text-4">Social link </label>
                <input type="text" id="page-25-text-4" name="page_25_text_4" value="LUXE Properties, LLC." />
                <label for="page-25-text-5">Social link </label>
                <input type="text" id="page-25-text-5" name="page_25_text_5" value="@luxekendall" />
                <label for="page-25-text-6">Social link </label>
                <input type="text" id="page-25-text-6" name="page_25_text_6" value="@luxeproperties " />
                <label for="page-25-text-7">Social link </label>
                <input type="text" id="page-25-text-7" name="page_25_text_7"
                    value="linkedin.com/company/luxe-properties-llc" />
                <label for="page-25-text-8">Social link</label>
                <input type="text" id="page-25-text-8" name="page_25_text_8" value="pinterest.com/luxeproperties" />
                <label for="page-25-text-9">Social link </label>
                <input type="text" id="page-25-text-9" name="page_25_text_9" value="youtube.com/c/LUXEProperties" />
            </div>
        </div>

        <div class="row-divider"></div>

        <div class="row">
            <div class="row-image" style="margin-left: -190px;">
                <img src="" id="imageBackground-page-26-1" style="display: none;" />
                <input hidden name="page_26_img_1" value="images/single-property/page-26.jpg" />
                <div class="page page-26 page-background"
                    style="background-image: url('images/single-property/page-26.jpg');margin-left:215px;">
                    <div class="container">
                        <div class="absolute" style="position: absolute; bottom: 280px;">
                            <h2 class="font-thin white mb-40" style="font-size: 80px; margin-bottom: -160px;">Strategic
                            </h2>
                            <h1 class="font-thin gold" style="font-size: 170px; margin-bottom: -80px;">Property</h1>
                            <h2 class="font-thin white mb-40"
                                style="margin-left: 320px; font-size: 50px; margin-bottom: -180px;">Tours</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row-input">
                <div class="button" style="margin-left: 220px;">
                    <label>Image</label>
                    <button type="button" class="mt-3" onclick="openInputFile('imageBackgroundInput-page-26-1')">Choose Image</button><br>
                    <input type="file" id="imageBackgroundInput-page-26-1"
                        onchange="imageBackgroundInputChanged_page_26_1()" style="display: none;"/>
                    <button type="button" class="mt-1" onclick="startCropper_page_26_1()">Crop</button>
                    <button type="button" onclick="cropImage_page_26_1()">Save Crop</button>
                </div>
            </div>
        </div>
        <div class="row-divider"></div>
        <div class="row" style="height:1100px;">
            <div class="row-image">
                <div class="page page-27"
                    style="background-size: cover; background-position: -605px -5px; background-repeat: no-repeat; margin-right: 100px;width:700px;height:1018px;position:relative;overflow:hidden;">
                    <div class="container">
                        <div class="page-bg-image" style="background-image: url('images/single-property/page-26.jpg');">
                            <h1></h1>
                        </div>
                        <div class="content" style="margin-top: 50px; margin-left: 200px;">
                            <h3 class="page-27-text-1" style="color: #c5a367; font-size: 35px; font-weight: 900;">
                                Broker’s Open</h3>
                            <p class="font-thin page-27-text-3">
                                The LUXE Properties team will host a broker’s open event for select agents who
                                specialize in the area. This will bring cooperating agents and firms together,
                                condensing some of the showing activity into a
                                set timeframe. These events allow us to receive immediate authentic feedback on the
                                home, its price and its competitive qualities when compared to the other homes on the
                                market. Our broker’s open events
                                are marketed through the following avenues:
                            </p>
                            <ul class="page-27-text-4"
                                style="list-style-image: url('images/home-selling/check-large.png');">
                                <li class="font-thin">Invite prequalified brokers and agents specializing in
                                    neighborhood</li>
                                <li class="font-thin">Coordinate with other firms to schedule in sequence for maximum
                                    exposure in neighborhood</li>
                                <li class="font-thin">Coordinate with title firms and lenders to expand potential reach
                                </li>
                            </ul>
                            <h3 class="page-27-text-2" style="color: #c5a367; font-size: 35px; font-weight: 900;">Open
                                Houses</h3>
                            <p class="font-thin page-27-text-5">
                                Public open houses will also be hosted on various weekends in order to ensure we are
                                attracting buyers via every possible avenue. In a study by the National Association of
                                Realtors, 45% of buyers attended
                                open houses as a source of information. The more exposure, the better and this will
                                continually increase the velocity of the sale of your property. Our open houses are
                                marketed through the following
                                avenues:
                            </p>
                            <ul class="page-27-text-6"
                                style="list-style-image: url('images/home-selling/check-large.png');">
                                <li class="font-thin">Personalized email marketing campaigns to contact database</li>
                                <li class="font-thin">Posting dates and times on the MLS, Zillow, Trulia, Realtor.com
                                    and other syndication portals</li>
                                <li class="font-thin">Creative out of the box methods to attract potential buyers such
                                    as food trucks, open house flags and balloons</li>
                            </ul>
                        </div>

                        <div class="page-number"
                            style="background-image: url('images/single-property/26.png'); bottom: 1%; margin-right: 70px;margin-top: 100px;">
                            <div class="text" style="margin-top: -50px; margin-right: 150px;">
                                <h3 class="font-thin gold">THE</h3>
                                <h2 class="font-thin">HOME</h2>
                                <h2 class="font-thin gold">SELLING</h2>
                                <h4 class="font-thin">GUIDE</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row-input" style="margin-right: 150px;">
                <div class="flex">
                    <label for="page-27-text-1">Title 1</label>
                    <input type="text" id="page-27-text-1" name="page_27_text_1" value="Broker’s Open" />
                    <label for="page-27-text-2">Title 2</label>
                    <input type="text" id="page-27-text-2" name="page_27_text_2" value="Open Houses" />
                </div>
                <div class="flex">
                    <label for="page-27-text-3">Content 1</label>
                    <textarea id="page-27-text-3" name="page_27_text_3" rows="7">
The LUXE Properties team will host a broker’s open event for select agents who specialize in the area. This will bring cooperating agents and firms together, condensing some of the showing activi-ty into a set timeframe. These events allow us to receive immedi-ate authentic feedback on the home, its price and its competitive qualities when compared to the other homes on the market. Our broker’s open events are marketed through the following avenues:
                        </textarea>
                </div>
                <div class="flex">
                    <label for="page-27-text-4">Content 2</label>
                    <textarea id="page-27-text-4" name="page_27_text_4" rows="7">
Invite prequalified brokers and agents specializing in neighborhood
                        Coordinate with other firms to schedule in sequence for maximum exposure in neighborhood
                        Coordinate with title firms and lenders to expand potential reach
                        </textarea>
                </div>
                <div class="flex">
                    <label for="page-27-text-5">Content 3</label>
                    <textarea id="page-27-text-5" name="page_27_text_5" rows="7">
Public open houses will also be hosted on various weekends in order to ensure we are attracting buyers via every possible avenue. In a study by the National Association of Realtors, 45% of buyers attended open houses as a source of information. The more exposure, the better and this will continually increase the velocity of the sale of your property. Our open houses are marketed through the following avenues:
                        </textarea>
                </div>
                <div class="flex">
                    <label for="page-27-text-6">Content 3</label>
                    <textarea id="page-27-text-6" name="page_27_text_6" rows="7">
Personalized email marketing campaigns to contact database
                        Posting dates and times on the MLS, Zillow, Trulia, Realtor.com and other syndication portals
                        Creative out-of-the-box methods to attract potential buyers such as food trucks, open house flags and balloons
                        </textarea>
                </div>
            </div>
        </div>

        <div class="row-divider"></div>

        <div class="row-divider"></div>

        <div class="row">
            <div class="row-image">
                <div class="page page-28 page-background"
                    style="background-image: url('images/single-property/page-28.png'); margin-left: -90px;">
                    <img src="" id="imageBackground-page-28-1" style="display: none;" />
                    <input hidden name="page_28_img_1" value="images/single-property/page-28.png" />
                    <div class="container">
                        <div class="absolute" style="position: absolute; bottom: 80px; left: 16px;">
                            <h2 class="font-thin white mb-40"
                                style="margin-left: 20px; margin-bottom: -150px; font-size: 80px;">Recent</h2>
                            <h1 class="font-thin gold"
                                style="font-size: 170px; margin-bottom: 40px; margin-left: 40px;">Sales</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="column-divider"></div>
            <div class="row-input">
                <div class="button">
                    <label>Image </label>
                    <button type="button" class="mt-3" onclick="openInputFile('imageBackgroundInput-page-28-1')">Choose Image</button><br>
                    <input type="file" id="imageBackgroundInput-page-28-1"
                        onchange="imageBackgroundInputChanged_page_28_1()" style="display: none;"/>
                    <button type="button" class="mt-1" onclick="startCropper_page_28_1()">Crop</button>
                    <button type="button" onclick="cropImage_page_28_1()">Save Crop</button>
                </div>
            </div>
        </div>
        <div class="row-divider"></div>

        <div class="row">
            <div class="row-image">
                <div class="page page-29"
                    style="overflow: hidden;position: relative; background-size: cover; background-position: -550px -5px; background-repeat: no-repeat;">
                    <img src="" id="imageBackground-page-29-1" style="display: none;" />
                    <input hidden name="page_29_img_1" value="images/single-property/page-29-1.jpg" />
                    <img src="" id="imageBackground-page-29-2" style="display: none;" />
                    <input hidden name="page_29_img_2" value="images/single-property/page-29-1.jpg" />
                    <img src="" id="imageBackground-page-29-3" style="display: none;" />
                    <input hidden name="page_29_img_3" value="images/single-property/page-29-1.jpg" />
                    <img src="" id="imageBackground-page-29-4" style="display: none;" />
                    <input hidden name="page_29_img_4" value="images/single-property/page-29-1.jpg" />
                    <img src="" id="imageBackground-page-29-5" style="display: none;" />
                    <input hidden name="page_29_img_5" value="images/single-property/page-28.png" />
                    <div class="content1" style="margin-top: 80px;">
                        <div class="page-bg-image"
                            style="background-image: url('images/single-property/page-28.png');right: 400px;">
                            <h1></h1>
                        </div>
                        <div class="section1"
                            style="position: relative;
    margin-left: 80px;background-color: #c5a367; padding-top: -e20px; padding-bottom: 15px; margin-bottom: 30px; width: 500px; height: 180px; border-radius: 100px;">
                            <div style="padding-top: 0px; padding-bottom: 10px;">
                                <div class="circle" style="float: left; border-radius: 50%; margin-bottom: 10px;">
                                    <div class="inner-section" style="">
                                        <img id="inner-section1" src="images/single-property/page-29-1.jpg" alt=""
                                            width="130" height="140"
                                            style="border-radius: 500%; margin-left: 5px; padding: 20px; margin-bottom: 20px;padding-top: 25px;" />
                                    </div>
                                </div>
                            </div>
                            <div class="circle-text" style="">
                                <p class="page-29-text-1" style="color: white; font-size: 18px; margin-left: 200px;">
                                    6495 SW 25 Terrace</p>
                                <p class="page-29-text-2"
                                    style="font-size: 14px; margin-left: 200px; margin-bottom: -12px;">PRICE: $2,375,000
                                </p>
                                <p class="page-29-text-3"
                                    style="font-size: 14px; margin-left: 200px; margin-bottom: -12px;">BEDS/BATHS: 6/6
                                </p>
                                <p class="page-29-text-4"
                                    style="font-size: 14px; margin-left: 200px; margin-bottom: -12px;">LIVING AREA:
                                    6,395 SQ FT</p>
                                <p class="page-29-text-5"
                                    style="font-size: 14px; margin-left: 200px; margin-bottom: -12px;">LOT SIZE: 38,768
                                    SQ FT</p>
                                <p class="page-29-text-6"
                                    style="font-size: 14px; margin-left: 200px; margin-bottom: -12px;">DAYS ON
                                    MARKET: 7</p>
                            </div>
                        </div>
                        <div class="content" style="margin-top: 10px;">
                            <div class="section"
                                style="position: relative;
    margin-left: 80px;background-color: #c5a367; padding-top: -e20px; padding-bottom: 15px; margin-bottom: 30px; width: 500px; height: 180px; border-radius: 100px;">
                                <div style="padding-top: 0px; padding-bottom: 10px;">
                                    <div class="circle" style="float: left; border-radius: 50%; margin-bottom: 10px;">
                                        <div class="inner-section">
                                            <img id="inner-section2" src="images/single-property/page-29-1.jpg" alt=""
                                                width="130" height="140"
                                                style="border-radius: 500%; margin-left: 5px; padding: 20px; margin-bottom: 20px;padding-top: 25px;" />
                                        </div>
                                    </div>
                                </div>
                                <div class="circle-text" style="margin-left: -8px;">
                                    <p class="page-29-text-7"
                                        style="color: white; font-size: 18px; margin-left: 200px; margin-top: -5px;">
                                        6495 SW 25 Terrace
                                    </p>
                                    <p class="page-29-text-8"
                                        style="font-size: 14px; margin-left: 200px; margin-bottom: -12px;">PRICE:
                                        $2,375,000</p>
                                    <p class="page-29-text-9"
                                        style="font-size: 14px; margin-left: 200px; margin-bottom: -12px;">BEDS/BATHS:
                                        6/6</p>
                                    <p class="page-29-text-10"
                                        style="font-size: 14px; margin-left: 200px; margin-bottom: -12px;">LIVING AREA:
                                        6,395 SQ FT</p>
                                    <p class="page-29-text-11"
                                        style="font-size: 14px; margin-left: 200px; margin-bottom: -12px;">LOT SIZE:
                                        38,768 SQ FT</p>
                                    <p class="page-29-text-12"
                                        style="font-size: 14px; margin-left: 200px; margin-bottom: -12px;">DAYS ON
                                        MARKET: 7</p>
                                </div>
                            </div>
                            <div class="content" style="margin-top: 10px;">
                                <div class="section"
                                    style="position: relative;
    margin-left: 80px;background-color: #c5a367; padding-top: -e20px; padding-bottom: 15px; margin-bottom: 30px; width: 500px; height: 180px; border-radius: 100px;">
                                    <div style="padding-top: 0px; padding-bottom: 10px;">
                                        <div class="circle"
                                            style="float: left; border-radius: 50%; margin-bottom: 10px;">
                                            <div class="inner-section" style="">
                                                <img id="inner-section3" src="images/single-property/page-29-1.jpg"
                                                    alt="" width="130" height="140"
                                                    style="border-radius: 500%; margin-left: 5px; padding: 20px; margin-bottom: 20px;padding-top: 25px;" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="circle-text" style="margin-left: -8px;">
                                        <p class="page-29-text-13"
                                            style="color: white; font-size: 18px; margin-left: 200px; margin-top: 20px;">
                                            6495 SW 25 Terrace
                                        </p>
                                        <p class="page-29-text-14"
                                            style="font-size: 14px; margin-left: 200px; margin-bottom: -12px;">PRICE:
                                            $2,375,000</p>
                                        <p class="page-29-text-15"
                                            style="font-size: 14px; margin-left: 200px; margin-bottom: -12px;">
                                            BEDS/BATHS: 6/6
                                        </p>
                                        <p class="page-29-text-16"
                                            style="font-size: 14px; margin-left: 200px; margin-bottom: -12px;">LIVING
                                            AREA: 6,395 SQ FT</p>
                                        <p class="page-29-text-17"
                                            style="font-size: 14px; margin-left: 200px; margin-bottom: -12px;">LOT SIZE:
                                            38,768 SQ FT</p>
                                        <p class="page-29-text-18"
                                            style="font-size: 14px; margin-left: 200px; margin-bottom: -12px;">DAYS ON
                                            MARKET: 7</p>
                                    </div>
                                </div>
                                <div class="content" style="margin-top: 10px;">
                                    <div class="section"
                                        style="position: relative;
    margin-left: 80px;background-color: #c5a367; padding-top: -e20px; padding-bottom: 15px; margin-bottom: 0px; width: 500px; height: 180px; border-radius: 100px;">
                                        <div style="padding-top: 0px; padding-bottom: 10px;">
                                            <div class="circle"
                                                style="float: left; border-radius: 50%; margin-bottom: 10px;">
                                                <div class="inner-section" style="">
                                                    <img id="inner-section4" src="images/single-property/page-29-1.jpg"
                                                        alt="" width="130" height="140"
                                                        style="border-radius: 500%; margin-left: 5px; padding: 20px; margin-bottom: 90px;padding-top: 25px;" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="circle-text" style="margin-left: -8px;">
                                            <p class="page-29-text-19"
                                                style="color: white; font-size: 18px; margin-left: 200px;"> 6495 SW 25
                                                Terrace</p>
                                            <p class="page-29-text-20"
                                                style="font-size: 14px; margin-left: 200px; margin-bottom: -12px;">
                                                PRICE: $2,375,000</p>
                                            <p class="page-29-text-21"
                                                style="font-size: 14px; margin-left: 200px; margin-bottom: -12px;">
                                                BEDS/BATHS: 6/6
                                            </p>
                                            <p class="page-29-text-22"
                                                style="font-size: 14px; margin-left: 200px; margin-bottom: -12px;">
                                                LIVING AREA: 6,395 SQ FT</p>
                                            <p class="page-29-text-23"
                                                style="font-size: 14px; margin-left: 200px; margin-bottom: -12px;">LOT
                                                SIZE: 38,768 SQ FT</p>
                                            <p class="page-29-text-24"
                                                style="font-size: 14px; margin-left: 200px; margin-bottom: -12px;">DAYS
                                                ON MARKET: 7</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input" style="">
                <div class="flex">
                    <label for="page-29-text-1">Address</label>
                    <input type="text" id="page-29-text-1" name="page_29_text_1" value="6495 SW 25 Terrace" />

                    <label for="page-29-text-2">Price</label>
                    <input type="text" id="page-29-text-2" name="page_29_text_2" value="PRICE: $2,375,000" />
                </div>
                <div class="flex">
                    <label for="page-29-text-3">Bathroom/Bedroom</label>
                    <input type="text" id="page-29-text-3" name="page_29_text_3" value="BEDS/BATHS: 6/6" />

                    <label for="page-29-text-4">Living Area</label>
                    <input type="text" id="page-29-text-4" name="page_29_text_4" value="LIVING AREA: 6,395 SQ FT" />
                </div>
                <div class="flex">
                    <label for="page-29-text-5">Lot Size</label>
                    <input type="text" id="page-29-text-5" name="page_29_text_5" value="LOT SIZE: 38,768 SQ FT" />

                    <label for="page-29-text-6">Days on Market</label>
                    <input type="text" id="page-29-text-6" name="page_29_text_6" value="DAYS ON MARKET: 7" />
                </div>
                <div class="flex">
                    <div class="button" style="width: 50%;">
                        <label style="margin: 0 !important;">Image 1</label>
                        <button type="button" class="mt-3" onclick="openInputFile('imageBackgroundInput-page-29-1')">Choose Image</button><br>
                        <input type="file" id="imageBackgroundInput-page-29-1"
                                onchange="imageBackgroundInputChanged_page_29_1()" style="display: none;"/>
                        <button type="button" class="mt-1" onclick="startCropper_page_29_1()">Crop</button>
                        <button type="button" onclick="cropImage_page_29_1()">Save Crop</button>
                    </div>
                    <div class="button">
                        <label style="margin: 0 !important;">Image 2</label>
                        <button type="button" class="mt-3" onclick="openInputFile('imageBackgroundInput-page-29-2')">Choose Image</button><br>
                        <input type="file" id="imageBackgroundInput-page-29-2"
                                onchange="imageBackgroundInputChanged_page_29_2()" style="display: none;"/>
                        <button type="button" class="mt-1" onclick="startCropper_page_29_2()">Crop</button>
                        <button type="button" onclick="cropImage_page_29_2()">Save Crop</button>
                    </div>
                </div>
                <div class="flex">
                    <label for="page-29-text-7">Address</label>
                    <input type="text" id="page-29-text-7" name="page_29_text_7" value="6495 SW 25 Terrace" />

                    <label for="page-29-text-8">Price</label>
                    <input type="text" id="page-29-text-8" name="page_29_text_8" value="PRICE: $2,375,000" />
                </div>
                <div class="flex">
                    <label for="page-29-text-9">Bathroom/Bedroom</label>
                    <input type="text" id="page-29-text-9" name="page_29_text_9" value="BEDS/BATHS: 6/6" />

                    <label for="page-29-text-10">Living Area</label>
                    <input type="text" id="page-29-text-10" name="page_29_text_10" value="LIVING AREA: 6,395 SQ FT" />
                </div>
                <div class="flex">
                    <label for="page-29-text-11">Lot Size</label>
                    <input type="text" id="page-29-text-11" name="page_29_text_11" value="LOT SIZE: 38,768 SQ FT" />

                    <label for="page-29-text-12">Days on Market</label>
                    <input type="text" id="page-29-text-12" name="page_29_text_12" value="DAYS ON MARKET: 7" />
                </div>
                <div class="flex">
                    <div class="button" style="width:50%;">
                        <label style="margin: 0 !important;">Image 3</label>
                        <button type="button" class="mt-3" onclick="openInputFile('imageBackgroundInput-page-29-3')">Choose Image</button><br>
                        <input type="file" id="imageBackgroundInput-page-29-3"
                                onchange="imageBackgroundInputChanged_page_29_3()" style="display: none;"/>
                        <button type="button" class="mt-1" onclick="startCropper_page_29_3()">Crop</button>
                        <button type="button" onclick="cropImage_page_29_3()">Save Crop</button>
                    </div>
                    <div class="button">
                        <label style="margin: 0 !important;">Image 4</label>
                        <button type="button" class="mt-3" onclick="openInputFile('imageBackgroundInput-page-29-4')">Choose Image</button><br>
                        <input type="file" id="imageBackgroundInput-page-29-4"
                                onchange="imageBackgroundInputChanged_page_29_4()" style="display: none;"/>
                        <button type="button" class="mt-1" onclick="startCropper_page_29_4()">Crop</button>
                        <button type="button" onclick="cropImage_page_29_4()">Save Crop</button>
                    </div>
                </div>

                <div class="flex">
                    <label for="page-29-text-13">Address</label>
                    <input type="text" id="page-29-text-13" name="page_29_text_13" value="6495 SW 25 Terrace" />

                    <label for="page-29-text-14">Price</label>
                    <input type="text" id="page-29-text-14" name="page_29_text_14" value="PRICE: $2,375,000" />
                </div>
                <div class="flex">
                    <label for="page-29-text-15">Bathroom/Bedroom</label>
                    <input type="text" id="page-29-text-15" name="page_29_text_15" value="BEDS/BATHS: 6/6" />

                    <label for="page-29-text-16">Living Area</label>
                    <input type="text" id="page-29-text-16" name="page_29_text_16" value="LIVING AREA: 6,395 SQ FT" />
                </div>
                <div class="flex">
                    <label for="page-29-text-17">Lot Size</label>
                    <input type="text" id="page-29-text-17" name="page_29_text_17" value="LOT SIZE: 38,768 SQ FT" />

                    <label for="page-29-text-18">Days on Market</label>
                    <input type="text" id="page-29-text-18" name="page_29_text_18" value="DAYS ON MARKET: 7" />
                </div>
                <div class="flex">
                    <label for="page-29-text-19">Address</label>
                    <input type="text" id="page-29-text-19" name="page_29_text_19" value="6495 SW 25 Terrace" />

                    <label for="page-29-text-20">Price</label>
                    <input type="text" id="page-9-text-20" name="page_29_text_20" value="PRICE: $2,375,000" />
                </div>
                <div class="flex">
                    <label for="page-29-text-21">Bathroom/Bedroom</label>
                    <input type="text" id="page-29-text-21" name="page_29_text_21" value="BEDS/BATHS: 6/6" />

                    <label for="page-29-text-22">Living Area</label>
                    <input type="text" id="page-29-text-22" name="page_29_text_22" value="LIVING AREA: 6,395 SQ FT" />
                </div>
                <div class="flex">
                    <label for="page-29-text-23">Lot Size</label>
                    <input type="text" id="page-29-text-23" name="page_29_text_23" value="LOT SIZE: 38,768 SQ FT" />

                    <label for="page-29-text-24">Days on Market</label>
                    <input type="text" id="page-29-text-24" name="page_29_text_24" value="DAYS ON MARKET: 7" />
                </div>
            </div>
        </div>
        <script></script>
        <div class="row-divider"></div>

        <div class="row">
            <div class="row-image">
                <div class="page page-30 page-background"
                    style="background-image: url('images/single-property/page-30.png'); margin-left: -90px;">
                    <img src="" id="imageBackground-page-30-1" style="display: none;" />
                    <input hidden name="page_30_img_1" value="images/single-property/page-30.png" />
                    <div class="container">
                        <div class="absolute" style="position: absolute; bottom: 8px; left: 16px;">
                            <h2 class="font-thin white mb-40"
                                style="margin-left: 10px; margin-bottom: -174px; font-size: 80px;">Recent</h2>
                            <h1 class="font-thin gold" style="font-size: 170px; margin-bottom: 100px;">Listings</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="column-divider"></div>
            <div class="row-input">
                <div class="button">
                    <label>Image</label>
                    <button type="button" class="mt-3" onclick="openInputFile('imageBackgroundInput-page-30-1')">Choose Image</button><br>
                    <input type="file" id="imageBackgroundInput-page-30-1"
                        onchange="imageBackgroundInputChanged_page_30_1()" style="display: none;"/>
                    <button type="button" class="mt-1" onclick="startCropper_page_30_1()">Crop</button>
                    <button type="button" onclick="cropImage_page_30_1()">Save Crop</button>
                </div>
            </div>
        </div>

        <div class="row-divider"></div>

        <div class="row">
            <div class="row-image">
                <div class="page page-31"
                    style="height: 1000px;overflow:hidden;position: absolute; background-size: cover; background-position: -550px -5px; background-repeat: no-repeat; margin-left: -55px;">
                    <img src="" id="imageBackground-page-31-1" style="display: none;" />
                    <input hidden name="page_31_img_1" value="images/home-selling/listing_one.jpg" />
                    <img src="" id="imageBackground-page-31-2" style="display: none;" />
                    <input hidden name="page_31_img_2" value="images/home-selling/listing_one.jpg" />
                    <img src="" id="imageBackground-page-31-3" style="display: none;" />
                    <input hidden name="page_31_img_3" value="images/home-selling/listing_one.jpg" />
                    <img src="" id="imageBackground-page-31-4" style="display: none;" />
                    <input hidden name="page_31_img_4" value="images/home-selling/listing_one.jpg" />
                    <img src="" id="imageBackground-page-31-5" style="display: none;" />
                    <input hidden name="page_31_img_5" value="images/home-selling/listing_one.jpg" />

                    <div class="content" style="margin-top: 70px;">
                        <div class="page-bg-image" style="background-image: url('images/single-property/page-30.png')">
                            <h1></h1>
                        </div>
                        <div class="section1" style="margin-left: 170px;position:relative;">
                            <div style="padding-top: 0px;">
                                <div class="circle"
                                    style="background-color: #c5a367; padding: 10px; border-radius: 600%; margin-top: -20px; width: 175px;">
                                    <div class="inner-section"
                                        style="background-color: white; padding: 5px; border-radius: 550%;">
                                        <img id="page-31-img-1" src="images/single-property/page-29-1.jpg" alt=""
                                            width="166" height="166" style="border-radius: 500%;" />
                                    </div>
                                </div>
                            </div>
                            <div class="circle-text" style="margin-left: 220px; margin-top: -250px;">
                                <p class="page-31-text-1" style="color: #c5a367; font-size: 26px;">6495 SW 15 TERRACE
                                </p>
                                <p class="">PRICE: <span class="page-31-text-2">$2,375,000</span>
                                </p>
                                <p class="">BEDS/BATHS: <span class="page-31-text-3">6/6</span>
                                </p>
                                <p class="">LIVING AREA: <span class="page-31-text-4">6,395 SQ
                                        FT</span></p>
                                <p class="">LOT SIZE: <span class="page-31-text-5">38,768 SQ
                                        FT</span></p>
                            </div>
                        </div>
                        <div class="section" style="margin-top: 100px; margin-left: 120px;position:relative;">
                            <div style="padding-top: 0px;">
                                <div class="circle"
                                    style="background-color: black; padding: 10px; border-radius: 600%; margin-top: -20px; width: 175px;">
                                    <div class="inner-section"
                                        style="background-color: white; padding: 5px; border-radius: 550%;">
                                        <img id="page-31-img-2" src="images/single-property/page-29-1.jpg" alt=""
                                            width="166" height="166" style="border-radius: 500%;" />
                                    </div>
                                </div>
                            </div>
                            <div class="circle-text" style="margin-left: 220px; margin-top: -250px;">
                                <p class="page-31-text-6" style="color: #c5a367; font-size: 26px;">6495 SW 15 TERRACE
                                </p>
                                <p>PRICE: <span class="page-31-text-7">$2,375,000</span></p>
                                <p>BEDS/BATHS: <span class="page-31-text-8">6/6</span></p>
                                <p>LIVING AREA: <span class="page-31-text-9">6,395 SQ FT</span></p>
                                <p>LOT SIZE: <span class="page-31-text-10">38,768 SQ FT</span></p>
                            </div>
                        </div>
                        <div class="section" style="margin-top: 100px; margin-left: 170px;position:relative;">
                            <div style="padding-top: 0px;">
                                <div class="circle"
                                    style="background-color: #c5a367; padding: 10px; border-radius: 600%; margin-top: -20px; width: 175px;">
                                    <div class="inner-section"
                                        style="background-color: white; padding: 5px; border-radius: 550%;">
                                        <img id="page-31-img-3" src="images/single-property/page-29-1.jpg" alt=""
                                            width="166" height="166" style="border-radius: 500%;" />
                                    </div>
                                </div>
                            </div>
                            <div class="circle-text" style="margin-left: 220px; margin-top: -250px;">
                                <p class="page-31-text-11" style="color: #c5a367; font-size: 26px;">6495 SW 15 TERRACE
                                </p>
                                <p>PRICE: <span class="page-31-text-12">$2,375,000</span></p>
                                <p>BEDS/BATHS: <span class="page-31-text-13">6/6</span></p>
                                <p>LIVING AREA: <span class="page-31-text-14">6,395 SQ FT</span></p>
                                <p>LOT SIZE: <span class="page-31-text-15">38,768 SQ FT</span></p>
                            </div>
                        </div>
                        <div class="section" style="margin-top: 100px; margin-left: 120px;position:relative;">
                            <div style="padding-top: 0px;">
                                <div class="circle"
                                    style="background-color: black; padding: 10px; border-radius: 600%; margin-top: -20px; width: 175px;">
                                    <div class="inner-section"
                                        style="background-color: white; padding: 5px; border-radius: 550%;">
                                        <img id="page-31-img-4" src="images/single-property/page-29-1.jpg" alt=""
                                            width="166" height="166" style="border-radius: 500%;" />
                                    </div>
                                </div>
                            </div>
                            <div class="circle-text" style="margin-left: 220px; margin-top: -250px;">
                                <p class="page-31-text-16" style="color: #c5a367; font-size: 26px;">6495 SW 15 TERRACE
                                </p>
                                <p>PRICE: <span class="page-31-text-17">$2,375,000</span></p>
                                <p>BEDS/BATHS: <span class="page-31-text-18">6/6</span></p>
                                <p>LIVING AREA: <span class="page-31-text-19">6,395 SQ FT</span></p>
                                <p>LOT SIZE: <span class="page-31-text-20">38,768 SQ FT</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="column-divider"></div>
            <div class="row-input" style="margin-left: 600px;">
                <div class="flex">
                    <label for="page-31-text-1">Address</label>
                    <input type="text" id="page-31-text-1" name="page_31_text_1" value="6495 SW 15 TERRACE" />

                    <label for="page-31-text-2">Price</label>
                    <input type="text" id="page-31-text-2" name="page_31_text_2" value="$2,375,000" />
                </div>
                <div class="flex">
                    <label for="page-31-text-3">Bathroom/Bedroom</label>
                    <input type="text" id="page-31-text-3" name="page_31_text_3" value="6/6" />

                    <label for="page-31-text-4">Living Area</label>
                    <input type="text" id="page-31-text-4" name="page_31_text_4" value="6,395 SQ FT" />
                </div>
                <div class="flex">
                    <label for="page-31-text-5">Lot Size</label>
                    <input type="text" id="page-31-text-5" name="page_31_text_5" value="38,768 SQ FT" />
                </div>
                <div class="flex">
                    <div class="button" style="width: 50%;">
                        <label style="margin: 0 !important;">Image 1</label>
                        <button type="button" class="mt-3" onclick="openInputFile('imageBackgroundInput-page-31-1')">Choose Image</button><br>
                        <input type="file" id="imageBackgroundInput-page-31-1"
                                onchange="imageBackgroundInputChanged_page_31_1()" style="display: none;"/>
                        <button type="button" class="mt-1" onclick="startCropper_page_31_1()">Crop</button>
                        <button type="button" onclick="cropImage_page_31_1()">Save Crop</button>
                    </div>
                    <div class="button">
                        <label style="margin: 0 !important;">Image 2</label>
                        <button type="button" class="mt-3" onclick="openInputFile('imageBackgroundInput-page-31-2')">Choose Image</button><br>
                        <input type="file" id="imageBackgroundInput-page-31-2"
                                onchange="imageBackgroundInputChanged_page_31_2()" style="display: none;"/>
                        <button type="button" class="mt-1" onclick="startCropper_page_31_2()">Crop</button>
                        <button type="button" onclick="cropImage_page_31_2()">Save Crop</button>
                    </div>
                </div>

                <div class="flex">
                    <label for="page-31-text-6">Address</label>
                    <input type="text" id="page-31-text-6" name="page_31_text_6" value="6495 SW 15 TERRACE" />

                    <label for="page-31-text-20">Price</label>
                    <input type="text" id="page-31-text-7" name="page_31_text_7" value="$2,375,000" />
                </div>
                <div class="flex">
                    <label for="page-31-text-7">Bathroom/Bedroom</label>
                    <input type="text" id="page-31-text-8" name="page_31_text_8" value="6/6" />

                    <label for="page-31-text-8">Living Area</label>
                    <input type="text" id="page-31-text-9" name="page_31_text_9" value="6,395 SQ FT" />
                </div>
                <div class="flex">
                    <label for="page-31-text-9">Lot Size</label>
                    <input type="text" id="page-31-text-10" name="page_31_text_10" value="38,768 SQ FT" />
                </div>
                <div class="flex">
                    <label for="page-31-text-10">Address</label>
                    <input type="text" id="page-31-text-11" name="page_31_text_11" value="6495 SW 15 TERRACE" />

                    <label for="page-31-text-11">Price</label>
                    <input type="text" id="page-31-text-12" name="page_31_text_12" value="$2,375,000" />
                </div>
                <div class="flex">
                    <label for="page-31-text-12">Bathroom/Bedroom</label>
                    <input type="text" id="page-31-text-13" name="page_31_text_13" value="6/6" />

                    <label for="page-31-text-13">Living Area</label>
                    <input type="text" id="page-31-text-14" name="page_31_text_14" value="6,395 SQ FT" />
                </div>
                <div class="flex">
                    <label for="page-31-text-14">Lot Size</label>
                    <input type="text" id="page-31-text-15" name="page_31_text_15" value="38,768 SQ FT" />
                </div>
                <div class="flex">
                    <div class="button" style="width: 50%;">
                        <label style="margin: 0 !important;">Image 3</label>
                        <button type="button" class="mt-3" onclick="openInputFile('imageBackgroundInput-page-31-3')">Choose Image</button><br>
                        <input type="file" id="imageBackgroundInput-page-31-3"
                                onchange="imageBackgroundInputChanged_page_31_3()" style="display: none;"/>
                        <button type="button" class="mt-1" onclick="startCropper_page_31_3()">Crop</button>
                        <button type="button" onclick="cropImage_page_31_3()">Save Crop</button>
                    </div>
                    <div class="button">
                        <label style="margin: 0 !important;">Image 4</label>
                        <button type="button" class="mt-3" onclick="openInputFile('imageBackgroundInput-page-31-4')">Choose Image</button><br>
                        <input type="file" id="imageBackgroundInput-page-31-4"
                                onchange="imageBackgroundInputChanged_page_31_4()" style="display: none;"/>
                        <button type="button" class="mt-1" onclick="startCropper_page_31_4()">Crop</button>
                        <button type="button" onclick="cropImage_page_31_4()">Save Crop</button>
                    </div>
                </div>

                <div class="flex">
                    <label for="page-31-text-15">Address</label>
                    <input type="text" id="page-31-text-16" name="page_31_text_16" value="6495 SW 15 TERRACE" />

                    <label for="page-31-text-17">Price</label>
                    <input type="text" id="page-31-text-17" name="page_31_text_17" value="$2,375,000" />
                </div>
                <div class="flex">
                    <label for="page-31-text-18">Bathroom/Bedroom</label>
                    <input type="text" id="page-31-text-18" name="page_31_text_18" value="6/6" />

                    <label for="page-31-text-19">Living Area</label>
                    <input type="text" id="page-31-text-19" name="page_31_text_19" value="6,395 SQ FT" />
                </div>
                <div class="flex">
                    <label for="page-31-text-20">Lot Size</label>
                    <input type="text" id="page-31-text-20" name="page_31_text_20" value="38,768 SQ FT" />
                </div>
            </div>
        </div>

        <div class="row-divider"></div>

        <div class="row">
            <div class="row-image">
                <div class="page page-32 page-background"
                    style="background-image: url('images/single-property/page-32.png'); margin-left: -90px;">
                    <img src="" id="imageBackground-page-32-1" style="display: none;" />
                    <input hidden name="page_32_img_1" value="images/single-property/page-32.png" />
                    <div class="container">
                        <div class="absolute" style="position: absolute; bottom: 110px; left: 16px;">
                            <h2 class="font-thin white mb-50"
                                style="margin-left: 10px; margin-bottom: -160px; font-size: 80px;">Happy</h2>
                            <h1 class="font-thin gold" style="font-size: 170px; margin-bottom: 20px;">Clients</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="column-divider"></div>
            <div class="row-input">
                <div class="button">
                    <label>Image</label>
                    <button type="button" class="mt-3" onclick="openInputFile('imageBackgroundInput-page-32-1')">Choose Image</button><br>
                    <input type="file" id="imageBackgroundInput-page-32-1"
                        onchange="imageBackgroundInputChanged_page_32_1()" style="display: none;"/>
                    <button type="button" class="mt-1" onclick="startCropper_page_32_1()">Crop</button>
                    <button type="button" onclick="cropImage_page_32_1()">Save Crop</button>
                </div>
            </div>
        </div>

        <div class="row-divider"></div>

        <div class="row">
            <div class="row-image" style="margin-left: -20px;width:800px;">
                <img src="" id="imageBackground-page-33-1" style="display: none;" />
                <input hidden name="page_33_img_1" value="images/single-property/testimonial.png" />
                <img src="" id="imageBackground-page-33-2" style="display: none;" />
                <input hidden name="page_33_img_2" value="images/single-property/testimonial.png" />
                <img src="" id="imageBackground-page-33-3" style="display: none;" />
                <input hidden name="page_33_img_3" value="images/single-property/testimonial.png" />
                <img src="" id="imageBackground-page-33-4" style="display: none;" />
                <input hidden name="page_33_img_4" value="images/single-property/page-32.png" />
                <div class="page page-33"
                    style="overflow:hidden;position: absolute; background-size: cover; background-position: -600px -5px; background-repeat: no-repeat;">
                    <div class="content" style="">
                        <div class="page-bg-image" style="background-image: url('images/single-property/page-32.png')">
                            <h1></h1>
                        </div>
                        <div class="section"
                            style="position: relative;border: 1px solid gray; height: 230px; min-height: 230px; margin: 50px 75px;width:573px;">
                            <img id="section4" src="images/single-property/testimonial.png" alt=""
                                style="float: left; margin-bottom: -30px;" width="230px" height="230px" />
                            <div class="text" style="left: 237px;
                                        padding-right: 20px;    
                                        position: absolute;">
                                <p class="page-33-text-1"
                                    style="font-weight: 300; font-size: 16px; margin-bottom: -10px;">
                                    "Awesomeness Customer Services!!! Dedication and Total commitment to his client's,
                                    He help us with care to ﬁnd us our Home. We highly recommend Mrs. Fernando Grullon"
                                </p>
                                <p class="page-33-text-3"
                                    style="font-size: 22px; color: #c5a367; margin-left: 25px; margin-bottom: 180px;">-
                                    Mrs. Mercy</p>
                            </div>
                        </div>
                        <img src="images/home-selling/divider-1.png" alt="" height="230px"
                            style="position: absolute; z-index: 100; left: 190px; top: 52px;" />

                        <div class="section"
                            style="position: relative;border: 1px solid gray; height: 230px; min-height: 230px; margin: 50px 75px; width:573px;">
                            <img id="section5" src="images/single-property/testimonial.png" alt=""
                                style="float: left; margin-bottom: -30px;" width="230px" height="230px" />
                            <div class="text" style="left: 237px;
                                            padding-right: 20px;    
                                            position: absolute;">
                                <p class="page-33-text-2"
                                    style="font-weight: 300; font-size: 16px; margin-bottom: -10px;">
                                    "Awesomeness Customer Services!!! Dedication and Total commitment to his client's,
                                    He help us with care to ﬁnd us our Home. We highly recommend Mrs. Fernando Grullon"
                                </p>
                                <p class="page-33-text-4"
                                    style="font-size: 22px; color: #c5a367; margin-left: 25px; margin-bottom: 180px;">-
                                    Mrs. Mercy</p>
                            </div>
                        </div>
                        <img src="images/home-selling/divider-1.png" alt="" height="230px"
                            style="position: absolute; z-index: 100; left: 190px; top: 333px;" />

                        <div class="section"
                            style="position: relative;border: 1px solid gray; height: 230px; min-height: 230px; margin: 50px 75px;width:573px;">
                            <img id="section6" src="images/single-property/testimonial.png" alt=""
                                style="float: left; margin-bottom: -30px;" width="230px" height="230px" />
                            <div class="text" style="left: 237px;
                                                    padding-right: 20px;    
                                                    position: absolute;">
                                <p class="page-33-text-5"
                                    style="font-weight: 300; font-size: 16px; margin-bottom: -10px;">
                                    "Awesomeness Customer Services!!! Dedication and Total commitment to his client's,
                                    He help us with care to ﬁnd us our Home. We highly recommend Mrs. Fernando Grullon"
                                </p>
                                <p class="page-33-text-6" style="font-size: 22px; color: #c5a367; margin-left: 25px;">-
                                    Mrs. Mercy</p>
                            </div>
                        </div>
                        <img src="images/home-selling/divider-1.png" alt="" height="230px"
                            style="position: absolute; z-index: 100; left: 190px; top: 615px;" />
                    </div>
                </div>
            </div>
            <div class="row-input">
                <div class="flex">
                    <label for="page-33-text-1">Content 1</label>
                    <textarea id="page-33-text-1" name="page_33_text_1" rows="4">
"Awesomeness Customer Services!!! Dedication and Total commitment to his client's, He help us with care to ﬁnd us our Home. We highly recommend Mrs. Fernando Grullon"
</textarea>
                    <label for="page-33-text-2">Content 2</label>
                    <textarea id="page-33-text-2" name="page_33_text_2" rows="4">
                            "Awesomeness Customer Services!!! Dedication and Total commitment to his client's, He help us with care to ﬁnd us our Home. We highly recommend Mrs. Fernando Grullon"
</textarea>
                </div>
                <div class="flex" style="">
                    <label for="page-33-text-3" style="">Author 1</label>
                    <input type="text" id="page-33-text-3" name="page_33_text_3" value="- Mrs. Mercy
                    " />

                    <label for="page-33-text-4">Author 2</label>
                    <input type="text" id="page-33-text-4" name="page_33_text_4" value="- The Santos Family
                    " />
                </div>
                <div class="flex">
                    <div class="button" style="width: 50%;">
                        <label style="margin: 0 !important;">Image 1 </label>
                        <button type="button" class="mt-3" onclick="openInputFile('imageBackgroundInput-page-33-1')">Choose Image</button><br>
                        <input type="file" id="imageBackgroundInput-page-33-1"
                                onchange="imageBackgroundInputChanged_page_33_1()" style="display: none;"/>
                        <button type="button" class="mt-1" onclick="startCropper_page_33_1()">Crop</button>
                        <button type="button" onclick="cropImage_page_33_1()">Save Crop</button>
                    </div>
                    <div class="button">
                        <label style="margin: 0 !important;">Image 2 </label>
                        <button type="button" class="mt-3" onclick="openInputFile('imageBackgroundInput-page-33-2')">Choose Image</button><br>
                        <input type="file" id="imageBackgroundInput-page-33-2"
                                onchange="imageBackgroundInputChanged_page_33_2()" style="display: none;"/>
                        <button type="button" class="mt-1" onclick="startCropper_page_33_2()">Crop</button>
                        <button type="button" onclick="cropImage_page_33_2()">Save Crop</button>
                    </div>
                </div>
                <div class="flex">
                    <label for="page-33-text-5">Content 3</label>
                    <textarea id="page-33-text-5" name="page_33_text_5" rows="4">
                            "Awesomeness Customer Services!!! Dedication and Total commitment to his client's, He help us with care to ﬁnd us our Home. We highly recommend Mrs. Fernando Grullon"
                    </textarea>
                </div>
                <div class="flex">
                    <label for="page-33-text-6">Author 3</label>
                    <input type="text" id="page-33-text-6" name="page_33_text_6" value="- Mr. Gunderman
                    " />
                </div>
                <div class="button">
                    <label>Image 3</label>
                    <button type="button" class="mt-3" onclick="openInputFile('imageBackgroundInput-page-33-3')">Choose Image</button><br>
                    <input type="file" id="imageBackgroundInput-page-33-3"
                        onchange="imageBackgroundInputChanged_page_33_3()" style="display: none;"/>
                    <button type="button" class="mt-1" onclick="startCropper_page_33_3()">Crop</button>
                    <button type="button" onclick="cropImage_page_33_3()">Save Crop</button>
                </div>
            </div>
        </div>

        {{-- --}}

        <div class="row-divider"></div>

        <div class="row">
            <div class="row-image">
                <div class="page page-34 page-background"
                    style="background-image: url('images/single-property/page-34.png'); margin-left: -90px;">
                    <img src="" id="imageBackground-page-34-1" style="display: none;" />
                    <input hidden name="page_34_img_1" value="images/single-property/page-34.png" />

                    <div class="container">
                        <div class="absolute" style="position: absolute; bottom: 80px; left: 16px;">
                            <h2 class="font-thin white mb-50"
                                style="margin-left: 200px; margin-bottom: -120px; font-size: 80px;">LUXE</h2>
                            <h1 class="font-thin gold" style="font-size: 120px; margin-bottom: 90px;">Testimonials</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="column-divider"></div>
            <div class="row-input">
                <div class="button">
                    <label>Image</label>
                    <button type="button" class="mt-3" onclick="openInputFile('imageBackgroundInput-page-34-1')">Choose Image</button><br>
                    <input type="file" id="imageBackgroundInput-page-34-1"
                        onchange="imageBackgroundInputChanged_page_34_1()" style="display: none;"/>
                    <button type="button" class="mt-1" onclick="startCropper_page_34_1()">Crop</button>
                    <button type="button" onclick="cropImage_page_34_1()">Save Crop</button>
                </div>
            </div>
        </div>

        <div class="row-divider"></div>

        <div class="row">
            <div class="row-image">
                <div class="page page-35 page-background"
                    style="background-image: url('images/home-selling/Asset 22.jpg'); margin-left: -650px;">
                    <div class="container">
                        <div class="absolute" style="position: absolute; bottom: 80px; left: 16px;"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="column-divider"></div>
        <div class="row-input"></div>

        <div class="row-divider"></div>

        <div class="row">
            <div class="row-image" style="width:1000px;">
                <div class="page_break"></div>

                <div class="page-36">
                    <div class="page-bottom text-center">
                        <img src="images/last.png" alt="" />
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input" style="margin:0;">
                <div class="button mt-3">
                    <button type="submit" name="action" value="Generate" class="generate" style="">Generate</button>
                    {{--<button type="submit" name="action" value="Save" class="generate">Save</button>

                    <br />
                    JSON Upload:
                    <input type="file" id="jsonFileUpload" onchange="jsonFileUploaded()" />--}}
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
        export_var.text(event_element.val());
    });
    
    // $(document).ready(function() {        
        $("textarea").change(function(event) {
            var event_id = event.target.id;
            console.log(event_id);
        if (event_id == "page-3-text-4") {
            var text = $("#page-3-text-4").val();
            var array = document.getElementsByClassName("page-3-text-4");
            var textarea = array[0];
            textarea.innerHTML = text;
        } 
        else if (event_id == "page-3-text-5") {
                var text = $("#page-3-text-5").val();
                var array = document.getElementsByClassName("page-3-text-5");
                var textarea = array[0];
                textarea.innerHTML = text;
            } else if (event_id == "page-5-text-3") {
                var arrayOfLines = $('#page-5-text-3').val().split('\n');
                var text = "";
                var i;
                for (i = 0; i < arrayOfLines.length; i++) {
                    text += "<p class='font-thin'>" + arrayOfLines[i] + "</p>";
                }
                $('.page-5-text-3').html(text);
            } else if (event_id == "page-7-text-5") {
                var text = $("#page-7-text-5").val();
                var array = document.getElementsByClassName("page-7-text-5");
                var textarea = array[0];
                textarea.innerHTML = text;
            } else if (event_id == "page-7-text-7") {
                var text = $("#page-7-text-7").val();
                var array = document.getElementsByClassName("page-7-text-7");
                var textarea = array[0];
                textarea.innerHTML = text;
            } else if (event_id == "page-7-text-9") {
                var text = $("#page-7-text-9").val();
                var array = document.getElementsByClassName("page-7-text-9");
                var textarea = array[0];
                textarea.innerHTML = text;
            } else if (event_id == "page-9-text-13") {
                var text = $("#page-9-text-13").val();
                $(".page-9-text-13").html(text);
            } else if (event_id == "page-11-text-1") {
                var text = $("#page-11-text-1").val();
                $(".page-11-text-1").html(text);
            } else if (event_id == "page-11-text-2") {
                var text = $("#page-11-text-2").val();
                $(".page-11-text-2").html(text);
            } 
            else if (event_id == "page-11-text-3") {
                var arrayOfLines = $('#page-11-text-3').val().split('\n');
                var text = "";
                var i;
                for (i = 0; i < arrayOfLines.length; i++) {
                    text += "<li>" + arrayOfLines[i] + "</li>";
                }
                document.getElementsByClassName("page-11-text-3")[0].innerHTML = text;                
            } 
            else if (event_id == "page-11-text-4") {
                var text = $("#page-11-text-4").val();
                $(".page-11-text-4").html(text);
            } 
            else if (event_id == "page-13-text-1") {
                var arrayOfLines = $('#page-13-text-1').val().split('\n');
                var text = "";
                var i;
                for (i = 0; i < arrayOfLines.length; i++) { text +="<li>" + arrayOfLines[i] + "</li>" ; }
                $('.page-13-text-1').html(text);
            } else if (event_id == "page-13-text-2") {
                var arrayOfLines = $('#page-13-text-2').val().split('\n');
                var text = "";
                var i;
                for (i = 0; i < arrayOfLines.length; i++) { text +="<li>" + arrayOfLines[i] + "</li>" ; }
                    $('.page-13-text-2').html(text);
            } else if (event_id == "page-13-text-3") {
                var arrayOfLines = $('#page-13-text-3').val().split('\n');
                var text = "";
                var i;
                for (i = 0; i < arrayOfLines.length; i++) { text +="<li>" + arrayOfLines[i] + "</li>" ; }
                    $('.page-13-text-3').html(text);
            } 
            else if (event_id == "page-13-text-4") {
                var arrayOfLines = $('#page-13-text-4').val().split('\n');
                var text = "";
                var i;
                for (i = 0; i < arrayOfLines.length; i++) { text +="<li>" + arrayOfLines[i] + "</li>" ; }
                    $('.page-13-text-4').html(text);
            }
            else if (event_id == "page-13-text-5") {
                var arrayOfLines = $('#page-13-text-5').val().split('\n');
                var text = "";
                var i;
                for (i = 0; i < arrayOfLines.length; i++) { text +="<li>" + arrayOfLines[i] + "</li>" ; }
                    $('.page-13-text-5').html(text);
            }
            else if (event_id == "page-15-text-3") {
                var text = $("#page-15-text-3").val();
                $(".page-15-text-3").html(text);
            }
            else if (event_id == "page-15-text-4") {
                var text = $("#page-15-text-4").val();
                $(".page-15-text-4").html(text);
            }
            else if (event_id == "page-15-text-9") {
                var text = $("#page-15-text-9").val();
                $(".page-15-text-9").html(text);
            }
            else if (event_id == "page-17-text-1") {
                var text = $("#page-17-text-1").val();
                $(".page-17-text-1").html(text);
            }
            else if (event_id == "page-17-text-2") {
                var arrayOfLines = $('#page-17-text-2').val().split('\n');
                var text = "";
                var i;
                for (i = 0; i < arrayOfLines.length; i++) { text +="<li style='margin-bottom: 15px; font-weight: 400; margin-left: 200px;'>" + arrayOfLines[i] + "</li>" ; }
                    $('.page-17-text-2').html(text);
            }
            else if (event_id == "page-17-text-3") {
                var text = $("#page-17-text-3").val();
                $(".page-17-text-3").html(text);
            }
            else if (event_id == "page-17-text-4") {
                var arrayOfLines = $('#page-17-text-4').val().split('\n');
                var text = "";
                var i;
                for (i = 0; i < arrayOfLines.length; i++) { text
                    +="<li style='margin-bottom: 15px; font-weight: 400; margin-left: 200px;'>" + arrayOfLines[i] + "</li>" ; }
                    $('.page-17-text-4').html(text);
            }
            else if (event_id == "page-19-text-1") {
                var text = $("#page-19-text-1").val();
                $(".page-19-text-1").html(text);
            }
            else if (event_id == "page-19-text-2") {                
                var text = $("#page-19-text-2").val();
                $(".page-19-text-2").html(text);
            }
            else if (event_id == "page-19-text-3") {
                var arrayOfLines = $('#page-19-text-3').val().split('\n');
                var text = "";
                var i;
                for (i = 0; i < arrayOfLines.length; i++) { text
                    +="<li style='margin-bottom: 5px; font-weight: 400; margin-left: -50px;'>" + arrayOfLines[i] + "</li>" ; }
                    $('.page-19-text-3').html(text);
            }
            else if (event_id == "page-19-text-4") {
                var arrayOfLines = $('#page-19-text-4').val().split('\n');
                var text = "";
                var i;
                for (i = 0; i < arrayOfLines.length; i++) { text
                    +="<li style='margin-bottom: 5px; font-weight: 400; margin-left: -50px;'>" + arrayOfLines[i] + "</li>" ; }
                    $('.page-19-text-3').html(text);
            }
            else if (event_id == "page-19-text-5") {
                var text = $("#page-19-text-5").val();
                $(".page-19-text-5").html(text);
            }
            else if (event_id == "page-21-text-2") {
                var text = $("#page-21-text-2").val();
                $(".page-21-text-2").html(text);
            }
            else if (event_id == "page-21-text-4") {
                var text = $("#page-21-text-4").val();
                $(".page-21-text-4").html(text);
            }
            else if (event_id == "page-21-text-6") {
                var text = $("#page-21-text-6").val();
                $(".page-21-text-6").html(text);
            }
            else if (event_id == "page-22-text-2") {
                var text = $("#page-22-text-2").val();
                $(".page-22-text-2").html(text);
            }
            else if (event_id == "page-23-text-2") {
                var text = $("#page-23-text-2").val();
                $(".page-23-text-2").html(text);
            }
            else if (event_id == "page-23-text-4") {
                var text = $("#page-23-text-4").val();
                $(".page-23-text-4").html(text);
            }
            else if (event_id == "page-23-text-6") {
                var text = $("#page-23-text-6").val();
                $(".page-23-text-6").html(text);
            }
            else if (event_id == "page-25-text-1") {
                var text = $("#page-25-text-1").val();
                $(".page-25-text-1").html(text);
            }
            else if (event_id == "page-27-text-3") {
               var text = $("#page-27-text-3").val();
               $(".page-27-text-3").html(text);
            }
            else if (event_id == "page-27-text-4") {
                var arrayOfLines = $('#page-27-text-4').val().split('\n');
                var text = "";
                var i;
                for (i = 0; i < arrayOfLines.length; i++) { text
                    +="<li>" + arrayOfLines[i] + "</li>" ; }
                    $('.page-27-text-4').html(text);
            }
            else if (event_id == "page-27-text-5") {
                var text = $("#page-27-text-5").val();
                $(".page-27-text-5").html(text);
            }
            else if (event_id == "page-27-text-6") {
                var arrayOfLines = $('#page-27-text-6').val().split('\n');
                var text = "";
                var i;
                for (i = 0; i < arrayOfLines.length; i++) { text +="<li>" + arrayOfLines[i] + "</li>" ; }
                    $('.page-27-text-6').html(text); 
            }
            else if (event_id == "page-33-text-1") {
                var text = $("#page-33-text-1").val();
                $(".page-33-text-1").html(text);
            }
            else if (event_id == "page-33-text-2") {
                var text = $("#page-33-text-2").val();
                $(".page-33-text-2").html(text);
            }
            else if (event_id == "page-33-text-5") {
                var text = $("#page-33-text-5").val();
                $(".page-33-text-5").html(text);
            }
            // var event_element = $("#" + event_id)
            // var export_var = $("." + event_id);
            // export_var.text(event_element.val());
        });
    // });
</script>

<script>
    var cropper;

        function startCropper() {
            var image = document.getElementById("imageBackground");
            $(".page-4.page-4-1 .text").css("display", "none");
            cropper = new Cropper(image, {
                minContainerHeight: 500,
            });
        }

        function imageBackgroundInputChanged() {
            var form_data = new FormData();
            form_data.append("file", $("#imageBackgroundInput")[0].files[0]);
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: "post",
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    "X-CSRF-Token": $('[name="_token"]').val(),
                },
                success: function (output) {
                    $("#imageBackground").attr("src", "uploadedimages/" + output);
                    getBase64Image(document.getElementById("imageBackground"), function (base64) {
                        $(".page-4-1 .luxe-pro-info").css("background-image", "url("+ base64 + ")");
                        $(".page-4-1").css("background-image", "url("+ base64 + ")");
                        $("input[name=page_4_1_img_1]").val("uploadedimages/" + output);
                    });
                },
            });
        }

        function cropImage() {
            cropper.getCroppedCanvas().toBlob(
                (blob) => {
                    console.log("getCroppedCanvas");
                    const form_data = new FormData();
                    form_data.append("file", blob, "example.png");
                    $.ajax({
                        url: '/uploadimage',
                        data: form_data,
                        type: "post",
                        cache: false,
                        contentType: false,
                        processData: false,
                        headers: {
                            "X-CSRF-Token": $('[name="_token"]').val(),
                        },
                        success: function (output) {
                            cropper.destroy();
                            $("#imageBackground").attr("src", "uploadedimages/" + output);
                            getBase64Image(document.getElementById("imageBackground"), function (base64) {
                                $(".page-4-1 .luxe-pro-info").css("background-image", "url("+ base64 + ")");
                                $("input[name=page_4_1_img_1]").val(base64);
                            });
                            $(".page-4.page-4-1 .text").css("display", "block");
                        },
                    });
                } /*, 'image/png' */
            );
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
            jQuery.each(obj, function (i, val) {
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
                //     $(item).html(val);
                // } else if (itemAttributeToReplace == "VAL") {
                //     $(item).val(val);
                // } else {
                //     $(item).attr(itemAttributeToReplace, val)
                // }
                $(item).trigger("change");
            });
        }

        function convert(oldImag, callback) {
            var img = new Image();
            img.onload = function () {
                callback(img);
            };
            img.setAttribute("crossorigin", "anonymous");
            img.src = oldImag.src;
        }

        function getBase64Image(img, callback) {
            convert(img, function (newImg) {
                var canvas = document.createElement("canvas");
                canvas.width = newImg.width;
                canvas.height = newImg.height;
                var ctx = canvas.getContext("2d");
                ctx.drawImage(newImg, 0, 0);
                var base64 = canvas.toDataURL("image/png");
                callback(base64);
            });
        }
        function startCropper_page_2_1() {
            var image = document.getElementById("imageBackground-page-2-1");
            $(".page-2 .absolute").css("display", "none");
            cropper = new Cropper(image, {
                minContainerHeight: 500,
                aspectRatio:0.71
            });
        }

        function imageBackgroundInputChanged_page_2_1() {
            var form_data = new FormData();
            form_data.append("file", $("#imageBackgroundInput-page-2-1")[0].files[0]);
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: "post",
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    "X-CSRF-Token": $('[name="_token"]').val(),
                },
                success: function (output) {
                    $("#imageBackground-page-2-1").attr("src", "uploadedimages/" + output);
                    getBase64Image(document.getElementById("imageBackground-page-2-1"), function (base64) {
                        $(".page-2 ").css("background-image", "url(uploadedimages/"+ output + ")");
                        $("input[name=page_2_1_img_1]").val("uploadedimages/" + output);
                    });
                },
            });
        }

        function cropImage_page_2_1() {
            cropper.getCroppedCanvas().toBlob(
                (blob) => {
                    console.log("getCroppedCanvas");
                    const form_data = new FormData();
                    form_data.append("file", blob, "example.png");
                    $.ajax({
                        url: '/uploadimage',
                        data: form_data,
                        type: "post",
                        cache: false,
                        contentType: false,
                        processData: false,
                        headers: {
                            "X-CSRF-Token": $('[name="_token"]').val(),
                        },
                        success: function (output) {
                            cropper.destroy();
                            $("#imageBackground-page-2-1").attr("src", "uploadedimages/" + output);
                            getBase64Image(document.getElementById("imageBackground-page-2-1"), function (base64) {
                                $(".page-2 ").css("background-image", "url(uploadedimages/"+ output + ")");
                                $("input[name=page_2_1_img_1]").val("uploadedimages/" + output);
                            });
                            $(".page-2 .absolute ").css("display", "block");
                        },
                    });
                } /*, 'image/png' */
            );
        }
        function startCropper_page_4_1() {
            var image = document.getElementById("imageBackground-page-4-1");
            $(".page-4 .absolute").css("display", "none");
            cropper = new Cropper(image, {
                minContainerHeight: 500,
                aspectRatio:0.71
            });
        }

        function imageBackgroundInputChanged_page_4_1() {
            var form_data = new FormData();
            form_data.append("file", $("#imageBackgroundInput-page-4-1")[0].files[0]);
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: "post",
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    "X-CSRF-Token": $('[name="_token"]').val(),
                },
                success: function (output) {
                    $("#imageBackground-page-4-1").attr("src", "uploadedimages/" + output);
                    getBase64Image(document.getElementById("imageBackground-page-4-1"), function (base64) {
                        $(".page-4 ").css("background-image", "url(uploadedimages/"+ output + ")");
                        $("input[name=page_4_img_1]").val("uploadedimages/" + output);
                    });
                },
            });
        }

        function cropImage_page_4_1() {
            cropper.getCroppedCanvas().toBlob(
                (blob) => {
                    console.log("getCroppedCanvas");
                    const form_data = new FormData();
                    form_data.append("file", blob, "example.png");
                    $.ajax({
                        url: '/uploadimage',
                        data: form_data,
                        type: "post",
                        cache: false,
                        contentType: false,
                        processData: false,
                        headers: {
                            "X-CSRF-Token": $('[name="_token"]').val(),
                        },
                        success: function (output) {
                            cropper.destroy();
                            $("#imageBackground-page-4-1").attr("src", "uploadedimages/" + output);
                            getBase64Image(document.getElementById("imageBackground-page-4-1"), function (base64) {
                                $(".page-4 ").css("background-image", "url(uploadedimages/"+ output + ")");
                                $("input[name=page_4_img_1]").val("uploadedimages/" + output);
                            });
                            $(".page-4 .absolute ").css("display", "block");
                        },
                    });
                } /*, 'image/png' */
            );
        }

        function startCropper_page_6_1() {
            var image = document.getElementById("imageBackground-page-6-1");
            $(".page-6 .absolute").css("display", "none");
            cropper = new Cropper(image, {
                minContainerHeight: 500,
                aspectRatio:0.71
            });
        }

        function imageBackgroundInputChanged_page_6_1() {
            var form_data = new FormData();
            form_data.append("file", $("#imageBackgroundInput-page-6-1")[0].files[0]);
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: "post",
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    "X-CSRF-Token": $('[name="_token"]').val(),
                },
                success: function (output) {
                    $("#imageBackground-page-6-1").attr("src", "uploadedimages/" + output);
                    getBase64Image(document.getElementById("imageBackground-page-6-1"), function (base64) {
                        $(".page-6").css("background-image", "url(uploadedimages/"+ output + ")");
                        $("input[name=page_6_img_1]").val("uploadedimages/" + output);
                    });
                },
            });
        }

        function cropImage_page_6_1() {
            cropper.getCroppedCanvas().toBlob(
                (blob) => {
                    console.log("getCroppedCanvas");
                    const form_data = new FormData();
                    form_data.append("file", blob, "example.png");
                    $.ajax({
                        url: '/uploadimage',
                        data: form_data,
                        type: "post",
                        cache: false,
                        contentType: false,
                        processData: false,
                        headers: {
                            "X-CSRF-Token": $('[name="_token"]').val(),
                        },
                        success: function (output) {
                            cropper.destroy();
                            $("#imageBackground-page-6-1").attr("src", "uploadedimages/" + output);
                            getBase64Image(document.getElementById("imageBackground-page-6-1"), function (base64) {
                                $(".page-6").css("background-image", "url(uploadedimages/"+ output + ")");
                                $("input[name=page_6_img_1]").val("uploadedimages/" + output);
                            });
                            $(".page-6 .absolute").css("display", "block");
                        },
                    });
                } /*, 'image/png' */
            );
        }

        function startCropper_page_8_1() {
            var image = document.getElementById("imageBackground-page-8-1");
            $(".page-8 .absolute").css("display", "none");
            cropper = new Cropper(image, {
                minContainerHeight: 500,
                aspectRatio:0.71
            });
        }

        function imageBackgroundInputChanged_page_8_1() {
            var form_data = new FormData();
            form_data.append("file", $("#imageBackgroundInput-page-8-1")[0].files[0]);
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: "post",
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    "X-CSRF-Token": $('[name="_token"]').val(),
                },
                success: function (output) {
                    $("#imageBackground-page-8-1").attr("src", "uploadedimages/" + output);
                    getBase64Image(document.getElementById("imageBackground-page-8-1"), function (base64) {
                        $(".page-8").css("background-image", "url(uploadedimages/"+ output + ")");
                        $("input[name=page_8_img_1]").val("uploadedimages/" + output);
                        $(".page-9 .page-bg-image").css("background-image", "url(uploadedimages/"+ output + ")");
                        $("input[name=page_9_img_1]").val("uploadedimages/" + output);
                    });
                },
            });
        }

        function cropImage_page_8_1() {
            cropper.getCroppedCanvas().toBlob(
                (blob) => {
                    console.log("getCroppedCanvas");
                    const form_data = new FormData();
                    form_data.append("file", blob, "example.png");
                    $.ajax({
                        url: '/uploadimage',
                        data: form_data,
                        type: "post",
                        cache: false,
                        contentType: false,
                        processData: false,
                        headers: {
                            "X-CSRF-Token": $('[name="_token"]').val(),
                        },
                        success: function (output) {
                            cropper.destroy();
                            $("#imageBackground-page-8-1").attr("src", "uploadedimages/" + output);
                            getBase64Image(document.getElementById("imageBackground-page-8-1"), function (base64) {
                                $(".page-8").css("background-image", "url(uploadedimages/"+ output + ")");
                                $("input[name=page_8_img_1]").val("uploadedimages/" + output);
                                $(".page-9 .page-bg-image").css("background-image", "url(uploadedimages/"+ output + ")");
                                $("input[name=page_9_img_1]").val("uploadedimages/" + output);
                            });
                            $(".page-8 .absolute").css("display", "block");
                        },
                    });
                } /*, 'image/png' */
            );
        }
        function startCropper_page_9_1() {
            var image = document.getElementById("imageBackground-page-9-1");
            $(".page-9 .absolute").css("display", "none");
            cropper = new Cropper(image, {
                minContainerHeight: 500,
            });
        }

        function imageBackgroundInputChanged_page_9_1() {
            var form_data = new FormData();
            form_data.append("file", $("#imageBackgroundInput-page-9-1")[0].files[0]);
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: "post",
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    "X-CSRF-Token": $('[name="_token"]').val(),
                },
                success: function (output) {
                    $("#imageBackground-page-9-1").attr("src", "uploadedimages/" + output);
                    getBase64Image(document.getElementById("imageBackground-page-9-1"), function (base64) {
                        $(".page-9 ").css("background-image", "url(uploadedimages/"+ output + ")");
                        $("input[name=page_9_img_1]").val("uploadedimages/" + output);
                    });
                },
            });
        }

        function cropImage_page_9_1() {
            cropper.getCroppedCanvas().toBlob(
                (blob) => {
                    console.log("getCroppedCanvas");
                    const form_data = new FormData();
                    form_data.append("file", blob, "example.png");
                    $.ajax({
                        url: '/uploadimage',
                        data: form_data,
                        type: "post",
                        cache: false,
                        contentType: false,
                        processData: false,
                        headers: {
                            "X-CSRF-Token": $('[name="_token"]').val(),
                        },
                        success: function (output) {
                            cropper.destroy();
                            $("#imageBackground-page-9-1").attr("src", "uploadedimages/" + output);
                            getBase64Image(document.getElementById("imageBackground-page-9-1"), function (base64) {
                                $(".page-9 ").css("background-image", "url(uploadedimages/"+ output + ")");
                                $("input[name=page_9_img_1]").val("uploadedimages/" + output);
                            });
                            $(".page-9 .absolute ").css("display", "block");
                        },
                    });
                } /*, 'image/png' */
            );
        }
        function startCropper_page_10_1() {
            var image = document.getElementById("imageBackground-page-10-1");
            $(".page-10 .absolute").css("display", "none");
            cropper = new Cropper(image, {
                minContainerHeight: 500,
                aspectRatio:0.71
            });
        }

        function imageBackgroundInputChanged_page_10_1() {
            var form_data = new FormData();
            form_data.append("file", $("#imageBackgroundInput-page-10-1")[0].files[0]);
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: "post",
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    "X-CSRF-Token": $('[name="_token"]').val(),
                },
                success: function (output) {
                    $("#imageBackground-page-10-1").attr("src", "uploadedimages/" + output);
                    getBase64Image(document.getElementById("imageBackground-page-10-1"), function (base64) {
                        $(".page-10").css("background-image", "url(uploadedimages/"+ output + ")");
                        $("input[name=page_10_img_1]").val("uploadedimages/" + output);
                        $(".page-11 .page-bg-image").css("background-image", "url(uploadedimages/"+ output + ")");
                        $("input[name=page_11_img_1]").val("uploadedimages/" + output);
                    });
                },
            });
        }

        function cropImage_page_10_1() {
            cropper.getCroppedCanvas().toBlob(
                (blob) => {
                    console.log("getCroppedCanvas");
                    const form_data = new FormData();
                    form_data.append("file", blob, "example.png");
                    $.ajax({
                        url: '/uploadimage',
                        data: form_data,
                        type: "post",
                        cache: false,
                        contentType: false,
                        processData: false,
                        headers: {
                            "X-CSRF-Token": $('[name="_token"]').val(),
                        },
                        success: function (output) {
                            cropper.destroy();
                            $("#imageBackground-page-10-1").attr("src", "uploadedimages/" + output);
                            getBase64Image(document.getElementById("imageBackground-page-10-1"), function (base64) {
                                $(".page-10 ").css("background-image", "url(uploadedimages/"+ output + ")");
                                $("input[name=page_10_img_1]").val("uploadedimages/" + output);
                                $(".page-11").css("background-image", "url(uploadedimages/"+ output + ")");
                                $("input[name=page_11_img_1]").val("uploadedimages/" + output);
                            });
                            $(".page-10 .absolute ").css("display", "block");
                        },
                    });
                } /*, 'image/png' */
            );
        }
        function startCropper_page_11_1() {
            var image = document.getElementById("imageBackground-page-11-1");
            $(".page-11 .container").css("display", "none");
            cropper = new Cropper(image, {
                minContainerHeight: 500,
            });
        }

        function imageBackgroundInputChanged_page_11_1() {
            var form_data = new FormData();
            form_data.append("file", $("#imageBackgroundInput-page-11-1")[0].files[0]);
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: "post",
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    "X-CSRF-Token": $('[name="_token"]').val(),
                },
                success: function (output) {
                    $("#imageBackground-page-11-1").attr("src", "uploadedimages/" + output);
                    getBase64Image(document.getElementById("imageBackground-page-11-1"), function (base64) {
                        $(".page-11").css("background-image", "url(uploadedimages/"+ output + ")");
                        $("input[name=page_11_img_1]").val("uploadedimages/" + output);
                    });
                },
            });
        }

        function cropImage_page_11_1() {
            cropper.getCroppedCanvas().toBlob(
                (blob) => {
                    console.log("getCroppedCanvas");
                    const form_data = new FormData();
                    form_data.append("file", blob, "example.png");
                    $.ajax({
                        url: '/uploadimage',
                        data: form_data,
                        type: "post",
                        cache: false,
                        contentType: false,
                        processData: false,
                        headers: {
                            "X-CSRF-Token": $('[name="_token"]').val(),
                        },
                        success: function (output) {
                            cropper.destroy();
                            $("#imageBackground-page-11-1").attr("src", "uploadedimages/" + output);
                            getBase64Image(document.getElementById("imageBackground-page-11-1"), function (base64) {
                                $(".page-11").css("background-image", "url(uploadedimages/"+ output + ")");
                                $("input[name=page_11_img_1]").val("uploadedimages/" + output);
                            });
                            $(".page-11 .container ").css("display", "block");
                        },
                    });
                } /*, 'image/png' */
            );
        }

        function startCropper_page_12_1() {
            var image = document.getElementById("imageBackground-page-12-1");
            $(".page-12 .absolute").css("display", "none");
            cropper = new Cropper(image, {
                minContainerHeight: 500,
                aspectRatio:0.71
            });
        }

        function imageBackgroundInputChanged_page_12_1() {
            var form_data = new FormData();
            form_data.append("file", $("#imageBackgroundInput-page-12-1")[0].files[0]);
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: "post",
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    "X-CSRF-Token": $('[name="_token"]').val(),
                },
                success: function (output) {
                    $("#imageBackground-page-12-1").attr("src", "uploadedimages/" + output);
                    getBase64Image(document.getElementById("imageBackground-page-12-1"), function (base64) {
                        $(".page-12 ").css("background-image", "url(uploadedimages/"+ output + ")");
                        $("input[name=page_12_img_1]").val("uploadedimages/" + output);
                    });
                },
            });
        }

        function cropImage_page_12_1() {
            cropper.getCroppedCanvas().toBlob(
                (blob) => {
                    console.log("getCroppedCanvas");
                    const form_data = new FormData();
                    form_data.append("file", blob, "example.png");
                    $.ajax({
                        url: '/uploadimage',
                        data: form_data,
                        type: "post",
                        cache: false,
                        contentType: false,
                        processData: false,
                        headers: {
                            "X-CSRF-Token": $('[name="_token"]').val(),
                        },
                        success: function (output) {
                            cropper.destroy();
                            $("#imageBackground-page-12-1").attr("src", "uploadedimages/" + output);
                            getBase64Image(document.getElementById("imageBackground-page-12-1"), function (base64) {
                                $(".page-12 ").css("background-image", "url(uploadedimages/"+ output + ")");
                                $("input[name=page_12_img_1]").val("uploadedimages/" + output);
                            });
                            $(".page-12 .absolute ").css("display", "block");
                        },
                    });
                } /*, 'image/png' */
            );
        }

        function startCropper_page_14_1() {
            var image = document.getElementById("imageBackground-page-14-1");
            $(".page-14").css("display", "none");
                cropper = new Cropper(image, {
                minContainerHeight: 500,
                minContainerWidth: 600,
                aspectRatio:2.32
            });
        }

        function imageBackgroundInputChanged_page_14_1() {
            var form_data = new FormData();
            form_data.append("file", $("#imageBackgroundInput-page-14-1")[0].files[0]);
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: "post",
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    "X-CSRF-Token": $('[name="_token"]').val(),
                },
                success: function (output) {
                    $("#imageBackground-page-14-1").attr("src", "uploadedimages/" + output);
                    getBase64Image(document.getElementById("imageBackground-page-14-1"), function (base64) {
                        $(".row-14-1").css("background-image", "url(uploadedimages/"+ output + ")");
                        $("input[name=page_14_img_1]").val("uploadedimages/" + output);
                    });
                },
            });
        }

        function cropImage_page_14_1() {
            cropper.getCroppedCanvas().toBlob(
                (blob) => {
                    console.log("getCroppedCanvas");
                    const form_data = new FormData();
                    form_data.append("file", blob, "example.png");
                    $.ajax({
                        url: '/uploadimage',
                        data: form_data,
                        type: "post",
                        cache: false,
                        contentType: false,
                        processData: false,
                        headers: {
                            "X-CSRF-Token": $('[name="_token"]').val(),
                        },
                        success: function (output) {
                            cropper.destroy();
                            $("#imageBackground-page-14-1").attr("src", "uploadedimages/" + output);
                            getBase64Image(document.getElementById("imageBackground-page-14-1"), function (base64) {
                                $(".row-14-1").css("background-image", "url(uploadedimages/"+ output + ")");
                                $("input[name=page_14_img_1]").val("uploadedimages/" + output);
                            });
                            $(".page-14").css("display", "block");
                        },
                    });
                } /*, 'image/png' */
            );
        }
        function startCropper_page_14_2() {
            var image = document.getElementById("imageBackground-page-14-2");
            $(".page-14").css("display", "none");
            cropper = new Cropper(image, {
                minContainerHeight: 500,
                minContainerWidth: 600,
                aspectRatio:2.32
            });
        }

        function imageBackgroundInputChanged_page_14_2() {
            var form_data = new FormData();
            form_data.append("file", $("#imageBackgroundInput-page-14-2")[0].files[0]);
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: "post",
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    "X-CSRF-Token": $('[name="_token"]').val(),
                },
                success: function (output) {
                    $("#imageBackground-page-14-2").attr("src", "uploadedimages/" + output);
                    getBase64Image(document.getElementById("imageBackground-page-14-2"), function (base64) {
                        $(".row-14-2").css("background-image", "url(uploadedimages/"+ output + ")");
                        $("input[name=page_14_img_2]").val("uploadedimages/" + output);
                    });
                },
            });
        }

        function cropImage_page_14_2() {
            cropper.getCroppedCanvas().toBlob(
                (blob) => {
                    console.log("getCroppedCanvas");
                    const form_data = new FormData();
                    form_data.append("file", blob, "example.png");
                    $.ajax({
                        url: '/uploadimage',
                        data: form_data,
                        type: "post",
                        cache: false,
                        contentType: false,
                        processData: false,
                        headers: {
                            "X-CSRF-Token": $('[name="_token"]').val(),
                        },
                        success: function (output) {
                            cropper.destroy();
                            $("#imageBackground-page-14-2").attr("src", "uploadedimages/" + output);
                            getBase64Image(document.getElementById("imageBackground-page-14-2"), function (base64) {
                                $(".row-14-2").css("background-image", "url(uploadedimages/"+ output + ")");
                                $("input[name=page_14_img_2]").val("uploadedimages/" + output);
                            });
                            $(".page-14").css("display", "block");
                        },
                    });
                } /*, 'image/png' */
            );
        }

        function startCropper_page_14_3() {
            var image = document.getElementById("imageBackground-page-14-3");
            $(".page-14").css("display", "none");
            cropper = new Cropper(image, {
                minContainerHeight: 500,
                minContainerWidth: 600,
                aspectRatio:2.32
            });
        }

        function imageBackgroundInputChanged_page_14_3() {
            var form_data = new FormData();
            form_data.append("file", $("#imageBackgroundInput-page-14-3")[0].files[0]);
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: "post",
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    "X-CSRF-Token": $('[name="_token"]').val(),
                },
                success: function (output) {
                    $("#imageBackground-page-14-3").attr("src", "uploadedimages/" + output);
                    getBase64Image(document.getElementById("imageBackground-page-14-3"), function (base64) {
                        $(".row-14-3").css("background-image", "url(uploadedimages/"+ output + ")");
                        $("input[name=page_14_img_3]").val("uploadedimages/" + output);
                    });
                },
            });
        }

        function cropImage_page_14_3() {
            cropper.getCroppedCanvas().toBlob(
                (blob) => {
                    console.log("getCroppedCanvas");
                    const form_data = new FormData();
                    form_data.append("file", blob, "example.png");
                    $.ajax({
                        url: '/uploadimage',
                        data: form_data,
                        type: "post",
                        cache: false,
                        contentType: false,
                        processData: false,
                        headers: {
                            "X-CSRF-Token": $('[name="_token"]').val(),
                        },
                        success: function (output) {
                            cropper.destroy();
                            $("#imageBackground-page-14-3").attr("src", "uploadedimages/" + output);
                            getBase64Image(document.getElementById("imageBackground-page-14-3"), function (base64) {
                                $(".row-14-3").css("background-image", "url(uploadedimages/"+ output + ")");
                                $("input[name=page_14_img_3]").val("uploadedimages/" + output);
                            });
                            $(".page-14").css("display", "block");
                        },
                    });
                } /*, 'image/png' */
            );
        }

        function startCropper_page_15_1() {
            var image = document.getElementById("imageBackground-page-15-1");
            $(".page-15 .content").css("display", "none");
            cropper = new Cropper(image, {
                minContainerHeight: 500,
            });
        }

        function imageBackgroundInputChanged_page_15_1() {
            var form_data = new FormData();
            form_data.append("file", $("#imageBackgroundInput-page-15-1")[0].files[0]);
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: "post",
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    "X-CSRF-Token": $('[name="_token"]').val(),
                },
                success: function (output) {
                    $("#imageBackground-page-15-1").attr("src", "uploadedimages/" + output);
                    getBase64Image(document.getElementById("imageBackground-page-15-1"), function (base64) {
                        $(".page15-1").css("background-image", "url(uploadedimages/"+ output + ")");
                        $("input[name=page_15_img_1]").val("uploadedimages/" + output);
                    });
                },
            });
        }

        function cropImage_page_15_1() {
            cropper.getCroppedCanvas().toBlob(
                (blob) => {
                    console.log("getCroppedCanvas");
                    const form_data = new FormData();
                    form_data.append("file", blob, "example.png");
                    $.ajax({
                        url: '/uploadimage',
                        data: form_data,
                        type: "post",
                        cache: false,
                        contentType: false,
                        processData: false,
                        headers: {
                            "X-CSRF-Token": $('[name="_token"]').val(),
                        },
                        success: function (output) {
                            cropper.destroy();
                            $("#imageBackground-page-15-1").attr("src", "uploadedimages/" + output);
                            getBase64Image(document.getElementById("imageBackground-page-15-1"), function (base64) {
                                $(".page15-1").css("background-image", "url(uploadedimages/"+ output + ")");
                                $("input[name=page_15_img_1]").val("uploadedimages/" + output);
                            });
                            $(".page15-1 .content").css("display", "block");
                        },
                    });
                } /*, 'image/png' */
            );
        }
        function startCropper_page_15_2() {
            var image = document.getElementById("imageBackground-page-15-2");
            $(".page-15 .absolute").css("display", "none");
            cropper = new Cropper(image, {
                minContainerHeight: 500,
            });
        }

        function imageBackgroundInputChanged_page_15_2() {
            var form_data = new FormData();
            form_data.append("file", $("#imageBackgroundInput-page-15-2")[0].files[0]);
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: "post",
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    "X-CSRF-Token": $('[name="_token"]').val(),
                },
                success: function (output) {
                    $("#imageBackground-page-15-2").attr("src", "uploadedimages/" + output);
                    getBase64Image(document.getElementById("imageBackground-page-15-2"), function (base64) {
                        $(".page-15-2").css("background-image", "url(uploadedimages/"+ output + ")");
                        $("input[name=page_15_img_1]").val("uploadedimages/" + output);
                    });
                },
            });
        }

        function cropImage_page_15_2() {
            cropper.getCroppedCanvas().toBlob(
                (blob) => {
                    console.log("getCroppedCanvas");
                    const form_data = new FormData();
                    form_data.append("file", blob, "example.png");
                    $.ajax({
                        url: '/uploadimage',
                        data: form_data,
                        type: "post",
                        cache: false,
                        contentType: false,
                        processData: false,
                        headers: {
                            "X-CSRF-Token": $('[name="_token"]').val(),
                        },
                        success: function (output) {
                            cropper.destroy();
                            $("#imageBackground-page-15-2").attr("src", "uploadedimages/" + output);
                            getBase64Image(document.getElementById("imageBackground-page-15-2"), function (base64) {
                                $(".page-15-2 ").css("background-image", "url(uploadedimages/"+ output + ")");
                                $("input[name=page_15_img_2]").val("uploadedimages/" + output);
                            });
                            $(".page-15-1 .absolute ").css("display", "block");
                        },
                    });
                } /*, 'image/png' */
            );
        }
        function startCropper_page_18_1() {
            var image = document.getElementById("imageBackground-page-18-1");
            $(".page-18").css("display", "none");
            cropper = new Cropper(image, {
                minContainerHeight: 500,
                minContainerWidth: 500,
                aspectRatio:1.57
            });
        }

        function imageBackgroundInputChanged_page_18_1() {
            var form_data = new FormData();
            form_data.append("file", $("#imageBackgroundInput-page-18-1")[0].files[0]);
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: "post",
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    "X-CSRF-Token": $('[name="_token"]').val(),
                },
                success: function (output) {
                    $("#imageBackground-page-18-1").attr("src", "uploadedimages/" + output);
                    getBase64Image(document.getElementById("imageBackground-page-18-1"), function (base64) {
                        // $("#inner-section1 ").css("background-image", "url("+ base64 + ")");
                        $("#section18-1").attr("src", "uploadedimages/" + output);
                        $("input[name=page_18_img_1]").val("uploadedimages/" + output);
                    });
                },
            });
        }

        function cropImage_page_18_1() {
            cropper.getCroppedCanvas().toBlob(
                (blob) => {
                    console.log("getCroppedCanvas");
                    const form_data = new FormData();
                    form_data.append("file", blob, "example.png");
                    $.ajax({
                        url: '/uploadimage',
                        data: form_data,
                        type: "post",
                        cache: false,
                        contentType: false,
                        processData: false,
                        headers: {
                            "X-CSRF-Token": $('[name="_token"]').val(),
                        },
                        success: function (output) {
                            cropper.destroy();
                            $("#imageBackground-page-18-1").attr("src", "uploadedimages/" + output);
                            getBase64Image(document.getElementById("imageBackground-page-18-1"), function (base64) {
                                $("#section18-1").attr("src", "uploadedimages/" + output);
                                $("input[name=page_18_img_1]").val("uploadedimages/" + output);
                            });
                            $(".page-18").css("display", "block");
                        },
                    });
                } /*, 'image/png' */
            );
        }

        function startCropper_page_18_2() {
            var image = document.getElementById("imageBackground-page-18-2");
            $(".page-18").css("display", "none");
            cropper = new Cropper(image, {
                minContainerHeight: 500,
                minContainerWidth: 500,
                aspectRatio:0.74
            });
        }

        function imageBackgroundInputChanged_page_18_2() {
            var form_data = new FormData();
            form_data.append("file", $("#imageBackgroundInput-page-18-2")[0].files[0]);
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: "post",
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    "X-CSRF-Token": $('[name="_token"]').val(),
                },
                success: function (output) {
                    $("#imageBackground-page-18-2").attr("src", "uploadedimages/" + output);
                    getBase64Image(document.getElementById("imageBackground-page-18-2"), function (base64) {
                        // $("#inner-section1 ").css("background-image", "url("+ base64 + ")");
                        $("#section18-2").attr("src", "uploadedimages/" + output);
                        $("input[name=page_18_img_2]").val("uploadedimages/" + output);
                    });
                },
            });
        }

        function cropImage_page_18_2() {
            cropper.getCroppedCanvas().toBlob(
                (blob) => {
                    console.log("getCroppedCanvas");
                    const form_data = new FormData();
                    form_data.append("file", blob, "example.png");
                    $.ajax({
                        url: '/uploadimage',
                        data: form_data,
                        type: "post",
                        cache: false,
                        contentType: false,
                        processData: false,
                        headers: {
                            "X-CSRF-Token": $('[name="_token"]').val(),
                        },
                        success: function (output) {
                            cropper.destroy();
                            $("#imageBackground-page-18-2").attr("src", "uploadedimages/" + output);
                            getBase64Image(document.getElementById("imageBackground-page-18-2"), function (base64) {
                                $("#section18-2").attr("src", "uploadedimages/" + output);
                                $("input[name=page_18_img_2]").val("uploadedimages/" + output);
                            });
                            $(".page-18").css("display", "block");
                        },
                    });
                } /*, 'image/png' */
            );
        }

        function startCropper_page_19_1() {
            var image = document.getElementById("imageBackground-page-19-1");
            $(".page-19 .content ").css("display", "none");
            cropper = new Cropper(image, {
                minContainerHeight: 500,
            });
        }

        function imageBackgroundInputChanged_page_19_1() {
            var form_data = new FormData();
            form_data.append("file", $("#imageBackgroundInput-page-19-1")[0].files[0]);
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: "post",
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    "X-CSRF-Token": $('[name="_token"]').val(),
                },
                success: function (output) {
                    $("#imageBackground-page-19-1").attr("src", "uploadedimages/" + output);
                    getBase64Image(document.getElementById("imageBackground-page-19-1"), function (base64) {
                        $(".page-19").css("background-image", "url(uploadedimages/"+ output + ")");
                        $("input[name=page_19_img_1]").val("uploadedimages/" + output);
                    });
                },
            });
        }

        function cropImage_page_19_1() {
            cropper.getCroppedCanvas().toBlob(
                (blob) => {
                    console.log("getCroppedCanvas");
                    const form_data = new FormData();
                    form_data.append("file", blob, "example.png");
                    $.ajax({
                        url: '/uploadimage',
                        data: form_data,
                        type: "post",
                        cache: false,
                        contentType: false,
                        processData: false,
                        headers: {
                            "X-CSRF-Token": $('[name="_token"]').val(),
                        },
                        success: function (output) {
                            cropper.destroy();
                            $("#imageBackground-page-19-1").attr("src", "uploadedimages/" + output);
                            getBase64Image(document.getElementById("imageBackground-page-19-1"), function (base64) {
                                $(".page-19").css("background-image", "url(uploadedimages/"+ output + ")");
                                $("input[name=page_19_img_1]").val("uploadedimages/" + output);
                            });
                            $(".page-19 .content").css("display", "block");
                        },
                    });
                } /*, 'image/png' */
            );
        }

        function startCropper_page_20_1() {
            var image = document.getElementById("imageBackground-page-20-1");
            $(".page-20").css("display", "none");
            cropper = new Cropper(image, {
                minContainerHeight: 500,
                minContainerWidth: 500,
                aspectRatio:2.13
            });
        }

        function imageBackgroundInputChanged_page_20_1() {
            var form_data = new FormData();
            form_data.append("file", $("#imageBackgroundInput-page-20-1")[0].files[0]);
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: "post",
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    "X-CSRF-Token": $('[name="_token"]').val(),
                },
                success: function (output) {
                    $("#imageBackground-page-20-1").attr("src", "uploadedimages/" + output);
                    getBase64Image(document.getElementById("imageBackground-page-20-1"), function (base64) {
                        $(".row-1 ").css("background-image", "url(uploadedimages/"+ output + ")");
                        $("input[name=page_20_img_1]").val("uploadedimages/" + output);
                    });
                },
            });
        }

        function cropImage_page_20_1() {
            cropper.getCroppedCanvas().toBlob(
                (blob) => {
                    console.log("getCroppedCanvas");
                    const form_data = new FormData();
                    form_data.append("file", blob, "example.png");
                    $.ajax({
                        url: '/uploadimage',
                        data: form_data,
                        type: "post",
                        cache: false,
                        contentType: false,
                        processData: false,
                        headers: {
                            "X-CSRF-Token": $('[name="_token"]').val(),
                        },
                        success: function (output) {
                            cropper.destroy();
                            $("#imageBackground-page-20-1").attr("src", "uploadedimages/" + output);
                            getBase64Image(document.getElementById("imageBackground-page-20-1"), function (base64) {
                                $(".row-1 ").css("background-image", "url(uploadedimages/"+ output + ")");
                                $("input[name=page_20_img_1]").val("uploadedimages/" + output);
                            });
                            $(".page-20").css("display", "block");
                        },
                    });
                } /*, 'image/png' */
            );
        }

        function startCropper_page_20_2() {
            var image = document.getElementById("imageBackground-page-20-2");
            $(".page-20").css("display", "none");
            cropper = new Cropper(image, {
                minContainerHeight: 500,
                minContainerWidth: 500,
                aspectRatio:2.13
            });
        }

        function imageBackgroundInputChanged_page_20_2() {
            var form_data = new FormData();
            form_data.append("file", $("#imageBackgroundInput-page-20-2")[0].files[0]);
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: "post",
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    "X-CSRF-Token": $('[name="_token"]').val(),
                },
                success: function (output) {
                    $("#imageBackground-page-20-2").attr("src", "uploadedimages/" + output);
                    getBase64Image(document.getElementById("imageBackground-page-20-2"), function (base64) {
                        $(".row-2 ").css("background-image", "url(uploadedimages/"+ output + ")");
                        $("input[name=page_20_img_2]").val("uploadedimages/" + output);
                    });
                },
            });
        }

        function cropImage_page_20_2() {
            cropper.getCroppedCanvas().toBlob(
                (blob) => {
                    console.log("getCroppedCanvas");
                    const form_data = new FormData();
                    form_data.append("file", blob, "example.png");
                    $.ajax({
                        url: '/uploadimage',
                        data: form_data,
                        type: "post",
                        cache: false,
                        contentType: false,
                        processData: false,
                        headers: {
                            "X-CSRF-Token": $('[name="_token"]').val(),
                        },
                        success: function (output) {
                            cropper.destroy();
                            $("#imageBackground-page-20-2").attr("src", "uploadedimages/" + output);
                            getBase64Image(document.getElementById("imageBackground-page-20-2"), function (base64) {
                                $(".row-2 ").css("background-image", "url(uploadedimages/"+ output + ")");
                                $("input[name=page_20_img_2").val("uploadedimages/" + output);
                            });
                            $(".page-20").css("display", "block");
                        },
                    });
                } /*, 'image/png' */
            );
        }
        function startCropper_page_20_3() {
            var image = document.getElementById("imageBackground-page-20-3");
            $(".page-20").css("display", "none");
            cropper = new Cropper(image, {
                minContainerHeight: 500,
                minContainerWidth: 500,
                aspectRatio:2.13
            });
        }

        function imageBackgroundInputChanged_page_20_3() {
            var form_data = new FormData();
            form_data.append("file", $("#imageBackgroundInput-page-20-3")[0].files[0]);
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: "post",
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    "X-CSRF-Token": $('[name="_token"]').val(),
                },
                success: function (output) {
                    $("#imageBackground-page-20-3").attr("src", "uploadedimages/" + output);
                    getBase64Image(document.getElementById("imageBackground-page-20-3"), function (base64) {
                        $(".row-3 ").css("background-image", "url(uploadedimages/"+ output + ")");
                        $("input[name=page_20_img_3]").val("uploadedimages/" + output);
                    });
                },
            });
        }

        function cropImage_page_20_3() {
            cropper.getCroppedCanvas().toBlob(
                (blob) => {
                    console.log("getCroppedCanvas");
                    const form_data = new FormData();
                    form_data.append("file", blob, "example.png");
                    $.ajax({
                        url: '/uploadimage',
                        data: form_data,
                        type: "post",
                        cache: false,
                        contentType: false,
                        processData: false,
                        headers: {
                            "X-CSRF-Token": $('[name="_token"]').val(),
                        },
                        success: function (output) {
                            cropper.destroy();
                            $("#imageBackground-page-20-3").attr("src", "uploadedimages/" + output);
                            getBase64Image(document.getElementById("imageBackground-page-20-3"), function (base64) {
                                $(".row-3 ").css("background-image", "url(uploadedimages/"+ output + ")");
                                $("input[name=page_20_img_3").val("uploadedimages/" + output);
                            });
                            $(".page-20").css("display", "block");
                        },
                    });
                } /*, 'image/png' */
            );
        }

        function startCropper_page_22_1() {
            var image = document.getElementById("imageBackground-page-22-1");
            $(".page-22").css("display", "none");
            cropper = new Cropper(image, {
                minContainerHeight: 500,
                minContainerWidth: 500,
                aspectRatio:1.54
            });
        }

        function imageBackgroundInputChanged_page_22_1() {
            var form_data = new FormData();
            form_data.append("file", $("#imageBackgroundInput-page-22-1")[0].files[0]);
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: "post",
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    "X-CSRF-Token": $('[name="_token"]').val(),
                },
                success: function (output) {
                    $("#imageBackground-page-22-1").attr("src", "uploadedimages/" + output);
                    getBase64Image(document.getElementById("imageBackground-page-22-1"), function (base64) {
                        $(".section1").css("background-image", "url(uploadedimages/"+ output + ")");
                        $("input[name=page_22_img_1]").val("uploadedimages/" + output);
                    });
                },
            });
        }

        function cropImage_page_22_1() {
            cropper.getCroppedCanvas().toBlob(
                (blob) => {
                    console.log("getCroppedCanvas");
                    const form_data = new FormData();
                    form_data.append("file", blob, "example.png");
                    $.ajax({
                        url: '/uploadimage',
                        data: form_data,
                        type: "post",
                        cache: false,
                        contentType: false,
                        processData: false,
                        headers: {
                            "X-CSRF-Token": $('[name="_token"]').val(),
                        },
                        success: function (output) {
                            cropper.destroy();
                            $("#imageBackground-page-22-1").attr("src", "uploadedimages/" + output);
                            getBase64Image(document.getElementById("imageBackground-page-22-1"), function (base64) {
                                $(".section1").css("background-image", "url(uploadedimages/"+ output + ")");
                                $("input[name=page_22_img_1]").val("uploadedimages/" + output);
                            });
                            $(".page-22").css("display", "block");
                        },
                    });
                } /*, 'image/png' */
            );
        }
        function startCropper_page_22_2() {
            var image = document.getElementById("imageBackground-page-22-2");
            $(".page-22").css("display", "none");
            cropper = new Cropper(image, {
                minContainerHeight: 500,
                minContainerWidth: 500,
                aspectRatio:1.61
            });
        }

        function imageBackgroundInputChanged_page_22_2() {
            var form_data = new FormData();
            form_data.append("file", $("#imageBackgroundInput-page-22-2")[0].files[0]);
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: "post",
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    "X-CSRF-Token": $('[name="_token"]').val(),
                },
                success: function (output) {
                    $("#imageBackground-page-22-2").attr("src", "uploadedimages/" + output);
                    getBase64Image(document.getElementById("imageBackground-page-22-2"), function (base64) {
                        // $("#inner-section1 ").css("background-image", "url("+ base64 + ")");
                        $("#page-22-img-2").attr("src", "uploadedimages/" + output);
                        $("input[name=page_22_img_2]").val("uploadedimages/" + output);
                    });
                },
            });
        }

        function cropImage_page_22_2() {
            cropper.getCroppedCanvas().toBlob(
                (blob) => {
                    console.log("getCroppedCanvas");
                    const form_data = new FormData();
                    form_data.append("file", blob, "example.png");
                    $.ajax({
                        url: '/uploadimage',
                        data: form_data,
                        type: "post",
                        cache: false,
                        contentType: false,
                        processData: false,
                        headers: {
                            "X-CSRF-Token": $('[name="_token"]').val(),
                        },
                        success: function (output) {
                            cropper.destroy();
                            $("#imageBackground-page-22-2").attr("src", "uploadedimages/" + output);
                            getBase64Image(document.getElementById("imageBackground-page-22-2"), function (base64) {
                                $("#page-22-img-2").attr("src", "uploadedimages/" + output);
                                $("input[name=page_22_img_2]").val("uploadedimages/" + output);
                            });
                            $(".page-22").css("display", "block");
                        },
                    });
                } /*, 'image/png' */
            );
        }

        function startCropper_page_22_3() {
            var image = document.getElementById("imageBackground-page-22-3");
            $(".page-22").css("display", "none");
            cropper = new Cropper(image, {
                minContainerHeight: 500,
                minContainerWidth: 500,
                aspectRatio:1.61
            });
        }

        function imageBackgroundInputChanged_page_22_3() {
            var form_data = new FormData();
            form_data.append("file", $("#imageBackgroundInput-page-22-3")[0].files[0]);
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: "post",
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    "X-CSRF-Token": $('[name="_token"]').val(),
                },
                success: function (output) {
                    $("#imageBackground-page-22-3").attr("src", "uploadedimages/" + output);
                    getBase64Image(document.getElementById("imageBackground-page-22-3"), function (base64) {
                        // $("#inner-section1 ").css("background-image", "url("+ base64 + ")");
                        $("#page-22-img-3").attr("src", "uploadedimages/" + output);
                        $("input[name=page_22_img_3]").val("uploadedimages/" + output);
                    });
                },
            });
        }

        function cropImage_page_22_3() {
            cropper.getCroppedCanvas().toBlob(
                (blob) => {
                    console.log("getCroppedCanvas");
                    const form_data = new FormData();
                    form_data.append("file", blob, "example.png");
                    $.ajax({
                        url: '/uploadimage',
                        data: form_data,
                        type: "post",
                        cache: false,
                        contentType: false,
                        processData: false,
                        headers: {
                            "X-CSRF-Token": $('[name="_token"]').val(),
                        },
                        success: function (output) {
                            cropper.destroy();
                            $("#imageBackground-page-22-4").attr("src", "uploadedimages/" + output);
                            getBase64Image(document.getElementById("imageBackground-page-22-3"), function (base64) {
                                $("#page-22-img-3").attr("src", "uploadedimages/" + output);
                                $("input[name=page_22_img_3]").val("uploadedimages/" + output);
                            });
                            $(".page-22").css("display", "block");
                        },
                    });
                } /*, 'image/png' */
            );
        }

        function startCropper_page_22_4() {
            var image = document.getElementById("imageBackground-page-22-4");
            $(".page-22").css("display", "none");
            cropper = new Cropper(image, {
                minContainerHeight: 500,
                minContainerWidth: 500,
                aspectRatio:1.61
            });
        }

        function imageBackgroundInputChanged_page_22_4() {
            var form_data = new FormData();
            form_data.append("file", $("#imageBackgroundInput-page-22-4")[0].files[0]);
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: "post",
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    "X-CSRF-Token": $('[name="_token"]').val(),
                },
                success: function (output) {
                    $("#imageBackground-page-22-4").attr("src", "uploadedimages/" + output);
                    getBase64Image(document.getElementById("imageBackground-page-22-4"), function (base64) {
                        // $("#inner-section1 ").css("background-image", "url("+ base64 + ")");
                        $("#page-22-img-4").attr("src", "uploadedimages/" + output);
                        $("input[name=page_22_img_4]").val("uploadedimages/" + output);
                    });
                },
            });
        }

        function cropImage_page_22_4() {
            cropper.getCroppedCanvas().toBlob(
                (blob) => {
                    console.log("getCroppedCanvas");
                    const form_data = new FormData();
                    form_data.append("file", blob, "example.png");
                    $.ajax({
                        url: '/uploadimage',
                        data: form_data,
                        type: "post",
                        cache: false,
                        contentType: false,
                        processData: false,
                        headers: {
                            "X-CSRF-Token": $('[name="_token"]').val(),
                        },
                        success: function (output) {
                            cropper.destroy();
                            $("#imageBackground-page-22-4").attr("src", "uploadedimages/" + output);
                            getBase64Image(document.getElementById("imageBackground-page-22-4"), function (base64) {
                                $("#page-22-img-4").attr("src", "uploadedimages/" + output);
                                $("input[name=page_22_img_4]").val("uploadedimages/" + output);
                            });
                            $(".page-22").css("display", "block");
                        },
                    });
                } /*, 'image/png' */
            );
        }

        function startCropper_page_22_5() {
            var image = document.getElementById("imageBackground-page-22-5");
            $(".page-22").css("display", "none");
            cropper = new Cropper(image, {
                minContainerHeight: 500,
                minContainerWidth: 500,
                aspectRatio:1.61
            });
        }

        function imageBackgroundInputChanged_page_22_5() {
            var form_data = new FormData();
            form_data.append("file", $("#imageBackgroundInput-page-22-5")[0].files[0]);
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: "post",
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    "X-CSRF-Token": $('[name="_token"]').val(),
                },
                success: function (output) {
                    $("#imageBackground-page-22-5").attr("src", "uploadedimages/" + output);
                    getBase64Image(document.getElementById("imageBackground-page-22-5"), function (base64) {
                        // $("#inner-section1 ").css("background-image", "url("+ base64 + ")");
                        $("#page-22-img-5").attr("src", "uploadedimages/" + output);
                        $("input[name=page_22_img_5]").val("uploadedimages/" + output);
                    });
                },
            });
        }

        function cropImage_page_22_5() {
            cropper.getCroppedCanvas().toBlob(
                (blob) => {
                    console.log("getCroppedCanvas");
                    const form_data = new FormData();
                    form_data.append("file", blob, "example.png");
                    $.ajax({
                        url: '/uploadimage',
                        data: form_data,
                        type: "post",
                        cache: false,
                        contentType: false,
                        processData: false,
                        headers: {
                            "X-CSRF-Token": $('[name="_token"]').val(),
                        },
                        success: function (output) {
                            cropper.destroy();
                            $("#imageBackground-page-22-5").attr("src", "uploadedimages/" + output);
                            getBase64Image(document.getElementById("imageBackground-page-22-5"), function (base64) {
                                $("#page-22-img-5").attr("src", "uploadedimages/" + output);
                                $("input[name=page_22_img_5]").val("uploadedimages/" + output);
                            });
                            $(".page-22").css("display", "block");
                        },
                    });
                } /*, 'image/png' */
            );
        }
        function startCropper_page_22_6() {
            var image = document.getElementById("imageBackground-page-22-6");
            $(".page-22").css("display", "none");
            cropper = new Cropper(image, {
                minContainerHeight: 500,
                minContainerWidth: 500,
                aspectRatio:1.61
            });
        }

        function imageBackgroundInputChanged_page_22_6() {
            var form_data = new FormData();
            form_data.append("file", $("#imageBackgroundInput-page-22-6")[0].files[0]);
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: "post",
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    "X-CSRF-Token": $('[name="_token"]').val(),
                },
                success: function (output) {
                    $("#imageBackground-page-22-6").attr("src", "uploadedimages/" + output);
                    getBase64Image(document.getElementById("imageBackground-page-22-6"), function (base64) {
                        // $("#inner-section1 ").css("background-image", "url("+ base64 + ")");
                        $("#page-22-img-6").attr("src", "uploadedimages/" + output);
                        $("input[name=page_22_img_6]").val("uploadedimages/" + output);
                    });
                },
            });
        }

        function cropImage_page_22_6() {
            cropper.getCroppedCanvas().toBlob(
                (blob) => {
                    console.log("getCroppedCanvas");
                    const form_data = new FormData();
                    form_data.append("file", blob, "example.png");
                    $.ajax({
                        url: '/uploadimage',
                        data: form_data,
                        type: "post",
                        cache: false,
                        contentType: false,
                        processData: false,
                        headers: {
                            "X-CSRF-Token": $('[name="_token"]').val(),
                        },
                        success: function (output) {
                            cropper.destroy();
                            $("#imageBackground-page-22-6").attr("src", "uploadedimages/" + output);
                            getBase64Image(document.getElementById("imageBackground-page-22-6"), function (base64) {
                                $("#page-22-img-6").attr("src", "uploadedimages/" + output);
                                $("input[name=page_22_img_6]").val("uploadedimages/" + output);
                            });
                            $(".page-22").css("display", "block");
                        },
                    });
                } /*, 'image/png' */
            );
        }

        function startCropper_page_22_7() {
            var image = document.getElementById("imageBackground-page-22-7");
            $(".page-22").css("display", "none");
            cropper = new Cropper(image, {
                minContainerHeight: 500,
                minContainerWidth: 500,
                aspectRatio:2.3
            });
        }

        function imageBackgroundInputChanged_page_22_7() {
            var form_data = new FormData();
            form_data.append("file", $("#imageBackgroundInput-page-22-7")[0].files[0]);
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: "post",
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    "X-CSRF-Token": $('[name="_token"]').val(),
                },
                success: function (output) {
                    $("#imageBackground-page-22-7").attr("src", "uploadedimages/" + output);
                    getBase64Image(document.getElementById("imageBackground-page-22-7"), function (base64) {
                        // $("#inner-section1 ").css("background-image", "url("+ base64 + ")");
                        $("#page-22-img-7").attr("src", "uploadedimages/" + output);
                        $("input[name=page_22_img_7]").val("uploadedimages/" + output);
                    });
                },
            });
        }

        function cropImage_page_22_7() {
            cropper.getCroppedCanvas().toBlob(
                (blob) => {
                    console.log("getCroppedCanvas");
                    const form_data = new FormData();
                    form_data.append("file", blob, "example.png");
                    $.ajax({
                        url: '/uploadimage',
                        data: form_data,
                        type: "post",
                        cache: false,
                        contentType: false,
                        processData: false,
                        headers: {
                            "X-CSRF-Token": $('[name="_token"]').val(),
                        },
                        success: function (output) {
                            cropper.destroy();
                            $("#imageBackground-page-22-7").attr("src", "uploadedimages/" + output);
                            getBase64Image(document.getElementById("imageBackground-page-22-7"), function (base64) {
                                $("#page-22-img-7").attr("src", "uploadedimages/" + output);
                                $("input[name=page_22_img_6]").val("uploadedimages/" + output);
                            });
                            $(".page-22").css("display", "block");
                        },
                    });
                } /*, 'image/png' */
            );
        }

        function startCropper_page_24_1() {
            var image = document.getElementById("imageBackground-page-24-1");
            $(".page-24 .absolute").css("display", "none");
            cropper = new Cropper(image, {
                minContainerHeight: 500,
                aspectRatio:0.71
            });
        }

        function imageBackgroundInputChanged_page_24_1() {
            var form_data = new FormData();
            form_data.append("file", $("#imageBackgroundInput-page-24-1")[0].files[0]);
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: "post",
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    "X-CSRF-Token": $('[name="_token"]').val(),
                },
                success: function (output) {
                    $("#imageBackground-page-24-1").attr("src", "uploadedimages/" + output);
                    getBase64Image(document.getElementById("imageBackground-page-24-1"), function (base64) {
                        $(".page-24 ").css("background-image", "url(uploadedimages/"+ output + ")");
                        $("input[name=page_24_img_1]").val("uploadedimages/" + output);
                        $(".page-25 .page-bg-image").css("background-image", "url(uploadedimages/"+ output + ")");
                        $("input[name=page_25_img_1]").val("uploadedimages/" + output);
                    });
                },
            });
        }

        function cropImage_page_24_1() {
            cropper.getCroppedCanvas().toBlob(
                (blob) => {
                    console.log("getCroppedCanvas");
                    const form_data = new FormData();
                    form_data.append("file", blob, "example.png");
                    $.ajax({
                        url: '/uploadimage',
                        data: form_data,
                        type: "post",
                        cache: false,
                        contentType: false,
                        processData: false,
                        headers: {
                            "X-CSRF-Token": $('[name="_token"]').val(),
                        },
                        success: function (output) {
                            cropper.destroy();
                            $("#imageBackground-page-24-1").attr("src", "uploadedimages/" + output);
                            getBase64Image(document.getElementById("imageBackground-page-24-1"), function (base64) {
                                $(".page-24 ").css("background-image", "url(uploadedimages/"+ output + ")");
                                $("input[name=page_24_img_1]").val("uploadedimages/" + output);
                                $(".page-25 .page-bg-image").css("background-image", "url(uploadedimages/"+ output + ")");
                                $("input[name=page_25_img_1]").val("uploadedimages/" + output);
                            });
                            $(".page-24 .absolute ").css("display", "block");
                        },
                    });
                } /*, 'image/png' */
            );
        }

        function startCropper_page_25_1() {
            var image = document.getElementById("imageBackground-page-25-1");
            $(".page-25 .absolute").css("display", "none");
            cropper = new Cropper(image, {
                minContainerHeight: 500,
            });
        }

        function imageBackgroundInputChanged_page_25_1() {
            var form_data = new FormData();
            form_data.append("file", $("#imageBackgroundInput-page-25-1")[0].files[0]);
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: "post",
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    "X-CSRF-Token": $('[name="_token"]').val(),
                },
                success: function (output) {
                    $("#imageBackground-page-25-1").attr("src", "uploadedimages/" + output);
                    getBase64Image(document.getElementById("imageBackground-page-25-1"), function (base64) {
                        $(".page-25 ").css("background-image", "url(uploadedimages/"+ output + ")");
                        $("input[name=page_25_img_1]").val("uploadedimages/" + output);
                    });
                },
            });
        }

        function cropImage_page_25_1() {
            cropper.getCroppedCanvas().toBlob(
                (blob) => {
                    console.log("getCroppedCanvas");
                    const form_data = new FormData();
                    form_data.append("file", blob, "example.png");
                    $.ajax({
                        url: '/uploadimage',
                        data: form_data,
                        type: "post",
                        cache: false,
                        contentType: false,
                        processData: false,
                        headers: {
                            "X-CSRF-Token": $('[name="_token"]').val(),
                        },
                        success: function (output) {
                            cropper.destroy();
                            $("#imageBackground-page-25-1").attr("src", "uploadedimages/" + output);
                            getBase64Image(document.getElementById("imageBackground-page-25-1"), function (base64) {
                                $(".page-25 ").css("background-image", "url(uploadedimages/"+ output + ")");
                                $("input[name=page_25_img_1]").val("uploadedimages/" + output);
                            });
                            $(".page-25 .absolute ").css("display", "block");
                        },
                    });
                } /*, 'image/png' */
            );
        }

        function startCropper_page_26_1() {
            var image = document.getElementById("imageBackground-page-26-1");
            $(".page-26").css("display", "none");
            cropper = new Cropper(image, {
                minContainerHeight: 500,
                minContainerWidth: 500,
                aspectRatio:0.71
            });
        }

        function imageBackgroundInputChanged_page_26_1() {
            var form_data = new FormData();
            form_data.append("file", $("#imageBackgroundInput-page-26-1")[0].files[0]);
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: "post",
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    "X-CSRF-Token": $('[name="_token"]').val(),
                },
                success: function (output) {
                    $("#imageBackground-page-26-1").attr("src", "uploadedimages/" + output);
                    getBase64Image(document.getElementById("imageBackground-page-26-1"), function (base64) {
                        $(".page-26 ").css("background-image", "url(uploadedimages/"+ output + ")");
                        $("input[name=page_26_img_1]").val("uploadedimages/" + output);
                        $(".page-27 .page-bg-image").css("background-image", "url(uploadedimages/"+ output + ")");
                    });
                },
            });
        }

        function cropImage_page_26_1() {
            cropper.getCroppedCanvas().toBlob(
                (blob) => {
                    console.log("getCroppedCanvas");
                    const form_data = new FormData();
                    form_data.append("file", blob, "example.png");
                    $.ajax({
                        url: '/uploadimage',
                        data: form_data,
                        type: "post",
                        cache: false,
                        contentType: false,
                        processData: false,
                        headers: {
                            "X-CSRF-Token": $('[name="_token"]').val(),
                        },
                        success: function (output) {
                            cropper.destroy();
                            $("#imageBackground-page-26-1").attr("src", "uploadedimages/" + output);
                            getBase64Image(document.getElementById("imageBackground-page-26-1"), function (base64) {
                                $(".page-26 ").css("background-image", "url(uploadedimages/"+ output + ")");
                                $("input[name=page_26_img_1]").val("uploadedimages/" + output);
                                $(".page-27 .page-bg-image").css("background-image", "url(uploadedimages/"+ output + ")");
                            });
                            $(".page-26").css("display", "block");
                        },
                    });
                } /*, 'image/png' */
            );
        }
        function startCropper_page_28_1() {
            var image = document.getElementById("imageBackground-page-28-1");
            $(".page-28 .absolute").css("display", "none");
            cropper = new Cropper(image, {
                minContainerHeight: 500,
                aspectRatio:0.71
            });
        }

        function imageBackgroundInputChanged_page_28_1() {
            var form_data = new FormData();
            form_data.append("file", $("#imageBackgroundInput-page-28-1")[0].files[0]);
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: "post",
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    "X-CSRF-Token": $('[name="_token"]').val(),
                },
                success: function (output) {
                    $("#imageBackground-page-28-1").attr("src", "uploadedimages/" + output);
                    getBase64Image(document.getElementById("imageBackground-page-28-1"), function (base64) {
                        $(".page-28 ").css("background-image", "url(uploadedimages/"+ output + ")");
                        $("input[name=page_28_img_1]").val("uploadedimages/" + output);
                        $(".page-29 .page-bg-image").css("background-image", "url(uploadedimages/"+ output + ")");
                    });
                },
            });
        }

        function cropImage_page_28_1() {
            cropper.getCroppedCanvas().toBlob(
                (blob) => {
                    console.log("getCroppedCanvas");
                    const form_data = new FormData();
                    form_data.append("file", blob, "example.png");
                    $.ajax({
                        url: '/uploadimage',
                        data: form_data,
                        type: "post",
                        cache: false,
                        contentType: false,
                        processData: false,
                        headers: {
                            "X-CSRF-Token": $('[name="_token"]').val(),
                        },
                        success: function (output) {
                            cropper.destroy();
                            $("#imageBackground-page-28-1").attr("src", "uploadedimages/" + output);
                            getBase64Image(document.getElementById("imageBackground-page-28-1"), function (base64) {
                                $(".page-28 ").css("background-image", "url(uploadedimages/"+ output + ")");
                                $("input[name=page_28_img_1]").val("uploadedimages/" + output);
                                $(".page-29 .page-bg-image").css("background-image", "url(uploadedimages/"+ output + ")");
                            });
                            $(".page-28 .absolute ").css("display", "block");
                        },
                    });
                } /*, 'image/png' */
            );
        }

        function startCropper_page_29_5() {
            var image = document.getElementById("imageBackground-page-29-5");
            $(".content1 .absolute").css("display", "none");
            cropper = new Cropper(image, {
                minContainerHeight: 500,
            });
        }

        function imageBackgroundInputChanged_page_29_5() {
            var form_data = new FormData();
            form_data.append("file", $("#imageBackgroundInput-page-29-5")[0].files[0]);
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: "post",
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    "X-CSRF-Token": $('[name="_token"]').val(),
                },
                success: function (output) {
                    $("#imageBackground-page-29-5").attr("src", "uploadedimages/" + output);
                    getBase64Image(document.getElementById("imageBackground-page-29-5"), function (base64) {
                        $(".page-29").css("background-image", "url(uploadedimages/"+ output + ")");
                        $("input[name=page_29_img_5]").val("uploadedimages/" + output);
                    });
                },
            });
        }

        function cropImage_page_29_5() {
            cropper.getCroppedCanvas().toBlob(
                (blob) => {
                    console.log("getCroppedCanvas");
                    const form_data = new FormData();
                    form_data.append("file", blob, "example.png");
                    $.ajax({
                        url: '/uploadimage',
                        data: form_data,
                        type: "post",
                        cache: false,
                        contentType: false,
                        processData: false,
                        headers: {
                            "X-CSRF-Token": $('[name="_token"]').val(),
                        },
                        success: function (output) {
                            cropper.destroy();
                            $("#imageBackground-page-29-5").attr("src", "uploadedimages/" + output);
                            getBase64Image(document.getElementById("imageBackground-page-29-5"), function (base64) {
                                $(".page-29").css("background-image", "url(uploadedimages/"+ output + ")");
                                $("input[name=page_29_img_5]").val("uploadedimages/" + output);
                            });
                            $(".content1 .absolute ").css("display", "block");
                        },
                    });
                } /*, 'image/png' */
            );
        }

        function startCropper_page_29_1() {
            var image = document.getElementById("imageBackground-page-29-1");
            $(".page-29 .content1").css("display", "none");
            cropper = new Cropper(image, {
                minContainerHeight: 500,
                minContainerWidth: 500,
                aspectRatio:1
            });
        }

        function imageBackgroundInputChanged_page_29_1() {
            var form_data = new FormData();
            form_data.append("file", $("#imageBackgroundInput-page-29-1")[0].files[0]);
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: "post",
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    "X-CSRF-Token": $('[name="_token"]').val(),
                },
                success: function (output) {
                    $("#imageBackground-page-29-1").attr("src", "uploadedimages/" + output);
                    getBase64Image(document.getElementById("imageBackground-page-29-1"), function (base64) {
                        // $("#inner-section1 ").css("background-image", "url("+ base64 + ")");
                        $("#inner-section1 ").attr("src", "uploadedimages/" + output);
                        $("input[name=page_29_img_1]").val("uploadedimages/" + output);
                    });
                },
            });
        }

        function cropImage_page_29_1() {
            cropper.getCroppedCanvas().toBlob(
                (blob) => {
                    console.log("getCroppedCanvas");
                    const form_data = new FormData();
                    form_data.append("file", blob, "example.png");
                    $.ajax({
                        url: '/uploadimage',
                        data: form_data,
                        type: "post",
                        cache: false,
                        contentType: false,
                        processData: false,
                        headers: {
                            "X-CSRF-Token": $('[name="_token"]').val(),
                        },
                        success: function (output) {
                            cropper.destroy();
                            $("#imageBackground-page-29-1").attr("src", "uploadedimages/" + output);
                            getBase64Image(document.getElementById("imageBackground-page-29-1"), function (base64) {
                                $("#inner-section1 ").attr("src", "uploadedimages/" + output);
                                $("input[name=page_29_img_1]").val("uploadedimages/" + output);
                            });
                            $(".page-29 .content1").css("display", "block");
                        },
                    });
                } /*, 'image/png' */
            );
        }

        function startCropper_page_29_2() {
            var image = document.getElementById("imageBackground-page-29-2");
            $(".page-29 .content1").css("display", "none");
            cropper = new Cropper(image, {
                minContainerHeight: 500,
                minContainerWidth: 500,
                aspectRatio:1
            });
        }

        function imageBackgroundInputChanged_page_29_2() {
            var form_data = new FormData();
            form_data.append("file", $("#imageBackgroundInput-page-29-2")[0].files[0]);
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: "post",
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    "X-CSRF-Token": $('[name="_token"]').val(),
                },
                success: function (output) {
                    $("#imageBackground-page-29-2").attr("src", "uploadedimages/" + output);
                    getBase64Image(document.getElementById("imageBackground-page-29-2"), function (base64) {
                        // $("#inner-section1 ").css("background-image", "url("+ base64 + ")");
                        $("#inner-section2 ").attr("src", "uploadedimages/" + output);
                        $("input[name=page_29_img_2]").val("uploadedimages/" + output);
                    });
                },
            });
        }

        function cropImage_page_29_2() {
            cropper.getCroppedCanvas().toBlob(
                (blob) => {
                    console.log("getCroppedCanvas");
                    const form_data = new FormData();
                    form_data.append("file", blob, "example.png");
                    $.ajax({
                        url: '/uploadimage',
                        data: form_data,
                        type: "post",
                        cache: false,
                        contentType: false,
                        processData: false,
                        headers: {
                            "X-CSRF-Token": $('[name="_token"]').val(),
                        },
                        success: function (output) {
                            cropper.destroy();
                            $("#imageBackground-page-29-2").attr("src", "uploadedimages/" + output);
                            getBase64Image(document.getElementById("imageBackground-page-29-2"), function (base64) {
                                $("#inner-section2").attr("src", "uploadedimages/" + output);
                                $("input[name=page_29_img_2]").val("uploadedimages/" + output);
                            });
                            $(".page-29 .content1").css("display", "block");
                        },
                    });
                } /*, 'image/png' */
            );
        }
        function startCropper_page_29_3() {
            var image = document.getElementById("imageBackground-page-29-3");
            $(".page-29 .content1").css("display", "none");
            cropper = new Cropper(image, {
                minContainerHeight: 500,
                minContainerWidth: 500,
                aspectRatio:1
            });
        }

        function imageBackgroundInputChanged_page_29_3() {
            var form_data = new FormData();
            form_data.append("file", $("#imageBackgroundInput-page-29-3")[0].files[0]);
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: "post",
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    "X-CSRF-Token": $('[name="_token"]').val(),
                },
                success: function (output) {
                    $("#imageBackground-page-29-3").attr("src", "uploadedimages/" + output);
                    getBase64Image(document.getElementById("imageBackground-page-29-3"), function (base64) {
                        // $("#inner-section1 ").css("background-image", "url("+ base64 + ")");
                        $("#inner-section3").attr("src", "uploadedimages/" + output);
                        $("input[name=page_29_img_3]").val("uploadedimages/" + output);
                    });
                },
            });
        }

        function cropImage_page_29_3() {
            cropper.getCroppedCanvas().toBlob(
                (blob) => {
                    console.log("getCroppedCanvas");
                    const form_data = new FormData();
                    form_data.append("file", blob, "example.png");
                    $.ajax({
                        url: '/uploadimage',
                        data: form_data,
                        type: "post",
                        cache: false,
                        contentType: false,
                        processData: false,
                        headers: {
                            "X-CSRF-Token": $('[name="_token"]').val(),
                        },
                        success: function (output) {
                            cropper.destroy();
                            $("#imageBackground-page-29-3").attr("src", "uploadedimages/" + output);
                            getBase64Image(document.getElementById("imageBackground-page-29-3"), function (base64) {
                                $("#inner-section3").attr("src", "uploadedimages/" + output);
                                $("input[name=page_29_img_3]").val("uploadedimages/" + output);
                            });
                            $(".page-29 .content1").css("display", "block");
                        },
                    });
                } /*, 'image/png' */
            );
        }

        function startCropper_page_29_4() {
            var image = document.getElementById("imageBackground-page-29-4");
            $(".page-29 .content1").css("display", "none");
            cropper = new Cropper(image, {
                minContainerHeight: 500,
                minContainerWidth: 500,
                aspectRatio:1
            });
        }

        function imageBackgroundInputChanged_page_29_4() {
            var form_data = new FormData();
            form_data.append("file", $("#imageBackgroundInput-page-29-4")[0].files[0]);
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: "post",
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    "X-CSRF-Token": $('[name="_token"]').val(),
                },
                success: function (output) {
                    $("#imageBackground-page-29-4").attr("src", "uploadedimages/" + output);
                    getBase64Image(document.getElementById("imageBackground-page-29-4"), function (base64) {
                        // $("#inner-section1 ").css("background-image", "url("+ base64 + ")");
                        $("#inner-section4 ").attr("src", "uploadedimages/" + output);
                        $("input[name=page_29_img_4]").val("uploadedimages/" + output);
                    });
                },
            });
        }

        function cropImage_page_29_4() {
            cropper.getCroppedCanvas().toBlob(
                (blob) => {
                    console.log("getCroppedCanvas");
                    const form_data = new FormData();
                    form_data.append("file", blob, "example.png");
                    $.ajax({
                        url: '/uploadimage',
                        data: form_data,
                        type: "post",
                        cache: false,
                        contentType: false,
                        processData: false,
                        headers: {
                            "X-CSRF-Token": $('[name="_token"]').val(),
                        },
                        success: function (output) {
                            cropper.destroy();
                            $("#imageBackground-page-29-4").attr("src", "uploadedimages/" + output);
                            getBase64Image(document.getElementById("imageBackground-page-29-4"), function (base64) {
                                $("#inner-section4 ").attr("src", "uploadedimages/" + output);
                                $("input[name=page_29_img_4]").val("uploadedimages/" + output);
                            });
                            $(".page-29 .content1").css("display", "block");
                        },
                    });
                } /*, 'image/png' */
            );
        }

        function startCropper_page_30_1() {
            var image = document.getElementById("imageBackground-page-30-1");
            $(".page-30 .absolute").css("display", "none");
            cropper = new Cropper(image, {
                minContainerHeight: 500,
                aspectRatio:0.71
            });
        }

        function imageBackgroundInputChanged_page_30_1() {
            var form_data = new FormData();
            form_data.append("file", $("#imageBackgroundInput-page-30-1")[0].files[0]);
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: "post",
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    "X-CSRF-Token": $('[name="_token"]').val(),
                },
                success: function (output) {
                    $("#imageBackground-page-30-1").attr("src", "uploadedimages/" + output);
                    getBase64Image(document.getElementById("imageBackground-page-30-1"), function (base64) {
                        $(".page-30 ").css("background-image", "url(uploadedimages/"+ output + ")");
                        $(".page-31 .page-bg-image").css("background-image", "url(uploadedimages/"+ output + ")");
                        $("input[name=page_30_img_1]").val("uploadedimages/" + output);
                    });
                },
            });
        }

        function cropImage_page_30_1() {
            cropper.getCroppedCanvas().toBlob(
                (blob) => {
                    console.log("getCroppedCanvas");
                    const form_data = new FormData();
                    form_data.append("file", blob, "example.png");
                    $.ajax({
                        url: '/uploadimage',
                        data: form_data,
                        type: "post",
                        cache: false,
                        contentType: false,
                        processData: false,
                        headers: {
                            "X-CSRF-Token": $('[name="_token"]').val(),
                        },
                        success: function (output) {
                            cropper.destroy();
                            $("#imageBackground-page-30-1").attr("src", "uploadedimages/" + output);
                            getBase64Image(document.getElementById("imageBackground-page-30-1"), function (base64) {
                                $(".page-30 ").css("background-image", "url(uploadedimages/"+ output + ")");
                                $(".page-31 .page-bg-image").css("background-image", "url(uploadedimages/"+ output + ")");
                                $("input[name=page_30_img_1]").val("uploadedimages/" + output);
                            });
                            $(".page-30 .absolute ").css("display", "block");
                        },
                    });
                } /*, 'image/png' */
            );
        }

        function startCropper_page_31_5() {
            var image = document.getElementById("imageBackground-page-31-5");
            $(".inner-section1 .absolute").css("display", "none");
            cropper = new Cropper(image, {
                minContainerHeight: 500,
            });
        }

        function imageBackgroundInputChanged_page_31_5() {
            var form_data = new FormData();
            form_data.append("file", $("#imageBackgroundInput-page-31-5")[0].files[0]);
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: "post",
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    "X-CSRF-Token": $('[name="_token"]').val(),
                },
                success: function (output) {
                    $("#imageBackground-page-31-5").attr("src", "uploadedimages/" + output);
                    getBase64Image(document.getElementById("imageBackground-page-31-5"), function (base64) {
                        $(".page-31 ").css("background-image", "url(uploadedimages/"+ output + ")");
                        $("input[name=page_31_img_5]").val("uploadedimages/" + output);
                    });
                },
            });
        }

        function cropImage_page_31_5() {
            cropper.getCroppedCanvas().toBlob(
                (blob) => {
                    console.log("getCroppedCanvas");
                    const form_data = new FormData();
                    form_data.append("file", blob, "example.png");
                    $.ajax({
                        url: '/uploadimage',
                        data: form_data,
                        type: "post",
                        cache: false,
                        contentType: false,
                        processData: false,
                        headers: {
                            "X-CSRF-Token": $('[name="_token"]').val(),
                        },
                        success: function (output) {
                            cropper.destroy();
                            $("#imageBackground-page-31-5").attr("src", "uploadedimages/" + output);
                            getBase64Image(document.getElementById("imageBackground-page-31-5"), function (base64) {
                                $(".page-31 ").css("background-image", "url("+ base64 + ")");
                                $("input[name=page_31_img_5]").val("uploadedimages/" + output);
                            });
                            $(".inner-section1 .absolute ").css("display", "block");
                        },
                    });
                } /*, 'image/png' */
            );
        }

        function startCropper_page_31_1() {
            var image = document.getElementById("imageBackground-page-31-1");
            $(".page-31 .content").css("display", "none");
            cropper = new Cropper(image, {
                minContainerHeight: 500,
                minContainerWidth: 500,
            });
        }

        function imageBackgroundInputChanged_page_31_1() {
            var form_data = new FormData();
            form_data.append("file", $("#imageBackgroundInput-page-31-1")[0].files[0]);
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: "post",
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    "X-CSRF-Token": $('[name="_token"]').val(),
                },
                success: function (output) {
                    $("#imageBackground-page-31-1").attr("src", "uploadedimages/" + output);
                    getBase64Image(document.getElementById("imageBackground-page-31-1"), function (base64) {
                        $("#page-31-img-1").attr("src", "uploadedimages/" + output);
                        $("input[name=page_31_img_1]").val("uploadedimages/" + output);
                    });
                },
            });
        }

        function cropImage_page_31_1() {
            cropper.getCroppedCanvas().toBlob(
                (blob) => {
                    console.log("getCroppedCanvas");
                    const form_data = new FormData();
                    form_data.append("file", blob, "example.png");
                    $.ajax({
                        url: '/uploadimage',
                        data: form_data,
                        type: "post",
                        cache: false,
                        contentType: false,
                        processData: false,
                        headers: {
                            "X-CSRF-Token": $('[name="_token"]').val(),
                        },
                        success: function (output) {
                            cropper.destroy();
                            $("#imageBackground-page-31-1").attr("src", "uploadedimages/" + output);
                            getBase64Image(document.getElementById("imageBackground-page-31-1"), function (base64) {
                                $("#page-31-img-1").attr("src", "uploadedimages/" + output);
                                $("input[name=page_31_img_1]").val("uploadedimages/" + output);
                            });
                            $(".page-31 .content").css("display", "block");
                        },
                    });
                } /*, 'image/png' */
            );
        }

        function startCropper_page_31_2() {
            var image = document.getElementById("imageBackground-page-31-2");
            $(".page-31 .content").css("display", "none");
            cropper = new Cropper(image, {
                minContainerHeight: 500,
                minContainerWidth: 500,
            });
        }

        function imageBackgroundInputChanged_page_31_2() {
            var form_data = new FormData();
            form_data.append("file", $("#imageBackgroundInput-page-31-2")[0].files[0]);
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: "post",
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    "X-CSRF-Token": $('[name="_token"]').val(),
                },
                success: function (output) {
                    $("#imageBackground-page-31-2").attr("src", "uploadedimages/" + output);
                    getBase64Image(document.getElementById("imageBackground-page-31-2"), function (base64) {
                        $("#page-31-img-2").attr("src", "uploadedimages/" + output);
                        $("input[name=page_31_img_2]").val("uploadedimages/" + output);
                    });
                },
            });
        }

        function cropImage_page_31_2() {
            cropper.getCroppedCanvas().toBlob(
                (blob) => {
                    console.log("getCroppedCanvas");
                    const form_data = new FormData();
                    form_data.append("file", blob, "example.png");
                    $.ajax({
                        url: '/uploadimage',
                        data: form_data,
                        type: "post",
                        cache: false,
                        contentType: false,
                        processData: false,
                        headers: {
                            "X-CSRF-Token": $('[name="_token"]').val(),
                        },
                        success: function (output) {
                            cropper.destroy();
                            $("#imageBackground-page-31-2").attr("src", "uploadedimages/" + output);
                            getBase64Image(document.getElementById("imageBackground-page-31-2"), function (base64) {
                                $("#page-31-img-2").attr("src", "uploadedimages/" + output);
                                $("input[name=page_31_img_2]").val("uploadedimages/" + output);
                            });
                            $(".page-31 .content").css("display", "block");
                        },
                    });
                } /*, 'image/png' */
            );
        }

        function startCropper_page_31_3() {
            var image = document.getElementById("imageBackground-page-31-3");
            $(".page-31 .content").css("display", "none");
            cropper = new Cropper(image, {
                minContainerHeight: 500,
                minContainerWidth: 500,
            });
        }

        function imageBackgroundInputChanged_page_31_3() {
            var form_data = new FormData();
            form_data.append("file", $("#imageBackgroundInput-page-31-3")[0].files[0]);
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: "post",
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    "X-CSRF-Token": $('[name="_token"]').val(),
                },
                success: function (output) {
                    $("#imageBackground-page-31-3").attr("src", "uploadedimages/" + output);
                    getBase64Image(document.getElementById("imageBackground-page-31-3"), function (base64) {
                        $("#page-31-img-3").attr("src", "uploadedimages/" + output);
                        $("input[name=page_31_img_3]").val("uploadedimages/" + output);
                    });
                },
            });
        }

        function cropImage_page_31_3() {
            cropper.getCroppedCanvas().toBlob(
                (blob) => {
                    console.log("getCroppedCanvas");
                    const form_data = new FormData();
                    form_data.append("file", blob, "example.png");
                    $.ajax({
                        url: '/uploadimage',
                        data: form_data,
                        type: "post",
                        cache: false,
                        contentType: false,
                        processData: false,
                        headers: {
                            "X-CSRF-Token": $('[name="_token"]').val(),
                        },
                        success: function (output) {
                            cropper.destroy();
                            $("#imageBackground-page-31-3").attr("src", "uploadedimages/" + output);
                            getBase64Image(document.getElementById("imageBackground-page-31-3"), function (base64) {
                                $("#page-31-img-3").attr("src", "uploadedimages/" + output);
                                $("input[name=page_31_img_3]").val("uploadedimages/" + output);
                            });
                            $(".page-31 .content").css("display", "block");
                        },
                    });
                } /*, 'image/png' */
            );
        }

        function startCropper_page_31_4() {
            var image = document.getElementById("imageBackground-page-31-4");
            $(".page-31 .content").css("display", "none");
            cropper = new Cropper(image, {
                minContainerHeight: 500,
                minContainerWidth: 500,
            });
        }

        function imageBackgroundInputChanged_page_31_4() {
            var form_data = new FormData();
            form_data.append("file", $("#imageBackgroundInput-page-31-4")[0].files[0]);
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: "post",
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    "X-CSRF-Token": $('[name="_token"]').val(),
                },
                success: function (output) {
                    $("#imageBackground-page-31-4").attr("src", "uploadedimages/" + output);
                    getBase64Image(document.getElementById("imageBackground-page-31-4"), function (base64) {
                        $("#page-31-img-4").attr("src", "uploadedimages/" + output);
                        $("input[name=page_31_img_4]").val("uploadedimages/" + output);
                    });
                },
            });
        }

        function cropImage_page_31_4() {
            cropper.getCroppedCanvas().toBlob(
                (blob) => {
                    console.log("getCroppedCanvas");
                    const form_data = new FormData();
                    form_data.append("file", blob, "example.png");
                    $.ajax({
                        url: '/uploadimage',
                        data: form_data,
                        type: "post",
                        cache: false,
                        contentType: false,
                        processData: false,
                        headers: {
                            "X-CSRF-Token": $('[name="_token"]').val(),
                        },
                        success: function (output) {
                            cropper.destroy();
                            $("#imageBackground-page-31-4").attr("src", "uploadedimages/" + output);
                            getBase64Image(document.getElementById("imageBackground-page-31-4"), function (base64) {
                                $("#page-31-img-4").attr("src", "uploadedimages/" + output);
                                $("input[name=page_31_img_4]").val("uploadedimages/" + output);
                            });
                            $(".page-31 .content").css("display", "block");
                        },
                    });
                } /*, 'image/png' */
            );
        }

        function startCropper_page_32_1() {
            var image = document.getElementById("imageBackground-page-32-1");
            $(".page-32 .absolute").css("display", "none");
            cropper = new Cropper(image, {
                minContainerHeight: 500,
                aspectRatio:0.71
            });
        }

        function imageBackgroundInputChanged_page_32_1() {
            var form_data = new FormData();
            form_data.append("file", $("#imageBackgroundInput-page-32-1")[0].files[0]);
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: "post",
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    "X-CSRF-Token": $('[name="_token"]').val(),
                },
                success: function (output) {
                    $("#imageBackground-page-32-1").attr("src", "uploadedimages/" + output);
                    getBase64Image(document.getElementById("imageBackground-page-32-1"), function (base64) {
                        $(".page-32 ").css("background-image", "url(uploadedimages/"+ output + ")");
                        $(".page-33 .page-bg-image").css("background-image", "url(uploadedimages/"+ output + ")");
                        $("input[name=page_32_img_1]").val("uploadedimages/" + output);
                    });
                },
            });
        }

        function cropImage_page_32_1() {
            cropper.getCroppedCanvas().toBlob(
                (blob) => {
                    console.log("getCroppedCanvas");
                    const form_data = new FormData();
                    form_data.append("file", blob, "example.png");
                    $.ajax({
                        url: '/uploadimage',
                        data: form_data,
                        type: "post",
                        cache: false,
                        contentType: false,
                        processData: false,
                        headers: {
                            "X-CSRF-Token": $('[name="_token"]').val(),
                        },
                        success: function (output) {
                            cropper.destroy();
                            $("#imageBackground-page-32-1").attr("src", "uploadedimages/" + output);
                            getBase64Image(document.getElementById("imageBackground-page-32-1"), function (base64) {
                                $(".page-32 ").css("background-image", "url(uploadedimages/"+ output + ")");
                                $(".page-33 .page-bg-image").css("background-image", "url(uploadedimages/"+ output + ")");
                                $("input[name=page_32_img_1]").val("uploadedimages/" + output);
                            });
                            $(".page-32 .absolute ").css("display", "block");
                        },
                    });
                } /*, 'image/png' */
            );
        }
        function startCropper_page_33_4() {
            var image = document.getElementById("imageBackground-page-33-4");
            $(".section .text").css("display", "none");
            cropper = new Cropper(image, {
                minContainerHeight: 500,
            });
        }

        function imageBackgroundInputChanged_page_33_4() {
            var form_data = new FormData();
            form_data.append("file", $("#imageBackgroundInput-page-33-4")[0].files[0]);
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: "post",
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    "X-CSRF-Token": $('[name="_token"]').val(),
                },
                success: function (output) {
                    $("#imageBackground-page-33-4").attr("src", "uploadedimages/" + output);
                    getBase64Image(document.getElementById("imageBackground-page-33-4"), function (base64) {
                        $(".page-33").css("background-image", "url("+ base64 + ")");

                        $("input[name=page_33_img_4]").val("uploadedimages/" + output);
                    });
                },
            });
        }

        function cropImage_page_33_4() {
            cropper.getCroppedCanvas().toBlob(
                (blob) => {
                    console.log("getCroppedCanvas");
                    const form_data = new FormData();
                    form_data.append("file", blob, "example.png");
                    $.ajax({
                        url: '/uploadimage',
                        data: form_data,
                        type: "post",
                        cache: false,
                        contentType: false,
                        processData: false,
                        headers: {
                            "X-CSRF-Token": $('[name="_token"]').val(),
                        },
                        success: function (output) {
                            cropper.destroy();
                            $("#imageBackground-page-33-4").attr("src", "uploadedimages/" + output);
                            getBase64Image(document.getElementById("imageBackground-page-33-4"), function (base64) {
                                $(".page-33").css("background-image", "url("+ base64 + ")");
                                $("input[name=page_33_img_4]").val("uploadedimages/" + output);
                            });
                            $(".section .text ").css("display", "block");
                        },
                    });
                } /*, 'image/png' */
            );
        }

        function startCropper_page_33_1() {
            var image = document.getElementById("imageBackground-page-33-1");
            $(".page-33 .content").css("display", "none");
            cropper = new Cropper(image, {
                minContainerHeight: 500,
                minContainerWidth: 500,
                aspectRatio:1
            });
        }

        function imageBackgroundInputChanged_page_33_1() {
            var form_data = new FormData();
            form_data.append("file", $("#imageBackgroundInput-page-33-1")[0].files[0]);
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: "post",
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    "X-CSRF-Token": $('[name="_token"]').val(),
                },
                success: function (output) {
                    $("#imageBackground-page-33-1").attr("src", "uploadedimages/" + output);
                    getBase64Image(document.getElementById("imageBackground-page-33-1"), function (base64) {
                        // $("#inner-section1 ").css("background-image", "url("+ base64 + ")");
                        $("#section4").attr("src", "uploadedimages/" + output);
                        $("input[name=page_33_img_1]").val("uploadedimages/" + output);
                    });
                },
            });
        }

        function cropImage_page_33_1() {
            cropper.getCroppedCanvas().toBlob(
                (blob) => {
                    console.log("getCroppedCanvas");
                    const form_data = new FormData();
                    form_data.append("file", blob, "example.png");
                    $.ajax({
                        url: '/uploadimage',
                        data: form_data,
                        type: "post",
                        cache: false,
                        contentType: false,
                        processData: false,
                        headers: {
                            "X-CSRF-Token": $('[name="_token"]').val(),
                        },
                        success: function (output) {
                            cropper.destroy();
                            $("#imageBackground-page-33-1").attr("src", "uploadedimages/" + output);
                            getBase64Image(document.getElementById("imageBackground-page-33-1"), function (base64) {
                                $("#section4 ").attr("src", "uploadedimages/" + output);
                                $("input[name=page_33_img_1]").val("uploadedimages/" + output);
                            });
                            $(".page-33 .content").css("display", "block");
                        },
                    });
                } /*, 'image/png' */
            );
        }
        function startCropper_page_33_2() {
            var image = document.getElementById("imageBackground-page-33-2");
            $(".page-33 .content").css("display", "none");
            cropper = new Cropper(image, {
                minContainerHeight: 500,
                minContainerWidth: 500,
                aspectRatio:1
            });
        }

        function imageBackgroundInputChanged_page_33_2() {
            var form_data = new FormData();
            form_data.append("file", $("#imageBackgroundInput-page-33-2")[0].files[0]);
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: "post",
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    "X-CSRF-Token": $('[name="_token"]').val(),
                },
                success: function (output) {
                    $("#imageBackground-page-33-2").attr("src", "uploadedimages/" + output);
                    getBase64Image(document.getElementById("imageBackground-page-33-2"), function (base64) {
                        // $("#inner-section1 ").css("background-image", "url("+ base64 + ")");
                        $("#section5 ").attr("src", "uploadedimages/" + output);
                        $("input[name=page_33_img_2]").val("uploadedimages/" + output);
                    });
                },
            });
        }
        function cropImage_page_33_2() {
            cropper.getCroppedCanvas().toBlob(
                (blob) => {
                    console.log("getCroppedCanvas");
                    const form_data = new FormData();
                    form_data.append("file", blob, "example.png");
                    $.ajax({
                        url: '/uploadimage',
                        data: form_data,
                        type: "post",
                        cache: false,
                        contentType: false,
                        processData: false,
                        headers: {
                            "X-CSRF-Token": $('[name="_token"]').val(),
                        },
                        success: function (output) {
                            cropper.destroy();
                            $("#imageBackground-page-33-2").attr("src", "uploadedimages/" + output);
                            getBase64Image(document.getElementById("imageBackground-page-33-2"), function (base64) {
                                $("#section5 ").attr("src", "uploadedimages/" + output);
                                $("input[name=page_33_img_2]").val("uploadedimages/" + output);
                            });
                            $(".page-33 .content").css("display", "block");
                        },
                    });
                } /*, 'image/png' */
            );
        }

        function startCropper_page_33_3() {
            var image = document.getElementById("imageBackground-page-33-3");
            $(".page-33 .content").css("display", "none");
            cropper = new Cropper(image, {
                minContainerHeight: 500,
                minContainerWidth: 500,
                aspectRatio:1
            });
        }

        function imageBackgroundInputChanged_page_33_3() {
            var form_data = new FormData();
            form_data.append("file", $("#imageBackgroundInput-page-33-3")[0].files[0]);
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: "post",
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    "X-CSRF-Token": $('[name="_token"]').val(),
                },
                success: function (output) {
                    $("#imageBackground-page-33-3").attr("src", "uploadedimages/" + output);
                    getBase64Image(document.getElementById("imageBackground-page-33-3"), function (base64) {
                        // $("#inner-section1 ").css("background-image", "url("+ base64 + ")");
                        $("#section6 ").attr("src", "uploadedimages/" + output);
                        $("input[name=page_33_img_3]").val("uploadedimages/" + output);
                    });
                },
            });
        }

        function cropImage_page_33_3() {
            cropper.getCroppedCanvas().toBlob(
                (blob) => {
                    console.log("getCroppedCanvas");
                    const form_data = new FormData();
                    form_data.append("file", blob, "example.png");
                    $.ajax({
                        url: '/uploadimage',
                        data: form_data,
                        type: "post",
                        cache: false,
                        contentType: false,
                        processData: false,
                        headers: {
                            "X-CSRF-Token": $('[name="_token"]').val(),
                        },
                        success: function (output) {
                            cropper.destroy();
                            $("#imageBackground-page-33-3").attr("src", "uploadedimages/" + output);
                            getBase64Image(document.getElementById("imageBackground-page-33-3"), function (base64) {
                                $("#section6 ").attr("src", "uploadedimages/" + output);
                                $("input[name=page_33_img_3]").val("uploadedimages/" + output);
                            });
                            $(".page-33 .content").css("display", "block");
                        },
                    });
                } /*, 'image/png' */
            );
        }

        function startCropper_page_34_1() {
            var image = document.getElementById("imageBackground-page-34-1");
            $(".page-34 .absolute").css("display", "none");
            cropper = new Cropper(image, {
                minContainerHeight: 500,
                aspectRatio:0.71
            });
        }

        function imageBackgroundInputChanged_page_34_1() {
            var form_data = new FormData();
            form_data.append("file", $("#imageBackgroundInput-page-34-1")[0].files[0]);
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: "post",
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    "X-CSRF-Token": $('[name="_token"]').val(),
                },
                success: function (output) {
                    $("#imageBackground-page-34-1").attr("src", "uploadedimages/" + output);
                    getBase64Image(document.getElementById("imageBackground-page-34-1"), function (base64) {
                        $(".page-34 ").css("background-image", "url(uploadedimages/"+ output + ")");
                        $("input[name=page_34_img_1]").val("uploadedimages/" + output);
                    });
                },
            });
        }

        function cropImage_page_34_1() {
            cropper.getCroppedCanvas().toBlob(
                (blob) => {
                    console.log("getCroppedCanvas");
                    const form_data = new FormData();
                    form_data.append("file", blob, "example.png");
                    $.ajax({
                        url: '/uploadimage',
                        data: form_data,
                        type: "post",
                        cache: false,
                        contentType: false,
                        processData: false,
                        headers: {
                            "X-CSRF-Token": $('[name="_token"]').val(),
                        },
                        success: function (output) {
                            cropper.destroy();
                            $("#imageBackground-page-32-1").attr("src", "uploadedimages/" + output);
                            getBase64Image(document.getElementById("imageBackground-page-34-1"), function (base64) {
                                $(".page-34 ").css("background-image", "url(uploadedimages/"+ output + ")");
                                $("input[name=page_34_img_1]").val("uploadedimages/" + output);
                            });
                            $(".page-34 .absolute ").css("display", "block");
                        },
                    });
                } /*, 'image/png' */
            );
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
            //     $(item).html(val);
            // } else if (itemAttributeToReplace == "VAL") {
            //     $(item).val(val);
            // } else {
            //     $(item).attr(itemAttributeToReplace, val)
            // }
            $(item).trigger("change");
        });
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
    function openInputFile(id) {
        $('#' + id).click()
    }
</script>

</html>