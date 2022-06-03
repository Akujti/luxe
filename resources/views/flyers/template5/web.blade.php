@extends('themes.layouts.app')
@section('css')
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
    .row-image {
        width: 800px;
        height: auto;
    }

    .page {
        width: 1000px;
        position: relative;
        height: 1286px;
        background-position: center bottom;
        background-repeat: no-repeat;
        background-size: 1140px;
        overflow: hidden;
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
        left: 450px;
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
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.9/cropper.js"
    integrity="sha512-oqBsjjSHWqkDx4UKoU+5IUZN2nW2qDp2GFSKw9+mcFm+ZywqfBKp79nfWmGPco2wzTWuE46XpjtCjZ9tFmI12g=="
    crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.9/cropper.css"
    integrity="sha512-949FvIQOibfhLTgmNws4F3DVlYz3FmCRRhJznR22hx76SKkcpZiVV5Kwo0iwK9L6BFuY+6mpdqB2+vDIGVuyHg=="
    crossorigin="anonymous" />

@section('content')
    <form action="{{ route('flyer-template-5') }}" method="POST">
        @csrf
        <div class="row">
            <div class="row-image">
                <img src="" id="image" data-replace-attribute="src" data-name-replace="image" style="display: none;">
                <input hidden name="img_2_input" id="img_2_input" value="images/flyers/template1/person.png">
                <input hidden name="img_1_input" id="img_1_input" value="images/flyers/template5/img-1.jpg">
                <input hidden name="img_3_input" id="img_3_input" value="images/flyers/template5/img-2.jpg">
                <input hidden name="img_4_input" id="img_4_input" value="images/flyers/template5/img-3.jpg">
                <input hidden name="img_5_input" id="img_5_input" value="images/flyers/template5/img-4.jpg">

                <div class="page" id="el">
                    {{-- Images --}}
                    <div class="absolute" style="top:220px;left:75px;">
                        <img id="img_1" src="images/flyers/template5/img-1.jpg" alt=""
                            style="width: 400px;height:390px;">
                    </div>
                    <div class="absolute" style="top:220px;left:485px;">
                        <img id="img_3" src="images/flyers/template5/img-2.jpg" alt=""
                            style="width: 400px;height:390px;">
                    </div>
                    <div class="absolute" style="top:620px;left:75px;">
                        <img id="img_4" src="images/flyers/template5/img-3.jpg" alt=""
                            style="width: 400px;height:390px;">
                    </div>
                    <div class="absolute" style="top:620px;left:485px;">
                        <img id="img_5" src="images/flyers/template5/img-4.jpg" alt=""
                            style="width: 400px;height:390px;">
                    </div>
                    <div class="absolute" style="top:0;left:0;">
                        <img src="images/flyers/template3/main.png" alt="">
                    </div>
                    <div class="absolute" style="bottom:0;left:75px;">
                        <img id="img_2" src="images/flyers/template1/person.png" alt="" height="400px" width="280px">
                    </div>
                    <div class="absolute" style="bottom:80px;left:400px;">
                        <img src="images/flyers/template1/social.png" alt="" style="height:150px;">
                    </div>

                    {{-- Text --}}
                    <div class="absolute" style="top:63px;left:75px;">
                        <p class="text-1" style="font-size: 55px;letter-spacing:-1px;color:#6d6e71">Just <span
                                class="gold bold">Listed</span>
                        </p>
                    </div>
                    <div class="absolute" style="top:128px;left:75px;">
                        <p class="oswald text-2" style="font-size: 20px;letter-spacing:-1px;color:#6d6e71"><span
                                class="oswald-med">Just
                                775 NE
                                77
                                Terrace, </span> Miami, FL 33138</p>
                    </div>
                    <div class="absolute" style="top:73px;left:660px;">
                        <p class="white oswald text-3" style="font-size: 50px;letter-spacing:-1px;">$865,989</p>
                    </div>

                    <div class="absolute" style="top: 300px;width: 1000px;">
                        <div style="position: relative;left:430px;">
                            <h1 class="oswald text-4"
                                style="color:#6d6e71;font-size:20px;transform: rotate(-90deg);letter-spacing:1px;">6
                                Beds | 6 Full-Baths
                                | 1 Half-Bath | <span class="oswald-med">6,800
                                    SqFt</span></h1>
                        </div>
                    </div>

                    <div class="absolute agent-info" style="bottom:194px;width:100%;">
                        <p class="text-5" style="font-size: 30px;"><strong>Wesley</strong> Ulloa</p>
                        <p class="text-6" style="font-size: 12px;margin-top:-2px;letter-spacing:1px;">LICENSED REAL
                            ESTATE
                            BROKER
                        </p>
                    </div>
                    <div class="absolute agent-info" style="bottom:140px;width:100%;">
                        <p class="ibm text-7" style="letter-spacing:1px;">C: (305) 986-7041</p>
                        <p class="ibm text-8" style="margin-top:-2px;letter-spacing:1px;">O: (305) 809-7650</p>
                    </div>
                    <div class="absolute agent-info" style="bottom:87px;width:100%;">
                        <p class="ibm social text-9" style="letter-spacing:1px;">wesley@luxeknows.com</p>
                        <p class="ibm social text-10" style="margin-top:-2px;letter-spacing:1px;">
                            www.<strong>luxeknows</strong>.com
                        </p>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input" style="max-width: 350px;">
                <div>
                    <label for="text-1">Title</label>
                    <input type="text" id="text-1" name="text_1" value="Just <span class='gold bold'>Listed</span>">
                </div>
                <div>
                    <label for="text-2">Address</label>
                    <input type="text" id="text-2" name="text_2"
                        value="<span class='oswald-med'>Just 775 NE 77 Terrace, </span> Miami, FL 33138">
                </div>
                <div>
                    <label for="text-3">Price</label>
                    <input type="text" id="text-3" name="text_3" value="$865,989">
                </div>
                <div>
                    <label for="text-4">Options</label>
                    <input type="text" id="text-4" name="text_4"
                        value="6 Beds | 6 Full-Baths | 1 Half-Bath | <span class='oswald-med'>6,800 SqFt</span>">
                </div>
                <div class="flex">
                    <div class="file-input-width">
                        <label for="page-1-img-1">Image 1</label>
                        <button type="button" class="mt-3" onclick="openInputFile('img-1-input')">Choose Image</button>
                        <input type="file" id="img-1-input"
                            onchange="image_change(this, 'img-1-input',['img_1'],'img_1_input')" style="display: none;">
                        <button type="button" class="mt-1" onclick="startCropper(1)">Crop</button>
                        <button type="button" onclick="crop_image(['img_1'],'img_1_input')">Save Crop</button>
                    </div>
                    <div class="file-input-width">
                        <label for="page-1-img-1">Image 2</label>
                        <button type="button" class="mt-3" onclick="openInputFile('img-3-input')">Choose Image</button>
                        <input type="file" id="img-3-input"
                            onchange="image_change(this, 'img-3-input',['img_3'],'img_3_input')" style="display: none;">
                        <button type="button" class="mt-1" onclick="startCropper(1)">Crop</button>
                        <button type="button" onclick="crop_image(['img_3'],'img_3_input')">Save Crop</button>
                    </div>
                </div>
                <div class="flex">
                    <div class="file-input-width">
                        <label for="page-1-img-1">Image 3</label>
                        <button type="button" class="mt-3" onclick="openInputFile('img-4-input')">Choose Image</button>
                        <input type="file" id="img-4-input"
                            onchange="image_change(this, 'img-4-input',['img_4'],'img_4_input')" style="display: none;">
                        <button type="button" class="mt-1" onclick="startCropper(1)">Crop</button>
                        <button type="button" onclick="crop_image(['img_4'],'img_4_input')">Save Crop</button>
                    </div>
                    <div class="file-input-width">
                        <label for="page-1-img-1">Image 4</label>
                        <button type="button" class="mt-3" onclick="openInputFile('img-5-input')">Choose Image</button>
                        <input type="file" id="img-5-input"
                            onchange="image_change(this, 'img-5-input',['img_5'],'img_5_input')" style="display: none;">
                        <button type="button" class="mt-1" onclick="startCropper(1)">Crop</button>
                        <button type="button" onclick="crop_image(['img_5'],'img_5_input')">Save Crop</button>
                    </div>
                </div>
                <div class="flex mt-3">
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
                    <button type="button" class="mt-3" onclick="openInputFile('img-2-input')">Choose Image</button>
                    <input type="file" id="img-2-input" onchange="image_change(this, 'img-2-input',['img_2'],'img_2_input')" style="display: none;">
                    <button type="button" class="mt-1" onclick="startCropper(0.7)">Crop</button>
                    <button type="button" onclick="crop_image(['img_2'],'img_2_input')">Save Crop</button>
                </div>
                <div class="flex" style="margin-top:20px;">
                    <div class="" style="width: 345px;">
                        <button type="button" name="action" value="Generate" class="generate" onclick="beforePDF()">Generate</button>
                        {{-- <button type="submit" name="action" value="Save" class="generate">Save</button>
                        <br>
                        JSON Upload:
                        <input type="file" id="jsonFileUpload" onchange="jsonFileUploaded()"> --}}
                    </div>
                </div>
            </div>
        </div>
    </form>
@include('includes.loader')
@endsection

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

    function image_change(e, file_input,image_src,image_input) {
        const [file] = e.files
        if (file) {
            $('#image').attr("src", URL.createObjectURL(file));
            image_src.forEach(element => {
                $("#"+element).attr('src', URL.createObjectURL(file));
            });
        }
    }
    
    function crop_image(image,image_input) {
        cropper.getCroppedCanvas().toBlob((blob) => {
            $('#image').attr("src", URL.createObjectURL(blob));
            image.forEach(element => {
                $("#"+element).attr('src', URL.createObjectURL(blob));
            });
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
        const result = await generatePDF(264, 340.3)
        if(result) {
            $('.loader').css('display', 'none')
        }
    }
</script>