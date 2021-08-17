<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Door Hanger Template 1</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Oswald&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@600&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@500&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Lato:wght@300');
    @import url('https://fonts.googleapis.com/css2?family=Lato:wght@400');
    @import url('https://fonts.googleapis.com/css2?family=Lato:wght@700');
    @import url('https://fonts.googleapis.com/css2?family=Lato:wght@900');
</style>
<style>
    * {
        font-family: 'Lato';
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
        size: 1000px 2541px;
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
        color: #C5A467;
    }

    .white {
        color: white;
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

    .w-100 {
        width: 100%;
    }
</style>

<body>
    <div class="page">
        {{-- Image --}}
        <div class="absolute" style="top: 450px;left:0;">
            <img src="{{$img_1}}" alt="" width="900px" height="1180px">
        </div>
        <div class="absolute" style="top: 0;left:0;">
            <img src="images/door-hangers/template1/front.png" alt="">
        </div>

        {{-- Text --}}
        <div class="absolute" style="top: -10px;right:20px;width:100%;text-align:right;">
            <p class="white bold" style="font-size:100px">{!! $text_1 !!}</p>
            <p class="gold bold" style="font-size:100px;margin-top:-55px;">{!! $text_2 !!}</p>
        </div>
        <div class="absolute w-100" style="top: 1300px;text-align:center;left:340px;">
            <p class="bold" style="font-size:50px;line-height:50px;">{!! $text_3 !!}</p>
            <p class="" style="font-size:40px;line-height:40px;">{!! $text_4 !!}</p>
            <p class="gold extra-bold" style="font-size:80px;line-height:80px;">{!! $text_5 !!}</p>
        </div>
        <div class="absolute w-100" style="top: 1750px;text-align:center;left:50;right:50;">
            <p class="gold bold" style="font-size:100px;line-height:73px;;">{!! $text_6 !!}</p>
            <p class="white bold" style="font-size:50px;line-height:50px;">{!! $text_7 !!}</p>
        </div>
        <div class="absolute w-100" style="top: 2100px;text-align:center;left:50;right:50;">
            <p class="bold" style="font-size:35px;">{!! $text_8 !!}</p>
        </div>
        <div class="absolute w-100" style="top: 2170px;text-align:center;left:-410px;">
            <p class="white" style="font-size:32px;">{!! $text_9 !!}</p>
            <p class="gold" style="font-size:32px;margin-top:30px;">{!! $text_11 !!}</p>
            <p class="white" style="font-size:32px;margin-top:25px;">{!! $text_13 !!}</p>
            <p class="gold" style="font-size:32px;margin-top:22px;">{!! $text_15 !!}</p>
        </div>
        <div class="absolute w-100" style="top: 2170px;text-align:center;left:410px;">
            <p class="white" style="font-size:32px;">{!! $text_10 !!}</p>
            <p class="gold" style="font-size:32px;margin-top:30px;">{!! $text_12 !!}</p>
            <p class="white" style="font-size:32px;margin-top:25px;">{!! $text_14 !!}</p>
            <p class="gold" style="font-size:32px;margin-top:22px;">{!! $text_16 !!}</p>
        </div>
    </div>
    <div class="page_break"></div>
    <div class="page">
        {{-- Images --}}
        <div class="absolute" style="top: 445px;right:0;">
            <img src="{{$img_2}}" alt="" width="600px" height="810px">
        </div>
        <div class="absolute" style="bottom: 110px;left:0;">
            <img src="{{$img_3}}" alt="" width="600px" height="810px">
        </div>
        <div class="absolute" style="top: 0;left:0;">
            <img src="images/door-hangers/template1/back.png" alt="">
        </div>

        {{-- Text --}}
        <div class="absolute" style="top: -10px;left:20px;width:100%;">
            <p class="white bold" style="font-size:100px">{!! $text_17 !!}</p>
            <p class="gold bold" style="font-size:100px;margin-top:-55px;">{!! $text_18 !!}</p>
        </div>
        <div class="absolute w-100" style="top: 860px;text-align:center;left:-300px;">
            <p class="white bold" style="font-size:80px;line-height:80px;">{!! $text_19 !!}</p>
            <p class="gold bold" style="font-size:80px;line-height:80px;margin-top:-30px">{!! $text_20 !!}</p>
            <p class="white bold" style="font-size:50px;line-height:50px;margin-top:-15px">{!! $text_21 !!}</p>
            <p class="gold" style="font-size:35px;line-height:30px;letter-spacing:-2px;">{!! $text_22 !!}</p>
        </div>
        <div class="absolute w-100" style="top: 1350px;text-align:right;right:400px;">
            <p class="gold bold" style="font-size:35px;line-height:30px;">{!! $text_23 !!}</p>
        </div>
        <div class="absolute w-100" style="bottom: 240px;text-align:center;left:300px;">
            <p class="bold" style="font-size:80px;line-height:80px;">{!! $text_24 !!}</p>
            <p class="gold bold" style="font-size:80px;line-height:80px;margin-top:-30px">{!! $text_25 !!}</p>
            <p class="bold" style="font-size:50px;line-height:50px;margin-top:-15px">{!! $text_26 !!}</p>
            <p class="gold" style="font-size:35px;line-height:30px;letter-spacing:-2px;">{!! $text_27 !!}</p>
        </div>
    </div>
</body>

</html>