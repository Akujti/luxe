<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Just Closed</title>
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
        size: 4000px 4000px;
    }

    body {
        padding: 0px;
        margin: 0px;
    }

    .page {
        background-image: url({{ $img_1_input }});
        position: absolute;
        background-position: right bottom;
        background-repeat: no-repeat;
        background-size: 4000px 3500px;
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

    span.small {
        font-size: 187px;
    }

    span.normal {
        font-size: 250px;
    }

    span.large {
        font-size: 312px;
    }
</style>

<body>
    <div class="page">
        <div>
            <img src="images/themes/just-closed/main.png" alt="" style="width: 4000px;height:4000px;">
        </div>
        <div class="absolute" style="top: 80px;text-align:right;right:100px;">
            <h1><span class="page-1-text-11 {{ $page_1_text_11_select }}">{{ $page_1_text_11 }}</span> <span
                    class="bold page-1-text-12 {{ $page_1_text_12_select }}"> {{ $page_1_text_12 }}</span></h1>
        </div>
        <div class="absolute" style="bottom:4.8%;left:150px;">
            <ul>
                <li>{{ $page_1_text_1 }}</li>
                <li>|</li>
                <li>{{ $page_1_text_2 }}</li>
                <li>|</li>
                <li>{{ $page_1_text_3 }}</li>
            </ul>
        </div>
        <div class="absolute" style="bottom:4.5%;right:250px;text-align:right;">
            <h1 class="gold bold" style="font-size: 100px;line-height:80px;">{{ $page_1_text_4 }}</h1>
            <h1 class="white" style="font-size: 80px;line-height:80px;">{{ $page_1_text_5 }}</h1>
        </div>
        <div class="absolute" style="top: 2205px;width: 2500px;">
            <div style="position: relative;left:2500px;text-align:center;">
                <h1 class="font-400 white" style="transform: rotate(-90deg);text-align: center;font-size: 80px;">
                    {{$page_1_text_13}}
                </h1>
            </div>
        </div>
    </div>
</body>

</html>