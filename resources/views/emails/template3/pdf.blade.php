<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email Blast</title>
</head>
<style>
    /* @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap'); */
    @import url('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap');
</style>
<style>
    * {
        font-family: 'Montserrat';
    }

    .poppins {
        font-family: 'Poppins';
        font-weight: 400;
    }

    .roboto {
        font-family: 'Roboto';
        font-weight: 400;
    }

    @page {
        padding: 0px;
        margin: 0px;
        size: 1000px 4673px;
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

    .bold-600 {
        font-weight: 600;
    }

    .bold-700 {
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

    .profile-pic {
        width: 250px;
        height: 250px;
        border: 10px solid white;
    }

    div.map {
        top: 52.5%;
    }

    img.map {
        width: 280px;
        height: 280px;
        border: 10px solid white;
    }

    h1:after {
        /* font: normal normal normal 30px/1 FontAwesome;
        content: '\f083'; */
    }

    .personal {
        left: 450px;
    }

    .info-size {
        font-size: 25px;
        left: 500px;
    }

    .diagonal {
        max-width: 350px;
        border-left: 10px solid #C9A668;
        background-color: black;
        height: 120px;
    }

    div.map-title {
        width: 300px;
        text-align: center;
        top: 61%;
    }

    h1.map-title {
        color: #6d6e71;
        font-size: 35px;
    }
</style>

<body>
    <div class="page">
        {{-- Images --}}
        <div class="absolute">
            {{-- <img src="{{ $img_1_input }}" alt="" style="width: 1000px;height:1050px;object-fit:cover;"> --}}
        </div>
        <div class="absolute">
            <img src="images/emails/template3/main.png" alt="" style="width: 1000px;height:4673px;">
        </div>
        <div class="absolute" style="top:53px;left:360px">
            <img src="images/emails/template3/logo.png" alt="" width="290px">
        </div>
        <div class="absolute" style="top:409px;">
            <img src="images/emails/template3/house-1.jpg" alt="" width="835px" height="835px">
        </div>
        <div class="absolute" style="top:2592px;right:0;">
            <img src="images/emails/template3/house-2.jpg" alt="" width="835px" height="567px">
        </div>
        <div class="absolute" style="top:3207px;left:169px;">
            <img src="images/emails/template3/house-3.png" alt="" width="621px" height="415px">
        </div>
        <div class="absolute" style="top:94.3%;width:100%;text-align:center;">
            <img src="images/emails/template1/logos.png" alt="" width="200px">
        </div>

        {{-- Text --}}
        <div class="absolute" style="top: 1100px;width: 1300px;font-size: 30px;">
            <div style="position: relative;left:245px;">
                <h1 class="bold-700 gold" style="transform: rotate(-90deg);text-align: center;">
                    FOR SALE: &nbsp;&nbsp;&nbsp; <span style="color: black">$1,295,000</span>
                </h1>
            </div>
        </div>
        <div class="absolute" style="width: 100%;text-align:center;top:160px;">
            <p class="gold poppins bold-600" style="font-size: 80px;margin:0">Luxury New Build</p>
            <p class="poppins bold-600" style="font-size: 80px;margin-top:-80px">Opportunity</p>
        </div>
        <div class="absolute" style="top:1120px;background:white;right:200px;padding-top:0px;padding-bottom:0px;">
            <ul style="margin:0px;padding-left: 35px;padding-bottom:10px;">
                <li style="font-size:35px;"><b>3</b> BEDS</li>
                <li style="font-size:35px;" class="gold">|</li>
                <li style="font-size:35px;"><b>2</b> BATHS</li>
                <li style="font-size:35px;" class="gold">|</li>
                <li style="font-size:35px;"><b>1,700</b> SQFTs</li>
            </ul>
        </div>
        <div class="absolute" style="width: 100%;text-align:right;top:1255px;right:296px">
            <p class="gold bold-700" style="font-size: 45px;margin:0">55 MERRICK WAY #402</p>
            <p class="" style="font-size: 40px;margin-top:-10px">CORAL GABLES, FL 33134</p>
        </div>
        <div class="absolute" style="width: 100%;top:1500px;left:85px;right:200px;">
            <p class="poppins" style="font-size: 31px;">Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the industry's standard
                dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                a type specimen
                book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                essentially
                unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                passages, and more
                recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
        <div class="absolute" style="width: 100%;top:3710px;left:85px;right:170px;">
            <p class="gold bold-700" style="font-size: 31px">ABOUT THE BUILDER</p>
            <p class="white poppins" style="font-size: 31px;">The standard chunk of Lorem Ipsum used since the 1500s is
                reproduced below for those interested. Sections 1.10.32 and
                1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form,
                accompanied by
                English versions from the 1914</p>
        </div>
        <div class="absolute" style="width: 100%;text-align:center;top:2425px;left:-150px">
            <p class="white bold-700" style="font-size: 50px;">LEARN MORE</p>
        </div>
        <div class="absolute" style="width: 100%;text-align:right;top:4210px;right:165px;">
            <p class="gold bold-700" style="font-size: 50px;margin:0">For More Info Call</p>
            <p class="bold-700" style="font-size: 80px;margin-top:-40px">305.809.7650</p>
        </div>
        {{-- Footer --}}
        <div class="absolute" style="text-align: center;top:97.5%;">
            <h1 class="" style="font-size:22px;font-weight:400;color:white">55 MERRICK WAY SUITE 402,
                CORAL
                GABLES,
                FL
                33134</h1>
        </div>
        <div class="absolute" style="text-align: center;top:99%;">
            <h1 class="" style="font-size:18px;font-weight:400;color:#9e9e9e">Copyright © 2021 LUXE
                Properties, LLC, All rights reserved.</h1>
        </div>
    </div>
</body>

</html>