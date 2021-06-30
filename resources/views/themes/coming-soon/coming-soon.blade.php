<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coming Soon</title>
</head>
<style>
    * {
        font-family: 'Montserrat';
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
        position: absolute;
        /* background-position: right bottom;
        background-repeat: no-repeat;
        background-size: 4000px 4000px; */
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
        top: 67.1%;
    }

    img.circle {
        border-radius: 350px;
        width: 700px;
        height: 700px;
        object-fit: cover;
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
</style>

<body>
    <div class="page">
        <div>
            <img src="images/themes/coming-soon/main.png" alt="" style="width: 4000px;height:4000px;">
        </div>
        <div class="absolute" style="top:20%;text-align:center;">
            <h1 class="gold bold" style="font-size: 120px;line-height:80px;">{{ $page_1_text_4 }}</h1>
        </div>
        <div class="absolute" style="display:table;top:20%;width:100%;height:2500px">
            <div style="text-align:center;display:table-cell;position:relative;vertical-align: middle;">
                <h1 class="main bold {{ $page_1_text_1_select}}">{{ $page_1_text_1 }}</h1>
                <h1 class="main bold {{ $page_1_text_2_select}}">{{ $page_1_text_2 }}</h1>
                <h1 class="main bold {{ $page_1_text_3_select}}">{{ $page_1_text_3 }}</h1>
                <h1 class="main bold {{ $page_1_text_6_select}}">{{ $page_1_text_6 }}</h1>
            </div>
        </div>
        <div class="absolute" style="bottom:20%;text-align:center;">
            <h1 class="gold bold" style="font-size: 120px;line-height:80px;">{{ $page_1_text_5 }}</h1>
        </div>
    </div>
</body>

</html>