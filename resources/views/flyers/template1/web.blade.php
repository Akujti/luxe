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
            font-family: 'gothicregular';
            padding: 10px;
        }

        select {
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
            border: 1px solid #e8e8e8;
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
            top: -400px !important;
            z-index: 100;
        }

        @media(max-width:1280px) {
            .page {
                zoom: 87% !important;
            }
        }

        .text-3.extra-small {
            font-size: 45px;
        }

        .text-3.small {
            font-size: 50px;
        }

        .text-3.normal {
            font-size: 55px;
        }

        .text-4.small {
            font-size: 20px;
        }

        .text-4.normal {
            font-size: 25px;
        }

        .text-4.large {
            font-size: 30px;
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
    <form action="{{ route('flyer-template-1') }}" method="POST">
        @csrf
        <div class="row">
            <div class="row-image">
                <img src="" id="image" data-replace-attribute="src" data-name-replace="image" style="display: none;">
                <input hidden name="img_1_input" id="img_1_input" value="images/flyers/template1/bg.jpg">
                <input hidden name="img_2_input" id="img_2_input" value="images/flyers/template1/img1.jpg">
                <input hidden name="img_3_input" id="img_3_input" value="images/flyers/template1/img2.jpg">
                <input hidden name="img_4_input" id="img_4_input" value="images/flyers/template1/side.jpg">
                <input hidden name="img_5_input" id="img_5_input" value="images/flyers/template1/person.png">
                <div class="page" id="el">
                    {{-- Images --}}
                    <div class="absolute" style="top:152px;left:128px;">
                        <img id="img_1" src="images/flyers/template1/bg.jpg" alt="" style="width:805px;height:483px">
                    </div>
                    <div class="absolute" style="bottom:0;right:0;">
                        <img id="img_4" src="images/flyers/template1/side.jpg" alt="" style="width: 257px;height:440px;">
                    </div>
                    <div class="absolute">
                        <img src="images/flyers/template1/main.png" alt="" style="width: 1000px;height:1286px;">
                    </div>
                    <div class="absolute" style="bottom:32px;right:370px;">
                        <img src="images/flyers/template1/social.png" alt="" style="height:150px;">
                    </div>
                    <div class="absolute" style="top:550px;left:70px;">
                        <span>
                            <img id="img_2" class="white-border" src="images/flyers/template1/img1.jpg" alt=""
                                style="width:300px;height:170px">
                        </span>
                        <span>
                            <img id="img_3" class="white-border" src="images/flyers/template1/img2.jpg" alt=""
                                style="width:300px;height:170px;margin-left:-15px;">
                        </span>
                    </div>
                    <div class="absolute" style="bottom:0;right:170px;">
                        <img id="img_5" src="images/flyers/template1/person.png" alt="" style="height:220px;width:155px;">
                    </div>

                    {{-- Text --}}
                    <div class="absolute" style="text-align: right;top:55px;right:90px;">
                        <p class="extra-bold title text-1">Just</p>
                        <p class="extra-bold white title text-2" style="margin-top:-25px">Listed</p>
                    </div>
                    <div class="absolute" style="text-align: right;top:50px;right:510px;">
                        <p class="oswald white text-3 normal" style="letter-spacing:-1px;">775 NE 77 TERRACE
                        </p>
                        <p class="text-4 normal" style="margin-top:-15px">MIAMI, FL 33138</p>
                    </div>
                    <div class="absolute" style="text-align: right;top:233px;right:740px;">
                        <p class="gold list text-5"><span class="bold mr-3">6</span> Beds</p>
                        <p class="gold list text-6" style="margin-top:38px;"><span class="bold mr-3">6</span> Full
                            Baths
                        </p>
                        <p class="gold list text-7" style="margin-top:39px;"><span class="bold mr-3">1</span> Half Bath
                        </p>
                        <p class="list text-8" style=" font-size:28px;margin-top:40px;"><span
                                class="bold mr-3 ">6,800</span>
                            SqFt</p>
                    </div>
                    <div class="absolute" style="top:745px;left:50px;">
                        <p class="gochi" style="font-size: 55px;letter-spacing:-1px;">Offered at</p>
                        <p class="oswald-med gold text-9" style="font-size: 75px;margin-top:-35px;letter-spacing:-3px">
                            $865,989
                        </p>
                    </div>
                    <div class="absolute" style="top:735px;right:50px;text-align:right;width:100%;">
                        <p class="gochi gold text-10" style="font-size: 90px;">MiraMar</p>
                        <p class="lato white text-11"
                            style="font-size: 30px;margin-top:-30px;font-weight:900;letter-spacing:1px;">ESTATE
                        </p>
                    </div>
                    <div class="absolute" style="top:885px;left:50px;right:300px;">
                        <p class="gold bold text-12" style="font-size: 30px;letter-spacing:-1px;">Life, in Luxury</p>
                        <p class="ibm text-13" style="font-size: 16px;margin-top:-5px;">A life in luxury is something
                            conducive to living in a state of joy and great comfort. A luxury house should belong to
                            its surroundings and then it should belong to the people that are going to live in it.
                            Harmony and ease
                            are the ultimate
                            sophistication in a home. <strong>The MiraMar</strong> house is meticulously crafted to
                            deliver that
                            essential comfort in
                            your daily
                            life.</p>
                    </div>
                    <div class="absolute" style="bottom:150px;right:420px;text-align:right;width:100%;">
                        <p class="text-14" style="font-size: 30px;"><strong>Wesley</strong> Ulloa</p>
                        <p class="text-15" style="font-size: 12px;margin-top:-2px;letter-spacing:1px;">LICENSED
                            REAL ESTATE BROKER</p>
                    </div>
                    <div class="absolute" style="bottom:90px;right:420px;text-align:right;width:100%;">
                        <p class="ibm text-16" style="letter-spacing:1px;">C: (305) 986-7041</p>
                        <p class="ibm text-17" style="margin-top:-2px;letter-spacing:1px;">O: (305) 809-7650</p>
                    </div>
                    <div class="absolute" style="bottom:40px;right:420px;text-align:right;width:100%;">
                        <p class="ibm social text-18" style="letter-spacing:1px;">wesley@luxeknows.com</p>
                        <p class="ibm social text-19" style="margin-top:-2px;letter-spacing:1px;">
                            www.<strong>luxeknows</strong>.com</p>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input" style="max-width: 350px;">
                <div class="file-input-width">
                    <label for="page-1-img-1">Main Image</label>
                    <button type="button" class="mt-3" onclick="openInputFile('img-1-input')">Choose
                        Image</button>
                    <input type="file" id="img-1-input" onchange="img_1_change(this)" style="display: none;">
                    <button type="button" class="mt-1" onclick="startCropper(1.66)">Crop</button>
                    <button type="button" onclick="img_1_crop()">Save Crop</button>
                </div>
                <div class="flex">
                    <div class="pr-10">
                        <label for="text-1">Title 1</label>
                        <input type="text" id="text-1" name="text_1" value="Just">
                    </div>
                    <div>
                        <label for="text-2">Title 2</label>
                        <input type="text" id="text-2" name="text_2" value="Listed">
                    </div>
                </div>
                <div class="flex">
                    <div class="pr-10">
                        <label for="text-1">Address 1</label>
                        <input type="text" id="text-3" name="text_3" value="775 NE 77 TERRACE">
                        <select name="text_3_select" id="text_3_select" data-id-to-change="text-3"
                            onchange="change_font_size(this)">
                            <option value="extra-small">Extra Small</option>
                            <option value="small">Small</option>
                            <option value="normal" selected>Normal</option>
                        </select>
                    </div>
                    <div>
                        <label for="text-2">Address 2</label>
                        <input type="text" id="text-4" name="text_4" value="MIAMI, FL 33138">
                        <select name="text_4_select" id="text_4_select" data-id-to-change="text-4"
                            onchange="change_font_size(this)">
                            <option value="small">Small</option>
                            <option value="normal" selected>Normal</option>
                            <option value="large">Large</option>
                        </select>
                    </div>
                </div>
                <div class="flex">
                    <div class="pr-10">
                        <label for="text-1">Option 1</label>
                        <input type="text" id="text-5" name="text_5" value="<span class='bold mr-3'>6</span> Beds">
                    </div>
                    <div>
                        <label for="text-2">Option 2</label>
                        <input type="text" id="text-6" name="text_6" value="<span class='bold mr-3'>6</span> Full Baths">
                    </div>
                </div>
                <div class="flex">
                    <div class="pr-10">
                        <label for="text-1">Option 3</label>
                        <input type="text" id="text-7" name="text_7" value="<span class='bold mr-3'>1</span> Half Bath">
                    </div>
                    <div>
                        <label for="text-2">Option 4</label>
                        <input type="text" id="text-8" name="text_8" value="<span class='bold mr-3'>6,800</span> SqFt">
                    </div>
                </div>
                <div class="flex">
                    <div class="pr-10">
                        <label for="text-1">Title 3</label>
                        <input type="text" id="text-10" name="text_9" value="MiraMar">
                    </div>
                    <div>
                        <label for="text-2">Title 4</label>
                        <input type="text" id="text-11" name="text_10" value="ESTATE">
                    </div>
                </div>
                <div class="flex">
                    <div class="file-input-width">
                        <label for="page-1-img-1">House 1</label>
                        <button type="button" class="mt-1" onclick="openInputFile('img-2-input')">Choose
                            Image</button>
                        <input type="file" id="img-2-input" onchange="img_2_change(this)" style="display: none;">
                        <button type="button" class="mt-1" onclick="startCropper(1.72)">Crop</button>
                        <button type="button" onclick="img_2_crop()">Save Crop</button>
                    </div>
                    <div class="file-input-width">
                        <label for="page-1-img-1">House 2</label>
                        <button type="button" class="mt-1" onclick="openInputFile('img-3-input')">Choose
                            Image</button>
                        <input type="file" id="img-3-input" onchange="img_3_change(this)" style="display: none;">
                        <button type="button" class="mt-1" onclick="startCropper(1.72)">Crop</button>
                        <button type="button" onclick="img_3_crop()">Save Crop</button>
                    </div>
                </div>
                <div class="flex">
                    <div class="pr-10">
                        <label for="text-1">Price</label>
                        <input type="text" id="text-9" name="text_11" value="$865,989">
                    </div>
                    <div>
                        <label for="text-2">Text Title</label>
                        <input type="text" id="text-12" name="text_12" value="Life, in Luxury">
                    </div>
                </div>
                <div class="">
                    <div>
                        <label for="text-13">Text</label>
                        <textarea name="text_13" id="text-13" cols="30" rows="10">A life in luxury is something
                            conducive to living in a state of joy and great comfort. A luxury house should belong to
                            its surroundings and then it should belong to the people that are going to live in it.
                            Harmony and ease
                            are the ultimate
                            sophistication in a home. <strong>The MiraMar</strong> house is meticulously crafted to
                            deliver that
                            essential comfort in
                            your daily
                            life.</textarea>
                    </div>
                </div>
                <div class="flex">
                    <div class="pr-10">
                        <label for="text-14">Info 1</label>
                        <input type="text" id="text-14" name="text_14" value="<strong>Wesley</strong> Ulloa">
                    </div>
                    <div>
                        <label for="text-15">Info 2</label>
                        <input type="text" id="text-15" name="text_15" value="LICENSED REAL ESTATE BROKER">
                    </div>
                </div>
                <div class="flex">
                    <div class="pr-10">
                        <label for="text-16">Info 3</label>
                        <input type="text" id="text-16" name="text_16" value="C: (305) 986-7041">
                    </div>
                    <div>
                        <label for="text-17">Info 4</label>
                        <input type="text" id="text-17" name="text_17" value="O: (305) 809-7650">
                    </div>
                </div>
                <div class="flex">
                    <div class="pr-10">
                        <label for="text-18">Info 5</label>
                        <input type="text" id="text-18" name="text_18" value="wesley@luxeknows.com">
                    </div>
                    <div>
                        <label for="text-19">Info 6</label>
                        <input type="text" id="text-19" name="text_19" value="www.<strong>luxeknows</strong>.com">
                    </div>
                </div>
                <div class="flex">
                    <div class="file-input-width">
                        <label for="page-1-img-1">Agent</label>
                        <button type="button" class="mt-1" onclick="openInputFile('img-5-input')">Choose
                            Image</button>
                        <input type="file" id="img-5-input" onchange="img_5_change(this)" style="display: none;">
                        <button type="button" class="mt-1" onclick="startCropper(0.71)">Crop</button>
                        <button type="button" onclick="img_5_crop()">Save Crop</button>
                    </div>
                    <div class="file-input-width">
                        <label for="page-1-img-1">Side Image</label>
                        <button type="button" class="mt-1" onclick="openInputFile('img-4-input')">Choose
                            Image</button>
                        <input type="file" id="img-4-input" onchange="img_4_change(this)" style="display: none;">
                        <button type="button" class="mt-1" onclick="startCropper(0.686)">Crop</button>
                        <button type="button" onclick="img_4_crop()">Save Crop</button>
                    </div>
                </div>
                <div class="flex">
                    <div class="" style="width: 345px;margin-top:20px;">
                        <button type="button" name="action" value="Generate" class="generate"
                            onclick="beforePDF()">Generate</button>
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
    function change_font_size(select_input) {
        console.log(select_input);
        var select_id = select_input.id;
        var selector = $('#' + select_id);
        var element_to_edit = selector.attr('data-id-to-change');
        var font_size = selector.val();
        remove_classes(element_to_edit);
        $("." + element_to_edit).addClass(font_size);
    }

    function remove_classes(element) {
        $("." + element).removeClass('extra-small');
        $("." + element).removeClass('small');
        $("." + element).removeClass('normal');
        $("." + element).removeClass('large');
    }

    $(document).ready(function() {
        $("input, textarea").change(function(event) {
            var event_id = event.target.id;
            var event_element = $("#" + event_id)
            var export_var = $("." + event_id);
            export_var.html(event_element.val());
        });
    });

    function img_5_change(e) {
        const [file] = e.files
        if (file) {
            $('#image').attr("src", URL.createObjectURL(file));
            $('#img_5').attr("src", URL.createObjectURL(file));
        }
        $(".page").css("opacity", "1");
    }

    function img_5_crop() {
        cropper.getCroppedCanvas().toBlob((blob) => {
            $('#image').attr("src", URL.createObjectURL(blob));
            $('#img_5').attr("src", URL.createObjectURL(blob));
        });
        cropper.destroy();
        $(".page").css("opacity", "1");
    }

    function img_4_change(e) {
        const [file] = e.files
        if (file) {
            $('#image').attr("src", URL.createObjectURL(file));
            $('#img_4').attr("src", URL.createObjectURL(file));
        }
        $(".page").css("opacity", "1");
    }

    function img_4_crop() {
        cropper.getCroppedCanvas().toBlob((blob) => {
            $('#image').attr("src", URL.createObjectURL(blob));
            $('#img_4').attr("src", URL.createObjectURL(blob));
        });
        cropper.destroy();
        $(".page").css("opacity", "1");
    }

    function img_3_change(e) {
        const [file] = e.files
        if (file) {
            $('#image').attr("src", URL.createObjectURL(file));
            $('#img_3').attr("src", URL.createObjectURL(file));
        }
    }

    function img_3_crop() {
        cropper.getCroppedCanvas().toBlob((blob) => {
            $('#image').attr("src", URL.createObjectURL(blob));
            $('#img_3').attr("src", URL.createObjectURL(blob));
        });
        cropper.destroy();
        $(".page").css("opacity", "1");
    }

    function img_2_change(e) {
        const [file] = e.files
        if (file) {
            $('#image').attr("src", URL.createObjectURL(file));
            $('#img_2').attr("src", URL.createObjectURL(file));
        }
    }

    function img_2_crop() {
        cropper.getCroppedCanvas().toBlob((blob) => {
            $('#image').attr("src", URL.createObjectURL(blob));
            $('#img_2').attr("src", URL.createObjectURL(blob));
        });
        cropper.destroy();
        $(".page").css("opacity", "1");
    }

    function img_1_change(e) {
        const [file] = e.files
        if (file) {
            $('#image').attr("src", URL.createObjectURL(file));
            $('#img_1').attr("src", URL.createObjectURL(file));
        }
        $(".page").css("display", "block");
    }

    function img_1_crop() {
        cropper.getCroppedCanvas().toBlob((blob) => {
            $('#image').attr("src", URL.createObjectURL(blob));
            $('#img_1').attr("src", URL.createObjectURL(blob));
        });
        cropper.destroy();
        $(".page").css("opacity", "1");
    }

    var cropper;

    function startCropper(ratio) {
        var image = document.getElementById("image");
        $(".page").css("opacity", "0");
        cropper = new Cropper(image, {
            aspectRatio: ratio,
        });
    }

    function convert(oldImag, callback) {
        var img = new Image();
        img.onload = function() {
            callback(img)
        }
        img.setAttribute('crossorigin', 'anonymous');
        img.src = oldImag.src;
    }

    function getBase64Image(img, callback) {
        convert(img, function(newImg) {
            var canvas = document.createElement("canvas");
            canvas.width = newImg.width;
            canvas.height = newImg.height;
            var ctx = canvas.getContext("2d");
            ctx.drawImage(newImg, 0, 0);
            var base64 = canvas.toDataURL("image/png");
            callback(base64)
        })
    }

    function openInputFile(id) {
        $('#' + id).click()
    }
    async function beforePDF() {
        $('.loader').css('display', 'flex')
        const result = await generatePDF(264, 340.3)
        if (result) {
            $('.loader').css('display', 'none')
        }
    }
</script>
