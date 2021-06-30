<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Just Listed Story</title>
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
        size: 4000px 7100px;
    }

    body {
        padding: 0px;
        margin: 0px;
    }

    .page {
        background-image: url('images/themes/just-listed-story/main.png');
        position: absolute;
        background-position: center;
        background-repeat: no-repeat;
        /* background-size: 4000px;
        width: 4000px;
        height: 7100px; */
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
        top: 82.13%;
    }

    img.circle {
        width: 1035px;
        height: 970px;
        object-fit: cover;
    }

    .img-1 {
        border-top-left-radius: 500px;
        left: 145px;
        top: 1480px;
        height: 3780px;
        width: 3860px;
        object-fit: cover;
        object-position: center;
    }
</style>

<body>
    <div class="page">
        <div>
            <img src="{{ $img_1_input }}" alt="" class="absolute img-1">
        </div>
        <div>
            <img src="images/themes/just-listed-story/main-2.png" alt="" class="absolute" style="left:290px;">
        </div>
        <div class="absolute" style="right:3.4%;top:685px;text-align:right;">
            <h1 class="font-800 bold page-1-text-11" style="font-size:240px;">{{ $page_1_text_11 }}</h1>
            <h1 class="font-800 bold gold page-1-text-12" style="font-size:350px;line-height: 205px;">
                {{ $page_1_text_12 }}</h1>
        </div>
        <div class="absolute" style="top:19.6%;left:1900px;">
            <ul>
                <li>{{ $page_1_text_1 }}</li>
                <li class="white">|</li>
                <li class="white">{{ $page_1_text_2 }}</li>
                <li class="white">|</li>
                <li>{{ $page_1_text_3 }}</li>
            </ul>
        </div>
        <div class="absolute" style="top:75.6%;left:1500px;">
            <h1 class="" style="font-size: 100px;line-height:100px;">{{ $page_1_text_4 }}</h1>
            <h1 class="gold bold" style="font-size: 80px;line-height:80px;">{{ $page_1_text_5 }}</h1>
        </div>

        <div class="absolute circle" style="left:325px">
            <img src="{{ $img_2_input }}" alt="" class="circle" style="border-top-left-radius: 150px;">
        </div>
        <div class="absolute circle" style="left:1530px;">
            <img src="{{ $img_3_input }}" alt="" class="circle" style="width: 1090px">
        </div>
        <div class="absolute circle" style="left:2780px;">
            <img src="{{ $img_4_input }}" alt="" class="circle"
                style="width: 1040px;border-bottom-right-radius: 150px;">
        </div>

        <div class="absolute" style="top:69.6%;left:2900px;">
            <h1 class="white bold" style="font-size: 140px;line-height:100px;">{{ $page_1_text_6 }}</h1>
        </div>

        <div class="absolute" style="bottom: 25px;left: 500px;text-align:center;width:2000px;">
            <h1 class="white page-1-text-13" style="font-size: 85px;letter-spacing: 40px;line-height: 50px;">
                {{ $page_1_text_13 }}
            </h1>
        </div>
    </div>
</body>

</html>