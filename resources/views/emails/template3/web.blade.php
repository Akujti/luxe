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

    div {
        /* border: 1px solid red; */
    }

    label {
        background-color: #FFCF40;
        padding: 10px;
        display: block;
        width: 150px;
        font-family: Lato;
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
        border: 1px solid #FFCF40;
        font-family: Lato;
    }

    .button {
        margin-top: 50px;
    }

    .generate {
        font-family: "Lato";
        font-weight: 600;
        font-size: 18px;
        padding: 20px;
        background-color: #FFCF40;
        color: white;
        text-decoration: none;
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
        zoom: .7;
        position: relative;
        width: 1000px;
        height: 4673px;
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
        top: -135% !important;
        z-index: 100;
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
    <form action="{{ route('email-template-3') }}" method="POST">
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
                    <div class="page">
                        {{-- Images --}}
                        <div class="absolute">
                            {{-- <img src="{{ $img_1_input }}" alt="" style="width:
                            1000px;height:1050px;object-fit:cover;"> --}}
                        </div>
                        <div class="absolute">
                            <img src="images/emails/template3/main.png" alt="" style="width: 1000px;height:4673px;">
                        </div>
                        <div class="absolute" style="top:53px;left:360px">
                            <img src="images/emails/template3/logo.png" alt="" width="290px">
                        </div>
                        <div class="absolute" style="top:409px;">
                            <img src="images/emails/template3/house-1.jpg" alt="" width="835px" height="835px">
                        </div>
                        <div class="absolute" style="top:2592px;right:0;">
                            <img src="images/emails/template3/house-2.jpg" alt="" width="835px" height="567px">
                        </div>
                        <div class="absolute" style="top:3207px;left:169px;">
                            <img src="images/emails/template3/house-3.png" alt="" width="621px" height="415px">
                        </div>
                        <div class="absolute" style="top:94.3%;width:100%;text-align:center;">
                            <img src="images/emails/template1/logos.png" alt="" width="200px">
                        </div>

                        {{-- Text --}}
                        <div class="absolute" style="top: 1100px;width: 1315px;font-size: 30px;">
                            <div style="position: relative;left:245px;">
                                <h1 class="bold-700 gold" style="transform: rotate(-90deg);text-align: center;">
                                    FOR SALE: &nbsp;&nbsp;&nbsp; <span style="color: black">$1,295,000</span>
                                </h1>
                            </div>
                        </div>
                        <div class="absolute" style="width: 100%;text-align:center;top:205px;">
                            <p class="gold poppins bold-700" style="font-size: 80px;margin:0">Luxury New Build</p>
                            <p class="poppins bold-700" style="font-size: 80px;margin-top:-20px">Opportunity</p>
                        </div>
                        <div class="absolute"
                            style="top:1120px;background:white;left:0;right:200px;padding-top:0px;padding-bottom:0px;">
                            <ul style="margin:0px;padding-left: 35px;padding-top:10px;padding-bottom:10px;">
                                <li style="font-size:35px;"><b>3</b> BEDS</li>
                                <li style="font-size:35px;" class="gold">|</li>
                                <li style="font-size:35px;"><b>2</b> BATHS</li>
                                <li style="font-size:35px;" class="gold">|</li>
                                <li style="font-size:35px;"><b>1,700</b> SQFTs</li>
                            </ul>
                        </div>
                        <div class="absolute" style="width: 100%;text-align:right;top:1270px;right:296px">
                            <p class="gold bold-700" style="font-size: 45px;margin:0">55 MERRICK WAY #402</p>
                            <p class="" style="font-size: 40px;margin-top:3px">CORAL GABLES, FL 33134</p>
                        </div>
                        <div class="absolute" style="top:1500px;left:85px;right:200px;">
                            <p class="poppins" style="font-size: 31px;line-height: 60px;">Lorem Ipsum is simply dummy
                                text of the printing
                                and
                                typesetting industry. Lorem Ipsum has been the industry's standard
                                dummy text ever since the 1500s, when an unknown printer took a galley of type and
                                scrambled it to make
                                a type specimen
                                book. It has survived not only five centuries, but also the leap into electronic
                                typesetting, remaining
                                essentially
                                unchanged. It was popularised in the 1960s with the release of Letraset sheets
                                containing Lorem Ipsum
                                passages, and more
                                recently with desktop publishing software like Aldus PageMaker including versions of
                                Lorem Ipsum.</p>
                        </div>
                        <div class="absolute" style="top:3710px;left:85px;right:170px;">
                            <p class="gold bold-700" style="font-size: 31px">ABOUT THE BUILDER</p>
                            <p class="white poppins" style="font-size: 31px;line-height: 60px;">The standard chunk of
                                Lorem Ipsum used
                                since the 1500s is
                                reproduced below for those interested. Sections 1.10.32 and
                                1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their
                                exact original form,
                                accompanied by
                                English versions from the 1914</p>
                        </div>
                        <div class="absolute" style="width: 100%;text-align:center;top:2440px;left:-80px">
                            <p class="white bold-700" style="font-size: 50px;">LEARN MORE</p>
                        </div>
                        <div class="absolute" style="width: 100%;text-align:right;top:4240px;right:165px;">
                            <p class="gold bold-700" style="font-size: 50px;margin:0">For More Info Call</p>
                            <p class="bold-700" style="font-size: 80px;margin-top:-20px">305.809.7650</p>
                        </div>
                        {{-- Footer --}}
                        <div class="absolute" style="text-align: center;top:97.5%;width: 100%;">
                            <h1 class="" style="font-size:22px;font-weight:400;color:white">55 MERRICK WAY SUITE 402,
                                CORAL
                                GABLES,
                                FL
                                33134</h1>
                        </div>
                        <div class="absolute" style="text-align: center;top:99%;width: 100%;">
                            <h1 class="" style="font-size:18px;font-weight:400;color:#9e9e9e">Copyright © 2021 LUXE
                                Properties, LLC, All rights reserved.</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input" style="max-width: 350px;height:3600px">
                <div class="absolute" style="top: 400px;">
                    <div class="pr-10">
                        <label for="page-1-img-1">Main Image</label>
                        <input type="file" id="img-1-input" onchange="img_1_change()">
                        <button type="button" onclick="startCropper(1)">Crop</button>
                        <button type="button" onclick="img_1_crop()">Save Crop</button>
                    </div>
                </div>
                <div class="flex absolute" style="top:1060px;">
                    <div class="pr-10">
                        <label for="text-1">Text</label>
                        <input type="text" id="text-1" name="text_1" value="REALTORS">
                    </div>
                </div>
                <div class="flex">
                    <div class="" style="width: 345px;">
                        <button type="submit" name="action" value="Generate" class="generate">Generate</button>
                        <button type="submit" name="action" value="Save" class="generate">Save</button>
                        <br>
                        JSON Upload:
                        <input type="file" id="jsonFileUpload" onchange="jsonFileUploaded()">
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
                    $("#img_6").attr('src', 'uploadedimages/' + output)
                    $("input[name=img_6_input]").val('uploadedimages/' + output);
                });
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
                    $("#img_6").attr('src', 'uploadedimages/' + output)
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
                    $("#img_5").attr('src', 'uploadedimages/' + output)
                    $("input[name=img_5_input]").val('uploadedimages/' + output);
                });
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
                    $("#img_5").attr('src', 'uploadedimages/' + output)
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
                    $("#img_4").attr('src', 'uploadedimages/' + output)
                    $("input[name=img_4_input]").val('uploadedimages/' + output);
                });
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
                    $("#img_4").attr('src', 'uploadedimages/' + output)
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
                    $("#img_3").attr('src', 'uploadedimages/' + output)
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
                    $("#img_3").attr('src', 'uploadedimages/' + output)
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
                    $("#img_2").attr('src', 'uploadedimages/' + output)
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
                    $("#img_2").attr('src', 'uploadedimages/' + output)
                    $("input[name=img_2_input]").val('uploadedimages/' + output);
                });
                $(".page").css("opacity", "1");
            }
        });
        
        }/*, 'image/png' */);
    }

    function img_1_change(){
        console.log('step1');
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
                console.log('step2');
                $("#image").attr('src', 'uploadedimages/' + output)
                getBase64Image(document.getElementById("image"),function(base64){
                    $("#img_1").attr('src', 'uploadedimages/' + output)
                    $("input[name=img_1_input]").val('uploadedimages/' + output);
                });
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
                    $("#img_1").attr('src', 'uploadedimages/' + output)
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
</script>

</html>