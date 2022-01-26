<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>W-9</title>
</head>
<style>
    * {
        font-family: Roboto;
    }

    @page {
        padding: 0px;
        margin: 0px;
        size: 1700px 2200px;
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
        color: #C5A467 !important;
    }

    .white {
        color: white;
    }

    .bold-600 {
        font-weight: 600;
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

    .page * {
        color: rgb(25, 23, 24)
    }

    .p-1 {
        font-size: 25px
    }

    .p-2 {
        font-size: 35px
    }

    .w-50 {
        width: 50px;
    }
</style>

<body>
    <div class="page">
        {{-- Image --}}
        <div class="absolute" style="top: 0;left:0;">
            <img src="images/w-9/page-1.jpg" alt="" width="1700px">
        </div>

        @if ($select_1 == '1')
        <div class="absolute" style="top: 435px;left:182px;">
            <img src="images/w-9/check.png" alt="">
        </div>
        @endif
        @if ($select_1 == '2')
        <div class="absolute" style="top: 432px;left:499px;">
            <img src="images/w-9/check.png" alt="">
        </div>
        @endif
        @if ($select_1 == '3')
        <div class="absolute" style="top: 432px;left:700px;">
            <img src="images/w-9/check.png" alt="">
        </div>
        @endif
        @if ($select_1 == '4')
        <div class="absolute" style="top: 432px;left:899px;">
            <img src="images/w-9/check.png" alt="">
        </div>
        @endif
        @if ($select_1 == '5')
        <div class="absolute" style="top: 432px;left:1100px;">
            <img src="images/w-9/check.png" alt="">
        </div>
        @endif
        @if ($select_1 == '6')
        <div class="absolute" style="top: 502px;left:182px;">
            <img src="images/w-9/check.png" alt="">
        </div>
        @endif
        @if ($select_1 == '7')
        <div class="absolute" style="top: 633px;left:182px;">
            <img src="images/w-9/check.png" alt="">
        </div>
        @endif

        {{-- Text --}}
        <div class="absolute" style="top: 260px;left:195px;">
            <p class="p-1">{{$text_1}}</p>
        </div>
        <div class="absolute" style="top: 327px;left:195px;">
            <p class="p-1">{{$text_2}}</p>
        </div>
        <div class="absolute" style="top: 498px;left:1146px;">
            <p class="p-1">{{$text_3}}</p>
        </div>
        <div class="absolute" style="top: 464px;left:1505px;">
            <p class="p-1">{{$text_4}}</p>
        </div>
        <div class="absolute" style="top: 564px;left:1400px;">
            <p class="p-1">{{$text_4_1}}</p>
        </div>
        <div class="absolute" style="top: 631px;left:455px;">
            <p class="p-1">{{$text_3_1}}</p>
        </div>
        <div class="absolute" style="top: 696px;left:195px;">
            <p class="p-1">{{$text_5}}</p>
        </div>
        <div class="absolute" style="top: 763px;left:195px;">
            <p class="p-1">{{$text_6}}</p>
        </div>
        <div class="absolute" style="top: 830px;left:195px;">
            <p class="p-1">{{$text_7}}</p>
        </div>
        <div class="absolute" style="top: 696px;left:1090px;width:505px;height:95px;">
            <p class="p-1">{{$text_8}}</p>
        </div>

        <div class="absolute text-center w-50" style="top: 937px;left:1155px;">
            <p class="p-2">{{$text_9[0]}}</p>
        </div>
        <div class="absolute text-center w-50" style="top: 937px;left:1195px;">
            <p class="p-2">{{$text_9[1]}}</p>
        </div>
        <div class="absolute text-center w-50" style="top: 937px;left:1235px;">
            <p class="p-2">{{$text_9[2]}}</p>
        </div>
        <div class="absolute text-center w-50" style="top: 937px;left:1315px;">
            <p class="p-2">{{$text_9[3]}}</p>
        </div>
        <div class="absolute text-center w-50" style="top: 937px;left:1355px;">
            <p class="p-2">{{$text_9[4]}}</p>
        </div>
        <div class="absolute text-center w-50" style="top: 937px;left:1435px;">
            <p class="p-2">{{$text_9[5]}}</p>
        </div>
        <div class="absolute text-center w-50" style="top: 937px;left:1475px;">
            <p class="p-2">{{$text_9[6]}}</p>
        </div>
        <div class="absolute text-center w-50" style="top: 937px;left:1515px;">
            <p class="p-2">{{$text_9[7]}}</p>
        </div>
        <div class="absolute text-center w-50" style="top: 937px;left:1555px;">
            <p class="p-2">{{$text_9[8]}}</p>
        </div>

        <div class="absolute text-center w-50" style="top: 1072px;left:1155px;">
            <p class="p-2">{{$text_10[0]}}</p>
        </div>
        <div class="absolute text-center w-50" style="top: 1072px;left:1195px;">
            <p class="p-2">{{$text_10[1]}}</p>
        </div>
        <div class="absolute text-center w-50" style="top: 1072px;left:1275px;">
            <p class="p-2">{{$text_10[2]}}</p>
        </div>
        <div class="absolute text-center w-50" style="top: 1072px;left:1315px;">
            <p class="p-2">{{$text_10[3]}}</p>
        </div>
        <div class="absolute text-center w-50" style="top: 1072px;left:1355px;">
            <p class="p-2">{{$text_10[4]}}</p>
        </div>
        <div class="absolute text-center w-50" style="top: 1072px;left:1395px;">
            <p class="p-2">{{$text_10[5]}}</p>
        </div>
        <div class="absolute text-center w-50" style="top: 1072px;left:1435px;">
            <p class="p-2">{{$text_10[6]}}</p>
        </div>
        <div class="absolute text-center w-50" style="top: 1072px;left:1475px;">
            <p class="p-2">{{$text_10[7]}}</p>
        </div>
        <div class="absolute text-center w-50" style="top: 1072px;left:1515px;">
            <p class="p-2">{{$text_10[8]}}</p>
        </div>
    </div>

    <div class="page_break"></div>
    <div class="page">
        <div class="absolute" style="top: 0;left:0;">
            <img src="images/w-9/page-2.jpg" alt="" width="1700px">
        </div>
    </div>

    <div class="page_break"></div>
    <div class="page">
        <div class="absolute" style="top: 0;left:0;">
            <img src="images/w-9/page-3.jpg" alt="" width="1700px">
        </div>
    </div>

    <div class="page_break"></div>
    <div class="page">
        <div class="absolute" style="top: 0;left:0;">
            <img src="images/w-9/page-4.jpg" alt="" width="1700px">
        </div>
    </div>

    <div class="page_break"></div>
    <div class="page">
        <div class="absolute" style="top: 0;left:0;">
            <img src="images/w-9/page-5.jpg" alt="" width="1700px">
        </div>
    </div>

    <div class="page_break"></div>
    <div class="page">
        <div class="absolute" style="top: 0;left:0;">
            <img src="images/w-9/page-6.jpg" alt="" width="1700px">
        </div>
    </div>
</body>

</html>