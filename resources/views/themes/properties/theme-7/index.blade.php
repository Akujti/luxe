@extends('themes.layouts.app')
@section('title')
    Properties 7 -
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.9/cropper.css" />

    <style>
        .frame-title {
            color: #fff;
            font-size: 13px !important;
            font-family: 'gothicregular' !important;
        }
        .inner-image {
            width: 402px;
            height: 500px;
            position: absolute;
            z-index: 0;
            left: 34px;
            top: 31px;
            background-repeat: no-repeat !important;
            background-size: cover !important;
        }

        #frame-location, #frame-title-1, #frame-title-2 {
            position: absolute;
            z-index: 999;
        }

        #frame-title-1 {
            left: 60px;
            bottom: 40px;
            font-size: 54px;
            color: #fff;
            text-transform: uppercase;
            font-family: 'AvenirBook';
            font-weight: 300;
            width: auto;
            line-height: 70px;
            margin: 0;
        }
        #frame-title-2 {
            left: 47px;
            font-size: 56px;
            text-transform: uppercase;
            bottom: -10px;
            font-weight: 900;
            color: #f8cb88;
            letter-spacing: -1px;
            font-family: 'Avenir';
        }
        #frame-location {
            color: #fff;
            font-family: 'gothicregular' !important;
            bottom: 59px;
            right: -34px;
            width: 226px;
            font-size: 10px !important;
            line-height: 22px;
            background-color: #000;
            padding: 2px;
            display: flex;
            align-items: center;
        }
        #frame-location img {
            width: 12px;
            height: 12px;
            margin-right: 3px;
            margin-left: 6px;
        }

        #frame-image {
            position: relative;
            width: 466px;
            height: 582px;
        }

        .preview {
            width: 466px;
            height: 582px;
        }

        .preview-image {
            width: 466px !important;
            height: 582px !important;
            margin: auto;
        }

        #frame-box {
            width: 402px;
        }

    </style>
@endsection
@section('content')
    <div class="">
        <div class="row theme">
            <div class="row theme">
                <div class="box-col-image">
                    <div class="preview-image" id="preview-image-box" style="background-color: #000;">
                        <div class="frame-box" id="frame-box">
                            <div class="inner-image"
                                style="background:url('/images/themes/assets/properties/theme-7/tbt.jpg');">
                            </div>
                            <p id="frame-title-1"></p>
                            <p id="frame-title-2"></p>
                            <p id="frame-location"><img src="{{ asset('/images/themes/assets/map-location.png') }}" /> <span></span></p>
                            <img src="/images/themes/assets/properties/theme-7/tbt.png" id="frame-image" alt="">
                        </div>
                    </div>
                    <div class="preview d-none">
                        <img src="/images/themes/assets/properties/theme-7/tbt.jpg" id="person-image">
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

                        <div class="row theme">
                            <div class="w-100 form-group">
                                <div class="form-label">
                                    <label for="">Location</label>
                                </div>
                                <div class="form-input">
                                    <input type="text" id="location" value="6199 Sw 38th St, Miami, FL 33155"
                                        onkeyup="valueChanged(this, 'frame-location span')">
                                </div>
                            </div>
                            <div class="w-100 form-group">
                                <div class="form-label">
                                    <label for="">Title 1</label>
                                </div>
                                <div class="form-input">
                                    <input type="text" id="title-1" value="JUST"
                                        onkeyup="valueChanged(this, 'frame-title-1')">
                                </div>
                            </div>
                            <div class="w-100 form-group">
                                <div class="form-label">
                                    <label for="">Title 2</label>
                                </div>
                                <div class="form-input">
                                    <input type="text" id="title-2" value="SOLD"
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
        var oldBlob = '/images/themes/assets/properties/theme-7/tbt.jpg';

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
                $(".preview").toggleClass('d-none')
                cropper = new Cropper(image, {
                    aspectRatio: 402 / 500,
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

        function valueChanged(e, p_id) {
            $('#' + p_id).html(e.value)
        }
    </script>
@endsection
@endsection
