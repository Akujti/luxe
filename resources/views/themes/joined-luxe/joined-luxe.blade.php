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
        size: 4000px 4000px;
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
        background-size: 2700px 3750px;
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
        font-size: 90px;
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

    .page-1-text-11.small {
        font-size: 136px;
    }

    .page-1-text-11.normal {
        font-size: 170px;
    }

    .page-1-text-11.large {
        font-size: 204px;
    }

    .page-1-text-12.small {
        font-size: 340px;
    }

    .page-1-text-12.normal {
        font-size: 425px;
    }

    .page-1-text-12.large {
        font-size: 510px;
    }

    .page-1-text-1.small {
        font-size: 184px;
    }

    .page-1-text-1.normal {
        font-size: 230px;
    }

    .page-1-text-1.large {
        font-size: 276px;
    }

    .page-1-text-2.small {
        font-size: 198px;
    }

    .page-1-text-2.normal {
        font-size: 264px;
    }

    .page-1-text-2.large {
        font-size: 330px;
    }

    .page-1-text-1 {
        background: white;
        padding: 70px 60px 10px 20px;
    }

    .page-1-text-2 {
        background: #C5A467;
        padding: 0px 50px 0px 20px;
    }
</style>

<body>
    <div class="page">
        <div>
            <img src="images/themes/joined-luxe/main-new.png" alt="" style="width: 4000px;height:4000px;">
        </div>
        <div class="absolute" style="left:200px;top:1035px;">
            <h1 class="font-800 bold white page-1-text-11 {{$page_1_text_11_select}}" style="margin-left:20px;">
                {{ $page_1_text_11 }}
            </h1>
            <h1 class="font-800 bold gold page-1-text-12 {{$page_1_text_12_select}}"
                style="line-height: 260px;width:500px;">
                {{ $page_1_text_12 }}
            </h1>
        </div>
        <div class="absolute" style="top:60.7%;left:250px;">
            @php
            $text_1_multiply = 200;
            if($page_1_text_1_select == 'small')
            $text_1_multiply = 154;
            else if($page_1_text_1_select == 'large')
            $text_1_multiply = 246;

            $narrow_letter_text_1 = substr_count($page_1_text_1, 'I');
            $page_1_text_1_length =
            (strlen($page_1_text_1)-$narrow_letter_text_1)*$text_1_multiply+$narrow_letter_text_1*50;

            $text_2_multiply = 242;
            if($page_1_text_2_select == 'small')
            $text_2_multiply = 180;
            else if($page_1_text_2_select == 'large')
            $text_2_multiply = 292;

            $narrow_letter_text_2 = substr_count($page_1_text_2, 'I');
            $page_1_text_2_length =
            (strlen($page_1_text_2)-$narrow_letter_text_2)*$text_2_multiply+$narrow_letter_text_2*50;
            @endphp
            <div style="width: {{ $page_1_text_1_length }}px;">
                <h1 class="bold page-1-text-1 {{ $page_1_text_1_select }}" style="line-height:140px;">
                    {{ $page_1_text_1 }}</h1>
            </div>
            <div style="width: {{ $page_1_text_2_length }}px;">
                <h1 class="bold page-1-text-2 {{ $page_1_text_2_select }}" style="line-height:250px;">
                    {{ $page_1_text_2 }}</h1>
            </div>
        </div>
        <div class="absolute" style="top:75%;left: 200px;">
            <ul>
                <li class="page-1-text-3 white">{{ $page_1_text_3 }}</li>
            </ul>
        </div>
        <div class="absolute" style="bottom:6.9%;left:520px;">
            <h1 class="white" style="font-size: 50px;line-height:40px;letter-spacing: 12px;">{{ $page_1_text_4 }}</h1>
            <h1 class="gold bold" style="font-size: 100px;line-height:80px;">{{ $page_1_text_5 }}</h1>
        </div>
    </div>
</body>

</html>