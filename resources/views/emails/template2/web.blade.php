@extends('themes.layouts.app')
@section('css')
@include('includes.fonts')
<style>
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
        /* justify-content: center; */
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
        width: 100%;
        border: 1px solid #262626;
        padding: 10px;
        font-family: 'gothicregular';
        margin-top:5px;
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
        position: relative;
        width: 1000px;
        height: 3695px;
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
        top: -135% !important;
        z-index: 100;
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
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.9/cropper.js"
    integrity="sha512-oqBsjjSHWqkDx4UKoU+5IUZN2nW2qDp2GFSKw9+mcFm+ZywqfBKp79nfWmGPco2wzTWuE46XpjtCjZ9tFmI12g=="
    crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.9/cropper.css"
    integrity="sha512-949FvIQOibfhLTgmNws4F3DVlYz3FmCRRhJznR22hx76SKkcpZiVV5Kwo0iwK9L6BFuY+6mpdqB2+vDIGVuyHg=="
    crossorigin="anonymous" />

@section('content')
    <form action="{{ route('email-template-2') }}" method="POST">
        @csrf
        <div class="row">
            <div class="row-image">
                <img src="" id="image" data-replace-attribute="src" data-name-replace="image" style="display: none;">
                <input hidden name="img_1_input" id="img_1_input" value="images/emails/template2/bg.jpg">
                <input hidden name="img_2_input" id="img_2_input" value="images/emails/template2/map1.jpg">
                <input hidden name="img_3_input" id="img_3_input" value="images/emails/template2/map2.jpg">
                <input hidden name="img_4_input" id="img_4_input" value="images/emails/template2/map3.jpg">
                <input hidden name="img_5_input" id="img_5_input" value="images/emails/template1/agent-1.jpg">
                <input hidden name="img_6_input" id="img_6_input" value="images/emails/template1/agent-2.jpg">
                <div class="page-wrapper">
                    <div class="page" id="el">
                        {{-- Images --}}
                        <div class="absolute">
                            <img id="img_1" src="images/emails/template2/bg.jpg" alt=""
                                style="width: 1000px;height:1050px;object-fit:cover;">
                        </div>
                        <div class="absolute">
                            <img src="images/emails/template2/main.png" alt="" style="width: 1000px;height:3695px;">
                        </div>
                        <div class="absolute" style="width:100%;top:23.3%;text-align:center;">
                            <img src="images/emails/template2/logo.png" alt="" style="width: 320px;">
                        </div>
                        <div class="absolute map" style="left:0px;">
                            <img id="img_2" class="map" src="images/emails/template2/map1.jpg" alt="">
                        </div>
                        <div class="absolute map" style="width:100%;text-align:center;">
                            <img id="img_3" class="map" src="images/emails/template2/map2.jpg" alt="">
                        </div>
                        <div class="absolute map" style="right:0px;">
                            <img id="img_4" class="map" src="images/emails/template2/map3.jpg" alt="">
                        </div>

                        <div class="absolute" style="top:73.7%;left:110px;">
                            <img id="img_5" class="profile-pic" src="images/emails/template1/agent-1.jpg" alt="">
                        </div>
                        <div class="absolute personal" style="top:77.5%;">
                            <img src="images/emails/template1/icons.png" alt="" height="120px">
                        </div>
                        <div class="absolute" style="top:83.8%;left:110px;">
                            <img id="img_6" class="profile-pic" src="images/emails/template1/agent-2.jpg" alt="">
                        </div>
                        <div class="absolute personal" style="top:87.6%;">
                            <img src="images/emails/template1/icons.png" alt="" height="120px">
                        </div>
                        <div class="absolute" style="top:92.8%;width:100%;text-align:center;">
                            <img src="images/emails/template1/logos.png" alt="" width="200px">
                        </div>

                        {{-- Text --}}
                        <div class="absolute" style="width: 100%;text-align:center;top:28%;">
                            <h1 class="gold text-1" style="font-size: 90px;letter-spacing:20px;">REALTORS</h1>
                        </div>
                        <div class="absolute" style="width: 77%;text-align:center;top:31.5%;left:110px">
                            <h1 class="text-2"
                                style="font-size: 60px;color:#9e9e9e;letter-spacing:0px;line-height:65px;">Send
                                Us
                                Any
                                Properties That Fit This
                                Criteria</h1>
                        </div>
                        <div class="absolute" style="text-align:right;top:41.5%;right:54%;">
                            <h1 class="gold text-3" style="font-size: 90px;line-height:83px;">Looking For</h1>
                        </div>
                        <div class="absolute" style="top:40.5%;left:54%;right:50px;">
                            <h1 class="white text-4" style="font-size: 50px;line-height:50px;">3 - 6 Acres <br>of
                                Industrial
                                <br>Land
                                Industrial <br>Zoning
                            </h1>
                        </div>
                        {{-- Maps --}}
                        <div class="absolute" style="text-align:center;width:100%;top:49.3%">
                            <h1 class="gold text-5" style="font-size: 70px;">Areas Desired</h1>
                        </div>
                        <div class="absolute map-title" style="left:0px;">
                            <h1 class="map-title text-6">Medley</h1>
                        </div>
                        <div class="absolute map-title" style="left:350px;">
                            <h1 class="map-title text-7">Hialeah</h1>
                        </div>
                        <div class="absolute map-title" style="right:0px;">
                            <h1 class="map-title text-8">S. Broward</h1>
                        </div>

                        <div class="absolute" style="width:100%;text-align:center;top:64%;">
                            <h1 class="white text-9" style="font-size: 60px;">Click Here</h1>
                        </div>
                        <div class="absolute" style="width:100%;text-align:center;top:67%;">
                            <h1 class="text-10"
                                style="font-size: 40px;color:#6d6e71;line-height:40px;letter-spacing:-1px;">To
                                Find out
                                The
                                Value of</h1>
                            <h1 class="gold text-11" style="font-size: 60px;;line-height:55px;letter-spacing:-1px;">Your
                                Home
                            </h1>
                        </div>
                        {{-- Agent 1 --}}
                        <div class="absolute personal" style="top:73.2%;">
                            <h1 class="gold text-12" style="font-size:47px;">Wesley Ulloa</h1>
                        </div>
                        <div class="absolute personal" style="top:74.7%;">
                            <h1 class="text-13" style="font-size:25px;letter-spacing:1px;">Licensed Real Estate
                                Broker</h1>
                        </div>

                        <div class="absolute info-size white text-14" style="top:77.5%;">
                            <p>305.986.7041</p>
                        </div>
                        <div class="absolute info-size white text-15" style="top:78.7%;">
                            <p>305.809.7650</p>
                        </div>
                        <div class="absolute info-size white text-16" style="top:79.9%;">
                            <p>wesley@Luxeknows.com</p>
                        </div>
                        {{-- Agent 2 --}}
                        <div class="absolute personal" style="top:83.3%;">
                            <h1 class="text-17" style="font-size:47px;">Wesley Ulloa</h1>
                        </div>
                        <div class="absolute personal" style="top:84.7%;">
                            <h1 class="white text-18" style="font-size:25px;letter-spacing:1px;">Licensed Real Estate
                                Broker
                            </h1>
                        </div>

                        <div class="absolute info-size text-19" style="top:87.65%;">
                            <p>305.986.7041</p>
                        </div>
                        <div class="absolute info-size text-20" style="top:88.85%;">
                            <p>305.809.7650</p>
                        </div>
                        <div class="absolute info-size text-21" style="top:90.08%;">
                            <p>wesley@Luxeknows.com</p>
                        </div>
                        {{-- Footer --}}
                        <div class="absolute" style="text-align: center;top:97%;width: 100%;">
                            <h1 class="text-22" style="font-size:22px;font-weight:400;">55 MERRICK WAY SUITE 402, CORAL
                                GABLES,
                                FL
                                33134</h1>
                        </div>
                        <div class="absolute" style="text-align: center;top:98.8%;width: 100%;">
                            <h1 class="text-23" style="font-size:16px;font-weight:400;color:#9e9e9e">Copyright © {{ date('Y') }}
                                LUXE
                                Properties, LLC, All
                                rights reserved.</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input" style="max-width: 350px;height:3600px">
                <div class="absolute" style="top: 400px;">
                    <div class="file-input-width">
                        <label for="page-1-img-1">Main Image</label>
                        <button type="button" class="mt-3" onclick="openInputFile('img-1-input')">Choose Image</button>
                        <input type="file" id="img-1-input" onchange="img_1_change(this)" style="display: none;">
                        <button type="button" class="mt-1" onclick="startCropper(1)">Crop</button>
                        <button type="button" onclick="img_1_crop()">Save Crop</button>
                    </div>
                </div>
                <div class="flex absolute" style="top:1060px;">
                    <div class="pr-10">
                        <label for="text-1">Text</label>
                        <input type="text" id="text-1" name="text_1" value="REALTORS">
                    </div>
                    <div>
                        <label for="text-2">Text</label>
                        <input type="text" id="text-2" name="text_2"
                            value="Send Us Any Properties That Fit This Criteria">
                    </div>
                </div>
                <div class="flex absolute" style="top: 1560px;">
                    <div class="pr-10">
                        <label for="text-3">Text</label>
                        <input type="text" id="text-3" name="text_3" value="Looking For">
                    </div>
                    <div>
                        <label for="text-4">Text</label>
                        <input type="text" id="text-4" name="text_4" value="3 - 6 Acres <br>of
                                Industrial
                                <br>Land
                                Industrial <br>Zoning">
                    </div>
                </div>
                <div class="absolute" style="top:1800px">
                    <div class="flex">
                        <div class="pr-10">
                            <label for="text-5">Text</label>
                            <input type="text" id="text-5" name="text_5" value="Areas Desired">
                        </div>
                        <div>
                            <label for="text-6">Text</label>
                            <input type="text" id="text-6" name="text_6" value="Medley">
                        </div>
                    </div>
                    <div class="flex">
                        <div class="pr-10">
                            <label for="text-7">Text</label>
                            <input type="text" id="text-7" name="text_7" value="Hialeah">
                        </div>
                        <div>
                            <label for="text-8">Text</label>
                            <input type="text" id="text-8" name="text_8" value="S. Broward">
                        </div>
                    </div>
                    <div class="flex" style="justify-content: space-between;">
                        <div class="file-input-width" style="margin-top: 15px;">
                            <label for="page-1-img-1">Map 1 Image</label>
                            <button type="button" class="mt-3" onclick="openInputFile('img-2-input')">Choose Image</button>
                            <input type="file" id="img-2-input" onchange="img_2_change(this)" style="display: none;">
                            <button type="button" class="mt-1" onclick="startCropper(1)">Crop</button>
                            <button type="button" onclick="img_2_crop()">Save Crop</button>
                        </div>
                        <div class="file-input-width" style="margin-top: 15px;">
                            <label for="page-1-img-1">Map 2 Image</label>
                            <button type="button" class="mt-3" onclick="openInputFile('img-3-input')">Choose Image</button>
                            <input type="file" id="img-3-input" onchange="img_3_change(this)" style="display: none;">
                            <button type="button" class="mt-1" onclick="startCropper(1)">Crop</button>
                            <button type="button" onclick="img_3_crop()">Save Crop</button>
                        </div>
                    </div>
                    <div class="file-input-width" style="margin-top: 15px;">
                        <label for="page-1-img-1">Map 3 Image</label>
                        <button type="button" class="mt-3" onclick="openInputFile('img-4-input')">Choose Image</button>
                        <input type="file" id="img-4-input" onchange="img_4_change(this)" style="display: none;">
                        <button type="button" class="mt-1" onclick="startCropper(1)">Crop</button>
                        <button type="button" onclick="img_4_crop()">Save Crop</button>
                    </div>
                </div>
                <div class="absolute" style="top:2370px">
                    <div>
                        <label for="text-9">Text</label>
                        <input type="text" id="text-9" name="text_9" value="Click Here">
                    </div>

                    <div class="flex">
                        <div class="pr-10">
                            <label for="text-10">Text</label>
                            <input type="text" id="text-10" name="text_10" value="To Find out The Value of">
                        </div>
                        <div>
                            <label for="text-11">Text</label>
                            <input type="text" id="text-11" name="text_11" value="Your Home">
                        </div>
                    </div>
                </div>
                <div class="absolute" style="top: 2700px">
                    <div class="file-input-width">
                        <label for="page-1-img-1">Agent 1 Image</label>
                        <button type="button" class="mt-3" onclick="openInputFile('img-5-input')">Choose Image</button>
                        <input type="file" id="img-5-input" onchange="img_5_change(this)" style="display: none;">
                        <button type="button" class="mt-1" onclick="startCropper(1)">Crop</button>
                        <button type="button" onclick="img_5_crop()">Save Crop</button>
                    </div>
                    <div class="flex mt-3">
                        <div class="pr-10">
                            <label for="text-12">Agent 1</label>
                            <input type="text" id="text-12" name="text_12" value="Wesley Ulloa">
                        </div>
                        <div>
                            <label for="text-13">Agent 1</label>
                            <input type="text" id="text-13" name="text_13" value="Licensed Real Estate Broker">
                        </div>
                    </div>
                    <div class="flex">
                        <div class="pr-10">
                            <label for="text-14">Agent 1</label>
                            <input type="text" id="text-14" name="text_14" value="305.986.7041">
                        </div>
                        <div>
                            <label for="text-15">Agent 1</label>
                            <input type="text" id="text-15" name="text_15" value="305.809.7650">
                        </div>
                    </div>
                    <div class="">
                        <div>
                            <label for="text-16">Agent 1</label>
                            <input type="text" id="text-16" name="text_16" value="wesley@Luxeknows.com">
                        </div>
                    </div>
                </div>
                <div class="absolute" style="top: 3119px">
                    <div class="file-input-width">
                        <label for="page-1-img-1">Agent 2 Image</label>
                        <button type="button" class="mt-3" onclick="openInputFile('img-6-input')">Choose Image</button>
                        <input type="file" id="img-6-input" onchange="img_6_change(this)" style="display: none;">
                        <button type="button" class="mt-1" onclick="startCropper(1)">Crop</button>
                        <button type="button" onclick="img_6_crop()">Save Crop</button>
                    </div>
                    <div class="flex mt-3">
                        <div class="pr-10">
                            <label for="text-17">Agent 2</label>
                            <input type="text" id="text-17" name="text_17" value="Wesley Ulloa">
                        </div>
                        <div>
                            <label for="text-18">Agent 2</label>
                            <input type="text" id="text-18" name="text_18" value="Licensed Real Estate Broker">
                        </div>
                    </div>
                    <div class="flex">
                        <div class="pr-10">
                            <label for="text-19">Agent 2</label>
                            <input type="text" id="text-19" name="text_19" value="305.986.7041">
                        </div>
                        <div>
                            <label for="text-20">Agent 2</label>
                            <input type="text" id="text-20" name="text_20" value="305.809.7650">
                        </div>
                    </div>
                    <div class="">
                        <div>
                            <label for="text-21">Agent 2</label>
                            <input type="text" id="text-21" name="text_21" value="wesley@Luxeknows.com">
                        </div>
                    </div>
                </div>
                <div class="absolute" style="top:3542px;width: 370px;">
                    <div>
                        <label for="text-22">Footer 1</label>
                        <input type="text" id="text-22" name="text_22"
                            value="55 MERRICK WAY SUITE 402, CORAL GABLES, FL 33134">
                    </div>
                    <div>
                        <label for="text-23">Footer 2</label>
                        <input type="text" id="text-23" name="text_23"
                            value="Copyright © 2021 LUXE Properties, LLC, All rights reserved.">
                    </div>

                    <div class="flex mt-3" style="justify-content: flex-start;">
                        <div class="" style="width: 345px;">
                            <button type="button" name="action" value="Generate" class="generate" onclick="beforePDF()">Generate</button>
                            {{-- <button type="submit" name="action" value="Save" class="generate">Save</button>
                            <br>
                            JSON Upload:
                            <input type="file" id="jsonFileUpload" onchange="jsonFileUploaded()">--}}
                            <div class="mt-3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@include('includes.loader')
