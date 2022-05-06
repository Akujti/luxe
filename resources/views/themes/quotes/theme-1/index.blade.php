@extends('themes.layouts.app')
@section('title')
Motivational Post One - 
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
        left: 89px;
        top: 23px;
    }
    .logo-box img {
        max-width: 150px;
        height: auto !important;
    }
</style>
@endsection
@section('content')
<div class="">
    <div class="row theme">
        <div class="row theme">
            <div class="box-col-image">
                <div class="preview-image" id="preview-image-box" style="background:url('/images/themes/assets/quotes/theme-1/tbt.jpg');">
                    <div class="frame-box" id="frame-box">
                        <div class="box-items">
                            <div class="logo-box">
                                <img src="/images/themes/assets/quotes/theme-1/logo.jpg" alt="">
                            </div>
                            <div class="center-text">
                                <p class="text-box" id="black-box-1-text"></p>
                                <p class="text-box white" id="white-box-1-text"></p>
                                <p class="text-box" id="black-box-2-text"></p>
                                <p class="text-box white" id="white-box-2-text"></p>
                            </div>
                            <div class="footer-text">
                                <p class="footer-title" id="name-text"></p>
                                <p class="text-box" id="author-text"></p>
                            </div>
                        </div>
                        <img src="/images/themes/assets/quotes/theme-1/tbt.png" id="frame-image" alt="">
                    </div>
                </div>
                <div class="preview d-none">
                    <img src="/images/themes/assets/quotes/theme-1/tbt.jpg" id="person-image">
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
                                <label for="">Black Boxes</label>
                            </div>
                            
                            <div class="form-input">
                                <input type="text" id="black-box-1" value="A man" onkeyup="valueChanged(this, 'black-box-1-text')">
                                <select name="" id="black-box-1-select" onchange="changeFont('black-box-1-text', 'black-box-1-select')">
                                    <option value="s" selected>Small</option>
                                    <option value="m">Medium</option>
                                    <option value="l">Large</option>
                                    <option value="xl">Extra Large</option>
                                </select>
                            </div>
                        </div>
                        <div class="w-100 form-group">
                            <div class="form-label">
                                <label for="">White Boxes</label>
                            </div>
                            <div class="form-input">
                                <textarea id="white-box-1" onkeyup="valueChanged(this, 'white-box-1-text')">travels the world<br> over in search<br> of what he needs and</textarea>
                                <select name="" id="white-box-1-select" onchange="changeFont('white-box-1-text', 'white-box-1-select')">
                                    <option value="s" selected>Small</option>
                                    <option value="m">Medium</option>
                                    <option value="l">Large</option>
                                    <option value="xl">Extra Large</option>
                                </select>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="box-tools">
                    <div class="row theme">
                        <div class="w-100 form-group mt-0">
                            <div class="form-label">
                                <label for="">Black Boxes</label>
                            </div>
                            <div class="form-input">
                                <input type="text" id="black-box-2" value="returns home" onkeyup="valueChanged(this, 'black-box-2-text')">
                                <select name="" id="black-box-2-select" onchange="changeFont('black-box-2-text', 'black-box-2-select')">
                                    <option value="s" selected>Small</option>
                                    <option value="m">Medium</option>
                                    <option value="l">Large</option>
                                    <option value="xl">Extra Large</option>
                                </select>
                            </div>
                        </div>
                        <div class="w-100 form-group">
                            <div class="form-label">
                                <label for="">White Boxes</label>
                            </div>
                            <div class="form-input">
                                <input type="text" id="white-box-2" value="to find it" onkeyup="valueChanged(this, 'white-box-2-text')">
                                <select name="" id="white-box-2-select" onchange="changeFont('white-box-2-text', 'white-box-2-select')">
                                    <option value="s" selected>Small</option>
                                    <option value="m">Medium</option>
                                    <option value="l">Large</option>
                                    <option value="xl">Extra Large</option>
                                </select>
                            </div>
                        </div>
                        <div class="w-100 form-group">
                            <div class="form-label">
                                <label for="">Name</label>
                            </div>
                            <div class="form-input">
                                <input type="text" id="name" value="George A.<br> Moore" onkeyup="valueChanged(this, 'name-text')">
                                <select name="" id="name-select" onchange="changeFont('name-text', 'name-select')">
                                    <option value="s">Small</option>
                                    <option value="m">Medium</option>
                                    <option value="l">Large</option>
                                    <option value="xl" selected>Extra Large</option>
                                </select>
                            </div>
                        </div>
                        <div class="w-100 form-group">
                            <div class="form-label">
                                <label for="">Position</label>
                            </div>
                            <div class="form-input">
                                <input type="text" id="author" value="author" onkeyup="valueChanged(this, 'author-text')">
                            </div>
                        </div>

                        <button class="btn-luxe white" type="button" onclick="getScreenShot('preview-image-box')">Generate</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@section('js')

<script>
    $(document).ready(function() {
        $('#black-box-1-text').html($('#black-box-1').val())
        $('#white-box-1-text').html($('#white-box-1').val())
        $('#black-box-2-text').html($('#black-box-2').val())
        $('#white-box-2-text').html($('#white-box-2').val())
        $('#name-text').html($('#name').val())
        $('#author-text').html($('#author').val())

    })
    function toggleFileInput() {
        $('#preview-image-input').click()
    }
    var oldBlob = '/images/themes/assets/quotes/theme-1/tbt.jpg';

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