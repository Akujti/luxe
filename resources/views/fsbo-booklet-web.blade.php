<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fsbo-Booklet</title>

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

        .page-background {
            background-repeat: no-repeat;
            background-size: cover;
            height: 100%;
            position: relative;
            bottom: 0px;
            width: 100%;
        }

        .black {
            color: black !important;
        }

        .gold {
            color: #C9A668 !important;
        }

        .white {
            color: white !important;
        }

        .font-thin {
            font-weight: 300;
        }

        .font-regular {
            font-weight: 400;
        }

        .font-700 {
            font-weight: 700
        }

        .font-bold {
            font-weight: 900;
        }

        .font-size-20 {
            font-size: 20px;
        }

        .font-size-25 {
            font-size: 25px;
        }

        .absolute {
            position: relative;
        }

        .background-right {
            background-position: 15%;
        }

        .background-left {
            background-position: left;
        }

        .background-center {
            background-position: center;
        }

        .page-5 {
            background-image: url("images/fsbo-booklet/page-5.png");
        }

        .page-6 {
            width: 720px;
            height: 1000px;
            background-image: url("images/fsbo-booklet/page-6.png");
        }

        .abs {
            position: absolute;
        }
    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.9/cropper.js"
        integrity="sha512-oqBsjjSHWqkDx4UKoU+5IUZN2nW2qDp2GFSKw9+mcFm+ZywqfBKp79nfWmGPco2wzTWuE46XpjtCjZ9tFmI12g=="
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.9/cropper.css"
        integrity="sha512-949FvIQOibfhLTgmNws4F3DVlYz3FmCRRhJznR22hx76SKkcpZiVV5Kwo0iwK9L6BFuY+6mpdqB2+vDIGVuyHg=="
        crossorigin="anonymous" />

</head>

