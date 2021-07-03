<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Joined LUXE</title>
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
        background-image: url({{ $img_1_input }});
        position: absolute;
        background-position: right top;
        background-repeat: no-repeat;
        background-size: 3685px 5118px;
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

    .page-1-text-1.small {
        font-size: 255px;
    }

    .page-1-text-1.normal {
        font-size: 300px;
    }

    .page-1-text-1.large {
        font-size: 345px;
    }

    .page-1-text-2.small {
        font-size: 356px;
    }

    .page-1-text-2.normal {
        font-size: 400px;
    }

    .page-1-text-2.large {
        font-size: 444px;
    }

    .page-1-text-11.small {
        font-size: 240px;
    }

    .page-1-text-11.normal {
        font-size: 280px;
    }

    .page-1-text-11.large {
        font-size: 320px;
    }

    .page-1-text-12.small {
        font-size: 648px;
        line-height: 380px;
    }

    .page-1-text-12.normal {
        font-size: 720px;
        line-height: 400px;
    }

    .page-1-text-12.large {
        font-size: 792px;
        line-height: 450px;
    }

    .page-1-text-1 {
        width: max-content;
        background: white;
        padding: 100px 60px 0px 30px;
    }

    .page-1-text-2 {
        width: max-content;
        background: #C5A467;
        padding: 10px 50px 10px 20px;
    }
</style>

<body>
    <div class="page">
        <div>
            <img src="images/themes/joined-luxe-story/main.png" alt="" style="width: 4000px;height:7100px;">
        </div>
        @php
        $text_1_multiply = 270;
        if($page_1_text_1_select == 'small')
        $text_1_multiply = 225;
        else if($page_1_text_1_select == 'large')
        $text_1_multiply = 310;

        $narrow_letter_text_1 = substr_count($page_1_text_1, 'I');
        $page_1_text_1_length =
        (strlen($page_1_text_1)-$narrow_letter_text_1)*$text_1_multiply+$narrow_letter_text_1*50;

        $text_2_multiply = 360;
        if($page_1_text_2_select == 'small')
        $text_2_multiply = 320;
        else if($page_1_text_2_select == 'large')
        $text_2_multiply = 400;

        $narrow_letter_text_2 = substr_count($page_1_text_2, 'I');
        $page_1_text_2_length =
        (strlen($page_1_text_2)-$narrow_letter_text_2)*$text_2_multiply+$narrow_letter_text_2*50;
        @endphp
        <div class="absolute" style="top:70.7%;left:250px;">
            <div class="" style="width:{{$page_1_text_1_length}}px">
                <h1 class="bold page-1-text-1 {{ $page_1_text_1_select }}" style="line-height:140px;">
                    {{ $page_1_text_1 }}</h1>
            </div>
            <div class="" style="width:{{$page_1_text_2_length}}px">
                <h1 class="bold page-1-text-2 {{ $page_1_text_2_select }}" style="line-height:360px;">
                    {{ $page_1_text_2 }}</h1>
            </div>
        </div>
        <div class="absolute" style="top:81.5%;left: 200px;">
            <ul>
                <li class="page-1-text-3 white">{{ $page_1_text_3 }}</li>
            </ul>
        </div>
        <div class="absolute" style="bottom:4.1%;left:600px;">
            <h1 class="white" style="font-size: 100px;line-height:100px;letter-spacing: 6px;">{{ $page_1_text_4 }}</h1>
            <h1 class="gold bold" style="font-size: 150px;line-height:105px;">{{ $page_1_text_5 }}</h1>
        </div>
    </div>
    <div class="absolute" style="top:2350px;right:150px;text-align:right;z-index:1000;">
        <h1 class="font-800 bold white page-1-text-11 {{ $page_1_text_11_select }}" style="margin-right:20px;">
            {{ $page_1_text_11 }}
        </h1>
        <h1 class="font-800 bold gold page-1-text-12 {{ $page_1_text_12_select }}">
            {{ $page_1_text_12 }}
        </h1>
    </div>
</body>

</html>