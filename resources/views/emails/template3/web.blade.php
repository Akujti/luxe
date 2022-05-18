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
    <form action="{{ route('email-template-3') }}" method="POST">
        @csrf
        <div class="row">
            <div class="row-image">
                <img src="" id="image" data-replace-attribute="src" data-name-replace="image" style="display: none;">
                <input hidden name="img_1_input" id="img_1_input" value="images/emails/template3/house-1.jpg">
                <input hidden name="img_2_input" id="img_2_input" value="images/emails/template3/house-2.jpg">
                <input hidden name="img_3_input" id="img_3_input" value="images/emails/template3/house-3.png">
                <div class="page-wrapper">
                    <div class="page">
                        {{-- Images --}}
                        <div class="absolute">
                        </div>
                        <div class="absolute">
                            <img src="images/emails/template3/main.png" alt="" style="width: 1000px;height:4673px;">
                        </div>
                        <div class="absolute" style="top:53px;left:360px">
                            <img src="images/emails/template3/logo.png" alt="" width="290px">
                        </div>
                        <div class="absolute" style="top:409px;">
                            <img id="img_1" src="images/emails/template3/house-1.jpg" alt="" width="835px"
                                height="835px">
                        </div>
                        <div class="absolute" style="top:2592px;right:0;">
                            <img id="img_2" src="images/emails/template3/house-2.jpg" alt="" width="835px"
                                height="567px">
                        </div>
                        <div class="absolute" style="top:3207px;left:169px;">
                            <img id="img_3" src="images/emails/template3/house-3.png" alt="" width="621px"
                                height="415px">
                        </div>
                        <div class="absolute" style="top:94.3%;width:100%;text-align:center;">
                            <img src="images/emails/template1/logos.png" alt="" width="200px">
                        </div>

                        {{-- Text --}}
                        <div class="absolute" style="top: 1100px;width: 1315px;font-size: 30px;">
                            <div style="position: relative;left:245px;">
                                <h1 class="bold-700 gold" style="transform: rotate(-90deg);text-align: center;">
                                    FOR SALE: &nbsp;&nbsp;&nbsp; <span class="text-15"
                                        style="color: black">$1,295,000</span>
                                </h1>
                            </div>
                        </div>
                        <div class="absolute" style="width: 100%;text-align:center;top:205px;">
                            <p class="text-1 gold poppins bold-700" style="font-size: 80px;margin:0">Luxury New Build
                            </p>
                            <p class="text-2 poppins bold-700" style="font-size: 80px;margin-top:-20px">Opportunity</p>
                        </div>
                        <div class="absolute"
                            style="top:1120px;background:white;left:0;right:200px;padding-top:0px;padding-bottom:0px;">
                            <ul style="margin:0px;padding-left: 35px;padding-top:10px;padding-bottom:10px;">
                                <li class="text-3" style="font-size:35px;"><b>3</b> BEDS</li>
                                <li style="font-size:35px;" class="gold">|</li>
                                <li class="text-4" style="font-size:35px;"><b>2</b> BATHS</li>
                                <li style="font-size:35px;" class="gold">|</li>
                                <li class="text-5" style="font-size:35px;"><b>1,700</b> SQFTs</li>
                            </ul>
                        </div>
                        <div class="absolute" style="width: 100%;text-align:right;top:1270px;right:296px">
                            <p class="text-6 gold bold-700" style="font-size: 45px;margin:0">55 MERRICK WAY #402</p>
                            <p class="text-7" style="font-size: 40px;margin-top:3px">CORAL GABLES, FL 33134</p>
                        </div>
                        <div class="absolute" style="top:1500px;left:85px;right:200px;">
                            <p class="text-8 poppins" style="font-size: 31px;line-height: 60px;">Lorem Ipsum is simply
                                dummy
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
                        <div class="absolute" style="width: 100%;text-align:center;top:2440px;left:-80px">
                            <p class="text-9 white bold-700" style="font-size: 50px;">LEARN MORE</p>
                        </div>
                        <div class="absolute" style="top:3710px;left:85px;right:170px;">
                            <p class="text-10 gold bold-700" style="font-size: 31px">ABOUT THE BUILDER</p>
                            <p class="text-11 white poppins" style="font-size: 31px;line-height: 60px;">The standard
                                chunk of
                                Lorem Ipsum used
                                since the 1500s is
                                reproduced below for those interested. Sections 1.10.32 and
                                1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their
                                exact original form,
                                accompanied by
                                English versions from the 1914</p>
                        </div>
                        <div class="absolute" style="width: 100%;text-align:right;top:4240px;right:165px;">
                            <p class="text-12 gold bold-700" style="font-size: 50px;margin:0">For More Info Call</p>
                            <p class="text-13 bold-700" style="font-size: 80px;margin-top:-20px">305.809.7650</p>
                        </div>
                        {{-- Footer --}}
                        <div class="absolute" style="text-align: center;top:97.5%;width: 100%;">
                            <h1 class="text-14" style="font-size:22px;font-weight:400;color:white">55 MERRICK WAY SUITE
                                402,
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
                <div class="" style="margin-bottom:10px">
                    <div class="pr-10">
                        <label for="page-1-img-1">First Image</label>
                        <button type="button" class="mt-3" onclick="openInputFile('img-1-input')">Choose Image</button><br>
                        <input type="file" id="img-1-input"
                            onchange="image_change('img-1-input',['img_1'],'img_1_input')" style="display: none;">
                        <button type="button" class="mt-1" onclick="startCropper(1)">Crop</button>
                        <button type="button" onclick="crop_image(['img_1'],'img_1_input')">Save Crop</button>
                    </div>
                </div>
                <div class="">
                    <label for="text-1">Title 1</label>
                    <input type="text" id="text-1" name="text_1" value="Luxury New Build">
                    <input type="text" id="text-2" name="text_2" value="Opportunity">
                </div>
                <div class="">
                    <label for="text-1">Price</label>
                    <input type="text" id="text-15" name="text_15" value="$1,295,000">
                </div>
                <div class="">
                    <label for="text-1">Beds</label>
                    <input type="text" id="text-3" name="text_3" value="<b>3</b> BEDS">
                </div>
                <div class="">
                    <label for="text-1">Baths</label>
                    <input type="text" id="text-4" name="text_4" value="<b>2</b> BATHS">
                </div>
                <div class="">
                    <label for="text-1">Area</label>
                    <input type="text" id="text-5" name="text_5" value="<b>1,700</b> SQFTs">
                </div>
                <div class="">
                    <label for="text-1">Address</label>
                    <input type="text" id="text-6" name="text_6" value="55 MERRICK WAY #402">
                    <input type="text" id="text-7" name="text_7" value="CORAL GABLES, FL 33134">
                </div>
                <div class="" style="margin-top: 500px">
                    <label for="text-1">Text</label>
                    <textarea type="text" id="text-8" name="text_8"
                        rows="15">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</textarea>
                </div>
                <div class="" style="margin-top: 8px">
                    <label for="text-1">Button</label>
                    <input type="text" id="text-9" name="text_9" value="LEARN MORE">
                </div>
                <div class="" style="margin-top:180px;">
                    <div class="" style="margin-bottom:10px">
                        <label for="page-1-img-1">Second Image</label>
                        <button type="button" class="mt-3" onclick="openInputFile('img-2-input')">Choose Image</button><br>
                        <input type="file" id="img-2-input"
                            onchange="image_change('img-2-input',['img_2'],'img_2_input')" style="display: none;">
                        <button type="button" class="mt-1" onclick="startCropper(835/567)">Crop</button>
                        <button type="button" onclick="crop_image(['img_2'],'img_2_input')">Save Crop</button>
                    </div>
                    <div class="" style="margin-top:200px;">
                        <label for="page-1-img-1">Third Image</label>
                        <button type="button" class="mt-3" onclick="openInputFile('img-3-input')">Choose Image</button><br>
                        <input type="file" id="img-3-input"
                            onchange="image_change('img-3-input',['img_3'],'img_3_input')" style="display: none;">
                        <button type="button" class="mt-1" onclick="startCropper(621/415)">Crop</button>
                        <button type="button" onclick="crop_image(['img_3'],'img_3_input')">Save Crop</button>
                    </div>
                </div>
                <div class="" style="margin-top: 134px">
                    <label for="text-10">Title</label>
                    <input type="text" id="text-10" name="text_10" value="ABOUT THE BUILDER">
                    <textarea name="text_11" id="text-11" rows="10">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and
                    1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by
                    English versions from the 1914</textarea>
                </div>
                <div class="" style="margin-top: 100px">
                    <label for="text-11">Title</label>
                    <input type="text" id="text-12" name="text_12" value="For More Info Call">
                    <input type="text" id="text-13" name="text_13" value="305.809.7650">
                </div>
                <div class="" style="margin-top: 50px">
                    <label for="text-11">Footer</label>
                    <input type="text" id="text-14" name="text_14"
                        value="55 MERRICK WAY SUITE 402, CORAL GABLES, FL 33134">
                </div>
                <div class="flex">
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