@extends('themes.layouts.app')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.9/cropper.css"/>

<style>
    .frame-title {
        color: #c4a567;
        font-size: 80px !important;
    line-height: 80px;
    }
    .box-items {
        top: unset !important;
        bottom: 8px !important;
    }
</style>
@endsection
@section('content')
<div class="">
    <div class="row theme">
        {{-- <div class="theme-title">
            <h3>This is the Social Media One you selected. You can only edit the items below</h3>
        </div> --}}
        <div class="row theme">
            <div class="box-col-image">
                <div class="preview-image" id="preview-image-box" style="background:url('/images/themes/assets/theme-4/tbt.jpg');">
                    <div class="frame-box" id="frame-box">
                        <div class="box-items">
                            <p class="frame-title"></p>
                        </div>
                        <img src="/images/themes/assets/theme-4/tbt.png" id="frame-image" alt="">
                    </div>
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
                                <input type="text" name="name" id="name" value="#TBT" onkeyup="nameChanged(this)">
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
        $('.frame-title').html($('#name').val())
    })
    function toggleFileInput() {
        $('#preview-image-input').click()
    }
    var oldBlob;

    function onFileChanged(e) {
        const [file] = e.files 
        if (file) {
            $('#image-uploaded').remove();
            $('.preview-image').append("<img id='image-uploaded' src='" + URL.createObjectURL(file) + "' style='display:none'> ");
            $('.preview-image').css('background-image','url('+ URL.createObjectURL(file) +')');
            oldBlob = URL.createObjectURL(file)
        }
    }
    var cropper;
    function startCropper(){
        var image = document.getElementById("image-uploaded");
        $(".frame-box").css("display", "none");
        cropper = new Cropper(image, {
            aspectRatio: 1,
            minContainerHeight: 500
        });
    }
    function save_crop(){
        cropper.getCroppedCanvas().toBlob((blob) => {
            $('.preview-image').css('background-image','url('+ URL.createObjectURL(blob) +')');
            $('#image-uploaded').attr('src', URL.createObjectURL(blob))
        });
        cropper.destroy()
        $('.frame-box').css('display', 'flex')
    }
    function reverse_default() {
        $('#image-uploaded').attr('src', oldBlob)
        $('.preview-image').css('background-image','url('+ oldBlob +')');
    }
    function nameChanged(e) {
        $('.frame-title').html(e.value)
    }

</script>
@endsection
@endsection