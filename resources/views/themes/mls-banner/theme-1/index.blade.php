@extends('themes.layouts.app')
@section('title')
CMA's & MLS - 
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('css/theme/mls-banner-theme.css') }}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.9/cropper.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
@endsection
@section('content')
<div class="">
    <div class="row theme">
        <div class="row theme">
            <div class="box-col-image w-100">
                <div class="preview-image" id="preview-image-box">
                    <div class="preview-profile-image" style="background: url(/images/themes/assets/mls-banner/theme-1/avatar.png)"></div>
                    <div class="profile-details">
                        <p class="text-box" id="first-name-text"></p>
                        <p class="text-box" id="last-name-text"></p>
                    </div>
                    <img src="/images/themes/assets/mls-banner/theme-1/tbt.png" id="mls-frame-image" alt="">
                    <div class="middle-checkmark">
                        <ul></ul>
                    </div>
                    <div class="preview-banner-image" style="background: url(/images/themes/assets/mls-banner/theme-1/banner.png)"></div>
                </div>
                <div class="preview d-none">
                    <img src="/images/themes/assets/mls-banner/theme-1/banner.png" id="person-image">
                    <img src="/images/themes/assets/mls-banner/theme-1/avatar.png" id="person-image1">
                </div>
            </div>
            <div class="box-col-tools w-100">
                <div class="box-tools">
                    <div class="w-100">
                        <div class="row theme">
                            <div class="form-group w-100 mt-0">
                                <div class="form-label">
                                    <label for="">Background Image</label>
                                </div>
                            </div>
                            <input type="file" name="file" id="preview-image-input" onchange="onFileChanged(this)" style="display: none;">
                            <div class="file-input-wrapper">
                                <button type="button" class="" onclick="toggleFileInput()">Choose image</button>
                                <button type="button" class="w-auto" onclick="startCropper('preview-image-input')">Crop</button>
                                <button type="button" class="" onclick="save_crop()">Save Crop</button>
                                <button type="button" class="" onclick="reverse_default()">Default</button>
                            </div>
                        </div>
                    </div>
                    <div class="w-100">
                        <div class="row theme">
                            <div class="form-group w-100">
                                <div class="form-label">
                                    <label for="">Profile Image</label>
                                </div>
                            </div>
                            <input type="file" name="file" id="preview-image-input1" onchange="onFileChanged1(this)" style="display: none;">
                            <div class="file-input-wrapper">
                                <button type="button" class="" onclick="toggleFileInput1()">Choose image</button>
                                <button type="button" class="w-auto" onclick="startCropper1('preview-image-input1')">Crop</button>
                                <button type="button" class="" onclick="save_crop1()">Save Crop</button>
                                <button type="button" class="" onclick="reverse_default1()">Default</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-tools">
                    <div class="row theme">
                        <div class="w-100 form-group mt-0">
                            <div class="form-label">
                                <label for="">First Name</label>
                            </div>
                            
                            <div class="form-input">
                                <input type="text" id="first-name" value="WESLEY" onkeyup="valueChanged(this, 'first-name-text')">
                            </div>
                        </div>
                        <div class="w-100 form-group mt-0">
                            <div class="form-label">
                                <label for="">Last Name</label>
                            </div>
                            
                            <div class="form-input">
                                <input type="text" id="last-name" value="ULLOA" onkeyup="valueChanged(this, 'last-name-text')">
                            </div>
                        </div>
                        <div class="w-100 form-group">
                            <div class="form-label">
                                <label for="">Font Size</label>
                            </div>
                            <div class="form-input">
                                <select name="" id="font-select" onchange="changeFont(['first-name-text', 'last-name-text'], 'font-select')">
                                    <option value="18px">18px</option>
                                    <option value="20px">20px</option>
                                    <option value="22px">22px</option>
                                    <option value="24px">24px</option>
                                    <option value="26px">26px</option>
                                    <option value="28px" selected>28px</option>
                                    <option value="30px">30px</option>
                                </select>
                            </div>
                        </div>
                        <div class="w-100 form-group">
                            <div class="form-label">
                                <label for="">Middle Checkmark</label>
                            </div>
                            <div class="form-input">
                                <textarea id="middle-checkmark" onkeyup="textareaChanged(this)">Experienced Broker
