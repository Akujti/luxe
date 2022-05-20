<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Door Hanger Template 3</title>
</head>
@include('includes.fonts')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Lato:wght@300');
    @import url('https://fonts.googleapis.com/css2?family=Lato:wght@400');
    @import url('https://fonts.googleapis.com/css2?family=Lato:wght@700');
    @import url('https://fonts.googleapis.com/css2?family=Lato:wght@900');

    * {
        font-family: 'Lato';
    }

    .gochi {
        font-family: 'Gochi Hand', cursive;
        font-weight: 400;
    }

    .lato {
        font-family: 'Lato';
        font-weight: normal;
    }

    .ibm {
        font-family: 'IBM Plex Sans';
        font-weight: 400;
    }

    .ibm-med {
        font-family: 'IBM Plex Sans';
        font-weight: 500;
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

    .roboto {
        font-family: 'Roboto';
        font-weight: 400;
    }

    .bold {
        font-weight: bold;
    }

    .extra-bold {
        font-weight: 800;
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
        display: flex;
        height: 1280px;
    }

    .row-divider {
        height: 3px;
        background-color: black;
    }

    .column-divider {
        min-height: 100%;
        height: 100%;
        width: 150px;
    }

    .row-input {
        margin: auto 0;
        max-width: 1050px;
    }

    input,
    textarea {
        font-size: 15px;
        margin-top: 10px;
        margin-bottom: 5px;
        width: calc(100% - 20px);
        border: 1px solid #262626;
        padding: 10px;
        font-family: 'gothicregular';
    }

    .button {
        margin-top: 50px;
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

    .flex {
        display: flex;
        justify-content: flex-start;
    }

    .flex label {
        margin: 10px auto 10px auto !important;
    }

    .row-image {
        height: auto;
    }

    .page {
        width: 1000px;
        position: relative;
        height: 2541px;
        /* background-image: url('images/themes/just-listed/img-1.jpg'); */
        background-position: center bottom;
        background-repeat: no-repeat;
        background-size: 1140px;
    }

    .absolute {
        position: absolute;
    }

    .gold {
        color: #C5A467;
    }

    .white {
        color: white;
    }

    .bold {
        font-weight: 700;
    }

    ul li {
        display: inline;
        font-size: 20px;
        margin-right: 10px;
    }

    h1,
    h2,
    h3,
    p {
        margin: 0;
    }

    div.circle {
        top: 37%;
    }

    img.circle {
        border: 10px solid #C9A668;
        border-radius: 50%;
        width: 285px;
        height: 285px;
        object-fit: cover;
    }

    .pr-10 {
        padding-right: 10px;
    }

    .file-input-width {
        width: 175px;
    }

    h1.small {
        font-size: 70px;
    }

    h1.normal {
        font-size: 90px;
    }

    h1.large {
        font-size: 110px;
    }

    h1.main {
        font-family: 'Lato';
        font-weight: 900;
    }

    .list {
        font-size: 23px;
        letter-spacing: -1px;
    }

    .mr-3 {
        margin-right: 8px;
    }

    .title {
        font-size: 90px;
    }

    .social {
        font-size: 14px;
    }

    .white-border {
        border: 5px solid white;
    }

    .cropper-container {
        position: fixed !important;
        top: -100px !important;
        z-index: 100;
    }

    .page {
        zoom: 50% !important;
    }
    .text-right {
        text-align: right
    }

    .mb-10 {
        margin-bottom: 10px
    }

    @media(max-width:1300px) {
        .row-input {
            width: 580px
        }
    }

    .table-title {
        color: white;
        font-size: 40px;
        font-weight: 300;
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

<body>
    <form action="{{ route('door-hanger-template-3') }}" method="POST">
        @csrf
        <div class="row">
            <div class="row-image">
                <img src="" id="image" data-replace-attribute="src" data-name-replace="image" style="display: none;">
                <input hidden name="img_1_input" id="img_1_input" value="images/door-hangers/template3/1/bg.png">
                <input hidden name="img_2_input" id="img_2_input" value="images/door-hangers/template3/1/person.png">
                <input hidden name="img_3_input" id="img_3_input" value="images/door-hangers/template3/2/bg.png">
                <input hidden name="img_4_input" id="img_3_input" value="images/door-hangers/template3/2/person.png">
                <div class="page">
                    {{-- Image --}}
                    <div class="absolute" style="top: 0;left:0;">
                        <img id="img_1" src="images/door-hangers/template3/1/bg.png" alt="" width="1001px"
                            height="1679px">
                    </div>
                    <div class="absolute" style="top: 0;left:0;">
                        <img src="images/door-hangers/template3/1/overlay.png" alt="">
                    </div>
                    <div class="absolute" style="top: 1435px;left:0;">
                        <img src="images/door-hangers/template3/1/gold.png" alt="">
                    </div>
                    <div class="absolute" style="top: 1150px;left:0;">
                        <img id="img_2" src="images/door-hangers/template3/1/person.png" alt="" width="611px"
                            height="1067px">
                    </div>
                    <div class="absolute" style="bottom: 0;left:0;">
                        <img src="images/door-hangers/template3/1/bottom.png" alt="">
                    </div>
                    <div class="absolute" style="bottom: 105px;left:450px;">
                        <img src="images/door-hangers/template3/1/icons.png" alt="">
                    </div>

                    {{-- Text --}}
                    <div class="absolute w-100 text-right" style="top: 500px;right:70px;left:70px">
                        <p class="oswald-med white text-1" style="font-size:100px;line-height:100px">I’M NOT JUST A
                            REALTOR,
                            I’M
                            YOUR</p>
                        <p class="gochi gold text-2" style="font-size:150px;line-height:140px">Neighbor!</p>
                    </div>
                    <div class="absolute w-100 text-right" style="top: 1000px;right:70px;left:70px">
                        <p class="oswald-med white text-3" style="font-size:40px;">BUY A HOUSE WITH ME
                            AND<br>RECEIVE A
                            FREE <span class="gold oswald-med">APPRAISAL<br>& INSPECTION</span></p>
                    </div>
                    <div class="absolute w-100 text-right" style="top: 1280px;right:120px;left:70px">
                        <p class="oswald-med white text-4" style="font-size:40px;">CALL TODAY<br>FOR A FREE
                            <span class="gold oswald-med">HOME<br>EVALUATION</span>
                        </p>
                    </div>
                    <div class="absolute w-100 text-right" style="top: 1750px;right:70px;left:70px">
                        <p class="white extra-bold text-5"
                            style="font-size:150px;line-height:130px;letter-spacing:-3px">
                            DENISSE<br>UYEMA
                        </p>
                    </div>
                    <div class="absolute" style="top: 2020px;right:70px;left:400px;border-bottom:1px solid white">
                    </div>
                    <div class="absolute w-100 text-right" style="top: 2020px;right:70px;">
                        <p class="oswald-med white text-6" style="font-size: 50px">REALTOR ASSOCIATE</p>
                    </div>
                    <div class="absolute w-100" style="top: 2260px;left:550px;">
                        <p class="white text-7" style="font-size: 50px">(305) 709-1888</p>
                    </div>
                    <div class="absolute w-100" style="top: 2375px;left:550px;">
                        <p class="white text-8" style="font-size: 30px;line-height:30px">Denisse@luxeknows.com</p>
                        <p class="white text-9" style="font-size: 30px;line-height:30px">www.luxeknows.com</p>
                    </div>
                    <div class="page_break"></div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <div class="mb-10">
                    <label for="page-1-img-1">BG Image</label>
                    <button type="button" class="mt-3" onclick="openInputFile('img-1-input')">Choose Image</button><br>
                    <input type="file" id="img-1-input" onchange="img_1_change()" style="display: none;">
                    <button type="button" class="mt-1" onclick="startCropper(1001/1679)">Crop</button>
                    <button type="button" onclick="img_1_crop()">Save Crop</button>
                </div>
                <div class="">
                    <label for="text-1">Text 1</label>
                    <input type="text" id="text-1" name="text_1" value="I’M NOT JUST A REALTOR, I’M YOUR">
                    <input type="text" id="text-2" name="text_2" value="Neighbor!">
                </div>
                <div>
                    <label for="text-2">Text 2</label>
                    <input type="text" id="text-3" name="text_3"
                        value="BUY A HOUSE WITH ME AND <br>RECEIVE A FREE <span class='gold oswald-med'>APPRAISAL<br>& INSPECTION</span>">
                </div>
                <div>
                    <label for="text-2">Text 3</label>
                    <input type="text" id="text-4" name="text_4"
                        value="CALL TODAY<br>FOR A FREE <span class='gold oswald-med'>HOME<br>EVALUATION</span>">
                </div>
                <div>
                    <label for="text-2">Name</label>
                    <input type="text" id="text-5" name="text_5" value="DENISSE<br>UYEMA">
                </div>
                <div>
                    <label for="text-2">Position</label>
                    <input type="text" id="text-6" name="text_6" value="REALTOR ASSOCIATE">
                </div>
                <div class="mb-10">
                    <label for="page-1-img-1">Agent</label>
                    <button type="button" class="mt-3" onclick="openInputFile('img-2-input')">Choose Image</button><br>
                    <input type="file" id="img-2-input" onchange="img_2_change()" style="display: none;">
                    <button type="button" class="mt-1" onclick="startCropper(611/1067)">Crop</button>
                    <button type="button" onclick="img_2_crop()">Save Crop</button>
                </div>
                <div>
                    <label for="text-2">Info</label>
                    <input type="text" id="text-7" name="text_7" value="(305) 709-1888">
                    <input type="text" id="text-8" name="text_8" value="Denisse@luxeknows.com">
                    <input type="text" id="text-9" name="text_9" value="www.luxeknows.com">
                </div>
            </div>
        </div>
        <div class="row-divider"></div>
        <div class="row">
            <div class="row-image">
                <div class="page">
                    {{-- Image --}}
                    <div class="absolute" style="top: 0;left:0;">
                        <img id="img_3" src="images/door-hangers/template3/2/bg.png" alt="" width="1001px"
                            height="1078px">
                    </div>
                    <div class="absolute" style="top: 0;left:0;">
                        <img src="images/door-hangers/template3/2/overlay.png" alt="">
                    </div>
                    <div class="absolute" style="bottom: 0;left:0;">
                        <img src="images/door-hangers/template3/2/bottom.png" alt="">
                    </div>
                    <div class="absolute" style="top: 1200px;text-align:center;width:100%">
                        <img src="images/door-hangers/template3/2/tables.png" alt="">
                    </div>
                    <div class="absolute" style="bottom: 0;left:50px;">
                        <img id="img_4" src="images/door-hangers/template3/2/person.png" alt="" width="353px"
                            height="494px">
                    </div>
                    <div class="absolute" style="bottom: 80px;left:450px;">
                        <img src="images/door-hangers/template3/2/icons.png" alt="">
                    </div>
                    {{-- Text --}}
                    <div class="absolute" style="top: 520px;left:70px;">
                        <p class="text-10 white oswald-med" style="font-size: 60px;line-height:65px">CONTACT ME FOR A
                            FREE<br>COMPARATIVE MARKET
                            ANALYSIS<br>OF <span class="gold oswald-med">YOUR HOME</span></p>
                    </div>
                    <div class="absolute" style="top: 820px;left:70px;">
                        <p class="text-11 white bold" style="font-size: 90px;line-height:85px">I live right down<br>the
                            street!
                        </p>
                    </div>
                    <div class="absolute w-100 text-right" style="top: 1090px;right:70px;">
                        <p class="text-12 gold bold" style="font-size:70px;">Closed <span class="white"
                                style="font-size: 40px;font-weight:300;">Within
                                The Last 30 Days</span>
                        </p>
                    </div>
                    <div class="absolute" style="top: 1210px;left:85px;">
                        <p class="gold" style="font-size:35px;">Address</p>
                        <p class="text-13 white" style="font-size:28px;margin-top:20px">9340 SW 174 St</p>
                        <p class="text-14 white" style="font-size:28px;margin-top:30px">8301 SW 164 St</p>
                        <p class="text-15 white" style="font-size:28px;margin-top:25px">9340 SW 174 St</p>
                        <p class="text-16 white" style="font-size:28px;margin-top:30px">8301 SW 164 St</p>
                    </div>
                    <div class="absolute" style="top: 1210px;left:340px;">
                        <p class="" style="font-size:35px;margin-left:-10px;">Sale Price</p>
                        <p class="text-17 white" style="font-size:28px;margin-top:20px">$466,000</p>
                        <p class="text-18 white" style="font-size:28px;margin-top:30px">$466,000</p>
                        <p class="text-19 white" style="font-size:28px;margin-top:25px">$466,000</p>
                        <p class="text-20 white" style="font-size:28px;margin-top:30px">$466,000</p>
                    </div>
                    <div class="absolute" style="top: 1210px;left:580px;">
                        <p class="" style="font-size:35px;margin-left:-60px;">Beds/Baths</p>
                        <p class="text-21 white" style="font-size:28px;margin-top:20px">4/3</p>
                        <p class="text-22 white" style="font-size:28px;margin-top:30px">4/3</p>
                        <p class="text-23 white" style="font-size:28px;margin-top:25px">4/3</p>
                        <p class="text-24 white" style="font-size:28px;margin-top:30px">4/3</p>
                    </div>
                    <div class="absolute" style="top: 1210px;left:740px;">
                        <p class="gold" style="font-size:35px;margin-left:0px;">Living Area</p>
                        <p class="text-25 white" style="font-size:28px;margin-top:20px">2,627 SqFt</p>
                        <p class="text-26 white" style="font-size:28px;margin-top:30px">2,627 SqFt</p>
                        <p class="text-27 white" style="font-size:28px;margin-top:25px">2,627 SqFt</p>
                        <p class="text-28 white" style="font-size:28px;margin-top:30px">2,627 SqFt</p>
                    </div>
                    <div class="absolute" style="top: 1680px;left:85px;">
                        <p class="gold" style="font-size:35px;">Address</p>
                        <p class="text-29 white" style="font-size:28px;margin-top:23px">9340 SW 174 St</p>
                        <p class="text-30 white" style="font-size:28px;margin-top:30px">8301 SW 164 St</p>
                        <p class="text-31 white" style="font-size:28px;margin-top:25px">9340 SW 174 St</p>
                        <p class="text-32 white" style="font-size:28px;margin-top:30px">8301 SW 164 St</p>
                    </div>
                    <div class="absolute" style="top: 1680px;left:340px;">
                        <p class="" style="font-size:35px;margin-left:-10px;">Sale Price</p>
                        <p class="text-33 white" style="font-size:28px;margin-top:23px">$466,000</p>
                        <p class="text-34 white" style="font-size:28px;margin-top:30px">$466,000</p>
                        <p class="text-35 white" style="font-size:28px;margin-top:25px">$466,000</p>
                        <p class="text-36 white" style="font-size:28px;margin-top:30px">$466,000</p>
                    </div>
                    <div class="absolute" style="top: 1680px;left:580px;">
                        <p class="" style="font-size:35px;margin-left:-60px;">Beds/Baths</p>
                        <p class="text-37 white" style="font-size:28px;margin-top:23px">4/3</p>
                        <p class="text-38 white" style="font-size:28px;margin-top:30px">4/3</p>
                        <p class="text-39 white" style="font-size:28px;margin-top:25px">4/3</p>
                        <p class="text-40 white" style="font-size:28px;margin-top:30px">4/3</p>
                    </div>
                    <div class="absolute" style="top: 1680px;left:740px;">
                        <p class="gold" style="font-size:35px;margin-left:0px;">Living Area</p>
                        <p class="text-41 white" style="font-size:28px;margin-top:23px">2,627 SqFt</p>
                        <p class="text-42 white" style="font-size:28px;margin-top:30px">2,627 SqFt</p>
                        <p class="text-43 white" style="font-size:28px;margin-top:25px">2,627 SqFt</p>
                        <p class="text-44 white" style="font-size:28px;margin-top:30px">2,627 SqFt</p>
                    </div>
                    <div class="absolute w-100 text-right" style="top: 1560px;right:70px;">
                        <p class="text-45 gold bold" style="font-size:70px;letter-spacing:3px">Listed <span
                                class="white" style="font-size: 40px;font-weight:300;">Within
                                The Last 30 Days</span>
                        </p>
                    </div>
                    <div class="absolute " style="bottom: 240px;left:450px;">
                        <p class="text-46 bold" style="font-size:60px;line-height:50px">DENISSE UYEMA</p>
                        <p class="text-47" style="font-size:40px;line-height:30px">Realtor Associate</p>
                    </div>
                    <div class="absolute" style="bottom: 79px;left:510px;">
                        <p class="text-48" style="font-size:35px;line-height:65px">(305) 965 3727</p>
                        <p class="text-49" style="font-size:35px;line-height:45px;margin-bottom:3px">
                            Dennise@luxeknows.com</p>
                        <p class="text-50" style="font-size:35px;">www.luxeknows.com</p>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <div class="mb-10 mt-1">
                    <label for="page-1-img-1">BG Image</label>
                    <button type="button" class="mt-3" onclick="openInputFile('img-3-input')">Choose Image</button><br>
                    <input type="file" id="img-3-input" onchange="img_3_change()" style="display: none;">
                    <button type="button" class="mt-1" onclick="startCropper(1001/1078)">Crop</button>
                    <button type="button" onclick="img_3_crop()">Save Crop</button>
                </div>
                <div>
                    <label for="text-2">Text 1</label>
                    <input type="text" id="text-10" name="text_10"
                        value="CONTACT ME FOR A FREE<br>COMPARATIVE MARKET ANALYSIS<br>OF <span class='gold oswald-med'>YOUR HOME</span>">
                </div>
                <div>
                    <label for="text-2">Text 2</label>
                    <input type="text" id="text-11" name="text_11" value="I live right down the street!">
                </div>
                <div>
                    <label for="text-2">Table 1 Title</label>
                    <input type="text" id="text-12" name="text_12"
                        value="Closed <span class='table-title'>Within The Last 30 Days</span>">
                </div>
                <div>
                    <label for="text-2">Listings</label>
                    <div class="flex">
                        <input type="text" id="text-13" name="text_13" value="9340 SW 174 St">
                        <input type="text" id="text-17" name="text_17" value="$466,000">
                        <input type="text" id="text-21" name="text_21" value="4/3">
                        <input type="text" id="text-25" name="text_25" value="2,627 SqFt">
                    </div>
                    <div class="flex">
                        <input type="text" id="text-14" name="text_14" value="9340 SW 174 St">
                        <input type="text" id="text-18" name="text_18" value="$466,000">
                        <input type="text" id="text-22" name="text_22" value="4/3">
                        <input type="text" id="text-26" name="text_26" value="2,627 SqFt">
                    </div>
                    <div class="flex">
                        <input type="text" id="text-15" name="text_15" value="9340 SW 174 St">
                        <input type="text" id="text-19" name="text_19" value="$466,000">
                        <input type="text" id="text-23" name="text_23" value="4/3">
                        <input type="text" id="text-27" name="text_27" value="2,627 SqFt">
                    </div>
                    <div class="flex">
                        <input type="text" id="text-16" name="text_16" value="9340 SW 174 St">
                        <input type="text" id="text-20" name="text_20" value="$466,000">
                        <input type="text" id="text-24" name="text_24" value="4/3">
                        <input type="text" id="text-28" name="text_28" value="2,627 SqFt">
                    </div>
                </div>
                <div>
                    <label for="text-2">Table 2 Title</label>
                    <input type="text" id="text-45" name="text_45"
                        value="Listed <span class='table-title'>Within The Last 30 Days</span>">
                </div>
                <div>
                    <label for="text-2">Listings</label>
                    <div class="flex">
                        <input type="text" id="text-29" name="text_29" value="9340 SW 174 St">
                        <input type="text" id="text-33" name="text_33" value="$466,000">
                        <input type="text" id="text-37" name="text_37" value="4/3">
                        <input type="text" id="text-41" name="text_41" value="2,627 SqFt">
                    </div>
                    <div class="flex">
                        <input type="text" id="text-30" name="text_30" value="9340 SW 174 St">
                        <input type="text" id="text-34" name="text_34" value="$466,000">
                        <input type="text" id="text-38" name="text_38" value="4/3">
                        <input type="text" id="text-42" name="text_42" value="2,627 SqFt">
                    </div>
                    <div class="flex">
                        <input type="text" id="text-31" name="text_31" value="9340 SW 174 St">
                        <input type="text" id="text-35" name="text_35" value="$466,000">
                        <input type="text" id="text-39" name="text_39" value="4/3">
                        <input type="text" id="text-43" name="text_43" value="2,627 SqFt">
                    </div>
                    <div class="flex">
                        <input type="text" id="text-32" name="text_32" value="9340 SW 174 St">
                        <input type="text" id="text-36" name="text_36" value="$466,000">
                        <input type="text" id="text-40" name="text_40" value="4/3">
                        <input type="text" id="text-44" name="text_44" value="2,627 SqFt">
                    </div>
                </div>
                <div class="mb-10">
                    <label for="page-1-img-1">Agent</label>
                    <button type="button" class="mt-3" onclick="openInputFile('img-4-input')">Choose Image</button><br>
                    <input type="file" id="img-4-input" onchange="img_4_change()" style="display: none;">
                    <button type="button" class="mt-1" onclick="startCropper(353/494)">Crop</button>
                    <button type="button" onclick="img_4_crop()">Save Crop</button>
                </div>
                <div class="mb-10">
                    <label for="page-1-img-1">Agent Info</label>
                    <input type="text" id="text-46" name="text_46" value="DENISSE UYEMA">
                    <input type="text" id="text-47" name="text_47" value="Realtor Associate">
                    <input type="text" id="text-48" name="text_48" value="(305) 965 3727">
                    <input type="text" id="text-49" name="text_49" value="Dennise@luxeknows.com">
                    <input type="text" id="text-50" name="text_50" value="www.luxeknows.com">
                </div>
                <div class="flex">
                    <div class="" style="width: 345px;padding-bottom:10px;">
                        <button type="submit" name="action" value="Generate" class="generate">Generate</button>
                        {{-- <button type="submit" name="action" value="Save" class="generate">Save</button>
                        <br>
                        JSON Upload:
                        <input type="file" id="jsonFileUpload" onchange="jsonFileUploaded()">--}}
                    </div>
                </div>
            </div>
        </div>
        </div>
    </form>
</body>

<script>
    $("textarea").change(function(event) {
        var event_id = event.target.id;
        if (event_id == "text-23") {
            var text = $("#text-23").val();
            var textarea = document.getElementsByClassName("text-23")[0];
            textarea.innerHTML = text;
        }
    });
    function change_font_size(select_input){
        console.log(select_input);
        var select_id = select_input.id;
        var selector = $('#'+select_id);
        var element_to_edit = selector.attr('data-id-to-change');
        var font_size = selector.val();
        remove_classes(element_to_edit);
        $("."+element_to_edit).addClass(font_size);
    }
    function remove_classes(element){
        $("."+element+"").removeClass('small');
        $("."+element+"").removeClass('normal');
        $("."+element+"").removeClass('large');
    }
    $(document).ready(function() {        
        $("input").change(function(event) {
            var event_id = event.target.id;
            var event_element = $("#" + event_id)
            var export_var = $("." + event_id);
            export_var.html(event_element.val());
        }); 
    });

    
    function img_6_change(){
        var form_data = new FormData();
        form_data.append("file", $("#img-6-input")[0].files[0]);
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
            success: function(output){
                $("#image").attr('src', 'uploadedimages/' + output)
                getBase64Image(document.getElementById("image"),function(base64){
                    $("#img_6").attr('src', 'uploadedimages/' + output);
                    $("input[name=img_6_input]").val('uploadedimages/' + output);
                });
                $(".page").css("opacity", "1");
            }
        });
    }

    function img_6_crop(){
        cropper.getCroppedCanvas().toBlob((blob) => {
        console.log("getCroppedCanvas")
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
            success: function(output){
                cropper.destroy();
                $("#image").attr('src', 'uploadedimages/' + output)
                getBase64Image(document.getElementById("image"),function(base64){
                    $("#img_6").attr('src', 'uploadedimages/' + output);
                    $("input[name=img_6_input]").val('uploadedimages/' + output);
                });
                $(".page").css("opacity", "1");
            }
        });
        
        }/*, 'image/png' */);
    }
    
    function img_5_change(){
        var form_data = new FormData();
        form_data.append("file", $("#img-5-input")[0].files[0]);
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
            success: function(output){
                $("#image").attr('src', 'uploadedimages/' + output)
                getBase64Image(document.getElementById("image"),function(base64){
                    $("#img_5").attr('src', 'uploadedimages/' + output);
                    $("input[name=img_5_input]").val('uploadedimages/' + output);
                });
                $(".page").css("opacity", "1");
            }
        });
    }

    function img_5_crop(){
        cropper.getCroppedCanvas().toBlob((blob) => {
        console.log("getCroppedCanvas")
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
            success: function(output){
                cropper.destroy();
                $("#image").attr('src', 'uploadedimages/' + output)
                getBase64Image(document.getElementById("image"),function(base64){
                    $("#img_5").attr('src', 'uploadedimages/' + output);
                    $("input[name=img_5_input]").val('uploadedimages/' + output);
                });
                $(".page").css("opacity", "1");
            }
        });
        
        }/*, 'image/png' */);
    }
    
    function img_4_change(){
        var form_data = new FormData();
        form_data.append("file", $("#img-4-input")[0].files[0]);
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
            success: function(output){
                $("#image").attr('src', 'uploadedimages/' + output)
                getBase64Image(document.getElementById("image"),function(base64){
                    $("#img_4").attr('src', 'uploadedimages/' + output);
                    $("input[name=img_4_input]").val('uploadedimages/' + output);
                });
                $(".page").css("opacity", "1");
            }
        });
    }

    function img_4_crop(){
        cropper.getCroppedCanvas().toBlob((blob) => {
        console.log("getCroppedCanvas")
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
            success: function(output){
                cropper.destroy();
                $("#image").attr('src', 'uploadedimages/' + output)
                getBase64Image(document.getElementById("image"),function(base64){
                    $("#img_4").attr('src', 'uploadedimages/' + output);
                    $("input[name=img_4_input]").val('uploadedimages/' + output);
                });
                $(".page").css("opacity", "1");
            }
        });
        
        }/*, 'image/png' */);
    }
    
    function img_3_change(){
        var form_data = new FormData();
        form_data.append("file", $("#img-3-input")[0].files[0]);
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
            success: function(output){
                $("#image").attr('src', 'uploadedimages/' + output)
                getBase64Image(document.getElementById("image"),function(base64){
                    $("#img_3").attr('src', 'uploadedimages/' + output);
                    $("input[name=img_3_input]").val('uploadedimages/' + output);
                });
            }
        });
    }

    function img_3_crop(){
        cropper.getCroppedCanvas().toBlob((blob) => {
        console.log("getCroppedCanvas")
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
            success: function(output){
                cropper.destroy();
                $("#image").attr('src', 'uploadedimages/' + output)
                getBase64Image(document.getElementById("image"),function(base64){
                    $("#img_3").attr('src', 'uploadedimages/' + output);
                    $("input[name=img_3_input]").val('uploadedimages/' + output);
                });
                $(".page").css("opacity", "1");
            }
        });
        
        }/*, 'image/png' */);
    }

    function img_2_change(){
        var form_data = new FormData();
        form_data.append("file", $("#img-2-input")[0].files[0]);
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
            success: function(output){
                $("#image").attr('src', 'uploadedimages/' + output)
                getBase64Image(document.getElementById("image"),function(base64){
                    $("#img_2").attr('src', 'uploadedimages/' + output);
                    $("input[name=img_2_input]").val('uploadedimages/' + output);
                });
            }
        });
    }

    function img_2_crop(){
        cropper.getCroppedCanvas().toBlob((blob) => {
        console.log("getCroppedCanvas")
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
            success: function(output){
                cropper.destroy();
                $("#image").attr('src', 'uploadedimages/' + output)
                getBase64Image(document.getElementById("image"),function(base64){
                    $("#img_2").attr('src', 'uploadedimages/' + output);
                    $("input[name=img_2_input]").val('uploadedimages/' + output);
                });
                $(".page").css("opacity", "1");
            }
        });
        
        }/*, 'image/png' */);
    }

    function img_1_change(){
        var form_data = new FormData();
        form_data.append("file", $("#img-1-input")[0].files[0]);
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
            success: function(output){
                $("#image").attr('src', 'uploadedimages/' + output)
                getBase64Image(document.getElementById("image"),function(base64){
                    $("#img_1").attr('src', 'uploadedimages/' + output);
                    $("input[name=img_1_input]").val('uploadedimages/' + output);
                });
                $(".page").css("display", "block");
            }
        });
    }

    function img_1_crop(){
        cropper.getCroppedCanvas().toBlob((blob) => {
        console.log("getCroppedCanvas")
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
            success: function(output){
                cropper.destroy();
                $("#image").attr('src', 'uploadedimages/' + output)
                getBase64Image(document.getElementById("image"),function(base64){
                    $("#img_1").attr('src', 'uploadedimages/' + output);
                    $("input[name=img_1_input]").val('uploadedimages/' + output);
                });
                $(".page").css("opacity", "1");
            }
        });
        
        }/*, 'image/png' */);
    }

    var cropper;
    function startCropper(ratio){
        var image = document.getElementById("image");
        $(".page").css("opacity", "0");
        cropper = new Cropper(image, {
            aspectRatio: ratio,
        });
    }

    function convert(oldImag, callback) {
        var img = new Image();
        img.onload = function(){
            callback(img)
        }
        img.setAttribute('crossorigin', 'anonymous');
        img.src = oldImag.src;
    }
    function getBase64Image(img,callback) {
        convert(img, function(newImg){
            var canvas = document.createElement("canvas");
            canvas.width = newImg.width;
            canvas.height = newImg.height;
            var ctx = canvas.getContext("2d");
            ctx.drawImage(newImg, 0, 0);
            var base64=canvas.toDataURL("image/png");
            callback(base64)
        })
    }
    function openInputFile(id) {
        $('#' + id).click()
    }
</script>

</html>