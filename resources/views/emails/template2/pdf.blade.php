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
        size: 1000px 3690px;
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
            <img src="{{ $img_1_input }}" alt="" style="width: 1000px;height:1050px;object-fit:cover;">
        </div>
        <div class="absolute">
            <img src="images/emails/template2/main.png" alt="" style="width: 1000px;height:3695px;">
        </div>
        <div class="absolute" style="width:100%;top:23.3%;text-align:center;">
            <img src="images/emails/template2/logo.png" alt="" style="width: 320px;">
        </div>
        <div class="absolute map" style="left:0px;">
            <img class="map" src="{{ $img_2_input }}" alt="">
        </div>
        <div class="absolute map" style="width:100%;text-align:center;">
            <img class="map" src="{{ $img_3_input }}" alt="">
        </div>
        <div class="absolute map" style="right:0px;">
            <img class="map" src="{{ $img_4_input }}" alt="">
        </div>

        <div class="absolute" style="top:73.7%;left:110px;">
            <img class="profile-pic" src="{{ $img_5_input }}" alt="">
        </div>
        <div class="absolute personal" style="top:77.5%;">
            <img src="images/emails/template1/icons.png" alt="" height="120px">
        </div>
        <div class="absolute" style="top:83.8%;left:110px;">
            <img class="profile-pic" src="{{ $img_6_input }}" alt="">
        </div>
        <div class="absolute personal" style="top:88%;">
            <img src="images/emails/template1/icons.png" alt="" height="120px">
        </div>
        <div class="absolute" style="top:92.8%;width:100%;text-align:center;">
            <img src="images/emails/template1/logos.png" alt="" width="200px">
        </div>

        {{-- Text --}}
        <div class="absolute" style="width: 100%;text-align:center;top:28%;">
            <h1 class="gold" style="font-size: 90px;letter-spacing:20px;">{{ $text_1 }}</h1>
        </div>
        <div class="absolute" style="width: 100%;text-align:center;top:31.5%;left:110px;right:130px;">
            <h1 class="" style="font-size: 60px;color:#9e9e9e;letter-spacing:0px;line-height:45px;">{{ $text_2 }}</h1>
        </div>
        <div class="absolute" style="text-align:right;top:40.5%;right:54%;">
            <h1 class="gold" style="font-size: 90px;line-height:70px;">{{ $text_3 }}</h1>
        </div>
        <div class="absolute" style="top:40.5%;left:54%;right:50px;">
            <h1 class="white" style="font-size: 45px;line-height:40px;">{!! $text_4 !!}</h1>
        </div>
        {{-- Maps --}}
        <div class="absolute" style="text-align:center;width:100%;top:49.3%">
            <h1 class="gold" style="font-size: 70px;">{{ $text_5 }}</h1>
        </div>
        <div class="absolute map-title" style="left:0px;">
            <h1 class="map-title">{{ $text_6 }}</h1>
        </div>
        <div class="absolute map-title" style="left:350px;">
            <h1 class="map-title">{{ $text_7 }}</h1>
        </div>
        <div class="absolute map-title" style="right:0px;">
            <h1 class="map-title">{{ $text_8 }}</h1>
        </div>

        <div class="absolute" style="width:100%;text-align:center;top:63.5%;">
            <h1 class="white" style="font-size: 60px;">{{ $text_9 }}</h1>
        </div>
        <div class="absolute" style="width:100%;text-align:center;top:67%;">
            <h1 class="" style="font-size: 40px;color:#6d6e71;line-height:40px;letter-spacing:-1px;">{{ $text_10 }}</h1>
            <h1 class="gold" style="font-size: 60px;;line-height:40px;letter-spacing:-1px;">{{ $text_11 }}</h1>
        </div>
        {{-- Agent 1 --}}
        <div class="absolute personal" style="top:73%;">
            <h1 class="gold" style="font-size:47px;">{{ $text_12 }}</h1>
        </div>
        <div class="absolute personal" style="top:74.7%;">
            <h1 class="font-family:Lato" style="font-size:25px;letter-spacing:1px;">{{ $text_13 }}</h1>
        </div>

        <div class="absolute info-size white" style="top:77.4%;">
            <p>{{ $text_14 }}1</p>
        </div>
        <div class="absolute info-size white" style="top:78.6%;">
            <p>{{ $text_15 }}</p>
        </div>
        <div class="absolute info-size white" style="top:79.8%;">
            <p>{{ $text_16 }}</p>
        </div>
        {{-- Agent 2 --}}
        <div class="absolute personal" style="top:83%;">
            <h1 class="" style="font-size:47px;">{{ $text_17 }}</h1>
        </div>
        <div class="absolute personal" style="top:84.7%;">
            <h1 class="white" style="font-size:25px;letter-spacing:1px;">{{ $text_18 }}</h1>
        </div>

        <div class="absolute info-size" style="top:87.8%;">
            <p>{{ $text_19 }}</p>
        </div>
        <div class="absolute info-size" style="top:89%;">
            <p>{{ $text_20 }}</p>
        </div>
        <div class="absolute info-size" style="top:90.2%;">
            <p>{{ $text_21 }}</p>
        </div>
        {{-- Footer --}}
        <div class="absolute" style="text-align: center;top:97%;">
            <h1 class="" style="font-size:22px;font-weight:400;">{{ $text_22 }}</h1>
        </div>
        <div class="absolute" style="text-align: center;top:98.8%;">
            <h1 class="" style="font-size:16px;font-weight:400;color:#9e9e9e">{{ $text_23 }}</h1>
        </div>
    </div>
</body>

</html>