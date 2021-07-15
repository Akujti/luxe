<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Just Sold</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap');
</style>
<style>
    * {
        font-family: 'Montserrat';
        font-weight: 400;
    }

    @page {
        padding: 0px;
        margin: 0px;
        size: 4000px 4000px;
    }

    body {
        padding: 0px;
        margin: 0px;
    }

    .page {
        background-image: url({{ $img_1_input }});
        position: absolute;
        background-position: top right;
        background-repeat: no-repeat;
        background-size: cover;
        /* background-size: 3500px; */
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
        top: 67.1%;
    }

    img.circle {
        border-radius: 350px;
        width: 700px;
        height: 700px;
        object-fit: cover;
    }

    .title {
        font-family: Lato;
        font-weight: 700;
    }

    h1.small {
        margin-top: 17px;
        font-size: 432px;
    }

    h1.normal {
        font-size: 480px;
    }

    h1.large {
        font-size: 520px;
    }
</style>

<body>
    <div class="page">
        <div>
            <img src="images/themes/just-sold/main.png" alt="">
        </div>
        <div class="absolute" style="top: 57.5%;left: 1870px;">
            <h1 class="bold white title {{ $page_1_text_11_select }}" style="margin-left:200px;letter-spacing:-25px;">
                {{ $page_1_text_11 }}</h1>
            <h1 class="bold white title {{ $page_1_text_12_select }}" style="line-height:280px;letter-spacing:-25px;">
                {{ $page_1_text_12 }}</h1>
        </div>
        <div class="absolute" style="bottom:0.8%;left:1720px;width: 2000px;text-align: center;">
            <ul>
                <li>{{ $page_1_text_1 }}</li>
                <li>|</li>
                <li>{{ $page_1_text_2 }}</li>
                <li>|</li>
                <li>{{ $page_1_text_3 }}</li>
            </ul>
        </div>
        <div class="absolute" style="bottom:7%;left:2100px;">
            <h1 class="gold bold" style="font-size: 100px;line-height:100px;">{{ $page_1_text_4 }}</h1>
            <h1 class="white" style="font-size: 80px;line-height:80px;">{{ $page_1_text_5 }}</h1>
        </div>
        <div class="absolute" style="top: 2120px;width: 2500px;">
            <div style="position: relative;left:2640px;text-align:center;">
                <h1 class="font-400 white" style="transform: rotate(-90deg);text-align: center;font-size: 80px;">
                    {{$page_1_text_13}}
                </h1>
            </div>
        </div>
    </div>
</body>

</html>