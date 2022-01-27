<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>W-9</title>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
</head>
@include('includes.fonts')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Petemoss&display=swap');

    * {
        font-family: 'Montserrat';
    }

    .handwritten {
        font-family: Petemoss !important;
    }

    .gochi {
        font-family: 'Gochi Hand', cursive;
        font-weight: 400;
    }

    .lato {
        font-family: 'Lato';
        font-weight: normal;
    }

    .ibm {
        font-family: 'IBM Plex Sans';
        font-weight: 400;
    }

    .ibm-med {
        font-family: 'IBM Plex Sans';
        font-weight: 500;
    }

    .oswald {
        font-family: 'Oswald';
        font-weight: 400;
    }

    .oswald-med {
        font-family: 'Oswald';
        font-weight: 500;
    }

    .oswald-bold {
        font-family: 'Oswald';
        font-weight: 600;
    }

    .roboto {
        font-family: 'Roboto';
        font-weight: 400;
    }

    .bold {
        font-weight: bold;
    }

    .extra-bold {
        font-weight: 800;
    }

    label {
        background-color: #FFCF40;
        padding: 10px;
        display: block;
        font-family: Lato;
    }

    .row {
        display: flex;
        height: 1280px;
    }

    .row-divider {
        height: 3px;
        background-color: black;
    }

    .column-divider {
        min-height: 100%;
        height: 100%;
        width: 150px;
    }

    .row-input {
        margin: auto 0;
        max-width: 1050px;
    }

    input,
    textarea {
        font-size: 15px;
        margin-top: 10px;
        margin-bottom: 5px;
        width: 100%;
        border: 1px solid #FFCF40;
        font-family: Lato;
    }

    .button {
        margin-top: 50px;
    }

    .generate {
        font-family: "Lato";
        font-weight: 600;
        font-size: 18px;
        padding: 20px;
        background-color: #FFCF40;
        color: white;
        text-decoration: none;
    }

    .flex {
        display: flex;
        justify-content: flex-start;
    }

    .flex label {
        margin: 10px auto 10px auto !important;
    }

    .row-image {
        height: auto;
        min-width: 855px;
    }

    .page {
        position: relative;
        height: 2541px;
        /* background-image: url('images/themes/just-listed/img-1.jpg'); */
        background-position: center bottom;
        background-repeat: no-repeat;
        background-size: 1140px;
    }

    .absolute {
        position: absolute;
    }

    .gold {
        color: #C5A467;
    }

    .white {
        color: white;
    }

    .bold {
        font-weight: 700;
    }

    ul li {
        display: inline;
        font-size: 20px;
        margin-right: 10px;
    }

    h1,
    h2,
    h3,
    p {
        margin: 0;
    }

    div.circle {
        top: 37%;
    }

    img.circle {
        border: 10px solid #C9A668;
        border-radius: 50%;
        width: 285px;
        height: 285px;
        object-fit: cover;
    }

    .pr-10 {
        padding-right: 10px;
    }

    .file-input-width {
        width: 175px;
    }

    h1.small {
        font-size: 70px;
    }

    h1.normal {
        font-size: 90px;
    }

    h1.large {
        font-size: 110px;
    }

    h1.main {
        font-family: 'Lato';
        font-weight: 900;
    }

    .list {
        font-size: 23px;
        letter-spacing: -1px;
    }

    .mr-3 {
        margin-right: 8px;
    }

    .title {
        font-size: 90px;
    }

    .social {
        font-size: 14px;
    }

    .white-border {
        border: 5px solid white;
    }

    .cropper-container {
        position: fixed !important;
        top: -100px !important;
        z-index: 100;
    }

    .page {
        zoom: 50% !important;
    }

    .text-right {
        text-align: right
    }

    .mb-10 {
        margin-bottom: 10px
    }

    .w-100 {
        width: 100%;
    }

    .text-center {
        text-align: center;
    }

    @media(max-width:1300px) {
        .row-input {
            width: 580px
        }
    }

    .table-title {
        color: white;
        font-size: 40px;
        font-weight: 300;
    }

    .page * {
        color: rgb(25, 23, 24);
        font-family: Roboto;
    }

    .p-1 {
        font-size: 25px
    }

    .p-2 {
        font-size: 35px
    }

    .w-50 {
        width: 50px;
    }

    .d-none {
        display: none;
    }

    .d-block {
        display: block;
    }
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.9/cropper.js"
    integrity="sha512-oqBsjjSHWqkDx4UKoU+5IUZN2nW2qDp2GFSKw9+mcFm+ZywqfBKp79nfWmGPco2wzTWuE46XpjtCjZ9tFmI12g=="
    crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.9/cropper.css"
    integrity="sha512-949FvIQOibfhLTgmNws4F3DVlYz3FmCRRhJznR22hx76SKkcpZiVV5Kwo0iwK9L6BFuY+6mpdqB2+vDIGVuyHg=="
    crossorigin="anonymous" />

