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

    .agent-info {
        left: 560px;
    }

    .text-splitter {
        margin-left: 8px;
        margin-right: 8px;
        margin-top: -15px;
    }

    .list-inline {
        list-style: none;
        padding: 0;
    }

    ul li {
        display: inline;
        font-size: 40px;
        margin-right: 10px;
        letter-spacing: -1px;
    }

    .text-border {
        margin: 0;
        padding: 0;
        line-height: 35px;
        padding-left: 20px;
        background: white;
    }

    .text-border.extra-small {
        line-height: 27px !important;
    }

    .text-border.small {
        line-height: 32ch !important;
    }

    .text-border.normal {
        line-height: 37px !important;
    }

    .text-6.extra-small {
        font-size: 30px !important;
    }

    .text-6.small {
        font-size: 35px !important;
    }

    .text-6.normal {
        font-size: 40px !important;
    }
</style>

<body>
    <div class="page">
        {{-- Images --}}
        <div class="absolute" style="top:0;left:0;">
            <img src="{{$img_1_input}}" alt="" style="width:700px;height:700px">
        </div>
        <div class="absolute" style="top:570px;right:0;">
            <img src="{{$img_2_input}}" alt="" style="width:465px;height:200px">
        </div>
        <div class="absolute">
            <img src="images/flyers/template2/main.png" alt="" style="width: 1000px;height:1286px;">
        </div>
        <div class="absolute" style="top:760px;left:0;">
            <img src="{{$img_3_input}}" alt="" style="width:215px;height:220px">
        </div>
        <div class="absolute" style="top:995px;left:0;">
            <img src="{{$img_4_input}}" alt="" style="width:215px;height:220px">
        </div>
        <div class="absolute" style="bottom:80;right:350;">
            <img src="images/flyers/template1/social.png" alt="" style="height:150px;">
        </div>
        <div class="absolute" style="bottom:0;right:0;">
            <img src="{{$img_5_input}}" alt="" style="height:288px;width:209px;">
        </div>

        {{-- Text --}}
        <div class="absolute" style="top:40px;right:50px;text-align:right;">
            <p class="gochi gold" style="font-size: 90px;letter-spacing:-1px;">{{$text_1}}</p>
            <p class="extra-bold" style="color:#231f20;font-size: 110px;margin-top:-70px;letter-spacing:-3px">
                {{$text_2}}</p>
        </div>
        <div class="absolute" style="top:237px;left:350px;">
            <ul>
                <li class="bold gold">{{$text_3}}</li>
                <li class="bold gold">|</li>
                <li class="bold">{{$text_4}}</li>
            </ul>
        </div>
        <div class="absolute" style="top:237px;left:670px;">
            <ul>
                <li class="bold white">{{$text_5}}</li>
            </ul>
        </div>
        <div class="absolute" style="top:335px;left:440px;">
            <ul>
                <li class="gold">
                    <div class="text-border oswald-med text-6 {{$text_6_select}}">{{$text_6}}</div>
                </li>
            </ul>
        </div>
        <div class="absolute" style="top:475px;right:350px;text-align:right;">
            <p class="gochi gold" style="font-size: 50px;letter-spacing:-1px;">Asking Price</p>
            <p class="oswald-med white" style="font-size: 75px;margin-top:-45px;letter-spacing:-3px">{{$text_11}}</p>
        </div>
        <div class="absolute" style="top:423px;left:440px;">
            <p class="oswald-med white" style="font-size: 30px;letter-spacing:-1px;">{{$text_7}}<span
                    class="oswald-med text-splitter">|</span><span style="color:#231f20;" class="oswald-med">{{$text_8}}
                    <span class="oswald-med text-splitter">|</span></span>{{$text_9}}<span
                    class="oswald-med text-splitter">|</span><span style="color:#231f20;"
                    class="oswald-med">{{$text_10}}</span>
            </p>
        </div>
        <div class="absolute" style="top:483px;left:742px;">
            <p class="oswald-med" style="font-size: 37px;letter-spacing:-1px;">{{$text_12}}</p>
        </div>
        <div class="absolute" style="top:800px;left:250px;right:70px;">
            <p class="ibm" style="font-size: 14px;text-align:justify;">{{$text_13}}</p>
        </div>
        <div class="absolute agent-info" style="bottom:215px;width:100%;">
            <p class="" style="font-size: 30px;">{!! $text_14 !!}</p>
            <p class="" style="font-size: 12px;margin-top:-7px;letter-spacing:1px;">{{$text_15}}</p>
        </div>
        <div class="absolute agent-info" style="bottom:155px;width:100%;">
            <p class="ibm" style="letter-spacing:1px;">{{$text_16}}</p>
            <p class="ibm" style="margin-top:-7px;letter-spacing:1px;">{{$text_17}}</p>
        </div>
        <div class="absolute agent-info" style="bottom:105px;width:100%;">
            <p class="ibm social" style="letter-spacing:1px;">{{$text_18}}</p>
            <p class="ibm social" style="margin-top:-7px;letter-spacing:1px;">{!! $text_19 !!}</p>
        </div>
    </div>
</body>

</html>