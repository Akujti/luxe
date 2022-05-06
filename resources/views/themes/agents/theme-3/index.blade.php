@extends('themes.layouts.app')
@section('title')
Agent Template 3 -
@endsection

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.9/cropper.css"/>

<style>
    .frame-title {
        color: #fff;
        font-size: 22px !important;
        font-family: 'gothicregular' !important;
    }
    .box-items {
        top: unset !important;
        bottom: 67px !important;
        left: 57% !important;
        padding-left: 28px;
        z-index: 999;
    }
    .inner-image {
        width: 656px;
        height: 470px;
        position: absolute;
        z-index: 0;
        left: 39px;
        top: 34px;
        background-repeat: no-repeat !important;
        background-size: cover !important;
    }
    #frame-image {
        position: relative;
    }
    .preview {
        width: 700px;
        height: 500px;
    }
</style>
@endsection
@section('content')
<div class="">
    <div class="row theme">
        <div class="row theme">
            <div class="box-col-image">
                <div class="preview-image" id="preview-image-box" style="background-color: #000;">
                    <div class="frame-box" id="frame-box">
                        <div class="inner-image" style="background:url('/images/themes/assets/agents/theme-3/person.jpg');">
                        </div>
                        <div class="box-items">
                            <p class="frame-title"></p>
                        </div>
                        <img src="/images/themes/assets/agents/theme-3/tbt.png" id="frame-image" alt="">
                    </div>
                </div>
                <div class="preview d-none">
                    <img src="/images/themes/assets/agents/theme-3/person.jpg" id="person-image">
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
                                <label for="">Name</label>
                            </div>
                            <div class="form-input">
                                <input type="text" name="name" id="name" value="ELISSA M. URQUIAGA" onkeyup="nameChanged(this)">
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
        $('.frame-title').html($('#name').val())
    })
    function toggleFileInput() {
        $('#preview-image-input').click()
    }
    var oldBlob = '/images/themes/assets/agents/theme-3/person.jpg';

    function onFileChanged(e) {
        const [file] = e.files 
        if (file) {
            $('#person-image').attr("src", URL.createObjectURL(file));
            $('.inner-image').css('background-image','url('+ URL.createObjectURL(file) +')');
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
            $('.inner-image').css('background-image','url('+ URL.createObjectURL(blob) +')');
            $('#person-image').attr('src', URL.createObjectURL(blob))
        });
        cropper.destroy()
        $('.preview-image').css('display', 'flex')
        $(".preview").toggleClass('d-none')
    }
    function reverse_default() {
        $('#person-image').attr('src', oldBlob)
        $('.inner-image').css('background-image','url('+ oldBlob +')');
    }
    function nameChanged(e) {
        $('.frame-title').html(e.value)
    }

</script>
@endsection
@endsection