<body>

    <div class="page page-1"></div>
    <form method="post" action=" {{ route('pdf.fsbo.store') }} " method="POST">
        @csrf
        <div class="row">
            <div class="row-image">
                <img src="images/fsbo-booklet/web/page-1.png" alt="" class="page-img">
            </div>
            <div class="column-divider"></div>
            <div class="row-input">

            </div>
        </div>
        <div class="row-divider"></div>
        <div class="row">
            <div class="row-image">
                <img src="images/fsbo-booklet/web/page-2.png" alt="" class="page-img">
            </div>
            <div class="column-divider"></div>
            <div class="row-input">

            </div>
        </div>
        <div class="row-divider"></div>
        <div class="row">
            <div class="row-image">
                <img src="images/fsbo-booklet/web/page-3.png" alt="" class="page-img">
            </div>
            <div class="column-divider"></div>
            <div class="row-input">

            </div>
        </div>
        <div class="row-divider"></div>
        <div class="row">
            <div class="row-image">
                <img src="images/fsbo-booklet/web/page-4.png" alt="" class="page-img">
            </div>
            <div class="column-divider"></div>
            <div class="row-input">

            </div>
        </div>
        <div class="row-divider"></div>
        <div class="row">
            <div class="row-image">
                <div class="page page-5 page-background background-right"
                    style="height:1000px;width:355px;left:-310px;">
                    <img src="" id="imageBackground" style="display: none">
                    <input hidden name="page_5_img_1" value="images/fsbo-booklet/woman.png">
                    <div class="content">
                        <div class="absolute" style="top:2.5%;left:70px;padding-top:40px;margin-bottom:-20px;">
                            <p class="font-thin">
                                FOR SALE BY OWNER<br>FSBO GUIDE
                            </p>
                        </div>

                        <div class="absolute" style="margin-top:200px;left:40px;z-index:1000;width:610px">
                            <h1 class="font-bold white page-5-text-1" style="margin-bottom:-45px;font-size:55px;">Hello!
                            </h1>
                            <h4 class="font-thin page-5-text-2" style="font-size:30px;">I’m Wesley Ulloa</h4>
                        </div>

                        <div class="absolute" style="top:20%;left:40px;z-index:1000;width:200px;">
                            <p style="font-size:13px;" class="page-5-text-3">There are many reasons that folks choose to
                                go the
                                FSBO route
                                when
                                selling their
                                homes. FSBO means 'For Sale by Owner' in the world of real estate. It sounds like
                                'fizbo'
                                when said
                                aloud, and the concept most definitely has some serious pros.</p>
                        </div>

                        <div class="absolute" style="margin-top:-410px;left:247px;width:200px;">
                            <img id="page-5-img-1" src="images/fsbo-booklet/woman.png" alt="" width="500px;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <label for="page-5-text-1">Greeting</label>
                <input type="text" id="page-5-text-1" name="page_5_text_1" value="Hello!">

                <label for="page-5-text-2">Name</label>
                <input type="text" id="page-5-text-2" name="page_5_text_2" value="I’m Wesley Ulloa">

                <label for="page-5-text-3">Description</label>
                <textarea id="page-5-text-3" name="page_5_text_3"
                    rows="4">There are many reasons that folks choose to go the FSBO route when selling their homes. FSBO means 'For Sale by Owner' in the world of real estate. It sounds like 'fizbo' when said aloud, and the concept most definitely has some serious pros.</textarea>
                <div class="button">
                    <input type="file" id="imageBackgroundInput" onchange="imageBackgroundInputChanged()">
                    <button type="button" onclick="startCropper()">Crop</button>
                    <button type="button" onclick="cropImage()">Save Crop</button>
                </div>
            </div>
        </div>
        <div class="row-divider"></div>
        <div class="row">
            <div class="row-image">
                <div class="page page-6 page-background background-right" style="position: relative">
                    <div class="abs" style="top:5.5%;right:90px;">
                        <p class="font-thin" style="text-align: right">
                            FOR SALE BY OWNER<br>FSBO GUIDE
                        </p>
                    </div>

                    <div class="abs" style="top:14%;left:135px;width:600px;">
                        <p style="font-size:13px;text-align:justify;" class="page-6-text-1">With the recent appreciation
                            in home prices, this
                            spring might
                            be a good time to
                            sell your home. But which is the smarter way to do it, hire a real estate agent or list it
                            yourself? For
                            someone experienced in the purchase, sale and marketing of a home, selling a home as a FSBO
                            makes good
                            financial sense. On the flip side, for someone who is inexperienced in marketing and real
                            estate, or who
                            is short on time, the FSBO route could cost the seller a great deal of time and money.
                            Making a mistake
                            in pricing, marketing, legal compliance or paperwork can have serious repercussions, both
                            financial and
                            legal.</p>
                    </div>

                    <div class="abs" style="top:37%;left:130px;width:250px;">
                        <p style="font-size:13px;text-align:justify;" class="page-6-text-2">FSBO listings are more
                            common today than in 2007,
                            thanks to
                            consumer- facing listing platforms such as Zillow and easier access to the Multiple Listing
                            Service
                            (MLS) for non-agents.</p>
                    </div>

                    <div class="abs" style="top:37%;left:400px;width:350px;">
                        <p style="font-size:13px;text-align:justify;" class="page-6-text-3">But FSBO is no walk in the
                            park. A 2017 Zillow
                            report found
                            that 36% of homeowners attempt to sell their homes without an agent, but only 11% actually
                            complete
                            sales themselves. In other words, more than two-thirds of sellers who try FSBO fail.</p>
                    </div>

                    <div class="abs" style="top:55%;left:100px;width:250px;">
                        <p class="gold page-6-text-4" style="text-align:justify;font-style: italic;font-size:20px;">Many
                            Real Estate
                            Agents are protective of our
                            "top secret" selling techniques, but I am not your average agent. In this guide, I will map
                            out how to
                            price and prepare your home, the showing process, and what to expect at closing. As always,
                            if you get
                            into this and decide a real estate agent is the way you would like to go, please call me
                            anytime.</p>
                    </div>

                    <div class="abs" style="top:625px;left:500px;">
                        <h4 class="font-bold page-6-text-5" style="margin-bottom: -55px;font-size:30px;">Let's Get</h4>
                        <h4 class="font-bold white page-6-text-6" style="margin-bottom: 10px;font-size:40px;">Started!
                        </h4>
                    </div>

                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <label for="page-6-text-1">Description</label>
                <textarea id="page-6-text-1" name="page_6_text_1"
                    rows="4">With the recent appreciation in home prices, this spring might be a good time to sell your home. But which is the smarter way to do it, hire a real estate agent or list it yourself? For someone experienced in the purchase, sale and marketing of a home, selling a home as a FSBO makes good financial sense. On the flip side, for someone who is inexperienced in marketing and real estate, or who is short on time, the FSBO route could cost the seller a great deal of time and money. Making a mistake in pricing, marketing, legal compliance or paperwork can have serious repercussions, both financial and legal.</textarea>

                <label for="page-6-text-2">Description</label>
                <textarea id="page-6-text-2" name="page_6_text_2"
                    rows="4">FSBO listings are more common today than in 2007, thanks to consumer- facing listing platforms such as Zillow and easier access to the Multiple Listing Service (MLS) for non-agents.</textarea>

                <label for="page-6-text-3">Description</label>
                <textarea id="page-6-text-3" name="page_6_text_3"
                    rows="4">But FSBO is no walk in the park. A 2017 Zillow report found that 36% of homeowners attempt to sell their homes without an agent, but only 11% actually complete sales themselves. In other words, more than two-thirds of sellers who try FSBO fail.</textarea>

                <label for="page-6-text-4">Description</label>
                <textarea id="page-6-text-4" name="page_6_text_4"
                    rows="4">Many Real Estate Agents are protective of our "top secret" selling techniques, but I am not your average agent. In this guide, I will map out how to price and prepare your home, the showing process, and what to expect at closing. As always, if you get into this and decide a real estate agent is the way you would like to go, please call me anytime.</textarea>

                <label for="page-6-text-5">Heading 1</label>
                <input type="text" id="page-6-text-5" name="page_6_text_5" value="Let's Get">

                <label for="page-6-text-6">Heading 2</label>
                <input type="text" id="page-6-text-6" name="page_6_text_6" value="Started!">
            </div>
        </div>
        <div class="row-divider"></div>
        <div class="row">
            <div class="row-image">
                <img src="images/fsbo-booklet/web/page-7.png" alt="" class="page-img">
            </div>
            <div class="column-divider"></div>
            <div class="row-input">

            </div>
        </div>
        <div class="row-divider"></div>
        <div class="row">
            <div class="row-image">
                <img src="images/fsbo-booklet/web/page-8.png" alt="" class="page-img">
            </div>
            <div class="column-divider"></div>
            <div class="row-input">

            </div>
        </div>
        <div class="row-divider"></div>
        <div class="row">
            <div class="row-image">
                <img src="images/fsbo-booklet/web/page-9.png" alt="" class="page-img">
            </div>
            <div class="column-divider"></div>
            <div class="row-input">

            </div>
        </div>
        <div class="row-divider"></div>
        <div class="row">
            <div class="row-image">
                <img src="images/fsbo-booklet/web/page-10.png" alt="" class="page-img">
            </div>
            <div class="column-divider"></div>
            <div class="row-input">

            </div>
        </div>
        <div class="row-divider"></div>
        <div class="row">
            <div class="row-image">
                <img src="images/fsbo-booklet/web/page-11.png" alt="" class="page-img">
            </div>
            <div class="column-divider"></div>
            <div class="row-input">

            </div>
        </div>
        <div class="row-divider"></div>
        <div class="row">
            <div class="row-image">
                <img src="images/fsbo-booklet/web/page-12.png" alt="" class="page-img">
            </div>
            <div class="column-divider"></div>
            <div class="row-input">

            </div>
        </div>
        <div class="row-divider"></div>
        <div class="row">
            <div class="row-image">
                <img src="images/fsbo-booklet/web/page-13.png" alt="" class="page-img">
            </div>
            <div class="column-divider"></div>
            <div class="row-input">

            </div>
        </div>
        <div class="row-divider"></div>
        <div class="row">
            <div class="row-image">
                <img src="images/fsbo-booklet/web/page-14.png" alt="" class="page-img">
            </div>
            <div class="column-divider"></div>
            <div class="row-input">

            </div>
        </div>
        <div class="row-divider"></div>
        <div class="row">
            <div class="row-image">
                <img src="images/fsbo-booklet/web/page-15.png" alt="" class="page-img">
            </div>
            <div class="column-divider"></div>
            <div class="row-input">

            </div>
        </div>
        <div class="row-divider"></div>
        <div class="row">
            <div class="row-image">
                <img src="images/fsbo-booklet/web/page-16.png" alt="" class="page-img">
            </div>
            <div class="column-divider"></div>
            <div class="row-input">

            </div>
        </div>
        <div class="row-divider"></div>
        <div class="row">
            <div class="row-image">
                <img src="images/fsbo-booklet/web/page-17.png" alt="" class="page-img">
            </div>
            <div class="column-divider"></div>
            <div class="row-input">

            </div>
        </div>
        <div class="row-divider"></div>
        <div class="row">
            <div class="row-image">
                <img src="images/fsbo-booklet/web/page-18.png" alt="" class="page-img">
            </div>
            <div class="column-divider"></div>
            <div class="row-input">

            </div>
        </div>
        <div class="row-divider"></div>
        <div class="row">
            <div class="row-image">
                <img src="images/fsbo-booklet/web/page-19.png" alt="" class="page-img">
            </div>
            <div class="column-divider"></div>
            <div class="row-input">

            </div>
        </div>
        <div class="row-divider"></div>
        <div class="row">
            <div class="row-image">
                <img src="images/fsbo-booklet/web/page-20.png" alt="" class="page-img">
            </div>
            <div class="column-divider"></div>
            <div class="row-input">

            </div>
        </div>
        <div class="row-divider"></div>
        <div class="row">
            <div class="row-image">
                <img src="images/fsbo-booklet/web/page-21.png" alt="" class="page-img">
            </div>
            <div class="column-divider"></div>
            <div class="row-input">

            </div>
        </div>
        <div class="row-divider"></div>
        <div class="row">
            <div class="row-image">
                <img src="images/fsbo-booklet/web/page-22.png" alt="" class="page-img">
            </div>
            <div class="column-divider"></div>
            <div class="row-input">

            </div>
        </div>
        <div class="row-divider"></div>
        <div class="row">
            <div class="row-image">
                <img src="images/fsbo-booklet/web/page-23.png" alt="" class="page-img">
            </div>
            <div class="column-divider"></div>
            <div class="row-input">

            </div>
        </div>
        <div class="row-divider"></div>
        <div class="row">
            <div class="row-image">
                <img src="images/fsbo-booklet/web/page-24.png" alt="" class="page-img">
            </div>
            <div class="column-divider"></div>
            <div class="row-input">

            </div>
        </div>
        <div class="row-divider"></div>
        <div class="row">
            <div class="row-image">
                <img src="images/fsbo-booklet/web/page-25.png" alt="" class="page-img">
            </div>
            <div class="column-divider"></div>
            <div class="row-input">

            </div>
        </div>
        <div class="row-divider"></div>
        <div class="row">
            <div class="row-image">
                <img src="images/fsbo-booklet/web/page-26.png" alt="" class="page-img">
            </div>
            <div class="column-divider"></div>
            <div class="row-input">

            </div>
        </div>
        <div class="row-divider"></div>
        <div class="row">
            <div class="row-image">
                <img src="images/fsbo-booklet/web/page-27.png" alt="" class="page-img">
            </div>
            <div class="column-divider"></div>
            <div class="row-input">

            </div>
        </div>
        <div class="row-divider"></div>
        <div class="row">
            <div class="row-image">
                <img src="images/fsbo-booklet/web/page-28.png" alt="" class="page-img">
            </div>
            <div class="column-divider"></div>
            <div class="row-input">

            </div>
        </div>
        <div class="row-divider"></div>
        <div class="row">
            <div class="row-image">
                <img src="images/fsbo-booklet/web/page-29.png" alt="" class="page-img">
            </div>
            <div class="column-divider"></div>
            <div class="row-input">

            </div>
        </div>
        <div class="row-divider"></div>
        <div class="row">
            <div class="row-image">
                <img src="images/fsbo-booklet/web/page-30.png" alt="" class="page-img">
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <div class="button">
                    <button type="submit" name="action" value="Generate" class="generate" style="">Generate</button>
                    <button type="submit" name="action" value="Save" class="generate">Save</button>

                    {{-- <br>
                    JSON Upload:
                    <input type="file" id="jsonFileUpload" onchange="jsonFileUploaded()"> --}}
                </div>
            </div>
        </div>


    </form>
