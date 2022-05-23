<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Flyer</title>
</head>
@include('includes.fonts')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Oswald&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@600&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@500&display=swap');

    * {
        font-family: 'Montserrat';
    }

    .gochi {
        font-family: 'Gochi Hand', cursive;
        font-weight: 400;
    }

    .lato {
        font-family: 'Lato';
        font-weight: normal;
    }

    .ibm {
        font-family: 'IBM Plex Sans';
        font-weight: 400;
    }

    .ibm-med {
        font-family: 'IBM Plex Sans';
        font-weight: 500;
    }

    .oswald {
        font-family: 'Oswald';
        font-weight: 400;
    }

    .oswald-med {
        font-family: 'Oswald';
        font-weight: 500;
    }

    .oswald-bold {
        font-family: 'Oswald';
        font-weight: 600;
    }

    .roboto {
        font-family: 'Roboto';
        font-weight: 400;
    }

    .bold {
        font-weight: bold;
    }

    .extra-bold {
        font-weight: 800;
    }

    label {
        background-color: #262626;
        color: #fff;
        padding: 10px;
        display: block;
        width: 150px;
        font-family: 'gothicbold';
        margin-top: 5px;
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
        justify-content: flex-end;
    }

    .row-image {
        width: 800px;
        height: auto;
    }

    .page {
        width: 1000px;
        position: relative;
        height: 778px;
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
        top: 37%;
    }

    img.circle {
        border: 10px solid #C9A668;
        border-radius: 50%;
        width: 285px;
        height: 285px;
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

    .list {
        font-size: 23px;
        letter-spacing: -1px;
    }

    .mr-3 {
        margin-right: 8px;
    }

    .title {
        font-size: 90px;
    }

    .social {
        font-size: 14px;
    }

    .white-border {
        border: 5px solid white;
    }

    .agent-info {
        left: 300px;
    }

    .text-splitter {
        margin-left: 8px;
        margin-right: 8px;
        margin-top: -15px;
    }

    .list-inline {
        list-style: none;
        padding: 0;
    }

    ul li {
        display: inline;
        font-size: 40px;
        margin-right: 10px;
        letter-spacing: -1px;
    }

    .text-border {
        margin: 0;
        padding: 0;
        line-height: 35px;
        padding-top: 10px;
        padding-bottom: 10px;
        padding-left: 20px;
        background: white;
    }

    .cropper-container {
        position: fixed !important;
        top: -100px !important;
        z-index: 100;
    }

    @media(max-width:1280px) {
        .page {
            zoom: 87% !important;
        }
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
    <form action="{{ route('flyer-template-4') }}" method="POST">
        @csrf
        <div class="row">
            <div class="row-image">
                <img src="" id="image" data-replace-attribute="src" data-name-replace="image" style="display: none;">
                <input hidden name="img_1_input" id="img_1_input" value="images/flyers/template4/house1.jpg">
                <input hidden name="img_2_input" id="img_2_input" value="images/flyers/template4/house2.jpg">
                <input hidden name="img_3_input" id="img_3_input" value="images/flyers/template4/bg.jpg">
                <input hidden name="img_5_input" id="img_5_input" value="images/flyers/template1/person.png">
                <div class="page">
                    {{-- Images --}}
                    <div class="absolute" style="top:0;left:0;">
                        <img id="img_3" src="images/flyers/template4/bg.jpg" alt="" width="905px" height="580px">
                    </div>
                    <div class="absolute" style="top:0;left:0;">
                        <img src="images/flyers/template4/main.png" alt="">
                    </div>
                    <div class="absolute" style="bottom:0;left:25px;">
                        <img id="img_5" src="images/flyers/template1/person.png" alt="" height="300px" width="210px">
                    </div>
                    <div class="absolute" style="bottom:50px;left:250px;">
                        <img src="images/flyers/template1/social.png" alt="" style="height:150px;">
                    </div>
                    <div class="absolute" style="bottom:136px;left:698px;">
                        <img id="img_1" src="images/flyers/template4/house1.jpg" alt="" height="128px" width="172px">
                    </div>
                    <div class="absolute" style="bottom:5px;left:698px;">
                        <img id="img_2" src="images/flyers/template4/house2.jpg" alt="" height="128px" width="172px">
                    </div>

                    {{-- Text --}}
                    <div class="absolute" style="top:45px;left:55px;">
                        <p class="white text-1" style="font-size: 40px;letter-spacing:-1px;">Open <span
                                class="bold">House</span></p>
                    </div>
                    <div class="absolute" style="top:100px;left:55px;">
                        <p class="oswald white text-2" style="font-size: 20px;letter-spacing:-1px;"><span
                                class="oswald-med">12625 SW 78th
                                Avenue,</span> Pinecrest, FL, 33156</p>
                    </div>
                    <div class="absolute" style="top:69px;right:210px;text-align:right;">
                        <p class="oswald white text-3" style="font-size: 25px;"><span class="oswald-med">Sat | July 31
                                | </span> 12pm - 4pm</p>
                    </div>
                    <div class="absolute" style="top:69px;left:823px;">
                        <p class="oswald white text-4" style="font-size: 25px;">$5,490,000</p>
                    </div>
                    <div class="absolute" style="top: 100px;width: 1000px;">
                        <div style="position: relative;left:430px;">
                            <h1 class="oswald text-11"
                                style="color:#6d6e71;font-size:20px;transform: rotate(-90deg);letter-spacing:1px;">6
                                Beds | 6 Full-Baths
                                | 1 Half-Bath | <span class="oswald-med">6,800
                                    SqFt</span></h1>
                        </div>
                    </div>

                    <div class="absolute agent-info" style="bottom:167px;width:100%;">
                        <p class="text-5" style="font-size: 25px;"><strong>Wesley</strong> Ulloa</p>
                        <p class="text-6" style="font-size: 11px;margin-top:-2px;letter-spacing:1px;">LICENSED REAL
                            ESTATE
                            BROKER</p>
                    </div>
                    <div class="absolute agent-info" style="bottom:108px;width:100%;">
                        <p class="ibm text-7" style="letter-spacing:1px;">C: (305) 986-7041</p>
                        <p class="ibm text-8" style="margin-top:-2px;letter-spacing:1px;">O: (305) 809-7650</p>
                    </div>
                    <div class="absolute agent-info" style="bottom:57px;width:100%;">
                        <p class="ibm social text-9" style="letter-spacing:1px;">wesley@luxeknows.com</p>
                        <p class="ibm social text-10" style="margin-top:-2px;letter-spacing:1px;">
                            www.<strong>luxeknows</strong>.com</p>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input" style="max-width: 350px;">
                <div class="file-input-width">
                    <label for="page-1-img-1">Background</label>
                    <button type="button" class="mt-3" onclick="openInputFile('img-3-input')">Choose Image</button>
                    <input type="file" id="img-3-input" onchange="img_3_change()" style="display: none;">
                    <button type="button" class="mt-1" onclick="startCropper(1.5)">Crop</button>
                    <button type="button" onclick="img_3_crop()">Save Crop</button>
                </div>
                <div class="">
                    <div>
                        <label for="text-1">Title</label>
                        <input type="text" id="text-1" name="text_1" value="Open <span class='bold'>House</span>">
                    </div>
                    <div>
                        <label for="text-6">Address</label>
                        <input type="text" id="text-2" name="text_2"
                            value="<span class='oswald-med'>12625 SW 78th Avenue,</span> Pinecrest, FL, 33156">
                    </div>
                </div>
                <div class="">
                    <div>
                        <label for="text-3">Date</label>
                        <input type="text" id="text-3" name="text_3"
                            value="<span class='oswald-med'>Sat | July 31 | </span> 12pm - 4pm">
                    </div>
                    <div>
                        <label for="text-4">Price</label>
                        <input type="text" id="text-4" name="text_4" value="$5,490,000">
                    </div>
                </div>
                <div class="">
                    <div>
                        <label for="text-11">Options</label>
                        <input type="text" id="text-11" name="text_11"
                            value="Beds | 6 Full-Baths | 1 Half-Bath | <span class='oswald-med'>6,800 SqFt</span>">
                    </div>
                </div>
                <div class="flex">
                    <div class="file-input-width" style="z-index: 10;">
                        <label for="page-1-img-1">Image 1</label>
                        <button type="button" class="mt-3" onclick="openInputFile('img-1-input')">Choose Image</button>
                        <input type="file" id="img-1-input" onchange="img_1_change()" style="display: none;">
                        <button type="button" class="mt-1" onclick="startCropper(1.34)">Crop</button>
                        <button type="button" onclick="img_1_crop()">Save Crop</button>
                    </div>
                    <div class="file-input-width" style="z-index: 10;">
                        <label for="page-1-img-1">Image 2</label>
                        <button type="button" class="mt-3" onclick="openInputFile('img-2-input')">Choose Image</button>
                        <input type="file" id="img-2-input" onchange="img_2_change()" style="display: none;">
                        <button type="button" class="mt-1" onclick="startCropper(1.34)">Crop</button>
                        <button type="button" onclick="img_2_crop()">Save Crop</button>
                    </div>
                </div>
                <div class="flex mt-1">
                    <div class="pr-10">
                        <label for="text-5">Info 1</label>
                        <input type="text" id="text-5" name="text_5" value="<strong>Wesley</strong> Ulloa">
                    </div>
                    <div>
                        <label for="text-6">Info 2</label>
                        <input type="text" id="text-6" name="text_6" value="LICENSED REAL ESTATE BROKER">
                    </div>
                </div>
                <div class="flex">
                    <div class="pr-10">
                        <label for="text-7">Info 3</label>
                        <input type="text" id="text-7" name="text_7" value="C: (305) 986-7041">
                    </div>
                    <div>
                        <label for="text-8">Info 4</label>
                        <input type="text" id="text-8" name="text_8" value="O: (305) 809-7650">
                    </div>
                </div>
                <div class="flex">
                    <div class="pr-10">
                        <label for="text-9">Info 5</label>
                        <input type="text" id="text-9" name="text_9" value="wesley@luxeknows.com">
                    </div>
                    <div>
                        <label for="text-10">Info 6</label>
                        <input type="text" id="text-10" name="text_10" value="www.<strong>luxeknows</strong>.com">
                    </div>
                </div>
                <div class="file-input-width">
                    <label for="page-1-img-1">Agent</label>
                    <button type="button" class="mt-3" onclick="openInputFile('img-5-input')">Choose Image</button>
                    <input type="file" id="img-5-input" onchange="img_5_change()" style="display: none;">
                    <button type="button" class="mt-1" onclick="startCropper(0.71)">Crop</button>
                    <button type="button" onclick="img_5_crop()">Save Crop</button>
                </div>
                <div class="flex">
                    <div class="" style="width: 345px;margin-top:20px">
                        <button type="submit" name="action" value="Generate" class="generate">Generate</button>
                        {{--<button type="submit" name="action" value="Save" class="generate">Save</button>
                        <br>
                        JSON Upload:
                        <input type="file" id="jsonFileUpload" onchange="jsonFileUploaded()">--}}
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

<script>
    $("textarea").change(function(event) {
        var event_id = event.target.id;
        if (event_id == "text-13") {
            var text = $("#text-13").val();
            var array = document.getElementsByClassName("text-13");
            var textarea = array[0];
            textarea.innerHTML = text;
        }
    });
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
                    $("#img_6").attr('src', 'uploadedimages/' + output);
                    $("input[name=img_6_input]").val('uploadedimages/' + output);
                });
                $(".page").css("opacity", "1");
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
                    $("#img_6").attr('src', 'uploadedimages/' + output);
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
                    $("#img_5").attr('src', 'uploadedimages/' + output);
                    $("input[name=img_5_input]").val('uploadedimages/' + output);
                });
                $(".page").css("opacity", "1");
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
                    $("#img_5").attr('src', 'uploadedimages/' + output);
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
                    $("#img_4").attr('src', 'uploadedimages/' + output);
                    $("input[name=img_4_input]").val('uploadedimages/' + output);
                });
                $(".page").css("opacity", "1");
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
                    $("#img_4").attr('src', 'uploadedimages/' + output);
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
                    $("#img_3").attr('src', 'uploadedimages/' + output);
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
                    $("#img_3").attr('src', 'uploadedimages/' + output);
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
                    $("#img_2").attr('src', 'uploadedimages/' + output);
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
                    $("#img_2").attr('src', 'uploadedimages/' + output);
                    $("input[name=img_2_input]").val('uploadedimages/' + output);
                });
                $(".page").css("opacity", "1");
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
                    $("#img_1").attr('src', 'uploadedimages/' + output);
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
                    $("#img_1").attr('src', 'uploadedimages/' + output);
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
    function openInputFile(id) {
        $('#' + id).click()
    }
</script>

</html>