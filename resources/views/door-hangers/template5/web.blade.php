@extends('themes.layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/theme/door-hangers.css') }}" />
<link rel="stylesheet" href="{{ asset('css/theme/door-hanger-template-5.css') }}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.9/cropper.css" />

<style>

    @media (max-width: 1230px){
        .box-col-tools {
            flex-wrap: wrap;
            width: 350px !important;
            height: 1100px !important;
        }
    }
    .box-col-tools {
        width: 800px;
    }
    
</style>
@endsection
@section('content')
    <div class="d-flex justify-content-start" style="padding: 10px;">
        <div class="all-pages" id="el">
            <div class="div">
                <div class="items" id="item-1">
                    <img src="/images/themes/assets/door-hangers/template5/frame.png" id="frame" alt="">
                    <img src="/images/themes/assets/door-hangers/template5/bg-avatar.png" id="bg-avatar" alt="">
                    <div class="avatar" id="avatar-1" style="background: url('/images/themes/assets/door-hangers/template5/avatar.png');"></div>
                    <div class="name">
                        <p id="fname"></p>
                        <p id="lname"></p>
                    </div>
                    <div class="ul">
                        <div class="ul-title">
                            <p id="title-1"></p>
                            <p id="title-2"></p>
                        </div>
                        <ul>
                            <li>
                                <img src="/images/themes/assets/door-hangers/template5/icon-1.png" alt="">
                                <span id="list-1"></span>
                            </li>
                            <li>
                                <img src="/images/themes/assets/door-hangers/template5/icon-2.png" alt="">
                                <span id="list-2"></span>
                            </li>
                            <li>
                                <img src="/images/themes/assets/door-hangers/template5/icon-3.png" alt="">
                                <span id="list-3"></span>
                            </li>
                            <li>
                                <img src="/images/themes/assets/door-hangers/template5/icon-4.png" alt="">
                                <span id="list-4"></span>
                            </li>
                            <li>
                                <img src="/images/themes/assets/door-hangers/template5/icon-5.png" alt="">
                                <span id="list-5"></span>
                            </li>
                            <li>
                                <img src="/images/themes/assets/door-hangers/template5/icon-6.png" alt="">
                                <span id="list-6"></span>
                            </li>
                            <li>
                                <img src="/images/themes/assets/door-hangers/template5/icon-7.png" alt="">
                                <span id="list-7"></span>
                            </li>
                        </ul>
                        <div class="ul-footer">
                            <p id="phone"></p>
                            <p id="email"></p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="page_break"></div>
            <div class="div">
                <div class="items" id="item-2">
                    <div id="img-1" style="background: url('/images/themes/assets/door-hangers/template5/img-1.png')"></div>
                    <img src="/images/themes/assets/door-hangers/template5/img-2.png" id="img-2" alt="">
                    <img src="/images/themes/assets/door-hangers/template5/img-3.png" id="img-3" alt="">
                    <div class="list">
                        <p id="list-1-two"></p>
                        <p id="list-2-two"></p>
                        <p id="list-3-two"></p>
                        <div class="ul-footer">
                            <p id="website"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-inputs">
            
            
            <div class="box-col-tools" style="height:950px">
                <div class="box-tools">
                    <div class="w-100">
                        <div class="row theme">
                            <div class="form-group w-100 mt-0">
                                <div class="form-label">
                                    <label for="">Avatar Image</label>
                                </div>
                            </div>
                            <input type="file" name="file" id="preview-image-input" onchange="onFileChanged(this)"
                                style="display: none;">
                            <div class="file-input-wrapper">
                                <button type="button" class="" onclick="toggleFileInput()">Choose
                                    image</button>
                                <button type="button" class="w-auto"
                                    onclick="startCropper('preview-image-input')">Crop</button>
                                <button type="button" class=""
                                    onclick="reverse_default()">Default</button>
                            </div>
                        </div>
                    </div>

                    <div class="row theme">
                        <div class="w-100 form-group">
                            <div class="form-label">
                                <label for="">Full Name</label>
                            </div>

                            <div class="form-input">
                                <input type="text" id="fname-input" value="Denisse"
                                    onkeyup="valueChanged(this, 'fname')">
                            </div>
                            <div class="form-input mt-1">
                                <input type="text" id="lname-input" value="Uyema"
                                    onkeyup="valueChanged(this, 'lname')">
                            </div>
                        </div>
                       
                        <div class="w-100 form-group">
                            <div class="form-label">
                                <label for="">Title</label>
                            </div>
                            <div class="form-input">
                                <input type="text" id="title-1-input" value="EXCLUSIVE"
                                    onkeyup="valueChanged(this, 'title-1')">
                                
                            </div>
                            <div class="form-input mt-1">
                                <input type="text" id="title-2-input" value="SERVICES OFFERED"
                                    onkeyup="valueChanged(this, 'title-2')">
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-tools">
                    <div class="row theme">
                        <div class="w-100 form-group mt-0">
                            <div class="form-label">
                                <label for="">List</label>
                            </div>
                            <div class="form-input">
                                <input type="text" id="list-1-input" value="Complimentary Home Evaluation"
                                    onkeyup="valueChanged(this, 'list-1')">
                            </div>
                            <div class="form-input mt-1">
                                <input type="text" id="list-2-input" value="Personal Service"
                                    onkeyup="valueChanged(this, 'list-2')">
                            </div>
                            <div class="form-input mt-1">
                                <input type="text" id="list-3-input" value="Listings Include Professional Photography & Video"
                                    onkeyup="valueChanged(this, 'list-3')">
                            </div>
                            <div class="form-input mt-1">
                                <input type="text" id="list-4-input" value="Technology Driven Selling Process"
                                    onkeyup="valueChanged(this, 'list-4')">
                            </div>
                            <div class="form-input mt-1">
                                <input type="text" id="list-5-input" value="Professional Negotiator For Top Dollar"
                                    onkeyup="valueChanged(this, 'list-5')">
                            </div>
                            <div class="form-input mt-1">
                                <input type="text" id="list-6-input" value="Constant Feedback & Maximum Exposure Until Sold"
                                    onkeyup="valueChanged(this, 'list-6')">
                            </div>
                            <div class="form-input mt-1">
                                <input type="text" id="list-7-input" value="Representing Your Best Interest"
                                    onkeyup="valueChanged(this, 'list-7')">
                            </div>

                        </div>
                        
                        <div class="w-100 form-group">
                            <div class="form-label">
                                <label for="">Number</label>
                            </div>
                            <div class="form-input">
                                <input type="text" id="phone-input" value="(305) 709-1888"
                                    onkeyup="valueChanged(this, 'phone')">
                            </div>
                        </div>
                        <div class="w-100 form-group">
                            <div class="form-label">
                                <label for="">Email</label>
                            </div>
                            <div class="form-input">
                                <input type="text" id="email-input" value="wesley@luxeknows.com"
                                    onkeyup="valueChanged(this, 'email')">
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="box-col-tools" style="width:350px;">
                <div class="box-tools">
                    <div class="w-100">
                        <div class="row theme">
                            <div class="form-group w-100 mt-0">
                                <div class="form-label">
                                    <label for="">Background Image</label>
                                </div>
                            </div>
                            <input type="file" name="file" id="preview-image-input-1" onchange="onFileChanged1(this)"
                                style="display: none;">
                            <div class="file-input-wrapper">
                                <button type="button" class="" onclick="toggleFileInput1()">Choose
                                    image</button>
                                <button type="button" class="w-auto"
                                    onclick="startCropper1('preview-image-input-1')">Crop</button>
                                <button type="button" class=""
                                    onclick="reverse_default1()">Default</button>
                            </div>
                        </div>
                    </div>

                    <div class="row theme">
                        <div class="w-100 form-group">
                            <div class="form-label">
                                <label for="">List</label>
                            </div>

                            <div class="form-input">
                                <input type="text" id="list-1-two-input" value="Stop."
                                    onkeyup="valueChanged(this, 'list-1-two')">
                            </div>
                            <div class="form-input mt-1">
                                <input type="text" id="list-2-two-input" value="Collaborate, and"
                                    onkeyup="valueChanged(this, 'list-2-two')">
                            </div>
                            <div class="form-input mt-1">
                                <input type="text" id="list-3-two-input" value="List it."
                                    onkeyup="valueChanged(this, 'list-3-two')">
                            </div>
                        </div>
                       
                        <div class="w-100 form-group">
                            <div class="form-label">
                                <label for="">Website</label>
                            </div>
                            <div class="form-input">
                                <input type="text" id="website-input" value="www.luxeknows.com"
                                    onkeyup="valueChanged(this, 'website')">
                                
                            </div>
                        </div>

                        <button class="btn-luxe" type="button" onclick="generatePDF()">Generate</button>

                    </div>
                </div>
            </div>
        </div>
    </div>

