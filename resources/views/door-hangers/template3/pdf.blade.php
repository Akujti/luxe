<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Door Hanger Template 3</title>
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

    .table-title {
        color: white;
        font-size: 40px;
        font-weight: 300;
    }
</style>

<body>
    <div class="page">
        {{-- Image --}}
        <div class="absolute" style="top: 0;left:0;">
            <img src="{{$img_1}}" alt="" width="1001px" height="1679px">
        </div>
        <div class="absolute" style="top: 0;left:0;">
            <img src="images/door-hangers/template3/1/overlay.png" alt="">
        </div>
        <div class="absolute" style="top: 1435px;left:0;">
            <img src="images/door-hangers/template3/1/gold.png" alt="">
        </div>
        <div class="absolute" style="top: 1150px;left:0;">
            <img src="{{$img_2}}" alt="">
        </div>
        <div class="absolute" style="bottom: 0;left:0;">
            <img src="images/door-hangers/template3/1/bottom.png" alt="">
        </div>
        <div class="absolute" style="bottom: 70;left:450px;">
            <img src="images/door-hangers/template3/1/icons.png" alt="">
        </div>

        {{-- Text --}}
        <div class="absolute w-100 text-right" style="top: 500px;right:70px;left:70px">
            <p class="oswald-med white" style="font-size:100px;line-height:70px">{!!$text_1!!}</p>
            <p class="gochi gold" style="font-size:150px;line-height:120px">{!!$text_2!!}</p>
        </div>
        <div class="absolute w-100 text-right" style="top: 1000px;right:70px;left:70px">
            <p class="oswald-med white" style="font-size:40px;line-height:30px">{!!$text_3!!}</p>
        </div>
        <div class="absolute w-100 text-right" style="top: 1280px;right:120px;left:70px">
            <p class="oswald-med white" style="font-size:40px;line-height:30px">{!!$text_4!!}</p>
        </div>
        <div class="absolute w-100 text-right" style="top: 1750px;right:70px;left:70px">
            <p class="white extra-bold" style="font-size:150px;line-height:100px;letter-spacing:-3px">{!!$text_5!!}</p>
        </div>
        <div class="absolute" style="top: 2020px;right:70px;left:400px;border-bottom:1px solid white">
        </div>
        <div class="absolute w-100 text-right" style="top: 2020px;right:70px;">
            <p class="oswald-med white" style="font-size: 50px">{!!$text_6!!}</p>
        </div>
        <div class="absolute w-100" style="top: 2260px;left:550px;">
            <p class="white" style="font-size: 50px">{!!$text_7!!}</p>
        </div>
        <div class="absolute w-100" style="top: 2375px;left:550px;">
            <p class="white" style="font-size: 30px;line-height:30px">{!!$text_8!!}</p>
            <p class="white" style="font-size: 30px;line-height:30px">{!!$text_9!!}</p>
        </div>
        <div class="page_break"></div>
    </div>
    <div class="page">
        {{-- Image --}}
        <div class="absolute" style="top: 0;left:0;">
            <img src="{{$img_3}}" alt="" width="1001px" height="1078px">
        </div>
        <div class="absolute" style="top: 0;left:0;">
            <img src="images/door-hangers/template3/2/overlay.png" alt="">
        </div>
        <div class="absolute" style="bottom: 0;left:0;">
            <img src="images/door-hangers/template3/2/bottom.png" alt="">
        </div>
        <div class="absolute w-100" style="top: 1200px;text-align:center">
            <img src="images/door-hangers/template3/2/tables.png" alt="">
        </div>
        <div class="absolute" style="bottom: 0;left:50px;">
            <img src="{{$img_4}}" alt="" width="353px" height="494px">
        </div>
        <div class="absolute" style="bottom: 80px;left:450px;">
            <img src="images/door-hangers/template3/2/icons.png" alt="">
        </div>
        {{-- Text --}}
        <div class="absolute" style="top: 520px;left:70px;">
            <p class="white oswald-med" style="font-size: 60px;line-height:50px">{!!$text_10!!}</p>
        </div>
        <div class="absolute" style="top: 820px;left:70px;">
            <p class="white bold" style="font-size: 90px;line-height:70px">{!!$text_11!!}</p>
        </div>
        <div class="absolute w-100 text-right" style="top: 1090px;right:70px;">
            <p class="gold bold" style="font-size:70px;">{!!$text_12!!}</p>
        </div>
        <div class="absolute" style="top: 1200px;left:85px;">
            <p class="gold" style="font-size:35px;">Address</p>
            <p class="white" style="font-size:28px;margin-top:16px">{!!$text_13!!}</p>
            <p class="white" style="font-size:28px;margin-top:15px">{!!$text_14!!}</p>
            <p class="white" style="font-size:28px;margin-top:18px">{!!$text_15!!}</p>
            <p class="white" style="font-size:28px;margin-top:17px">{!!$text_16!!}</p>
        </div>
        <div class="absolute" style="top: 1200px;left:340px;">
            <p class="" style="font-size:35px;margin-left:-10px;">Sale Price</p>
            <p class="white" style="font-size:28px;margin-top:16px">{!!$text_17!!}</p>
            <p class="white" style="font-size:28px;margin-top:15px">{!!$text_18!!}</p>
            <p class="white" style="font-size:28px;margin-top:18px">{!!$text_19!!}</p>
            <p class="white" style="font-size:28px;margin-top:17px">{!!$text_20!!}</p>
        </div>
        <div class="absolute" style="top: 1200px;left:580px;">
            <p class="" style="font-size:35px;margin-left:-60px;">Beds/Baths</p>
            <p class="white" style="font-size:28px;margin-top:16px">{!!$text_21!!}</p>
            <p class="white" style="font-size:28px;margin-top:15px">{!!$text_22!!}</p>
            <p class="white" style="font-size:28px;margin-top:18px">{!!$text_23!!}</p>
            <p class="white" style="font-size:28px;margin-top:17px">{!!$text_24!!}</p>
        </div>
        <div class="absolute" style="top: 1200px;left:740px;">
            <p class="gold" style="font-size:35px;margin-left:0px;">Living Area</p>
            <p class="white" style="font-size:28px;margin-top:16px">{!!$text_25!!}</p>
            <p class="white" style="font-size:28px;margin-top:15px">{!!$text_26!!}</p>
            <p class="white" style="font-size:28px;margin-top:18px">{!!$text_27!!}</p>
            <p class="white" style="font-size:28px;margin-top:17px">{!!$text_28!!}</p>
        </div>
        <div class="absolute" style="top: 1670px;left:85px;">
            <p class="gold" style="font-size:35px;">Address</p>
            <p class="white" style="font-size:28px;margin-top:16px">{!!$text_29!!}</p>
            <p class="white" style="font-size:28px;margin-top:15px">{!!$text_30!!}</p>
            <p class="white" style="font-size:28px;margin-top:18px">{!!$text_31!!}</p>
            <p class="white" style="font-size:28px;margin-top:17px">{!!$text_32!!}</p>
        </div>
        <div class="absolute" style="top: 1670px;left:340px;">
            <p class="" style="font-size:35px;margin-left:-10px;">Sale Price</p>
            <p class="white" style="font-size:28px;margin-top:16px">{!!$text_33!!}</p>
            <p class="white" style="font-size:28px;margin-top:15px">{!!$text_34!!}</p>
            <p class="white" style="font-size:28px;margin-top:18px">{!!$text_35!!}</p>
            <p class="white" style="font-size:28px;margin-top:17px">{!!$text_36!!}</p>
        </div>
        <div class="absolute" style="top: 1670px;left:580px;">
            <p class="" style="font-size:35px;margin-left:-60px;">Beds/Baths</p>
            <p class="white" style="font-size:28px;margin-top:16px">{!!$text_37!!}</p>
            <p class="white" style="font-size:28px;margin-top:15px">{!!$text_38!!}</p>
            <p class="white" style="font-size:28px;margin-top:18px">{!!$text_39!!}</p>
            <p class="white" style="font-size:28px;margin-top:17px">{!!$text_40!!}</p>
        </div>
        <div class="absolute" style="top: 1670px;left:740px;">
            <p class="gold" style="font-size:35px;margin-left:0px;">Living Area</p>
            <p class="white" style="font-size:28px;margin-top:16px">{!!$text_41!!}</p>
            <p class="white" style="font-size:28px;margin-top:15px">{!!$text_42!!}</p>
            <p class="white" style="font-size:28px;margin-top:18px">{!!$text_43!!}</p>
            <p class="white" style="font-size:28px;margin-top:17px">{!!$text_44!!}</p>
        </div>
        <div class="absolute w-100 text-right" style="top: 1560px;right:70px;">
            <p class="gold bold" style="font-size:70px;letter-spacing:3px">{!!$text_45!!}
            </p>
        </div>
        <div class="absolute " style="bottom: 240px;left:450px;">
            <p class="bold" style="font-size:60px;line-height:50px">{!!$text_46!!}</p>
            <p style="font-size:40px;line-height:30px">{!!$text_47!!}</p>
        </div>
        <div class="absolute " style="bottom: 79px;left:510px;">
            <p style="font-size:35px;line-height:25px">{!!$text_48!!}</p>
            <p style="font-size:35px;line-height:45px;margin-bottom:3px">{!!$text_49!!}</p>
            <p style="font-size:35px;line-height:30px">{!!$text_50!!}</p>
        </div>
    </div>
</body>

</html>