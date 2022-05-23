@extends('themes.layouts.app')
@section('title')
    IG Story 2 -
@endsection
@section('css')
@include('includes.fonts')
<style>
    * {
        font-family: 'Montserrat';
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
    }

    input,
    textarea {
        font-size: 15px;
        margin-top: 10px;
        margin-bottom: 10px;
        width: 100%;
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

    .flex label {
        margin: 10px auto 5px auto !important;
    }

    .row-image {
        width: 800px;
        height: auto;
    }

    .page {
        position: absolute;
        left: 0;
        background-image: url('/images/themes/just-listed-story/main.png');
        background-position: top right;
        background-repeat: no-repeat;
        background-size: 900px;
        width: 900px;
        height: 1600px;
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
        color: #C5A467;
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
        top: 82%;
    }

    img.circle {
        width: 232px;
        height: 218px;
    }

    .pr-10 {
        padding-right: 10px;
    }

    .file-input-width {
        width: 175px;
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
                <input hidden name="img_1_input" id="img_1_input" value="/images/themes/for-sale/bg.png">
                <input hidden name="img_2_input" id="img_2_input" value="/images/themes/for-sale/house-1.jpg">
                <input hidden name="img_3_input" id="img_3_input" value="/images/themes/for-sale/house-2.jpg">
                <input hidden name="img_4_input" id="img_4_input" value="/images/themes/for-sale/house-3.jpg">
                <div class="page" id="page-box">
                    <div>
                        <img id="img1" src="/images/themes/just-listed/img-1.jpg" alt="" class="absolute img-1"
                            width="500px"
                            style="top: 20.9%;left: 33px;width: 870px;height: 850px;border-top-left-radius: 125px;">
                    </div>
                    <div>
                        <img src="/images/themes/just-listed-story/main-2.png" alt="" class="absolute" width="900px"
                            style="left:60px;">
                    </div>
                    <div class="absolute" style="right:3.4%;top:170px;text-align:right;">
                        <h1 class="font-800 bold page-1-text-11" style="font-size:58px;">Just</h1>
                        <h1 class="font-800 bold gold page-1-text-12" style="font-size:81px;line-height: 45px;">Listed
                        </h1>
                    </div>
                    <div class="absolute" style="top: 19.2%;right: 105px;">
                        <ul>
                            <li class="page-1-text-1">3 BEDS</li>
                            <li class="white">|</li>
                            <li class="white page-1-text-2">2 BATHS</li>
                            <li class="white">|</li>
                            <li class="page-1-text-3">1,700 SQFT</li>
                        </ul>
                    </div>
                    <div class="absolute" style="top: 74.4%;left: 335px;">
                        <h1 class="page-1-text-4" style="font-size: 25px;line-height:55px;">55 MERRICK WAY
                            #402</h1>
                        <h1 class="gold bold page-1-text-5" style="font-size: 21px;line-height:20px;">CORAL GABLES, FL
                            33134</h1>
                    </div>

                    <div class="absolute circle" style="left:73px">
                        <img id="img2" src="/images/themes/for-sale/house-1.jpg" alt="" class="circle"
                            style="border-top-left-radius: 35px">
                    </div>
                    <div class="absolute circle" style="left:344px">
                        <img id="img3" src="/images/themes/for-sale/house-2.jpg" alt="" class="circle"
                            style="width: 244px">
                    </div>
                    <div class="absolute circle" style="left:627px">
                        <img id="img4" src="/images/themes/for-sale/house-3.jpg" alt="" class="circle"
                            style="border-bottom-right-radius: 35px;">
                    </div>

                    <div class="absolute" style="top: 1099px;left: 650px;">
                        <h1 class="white bold page-1-text-6" style="font-size: 33px;line-height: 50px;">$650,000</h1>
                    </div>

                    <div class="absolute" style="bottom: -9px;left: -80px;text-align:center;width:835px;">
                        <h1 class="white page-1-text-13" style="font-size: 22px;letter-spacing: 8px;line-height: 50px;">
                            WWW.LUXEKNOWS.COM
                        </h1>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input" style="max-width: 350px;">
                <div class="flex">
                    <div class="pr-10">
                        <label for="page-1-1-text-11">Title</label>
                        <input type="text" id="page-1-text-11" name="page_1_text_11" value="Just">
                    </div>
                    <div>
                        <label for="page-1-text-12">Title</label>
                        <input type="text" id="page-1-text-12" name="page_1_text_12" value="Listed">
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
                        <label for="page-1-text-6">Price</label>
                        <input type="text" id="page-1-text-6" name="page_1_text_6" value="$650,000">
                    </div>
                </div>

                <div class="flex">
                    <div class="pr-10">
                        <label for="page-1-text-4">Address 1</label>
                        <input type="text" id="page-1-text-4" name="page_1_text_4" value="55 MERRICK WAY #402">
                    </div>
                    <div>
                        <label for="page-1-text-5">Address 2</label>
                        <input type="text" id="page-1-text-5" name="page_1_text_5" value="CORAL GABLES, FL 3313">
                    </div>
                </div>
                <div class="">
                    <div class="pr-10">
                        <label for="page-1-1-text-13">WEBSITE</label>
                        <input type="text" id="page-1-text-13" name="page_1_text_13" value="WWW.LUXEKNOWS.COM">
                    </div>
                </div>

                <div class="flex">
                    <div class="file-input-width">
                        <label for="page-1-img-1">Background Image</label>
                        <button type="button" class="mt-3" onclick="openInputFile('img-1-input')">Choose Image</button>
                        <input type="file" id="img-1-input" onchange="img_1_change(this)" style="display: none;">
                        <button type="button" class="mt-1" onclick="startCropper()">Crop</button>
                        <button type="button" onclick="img_1_crop()">Save Crop</button>
                        <p style="font-size: 12px;"><i>Use portrait images for better results</i></p>
                    </div>
                    <div class="file-input-width">
                        <label for="page-1-img-2">First Image</label>
                        <button type="button" class="mt-3" onclick="openInputFile('img-2-input')">Choose Image</button>
                        <input type="file" id="img-2-input" onchange="img_2_change(this)" style="display: none;">
                        <button type="button" class="mt-1" onclick="startCropper()">Crop</button>
                        <button type="button" onclick="img_2_crop()">Save Crop</button>
                    </div>
                </div>

                <div class="flex">
                    <div class="file-input-width">
                        <label for="page-1-img-3">Second Image</label>
                        <button type="button" class="mt-3" onclick="openInputFile('img-3-input')">Choose Image</button>
                        <input type="file" id="img-3-input" onchange="img_3_change(this)" style="display: none;">
                        <button type="button" class="mt-1" onclick="startCropper()">Crop</button>
                        <button type="button" onclick="img_3_crop()">Save Crop</button>
                    </div>
                    <div class="file-input-width">
                        <label for="page-1-img-4">Third Image</label>
                        <button type="button" class="mt-3" onclick="openInputFile('img-4-input')">Choose Image</button>
                        <input type="file" id="img-4-input" onchange="img_4_change(this)" style="display: none;">
                        <button type="button" class="mt-1" onclick="startCropper()">Crop</button>
                        <button type="button" onclick="img_4_crop()">Save Crop</button>
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
    $(document).ready(function() {
        $("input").change(function(event) {
            var event_id = event.target.id;
            var event_element = $("#" + event_id)
            var export_var = $("." + event_id);
            export_var.text(event_element.val());
        });    
    });

    function img_4_change(e) {
        const [file] = e.files
        if (file) {
            $("#image").attr('src', URL.createObjectURL(file))
            $("#img4").attr('src', URL.createObjectURL(file))
        }
    }

    function img_4_crop(){
        cropper.getCroppedCanvas().toBlob((blob) => {
            $('#image').attr('src', URL.createObjectURL(blob))
            $('#img4').attr('src', URL.createObjectURL(blob))
        });
        cropper.destroy();
        $(".page").css("display", "block");
    }

    function img_3_change(e){
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

    function img_1_change(e) {
        const [file] = e.files
        if (file) {
            $("#image").attr('src', URL.createObjectURL(file))
            $("#img1").attr('src', URL.createObjectURL(file))
        }
        $(".page").css("display", "block");
    }

    function img_1_crop(){
        cropper.getCroppedCanvas().toBlob((blob) => {
            $('#image').attr('src', URL.createObjectURL(blob))
            $('#img1').attr('src', URL.createObjectURL(blob))
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