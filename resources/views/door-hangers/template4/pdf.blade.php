<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Door Hanger Template 3</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Gochi+Hand&display=swap');
</style>
<style>
    * {
        font-family: 'Montserrat';
    }

    .gochi {
        font-family: 'Gochi Hand', cursive;
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

    .text-center {
        text-align: center
    }

    .table-title {
        color: white;
        font-size: 40px;
        font-weight: 300;
    }

    .curved {
        transform: translate(20px, 85px) rotate(-30deg);
    }
</style>

<body>
    <div class="page">
        {{-- Image --}}
        <div class="absolute" style="top: 0;left:0;">
            <img src="images/door-hangers/template4/main.jpg" alt="">
        </div>

        {{-- Text --}}
        <div class="absolute w-100 text-center" style="bottom: 1500px">
            <p class="gold" style="font-size:100px;line-height:70px">{{$text_1}}</p>
            <p class="white" style="font-size:60px;line-height:40px;letter-spacing:5px">{{$text_2}}</p>
            <p class="gold gochi" style="font-size:80px;line-height:60px">{{$text_3}}</p>
            <p class="white" style="font-size:60px;line-height:40px;letter-spacing:5px;margin-top:100px">{{$text_4}}</p>
            <p class="gold gochi" style="font-size:100px;line-height:70px">{{$text_5}}</p>
        </div>
        <div class="absolute" style="top: 1300px;margin-left:180px;margin-right:250px">
            <p style="font-size:33px">{{$text_6}}</p>
        </div>
        <div class="absolute text-right" style="top: 1530px;margin-left:250px;margin-right:180px">
            <p style="font-size:33px">{{$text_7}}</p>
        </div>
        <div class="absolute w-100 text-center" style="top: 1780px;margin-left:150px;margin-right:150px;">
            <p class="bold white" style="font-size:33px">{{$text_8}}</p>
        </div>
    </div>
</body>

</html>