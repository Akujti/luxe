@extends('themes.layouts.app')
@section('title')
    IG Story 1 -
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
        color: #fff;
        padding: 10px;
        display: block;
        width: 150px;
        font-family: 'gothicbold';
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
        width: 100%;
        border: 1px solid #262626;
        padding: 10px;
        font-family: 'gothicregular';
    }

    select {
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
        justify-content: flex-end;
    }

    .flex label {
        margin: 10px auto 10px auto !important;
    }

    .row-image {
        width: 800px;
        height: auto;
    }

    .page {
        position: absolute;
        left: 0;
    }

    .absolute {
        position: absolute;
    }

    .fixed {
        position: fixed;
    }

    .relative {
        position: relative;
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
        color: #C5A467;
        font-size: 25px;
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

    .title {
        font-family: Lato;
        font-weight: 700;
    }

    h1.small {
        margin-top: 5px;
        font-size: 120px;
    }

    h1.normal {
        font-size: 130px;
    }

    h1.large {
        font-size: 140px;
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
    <form action="" method="POST">
        @csrf
        <div class="row">
            <div class="row-image">
                <img src="" id="image" data-replace-attribute="src" data-name-replace="image" style="display: none;">
                <input hidden name="img_3_input" id="img_3_input" value="/images/themes/for-sale/bg.png">
                <input hidden name="img_2_input" id="img_2_input" value="/images/themes/just-sold-story/second-bg.jpg">
                <div class="page" id="page-box">
                    <div>
                        <img id="img3" class="absolute bg-image" src="/images/themes/for-sale/bg.png" alt=""
                            style="height: 730px;width: 900px;">
                    </div>
                    <div>
                        <img id="img2" class="absolute bg-image" src="/images/themes/just-sold-story/second-bg.jpg"
                            alt="" style="height: 855px;top: 745px;width: 900px;">
                    </div>
                    <div>
                        <img class="absolute" id="" src="/images/themes/just-sold-story/main.png" alt="" width="900px">
                    </div>
                    <div class="absolute"
                        style="top: 1055px;width: 600px;transform: rotate(-90deg);font-size: 11px;left: 572px;text-align: center;">
                        <div style="position: relative;left:310px;">
                            <h1 class="white  page-1-text-13" style="margin-left: 40px;">WWW.LUXEKNOWS.COM</h1>
                        </div>
                    </div>
                    <div class="absolute" style="top: 1165px;width: 600px;">
                        <div style="position: relative;left:310px;">
                            <h1 class="bold white title page-1-text-11 normal" style="margin-left: 40px;">Just</h1>
                            <h1 class="bold white title page-1-text-12 normal" style="line-height:50px;">SOLD</h1>
                        </div>
                    </div>
                    <div class="absolute" style="top: 1417px;width: 600px;">
                        <div class="relative" style="left: 375px;">
                            <h1 class="gold bold page-1-text-4" style="font-size: 25px;line-height:50px;">55 MERRICK WAY
                                #402</h1>
                            <h1 class="white page-1-text-5" style="font-size: 21px;line-height:20px;">CORAL GABLES, FL
                                33134</h1>
                        </div>
                        <div class="relative" style="margin-top: 36px;left: 283px; width: 510px;text-align: center;">
                            <ul>
                                <li class="page-1-text-1">3 BEDS</li>
                                <li>|</li>
                                <li class="page-1-text-2">2 BATHS</li>
                                <li>|</li>
                                <li class="page-1-text-3">1,700 SQFT</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input" style="max-width: 350px;">
                <div class="flex">
                    <div class="pr-10">
                        <label for="page-1-1-text-11">Title</label>
                        <input type="text" id="page-1-text-11" name="page_1_text_11" value="Just">
                        <select name="page_1_text_11_select" id="page_1_text_11_select"
                            data-id-to-change="page-1-text-11" onchange="change_font_size(this)">
                            <option value="small">Small</option>
                            <option value="normal" selected>Medium</option>
                            <option value="large">Large</option>
                        </select>
                    </div>
                    <div>
                        <label for="page-1-text-12">Title</label>
                        <input type="text" id="page-1-text-12" name="page_1_text_12" value="SOLD">
                        <select name="page_1_text_12_select" id="page_1_text_12_select"
                            data-id-to-change="page-1-text-12" onchange="change_font_size(this)">
                            <option value="small">Small</option>
                            <option value="normal" selected>Medium</option>
                            <option value="large">Large</option>
                        </select>
                    </div>
                </div>
                <div class="flex">
                    <div class="pr-10">
                        <label for="page-1-1-text-1">BEDS</label>
                        <input type="text" id="page-1-text-1" name="page_1_text_1" value="3 BEDS">
                    </div>
                    <div>
                        <label for="page-1-text-2">BATHS</label>
                        <input type="text" id="page-1-text-2" name="page_1_text_2" value="2 BATHS">
                    </div>
                </div>

                <div class="flex">
                    <div class="pr-10">
                        <label for="page-1-text-3">SURFACE</label>
                        <input type="text" id="page-1-text-3" name="page_1_text_3" value="1,700 SQFT">
                    </div>
                    <div>
                        <label for="page-1-text-13">WEBSITE</label>
                        <input type="text" id="page-1-text-13" name="page_1_text_13" value="WWW.LUXEKNOWS.COM">
                    </div>
                </div>

                <div class="flex">
                    <div class="pr-10">
                        <label for="page-1-text-4">Address 1</label>
                        <input type="text" id="page-1-text-4" name="page_1_text_4" value="55 MERRICK WAY #402">
                    </div>
                    <div>
                        <label for="page-1-text-5">Address 2</label>
                        <input type="text" id="page-1-text-5" name="page_1_text_5" value="CORAL GABLES, FL 33134">
                    </div>
                </div>

                <div class="">
                    <div class="">
                        <label for="page-1-img-1">Background Image</label>
                        <button type="button" class="mt-3" onclick="openInputFile('img-3-input')">Choose Image</button><br>
                        <input type="file" id="img-3-input" onchange="img_3_change(this)" style="display: none;">
                        <button type="button" class="mt-1" onclick="startCropper()">Crop</button>
                        <button type="button" onclick="img_3_crop()">Save Crop</button>
                        <p style="font-size: 12px;" class="mt-1"><i>Use portrait images for better results</i></p>
                    </div>
                    <div class="mt-3">
                        <label for="page-1-img-2">Background Image</label>
                        <button type="button" class="mt-3" onclick="openInputFile('img-2-input')">Choose Image</button><br>
                        <input type="file" id="img-2-input" onchange="img_2_change(this)" style="display: none;">
                        <button type="button" class="mt-1" onclick="startCropper()">Crop</button>
                        <button type="button" onclick="img_2_crop()">Save Crop</button>
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
</body>
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
            export_var.text(event_element.val());
        });    
    });

    function img_3_change(e) {
        const [file] = e.files
        if (file) {
            $("#image").attr('src', URL.createObjectURL(file))
            $("#img3").attr('src', URL.createObjectURL(file))
        }
    }

    function img_3_crop(){
        cropper.getCroppedCanvas().toBlob((blob) => {
            $('#image').attr('src', URL.createObjectURL(blob))
            $('#img3').attr('src', URL.createObjectURL(blob))
        });
        cropper.destroy();
        $(".page").css("display", "block");
    }

    function img_2_change(e) {
        const [file] = e.files
        if (file) {
            $("#image").attr('src', URL.createObjectURL(file))
            $("#img2").attr('src', URL.createObjectURL(file))
        }
    }

    function img_2_crop(){
        cropper.getCroppedCanvas().toBlob((blob) => {
            $('#image').attr('src', URL.createObjectURL(blob))
            $('#img2').attr('src', URL.createObjectURL(blob))
        });
        cropper.destroy();
        $(".page").css("display", "block");
    }

    var cropper;
    function startCropper(){
        var image = document.getElementById("image");
        $(".page").css("display", "none");
        cropper = new Cropper(image, {
            aspectRatio: 1,
            minContainerHeight: 500
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