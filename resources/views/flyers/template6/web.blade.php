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
        padding: 10px;
        display: block;
        width: 150px;
        font-family: 'gothicbold';
        color: #fff;
        margin-top: 10px;
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
        width: 2000px;
        height: 1596px;
        position: relative;
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

    .w-100 {
        width: 100%;
    }

    .text-center {
        text-align: center;
    }

    .pl-10 {
        padding-left: 10px
    }

    .page {
        zoom: 50% !important;
    }

    .text-1.small {
        font-size: 80px;
    }

    .text-1.normal {
        font-size: 90px;
    }

    .text-1.large {
        font-size: 100px;
    }

    .text-2.small {
        font-size: 30px;
    }

    .text-2.normal {
        font-size: 35px;
    }

    .text-2.large {
        font-size: 40px;
    }

    .text-3.small {
        font-size: 68px;
    }

    .text-3.normal {
        font-size: 73px;
    }

    .text-3.large {
        font-size: 76px;
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
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.9/cropper.js"
    integrity="sha512-oqBsjjSHWqkDx4UKoU+5IUZN2nW2qDp2GFSKw9+mcFm+ZywqfBKp79nfWmGPco2wzTWuE46XpjtCjZ9tFmI12g=="
    crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.9/cropper.css"
    integrity="sha512-949FvIQOibfhLTgmNws4F3DVlYz3FmCRRhJznR22hx76SKkcpZiVV5Kwo0iwK9L6BFuY+6mpdqB2+vDIGVuyHg=="
    crossorigin="anonymous" />

<body>
    <form action="{{ route('flyer-template-6') }}" method="POST">
        @csrf
        <div class="row">
            <div class="row-image">
                <img src="" id="image" data-replace-attribute="src" data-name-replace="image" style="display: none;">
                <input hidden name="img_1_input" id="img_1_input" value="images/flyers/template6/bg.jpg">

                <div class="page" id="page-box">
                    {{-- Images --}}
                    <div class="absolute" style="top:0;left:0;">
                        <img src="images/flyers/template6/main.png" alt="">
                    </div>
                    <div class="absolute" style="top:219px;left:0px;">
                        <img id="img_1" src="images/flyers/template6/bg.jpg" alt="" style="" width="1909px"
                            height="1213px">
                    </div>
                    <div class="absolute" style="top:220px;left:1397px;">
                        <img src="images/flyers/template6/box.png" alt="" width="463px">
                    </div>

                    {{-- Text --}}
                    <div class="absolute" style="top:30px;left:65px;">
                        <p class="text-1 normal" style="letter-spacing:-3px;color:#6d6e71">Just <span
                                class='gold bold'>Listed</span>
                        </p>
                    </div>
                    <div class="absolute" style="top:90px;left:665px;">
                        <p class="text-2 normal" style="letter-spacing:-1px;color:#6d6e71"><b>775 NE
                                77 Terrace, </b> Miami, FL 33138</span></p>
                    </div>
                    <div class="absolute w-100 text-center" style="top:235px;left:630px;">
                        <p class="text-3 gold normal">$865,989</p>
                    </div>
                    <div class="absolute" style="top:1490px;left:65px;">
                        <p class="text-4" style="font-size: 35px;letter-spacing:-1px;color:#6d6e71">6 Beds | 6
                            Full-Baths | 1
                            Half-Bath
                            | <b class="pl-10">6,800 SqFt</b></p>
                    </div>
                    <div class="absolute w-100 text-center" style="top:1495px;left:630px;">
                        <p class="text-5 gold" style="font-size: 37px;">LUXEKNOWS.COM</p>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input" style="max-width: 350px;">
                <div class="pr-10">
                    <label for="text-1">Title</label>
                    <input type="text" id="text-1" name="text_1" value="Just <span class='gold bold'>Listed</span>">
                    <select name="text_1_select" id="text_1_select" data-id-to-change="text-1"
                        onchange="change_font_size(this)">
                        <option value="small">Small</option>
                        <option value="normal" selected>Medium</option>
                        <option value="large">Large</option>
                    </select>
                </div>
                <div class="pr-10">
                    <label for="text-2">Address</label>
                    <input type="text" id="text-2" name="text_2"
                        value="<b>775 NE 77 Terrace, </b> Miami, FL 33138</span>">
                    <select name="text_2_select" id="text_2_select" data-id-to-change="text-2"
                        onchange="change_font_size(this)">
                        <option value="small">Small</option>
                        <option value="normal" selected>Medium</option>
                        <option value="large">Large</option>
                    </select>
                </div>
                <div class="pr-10">
                    <label for="text-3">Price</label>
                    <input type="text" id="text-3" name="text_3" value="$865,989">
                    <select name="text_3_select" id="text_3_select" data-id-to-change="text-3"
                        onchange="change_font_size(this)">
                        <option value="small">Small</option>
                        <option value="normal" selected>Medium</option>
                        <option value="large">Large</option>
                    </select>
                </div>
                <div class="pr-10">
                    <label for="text-4">Options</label>
                    <input type="text" id="text-4" name="text_4"
                        value="6 Beds | 6 Full-Baths | 1 Half-Bath | <b class='pl-10'>6,800 SqFt</b>">
                </div>
                <div class="pr-10">
                    <label for="text-5">Web Link</label>
                    <input type="text" id="text-5" name="text_5" value="LUXEKNOWS.COM">
                </div>
                <div class="">
                    <div class="file-input-width">
                        <label for="page-1-img-1">Main Image</label>
                        <button type="button" class="mt-1" onclick="openInputFile()">Choose Image</button>
                        <input type="file" class="mt-1" id="img-1-input"
                            onchange="image_change('img-1-input',['img_1'],'img_1_input')" style="display:none">
                        <button type="button" class="mt-1" onclick="startCropper(1909/1211)">Crop</button>
                        <button type="button" onclick="crop_image(['img_1'],'img_1_input')">Save Crop</button>
                    </div>
                </div>
                <div class="flex" style="margin-top:20px;">
                    <div class="" style="width: 345px;">
                        <button type="submit" name="action" value="Generate" class="generate">Generate</button>
                        {{-- <button type="button" onclick="getScreenShot()">Generate png</button>
                        <button type="submit" name="action" value="Save" class="generate">Save</button>
                        <br>
                        JSON Upload:
                        <input type="file" id="jsonFileUpload" onchange="jsonFileUploaded()"> --}}
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
{{-- <script src="https://cdn.jsdelivr.net/npm/html2canvas@1.0.0-rc.5/dist/html2canvas.min.js"></script> --}}
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

    // Generate PNG Code
    // function getScreenShot() {
    //     let c = document.getElementById('page-box');
    //     html2canvas(c, {
    //         letterRendering: 1,
    //         allowTaint : true,
    //         useCORS: true,
    //     }).then((canvas) => {
    //         var t = canvas.toDataURL().replace("data:image/png;base64,", "");
    //         this.downloadBase64File('image/png',t,'luxe-image');
    //     })
    // }

    // function downloadBase64File(contentType, base64Data, fileName) {
    //     const linkSource = `data:${contentType};base64,${base64Data}`;
    //     const downloadLink = document.createElement("a");
    //     downloadLink.href = linkSource;
    //     downloadLink.download = fileName;
    //     downloadLink.click();
    // }

    function openInputFile() {
        $('#img-1-input').click()
    }
</script>

</html>