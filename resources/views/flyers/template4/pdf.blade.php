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
        size: 1000px 778px;
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
        left: 300px;
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
</style>

<body>
    <div class="page">
        {{-- Images --}}
        <div class="absolute" style="top:0;left:0;">
            <img src="{{$img_3}}" alt="" width="905px" height="580px">
        </div>
        <div class="absolute" style="top:0;left:0;">
            <img src="images/flyers/template4/main.png" alt="">
        </div>
        <div class="absolute" style="bottom:0;left:25px;">
            <img src="{{$img_5}}" alt="" height="300px" width="210px">
        </div>
        <div class="absolute" style="bottom:50px;left:250px;">
            <img src="images/flyers/template1/social.png" alt="" style="height:150px;">
        </div>
        <div class="absolute" style="bottom:140px;left:698px;">
            <img src="{{$img_1}}" alt="" height="128px" width="172px">
        </div>
        <div class="absolute" style="bottom:8px;left:698px;">
            <img src="{{$img_2}}" alt="" height="128px" width="172px">
        </div>

        {{-- Text --}}
        <div class="absolute" style="top:30px;left:55px;">
            <p class="white" style="font-size: 40px;letter-spacing:-1px;">{!! $text_1 !!}</p>
        </div>
        <div class="absolute" style="top:100px;left:55px;">
            <p class="oswald white" style="font-size: 20px;letter-spacing:-1px;">{!! $text_2 !!}</p>
        </div>
        <div class="absolute" style="top:60px;right:210px;text-align:right;">
            <p class="oswald white" style="font-size: 25px;">{!! $text_3 !!}</p>
        </div>
        <div class="absolute" style="top:60px;left:823px;">
            <p class="oswald white" style="font-size: 25px;">{!! $text_4 !!}</p>
        </div>
        <div class="absolute" style="top: 100px;width: 1000px;">
            <div style="position: relative;left:430px;">
                <h1 class="oswald" style="color:#6d6e71;font-size:20px;transform: rotate(-90deg);letter-spacing:1px;">
                    {!! $text_11 !!}</h1>
            </div>
        </div>

        <div class="absolute agent-info" style="bottom:165px;width:100%;">
            <p class="" style="font-size: 25px;">{!! $text_5 !!}</p>
            <p class="" style="font-size: 11px;margin-top:-7px;letter-spacing:1px;">{!! $text_6 !!}</p>
        </div>
        <div class="absolute agent-info" style="bottom:100px;width:100%;">
            <p class="ibm" style="letter-spacing:1px;">{!! $text_7 !!}</p>
            <p class="ibm" style="margin-top:-7px;letter-spacing:1px;">{!! $text_8 !!}</p>
        </div>
        <div class="absolute agent-info" style="bottom:50px;width:100%;">
            <p class="ibm social" style="letter-spacing:1px;">{!! $text_9 !!}</p>
            <p class="ibm social" style="margin-top:-7px;letter-spacing:1px;">{!! $text_10 !!}</p>
        </div>
    </div>
</body>

</html>