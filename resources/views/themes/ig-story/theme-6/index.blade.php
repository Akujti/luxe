@extends('themes.layouts.app')
@section('title')
    IG Story 6 -
@endsection
@section('css')
@include('includes.fonts')
<style>
    .font-400 {
        font-weight: 400;
    }

    .font-800 {
        font-weight: 800;
    }

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
        margin-bottom: 30px;
        width: 100%;
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
        margin: 10px auto 30px auto !important;
    }

    .row-image {
        width: 800px;
        height: auto;
    }

    .page {
        position: absolute;
        left: 0;
        background-image: url('/images/themes/tbt-story/main.png');
        background-position: top right;
        background-repeat: no-repeat;
        background-size: 800px;
        width: 800px;
        height: 1420px;
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
        font-weight: 900;
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
        top: 67%;
    }

    img.circle {
        border-radius: 77px;
        width: 155px;
        height: 155px;
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
                <input hidden name="img_2_input" id="img_2_input" value="/images/themes/tbt-story/team.jpg">
                <div class="page" id="page-box">
                    <div class="absolute" style="right: 11.7%;top: 330px;text-align: right;">
                        <h1 class="font-800 page-1-text-1" style="font-size:53px;">THROWBACK</h1>
                        <h1 class="font-800 gold page-1-text-2" style="font-size:49px;line-height: 20px;">THURSDAY</h1>
                    </div>
                    <div class="absolute"
                        style="left: -0.5%;font-size: 10px;top: 479px;transform: rotate(-90deg);width: 100px;">
                        <h1 class="font-400 page-1-text-4">#TBT</h1>
                    </div>
                    <div class="absolute"
                        style="left: -13%;font-size: 10px;top: 965px;transform: rotate(-90deg);width: 300px;">
                        <h1 class="font-400 page-1-text-3">WWW.LUXEKNOWS.COM</h1>
                    </div>
                    <div class="absolute"
                        style="right: -185px;font-size: 10px;top: 800px;transform: rotate(-90deg);letter-spacing: 10px;width: 450px;">
                        <h1 class="font-400 page-1-text-5">LUXE PROPERTIES LLC</h1>
                    </div>
                    <div>
                        <img id="img2" class="absolute" style="top:30.6%;left:11.4%;"
                            src="/images/themes/tbt-story/team.jpg" alt="" width="620px" height="770px">
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input" style="max-width: 350px;">
                <div class="flex">
                    <div class="pr-10">
                        <label for="page-1-1-text-1">Title</label>
                        <input type="text" id="page-1-text-1" name="page_1_text_1" value="THROWBACK">
                    </div>
                    <div>
                        <label for="page-1-text-2">Title</label>
                        <input type="text" id="page-1-text-2" name="page_1_text_2" value="THURSDAY">
                    </div>
                </div>
                <div class="flex">
                    <div class="pr-10">
                        <label for="page-1-1-text-3">Website</label>
                        <input type="text" id="page-1-text-3" name="page_1_text_3" value="WWW.LUXEKNOWS.COM">
                    </div>
                    <div>
                        <label for="page-1-text-2">Hashtag</label>
                        <input type="text" id="page-1-text-4" name="page_1_text_4" value="#TBT">
                    </div>
                </div>
                <div class="">
                    <div>
                        <label for="page-1-1-text-5">Company</label>
                        <input type="text" id="page-1-text-5" name="page_1_text_5" value="LUXE PROPERTIES LLC">
                    </div>
                </div>
                <div class="">
                    <div class="pr-10">
                        <label for="page-1-img-1">Image</label>
                        <button type="button" class="mt-3" onclick="openInputFile('img-2-input')">Choose Image</button><br>
                        <input type="file" id="img-2-input" onchange="img_2_change(this)" style="display: none;">
                        <button type="button" class="mt-1" onclick="startCropper()">Crop</button>
                        <button type="button" onclick="img_2_crop()">Save Crop</button>
                        <p style="font-size: 12px;"><i>Use portrait images for better results</i></p>
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
            aspectRatio: 4/5,
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