<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css?family=Lato:300,400,700');
    @import url('https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Lato:wght@900&display=swap');

    * {
        font-family: "Lato";
    }

    label {
        background-color: #FFCF40;
        padding: 10px;
        display: block;
        width: 150px;
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
        min-width: 500px;
        max-width: 650px;
    }

    input,
    textarea {
        font-size: 15px;
        margin-top: 10px;
        margin-bottom: 30px;
        width: 100%;
        border: 1px solid #FFCF40;
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
    }

    .flex label {
        margin: 10px auto 30px auto !important;
    }

    .row-image {
        width: 800px;
        height: auto;
    }

    .page-1 .title {
        letter-spacing: 15px;
        font-size: 140px;
        color: #C5A467;
        line-height: 135px;
        margin: 0;
        font-weight: 300;
    }

    .page-1 .title-1 {
        margin-bottom: -30px;
    }

    .page-1 .subtitle-top {
        font-size: 86px;
        line-height: 100px;
        font-weight: 300;
        margin-bottom: -20px;
    }

    .page-1 .subtitle-bottom {
        font-size: 120px;
        line-height: 125px;
        letter-spacing: 63px;
        font-weight: 300;
        margin-top: -25px;
    }

    .page-1 .page-bottom {
        text-align: center;
    }

    .page-2-1 .luxe-pro-info {
        background-image: url("images/home-selling/listing_one.jpg");
        background-repeat: no-repeat;
        background-size: auto;
        height: 100%;
        position: inherit;
        bottom: 0px;
        width: 100%;
    }

    .page-2-1 .luxe-pro-info .text {
        padding-top: 100%;
    }

    .page-2-1 .luxe-pro-info h1 {
        font-size: 170px;
        line-height: 160px;
        font-family: 'Lato';
        font-weight: 300;
        margin: -10px 0;
        color: #C5A367;
    }

    .page-2-1 .luxe-pro-info h2 {
        font-size: 72px;
        line-height: 67px;
        font-family: 'Lato';
        font-weight: 900;
        padding-left: 13px;
        letter-spacing: -4px;
        color: #fff;
        margin-top: -15px;
        margin-bottom: 2px;
    }

    .page-2-2 {
        background-repeat: no-repeat;
        background-size: cover;
        background-image: url("images/home-selling/P2.png");
    }

    .page-2-2 .first-part {
        height: 90%;
    }

    .page-2-2 .first-part .subtitle-top,
    .page-3-2 .heading .subtitle-top {
        font-size: 40px;
        line-height: 35px;
        font-family: 'Lato';
        font-weight: 300;
        margin-bottom: -40px;
    }

    .page-2-2 .first-part .title,
    .page-3-2 .heading .title {
        font-size: 100px;
        line-height: 50px;
        font-family: 'Lato';
        font-weight: 300;
        color: #C6A467;
    }

    .page-2-2 .first-part .subtitle-bottom {
        font-size: 111px;
        line-height: 50px;
        font-family: 'Lato';
        font-weight: 300;
        color: #535353;
        margin-top: -40px;
    }

    .page-2-2 .first-part .content p {
        width: 420px;
        margin: 0 auto;
        font-size: 18px;
        font-weight: 300;
        color: #222;
        line-height: 1.05;
        padding-left: 39px;
        padding-top: 35px;
    }

    .page-2-2 .second-part {
        padding-top: 10px;
        padding-bottom: 35px;
        height: 17%;
        bottom: 0px;
        background-repeat: no-repeat;
        background-size: auto;
        background-image: url("images/home-selling/no-2.png");
        background-position: right;
        text-align: right;
    }

    .page-2-2 .second-part .text {
        margin-top: 30px;
        margin-right: 150px;
    }

    .page-2-2 .first-title {
        color: #C5A367;
        font-size: 30px !important;
        line-height: 0px !important;
        font-weight: 300 !important;
        letter-spacing: 3px;
    }

    .page-2-2 .second-title {
        color: #000 !important;
        font-weight: 300 !important;
        font-size: 38px;
        line-height: 25px;
    }

    .page-2-2 .third-title {
        font-size: 43px;
        font-weight: 300 !important;
        line-height: 30px;
        color: #C5A367;
        letter-spacing: 3px;
    }

    .page-2-2 .fourth-title {
        color: #000;
        font-size: 20px;
        font-weight: 300;
        letter-spacing: 7px;
        margin-right: -4px !important;
        line-height: 0px !important;
    }

    .page-3-1 .luxe-pro-info {
        background-image: url("images/home-selling/page-3.png");
        background-size: cover;
        height: 100%;
        bottom: 0px;
        width: 100%;
    }

    .page-3-1 .luxe-pro-info .text {
        padding-top: 100%;
    }

    .page-3-1 .luxe-pro-info h2 {
        line-height: 20px;
        padding-left: 175px;
        font-size: 90px;
        color: #fff;
        z-index: 100;
        margin: 0 !important;
        font-weight: 300;
    }

    .page-3-1 .luxe-pro-info h1 {
        line-height: 190px;
        font-size: 140px;
        text-align: center;
        font-weight: 300;
        margin: 0 auto;
        color: #C5A367;
        z-index: 100;
        letter-spacing: -0.1em;
    }

    .page-3-2 .heading .subtitle-bottom {
        margin-top: 30px;
        font-size: 60px;
        line-height: 56px;
        font-weight: 300;
        margin-bottom: 50px;
    }

    .page-3-2 .content .objective {
        display: flex;
        margin-bottom: 50px;
    }

    .page-3-2 .content .objective-2 {
        top: 250px;
    }

    .page-3-2 .content .objective-3 {
        top: 500px;
    }

    .page-3-2 .content .objective img {
        width: 200px;
    }

    .page-3-2 .content .objective .objective-image-2 img {
        margin-top: 400px !important;
    }

    .page-3-2 .content .objective .ojective-text {
        margin-left: 20px;
    }

    .page-3-2 .content .objective .ojective-text h2 {
        max-width: 340px;
        font-size: 32px;
        font-weight: 900;
        color: #C5A367;
        top: -25px;
        line-height: 25px;
    }

    .page-3-2 .content .objective .ojective-text p {
        font-weight: 300;
        font-size: 14px;
        color: #000;
        line-height: 20px;
        top: 50px
    }

    .page-4-1 .luxe-pro-info {
        background-imagee: url("images/home-selling/Asset 8.png");
        background-size: cover;
        height: 100%;
        bottom: 0px;
        width: 100%;
        position: relative;
    }

    .page-4-1 .luxe-pro-info .text {
        padding-top: 100%;
        z-index: 100;
        bottom: 55%;
    }

    .page-4-1 .luxe-pro-info h2 {
        line-height: 0px;
        padding-left: 175px;
        font-size: 90px;
        color: #fff;
        z-index: 100;
        font-weight: 300;
    }

    .page-4-1 .luxe-pro-info h1 {
        line-height: 190px;
        font-size: 140px;
        text-align: left;
        font-weight: 300;
        margin: -70px auto;
        color: #C5A367;
        z-index: 100;
        letter-spacing: -0.1em;
    }

    .page-4-1 .luxe-pro-info .subtitle {
        line-height: 45px;
        padding-left: 175px;
        font-size: 90px;
        color: #fff;
        z-index: 100;
        margin-top: 50px !important;
        padding-bottom: 100px !important;
        font-weight: 300;
    }

    .page-4-1 img{
      position: absolute;
      width: 100%;
      height: 100%;
      z-index: -1;
    }

    .page-5 img{
      max-width: 100%;
      max-height: 100%;
    }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.9/cropper.js" integrity="sha512-oqBsjjSHWqkDx4UKoU+5IUZN2nW2qDp2GFSKw9+mcFm+ZywqfBKp79nfWmGPco2wzTWuE46XpjtCjZ9tFmI12g==" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.9/cropper.css" integrity="sha512-949FvIQOibfhLTgmNws4F3DVlYz3FmCRRhJznR22hx76SKkcpZiVV5Kwo0iwK9L6BFuY+6mpdqB2+vDIGVuyHg==" crossorigin="anonymous" />
