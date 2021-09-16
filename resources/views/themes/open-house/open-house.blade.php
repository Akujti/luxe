<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Flyer</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap');
</style>
<style>
    * {
        font-family: 'Montserrat';
    }

    .lato {
        font-family: 'Lato', sans-serif;
    }

    .flex {
        display: flex;
    }

    body {
        padding: 0px;
        margin: 0px;
        background: white;
    }

    .bold {
        font-weight: bold;
    }

    .gold {
        color: #c9a668;
    }

    .absolute {
        position: absolute;
    }

    h1, h2, h3, p {
        margin: 0;
        padding: 0;
    }

    @page {
        padding: 0px;
        margin: 0px;
        size: 1080px 1080px;
    }

    .text-white {
        color: white;
    }


    .top ul, .left-panel ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }


    .left-panel ul li {
        float: left;
        padding: 0 10px;
        font-size: 25.29px;
    }

    .top ul li {
        font-size: 28px;
        font-weight: bold;
        padding-right: 5px;
        display: inline;
    }

    .top ul li:last-child, .left-panel ul li:last-child {
        border: none;
    }

    .first {
        /*position: absolute;*/
        margin-left: 90px;
        font-weight: 700;
        color: #c9a668;
        font-family: 'Lato', sans-serif;
        background-color: white;
        height: 125px;
        padding-right: 15px;
        display: inline-block;
        padding-top: 35px;
    }

    .second {
        /*position: absolute;*/
        font-weight: 700;
        color: white;
        padding-left: 15px;
        display: inline-block;
        height: 125px;
        padding-top: 35px;
    }

    .small {
        font-size: 70px;
        position: absolute;
        top: 10px;
    }

    .normal {
        font-size: 81px;
    }

    .large {
        font-size: 90px;
        position: absolute;
        top: -7px;
    }
</style>
<style>

</style>

<body>
<div class="page">

    <div class="absolute" style="top:0px;left:0px;">
        <img style="padding: 0; margin: 0" src="images/themes/new/ellipse.png" alt="">
    </div>

    <div class="absolute" style="top:0px;right:0px;">
        <img src="{{$bg_image}}" alt="" style="width: 987px;height:1080px;">
    </div>
    {{--    <div class="absolute" style="top:0px;left:0px;">--}}
    {{--        <img style="padding: 0; margin: 0" src="images/themes/new/container.png" alt="">--}}
    {{--    </div>--}}
    <div class="absolute title_text {{$title_text_class}}"
         style="height: 120px;">
        {!! $title_text !!}
    </div>
    <div class="absolute top" style="width: 635px; height: 76px; background: black; font-size: 81px; top: 120px">
        <ul class="absolute" style="left: 90px; top: -55px; width: 100%">
            <li class="gold">{{$day_text}}</li>
            <li class="text-white" style="padding: 0">|</li>
            <li class="gold ">{{$date_text}}</li>
            <li class="text-white" style="padding: 0">|</li>
            <li class="text-white"><span style="font-weight: bold" class="">{{$from_text}}</span> - <span
                    style="font-weight: bold" class="">{{$to_text}}</span></li>
        </ul>
    </div>


    <div class="absolute" style="top:60px; right: 55px;">
        <span class="text-white"
              style="text-align: center;font-size: 18px; font-weight: bold; font-family: 'Montserrat', sans-serif;">{{$web_text}}</span>
    </div>

    <div class="absolute"
         style="width: 240px; height: 100px; background: black; left: 43px; bottom: 51px; border-radius: 50px 0 0 50px">
        <img src="images/themes/new/Logo.png" alt="" style="padding: 16px 0 0 16px; ">
    </div>
    <div class="absolute"
         style="height: 100px; background: white; bottom: 51px; left: 281px; padding-right: 20px;">
        <span class="bold gold"
              style="font-size: 25.71px; padding-left: 27px; padding-top: 18px;">{{$address_1}}</span>
        <br>
        <span class="bold" style="font-size: 22px; padding-left: 27px;">{{$address_2}}</span>
    </div>
    <div class="left-panel"
         style="position: absolute;left: -1030px;top: -250px;">
        <ul style="transform: rotate(-90deg);">
            <li><span class="">{!! $beds_text !!}</span></li>
            <li><span class="gold">|</span></li>
            <li><span class="">{!! $bath_text!!}</span></li>
            <li><span class="gold">|</span></li>
            <li><span class="">{!! $sqft_text!!}</span></li>
        </ul>
    </div>

</div>
</body>

</html>
