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
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap');

    * {
        font-family: 'Montserrat';
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
    }

    .row-divider {
        height: 3px;
        background-color: black;
    }

    .column-divider {
        min-height: 100%;
        height: 100%;
        width: 50px;
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
        width: 800px;
        height: auto;
    }

    .page {
        zoom: .7;
        position: relative;
        width: 1000px;
        height: 3523px;
        left: 0;
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

    .bold-600 {
        font-weight: 600;
    }

    .bold-700 {
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
        top: 67%;
    }

    img.circle {
        border-radius: 77px;
        width: 155px;
        height: 155px;
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
        width: 250px;
        height: 250px;
        border: 10px solid white;
    }

    .personal {
        left: 455px;
    }

    .info-size {
        font-size: 25px;
        left: 500px;
    }

    .diagonal {
        max-width: 350px;
        border-left: 10px solid #C9A668;
        background-color: black;
        height: 120px;
    }

    div.map {
        top: 52.5%;
    }

    img.map {
        width: 280px;
        height: 280px;
        border: 10px solid white;
    }

    div.map-title {
        width: 300px;
        text-align: center;
        top: 61%;
    }

    h1.map-title {
        color: #6d6e71;
        font-size: 35px;
    }

    .cropper-container {
        position: fixed !important;
        top: -800px !important;
        z-index: 100;
    }

    .w-100 {
        width: 100%;
    }

    .text-center {
        text-align: center;
    }

    .info-size {
        left: 518px;
        font-size: 24px;
    }

    .font-gray {
        color: #6d6e71;
    }

    .left-box {
        left: 570px;
    }

    .right-box {
        right: 570px;
    }

    .text-right {
        text-align: right;
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
    <form action="{{ route('email-template-4') }}" method="POST">
        @csrf
        <div class="row">
            <div class="row-image">
                <img src="" id="image" data-replace-attribute="src" data-name-replace="image" style="display: none;">
                <input hidden name="img_1_input" id="img_1_input" value="images/emails/template4/house-1.jpg">
                <input hidden name="img_2_input" id="img_2_input" value="images/emails/template4/house-2.jpg">
                <input hidden name="img_3_input" id="img_3_input" value="images/emails/template4/house-3.jpg">
                <input hidden name="img_4_input" id="img_4_input" value="images/emails/template4/house-4.jpg">
                <input hidden name="img_5_input" id="img_5_input" value="images/emails/template4/agent.jpg">
                <div class="page-wrapper">
                    <div class="page">
                        {{-- Images --}}
                        <div class="absolute">
                            <img src="images/emails/template4/main.jpg" alt="" style="width: 1000px;height:3523px;">
                        </div>
                        <div class="absolute" style="top:35px;left:410px">
                            <img src="images/emails/template4/logo.png" alt="" width="180px" height="202px">
                        </div>
                        <div class="absolute" style="top:405px;left:35px">
                            <img id="img_1" src="images/emails/template4/house-1.jpg" alt="" width="450px"
                                height="450px">
                        </div>
                        <div class="absolute" style="top:885px;left:517px">
                            <img id="img_2" src="images/emails/template4/house-2.jpg" alt="" width="450px"
                                height="450px">
                        </div>
                        <div class="absolute" style="top:1368px;left:35px">
                            <img id="img_3" src="images/emails/template4/house-3.jpg" alt="" width="450px"
                                height="450px">
                        </div>
                        <div class="absolute" style="top:1850px;left:518px">
                            <img id="img_4" src="images/emails/template4/house-4.jpg" alt="" width="450px"
                                height="450px">
                        </div>
                        <div class="absolute" style="top:2790px;left:105px;outline:10px solid white">
                            <img id="img_5" src="images/emails/template4/agent.jpg" alt="" width="270px" height="280px">
                        </div>
                        <div class="absolute" style="top:2951px;left:479px">
                            <img src="images/emails/template4/contact-icons.png" alt="" height="105px">
                        </div>
                        <div class="absolute" style="top:3233px;left:423px">
                            <img src="images/emails/template4/logo-2.png" alt="" width="152px" height="55px">
                        </div>
                        <div class="absolute" style="top:3393px;left:393px">
                            <img src="images/emails/template4/icons.png" alt="" width="215px" height="48px">
                        </div>

                        {{-- Text --}}
                        <div class="absolute w-100 text-center" style="top:300px">
                            <p class="text-1 gold bold-600"
                                style="font-size: 42px;letter-spacing:15px;letter-spacing:12px;">
                                CURRENT PROJECTS
                            </p>
                        </div>
                        {{-- First Box --}}
                        <div class="absolute left-box" style="top:490px">
                            <p class="text-2 gold bold-600" style="font-size: 33px;">123 Salamanca Ave</p>
                        </div>
                        <div class="absolute left-box" style="top:530px">
                            <p class="text-3 font-gray" style="font-size: 25px;">Coral Gables, FL 33134</p>
                        </div>
                        <div class="absolute left-box" style="top:598px">
                            <p class="text-4 font-gray" style="font-size: 25px;">Approx 751 SqFt (1 unit)</p>
                        </div>
                        <div class="absolute left-box" style="top:665px">
                            <p class="text-5 font-gray" style="font-size: 25px;">4 Units | 2 Beds | 1 Bath</p>
                        </div>
                        <div class="absolute left-box" style="top:725px">
                            <p class="text-6 font-gray" style="font-size: 25px;">Starting at: $1,275,000</p>
                        </div>
                        {{-- Second Box --}}
                        <div class="absolute right-box text-right" style="top:970px">
                            <p class="text-7 gold bold-600" style="font-size: 33px;">123 Salamanca Ave</p>
                        </div>
                        <div class="absolute right-box text-right" style="top:1013px">
                            <p class="text-8 font-gray" style="font-size: 25px;">Coral Gables, FL 33134</p>
                        </div>
                        <div class="absolute right-box text-right" style="top:1078px">
                            <p class="text-9 font-gray" style="font-size: 25px;">Approx 751 SqFt (1 unit)</p>
                        </div>
                        <div class="absolute right-box text-right" style="top:1145px">
                            <p class="text-10 font-gray" style="font-size: 25px;">4 Units | 2 Beds | 1 Bath</p>
                        </div>
                        <div class="absolute right-box text-right" style="top:1205px">
                            <p class="text-11 font-gray" style="font-size: 25px;">Starting at: $1,275,000</p>
                        </div>
                        {{-- Third Box --}}
                        <div class="absolute left-box" style="top:1450px">
                            <p class="text-12 gold bold-600" style="font-size: 33px;">123 Salamanca Ave</p>
                        </div>
                        <div class="absolute left-box" style="top:1490px">
                            <p class="text-13 font-gray" style="font-size: 25px;">Coral Gables, FL 33134</p>
                        </div>
                        <div class="absolute left-box" style="top:1555px">
                            <p class="text-14 font-gray" style="font-size: 25px;">Approx 751 SqFt (1 unit)</p>
                        </div>
                        <div class="absolute left-box" style="top:1625px">
                            <p class="text-15 font-gray" style="font-size: 25px;">4 Units | 2 Beds | 1 Bath</p>
                        </div>
                        <div class="absolute left-box" style="top:1690px">
                            <p class="text-16 font-gray" style="font-size: 25px;">Starting at: $1,275,000</p>
                        </div>
                        {{-- Fourth Box --}}
                        <div class="absolute right-box text-right" style="top:1930px">
                            <p class="text-17 gold bold-600" style="font-size: 33px;">123 Salamanca Ave</p>
                        </div>
                        <div class="absolute right-box text-right" style="top:1975px">
                            <p class="text-18 font-gray" style="font-size: 25px;">Coral Gables, FL 33134</p>
                        </div>
                        <div class="absolute right-box text-right" style="top:2040px">
                            <p class="text-19 font-gray" style="font-size: 25px;">Approx 751 SqFt (1 unit)</p>
                        </div>
                        <div class="absolute right-box text-right" style="top:2105px">
                            <p class="text-20 font-gray" style="font-size: 25px;">4 Units | 2 Beds | 1 Bath</p>
                        </div>
                        <div class="absolute right-box text-right" style="top:2170px">
                            <p class="text-21 font-gray" style="font-size: 25px;">Starting at: $1,275,000</p>
                        </div>
                        {{--  --}}
                        <div class="absolute info-size" style="top:2951px;">
                            <p class="text-26 font-gray">305.986.7041</p>
                        </div>
                        <div class="absolute info-size" style="top:2993px;">
                            <p class="text-27 font-gray">305.809.7650</p>
                        </div>
                        <div class="absolute info-size" style="top:3028px;">
                            <p class="text-28 font-gray">wesley@Luxeknows.com</p>
                        </div>
                        <div class="absolute w-100 text-center" style="top:2365px;">
                            <p class="bold-700 font-gray" style="font-size: 35px">TO LEARN MORE<br>ABOUT CURRENT
                                PROJECTS CALL</p>
                        </div>
                        <div class="absolute w-100 text-center" style="top:2465px;">
                            <p class="text-22 bold-700 gold" style="font-size: 70px">305.809.7650</p>
                        </div>
                        <div class="absolute w-100 text-center" style="top:2560px;">
                            <p class="bold-700 font-gray" style="font-size: 35px">OR</p>
                        </div>
                        <div class="absolute w-100 text-center" style="top:2645px;">
                            <p class="text-23 white bold-700" style="font-size: 55px">CLICK HERE</p>
                        </div>
                        <div class="absolute" style="top:2795px;left:474px;">
                            <p class="text-24 gold bold-600" style="font-size: 46px">Wesley Ulloa</p>
                        </div>
                        <div class="absolute" style="top:2857px;left:474px;">
                            <p class="text-25 font-gray bold-600" style="font-size: 28px">Licensed Real Estate Broker
                            </p>
                        </div>
                        <div class="absolute w-100" style="text-align:center;top:3138px;left:-215px;">
                            <p class="text-29 white bold-700" style="font-size: 35px">CALL WESLEY</p>
                        </div>
                        <div class="absolute w-100" style="text-align:center;top:3138px;left:195px;">
                            <p class="text-30 gold bold-700" style="font-size: 35px">EMAIL WESLEY</p>
                        </div>
                        {{-- Footer --}}
                        <div class="absolute w-100" style="text-align: center;top:3325px;">
                            <h1 class="text-31" style="font-size:23px;font-weight:400;letter-spacing:3px">55 MERRICK WAY
                                SUITE
                                402, CORAL
                                GABLES, FL
                                33134</h1>
                        </div>
                        <div class="absolute w-100" style="text-align: center;top:3483px;">
                            <h1 class="" style="font-size:18px;font-weight:400;color:#9e9e9e">Copyright © 2021 LUXE
                                Properties, LLC, All rights reserved.</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input" style="max-width: 350px;">
                <div class="">
                    <label for="text-1">Title</label>
                    <input type="text" id="text-1" name="text_1" value="CURRENT PROJECTS">
                </div>
                <div class="pr-10" style="margin-bottom:10px">
                    <label for="page-1-img-1">First Image</label>
                    <button type="button" class="mt-3" onclick="openInputFile('img-1-input')">Choose Image</button><br>
                    <input type="file" id="img-1-input" onchange="image_change('img-1-input',['img_1'],'img_1_input')" style="display: none;">
                    <button type="button" class="mt-1" onclick="startCropper(1)">Crop</button>
                    <button type="button" onclick="crop_image(['img_1'],'img_1_input')">Save Crop</button>
                </div>
                <div class="">
                    <label for="text-1">First House</label>
                    <input type="text" id="text-2" name="text_2" value="123 Salamanca Ave">
                    <input type="text" id="text-3" name="text_3" value="Coral Gables, FL 33134">
                    <input type="text" id="text-4" name="text_4" value="Approx 751 SqFt (1 unit)">
                    <input type="text" id="text-5" name="text_5" value="4 Units | 2 Beds | 1 Bath">
                    <input type="text" id="text-6" name="text_6" value="Starting at: $1,275,000">
                </div>
                <div class="pr-10" style="margin-bottom:10px">
                    <label for="page-1-img-1">Second Image</label>
                    <button type="button" class="mt-3" onclick="openInputFile('img-2-input')">Choose Image</button><br>
                    <input type="file" id="img-2-input" onchange="image_change('img-2-input',['img_2'],'img_2_input')" style="display: none;">
                    <button type="button" class="mt-1" onclick="startCropper(1)">Crop</button>
                    <button type="button" onclick="crop_image(['img_2'],'img_2_input')">Save Crop</button>
                </div>
                <div class="">
                    <label for="text-1">Second House</label>
                    <input type="text" id="text-7" name="text_7" value="123 Salamanca Ave">
                    <input type="text" id="text-8" name="text_8" value="Coral Gables, FL 33134">
                    <input type="text" id="text-9" name="text_9" value="Approx 751 SqFt (1 unit)">
                    <input type="text" id="text-10" name="text_10" value="4 Units | 2 Beds | 1 Bath">
                    <input type="text" id="text-11" name="text_11" value="Starting at: $1,275,000">
                </div>
                <div class="pr-10" style="margin-bottom:10px">
                    <label for="page-1-img-1">Third Image</label>
                    <button type="button" class="mt-3" onclick="openInputFile('img-3-input')">Choose Image</button><br>
                    <input type="file" id="img-3-input" onchange="image_change('img-3-input',['img_3'],'img_3_input')" style="display: none;">
                    <button type="button" class="mt-1" onclick="startCropper(1)">Crop</button>
                    <button type="button" onclick="crop_image(['img_3'],'img_3_input')">Save Crop</button>
                </div>
                <div class="">
                    <label for="text-1">Third House</label>
                    <input type="text" id="text-12" name="text_12" value="123 Salamanca Ave">
                    <input type="text" id="text-13" name="text_13" value="Coral Gables, FL 33134">
                    <input type="text" id="text-14" name="text_14" value="Approx 751 SqFt (1 unit)">
                    <input type="text" id="text-15" name="text_15" value="4 Units | 2 Beds | 1 Bath">
                    <input type="text" id="text-16" name="text_16" value="Starting at: $1,275,000">
                </div>
                <div class="pr-10" style="margin-bottom:10px">
                    <label for="page-1-img-1">Fourth Image</label>
                    <button type="button" class="mt-3" onclick="openInputFile('img-4-input')">Choose Image</button><br>
                    <input type="file" id="img-4-input" onchange="image_change('img-4-input',['img_4'],'img_4_input')" style="display: none;">
                    <button type="button" class="mt-1" onclick="startCropper(1)">Crop</button>
                    <button type="button" onclick="crop_image(['img_4'],'img_4_input')">Save Crop</button>
                </div>
                <div class="">
                    <label for="text-1">Fourth House</label>
                    <input type="text" id="text-17" name="text_17" value="123 Salamanca Ave">
                    <input type="text" id="text-18" name="text_18" value="Coral Gables, FL 33134">
                    <input type="text" id="text-19" name="text_19" value="Approx 751 SqFt (1 unit)">
                    <input type="text" id="text-20" name="text_20" value="4 Units | 2 Beds | 1 Bath">
                    <input type="text" id="text-21" name="text_21" value="Starting at: $1,275,000">
                </div>
                <div class="">
                    <label for="text-1">Phone Number</label>
                    <input type="text" id="text-22" name="text_22" value="305.809.7650">
                </div>
                <div class="">
                    <label for="text-1">Button</label>
                    <input type="text" id="text-23" name="text_23" value="CLICK HERE">
                </div>
                <div class="pr-10" style="margin-bottom:10px">
                    <label for="page-1-img-1">Agent Image</label>
                    <button type="button" class="mt-3" onclick="openInputFile('img-5-input')">Choose Image</button><br>
                    <input type="file" id="img-5-input" onchange="image_change('img-5-input',['img_5'],'img_5_input')" style="display: none;">
                    <button type="button" class="mt-1" onclick="startCropper(1)">Crop</button>
                    <button type="button" onclick="crop_image(['img_5'],'img_5_input')">Save Crop</button>
                </div>
                <div class="">
                    <label for="text-1">Agent Info</label>
                    <input type="text" id="text-24" name="text_24" value="Wesley Ulloa">
                    <input type="text" id="text-25" name="text_25" value="Licensed Real Estate Broker">
                    <input type="text" id="text-26" name="text_26" value="305.986.7041">
                    <input type="text" id="text-27" name="text_27" value="305.809.7650">
                    <input type="text" id="text-28" name="text_28" value="wesley@Luxeknows.com">
                </div>
                <div class="">
                    <label for="text-1">Agent Buttons</label>
                    <input type="text" id="text-29" name="text_29" value="CALL WESLEY">
                    <input type="text" id="text-30" name="text_30" value="EMAIL WESLEY">
                </div>
                <div class="">
                    <label for="text-1">Footer</label>
                    <input type="text" id="text-31" name="text_31"
                        value="55 MERRICK WAY SUITE 402, CORAL GABLES, FL 33134">
                </div>
                <div class="flex">
                    <div class="" style="width: 345px;">
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
        $("input,textarea").change(function(event) {
            var event_id = event.target.id;
            var event_element = $("#" + event_id)
            var export_var = $("." + event_id);
            export_var.html(event_element.val());
        });    
    });

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
    
    var cropper;
    function startCropper(ratio){
    var image = document.getElementById("image");
    $(".page").css("opacity", "0");
    cropper = new Cropper(image, {
    aspectRatio: ratio,
    });
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