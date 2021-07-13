<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Joined LUXE Story</title>
</head>
<style>
    * {
        font-family: 'Montserrat';
        font-weight: 400;
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
        position: absolute;
        left: 0;
        background-image: url('images/themes/joined-luxe/person.jpg');
        background-position: top right;
        background-repeat: no-repeat;
        background-size: 800px;
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
        font-size: 22px;
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
        font-size: 52px;
    }

    .page-1-text-11.normal {
        font-size: 62px;
    }

    .page-1-text-11.large {
        font-size: 72px;
    }

    .page-1-text-12.small {
        font-size: 135px;
    }

    .page-1-text-12.normal {
        font-size: 150px;
    }

    .page-1-text-12.large {
        font-size: 165px;
    }

    .page-1-text-1.small {
        font-size: 55px;
    }

    .page-1-text-1.normal {
        font-size: 65px;
    }

    .page-1-text-1.large {
        font-size: 75px;
    }

    .page-1-text-2.small {
        font-size: 80px;
    }

    .page-1-text-2.normal {
        font-size: 90px;
    }

    .page-1-text-2.large {
        font-size: 100px;
    }

    .page-1-text-1 {
        width: max-content;
        background: white;
        padding: 0px 60px 0px 20px;
    }

    .page-1-text-2 {
        width: max-content;
        background: #C5A467;
        padding: 10px 50px 10px 20px;
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
    <form action="{{ route('theme-joined-luxe-story') }}" method="POST">
        @csrf
        <div class="row">
            <div class="row-image">
                <img src="" id="image" data-replace-attribute="src" data-name-replace="image" style="display: none;">
                <input hidden name="img_1_input" id="img_1_input" value="images/themes/joined-luxe/person.jpg">
                <div class="page">
                    <div>
                        <img id="img1" src="images/themes/joined-luxe-story/main-new.png" alt="" width="900px">
                    </div>
                    <div class="absolute" style="right:48px;top: 600px;text-align:right;">
                        <h1 class="font-800 bold white page-1-text-11 normal" style="margin-right:5px;">I
                            JOINED
                        </h1>
                        <h1 class="font-800 bold gold page-1-text-12 large" style="line-height: 105px; width:500px;">
                            LUXE
                        </h1>
                    </div>
                    <div class="absolute" style="bottom: 18.8%;left: 60px;">
                        <h1 class="page-1-text-1 bold normal" style="">
                            YOUR
                        </h1>
                        <h1 class="page-1-text-2 bold normal" style="line-height: 77px;">
                            NAME
                        </h1>
                    </div>
                    <div class="absolute" style="bottom: 15.6%;left: 18px;">
                        <ul>
                            <li class="page-1-text-3">LICENSED AGENT | REAL ESTATE SPECIALIST</li>
                        </ul>
                    </div>
                    <div class="absolute" style="top: 92.2%;left: 145px;">
                        <h1 class="white page-1-text-4"
                            style="font-size: 19px;line-height: 25px;font-weight: 400;letter-spacing: 4px;">
                            EMAIL@LUXEKNOWS.COM
                        </h1>
                        <h1 class="gold bold page-1-text-5" style="font-size: 32px;line-height: 26px;">305-986-7041</h1>
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
                            <option value="small">Small</option>
                            <option value="normal">Medium</option>
                            <option value="large" selected>Large</option>
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
                    <div class="">
                        <label for="page-1-img-1">Background Image</label>
                        <input type="file" id="img-1-input" onchange="img_1_change()">
                        <button type="button" onclick="startCropper()">Crop</button>
                        <button type="button" onclick="img_1_crop()">Save Crop</button>
                        <p style="font-size: 12px;"><i>Use portrait images for better results</i></p>
                    </div>
                </div>

                <div class="flex">
                    <div class="button" style="width: 345px;">
                        <button type="submit" name="action" value="Generate" class="generate">Generate</button>
                        <button type="submit" name="action" value="Save" class="generate">Save</button>
                        <br>
                        JSON Upload:
                        <input type="file" id="jsonFileUpload" onchange="jsonFileUploaded()">
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
        $("."+element).removeClass('small');
        $("."+element).removeClass('normal');
        $("."+element).removeClass('large');
    }

    $(document).ready(function() {
        $("input").change(function(event) {
            var event_id = event.target.id;
            var event_element = $("#" + event_id)
            var export_var = $("." + event_id);
            export_var.text(event_element.val());
        });    
    });

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
                    $("#img4").attr('src', 'uploadedimages/' + output)
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
                    $("#img4").attr('src', 'uploadedimages/' + output)
                    $("input[name=img_4_input]").val('uploadedimages/' + output);
                });
                $(".page").css("display", "block");
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
                    $("#img3").attr('src', 'uploadedimages/' + output)
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
                    $("#img3").attr('src', 'uploadedimages/' + output)
                    $("input[name=img_3_input]").val('uploadedimages/' + output);
                });
                $(".page").css("display", "block");
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
                    $("#img2").attr('src', 'uploadedimages/' + output)
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
                    $("#img2").attr('src', 'uploadedimages/' + output)
                    $("input[name=img_2_input]").val('uploadedimages/' + output);
                });
                $(".page").css("display", "block");
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
                    $(".page").css('background-image', 'url(uploadedimages/' + output + ')')
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
                    $(".page").css('background-image', 'url(uploadedimages/' + output + ')')
                    $("input[name=img_1_input]").val('uploadedimages/' + output);
                });
                $(".page").css("display", "block");
            }
        });
        
        }/*, 'image/png' */);
    }

    var cropper;
    function startCropper(){
        var image = document.getElementById("image");
        $(".page").css("display", "none");
        cropper = new Cropper(image, {
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
</script>

</html>