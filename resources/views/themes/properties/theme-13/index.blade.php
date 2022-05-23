@extends('themes.layouts.app')
@section('title')
    Properties 13 -
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('css/theme/quotes-theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/theme/properties-theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/theme/properties-theme-13.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.9/cropper.css" />
@endsection
@section('content')
    <div class="">
        <div class="row theme">
            <div class="row theme">
                <div class="box-col-image">
                    <div id="preview-image-box">
                        <div class="preview-image">
                            <div class="header-text">
                                <div class="header-left">
                                    <p id="title-1"></p>
                                    <p id="title-2"></p>
                                </div>
                                <div class="header-right">
                                    <div class="header-right-details">
                                        <div class="long-date">
                                            <div>
                                                <p id="date">THURSDAY, SEPTEMBER 6TH</p>
                                                <p id="time">2018 | 6:00PM - 8:00PM</p>
                                            </div>
                                        </div>
                                        <div class="long-address">
                                            <div>
                                                <p id="address"></p>
                                                <p id="city"></p>,
                                                <p id="state"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-images">
                                <div class="inner-image" style="background:url('/images/themes/assets/properties/theme-13/bg.jpg');"></div>
                                <div class="two-image">
                                    <div class="inner-image1" style="background:url('/images/themes/assets/properties/theme-13/img-1.jpg');"></div>
                                    <div class="inner-image2" style="background:url('/images/themes/assets/properties/theme-13/img-2.jpg');"></div>
                                </div>
                                <div class="image-bullet">
                                    <div class="image-price">
                                        <div class="inner-image3" style="background:url('/images/themes/assets/properties/theme-13/img-3.jpg');"></div>
                                        <div class="price-box">
                                            OFFERED AT
                                            <p id="price"></p>
                                        </div>
                                        <div class="contact-details">
                                            <p id="name"></p>
                                            <p id="address-static">Realtor, LUXE Properties LLC</p>
                                            <p id="phone"><img src="/images/themes/assets/properties/theme-13/phone-white.png" alt=""> <span></span></p>
                                            <p id="email"><img src="/images/themes/assets/properties/theme-13/mail-white.png" alt=""> <span></span></p>
                                            <p id="website"><img src="/images/themes/assets/properties/theme-13/link-white.png" alt=""> <span></span></p>
                                            <p id="location-static"><img src="/images/themes/assets/properties/theme-13/map-location-white.png" alt=""> 55 Merrick Way #402, Coral Gables, FL 33134</p>
                                        </div>
                                    </div>
                                    <div class="bullet">
                                        <div class="bullet-ul">
                                            <div class="bullet-div">
                                                <div class="bullet-bg">
                                                    <ul></ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="description">
                                            <p id="desc-title"></p>
                                            <p id="desc-body"></p>
                                        </div>
                                        <div class="logo">
                                            <img src="/images/themes/assets/properties/theme-13/logo.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="preview d-none">
                        <img src="/images/themes/assets/properties/theme-13/bg.jpg" id="person-image">
                        <img src="/images/themes/assets/properties/theme-13/img-1.jpg" id="person-image-1">
                        <img src="/images/themes/assets/properties/theme-13/img-2.jpg" id="person-image-2">
                        <img src="/images/themes/assets/properties/theme-13/img-3.jpg" id="person-image-3">
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
                                        <label for="">Image 1</label>
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
                        <div class="w-100">
                            <div class="row theme">
                                <div class="form-group w-100 mt-0">
                                    <div class="form-label">
                                        <label for="">Image 2</label>
                                    </div>
                                </div>
                                <input type="file" name="file" id="preview-image-input-2" onchange="onFileChanged2(this)"
                                    style="display: none;">
                                <div class="file-input-wrapper">
                                    <button type="button" class="" onclick="toggleFileInput2()">Choose
                                        image</button>
                                    <button type="button" class="w-auto"
                                        onclick="startCropper2('preview-image-input-2')">Crop</button>
                                    <button type="button" class="" onclick="save_crop2()">Save Crop</button>
                                    <button type="button" class=""
                                        onclick="reverse_default2()">Default</button>
                                </div>
                            </div>
                        </div>
                        <div class="w-100">
                            <div class="row theme">
                                <div class="form-group w-100 mt-0">
                                    <div class="form-label">
                                        <label for="">Image 3</label>
                                    </div>
                                </div>
                                <input type="file" name="file" id="preview-image-input-3" onchange="onFileChanged3(this)"
                                    style="display: none;">
                                <div class="file-input-wrapper">
                                    <button type="button" class="" onclick="toggleFileInput3()">Choose
                                        image</button>
                                    <button type="button" class="w-auto"
                                        onclick="startCropper3('preview-image-input-3')">Crop</button>
                                    <button type="button" class="" onclick="save_crop3()">Save Crop</button>
                                    <button type="button" class=""
                                        onclick="reverse_default3()">Default</button>
                                </div>
                            </div>
                        </div>

                        

                        <div class="row theme">
                            <div class="w-100 form-group">
                                <div class="form-label">
                                    <label for="">Title</label>
                                </div>

                                <div class="form-input">
                                    <input type="text" id="title-1-input" value="BROKERS"
                                        onkeyup="valueChanged(this, 'title-1')">
                                </div>
                                <div class="form-input" style="margin-top:5px;">
                                    <input type="text" id="title-2-input" value="OPEN HOUSE"
                                        onkeyup="valueChanged(this, 'title-2')">
                                </div>
                            </div>

                            <div class="w-100 form-group">
                                <div class="form-label">
                                    <label for="">Address</label>
                                </div>
                                <div class="form-input">
                                    <input type="text" id="address-input" value="449 NE 17th WAY"
                                        onkeyup="valueChanged(this, 'address')">
                                </div>
                            </div>
                            <div class="w-100 form-group">
                                <div class="form-label">
                                    <label for="">City</label>
                                </div>
                                <div class="form-input">
                                    <input type="text" id="city-input" value="Fort Lauderdale"
                                        onkeyup="valueChanged(this, 'city')">
                                </div>
                            </div>
                            <div class="w-100 form-group">
                                <div class="form-label">
                                    <label for="">State & Zip</label>
                                </div>
                                <div class="form-input">
                                    <input type="text" id="state-input" value="FL 33301"
                                        onkeyup="valueChanged(this, 'state')">
                                </div>
                            </div>

                            
                        </div>
                    </div>
                    <div class="box-tools">
                        <div class="row theme">
                            <div class="w-100 form-group mt-0">
                                <div class="form-label">
                                    <label for="">Long Date</label>
                                </div>
                                <div class="form-input">
                                    <input type="text" id="date-input" value="THURSDAY, SEPTEMBER 6TH"
                                        onkeyup="valueChanged(this, 'date')">
                                </div>
                            </div>
                            <div class="w-100 form-group mt-0">
                                <div class="form-label">
                                    <label for="">Long Time</label>
                                </div>
                                <div class="form-input">
                                    <input type="text" id="time-input" value="2022 | 6:00PM - 8:00PM"
                                        onkeyup="valueChanged(this, 'time')">
                                </div>
                            </div>
                            <div class="w-100 form-group mt-0">
                                <div class="form-label">
                                    <label for="">Price</label>
                                </div>
                                <div class="form-input">
                                    <input type="text" id="price-input" value="$1,799,999"
                                        onkeyup="valueChanged(this, 'price')">
                                </div>
                            </div>
                            <div class="w-100 form-group mt-0">
                                <div class="form-label">
                                    <label for="">Bullet Points</label>
                                </div>
                                <div class="form-input">
                                    <textarea id="bullet-points" rows="6"
                                        onkeyup="textareaChanged(this)">5 Oversized Modern Bedrooms
5 Bath</textarea>
                                </div>
                            </div>
                            <div class="w-100 form-group mt-0">
                                <div class="form-label">
                                    <label for="">Name</label>
                                </div>
                                <div class="form-input">
                                    <input type="text" id="name-input" value="Agent Name"
                                        onkeyup="valueChanged(this, 'name')">
                                </div>
                            </div>
                            <div class="w-100 form-group">
                                <div class="form-label">
                                    <label for="">Phone Number</label>
                                </div>
                                <div class="form-input">
                                    <input type="text" id="phone-input" value="(XXX) XXX-XXXX"
                                        onkeyup="valueChanged(this, 'phone span')">
                                </div>
                            </div>
                            <div class="w-100 form-group">
                                <div class="form-label">
                                    <label for="">Email</label>
                                </div>
                                <div class="form-input">
                                    <input type="text" id="email-input" value="zara@luxeknows.com"
                                        onkeyup="valueChanged(this, 'email span')">
                                </div>
                            </div>
                            <div class="w-100 form-group">
                                <div class="form-label">
                                    <label for="">Website</label>
                                </div>
                                <div class="form-input">
                                    <input type="text" id="website-input" value="www.LUXEknows.com"
                                        onkeyup="valueChanged(this, 'website span')">
                                </div>
                            </div>
                            <div class="w-100 form-group">
                                <div class="form-label">
                                    <label for="">Description</label>
                                </div>
                                <div class="form-input">
                                    <input type="text" id="desc-title-input" value="MODERN & SLEEK NEW
CONSTRUCTION CUSTOM STATE"
                                        onkeyup="valueChanged(this, 'desc-title')">
                                </div>
                                <div class="form-input" style="margin-top: 5px;">
                                    <textarea id="desc-body-input" rows="6"
                                        onkeyup="valueChanged(this, 'desc-body')">Historic Victoria Park for those who appreciate the finer things in life.Complete smart home including automated lighting, audio, AC, alarm and security camera system. Grand livings areas with open layout and large windows allow.</textarea>
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
            $('#title-1').html($('#title-1-input').val())
            $('#title-2').html($('#title-2-input').val())
            $('#desc-title').html($('#desc-title-input').val())
            $('#desc-body').html($('#desc-body-input').val())
            $('#address').html($('#address-input').val())
            $('#city').html($('#city-input').val())
            $('#state').html($('#state-input').val())
            $('#date').html($('#date-input').val())
            $('#time').html($('#time-input').val())
            $('#price').html($('#price-input').val())
            $('#name').html($('#name-input').val())
            $('#phone span').html($('#phone-input').val())
            $('#email span').html($('#email-input').val())
            $('#website span').html($('#website-input').val())
            

            var str = $('#bullet-points').val()
            const li = str.split(/\r?\n/)

            for(let i = 0; i < li.length; i++) {
                $('.bullet-ul ul').append('<li class="image-li">' + li[i] + '</li>')
            }
        })

        function toggleFileInput() {
            $('#preview-image-input').click()
        }
        var oldBlob = '/images/themes/assets/properties/theme-12/bg.png';

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
                $("#person-image-1").css("display", "none");
                $("#person-image-2").css("display", "none");
                $("#person-image-3").css("display", "none");
                $(".preview").toggleClass('d-none')
                cropper = new Cropper(image, {
                    aspectRatio: 401 / 163,
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

        // image 1 

        function toggleFileInput1() {
            $('#preview-image-input-1').click()
        }
        var oldBlob1 = '/images/themes/assets/properties/theme-13/img-1.jpg';

        function onFileChanged1(e) {
            const [file] = e.files
            if (file) {
                $('#person-image-1').attr("src", URL.createObjectURL(file));
                $('.inner-image1').css('background-image', 'url(' + URL.createObjectURL(file) + ')');
                oldBlob1 = URL.createObjectURL(file)
            }
        }
        var cropper1;

        function startCropper1(input) {
            if (document.getElementById(input).files.length) {
                var image = document.getElementById("person-image-1");
                $("#preview-image-box").css("display", "none");
                $("#person-image").css("display", "none");
                $("#person-image-2").css("display", "none");
                $("#person-image-3").css("display", "none");
                $(".preview").toggleClass('d-none')
                cropper1 = new Cropper(image, {
                    aspectRatio: 49 / 17,
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
                $('.inner-image1').css('background-image', 'url(' + URL.createObjectURL(blob) + ')');
                $('#person-image-1').attr('src', URL.createObjectURL(blob))
            });
            cropper1.destroy()
            $('#preview-image-box').css('display', 'flex')
            $(".preview").toggleClass('d-none')
        }

        function reverse_default1() {
            $('#person-image-1').attr('src', oldBlob1)
            $('.inner-image1').css('background-image', 'url(' + oldBlob1 + ')');
        }

        // image 2

        function toggleFileInput2() {
            $('#preview-image-input-2').click()
        }
        var oldBlob2 = '/images/themes/assets/properties/theme-13/img-2.jpg';

        function onFileChanged2(e) {
            const [file] = e.files
            if (file) {
                $('#person-image-2').attr("src", URL.createObjectURL(file));
                $('.inner-image2').css('background-image', 'url(' + URL.createObjectURL(file) + ')');
                oldBlob2 = URL.createObjectURL(file)
            }
        }
        var cropper2;

        function startCropper2(input) {
            if (document.getElementById(input).files.length) {
                var image = document.getElementById("person-image-2");
                $("#preview-image-box").css("display", "none");
                $("#person-image").css("display", "none");
                $("#person-image-1").css("display", "none");
                $("#person-image-3").css("display", "none");
                $(".preview").toggleClass('d-none')
                cropper2 = new Cropper(image, {
                    aspectRatio: 49 / 17,
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

        function save_crop2() {
            cropper2.getCroppedCanvas().toBlob((blob) => {
                $('.inner-image2').css('background-image', 'url(' + URL.createObjectURL(blob) + ')');
                $('#person-image-2').attr('src', URL.createObjectURL(blob))
            });
            cropper2.destroy()
            $('#preview-image-box').css('display', 'flex')
            $(".preview").toggleClass('d-none')
        }

        function reverse_default2() {
            $('#person-image-2').attr('src', oldBlob2)
            $('.inner-image2').css('background-image', 'url(' + oldBlob2 + ')');
        }

        // image 3

        function toggleFileInput3() {
            $('#preview-image-input-3').click()
        }
        var oldBlob2 = '/images/themes/assets/properties/theme-13/img-3.jpg';

        function onFileChanged3(e) {
            const [file] = e.files
            if (file) {
                $('#person-image-3').attr("src", URL.createObjectURL(file));
                $('.inner-image3').css('background-image', 'url(' + URL.createObjectURL(file) + ')');
                oldBlob3 = URL.createObjectURL(file)
            }
        }
        var cropper3;

        function startCropper3(input) {
            if (document.getElementById(input).files.length) {
                var image = document.getElementById("person-image-3");
                $("#preview-image-box").css("display", "none");
                $("#person-image").css("display", "none");
                $("#person-image-1").css("display", "none");
                $("#person-image-2").css("display", "none");
                $(".preview").toggleClass('d-none')
                cropper3 = new Cropper(image, {
                    aspectRatio: 49 / 17,
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

        function save_crop3() {
            cropper3.getCroppedCanvas().toBlob((blob) => {
                $('.inner-image3').css('background-image', 'url(' + URL.createObjectURL(blob) + ')');
                $('#person-image-3').attr('src', URL.createObjectURL(blob))
            });
            cropper3.destroy()
            $('#preview-image-box').css('display', 'flex')
            $(".preview").toggleClass('d-none')
        }

        function reverse_default3() {
            $('#person-image-3').attr('src', oldBlob3)
            $('.inner-image3').css('background-image', 'url(' + oldBlob3 + ')');
        }

        function valueChanged(e, p_id) {
            $('#' + p_id).html(e.value)
        }

        function changeFont(text_id, select_id) {
            var size = $("#" + select_id).val()
           
            $("#" + text_id).css('font-size', size)
        }

        function textareaChanged(e) {
            var str = $('.bullet-ul ul').empty()
            const li = e.value.split(/\r?\n/)

            for(let i = 0; i < li.length; i++) {
                $('.bullet-ul ul').append('<li class="image-li">' + li[i] + '</li>')
            }
        }
    </script>
@endsection
@endsection
