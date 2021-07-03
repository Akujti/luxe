<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap');
</style>
<style>
    * {
        font-family: 'Montserrat';
        font-weight: 400;
    }

    @page {
        padding: 0px;
        margin: 0px;
        size: 4000px 7110px;
    }

    body {
        padding: 0px;
        margin: 0px;
    }

    .page {
        background-image: url({{ $img_1_input }});
        position: absolute;
        background-position: top center;
        background-repeat: no-repeat;
        background-size: 4000px;
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
        font-weight: 700;
    }

    ul li {
        display: inline;
        color: #C5A467;
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
        top: 74%;
    }

    img.circle {
        border-radius: 500px;
        width: 1000px;
        height: 1000px;
        object-fit: cover;
    }
</style>

<body>
    <div class="page">
        <div>
            <img src="images/themes/for-sale-story/main.png" alt="">
        </div>
        <div class="absolute" style="top:44.7%;left:210px;">
            <h1 class="bold white page-1-text-11" style="font-size: 380px;">{{ $page_1_text_11 }}</h1>
            <h1 class="bold page-1-text-12" style="font-size: 605px;line-height: 330px;letter-spacing: -40px;">
                {{ $page_1_text_12 }}</h1>
        </div>
        <div class="absolute" style="top:58.5%;left:100px;width: 2000px;text-align: center;">
            <ul>
                <li>{{ $page_1_text_1 }}</li>
                <li>|</li>
                <li>{{ $page_1_text_2 }}</li>
                <li>|</li>
                <li>{{ $page_1_text_3 }}</li>
            </ul>
        </div>
        <div class="absolute" style="top:62%;left:210px;">
            <h1 class="white bold" style="font-size: 100px;line-height:100px;">{{ $page_1_text_4 }}</h1>
            <h1 style="font-size: 80px;line-height:60px;">{{ $page_1_text_5 }}</h1>
        </div>

        <div class="absolute circle" style="left:240px">
            <img src="{{ $img_2_input }}" alt="" class="circle">
        </div>
        <div class="absolute circle" style="left:1330px">
            <img src="{{ $img_3_input }}" alt="" class="circle">
        </div>
        <div class="absolute circle" style="left:2425px">
            <img src="{{ $img_4_input }}" alt="" class="circle">
        </div>

        <div class="absolute" style="bottom:3%;left:210px;">
            <h1 class="gold bold" style="font-size: 190px;line-height:100px;">{{ $page_1_text_6 }}</h1>
        </div>

        <div class="absolute" style="left: 2850px;font-size: 35px;bottom: 3%;;width: 450px;">
            <h1 class="font-400 page-1-text-13" style="">{{ $page_1_text_13 }}</h1>
        </div>
    </div>
</body>

</html>