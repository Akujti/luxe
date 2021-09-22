<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email Blast</title>
</head>
<style>
    /* @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap'); */
    @import url('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap');
</style>
<style>
    * {
        font-family: 'Montserrat';
    }

    .poppins {
        font-family: 'Poppins';
        font-weight: 400;
    }

    .roboto {
        font-family: 'Roboto';
        font-weight: 400;
    }

    @page {
        padding: 0px;
        margin: 0px;
        size: 1000px 4673px;
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

    .bold-600 {
        font-weight: 600;
    }

    .bold-700 {
        font-weight: 700;
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

    .profile-pic {
        width: 250px;
        height: 250px;
        border: 10px solid white;
    }

    div.map {
        top: 52.5%;
    }

    img.map {
        width: 280px;
        height: 280px;
        border: 10px solid white;
    }

    h1:after {
        /* font: normal normal normal 30px/1 FontAwesome;
        content: '\f083'; */
    }

    .personal {
        left: 450px;
    }

    .info-size {
        font-size: 25px;
        left: 500px;
    }

    .diagonal {
        max-width: 350px;
        border-left: 10px solid #C9A668;
        background-color: black;
        height: 120px;
    }

    div.map-title {
        width: 300px;
        text-align: center;
        top: 61%;
    }

    h1.map-title {
        color: #6d6e71;
        font-size: 35px;
    }
</style>

<body>
    <div class="page">
        {{-- Images --}}
        <div class="absolute">
            {{-- <img src="{{ $img_1_input }}" alt="" style="width: 1000px;height:1050px;object-fit:cover;"> --}}
        </div>
        <div class="absolute">
            <img src="images/emails/template3/main.png" alt="" style="width: 1000px;height:4673px;">
        </div>
        <div class="absolute" style="top:53px;left:360px">
            <img src="images/emails/template3/logo.png" alt="" width="290px">
        </div>
        <div class="absolute" style="top:409px;">
            <img src="{{$img_1}}" alt="" width="835px" height="835px">
        </div>
        <div class="absolute" style="top:2592px;right:0;">
            <img src="{{$img_2}}" alt="" width="835px" height="567px">
        </div>
        <div class="absolute" style="top:3207px;left:169px;">
            <img src="{{$img_3}}" alt="" width="621px" height="415px">
        </div>
        <div class="absolute" style="top:94.3%;width:100%;text-align:center;">
            <img src="images/emails/template1/logos.png" alt="" width="200px">
        </div>

        {{-- Text --}}
        <div class="absolute" style="top: 1100px;width: 1300px;font-size: 30px;">
            <div style="position: relative;left:245px;">
                <h1 class="bold-700 gold" style="transform: rotate(-90deg);text-align: center;">
                    FOR SALE: &nbsp;&nbsp;&nbsp; <span style="color: black">{!! $text_15 !!}</span>
                </h1>
            </div>
        </div>
        <div class="absolute" style="width: 100%;text-align:center;top:160px;">
            <p class="gold poppins bold-600" style="font-size: 80px;margin:0">{!! $text_1 !!}</p>
            <p class="poppins bold-600" style="font-size: 80px;margin-top:-80px">{!! $text_2 !!}</p>
        </div>
        <div class="absolute" style="top:1120px;background:white;right:200px;padding-top:0px;padding-bottom:0px;">
            <ul style="margin:0px;padding-left: 35px;padding-bottom:10px;">
                <li style="font-size:35px;">{!! $text_3 !!}</li>
                <li style="font-size:35px;" class="gold">|</li>
                <li style="font-size:35px;">{!! $text_4 !!}</li>
                <li style="font-size:35px;" class="gold">|</li>
                <li style="font-size:35px;">{!! $text_5 !!}</li>
            </ul>
        </div>
        <div class="absolute" style="width: 100%;text-align:right;top:1255px;right:296px">
            <p class="gold bold-700" style="font-size: 45px;margin:0">{!! $text_6 !!}</p>
            <p class="" style="font-size: 40px;margin-top:-10px">{!! $text_7 !!}</p>
        </div>
        <div class="absolute" style="width: 100%;top:1500px;left:85px;right:200px;">
            <p class="poppins" style="font-size: 31px;">{!! $text_8 !!}</p>
        </div>
        <div class="absolute" style="width: 100%;top:3710px;left:85px;right:170px;">
            <p class="gold bold-700" style="font-size: 31px">{!! $text_10 !!}</p>
            <p class="white poppins" style="font-size: 31px;">{!! $text_11 !!}</p>
        </div>
        <div class="absolute" style="width: 100%;text-align:center;top:2425px;left:-150px">
            <p class="white bold-700" style="font-size: 50px;">{!! $text_9 !!}</p>
        </div>
        <div class="absolute" style="width: 100%;text-align:right;top:4210px;right:165px;">
            <p class="gold bold-700" style="font-size: 50px;margin:0">{!! $text_12 !!}</p>
            <p class="bold-700" style="font-size: 80px;margin-top:-40px">{!! $text_13 !!}</p>
        </div>
        {{-- Footer --}}
        <div class="absolute" style="text-align: center;top:97.5%;">
            <h1 class="" style="font-size:22px;font-weight:400;color:white">{!! $text_14 !!}</h1>
        </div>
        <div class="absolute" style="text-align: center;top:99%;">
            <h1 class="" style="font-size:18px;font-weight:400;color:#9e9e9e">Copyright © 2021 LUXE
                Properties, LLC, All rights reserved.</h1>
        </div>
    </div>
</body>

</html>