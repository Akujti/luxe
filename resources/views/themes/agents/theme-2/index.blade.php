@extends('themes.layouts.app')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.9/cropper.css"/>
<link rel="stylesheet" href="{{ asset('css/theme/agents-theme.css') }}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
@endsection
@section('content')
<div class="">
    <div class="row theme">
        <div class="row theme">
            <div class="box-col-image">
                <div class="preview-image" id="preview-image-box">
                    <div class="frame-box" id="frame-box">
                        <div class="box-items">
                            <p class="frame-name">AGENT NAME</p>
                            <p class="frame-address">Realtor, LUXE Properties LLC</p>
                            <p class="frame-phone"><img src="/images/index-page/phone-icon-white.svg" alt=""> <span>(XXX) XXX-XXXX</span></p>
                            <p class="frame-email"><img src="/images/index-page/email-icon.svg" alt=""> <span>email@luxeknows.com</span></p>
                        </div>
                        <img src="/images/themes/assets/agents/theme-2/tbt.png" id="frame-image" alt="">
                    </div>
                    <div id="person-image-div" style="background: url('/images/themes/assets/agents/theme-2/person.jpg')"></div>
                </div>
                <div class="preview d-none">
                    <img src="/images/themes/assets/agents/theme-2/person.jpg" id="person-image">
                </div>
            </div>
            <div class="box-col-tools">
                <div class="box-tools">
                    <div class="w-100">
                        <div class="row theme">
                            <button type="button" class="w-100" onclick="toggleFileInput()">Choose image</button>
                            <input type="file" name="file" id="preview-image-input" onchange="onFileChanged(this)" style="display: none;">
                            <div style="display: flex; gap:5px;width:100%;">
                                <button type="button" class="w-50" onclick="startCropper()">Crop</button>
                                <button type="button" class="w-50" onclick="save_crop()">Save Crop</button>
                            </div>
                            <button type="button" class="w-100" onclick="reverse_default()">Default</button>
                        </div>
                    </div>
    
                    <div class="row theme">
                        <div class="w-100 form-group">
                            <div class="form-label">
                                <label for="">Name</label>
                            </div>
                            <div class="form-input">
                                <input type="text" id="name" value="Agent Name" onkeyup="nameChanged(this)">
                            </div>
                        </div>
                        <div class="w-100 form-group">
                            <div class="form-label">
                                <label for="">Phone Number</label>
                            </div>
                            <div class="form-input">
                                <input type="text" id="phone" value="(XXX) XXX-XXXX" onkeyup="phoneChanged(this)">
                            </div>
                        </div>
                        <div class="w-100 form-group">
                            <div class="form-label">
                                <label for="">Email</label>
                            </div>
                            <div class="form-input">
                                <input type="text" id="email" value="email@luxeknows.com" onkeyup="emailChanged(this)">
                            </div>
                        </div>

                        <button class="btn-luxe" type="button" onclick="getScreenShot('preview-image-box')">Generate</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</div>

@section('js')

<script>
    $(document).ready(function() {
        $('.frame-name').html($('#name').val())
        $('.frame-phone span').html($('#phone').val())
        $('.frame-email span').html($('#email').val())
    })
    function toggleFileInput() {
        $('#preview-image-input').click()
    }
    var oldBlob = '/images/themes/assets/agents/theme-2/person.jpg';

    function onFileChanged(e) {
        const [file] = e.files 
        if (file) {
            $('#person-image').attr("src", URL.createObjectURL(file));
            $('#person-image-div').css('background-image','url('+ URL.createObjectURL(file) +')');
            oldBlob = URL.createObjectURL(file)
        }
    }
    var cropper;
    function startCropper(){
        var image = document.getElementById("person-image");
        $(".preview-image").css("display", "none");
        $(".preview").toggleClass('d-none')
        cropper = new Cropper(image, {
            aspectRatio: null,
        });
    }
    function save_crop(){
        cropper.getCroppedCanvas().toBlob((blob) => {
            $('#person-image').attr('src', URL.createObjectURL(blob))
            $('#person-image-div').css('background-image','url('+ URL.createObjectURL(blob) +')');
        });
        cropper.destroy()
        $('.preview-image').css('display', 'flex')
        $(".preview").toggleClass('d-none')
    }
    function reverse_default() {
        $('#person-image').attr('src', oldBlob)
        $('#person-image-div').css('background-image','url('+ oldBlob +')');
    }
    function nameChanged(e) {
        $('.frame-name').html(e.value)
    }
    function phoneChanged(e) {
        $('.frame-phone span').html(e.value)
    }
    function emailChanged(e) {
        $('.frame-email span').html(e.value)
    }
</script>
@endsection
@endsection