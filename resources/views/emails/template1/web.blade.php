<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email Blasts</title>
</head>
@include('includes.fonts')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Gochi+Hand&display=swap');

    * {
        font-family: 'Montserrat';
    }

    .gochi {
        font-family: 'Gochi Hand', cursive;
        font-weight: 400;
    }

    label {
        background-color: #262626;
        color: #fff;
        padding: 10px;
        display: block;
        width: 150px;
        font-family: 'gothicbold';
        font-size: 15px;
        margin-top:5px;
    }

    .row {
        display: flex;
    }

    .row-divider {
        height: 3px;
        background-color: black;
    }

    .column-divider {
        min-height: 100%;
        height: 100%;
        width: 210px;
    }

    .row-input {
        margin: auto 0;
        max-width: 650px;
    }

    input,
    textarea {
        font-size: 15px;
        margin-top: 10px;
        margin-bottom: 5px;
        width: calc(100% - 20px);
        border: 1px solid #262626;
        font-family: 'gothicregular';
        padding: 10px;
    }
    select {
        border: 1px solid #262626;
        font-family: 'gothicregular';
        padding: 10px;
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
        justify-content: flex-end;
    }
    .row-image {
        width: 800px;
        height: auto;
    }

    .page {
        width: 1000px;
        position: relative;
        height: 3695px;
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

    .profile-pic {
        width: 200px;
        height: 200px;
        border: 10px solid white;
    }
    .personal {
        left: 480px;
    }

    .info-size {
        font-size: 25px;
        left: 520px;
    }

    .diagonal {
        min-width: 350px;
        border-left: 10px solid #C9A668;
        background-color: black;
        height: 120px;
    }

    .cropper-container {
        position: fixed !important;
        top: -135% !important;
        z-index: 100;
    }

    .text-17.extra-small,
    .text-24.extra-small {
        margin-top: 6px;
        font-size: 18px !important;
    }

    .text-17.small,
    .text-24.small {
        margin-top: 3px;
        font-size: 22px !important;
    }

    .text-17.normal,
    .text-24.normal {
        font-size: 25px !important;
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
    <form action="{{ route('email-template-1') }}" method="POST">
        @csrf
        <div class="row">
            <div class="row-image">
                <img src="" id="image" data-replace-attribute="src" data-name-replace="image" style="display: none;">
                <input hidden name="img_1_input" id="img_1_input" value="images/emails/template1/bg.jpg">
                <input hidden name="img_2_input" id="img_2_input" value="images/emails/template1/circle-1.jpg">
                <input hidden name="img_3_input" id="img_3_input" value="images/emails/template1/circle-2.jpg">
                <input hidden name="img_4_input" id="img_4_input" value="images/emails/template1/circle-3.jpg">
                <input hidden name="img_5_input" id="img_5_input" value="images/emails/template1/agent-1.jpg">
                <input hidden name="img_6_input" id="img_6_input" value="images/emails/template1/agent-2.jpg">

                <div class="page">
                    {{-- Images --}}
                    <div class="absolute">
                        <img id="img_1" src="images/emails/template1/bg.jpg" alt=""
                            style="width: 1000px;height:1000px;object-fit:cover;">
                    </div>
                    <div class="absolute">
                        <img src="images/emails/template1/main 2.png" alt="" style="width: 1000px;height:3695px;">
                    </div>
                    <div class="absolute circle">
                        <span>
                            <img id="img_2" class="circle" src="images/emails/template1/circle-1.jpg" alt="">
                        </span>
                        <span>
                            <img id="img_3" class="circle" src="images/emails/template1/circle-2.jpg" alt="">
                        </span>
                        <span>
                            <img id="img_4" class="circle" src="images/emails/template1/circle-3.jpg" alt="">
                        </span>
                    </div>
                    <div class="absolute" style="top:54%;left:60px;">
                        <img src="images/emails/triangles.png" alt="" height="300px">
                    </div>
                    <div class="absolute" style="top:72%;left:195px;">
                        <img id="img_5" class="profile-pic" src="images/emails/template1/agent-1.jpg" alt="">
                    </div>
                    <div class="absolute personal" style="top:74.8%;">
                        <img src="images/emails/template1/icons.png" alt="" height="120px">
                    </div>
                    <div class="absolute" style="top:82.3%;left:195px;">
                        <img id="img_6" class="profile-pic" src="images/emails/template1/agent-2.jpg" alt="">
                    </div>
                    <div class="absolute personal" style="top:84.8%;">
                        <img src="images/emails/template1/icons.png" alt="" height="120px">
                    </div>
                    <div class="absolute" style="top:92.9%;width:100%;text-align:center;">
                        <img src="images/emails/template1/logos.png" alt="" width="200px">
                    </div>

                    {{-- Text --}}
                    <div class="absolute" style="text-align: right;top:540px;right:0px;">
                        <div class="diagonal">
                            <h1></h1>
                        </div>
                    </div>
                    <div class="absolute" style="text-align: right;top:530px;right:50px;">
                        <h1 class="gold text-1" style="font-size:110px;">
                            Just</h1>
                    </div>
                    <div class="absolute" style="text-align: right;top:630px;right:50px;">
                        <h1 class="text-2" style="font-size:150px;">Listed</h1>
                    </div>
                    <div class="absolute" style="text-align: right;top:22.5%;right:50px;">
                        <h1 class="gochi text-3" style="font-size:100px;">MiraMar</h1>
                    </div>
                    <div class="absolute" style="text-align: right;top:25%;right:50px;">
                        <h1 class="gold text-4" style="font-size:60px;">775 NE 77 TERRACE</h1>
                    </div>
                    <div class="absolute" style="text-align: center;top:27.9%;width:700px;left:250px;">
                        <h1 class="white text-5" style="font-size:30px;">6 BEDS | 6 BATHS | 1 HALF BATH</h1>
                    </div>
                    <div class="absolute" style="text-align: right;top:30%;right:50px;">
                        <h1 class="gold text-6" style="font-size:45px;">OVERSIZED CUSTOM POOL</h1>
                    </div>
                    <div class="absolute" style="text-align: right;top:32%;right:50px;">
                        <h1 class="text-7" style="font-size:45px;color:#595959">THEATER ROOM</h1>
                    </div>
                    <div class="absolute" style="text-align: right;top:34.3%;right:80px;">
                        <h1 class="white text-8" style="font-size:38px;">LIVING AREA: 6,800 SQFT</h1>
                    </div>
                    <div class="absolute" style="text-align: center;top:46.9%;left:10px;width: 100%;">
                        <h1 class="white text-9" style="font-size:55px;">EXPLORE ALL</h1>
                    </div>
                    <div class="absolute" style="top:51%;left:150px;right:150px;">
                        <h1 class="gold text-10" style="font-size:40px;">Life, in Luxury</h1>
                        <p class="text-11"
                            style="font-size:37px;line-height:45px;text-align:justify;font-family:Lato;font-weight:300;">
                            A life in
                            luxury is something
                            conducive to
                            living in a state of
                            joy and great
                            comfort. A luxury house
                            should belong to
                            its surroundings and then it should belong to the people that are going to live in it.
                            Harmony and ease
                            are the ultimate
                            sophistication in a home. The <b>MiraMar</b> house is meticulously crafted to deliver that
                            essential
                            comfort in
                            your daily
                            life.</p>
                    </div>
                    <div class="absolute" style="text-align: center;top:68.2%;left:15px;width:100%;">
                        <h1 class="white text-12" style="font-size:55px;">VISIT SITE</h1>
                    </div>
                    <div class="absolute personal" style="top:71.6%;">
                        <h1 class="gold text-13" style="font-size:35px;">Wesley Ulloa</h1>
                    </div>
                    <div class="absolute personal" style="top:72.7%;">
                        <h1 class="text-14" style="font-size:20px;">Licensed Real Estate Broker</h1>
                    </div>

                    <div class="absolute info-size" style="top:74.8%;">
                        <p class="text-15">305.986.7041</p>
                    </div>
                    <div class="absolute info-size" style="top:76%;">
                        <p class="text-16">305.809.7650</p>
                    </div>
                    <div class="absolute info-size" style="top:77.2%;">
                        <p class="text-17">wesley@Luxeknows.com</p>
                    </div>

                    <div class="absolute" style="width:100%;text-align: center;top:79.5%;left:-160px;">
                        <h1 class="white text-18" style="font-size:33px;">CALL WESLEY</h1>
                    </div>
                    <div class="absolute" style="width:100%;text-align: center;top:79.5%;left:165px;">
                        <h1 class="gold text-19" style="font-size:33px;">EMAIL WESLEY</h1>
                    </div>
                    <div class="absolute personal" style="top:82%;">
                        <h1 class="gold text-20" style="font-size:35px;">Wesley Ulloa</h1>
                    </div>
                    <div class="absolute personal" style="top:83.1%;">
                        <h1 class="text-21" style="font-size:20px;">Licensed Real Estate Broker</h1>
                    </div>
                    <div class="absolute info-size" style="top:84.8%;">
                        <p class="text-22">305.986.7041</p>
                    </div>
                    <div class="absolute info-size" style="top:86.1%;">
                        <p class="text-23">305.809.7650</p>
                    </div>
                    <div class="absolute info-size" style="top:87.2%;">
                        <p class="text-24">wesley@Luxeknows.com</p>
                    </div>
                    <div class="absolute" style="width:100%;text-align: center;top:89.9%;left:-160px;">
                        <h1 class="white text-25" style="font-size:33px;">CALL WESLEY</h1>
                    </div>
                    <div class="absolute" style="width:100%;text-align: center;top:89.9%;left:165px;">
                        <h1 class="gold text-26" style="font-size:33px;">EMAIL WESLEY</h1>
                    </div>
                    <div class="absolute" style="text-align: center;top:97%;width: 100%;">
                        <h1 class="text-27" style="font-size:22px;font-weight:400;">55 MERRICK WAY SUITE 402, CORAL
                            GABLES, FL
                            33134</h1>
                    </div>
                    <div class="absolute" style="text-align: center;top:98.8%;width: 100%;">
                        <h1 class="text-28" style="font-size:16px;font-weight:400;color:#9e9e9e">Copyright © 2021 LUXE
                            Properties, LLC, All
                            rights reserved.</h1>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input" style="max-width: 350px;height:3600px;">
                <div class="absolute" style="top: 250px;">
                    <div class="file-input-width">
                        <label for="page-1-img-1">Main Image</label>
                        <button type="button" class="mt-3" onclick="openInputFile('img-1-input')">Choose Image</button>
                        <input type="file" id="img-1-input" onchange="img_1_change()" style="display: none;">
                        <button type="button" class="mt-1" onclick="startCropper(1)">Crop</button>
                        <button type="button" onclick="img_1_crop()">Save Crop</button>
                    </div>
                </div>
                <div class="flex absolute" style="top:615px;">
                    <div class="pr-10">
                        <label for="text-1">Text</label>
                        <input type="text" id="text-1" name="text_1" value="Just">
                    </div>
                    <div>
                        <label for="text-2">Text</label>
                        <input type="text" id="text-2" name="text_2" value="Listed">
                    </div>
                </div>
                <div class="flex absolute" style="top:875px;">
                    <div class="pr-10">
                        <label for="text-3">Text</label>
                        <input type="text" id="text-3" name="text_3" value="MiraMar">
                    </div>
                    <div>
                        <label for="text-4">Text</label>
                        <input type="text" id="text-4" name="text_4" value="775 NE 77 TERRACE">
                    </div>
                </div>
                <div class="flex absolute" style="top:1010px">
                    <div class="pr-10">
                        <label for="text-5">Text</label>
                        <input type="text" id="text-5" name="text_5" value="6 BEDS | 6 BATHS | 1 HALF BATH">
                    </div>
                    <div>
                        <label for="text-6">Text</label>
                        <input type="text" id="text-6" name="text_6" value="OVERSIZED CUSTOM POOL">
                    </div>
                </div>
                <div class="flex absolute" style="top:1200px">
                    <div class="pr-10">
                        <label for="text-7">Text</label>
                        <input type="text" id="text-7" name="text_7" value="THEATER ROOM">
                    </div>
                    <div>
                        <label for="text-8">Text</label>
                        <input type="text" id="text-8" name="text_8" value="LIVING AREA: 6,800 SQFT">
                    </div>
                </div>
                <div class="absolute" style="top:1331px">
                    <div>
                        <div class="file-input-width">
                            <label for="page-1-img-1">Circle 1</label>
                            <button type="button" class="mt-3" onclick="openInputFile('img-2-input')">Choose Image</button>
                            <input type="file" id="img-2-input" onchange="img_2_change()" style="display: none;">
                            <button type="button" class="mt-1" onclick="startCropper(1)">Crop</button>
                            <button type="button" onclick="img_2_crop()">Save Crop</button>
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="file-input-width">
                            <label for="page-1-img-1">Circle 2</label>
                            <button type="button" class="mt-3" onclick="openInputFile('img-3-input')">Choose Image</button>
                            <input type="file" id="img-3-input" onchange="img_3_change()" style="display: none;">
                            <button type="button" class="mt-1" onclick="startCropper(1)">Crop</button>
                            <button type="button" onclick="img_3_crop()">Save Crop</button>
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="file-input-width">
                            <label for="page-1-img-1">Circle 3</label>
                            <button type="button" class="mt-3" onclick="openInputFile('img-4-input')">Choose Image</button>
                            <input type="file" id="img-4-input" onchange="img_4_change()" style="display: none;">
                            <button type="button" class="mt-1" onclick="startCropper(1)">Crop</button>
                            <button type="button" onclick="img_4_crop()">Save Crop</button>
                        </div>
                    </div>
                </div>
                <div class="flex absolute" style="top:1772px;">
                    <div class="pr-10">
                        <label for="text-9">Button</label>
                        <input type="text" id="text-9" name="text_9" value="EXPLORE ALL">
                    </div>
                    <div>
                        <label for="text-10">Text</label>
                        <input type="text" id="text-10" name="text_10" value="Life, in Luxury">
                    </div>
                </div>
                <div class="absolute" style="top:1890px;">
                    <div>
                        <label for="text-10">Text</label>
                        <textarea type="text" id="text-11" name="text_11" rows="7" cols="40">A life in luxury is something conducive to living in a state of joy and great comfort. A luxury house should belong to
                        its surroundings and then it should belong to the people that are going to live in it. Harmony and ease are the ultimate
                        sophistication in a home. The <strong>MiraMar</strong> house is meticulously crafted to deliver that essential comfort in your daily
                        life.</textarea>
                    </div>
                </div>
                <div class="absolute" style="top:2407px;">
                    <div>
                        <label for="text-12">Button</label>
                        <input type="text" id="text-12" name="text_12" value="VISIT SITE">
                    </div>
                </div>
                <div class="absolute" style="top:2505px;">
                    <div>
                        <div class="file-input-width">
                            <label for="page-1-img-5">Agent 1</label>
                            <button type="button" class="mt-3" onclick="openInputFile('img-5-input')">Choose Image</button>
                            <input type="file" id="img-5-input" onchange="img_5_change()" style="display: none;">
                            <button type="button" class="mt-1" onclick="startCropper(1)">Crop</button>
                            <button type="button" onclick="img_5_crop()">Save Crop</button>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="pr-10">
                            <label for="text-13">Agent 1</label>
                            <input type="text" id="text-13" name="text_13" value="Wesley Ulloa">
                        </div>
                        <div>
                            <label for="text-14">Agent 1</label>
                            <input type="text" id="text-14" name="text_14" value="Licensed Real Estate Broker">
                        </div>
                    </div>

                    <div class="flex">
                        <div class="pr-10">
                            <label for="text-15">Agent 1</label>
                            <input type="text" id="text-15" name="text_15" value="305.986.7041">
                        </div>
                        <div>
                            <label for="text-16">Agent 1</label>
                            <input type="text" id="text-16" name="text_16" value="305.809.7650">
                        </div>
                    </div>
                    <div>
                        <div>
                            <label for="text-17">Agent 1</label>
                            <input type="text" id="text-17" name="text_17" value="wesley@Luxeknows.com">
                            <select name="text_17_select" id="text_17_select" data-id-to-change="text-17"
                                onchange="change_font_size(this)">
                                <option value="extra-small">Extra Small</option>
                                <option value="small">Small</option>
                                <option value="normal" selected>Normal</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="pr-10">
                            <label for="text-18">Agent 1 Button</label>
                            <input type="text" id="text-18" name="text_18" value="CALL WESLEY">
                        </div>
                        <div>
                            <label for="text-19">Agent 1 Button</label>
                            <input type="text" id="text-19" name="text_19" value="EMAIL WESLEY">
                        </div>
                    </div>
                </div>
                <div class="absolute" style="top:3085px;">
                    <div class="file-input-width">
                        <label for="page-1-img-6">Agent 2</label>
                        <button type="button" class="mt-3" onclick="openInputFile('img-6-input')">Choose Image</button>
                        <input type="file" id="img-6-input" onchange="img_6_change()" style="display: none;">
                        <button type="button" class="mt-1" onclick="startCropper(1)">Crop</button>
                        <button type="button" onclick="img_6_crop()">Save Crop</button>
                    </div>

                    <div class="flex">
                        <div class="pr-10">
                            <label for="text-20">Agent 2</label>
                            <input type="text" id="text-20" name="text_20" value="Wesley Ulloa">
                        </div>
                        <div>
                            <label for="text-21">Agent 2</label>
                            <input type="text" id="text-21" name="text_21" value="Licensed Real Estate Broker">
                        </div>
                    </div>

                    <div class="flex">
                        <div class="pr-10">
                            <label for="text-22">Agent 2</label>
                            <input type="text" id="text-22" name="text_22" value="305.986.7041">
                        </div>
                        <div>
                            <label for="text-23">Agent 2</label>
                            <input type="text" id="text-23" name="text_23" value="305.809.7650">
                        </div>
                    </div>
                    <div>
                        <div>
                            <label for="text-24">Agent 2</label>
                            <input type="text" id="text-24" name="text_24" value="wesley@Luxeknows.com">
                            <select name="text_24_select" id="text_24_select" data-id-to-change="text-24"
                                onchange="change_font_size(this)">
                                <option value="extra-small">Extra Small</option>
                                <option value="small">Small</option>
                                <option value="normal" selected>Normal</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="pr-10">
                            <label for="text-25">Agent 2 Button</label>
                            <input type="text" id="text-25" name="text_25" value="CALL WESLEY">
                        </div>
                        <div>
                            <label for="text-26">Agent 2 Button</label>
                            <input type="text" id="text-26" name="text_26" value="EMAIL WESLEY">
                        </div>
                    </div>
                </div>
                <div class="flex absolute" style="top:3664px;">
                    <div class="pr-10">
                        <label for="text-27">Footer 1</label>
                        <input type="text" id="text-27" name="text_27"
                            value="55 MERRICK WAY SUITE 402, CORAL GABLES, FL 33134">
                    </div>
                    <div>
                        <label for="text-28">Footer 2</label>
                        <input type="text" id="text-28" name="text_28"
                            value="Copyright © 2021 LUXE Properties, LLC, All rights reserved.">
                    </div>
                </div>

                <div class="flex absolute" style="top:3775px;">
                    <div class="" style="width: 345px;">
                        <button type="submit" name="action" value="Generate" class="generate">Generate</button>
                        {{-- <button type="submit" name="action" value="Save" class="generate">Save</button>
                        <br>
                        JSON Upload:
                        <input type="file" id="jsonFileUpload" onchange="jsonFileUploaded()"> --}}
                        <div class="mt-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

<script>
    $("textarea").change(function(event) {
        var event_id = event.target.id;
        if (event_id == "text-11") {
            var text = $("#text-11").val();
            var array = document.getElementsByClassName("text-11");
            var textarea = array[0];
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
        $("."+element+"").removeClass('extra-small');
        $("."+element+"").removeClass('small');
        $("."+element+"").removeClass('normal');
    }
    $(document).ready(function() {        
        $("input").change(function(event) {
            var event_id = event.target.id;
            var event_element = $("#" + event_id)
            var export_var = $("." + event_id);
            export_var.text(event_element.val());
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