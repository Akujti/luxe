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
            position: absolute;
            bottom: 24px;
            left: 39%;
            width: 426px;
            font-size: 16px !important;
            line-height: 19px;
            text-align: right;
        }
        #frame-location img {
            width: 16px;
            height: 16px;
        }
        #frame-title-1 {
            position: absolute;
            left: 12px;
            top: 14px;
            font-size: 43px;
            color: #000;
            text-transform: uppercase;
            font-family: 'AvenirBook';
            font-weight: 400;
            width: 100%;
            line-height: 32px;
            margin: 0;
            z-index: 999;
            letter-spacing: -2px;
        }
        #frame-title-2 {
            position: absolute;
            left: 13px;
            font-size: 71px;
            text-transform: uppercase;
            top: 32px;
            font-weight: 900;
            color: #000;
            letter-spacing: -2px;
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
            width: 82px;
            height: 92px;
            position: absolute;
            bottom: 20px;
            left: 105px;
            background-size: cover !important;
            background-position: center !important;
        }
    </style>
@endsection
@section('content')
    <div class="">
        <div class="row theme">
            <div class="row theme">
                <div class="box-col-image">
                    <div class="preview-image" id="preview-image-box" style="background:url('/images/themes/assets/co-branded-templates/theme-2/tbt.jpg');">
                        <div class="frame-box" id="frame-box">
                            <p id="frame-title-1"></p>
                            <p id="frame-title-2"></p>
                            <p id="frame-location"><img src="{{ asset('/images/themes/assets/map-location.png') }}" /> <span></span></p>
                            <img src="/images/themes/assets/co-branded-templates/theme-2/tbt.png" id="frame-image" alt="">
                        </div>
                        <div class="preview-logo" style="background: url('/images/themes/assets/co-branded-templates/place-logo.webp')"></div>
                    </div>
                    <div class="preview d-none">
                        <img src="/images/themes/assets/co-branded-templates/theme-2/tbt.jpg" id="person-image">
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
                                    <input type="text" id="title-1" value="Coming"
                                        onkeyup="valueChanged(this, 'frame-title-1')">
                                </div>
                            </div>
                            <div class="w-100 form-group">
                                <div class="form-label">
                                    <label for="">Title 2</label>
                                </div>
                                <div class="form-input">
                                    <input type="text" id="title-2" value="Soon"
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
            $('#frame-title-1').html($('#title-1').val())
            $('#frame-title-2').html($('#title-2').val())
            $('#frame-location span').html($('#location').val())
        })

        function toggleFileInput() {
            $('#preview-image-input').click()
        }
        var oldBlob = '/images/themes/assets/co-branded-templates/theme-2/tbt.jpg';

        function onFileChanged(e) {
            const [file] = e.files
            if (file) {
                $('#person-image').attr("src", URL.createObjectURL(file));
                $('.preview-image').css('background-image', 'url(' + URL.createObjectURL(file) + ')');
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
                $('.preview-image').css('background-image', 'url(' + URL.createObjectURL(blob) + ')');
                $('#person-image').attr('src', URL.createObjectURL(blob))
            });
            cropper.destroy()
            $('.preview-image').css('display', 'flex')
            $(".preview").toggleClass('d-none')
        }

        function reverse_default() {
            $('#person-image').attr('src', oldBlob)
            $('.preview-image').css('background-image', 'url(' + oldBlob + ')');
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
                    aspectRatio: 1 / 1,
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
