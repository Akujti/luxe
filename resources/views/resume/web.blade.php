@extends('layouts.app',['active' => 'marketing_branding', 'subactive' => 'resume_builder'])
@section('css')
    @include('includes.fonts')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital@1&display=swap');

        * {
            font-family: 'Montserrat';
        }

        .form-resume .gochi {
            font-family: 'Gochi Hand', cursive;
            font-weight: 400;
        }

        .form-resume .lato {
            font-family: 'Lato';
            font-weight: normal;
        }

        .form-resume .ibm {
            font-family: 'IBM Plex Sans';
            font-weight: 400;
        }

        .form-resume .ibm-med {
            font-family: 'IBM Plex Sans';
            font-weight: 500;
        }

        .form-resume .oswald {
            font-family: 'Oswald';
            font-weight: 400;
        }

        .form-resume .oswald-med {
            font-family: 'Oswald';
            font-weight: 500;
        }

        .form-resume .oswald-bold {
            font-family: 'Oswald';
            font-weight: 600;
        }

        .form-resume .roboto {
            font-family: 'Roboto';
            font-weight: 400;
        }

        .form-resume .bold {
            font-weight: bold;
        }

        .form-resume .extra-bold {
            font-weight: 800;
        }

        .form-resume .bold-600 {
            font-weight: 600;
        }

        .form-resume label {
            background-color: #262626;
            padding: 10px;
            display: block;
            width: 250px;
            font-family: 'gothicbold';
            color: #fff;
            font-size: 15px;
        }

        .form-resume .row {
            display: flex;
            height: 1280px;
            margin: 0px;
            padding-left: 20px;
        }

        .form-resume .row-divider {
            height: 3px;
            background-color: black;
        }

        .form-resume .row-input {
            min-width: 300px;
            padding-left: 51px;
            padding-top: 30px;
        }

        .form-resume input,
        .form-resume textarea {
            font-size: 15px;
            margin-bottom: 5px;
            width: 100%;
            border: 1px solid #262626;
            font-family: 'gothicregular';
            padding: 10px;
        }

        .form-resume .button {
            margin-top: 50px;
        }

        .form-resume .flex {
            display: flex;
            justify-content: flex-start;
        }

        .form-resume .flex label {
            margin: 10px auto 10px auto !important;
        }

        .form-resume .row-image {
            height: auto;
            width: 1035px;
        }

        .form-resume .page {
            width: 2000px;
            position: relative;
            height: 2572px;
            /* background-image: url('images/themes/just-listed/img-1.jpg'); */
            background-position: center bottom;
            background-repeat: no-repeat;
            background-size: 1140px;
        }

        .form-resume .absolute {
            position: absolute;
        }

        .form-resume .gold {
            color: #C5A467 !important;
        }

        .form-resume .white {
            color: white;
        }

        .form-resume .bold {
            font-weight: 700;
        }

        .form-resume ul li {
            display: inline;
            font-size: 20px;
            margin-right: 10px;
        }

        .form-resume h1,
        .form-resume h2,
        .form-resume h3,
        .form-resume p {
            margin: 0;
        }

        .form-resume div.circle {
            top: 37%;
        }

        .form-resume img.circle {
            border: 10px solid #C9A668;
            border-radius: 50%;
            width: 285px;
            height: 285px;
            object-fit: cover;
        }

        .form-resume .pr-10 {
            padding-right: 10px;
        }

        .form-resume .file-input-width {
            width: 175px;
        }

        .form-resume h1.small {
            font-size: 70px;
        }

        .form-resume h1.normal {
            font-size: 90px;
        }

        .form-resume h1.large {
            font-size: 110px;
        }

        .form-resume h1.main {
            font-family: 'Lato';
            font-weight: 900;
        }

        .form-resume .list {
            font-size: 23px;
            letter-spacing: -1px;
        }

        .form-resume .mr-3 {
            margin-right: 8px;
        }

        .form-resume .title {
            font-size: 90px;
        }

        .form-resume .social {
            font-size: 14px;
        }

        .form-resume .white-border {
            border: 5px solid white;
        }

        .form-resume .cropper-container {
            position: fixed !important;
            top: -100px !important;
            z-index: 100;
        }

        .form-resume .page {
            zoom: 50%;
        }

        .form-resume .text-right {
            text-align: right
        }

        .form-resume .mb-10 {
            margin-bottom: 10px
        }

        .form-resume .w-100 {
            width: 100%;
        }

        .form-resume .text-center {
            text-align: center;
        }

        @media (max-width: 1300px) {
            .form-resume .row-input {
                width: 580px
            }
        }

        .form-resume .table-title {
            color: white;
            font-size: 40px;
            font-weight: 300;
        }

        .form-resume .page * {
            color: rgb(25, 23, 24)
        }

        .form-resume .listings * {
            line-height: 30px;
            font-size: 20px;
        }

        .form-resume .mb-10 {
            margin-bottom: 10px;
        }

        .form-resume .btn-luxe {
            color: #fff;
            background-color: #262626;
            padding: 20px 40px;
            border: none;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        button {
            background-color: #e8e8e8;
            border: 1px solid #e8e8e8;
            padding: 10px;
            color: #262626;
            font-family: 'gothicbold';
            border-radius: 10px;
            font-size: 13px !important;
        }

        .mt-1 {
            margin-top: 5px;
        }

        .mt-3 {
            margin-top: 15px;
        }

        .generate {
            font-family: "gothicbold";
            font-weight: 600;
            font-size: 18px !important;
            padding: 15px 40px;
            border: 1px solid #e8e8e8;
            background-color: #e8e8e8;
            color: #000;
            text-decoration: none;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .col.p-0.m-0 {
            width: calc(100% - 347px);
        }

        .title h1 {
            font-family: 'gothicbold';
            text-align: center;
            margin-top: 60px;
        }

        .title p {
            font-family: 'gothicregular';
            text-align: center;
            font-size: 16px;
            margin-bottom: 20px;

        }

        @media (max-width: 1310px) {
            .page {
                zoom: 44% !important;
            }
        }

        @media screen and (max-width: 500px) {
            .page {
                position: absolute !important;
                left: 0px;
                top: 332px;
            }

            .row-input {
                position: absolute;
                left: 0px;
                top: 99%;
            }

            .title {
                position: absolute;
                top: 0px;
                left: 50%;
                z-index: 1;
            }
        }
    </style>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.9/cropper.js"
        integrity="sha512-oqBsjjSHWqkDx4UKoU+5IUZN2nW2qDp2GFSKw9+mcFm+ZywqfBKp79nfWmGPco2wzTWuE46XpjtCjZ9tFmI12g=="
        crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.9/cropper.css"
      integrity="sha512-949FvIQOibfhLTgmNws4F3DVlYz3FmCRRhJznR22hx76SKkcpZiVV5Kwo0iwK9L6BFuY+6mpdqB2+vDIGVuyHg=="
      crossorigin="anonymous"/>

@section('content')
    <form action="{{ route('resume') }}" method="POST" class="form-resume">
        @csrf
        <div class="col-12 title mb-3">
            <h1>Resume Builder</h1>
            <p>Scroll down to edit text and photo.</p>
        </div>
        <div class="row">
            <div class="row-image">
                <img src="" id="image" data-replace-attribute="src" data-name-replace="image" style="display: none;">
                <input hidden name="img_1_input" id="img_1_input" value="images/resume/qr.jpg">
                <div class="page" id="el">
                    {{-- Image --}}
                    <div class="absolute" style="top: 0;left:0;">
                        <img src="images/resume/main.jpg" alt="">
                    </div>
                    <div class="absolute" style="bottom: 162px;left:228px;">
                        <img id="img_1" src="images/resume/qr.jpg" alt="" width="300px" height="300px">
                    </div>
                    <div class="absolute" style="bottom: 630px;left:140px;">
                        <img src="images/resume/icons.jpg" alt="" width="45px">
                    </div>

                    {{-- Text --}}
                    <div class="absolute" style="bottom: 2170px;left:150px;width:450px">
                        <div style="font-size: 70px;line-height:60px">
                            <p class="text_name_1">WESLEY</p>
                            <p class="gold bold text_name_2">ULLOA</p>
                        </div>
                        <p class="bold text_location" style="font-size: 30px;margin-top:30px">CORAL GABLES
                            REALTOR</p>
                    </div>
                    <div class="absolute" style="top: 560px;left:145px;width:460px;text-align:justify;font-size:25px">
                        <p class="text-1" style="font-size: 28px;line-height: 36px;">Wesley Ulloa is the founder of LUXE
                            Properties, born
                            and raised in
                            Miami, she has
                            more than
                            fourteen years of experience in South Florida real estate. Selling on average over $20
                            million a year,
                            she specializes in creative marketing for listings and sells at 98% list to sales price
                            ratio with 45
                            days on market. Wesley has a passion for historic homes and loves sharing her knowledge of
                            working with,
                            renovating, researching, owning and of course selling historic homes in South Florida.</p>
                    </div>
                    <div class="absolute" style="top: 1260px;left:145px;width:460px;text-align:justify;font-size:25px">
                        <p class="bold gold" style="font-size: 30px;">Objective</p>
                        <p class="text-2" style="font-size: 28px;line-height:37px;">My objectives are to get you the
                            most money possible,
                            sell your home
                            as quickly as I
                            can, and
                            make selling your home a pleasant and profitable experience for you.</p>
                    </div>
                    <div class="absolute" style="top: 1630px;left:145px;width:460px;text-align:justify;font-size:25px">
                        <p class="bold gold" style="font-size: 30px;">LUXE Properties</p>
                        <p class="text-3">55 Merrick Way #402,<br>
                            Coral Gables, FL 33134</p>
                    </div>
                    <div class="absolute"
                         style="top: 1763px;left:190px;text-align:justify;font-size:30px;line-height:61px">
                        <p class="text-4">305-986-7041</p>
                        <p class="text-5">wesley@luxeknows.com</p>
                        <p class="text-6" style="margin-top:5px">@miamihistorichomes</p>
                    </div>
                    <div class="absolute" style="bottom: 520px;left:160px">
                        <p class="bold" style="font-size: 40px;letter-spacing:-2px;">Scan Here For Website</p>
                    </div>
                    <div class="absolute" style="left:835px;top:110px">
                        <p class="bold gold" style="font-size: 40px;">Education & Accomplishments</p>
                        <table id="table-1" style="width:1025px;margin-bottom:30px">
                            <tr>
                                <td>
                                    <p class="bold-600 text-7 section_1_title_1" style="font-size: 25px;">Master of
                                        Science in
                                        International Real
                                        Estate</p>
                                    <p class="text-8 section_1_subtitle_1" style="font-size: 20px;">Florida
                                        International University | Miami,
                                        FL</p>
                                </td>
                                <td>
                                    <p class="bold-600 text-9 section_1_year_1" style="font-size: 25px;">- 2017</p>
                                </td>
                            </tr>
                        </table>

                        <p class="bold gold" style="font-size: 40px;">Real Estate Experience</p>
                        <table id="table-2" style="min-width:750px;margin-bottom:30px">
                            <tr>
                                <td>
                                    <p class="bold-600 section_2_title_1" style="font-size: 25px;">2014 — Present</p>
                                </td>
                                <td>
                                    <p class="section_2_subtitle_1" style="font-size: 25px;">LUXE Properties</p>
                                </td>
                            </tr>
                        </table>

                        <p class="bold gold" style="font-size: 40px;">Language</p>
                        <table id="table-3" style="min-width:750px;margin-bottom:30px">
                            <tr>
                                <td>
                                    <p class="section_3_title_1" style="font-size: 25px;">Fluent in both:</p>
                                </td>
                                <td>
                                    <p class="bold-600 section_3_subtitle_1" style="font-size: 25px;"> Spanish & English
                                    </p>
                                </td>
                            </tr>
                        </table>

                        <p class="bold gold" style="font-size: 40px;">Organizations</p>
                        <table id="table-4" style="min-width:750px">
                            <tr>
                                <td>
                                    <p class="bold-600 section_4_title_1" style="font-size: 25px;">Miami YPN</p>
                                </td>
                                <td>
                                    <p class=" section_4_subtitle_1" style="font-size: 25px;">Active Member</p>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div class="absolute" style="left:835px;top:1150px">
                        <p class="bold gold" style="font-size: 40px;">References</p>
                        <p class="" style="font-size: 28px;"><i>Transactions / Have Conducted From 2018 - Present</i>
                        </p>
                        <div>
                            <table id="references" class="listings" style="min-width: 1010px">
                                <tr>
                                    <td>1200 Hardee Rd</td>
                                    <td>512 Alcazar Ave</td>
                                    <td>2730 SW 29th Ct</td>
                                    <td>908 Mariana Ave</td>
                                    <td>3155 MARY ST #3155</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="absolute" style="left:835px;top:2260px">
                        <p class="bold gold" style="font-size: 40px;">Current Listings</p>
                        <div>
                            <table id="current_listings_table" class="listings" style="min-width: 1010px">
                                <tr>
                                    <td>1200 Hardee Rd</td>
                                    <td>512 Alcazar Ave</td>
                                    <td>2730 SW 29th Ct</td>
                                    <td>908 Mariana Ave</td>
                                    <td>3155 MARY ST #3155</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <div>
                    <label for="text-2">Agent</label>
                    <input type="text" placeholder="Title" name="text_name_1" id="text_name_1" value="WESLEY">
                    <input type="text" placeholder="Subtitle" name="text_name_2" id="text_name_2" value="ULLOA">
                </div>
                <div>
                    <label for="text-2" class="mt-3">Location</label>
                    <input type="text" placeholder="Title" name="text_location" id="text_location"
                           value="CORAL GABLES REALTOR">
                </div>
                <div>
                    <label for="text-2" class="mt-3">Text 1</label>
                    <textarea name="text_1" id="text-1" cols="30"
                              rows="5">Wesley Ulloa is the founder of LUXE Properties, born and raised in Miami, she has more than fourteen years of experience in South Florida real estate. Selling on average over $20 million a year, she specializes in creative marketing for listings and sells at 98% list to sales price ratio with 45 days on market. Wesley has a passion for historic homes and loves sharing her knowledge of working with, renovating, researching, owning and of course selling historic homes in South Florida.</textarea>
                </div>
                <div>
                    <label for="text-2" class="mt-3">Text 2</label>
                    <textarea name="text_2" id="text-2" cols="30"
                              rows="5">My objectives are to get you the most money possible, sell your home as quickly as I can, and make selling your home a pleasant and profitable experience for you.</textarea>
                </div>
                <div>
                    <label for="text-2" class="mt-3">Contact</label>
                    <input type="text" name="text_3" id="text-3" placeholder="Address"
                           value="55 Merrick Way #402,<br>Coral Gables, FL 33134"><br>
                    <i style="font-size: 12px;">Use &lt;br&gt; to create a new line</i><br>
                    <input type="text" name="text_4" id="text-4" placeholder="Phone" value="305-986-7041">
                    <input type="text" name="text_5" id="text-5" placeholder="Email" value="wesley@luxeknows.com">
                    <input type="text" name="text_6" id="text-6" placeholder="Instagram" value="@miamihistorichomes">

                </div>
                <div style="margin-bottom:10px;">
                    <label for="page-1-img-1" class="mt-3">QR Image</label>
                    <button type="button" onclick="openInputFile('img-1-input')">Choose Image</button>
                    <input type="file" id="img-1-input" onchange="image_change('img-1-input',['img_1'],'img_1_input')"
                           style="display: none;"><br>
                    <button type="button" class="mt-1" onclick="startCropper(1)">Crop</button>
                    <button type="button" onclick="crop_image(['img_1'],'img_1_input')">Save Crop</button>
                </div>
                <div id="section-1">
                    <label for="text-2" class="mt-3">Education & Accomplishments</label>
                    <input type="text" placeholder="Title" name="section_1_title[]" id="section_1_title_1"
                           value="Master of Science in International Real Estate">
                    <input type="text" placeholder="Subtitle" name="section_1_subtitle[]" id="section_1_subtitle_1"
                           value="Florida International University | Miami, FL">
                    <input type="text" placeholder="Year" name="section_1_year[]" id="section_1_year_1" value="- 2017">
                    <hr>
                </div>
                <button class="mb-10" type="button" onclick="add_section_1()">Add row</button>
                <div id="section-2">
                    <label for="text-2">Real Estate Experience</label>
                    <input type="text" placeholder="Title" name="section_2_title[]" id="section_2_title_1"
                           value="2014 — Present">
                    <input type="text" placeholder="Subtitle" name="section_2_subtitle[]" id="section_2_subtitle_1"
                           value="LUXE Properties">
                    <hr>
                </div>
                <button class="mb-10" type="button" onclick="add_section_2()">Add row</button>
                <div id="section-3">
                    <label for="text-2">Language</label>
                    <input type="text" placeholder="Title" name="section_3_title[]" id="section_3_title_1"
                           value="Fluent in both:">
                    <input type="text" placeholder="Subtitle" name="section_3_subtitle[]" id="section_3_subtitle_1"
                           value="Spanish & English">
                    <hr>
                </div>
                <button class="mb-10" type="button" onclick="add_section_3()">Add row</button>
                <div id="section-4">
                    <label for="text-2">Organizations</label>
                    <input type="text" placeholder="Title" name="section_4_title[]" id="section_4_title_1"
                           value="Miami YPN">
                    <input type="text" placeholder="Subtitle" name="section_4_subtitle[]" id="section_4_subtitle_1"
                           value="Active Member">
                    <hr>
                </div>
                <button class="mb-10" type="button" onclick="add_section_4()">Add row</button>
                <div class="mb-10">
                    <label for="text-2">References</label>
                    <textarea name="text_references" id="text-references" cols="30" rows="5">
1200 Hardee Rd
512 Alcazar Ave
2730 SW 29th Ct
908 Mariana Ave
3155 MARY ST #3155</textarea><br>
                    <i style="font-size: 12px">Max of 145 addresses</i><br>
                    <i style="font-size: 12px">Enter addresses separated by presing enter (new line)</i>
                </div>
                <div class="mb-10">
                    <label for="text-2">Current Listings</label>
                    <textarea name="current_listings" id="current_listings" cols="30" rows="5">
1200 Hardee Rd
512 Alcazar Ave
2730 SW 29th Ct
908 Mariana Ave
3155 MARY ST #3155</textarea><br>
                    <i style="font-size: 12px">Enter addresses separated by presing enter (new line)</i>
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
    @include('includes.loader')
@endsection

@include('door-hangers.template5.cropper')
@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.9/cropper.js"
            integrity="sha512-oqBsjjSHWqkDx4UKoU+5IUZN2nW2qDp2GFSKw9+mcFm+ZywqfBKp79nfWmGPco2wzTWuE46XpjtCjZ9tFmI12g=="
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.9/cropper.css"
          integrity="sha512-949FvIQOibfhLTgmNws4F3DVlYz3FmCRRhJznR22hx76SKkcpZiVV5Kwo0iwK9L6BFuY+6mpdqB2+vDIGVuyHg=="
          crossorigin="anonymous"/>

    <script>
        $('textarea').change(function (event) {
            var event_id = event.target.id
            var text = $('#' + event_id).val()
            var textarea = document.getElementsByClassName(event_id)[0]

            if (event_id == 'text-references') {
                var rows = $('#text-references').val().split('\n')
                $('#references').empty()
                for (let index = 0; index < rows.length / 5; index++) {
                    var new_row = '<tr>'
                    for (let index_2 = index * 5; index_2 < index * 5 + 5; index_2++) {
                        if (rows[index_2])
                            new_row += '<td>' + rows[index_2] + '</td>'
                    }
                    new_row += '</tr>'
                    $('#references').append(new_row)
                }
            } else if (event_id == 'current_listings') {
                var rows = $('#current_listings').val().split('\n')
                $('#current_listings_table').empty()
                for (let index = 0; index < rows.length / 5; index++) {
                    var new_row = '<tr>'
                    for (let index_2 = index * 5; index_2 < index * 5 + 5; index_2++) {
                        if (rows[index_2])
                            new_row += '<td>' + rows[index_2] + '</td>'
                    }
                    new_row += '</tr>'
                    console.log(new_row)
                    $('#current_listings_table').append(new_row)
                }
            } else {
                textarea.innerHTML = text
            }
        })

        function change_font_size (select_input) {
            console.log(select_input)
            var select_id = select_input.id
            var selector = $('#' + select_id)
            var element_to_edit = selector.attr('data-id-to-change')
            var font_size = selector.val()
            remove_classes(element_to_edit)
            $('.' + element_to_edit).addClass(font_size)
        }

        function remove_classes (element) {
            $('.' + element + '').removeClass('small')
            $('.' + element + '').removeClass('normal')
            $('.' + element + '').removeClass('large')
        }

        $('input').on('input', this, function (event) {
            var event_id = event.target.id
            var event_element = $('#' + event_id)
            var export_var = $('.' + event_id)
            export_var.html(event_element.val())
        })

        function bind_event () {
            $('input').on('input', this, function (event) {
                var event_id = event.target.id
                var event_element = $('#' + event_id)
                var export_var = $('.' + event_id)
                export_var.html(event_element.val())
            })
        }

        var section_1_counter = 2
        var section_2_counter = 2
        var section_3_counter = 2
        var section_4_counter = 2

        function add_section_1 () {
            $('#section-1').append('<input type="text" placeholder="Title" name="section_1_title[]" id="section_1_title_' + section_1_counter + '"><input type="text" placeholder="Subtitle" name="section_1_subtitle[]" id="section_1_subtitle_' + section_1_counter + '"><input type="text" placeholder="Year" name="section_1_year[]" id="section_1_year_' + section_1_counter + '"><hr>')
            $('#table-1').append('<tr><td><p class="bold-600 text-7 section_1_title_' + section_1_counter + '" style="font-size: 25px;"></p><p class="text-8 section_1_subtitle_' + section_1_counter + '" style="font-size: 20px;"></p></td><td><p class="bold-600 text-9 section_1_year_' + section_1_counter + '" style="font-size: 25px;"></p></td></tr>')
            section_1_counter++
            bind_event()
        }

        function add_section_2 () {
            $('#section-2').append('<input type="text" placeholder="Title" name="section_2_title[]" id="section_2_title_' + section_2_counter + '" value=""><input type="text" placeholder="Subtitle" name="section_2_subtitle[]" id="section_2_subtitle_' + section_2_counter + '" value=""><hr>')
            $('#table-2').append('<tr><td><p class="bold-600 section_2_title_' + section_2_counter + '" style="font-size: 25px;"></p></td><td><p class="section_2_subtitle_' + section_2_counter + '" style="font-size: 25px;"></p></td></tr>')
            section_2_counter++
            bind_event()
        }

        function add_section_3 () {
            $('#section-3').append('<input type="text" placeholder="Title" name="section_3_title[]" id="section_3_title_' + section_3_counter + '" value=""><input type="text" placeholder="Subtitle" name="section_3_subtitle[]" id="section_3_subtitle_' + section_3_counter + '" value=""><hr>')
            $('#table-3').append('<tr><td><p class="section_3_title_' + section_3_counter + '" style="font-size: 25px;"></p></td><td><p class="bold-600 section_3_subtitle_' + section_3_counter + '" style="font-size: 25px;"></p></td></tr>')
            section_3_counter++
            bind_event()
        }

        function add_section_4 () {
            $('#section-4').append('<input type="text" placeholder="Title" name="section_4_title[]" id="section_4_title_' + section_4_counter + '" value=""><input type="text" placeholder="Subtitle" name="section_4_subtitle[]" id="section_4_subtitle_' + section_4_counter + '" value=""><hr>')
            $('#table-4').append('<tr><td><p class="bold-600 section_4_title_' + section_4_counter + '" style="font-size: 25px;"></p></td><td><p class="section_4_subtitle_' + section_4_counter + '" style="font-size: 25px;"></p></td></tr>')
            section_3_counter++
            bind_event()
        }

        var cropper

        function startCropper (ratio) {
            // $(".page").css("opacity", "0");
            $('#myModal').css('display', 'block')
            $('.modal-content').css('width', '700px')
            $('#preview-image').attr('src', $('#image').attr('src'))
            var image = document.getElementById('preview-image')

            cropper = new Cropper(image, {
                aspectRatio: ratio,
            })
            document.getElementById('btn-save').setAttribute('onClick', 'crop_image([\'img_1\'],\'img_1_input\');')
        }

        function image_change (file_input, image_src, image_input) {
            var form_data = new FormData()
            form_data.append('file', $('#' + file_input)[0].files[0])
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: 'post',
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-Token': $('[name="_token"]').val()
                },
                success: function (output) {
                    $('#image').attr('src', 'uploadedimages/' + output)
                    getBase64Image(document.getElementById('image'), function (base64) {
                        image_src.forEach(element => {
                            $('#' + element).attr('src', 'uploadedimages/' + output)
                        })
                        $('input[name=' + image_input + ']').val('uploadedimages/' + output)
                    })
                }
            })
        }

        function crop_image (image, image_input) {
            cropper.getCroppedCanvas().toBlob((blob) => {
                const form_data = new FormData()
                form_data.append('file', blob, 'example.png')
                $.ajax({
                    url: '/uploadimage',
                    data: form_data,
                    type: 'post',
                    cache: false,
                    contentType: false,
                    processData: false,
                    headers: {
                        'X-CSRF-Token': $('[name="_token"]').val()
                    },
                    success: function (output) {
                        cropper.destroy()
                        $('#image').attr('src', 'uploadedimages/' + output)
                        getBase64Image(document.getElementById('image'), function (base64) {
                            image.forEach(element => {
                                $('#' + element).attr('src', 'uploadedimages/' + output)
                            })
                            $('input[name=' + image_input + ']').val('uploadedimages/' + output)
                        })
                    }
                })
            })
            $('.page').css('opacity', '1')
            $('#myModal').css('display', 'none')
        }

        function convert (oldImag, callback) {
            var img = new Image()
            img.onload = function () {
                callback(img)
            }
            img.setAttribute('crossorigin', 'anonymous')
            img.src = oldImag.src
        }

        function getBase64Image (img, callback) {
            convert(img, function (newImg) {
                var canvas = document.createElement('canvas')
                canvas.width = newImg.width
                canvas.height = newImg.height
                var ctx = canvas.getContext('2d')
                ctx.drawImage(newImg, 0, 0)
                var base64 = canvas.toDataURL('image/png')
                callback(base64)
            })
        }

        function openInputFile (id) {
            $('#' + id).click()
        }
    </script>
@endsection
