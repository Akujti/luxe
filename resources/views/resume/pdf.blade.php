<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resume</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap');
</style>
<style>
    * {
        font-family: 'Montserrat';
    }

    @page {
        padding: 0px;
        margin: 0px;
        size: 2000px 2572px;
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
</style>

<body>
    <div class="page">
        {{-- Image --}}
        <div class="absolute" style="top: 0;left:0;">
            <img src="images/resume/main.jpg" alt="">
        </div>
        <div class="absolute" style="bottom: 162px;left:228px;">
            <img src="images/resume/qr.jpg" alt="" width="300px" height="300px">
        </div>
        <div class="absolute" style="bottom: 630px;left:140px;">
            <img src="images/resume/icons.jpg" alt="" width="45px">
        </div>

        {{-- Text --}}
        <div class="absolute" style="bottom: 2170px;left:150px;width:450px">
            <div style="font-size: 70px;line-height:60px">
                <p>WESLEY</p>
                <p class="gold bold">ULLOA</p>
            </div>
            <p class="bold" style="font-size: 30px;margin-top:30px">CORAL GABLES REALTOR</p>
        </div>
        <div class="absolute" style="top: 560px;left:145px;width:460px;text-align:justify;font-size:25px">
            <p style="">Wesley Ulloa is the founder of LUXE Properties, born and raised in Miami, she has more than
                fourteen years of experience in South Florida real estate. Selling on average over $20 million a year,
                she specializes in creative marketing for listings and sells at 98% list to sales price ratio with 45
                days on market. Wesley has a passion for historic homes and loves sharing her knowledge of working with,
                renovating, researching, owning and of course selling historic homes in South Florida.</p>
        </div>
        <div class="absolute" style="top: 1260px;left:145px;width:460px;text-align:justify;font-size:25px">
            <p class="bold gold" style="font-size: 30px;">Objective</p>
            <p style="">My objectives are to get you the most money possible, sell your home as quickly as I can, and
                make selling your home a pleasant and profitable experience for you.</p>
        </div>
        <div class="absolute" style="top: 1630px;left:145px;width:460px;text-align:justify;font-size:25px">
            <p class="bold gold" style="font-size: 30px;">LUXE Properties</p>
            <p style="">55 Merrick Way #402,<br>
                Coral Gables, FL 33134</p>
        </div>
        <div class="absolute" style="top: 1760px;left:190px;text-align:justify;font-size:30px;line-height:45px">
            <p style="">305-986-7041</p>
            <p style="">wesley@luxeknows.com</p>
            <p style="margin-top:5px">@miamihistorichomes</p>
        </div>
        <div class="absolute" style="bottom: 520px;left:160px">
            <p class="bold" style="font-size: 40px;letter-spacing:-2px;">Scan Here For Website</p>
        </div>
        <div class="absolute" style="left:835px;top:110px">
            <p class="bold gold" style="font-size: 40px;">Education & Accomplishments</p>
            <table>
                <tr>
                    <td>
                        <p class="bold-600" style="font-size: 25px;">Master of Science in International Real Estate</p>
                        <p style="font-size: 20px;">Florida International University | Miami, FL</p>
                    </td>
                    <td>
                        <p class="bold-600" style="font-size: 25px;">- 2017</p>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>