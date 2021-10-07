<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Flyer</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Oswald&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@600&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@500&display=swap');
</style>
<style>
    * {
        font-family: 'Montserrat';
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
        size: 2000px 1596px;
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
        font-weight: 800;
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
        top: 39%;
        left: 35px;
    }

    img.circle {
        border-radius: 145px;
        width: 280px;
        height: 280px;
        object-fit: cover;
        border: 10px solid #C9A668;
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

    .agent-info {
        left: 460px;
    }

    .text-splitter {
        margin-left: 8px;
        margin-right: 8px;
        margin-top: -15px;
    }

    .list-inline {
        list-style: none;
        padding: 0;
    }

    ul li {
        display: inline;
        font-size: 40px;
        margin-right: 10px;
        letter-spacing: -1px;
    }

    .text-border {
        margin: 0;
        padding: 0;
        line-height: 35px;
        padding-left: 20px;
        background: white;
    }

    .w-100 {
        width: 100%;
    }

    .text-center {
        text-align: center;
    }

    .pl-10 {
        padding-left: 10px
    }
</style>

<body>
    <div class="page">
        {{-- Images --}}
        <div class="absolute" style="top:0;left:0;">
            <img src="images/flyers/template6/main.png" alt="">
        </div>
        <div class="absolute" style="top:219px;left:0px;">
            <img id="img_1" src="{{$img_1}}" alt="" style="" width=" 1909px" height="1213px">
        </div>
        <div class="absolute" style="top:220px;left:1397px;">
            <img src="images/flyers/template6/box.png" alt="" width="463px">
        </div>

        {{-- Text --}}
        <div class="absolute" style="top:30px;left:65px;">
            <p class="" style="font-size: 90px;letter-spacing:-3px;color:#6d6e71">{!! $text_1 !!}</p>
        </div>
        <div class="absolute" style="top:90px;left:665px;">
            <p class="" style="font-size: 35px;letter-spacing:-1px;color:#6d6e71">{!! $text_2 !!}</p>
        </div>
        <div class="absolute w-100 text-center" style="top:210px;left:1262px;">
            <p class="gold" style="font-size: 73px;">{!! $text_3 !!}</p>
        </div>
        <div class="absolute" style="top:1490px;left:65px;">
            <p class="" style="font-size: 35px;letter-spacing:-1px;color:#6d6e71">{!! $text_4 !!}</p>
        </div>
        <div class="absolute w-100 text-center" style="top:1490px;left:1250px;">
            <p class="gold" style="font-size: 37px;">{!! $text_5 !!}</p>
        </div>
    </div>
</body>

</html>