<body>
    <div class="container">
        <form method="post" action=" {{ route('pdf.store') }} " method="POST">
            @csrf
            <div class="row">
                <div class="row-image">
                    <div class="page-1 page-1-1">
                        <div class="text-wrap">
                            <h1 class="subtitle-top page-1-1-text-1">THE</h1>
                            <h1 class="title title-1 page-1-1-text-2">HOME</h1>
                            <h1 class="title title-2 page-1-1-text-3">SELLING</h1>
                            <h1 class="subtitle-bottom page-1-1-text-4">GUIDE</h1>
                        </div>
                        <div class="page-bottom">
                            <img src="images/Asset 1.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="column-divider"></div>
                <div class="row-input">
                    <label for="page-1-1-text-1">First Title</label>
                    <input type="text" id="page-1-1-text-1" name="page_1_1_text_1" value="THE">

                    <label for="page-1-1-text-2">Second Title</label>
                    <input type="text" id="page-1-1-text-2" name="page_1_1_text_2" value="HOME">

                    <label for="page-1-1-text-3">Third Title</label>
                    <input type="text" id="page-1-1-text-3" name="page_1_1_text_3" value="SELLING">

                    <label for="page-1-1-text-4">Fourth Title</label>
                    <input type="text" id="page-1-1-text-4" name="page_1_1_text_4" value="GUIDE">
                </div>
            </div>
            <div class="row-divider"></div>
            <div class="row">
                <div class="row-image">
                    <div class="page-2 page-2-1">
                        <div class="luxe-pro-info">
                            <div class="text">
                                <h1 class="page-2-1-text-1">LUXE</h1>
                                <h2 class="page-2-1-text-2">PROPERTIES</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column-divider"></div>
                <!-- <div class="row-input">
                    <label for="page-2-1-text-1">First Title</label>
                    <input type="text" id="page-2-1-text-1" name="page_2_1_text_1" value="LUXE">

                    <label for="page-2-1-text-2">Second Title</label>
                    <input type="text" id="page-2-1-text-2" name="page_2_1_text_2" value="PROPERTIES">
                </div> -->
            </div>
            <div class="row-divider"></div>
            <div class="row">
                <div class="row-image">
                    <div class="page page-2 page-2-2">
                        <div class="first-part">
                            <div class="text">
                                <h2 class="subtitle-top page-2-2-text-1">A New Breed of Realtors Redefining</h2>
                                <h1 class="title page-2-2-text-2">The Real Estate</h1>
                                <h1 class="subtitle-bottom page-2-2-text-5">Experience</h1>
                            </div>
                            <div class="content">
                                <p class="page-2-2-text-3">At LUXE Properties, we take pride in building relationships based on the premise and understanding that each client is unique, along with their respective properties. We aim to delight and surprise our clients, deliver exceptional service and exceed expectations throughout the transaction. Our company utilizes the latest technology to stay abreast of market trends and deliver innovative solutions for our LUXE clients.</p>
                                <p class="page-2-2-text-4">The LUXE Properties team seeks to partner with you every step of the way. So, whether you are buying, selling, or considering real estate in South Florida, LUXE Properties is here to make your LUXE real estate experience your best move yet.</p>
                            </div>
                        </div>
                        <div class="second-part">
                            <div class="text">
                                <span class="first-title">THE</span><br>
                                <span class="second-title">HOME</span><br>
                                <span class="third-title">SELLING</span><br>
                                <span class="fourth-title">GUIDE</span><br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column-divider"></div>
                <div class="row-input">

                    <label for="page-2-2-text-1">First Title</label>
                    <input type="text" id="page-2-2-text-1" name="page_2_2_text_1" value="A New Breed of Realtors Redefining">

                    <label for="page-2-2-text-2">Second Title</label>
                    <input type="text" id="page-2-2-text-2" name="page_2_2_text_2" value="The Real Estate">

                    <label for="page-2-2-text-2">Third Title</label>
                    <input type="text" id="page-2-2-text-5" name="page_2_2_text_5" value="Experience">

                    <div class="flex">
                        <label for="page-2-2-text-2">First Text</label>
                        <textarea id="page-2-2-text-3" name="page_2_2_text_3" rows="4">At LUXE Properties, we take pride in building relationships based on the premise and understanding that each client is unique, along with their respective properties. We aim to delight and surprise our clients, deliver exceptional service and exceed expectations throughout the transaction. Our company utilizes the latest technology to stay abreast of market trends and deliver innovative solutions for our LUXE clients.</textarea>

                        <label for="page-2-2-text-2">Second Text</label>
                        <textarea id="page-2-2-text-4" name="page_2_2_text_4" rows="4">The LUXE Properties team seeks to partner with you every step of the way. So, whether you are buying, selling, or considering real estate in South Florida, LUXE Properties is here to make your LUXE real estate experience your best move yet.</textarea>
                    </div>
                </div>
            </div>
            <div class="row-divider"></div>
            <div class="row">
                <div class="row-image">
                    <div class="page-3 page-3-1">
                        <div class="luxe-pro-info">
                            <div class="text">
                                <h2 class="page-3-1-text-1">Our</h2>
                                <h1 class="page-3-1-text-2">Commitment</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column-divider"></div>
                <!-- <div class="row-input">
                    <label for="page-3-1-text-1">First Title</label>
                    <input type="text" id="page-3-1-text-1" name="page_3_1_text_1" value="Our">

                    <label for="page-3-1-text-2">Second Title</label>
                    <input type="text" id="page-3-1-text-2" name="page_3_1_text_2" value="Commitment">
                </div> -->
            </div>

            <div class="row-divider"></div>
            <div class="row">
                <div class="row-image">
                    <div class="page page-3 page-3-2">
                        <div class="heading">
                            <h2 class="subtitle-top page-3-2-text-1" style="text-align: center;font-size:50px">Key</h2>
                            <h1 class="title page-3-2-text-2" style="margin-bottom: 0px;">Objectives</h1>
                            <h1 class="subtitle-bottom page-3-2-text-3">When Listing Your Home</h1>
                        </div>
                        <div class="content">
                            <div class="objective objective-1">
                                <div class="ojective-image ojective-image-1">
                                    <img src="images/home-selling/Asset 5.png" alt="">
                                </div>
                                <div class="ojective-text ojective-text-1">
                                    <h2 class="title page-3-2-text-4">For The Highest Possible Price</h2>
                                    <p class="text page-3-2-text-5">Utilizing our pricing strategy along with our in-house appraisal services, LUXE agents ensure your home is properly valued to garner maximum exposure in the marketplace. Our pricing approach together with our tailored marketing program increases demand resulting in a higher sales price for our listings.</p>
                                </div>
                            </div>
                            <div class="objective objective-2">
                                <div class="ojective-image ojective-image-2">
                                    <img src="images/home-selling/Asset 6.png" alt="">
                                </div>
                                <div class="ojective-text ojective-text-2">
                                    <h2 class="title page-3-2-text-6">In The Shortest Amount Of Time</h2>
                                    <p class="text page-3-2-text-7">The ability to advise on market timing is one of LUXE’s competitive advantages. Our custom marketing program is consistent and predictable giving us a number of reliable metrics that can help identify how long it will take each listing to sell. The majority of the homes sold with LUXE in 2017 closed in 90 days or less.</p>
                                </div>
                            </div>
                            <div class="objective objective-3">
                                <div class="ojective-image ojective-image-3">
                                    <img src="images/home-selling/Asset 7.png" alt="">
                                </div>
                                <div class="ojective-text ojective-text-3">
                                    <h2 class="title page-3-2-text-8">With The Least Hassle</h2>
                                    <p class="text page-3-2-text-9">Once you list with LUXE, you can sit back and relax. Our specialized departments cover all aspects of the home sale process from marketing your home all the way up to closing. Our company has a “let us handle that for you” approach to the sale. We’ve redefined our process so precisely that nothing falls through the cracks.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column-divider"></div>
                <div class="row-input">
                    <label for="page-3-2-text-1">First Title</label>
                    <input type="text" id="page-3-2-text-1" name="page_3_2_text_1" value="Key">

                    <label for="page-3-2-text-2">Second Title</label>
                    <input type="text" id="page-3-2-text-2" name="page_3_2_text_2" value="Objectives">

                    <label for="page-3-2-text-3">Third Title</label>
                    <input type="text" id="page-3-2-text-3" name="page_3_2_text_3" value="When Listing Your Home">

                    <div class="flex">
                        <label for="page-3-2-text-3">First Subtitle</label>
                        <input type="text" id="page-3-2-text-4" name="page_3_2_text_4" value="For The Highest Possible Price">

                        <label for="page-3-2-text-3">First Text</label>
                        <textarea id="page-3-2-text-5" name="page_3_2_text_5" rows="4">Utilizing our pricing strategy along with our in-house appraisal services, LUXE agents ensure your home is properly valued to garner maximum exposure in the marketplace. Our pricing approach together with our tailored marketing program increases demand resulting in a higher sales price for our listings.</textarea>
                    </div>

                    <div class="flex">
                        <label for="page-3-2-text-3">Second Subtitle</label>
                        <input type="text" id="page-3-2-text-6" name="page_3_2_text_6" value="In The Shortest Amount Of Time">

                        <label for="page-3-2-text-3">Second Text</label>
                        <textarea id="page-3-2-text-7" name="page_3_2_text_7" rows="4">The ability to advise on market timing is one of LUXE’s competitive advantages. Our custom marketing program is consistent and predictable giving us a number of reliable metrics that can help identify how long it will take each listing to sell. The majority of the homes sold with LUXE in 2017 closed in 90 days or less.</textarea>
                    </div>

                    <div class="flex">
                        <label for="page-3-2-text-3">Third Subtitle</label>
                        <input type="text" id="page-3-2-text-8" name="page_3_2_text_8" value="With The Least Hassle">

                        <label for="page-3-2-text-3">Third Text</label>
                        <textarea id="page-3-2-text-9" name="page_3_2_text_9" rows="4" data-replace-attribute="VAL" data-name-replace="page_3_2_text_9">Once you list with LUXE, you can sit back and relax. Our specialized departments cover all aspects of the home sale process from marketing your home all the way up to closing. Our company has a “let us handle that for you” approach to the sale. We’ve redefined our process so precisely that nothing falls through the cracks.</textarea>
                    </div>
                </div>
            </div>

            <div class="row-divider"></div>
            <div class="row">
                <div class="row-image">
                    <div class="page-4 page-4-1">
                        <div class="luxe-pro-info">
                            <img src="" id="imageBackground" data-replace-attribute="src" data-name-replace="page_4_1_img_1">
                            <input hidden name="page_4_1_img_1">
                            <div class="text">
                                <h2 class="page-4-1-text-1">The</h2>
                                <h1 class="page-4-1-text-2">Power</h1>
                                <h2 class="page-4-1-text-3 subtitle">of Our Brand</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column-divider"></div>
                <div class="row-input">
                    <!-- <label for="page-4-1-text-1">First Title</label>
                    <input type="text" id="page-4-1-text-1" name="page_4_1_text_1" value="The">

                    <label for="page-4-1-text-2">Second Title</label>
                    <input type="text" id="page-4-1-text-2" name="page_4_1_text_2" value="Power">

                    <label for="page-4-1-text-2">Third Title</label>
                    <input type="text" id="page-4-1-text-3" name="page_4_1_text_3" value="of Our Brand"> -->

                    <div class="button">
                        <button type="submit" name="action" value="Generate"class="generate">Generate</button>
                        <button type="submit" name="action" value="Save" class="generate">Save</button>
                        <input type="file" id="imageBackgroundInput" onchange="imageBackgroundInputChanged()">
                        <button type="button" onclick="startCropper()">Crop</button>
                        <button type="button" onclick="cropImage()">Save Crop</button>
                        <br>
                        JSON Upload:
                        <input type="file" id="jsonFileUpload" onchange="jsonFileUploaded()">
                    </div>
                </div>
            </div>

    </div>
    </form>
      {{ csrf_field() }}
