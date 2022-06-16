@extends('themes.layouts.app')
@section('title')
    Social Media -
@endsection
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.9/cropper.css" />

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

        .background-image {
            width: 770px;
            height: 770px;
            background: url('/images/themes/assets/social-media-posts/theme-6/bg.jpg');
            background-size: cover !important;
            position: relative;
        }

        .position-absolute {
            position: absolute;
        }

        .title {
            font-weight: 700;
            font-size: 56px;
            margin: 0;
            line-height: 48px;
        }

        .subtitle {
            font-weight: 600;
            margin: 0;
            font-size: 50px;
            line-height: 48px;
        }

        .text-white {
            color: white;
        }

        .text-gold {
            color: #C9A567;
        }

        .box-col-image {
            font-family: 'Montserrat'
        }

        .m-0 {
            margin: 0
        }

        .info-title {
            font-size: 24px;
        }

        .info-subtitle {
            font-size: 14px;
        }
    </style>
@endsection
@section('content')
    <div class="">
        <div class="row theme">
            <div class="row theme">
                <div class="box-col-image" id="close-on-crop">
                    <div class="background-image" id="preview-image-box">
                        <div class="position-absolute" style="bottom: 0;right:0">
                            <img id="background-image"
                                src="{{ asset('images/themes/assets/social-media-posts/theme-6/flag.png') }}" alt=""
                                style="height: 770px;width:311px">
                        </div>
                        <div class="position-absolute" style="bottom: 0;right:20px">
                            <img src="{{ asset('images/themes/assets/social-media-posts/theme-6/person.png') }}" alt=""
                                style="height: 455px;width: 321px" id="person-img">
                        </div>
                        <div class="position-absolute" style="top: 93px;left:90px">
                            <img src="{{ asset('images/themes/assets/social-media-posts/theme-6/logo.png') }}" alt=""
                                style="width: 300px">
                        </div>
                        <div class="position-absolute" style="bottom: 52px;left:53px">
                            <img src="{{ asset('images/themes/assets/social-media-posts/theme-6/icons.png') }}" alt=""
                                style="width: 40px">
                        </div>
                        <div class="position-absolute" style="top: 180px;left:60px;">
                            <h1 class="title text-white title_1">HOMETOWN</h1>
                            <h1 class="title text-gold title_2">HEROES PROGRAM</h1>
                        </div>
                        <div class="position-absolute" style="top: 350px;left:60px;width:350px;">
                            <h2 class="subtitle text-white sentence">UP TO <span class="text-gold">$25K</span>
                                FOR OUR
                                <span class="text-gold">HEROES</span>
                            </h2>
                        </div>
                        <div class="position-absolute" style="top: 555px;left:100px">
                            <p class="text-white m-0 info-title info_1"><b>Wesley</b> Ulloa</p>
                            <p class="text-white m-0 info-subtitle info_2">LICENSED REAL ESTATE BROKER</p>
                        </div>
                        <div class="position-absolute" style="top: 622px;left:100px">
                            <p class="text-white m-0 info-subtitle info_3">C: (305) 986-7041</p>
                            <p class="text-white m-0 info-subtitle info_4">O: (305) 809-7650</p>
                        </div>
                        <div class="position-absolute" style="top: 678px;left:100px">
                            <p class="text-white m-0 info-subtitle info_5">wesley@luxeknows.com</p>
                            <p class="text-white m-0 info-subtitle info_6">www.luxeknows.com</p>
                        </div>
                    </div>
                </div>
                <div style="width: 700px;" class="d-none preview-box">
                    <img id="preview-image" src="{{ asset('images/themes/assets/social-media-posts/theme-6/bg.jpg') }}"
                        alt="" style="height: 500px;">
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
                                <input type="file" name="file" id="preview-image-input"
                                    onchange="onFileChanged(this, 'background_image')" style="display: none;">
                                <div class="file-input-wrapper">
                                    <button type="button" class=""
                                        onclick="openInputFile('preview-image-input')">Choose
                                        image</button>
                                    <button type="button" class="w-auto"
                                        onclick="startCropper('preview-image-input', [1, 1])">Crop</button>
                                    <button type="button" class=""
                                        onclick="save_crop('background_image')">Save Crop</button>
                                    <button type="button" class=""
                                        onclick="reverse_default('background_image', '/images/themes/assets/social-media-posts/theme-6/bg.jpg')">Default</button>
                                </div>
                            </div>
                        </div>
                        <div class="w-100">
                            <div class="row theme">
                                <div class="form-group w-100 mt-0">
                                    <div class="form-label">
                                        <label for="">Agent</label>
                                    </div>
                                </div>
                                <input type="file" name="file" id="agent-image-input"
                                    onchange="onFileChanged(this, 'person-img')" style="display: none;">
                                <div class="file-input-wrapper">
                                    <button type="button" class=""
                                        onclick="openInputFile('agent-image-input')">Choose
                                        image</button>
                                    <button type="button" class="w-auto"
                                        onclick="startCropper('agent-image-input', [321, 455])">Crop</button>
                                    <button type="button" class="" onclick="save_crop('person-img')">Save
                                        Crop</button>
                                    <button type="button" class=""
                                        onclick="reverse_default('person-img','/images/themes/assets/social-media-posts/theme-6/person.png')">Default</button>
                                </div>
                            </div>
                        </div>

                        <div class="row theme">
                            <div class="w-100 form-group">
                                <div class="form-label">
                                    <label for="">Title</label>
                                </div>
                                <div class="form-input">
                                    <input type="text" name="title_1" id="title_1" value="HOMETOWN">
                                    <input type="text" name="title_2" id="title_2" value="HEROES PROGRAM">
                                </div>
                            </div>
                            <div class="w-100 form-group">
                                <div class="form-label">
                                    <label for="">Sentence</label>
                                </div>
                                <div class="form-input">
                                    <input type="text" name="sentence" id="sentence"
                                        value='UP TO <span class="text-gold">$25K</span> FOR OUR <span class="text-gold">HEROES</span>'>
                                </div>
                            </div>
                            <div class="w-100 form-group">
                                <div class="form-label">
                                    <label for="">Info</label>
                                </div>
                                <div class="form-input">
                                    <input type="text" name="info_1" id="info_1" value='<b>Wesley</b> Ulloa'>
                                    <input type="text" name="info_2" id="info_2" value="LICENSED REAL ESTATE BROKER">
                                    <input type="text" name="info_3" id="info_3" value="C: (305) 986-7041">
                                    <input type="text" name="info_4" id="info_4" value="O: (305) 809-7650">
                                    <input type="text" name="info_5" id="info_5" value="wesley@luxeknows.com">
                                    <input type="text" name="info_6" id="info_6" value="www.luxeknows.com">
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
            $("input").change(function(event) {
                var event_id = event.target.id;
                var event_element = $("#" + event_id)
                var export_var = $("." + event_id);
                export_var.html(event_element.val());
            });
        });

        function onFileChanged(e, image_id) {
            const [file] = e.files
            if (file) {
                if (image_id == 'background_image') {
                    $('.background-image').css('background-image', 'url(' + URL.createObjectURL(file) + ')');
                } else {
                    $('#' + image_id).attr("src", URL.createObjectURL(file));
                }
                $('#preview-image').attr("src", URL.createObjectURL(file));
                oldBlob = URL.createObjectURL(file)
            }
        }
        var cropper;

        function startCropper(input, ratio) {
            if (document.getElementById(input).files.length) {
                var image = document.getElementById("preview-image");
                $("#close-on-crop").css("display", "none");
                $(".preview-box").removeClass("d-none");
                cropper = new Cropper(image, {
                    aspectRatio: ratio[0] / ratio[1],
                    viewMode: 1,
                    dragMode: 'move',
                    autoCropArea: 1,
                    restore: false,
                    guides: false,
                    center: false,
                    highlight: false,
                });
            }
        }

        function save_crop(image_id) {
            cropper.getCroppedCanvas().toBlob((blob) => {
                if (image_id == 'background_image') {
                    $('.background-image').css('background-image', 'url(' + URL.createObjectURL(blob) + ')');
                } else {
                    $('#' + image_id).attr('src', URL.createObjectURL(blob))
                }
                $('#preview-image').attr('src', URL.createObjectURL(blob))
            });
            cropper.destroy()
            $("#close-on-crop").css("display", "flex");
            $(".preview-box").addClass("d-none");
        }

        function reverse_default(image_id, oldBlob) {
            if (image_id == 'background_image') {
                $('.background-image').css('background-image', 'url(' + oldBlob + ')');
            } else {
                $('#' + image_id).attr('src', oldBlob)
            }
            $('#preview-image').attr('src', oldBlob);
        }

        function priceChanged(e) {
            $('.frame-price').html(e.value)
        }

        function titleChanged(e) {
            $('.frame-title').html(e.value)
        }

        function openInputFile(id) {
            $('#' + id).click()
        }
    </script>
@endsection
@endsection
