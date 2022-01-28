<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resume</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital@1&display=swap');
</style>
<style>
    * {
        font-family: 'Montserrat';
    }

    @page {
        padding: 0px;
        margin: 0px;
        size: 2000px 2572px;
    }

    .page_break {
        page-break-before: always;
    }

    body {
        padding: 0px;
        margin: 0px;
    }

    .page {
        position: absolute;
    }

    .absolute {
        position: absolute;
    }

    .gold {
        color: #C5A467 !important;
    }

    .white {
        color: white;
    }

    .bold-600 {
        font-weight: 600;
    }

    .bold {
        font-weight: bold;
    }

    .extra-bold {
        font-weight: 900;
    }

    ul li {
        display: inline;
        font-size: 100px;
        margin-right: 30px;
    }

    h1,
    h2,
    h3,
    p {
        margin: 0;
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

    .w-100 {
        width: 100%;
    }

    .text-right {
        text-align: right
    }

    .text-center {
        text-align: center
    }

    .table-title {
        color: white;
        font-size: 40px;
        font-weight: 300;
    }

    .curved {
        transform: translate(20px, 85px) rotate(-30deg);
    }

    .page * {
        color: rgb(25, 23, 24)
    }

    .listings * {
        font-size: 18px;
    }
</style>

<body>
    <div class="page">
        {{-- Image --}}
        <div class="absolute" style="top: 0;left:0;">
            <img src="images/resume/main.jpg" alt="">
        </div>
        <div class="absolute" style="bottom: 162px;left:228px;">
            <img src="{{$img_1_input}}" alt="" width="300px" height="300px">
        </div>
        <div class="absolute" style="bottom: 630px;left:140px;">
            <img src="images/resume/icons.jpg" alt="" width="45px">
        </div>

        {{-- Text --}}
        <div class="absolute" style="bottom: 2170px;left:150px;width:450px">
            <div style="font-size: 70px;line-height:60px">
                <p>{!! $text_name_1 !!}</p>
                <p class="gold bold">{!! $text_name_2 !!}</p>
            </div>
            <p class="bold" style="font-size: 30px;margin-top:30px">CORAL GABLES REALTOR</p>
        </div>
        <div class="absolute" style="top: 560px;left:145px;width:460px;text-align:justify;font-size:25px">
            <p style="">{!! $text_1 !!}</p>
        </div>
        <div class="absolute" style="top: 1260px;left:145px;width:460px;text-align:justify;font-size:25px">
            <p class="bold gold" style="font-size: 30px;">Objective</p>
            <p style="">{!! $text_2 !!}</p>
        </div>
        <div class="absolute" style="top: 1630px;left:145px;width:460px;text-align:justify;font-size:25px">
            <p class="bold gold" style="font-size: 30px;">LUXE Properties</p>
            <p style="">{!! $text_3 !!}</p>
        </div>
        <div class="absolute" style="top: 1760px;left:190px;text-align:justify;font-size:30px;line-height:45px">
            <p style="">{!! $text_4 !!}</p>
            <p style="">{!! $text_5 !!}</p>
            <p style="margin-top:5px">{!! $text_6 !!}</p>
        </div>
        <div class="absolute" style="bottom: 520px;left:160px">
            <p class="bold" style="font-size: 40px;letter-spacing:-2px;">Scan Here For Website</p>
        </div>
        <div class="absolute" style="left:835px;top:110px">
            <p class="bold gold" style="font-size: 40px;">Education & Accomplishments</p>
            <table style="width:1125px;margin-bottom:30px">
                @for ($i = 0; $i < count($section_1_title); $i++) <tr>
                    <td>
                        <p class="bold-600" style="font-size: 25px;">{{$section_1_title[$i]}}</p>
                        <p style="font-size: 20px;">{{$section_1_subtitle[$i]}}</p>
                    </td>
                    <td>
                        <p class="bold-600" style="font-size: 25px;">{{$section_1_year[$i]}}</p>
                    </td>
                    </tr>
                    @endfor
            </table>

            <p class="bold gold" style="font-size: 40px;">Real Estate Experience</p>
            <table style="min-width:750px;margin-bottom:30px">
                @for ($i = 0; $i < count($section_2_title); $i++) <tr>
                    <td>
                        <p class="bold-600" style="font-size: 25px;">{{$section_2_title[$i]}}</p>
                    </td>
                    <td>
                        <p class="" style="font-size: 25px;">{{$section_2_subtitle[$i]}}</p>
                    </td>
                    </tr>
                    @endfor
            </table>

            <p class="bold gold" style="font-size: 40px;">Language</p>
            <table style="min-width:750px;margin-bottom:30px">
                @for ($i = 0; $i < count($section_3_title); $i++) <tr>
                    <td>
                        <p class="" style="font-size: 25px;">{{$section_3_title[$i]}}</p>
                    </td>
                    <td>
                        <p class="bold-600" style="font-size: 25px;">{{$section_3_subtitle[$i]}}</p>
                    </td>
                    </tr>
                    @endfor
            </table>

            <p class="bold gold" style="font-size: 40px;">Organizations</p>
            <table style="min-width:750px">
                @for ($i = 0; $i < count($section_4_title); $i++) <tr>
                    <td>
                        <p class="bold-600" style="font-size: 25px;">{{$section_4_title[$i]}}</p>
                    </td>
                    <td>
                        <p class="" style="font-size: 25px;">{{$section_4_subtitle[$i]}}</p>
                    </td>
                    </tr>
                    @endfor
            </table>
        </div>

        <div class="absolute" style="left:835px;top:1150px">
            <p class="bold gold" style="font-size: 40px;">References</p>
            <p class="" style="font-size: 28px;"><i>Transactions / Have Conducted From 2018 - Present</i></p>
            <div>
                <table class="listings" style="min-width: 1010px">
                    @php
                    $text_references = explode("\n", $text_references)
                    @endphp
                    @for ($index = 0; $index < count($text_references)/5; $index++) <tr>
                        @for ($index_2 = $index*5; $index_2 < $index*5+5; $index_2++) <td>
                            @if (!empty($text_references[$index_2]))
                            {{$text_references[$index_2]}}
                            @endif
                            </td>
                            @endfor
                            </tr>
                            @endfor
                </table>
            </div>
        </div>
        <div class="absolute" style="left:835px;top:2260px">
            <p class="bold gold" style="font-size: 40px;">Current Listings</p>
            <div>
                <table class="listings" style="min-width: 1010px">
                    @php
                    $current_listings = explode("\n", $current_listings)
                    @endphp
                    @for ($index = 0; $index < count($current_listings)/5; $index++) <tr>
                        @for ($index_2 = $index*5; $index_2 < $index*5+5; $index_2++) <td>
                            @if (!empty($current_listings[$index_2]))
                            {{$current_listings[$index_2]}}
                            @endif
                            </td>
                            @endfor
                            </tr>
                            @endfor
                </table>
            </div>
        </div>
    </div>
</body>

</html>`