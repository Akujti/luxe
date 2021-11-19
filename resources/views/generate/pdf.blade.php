<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Generate PDF</title>
</head>
<style>
</style>
<style>
    * {
        font-family: 'Arial';
    }

    .page {
        padding: 40px
    }

    .light-gray {
        color: rgb(165, 165, 165)
    }

    .page_break {
        page-break-before: always;
    }
</style>

<body>
    <div class="page">
        <div class="header">
            <img src="images/generate_logo.jpg" alt="" style="width:300px">
            <p style="margin-top: -12px" class="light-gray">55 Merrick Way Suite 402<br>Coral Gables, FL 33134<br>O:
                (305) 809-7650</p>
        </div>
        <div class="body">
            Dear {{$name}},
            <br><br><br>
            We have a client who is interested in buying a home in the {{$address}}{!! $text_1
            !!}
            <br><br>
            {!! $text_2 !!}
            <br><br>
            {!! $text_3 !!}
            <br><br>
            {!! $text_4 !!}
            <br><br><br>
            {!! $text_5 !!}<br>
            {!! $text_6 !!}<br>
            {!! $text_7 !!}<br>
            {!! $text_8 !!}
        </div>
    </div>
    <div class="page_break"></div>
    <div class="page">
        <div class="header">
            <img src="images/generate_logo.jpg" alt="" style="width:300px">
            <p style="margin-top: -12px" class="light-gray">55 Merrick Way Suite 402<br>Coral Gables, FL 33134<br>O:
                (305) 809-7650</p>
        </div>
        <div class="body">
            Estimado {{$name}},
            <br><br><br>
            En este momento tenemos un cliente que esta interesado en comprar una casa en el {{$address}}. {!! $text_9
            !!}
            <br><br>
            {!! $text_10 !!}
            <br><br>
            {!! $text_11 !!}
            <br><br>
            {!! $text_12 !!}
            <br><br><br>
            {!! $text_5 !!}<br>
            {!! $text_6 !!}<br>
            {!! $text_7 !!}<br>
            {!! $text_8 !!}
        </div>
    </div>
</body>

</html>