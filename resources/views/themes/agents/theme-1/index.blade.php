@extends('themes.layouts.app')
@section('title')
    Agent Template 1 -
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
        background-image: url('/images/themes/joined-luxe/person.jpg');
        background-position: top right;
        background-repeat: no-repeat;
        /* background-size: 80%; */
        background-size: 510px 710px;
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
        color: white;
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

    .page-1-text-11.small {
        font-size: 32px;
    }

    .page-1-text-11.normal {
        font-size: 40px;
    }

    .page-1-text-11.large {
        font-size: 48px;
    }

    .page-1-text-12.extra-small {
        font-size: 44px;
    }

    .page-1-text-12.small {
        font-size: 80px;
    }

    .page-1-text-12.normal {
        font-size: 100px;
    }

    .page-1-text-12.large {
        font-size: 120px;
    }

    .page-1-text-1.small {
        font-size: 38px;
    }

    .page-1-text-1.normal {
        font-size: 48px;
    }

    .page-1-text-1.large {
        font-size: 57px;
    }

    .page-1-text-2.small {
        font-size: 45px;
    }

    .page-1-text-2.normal {
        font-size: 60px;
    }

    .page-1-text-2.large {
        font-size: 75px;
    }

    .page-1-text-1 {
        width: max-content;
        background: white;
        padding: 10px 60px 10px 20px;
    }

    .page-1-text-2 {
        width: max-content;
        background: #C5A467;
        padding: 0px 50px 0px 20px;
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
                <input hidden name="img_1_input" id="img_1_input" value="/images/themes/joined-luxe/person.jpg">
                <div class="page" id="page-box">
                    <div>
                        <img id="img1" src="/images/themes/joined-luxe/main-new.png" alt="" width="900px">
                    </div>
                    <div class="absolute" style="left:48px;top:235px;">
                        <h1 class="font-800 bold white page-1-text-11 normal" style="margin-left:5px;">I
                            JOINED
                        </h1>
                        <h1 class="font-800 bold gold page-1-text-12 normal"
                            style="line-height: 80px;max-width: 282px;">
                            LUXE
                        </h1>
                    </div>
                    <div class="absolute" style="bottom: 24.5%;left: 60px;">
                        <h1 class="page-1-text-1 bold normal" style="line-height: 35px;">
                            YOUR
                        </h1>
                        <h1 class="page-1-text-2 bold large" style="line-height: 87px;">
                            NAME
                        </h1>
                    </div>
                    <div class="absolute" style="bottom: 19.5%;left: 18px;">
                        <ul>
                            <li class="page-1-text-3">LICENSED AGENT | REAL ESTATE SPECIALIST</li>
                        </ul>
                    </div>
                    <div class="absolute" style="top: 87.5%;left: 120px;">
                        <h1 class="white page-1-text-4"
                            style="font-size: 15px;line-height: 25px;font-weight: 400;letter-spacing: 4px;">
                            EMAIL@LUXEKNOWS.COM
                        </h1>
                        <h1 class="gold bold page-1-text-5" style="font-size: 30px;line-height: 26px;">305-986-7041</h1>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input" style="max-width: 350px;">
                <div class="flex">
                    <div class="pr-10">
                        <label for="page-1-1-text-11">Title</label>
                        <input type="text" id="page-1-text-11" name="page_1_text_11" value="I JOINED">
                        <select name="page_1_text_11_select" id="page_1_text_11_select"
                            data-id-to-change="page-1-text-11" onchange="change_font_size(this)">
                            <option value="small">Small</option>
                            <option value="normal" selected>Medium</option>
                            <option value="large">Large</option>
                        </select>
                    </div>
                    <div>
                        <label for="page-1-text-12">Title</label>
                        <input type="text" id="page-1-text-12" name="page_1_text_12" value="LUXE">
                        <select name="page_1_text_12_select" id="page_1_text_12_select"
                            data-id-to-change="page-1-text-12" onchange="change_font_size(this)">
                            <option value="extra-small">Extra Small</option>
                            <option value="small">Small</option>
                            <option value="normal" selected>Medium</option>
                            <option value="large">Large</option>
                        </select>
                    </div>
                </div>
                <div class="flex">
                    <div class="pr-10">
                        <label for="page-1-1-text-1">First Name</label>
                        <input type="text" id="page-1-text-1" name="page_1_text_1" value="YOUR">
                        <select name="page_1_text_1_select" id="page_1_text_1_select" data-id-to-change="page-1-text-1"
                            onchange="change_font_size(this)">
                            <option value="small">Small</option>
                            <option value="normal" selected>Medium</option>
                            <option value="large">Large</option>
                        </select>
                    </div>
                    <div>
                        <label for="page-1-text-2">Last Name</label>
                        <input type="text" id="page-1-text-2" name="page_1_text_2" value="NAME">
                        <select name="page_1_text_2_select" id="page_1_text_2_select" data-id-to-change="page-1-text-2"
                            onchange="change_font_size(this)">
                            <option value="small">Small</option>
                            <option value="normal">Medium</option>
                            <option value="large" selected>Large</option>
                        </select>
                    </div>
                </div>

                <div class="" style="margin-top:10px;">
                    <div class="pr-10">
                        <label for="page-1-text-3">Title</label>
                        <input type="text" id="page-1-text-3" name="page_1_text_3"
                            value="LICENSED AGENT  |  REAL ESTATE SPECIALIST">
                    </div>
                </div>

                <div class="flex">
                    <div class="pr-10">
                        <label for="page-1-text-4">E - Mail</label>
                        <input type="text" id="page-1-text-4" name="page_1_text_4" value="EMAIL@LUXEKNOWS.COM">
                    </div>
                    <div>
                        <label for="page-1-text-5">Phone</label>
                        <input type="text" id="page-1-text-5" name="page_1_text_5" value="305-986-7041">
                    </div>
                </div>

                <div class="">
                    <div class="mt-3">
                        <label for="page-1-img-1">Background Image</label>
                        <button type="button" class="mt-3" onclick="openInputFile('img-1-input')">Choose Image</button><br>
                        <input type="file" id="img-1-input" onchange="img_1_change(this)" style="display: none;">
                        <button type="button" class="mt-1" onclick="startCropper()">Crop</button>
                        <button type="button" onclick="img_1_crop()">Save Crop</button>
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

    function img_1_change(e) {
        const [file] = e.files
        if (file) {
            $("#image").attr('src', URL.createObjectURL(file))
            $(".page").css('background-image', 'url(' + URL.createObjectURL(file) + ')')
        }
        $(".page").css("display", "block");
    }

    function img_1_crop() {
        cropper.getCroppedCanvas().toBlob((blob) => {
            $('#image').attr('src', URL.createObjectURL(blob))
            $(".page").css('background-image', 'url(' + URL.createObjectURL(blob) + ')')
        });
        cropper.destroy();
        $(".page").css("display", "block");
    }

    var cropper;
    function startCropper(){
        var image = document.getElementById("image");
        $(".page").css("display", "none");
        cropper = new Cropper(image, {
            minContainerHeight: 500,
            aspectRatio: 0.718,
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