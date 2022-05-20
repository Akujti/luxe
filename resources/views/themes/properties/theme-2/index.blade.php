@extends('themes.layouts.app')
@section('title')
    Properties 2 -
@endsection
@section('css')
@include('includes.fonts')
<style>
    * {
        font-family: "Montserrat";
        font-weight: 400;
    }

    label {
        background-color: #262626;
        color:#fff;
        padding: 10px;
        display: block;
        width: 150px;
        font-family: 'gothicbold';
        margin-top: 10px;
        margin-bottom: 5px;
        font-size: 15px;
    }

    .row {
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
        max-width: 650px;
    }

    input,
    textarea {
        font-size: 15px;
        margin-top: 10px;
        margin-bottom: 5px;
        width: 98%;
        padding: 10px;
        border: 1px solid #262626;
        font-family: 'gothicregular';
    }
    select {
        padding: 10px;
        border: 1px solid #262626;
        font-family: 'gothicregular';
    }

    .button {
        margin-top: 30px;
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

    /* .flex label {
        margin: 10px auto 10px auto !important;
    } */

    .row-image {
        width: 800px;
        height: auto;
    }

    .page {
        position: absolute;
        left: 0;
        background-image: url('/images/themes/new/bg.png');
        background-position: top right;
        background-repeat: no-repeat;
        width: 1080px;
        height: 1080px;
        background-size: 985px;
        zoom: 80%;
    }

    * {
        font-family: 'Montserrat';
    }

    .lato {
        font-family: 'Lato', sans-serif;
    }

    .flex {
        display: flex;
    }

    body {
        padding: 0px;
        margin: 0px;
        background: white;
    }

    .bold {
        font-weight: bold;
    }

    .gold {
        color: #c9a668;
    }

    .absolute {
        position: absolute;
    }

    h1, h2, h3, p {
        margin: 0;
    }

    .text-white {
        color: white;
    }

    .top ul, .left-panel ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    .left-panel ul li {
        float: left;
        padding: 0 10px;
        font-size: 25.29px;
    }

    .top ul li {
        font-size: 28px;
        font-weight: bold;
        padding-right: 10px;
        display: inline;
    }

    .top ul li:last-child, .left-panel ul li:last-child {
        border: none;
    }

    b {
        font-weight: bold;
    }

    .first {
        /*position: absolute;*/
        margin-left: 90px;
        font-weight: 700;
        color: #c9a668;
        font-family: 'Lato', sans-serif;
        background-color: white;
        height: 100%;
        padding-right: 15px;
        padding-top: 27px;
        display: inline-block;
    }

    .second {
        /*position: absolute;*/
        font-weight: 700;
        color: white;
        padding-left: 15px;
        display: inline-block;
        padding-top: 27px;
    }


    .small {
        font-size: 70px;
    }

    .normal {
        font-size: 81px;
    }

    .large {
        font-size: 90px;
        position: absolute;
        top: -7px;
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
</style>
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.9/cropper.js"
        integrity="sha512-oqBsjjSHWqkDx4UKoU+5IUZN2nW2qDp2GFSKw9+mcFm+ZywqfBKp79nfWmGPco2wzTWuE46XpjtCjZ9tFmI12g=="
        crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.9/cropper.css"
      integrity="sha512-949FvIQOibfhLTgmNws4F3DVlYz3FmCRRhJznR22hx76SKkcpZiVV5Kwo0iwK9L6BFuY+6mpdqB2+vDIGVuyHg=="
      crossorigin="anonymous"/>

@section('content')
<form action="{{ route('theme-open-house') }}" method="POST">
    @csrf
    <div class="row">
        <div class="row-image">
            <img src="" id="image" data-replace-attribute="src" data-name-replace="image" style="display: none;">
            <input hidden name="bg_image" id="bg_image" value="/images/themes/new/bg.png">
            <div class="page" id="page-box">
                <div class="absolute" style="top:0px;left:0px; z-index: -1">
                    <img src="/images/themes/new/ellipse.png" alt="">
                </div>
                <div class="absolute title-text normal"
                     style="height: 120px;">
                    <span class='first'>OPEN</span>
                    <span class='second'>HOUSE</span>
                </div>
                <div class="absolute top"
                     style="width: 635px; height: 76px; background: black; font-size: 81px; top: 120px">
                    <ul class="absolute" style="left: 90px; top: -30px; width: 100%">
                        <li class="gold day_text">SAT</li>
                        <li class="text-white" style="padding: 0">|</li>
                        <li class="gold date_text">SEP 11</li>
                        <li class="text-white" style="padding: 0">|</li>
                        <li class="text-white"><span style="font-weight: bold" class="from_text">10:00AM</span> - <span
                                style="font-weight: bold" class="to_text">2:00PM</span></li>
                    </ul>
                </div>


                <div class="absolute" style="top:60px; right: 55px;">
                    <p class="text-white web_text" style="font-size: 18px; font-weight: 600;">
                        WWW.LUXEKNOWS.COM</p>
                </div>
                <div class="absolute"
                     style="height: 100px; background: white; bottom: 51px; left: 281px;padding-right: 20px">
                    <p class="bold gold address_1" style="font-size: 25.71px; padding-left: 27px; padding-top: 18px">55
                        MERRICK
                        WAY
                        #402</p>
                    <p class="bold address_2" style="font-size: 22px; padding-left: 27px;">CORAL GABLES, FL 33134</p>
                </div>


                <div class="absolute"
                     style="width: 240px; height: 100px; background: black; left: 43px; bottom: 51px; border-radius: 50px 0 0 50px">
                    <img src="/images/themes/new/Logo.png" alt="" style="padding: 16px 0 0 16px; ">
                </div>

                <div class="absolute" style="transform: rotate(-90deg); left: -247px">
                    <div class="left-panel"
                         style="position: relative;z-index: 1;width: 600px;height: 50px;right: 516px;text-align: center;justify-content: center;display: flex;">
                        <ul style="height: 50px">
                            <li><span class="beds_text"><b>3</b> BEDS</span></li>
                            <li><span class="gold">|</span></li>
                            <li><span class="bath_text"><b>2</b> BATHS</span></li>
                            <li><span class="gold">|</span></li>
                            <li><span class="sqft_text"><b>1,700</b> SQFT</span></li>
                        </ul>
                    </div>
                </div>


            </div>
        </div>
        <div class="column-divider"></div>
        <div class="row-input" style="max-width: 350px;">
            <div class="">
                <div class="pr-10">
                    <label for="day_text" style="width: 94%">Title</label>
                    <input type="text" id="title-text" name="title_text"
                           value="<span class='first'>OPEN</span><span class='second'>HOUSE</span>">
                    <select name="title_text_select" id="title_text"
                            data-id-to-change="title-text" onchange="change_font_size(this)">
                        <option value="small">Small</option>
                        <option value="normal" selected>Medium</option>
                        <option value="large">Large</option>
                    </select>
                </div>
            </div>
            <div class="flex">
                <div class="pr-10">
                    <label for="day_text">DAY</label>
                    <input type="text" id="day_text" name="day_text" value="SAT">
                </div>
                <div>
                    <label for="">DATE</label>
                    <input type="text" id="date_text" name="date_text" value="SEP 11">
                </div>
            </div>
            <div class="flex">
                <div class="pr-10">
                    <label for="from_text">FROM</label>
                    <input type="text" id="from_text" name="from_text" value="10:00AM">
                </div>
                <div>
                    <label for="to_text">TO</label>
                    <input type="text" id="to_text" name="to_text" value="2:00PM">
                </div>
            </div>
            <div class="flex">
                <div class="pr-10">
                    <label for="beds_text">BEDS</label>
                    <input type="text" id="beds_text" name="beds_text" value="<b>3</b> BEDS">
                </div>
                <div>
                    <label for="bath_text">BATHS</label>
                    <input type="text" id="bath_text" name="bath_text" value="<b>2</b> BATHS">
                </div>
            </div>

            <div class="flex">
                <div class="pr-10">
                    <label for="sqft_text">WEBSITE</label>
                    <input type="text" id="web_text" name="web_text" value="WWW.LUXEKNOWS.COM">
                </div>
                <div class="pr-10">
                    <label for="sqft_text">SURFACE</label>
                    <input type="text" id="sqft_text" name="sqft_text" value="<b>1,700</b> SQFT">
                </div>
            </div>

            <div class="flex">
                <div class="pr-10">
                    <label for="page-1-text-4">Address 1</label>
                    <input type="text" id="address_1" name="address_1" value="55 MERRICK WAY #402">
                </div>
                <div>
                    <label for="page-1-text-5">Address 2</label>
                    <input type="text" id="address_2" name="address_2" value="CORAL GABLES, FL 33134">
                </div>
            </div>

            <div class="">
                <div class="">
                    <label for="bg-image">Background Image</label>
                    <button type="button" class="mt-1" onclick="openInputFile()">Choose Image</button><br>
                    <input type="file" id="bg-image" onchange="img_1_change(this)" style="display: none;">
                    <button type="button" class="mt-1" onclick="startCropper()">Crop</button>
                    <button type="button" class="mt-1" onclick="img_1_crop()">Save Crop</button>
                </div>
            </div>

            <div class="flex">
                <div class="button" style="width: 345px;">
                    <button type="button" name="action" value="Generate" class="generate" onclick="getScreenShot('page-box')">Generate</button>
                    {{-- <button type="submit" name="action" value="Save" class="generate">Save</button>
                    <br>
                    JSON Upload:
                    <input type="file" id="jsonFileUpload" onchange="jsonFileUploaded()"> --}}
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
<script>
    function change_font_size(select_input) {
        console.log(select_input);
        var select_id = select_input.id;
        var selector = $('#' + select_id);
        console.log(selector);
        var element_to_edit = selector.attr('data-id-to-change');
        var font_size = selector.val();
        remove_classes(element_to_edit);
        $("." + element_to_edit).addClass(font_size);
    }

    function remove_classes(element) {
        $("." + element + "").removeClass('small');
        $("." + element + "").removeClass('normal');
        $("." + element + "").removeClass('large');
    }

    $(document).ready(function () {
        $("input").change(function (event) {
            var event_id = event.target.id;
            console.log(event_id);
            var event_element = $("#" + event_id)
            var export_var = $("." + event_id);
            export_var.html(event_element.val());
        });
    });

    function img_1_change(e) {
        const [file] = e.files
        if (file) {
            
            $("#image").attr('src', URL.createObjectURL(file))
            $(".page").css('background-image', 'url('+ URL.createObjectURL(file) +')')
        }
        $(".page").css("display", "block");
    }

    function img_1_crop() {
        cropper.getCroppedCanvas().toBlob((blob) => {
            $('#image').attr('src', URL.createObjectURL(blob))
            $(".page").css('background-image', 'url(' + URL.createObjectURL(blob) + ')')
        });
        cropper.destroy()
        $(".page").css("display", "block");
    }

    var cropper;

    function startCropper() {
        var image = document.getElementById("image");
        $(".page").css("display", "none");
        cropper = new Cropper(image, {
            aspectRatio: 0.912,
            minContainerHeight: 500
        });
    }

    function convert(oldImag, callback) {
        var img = new Image();
        img.onload = function () {
            callback(img)
        }
        img.setAttribute('crossorigin', 'anonymous');
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
            callback(base64)
        })
    }

    function openInputFile() {
        $('#bg-image').click()
    }
</script>

</html>