@include('door-hangers.template5.cropper')
@section('js')
<script>
    $(document).ready(function() {
        $('#title-1').html($('#title-1-input').val())
        $('#title-2').html($('#title-2-input').val())
        $('#fname').html($('#fname-input').val())
        $('#lname').html($('#lname-input').val())
        $('#phone').html($('#phone-input').val())
        $('#email').html($('#email-input').val())
        $('#list-1').html($('#list-1-input').val())
        $('#list-2').html($('#list-2-input').val())
        $('#list-3').html($('#list-3-input').val())
        $('#list-4').html($('#list-4-input').val())
        $('#list-5').html($('#list-5-input').val())
        $('#list-6').html($('#list-6-input').val())
        $('#list-7').html($('#list-7-input').val())

        $('#list-1-two').html($('#list-1-two-input').val())
        $('#list-2-two').html($('#list-2-two-input').val())
        $('#list-3-two').html($('#list-3-two-input').val())
        $('#website').html($('#website-input').val())
    })

    function valueChanged(e, p_id) {
        $('#' + p_id).html(e.value)
    }

    function toggleFileInput() {
        $('#preview-image-input').click()
    }
    var oldBlob = '/images/themes/assets/door-hangers/template5/avatar.png';
    var image_src;
    function onFileChanged(e) {
        const [file] = e.files
        if (file) {
            $('#preview-image').attr("src", URL.createObjectURL(file));
            $('#avatar-1').css('background-image', 'url(' + URL.createObjectURL(file) + ')');
            oldBlob = URL.createObjectURL(file)
            image_src = URL.createObjectURL(file)
            if(cropper1) {
                cropper1.destroy()
            }
        }
    }
    var cropper;
    function startCropper(input) {
        if (document.getElementById(input).files.length) {
            $('#myModal').css('display', 'block')
            $('#preview-image').attr('src', image_src)
            var image = document.getElementById("preview-image");
            cropper = new Cropper(image, {
                aspectRatio: 145 / 145,
                viewMode: 1,
                dragMode: 'move',
                autoCropArea: 1,
                restore: false,
                guides: false,
                center: false,
                highlight: false,
            });
        }
        document.getElementById( "btn-save" ).setAttribute( "onClick", "save_crop();" );
    }
    function save_crop() {
        cropper.getCroppedCanvas().toBlob((blob) => {
            $('#avatar-1').css('background-image', 'url(' + URL.createObjectURL(blob) + ')');
            $('#preview-image').attr('src', URL.createObjectURL(blob))
        });
        if(cropper) {
            cropper.destroy()
        }
        $('#myModal').css('display', 'none')
    }

    function reverse_default() {
        $('#preview-image').attr('src', oldBlob)
        $('#avatar-1').css('background-image', 'url(' + oldBlob + ')');
    }

    // image 2

    function toggleFileInput1() {
        $('#preview-image-input-1').click()
    }
    var oldBlob1 = '/images/themes/assets/door-hangers/template5/img-1.png';
    var image_src1;
    function onFileChanged1(e) {
        const [file] = e.files
        if (file) {
            $('#preview-image').attr("src", URL.createObjectURL(file));
            $('#img-1').css('background-image', 'url(' + URL.createObjectURL(file) + ')');
            oldBlob1 = URL.createObjectURL(file)
            image_src1 = URL.createObjectURL(file)
            if(cropper) {
                cropper.destroy()
            }
        }
    }
    var cropper1;
    function startCropper1(input) {
        if (document.getElementById(input).files.length) {
            if(cropper) {
                cropper.destroy()
            }
            $('#myModal').css('display', 'block')
            $('#preview-image').attr('src', image_src1);
            var image = document.getElementById("preview-image");
            cropper1 = new Cropper(image, {
                aspectRatio: 378 / 533,
                viewMode: 1,
                dragMode: 'move',
                autoCropArea: 1,
                restore: false,
                guides: false,
                center: false,
                highlight: false,
            });
        }
        document.getElementById( "btn-save" ).setAttribute( "onClick", "save_crop1();" );
    }
    function save_crop1() {
        cropper1.getCroppedCanvas().toBlob((blob) => {
            $('#img-1').css('background-image', 'url(' + URL.createObjectURL(blob) + ')');
            $('#preview-image').attr('src', URL.createObjectURL(blob))
        });
        if(cropper1) {
            cropper1.destroy()
        }
        $('#myModal').css('display', 'none')
    }

    function reverse_default1() {
        $('#preview-image').attr('src', oldBlob1)
        $('#img-1').css('background-image', 'url(' + oldBlob1 + ')');
    }
</script>
@endsection
@endsection