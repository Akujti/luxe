<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Flyer</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Oswald&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@600&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@500&display=swap');
</style>
<style>
    * {
        font-family: 'Montserrat';
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

    @page {
        padding: 0px;
        margin: 0px;
        size: 1000px 1286px;
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
        color: #C5A467;
    }

    .white {
        color: white;
    }

    .bold {
        font-weight: bold;
    }

    .extra-bold {
        font-weight: 800;
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

    div.circle {
        top: 39%;
        left: 35px;
    }

    img.circle {
        border-radius: 145px;
        width: 280px;
        height: 280px;
        object-fit: cover;
        border: 10px solid #C9A668;
    }

    h1.small {
        font-size: 273px;
    }

    h1.normal {
        font-size: 370px;
    }

    h1.large {
        font-size: 427px;
    }

    h1.main {
        margin: 0;
        line-height: 310px;
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

    .text-3.extra-small {
        font-size: 45px;
    }

    .text-3.small {
        font-size: 50px;
    }

    .text-3.normal {
        font-size: 55px;
    }

    .text-4.small {
        font-size: 20px;
    }

    .text-4.normal {
        font-size: 25px;
    }

    .text-4.large {
        font-size: 30px;
    }
</style>

<body>
    <div class="page">
        {{-- Images --}}
        <div class="absolute" style="top:152px;left:128px;">
            <img src="{{ $img_1_input }}" alt="" style="width:805px;height:483px">
        </div>
        <div class="absolute" style="bottom:0;right:0;">
            <img src="{{ $img_4_input }}" alt="" style="width: 257px;height:440px;">
        </div>
        <div class="absolute">
            <img src="images/flyers/template1/main.png" alt="" style="width: 1000px;height:1286px;">
        </div>
        <div class="absolute" style="bottom:30;right:280;">
            <img src="images/flyers/template1/social.png" alt="" style="height:150px;">
        </div>
        <div class="absolute" style="top:550px;left:70px;">
            <span>
                <img class="white-border" src="{{ $img_2_input }}" alt="" style="width:300px;height:170px">
            </span>
            <span>
                <img class="white-border" src="{{ $img_3_input }}" alt=""
                    style="width:300px;height:170px;margin-left:-15px;">
            </span>
        </div>
        <div class="absolute" style="bottom:0;right:170px;">
            <img src="{{ $img_5_input }}" alt="" style="height:220px;width:155px;">
        </div>

        {{-- Text --}}
        <div class="absolute" style="text-align: right;top:28px;right:90px;">
            <p class="extra-bold title">{{ $text_1 }}</p>
            <p class="extra-bold white title" style="margin-top:-60px">{{ $text_2 }}</p>
        </div>
        <div class="absolute" style="text-align: right;top:28px;right:510px;">
            <p class="oswald white text-3 {{$text_3_select}}" style="letter-spacing:-1px;">{{ $text_3 }}</p>
            <p class="text-4 {{$text_4_select}}" style="margin-top:-25px">{{ $text_4 }}</p>
        </div>
        <div class="absolute" style="text-align: right;top:225px;right:740px;">
            <p class="gold list" style="">{!! $text_5 !!}</p>
            <p class="gold list" style="margin-top:30px;">{!! $text_6 !!}</p>
            <p class="gold list" style="margin-top:30px;">{!! $text_7 !!}</p>
            <p class="list" style=" font-size:28px;margin-top:31px;">{!! $text_8 !!}</p>
        </div>
        <div class="absolute" style="top:700px;left:50px;">
            <p class="gochi" style="font-size: 55px;letter-spacing:-1px;">Offered at</p>
            <p class="oswald-med gold" style="font-size: 75px;margin-top:-38px;letter-spacing:-3px">{{ $text_11 }}</p>
        </div>
        <div class="absolute" style="top:690px;right:50px;text-align:right;width:100%;">
            <p class="gochi gold" style="font-size: 90px;">{{ $text_9 }}</p>
            <p class="lato white" style="font-size: 30px;margin-top:-30px;font-weight:900;letter-spacing:1px;">
                {{ $text_10 }}</p>
        </div>
        <div class="absolute" style="top:885px;left:50px;right:300px;">
            <p class="gold bold" style="font-size: 30px;letter-spacing:-1px;">{{ $text_12 }}</p>
            <p class="ibm" style="font-size: 16px;margin-top:-5px;">{!! $text_13 !!}</p>
        </div>
        <div class="absolute" style="bottom:150px;right:420px;text-align:right;width:100%;">
            <p class="" style="font-size: 30px;">{!! $text_14 !!}</p>
            <p class="" style="font-size: 12px;margin-top:-7px;letter-spacing:1px;">{{ $text_15 }}</p>
        </div>
        <div class="absolute" style="bottom:90px;right:420px;text-align:right;width:100%;">
            <p class="ibm" style="letter-spacing:1px;">{{ $text_16 }}</p>
            <p class="ibm" style="margin-top:-7px;letter-spacing:1px;">{{ $text_17 }}</p>
        </div>
        <div class="absolute" style="bottom:40px;right:420px;text-align:right;width:100%;">
            <p class="ibm social" style="letter-spacing:1px;">{{ $text_18 }}</p>
            <p class="ibm social" style="margin-top:-7px;letter-spacing:1px;">{!! $text_19 !!}</p>
        </div>
    </div>
</body>

</html>