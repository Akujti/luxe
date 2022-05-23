<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Door Hanger Template 1</title>
</head>
@include('includes.fonts')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Lato:wght@300');
    @import url('https://fonts.googleapis.com/css2?family=Lato:wght@400');
    @import url('https://fonts.googleapis.com/css2?family=Lato:wght@700');
    @import url('https://fonts.googleapis.com/css2?family=Lato:wght@900');

    * {
        font-family: 'Lato';
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
        font-size: 15px;
    }

    .row {
        display: flex;
        height: 1280px;
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

    .flex label {
        margin: 10px auto 10px auto !important;
    }

    .row-image {
        width: 800px;
        height: auto;
    }

    .page {
        width: 1000px;
        position: relative;
        height: 1286px;
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

    .cropper-container {
        position: fixed !important;
        top: -100px !important;
        z-index: 100;
    }

    .page {
        zoom: 50% !important;
    }

    .w-100 {
        width: 100%;
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
    <form action="{{ route('door-hanger-template-1') }}" method="POST">
        @csrf
        <div class="row">
            <div class="row-image">
                <img src="" id="image" data-replace-attribute="src" data-name-replace="image" style="display: none;">
                <input hidden name="img_1_input" id="img_1_input" value="images/door-hangers/template1/person1.jpg">
                <input hidden name="img_2_input" id="img_2_input" value="images/door-hangers/template1/woman.jpg">
                <input hidden name="img_3_input" id="img_3_input" value="images/door-hangers/template1/woman.jpg">
                <div class="page">
                    {{-- Image --}}
                    <div class="absolute" style="top: 450px;left:0;">
                        <img id="img_1" src="images/door-hangers/template1/person1.jpg" alt="" width="900px"
                            height="1180px">
                    </div>
                    <div class="absolute" style="top: 0;left:0;">
                        <img src="images/door-hangers/template1/front.png" alt="">
                    </div>

                    {{-- Text --}}
                    <div class="absolute" style="top: 5px;right:20px;width:100%;text-align:right;">
                        <p class="text-1 white bold" style="font-size:100px">JUST</p>
                        <p class="text-2 gold bold" style="font-size:100px;margin-top:-30px;">SOLD</p>
                    </div>
                    <div class="absolute w-100" style="top: 1320px;text-align:center;left:170px;">
                        <p class="text-3 bold" style="font-size:50px;line-height:50px;">5444 SW 149 Pl</p>
                        <p class="text-4" style="font-size:40px;line-height:55px;">Miami, FL 33185</p>
                        <p class="text-5 gold extra-bold" style="font-size:80px;line-height:95px;">$510,000</p>
                    </div>
                    <div class="absolute w-100" style="top: 1750px;text-align:center;">
                        <p class="text-6 gold bold" style="font-size:100px;line-height:100px;;">Highest Sale<br>Per SqFt
                        </p>
                        <p class="text-7 white bold" style="font-size:50px;line-height:85px;">Sold By Your Neighborhood
                            Duo!
                        </p>
                    </div>
                    <div class="absolute w-100" style="top: 2110px;text-align:center;">
                        <p class="text-8 bold" style="font-size:35px;">Recent Sales in Lakes of the Meadow</p>
                    </div>
                    <div class="absolute w-100" style="top: 2170px;text-align:center;left:-235px;">
                        <p class="text-9 white" style="font-size:32px;">15327 SW 53<sup>rd</sup> Ter</p>
                        <p class="text-11 gold" style="font-size:32px;margin-top:40px;">5362 SW 154<sup>th</sup> Pl</p>
                        <p class="text-13 white" style="font-size:32px;margin-top:30px;">5328 SW 153<sup>rd</sup> Ct</p>
                        <p class="text-15 gold" style="font-size:32px;margin-top:25px;">15456 SW 48<sup>th</sup> St</p>
                    </div>
                    <div class="absolute w-100" style="top: 2175px;text-align:center;left:215px;">
                        <p class="text-10 white" style="font-size:32px;">$415,000.00</p>
                        <p class="text-12 gold" style="font-size:32px;margin-top:45px;">$495,000.00</p>
                        <p class="text-14 white" style="font-size:32px;margin-top:35px;">$530,000.00</p>
                        <p class="text-16 gold" style="font-size:32px;margin-top:35px;">$445,000.00</p>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input" style="max-width: 350px;">
                <div class="flex">
                    <div class="pr-10">
                        <label for="text-1">Title 1</label>
                        <input type="text" id="text-1" name="text_1" value="JUST">
                    </div>
                    <div>
                        <label for="text-2">Title 2</label>
                        <input type="text" id="text-2" name="text_2" value="SOLD">
                    </div>
                </div>
                <div class="">
                    <label for="page-1-img-1">Agent 1</label>
                    <button type="button" class="mt-3" onclick="openInputFile('img-1-input')">Choose Image</button><br>
                    <input type="file" id="img-1-input" onchange="img_1_change()" style="display: none;">
                    <button type="button" class="mt-1" onclick="startCropper(0.75)">Crop</button>
                    <button type="button" onclick="img_1_crop()">Save Crop</button>
                </div>
                <div class="flex">
                    <div class="pr-10">
                        <label for="text-3">Address 1</label>
                        <input type="text" id="text-3" name="text_3" value="5444 SW 149 Pl">
                    </div>
                    <div>
                        <label for="text-4">Address 2</label>
                        <input type="text" id="text-4" name="text_4" value="Miami, FL 33185">
                    </div>
                </div>
                <div class="">
                    <div>
                        <label for="text-5">Price</label>
                        <input type="text" id="text-5" name="text_5" value="$510,000">
                    </div>
                </div>
                <div class="flex">
                    <div class="pr-10">
                        <label for="text-6">Text 1</label>
                        <input type="text" id="text-6" name="text_6" value="Highest Sale<br>Per SqFt">
                    </div>
                    <div>
                        <label for="text-7">Text 2</label>
                        <input type="text" id="text-7" name="text_7" value="Sold By Your Neighborhood Duo!">
                    </div>
                </div>
                <div class="">
                    <div>
                        <label for="text-8">Box Title</label>
                        <input type="text" id="text-8" name="text_8" value="Recent Sales in Lakes of the Meadow">
                    </div>
                </div>
                <label for="text-6">Row 1</label>
                <i>The text inside &lt;sup&gt;&lt;/sup&gt; will be converted to a footnote</i>
                <div class="flex">
                    <div class="pr-10">
                        <input type="text" id="text-9" name="text_9" value="15327 SW 53<sup>rd</sup> Ter">
                    </div>
                    <div>
                        <input type="text" id="text-10" name="text_10" value="$415,000.00">
                    </div>
                </div>
                <label for="text-6">Row 2</label>
                <div class="flex">
                    <div class="pr-10">
                        <input type="text" id="text-11" name="text_11" value="5362 SW 154<sup>th</sup> Pl">
                    </div>
                    <div>
                        <input type="text" id="text-12" name="text_12" value="$495,000.00">
                    </div>
                </div>
                <label for="text-6">Row 3</label>
                <div class="flex">
                    <div class="pr-10">
                        <input type="text" id="text-13" name="text_13" value="5328 SW 153<sup>rd</sup> Ct">
                    </div>
                    <div>
                        <input type="text" id="text-14" name="text_14" value="$530,000.00">
                    </div>
                </div>
                <label for="text-6">Row 4</label>
                <div class="flex">
                    <div class="pr-10">
                        <input type="text" id="text-15" name="text_15" value="15456 SW 48<sup>th</sup> St">
                    </div>
                    <div>
                        <input type="text" id="text-16" name="text_16" value="$445,000.00">
                    </div>
                </div>
            </div>
        </div>
        <div class="row-divider"></div>
        <div class="row">
            <div class="row-image">
                <div class="position">
                    <div class="page" style="height: 2545px;">
                        {{-- Images --}}
                        <div class="absolute" style="top: 445px;right:0;">
                            <img id="img_2" src="images/door-hangers/template1/woman.jpg" alt="" width="600px"
                                height="810px">
                        </div>
                        <div class="absolute" style="bottom: 110px;left:0;">
                            <img id="img_3" src="images/door-hangers/template1/woman.jpg" alt="" width="600px"
                                height="810px">
                        </div>
                        <div class="absolute" style="top: 0;left:0;">
                            <img src="images/door-hangers/template1/back.png" alt="">
                        </div>

                        {{-- Text --}}
                        <div class="absolute" style="top: 5px;left:20px;width:100%;">
                            <p class="text-17 white bold" style="font-size:100px">JUST</p>
                            <p class="text-18 gold bold" style="font-size:100px;margin-top:-30px;">SOLD</p>
                        </div>
                        <div class="absolute w-100" style="top: 860px;text-align:center;left:-160px;">
                            <p class="text-19 white bold" style="font-size:80px;line-height:100px;">Bianca</p>
                            <p class="text-20 gold bold" style="font-size:80px;line-height:80px;margin-top:-20px">
                                Guevara</p>
                            <p class="text-21 white bold" style="font-size:50px;line-height:50px;margin-top:-5px">(305)
                                401-4384
                            </p>
                            <p class="text-22 gold" style="font-size:35px;line-height:50px;letter-spacing:-2px;">
                                bianca@luxeknows.com</p>
                        </div>
                        <div class="absolute w-100" style="top: 1350px;text-align:right;right:400px;">
                            <p class="text-23 gold bold" style="font-size:35px;line-height:40px;">Call today for
                                FREE<br>CMA or
                                use
                                QR
                                code<br><span class="white">to instantly get your<br>home value!</span></p>
                        </div>
                        <div class="absolute w-100" style="bottom: 235px;text-align:center;left:155px;">
                            <p class="text-24 bold" style="font-size:80px;line-height:80px;">Wesley</p>
                            <p class="text-25 gold bold" style="font-size:80px;line-height:80px;margin-top:-5px">Ulloa
                            </p>
                            <p class="text-26 bold" style="font-size:50px;line-height:50px;margin-top:-5px">(305)
                                986-7041</p>
                            <p class="text-27 gold" style="font-size:35px;line-height:40px;letter-spacing:-2px;">
                                wesley@luxeknows.com</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input" style="max-width: 350px;">
                <div class="flex">
                    <div class="pr-10">
                        <label for="text-17">Title 1</label>
                        <input type="text" id="text-17" name="text_17" value="JUST">
                    </div>
                    <div>
                        <label for="text-2">Title 2</label>
                        <input type="text" id="text-18" name="text_18" value="SOLD">
                    </div>
                </div>
                <label for="text-6">Agent Info</label>
                <div class="flex">
                    <div class="pr-10">
                        <input type="text" id="text-19" name="text_19" value="Bianca">
                    </div>
                    <div>
                        <input type="text" id="text-20" name="text_20" value="Guevara">
                    </div>
                </div>
                <div class="flex">
                    <div class="pr-10">
                        <input type="text" id="text-21" name="text_21" value="(305) 401-4384">
                    </div>
                    <div>
                        <input type="text" id="text-22" name="text_22" value="bianca@luxeknows.com">
                    </div>
                </div>
                <div class="">
                    <label for="page-1-img-1">Agent Image</label>
                    <button type="button" class="mt-3" onclick="openInputFile('img-2-input')">Choose Image</button><br>
                    <input type="file" id="img-2-input" onchange="img_2_change()" style="display: none;">
                    <button type="button" class="mt-1" onclick="startCropper(0.74)">Crop</button>
                    <button type="button" onclick="img_2_crop()">Save Crop</button>
                </div>
                <div class="mt-1">
                    <label for="text-6">QR</label>
                    <textarea id="text-23" name="text_23" rows="5">Call today for FREE<br>CMA or use QR code
<br><span class="white">to instantly get your <br>home value!</span>
                        </textarea>
                </div>
                <label for="text-6">Agent Info</label>
                <div class="flex">
                    <div class="pr-10">
                        <input type="text" id="text-24" name="text_24" value="Wesley">
                    </div>
                    <div>
                        <input type="text" id="text-25" name="text_25" value="Ulloa">
                    </div>
                </div>
                <div class="flex">
                    <div class="pr-10">
                        <input type="text" id="text-26" name="text_26" value="(305) 986-7041">
                    </div>
                    <div>
                        <input type="text" id="text-27" name="text_27" value="wesley@luxeknows.com">
                    </div>
                </div>
                <div class="">
                    <label for="page-1-img-1">Agent Image</label>
                    <button type="button" class="mt-3" onclick="openInputFile('img-3-input')">Choose Image</button><br>
                    <input type="file" id="img-3-input" onchange="img_3_change()" style="display: none;">
                    <button type="button" class="mt-1" onclick="startCropper(0.74)">Crop</button>
                    <button type="button" onclick="img_3_crop()">Save Crop</button>
                </div>
                <div class="flex">
                    <div class="" style="width: 345px;margin-top:20px;">
                        <button type="submit" name="action" value="Generate" class="generate">Generate</button>
                        {{--<button type="submit" name="action" value="Save" class="generate">Save</button>
                        <br>
                        JSON Upload:
                        <input type="file" id="jsonFileUpload" onchange="jsonFileUploaded()">--}}
                    </div>
                </div>
            </div>
        </div>
        </div>
    </form>
</body>

<script>
    $("textarea").change(function(event) {
        var event_id = event.target.id;
        if (event_id == "text-23") {
            var text = $("#text-23").val();
            var textarea = document.getElementsByClassName("text-23")[0];
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