@endsection

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
        $("input").change(function(event) {
            var event_id = event.target.id;
            var event_element = $("#" + event_id)
            var export_var = $("." + event_id);
            export_var.html(event_element.val());
        });    
    });

    function img_6_change(e) {
        const [file] = e.files
        if (file) {
            $('#image').attr("src", URL.createObjectURL(file));
            $('#img_6').attr("src", URL.createObjectURL(file));
           
        }
    }

    function img_6_crop() {
        cropper.getCroppedCanvas().toBlob((blob) => {
            $('#image').attr("src", URL.createObjectURL(blob));
            $('#img_6').attr("src", URL.createObjectURL(blob));
            
        });
        cropper.destroy();
        $(".page").css("opacity", "1");
    }

    function img_5_change(e) {
        const [file] = e.files
        if (file) {
            $('#image').attr("src", URL.createObjectURL(file));
            $('#img_5').attr("src", URL.createObjectURL(file));
           
        }
    }

    function img_5_crop(){
        cropper.getCroppedCanvas().toBlob((blob) => {
            $('#image').attr("src", URL.createObjectURL(blob));
            $('#img_5').attr("src", URL.createObjectURL(blob));
            
        });
        cropper.destroy();
        $(".page").css("opacity", "1");
    }

    function img_4_change(e) {
        const [file] = e.files
        if (file) {
            $('#image').attr("src", URL.createObjectURL(file));
            $('#img_4').attr("src", URL.createObjectURL(file));
           
        }
    }

    function img_4_crop() {
        cropper.getCroppedCanvas().toBlob((blob) => {
            $('#image').attr("src", URL.createObjectURL(blob));
            $('#img_4').attr("src", URL.createObjectURL(blob));
            
        });
        cropper.destroy();
        $(".page").css("opacity", "1");
    }

    function img_3_change(e) {
        const [file] = e.files
        if (file) {
            $('#image').attr("src", URL.createObjectURL(file));
            $('#img_3').attr("src", URL.createObjectURL(file));
           
        }
    }

    function img_3_crop(){
        cropper.getCroppedCanvas().toBlob((blob) => {
            $('#image').attr("src", URL.createObjectURL(blob));
            $('#img_3').attr("src", URL.createObjectURL(blob));
            
        });
        cropper.destroy();
        $(".page").css("opacity", "1");
    }

    function img_2_change(e) {
        const [file] = e.files
        if (file) {
            $('#image').attr("src", URL.createObjectURL(file));
            $('#img_2').attr("src", URL.createObjectURL(file));
           
        }
    }

    function img_2_crop(){
        cropper.getCroppedCanvas().toBlob((blob) => {
            $('#image').attr("src", URL.createObjectURL(blob));
            $('#img_2').attr("src", URL.createObjectURL(blob));
            
        });
        cropper.destroy();
        $(".page").css("opacity", "1");
    }

    function img_1_change(e) {
        const [file] = e.files
        if (file) {
            $('#image').attr("src", URL.createObjectURL(file));
            $('#img_1').attr("src", URL.createObjectURL(file));
           
        }
    }

    function img_1_crop(){
        cropper.getCroppedCanvas().toBlob((blob) => {
            $('#image').attr("src", URL.createObjectURL(blob));
            $('#img_1').attr("src", URL.createObjectURL(blob));
            
        });
        cropper.destroy();
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
    async function beforePDF() {
        $('.loader').css('display', 'flex')
        const result = await generatePDF(264, 977.7)
        if(result) {
            $('.loader').css('display', 'none')
        }
    }
</script>