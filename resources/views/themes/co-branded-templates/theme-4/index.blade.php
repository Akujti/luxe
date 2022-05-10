@extends('themes.layouts.app')
@section('title')
    Co-Branded Templates 2 -
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.9/cropper.css" />

    <style>
        #frame-location {
            color: #fff;
            font-family: 'gothicregular' !important;
            bottom: 96px;
            right: 34px;
            width: auto;
            font-size: 13px !important;
            line-height: 22px;
            background-color: #000;
            padding: 4px;
            display: flex;
            align-items: center;
        }
        #frame-location, #frame-price {
            position: absolute;
            z-index: 999;
        }
       
        #frame-price {
            bottom: 139px;
            right: 35px;
            font-family: 'gothicbold';
            font-size: 32px;
            color: #fff;
        }
        #frame-location img {
            width: 16px;
            height: 16px;
        }
        #frame-title-1 {
            position: absolute;
            left: 75px;
            bottom: 40px;
            font-size: 71px;
            color: #fff;
            text-transform: uppercase;
            font-family: 'AvenirBook';
            font-weight: 400;
            width: 100%;
            margin: 0;
            z-index: 999;
            margin-bottom: 10px;
            letter-spacing: 0px;
            line-height: 87px;
        }
        #frame-title-2 {
            position: absolute;
            left: 58px;
            font-size: 67px;
            text-transform: uppercase;
            bottom: -10px;
            font-weight: 900;
            color: #c4a567;
            letter-spacing: 3px;
            font-family: 'Avenir';
            z-index: 999;
        }

        .box-items {
            top: unset !important;
            bottom: 67px !important;
            left: 57% !important;
            padding-left: 28px;
            z-index: 999;
        }

    
        #frame-image {
            position: relative;
        }

        .preview {
            width: 700px;
            height: 500px;
        }

        .preview-logo {
            width: 99px;
            height: 40px;
            position: absolute;
            bottom: 6px;
            right: 147px;
            background-size: cover !important;
            background-position: center !important;
        }

        .inner-image {
            width: 656px;
            height: 467px;
            position: absolute;
            z-index: 0;
            left: 39px;
            top: 38px;
            background-repeat: no-repeat !important;
            background-size: cover !important;
        }
    </style>
