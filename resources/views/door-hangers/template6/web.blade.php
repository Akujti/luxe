@extends('themes.layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/theme/door-hangers.css') }}" />
<link rel="stylesheet" href="{{ asset('css/theme/door-hanger-template-6.css') }}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.9/cropper.css" />

<style>
    @media (max-width: 1230px){
        .box-col-tools {
            flex-wrap: wrap;
            width: 350px !important;
            height: 1160px !important;
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
                    <div class="d-flex align-items-start justify-content-between">
                        <img src="/images/themes/assets/door-hangers/template6/img-1.png" id="img-1" alt="">
                        <img src="/images/themes/assets/door-hangers/template6/img-2.png" id="img-2" alt="">
                        <div class="headings">
                            <p id="heading-1"></p>
                            <p id="heading-2"></p>
                        </div>
                    </div>
                    <img src="/images/themes/assets/door-hangers/template6/img-3.png" id="img-3" alt="">
                    <div class="bg-img" id="bg-img" style="background: url('/images/themes/assets/door-hangers/template6/bg.png')"></div>
                    <div class="price-box">
                        <div>
                            <p id="location-1"></p>
                            <p id="price-1"></p>
                        </div>
                    </div>
                    <div class="location-box">
                        <p id="title-1-one"></p>
                        <p id="sold-by">Sold by The Bocanegra Group!</p>
                        <ul>
                            <li class="recent-sale" id="recent-sale"></li>
                            <li>
                                <p id="location-2"></p>
                                <p id="price-2"></p>
                            </li>
                            <li>
                                <p id="location-3"></p>
                                <p id="price-3"></p>
                            </li>
                            <li>
                                <p id="location-4"></p>
                                <p id="price-4"></p>
                            </li>
                            <li>
                                <p id="location-5"></p>
                                <p id="price-5"></p>
                            </li>
                            <li>
                                <p id="location-6"></p>
                                <p id="price-6"></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="page_break"></div>
            <div class="div">
            <div class="items" id="item-2">
                    <div class="d-flex align-items-start justify-content-between">
                        <img src="/images/themes/assets/door-hangers/template6/img-1.png" id="img-1" alt="">
                        <img src="/images/themes/assets/door-hangers/template6/img-4.png" id="img-2" alt="">
                        <div class="headings">
                            <p id="title-1"></p>
                            <p id="title-2"></p>
                        </div>
                    </div>
                    <img src="/images/themes/assets/door-hangers/template6/img-5.png" id="img-3" alt="">
                    <div class="bg-img" id="bg-img-1" style="background: url('/images/themes/assets/door-hangers/template6/bg-1.png')"></div>
                    <div class="price-box">
                        <div>
                            <img src="/images/themes/assets/door-hangers/template6/logo.png" alt="">
                        </div>
                    </div>
                    <div class="bottom-box">
                        <div class="d-flex align-items-center">
                            <div class="left-area">
                                <p>Call today for FREE CMA</p>
                                <p>or use QR code to instantly get your home value!</p>
                            </div>
                            <div class="right-area">
                                <img src="/images/themes/assets/door-hangers/template6/qr-code.png" id="qr-code" alt="">
                            </div>
                        </div>
                        
                        <div class="bottom-area">
                            <div>
                                <div class="last-image" id="last-image" style="background: url('/images/themes/assets/door-hangers/template6/img-6.png');"></div>
                                <p id="name"></p>
                                <p id="phone"></p>
                                <p id="email"></p>
                                <p id="website"></p>
                            </div>
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
                                <button type="button" class=""
                                    onclick="reverse_default()">Default</button>
                            </div>
                        </div>
                    </div>

                    <div class="row theme">
                        <div class="w-100 form-group">
                            <div class="form-label">
                                <label for="">Heading</label>
                            </div>

                            <div class="form-input">
                                <input type="text" id="heading-1-input" value="Just"
                                    onkeyup="valueChanged(this, 'heading-1')">
                            </div>
                            <div class="form-input mt-1">
                                <input type="text" id="heading-2-input" value="SOLD"
                                    onkeyup="valueChanged(this, 'heading-2')">
                            </div>
                        </div>
                       
                        <div class="w-100 form-group">
                            <div class="form-label">
                                <label for="">Title</label>
                            </div>
                            <div class="form-input">
                                <input type="text" id="title-1-one-input" value="Highest Sale in Garden Hills"
                                    onkeyup="valueChanged(this, 'title-1-one')">
                                
                            </div>
                        </div>
                        <div class="w-100 form-group">
                            <div class="form-label">
                                <label for="">Recent Sales</label>
                            </div>
                            <div class="form-input">
                                <input type="text" id="recent-sale-input" value="Recent Sales in Garden Hills"
                                    onkeyup="valueChanged(this, 'recent-sale')">
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-tools">
                    <div class="row theme">
                        <div class="w-100 form-group mt-0">
                            <div class="form-label">
                                <label for="">Location</label>
                            </div>
                            <div class="form-input">
                                <input type="text" id="location-1-input" value="9753 SW 159th Ave"
                                    onkeyup="valueChanged(this, 'location-1')">
                            </div>
                            <div class="form-input mt-1">
                                <input type="text" id="location-2-input" value="10158 SW 159th Pl"
                                    onkeyup="valueChanged(this, 'location-2')">
                            </div>
                            <div class="form-input mt-1">
                                <input type="text" id="location-3-input" value="9853 SW 159th Ave"
                                    onkeyup="valueChanged(this, 'location-3')">
                            </div>
                            <div class="form-input mt-1">
                                <input type="text" id="location-4-input" value="16113 SW 101st Ter"
                                    onkeyup="valueChanged(this, 'location-4')">
                            </div>
                            <div class="form-input mt-1">
                                <input type="text" id="location-5-input" value="9838 SW 159th Ct"
                                    onkeyup="valueChanged(this, 'location-5')">
                            </div>
                            <div class="form-input mt-1">
                                <input type="text" id="location-6-input" value="15964 SW 99th Ln"
                                    onkeyup="valueChanged(this, 'location-6')">
                            </div>
                        </div>
                        <div class="w-100 form-group mt-0">
                            <div class="form-label">
                                <label for="">Price</label>
                            </div>
                            <div class="form-input">
                                <input type="text" id="price-1-input" value="$545,000"
                                    onkeyup="valueChanged(this, 'price-1')">
                            </div>
                            <div class="form-input mt-1">
                                <input type="text" id="price-2-input" value="$425,000.00"
                                    onkeyup="valueChanged(this, 'price-2')">
                            </div>
                            <div class="form-input mt-1">
                                <input type="text" id="price-3-input" value="$425,000.00"
                                    onkeyup="valueChanged(this, 'price-3')">
                            </div>
                            <div class="form-input mt-1">
                                <input type="text" id="price-4-input" value="$415,000.00"
                                    onkeyup="valueChanged(this, 'price-4')">
                            </div>
                            <div class="form-input mt-1">
                                <input type="text" id="price-5-input" value="$420,000.00"
                                    onkeyup="valueChanged(this, 'price-5')">
                            </div>
                            <div class="form-input mt-1">
                                <input type="text" id="price-6-input" value="$403,000.00"
                                    onkeyup="valueChanged(this, 'price-6')">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box-col-tools" style="height:950px">
                <div class="box-tools">
                    <div class="w-100">
                        <div class="row theme">
                            <div class="form-group w-100 mt-0">
                                <div class="form-label">
                                    <label for="">Image</label>
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
                    <div class="w-100">
                        <div class="row theme">
                            <div class="form-group w-100 mt-0">
                                <div class="form-label">
                                    <label for="">Image</label>
                                </div>
                            </div>
                            <input type="file" name="file" id="preview-image-input-2" onchange="onFileChanged2(this)"
                                style="display: none;">
                            <div class="file-input-wrapper">
                                <button type="button" class="" onclick="toggleFileInput2()">Choose
                                    image</button>
                                <button type="button" class="w-auto"
                                    onclick="startCropper2('preview-image-input-2')">Crop</button>
                                <button type="button" class=""
                                    onclick="reverse_default2()">Default</button>
                            </div>
                        </div>
                    </div>
                    <div class="w-100">
                        <div class="row theme">
                            <div class="form-group w-100 mt-0">
                                <div class="form-label">
                                    <label for="">Image</label>
                                </div>
                            </div>
                            <input type="file" name="file" id="preview-image-input-3" onchange="onFileChanged3(this)"
                                style="display: none;">
                            <div class="file-input-wrapper">
                                <button type="button" class="" onclick="toggleFileInput3()">Choose
                                    image</button>
                                <button type="button" class="w-auto"
                                    onclick="startCropper3('preview-image-input-3')">Crop</button>
                                <button type="button" class=""
                                    onclick="reverse_default3()">Default</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-tools">
                    <div class="row theme">
                        <div class="w-100 form-group mt-0">
                            <div class="form-label">
                                <label for="">Title</label>
                            </div>
                            <div class="form-input">
                                <input type="text" id="title-1-input" value="Just"
                                    onkeyup="valueChanged(this, 'title-1')">
                            </div>
                            <div class="form-input mt-1">
                                <input type="text" id="title-2-input" value="Sold"
                                    onkeyup="valueChanged(this, 'title-2')">
                            </div>
                        </div>
                        <div class="w-100 form-group mt-0">
                            <div class="form-label">
                                <label for="">Name</label>
                            </div>
                            <div class="form-input">
                                <input type="text" id="name-input" value="Wesley Ulloa"
                                    onkeyup="valueChanged(this, 'name')">
                            </div>
                        </div>
                        <div class="w-100 form-group mt-0">
                            <div class="form-label">
                                <label for="">Phone</label>
                            </div>
                            <div class="form-input">
                                <input type="text" id="phone-input" value="(305) 809 - 7650"
                                    onkeyup="valueChanged(this, 'phone')">
                            </div>
                        </div>
                        <div class="w-100 form-group mt-0">
                            <div class="form-label">
                                <label for="">Email</label>
                            </div>
                            <div class="form-input">
                                <input type="text" id="email-input" value="wesley@luxeknows.com"
                                    onkeyup="valueChanged(this, 'email')">
                            </div>
                        </div>
                        <div class="w-100 form-group mt-0">
                            <div class="form-label">
                                <label for="">Website</label>
                            </div>
                            <div class="form-input">
                                <input type="text" id="website-input" value="luxeknows.com"
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
        $('#heading-1').html($('#heading-1-input').val())
        $('#heading-2').html($('#heading-2-input').val())
        $('#title-1-one').html($('#title-1-one-input').val())
        $('#recent-sale').html($('#recent-sale-input').val())
        $('#location-1').html($('#location-1-input').val())
        $('#location-2').html($('#location-2-input').val())
        $('#location-3').html($('#location-3-input').val())
        $('#location-4').html($('#location-4-input').val())
        $('#location-5').html($('#location-5-input').val())
        $('#location-6').html($('#location-6-input').val())
        $('#price-1').html($('#price-1-input').val())
        $('#price-2').html($('#price-2-input').val())
        $('#price-3').html($('#price-3-input').val())
        $('#price-4').html($('#price-4-input').val())
        $('#price-5').html($('#price-5-input').val())
        $('#price-6').html($('#price-6-input').val())

        $('#title-1').html($('#title-1-input').val())
        $('#title-2').html($('#title-2-input').val())
        $('#name').html($('#name-input').val())
        $('#phone').html($('#phone-input').val())
        $('#email').html($('#email-input').val())
        $('#website').html($('#website-input').val())
    })

    function valueChanged(e, p_id) {
        $('#' + p_id).html(e.value)
    }

    function toggleFileInput() {
        $('#preview-image-input').click()
    }
    var oldBlob = '/images/themes/assets/door-hangers/template6/bg.png';
    var image_src;
    function onFileChanged(e) {
        const [file] = e.files
        if (file) {
            $('#preview-image').attr("src", URL.createObjectURL(file));
            $('#bg-img').css('background-image', 'url(' + URL.createObjectURL(file) + ')');
            oldBlob = URL.createObjectURL(file)
            image_src = URL.createObjectURL(file)
            if(cropper1) {
                cropper1.destroy()
            }
            if(cropper2) {
                cropper2.destroy()
            }
            if(cropper3) {
                cropper3.destroy()
            }
        }
    }
    var cropper;
    function startCropper(input) {
        if (document.getElementById(input).files.length) {

            if(cropper1) {
                cropper1.destroy()
            }
            if(cropper2) {
                cropper2.destroy()
            }
            if(cropper3) {
                cropper3.destroy()
            }
            $('#myModal').css('display', 'block')
            $('#preview-image').attr('src', image_src)
            var image = document.getElementById("preview-image");
            cropper = new Cropper(image, {
                aspectRatio: 422 / 422,
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
            $('#bg-img').css('background-image', 'url(' + URL.createObjectURL(blob) + ')');
            $('#preview-image').attr('src', URL.createObjectURL(blob))
        });
        cropper.destroy()
        $('#myModal').css('display', 'none')
    }

    function reverse_default() {
        $('#preview-image').attr('src', oldBlob)
        $('#bg-img').css('background-image', 'url(' + oldBlob + ')');
    }

    // image 2

    function toggleFileInput1() {
        $('#preview-image-input-1').click()
    }
    var oldBlob1 = '/images/themes/assets/door-hangers/template6/bg-1.png';
    var image_src1;
    function onFileChanged1(e) {
        const [file] = e.files
        if (file) {
            $('#preview-image').attr("src", URL.createObjectURL(file));
            $('#bg-img-1').css('background-image', 'url(' + URL.createObjectURL(file) + ')');
            oldBlob1 = URL.createObjectURL(file)
            image_src1 = URL.createObjectURL(file)
            
            if(cropper) {
                cropper.destroy()
            }
            if(cropper2) {
                cropper2.destroy()
            }
            if(cropper3) {
                cropper3.destroy()
            }
        }
    }
    var cropper1;
    function startCropper1(input) {
        if (document.getElementById(input).files.length) {
            if(cropper) {
                cropper.destroy()
            }
            if(cropper2) {
                cropper2.destroy()
            }
            if(cropper3) {
                cropper3.destroy()
            }
            $('#myModal').css('display', 'block')
            $('#preview-image').attr('src', image_src1);
            var image = document.getElementById("preview-image");
            cropper1 = new Cropper(image, {
                aspectRatio: 403 / 403,
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
            $('#bg-img-1').css('background-image', 'url(' + URL.createObjectURL(blob) + ')');
            $('#preview-image').attr('src', URL.createObjectURL(blob))
        });
        cropper1.destroy()
        $('#myModal').css('display', 'none')
    }

    function reverse_default1() {
        $('#preview-image').attr('src', oldBlob1)
        $('#bg-img-1').css('background-image', 'url(' + oldBlob1 + ')');
    }
    // image 3

    function toggleFileInput2() {
        $('#preview-image-input-2').click()
    }
    var oldBlob2 = '/images/themes/assets/door-hangers/template6/qr-code.png';
    var image_src2;
    function onFileChanged2(e) {
        const [file] = e.files
        if (file) {
            $('#preview-image').attr("src", URL.createObjectURL(file));
            $('#qr-code').attr("src", URL.createObjectURL(file));
            oldBlob2 = URL.createObjectURL(file)
            image_src2 = URL.createObjectURL(file)
            if(cropper) {
                cropper.destroy()
            }
            if(cropper1) {
                cropper1.destroy()
            }
            if(cropper3) {
                cropper3.destroy()
            }
        }
    }
    var cropper2;
    function startCropper2(input) {
        if (document.getElementById(input).files.length) {
            if(cropper) {
                cropper.destroy()
            }
            if(cropper1) {
                cropper1.destroy()
            }
            if(cropper3) {
                cropper3.destroy()
            }
            $('#myModal').css('display', 'block')
            $('#preview-image').attr('src', image_src2);
            var image = document.getElementById("preview-image");
            cropper2 = new Cropper(image, {
                aspectRatio: 1 / 1,
                viewMode: 1,
                dragMode: 'move',
                autoCropArea: 1,
                restore: false,
                guides: false,
                center: false,
                highlight: false,
            });
        }
        document.getElementById( "btn-save" ).setAttribute( "onClick", "save_crop2();" );
    }
    function save_crop2() {
        cropper2.getCroppedCanvas().toBlob((blob) => {
            $('#qr-code').attr('src', URL.createObjectURL(blob))
            $('#preview-image').attr('src', URL.createObjectURL(blob))
        });
        cropper2.destroy()
        $('#myModal').css('display', 'none')
    }

    function reverse_default2() {
        $('#preview-image').attr('src', oldBlob2)
        $('#qr-code').attr('src', oldBlob2)
    }

    // image 4

    function toggleFileInput3() {
        $('#preview-image-input-3').click()
    }
    var oldBlob3 = '/images/themes/assets/door-hangers/template6/img-6.png';
    var image_src3;
    function onFileChanged3(e) {
        const [file] = e.files
        if (file) {
            $('#preview-image').attr("src", URL.createObjectURL(file));
            $('#last-image').css('background-image', 'url(' + URL.createObjectURL(file) + ')');
            oldBlob3 = URL.createObjectURL(file)
            image_src3 = URL.createObjectURL(file)
            if(cropper) {
                cropper.destroy()
            }
            if(cropper1) {
                cropper1.destroy()
            }
            if(cropper2) {
                cropper2.destroy()
            }
        }
    }
    var cropper3;
    function startCropper3(input) {
        if (document.getElementById(input).files.length) {
            if(cropper) {
                cropper.destroy()
            }
            if(cropper1) {
                cropper1.destroy()
            }
            if(cropper2) {
                cropper2.destroy()
            }
            $('#myModal').css('display', 'block')
            $('#preview-image').attr('src', image_src3);
            var image = document.getElementById("preview-image");
            cropper3 = new Cropper(image, {
                aspectRatio: 102 / 59,
                viewMode: 1,
                dragMode: 'move',
                autoCropArea: 1,
                restore: false,
                guides: false,
                center: false,
                highlight: false,
            });
        }
        document.getElementById( "btn-save" ).setAttribute( "onClick", "save_crop3();" );
    }
    function save_crop3() {
        cropper3.getCroppedCanvas().toBlob((blob) => {
            $('#last-image').css('background-image', 'url(' + URL.createObjectURL(blob) + ')');
            $('#preview-image').attr('src', URL.createObjectURL(blob))
        });
        cropper3.destroy()
        $('#myModal').css('display', 'none')
    }

    function reverse_default3() {
        $('#preview-image').attr('src', oldBlob3)
        $('#last-image').css('background-image', 'url(' + oldBlob3 + ')');
    }
</script>
@endsection
@endsection