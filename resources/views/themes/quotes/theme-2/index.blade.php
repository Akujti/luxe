@extends('themes.layouts.app')
@section('title')
Motivational Post Two -
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('css/theme/quotes-theme.css') }}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.9/cropper.css"/>

<style>
    .box-items {
        z-index: 999;
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
    .logo-box {
        position: absolute;
        left: 99px;
        top: 2px;
    }
    .logo-box img {
        max-width: 130px;
        height: auto !important;
    }
    .center-text {
        top: 249px;
        text-align: left;
        width: 196px;
        left: 46px;
    }
</style>
@endsection
@section('content')
<div class="">
    <div class="row theme">
        <div class="row theme">
            <div class="box-col-image">
                <div class="preview-image" id="preview-image-box" style="background:url('/images/themes/assets/quotes/theme-2/tbt.jpg');">
                    <div class="frame-box" id="frame-box">
                        <div class="box-items">
                            <div class="logo-box">
                                <img src="/images/themes/assets/quotes/theme-2/logo.png" alt="">
                            </div>
                            <div class="center-text">
                                <p class="text-box" id="content-1-text"></p>
                                <p class="text-box" id="content-2-text"></p>
                                <p class="text-box" id="content-3-text"></p>
                                <p class="text-box white" id="content-4-text"></p>
                                <p class="text-box" id="content-5-text"></p>
                                <p class="text-box" id="content-name-text"></p>
                            </div>
                        </div>
                        <img src="/images/themes/assets/quotes/theme-2/tbt.png" id="frame-image" alt="">
                    </div>
                </div>
                <div class="preview d-none">
                    <img src="/images/themes/assets/quotes/theme-2/tbt.jpg" id="person-image">
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
                            <input type="file" name="file" id="preview-image-input" onchange="onFileChanged(this)" style="display: none;">
                            <div class="file-input-wrapper">
                                <button type="button" class="" onclick="toggleFileInput()">Choose image</button>
                                <button type="button" class="w-auto" onclick="startCropper()">Crop</button>
                                <button type="button" class="" onclick="save_crop()">Save Crop</button>
                                <button type="button" class="" onclick="reverse_default()">Default</button>
                            </div>
                        </div>
                    </div>
    
                    <div class="row theme">
                        <div class="w-100 form-group">
                            <div class="form-label">
                                <label for="">Content 1</label>
                            </div>
                            
                            <div class="form-input">
                                <input type="text" id="content-1" value="THERE is" onkeyup="valueChanged(this, 'content-1-text')">
                            </div>
                        </div>
                        <div class="w-100 form-group">
                            <div class="form-label">
                                <label for="">Content 2</label>
                            </div>
                            <div class="form-input">
                                <input type="text" id="content-2" value="LITTLE<br>SUCCESS" onkeyup="valueChanged(this, 'content-2-text')">
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="box-tools">
                    <div class="row theme">
                        <div class="w-100 form-group mt-0">
                            <div class="form-label">
                                <label for="">Content 3</label>
                            </div>
                            <div class="form-input">
                                <input type="text" id="content-3" value="WHERE THERE IS" onkeyup="valueChanged(this, 'content-3-text')">
                            </div>
                        </div>
                        <div class="w-100 form-group">
                            <div class="form-label">
                                <label for="">Content 4</label>
                            </div>
                            <div class="form-input">
                                <input type="text" id="content-4" value="LITTLE" onkeyup="valueChanged(this, 'content-4-text')">
                            </div>
                        </div>
                        <div class="w-100 form-group">
                            <div class="form-label">
                                <label for="">Content 5</label>
                            </div>
                            <div class="form-input">
                                <input type="text" id="content-5" value="LAUGHTER" onkeyup="valueChanged(this, 'content-5-text')">
                            </div>
                        </div>
                        <div class="w-100 form-group">
                            <div class="form-label">
                                <label for="">Name</label>
                            </div>
                            <div class="form-input">
                                <input type="text" id="name" value="- Andreq Carnegie" onkeyup="valueChanged(this, 'content-name-text')">
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
        $('#content-1-text').html($('#content-1').val())
        $('#content-2-text').html($('#content-2').val())
        $('#content-3-text').html($('#content-3').val())
        $('#content-4-text').html($('#content-4').val())
        $('#content-5-text').html($('#content-5').val())
        $('#content-name-text').html($('#name').val())

    })
    function toggleFileInput() {
        $('#preview-image-input').click()
    }
    var oldBlob = '/images/themes/assets/quotes/theme-2/tbt.jpg';

    function onFileChanged(e) {
        const [file] = e.files 
        if (file) {
            $('#person-image').attr("src", URL.createObjectURL(file));
            $('.preview-image').css('background-image','url('+ URL.createObjectURL(file) +')');
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
            dragMode: 'move',
            autoCropArea: 1,
            restore: false,
            guides: false,
            center: false,
            highlight: false,
        });
    }
    function save_crop(){
        cropper.getCroppedCanvas().toBlob((blob) => {
            $('.preview-image').css('background-image','url('+ URL.createObjectURL(blob) +')');
            $('#person-image').attr('src', URL.createObjectURL(blob))
        });
        cropper.destroy()
        $('.preview-image').css('display', 'flex')
        $(".preview").toggleClass('d-none')
    }
    function reverse_default() {
        $('#person-image').attr('src', oldBlob)
        $('.preview-image').css('background-image','url('+ oldBlob +')');
    }
    function valueChanged(e, p_id) {
        $('#' + p_id).html(e.value)
    }

    function changeFont(text_id, select_id) {
        var size = $("#" + select_id).val()

        var size_num = {
            s: '16px',
            m: '20px',
            l: '24px',
            xl: '30px'
        }
        $("#" + text_id).css('font-size', size_num[size])
    }
</script>
@endsection
@endsection