<body>
    <form action="{{ route('w-9') }}" method="POST">
        @csrf
        <div class="row">
            <div class="row-image">
                <div style="position: relative;">
                    <div class="absolute" style="top: 0;left:0;">
                        <img src="/images/w-9/page-1.jpg" alt="" width="850px">
                    </div>
                </div>
                <div class="page">
                    {{-- Image --}}
                    <div class="absolute select select_1 d-none" style="top: 435px;left:182px;">
                        <img src="/images/w-9/check.png" alt="">
                    </div>
                    <div class="absolute select select_2 d-none" style="top: 432px;left:499px;">
                        <img src="/images/w-9/check.png" alt="">
                    </div>
                    <div class="absolute select select_3 d-none" style="top: 432px;left:700px;">
                        <img src="/images/w-9/check.png" alt="">
                    </div>
                    <div class="absolute select select_4 d-none" style="top: 432px;left:899px;">
                        <img src="/images/w-9/check.png" alt="">
                    </div>
                    <div class="absolute select select_5 d-none" style="top: 432px;left:1100px;">
                        <img src="/images/w-9/check.png" alt="">
                    </div>
                    <div class="absolute select select_6 d-none" style="top: 502px;left:182px;">
                        <img src="/images/w-9/check.png" alt="">
                    </div>
                    <div class="absolute select select_7 d-none" style="top: 633px;left:182px;">
                        <img src="/images/w-9/check.png" alt="">
                    </div>

                    {{-- Text --}}
                    <div class="absolute" style="top: 260px;left:195px;">
                        <p class="p-1 text-1"></p>
                    </div>
                    <div class="absolute" style="top: 327px;left:195px;">
                        <p class="p-1 text-2"></p>
                    </div>
                    <div class="absolute" style="top: 498px;left:1146px;">
                        <p class="p-1 text-3"></p>
                    </div>
                    <div class="absolute" style="top: 464px;left:1505px;">
                        <p class="p-1 text-4"></p>
                    </div>
                    <div class="absolute" style="top: 564px;left:1400px;">
                        <p class="p-1 text-4-1"></p>
                    </div>
                    <div class="absolute" style="top: 631px;left:455px;">
                        <p class="p-1 text-3-1"></p>
                    </div>
                    <div class="absolute" style="top: 696px;left:195px;">
                        <p class="p-1 text-5"></p>
                    </div>
                    <div class="absolute" style="top: 763px;left:195px;">
                        <p class="p-1 text-6"></p>
                    </div>
                    <div class="absolute" style="top: 830px;left:195px;">
                        <p class="p-1 text-7"></p>
                    </div>
                    <div class="absolute" style="top: 696px;left:1090px;width:505px;height:95px;">
                        <p class="p-1 text-8"></p>
                    </div>

                    <div class="absolute text-center w-50" style="top: 937px;left:1155px;">
                        <p class="p-2 social-0"></p>
                    </div>
                    <div class="absolute text-center w-50" style="top: 937px;left:1195px;">
                        <p class="p-2 social-1"></p>
                    </div>
                    <div class="absolute text-center w-50" style="top: 937px;left:1235px;">
                        <p class="p-2 social-2"></p>
                    </div>
                    <div class="absolute text-center w-50" style="top: 937px;left:1315px;">
                        <p class="p-2 social-3"></p>
                    </div>
                    <div class="absolute text-center w-50" style="top: 937px;left:1355px;">
                        <p class="p-2 social-4"></p>
                    </div>
                    <div class="absolute text-center w-50" style="top: 937px;left:1435px;">
                        <p class="p-2 social-5"></p>
                    </div>
                    <div class="absolute text-center w-50" style="top: 937px;left:1475px;">
                        <p class="p-2 social-6"></p>
                    </div>
                    <div class="absolute text-center w-50" style="top: 937px;left:1515px;">
                        <p class="p-2 social-7"></p>
                    </div>
                    <div class="absolute text-center w-50" style="top: 937px;left:1555px;">
                        <p class="p-2 social-8"></p>
                    </div>

                    <div class="absolute text-center w-50" style="top: 1072px;left:1155px;">
                        <p class="p-2 employer-0"></p>
                    </div>
                    <div class="absolute text-center w-50" style="top: 1072px;left:1195px;">
                        <p class="p-2 employer-1"></p>
                    </div>
                    <div class="absolute text-center w-50" style="top: 1072px;left:1275px;">
                        <p class="p-2 employer-2"></p>
                    </div>
                    <div class="absolute text-center w-50" style="top: 1072px;left:1315px;">
                        <p class="p-2 employer-3"></p>
                    </div>
                    <div class="absolute text-center w-50" style="top: 1072px;left:1355px;">
                        <p class="p-2 employer-4"></p>
                    </div>
                    <div class="absolute text-center w-50" style="top: 1072px;left:1395px;">
                        <p class="p-2 employer-5"></p>
                    </div>
                    <div class="absolute text-center w-50" style="top: 1072px;left:1435px;">
                        <p class="p-2 employer-6"></p>
                    </div>
                    <div class="absolute text-center w-50" style="top: 1072px;left:1475px;">
                        <p class="p-2 employer-7"></p>
                    </div>
                    <div class="absolute text-center w-50" style="top: 1072px;left:1515px;">
                        <p class="p-2 employer-8"></p>
                    </div>

                    <div class="absolute" style="top: 1506px;left:360px;">
                        <p class="handwritten text-11" style="font-size: 50px">Art Kujtimi</p>
                    </div>
                    <div class="absolute" style="top: 1525px;left:1155px;">
                        <p class="p-1 text-12">01/01/2000</p>
                    </div>
                </div>
            </div>
            <div class="row-input" style="">
                <a href="/fw9.pdf" download="">Download the empty template here</a>
                <div>
                    <label for="text-2">1. Name</label>
                    <input type="text" id="text-1" name="text_1" value="">
                </div>
                <div>
                    <label for="text-2">2. Business name/disregarded entity name, if different from above</label>
                    <input type="text" id="text-2" name="text_2" value="">
                </div>
                <div>
                    <label for="text-2">3. Check appropriate box for federal tax classification of the person whose name
                        is entered on line 1. Check only one of
                        the following seven boxes.</label>

                    <input type="radio" id="select_1" name="select_1" value="1" style="width: auto">
                    Individual/sole proprietor or single-member LLC
                    <br>
                    <input type="radio" id="select_2" name="select_1" value="2" style="width: auto">
                    C Corporation
                    <br>
                    <input type="radio" id="select_3" name="select_1" value="3" style="width: auto">
                    S Corporation
                    <br>
                    <input type="radio" id="select_4" name="select_1" value="4" style="width: auto">
                    Partnership
                    <br>
                    <input type="radio" id="select_5" name="select_1" value="5" style="width: auto">
                    Trust/estate
                    <br>
                    <input type="radio" id="select_6" name="select_1" value="6" style="width: auto">
                    Limited liability company. Enter the tax classification (C=C corporation, S=S corporation,
                    P=Partnership)
                    <input type="text" id="text-3" name="text_3" value="">
                    <br>
                    <input type="radio" id="select_7" name="select_1" value="7" style="width: auto">
                    Other (see instructions)
                    <input type="text" id="text-3-1" name="text_3_1" value="">
                </div>
                <div>
                    <label for="text-2">4. Exemptions (codes apply only to certain entities, not individuals; see
                        instructions on page 3):</label>
                    <input type="text" id="text-4" name="text_4" value="" placeholder="Exempt payee code (if any)">
                    <input type="text" id="text-4-1" name="text_4_1" value=""
                        placeholder="Exemption from FATCA reporting code (if any)">
                </div>
                <div>
                    <label for="text-2">5. Address (number, street, and apt. or suite no.) See instructions.</label>
                    <input type="text" id="text-5" name="text_5" value="">
                </div>
                <div>
                    <label for="text-2">6. City, state, and ZIP code</label>
                    <input type="text" id="text-6" name="text_6" value="">
                </div>
                <div>
                    <label for="text-2">7. List account number(s) here (optional)</label>
                    <input type="text" id="text-7" name="text_7" value="">
                </div>
                <div>
                    <label for="text-2">Requester's name and address (optional)</label>
                    <input type="text" id="text-8" name="text_8" value="">
                </div>
                <div>
                    <label for="text-2">Social security number</label>
                    <input type="text" id="text-9" name="text_9" value="">
                    <i>or</i>
                </div>
                <div>
                    <label for="text-2">Employer identification number</label>
                    <input type="text" id="text-10" name="text_10" value="">
                </div>
                <div>
                    <label for="text-2">Signature of U.S person</label>
                    <input type="text" id="text-11" name="text_11" value="">
                </div>
                <div>
                    <label for="text-2">Date</label>
                    <input type="text" id="text-12" name="text_12" value="">
                </div>
                <div>
                    <div class="flex">
                        <div class="" style="width: 345px">
                            <button type="submit" name="action" value="Generate" class="generate">Generate</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
