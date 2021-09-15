<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Flyer</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap');
</style>
<style>
    * {
        font-family: 'Montserrat';
    }

    .lato {
        font-family: 'Lato', sans-serif;
    }

    .flex {
        display: flex;
    }

    body {
        padding: 0px;
        margin: 0px;
    }

    .bold {
        font-weight: bold;
    }

    .gold {
        color: #c9a668;
    }

    .absolute {
        position: absolute;
    }

    h1, h2, h3, p {
        margin: 0;
    }

    @page {
        padding: 0px;
        margin: 0px;
        size: 1080px 1080px;
    }

    .text-white {
        color: white;
    }


    .top ul, .left-panel ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }


    .left-panel ul li {
        float: left;
        border-right: 3px solid #c9a668;
        padding: 0 15px;
        font-size: 25.29px;
    }

    .top ul li {
        font-size: 28px;
        font-weight: bold;
        padding-right: 15px;
        border-right: 3px solid white;
        display: inline;
    }

    .top ul li:last-child, .left-panel ul li:last-child {
        border: none;
    }
</style>
<style>

</style>

<body>
<div class="page">
    <div class="absolute" style="top:0px;left:0px;">
        <img src="https://i.ibb.co/x1HQTQZ/Luxe-Ellipse-4.png" alt="">
    </div>

    <div class="absolute" style="top:0px;right:0px;">
        <img src="https://i.ibb.co/dmL8gHM/Property-Image.png" alt="" style="width: 987px;height:1080px;">
    </div>
    <div class="absolute" style="width: 320px; height: 120px; background: white; font-size: 81px">
        <p class="gold lato" style="position: absolute; left: 90px; font-weight: 700">OPEN</p>
        <p class="text-white lato" style="position: absolute; left: 335px; font-weight: 700">HOUSE</p>
    </div>
    <div class="absolute top" style="width: 599px; height: 76px; background: black; font-size: 81px; top: 120px">
        <ul class="absolute" style="left: 90px; top: -50px; width: 100%">
            <li class="gold">SAT</li>
            <li class="gold">SEP 11</li>
            <li class="text-white">10:00AM -2:00PM</li>
        </ul>
    </div>


    <div class="absolute" style="top:60px; right: 55px; width: 260px">
        <p class="text-white" style="font-size: 18px">WWW.LUXEKNOWS.COM</p>
    </div>


    <div class="absolute"
         style="width: 240px; height: 100px; background: black; left: 43px; bottom: 51px; border-radius: 50px 0 0 50px">
        <img src="https://i.ibb.co/9gBh2NY/LogoLuxe.png" alt="" style="padding: 16px 0 0 16px; ">
    </div>
    <div class="absolute" style="height: 100px; background: white; bottom: 51px; left: 281px; width: 362px">
        <p class="bold gold" style="font-size: 25.71px; padding-left: 27px; padding-top: 10px">55 MERRICK WAY
            #402</p>
        <p class="bold" style="font-size: 22px; padding-left: 27px;">CORAL GABLES, FL 33134</p>
    </div>
    <div class="left-panel"
         style="position: relative;left: -514px;top: 230px;">
        <ul style="transform: rotate(-90deg);">
            <li><span class="bold">3</span> BEDS</li>
            <li><span class="bold">2</span> BATHS</li>
            <li><span class="bold">1,700</span> SQFT</li>
        </ul>
    </div>

</div>
</body>

</html>
