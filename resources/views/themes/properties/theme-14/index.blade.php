@extends('themes.layouts.app')
@section('title')
    Properties 14 -
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.9/cropper.css" />

    <style>
        #frame-location, #frame-title-1, #frame-title-2, #frame-day, #frame-hours, #frame-price {
            position: absolute;
            z-index: 999;
        }

        #frame-title-1 {
            left: 33px;
            top: 1px;
            font-size: 32px;
            color: #fff;
            text-transform: uppercase;
            font-family: 'AvenirBook';
            font-weight: normal;
            width: 400px;
            text-align: center;
            letter-spacing: -1px;
            margin: 0;
        }
        #frame-title-2 {
            left: 33px;
            font-size: 38px;
            text-transform: uppercase;
            top: 32px;
            font-weight: 900;
            color: #fff;
            letter-spacing: 2px;
            font-family: 'Avenir';
            width: 400px;
            text-align: center;
        }
        #frame-location {
            color: #fff;
            font-family: 'AvenirBook' !important;
            bottom: 18px;
            left: 99px;
            width: auto;
            font-size: 14px !important;
            font-weight: 100;
            line-height: 25px;
        }
        #frame-day {
            width: 300px;
            top: 81px;
            right: 18%;
            font-size: 18px;
            color: #fff;
            text-transform: uppercase;
            font-family: 'Lato';
            text-align: center;
        }
        #frame-hours {
            right: 35%;
            top: 108px;
            font-size: 18px;
            color: #fff;
            font-family: 'Lato';
        }
        #frame-price {
            bottom: 51px;
            left: 140px;
            font-size: 24px;
            color: #fff;
            font-family: 'gothicregular';
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
            width: 100%;
        }
    </style>
@endsection
@section('content')
    <div class="">
        <div class="row theme">
            <div class="row theme">
                <div class="box-col-image">
                    <div class="preview-image" id="preview-image-box" style="background:url('/images/themes/assets/properties/theme-14/tbt.jpg');">
                        <div class="frame-box" id="frame-box">
                            <p id="frame-day"></p>
                            <p id="frame-hours"></p>
                            <p id="frame-price"></p>
                            <p id="frame-title-1"></p>
                            <p id="frame-title-2"></p>
                            <p id="frame-location"></p>
                            <img src="/images/themes/assets/properties/theme-14/tbt.png" id="frame-image" alt="">
                        </div>
                    </div>
                    <div class="preview d-none">
                        <img src="/images/themes/assets/properties/theme-14/tbt.jpg" id="person-image">
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
                                    <label for="">Day</label>
                                </div>
                                <div class="form-input">
                                    <input type="text" id="day" value=""
                                        onkeyup="valueChanged(this, 'frame-day')">
                                </div>
                            </div>
                            <div class="w-100 form-group">
                                <div class="form-label">
                                    <label for="">Hours</label>
                                </div>
                                <div class="form-input">
                                    <input type="text" id="hours" value="5:00 PM - 8:00 PM"
                                        onkeyup="valueChanged(this, 'frame-hours')">
                                </div>
                            </div>
                            <div class="w-100 form-group">
                                <div class="form-label">
                                    <label for="">Price</label>
                                </div>
                                <div class="form-input">
                                    <input type="text" id="price" value="$199,999"
                                        onkeyup="valueChanged(this, 'frame-price')">
                                </div>
                            </div>
                            <div class="w-100 form-group">
                                <div class="form-label">
                                    <label for="">Location</label>
                                </div>
                                <div class="form-input">
                                    <input type="text" id="location" value="6199 Sw 38th St, Miami, FL 33155"
                                        onkeyup="valueChanged(this, 'frame-location')">
                                </div>
                            </div>
                            <div class="w-100 form-group">
                                <div class="form-label">
                                    <label for="">Title 1</label>
                                </div>
                                <div class="form-input">
                                    <input type="text" id="title-1" value="BROKER'S"
                                        onkeyup="valueChanged(this, 'frame-title-1')">
                                </div>
                            </div>
                            <div class="w-100 form-group">
                                <div class="form-label">
                                    <label for="">Title 2</label>
                                </div>
                                <div class="form-input">
                                    <input type="text" id="title-2" value="OPEN HOUSE"
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
            $('#day').val(getDayName() + ', ' + getDateName())
            $('#frame-day').html($('#day').val())
            $('#frame-hours').html($('#hours').val())
            $('#frame-price').html($('#price').val())
            $('#frame-title-1').html($('#title-1').val())
            $('#frame-title-2').html($('#title-2').val())
            $('#frame-location').html($('#location').val())
        })

        function toggleFileInput() {
            $('#preview-image-input').click()
        }
        var oldBlob = '/images/themes/assets/properties/theme-14/tbt.jpg';

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

        function valueChanged(e, p_id) {
            $('#' + p_id).html(e.value)
        }
    </script>
@endsection
@endsection