</body>
<script>
    $(document).ready(function() {
        $("input").change(function(event) {
            var event_id = event.target.id;
            var event_element = $("#" + event_id)
            var export_var = $("." + event_id);
            export_var.text(event_element.val());
        });
        $("textarea").change(function(event) {
            var event_id = event.target.id;
            var event_element = $("#" + event_id)
            var export_var = $("." + event_id);
            export_var.text(event_element.val());
        });

    });

    var cropper;
    function startCropper(){
      var image = document.getElementById("imageBackground");
      $(".page-4.page-4-1 .text").css("display", "none");
      cropper = new Cropper(image, {
        minContainerHeight: 500
      });
    }

    function imageBackgroundInputChanged(){
        var form_data = new FormData();
        form_data.append("file", $("#imageBackgroundInput")[0].files[0]);
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
               $("#imageBackground").attr('src', 'uploadedimages/' + output)
               getBase64Image(document.getElementById("imageBackground"),function(base64){
                  $(".page-4-1 .luxe-pro-info").css('background-image', 'url(' + base64 + ')')
                  $("input[name=page_4_1_img_1]").val(base64);
               });
             }
        });
    }

    function jsonFileUploaded(){
        var reader = new FileReader();
        reader.onload = onJsonFileLoad;
        reader.readAsText(document.getElementById("jsonFileUpload").files[0]);
    }

    function onJsonFileLoad(event){
        console.log(event.target.result);
        var obj = JSON.parse(event.target.result);
        console.log(obj);
        jQuery.each(obj, function(i, val) {
            var item = $("[data-name-replace=" + i + "]");
            var itemAttributeToReplace = $(item).attr("data-replace-attribute");
            console.log(item, itemAttributeToReplace);
            if(itemAttributeToReplace == "HTML"){
              $(item).html(val);
            } else if(itemAttributeToReplace == "VAL"){
              $(item).val(val);
            } else {
              $(item).attr(itemAttributeToReplace, val)
            }
        });
    }


    function cropImage(){
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
               $("#imageBackground").attr('src', 'uploadedimages/' + output)
               getBase64Image(document.getElementById("imageBackground"),function(base64){
                  $(".page-4-1 .luxe-pro-info").css('background-image', 'url(' + base64 + ')')
                  $("input[name=page_4_1_img_1]").val(base64);
               });
               $(".page-4.page-4-1 .text").css("display", "block");
             }
        });

      }/*, 'image/png' */);
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
