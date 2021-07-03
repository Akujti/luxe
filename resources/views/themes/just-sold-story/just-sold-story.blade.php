<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Just Sold Story</title>
</head>
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
        position: absolute;
        /* background-image: url('images/themes/for-sale/bg.png');
        background-position: top right;
        background-repeat: no-repeat;
        background-size: cover; */
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
        font-size: 130px;
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

    .bg-image {
        z-index: 1;
        width: 4000px;
        object-fit: cover;
    }

    .title {
        font-family: Lato;
        font-weight: 700;
    }

    h1.small {
        margin-top: 20px;
        font-size: 511px;
    }

    h1.normal {
        font-size: 550px;
    }

    h1.large {
        font-size: 588px;
    }
</style>

<body>
    <div class="page">
        <div>
            <img class="absolute bg-image" src="{{ $img_1_input }}" alt="" style="height: 3300px;object-fit: cover">
        </div>
        <div>
            <img class="absolute bg-image" src="{{ $img_2_input }}" alt=""
                style="object-fit: cover;height: 3800px;top:3400px;object-fit: cover">
        </div>
        <div>
            <img src="images/themes/just-sold-story/main.png" alt="" style="z-index: 100;">
        </div>

        <div class="absolute" style="top: 70.8%;left: 1420px;">
            <h1 class="bold white title {{ $page_1_text_11_select }}" style="margin-left:200px;">{{ $page_1_text_11 }}
            </h1>
            <h1 class="bold white title {{ $page_1_text_12_select }}" style="line-height:260px;">{{ $page_1_text_12 }}
            </h1>
        </div>
        <div class="absolute" style="top: 3205px;width: 1200px;font-size: 50px;">
            <div style="position: relative;left:3260px;">
                <h1 class="white  page-1-text-13" style="transform: rotate(-90deg);text-align: center;">
                    {{ $page_1_text_13 }}</h1>
            </div>
        </div>
        <div class="absolute" style="bottom:2%;left:1120px;width: 2700px;text-align: center;">
            <ul>
                <li>{{ $page_1_text_1 }}</li>
                <li>|</li>
                <li>{{ $page_1_text_2 }}</li>
                <li>|</li>
                <li>{{ $page_1_text_3 }}</li>
            </ul>
        </div>
        <div class="absolute" style="bottom:7.2%;left:1650px;">
            <h1 class="gold bold" style="font-size: 100px;line-height:100px;">{{ $page_1_text_4 }}</h1>
            <h1 class="white" style="font-size: 80px;line-height:80px;">{{ $page_1_text_5 }}</h1>
        </div>
    </div>
</body>

</html>