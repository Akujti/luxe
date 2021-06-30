<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Throwback Thursday Story</title>
</head>
<style>
    .font-400 {
        font-weight: 400;
    }

    .font-800 {
        font-weight: 800;
    }

    * {
        font-family: 'Montserrat';
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
        background-image: url('images/themes/tbt-story/main.png');
        position: absolute;
        background-position: center center;
        background-repeat: no-repeat;
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
        font-weight: 900;
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
        top: 67.1%;
    }

    img.circle {
        border-radius: 350px;
        width: 700px;
        height: 700px;
        object-fit: cover;
    }
</style>

<body>
    <div class="page">
        <div class="absolute" style="right:11.7%;top:1553px;text-align: right;">
            <h1 class="font-800 " style="font-size:244px;">{{$page_1_text_1}}</h1>
            <h1 class="font-800 gold" style="font-size:224px;line-height: 100px;">{{$page_1_text_2}}</h1>
        </div>
        <div class="absolute"
            style="left: -88.5%;font-size: 33px;top: -264px;transform: rotate(-90deg);letter-spacing:10px;">
            <h1 class="font-400" style="">{{$page_1_text_3}}</h1>
        </div>
        <div class="absolute"
            style="left: -88.5%;font-size: 33px;top:-65%;transform: rotate(-90deg);letter-spacing:10px;">
            <h1 class="font-400" style="">{{$page_1_text_4}}</h1>
        </div>
        <div class="absolute" style="top: 1905px;width: 2500px;font-size: 50px;">
            <div style="position: relative;left:2460px;">
                <h1 class="font-400" style="transform: rotate(-90deg);text-align: center;letter-spacing:40px;">
                    {{$page_1_text_5}}
                </h1>
            </div>
        </div>
        <div>
            <img class="absolute" style="top:30.5%;left:11.4%;object-fit:cover;" src="{{ $img_1_input }}" alt=""
                width="3100px" height="3860px">
        </div>
    </div>
</body>

</html>