</body>

<script>
    $("input").change(function(event) {
            var event_id = event.target.id;
            var event_element = $("#" + event_id)
            var export_var = $("." + event_id);
            export_var.text(event_element.val());
        });
    $("textarea").change(function(event) {
        var event_id = event.target.id;
        if (event_id == "page-5-text-2") {
            var text = $("#page-5-text-3").val();
            var array = document.getElementsByClassName("page-5-text-3");
            var textarea = array[0];
            textarea.innerHTML = text;
        }
        else if (event_id == "page-6-text-1") {
            var text = $("#page-6-text-1").val();
            var array = document.getElementsByClassName("page-6-text-1");
            var textarea = array[0];
            textarea.innerHTML = text;
        }
        else if (event_id == "page-6-text-2") {
            var text = $("#page-6-text-2").val();
            var array = document.getElementsByClassName("page-6-text-2");
            var textarea = array[0];
            textarea.innerHTML = text;
        }
        else if (event_id == "page-6-text-3") {
            var text = $("#page-6-text-3").val();
            var array = document.getElementsByClassName("page-6-text-3");
            var textarea = array[0];
            textarea.innerHTML = text;
        }
        else if (event_id == "page-6-text-4") {
            var text = $("#page-6-text-4").val();
            var array = document.getElementsByClassName("page-6-text-4");
            var textarea = array[0];
            textarea.innerHTML = text;
        }
        });

        var cropper;

    function startCropper() {
        var image = document.getElementById("imageBackground");
        $(".page-5 .content").css("display", "none");
        cropper = new Cropper(image, {
            minContainerHeight: 500,
            minContainerWidth: 500
        });
    }

    function imageBackgroundInputChanged() {
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
            success: function(output) {
                $("#imageBackground").attr('src', 'uploadedimages/' + output)
                getBase64Image(document.getElementById("imageBackground"), function(base64) {
                    $("#page-5-img-1").attr('src', 'uploadedimages/' + output)
                    $("input[name=page_5_img_1]").val('uploadedimages/' + output);
                });
            }
        });
    }

    function cropImage() {
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
                success: function(output) {
                    cropper.destroy();
                    $("#imageBackground").attr('src', 'uploadedimages/' + output)
                    getBase64Image(document.getElementById("imageBackground"), function(base64) {
                        $("#page-5-img-1").attr('src', 'uploadedimages/' + output)
                        $("input[name=page_5_img_1]").val('uploadedimages/' + output);
                    });
                    $(".page-5 .content").css("display", "block");
                }
            });

        } /*, 'image/png' */ );
    }

    function jsonFileUploaded() {
        var reader = new FileReader();
        reader.onload = onJsonFileLoad;
        reader.readAsText(document.getElementById("jsonFileUpload").files[0]);
    }

    function onJsonFileLoad(event) {
        // console.log(event.target.result);
        var obj = JSON.parse(event.target.result);
        // console.log(obj);
        jQuery.each(obj, function(i, val) {
            // var item = $("#" + i);
            var item = $("[name =" + i + "]");
            $(item).val(val);
            // console.log("i: " + i + " - val: " + val);
            console.log("i: " + i + " - val: " + val);

            // console.log("[data-name-replace=" + i + "]");
            // var itemAttributeToReplace = $(item).attr("VAL");
            // console.log(item, itemAttributeToReplace);
            // $("." + i).val(val);
            // if (itemAttributeToReplace == "HTML") {
            //     $(item).html(val);
            // } else if (itemAttributeToReplace == "VAL") {
            //     $(item).val(val);
            // } else {
            //     $(item).attr(itemAttributeToReplace, val)
            // }
            $(item).trigger("change");
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
</script>

</html>