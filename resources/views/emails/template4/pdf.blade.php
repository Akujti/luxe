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
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap');
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
        size: 1000px 3523px;
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

    .w-100 {
        width: 100%;
    }

    .text-center {
        text-align: center;
    }

    .info-size {
        left: 518px;
        font-size: 24px;
    }

    .font-gray {
        color: #6d6e71;
    }

    .left-box {
        left: 570px;
    }

    .right-box {
        right: 570px;
    }

    .text-right {
        text-align: right;
    }
</style>

<body>
    <div class="page">
        {{-- Images --}}
        <div class="absolute">
            {{-- <img src="{{ $img_1_input }}" alt="" style="width: 1000px;height:1050px;object-fit:cover;"> --}}
        </div>
        <div class="absolute">
            <img src="images/emails/template4/main.jpg" alt="" style="width: 1000px;height:3523px;">
        </div>
        <div class="absolute" style="top:35px;left:410px">
            <img src="images/emails/template4/logo.png" alt="" width="180px" height="202px">
        </div>
        <div class="absolute" style="top:405px;left:35px">
            <img src="{{$img_1}}" alt="" width="450px" height="450px">
        </div>
        <div class="absolute" style="top:885px;left:517px">
            <img src="{{$img_2}}" alt="" width="450px" height="450px">
        </div>
        <div class="absolute" style="top:1368px;left:35px">
            <img src="{{$img_3}}" alt="" width="450px" height="450px">
        </div>
        <div class="absolute" style="top:1850px;left:518px">
            <img src="{{$img_4}}" alt="" width="450px" height="450px">
        </div>
        <div class="absolute" style="top:2790px;left:105px;outline:10px solid white">
            <img src="{{$img_5}}" alt="" width="270px" height="280px">
        </div>
        <div class="absolute" style="top:2951px;left:479px">
            <img src="images/emails/template4/contact-icons.png" alt="" height="105px">
        </div>
        <div class="absolute" style="top:3233px;left:423px">
            <img src="images/emails/template4/logo-2.png" alt="" width="152px" height="55px">
        </div>
        <div class="absolute" style="top:3393px;left:393px">
            <img src="images/emails/template4/icons.png" alt="" width="215px" height="48px">
        </div>

        {{-- Text --}}
        <div class="absolute w-100 text-center" style="top:300px">
            <p class="gold bold-600" style="font-size: 42px;letter-spacing:15px;letter-spacing:12px;">{{$text_1}}</p>
        </div>
        {{-- First Box --}}
        <div class="absolute left-box" style="top:490px">
            <p class="gold bold-600" style="font-size: 33px;">{{$text_2}}</p>
        </div>
        <div class="absolute left-box" style="top:530px">
            <p class="font-gray" style="font-size: 25px;">{{$text_3}}</p>
        </div>
        <div class="absolute left-box" style="top:595px">
            <p class="font-gray" style="font-size: 25px;">{{$text_4}}</p>
        </div>
        <div class="absolute left-box" style="top:660px">
            <p class="font-gray" style="font-size: 25px;">{{$text_5}}</p>
        </div>
        <div class="absolute left-box" style="top:725px">
            <p class="font-gray" style="font-size: 25px;">{{$text_6}}</p>
        </div>
        {{-- Second Box --}}
        <div class="absolute right-box text-right" style="top:970px">
            <p class="gold bold-600" style="font-size: 33px;">{{$text_7}}</p>
        </div>
        <div class="absolute right-box text-right" style="top:1013px">
            <p class="font-gray" style="font-size: 25px;">{{$text_8}}</p>
        </div>
        <div class="absolute right-box text-right" style="top:1075px">
            <p class="font-gray" style="font-size: 25px;">{{$text_9}}</p>
        </div>
        <div class="absolute right-box text-right" style="top:1140px">
            <p class="font-gray" style="font-size: 25px;">{{$text_10}}</p>
        </div>
        <div class="absolute right-box text-right" style="top:1205px">
            <p class="font-gray" style="font-size: 25px;">{{$text_11}}</p>
        </div>
        {{-- Third Box --}}
        <div class="absolute left-box" style="top:1450px">
            <p class="gold bold-600" style="font-size: 33px;">{{$text_12}}</p>
        </div>
        <div class="absolute left-box" style="top:1490px">
            <p class="font-gray" style="font-size: 25px;">{{$text_13}}</p>
        </div>
        <div class="absolute left-box" style="top:1555px">
            <p class="font-gray" style="font-size: 25px;">{{$text_14}}</p>
        </div>
        <div class="absolute left-box" style="top:1625px">
            <p class="font-gray" style="font-size: 25px;">{{$text_15}}</p>
        </div>
        <div class="absolute left-box" style="top:1690px">
            <p class="font-gray" style="font-size: 25px;">{{$text_16}}</p>
        </div>
        {{-- Fourth Box --}}
        <div class="absolute right-box text-right" style="top:1930px">
            <p class="gold bold-600" style="font-size: 33px;">{{$text_17}}</p>
        </div>
        <div class="absolute right-box text-right" style="top:1975px">
            <p class="font-gray" style="font-size: 25px;">{{$text_18}}</p>
        </div>
        <div class="absolute right-box text-right" style="top:2040px">
            <p class="font-gray" style="font-size: 25px;">{{$text_19}}</p>
        </div>
        <div class="absolute right-box text-right" style="top:2105px">
            <p class="font-gray" style="font-size: 25px;">{{$text_20}}</p>
        </div>
        <div class="absolute right-box text-right" style="top:2170px">
            <p class="font-gray" style="font-size: 25px;">{{$text_21}}</p>
        </div>
        {{--  --}}
        <div class="absolute info-size" style="top:2942px;">
            <p class="font-gray">{{$text_26}}</p>
        </div>
        <div class="absolute info-size" style="top:2982px;">
            <p class="font-gray">{{$text_27}}</p>
        </div>
        <div class="absolute info-size" style="top:3022px;">
            <p class="font-gray">{{$text_28}}</p>
        </div>
        <div class="absolute w-100 text-center" style="top:2365px;">
            <p class="bold-700 font-gray" style="font-size: 35px">TO LEARN MORE<br>ABOUT CURRENT PROJECTS CALL</p>
        </div>
        <div class="absolute w-100 text-center" style="top:2465px;">
            <p class="bold-700 gold" style="font-size: 70px">{{$text_22}}</p>
        </div>
        <div class="absolute w-100 text-center" style="top:2560px;">
            <p class="bold-700 font-gray" style="font-size: 35px">OR</p>
        </div>
        <div class="absolute w-100 text-center" style="top:2630px;">
            <p class="white bold-700" style="font-size: 55px">{{$text_23}}</p>
        </div>
        <div class="absolute w-100" style="top:2795px;left:474px;">
            <p class="gold bold-600" style="font-size: 46px">{{$text_24}}</p>
        </div>
        <div class="absolute w-100" style="top:2857px;left:474px;">
            <p class="font-gray bold-600" style="font-size: 28px">{{$text_25}}</p>
        </div>
        <div class="absolute w-100" style="text-align:center;top:3130px;left:-430px;">
            <p class="white bold-700" style="font-size: 35px">{{$text_29}}</p>
        </div>
        <div class="absolute w-100" style="text-align:center;top:3130px;left:370px;">
            <p class="gold bold-700" style="font-size: 35px">{{$text_30}}</p>
        </div>
        {{-- Footer --}}
        <div class="absolute" style="text-align: center;top:3320px;left:20px">
            <h1 class="" style="font-size:23px;font-weight:400;letter-spacing:3px">{{$text_31}}</h1>
        </div>
        <div class="absolute" style="text-align: center;top:3483px;">
            <h1 class="" style="font-size:18px;font-weight:400;color:#9e9e9e">Copyright © 2021 LUXE
                Properties, LLC, All rights reserved.</h1>
        </div>
    </div>
</body>

</html>