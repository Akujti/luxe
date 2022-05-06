@extends('themes.layouts.app')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.9/cropper.css" />
@endsection
@section('content')
<div class="">
    <div class="row theme">
        {{-- <div class="theme-title">
            <h3>This is the Social Media One you selected. You can only edit the items below</h3>
        </div> --}}
        <div class="row theme">
            <div class="box-col-image">
                <div class="preview-image" id="preview-image-box"
                    style="background:url('/images/themes/assets/social-media-posts/theme-3/tbt.jpg');">
                    <div class="frame-box" id="frame-box">
                        <div class="box-items">
                            <p class="frame-price"></p>
                            <p class="frame-title"></p>
                        </div>
                        <img src="/images/themes/assets/social-media-posts/theme-3/tbt.png" id="frame-image" alt="">
                    </div>
                </div>
            </div>
            <div class="box-col-tools">
                <div class="box-tools">
                    <div class="w-100">
                        <div class="row theme">
                            <div class="form-group w-100">
                                <div class="form-label">
                                    <label for="">Background Image</label>
                                </div>
                            </div>
                            <input type="file" name="file" id="preview-image-input" onchange="onFileChanged(this)"
                                style="display: none;">
                            <div class="file-input-wrapper">
                                <button type="button" class="" onclick="toggleFileInput()">Choose image</button>
                                <button type="button" class="w-auto" onclick="startCropper()">Crop</button>
                                <button type="button" onclick="save_crop()">Save Crop</button>
                                <button type="button" onclick="reverse_default()">Default</button>
                            </div>
                        </div>
                    </div>

                    <div class="row theme">
                        <div class="w-100 form-group">
                            <div class="form-label">
                                <label for="">Price</label>
                            </div>
                            <div class="form-input">
                                <input type="text" name="price" id="price" value="LUXE" onkeyup="priceChanged(this)">
                            </div>
                        </div>
                        <div class="w-100 form-group">
                            <div class="form-label">
                                <label for="">Title</label>
                            </div>
                            <div class="form-input">
                                <input type="text" name="title" id="title" value="DID YOU KNOW"
                                    onkeyup="titleChanged(this)">
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
        $('.frame-price').html($('#price').val())
        $('.frame-title').html($('#title').val())
    })
    function toggleFileInput() {
        $('#preview-image-input').click()
    }
    var oldBlob = '/images/themes/assets/social-media-posts/theme-3/tbt.jpg';

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
            $('#image-uploaded').attr('src', URL.createObjectURL(blob))
        });
        cropper.destroy()
        $('.frame-box').css('display', 'flex')
    }
    function reverse_default() {
        $('#image-uploaded').attr('src', oldBlob)
        $('.preview-image').css('background-image','url('+ oldBlob +')');
    }
    function priceChanged(e) {
        $('.frame-price').html(e.value)
    }
    function titleChanged(e) {
        $('.frame-title').html(e.value)
    }
</script>
@endsection
@endsection