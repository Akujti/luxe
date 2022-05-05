@extends('themes.layouts.app')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.9/cropper.css"/>

<style>
    
   .frame-price {
       position: absolute;
       left: -52px;
       font-weight: bold;
   }
   .frame-title {
       position: absolute;
       left: -10px;
       top: 51px;
       text-transform: uppercase;
       font-size: 56px !important;
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
                <div class="preview-image" id="preview-image-box">
                    <div class="frame-box" id="frame-box">
                        <div class="box-items">
                            <p class="frame-price"></p>
                            <p class="frame-title"></p>
                        </div>
                        <img src="/images/themes/assets/theme-5/tbt.png" id="frame-image" alt="">
                    </div>
                    <img src="/images/themes/assets/theme-5/tbt.jpg" id="image-uploaded" alt="">
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
                                <label for="">Price</label>
                            </div>
                            <div class="form-input">
                                <input type="text" name="price" id="price" value="LUXE" onkeyup="priceChanged(this)">
                            </div>
                        </div>
                        <div class="w-100 form-group">
                            <div class="form-label">
                                <label for="">Name</label>
                            </div>
                            <div class="form-input">
                                <input type="text" name="title" id="title" value="Spots" onkeyup="titleChanged(this)">
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.9/cropper.js"></script>
<script src="https://cdn.jsdelivr.net/npm/html2canvas@1.0.0-rc.5/dist/html2canvas.min.js"></script>
<script src="{{ asset('js/themes/main.js') }}"></script>

<script>
    $(document).ready(function() {
        $('.frame-price').html($('#price').val())
        $('.frame-title').html($('#title').val())
    })
    function toggleFileInput() {
        $('#preview-image-input').click()
    }
    var oldBlob;

    function onFileChanged(e) {
        const [file] = e.files 
        if (file) {
            $('#image-uploaded').remove();
            $('.preview-image').append("<img id='image-uploaded' src='" + URL.createObjectURL(file) + "'>");
            $('#image-duplicate').attr("src", URL.createObjectURL(file));
            oldBlob = $('#image-uploaded').attr('src')
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
            $('#image-uploaded').attr('src', URL.createObjectURL(blob))
        });
        cropper.destroy()
        $('.frame-box').css('display', 'flex')
    }
    function reverse_default() {
        $('#image-uploaded').attr('src', oldBlob)
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