@endsection
@section('content')
    <div class="">
        <div class="row theme">
            <div class="row theme">
                <div class="box-col-image">
                    <div class="preview-image" id="preview-image-box" style="background-color: black;">
                        <div class="frame-box" id="frame-box">
                            <div class="inner-image"
                                style="background:url('/images/themes/assets/co-branded-templates/theme-4/tbt.jpg');">
                            </div>
                            <p id="frame-price"></p>
                            <p id="frame-title-1"></p>
                            <p id="frame-title-2"></p>
                            <p id="frame-location"><img src="{{ asset('/images/themes/assets/map-location-13.png') }}" /> <span></span></p>
                            <img src="/images/themes/assets/co-branded-templates/theme-4/tbt.png" id="frame-image" alt="">
                        </div>
                        <div class="preview-logo" style="background: url('/images/themes/assets/co-branded-templates/small-place-logo.webp')"></div>
                    </div>
                    <div class="preview d-none">
                        <img src="/images/themes/assets/co-branded-templates/theme-4/tbt.jpg" id="person-image">
                        <img src="" id="person-image-1">
                    </div>
                </div>
                <div class="box-col-tools">
                    <div class="box-tools">
                        <div class="w-100">
                            <div class="row theme">
                                <div class="form-group w-100 mt-0">
                                    <div class="form-label">
                                        <label for="">Background Image</label>
                                    </div>
                                </div>
                                <input type="file" name="file" id="preview-image-input" onchange="onFileChanged(this)"
                                    style="display: none;">
                                <div class="file-input-wrapper">
                                    <button type="button" class="" onclick="toggleFileInput()">Choose
                                        image</button>
                                    <button type="button" class="w-auto"
                                        onclick="startCropper('preview-image-input')">Crop</button>
                                    <button type="button" class="" onclick="save_crop()">Save Crop</button>
                                    <button type="button" class=""
                                        onclick="reverse_default()">Default</button>
                                </div>
                            </div>
                        </div>

                        <div class="w-100">
                            <div class="row theme">
                                <div class="form-group w-100 mt-0">
                                    <div class="form-label">
                                        <label for="">Option Logo</label>
                                    </div>
                                </div>
                                <input type="file" name="file" id="preview-image-input-1" onchange="onFileChanged1(this)"
                                    style="display: none;">
                                <div class="file-input-wrapper">
                                    <button type="button" class="" onclick="toggleFileInput1()">Choose
                                        image</button>
                                    <button type="button" class="w-auto"
                                        onclick="startCropper1('preview-image-input-1')">Crop</button>
                                    <button type="button" class="" onclick="save_crop1()">Save Crop</button>
                                    <button type="button" class=""
                                        onclick="reverse_default1()">Default</button>
                                </div>
                            </div>
                        </div>

                        <div class="row theme">
                            <div class="w-100 form-group">
                                <div class="form-label">
                                    <label for="">Price</label>
                                </div>
                                <div class="form-input">
                                    <input type="text" id="price" value="$728,313"
                                        onkeyup="valueChanged(this, 'frame-price')">
                                </div>
                            </div>
                            <div class="w-100 form-group">
                                <div class="form-label">
                                    <label for="">Location</label>
                                </div>
                                <div class="form-input">
                                    <input type="text" id="location" value="12874 SW 283rd LAnE, Homestead, FL 33033"
                                        onkeyup="valueChanged(this, 'frame-location span')">
                                </div>
                            </div>
                            <div class="w-100 form-group">
                                <div class="form-label">
                                    <label for="">Title 1</label>
                                </div>
                                <div class="form-input">
                                    <input type="text" id="title-1" value="Just"
                                        onkeyup="valueChanged(this, 'frame-title-1')">
                                </div>
                            </div>
                            <div class="w-100 form-group">
                                <div class="form-label">
                                    <label for="">Title 2</label>
                                </div>
                                <div class="form-input">
                                    <input type="text" id="title-2" value="Sold"
                                        onkeyup="valueChanged(this, 'frame-title-2')">
                                </div>
                            </div>

                            <button class="btn-luxe" type="button"
                                onclick="getScreenShot('preview-image-box')">Generate</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@section('js')
    <script>
        $(document).ready(function() {
            $('#frame-price').html($('#price').val())
            $('#frame-title-1').html($('#title-1').val())
            $('#frame-title-2').html($('#title-2').val())
            $('#frame-location span').html($('#location').val())
        })

        function toggleFileInput() {
            $('#preview-image-input').click()
        }
        var oldBlob = '/images/themes/assets/co-branded-templates/theme-4/tbt.jpg';

        function onFileChanged(e) {
            const [file] = e.files
            if (file) {
                $('#person-image').attr("src", URL.createObjectURL(file));
                $('.inner-image').css('background-image', 'url(' + URL.createObjectURL(file) + ')');
                oldBlob = URL.createObjectURL(file)
            }
        }
        var cropper;

        function startCropper(input) {
            if (document.getElementById(input).files.length) {
                var image = document.getElementById("person-image");
                $(".preview-image").css("display", "none");
                $("#person-image-1").css("display", "none");
                $(".preview").toggleClass('d-none')
                cropper = new Cropper(image, {
                    aspectRatio: 656 / 470,
                    viewMode: 1,
                    dragMode: 'move',
                    autoCropArea: 1,
                    restore: false,
                    guides: false,
                    center: false,
                    highlight: false,
                });
            }
        }

        function save_crop() {
            cropper.getCroppedCanvas().toBlob((blob) => {
                $('.inner-image').css('background-image', 'url(' + URL.createObjectURL(blob) + ')');
                $('#person-image').attr('src', URL.createObjectURL(blob))
            });
            cropper.destroy()
            $('.preview-image').css('display', 'flex')
            $(".preview").toggleClass('d-none')
        }

        function reverse_default() {
            $('#person-image').attr('src', oldBlob)
            $('.inner-image').css('background-image', 'url(' + oldBlob + ')');
        }

        function toggleFileInput1() {
            $('#preview-image-input-1').click()
        }
        var oldBlob1 = '';

        function onFileChanged1(e) {
            const [file] = e.files
            if (file) {
                $('#person-image-1').attr("src", URL.createObjectURL(file));
                $('.preview-logo').css('background-image', 'url(' + URL.createObjectURL(file) + ')');
                oldBlob1 = URL.createObjectURL(file)
            }
        }
        var cropper1;

        function startCropper1(input) {
            if (document.getElementById(input).files.length) {
                var image = document.getElementById("person-image-1");
                $("#person-image").css("display", "none");
                $(".preview-image").css("display", "none");
                $(".preview").toggleClass('d-none')
                cropper1 = new Cropper(image, {
                    aspectRatio: 301 / 200,
                    viewMode: 1,
                    dragMode: 'move',
                    autoCropArea: 1,
                    restore: false,
                    guides: false,
                    center: false,
                    highlight: false,
                });
            }
        }

        function save_crop1() {
            cropper1.getCroppedCanvas().toBlob((blob) => {
                $('.preview-logo').css('background-image', 'url(' + URL.createObjectURL(blob) + ')');
                $('#person-image-1').attr('src', URL.createObjectURL(blob))
            });
            cropper1.destroy()
            $('.preview-image').css('display', 'flex')
            $(".preview").toggleClass('d-none')
        }

        function reverse_default1() {
            $('#person-image-1').attr('src', oldBlob1)
            $('.preview-logo').css('background-image', 'url(' + oldBlob1 + ')');
        }

        function valueChanged(e, p_id) {
            $('#' + p_id).html(e.value)
        }
    </script>
@endsection
@endsection
