@extends('themes.layouts.app')
@section('title')
    Properties 8 -
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.9/cropper.css" />

    <style>
        #frame-location, #frame-title-1, #frame-title-2, #frame-day, #frame-date, #frame-hours, #frame-price {
            position: absolute;
            z-index: 999;
        }

        #frame-title-1 {
            left: 17px;
            top: 12px;
            font-size: 30px;
            color: #fff;
            text-transform: uppercase;
            font-family: 'AvenirBook';
            font-weight: normal;
            width: auto;
            letter-spacing: -1px;
            margin: 0;
        }
        #frame-title-2 {
            left: 14px;
            font-size: 56px;
            text-transform: uppercase;
            top: 32px;
            font-weight: 900;
            color: #000;
            letter-spacing: -3px;
            font-family: 'Avenir';
        }
        #frame-location {
            color: #fff;
            font-family: 'AvenirBook' !important;
            bottom: 22px;
            left: 33px;
            width: auto;
            font-size: 12px !important;
            font-weight: 100;
            text-transform: uppercase;
        }
        #frame-day {
            top: 20px;
            right: 11px;
            font-size: 18px;
            color: #fff;
            text-transform: uppercase;
            font-family: 'Lato';
        }
        #frame-date {
            top: 40px;
            right: 11px;
            font-size: 18px;
            color: #c4a567;
            text-transform: uppercase;
            font-family: 'Lato';
        }
        #frame-hours {
            right: 11px;
            top: 74px;
            font-size: 18px;
            color: #000;
            font-family: 'Lato';
        }
        #frame-price {
            bottom: 47px;
            left: 128px;
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
                    <div class="preview-image" id="preview-image-box" style="background:url('/images/themes/assets/properties/theme-8/tbt.jpg');">
                        <div class="frame-box" id="frame-box">
                            <p id="frame-day"></p>
                            <p id="frame-date"></p>
                            <p id="frame-hours"></p>
                            <p id="frame-price"></p>
                            <p id="frame-title-1"></p>
                            <p id="frame-title-2"></p>
                            <p id="frame-location"></p>
                            <img src="/images/themes/assets/properties/theme-8/tbt.png" id="frame-image" alt="">
                        </div>
                    </div>
                    <div class="preview d-none">
                        <img src="/images/themes/assets/properties/theme-8/tbt.jpg" id="person-image">
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
                                    <label for="">Date</label>
                                </div>
                                <div class="form-input">
                                    <input type="text" id="date" value=""
                                        onkeyup="valueChanged(this, 'frame-date')">
                                </div>
                            </div>
                            <div class="w-100 form-group">
                                <div class="form-label">
                                    <label for="">Hours</label>
                                </div>
                                <div class="form-input">
                                    <input type="text" id="hours" value="5:00 PM - 7:00 PM"
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
                                    <input type="text" id="location" value="12874 SW 283rd LAnE, Homestead, FL 33033"
                                        onkeyup="valueChanged(this, 'frame-location')">
                                </div>
                            </div>
                            <div class="w-100 form-group">
                                <div class="form-label">
                                    <label for="">Title 1</label>
                                </div>
                                <div class="form-input">
                                    <input type="text" id="title-1" value="OPEN"
                                        onkeyup="valueChanged(this, 'frame-title-1')">
                                </div>
                            </div>
                            <div class="w-100 form-group">
                                <div class="form-label">
                                    <label for="">Title 2</label>
                                </div>
                                <div class="form-input">
                                    <input type="text" id="title-2" value="HOUSE"
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
            $('#day').val(getDayName())
            $('#date').val(getDateName())
            $('#frame-day').html($('#day').val())
            $('#frame-date').html($('#date').val())
            $('#frame-hours').html($('#hours').val())
            $('#frame-price').html($('#price').val())
            $('#frame-title-1').html($('#title-1').val())
            $('#frame-title-2').html($('#title-2').val())
            $('#frame-location').html($('#location').val())
        })

        function toggleFileInput() {
            $('#preview-image-input').click()
        }
        var oldBlob = '/images/themes/assets/properties/theme-8/tbt.jpg';

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
