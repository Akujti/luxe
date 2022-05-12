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
                                    <div>
                                        <div>
                                            <p id="date">THURSDAY, SEPTEMBER 6TH</p>
                                            <p id="time">2018 | 6:00PM - 8:00PM</p>
                                        </div>
                                        <div>
                                            <p></p>
                                            <p></p>
                                            <p></p>
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
                                            <p>$1,799,999</p>
                                        </div>
                                    </div>
                                    <div class="bullet">
                                        <div class="bullet-ul">
                                            <div>
                                                <ul></ul>
                                            </div>
                                        </div>
                                        <div class="description">
                                            <p id="desc-title"></p>
                                            <p id="desc-body"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="frame-box" id="frame-box">
                               
                            </div>
                        </div>
                    </div>
                    <div class="preview d-none">
                        <img src="/images/themes/assets/properties/theme-13/bg.jpg" id="person-image">
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

                        

                        <div class="row theme">
                            <div class="w-100 form-group">
                                <div class="form-label">
                                    <label for="">Title</label>
                                </div>

                                <div class="form-input">
                                    <input type="text" id="title-1-input" value="BROKERS"
                                        onkeyup="valueChanged(this, 'frame-title-1')">
                                </div>
                                <div class="form-input" style="margin-top:5px;">
                                    <input type="text" id="title-2-input" value="OPEN HOUSE"
                                        onkeyup="valueChanged(this, 'frame-title-2')">
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

                            
                        </div>
                    </div>
                    <div class="box-tools">
                        <div class="row theme">
                            <div class="w-100 form-group mt-0">
                                <div class="form-label">
                                    <label for="">Price</label>
                                </div>
                                <div class="form-input">
                                    <input type="text" id="price" value="$1,799,999"
                                        onkeyup="valueChanged(this, 'frame-name')">
                                </div>
                            </div>
                            <div class="w-100 form-group mt-0">
                                <div class="form-label">
                                    <label for="">Bullet Points</label>
                                </div>
                                <div class="form-input">
                                    <textarea id="bullet-points" rows="6"
                                        onkeyup="valueChanged(this, 'frame-name')">5 Oversized Modern Bedrooms
5 Bath</textarea>
                                </div>
                            </div>
                            <div class="w-100 form-group mt-0">
                                <div class="form-label">
                                    <label for="">Name</label>
                                </div>
                                <div class="form-input">
                                    <input type="text" id="name" value="Agent Name"
                                        onkeyup="valueChanged(this, 'frame-name')">
                                </div>
                            </div>
                            <div class="w-100 form-group">
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
                                    <label for="">Website</label>
                                </div>
                                <div class="form-input">
                                    <input type="text" id="email" value="www.LUXEknows.com"
                                        onkeyup="valueChanged(this, 'frame-email span')">
                                </div>
                            </div>
                            <div class="w-100 form-group">
                                <div class="form-label">
                                    <label for="">Title</label>
                                </div>
                                <div class="form-input">
                                    <input type="text" id="desc-title-input" value="MODERN & SLEEK NEW
CONSTRUCTION CUSTOM STATE"
                                        onkeyup="valueChanged(this, 'frame-email span')">
                                </div>
                            </div>

                            <div class="w-100 form-group">
                                <div class="form-label">
                                    <label for="">Description</label>
                                </div>
                                <div class="form-input">
                                    <textarea id="desc-body-input" rows="6"
                                        onkeyup="valueChanged(this, 'frame-email span')">Historic Victoria Park for those who appreciate the finer things in life.Complete smart home including automated lighting, audio, AC, alarm and security camera system. Grand livings areas with open layout and large windows allow.</textarea>
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
                $(".preview").toggleClass('d-none')
                cropper = new Cropper(image, {
                    aspectRatio: 32 / 19,
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
        var oldBlob1 = '/images/themes/assets/properties/theme-12/img-1.png';

        function onFileChanged1(e) {
            const [file] = e.files
            if (file) {
                $('#person-image-1').attr("src", URL.createObjectURL(file));
                $('.div-img-1').css('background-image', 'url(' + URL.createObjectURL(file) + ')');
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
                $(".preview").toggleClass('d-none')
                cropper1 = new Cropper(image, {
                    aspectRatio: 19 / 11,
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
                $('.div-img-1').css('background-image', 'url(' + URL.createObjectURL(blob) + ')');
                $('#person-image-1').attr('src', URL.createObjectURL(blob))
            });
            cropper1.destroy()
            $('#preview-image-box').css('display', 'flex')
            $(".preview").toggleClass('d-none')
        }

        function reverse_default1() {
            $('#person-image-1').attr('src', oldBlob1)
            $('.div-img-1').css('background-image', 'url(' + oldBlob1 + ')');
        }

        // image 2

        function toggleFileInput2() {
            $('#preview-image-input-2').click()
        }
        var oldBlob2 = '/images/themes/assets/properties/theme-12/img-2.png';

        function onFileChanged2(e) {
            const [file] = e.files
            if (file) {
                $('#person-image-2').attr("src", URL.createObjectURL(file));
                $('.div-img-2').css('background-image', 'url(' + URL.createObjectURL(file) + ')');
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
                $(".preview").toggleClass('d-none')
                cropper2 = new Cropper(image, {
                    aspectRatio: 19 / 11,
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
                $('.div-img-2').css('background-image', 'url(' + URL.createObjectURL(blob) + ')');
                $('#person-image-2').attr('src', URL.createObjectURL(blob))
            });
            cropper2.destroy()
            $('#preview-image-box').css('display', 'flex')
            $(".preview").toggleClass('d-none')
        }

        function reverse_default2() {
            $('#person-image-2').attr('src', oldBlob2)
            $('.div-img-2').css('background-image', 'url(' + oldBlob2 + ')');
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