MSIRE from FIU
Full Service Brokerage</textarea>
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
        $('#first-name-text').html($('#first-name').val())
        $('#last-name-text').html($('#last-name').val())

        var str = $('#middle-checkmark').val()
        const li = str.split(/\r?\n/)

        for(let i = 0; i < li.length; i++) {
            $('.middle-checkmark ul').append('<li class="image-li">' + li[i] + '</li>')
        }

    })
    function toggleFileInput() {
        $('#preview-image-input').click()
    }
    var oldBlob = '/images/themes/assets/mls-banner/theme-1/banner.png';

    function onFileChanged(e) {
        const [file] = e.files 
        if (file) {
            $('#person-image').attr("src", URL.createObjectURL(file));
            $('.preview-banner-image').css('background-image','url('+ URL.createObjectURL(file) +')');
            oldBlob = URL.createObjectURL(file)
        }
    }
    var cropper;
    function startCropper(input) {
        if (document.getElementById(input).files.length) {
            var image = document.getElementById("person-image");
            $(".preview-image").css("display", "none");
            $("#person-image1").css("display", "none");
            $(".preview").toggleClass('d-none')
            cropper = new Cropper(image, {
                aspectRatio: 20 / 3,
                dragMode: 'move',
                autoCropArea: 1,
                restore: false,
                guides: false,
                center: false,
                highlight: false,
            });
        }
    }
    function save_crop(){
        cropper.getCroppedCanvas().toBlob((blob) => {
            $('.preview-banner-image').css('background-image','url('+ URL.createObjectURL(blob) +')');
            $('#person-image').attr('src', URL.createObjectURL(blob))
        });
        cropper.destroy()
        $('.preview-image').css('display', 'flex')
        $(".preview").toggleClass('d-none')
    }
    function reverse_default() {
        $('#person-image').attr('src', oldBlob)
        $('.preview-banner-image').css('background-image','url('+ oldBlob +')');
    }


    function toggleFileInput1() {
        $('#preview-image-input1').click()
    }
    var oldBlob1 = '/images/themes/assets/mls-banner/theme-1/avatar.png';

    function onFileChanged1(e) {
        const [file] = e.files 
        if (file) {
            $('#person-image1').attr("src", URL.createObjectURL(file));
            $('.preview-profile-image').css('background-image','url('+ URL.createObjectURL(file) +')');
            oldBlob1 = URL.createObjectURL(file)
        }
    }
    var cropper1;
    function startCropper1(input) {
        if (document.getElementById(input).files.length) {
            var image = document.getElementById("person-image1");
            $(".preview-image").css("display", "none");
            $("#person-image").css("display", "none");
            $(".preview").toggleClass('d-none')
            cropper1 = new Cropper(image, {
                aspectRatio: 23 / 24,
                dragMode: 'move',
                autoCropArea: 1,
                restore: false,
                guides: false,
                center: false,
                highlight: false,
            });
        }
    }
    function save_crop1(){
        cropper1.getCroppedCanvas().toBlob((blob) => {
            $('.preview-profile-image').css('background-image','url('+ URL.createObjectURL(blob) +')');
            $('#person-image1').attr('src', URL.createObjectURL(blob))
        });
        cropper1.destroy()
        $('.preview-image').css('display', 'flex')
        $(".preview").toggleClass('d-none')
    }
    function reverse_default1() {
        $('#person-image1').attr('src', oldBlob1)
        $('.preview-profile-image').css('background-image','url('+ oldBlob1 +')');
    }
    function valueChanged(e, p_id) {
        $('#' + p_id).html(e.value)
    }

    function changeFont(array_ids, select_id) {
        var size = $("#" + select_id).val()

        array_ids.forEach(el => {
            $("#" + el).css('font-size', size)
        });
    }
    function textareaChanged(e) {
        var str = $('.middle-checkmark ul').empty()
        const li = e.value.split(/\r?\n/)

        for(let i = 0; i < li.length; i++) {
            $('.middle-checkmark ul').append('<li class="image-li">' + li[i] + '</li>')
        }
    }
</script>
@endsection
@endsection