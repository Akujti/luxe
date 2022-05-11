@extends('themes.layouts.app')
@section('title')
    Properties 10 -
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('css/theme/quotes-theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/theme/properties-theme.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.9/cropper.css" />
    <style>
        .preview {
            width: 456px;
            height: 584px;
        }
        .preview-image {
            width: 456px !important;
            height: 584px !important;
            margin: auto;
        }
        #preview-image-box {
            width: 456px !important;
            height: 584px !important;
            padding:7px;
        }
        .bottom-details {
            background: none !important;
        }
        .inner-image {
            top: 84px;
            height: 500px !important;
        }
        .right-details {
            bottom: 10px !important;
            height: 104px;
            background: none;
            color: #fff;
            padding: 0px !important;
            padding: 5px;
        }
        .left-details {
            background: #fff !important;
            left:  10px;
            border-right: none !important;
            bottom: 10px !important;
            height: 104px;
        }
        #address-static, #frame-phone, #frame-email {
            color: #000 !important;
        }
        #frame-name {
            padding-top: 13px;
        }
    </style>
@endsection
@section('content')
    <div class="">
        <div class="row theme">
            <div class="row theme">
                <div class="box-col-image">
                    <div id="preview-image-box">
                        <div class="preview-image">
                            <div class="inner-image" style="background:url('/images/themes/assets/properties/theme-10/tbt.jpg');"></div>
                            <div class="frame-box" id="frame-box">
                                <div class="top-details">
                                    <div class="logo-top">
                                        <img id="logo" src="/images/themes/assets/properties/theme-9/logo.png" alt="">
    
                                    </div>
                                    <div class="title-top">
                                        <p id="frame-title-1"></p>
                                        <p id="frame-title-2"></p>
                                    </div>
                                </div>
    
                                <div class="bottom-details">
                                    <div class="together">
                                        <div class="left-details">
                                            <p id="frame-name"></p>
                                            <p id="address-static">Realtor, LUXE Properties LLC</p>
                                            <p id="frame-phone">
                                                <img src="/images/themes/assets/properties/theme-9/phone-solid.png" alt="">
                                                <span></span>
                                            </p>
                                            <p id="frame-email">
                                                <img src="/images/themes/assets/properties/theme-9/mail-solid.png" alt="">
                                                <span></span>
                                            </p>
                                        </div>
                                        <div class="right-details">
                                            <p id="frame-address"></p>
                                            <p id="frame-city"></p>,
                                            <p id="frame-state"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="preview d-none">
                        <img src="/images/themes/assets/properties/theme-10/tbt.jpg" id="person-image">
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

                            <div class="w-100 form-group">
                                <div class="form-label">
                                    <label for="">Name</label>
                                </div>
                                <div class="form-input">
                                    <input type="text" id="name" value="Agent Name"
                                        onkeyup="valueChanged(this, 'frame-name')">
                                    <select name="" id="name-font" onchange="changeFont('frame-name', 'name-font')">
                                        <option value="10px">10px</option>
                                        <option value="12px">12px</option>
                                        <option value="14px">14px</option>
                                        <option value="16px">16px</option>
                                        <option value="18px">18px</option>
                                        <option value="20px" selected="selected">20px</option>
                                        <option value="22px">22px</option>
                                    </select>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-tools">
                        <div class="row theme">
                            <div class="w-100 form-group mt-0">
                                <div class="form-label">
                                    <label for="">Phone Number</label>
                                </div>
                                <div class="form-input">
                                    <input type="text" id="phone" value="(XXX) XXX-XXXX"
                                        onkeyup="valueChanged(this, 'frame-phone span')">
                                </div>
                            </div>
                            <div class="w-100 form-group">
                                <div class="form-label">
                                    <label for="">Email</label>
                                </div>
                                <div class="form-input">
                                    <input type="text" id="email" value="email@luxeknows.com"
                                        onkeyup="valueChanged(this, 'frame-email span')">
                                </div>
                            </div>
                            <div class="w-100 form-group">
                                <div class="form-label">
                                    <label for="">Address</label>
                                </div>
                                <div class="form-input">
                                    <input type="text" id="address" value="449 NE 17th WAY"
                                        onkeyup="valueChanged(this, 'frame-address')">
                                </div>
                            </div>
                            <div class="w-100 form-group">
                                <div class="form-label">
                                    <label for="">City</label>
                                </div>
                                <div class="form-input">
                                    <input type="text" id="city" value="Fort Lauderdale"
                                        onkeyup="valueChanged(this, 'frame-city')">
                                </div>
                            </div>
                            <div class="w-100 form-group">
                                <div class="form-label">
                                    <label for="">State & Zip</label>
                                </div>
                                <div class="form-input">
                                    <input type="text" id="state" value="FL 33301"
                                        onkeyup="valueChanged(this, 'frame-state')">
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
            $('#frame-name').html($('#name').val())
            $('#frame-phone span').html($('#phone').val())
            $('#frame-email span').html($('#email').val())
            $('#frame-address').html($('#address').val())
            $('#frame-city').html($('#city').val())
            $('#frame-state').html($('#state').val())
        })

        function toggleFileInput() {
            $('#preview-image-input').click()
        }
        var oldBlob = '/images/themes/assets/properties/theme-10/tbt.jpg';

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
                $("#preview-image-box").css("display", "none");
                $(".preview").toggleClass('d-none')
                cropper = new Cropper(image, {
                    aspectRatio: 577 / 601,
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
            $('#preview-image-box').css('display', 'flex')
            $(".preview").toggleClass('d-none')
        }

        function reverse_default() {
            $('#person-image').attr('src', oldBlob)
            $('.inner-image').css('background-image', 'url(' + oldBlob + ')');
        }

        function valueChanged(e, p_id) {
            $('#' + p_id).html(e.value)
        }

        function changeFont(text_id, select_id) {
            var size = $("#" + select_id).val()
           
            $("#" + text_id).css('font-size', size)
        }
    </script>
@endsection
@endsection
