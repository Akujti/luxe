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
</style>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Gochi+Hand&display=swap');

    * {
        font-family: 'Montserrat';
    }

    .gochi {
        font-family: 'Gochi Hand', cursive;
        font-weight: 400;
    }

    .roboto {
        font-family: 'Roboto';
        font-weight: 400;
    }

    @page {
        padding: 0px;
        margin: 0px;
        size: 1000px 3695px;
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
        /* font-weight: 700; */
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
        width: 200px;
        height: 200px;
        border: 10px solid white;
    }

    h1:after {
        /* font: normal normal normal 30px/1 FontAwesome;
        content: '\f083'; */
    }

    .personal {
        left: 480px;
    }

    .info-size {
        font-size: 25px;
        left: 520px;
    }

    .diagonal {
        max-width: 350px;
        border-left: 10px solid #C9A668;
        background-color: black;
        height: 120px;
    }

    .text-17.extra-small,
    .text-24.extra-small {
        margin-top: 6px;
        font-size: 18px !important;
    }

    .text-17.small,
    .text-24.small {
        margin-top: 3px;
        font-size: 22px !important;
    }

    .text-17.normal,
    .text-24.normal {
        font-size: 25px !important;
    }
</style>

<body>
    <div class="page">
        {{-- Images --}}
        <div class="absolute">
            <img src="{{ $img_1_input }}" alt="" style="width: 1000px;height:1000px;object-fit:cover;">
        </div>
        <div class="absolute">
            <img src="images/emails/template1/main 2.png" alt="" style="width: 1000px;height:3695px;">
        </div>
        <div class="absolute circle">
            <span>
                <img class="circle" src="{{ $img_2_input }}" alt="">
            </span>
            <span>
                <img class="circle" src="{{ $img_3_input }}" alt="">
            </span>
            <span>
                <img class="circle" src="{{ $img_4_input }}" alt="">
            </span>
        </div>
        <div class="absolute" style="top:54%;left:60px;">
            <img src="images/emails/triangles.png" alt="" height="300px">
        </div>
        <div class="absolute" style="top:72%;left:195px;">
            <img class="profile-pic" src="{{ $img_5_input }}" alt="">
        </div>
        <div class="absolute personal" style="top:74.8%;">
            <img src="images/emails/template1/icons.png" alt="" height="120px">
        </div>
        <div class="absolute" style="top:82%;left:195px;">
            <img class="profile-pic" src="{{ $img_6_input }}" alt="">
        </div>
        <div class="absolute personal" style="top:84.8%;">
            <img src="images/emails/template1/icons.png" alt="" height="120px">
        </div>
        <div class="absolute" style="top:92.9%;width:100%;text-align:center;">
            <img src="images/emails/template1/logos.png" alt="" width="200px">
        </div>

        {{-- Text --}}
        <div class="absolute" style="text-align: right;top:590px;right:0px;">
            <div class="diagonal">
                <h1></h1>
            </div>
        </div>
        <div class="absolute" style="text-align: right;top:550px;right:50px;">
            <h1 class="gold" style="font-size:110px;">
                {{ $text_1 }}</h1>
        </div>
        <div class="absolute" style="text-align: right;top:630px;right:50px;">
            <h1 class="" style="font-size:150px;">{{ $text_2 }}</h1>
        </div>
        <div class="absolute" style="text-align: right;top:21%;right:50px;">
            <h1 class="gochi" style="font-size:100px;">{{ $text_3 }}</h1>
        </div>
        <div class="absolute" style="text-align: right;top:25%;right:50px;">
            <h1 class="gold" style="font-size:60px;">{{ $text_4 }}</h1>
        </div>
        <div class="absolute" style="text-align: center;top:27.7%;width:700px;left:250px;">
            <h1 class="white" style="font-size:30px;">{{ $text_5 }}</h1>
        </div>
        <div class="absolute" style="text-align: right;top:30%;right:50px;">
            <h1 class="gold" style="font-size:45px;">{{ $text_6 }}</h1>
        </div>
        <div class="absolute" style="text-align: right;top:31.5%;right:50px;">
            <h1 class="" style="font-size:45px;color:#595959">{{ $text_7 }}</h1>
        </div>
        <div class="absolute" style="text-align: right;top:34%;right:80px;">
            <h1 class="white" style="font-size:38px;">{{ $text_8 }}</h1>
        </div>
        <div class="absolute" style="text-align: center;top:46.5%;left:30px;">
            <h1 class="white" style="font-size:55px;">{{ $text_9 }}</h1>
        </div>
        <div class="absolute" style="top:51%;left:150px;right:150px;">
            <h1 class="gold" style="font-size:40px;">{{ $text_10 }}</h1>
            <p style="font-size:37px;line-height:35px;text-align:justify;font-family:Lato;font-weight:300;">{!! $text_11
                !!}</p>
        </div>
        <div class="absolute" style="text-align: center;top:67.6%;left:30px;">
            <h1 class="white" style="font-size:55px;">{{ $text_12 }}</h1>
        </div>
        <div class="absolute personal" style="top:71.5%;">
            <h1 class="gold" style="font-size:35px;">{{ $text_13 }}</h1>
        </div>
        <div class="absolute personal" style="top:72.7%;">
            <h1 class="" style="font-size:20px;">{{ $text_14 }}</h1>
        </div>

        <div class="absolute info-size" style="top:74.6%;">
            <p>{{ $text_15 }}</p>
        </div>
        <div class="absolute info-size" style="top:75.8%;">
            <p>{{ $text_16 }}</p>
        </div>
        <div class="absolute info-size" style="top:77%;">
            <p class="text-17 {{$text_17_select}}">{{ $text_17 }}</p>
        </div>

        <div class="absolute" style="text-align: center;top:79.25%;left:-325px;">
            <h1 class="white" style="font-size:33px;">{{ $text_18 }}</h1>
        </div>
        <div class="absolute" style="text-align: center;top:79.25%;left:325px;">
            <h1 class="gold" style="font-size:33px;">{{ $text_19 }}</h1>
        </div>

        <div class="absolute personal" style="top:81.8%;">
            <h1 class="gold" style="font-size:35px;">{{ $text_20 }}</h1>
        </div>
        <div class="absolute personal" style="top:83%;">
            <h1 class="" style="font-size:20px;">{{ $text_21 }}</h1>
        </div>
        <div class="absolute info-size" style="top:84.6%;">
            <p>{{ $text_22 }}</p>
        </div>
        <div class="absolute info-size" style="top:85.8%;">
            <p>{{ $text_23 }}</p>
        </div>
        <div class="absolute info-size" style="top:87%;">
            <p class="text-24 {{$text_24_select}}">{{ $text_24 }}</p>
        </div>
        <div class="absolute" style="text-align: center;top:89.62%;left:-325px;">
            <h1 class="white" style="font-size:33px;">{{ $text_25 }}</h1>
        </div>
        <div class="absolute" style="text-align: center;top:89.62%;left:325px;">
            <h1 class="gold" style="font-size:33px;">{{ $text_26 }}</h1>
        </div>
        <div class="absolute" style="text-align: center;top:97%;">
            <h1 class="" style="font-size:22px;font-weight:400;">{{ $text_27 }}</h1>
        </div>
        <div class="absolute" style="text-align: center;top:98.8%;">
            <h1 class="" style="font-size:16px;font-weight:400;color:#9e9e9e">{{ $text_28 }}</h1>
        </div>
    </div>
</body>

</html>