<script>
    $(document).ready(function() {
        $("input[type=radio]").change(function(event) {
            $('.select').removeClass('d-block')
            $('.select').addClass('d-none')

            $('.'+event.target.id).toggleClass('d-none d-block')
        });

        $("input[type=text]").change(function(event) {
            var event_id = event.target.id;
            var event_element = $("#" + event_id)
            if(event_id == 'text-9'){
                var social_sec = event_element.val().split('');
                $(".social-0").html(social_sec[0])
                $(".social-1").html(social_sec[1])
                $(".social-2").html(social_sec[2])
                $(".social-3").html(social_sec[3])
                $(".social-4").html(social_sec[4])
                $(".social-5").html(social_sec[5])
                $(".social-6").html(social_sec[6])
                $(".social-7").html(social_sec[7])
                $(".social-8").html(social_sec[8])
            }
            else if(event_id == 'text-10'){
                var employer_id = event_element.val().split('');
                $(".employer-0").html(employer_id[0])
                $(".employer-1").html(employer_id[1])
                $(".employer-2").html(employer_id[2])
                $(".employer-3").html(employer_id[3])
                $(".employer-4").html(employer_id[4])
                $(".employer-5").html(employer_id[5])
                $(".employer-6").html(employer_id[6])
                $(".employer-7").html(employer_id[7])
                $(".employer-8").html(employer_id[8])
            }
            else{                
                var export_var = $("." + event_id);
                export_var.html(event_element.val());
            }
        });
    });
</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
        toastr.options =
        {
            "closeButton": true,
            "progressBar": true
        }
    toastr.error("{{ $error }}");
    @endforeach
        @endif
        @if(Session::has('message'))
        toastr.options =
        {
            "closeButton": true,
            "progressBar": true
        }
    toastr.success("{{ session('message') }}");
    @endif

        @if(Session::has('error'))
        toastr.options =
        {
            "closeButton": true,
            "progressBar": true
        }
    toastr.error("{{ session('error') }}");
    @endif

        @if(Session::has('info'))
        toastr.options =
        {
            "closeButton": true,
            "progressBar": true
        }
    toastr.info("{{ session('info') }}");
    @endif

        @if(Session::has('warning'))
        toastr.options =
        {
            "closeButton": true,
            "progressBar": true
        }
    toastr.warning("{{ session('warning') }}");
    @endif
</script>

</html>