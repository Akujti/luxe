<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Selling</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css?family=Lato:300,400,700');
    @import url('https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Lato:wght@900&display=swap');

    * {
        font-family: "Lato";
    }

    label {
        background-color: #FFCF40;
        padding: 10px;
        display: block;
        width: 150px;
    }

    .row {
        display: flex;
        justify-content: center;
    }

    .row-divider {
        height: 3px;
        background-color: black;
    }

    .column-divider {
        min-height: 100%;
        height: 100%;
        width: 100px;
    }

    .row-input {
        margin: auto 0;
        min-width: 500px;
        max-width: 650px;
    }

    input,
    textarea {
        font-size: 15px;
        margin-top: 10px;
        margin-bottom: 30px;
        width: 100%;
        border: 1px solid #FFCF40;
    }

    .button {
        margin-top: 50px;
    }

    .generate {
        font-family: "Lato";
        font-weight: 600;
        font-size: 18px;
        padding: 20px;
        background-color: #FFCF40;
        color: white;
        text-decoration: none;
    }

    .flex {
        display: flex;
    }

    .flex label {
        margin: 10px auto 30px auto !important;
    }

    .row-image {
        width: 800px;
        height: auto;
    }

    .page {
        min-height: 1000px;
        ;
        max-height: 100%;
    }

    .page-1 .title {
        letter-spacing: 15px;
        font-size: 140px;
        color: #C5A467;
        line-height: 135px;
        margin: 0;
        font-weight: 300;
    }

    .page-1 .title-1 {
        margin-bottom: -30px;
    }

    .page-1 .subtitle-top {
        font-size: 86px;
        line-height: 100px;
        font-weight: 300;
        margin-bottom: -20px;
    }

    .page-1 .subtitle-bottom {
        font-size: 120px;
        line-height: 125px;
        letter-spacing: 63px;
        font-weight: 300;
        margin-top: -25px;
    }

    .page-1 .page-bottom {
        text-align: center;
    }

    /* .page-2-1 .luxe-pro-info {
        background-image: url("images/home-selling/listing_one.jpg");
        background-repeat: no-repeat;
        background-size: auto;
        height: 100%;
        position: inherit;
        bottom: 0px;
        width: 100%;
    } */

    .page-2-1 .luxe-pro-info .text {
        padding-top: 100%;
    }

    .page-2-1 .luxe-pro-info h1 {
        font-size: 170px;
        line-height: 160px;
        font-family: 'Lato';
        font-weight: 300;
        margin: -10px 0;
        color: #C5A367;
    }

    .page-2-1 .luxe-pro-info h2 {
        font-size: 72px;
        line-height: 67px;
        font-family: 'Lato';
        font-weight: 900;
        padding-left: 13px;
        letter-spacing: -4px;
        color: #fff;
        margin-top: -15px;
        margin-bottom: 2px;
    }

    .page-2-2 {
        background-repeat: no-repeat;
        background-size: cover;
        background-image: url("images/home-selling/P2.png");
    }

    .page-2-2 .first-part {
        height: 90%;
    }

    .page-2-2 .first-part .subtitle-top,
    .page-3-2 .heading .subtitle-top {
        font-size: 40px;
        line-height: 35px;
        font-family: 'Lato';
        font-weight: 300;
        margin-bottom: -40px;
    }

    .page-2-2 .first-part .title,
    .page-3-2 .heading .title {
        font-size: 100px;
        line-height: 50px;
        font-family: 'Lato';
        font-weight: 300;
        color: #C6A467;
    }

    .page-2-2 .first-part .subtitle-bottom {
        font-size: 111px;
        line-height: 50px;
        font-family: 'Lato';
        font-weight: 300;
        color: #535353;
        margin-top: -40px;
    }

    .page-2-2 .first-part .content p {
        width: 420px;
        margin: 0 auto;
        font-size: 18px;
        font-weight: 300;
        color: #222;
        line-height: 1.05;
        padding-left: 39px;
        padding-top: 35px;
    }

    .page-2-2 .second-part {
        padding-top: 10px;
        padding-bottom: 35px;
        height: 17%;
        bottom: 0px;
        background-repeat: no-repeat;
        background-size: auto;
        background-image: url("images/home-selling/no-2.png");
        background-position: right;
        text-align: right;
    }

    .page-2-2 .second-part .text {
        margin-top: 30px;
        margin-right: 150px;
    }

    .page-2-2 .first-title {
        color: #C5A367;
        font-size: 30px !important;
        line-height: 0px !important;
        font-weight: 300 !important;
        letter-spacing: 3px;
    }

    .page-2-2 .second-title {
        color: #000 !important;
        font-weight: 300 !important;
        font-size: 38px;
        line-height: 25px;
    }

    .page-2-2 .third-title {
        font-size: 43px;
        font-weight: 300 !important;
        line-height: 30px;
        color: #C5A367;
        letter-spacing: 3px;
    }

    .page-2-2 .fourth-title {
        color: #000;
        font-size: 20px;
        font-weight: 300;
        letter-spacing: 7px;
        margin-right: -4px !important;
        line-height: 0px !important;
    }

    .page-3-1 .luxe-pro-info {
        background-image: url("images/home-selling/page-3.png");
        background-size: cover;
        height: 100%;
        bottom: 0px;
        width: 100%;
    }

    .page-3-1 .luxe-pro-info .text {
        padding-top: 100%;
    }

    .page-3-1 .luxe-pro-info h2 {
        line-height: 20px;
        padding-left: 175px;
        font-size: 90px;
        color: #fff;
        z-index: 100;
        margin: 0 !important;
        font-weight: 300;
    }

    .page-3-1 .luxe-pro-info h1 {
        line-height: 190px;
        font-size: 140px;
        text-align: center;
        font-weight: 300;
        margin: 0 auto;
        color: #C5A367;
        z-index: 100;
        letter-spacing: -0.1em;
    }

    .page-3-2 .heading .subtitle-bottom {
        margin-top: 30px;
        font-size: 60px;
        line-height: 56px;
        font-weight: 300;
        margin-bottom: 50px;
    }

    .page-3-2 .content .objective {
        display: flex;
        margin-bottom: 50px;
    }

    .page-3-2 .content .objective-2 {
        top: 250px;
    }

    .page-3-2 .content .objective-3 {
        top: 500px;
    }

    .page-3-2 .content .objective img {
        width: 200px;
    }

    .page-3-2 .content .objective .objective-image-2 img {
        margin-top: 400px !important;
    }

    .page-3-2 .content .objective .ojective-text {
        margin-left: 20px;
    }

    .page-3-2 .content .objective .ojective-text h2 {
        max-width: 340px;
        font-size: 32px;
        font-weight: 900;
        color: #C5A367;
        top: -25px;
        line-height: 25px;
    }

    .page-3-2 .content .objective .ojective-text p {
        font-weight: 300;
        font-size: 14px;
        color: #000;
        line-height: 20px;
        top: 50px
    }

    .page-4-1 .luxe-pro-info {
        background-image: url("images/home-selling/Asset 8.png");
        background-size: cover;
        height: 100%;
        bottom: 0px;
        width: 100%;
        position: relative;
    }

    .page-4-1 .luxe-pro-info .text {
        padding-top: 100%;
        z-index: 100;
        bottom: 55%;
    }

    .page-4-1 .luxe-pro-info h2 {
        line-height: 0px;
        padding-left: 175px;
        font-size: 90px;
        color: #fff;
        z-index: 100;
        font-weight: 300;
    }

    .page-4-1 .luxe-pro-info h1 {
        line-height: 190px;
        font-size: 140px;
        text-align: left;
        font-weight: 300;
        margin: -70px auto;
        color: #C5A367;
        z-index: 100;
        letter-spacing: -0.1em;
    }

    .page-4-1 .luxe-pro-info .subtitle {
        line-height: 45px;
        padding-left: 175px;
        font-size: 90px;
        color: #fff;
        z-index: 100;
        margin-top: 50px !important;
        padding-bottom: 100px !important;
        font-weight: 300;
    }

    .page-4-1 img {
        position: absolute;
        width: 100%;
        height: 100%;
        z-index: -1;
    }

    .page-5 img {
        max-width: 100%;
        max-height: 100%;
    }

    .page-4-2 .luxe-pro-info {
        z-index: 100;
    }

    .page-4-2 .luxe-pro-info .spacer {
        margin-top: 150px;
    }

    .page-4-2 .luxe-pro-info .content {
        background-image: url("images/home-selling/Asset 9.png");
        background-size: auto;
        height: 90%;
        background-repeat: no-repeat;
        margin-left: 45px;
        padding-bottom: 35px;
    }

    .page-4-2 .content .section {
        max-width: 150px;
        text-align: center;
        color: white;
    }

    .page-4-2 .content .section .section-content-top {
        font-size: 60px;
        font-weight: 300;
    }

    .page-4-2 .content .section .section-content-bottom {
        font-size: 23px;
        text-transform: uppercase;
        font-weight: 300;
    }

    .page-4-2 .content .section-1 {
        margin-left: 170px;
        padding-top: 10px;
        margin-bottom: -10px;
    }

    .page-4-2 .content .section-2 {
        top: 260px;
        left: 83px;
    }

    .page-4-2 .content .section-3 {
        margin-top: -125px;
        margin-left: 335px;
    }

    .page-4-2 .content .section-4 {
        margin-top: 65px;
    }

    .page-4-2 .content .section-5 {
        margin-top: -118px;
        margin-left: 335px;
    }

    .page-4-2 .content .section-6 {
        margin-left: 170px;
        margin-top: -10px;
    }

    .page-4-2 .bg-image {
        left: -800px;
        z-index: 1;
    }

    .page-4-2 .text {
        margin-top: 50px;
        margin-left: 215px;
    }

    .page-4-2 .text hr {
        border: 1.5pt solid #C6A467;
        width: 362px;
        margin-left: -5px;
    }

    .page-4-2 .text p {
        font-weight: 300;
        max-width: 450px;
    }

    .page-5-1 .luxe-pro-info {
        background-image: url("images/home-selling/Asset 10.png");
        background-size: cover;
        height: 100%;
        bottom: 0px;
        width: 100%;
    }

    .page-5-1 .text {
        padding-top: 100%;
        z-index: 100;
        bottom: 10%;
    }

    .page-5-1 .text h1 {
        font-size: 195px;
        color: #C5A367;
        font-weight: 300;
        letter-spacing: -12px;
        margin-bottom: -110px;
    }

    .page-5-1 .text h2 {
        font-size: 70px;
        color: white;
        font-weight: 300;
        margin-left: 320px;
    }

    .page-5-2 .bg-image {
        width: 140%;
        left: -800px;
        top: 0;
        z-index: 1;
    }

    .page-5-2 .heading {
        z-index: 100;
        margin-left: 40px;
    }

    .page-5-2 .heading .subtitle-top {
        font-weight: 300;
        font-size: 54px;
        margin-left: 170px;
        margin-bottom: 30px;
    }

    .page-5-2 .heading .title {
        margin-top: -100px;
        margin-bottom: -100px;
        font-weight: 300;
        font-size: 148px;
        color: #C5A367;
    }

    .page-5-2 .heading .subtitle-bottom {
        font-size: 56px;
        margin-left: 200px;
        font-weight: 300;
        padding-top: 20px;
    }

    .page-5-2 .content {
        z-index: 100;
        top: 250px;
        left: 240px;
    }

    .page-5-2 .content p {
        font-family: 'Lato';
        font-weight: 300;
    }

    .page-5-2 .content ul {
        list-style-image: url('images/home-selling/check-large.png');
    }

    .page-5-2 .content li {
        margin-bottom: 15px;
        font-weight: 300;
    }

    .page-5-2 .text {
        margin-left: 230px;
        padding-bottom: 50px;
    }

    .page-6-1 .luxe-pro-info {
        background-image: url("images/home-selling/Asset 11.png");
        background-size: cover;
        height: 100%;
        bottom: 0px;
        width: 100%;
    }

    .page-6-1 .text {
        z-index: 100;
        bottom: 40%;
        padding-top: 100%;
    }

    .page-6-1 .text h1 {
        font-size: 195px;
        color: #C5A367;
        font-weight: 300;
        letter-spacing: -12px;
        margin-bottom: -110px;
    }

    .page-6-1 .text h2 {
        font-size: 70px;
        color: white;
        font-weight: 300;
        margin-left: 320px;
    }

    .page-6-2 .bg-image {
        width: 140%;
        position: absolute;
        left: -800px;
        top: 0;
        z-index: 1;
    }

    .page-6-2 ul {
        list-style-image: url('images/home-selling/check-large.png');
    }

    .page-6-2 li {
        margin-bottom: 5px;
        font-weight: 300;
    }

    .page-6-2 .second-part {
        padding: 15px 0px;
        height: 17%;
        bottom: 0px;
        background-repeat: no-repeat;
        background-size: auto;
        background-image: url("images/home-selling/10.png");
        background-position: right;
        text-align: right;
    }

    .page-6-2 .second-part .text {
        margin-top: 30px;
        margin-right: 150px;
    }

    .page-6-2 .first-title {
        color: #C5A367;
        font-size: 30px !important;
        line-height: 0px !important;
        font-weight: 300 !important;
        letter-spacing: 3px;
    }

    .page-6-2 .second-title {
        color: #000 !important;
        font-weight: 300 !important;
        font-size: 38px;
        line-height: 25px;
    }

    .page-6-2 .third-title {
        font-size: 43px;
        font-weight: 300 !important;
        line-height: 30px;
        color: #C5A367;
        letter-spacing: 3px;
    }

    .page-6-2 .fourth-title {
        color: #000;
        font-size: 20px;
        font-weight: 300;
        letter-spacing: 7px;
        margin-right: -4px !important;
        line-height: 0px !important;
    }

    .page-8-2 .second-part {
        height: 17%;
        bottom: 0px;
        background-repeat: no-repeat;
        background-size: auto;
        background-image: url("images/home-selling/14.png");
        background-position: right;
        text-align: right;
        padding: 20px 0px;
    }

    .page-8-2 .second-part .text,
    .page-10-2 .second-part .text,
    .page-12-2 .second-part .text,
    .page-13-2 .second-part .text,
    .page-15-2 .second-part .text {
        margin-top: 30px;
        margin-right: 150px;
    }

    .page-8-2 .first-title,
    .page-10-2 .first-title,
    .page-12-2 .first-title,
    .page-13-2 .first-title,
    .page-15-2 .first-title {
        color: #C5A367;
        font-size: 30px !important;
        line-height: 0px !important;
        font-weight: 300 !important;
        letter-spacing: 3px;
    }

    .page-8-2 .second-title,
    .page-10-2 .second-title,
    .page-12-2 .second-title,
    .page-13-2 .second-title,
    .page-15-2 .second-title {
        color: #000 !important;
        font-weight: 300 !important;
        font-size: 38px;
        line-height: 25px;
    }

    .page-8-2 .third-title,
    .page-10-2 .third-title,
    .page-12-2 .third-title,
    .page-13-2 .third-title,
    .page-15-2 .third-title {
        font-size: 43px;
        font-weight: 300 !important;
        line-height: 30px;
        color: #C5A367;
        letter-spacing: 3px;
    }

    .page-8-2 .fourth-title,
    .page-10-2 .fourth-title,
    .page-12-2 .fourth-title,
    .page-13-2 .fourth-title,
    .page-15-2 .fourth-title {
        color: #000;
        font-size: 20px;
        font-weight: 300;
        letter-spacing: 7px;
        margin-right: -4px !important;
        line-height: 0px !important;
    }

    .page-10-2 .second-part {
        height: 17%;
        bottom: 0px;
        background-repeat: no-repeat;
        background-size: auto;
        background-image: url("images/home-selling/18.png");
        background-position: right;
        text-align: right;
        padding: 20px 0px;
    }

    .page-12-1 .luxe-pro-info {
        background-image: url("images/home-selling/Asset 19.png");
        background-size: cover;
        height: 100%;
        bottom: 0px;
        width: 100%;
        padding-top: 100%;
    }

    .page-12-1 .luxe-pro-info .text,
    .page-13-1 .luxe-pro-info .text {
        z-index: 100;
        bottom: 30%;
    }

    .page-12-1 .luxe-pro-info h2,
    .page-13-1 .luxe-pro-info h2 {
        line-height: 18px;
        font-size: 90px;
        color: #fff;
        z-index: 100;
        margin: 0 !important;
        font-weight: 300;
    }

    .page-12-1 .luxe-pro-info h1,
    .page-13-1 .luxe-pro-info h1 {
        line-height: 190px;
        font-size: 140px;
        text-align: left;
        font-weight: 300;
        margin-top: 0px;
        margin-bottom: -65px;
        color: #C5A367;
        z-index: 100;
        letter-spacing: -0.1em;
    }

    .page-12-1 .luxe-pro-info .subtitle,
    .page-13-1 .luxe-pro-info .subtitle {
        line-height: 45px;
        padding-left: 175px;
        font-size: 45px;
        color: #fff;
        z-index: 100;
        margin-top: 30px !important;
        font-weight: 300;
    }

    .page-12-2 .second-part {
        height: 17%;
        padding: 20px 0;
        bottom: 0px;
        background-repeat: no-repeat;
        background-size: auto;
        background-image: url("images/home-selling/22.png");
        background-position: right;
        text-align: right;
    }

    .page-13-2 .second-part {
        height: 17%;
        padding: 20px 0;
        bottom: 0px;
        background-repeat: no-repeat;
        background-size: auto;
        background-image: url("images/home-selling/24.png");
        background-position: right;
        text-align: right;
    }

    .page-15-2 .second-part {
        height: 17%;
        padding: 20px 0;
        bottom: 0px;
        background-repeat: no-repeat;
        background-size: auto;
        background-image: url("images/home-selling/28.png");
        background-position: right;
        text-align: right;
    }

    .page-bg-image {
        top: 0;
        bottom: 0;
        right: 500px;
        position: absolute;
        background-size: cover;
        background-position: bottom right;
        background-repeat: no-repeat;
        height: 100%;
        width: 100%;
    }

    .page-with-side-image {
        position: relative;
        overflow: hidden;
    }

    .pos-relative {
        position: relative;
    }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.9/cropper.js"
    integrity="sha512-oqBsjjSHWqkDx4UKoU+5IUZN2nW2qDp2GFSKw9+mcFm+ZywqfBKp79nfWmGPco2wzTWuE46XpjtCjZ9tFmI12g=="
    crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.9/cropper.css"
    integrity="sha512-949FvIQOibfhLTgmNws4F3DVlYz3FmCRRhJznR22hx76SKkcpZiVV5Kwo0iwK9L6BFuY+6mpdqB2+vDIGVuyHg=="
    crossorigin="anonymous" />

<body>
    <div class="container">
        <form method="post" action=" {{ route('pdf.store') }} " method="POST">
            @csrf
            <div class="row">
                <div class="row-image">
                    <div class="page-1 page-1-1">
                        <div class="text-wrap">
                            <h1 class="subtitle-top page-1-1-text-1">THE</h1>
                            <h1 class="title title-1 page-1-1-text-2">HOME</h1>
                            <h1 class="title title-2 page-1-1-text-3">SELLING</h1>
                            <h1 class="subtitle-bottom page-1-1-text-4">GUIDE</h1>
                        </div>
                        <div class="page-bottom">
                            <img src="images/Asset 1.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="column-divider"></div>
                <div class="row-input">
                    <label for="page-1-1-text-1">First Title</label>
                    <input type="text" id="page-1-1-text-1" name="page_1_1_text_1" value="THE">

                    <label for="page-1-1-text-2">Second Title</label>
                    <input type="text" id="page-1-1-text-2" name="page_1_1_text_2" value="HOME">

                    <label for="page-1-1-text-3">Third Title</label>
                    <input type="text" id="page-1-1-text-3" name="page_1_1_text_3" value="SELLING">

                    <label for="page-1-1-text-4">Fourth Title</label>
                    <input type="text" id="page-1-1-text-4" name="page_1_1_text_4" value="GUIDE">
                </div>
            </div>
            <div class="row-divider"></div>
            <div class="row">
                <div class="row-image">
                    <div class="page-2 page-2-1" style="background-image: url(images/home-selling/listing_one.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    height: 100%;
    position: inherit;
    bottom: 0px;
    width: 100%;">
                        <img src="" id="imageBackground-page-2-1" style="display: none">
                        <input hidden name="page_2_1_img_1" value="images/home-selling/listing_one.jpg">
                        <div class="luxe-pro-info">
                            <div class="text">
                                <h1 class="page-2-1-text-1">LUXE</h1>
                                <h2 class="page-2-1-text-2">PROPERTIES</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column-divider"></div>
                <div class="row-input">
                    <div class="button">
                        <input type="file" id="imageBackgroundInput-page-2-1"
                            onchange="imageBackgroundInputChanged_page_2_1()">
                        <button type="button" onclick="startCropper_page_2_1()">Crop</button>
                        <button type="button" onclick="cropImage_page_2_1()">Save Crop</button>
                    </div>
                </div>
            </div>
            <div class="row-divider"></div>
            <div class="row">
                <div class="row-image">
                    <div class="page page-2 page-2-2">
                        <div class="first-part">
                            <div class="text">
                                <h2 class="subtitle-top page-2-2-text-1">A New Breed of Realtors Redefining</h2>
                                <h1 class="title page-2-2-text-2">The Real Estate</h1>
                                <h1 class="subtitle-bottom page-2-2-text-5">Experience</h1>
                            </div>
                            <div class="content">
                                <p class="page-2-2-text-3">At LUXE Properties, we take pride in building relationships
                                    based on the premise and understanding that each client is unique, along with their
                                    respective properties. We aim to delight and surprise our clients, deliver
                                    exceptional service and exceed expectations throughout the transaction. Our company
                                    utilizes the latest technology to stay abreast of market trends and deliver
                                    innovative solutions for our LUXE clients.</p>
                                <p class="page-2-2-text-4">The LUXE Properties team seeks to partner with you every step
                                    of the way. So, whether you are buying, selling, or considering real estate in South
                                    Florida, LUXE Properties is here to make your LUXE real estate experience your best
                                    move yet.</p>
                            </div>
                        </div>
                        <div class="second-part">
                            <div class="text">
                                <span class="first-title">THE</span><br>
                                <span class="second-title">HOME</span><br>
                                <span class="third-title">SELLING</span><br>
                                <span class="fourth-title">GUIDE</span><br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column-divider"></div>
                <div class="row-input">

                    <label for="page-2-2-text-1">First Title</label>
                    <input type="text" id="page-2-2-text-1" name="page_2_2_text_1"
                        value="A New Breed of Realtors Redefining">

                    <label for="page-2-2-text-2">Second Title</label>
                    <input type="text" id="page-2-2-text-2" name="page_2_2_text_2" value="The Real Estate">

                    <label for="page-2-2-text-2">Third Title</label>
                    <input type="text" id="page-2-2-text-5" name="page_2_2_text_5" value="Experience">

                    <div class="flex">
                        <label for="page-2-2-text-2">First Text</label>
                        <textarea id="page-2-2-text-3" name="page_2_2_text_3"
                            rows="4">At LUXE Properties, we take pride in building relationships based on the premise and understanding that each client is unique, along with their respective properties. We aim to delight and surprise our clients, deliver exceptional service and exceed expectations throughout the transaction. Our company utilizes the latest technology to stay abreast of market trends and deliver innovative solutions for our LUXE clients.</textarea>

                        <label for="page-2-2-text-2">Second Text</label>
                        <textarea id="page-2-2-text-4" name="page_2_2_text_4"
                            rows="4">The LUXE Properties team seeks to partner with you every step of the way. So, whether you are buying, selling, or considering real estate in South Florida, LUXE Properties is here to make your LUXE real estate experience your best move yet.</textarea>
                    </div>
                </div>
            </div>
            <div class="row-divider"></div>
            <div class="row">
                <div class="row-image">
                    <div class="page-3 page-3-1">
                        <img src="" id="imageBackground-page-3-1" style="display: none">
                        <input hidden name="page_3_1_img_1" value="images/home-selling/page-3.png">
                        <div class="luxe-pro-info">
                            <div class="text">
                                <h2 class="page-3-1-text-1">Our</h2>
                                <h1 class="page-3-1-text-2">Commitment</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column-divider"></div>
                <div class="row-input">
                    <div class="button">
                        <input type="file" id="imageBackgroundInput-page-3-1"
                            onchange="imageBackgroundInputChanged_page_3_1()">
                        <button type="button" onclick="startCropper_page_3_1()">Crop</button>
                        <button type="button" onclick="cropImage_page_3_1()">Save Crop</button>
                    </div>
                </div>
            </div>

            <div class="row-divider"></div>
            <div class="row">
                <div class="row-image">
                    <div class="page page-3 page-3-2">
                        <div class="heading">
                            <h2 class="subtitle-top page-3-2-text-1" style="text-align: center;font-size:50px">Key</h2>
                            <h1 class="title page-3-2-text-2" style="margin-bottom: 0px;">Objectives</h1>
                            <h1 class="subtitle-bottom page-3-2-text-3">When Listing Your Home</h1>
                        </div>
                        <div class="content">
                            <div class="objective objective-1">
                                <div class="ojective-image ojective-image-1">
                                    <img src="images/home-selling/Asset 5.png" alt="">
                                </div>
                                <div class="ojective-text ojective-text-1">
                                    <h2 class="title page-3-2-text-4">For The Highest Possible Price</h2>
                                    <p class="text page-3-2-text-5">Utilizing our pricing strategy along with our
                                        in-house appraisal services, LUXE agents ensure your home is properly valued to
                                        garner maximum exposure in the marketplace. Our pricing approach together with
                                        our tailored marketing program increases demand resulting in a higher sales
                                        price for our listings.</p>
                                </div>
                            </div>
                            <div class="objective objective-2">
                                <div class="ojective-image ojective-image-2">
                                    <img src="images/home-selling/Asset 6.png" alt="">
                                </div>
                                <div class="ojective-text ojective-text-2">
                                    <h2 class="title page-3-2-text-6">In The Shortest Amount Of Time</h2>
                                    <p class="text page-3-2-text-7">The ability to advise on market timing is one of
                                        LUXE’s competitive advantages. Our custom marketing program is consistent and
                                        predictable giving us a number of reliable metrics that can help identify how
                                        long it will take each listing to sell. The majority of the homes sold with LUXE
                                        in 2017 closed in 90 days or less.</p>
                                </div>
                            </div>
                            <div class="objective objective-3">
                                <div class="ojective-image ojective-image-3">
                                    <img src="images/home-selling/Asset 7.png" alt="">
                                </div>
                                <div class="ojective-text ojective-text-3">
                                    <h2 class="title page-3-2-text-8">With The Least Hassle</h2>
                                    <p class="text page-3-2-text-9">Once you list with LUXE, you can sit back and relax.
                                        Our specialized departments cover all aspects of the home sale process from
                                        marketing your home all the way up to closing. Our company has a “let us handle
                                        that for you” approach to the sale. We’ve redefined our process so precisely
                                        that nothing falls through the cracks.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column-divider"></div>
                <div class="row-input">
                    <label for="page-3-2-text-1">First Title</label>
                    <input type="text" id="page-3-2-text-1" name="page_3_2_text_1" value="Key">

                    <label for="page-3-2-text-2">Second Title</label>
                    <input type="text" id="page-3-2-text-2" name="page_3_2_text_2" value="Objectives">

                    <label for="page-3-2-text-3">Third Title</label>
                    <input type="text" id="page-3-2-text-3" name="page_3_2_text_3" value="When Listing Your Home">

                    <div class="flex">
                        <label for="page-3-2-text-3">First Subtitle</label>
                        <input type="text" id="page-3-2-text-4" name="page_3_2_text_4"
                            value="For The Highest Possible Price">

                        <label for="page-3-2-text-3">First Text</label>
                        <textarea id="page-3-2-text-5" name="page_3_2_text_5"
                            rows="4">Utilizing our pricing strategy along with our in-house appraisal services, LUXE agents ensure your home is properly valued to garner maximum exposure in the marketplace. Our pricing approach together with our tailored marketing program increases demand resulting in a higher sales price for our listings.</textarea>
                    </div>

                    <div class="flex">
                        <label for="page-3-2-text-3">Second Subtitle</label>
                        <input type="text" id="page-3-2-text-6" name="page_3_2_text_6"
                            value="In The Shortest Amount Of Time">

                        <label for="page-3-2-text-3">Second Text</label>
                        <textarea id="page-3-2-text-7" name="page_3_2_text_7"
                            rows="4">The ability to advise on market timing is one of LUXE’s competitive advantages. Our custom marketing program is consistent and predictable giving us a number of reliable metrics that can help identify how long it will take each listing to sell. The majority of the homes sold with LUXE in 2017 closed in 90 days or less.</textarea>
                    </div>

                    <div class="flex">
                        <label for="page-3-2-text-3">Third Subtitle</label>
                        <input type="text" id="page-3-2-text-8" name="page_3_2_text_8" value="With The Least Hassle">

                        <label for="page-3-2-text-3">Third Text</label>
                        <textarea id="page-3-2-text-9" name="page_3_2_text_9"
                            rows="4">Once you list with LUXE, you can sit back and relax. Our specialized departments cover all aspects of the home sale process from marketing your home all the way up to closing. Our company has a “let us handle that for you” approach to the sale. We’ve redefined our process so precisely that nothing falls through the cracks.</textarea>
                    </div>
                </div>
            </div>

            <div class="row-divider"></div>
            <div class="row">
                <div class="row-image" style="height: 1210px;">
                    <div class="page-4 page-4-1">
                        <div class="luxe-pro-info">
                            <img src="" id="imageBackground" style="display: none">
                            <input hidden name="page_4_1_img_1" value="images/home-selling/Asset 8.png">
                            <div class="text">
                                <h2 class="page-4-1-text-1">The</h2>
                                <h1 class="page-4-1-text-2">Power</h1>
                                <h2 class="page-4-1-text-3 subtitle">of Our Brand</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column-divider"></div>
                <div class="row-input">
                    <div class="button">
                        <input type="file" id="imageBackgroundInput" onchange="imageBackgroundInputChanged()">
                        <button type="button" onclick="startCropper()">Crop</button>
                        <button type="button" onclick="cropImage()">Save Crop</button>
                    </div>
                </div>
            </div>

            <div class="row-divider"></div>
            <div class="row">
                <div class="row-image">
                    <div class="page page-4 page-4-2 page-with-side-image"
                        style="background-size: cover;background-position: -600px -5px;background-repeat: no-repeat;">
                        <div class="page-bg-image"
                            style="background-image: url('images/home-selling/Asset 8.png');right: 610px;">
                            <h1></h1>
                        </div>
                        <div class="luxe-pro-info pos-relative">
                            <div class="content">
                                <div class="section section-1">
                                    <span class="section-content-top page-4-2-text-1">4</span>
                                    <br>
                                    <span class="section-content-bottom page-4-2-text-2">Locations</span>
                                </div>
                                <div class="section section-2">
                                    <span class="section-content-top page-4-2-text-3">325</span>
                                    <br>
                                    <span class="section-content-bottom page-4-2-text-4">Real Estate Agents</span>
                                </div>
                                <div class="section section-3">
                                    <span class="section-content-top page-4-2-text-5">61</span>
                                    <br>
                                    <span class="section-content-bottom page-4-2-text-6">% Growth 2019</span>
                                </div>
                                <div class="section section-4">
                                    <span class="section-content-top page-4-2-text-7">67</span>
                                    <br>
                                    <span class="section-content-bottom page-4-2-text-8">Days On Market</span>
                                </div>
                                <div class="section section-5">
                                    <span class="section-content-top page-4-2-text-9">3500</span>
                                    <br>
                                    <span class="section-content-bottom page-4-2-text-10">Homes Sold</span>
                                </div>
                                <div class="section section-6">
                                    <span class="section-content-top page-4-2-text-11">98</span>
                                    <br>
                                    <span class="section-content-bottom page-4-2-text-12">% List To Sale Price</span>
                                </div>
                            </div>
                            <div class="text ">
                                <hr>
                                <p class="page-4-2-text-13">The LUXE Properties team has unparalleled history with
                                    successful home sales in the
                                    Greater Miami area. We have sold nearly 2,100 homes on average within less than 90
                                    days. Our team delivers exceptional results.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column-divider"></div>
                <div class="row-input">
                    <div class="flex">
                        <label for="page-4-2-text-1">Title</label>
                        <input type="text" id="page-4-2-text-1" name="page_4_2_text_1" value="4">

                        <label for="page-4-2-text-2">Subtitle</label>
                        <input type="text" id="page-4-2-text-2" name="page_4_2_text_2" value="LOCATIONS">
                    </div>
                    <div class="flex">
                        <label for="page-4-2-text-3">Title</label>
                        <input type="text" id="page-4-2-text-3" name="page_4_2_text_3" value="325">

                        <label for="page-4-2-text-4">Subtitle</label>
                        <input type="text" id="page-4-2-text-4" name="page_4_2_text_4" value="REAL ESTATE AGENTS">
                    </div>
                    <div class="flex">
                        <label for="page-4-2-text-5">Title</label>
                        <input type="text" id="page-4-2-text-5" name="page_4_2_text_5" value="61">

                        <label for="page-4-2-text-6">Subtitle</label>
                        <input type="text" id="page-4-2-text-6" name="page_4_2_text_6" value="% GROWTH 2019">
                    </div>
                    <div class="flex">
                        <label for="page-4-2-text-7">Title</label>
                        <input type="text" id="page-4-2-text-7" name="page_4_2_text_7" value="67">

                        <label for="page-4-2-text-8">Subtitle</label>
                        <input type="text" id="page-4-2-text-8" name="page_4_2_text_8" value="DAYS ON MARKET">
                    </div>
                    <div class="flex">
                        <label for="page-4-2-text-9">Title</label>
                        <input type="text" id="page-4-2-text-9" name="page_4_2_text_9" value="3500">

                        <label for="page-4-2-text-10">Subtitle</label>
                        <input type="text" id="page-4-2-text-10" name="page_4_2_text_10" value="HOMES SOLD">
                    </div>
                    <div class="flex">
                        <label for="page-4-2-text-11">Title</label>
                        <input type="text" id="page-4-2-text-11" name="page_4_2_text_11" value="98">

                        <label for="page-4-2-text-12">Subtitle</label>
                        <input type="text" id="page-4-2-text-12" name="page_4_2_text_12" value="% LIST TO SALE PRICE">
                    </div>
                    <div class="flex">
                        <label for="page-4-2-text-13">Title</label>
                        <textarea id="page-4-2-text-13" name="page_4_2_text_13"
                            rows="4">The LUXE Properties team has unparalleled history with successful home sales in the Greater Miami area. We have sold nearly 2,100 homes on average within less than 90 days. Our team delivers exceptional results.</textarea>
                    </div>
                </div>
            </div>

            <div class="row-divider"></div>
            <div class="row">
                <div class="row-image" style="height: 1210px;">
                    <div class="page-5 page-5-1">
                        <div class="luxe-pro-info">
                            <img src="" id="imageBackground-page-5-1" style="display: none">
                            <input hidden name="page_5_1_img_1" value="images/home-selling/Asset 10.png">
                            <div class="text">
                                <h1>Marketing</h1>
                                <h2>Showcase</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column-divider"></div>
                <div class="row-input">
                    <div class="button">
                        <input type="file" id="imageBackgroundInput-page-5-1"
                            onchange="imageBackgroundInputChanged_page_5_1()">
                        <button type="button" onclick="startCropper_page_5_1()">Crop</button>
                        <button type="button" onclick="cropImage_page_5_1()">Save Crop</button>
                    </div>
                </div>
            </div>

            <div class="row-divider"></div>
            <div class="row">
                <div class="row-image">
                    <div class="page page-5 page-5-2 page-with-side-image"
                        style="min-height:1160px;background-size: cover;background-position: -705px -5px;background-repeat: no-repeat;">
                        <div class="page-bg-image"
                            style="background-image: url('images/home-selling/Asset 10.png');right: 602px;">
                            <h1></h1>
                        </div>
                        <div class="luxe-pro-info pos-relative">
                            <div class="content">
                                <div class="heading">
                                    <h2 class="subtitle-top">Tailored Listing</h2>
                                    <h1 class="title"><span style="color:white;">Ex</span>posure</h1>
                                    <h1 class="subtitle-bottom">Strategy</h1>
                                </div>
                                <div class="content text">
                                    <p class="page-5-2-text-1">Our specialized agents and marketing team work together
                                        to ensure your home is properly positioned in the marketplace for maximum
                                        exposure, both digitally and in print.</p>
                                    <p class="page-5-2-text-2">Each property listing is marketed using the personalized
                                        materials below:</p>
                                    <ul id="page-5-2-text-3-list">
                                        <li>Personalized website of home listing</li>
                                        <li>Professional HD Videos</li>
                                        <li>Professional HD Photography</li>
                                        <li>Professional Drone Videography</li>
                                        <li>Custom reporting on specific buyer profiles for each listing</li>
                                        <li>Direct Mail Marketing to targeted demographics</li>
                                        <li>Email Campaigns to targeted demographics</li>
                                        <li>PPC Google campaign to targeted demographics</li>
                                        <li>Targeted advertising in China, South America and Europe</li>
                                        <li>Targeted Social Media Advertising</li>
                                        <li>Syndication to over 100 online portals</li>
                                        <li>Premium placement on all major real estate portals includ- ing Zillow,
                                            Trulia & Realtor.com</li>
                                        <li>International MLS Marketing</li>
                                        <li>Print advertisements in local newspaper and magazines</li>
                                        <li>Broker’s Open</li>
                                        <li>Bi-weekly Open Houses</li>
                                        <li>Signage including web domain riders</li>
                                    </ul>
                                    <p class="page-5-2-text-4">Our marketing will maximize interest through our
                                        personalized campaigns created exclusively for your home, which will assist in
                                        achieving the greatest results.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="column-divider"></div>
                <div class="row-input">
                    <div class="flex">
                        <label for="page-5-2-text-1">Text 1</label>
                        <textarea id="page-5-2-text-1" name="page_5_2_text_1"
                            rows="4">Our specialized agents and marketing team work together to ensure your home is properly positioned in the marketplace for maximum exposure, both digitally and in print.</textarea>
                    </div>
                    <div class="flex">
                        <label for="page-5-2-text-2">Text 2</label>
                        <textarea id="page-5-2-text-2" name="page_5_2_text_2"
                            rows="4">Each property listing is marketed using the personalized materials below:</textarea>
                    </div>
                    <div class="flex">
                        <label for="page-5-2-text-3">List</label>
                        <textarea id="page-5-2-text-3" name="page_5_2_text_3" rows="7">Personalized website of home listing
Professional HD Videos
Professional HD Photography
Professional Drone Videography
Custom reporting on specific buyer profiles for each listing
Direct Mail Marketing to targeted demographics
Email Campaigns to targeted demographics
PPC Google campaign to targeted demographics
Targeted advertising in China, South America and Europe
Targeted Social Media Advertising
Syndication to over 100 online portals
Premium placement on all major real estate portals includ- ing Zillow, Trulia & Realtor.com
International MLS Marketing
Print advertisements in local newspaper and magazines
Broker’s Open
Bi-weekly Open Houses
Signage including web domain riders</textarea>
                    </div>
                    <div class="flex">
                        <label for="page-5-2-text-4">Text</label>
                        <textarea id="page-5-2-text-4" name="page_5_2_text_4" rows="4">Our marketing will maximize interest through our personalized campaigns created exclusively for your home, which will assist in achieving the greatest results.
                        </textarea>
                    </div>
                </div>
            </div>
    </div>

    <div class="row-divider"></div>
    <div class="row">
        <div class="row-image" style="height: 1210px;">
            <div class="page-6 page-6-1">
                <div class="luxe-pro-info">
                    <img src="" id="imageBackground-page-6-1" style="display: none">
                    <input hidden name="page_6_1_img_1" value="images/home-selling/Asset 11.png">
                    <div class="text">
                        <h1>Marketing</h1>
                        <h2>Timeframe</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="column-divider"></div>
        <div class="row-input">
            <div class="button">
                <input type="file" id="imageBackgroundInput-page-6-1" onchange="imageBackgroundInputChanged_page_6_1()">
                <button type="button" onclick="startCropper_page_6_1()">Crop</button>
                <button type="button" onclick="cropImage_page_6_1()">Save Crop</button>
            </div>
        </div>
    </div>

    <div class="row-divider"></div>
    <div class="row">
        <div class="row-image">
            <div class="page page-6 page-6-2 page-with-side-image"
                style="padding-top: 100px;background-size: cover;background-position: -600px -5px;background-repeat: no-repeat;">
                <div class="page-bg-image"
                    style="background-image: url('images/home-selling/Asset 11.png');right: 560px;">
                    <h1></h1>
                </div>
                <div class="week pos-relative" style="z-index:50;top:15px;">
                    <img class="" src="images/home-selling/yellow-fade.png" alt="" style="width:45%;">
                    <h2 class="page-6-2-text-1-1"
                        style="color:white;font-weight:300;font-size:40px;margin-top:-55px;margin-left:180px;">Week 1
                    </h2>
                </div>
                <div class="week pos-relative" style="z-index:50;top:20px;margin-top: 100px;">
                    <img class="" src="images/home-selling/yellow-fade.png" alt="" style="width:45%;">
                    <h2 class="page-6-2-text-1-2"
                        style="color:white;font-weight:300;font-size:40px;margin-top:-55px;margin-left:180px;">Week 3
                    </h2>
                </div>
                <div class="week pos-relative" style="z-index:50;top:20px;margin-top: 100px;">
                    <img class="" src="images/home-selling/yellow-fade.png" alt="" style="width:45%;">
                    <h2 class="page-6-2-text-1-3"
                        style="color:white;font-weight:300;font-size:40px;margin-top:-55px;margin-left:180px;">Week 5
                    </h2>
                </div>
                <div class="week pos-relative" style="z-index:50;top:20px;margin-top: 100px;">
                    <img class="" src="images/home-selling/yellow-fade.png" alt="" style="width:45%;">
                    <h2 class="page-6-2-text-1-4"
                        style="color:white;font-weight:300;font-size:40px;margin-top:-55px;margin-left:180px;">Week 7
                    </h2>
                </div>
                <div class="week pos-relative" style="z-index:50;top:20px;margin-top: 100px;">
                    <img class="" src="images/home-selling/yellow-fade.png" alt="" style="width:45%;">
                    <h2 class="page-6-2-text-1-5"
                        style="color:white;font-weight:300;font-size:40px;margin-top:-55px;margin-left:180px;">Week 9
                    </h2>
                </div>
                <div class="list" style="margin-top: -725px;margin-left: 370px;position:relative;">
                    <div class="list-week-1" style="position:absolute;top:-22px;">
                        <ul id="page-6-2-text-1-list">
                            <li>Signage is placed</li>
                            <li>Photography & video session</li>
                            <li>Home is listed on MLS + International MLS</li>
                            <li>Personalized website created for home</li>
                            <li>Make sure listing syndicated to all sites</li>
                        </ul>
                    </div>
                    <div class="list-week-3" style="position:absolute;top:140px;">
                        <ul id="page-6-2-text-2-list">
                            <li>Email blast campaign</li>
                            <li>Virtual tour posted on YouTube and shared</li>
                            <li>Blog post with Facebook sponsored ad</li>
                            <li>Additional Social Media Posts</li>
                            <li>Open House (if applicable)</li>
                        </ul>
                    </div>
                    <div class="list-week-5" style="position:absolute;top:300px;">
                        <ul id="page-6-2-text-3-list">
                            <li>Open houses</li>
                            <li>Targeted email campaign to area's owners</li>
                            <li>Brokers' open for select agents who specialize in the area</li>
                            <li>Begin preparing direct mail piece</li>
                        </ul>
                    </div>
                    <div class="list-week-7" style="position:absolute;top:445px;">
                        <ul id="page-6-2-text-4-list">
                            <li>Direct mail is sent</li>
                            <li>Personal outreach to other agents</li>
                            <li>Open houses</li>
                            <li>Continually monitor social media posts, blog posts and websites for potential buyers
                            </li>
                        </ul>
                    </div>
                    <div class="list-week-9" style="position:absolute;top:590px;">
                        <ul id="page-6-2-text-5-list">
                            <li>Open Houses</li>
                            <li>Monitor PPC for listing</li>
                            <li>Review analytics for Facebook Sponsored Ad</li>
                            <li>Revise website and social media postings</li>
                            <li>Review with client to make adjustments if needed</li>
                        </ul>
                    </div>
                </div>
                <div class="second-part" style="margin-top: 115%;">
                    <div class="text">
                        <span class="first-title">THE</span><br>
                        <span class="second-title">HOME</span><br>
                        <span class="third-title">SELLING</span><br>
                        <span class="fourth-title">GUIDE</span><br>
                    </div>
                </div>
            </div>

        </div>
        <div class="column-divider"></div>
        <div class="row-input">
            <div class="flex">
                <label for="page-6-2-text-1-1">Title 1</label>
                <input id="page-6-2-text-1-1" type="text" name="page_6_2_text_1_1" value="Week 1">

                <label for="page-6-2-text-1-2">Title 2</label>
                <input id="page-6-2-text-1-2" type="text" name="page_6_2_text_1_2" value="Week 3">

                <label for="page-6-2-text-1-3">Title 3</label>
                <input id="page-6-2-text-1-3" type="text" name="page_6_2_text_1_3" value="Week 5">
            </div>
            <div class="flex">
                <label for="page-6-2-text-1-4">Title 4</label>
                <input id="page-6-2-text-1-4" type="text" name="page_6_2_text_1_4" value="Week 7">

                <label for="page-6-2-text-1-5">Title 5</label>
                <input id="page-6-2-text-1-5" type="text" name="page_6_2_text_1_5" value="Week 9">
            </div>
            <div class="flex">
                <label for="page-6-2-text-1">Week 1 List</label>
                <textarea id="page-6-2-text-1" name="page_6_2_text_1" rows="7">Signage is placed
Photography & video session
Home is listed on MLS + International MLS
Personalized website created for home
Make sure listing syndicated to all sites</textarea>
            </div>

            <div class="flex">
                <label for="page-6-2-text-2">Week 3 List</label>
                <textarea id="page-6-2-text-2" name="page_6_2_text_2" rows="7">Email blast campaign
Virtual tour posted on YouTube and shared
Blog post with Facebook sponsored ad
Additional Social Media Posts
Open House (if applicable)</textarea>
            </div>

            <div class="flex">
                <label for="page-6-2-text-3">Week 5 List</label>
                <textarea id="page-6-2-text-3" name="page_6_2_text_3" rows="7">Open houses
Targeted email campaign to area's owners
Brokers' open for select agents who specialize in the area
Begin preparing direct mail piece</textarea>
            </div>

            <div class="flex">
                <label for="page-6-2-text-4">Week 7 List</label>
                <textarea id="page-6-2-text-4" name="page_6_2_text_4" rows="7">Direct mail is sent
Personal outreach to other agents
Open houses
Continually monitor social media posts, blog posts and websites for potential buyers</textarea>
            </div>

            <div class="flex">
                <label for="page-6-2-text-5">Week 9 List</label>
                <textarea id="page-6-2-text-5" name="page_6_2_text_5" rows="7">Open Houses
Monitor PPC for listing
Review analytics for Facebook Sponsored Ad
Revise website and social media postings
Review with client to make adjustments if needed</textarea>
            </div>
        </div>
    </div>
    </div>

    <div class="row-divider"></div>
    <div class="row">
        <div class="row-image">
            <img src="" id="imageBackground-page-7-1-1" style="display: none">
            <input hidden name="page_7_1_1_img_1" value="images/home-selling/Asset 13-1.png">
            <img src="" id="imageBackground-page-7-1-2" style="display: none">
            <input hidden name="page_7_1_2_img_1" value="images/home-selling/Asset 13-2.png">
            <img src="" id="imageBackground-page-7-1-3" style="display: none">
            <input hidden name="page_7_1_3_img_1" value="images/home-selling/Asset 13-3.png">
            <div class="page-7 page-7-1">
                <div class="luxe-pro-info">
                    <div class="row-1"
                        style="background-image: url('images/home-selling/Asset 13-1.png');padding:20%;top:0;background-size: cover;">
                    </div>
                    <div class="row-2"
                        style="background-image: url('images/home-selling/Asset 13-2.png');padding:20%;top:33%;background-size: cover;">
                    </div>
                    <div class="row-3"
                        style="background-image: url('images/home-selling/Asset 13-3.png');padding:20%;bottom:0;background-size: cover;">
                    </div>
                    <div class="text" style="margin-top:-720px;margin-bottom: 325px;">
                        <h1 style="font-size: 188px;color:white;letter-spacing: -12px;font-weight: 300;">Property</h1>
                        <h2
                            style="font-size: 80px;color:white;font-weight: 300;letter-spacing: 24px;margin-top: -180px;margin-left:20px;">
                            Showcase</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="column-divider"></div>
        <div class="row-input">
            <div class="button">
                <input type="file" id="imageBackgroundInput-page-7-1-1"
                    onchange="imageBackgroundInputChanged_page_7_1_1()">
                <button type="button" onclick="startCropper_page_7_1_1()">Crop</button>
                <button type="button" onclick="cropImage_page_7_1_1()">Save Crop</button>
            </div>
            <div class="button">
                <input type="file" id="imageBackgroundInput-page-7-1-2"
                    onchange="imageBackgroundInputChanged_page_7_1_2()">
                <button type="button" onclick="startCropper_page_7_1_2()">Crop</button>
                <button type="button" onclick="cropImage_page_7_1_2()">Save Crop</button>
            </div>
            <div class="button">
                <input type="file" id="imageBackgroundInput-page-7-1-3"
                    onchange="imageBackgroundInputChanged_page_7_1_3()">
                <button type="button" onclick="startCropper_page_7_1_3()">Crop</button>
                <button type="button" onclick="cropImage_page_7_1_3()">Save Crop</button>
            </div>
        </div>
    </div>

    <div class="row-divider"></div>

    <div class="row">
        <div class="row-image" style="height: 1050px;">
            <div class="page-7-0 page-with-side-image" style="height: 1050px;">
                <div class="page-7 page-7-2 page-7-2-1"
                    style="padding:20%;top:0;background-size: cover;background-position: center;background-position: -900px 0px;background-repeat:no-repeat;">
                    <h1></h1>
                </div>
                <div class="page-7 page-7-2 page-7-2-2"
                    style="padding:20%;top:33%;background-size: cover;background-position: center;background-position: -930px 0px;background-repeat:no-repeat;">
                    <h1></h1>
                </div>
                <div class="page-7 page-7-2 page-7-2-3"
                    style="padding:20%;bottom:0;background-size: cover;background-position: center;background-position: -908px 0px;background-repeat:no-repeat;">
                    <h1></h1>
                </div>
                <div class="page-bg-image page-bg-image-1"
                    style="top:0;background-image: url('images/home-selling/Asset 13-1.png');right: 610px;height: 33%;background-position: center left;">
                    <h1></h1>
                </div>
                <div class="page-bg-image page-bg-image-2"
                    style="top:33%;background-image: url('images/home-selling/Asset 13-2.png');right: 610px;height: 33%;background-position: center left;">
                    <h1></h1>
                </div>
                <div class="page-bg-image page-bg-image-3"
                    style="top:66%;background-image: url('images/home-selling/Asset 13-3.png');right: 610px;height: 33%;background-position: center left;">
                    <h1></h1>
                </div>
                <div class="page-7 page-7-2" style="z-index:100;margin-top: -1000px;margin-bottom: 145px;">
                    <div class="section" style="top:50px;left:10px;position:relative;">
                        <img src="images/home-selling/Asset 13-4.png" alt="" style="">
                        <div class="text"
                            style="position:absolute;margin-top: -30px;z-index:1000;margin-left:70px;margin-top: -145px;">
                            <p class="page-7-2-text-1" style="font-size: 46px;line-height:20px;color:white;">
                                Professional
                            </p>
                            <p class="page-7-2-text-2" style="font-size: 50px;font-weight:900;line-height:0px;">
                                Photography
                            </p>
                        </div>
                    </div>
                    <div class="section" style="top:60px;left:10px;margin-top:300px;position:relative;">
                        <img src="images/home-selling/Asset 13-4.png" alt="" style="">
                        <div class="text"
                            style="position:absolute;margin-top: -30px;z-index:1000;margin-left:70px;margin-top: -145px;">
                            <p class="page-7-2-text-3" style="font-size: 46px;line-height:20px;color:white;">
                                Professional
                            </p>
                            <p class="page-7-2-text-4" style="font-size: 50px;font-weight:900;line-height:0px;">
                                Videography
                            </p>
                        </div>
                    </div>
                    <div class="section" style="top:255px;position:relative;">
                        <img src="images/home-selling/Asset 13-4.png" alt="" style="">
                        <div class="text"
                            style="position:absolute;margin-top: -30px;z-index:1000;margin-left:70px;margin-top: -145px;">
                            <p class="page-7-2-text-5" style="font-size: 46px;line-height:20px;color:white;">Optional
                                Drone
                            </p>
                            <p class="page-7-2-text-6" style="font-size: 50px;font-weight:900;line-height:0px;">
                                Videography
                            </p>
                        </div>
                    </div>
                    <div class="text" style="top:-550px;margin-left: 410px;position:relative;">
                        <div class="section" style="top:-55px;position:absolute;">
                            <p class="page-7-2-text-7" style="font-weight: 300;">LUXE listings receive the luxury
                                treatment
                                from beginning to end. It is proven that listings with professional real estate
                                photographs
                                sell 32% faster and at a higher price. All homes listed with LUXE include professional
                                photography along with staging recommendations from our agents. These stunning high
                                quality
                                images of the interior/exterior of your property will be the cornerstone of our
                                marketing
                                materials, inviting homebuyers to want to see more of your home.</p>
                        </div>
                        <div class="section" style="top: 365px;position:absolute;">
                            <p class="page-7-2-text-8" style="font-weight: 300;">As we continuously seek to maximize
                                awareness of your home, we have incorporated virtual tours for the buyer on the go or
                                international buyers. YouTube has rapidly become the number one online video site making
                                our
                                channel the perfect online video destination for limitless exposure of the properties
                                represented by our team. With video being 53% more likely to generate a first-page
                                Google
                                ranking, we optimize each tour towards its target market based on location and
                                demographics.
                            </p>
                        </div>
                        <div class="section" style="top:673px;position:absolute;">
                            <p class="page-7-2-text-9" style="font-weight: 300;">Through the use of drone footage
                                combined
                                with high-definition videography, we are able to create stunning aerial tours for each
                                of
                                our exclusive listings. Our drone videography offers panoramic views of a property to
                                showcase its exterior amenities such as pools, the footprint of the home and surrounding
                                areas of interest.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="column-divider"></div>
        <div class="row-input">
            <div class="flex">
                <label for="page-7-2-text-1">Title 1</label>
                <input type="text" id="page-7-2-text-1" name="page_7_2_text_1" value="Professional">
                <label for="page-7-2-text-2">Subtitle 1</label>
                <input type="text" id="page-7-2-text-2" name="page_7_2_text_2" value="Photography">
            </div>
            <div class="flex">
                <label for="page-7-2-text-3">Title 1</label>
                <input type="text" id="page-7-2-text-3" name="page_7_2_text_3" value="Professional">
                <label for="page-7-2-text-4">Subtitle 2</label>
                <input type="text" id="page-7-2-text-4" name="page_7_2_text_4" value="Videography">
            </div>
            <div class="flex">
                <label for="page-7-2-text-5">Title 3</label>
                <input type="text" id="page-7-2-text-5" name="page_7_2_text_5" value="Optional Drone">
                <label for="page-7-2-text-6">Subtitle 3</label>
                <input type="text" id="page-7-2-text-6" name="page_7_2_text_6" value="Videography">
            </div>
            <div class="flex">
                <label for="page-7-2-text-7">Text 1</label>
                <textarea id="page-7-2-text-7" name="page_7_2_text_7"
                    rows="7">LUXE listings receive the luxury treatment from beginning to end. It is proven that listings with professional real estate photographs sell 32% faster and at a higher price. All homes listed with LUXE include professional photography along with staging recommendations from our agents. These stunning high quality images of the interior/exterior of your property will be the cornerstone of our marketing materials, inviting homebuyers to want to see more of your home.</textarea>
            </div>
            <div class="flex">
                <label for="page-7-2-text-8">Text 2</label>
                <textarea id="page-7-2-text-8" name="page_7_2_text_8"
                    rows="7">As we continuously seek to maximize awareness of your home, we have incorporated virtual tours for the buyer on the go or international buyers. YouTube has rapidly become the number one online video site making our channel the perfect online video destination for limitless exposure of the properties represented by our team. With video being 53% more likely to generate a first-page Google ranking, we optimize each tour towards its target market based on location and demographics.</textarea>
            </div>
            <div class="flex">
                <label for="page-7-2-text-9">Text 3</label>
                <textarea id="page-7-2-text-9" name="page_7_2_text_9"
                    rows="7">Through the use of drone footage combined with high-definition videography, we are able to create stunning aerial tours for each of our exclusive listings. Our drone videography offers panoramic views of a property to showcase its exterior amenities such as pools, the footprint of the home and surrounding areas of interest.</textarea>
            </div>
        </div>
    </div>

    <div class="row-divider"></div>
    <div class="row">
        <div class="row-image">
            <div class="page-8 page-8-1"
                style="background-image: url('images/home-selling/Asset 14.png');padding-top:130%;top:0;background-size: cover;background-position: center;">
                <h1></h1>
            </div>
        </div>
        <div class="column-divider"></div>
        <div class="row-input">
            <h1></h1>
        </div>
    </div>

    <div class="row-divider"></div>
    <div class="row">
        <div class="row-image">
            <div class="page page-8 page-8-2">
                <div class="heading">
                    <h2 class="subtitle-top"
                        style="font-weight: 300;font-size:70px;margin-bottom:-170px;margin-left:10px;">Our</h2>
                    <h1 class="title" style="font-size: 190px;color:#C6A467;font-weight:300;margin-bottom:-100px;">
                        Digital</h1>
                    <h1 class="subtitle-bottom"
                        style="font-weight: 300;font-size: 75px;margin-left:250px;margin-bottom:-10px;">Advantage</h1>
                </div>
                <div class="content">
                    <p class="page-8-2-text-1" style="font-weight: 300;padding-right:100px;">Our clients benefit from
                        property exposure through shared listing syndication on a carefully chosen list of top real
                        estate websites worldwide. Researching potential buyer’s lifestyle, specific demographics and
                        desired neighborhood websites where potential buyers frequently gather real estate information
                        when looking for a home aided in choosing these distinct portals.</p>
                    <p class="page-8-2-text-2" style="font-weight: 300;padding-right:100px;">All our syndication portals
                        display your home with:</p>
                    <ul id="page-8-2-text-3-list" style="list-style-image: url('images/home-selling/check-large.png');">
                        <li style="margin-bottom: 15px;font-weight: 400;">Mobile Optimization</li>
                        <li style="margin-bottom: 15px;font-weight: 400;">Daily Updates</li>
                        <li style="margin-bottom: 15px;font-weight: 400;">Local Information on Area</li>
                        <li style="margin-bottom: 15px;font-weight: 400;">Property Information</li>
                    </ul>
                    <p class="page-8-2-text-4" style="font-weight: 300;padding-right:100px;">In addition to listing
                        syndication, custom reporting will be provided for every channel to show how much exposure each
                        listing is receiving from every channel to show how much exposure each listing is receiving from
                        featured when possible on each of these online channels to ensure maximum exposure for our home
                        listings.</p>
                    <p class="page-8-2-text-5" style="font-weight: 300;padding-right:100px;">Custom reporting includes:
                    </p>
                    <ul id="page-8-2-text-6-list" style="list-style-image: url('images/home-selling/check-large.png');">
                        <li style="margin-bottom: 15px;font-weight: 400;">Listing Views</li>
                        <li style="margin-bottom: 15px;font-weight: 400;">Search List Views</li>
                        <li style="margin-bottom: 15px;font-weight: 400;">Property Details Views</li>
                        <li style="margin-bottom: 15px;font-weight: 400;">Saved Searches</li>
                    </ul>
                </div>
                <div class="second-part">
                    <div class="text">
                        <span class="first-title">THE</span><br>
                        <span class="second-title">HOME</span><br>
                        <span class="third-title">SELLING</span><br>
                        <span class="fourth-title">GUIDE</span><br>
                    </div>
                </div>
            </div>
        </div>
        <div class="column-divider"></div>
        <div class="row-input">
            <div class="flex">
                <label for="page-8-2-text-1">Text 1</label>
                <textarea id="page-8-2-text-1" name="page_8_2_text_1" rows="7">Our clients benefit from property exposure through shared listing syndication on a carefully chosen list of top real
                estate websites worldwide. Researching potential buyer’s lifestyle, specific demographics and desired neighborhood
                websites where potential buyers frequently gather real estate information when looking for a home aided in choosing
                these distinct portals.</textarea>
            </div>
            <div class="flex">
                <label for="page-8-2-text-2">Text 2</label>
                <input type="text" id="page-8-2-text-2" name="page_8_2_text_2"
                    value="All our syndication portals display your home with:">
            </div>
            <div class="flex">
                <label for="page-8-2-text-3">Text 3</label>
                <textarea id="page-8-2-text-3" name="page_8_2_text_3" rows="7">Mobile Optimization
Daily Updates
Property Videos/Virtual Tours
Local Information on Area
Property Information</textarea>
            </div>
            <div class="flex">
                <label for="page-8-2-text-4">Text 4</label>
                <textarea id="page-8-2-text-4" name="page_8_2_text_4"
                    rows="7">In addition to listing syndication, custom reporting will be provided for every channel to show how much exposure each listing is receiving from every channel to show how much exposure each listing is receiving from featured when possible on each of these online channels to ensure maximum exposure for our home listings.</textarea>
            </div>
            <div class="flex">
                <label for="page-8-2-text-5">Text 5</label>
                <input type="text" id="page-8-2-text-5" name="page_8_2_text_5" value="Custom reporting includes:">
            </div>
            <div class="flex">
                <label for="page-8-2-text-6">Text 6</label>
                <textarea id="page-8-2-text-6" name="page_8_2_text_6" rows="7">Listing Views
Search List Views
Property Details Views
Mobile/Desktop Views
Saved Searches</textarea>
            </div>
        </div>
    </div>

    <div class="row-divider"></div>
    {{-- <div class="row">
        <div class="row-image">
            <img src="" id="imageBackground-page-9-1" style="display: none">
            <input hidden name="page_9_1_img_1" value="images/home-selling/Asset 15.png">
            <div class="page-9 page-9-1"
                style="background-image: url('images/home-selling/Asset 15.png');padding-top:130%;top:0;background-size: cover;background-position: left;">

            </div>
        </div>
        <div class="column-divider"></div>
        <div class="row-input">
            <div class="button">
                <input type="file" id="imageBackgroundInput-page-9-1" onchange="imageBackgroundInputChanged_page_9_1()">
                <button type="button" onclick="startCropper_page_9_1()">Crop</button>
                <button type="button" onclick="cropImage_page_9_1()">Save Crop</button>
            </div>
        </div>
    </div> --}}

    <div class="row">
        <div class="row-image" style="height: 1115px;">
            <img src="" id="imageBackground-page-9-1" style="display: none;" />
            <input hidden name="page_9_img_1" value="images/single-property/pc-content.png" />
            <img src="" id="imageBackground-page-9-2" style="display: none;" />
            <input hidden name="page_9_img_2" value="images/single-property/tablet-content.jpg" />

            <div class="page page-9-1" style="background-image: url(images/single-property/page-18.png);
                background-size: contain;
                background-position: left;
                width: 804px;
                background-repeat: no-repeat;">
                <div class="pc" style="margin-left: 161px;padding-top: 390px;">
                    <img id="section18-1" src="images/single-property/pc-content.png" alt=""
                        style="width: 556px;height: 313px;" style="margin-top: 391px; margin-left: -50px;" />
                </div>
                <div class="tablet" style="margin-top: -160px; z-index: 100; margin-left: 25px;">
                    <img src="images/single-property/tablet.png" alt="" style="" />
                    <div style="margin-top: -415px; margin-left: 8px;">
                        <img id="section18-2" src="images/single-property/tablet-content.jpg" alt="" width="229px"
                            height="310px" style="margin-top: 70px;" />
                    </div>
                </div>
            </div>
        </div>
        <div class="row-input">
            <div class="button" style="margin-left: 164px;">
                <label>Image 1</label>
                <input type="file" id="imageBackgroundInput-page-9-1"
                    onchange="imageBackgroundInputChanged_page_9_1()" />
                <button type="button" onclick="startCropper_page_9_1()">Crop</button>
                <button type="button" onclick="cropImage_page_9_1()">Save Crop</button>
            </div>
            <div class="button" style="margin-left: 164px;">
                <label>Image 2</label>
                <input type="file" id="imageBackgroundInput-page-9-2"
                    onchange="imageBackgroundInputChanged_page_9_2()" />
                <button type="button" onclick="startCropper_page_9_2()">Crop</button>
                <button type="button" onclick="cropImage_page_9_2()">Save Crop</button>
            </div>
        </div>
    </div>

    <div class="row-divider"></div>
    <div class="row">
        <div class="row-image">
            <div class="page page-9 page-9-2"
                style="top:0;left:-500px;bottom:0;right:0;background-image: url('images/home-selling/Asset 15.png');background-size: cover;background-position: -750px -5px;background-repeat: no-repeat;min-height:1000px;">
                <div style="margin-left:60px;">
                    <div class="heading" style="z-index:1000;">
                        <h2 class="subtitle-top"
                            style="font-weight: 300;font-size:70px;margin-bottom:-180px;margin-left:170px;margin-top:0px;">
                            Exclusive</h2>
                        <h1 class="title"
                            style="font-size: 150px;color:#C6A467;font-weight:300;margin-bottom:-100px;margin-left:15px;">
                            <span style="color: white;">Pr</span>operty</h1>
                        <h1 class="subtitle-bottom"
                            style="font-weight: 300;font-size: 75px;margin-left:275px;margin-bottom:-10px;">Sites</h1>
                    </div>
                    <div class="content" style="margin-left:175px;min-height:600px;">
                        <p class="page-9-2-text-1" style="font-weight: 300;padding-right:100px;">Pushing for
                            unparalleled exposure for every LUXE Property client, each home listed with LUXE Properties
                            receives a personalized website. Complete with its own unique domain of your street address,
                            this site will also be syndicated to more than 30 major property search portals such as
                            Zillow, Trulia and Realtor.com. This link, while highlighting a property’s best features,
                            allows us to showcase the home with ease. The exclusive domain will provide a personalized
                            site that does not feature any other competitive homes.</p>
                        <p class="page-9-2-text-2" style="font-weight: 300;padding-right:100px;">These striking sites
                            include all of the most important marketing features of your home and the latest online
                            capabilities including:</p>
                        <h3 style="color: #C5A367;font-size: 35px;font-weight: 900;margin-bottom:-20px;">Features</h3>
                        <ul id="page-9-2-text-3-list"
                            style="list-style-image: url('images/home-selling/check-large.png');">
                            <li style="margin-bottom: 5px;font-weight: 400;">Custom Domain</li>
                            <li style="margin-bottom: 5px;font-weight: 400;">Search Engine Optimization</li>
                            <li style="margin-bottom: 5px;font-weight: 400;">Lead Capture Tools</li>
                            <li style="margin-bottom: 5px;font-weight: 400;">Mobile Optimization </li>
                        </ul>
                        <h3 style="color: #C5A367;font-size: 35px;font-weight: 900;margin-bottom:-20px;">Capabilities
                        </h3>
                        <ul id="page-9-2-text-4-list"
                            style="list-style-image: url('images/home-selling/check-large.png');">
                            <li style="margin-bottom: 5px;font-weight: 400;">Property Details</li>
                            <li style="margin-bottom: 5px;font-weight: 400;">Schools in Area</li>
                            <li style="margin-bottom: 5px;font-weight: 400;">Video and Photo Showcase</li>
                            <li style="margin-bottom: 5px;font-weight: 400;">Map</li>
                        </ul>
                        <p class="page-9-2-text-5" style="font-weight: 300;">This powerful online marketing tool
                            impresses buyers and when advertised in print or online, gets interested buyers to the
                            information they seek instantly.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="column-divider"></div>
        <div class="row-input">
            <div class="flex">
                <label for="page-9-2-text-1">Text 1</label>
                <textarea id="page-9-2-text-1" name="page_9_2_text_1"
                    rows="7">Pushing for unparalleled exposure for every LUXE Property client, each home listed with LUXE Properties receives a personalized website. Complete with its own unique domain of your street address, this site will also be syndicated to more than 30 major property search portals such as Zillow, Trulia and Realtor.com. This link, while highlighting a property’s best features, allows us to showcase the home with ease. The exclusive domain will provide a personalized site that does not feature any other competitive homes.</textarea>
            </div>
            <div class="flex">
                <label for="page-9-2-text-2">Text 2</label>
                <textarea id="page-9-2-text-2" name="page_9_2_text_2"
                    rows="7">These striking sites include all of the most important marketing features of your home and the latest online capabilities including:</textarea>
            </div>
            <div class="flex">
                <label for="page-9-2-text-3">Features</label>
                <textarea id="page-9-2-text-3" name="page_9_2_text_3" rows="7">Property Details
Schools in Area
Video and Photo Showcase
Map </textarea>
            </div>
            <div class="flex">
                <label for="page-9-2-text-4">Capabilities</label>
                <textarea id="page-9-2-text-4" name="page_9_2_text_4" rows="7">Custom Domain
Search Engine Optimization
Lead Capture Tools
Mobile Optimization </textarea>
            </div>
            <div class="flex">
                <label for="page-9-2-text-5">Text 3</label>
                <textarea id="page-9-2-text-5" name="page_9_2_text_5"
                    rows="7">This powerful online marketing tool impresses buyers and when  advertised in print or online, gets interested buyers to the information they seek instantly.</textarea>
            </div>
        </div>
    </div>
    </div>

    <div class="row-divider"></div>
    <div class="row">
        <div class="row-image">
            <img src="" id="imageBackground-page-10-1-1" style="display: none">
            <input hidden name="page_10_1_img_1" value="images/home-selling/high-res/Asset 16-1.png">

            <img src="" id="imageBackground-page-10-1-2" style="display: none">
            <input hidden name="page_10_1_img_2" value="images/home-selling/high-res/Asset 16-2.png">
            <div class="page-10-1">

                <div class="page-10 page-10-1">
                    <div class="section1"
                        style="background-image: url('images/home-selling/Asset 16-1.png');padding-top:50%;top:0;background-size: cover;background-position: left;">

                    </div>
                    <div class="section2"
                        style="background-image: url('images/home-selling/Asset 16-2.png');padding-top:53%;top:50%;background-size: cover;background-position: left;">

                    </div>
                    <h1 class="page-10-1-text-1" style="margin-top: -500px;
    margin-bottom: 400px;z-index: 100;background-image: url('images/home-selling/Asset 16-3.png');background-position: right;background-repeat: no-repeat;text-align:right;    color: #fff;padding-bottom:5px;
    font-size: 28px;">www.LUXEknows.com</h1>
                    <h1 class="page-10-1-text-2" style="bottom:3%;right:0;z-index: 100;background-image: url('images/home-selling/Asset 16-3.png');background-position: right;background-repeat: no-repeat;text-align:right;    color: #fff;padding-bottom:5px;
    font-size: 28px;">www.allmiamihouseforsale.com</h1>
                </div>
            </div>
        </div>
        <div class="column-divider"></div>
        <div class="row-input">

            <div class="flex">
                <label for="page-10-1-text-1">Web 1</label>
                <input type="text" id="page-10-1-text-1" name="page_10_1_text_1" value="www.LUXEknows.com">
            </div>

            <div class="button" style="margin-top: 0;margin-bottom:50px;">
                <input type="file" id="imageBackgroundInput-page-10-1-1"
                    onchange="imageBackgroundInputChanged_page_10_1_1()">
                <button type="button" onclick="startCropper_page_10_1_1()">Crop</button>
                <button type="button" onclick="cropImage_page_10_1_1()">Save Crop</button>
            </div>

            <div class="flex">
                <label for="page-10-1-text-2">Web 2</label>
                <input type="text" id="page-10-1-text-2" name="page_10_1_text_2" value="www.allmiamihouseforsale.com">
            </div>

            <div class="button" style="margin-top: 0;margin-bottom:50px;">
                <input type="file" id="imageBackgroundInput-page-10-1-2"
                    onchange="imageBackgroundInputChanged_page_10_1_2()">
                <button type="button" onclick="startCropper_page_10_1_2()">Crop</button>
                <button type="button" onclick="cropImage_page_10_1_2()">Save Crop</button>
            </div>
        </div>
    </div>

    <div class="row-divider"></div>
    <div class="row">
        <div class="row-image">
            <div class="page page-10 page-10-2">
                <div class="heading">
                    <h2 class="subtitle-top"
                        style="font-weight: 300;font-size:70px;margin-bottom:-185px;margin-left:350px;margin-top:0px;">
                        Our</h2>
                    <h1 class="title"
                        style="padding-left: 50px;font-size: 190px;color:#C6A467;font-weight:300;margin-bottom:-100px;">
                        Online</h1>
                    <h1 class="subtitle-bottom"
                        style="font-weight: 300;font-size: 75px;margin-left:220px;margin-bottom:-10px;">Presence</h1>
                </div>
                <div class="content" style="padding-left: 50px;">
                    <p class="page-10-2-text-1" style="font-weight: 300;padding-right:50px;">Having a strong online
                        presence has widely become one of the most important tools in real estate, with 90% of buyers
                        starting their home search online. LUXE Properties is committed to maintaining a powerful online
                        presence fueled by engagement and up-to-date information on trends in the marketplace through
                        our various proprietary websites as well as our social media outlets.</p>
                    <h1 class="page-10-2-text-2"
                        style="font-size: 35px;color: #C5A367;font-weight:900;margin-bottom:0px;">www.LUXEknows.com</h1>

                    <p class="page-10-2-text-3" style="font-weight: 300;padding-right:50px;">Our principal website
                        features various content, from our exclusive listings to agent profiles and our blog posts. Here
                        you can access our agent’s biographies, get in contact with any member of our team, and browse
                        the MLS. We utilize our blog to showcase our latest listings, which are shared to various social
                        media and online outlets. Many of our home listings are shared over 200 times throughout the
                        web.</p>

                    <h1 class="page-10-2-text-4"
                        style="font-size: 35px;color: #C5A367;font-weight:900;margin-bottom:0px;">
                        www.allmiamihousesforsale.com</h1>

                    <p class="page-10-2-text-5" style="font-weight: 300;padding-right:50px;">Our fully integrated MLS
                        portal allows any user to receive a personalized response quickly via phone or email from one of
                        our professional agents, be notified of new properties that match the user’s preferences, have
                        the ability to save favorites and searches for easier access, request showings or more
                        information on any listing and subscribe to customized property alerts. All LUXE listings are
                        featured on this site and marketed using exclusive Pay-Per-Click campaigns.</p>

                </div>
                <div class="second-part">
                    <div class="text">
                        <span class="first-title">THE</span><br>
                        <span class="second-title">HOME</span><br>
                        <span class="third-title">SELLING</span><br>
                        <span class="fourth-title">GUIDE</span><br>
                    </div>
                </div>
            </div>
        </div>
        <div class="column-divider"></div>
        <div class="row-input">
            <div class="flex">
                <label for="page-10-2-text-1">Capabilities</label>
                <textarea id="page-10-2-text-1" name="page_10_2_text_1"
                    rows="7">Having a strong online presence has widely become one of the most important tools in real estate, with 90% of buyers starting their home search online. LUXE Properties is committed to maintaining a powerful online presence fueled by engagement and up-to-date information on trends in the marketplace through our various proprietary websites as well as our social media outlets.</textarea>
            </div>
            <div class="flex">
                <label for="page-10-2-text-2">Web 1 Title</label>
                <input type="text" id="page-10-2-text-2" name="page_10_2_text_2" value="www.LUXEknows.com">
            </div>
            <div class="flex">
                <label for="page-10-2-text-3">Web 1 Text</label>
                <textarea id="page-10-2-text-3" name="page_10_2_text_3"
                    rows="7">Our principal website features various content, from our exclusive listings to agent profiles and our blog posts. Here you can access our agent’s biographies, get in contact with any member of our team, and browse the MLS. We utilize our blog to showcase our latest listings, which are shared to various social media and online outlets. Many of our home listings are shared over 200 times throughout the web.</textarea>
            </div>
            <div class="flex">
                <label for="page-10-2-text-4">Web 2 Title</label>
                <input type="text" id="page-10-2-text-4" name="page_10_2_text_4" value="www.allmiamihousesforsale.com">
            </div>
            <div class="flex">
                <label for="page-10-2-text-5">Web 2 Text</label>
                <textarea id="page-10-2-text-5" name="page_10_2_text_5"
                    rows="7">Our fully integrated MLS portal allows any user to receive a personalized response quickly via phone or email from one of our professional agents, be notified of new properties that match the user’s preferences, have the ability to save favorites and searches for easier access, request showings or more information on any listing and subscribe to customized property alerts. All LUXE listings are featured on this site and marketed using exclusive Pay-Per-Click campaigns.</textarea>
            </div>
        </div>
    </div>

    <div class="row-divider"></div>
    <div class="row">
        <div class="row-image">
            <div class="page-11 page-11-1">
                <img src="" id="imageBackground-page-11-1-1" style="display: none">
                <input hidden name="page_11_1_img_1" value="images/home-selling/Asset 17.jpg">

                <img src="" id="imageBackground-page-11-1-2" style="display: none">
                <input hidden name="page_11_1_img_2" value="images/home-selling/Asset 18-1.jpg">

                <img src="" id="imageBackground-page-11-1-3" style="display: none">
                <input hidden name="page_11_1_img_3" value="images/home-selling/Asset 18-2.jpg">

                <img src="" id="imageBackground-page-11-1-4" style="display: none">
                <input hidden name="page_11_1_img_4" value="images/home-selling/Asset 18-3.jpg">

                <img src="" id="imageBackground-page-11-1-5" style="display: none">
                <input hidden name="page_11_1_img_5" value="images/home-selling/Asset 18-4.jpg">

                <img src="" id="imageBackground-page-11-1-6" style="display: none">
                <input hidden name="page_11_1_img_6" value="images/home-selling/Asset 18-5.jpg">

                <img src="" id="imageBackground-page-11-1-7" style="display: none">
                <input hidden name="page_11_1_img_7" value="images/home-selling/Asset 18-6.jpg">
                <div class="text">
                    <div class="section1"
                        style="margin-top: -140px;margin-bottom: -250px;background-image: url('images/home-selling/Asset 17.jpg');padding-top:100%;top:-25px;background-size: contain;background-position: center;background-repeat: no-repeat;">
                    </div>
                    <div class="section2"
                        style="background-color: #C6A467;z-index:100;top:30%;margin:auto 60px;padding:30px;">
                        <h1></h1>
                        <div class="column-1" style="max-width: 65%;">
                            <img id="page-11-1-img-1" src="images/home-selling/Asset 18-1.jpg" alt="" width="370px">
                            <div class="introducing" style="background: #000;height: 270px;padding: 6px;width:90%;">
                                <div class="inner" style="background: #262626;height:255px;padding:6px;">
                                    <h2
                                        style="text-align: center;font-weight: 400;font-size: 12px;margin:0;color:white;">
                                        INTRODUCING</h2>
                                    <h2 class="page-11-1-text-1"
                                        style="text-align: center;font-weight: 400;font-size: 12px;margin:0;color:white;border-bottom:1px solid white;">
                                        3504 MAIN LODGE DR • MIAMI • FLORIDA</h2>
                                    <p class="page-11-1-text-2" style="color: #fff;font-size: 12px;">This is a single
                                        family home that contains 7,178 sq ft and was built in 2008. It contains 7
                                        bedrooms and 7 bathrooms. Spectacular Estate Home in the extremely exclusive
                                        neighborhood of Camp Biscayne, This home offers a lifestyle of maximum privacy
                                        and security while being just steps from the best that Coconut Grove provides.
                                        Walking distance to the best schools, shopping and resturants.</p>
                                    <h2 class="page-11-1-text-3"
                                        style="text-align: center;color: #fff;font-size: 22px;font-weight: 300;">
                                        $4,499,000</h2>
                                </div>
                            </div>
                        </div>
                        <img id="page-11-1-img-6" src="images/home-selling/Asset 18-6.jpg" alt="" style="z-index: 1000;"
                            width="600px" height="225px">
                    </div>
                    <div class="column-2"
                        style="margin-bottom: 260px;margin-top: -790px;margin-left: 480px;width:210px;max-width:210px;top:32%; left:60%;z-index:100;">
                        <div>
                            <img id="page-11-1-img-2" src="images/home-selling/Asset 18-2.jpg" alt="" width="210px"
                                height="130px">
                        </div>
                        <div>
                            <img id="page-11-1-img-3" src="images/home-selling/Asset 18-3.jpg" alt="" width="210px"
                                height="130px">
                        </div>
                        <div>
                            <img id="page-11-1-img-4" src="images/home-selling/Asset 18-4.jpg" alt="" width="210px"
                                height="130px">
                        </div>
                        <div>
                            <img id="page-11-1-img-5" src="images/home-selling/Asset 18-5.jpg" alt="" width="210px"
                                height="130px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="column-divider"></div>
        <div class="row-input">
            <div class="button" style="margin-top: 0;margin-bottom:50px;">
                <label>Top</label>
                <input type="file" id="imageBackgroundInput-page-11-1-1"
                    onchange="imageBackgroundInputChanged_page_11_1_1()">
                <button type="button" onclick="startCropper_page_11_1_1()">Crop</button>
                <button type="button" onclick="cropImage_page_11_1_1()">Save Crop</button>
            </div>
            <div class="flex">
                <label for="page-11-1-text-1">Location</label>
                <input type="text" id="page-11-1-text-1" name="page_11_1_text_1"
                    value="3504 MAIN LODGE DR • MIAMI • FLORIDA">
            </div>
            <div class="flex">
                <label for="page-11-1-text-2">Text</label>
                <textarea id="page-11-1-text-2" name="page_11_1_text_2"
                    rows="7">This is a single family home that contains 7,178 sq ft and was built in 2008. It contains 7 bedrooms and 7 bathrooms. Spectacular Estate Home in the extremely exclusive neighborhood of Camp Biscayne, This home offers a lifestyle of maximum privacy and security while being just steps from the best that Coconut Grove provides. Walking distance to the best schools, shopping and resturants.</textarea>
            </div>
            <div class="flex">
                <label for="page-11-1-text-3">Price</label>
                <input type="text" id="page-11-1-text-3" name="page_11_1_text_3" value="$4,499,000">
            </div>
            <div class="flex">
                <div class="button" style="margin-top: 0;margin-bottom:50px;">
                    <label>Left Top</label>
                    <input type="file" id="imageBackgroundInput-page-11-1-2"
                        onchange="imageBackgroundInputChanged_page_11_1_2()">
                    <button type="button" onclick="startCropper_page_11_1_2()">Crop</button>
                    <button type="button" onclick="cropImage_page_11_1_2()">Save Crop</button>
                </div>
                <div class="button" style="margin-top: 0;margin-bottom:50px;">
                    <label>Right 1</label>
                    <input type="file" id="imageBackgroundInput-page-11-1-3"
                        onchange="imageBackgroundInputChanged_page_11_1_3()">
                    <button type="button" onclick="startCropper_page_11_1_3()">Crop</button>
                    <button type="button" onclick="cropImage_page_11_1_3()">Save Crop</button>
                </div>
            </div>
            <div class="flex">
                <div class="button" style="margin-top: 0;margin-bottom:50px;">
                    <label>Right 2</label>
                    <input type="file" id="imageBackgroundInput-page-11-1-4"
                        onchange="imageBackgroundInputChanged_page_11_1_4()">
                    <button type="button" onclick="startCropper_page_11_1_4()">Crop</button>
                    <button type="button" onclick="cropImage_page_11_1_4()">Save Crop</button>
                </div>
                <div class="button" style="margin-top: 0;margin-bottom:50px;">
                    <label>Right 3</label>
                    <input type="file" id="imageBackgroundInput-page-11-1-5"
                        onchange="imageBackgroundInputChanged_page_11_1_5()">
                    <button type="button" onclick="startCropper_page_11_1_5()">Crop</button>
                    <button type="button" onclick="cropImage_page_11_1_5()">Save Crop</button>
                </div>
            </div>
            <div class="button" style="margin-top: 0;margin-bottom:50px;">
                <label>Right 4</label>
                <input type="file" id="imageBackgroundInput-page-11-1-6"
                    onchange="imageBackgroundInputChanged_page_11_1_6()">
                <button type="button" onclick="startCropper_page_11_1_6()">Crop</button>
                <button type="button" onclick="cropImage_page_11_1_6()">Save Crop</button>
            </div>
            <div class="button" style="margin-top: 0;margin-bottom:50px;">
                <label>Bottom</label>
                <input type="file" id="imageBackgroundInput-page-11-1-7"
                    onchange="imageBackgroundInputChanged_page_11_1_7()">
                <button type="button" onclick="startCropper_page_11_1_7()">Crop</button>
                <button type="button" onclick="cropImage_page_11_1_7()">Save Crop</button>
            </div>
        </div>
    </div>

    <div class="row-divider"></div>
    <div class="row">
        <div class="row-image">
            <div class="page page-11 page-11-2">
                <div class="heading">
                    <h2 class="subtitle-top"
                        style="font-weight: 300;font-size:70px;margin-bottom:-230px;margin-left:350px;">Your</h2>
                    <h1 class="title"
                        style="padding-left: 50px;font-size: 190px;color:#C6A467;font-weight:300;margin-bottom:-100px;">
                        Home</h1>
                    <h1 class="subtitle-bottom"
                        style="font-weight: 300;font-size: 75px;margin-left:220px;margin-bottom:-10px;">In Print</h1>
                </div>
                <div class="content" style="padding-left: 50px;">
                    <h1 class="page-11-2-text-1"
                        style="font-size: 35px;color: #C5A367;font-weight:900;margin-bottom:0px;">Direct Mail Marketing
                    </h1>

                    <p class="page-11-2-text-2" style="font-weight: 300;padding-right:50px;">Once a home is listed with
                        LUXE Properties, our in-house marketing specialists get to work on designing a personalized
                        marketing piece announcing the sale of your property. Targeted direct mail has a 495% increased
                        response rate compared to traditional print direct mail. Through a comprehensive analysis of
                        neighborhood homes sales and specific demographics, our marketers are able to identify the
                        profile of a property’s most probable purchaser. In addition to targeted direct mail, we also
                        focus on your surrounding neighborhood to reach the biggest endorsers for the area, your
                        neighbors. Your neighbors may have friends and families who desire to live nearby.</p>

                    <h1 class="page-11-2-text-3"
                        style="font-size: 35px;color: #C5A367;font-weight:900;margin-bottom:0px;">Luxury Brochures</h1>

                    <p class="page-11-2-text-4" style="font-weight: 300;padding-right:50px;">Each LUXE listing receives
                        a personalized luxury brochure placed in the home for any broker’s open, showings or open
                        houses. These luxury brochures include high-quality images of the home and a list of features
                        and amenities. These brochures ensure your home is memorable and at the forefront as buyers
                        enter and leave. They aid buyers and their agents overcome most objections and questions before
                        even leaving the home.</p>

                    <h1 class="page-11-2-text-5"
                        style="font-size: 35px;color: #C5A367;font-weight:900;margin-bottom:0px;">Floor Plans</h1>

                    <p class="page-11-2-text-6" style="font-weight: 300;padding-right:50px;">LUXE Properties offers
                        customized floor plan services to effectively engage buyer’s interest in your property. When
                        just viewing real estate photos online, it can be difficult for buyersee how the home’s layout
                        flows. Floor plans help display where rooms are located in context to one another and provide an
                        idea of important details, such as the way the space is oriented.</p>

                </div>
            </div>
        </div>
        <div class="column-divider"></div>
        <div class="row-input">
            <div class="flex">
                <label for="page-11-2-text-1">Title 1</label>
                <input type="text" id="page-11-2-text-1" name="page_11_2_text_1" value="Direct Mail Marketing">
            </div>
            <div class="flex">
                <label for="page-11-2-text-2">Text 1</label>
                <textarea id="page-11-2-text-2" name="page_11_2_text_2"
                    rows="7">Once a home is listed with LUXE Properties, our in-house marketing specialists get to work on designing a personalized marketing piece announcing the sale of your property. Targeted direct mail has a 495% increased response rate compared to traditional print direct mail. Through a comprehensive analysis of neighborhood homes sales and specific demographics, our marketers are able to identify the profile of a property’s most probable purchaser. In addition to targeted direct mail, we also focus on your surrounding neighborhood to reach the biggest endorsers for the area, your neighbors. Your neighbors may have friends and families who desire to live nearby.</textarea>
            </div>

            <div class="flex">
                <label for="page-11-2-text-3">Title 2</label>
                <input type="text" id="page-11-2-text-3" name="page_11_2_text_3" value="Luxury Brochures">
            </div>
            <div class="flex">
                <label for="page-11-2-text-4">Text 2</label>
                <textarea id="page-11-2-text-4" name="page_11_2_text_4"
                    rows="7">Each LUXE listing receives a personalized luxury brochure placed in the home for any broker’s open, showings or open houses. These luxury brochures include high-quality images of the home and a list of features and amenities. These brochures ensure your home is memorable and at the forefront as buyers enter and leave. They aid buyers and their agents overcome most objections and questions before even leaving the home.</textarea>
            </div>

            <div class="flex">
                <label for="page-11-2-text-5">Title 3</label>
                <input type="text" id="page-11-2-text-5" name="page_11_2_text_5" value="Floor Plans">
            </div>
            <div class="flex">
                <label for="page-11-2-text-6">Text 3</label>
                <textarea id="page-11-2-text-6" name="page_11_2_text_6"
                    rows="7">LUXE Properties offers customized floor plan services to effectively engage buyer’s interest in your property. When just viewing real estate photos online, it can be difficult for buyersee how the home’s layout flows. Floor plans help display where rooms are located in context to one another and provide an idea of important details, such as the way the space is oriented.</textarea>
            </div>
        </div>
    </div>

    <div class="row-divider"></div>
    <div class="row">
        <div class="row-image" style="height: 1016px;">
            <img src="" id="imageBackground-page-12-1" style="display: none">
            <input hidden name="page_12_img_1" value="images/home-selling/Asset 19.png">
            <div class="page-12 page-12-1">
                <div class="luxe-pro-info">
                    <div class="text">
                        <h2>Social</h2>
                        <h1>Media</h1>
                        <h2 class="subtitle">Influence</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="column-divider"></div>
        <div class="row-input">
            <div class="button" style="margin-top: 0;margin-bottom:50px;">
                <input type="file" id="imageBackgroundInput-page-12-1"
                    onchange="imageBackgroundInputChanged_page_12_1()">
                <button type="button" onclick="startCropper_page_12_1()">Crop</button>
                <button type="button" onclick="cropImage_page_12_1()">Save Crop</button>
            </div>
        </div>
    </div>

    <div class="row-divider"></div>
    <div class="row">
        <div class="row-image">
            <div class="page page-12 page-12-2 page-with-side-image"
                style="top:0;bottom:0;right:0;background-size: cover;background-position: -740px -5px;background-repeat: no-repeat;    min-height: 1000px;">
                <div class="page-bg-image"
                    style="background-image: url('images/home-selling/Asset 19.png');right: 610px;">
                    <h1></h1>
                </div>
                <div class="content pos-relative" style="">
                    <p class="page-12-2-text-1" style="font-weight: 300;margin-left:250px;">Social media influence has
                        continuously become one of our great-est assets. Whether it is through promotion of our newest
                        listings or interaction with our followers, our connection to social media elicits another
                        outlet of promotion for all properties listed with LUXE.</p>
                    <p class="page-12-2-text-2" style="font-weight: 300;margin-left:250px;">It has increasingly become
                        one of our greatest tools to market not only our exclusive listings but also our closings,
                        referrals, and testimonials to gain an engaged following.</p>

                    <h1 class="page-12-2-text-3"
                        style="font-size: 35px;color: #C5A367;font-weight:900;margin-bottom:-5px;margin-left:250px;">
                        Luxe Properties Stats</h1>

                    <ul id="page-12-2-text-4-list"
                        style="list-style-image: url('images/home-selling/check-large.png');">
                        <li style="margin-bottom: 5px;font-weight: 300;margin-left:250px;">30,000+ followers across
                            Twitter, LinkedIn, and Instagram</li>
                        <li style="margin-bottom: 5px;font-weight: 300;margin-left:250px;">9,000+ Views on Youtube
                            channel</li>
                        <li style="margin-bottom: 5px;font-weight: 300;margin-left:250px;">3,000+ Likes on Facebook;
                            10,000+ users reached</li>
                    </ul>

                    <p class="page-12-2-text-5" style="font-weight: 300;margin-left:250px;">With a steadily growing
                        following on all our social media channels, Facebook Sponsored Ads add another dimension to our
                        reach. Our Facebook Ads are highly targeted to attract the most qualified buyers and interested
                        parties.</p>
                    <div style="margin-left:250px;margin-bottom:-13px;display:flex;">
                        <img src="images/home-selling/social1.jpg" alt="" style="width: 35px;margin-right: 10px;">
                        <p class="page-12-2-text-6" style="font-weight: 300;margin-top: 3px;">app.luxeknows.com/luxe/
                        </p>
                    </div>
                    <div style="margin-left:250px;margin-bottom:-13px;display:flex;">
                        <img src="images/home-selling/social2.jpg" alt=""
                            style="width: 35px;margin-right: 10px;margin-top: 13px;">
                        <p class="page-12-2-text-7" style="font-weight: 300;">@luxepropertiesmia</p>
                    </div>
                    <div style="margin-left:250px;margin-bottom:-13px;display:flex;">
                        <img src="images/home-selling/social3.jpg" alt=""
                            style="width: 35px;margin-right: 10px;margin-top: 13px;">
                        <p class="page-12-2-text-8" style="font-weight: 300;">LUXE Properties, LLC.</p>
                    </div>
                    <div style="margin-left:250px;margin-bottom:-13px;display:flex;">
                        <img src="images/home-selling/social4.jpg" alt=""
                            style="width: 35px;margin-right: 10px;margin-top: 13px;">
                        <p class="page-12-2-text-9" style="font-weight: 300;">@luxepropertiesmia</p>
                    </div>
                    <div style="margin-left:250px;margin-bottom:-13px;display:flex;">
                        <img src="images/home-selling/social5.jpg" alt=""
                            style="width: 35px;margin-right: 10px;margin-top: 13px;">
                        <p class="page-12-2-text-10" style="font-weight: 300;">@luxeproperties</p>
                    </div>
                    <div style="margin-left:250px;margin-bottom:-13px;display:flex;">
                        <img src="images/home-selling/social6.jpg" alt=""
                            style="width: 35px;margin-right: 10px;margin-top: 13px;">
                        <p class="page-12-2-text-11" style="font-weight: 300;">linkedin.com/company/luxe-properties-llc
                        </p>
                    </div>
                    <div style="margin-left:250px;margin-bottom:-13px;display:flex;">
                        <img src="images/home-selling/social7.jpg" alt=""
                            style="width: 35px;margin-right: 10px;margin-top: 13px;">
                        <p class="page-12-2-text-12" style="font-weight: 300;">pinterest.com/luxeproperties</p>
                    </div>
                    <div style="margin-left:250px;margin-bottom:-13px;display:flex;">
                        <img src="images/home-selling/social8.jpg" alt=""
                            style="width: 35px;margin-right: 10px;margin-top: 13px;">
                        <p class="page-12-2-text-13" style="font-weight: 300;">youtube.com/c/LUXEProperties</p>
                    </div>
                </div>
                <div class="second-part">
                    <div class="text">
                        <span class="first-title">THE</span><br>
                        <span class="second-title">HOME</span><br>
                        <span class="third-title">SELLING</span><br>
                        <span class="fourth-title">GUIDE</span><br>
                    </div>
                </div>
            </div>
        </div>
        <div class="column-divider"></div>
        <div class="row-input">
            <div class="flex">
                <label for="page-12-2-text-1">Text 1</label>
                <textarea id="page-12-2-text-1" name="page_12_2_text_1"
                    rows="7">Social media influence has continuously become one of our great-est assets. Whether it is through promotion of our newest listings or interaction with our followers, our connection to social media elicits another outlet of promotion for all properties listed with LUXE.</textarea>
            </div>
            <div class="flex">
                <label for="page-12-2-text-2">Text 2</label>
                <textarea id="page-12-2-text-2" name="page_12_2_text_2"
                    rows="7">It has increasingly become one of our greatest tools to market not only our exclusive listings but also our closings, referrals, and testimonials to gain an engaged following.</textarea>
            </div>
            <div class="flex">
                <label for="page-12-2-text-3">Title</label>
                <input type="text" id="page-12-2-text-3" name="page_12_2_text_3" value="Luxe Properties Stats">
            </div>
            <div class="flex">
                <label for="page-12-2-text-4">List</label>
                <textarea id="page-12-2-text-4" name="page_12_2_text_4" rows="7">30,000+ followers across Twitter, LinkedIn, and Instagram
9,000+ Views on Youtube channel
3,000+ Likes on Facebook; 10,000+ users reached
                </textarea>
            </div>
            <div class="flex">
                <label for="page-12-2-text-5">Text 3</label>
                <textarea id="page-12-2-text-5" name="page_12_2_text_5" rows="7">With a steadily growing following on all our social media channels, Facebook Sponsored Ads add another dimension to our reach. Our Facebook Ads are highly targeted to attract the most qualified buyers and interested parties.
                </textarea>
            </div>
            <div class="flex">
                <label for="page-12-2-text-6">Web</label>
                <input type="text" id="page-12-2-text-6" name="page_12_2_text_6" value="app.luxeknows.com/luxe/">
                <label for="page-12-2-text-7">TW</label>
                <input type="text" id="page-12-2-text-7" name="page_12_2_text_7" value="@luxepropertiesmia">
                <label for="page-12-2-text-8">FB</label>
                <input type="text" id="page-12-2-text-8" name="page_12_2_text_8" value="LUXE Properties, LLC.">
            </div>
            <div class="flex">
                <label for="page-12-2-text-9">IG</label>
                <input type="text" id="page-12-2-text-9" name="page_12_2_text_9" value="@luxepropertiesmia">
                <label for="page-12-2-text-10">SC</label>
                <input type="text" id="page-12-2-text-10" name="page_12_2_text_10" value="@luxeproperties">
                <label for="page-12-2-text-11">IN</label>
                <input type="text" id="page-12-2-text-11" name="page_12_2_text_11"
                    value="linkedin.com/company/luxe-properties-llc">
            </div>
            <div class="flex">
                <label for="page-12-2-text-12">PINT</label>
                <input type="text" id="page-12-2-text-12" name="page_12_2_text_12" value="pinterest.com/luxeproperties">
                <label for="page-12-2-text-13">YT</label>
                <input type="text" id="page-12-2-text-13" name="page_12_2_text_13" value="youtube.com/c/LUXEProperties">
            </div>
        </div>
    </div>

    <div class="row-divider"></div>
    <div class="row">
        <div class="row-image" style="height:1200px;">
            <img src="" id="imageBackground-page-13-1" style="display: none">
            <input hidden name="page_13_img_1" value="images/home-selling/Asset 20.png">
            <div class="page-13 page-13-1" style="background-image: url('images/home-selling/Asset 20.png');
            background-size: cover;
            padding-top: 100%;
            bottom: 0px;
            width: 100%;">
                <div class="content" style="bottom: 50%;">
                    <h2 style="font-weight: 300;color:white;font-size:90px;margin-bottom:-135px;">Strategic</h2>
                    <h1 style="font-weight: 300;color:#C5A367;font-size:140px;margin-bottom:-65px;">Property</h1>
                    <h2 style="font-weight: 300;color:white;font-size:45px;margin-left:270px;">Tours</h2>
                </div>
            </div>
        </div>
        <div class="column-divider"></div>
        <div class="row-input">
            <div class="button" style="margin-top: 0;margin-bottom:50px;">
                <input type="file" id="imageBackgroundInput-page-13-1"
                    onchange="imageBackgroundInputChanged_page_13_1()">
                <button type="button" onclick="startCropper_page_13_1()">Crop</button>
                <button type="button" onclick="cropImage_page_13_1()">Save Crop</button>
            </div>
        </div>
    </div>

    <div class="row-divider"></div>
    <div class="row">
        <div class="row-image">
            <div class="page page-13 page-13-2 page-with-side-image"
                style="height: 900px;top:0;bottom:0;right:0;background-size: cover;background-position: -720px -5px;background-repeat: no-repeat;">
                <div class="page-bg-image"
                    style="background-image: url('images/home-selling/Asset 20.png');right: 610px;">
                    <h1></h1>
                </div>
                <div class="content" style="margin-left:0px;">
                    <h1 class="page-13-2-text-1"
                        style="font-size: 35px;color: #C5A367;font-weight:900;margin-bottom:-5px;margin-left:250px;">
                        Broker’s Open</h1>
                    <p class="page-13-2-text-2" style="font-weight: 300;margin-left:250px;">The LUXE Properties team
                        will host a broker’s open event for select agents who specialize in the area. This will bring
                        cooperating agents and firms together, condensing some of the showing activi-ty into a set
                        timeframe. These events allow us to receive immedi-ate authentic feedback on the home, its price
                        and its competitive qualities when compared to the other homes on the market. Our broker’s open
                        events are marketed through the following avenues:</p>

                    <ul id="page-13-2-text-3-list"
                        style="list-style-image: url('images/home-selling/check-large.png');">
                        <li style="margin-bottom: 5px;font-weight: 300;margin-left:250px;">Invite prequalified brokers
                            and agents specializing in neighborhood</li>
                        <li style="margin-bottom: 5px;font-weight: 300;margin-left:250px;">Coordinate with other firms
                            to schedule in sequence for maximum exposure in neighborhood</li>
                        <li style="margin-bottom: 5px;font-weight: 300;margin-left:250px;">Coordinate with title firms
                            and lenders to expand potential reach</li>
                    </ul>

                    <h1 class="page-13-2-text-4"
                        style="font-size: 35px;color: #C5A367;font-weight:900;margin-bottom:-5px;margin-left:250px;">
                        Broker’s Open</h1>
                    <p class="page-13-2-text-5" style="font-weight: 300;margin-left:250px;">Public open houses will also
                        be hosted on various weekends in order to ensure we are attracting buyers via every possible
                        avenue. In a study by the National Association of Realtors, 45% of buyers attended open houses
                        as a source of information. The more exposure, the better and this will continually increase the
                        velocity of the sale of your property. Our open houses are marketed through the following
                        avenues:</p>

                    <ul id="page-13-2-text-6-list"
                        style="list-style-image: url('images/home-selling/check-large.png');">
                        <li style="margin-bottom: 5px;font-weight: 300;margin-left:250px;">Personalized email marketing
                            campaigns to contact database</li>
                        <li style="margin-bottom: 5px;font-weight: 300;margin-left:250px;">Posting dates and times on
                            the MLS, Zillow, Trulia, Realtor.com and other syndication portals</li>
                        <li style="margin-bottom: 5px;font-weight: 300;margin-left:250px;">Creative out-of-the-box
                            methods to attract potential buyers such as food trucks, open house flags and balloons</li>
                    </ul>
                </div>
                <div class="second-part">
                    <div class="text">
                        <span class="first-title">THE</span><br>
                        <span class="second-title">HOME</span><br>
                        <span class="third-title">SELLING</span><br>
                        <span class="fourth-title">GUIDE</span><br>
                    </div>
                </div>
            </div>
        </div>
        <div class="column-divider"></div>
        <div class="row-input">
            <div class="flex">
                <label for="page-13-2-text-1">Title</label>
                <input type="text" id="page-13-2-text-1" name="page_13_2_text_1" value="Broker’s Open">
            </div>
            <div class="flex">
                <label for="page-13-2-text-2">Text</label>
                <textarea id="page-13-2-text-2" name="page_13_2_text_2" rows="7">The LUXE Properties team will host a broker’s open event for select agents who specialize in the area. This will bring cooperating agents and firms together, condensing some of the showing activi-ty into a set timeframe. These events allow us to receive immedi-ate authentic feedback on the home, its price and its competitive qualities when compared to the other homes on the market. Our broker’s open events are marketed through the following avenues:
                </textarea>
            </div>
            <div class="flex">
                <label for="page-13-2-text-3">List</label>
                <textarea id="page-13-2-text-3" name="page_13_2_text_3  " rows="7">Invite prequalified brokers and agents specializing in neighborhood
Coordinate with other firms to schedule in sequence for maximum exposure in neighborhood
Coordinate with title firms and lenders to expand potential reach
                </textarea>
            </div>
            <div class="flex">
                <label for="page-13-2-text-4">Title</label>
                <input type="text" id="page-13-2-text-4" name="page_13_2_text_4" value="Broker’s Open">
            </div>
            <div class="flex">
                <label for="page-13-2-text-5">Text</label>
                <textarea id="page-13-2-text-5" name="page_13_2_text_5"
                    rows="7">Public open houses will also be hosted on various weekends in order to ensure we are attracting buyers via every possible avenue. In a study by the National Association of Realtors, 45% of buyers attended open houses as a source of information. The more exposure, the better and this will continually increase the velocity of the sale of your property. Our open houses are marketed through the following avenues:</textarea>
            </div>
            <div class="flex">
                <label for="page-13-2-text-6">List</label>
                <textarea id="page-13-2-text-6" name="page_13_2_text_6  " rows="7">Personalized email marketing campaigns to contact database
Posting dates and times on the MLS, Zillow, Trulia, Realtor.com and other syndication portals
Creative out-of-the-box methods to attract potential buyers such as food trucks, open house flags and balloons
                </textarea>
            </div>
        </div>
    </div>

    <div class="row-divider"></div>
    <div class="row">
        <div class="row-image" style="height: 1100px">
            <img src="" id="imageBackground-page-14-1" style="display: none">
            <input hidden name="page_14_img_1" value="images/home-selling/Asset 21.png">
            <div class="page-14 page-14-1" style="background-image: url('images/home-selling/Asset 21.png');background-size: cover;
            padding-top: 100%;bottom: 0px;width: 100%;">
                <div class="content" style="bottom: 55%;">
                    <h2 style="font-weight: 300;color:white;font-size:90px;margin-bottom:-135px;margin-left:250px;">LUXE
                    </h2>
                    <h1 style="font-weight: 300;color:#C5A367;font-size:140px;margin-bottom:0px;">Testimonials</h1>
                </div>
            </div>
        </div>
        <div class="column-divider"></div>
        <div class="row-input">
            <div class="button" style="margin-top: 0;margin-bottom:50px;">
                <input type="file" id="imageBackgroundInput-page-14-1"
                    onchange="imageBackgroundInputChanged_page_14_1()">
                <button type="button" onclick="startCropper_page_14_1()">Crop</button>
                <button type="button" onclick="cropImage_page_14_1()">Save Crop</button>
            </div>
        </div>
    </div>

    <div class="row-divider"></div>
    <div class="row">
        <div class="row-image">
            <div class="page page-14 page-14-2"
                style="min-height:100%;background-image: url('images/home-selling/Asset 22.jpg');background-size: contain;padding-top: 130%;bottom: 0px;width: 100%;background-repeat: no-repeat;">
            </div>
        </div>
        <div class="column-divider"></div>
        <div class="row-input">
            <h1></h1>
        </div>
    </div>

    <div class="row-divider"></div>
    <div class="row">
        <div class="row-image" style="height:1050px;">
            <img src="" id="imageBackground-page-15-1" style="display: none">
            <input hidden name="page_15_img_1" value="images/home-selling/Asset 23.png">
            <div class="page-15 page-15-1"
                style="background-image: url('images/home-selling/Asset 23.png');background-size: cover;padding-top: 100%;bottom: 0px;width: 100%;">
                <div class="content" style="bottom: 55%;">
                    <h2 style="font-weight: 300;color:white;font-size:50px;margin-bottom:-145px;margin-left:240px;">Meet
                    </h2>
                    <h1 style="font-weight: 300;color:#C5A367;font-size:140px;margin-bottom:0px;margin-left:120px;">
                        TheAgent</h1>
                </div>
            </div>
        </div>
        <div class="column-divider"></div>
        <div class="row-input">
            <div class="button" style="margin-top: 0;margin-bottom:50px;">
                <input type="file" id="imageBackgroundInput-page-15-1"
                    onchange="imageBackgroundInputChanged_page_15_1()">
                <button type="button" onclick="startCropper_page_15_1()">Crop</button>
                <button type="button" onclick="cropImage_page_15_1()">Save Crop</button>
            </div>
        </div>
    </div>

    <div class="row-divider"></div>
    <div class="row">
        <div class="row-image">
            <div class="page page-15 page-15-2 page-with-side-image"
                style="min-height:1000xp;top:0;bottom:0;right:0;background-size: cover;background-position: -600px -5px;background-repeat: no-repeat;">
                <div class="page-bg-image"
                    style="background-image: url('images/home-selling/Asset 23.png');right: 600px;">
                    <h1></h1>
                </div>
                <div class="content pos-relative" style="margin-left:-195px;margin-bottom: 200px;">
                    <h1 class="page-15-2-text-1"
                        style="font-size: 135px;color:#C5A367;font-weight:300;margin-bottom:-55px;margin-top:0px;margin-left:250px;">
                        <span style="color: white;">Fe</span>rnando</h1>
                    <h1 class="page-15-2-text-2"
                        style="font-size: 35px;font-weight:300;margin-bottom:-5px;margin-left:450px;">J. Grullon</h1>

                    <p class="page-15-2-text-3" style="font-weight: 300;margin-left:450px;">Fernando is a Certiﬁed
                        Residential Specialist (CRS) which is the highest credential awarded to residential sales
                        agents, managers and brokers by the National Association of Realtors. Along with his successful
                        real estate career, Fernando holds a Masters Degree in International Business Administration
                        from Spain and a Law Degree from the Dominican Republic.</p>
                    <p class="page-15-2-text-4" style="font-weight: 300;margin-left:450px;">Fernando has served as a
                        Council Member of the Young Professionals Network Leadership Board and as a State Director for
                        the Miami Association of Realtors since 2016. He has been a Real Estate Professional in Miami
                        since 2014, winning the Leading-Edge Society Award of BHHS Florida Realty in 2015, and
                        recognized since 2016 as a "Top Producer" at Luxe Properties.</p>
                    <p class="page-15-2-text-5" style="font-weight: 300;margin-left:450px;">Fernando Grullon guides
                        every client through the real estate process with empathy, commitment, and integrity, Offering
                        them a pleasant experience and a memorable transaction from beginning to end.</p>

                </div>
                <div class="second-part">
                    <div class="text">
                        <span class="first-title">THE</span><br>
                        <span class="second-title">HOME</span><br>
                        <span class="third-title">SELLING</span><br>
                        <span class="fourth-title">GUIDE</span><br>
                    </div>
                </div>
            </div>
        </div>
        <div class="column-divider"></div>
        <div class="row-input">
            <div class="flex">
                <label for="page-15-2-text-1">First Name</label>
                <input type="text" id="page-15-2-text-1" name="page_15_2_text_1" value="Fernando">
            </div>
            <div class="flex">
                <label for="page-15-2-text-2">Last Name</label>
                <input type="text" id="page-15-2-text-2" name="page_15_2_text_2" value="J. Grullon">
            </div>
            <div class="flex">
                <label for="page-15-2-text-3">Text 1</label>
                <textarea id="page-15-2-text-3" name="page_15_2_text_3"
                    rows="7">Fernando is a Certiﬁed Residential Specialist (CRS) which is the highest credential awarded to residential sales agents, managers and brokers by the National Association of Realtors. Along with his successful real estate career, Fernando holds a Masters Degree in International Business Administration from Spain and a Law Degree from the Dominican Republic.</textarea>
            </div>
            <div class="flex">
                <label for="page-15-2-text-4">Text 2</label>
                <textarea id="page-15-2-text-4" name="page_15_2_text_4"
                    rows="7">Fernando has served as a Council Member of the Young Professionals Network Leadership Board and as a State Director for the Miami Association of Realtors since 2016. He has been a Real Estate Professional in Miami since 2014, winning the Leading-Edge Society Award of BHHS Florida Realty in 2015, and recognized since 2016 as a "Top Producer" at Luxe Properties.</textarea>
            </div>
            <div class="flex">
                <label for="page-15-2-text-5">Text 3</label>
                <textarea id="page-15-2-text-5" name="page_15_2_text_5"
                    rows="7">Fernando Grullon guides every client through the real estate process with empathy, commitment, and integrity, Offering them a pleasant experience and a memorable transaction from beginning to end.</textarea>
            </div>
        </div>
    </div>

    <div class="row-divider"></div>
    <div class="row">
        <div class="row-image" style="height: 1125px;">
            <img src="" id="imageBackground-page-16-1" style="display: none">
            <input hidden name="page_16_img_1" value="images/home-selling/Asset 24.png">
            <div class="page-16 page-16-1" style="background-image: url('images/home-selling/Asset 24.png');
            background-size: cover;padding-top: 100%;bottom: 0px;width: 100%;">
                <div class="content" style="bottom: 55%;">
                    <h2 style="font-weight: 300;color:white;font-size:100px;margin-bottom:-140px;margin-left:120px;">
                        Recent</h2>
                    <h1 style="font-weight: 300;color:#C5A367;font-size:140px;margin-bottom:0px;margin-left:120px;">
                        Lisitings</h1>
                </div>
            </div>
        </div>
        <div class="column-divider"></div>
        <div class="row-input">
            <div class="button" style="margin-top: 0;margin-bottom:50px;">
                <input type="file" id="imageBackgroundInput-page-16-1"
                    onchange="imageBackgroundInputChanged_page_16_1()">
                <button type="button" onclick="startCropper_page_16_1()">Crop</button>
                <button type="button" onclick="cropImage_page_16_1()">Save Crop</button>
            </div>
        </div>
    </div>

    <div class="row-divider"></div>
    <div class="row">
        <div class="row-image">
            <img src="" id="imageBackground-page-16-2-1" style="display: none">
            <input hidden name="page_16_2_img_1" value="images/home-selling/Asset 24-1.jpg">
            <img src="" id="imageBackground-page-16-2-2" style="display: none">
            <input hidden name="page_16_2_img_2" value="images/home-selling/Asset 24-2.jpg">
            <img src="" id="imageBackground-page-16-2-3" style="display: none">
            <input hidden name="page_16_2_img_3" value="images/home-selling/Asset 24-3.jpg">
            <img src="" id="imageBackground-page-16-2-4" style="display: none">
            <input hidden name="page_16_2_img_4" value="images/home-selling/Asset 24-4.jpg">
            <div class="page page-16 page-16-2 page-with-side-image"
                style="top:0;bottom:0;right:0;background-size: cover;background-position: -600px -5px;background-repeat: no-repeat;">


                <div class="page-bg-image"
                    style="background-image: url('images/home-selling/Asset 24.png');right: 610px;">
                    <h1></h1>
                </div>
                <div class="content pos-relative" style="margin-left:0px;padding-bottom: 100px;">
                    <div class="section" style="margin-left:170px;">
                        <div style="padding-top:0px;">
                            <div class="circle"
                                style="background-color: #C5A367;float:left;padding:10px;border-radius: 600%;margin-top:20px;">
                                <div class="inner-section"
                                    style="background-color: white;padding:5px;border-radius: 550%;">
                                    <img id="page-16-2-img-1" src="images/home-selling/Asset 24-1.jpg" alt=""
                                        width="166" height="166" style="border-radius: 500%;">
                                </div>
                            </div>
                        </div>
                        <div class="circle-text" style="margin-left: 30px;padding-top: 18px;padding-left: 180px;">
                            <p class="page-16-2-text-1" style="color: #C5A367;font-size: 26px;margin-bottom:-10px;">6495
                                SW 15 TERRACE</p>
                            <p class="page-16-2-text-2" style="margin-bottom:-10px;">PRICE: $2,375,000</p>
                            <p class="page-16-2-text-3" style="margin-bottom:-10px;">BEDS/BATHS: 6/6</p>
                            <p class="page-16-2-text-4" style="margin-bottom:-10px;">LIVING AREA: 6,395 SQ FT</p>
                            <p class="page-16-2-text-5" style="margin-bottom:-10px;">LOT SIZE: 38,768 SQ FT</p>
                        </div>
                    </div>
                    <div class="section" style="margin-left:120px;margin-top:50px;">
                        <div style="padding-top:0px;">
                            <div class="circle"
                                style="margin-left: -255px;background-color: black;float:left;padding:10px;border-radius: 600%;margin-top:20px;">
                                <div class="inner-section"
                                    style="background-color: white;padding:5px;border-radius: 550%;">
                                    <img id="page-16-2-img-2" src="images/home-selling/Asset 24-2.jpg" alt=""
                                        width="166" height="166" style="border-radius: 500%;">
                                </div>
                            </div>
                        </div>
                        <div class="circle-text" style="margin-left: 30px;padding-top: 18px;padding-left: 185px;">
                            <p class="page-16-2-text-6" style="font-size: 26px;margin-bottom:-10px;">6495 SW 15 TERRACE
                            </p>
                            <p class="page-16-2-text-7" style="margin-bottom:-10px;">PRICE: $2,375,000</p>
                            <p class="page-16-2-text-8" style="margin-bottom:-10px;">BEDS/BATHS: 6/6</p>
                            <p class="page-16-2-text-9" style="margin-bottom:-10px;">LIVING AREA: 6,395 SQ FT</p>
                            <p class="page-16-2-text-10" style="margin-bottom:-10px;">LOT SIZE: 38,768 SQ FT</p>
                        </div>
                    </div>
                    <div class="section" style="margin-left:170px;margin-top:50px;">
                        <div style="padding-top:0px;">
                            <div class="circle"
                                style="margin-left: 0px;background-color: #C5A367;float:left;padding:10px;border-radius: 600%;margin-top:20px;">
                                <div class="inner-section"
                                    style="background-color: white;padding:5px;border-radius: 550%;">
                                    <img id="page-16-2-img-3" src="images/home-selling/Asset 24-3.jpg" alt=""
                                        width="166" height="166" style="border-radius: 500%;">
                                </div>
                            </div>
                        </div>
                        <div class="circle-text" style="margin-left: 30px;padding-top: 18px;padding-left: 180px;">
                            <p class="page-16-2-text-11" style="color: #C5A367;font-size: 26px;margin-bottom:-10px;">
                                6495 SW 15 TERRACE</p>
                            <p class="page-16-2-text-12" style="margin-bottom:-10px;">PRICE: $2,375,000</p>
                            <p class="page-16-2-text-13" style="margin-bottom:-10px;">BEDS/BATHS: 6/6</p>
                            <p class="page-16-2-text-14" style="margin-bottom:-10px;">LIVING AREA: 6,395 SQ FT</p>
                            <p class="page-16-2-text-15" style="margin-bottom:-10px;">LOT SIZE: 38,768 SQ FT</p>
                        </div>
                    </div>
                    <div class="section" style="margin-left:120px;margin-top:50px;">
                        <div style="padding-top:0px;">
                            <div class="circle"
                                style="margin-left: -255px;background-color: black;float:left;padding:10px;border-radius: 600%;margin-top:20px;">
                                <div class="inner-section"
                                    style="background-color: white;padding:5px;border-radius: 550%;">
                                    <img id="page-16-2-img-4" src="images/home-selling/Asset 24-4.jpg" alt=""
                                        width="166" height="166" style="border-radius: 500%;">
                                </div>
                            </div>
                        </div>
                        <div class="circle-text" style="margin-left: 30px;padding-top: 18px;padding-left: 185px;">
                            <p class="page-16-2-text-16" style="font-size: 26px;margin-bottom:-10px;">6495 SW 15 TERRACE
                            </p>
                            <p class="page-16-2-text-17" style="margin-bottom:-10px;">PRICE: $2,375,000</p>
                            <p class="page-16-2-text-18" style="margin-bottom:-10px;">BEDS/BATHS: 6/6</p>
                            <p class="page-16-2-text-19" style="margin-bottom:-10px;">LIVING AREA: 6,395 SQ FT</p>
                            <p class="page-16-2-text-20" style="margin-bottom:-10px;">LOT SIZE: 38,768 SQ FT</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="column-divider"></div>
        <div class="row-input">
            <div class="flex">
                <label for="page-16-2-text-1">Slot 1 Title</label>
                <input type="text" id="page-16-2-text-1" name="page_16_2_text_1" value="6495 SW 15 TERRACE">
                <div class="button" style="margin-top: 0;margin-bottom:50px;">
                    <input type="file" id="imageBackgroundInput-page-16-2-1"
                        onchange="imageBackgroundInputChanged_page_16_2_1()">
                    <button type="button" onclick="startCropper_page_16_2_1()">Crop</button>
                    <button type="button" onclick="cropImage_page_16_2_1()">Save Crop</button>
                </div>
            </div>
            <div class="flex">
                <label for="page-16-2-text-2">Price</label>
                <input type="text" id="page-16-2-text-2" name="page_16_2_text_2" value="PRICE: $2,375,000">
                <label for="page-16-2-text-3">Beds</label>
                <input type="text" id="page-16-2-text-3" name="page_16_2_text_3" value="BEDS/BATHS: 6/6">
            </div>
            <div class="flex">
                <label for="page-16-2-text-4">Living Area</label>
                <input type="text" id="page-16-2-text-4" name="page_16_2_text_4" value="LIVING AREA: 6,395 SQ FT">
                <label for="page-16-2-text-5">Lot Size</label>
                <input type="text" id="page-16-2-text-5" name="page_16_2_text_5" value="LOT SIZE: 38,768 SQ FT">
            </div>
            <div class="flex">
                <label for="page-16-2-text-6">Slot 2 Title</label>
                <input type="text" id="page-16-2-text-6" name="page_16_2_text_6" value="6495 SW 15 TERRACE">
                <div class="button" style="margin-top: 0;margin-bottom:50px;">
                    <input type="file" id="imageBackgroundInput-page-16-2-2"
                        onchange="imageBackgroundInputChanged_page_16_2_2()">
                    <button type="button" onclick="startCropper_page_16_2_2()">Crop</button>
                    <button type="button" onclick="cropImage_page_16_2_2()">Save Crop</button>
                </div>
            </div>
            <div class="flex">
                <label for="page-16-2-text-7">Price</label>
                <input type="text" id="page-16-2-text-7" name="page_16_2_text_7" value="PRICE: $2,375,000">
                <label for="page-16-2-text-8">Beds</label>
                <input type="text" id="page-16-2-text-8" name="page_16_2_text_8" value="BEDS/BATHS: 6/6">
            </div>
            <div class="flex">
                <label for="page-16-2-text-9">Living Area</label>
                <input type="text" id="page-16-2-text-9" name="page_16_2_text_9" value="LIVING AREA: 6,395 SQ FT">
                <label for="page-16-2-text-10">Lot Size</label>
                <input type="text" id="page-16-2-text-10" name="page_16_2_text_10" value="LOT SIZE: 38,768 SQ FT">
            </div>

            <div class="flex">
                <label for="page-16-2-text-11">Slot 3 Title</label>
                <input type="text" id="page-16-2-text-11" name="page_16_2_text_11" value="6495 SW 15 TERRACE">
                <div class="button" style="margin-top: 0;margin-bottom:50px;">
                    <input type="file" id="imageBackgroundInput-page-16-2-3"
                        onchange="imageBackgroundInputChanged_page_16_2_3()">
                    <button type="button" onclick="startCropper_page_16_2_3()">Crop</button>
                    <button type="button" onclick="cropImage_page_16_2_3()">Save Crop</button>
                </div>
            </div>
            <div class="flex">
                <label for="page-16-2-text-12">Price</label>
                <input type="text" id="page-16-2-text-12" name="page_16_2_text_12" value="PRICE: $2,375,000">
                <label for="page-16-2-text-13">Beds</label>
                <input type="text" id="page-16-2-text-13" name="page_16_2_text_13" value="BEDS/BATHS: 6/6">
            </div>
            <div class="flex">
                <label for="page-16-2-text-14">Living Area</label>
                <input type="text" id="page-16-2-text-14" name="page_16_2_text_14" value="LIVING AREA: 6,395 SQ FT">
                <label for="page-16-2-text-5">Lot Size</label>
                <input type="text" id="page-16-2-text-15" name="page_16_2_text_15" value="LOT SIZE: 38,768 SQ FT">
            </div>

            <div class="flex">
                <label for="page-16-2-text-16">Slot 4 Title</label>
                <input type="text" id="page-16-2-text-16" name="page_16_2_text_16" value="6495 SW 15 TERRACE">
                <div class="button" style="margin-top: 0;margin-bottom:50px;">
                    <input type="file" id="imageBackgroundInput-page-16-2-4"
                        onchange="imageBackgroundInputChanged_page_16_2_4()">
                    <button type="button" onclick="startCropper_page_16_2_4()">Crop</button>
                    <button type="button" onclick="cropImage_page_16_2_4()">Save Crop</button>
                </div>
            </div>
            <div class="flex">
                <label for="page-16-2-text-17">Price</label>
                <input type="text" id="page-16-2-text-17" name="page_16_2_text_17" value="PRICE: $2,375,000">
                <label for="page-16-2-text-18">Beds</label>
                <input type="text" id="page-16-2-text-18" name="page_16_2_text_18" value="BEDS/BATHS: 6/6">
            </div>
            <div class="flex">
                <label for="page-16-2-text-19">Living Area</label>
                <input type="text" id="page-16-2-text-19" name="page_16_2_text_19" value="LIVING AREA: 6,395 SQ FT">
                <label for="page-16-2-text-20">Lot Size</label>
                <input type="text" id="page-16-2-text-20" name="page_16_2_text_20" value="LOT SIZE: 38,768 SQ FT">
            </div>

        </div>
    </div>

    <div class="row-divider"></div>
    <div class="row">
        <div class="row-image" style="height:1125px;">
            <img src="" id="imageBackground-page-17-1" style="display: none">
            <input hidden name="page_17_img_1" value="images/home-selling/Asset 25.png">
            <div class="page-17 page-17-1" style="background-image: url('images/home-selling/Asset 25.png');
            background-size: cover;
            padding-top: 100%;
            bottom: 0px;
            width: 100%;">
                <div class="content" style="bottom: 55%;">
                    <h2 style="font-weight: 300;color:white;font-size:100px;margin-bottom:-140px;margin-left:120px;">
                        Recent</h2>
                    <h1 style="font-weight: 300;color:#C5A367;font-size:140px;margin-bottom:0;margin-left:120px;">Sales
                    </h1>
                </div>
            </div>
        </div>
        <div class="column-divider"></div>
        <div class="row-input">
            <div class="button" style="margin-top: 0;margin-bottom:50px;">
                <input type="file" id="imageBackgroundInput-page-17-1"
                    onchange="imageBackgroundInputChanged_page_17_1()">
                <button type="button" onclick="startCropper_page_17_1()">Crop</button>
                <button type="button" onclick="cropImage_page_17_1()">Save Crop</button>
            </div>
        </div>
    </div>

    <div class="row-divider"></div>
    <div class="row">
        <div class="row-image">
            <img src="" id="imageBackground-page-17-2-1" style="display: none">
            <input hidden name="page_17_2_img_1" value="images/home-selling/Asset 24-1.jpg">
            <img src="" id="imageBackground-page-17-2-2" style="display: none">
            <input hidden name="page_17_2_img_2" value="images/home-selling/Asset 24-1.jpg">
            <img src="" id="imageBackground-page-17-2-3" style="display: none">
            <input hidden name="page_17_2_img_3" value="images/home-selling/Asset 24-1.jpg">
            <img src="" id="imageBackground-page-17-2-4" style="display: none">
            <input hidden name="page_17_2_img_4" value="images/home-selling/Asset 24-1.jpg">
            <div class="page page-17 page-17-2 page-with-side-image"
                style="min-height: 1000px;top:0;bottom:0;right:0;background-size: cover;background-position: -600px -5px;background-repeat: no-repeat;">


                <div class="page-bg-image"
                    style="background-image: url('images/home-selling/Asset 25.png');right: 610px;">
                    <h1></h1>
                </div>
                <div class="content pos-relative" style="margin-left:0px;">
                    <div class="section"
                        style="margin-left:170px;background-color: #C5A367;padding-bottom:55px;border-radius:129px;margin-bottom:20px;">
                        <div style="padding-top:0px;padding-bottom:20px;">
                            <div class="circle" style="float:left;border-radius: 600%;margin-bottom:30px;">
                                <div class="inner-section" style="border-radius: 550%;">
                                    <img id="page-17-2-img-1" src="images/home-selling/Asset 24-1.jpg" alt=""
                                        width="166" height="166"
                                        style="border-radius: 500%;margin-top:20px;margin-left:20px;">
                                </div>
                            </div>
                        </div>
                        <div class="circle-text" style="margin-left: 30px;margin-top: -25px;padding-left: 175px;">
                            <p class="page-17-2-text-1" style="color:white;font-size: 26px;margin-bottom:-10px;">6495 SW
                                25 TERRACE</p>
                            <p class="page-17-2-text-2" style="margin-bottom:-10px;font-size:14px;">PRICE: $2,375,000
                            </p>
                            <p class="page-17-2-text-3" style="margin-bottom:-10px;font-size:14px;">BEDS/BATHS: 6/6</p>
                            <p class="page-17-2-text-4" style="margin-bottom:-10px;font-size:14px;">LIVING AREA: 6,395
                                SQ FT</p>
                            <p class="page-17-2-text-5" style="margin-bottom:-10px;font-size:14px;">LOT SIZE: 38,768 SQ
                                FT</p>
                            <p class="page-17-2-text-6" style="margin-bottom:-10px;font-size:14px;">DAYS ON MARKET: 7
                            </p>
                        </div>
                    </div>

                    <div class="section"
                        style="margin-left:170px;background-color: #C5A367;padding-bottom:55px;border-radius:129px;margin-bottom:20px;">
                        <div style="padding-top:0px;padding-bottom:20px;">
                            <div class="circle" style="float:left;border-radius: 600%;margin-bottom:30px;">
                                <div class="inner-section" style="border-radius: 550%;">
                                    <img id="page-17-2-img-2" src="images/home-selling/Asset 24-1.jpg" alt=""
                                        width="166" height="166"
                                        style="border-radius: 500%;margin-top:20px;margin-left:20px;">
                                </div>
                            </div>
                        </div>
                        <div class="circle-text" style="margin-left: 30px;margin-top: -25px;padding-left: 175px;">
                            <p class="page-17-2-text-7" style="color:white;font-size: 26px;margin-bottom:-10px;">6495 SW
                                25 TERRACE</p>
                            <p class="page-17-2-text-8" style="margin-bottom:-10px;font-size:14px;">PRICE: $2,375,000
                            </p>
                            <p class="page-17-2-text-9" style="margin-bottom:-10px;font-size:14px;">BEDS/BATHS: 6/6</p>
                            <p class="page-17-2-text-10" style="margin-bottom:-10px;font-size:14px;">LIVING AREA: 6,395
                                SQ FT</p>
                            <p class="page-17-2-text-11" style="margin-bottom:-10px;font-size:14px;">LOT SIZE: 38,768 SQ
                                FT</p>
                            <p class="page-17-2-text-12" style="margin-bottom:-10px;font-size:14px;">DAYS ON MARKET: 7
                            </p>
                        </div>
                    </div>

                    <div class="section"
                        style="margin-left:170px;background-color: #C5A367;padding-bottom:55px;border-radius:129px;margin-bottom:20px;">
                        <div style="padding-top:0px;padding-bottom:20px;">
                            <div class="circle" style="float:left;border-radius: 600%;margin-bottom:30px;">
                                <div class="inner-section" style="border-radius: 550%;">
                                    <img id="page-17-2-img-3" src="images/home-selling/Asset 24-1.jpg" alt=""
                                        width="166" height="166"
                                        style="border-radius: 500%;margin-top:20px;margin-left:20px;">
                                </div>
                            </div>
                        </div>
                        <div class="circle-text" style="margin-left: 30px;margin-top: -25px;padding-left: 175px;">
                            <p class="page-17-2-text-13" style="color:white;font-size: 26px;margin-bottom:-10px;">6495
                                SW 25 TERRACE</p>
                            <p class="page-17-2-text-14" style="margin-bottom:-10px;font-size:14px;">PRICE: $2,375,000
                            </p>
                            <p class="page-17-2-text-15" style="margin-bottom:-10px;font-size:14px;">BEDS/BATHS: 6/6</p>
                            <p class="page-17-2-text-16" style="margin-bottom:-10px;font-size:14px;">LIVING AREA: 6,395
                                SQ FT</p>
                            <p class="page-17-2-text-17" style="margin-bottom:-10px;font-size:14px;">LOT SIZE: 38,768 SQ
                                FT</p>
                            <p class="page-17-2-text-18" style="margin-bottom:-10px;font-size:14px;">DAYS ON MARKET: 7
                            </p>
                        </div>
                    </div>

                    <div class="section"
                        style="margin-left:170px;background-color: #C5A367;padding-bottom:55px;border-radius:129px;margin-bottom:20px;">
                        <div style="padding-top:0px;padding-bottom:20px;">
                            <div class="circle" style="float:left;border-radius: 600%;margin-bottom:30px;">
                                <div class="inner-section" style="border-radius: 550%;">
                                    <img id="page-17-2-img-4" src="images/home-selling/Asset 24-1.jpg" alt=""
                                        width="166" height="166"
                                        style="border-radius: 500%;margin-top:20px;margin-left:20px;">
                                </div>
                            </div>
                        </div>
                        <div class="circle-text" style="margin-left: 30px;margin-top: -25px;padding-left: 175px;">
                            <p class="page-17-2-text-19" style="color:white;font-size: 26px;margin-bottom:-10px;">6495
                                SW 25 TERRACE</p>
                            <p class="page-17-2-text-20" style="margin-bottom:-10px;font-size:14px;">PRICE: $2,375,000
                            </p>
                            <p class="page-17-2-text-21" style="margin-bottom:-10px;font-size:14px;">BEDS/BATHS: 6/6</p>
                            <p class="page-17-2-text-22" style="margin-bottom:-10px;font-size:14px;">LIVING AREA: 6,395
                                SQ FT</p>
                            <p class="page-17-2-text-23" style="margin-bottom:-10px;font-size:14px;">LOT SIZE: 38,768 SQ
                                FT</p>
                            <p class="page-17-2-text-24" style="margin-bottom:-10px;font-size:14px;">DAYS ON MARKET: 7
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="column-divider"></div>
        <div class="row-input">
            <div class="flex">
                <label for="page-17-2-text-1">Slot 1 Title</label>
                <input type="text" id="page-17-2-text-1" name="page_17_2_text_1" value="6495 SW 15 TERRACE">
            </div>
            <div class="flex">
                <label for="page-17-2-text-2">Price</label>
                <input type="text" id="page-17-2-text-2" name="page_17_2_text_2" value="PRICE: $2,375,000">
                <label for="page-17-2-text-3">Beds</label>
                <input type="text" id="page-17-2-text-3" name="page_17_2_text_3" value="BEDS/BATHS: 6/6">
            </div>
            <div class="flex">
                <label for="page-17-2-text-4">Living Area</label>
                <input type="text" id="page-17-2-text-4" name="page_17_2_text_4" value="LIVING AREA: 6,395 SQ FT">

                <label for="page-17-2-text-5">Lot Size</label>
                <input type="text" id="page-17-2-text-5" name="page_17_2_text_5" value="LOT SIZE: 38,768 SQ FT">

                <label for="page-17-2-text-6">Days on Market </label>
                <input type="text" id="page-17-2-text-6" name="page_17_2_text_6" value="DAYS ON MARKET: 7">
            </div>
            <div class="button" style="margin-top: 0">
                <input type="file" id="imageBackgroundInput-page-17-2-1"
                    onchange="imageBackgroundInputChanged_page_17_2_1()">
                <button type="button" onclick="startCropper_page_17_2_1()">Crop</button>
                <button type="button" onclick="cropImage_page_17_2_1()">Save Crop</button>
            </div>

            <div class="flex">
                <label for="page-17-2-text-7">Slot 2 Title</label>
                <input type="text" id="page-17-2-text-7" name="page_17_2_text_7" value="6495 SW 15 TERRACE">
            </div>
            <div class="flex">
                <label for="page-17-2-text-8">Price</label>
                <input type="text" id="page-17-2-text-8" name="page_17_2_text_8" value="PRICE: $2,375,000">
                <label for="page-17-2-text-9">Beds</label>
                <input type="text" id="page-17-2-text-9" name="page_17_2_text_9" value="BEDS/BATHS: 6/6">
            </div>
            <div class="flex">
                <label for="page-17-2-text-10">Living Area</label>
                <input type="text" id="page-17-2-text-10" name="page_17_2_text_10" value="LIVING AREA: 6,395 SQ FT">

                <label for="page-17-2-text-11">Lot Size</label>
                <input type="text" id="page-17-2-text-11" name="page_17_2_text_11" value="LOT SIZE: 38,768 SQ FT">

                <label for="page-17-2-text-12">Days on Market </label>
                <input type="text" id="page-17-2-text-12" name="page_17_2_text_12" value="DAYS ON MARKET: 7">
            </div>
            <div class="button" style="margin-top: 0">
                <input type="file" id="imageBackgroundInput-page-17-2-2"
                    onchange="imageBackgroundInputChanged_page_17_2_2()">
                <button type="button" onclick="startCropper_page_17_2_2()">Crop</button>
                <button type="button" onclick="cropImage_page_17_2_2()">Save Crop</button>
            </div>

            <div class="flex">
                <label for="page-17-2-text-13">Slot 3 Title</label>
                <input type="text" id="page-17-2-text-13" name="page_17_2_text_13" value="6495 SW 15 TERRACE">
            </div>
            <div class="flex">
                <label for="page-17-2-text-14">Price</label>
                <input type="text" id="page-17-2-text-14" name="page_17_2_text_14" value="PRICE: $2,375,000">
                <label for="page-17-2-text-15">Beds</label>
                <input type="text" id="page-17-2-text-15" name="page_17_2_text_15" value="BEDS/BATHS: 6/6">
            </div>
            <div class="flex">
                <label for="page-17-2-text-16">Living Area</label>
                <input type="text" id="page-17-2-text-16" name="page_17_2_text_16" value="LIVING AREA: 6,395 SQ FT">

                <label for="page-17-2-text-17">Lot Size</label>
                <input type="text" id="page-17-2-text-17" name="page_17_2_text_17" value="LOT SIZE: 38,768 SQ FT">

                <label for="page-17-2-text-18">Days on Market </label>
                <input type="text" id="page-17-2-text-18" name="page_17_2_text_18" value="DAYS ON MARKET: 7">
            </div>
            <div class="button" style="margin-top: 0">
                <input type="file" id="imageBackgroundInput-page-17-2-3"
                    onchange="imageBackgroundInputChanged_page_17_2_3()">
                <button type="button" onclick="startCropper_page_17_2_3()">Crop</button>
                <button type="button" onclick="cropImage_page_17_2_3()">Save Crop</button>
            </div>

            <div class="flex">
                <label for="page-17-2-text-19">Slot 4 Title</label>
                <input type="text" id="page-17-2-text-19" name="page_17_2_text_19" value="6495 SW 15 TERRACE">
            </div>
            <div class="flex">
                <label for="page-17-2-text-20">Price</label>
                <input type="text" id="page-17-2-text-20" name="page_17_2_text_20" value="PRICE: $2,375,000">
                <label for="page-17-2-text-21">Beds</label>
                <input type="text" id="page-17-2-text-21" name="page_17_2_text_21" value="BEDS/BATHS: 6/6">
            </div>
            <div class="flex">
                <label for="page-17-2-text-22">Living Area</label>
                <input type="text" id="page-17-2-text-22" name="page_17_2_text_22" value="LIVING AREA: 6,395 SQ FT">

                <label for="page-17-2-text-23">Lot Size</label>
                <input type="text" id="page-17-2-text-23" name="page_17_2_text_23" value="LOT SIZE: 38,768 SQ FT">

                <label for="page-17-2-text-24">Days on Market </label>
                <input type="text" id="page-17-2-text-24" name="page_17_2_text_24" value="DAYS ON MARKET: 7">
            </div>
            <div class="button" style="margin-top: 0">
                <input type="file" id="imageBackgroundInput-page-17-2-4"
                    onchange="imageBackgroundInputChanged_page_17_2_4()">
                <button type="button" onclick="startCropper_page_17_2_4()">Crop</button>
                <button type="button" onclick="cropImage_page_17_2_4()">Save Crop</button>
            </div>
        </div>
    </div>

    <div class="row-divider"></div>
    <div class="row">
        <div class="row-image" style="height: 1200px">
            <img src="" id="imageBackground-page-18-1" style="display: none">
            <input hidden name="page_18_img_1" value="images/home-selling/Asset 26.png">
            <div class="page-18 page-18-1" style="background-image: url('images/home-selling/Asset 26.png');
            background-size: cover;
            padding-top: 100%;
            bottom: 0px;
            width: 100%;">
                <div class="content" style="bottom: 55%;">
                    <h2 style="font-weight: 300;color:white;font-size:80px;margin-bottom:-130px;margin-left:150px;">
                        Happy</h2>
                    <h1 style="font-weight: 300;color:#C5A367;font-size:140px;margin-bottom:-60px;margin-left:120px;">
                        Clients</h1>
                    <h2 style="font-weight: 300;color:white;font-size:40px;margin-bottom:0px;margin-left:230px;">
                        Testimonials</h2>
                </div>
            </div>
        </div>
        <div class="column-divider"></div>
        <div class="row-input">
            <div class="button" style="margin-top: 0;margin-bottom:50px;">
                <input type="file" id="imageBackgroundInput-page-18-1"
                    onchange="imageBackgroundInputChanged_page_18_1()">
                <button type="button" onclick="startCropper_page_18_1()">Crop</button>
                <button type="button" onclick="cropImage_page_18_1()">Save Crop</button>
            </div>
        </div>
    </div>

    <div class="row-divider"></div>
    <div class="row">
        <div class="row-image">
            <img src="" id="imageBackground-page-19-1" style="display: none">
            <input hidden name="page_19_img_1" value="images/home-selling/Asset 27.png">
            <img src="" id="imageBackground-page-19-2" style="display: none">
            <input hidden name="page_19_img_2" value="images/home-selling/Asset 27.png">
            <img src="" id="imageBackground-page-19-3" style="display: none">
            <input hidden name="page_19_img_3" value="images/home-selling/Asset 27.png">
            <div class="page page-18 page-18-2 page-with-side-image"
                style="top:0;bottom:0;right:0;background-size: cover;background-position: -600px -5px;background-repeat: no-repeat;">

                <div class="page-bg-image"
                    style="background-image: url('images/home-selling/Asset 26.png');right: 610px;">
                    <h1></h1>
                </div>
                <div class="content pos-relative" style="margin-left:100px;">
                    <div class="section"
                        style="border:1px solid gray;margin-bottom:20px;padding-bottom:0px;min-height:230px;">
                        <img id="testimonial-1-img" src="images/home-selling/Asset 27.png" alt=""
                            style="float: left;margin-bottom:-30px;" width="230px" height="230px">
                        <img src="images/home-selling/divider-1.png" alt="" height="230px"
                            style="margin-left:-114px;z-index:100;margin-top:0px;margin-bottom:0px;">
                        <div class="text" style="padding-left: 300px;
    margin-top: -190px;
    margin-bottom: 66px;">
                            <p class="page-18-2-text-1" style="font-weight: 300;font-size:16px;">"Awesomeness Customer
                                Services!!! Dedication and Total commitment to his client's, He help us with care to ﬁnd
                                us our Home. We highly recommend Mrs. Fernando Grullon"</p>
                            <p class="page-18-2-text-5" style="font-size: 22px;color: #C5A367;margin-left:25px;">- Mrs.
                                Mercy</p>
                        </div>
                    </div>

                    <div class="section" style="border:1px solid gray;margin-bottom:20px;min-height:230px;">
                        <img id="testimonial-2-img" src="images/home-selling/Asset 27.png" alt=""
                            style="float: left;margin-bottom:-30px;" width="230px" height="230px">
                        <img src="images/home-selling/divider-1.png" alt="" height="230px"
                            style="margin-left:-114px;z-index:100;margin-top:0px;margin-bottom:0px;">
                        <div class="text" style="padding-left: 300px;
    margin-top: -190px;
    margin-bottom: 66px;">
                            <p class="page-18-2-text-3" style="font-weight: 300;font-size:16px;">"Awesomeness Customer
                                Services!!! Dedication and Total commitment to his client's, He help us with care to ﬁnd
                                us our Home. We highly recommend Mrs. Fernando Grullon"</p>
                            <p class="page-18-2-text-4" style="font-size: 22px;color: #C5A367;margin-left:25px;">- Mrs.
                                Mercy</p>
                        </div>
                    </div>

                    <div class="section" style="border:1px solid gray;margin-bottom:20px;min-height:230px;">
                        <img id="testimonial-3-img" src="images/home-selling/Asset 27.png" alt=""
                            style="float: left;margin-bottom:-30px;" width="230px" height="230px">
                        <img src="images/home-selling/divider-1.png" alt="" height="230px"
                            style="margin-left:-114px;z-index:100;margin-top:0px;margin-bottom:0px;">
                        <div class="text" style="padding-left: 300px;
    margin-top: -190px;
    margin-bottom: 66px;">
                            <p class="page-18-2-text-5" style="font-weight: 300;font-size:16px;">"Awesomeness Customer
                                Services!!! Dedication and Total commitment to his client's, He help us with care to ﬁnd
                                us our Home. We highly recommend Mrs. Fernando Grullon"</p>
                            <p class="page-18-2-text-6" style="font-size: 22px;color: #C5A367;margin-left:25px;">- Mrs.
                                Mercy</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="column-divider"></div>
        <div class="row-input">
            <div class="flex">
                <label for="page-18-2-text-1">Testimonial 1 Client</label>
                <textarea id="page-18-2-text-1" name="page_18_2_text_1"
                    rows="7">"Awesomeness Customer Services!!! Dedication and Total commitment to his client's, He help us with care to ﬁnd us our Home. We highly recommend Mrs. Fernando Grullon"</textarea>
            </div>
            <div class="flex">
                <label for="page-18-2-text-2">Testimonial 1 Client</label>
                <input type="text" id="page-18-2-text-2" name="page_18_2_text_2" value="- Mrs. Mercy">
                <div class="button" style="margin-top: 0;margin-bottom:50px;">
                    <input type="file" id="imageBackgroundInput-page-19-1"
                        onchange="imageBackgroundInputChanged_page_19_1()">
                    <button type="button" onclick="startCropper_page_19_1()">Crop</button>
                    <button type="button" onclick="cropImage_page_19_1()">Save Crop</button>
                </div>
            </div>
            <div class="flex">
                <label for="page-18-2-text-3">Testimonial 2 Client</label>
                <textarea id="page-18-2-text-3" name="page_18_2_text_3"
                    rows="7">"Awesomeness Customer Services!!! Dedication and Total commitment to his client's, He help us with care to ﬁnd us our Home. We highly recommend Mrs. Fernando Grullon"</textarea>
            </div>
            <div class="flex">
                <label for="page-18-2-text-4">Testimonial 2 Client</label>
                <input type="text" id="page-18-2-text-4" name="page_18_2_text_4" value="- Mrs. Mercy">
                <div class="button" style="margin-top: 0;margin-bottom:50px;">
                    <input type="file" id="imageBackgroundInput-page-19-2"
                        onchange="imageBackgroundInputChanged_page_19_2()">
                    <button type="button" onclick="startCropper_page_19_2()">Crop</button>
                    <button type="button" onclick="cropImage_page_19_2()">Save Crop</button>
                </div>
            </div>
            <div class="flex">
                <label for="page-18-2-text-5">Testimonial 3 Client</label>
                <textarea id="page-18-2-text-5" name="page_18_2_text_5"
                    rows="7">"Awesomeness Customer Services!!! Dedication and Total commitment to his client's, He help us with care to ﬁnd us our Home. We highly recommend Mrs. Fernando Grullon"</textarea>
            </div>
            <div class="flex">
                <label for="page-18-2-text-6">Testimonial 3 Client</label>
                <input type="text" id="page-18-2-text-6" name="page_18_2_text_6" value="- Mrs. Mercy">
                <div class="button" style="margin-top: 0;margin-bottom:50px;">
                    <input type="file" id="imageBackgroundInput-page-19-3"
                        onchange="imageBackgroundInputChanged_page_19_3()">
                    <button type="button" onclick="startCropper_page_19_3()">Crop</button>
                    <button type="button" onclick="cropImage_page_19_3()">Save Crop</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row-divider"></div>
    <div class="row">
        <div class="row-image">
            <div class="page-19 page-19-1">
                <div class="page-bottom" style="padding-top:100%;bottom: 20px;text-align: center;">
                    <img src="images/last.png" alt="">
                </div>
            </div>
        </div>
        <div class="column-divider"></div>
        <div class="row-input">
            <div class="button">
                <button type="submit" name="action" value="Generate" class="generate">Generate</button>
                <button type="submit" name="action" value="Save" class="generate">Save</button>

                <br>
                JSON Upload:
                <input type="file" id="jsonFileUpload" onchange="jsonFileUploaded()">
            </div>
        </div>
    </div>

    </form>
    {{ csrf_field() }}
</body>
<script>
    $(document).ready(function() {
        $("input").change(function(event) {
            var event_id = event.target.id;
            var event_element = $("#" + event_id)
            var export_var = $("." + event_id);
            export_var.text(event_element.val());
        });
        $("textarea").change(function(event) {
            var event_id = event.target.id;
            if (event_id == "page-5-2-text-3") {
                var arrayOfLines = $('#page-5-2-text-3').val().split('\n');
                var text = "";
                var i;
                for (i = 0; i < arrayOfLines.length; i++) {
                    text += "<li>" + arrayOfLines[i] + "</li>";
                }
                document.getElementById("page-5-2-text-3-list").innerHTML = text;
            } else if (event_id == "page-6-2-text-1") {
                var arrayOfLines = $('#page-6-2-text-1').val().split('\n');
                var text = "";
                var i;
                for (i = 0; i < arrayOfLines.length; i++) {
                    text += "<li>" + arrayOfLines[i] + "</li>";
                }
                document.getElementById("page-6-2-text-1-list").innerHTML = text;
            } else if (event_id == "page-6-2-text-2") {
                var arrayOfLines = $('#page-6-2-text-2').val().split('\n');
                var text = "";
                var i;
                for (i = 0; i < arrayOfLines.length; i++) {
                    text += "<li>" + arrayOfLines[i] + "</li>";
                }
                document.getElementById("page-6-2-text-2-list").innerHTML = text;
            } else if (event_id == "page-6-2-text-3") {
                var arrayOfLines = $('#page-6-2-text-3').val().split('\n');
                var text = "";
                var i;
                for (i = 0; i < arrayOfLines.length; i++) {
                    text += "<li>" + arrayOfLines[i] + "</li>";
                }
                document.getElementById("page-6-2-text-3-list").innerHTML = text;
            } else if (event_id == "page-6-2-text-4") {
                var arrayOfLines = $('#page-6-2-text-4').val().split('\n');
                var text = "";
                var i;
                for (i = 0; i < arrayOfLines.length; i++) {
                    text += "<li>" + arrayOfLines[i] + "</li>";
                }
                document.getElementById("page-6-2-text-4-list").innerHTML = text;
            } else if (event_id == "page-6-2-text-5") {
                var arrayOfLines = $('#page-6-2-text-5').val().split('\n');
                var text = "";
                var i;
                for (i = 0; i < arrayOfLines.length; i++) {
                    text += "<li>" + arrayOfLines[i] + "</li>";
                }
                document.getElementById("page-6-2-text-5-list").innerHTML = text;
            } else if (event_id == "page-8-2-text-3") {
                var arrayOfLines = $('#page-8-2-text-3').val().split('\n');
                var text = "";
                var i;
                for (i = 0; i < arrayOfLines.length; i++) {
                    text += "<li>" + arrayOfLines[i] + "</li>";
                }
                document.getElementById("page-8-2-text-3-list").innerHTML = text;
            } else if (event_id == "page-8-2-text-6") {
                var arrayOfLines = $('#page-8-2-text-6').val().split('\n');
                var text = "";
                var i;
                for (i = 0; i < arrayOfLines.length; i++) {
                    text += "<li>" + arrayOfLines[i] + "</li>";
                }
                document.getElementById("page-8-2-text-6-list").innerHTML = text;
            } else if (event_id == "page-9-2-text-3") {
                var arrayOfLines = $('#page-9-2-text-3').val().split('\n');
                var text = "";
                var i;
                for (i = 0; i < arrayOfLines.length; i++) {
                    text += "<li>" + arrayOfLines[i] + "</li>";
                }
                document.getElementById("page-9-2-text-3-list").innerHTML = text;
            } else if (event_id == "page-9-2-text-4") {
                var arrayOfLines = $('#page-9-2-text-4').val().split('\n');
                var text = "";
                var i;
                for (i = 0; i < arrayOfLines.length; i++) {
                    text += "<li>" + arrayOfLines[i] + "</li>";
                }
                document.getElementById("page-9-2-text-4-list").innerHTML = text;
            } else if (event_id == "page-12-2-text-4") {
                var arrayOfLines = $('#page-12-2-text-4').val().split('\n');
                var text = "";
                var i;
                for (i = 0; i < arrayOfLines.length; i++) {
                    text += "<li style='margin-bottom: 5px;font-weight: 300;margin-left:250px;'>" + arrayOfLines[i] + "</li>";
                }
                document.getElementById("page-12-2-text-4-list").innerHTML = text;
            } else if (event_id == "page-12-2-text-4") {
                var arrayOfLines = $('#page-12-2-text-4').val().split('\n');
                var text = "";
                var i;
                for (i = 0; i < arrayOfLines.length; i++) {
                    text += "<li style='margin-bottom: 5px;font-weight: 300;margin-left:250px;'>" + arrayOfLines[i] + "</li>";
                }
                document.getElementById("page-12-2-text-4-list").innerHTML = text;
            } else if (event_id == "page-13-2-text-3") {
                var arrayOfLines = $('#page-13-2-text-3').val().split('\n');
                var text = "";
                var i;
                for (i = 0; i < arrayOfLines.length; i++) {
                    text += "<li style='margin-bottom: 5px;font-weight: 300;margin-left:250px;'>" + arrayOfLines[i] + "</li>";
                }
                document.getElementById("page-13-2-text-3-list").innerHTML = text;
            } else if (event_id == "page-13-2-text-6") {
                var arrayOfLines = $('#page-13-2-text-6').val().split('\n');
                var text = "";
                var i;
                for (i = 0; i < arrayOfLines.length; i++) {
                    text += "<li style='margin-bottom: 5px;font-weight: 300;margin-left:250px;'>" + arrayOfLines[i] + "</li>";
                }
                document.getElementById("page-13-2-text-6-list").innerHTML = text;
            }
            var event_element = $("#" + event_id)
            var export_var = $("." + event_id);
            export_var.text(event_element.val());
        });
    });

    var cropper;

    function startCropper() {
        var image = document.getElementById("imageBackground");
        $(".page-4.page-4-1 .text").css("display", "none");
        cropper = new Cropper(image, {
            minContainerHeight: 800
        });
    }

    function imageBackgroundInputChanged() {
        var form_data = new FormData();
        form_data.append("file", $("#imageBackgroundInput")[0].files[0]);
        $.ajax({
            url: '/uploadimage',
            data: form_data,
            type: 'post',
            cache: false,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-Token': $('[name="_token"]').val()
            },
            success: function(output) {
                $("#imageBackground").attr('src', 'uploadedimages/' + output)
                getBase64Image(document.getElementById("imageBackground"), function(base64) {
                    $(".page-4-1 .luxe-pro-info").css('background-image', 'url(uploadedimages/' + output + ')')
                    $(".page-4-2 .page-bg-image").css('background-image', 'url(uploadedimages/' + output + ')')
                    $("input[name=page_4_1_img_1]").val('uploadedimages/' + output);
                });
            }
        });
    }

    function cropImage() {
        cropper.getCroppedCanvas().toBlob((blob) => {
            console.log("getCroppedCanvas")
            const form_data = new FormData();
            form_data.append('file', blob, 'example.png');
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: 'post',
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-Token': $('[name="_token"]').val()
                },
                success: function(output) {
                    cropper.destroy();
                    $("#imageBackground").attr('src', 'uploadedimages/' + output)
                    getBase64Image(document.getElementById("imageBackground"), function(base64) {
                        $(".page-4-1 .luxe-pro-info").css('background-image', 'url(uploadedimages/' + output + ')')
                        $(".page-4-2 .page-bg-image").css('background-image', 'url(uploadedimages/' + output + ')')
                        $("input[name=page_4_1_img_1]").val('uploadedimages/' + output);
                    });
                    $(".page-4.page-4-1 .text").css("display", "block");
                }
            });

        } /*, 'image/png' */ );
    }

    function jsonFileUploaded() {
        var reader = new FileReader();
        reader.onload = onJsonFileLoad;
        reader.readAsText(document.getElementById("jsonFileUpload").files[0]);
    }

    function onJsonFileLoad(event) {
        // console.log(event.target.result);
        var obj = JSON.parse(event.target.result);
        // console.log(obj);
        jQuery.each(obj, function(i, val) {
            // var item = $("#" + i);
            var item = $("[name =" + i + "]");
            $(item).val(val);
            // console.log("i: " + i + " - val: " + val);
            console.log("i: " + i + " - val: " + val);

            // console.log("[data-name-replace=" + i + "]");
            // var itemAttributeToReplace = $(item).attr("VAL");
            // console.log(item, itemAttributeToReplace);
            // $("." + i).val(val);
            // if (itemAttributeToReplace == "HTML") {
            //     $(item).html(val);
            // } else if (itemAttributeToReplace == "VAL") {
            //     $(item).val(val);
            // } else {
            //     $(item).attr(itemAttributeToReplace, val)
            // }
            $(item).trigger("change");
        });
    }

    function convert(oldImag, callback) {
        var img = new Image();
        img.onload = function() {
            callback(img)
        }
        img.setAttribute('crossorigin', 'anonymous');
        img.src = oldImag.src;
    }

    function getBase64Image(img, callback) {
        convert(img, function(newImg) {
            var canvas = document.createElement("canvas");
            canvas.width = newImg.width;
            canvas.height = newImg.height;
            var ctx = canvas.getContext("2d");
            ctx.drawImage(newImg, 0, 0);
            var base64 = canvas.toDataURL("image/png");
            callback(base64)
        })
    }

    function startCropper_page_2_1() {
        var image = document.getElementById("imageBackground-page-2-1");
        $("page-2-1 .text").css("display", "none");
        cropper = new Cropper(image, {
            minContainerHeight: 500
        });
    }

    function imageBackgroundInputChanged_page_2_1() {
        var form_data = new FormData();
        form_data.append("file", $("#imageBackgroundInput-page-2-1")[0].files[0]);
        $.ajax({
            url: '/uploadimage',
            data: form_data,
            type: 'post',
            cache: false,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-Token': $('[name="_token"]').val()
            },
            success: function(output) {
                $("#imageBackground-page-2-1").attr('src', 'uploadedimages/' + output)
                getBase64Image(document.getElementById("imageBackground-page-2-1"), function(base64) {
                    $(".page-2-1").css('background-image', 'url(uploadedimages/' + output+')')
                    $("input[name=page_2_1_img_1]").val('uploadedimages/' + output);
                });
            }
        });
    }

    function cropImage_page_2_1() {
        cropper.getCroppedCanvas().toBlob((blob) => {
            console.log("getCroppedCanvas")
            const form_data = new FormData();
            form_data.append('file', blob, 'example.png');
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: 'post',
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-Token': $('[name="_token"]').val()
                },
                success: function(output) {
                    cropper.destroy();
                    $("#imageBackground-page-2-1").attr('src', 'uploadedimages/' + output)
                    getBase64Image(document.getElementById("imageBackground-page-2-1"), function(base64) {
                        $(".page-2-1").css('background-image', 'url(uploadedimages/' + output+')')
                        $("input[name=page_2_1_img_1]").val('uploadedimages/' + output);
                    });
                    $("page-2-1 .text").css("display", "block");
                }
            });

        } /*, 'image/png' */ );
    }

    function startCropper_page_3_1() {
        var image = document.getElementById("imageBackground-page-3-1");
        $(".page-3-1 .text").css("display", "none");
        cropper = new Cropper(image, {
            minContainerHeight: 500
        });
    }

    function imageBackgroundInputChanged_page_3_1() {
        var form_data = new FormData();
        form_data.append("file", $("#imageBackgroundInput-page-3-1")[0].files[0]);
        $.ajax({
            url: '/uploadimage',
            data: form_data,
            type: 'post',
            cache: false,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-Token': $('[name="_token"]').val()
            },
            success: function(output) {
                $("#imageBackground-page-3-1").attr('src', 'uploadedimages/' + output)
                getBase64Image(document.getElementById("imageBackground-page-3-1"), function(base64) {
                    $(".page-3-1 .luxe-pro-info").css('background-image', 'url(uploadedimages/' + output + ')')
                    $("input[name=page_3_1_img_1]").val('uploadedimages/' + output);
                });
            }
        });
    }

    function cropImage_page_3_1() {
        cropper.getCroppedCanvas().toBlob((blob) => {
            console.log("getCroppedCanvas")
            const form_data = new FormData();
            form_data.append('file', blob, 'example.png');
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: 'post',
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-Token': $('[name="_token"]').val()
                },
                success: function(output) {
                    cropper.destroy();
                    $("#imageBackground-page-3-1").attr('src', 'uploadedimages/' + output)
                    getBase64Image(document.getElementById("imageBackground-page-3-1"), function(base64) {
                        $(".page-3-1 .luxe-pro-info").css('background-image', 'url(uploadedimages/' + output + ')')
                        $("input[name=page_3_1_img_1]").val('uploadedimages/' + output);
                    });
                    $(".page-3.page-3-1 .text").css("display", "block");
                }
            });

        } /*, 'image/png' */ );
    }

    function startCropper_page_5_1() {
        var image = document.getElementById("imageBackground-page-5-1");
        $(".page-5.page-5-1 .text").css("display", "none");
        cropper = new Cropper(image, {
            minContainerHeight: 500
        });
    }

    function imageBackgroundInputChanged_page_5_1() {
        var form_data = new FormData();
        form_data.append("file", $("#imageBackgroundInput-page-5-1")[0].files[0]);
        $.ajax({
            url: '/uploadimage',
            data: form_data,
            type: 'post',
            cache: false,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-Token': $('[name="_token"]').val()
            },
            success: function(output) {
                $("#imageBackground-page-5-1").attr('src', 'uploadedimages/' + output)
                getBase64Image(document.getElementById("imageBackground-page-5-1"), function(base64) {
                    $(".page-5-1 .luxe-pro-info").css('background-image', 'url(uploadedimages/' + output + ')')
                    $(".page-5-2 .page-bg-image").css('background-image', 'url(uploadedimages/' + output + ')')
                    $("input[name=page_5_1_img_1]").val('uploadedimages/' + output);
                });
            }
        });
    }

    function cropImage_page_5_1() {
        cropper.getCroppedCanvas().toBlob((blob) => {
            console.log("getCroppedCanvas")
            const form_data = new FormData();
            form_data.append('file', blob, 'example.png');
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: 'post',
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-Token': $('[name="_token"]').val()
                },
                success: function(output) {
                    cropper.destroy();
                    $("#imageBackground-page-5-1").attr('src', 'uploadedimages/' + output)
                    getBase64Image(document.getElementById("imageBackground-page-5-1"), function(base64) {
                        $(".page-5-1 .luxe-pro-info").css('background-image', 'url(uploadedimages/' + output + ')')
                        $(".page-5-2 .page-bg-image").css('background-image', 'url(uploadedimages/' + output + ')')
                        $("input[name=page_5_1_img_1]").val('uploadedimages/' + output);
                    });
                    $(".page-5.page-5-1 .text").css("display", "block");
                }
            });

        } /*, 'image/png' */ );
    }

    function startCropper_page_6_1() {
        var image = document.getElementById("imageBackground-page-6-1");
        $(".page-6-1 .text").css("display", "none");
        cropper = new Cropper(image, {
            minContainerHeight: 500
        });
    }

    function imageBackgroundInputChanged_page_6_1() {
        var form_data = new FormData();
        form_data.append("file", $("#imageBackgroundInput-page-6-1")[0].files[0]);
        $.ajax({
            url: '/uploadimage',
            data: form_data,
            type: 'post',
            cache: false,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-Token': $('[name="_token"]').val()
            },
            success: function(output) {
                $("#imageBackground-page-6-1").attr('src', 'uploadedimages/' + output)
                getBase64Image(document.getElementById("imageBackground-page-6-1"), function(base64) {
                    $(".page-6-1 .luxe-pro-info").css('background-image', 'url(uploadedimages/' + output + ')')
                    $(".page-6-2 .page-bg-image").css('background-image', 'url(uploadedimages/' + output + ')')
                    $("input[name=page_6_1_img_1]").val('uploadedimages/' + output);
                });
            }
        });
    }

    function cropImage_page_6_1() {
        cropper.getCroppedCanvas().toBlob((blob) => {
            console.log("getCroppedCanvas")
            const form_data = new FormData();
            form_data.append('file', blob, 'example.png');
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: 'post',
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-Token': $('[name="_token"]').val()
                },
                success: function(output) {
                    cropper.destroy();
                    $("#imageBackground-page-6-1").attr('src', 'uploadedimages/' + output)
                    getBase64Image(document.getElementById("imageBackground-page-6-1"), function(base64) {
                        $(".page-6-1 .luxe-pro-info").css('background-image', 'url(uploadedimages/' + output + ')')
                        $(".page-6-2 .page-bg-image").css('background-image', 'url(uploadedimages/' + output + ')')
                        $("input[name=page_6_1_img_1]").val('uploadedimages/' + output);
                    });
                    $(".page-6.page-6-1 .text").css("display", "block");
                }
            });

        } /*, 'image/png' */ );
    }

    function startCropper_page_7_1_1() {
        var image = document.getElementById("imageBackground-page-7-1-1");
        $(".page-7-1").css("display", "none");
        cropper = new Cropper(image, {
            minContainerHeight: 500
        });
    }

    function imageBackgroundInputChanged_page_7_1_1() {
        var form_data = new FormData();
        form_data.append("file", $("#imageBackgroundInput-page-7-1-1")[0].files[0]);
        $.ajax({
            url: '/uploadimage',
            data: form_data,
            type: 'post',
            cache: false,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-Token': $('[name="_token"]').val()
            },
            success: function(output) {
                $("#imageBackground-page-7-1-1").attr('src', 'uploadedimages/' + output)
                getBase64Image(document.getElementById("imageBackground-page-7-1-1"), function(base64) {
                    $(".page-7-1 .luxe-pro-info .row-1").css('background-image', 'url(uploadedimages/' + output + ')')
                    $(".page-7-0 .page-bg-image-1").css('background-image', 'url(uploadedimages/' + output + ')')
                    $("input[name=page_7_1_1_img_1]").val('uploadedimages/' + output);
                });
            }
        });
    }

    function cropImage_page_7_1_1() {
        cropper.getCroppedCanvas().toBlob((blob) => {
            console.log("getCroppedCanvas")
            const form_data = new FormData();
            form_data.append('file', blob, 'example.png');
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: 'post',
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-Token': $('[name="_token"]').val()
                },
                success: function(output) {
                    cropper.destroy();
                    $("#imageBackground-page-7-1-1").attr('src', 'uploadedimages/' + output)
                    getBase64Image(document.getElementById("imageBackground-page-7-1-1"), function(base64) {
                        $(".page-7-1 .luxe-pro-info .row-1").css('background-image', 'url(uploadedimages/' + output + ')')
                        $(".page-7-0 .page-bg-image-1").css('background-image', 'url(uploadedimages/' + output + ')')
                        $("input[name=page_7_1_1_img_1]").val('uploadedimages/' + output);
                    });
                    $(".page-7-1").css("display", "block");
                }
            });

        } /*, 'image/png' */ );
    }

    function startCropper_page_7_1_2() {
        var image = document.getElementById("imageBackground-page-7-1-2");
        $(".page-7-1").css("display", "none");
        cropper = new Cropper(image, {
            minContainerHeight: 500
        });
    }

    function imageBackgroundInputChanged_page_7_1_2() {
        var form_data = new FormData();
        form_data.append("file", $("#imageBackgroundInput-page-7-1-2")[0].files[0]);
        $.ajax({
            url: '/uploadimage',
            data: form_data,
            type: 'post',
            cache: false,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-Token': $('[name="_token"]').val()
            },
            success: function(output) {
                $("#imageBackground-page-7-1-2").attr('src', 'uploadedimages/' + output)
                getBase64Image(document.getElementById("imageBackground-page-7-1-2"), function(base64) {
                    $(".page-7-1 .luxe-pro-info .row-2").css('background-image', 'url(uploadedimages/' + output + ')')
                    $(".page-7-0 .page-bg-image-2").css('background-image', 'url(uploadedimages/' + output + ')')
                    $("input[name=page_7_1_2_img_1]").val('uploadedimages/' + output);
                });
            }
        });
    }

    function cropImage_page_7_1_2() {
        cropper.getCroppedCanvas().toBlob((blob) => {
            console.log("getCroppedCanvas")
            const form_data = new FormData();
            form_data.append('file', blob, 'example.png');
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: 'post',
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-Token': $('[name="_token"]').val()
                },
                success: function(output) {
                    cropper.destroy();
                    $("#imageBackground-page-7-1-2").attr('src', 'uploadedimages/' + output)
                    getBase64Image(document.getElementById("imageBackground-page-7-1-2"), function(base64) {
                        $(".page-7-1 .luxe-pro-info .row-2").css('background-image', 'url(uploadedimages/' + output + ')')
                        $(".page-7-0 .page-bg-image-2").css('background-image', 'url(uploadedimages/' + output + ')')
                        $("input[name=page_7_1_2_img_1]").val('uploadedimages/' + output);
                    });
                    $(".page-7-1").css("display", "block");
                }
            });

        } /*, 'image/png' */ );
    }

    function startCropper_page_7_1_3() {
        var image = document.getElementById("imageBackground-page-7-1-3");
        $(".page-7-1").css("display", "none");
        cropper = new Cropper(image, {
            minContainerHeight: 500
        });
    }

    function imageBackgroundInputChanged_page_7_1_3() {
        var form_data = new FormData();
        form_data.append("file", $("#imageBackgroundInput-page-7-1-3")[0].files[0]);
        $.ajax({
            url: '/uploadimage',
            data: form_data,
            type: 'post',
            cache: false,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-Token': $('[name="_token"]').val()
            },
            success: function(output) {
                $("#imageBackground-page-7-1-3").attr('src', 'uploadedimages/' + output)
                getBase64Image(document.getElementById("imageBackground-page-7-1-3"), function(base64) {
                    $(".page-7-1 .luxe-pro-info .row-3").css('background-image', 'url(uploadedimages/' + output + ')')
                    $(".page-7-0 .page-bg-image-3").css('background-image', 'url(uploadedimages/' + output + ')')
                    $("input[name=page_7_1_3_img_1]").val('uploadedimages/' + output);
                });
            }
        });
    }

    function cropImage_page_7_1_3() {
        cropper.getCroppedCanvas().toBlob((blob) => {
            console.log("getCroppedCanvas")
            const form_data = new FormData();
            form_data.append('file', blob, 'example.png');
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: 'post',
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-Token': $('[name="_token"]').val()
                },
                success: function(output) {
                    cropper.destroy();
                    $("#imageBackground-page-7-1-3").attr('src', 'uploadedimages/' + output)
                    getBase64Image(document.getElementById("imageBackground-page-7-1-3"), function(base64) {
                        $(".page-7-1 .luxe-pro-info .row-3").css('background-image', 'url(uploadedimages/' + output + ')')
                        $(".page-7-0 .page-bg-image-3").css('background-image', 'url(uploadedimages/' + output + ')')
                        $("input[name=page_7_1_3_img_1]").val('uploadedimages/' + output);
                    });
                    $(".page-7-1").css("display", "block");
                }
            });

        } /*, 'image/png' */ );
    }

    function startCropper_page_9_1() {
        var image = document.getElementById("imageBackground-page-9-1");
        $(".page-9-1").css("display", "none");
        cropper = new Cropper(image, {
            minContainerHeight: 500
        });
    }

    function imageBackgroundInputChanged_page_9_1() {
        var form_data = new FormData();
        form_data.append("file", $("#imageBackgroundInput-page-9-1")[0].files[0]);
        $.ajax({
            url: '/uploadimage',
            data: form_data,
            type: 'post',
            cache: false,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-Token': $('[name="_token"]').val()
            },
            success: function(output) {
                $("#imageBackground-page-9-1").attr('src', 'uploadedimages/' + output)
                getBase64Image(document.getElementById("imageBackground-page-9-1"), function(base64) {
                    $("#section18-1").attr('src', 'uploadedimages/' + output)
                    $("input[name=page_9_img_1]").val('uploadedimages/' + output);
                });
            }
        });
    }

    function cropImage_page_9_1() {
        cropper.getCroppedCanvas().toBlob((blob) => {
            console.log("getCroppedCanvas")
            const form_data = new FormData();
            form_data.append('file', blob, 'example.png');
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: 'post',
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-Token': $('[name="_token"]').val()
                },
                success: function(output) {
                    cropper.destroy();
                    $("#imageBackground-page-9-1").attr('src', 'uploadedimages/' + output)
                    getBase64Image(document.getElementById("imageBackground-page-9-1"), function(base64) {
                        $("#section18-1").attr('src', 'uploadedimages/' + output)
                        $("input[name=page_9_img_1]").val('uploadedimages/' + output);
                    });
                    $(".page-9-1").css("display", "block");
                }
            });

        } /*, 'image/png' */ );
    }

    function startCropper_page_9_2() {
        var image = document.getElementById("imageBackground-page-9-1");
        $(".page-9-1").css("display", "none");
        cropper = new Cropper(image, {
            minContainerHeight: 500
        });
    }

    function imageBackgroundInputChanged_page_9_2() {
        var form_data = new FormData();
        form_data.append("file", $("#imageBackgroundInput-page-9-1")[0].files[0]);
        $.ajax({
            url: '/uploadimage',
            data: form_data,
            type: 'post',
            cache: false,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-Token': $('[name="_token"]').val()
            },
            success: function(output) {
                $("#imageBackground-page-9-1").attr('src', 'uploadedimages/' + output)
                getBase64Image(document.getElementById("imageBackground-page-9-2"), function(base64) {
                    $("#section18-2").attr('src', 'uploadedimages/' + output)
                    $("input[name=page_9_img_2]").val('uploadedimages/' + output);
                });
            }
        });
    }

    function cropImage_page_9_2() {
        cropper.getCroppedCanvas().toBlob((blob) => {
            console.log("getCroppedCanvas")
            const form_data = new FormData();
            form_data.append('file', blob, 'example.png');
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: 'post',
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-Token': $('[name="_token"]').val()
                },
                success: function(output) {
                    cropper.destroy();
                    $("#imageBackground-page-9-2").attr('src', 'uploadedimages/' + output)
                    getBase64Image(document.getElementById("imageBackground-page-9-2"), function(base64) {
                        $("#section18-2").attr('src', 'uploadedimages/' + output)
                        $("input[name=page_9_img_2]").val('uploadedimages/' + output);
                    });
                    $(".page-9-1").css("display", "block");
                }
            });

        } /*, 'image/png' */ );
    }

    function startCropper_page_10_1_1() {
        var image = document.getElementById("imageBackground-page-10-1-1");
        $(".page-10-1").css("display", "none");
        cropper = new Cropper(image, {
            minContainerHeight: 500
        });
    }

    function imageBackgroundInputChanged_page_10_1_1() {
        var form_data = new FormData();
        form_data.append("file", $("#imageBackgroundInput-page-10-1-1")[0].files[0]);
        $.ajax({
            url: '/uploadimage',
            data: form_data,
            type: 'post',
            cache: false,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-Token': $('[name="_token"]').val()
            },
            success: function(output) {
                $("#imageBackground-page-10-1-1").attr('src', 'uploadedimages/' + output)
                getBase64Image(document.getElementById("imageBackground-page-10-1-1"), function(base64) {
                    $(".page-10-1 .section1").css('background-image', 'url(uploadedimages/' + output + ')');
                    $("input[name=page_10_1_img_1]").val('uploadedimages/' + output);
                });
            }
        });
    }

    function cropImage_page_10_1_1() {
        cropper.getCroppedCanvas().toBlob((blob) => {
            console.log("getCroppedCanvas")
            const form_data = new FormData();
            form_data.append('file', blob, 'example.png');
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: 'post',
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-Token': $('[name="_token"]').val()
                },
                success: function(output) {
                    cropper.destroy();
                    $("#imageBackground-page-10-1-1").attr('src', 'uploadedimages/' + output)
                    getBase64Image(document.getElementById("imageBackground-page-10-1-1"), function(base64) {
                        $(".page-10-1 .section1").css('background-image', 'url(uploadedimages/' + output + ')');
                        $("input[name=page_10_1_img_1]").val('uploadedimages/' + output);
                    });
                    $(".page-10-1").css("display", "block");
                }
            });

        } /*, 'image/png' */ );
    }

    function startCropper_page_10_1_2() {
        var image = document.getElementById("imageBackground-page-10-1-2");
        $(".page-10-1").css("display", "none");
        cropper = new Cropper(image, {
            minContainerHeight: 500
        });
    }

    function imageBackgroundInputChanged_page_10_1_2() {
        var form_data = new FormData();
        form_data.append("file", $("#imageBackgroundInput-page-10-1-2")[0].files[0]);
        $.ajax({
            url: '/uploadimage',
            data: form_data,
            type: 'post',
            cache: false,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-Token': $('[name="_token"]').val()
            },
            success: function(output) {
                $("#imageBackground-page-10-1-2").attr('src', 'uploadedimages/' + output)
                getBase64Image(document.getElementById("imageBackground-page-10-1-2"), function(base64) {
                    $(".page-10-1 .section2").css('background-image', 'url(uploadedimages/' + output + ')');
                    $("input[name=page_10_1_img_2]").val('uploadedimages/' + output);
                });
            }
        });
    }

    function cropImage_page_10_1_2() {
        cropper.getCroppedCanvas().toBlob((blob) => {
            console.log("getCroppedCanvas")
            const form_data = new FormData();
            form_data.append('file', blob, 'example.png');
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: 'post',
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-Token': $('[name="_token"]').val()
                },
                success: function(output) {
                    cropper.destroy();
                    $("#imageBackground-page-10-1-2").attr('src', 'uploadedimages/' + output)
                    getBase64Image(document.getElementById("imageBackground-page-10-1-2"), function(base64) {
                        $(".page-10-1 .section2").css('background-image', 'url(uploadedimages/' + output + ')');
                        $("input[name=page_10_1_img_2]").val('uploadedimages/' + output);
                    });
                    $(".page-10-1").css("display", "block");
                }
            });

        } /*, 'image/png' */ );
    }

    function startCropper_page_11_1_1() {
        var image = document.getElementById("imageBackground-page-11-1-1");
        $(".page-11 .text").css("display", "none");
        cropper = new Cropper(image, {
            minContainerHeight: 500
        });
    }

    function imageBackgroundInputChanged_page_11_1_1() {
        var form_data = new FormData();
        form_data.append("file", $("#imageBackgroundInput-page-11-1-1")[0].files[0]);
        $.ajax({
            url: '/uploadimage',
            data: form_data,
            type: 'post',
            cache: false,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-Token': $('[name="_token"]').val()
            },
            success: function(output) {
                $("#imageBackground-page-11-1-1").attr('src', 'uploadedimages/' + output)
                getBase64Image(document.getElementById("imageBackground-page-11-1-1"), function(base64) {
                    $(".page-11 .section1").css('background-image', 'url(uploadedimages/' + output + ')')
                    $("input[name=page_11_1_img_1]").val('uploadedimages/' + output);
                });
            }
        });
    }

    function cropImage_page_11_1_1() {
        cropper.getCroppedCanvas().toBlob((blob) => {
            console.log("getCroppedCanvas")
            const form_data = new FormData();
            form_data.append('file', blob, 'example.png');
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: 'post',
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-Token': $('[name="_token"]').val()
                },
                success: function(output) {
                    cropper.destroy();
                    $("#imageBackground-page-11-1-1").attr('src', 'uploadedimages/' + output)
                    getBase64Image(document.getElementById("imageBackground-page-11-1-1"), function(base64) {
                        $(".page-11 .section1").css('background-image', 'url(uploadedimages/' + output + ')')
                        $("input[name=page_11_1_img_1]").val('uploadedimages/' + output);
                    });
                    $(".page-11-1 .text").css("display", "block");
                }
            });

        } /*, 'image/png' */ );
    }

    function startCropper_page_11_1_2() {
        var image = document.getElementById("imageBackground-page-11-1-2");
        $(".page-11-1 .text").css("display", "none");
        cropper = new Cropper(image, {
            minContainerHeight: 500
        });
    }

    function imageBackgroundInputChanged_page_11_1_2() {
        var form_data = new FormData();
        form_data.append("file", $("#imageBackgroundInput-page-11-1-2")[0].files[0]);
        $.ajax({
            url: '/uploadimage',
            data: form_data,
            type: 'post',
            cache: false,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-Token': $('[name="_token"]').val()
            },
            success: function(output) {
                $("#imageBackground-page-11-1-2").attr('src', 'uploadedimages/' + output)
                getBase64Image(document.getElementById("imageBackground-page-11-1-2"), function(base64) {
                    $("#page-11-1-img-1").attr('src', 'uploadedimages/' + output)
                    $("input[name=page_11_1_img_1]").val('uploadedimages/' + output);
                });
            }
        });
    }

    function cropImage_page_11_1_2() {
        cropper.getCroppedCanvas().toBlob((blob) => {
            console.log("getCroppedCanvas")
            const form_data = new FormData();
            form_data.append('file', blob, 'example.png');
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: 'post',
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-Token': $('[name="_token"]').val()
                },
                success: function(output) {
                    cropper.destroy();
                    $("#imageBackground-page-11-1-2").attr('src', 'uploadedimages/' + output)
                    getBase64Image(document.getElementById("imageBackground-page-11-1-2"), function(base64) {
                        $("#page-11-1-img-1").attr('src', 'uploadedimages/' + output)
                        $("input[name=page_11_1_img_1]").val('uploadedimages/' + output);
                    });
                    $(".page-11-1 .text").css("display", "block");
                }
            });

        } /*, 'image/png' */ );
    }

    function startCropper_page_11_1_3() {
        var image = document.getElementById("imageBackground-page-11-1-3");
        $(".page-11-1 .text").css("display", "none");
        cropper = new Cropper(image, {
            minContainerHeight: 500
        });
    }

    function imageBackgroundInputChanged_page_11_1_3() {
        var form_data = new FormData();
        form_data.append("file", $("#imageBackgroundInput-page-11-1-3")[0].files[0]);
        $.ajax({
            url: '/uploadimage',
            data: form_data,
            type: 'post',
            cache: false,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-Token': $('[name="_token"]').val()
            },
            success: function(output) {
                $("#imageBackground-page-11-1-3").attr('src', 'uploadedimages/' + output)
                getBase64Image(document.getElementById("imageBackground-page-11-1-3"), function(base64) {
                    $("#page-11-1-img-2").attr('src', 'uploadedimages/' + output)
                    $("input[name=page_11_1_img_2]").val('uploadedimages/' + output);
                });
            }
        });
    }

    function cropImage_page_11_1_3() {
        cropper.getCroppedCanvas().toBlob((blob) => {
            console.log("getCroppedCanvas")
            const form_data = new FormData();
            form_data.append('file', blob, 'example.png');
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: 'post',
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-Token': $('[name="_token"]').val()
                },
                success: function(output) {
                    cropper.destroy();
                    $("#imageBackground-page-11-1-3").attr('src', 'uploadedimages/' + output)
                    getBase64Image(document.getElementById("imageBackground-page-11-1-3"), function(base64) {
                        $("#page-11-1-img-2").attr('src', 'uploadedimages/' + output)
                        $("input[name=page_11_1_img_2]").val('uploadedimages/' + output);
                    });
                    $(".page-11-1 .text").css("display", "block");
                }
            });

        } /*, 'image/png' */ );
    }

    function startCropper_page_11_1_4() {
        var image = document.getElementById("imageBackground-page-11-1-4");
        $(".page-11-1 .text").css("display", "none");
        cropper = new Cropper(image, {
            minContainerHeight: 500
        });
    }

    function imageBackgroundInputChanged_page_11_1_4() {
        var form_data = new FormData();
        form_data.append("file", $("#imageBackgroundInput-page-11-1-4")[0].files[0]);
        $.ajax({
            url: '/uploadimage',
            data: form_data,
            type: 'post',
            cache: false,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-Token': $('[name="_token"]').val()
            },
            success: function(output) {
                $("#imageBackground-page-11-1-4").attr('src', 'uploadedimages/' + output)
                getBase64Image(document.getElementById("imageBackground-page-11-1-4"), function(base64) {
                    $("#page-11-1-img-3").attr('src', 'uploadedimages/' + output)
                    $("input[name=page_11_1_img_3]").val('uploadedimages/' + output);
                });
            }
        });
    }

    function cropImage_page_11_1_4() {
        cropper.getCroppedCanvas().toBlob((blob) => {
            console.log("getCroppedCanvas")
            const form_data = new FormData();
            form_data.append('file', blob, 'example.png');
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: 'post',
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-Token': $('[name="_token"]').val()
                },
                success: function(output) {
                    cropper.destroy();
                    $("#imageBackground-page-11-1-4").attr('src', 'uploadedimages/' + output)
                    getBase64Image(document.getElementById("imageBackground-page-11-1-4"), function(base64) {
                        $("#page-11-1-img-3").attr('src', 'uploadedimages/' + output)
                        $("input[name=page_11_1_img_3]").val('uploadedimages/' + output);
                    });
                    $(".page-11-1 .text").css("display", "block");
                }
            });

        } /*, 'image/png' */ );
    }

    function startCropper_page_11_1_5() {
        var image = document.getElementById("imageBackground-page-11-1-5");
        $(".page-11-1 .text").css("display", "none");
        cropper = new Cropper(image, {
            minContainerHeight: 500
        });
    }

    function imageBackgroundInputChanged_page_11_1_5() {
        var form_data = new FormData();
        form_data.append("file", $("#imageBackgroundInput-page-11-1-5")[0].files[0]);
        $.ajax({
            url: '/uploadimage',
            data: form_data,
            type: 'post',
            cache: false,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-Token': $('[name="_token"]').val()
            },
            success: function(output) {
                $("#imageBackground-page-11-1-5").attr('src', 'uploadedimages/' + output)
                getBase64Image(document.getElementById("imageBackground-page-11-1-5"), function(base64) {
                    $("#page-11-1-img-4").attr('src', 'uploadedimages/' + output)
                    $("input[name=page_11_1_img_4]").val('uploadedimages/' + output);
                });
            }
        });
    }

    function cropImage_page_11_1_5() {
        cropper.getCroppedCanvas().toBlob((blob) => {
            console.log("getCroppedCanvas")
            const form_data = new FormData();
            form_data.append('file', blob, 'example.png');
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: 'post',
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-Token': $('[name="_token"]').val()
                },
                success: function(output) {
                    cropper.destroy();
                    $("#imageBackground-page-11-1-5").attr('src', 'uploadedimages/' + output)
                    getBase64Image(document.getElementById("imageBackground-page-11-1-5"), function(base64) {
                        $("#page-11-1-img-4").attr('src', 'uploadedimages/' + output)
                        $("input[name=page_11_1_img_4]").val('uploadedimages/' + output);
                    });
                    $(".page-11-1 .text").css("display", "block");
                }
            });

        } /*, 'image/png' */ );
    }

    function startCropper_page_11_1_6() {
        var image = document.getElementById("imageBackground-page-11-1-6");
        $(".page-11-1 .text").css("display", "none");
        cropper = new Cropper(image, {
            minContainerHeight: 500
        });
    }

    function imageBackgroundInputChanged_page_11_1_6() {
        var form_data = new FormData();
        form_data.append("file", $("#imageBackgroundInput-page-11-1-6")[0].files[0]);
        $.ajax({
            url: '/uploadimage',
            data: form_data,
            type: 'post',
            cache: false,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-Token': $('[name="_token"]').val()
            },
            success: function(output) {
                $("#imageBackground-page-11-1-6").attr('src', 'uploadedimages/' + output)
                getBase64Image(document.getElementById("imageBackground-page-11-1-6"), function(base64) {
                    $("#page-11-1-img-5").attr('src', 'uploadedimages/' + output)
                    $("input[name=page_11_1_img_5]").val('uploadedimages/' + output);
                });
            }
        });
    }

    function cropImage_page_11_1_6() {
        cropper.getCroppedCanvas().toBlob((blob) => {
            console.log("getCroppedCanvas")
            const form_data = new FormData();
            form_data.append('file', blob, 'example.png');
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: 'post',
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-Token': $('[name="_token"]').val()
                },
                success: function(output) {
                    cropper.destroy();
                    $("#imageBackground-page-11-1-6").attr('src', 'uploadedimages/' + output)
                    getBase64Image(document.getElementById("imageBackground-page-11-1-6"), function(base64) {
                        $("#page-11-1-img-5").attr('src', 'uploadedimages/' + output)
                        $("input[name=page_11_1_img_5]").val('uploadedimages/' + output);
                    });
                    $(".page-11-1 .text").css("display", "block");
                }
            });

        } /*, 'image/png' */ );
    }

    function startCropper_page_11_1_7() {
        var image = document.getElementById("imageBackground-page-11-1-7");
        $(".page-11-1 .text").css("display", "none");
        cropper = new Cropper(image, {
            minContainerHeight: 500
        });
    }

    function imageBackgroundInputChanged_page_11_1_7() {
        var form_data = new FormData();
        form_data.append("file", $("#imageBackgroundInput-page-11-1-7")[0].files[0]);
        $.ajax({
            url: '/uploadimage',
            data: form_data,
            type: 'post',
            cache: false,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-Token': $('[name="_token"]').val()
            },
            success: function(output) {
                $("#imageBackground-page-11-1-7").attr('src', 'uploadedimages/' + output)
                getBase64Image(document.getElementById("imageBackground-page-11-1-7"), function(base64) {
                    $("#page-11-1-img-6").attr('src', 'uploadedimages/' + output)
                    $("input[name=page_11_1_img_6]").val('uploadedimages/' + output);
                });
            }
        });
    }

    function cropImage_page_11_1_7() {
        cropper.getCroppedCanvas().toBlob((blob) => {
            console.log("getCroppedCanvas")
            const form_data = new FormData();
            form_data.append('file', blob, 'example.png');
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: 'post',
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-Token': $('[name="_token"]').val()
                },
                success: function(output) {
                    cropper.destroy();
                    $("#imageBackground-page-11-1-7").attr('src', 'uploadedimages/' + output)
                    getBase64Image(document.getElementById("imageBackground-page-11-1-7"), function(base64) {
                        $("#page-11-1-img-6").attr('src', 'uploadedimages/' + output)
                        $("input[name=page_11_1_img_6]").val('uploadedimages/' + output);
                    });
                    $(".page-11-1 .text").css("display", "block");
                }
            });

        } /*, 'image/png' */ );
    }

    function startCropper_page_12_1() {
        var image = document.getElementById("imageBackground-page-12-1");
        $(".page-12-1").css("display", "none");
        cropper = new Cropper(image, {
            minContainerHeight: 500
        });
    }

    function imageBackgroundInputChanged_page_12_1() {
        var form_data = new FormData();
        form_data.append("file", $("#imageBackgroundInput-page-12-1")[0].files[0]);
        $.ajax({
            url: '/uploadimage',
            data: form_data,
            type: 'post',
            cache: false,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-Token': $('[name="_token"]').val()
            },
            success: function(output) {
                $("#imageBackground-page-12-1").attr('src', 'uploadedimages/' + output)
                getBase64Image(document.getElementById("imageBackground-page-12-1"), function(base64) {
                    $(".page-12-1 .luxe-pro-info").css('background-image', 'url(uploadedimages/' + output + ')')
                    $(".page-12-2 .page-bg-image").css('background-image', 'url(uploadedimages/' + output + ')')
                    $("input[name=page_12_img_1]").val('uploadedimages/' + output);
                });
            }
        });
    }

    function cropImage_page_12_1() {
        cropper.getCroppedCanvas().toBlob((blob) => {
            console.log("getCroppedCanvas")
            const form_data = new FormData();
            form_data.append('file', blob, 'example.png');
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: 'post',
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-Token': $('[name="_token"]').val()
                },
                success: function(output) {
                    cropper.destroy();
                    $("#imageBackground-page-12-1").attr('src', 'uploadedimages/' + output)
                    getBase64Image(document.getElementById("imageBackground-page-12-1"), function(base64) {
                        $(".page-12-1 .luxe-pro-info").css('background-image', 'url(uploadedimages/' + output + ')');
                        $(".page-12-2 .page-bg-image").css('background-image', 'url(uploadedimages/' + output + ')')
                        $("input[name=page_12_img_1]").val('uploadedimages/' + output);
                    });
                    $(".page-12-1").css("display", "block");
                }
            });

        } /*, 'image/png' */ );
    }

    function startCropper_page_13_1() {
        var image = document.getElementById("imageBackground-page-13-1");
        $(".page-13-1").css("display", "none");
        cropper = new Cropper(image, {
            minContainerHeight: 500
        });
    }

    function imageBackgroundInputChanged_page_13_1() {
        var form_data = new FormData();
        form_data.append("file", $("#imageBackgroundInput-page-13-1")[0].files[0]);
        $.ajax({
            url: '/uploadimage',
            data: form_data,
            type: 'post',
            cache: false,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-Token': $('[name="_token"]').val()
            },
            success: function(output) {
                $("#imageBackground-page-13-1").attr('src', 'uploadedimages/' + output)
                getBase64Image(document.getElementById("imageBackground-page-13-1"), function(base64) {
                    $(".page-13-1").css('background-image', 'url(uploadedimages/' + output + ')');
                    $(".page-13-2 .page-bg-image").css('background-image', 'url(uploadedimages/' + output + ')');
                    $("input[name=page_13_img_1]").val('uploadedimages/' + output);
                });
            }
        });
    }

    function cropImage_page_13_1() {
        cropper.getCroppedCanvas().toBlob((blob) => {
            console.log("getCroppedCanvas")
            const form_data = new FormData();
            form_data.append('file', blob, 'example.png');
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: 'post',
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-Token': $('[name="_token"]').val()
                },
                success: function(output) {
                    cropper.destroy();
                    $("#imageBackground-page-13-1").attr('src', 'uploadedimages/' + output)
                    getBase64Image(document.getElementById("imageBackground-page-13-1"), function(base64) {
                        $(".page-13-1").css('background-image', 'url(uploadedimages/' + output + ')');
                        $(".page-13-2 .page-bg-image").css('background-image', 'url(uploadedimages/' + output + ')');
                        $("input[name=page_13_img_1]").val('uploadedimages/' + output);
                    });
                    $(".page-13-1").css("display", "block");
                }
            });

        } /*, 'image/png' */ );
    }

    function startCropper_page_14_1() {
        var image = document.getElementById("imageBackground-page-14-1");
        $(".page-14-1").css("display", "none");
        cropper = new Cropper(image, {
            minContainerHeight: 500
        });
    }

    function imageBackgroundInputChanged_page_14_1() {
        var form_data = new FormData();
        form_data.append("file", $("#imageBackgroundInput-page-14-1")[0].files[0]);
        $.ajax({
            url: '/uploadimage',
            data: form_data,
            type: 'post',
            cache: false,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-Token': $('[name="_token"]').val()
            },
            success: function(output) {
                $("#imageBackground-page-14-1").attr('src', 'uploadedimages/' + output)
                getBase64Image(document.getElementById("imageBackground-page-14-1"), function(base64) {
                    $(".page-14-1").css('background-image', 'url(uploadedimages/' + output + ')');
                    $("input[name=page_14_img_1]").val('uploadedimages/' + output);
                });
            }
        });
    }

    function cropImage_page_14_1() {
        cropper.getCroppedCanvas().toBlob((blob) => {
            console.log("getCroppedCanvas")
            const form_data = new FormData();
            form_data.append('file', blob, 'example.png');
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: 'post',
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-Token': $('[name="_token"]').val()
                },
                success: function(output) {
                    cropper.destroy();
                    $("#imageBackground-page-14-1").attr('src', 'uploadedimages/' + output)
                    getBase64Image(document.getElementById("imageBackground-page-14-1"), function(base64) {
                        $(".page-14-1").css('background-image', 'url(uploadedimages/' + output + ')');
                        $("input[name=page_14_img_1]").val('uploadedimages/' + output);
                    });
                    $(".page-14-1").css("display", "block");
                }
            });

        } /*, 'image/png' */ );
    }

    function startCropper_page_15_1() {
        var image = document.getElementById("imageBackground-page-15-1");
        $(".page-15-1").css("display", "none");
        cropper = new Cropper(image, {
            minContainerHeight: 500
        });
    }

    function imageBackgroundInputChanged_page_15_1() {
        var form_data = new FormData();
        form_data.append("file", $("#imageBackgroundInput-page-15-1")[0].files[0]);
        $.ajax({
            url: '/uploadimage',
            data: form_data,
            type: 'post',
            cache: false,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-Token': $('[name="_token"]').val()
            },
            success: function(output) {
                $("#imageBackground-page-15-1").attr('src', 'uploadedimages/' + output)
                getBase64Image(document.getElementById("imageBackground-page-15-1"), function(base64) {
                    $(".page-15-1").css('background-image', 'url(uploadedimages/' + output + ')');
                    $(".page-15-2 .page-bg-image").css('background-image', 'url(uploadedimages/' + output + ')');
                    $("input[name=page_15_img_1]").val('uploadedimages/' + output);
                });
            }
        });
    }

    function cropImage_page_15_1() {
        cropper.getCroppedCanvas().toBlob((blob) => {
            console.log("getCroppedCanvas")
            const form_data = new FormData();
            form_data.append('file', blob, 'example.png');
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: 'post',
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-Token': $('[name="_token"]').val()
                },
                success: function(output) {
                    cropper.destroy();
                    $("#imageBackground-page-15-1").attr('src', 'uploadedimages/' + output)
                    getBase64Image(document.getElementById("imageBackground-page-15-1"), function(base64) {
                        $(".page-15-1").css('background-image', 'url(uploadedimages/' + output + ')');
                        $(".page-15-2 .page-bg-image").css('background-image', 'url(uploadedimages/' + output + ')');
                        $("input[name=page_15_img_1]").val('uploadedimages/' + output);
                    });
                    $(".page-15-1").css("display", "block");
                }
            });

        } /*, 'image/png' */ );
    }

    function startCropper_page_16_1() {
        var image = document.getElementById("imageBackground-page-16-1");
        $(".page-16-1").css("display", "none");
        cropper = new Cropper(image, {
            minContainerHeight: 500
        });
    }

    function imageBackgroundInputChanged_page_16_1() {
        var form_data = new FormData();
        form_data.append("file", $("#imageBackgroundInput-page-16-1")[0].files[0]);
        $.ajax({
            url: '/uploadimage',
            data: form_data,
            type: 'post',
            cache: false,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-Token': $('[name="_token"]').val()
            },
            success: function(output) {
                $("#imageBackground-page-16-1").attr('src', 'uploadedimages/' + output)
                getBase64Image(document.getElementById("imageBackground-page-16-1"), function(base64) {
                    $(".page-16-1").css('background-image', 'url(uploadedimages/' + output + ')');
                    $(".page-16-2 .page-bg-image").css('background-image', 'url(uploadedimages/' + output + ')');
                    $("input[name=page_16_img_1]").val('uploadedimages/' + output);
                });
            }
        });
    }

    function cropImage_page_16_1() {
        cropper.getCroppedCanvas().toBlob((blob) => {
            console.log("getCroppedCanvas")
            const form_data = new FormData();
            form_data.append('file', blob, 'example.png');
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: 'post',
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-Token': $('[name="_token"]').val()
                },
                success: function(output) {
                    cropper.destroy();
                    $("#imageBackground-page-16-1").attr('src', 'uploadedimages/' + output)
                    getBase64Image(document.getElementById("imageBackground-page-16-1"), function(base64) {
                        $(".page-16-1").css('background-image', 'url(uploadedimages/' + output + ')');
                        $(".page-16-2 .page-bg-image").css('background-image', 'url(uploadedimages/' + output + ')');
                        $("input[name=page_16_img_1]").val('uploadedimages/' + output);
                    });
                    $(".page-16-1").css("display", "block");
                }
            });

        } /*, 'image/png' */ );
    }

    function startCropper_page_17_1() {
        var image = document.getElementById("imageBackground-page-17-1");
        $(".page-17-1").css("display", "none");
        cropper = new Cropper(image, {
            minContainerHeight: 500
        });
    }

    function imageBackgroundInputChanged_page_17_1() {
        var form_data = new FormData();
        form_data.append("file", $("#imageBackgroundInput-page-17-1")[0].files[0]);
        $.ajax({
            url: '/uploadimage',
            data: form_data,
            type: 'post',
            cache: false,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-Token': $('[name="_token"]').val()
            },
            success: function(output) {
                $("#imageBackground-page-17-1").attr('src', 'uploadedimages/' + output)
                getBase64Image(document.getElementById("imageBackground-page-17-1"), function(base64) {
                    $(".page-17-1").css('background-image', 'url(uploadedimages/' + output + ')');
                    $(".page-17-2 .page-bg-image").css('background-image', 'url(uploadedimages/' + output + ')');
                    $("input[name=page_17_img_1]").val('uploadedimages/' + output);
                });
            }
        });
    }

    function cropImage_page_17_1() {
        cropper.getCroppedCanvas().toBlob((blob) => {
            console.log("getCroppedCanvas")
            const form_data = new FormData();
            form_data.append('file', blob, 'example.png');
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: 'post',
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-Token': $('[name="_token"]').val()
                },
                success: function(output) {
                    cropper.destroy();
                    $("#imageBackground-page-17-1").attr('src', 'uploadedimages/' + output)
                    getBase64Image(document.getElementById("imageBackground-page-17-1"), function(base64) {
                        $(".page-17-1").css('background-image', 'url(uploadedimages/' + output + ')');
                        $(".page-17-2 .page-bg-image").css('background-image', 'url(uploadedimages/' + output + ')');
                        $("input[name=page_17_img_1]").val('uploadedimages/' + output);
                    });
                    $(".page-17-1").css("display", "block");
                }
            });

        } /*, 'image/png' */ );
    }

    function startCropper_page_18_1() {
        var image = document.getElementById("imageBackground-page-18-1");
        $(".page-18-1").css("display", "none");
        cropper = new Cropper(image, {
            minContainerHeight: 500
        });
    }

    function imageBackgroundInputChanged_page_18_1() {
        var form_data = new FormData();
        form_data.append("file", $("#imageBackgroundInput-page-18-1")[0].files[0]);
        $.ajax({
            url: '/uploadimage',
            data: form_data,
            type: 'post',
            cache: false,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-Token': $('[name="_token"]').val()
            },
            success: function(output) {
                $("#imageBackground-page-18-1").attr('src', 'uploadedimages/' + output)
                getBase64Image(document.getElementById("imageBackground-page-18-1"), function(base64) {
                    $(".page-18-1").css('background-image', 'url(uploadedimages/' + output + ')');
                    $(".page-18-2 .page-bg-image").css('background-image', 'url(uploadedimages/' + output + ')');
                    $("input[name=page_18_img_1]").val('uploadedimages/' + output);
                });
            }
        });
    }

    function cropImage_page_18_1() {
        cropper.getCroppedCanvas().toBlob((blob) => {
            console.log("getCroppedCanvas")
            const form_data = new FormData();
            form_data.append('file', blob, 'example.png');
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: 'post',
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-Token': $('[name="_token"]').val()
                },
                success: function(output) {
                    cropper.destroy();
                    $("#imageBackground-page-18-1").attr('src', 'uploadedimages/' + output)
                    getBase64Image(document.getElementById("imageBackground-page-18-1"), function(base64) {
                        $(".page-18-1").css('background-image', 'url(uploadedimages/' + output + ')');
                        $(".page-18-2 .page-bg-image").css('background-image', 'url(uploadedimages/' + output + ')');
                        $("input[name=page_18_img_1]").val('uploadedimages/' + output);
                    });
                    $(".page-18-1").css("display", "block");
                }
            });

        } /*, 'image/png' */ );
    }

    function startCropper_page_19_1() {
        var image = document.getElementById("imageBackground-page-19-1");
        $(".page-18").css("display", "none");
        cropper = new Cropper(image, {
            minContainerHeight: 500
        });
    }

    function imageBackgroundInputChanged_page_19_1() {
        var form_data = new FormData();
        form_data.append("file", $("#imageBackgroundInput-page-19-1")[0].files[0]);
        $.ajax({
            url: '/uploadimage',
            data: form_data,
            type: 'post',
            cache: false,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-Token': $('[name="_token"]').val()
            },
            success: function(output) {
                $("#imageBackground-page-19-1").attr('src', 'uploadedimages/' + output)
                getBase64Image(document.getElementById("imageBackground-page-19-1"), function(base64) {
                    $("#testimonial-1-img").attr('src', 'uploadedimages/' + output)
                    $("input[name=page_19_img_1]").val('uploadedimages/' + output);
                });
            }
        });
    }

    function cropImage_page_19_1() {
        cropper.getCroppedCanvas().toBlob((blob) => {
            console.log("getCroppedCanvas")
            const form_data = new FormData();
            form_data.append('file', blob, 'example.png');
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: 'post',
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-Token': $('[name="_token"]').val()
                },
                success: function(output) {
                    cropper.destroy();
                    $("#imageBackground-page-19-1").attr('src', 'uploadedimages/' + output)
                    getBase64Image(document.getElementById("imageBackground-page-19-1"), function(base64) {
                        $("#testimonial-1-img").attr('src', 'uploadedimages/' + output)
                        $("input[name=page_19_img_1]").val('uploadedimages/' + output);
                    });
                    $(".page-18").css("display", "block");
                }
            });

        } /*, 'image/png' */ );
    }

    function startCropper_page_19_2() {
        var image = document.getElementById("imageBackground-page-19-2");
        $(".page-18").css("display", "none");
        cropper = new Cropper(image, {
            minContainerHeight: 500
        });
    }

    function imageBackgroundInputChanged_page_19_2() {
        var form_data = new FormData();
        form_data.append("file", $("#imageBackgroundInput-page-19-2")[0].files[0]);
        $.ajax({
            url: '/uploadimage',
            data: form_data,
            type: 'post',
            cache: false,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-Token': $('[name="_token"]').val()
            },
            success: function(output) {
                $("#imageBackground-page-19-2").attr('src', 'uploadedimages/' + output)
                getBase64Image(document.getElementById("imageBackground-page-19-2"), function(base64) {
                    $("#testimonial-2-img").attr('src', 'uploadedimages/' + output)
                    $("input[name=page_19_img_2]").val('uploadedimages/' + output);
                });
            }
        });
    }

    function cropImage_page_19_2() {
        cropper.getCroppedCanvas().toBlob((blob) => {
            console.log("getCroppedCanvas")
            const form_data = new FormData();
            form_data.append('file', blob, 'example.png');
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: 'post',
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-Token': $('[name="_token"]').val()
                },
                success: function(output) {
                    cropper.destroy();
                    $("#imageBackground-page-19-2").attr('src', 'uploadedimages/' + output)
                    getBase64Image(document.getElementById("imageBackground-page-19-2"), function(base64) {
                        $("#testimonial-2-img").attr('src', 'uploadedimages/' + output)
                        $("input[name=page_19_img_2]").val('uploadedimages/' + output);
                    });
                    $(".page-18").css("display", "block");
                }
            });

        } /*, 'image/png' */ );
    }

    function startCropper_page_19_3() {
        var image = document.getElementById("imageBackground-page-19-3");
        $(".page-18").css("display", "none");
        cropper = new Cropper(image, {
            minContainerHeight: 500
        });
    }

    function imageBackgroundInputChanged_page_19_3() {
        var form_data = new FormData();
        form_data.append("file", $("#imageBackgroundInput-page-19-3")[0].files[0]);
        $.ajax({
            url: '/uploadimage',
            data: form_data,
            type: 'post',
            cache: false,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-Token': $('[name="_token"]').val()
            },
            success: function(output) {
                $("#imageBackground-page-19-3").attr('src', 'uploadedimages/' + output)
                getBase64Image(document.getElementById("imageBackground-page-19-3"), function(base64) {
                    $("#testimonial-3-img").attr('src', 'uploadedimages/' + output)
                    $("input[name=page_19_img_3]").val('uploadedimages/' + output);
                });
            }
        });
    }

    function cropImage_page_19_3() {
        cropper.getCroppedCanvas().toBlob((blob) => {
            console.log("getCroppedCanvas")
            const form_data = new FormData();
            form_data.append('file', blob, 'example.png');
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: 'post',
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-Token': $('[name="_token"]').val()
                },
                success: function(output) {
                    cropper.destroy();
                    $("#imageBackground-page-19-3").attr('src', 'uploadedimages/' + output)
                    getBase64Image(document.getElementById("imageBackground-page-19-3"), function(base64) {
                        $("#testimonial-3-img").attr('src', 'uploadedimages/' + output)
                        $("input[name=page_19_img_3]").val('uploadedimages/' + output);
                    });
                    $(".page-18").css("display", "block");
                }
            });

        } /*, 'image/png' */ );
    }

    function startCropper_page_16_2_1() {
        var image = document.getElementById("imageBackground-page-16-2-1");
        $(".page-16-2 ").css("display", "none");
        cropper = new Cropper(image, {
            minContainerHeight: 500
        });
    }

    function imageBackgroundInputChanged_page_16_2_1() {
        var form_data = new FormData();
        form_data.append("file", $("#imageBackgroundInput-page-16-2-1")[0].files[0]);
        $.ajax({
            url: '/uploadimage',
            data: form_data,
            type: 'post',
            cache: false,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-Token': $('[name="_token"]').val()
            },
            success: function(output) {
                $("#imageBackground-page-16-2-1").attr('src', 'uploadedimages/' + output)
                getBase64Image(document.getElementById("imageBackground-page-16-2-1"), function(base64) {
                    $("#page-16-2-img-1").attr('src', 'uploadedimages/' + output)
                    $("input[name=page_16_2_img_1]").val('uploadedimages/' + output);
                });
            }
        });
    }

    function cropImage_page_16_2_1() {
        cropper.getCroppedCanvas().toBlob((blob) => {
            console.log("getCroppedCanvas")
            const form_data = new FormData();
            form_data.append('file', blob, 'example.png');
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: 'post',
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-Token': $('[name="_token"]').val()
                },
                success: function(output) {
                    cropper.destroy();
                    $("#imageBackground-page-16-2-1").attr('src', 'uploadedimages/' + output)
                    getBase64Image(document.getElementById("imageBackground-page-16-2-1"), function(base64) {
                        $("#page-16-2-img-1").attr('src', 'uploadedimages/' + output)
                        $("input[name=page_16_2_img_1]").val('uploadedimages/' + output);
                    });
                    $(".page-16-2").css("display", "block");
                }
            });

        } /*, 'image/png' */ );
    }

    function startCropper_page_16_2_2() {
        var image = document.getElementById("imageBackground-page-16-2-2");
        $(".page-16-2").css("display", "none");
        cropper = new Cropper(image, {
            minContainerHeight: 500
        });
    }

    function imageBackgroundInputChanged_page_16_2_2() {
        var form_data = new FormData();
        form_data.append("file", $("#imageBackgroundInput-page-16-2-2")[0].files[0]);
        $.ajax({
            url: '/uploadimage',
            data: form_data,
            type: 'post',
            cache: false,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-Token': $('[name="_token"]').val()
            },
            success: function(output) {
                $("#imageBackground-page-16-2-2").attr('src', 'uploadedimages/' + output)
                getBase64Image(document.getElementById("imageBackground-page-16-2-2"), function(base64) {
                    $("#page-16-2-img-2").attr('src', 'uploadedimages/' + output)
                    $("input[name=page_16_2_img_2]").val('uploadedimages/' + output);
                });
            }
        });
    }

    function cropImage_page_16_2_2() {
        cropper.getCroppedCanvas().toBlob((blob) => {
            console.log("getCroppedCanvas")
            const form_data = new FormData();
            form_data.append('file', blob, 'example.png');
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: 'post',
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-Token': $('[name="_token"]').val()
                },
                success: function(output) {
                    cropper.destroy();
                    $("#imageBackground-page-16-2-2").attr('src', 'uploadedimages/' + output)
                    getBase64Image(document.getElementById("imageBackground-page-16-2-2"), function(base64) {
                        $("#page-16-2-img-2").attr('src', 'uploadedimages/' + output)
                        $("input[name=page_16_2_img_2]").val('uploadedimages/' + output);
                    });
                    $(".page-16-2").css("display", "block");
                }
            });

        } /*, 'image/png' */ );
    }

    function startCropper_page_16_2_3() {
        var image = document.getElementById("imageBackground-page-16-2-3");
        $(".page-16-2").css("display", "none");
        cropper = new Cropper(image, {
            minContainerHeight: 500
        });
    }

    function imageBackgroundInputChanged_page_16_2_3() {
        var form_data = new FormData();
        form_data.append("file", $("#imageBackgroundInput-page-16-2-3")[0].files[0]);
        $.ajax({
            url: '/uploadimage',
            data: form_data,
            type: 'post',
            cache: false,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-Token': $('[name="_token"]').val()
            },
            success: function(output) {
                $("#imageBackground-page-16-2-3").attr('src', 'uploadedimages/' + output)
                getBase64Image(document.getElementById("imageBackground-page-16-2-3"), function(base64) {
                    $("#page-16-2-img-3").attr('src', 'uploadedimages/' + output)
                    $("input[name=page_16_2_img_3]").val('uploadedimages/' + output);
                });
            }
        });
    }

    function cropImage_page_16_2_3() {
        cropper.getCroppedCanvas().toBlob((blob) => {
            console.log("getCroppedCanvas")
            const form_data = new FormData();
            form_data.append('file', blob, 'example.png');
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: 'post',
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-Token': $('[name="_token"]').val()
                },
                success: function(output) {
                    cropper.destroy();
                    $("#imageBackground-page-16-2-3").attr('src', 'uploadedimages/' + output)
                    getBase64Image(document.getElementById("imageBackground-page-16-2-3"), function(base64) {
                        $("#page-16-2-img-3").attr('src', 'uploadedimages/' + output)
                        $("input[name=page_16_2_img_3]").val('uploadedimages/' + output);
                    });
                    $(".page-16-2").css("display", "block");
                }
            });

        } /*, 'image/png' */ );
    }

    function startCropper_page_16_2_4() {
        var image = document.getElementById("imageBackground-page-16-2-4");
        $(".page-16-2").css("display", "none");
        cropper = new Cropper(image, {
            minContainerHeight: 500
        });
    }

    function imageBackgroundInputChanged_page_16_2_4() {
        var form_data = new FormData();
        form_data.append("file", $("#imageBackgroundInput-page-16-2-4")[0].files[0]);
        $.ajax({
            url: '/uploadimage',
            data: form_data,
            type: 'post',
            cache: false,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-Token': $('[name="_token"]').val()
            },
            success: function(output) {
                $("#imageBackground-page-16-2-4").attr('src', 'uploadedimages/' + output)
                getBase64Image(document.getElementById("imageBackground-page-16-2-4"), function(base64) {
                    $("#page-16-2-img-4").attr('src', 'uploadedimages/' + output)
                    $("input[name=page_16_2_img_4]").val('uploadedimages/' + output);
                });
            }
        });
    }

    function cropImage_page_16_2_4() {
        cropper.getCroppedCanvas().toBlob((blob) => {
            console.log("getCroppedCanvas")
            const form_data = new FormData();
            form_data.append('file', blob, 'example.png');
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: 'post',
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-Token': $('[name="_token"]').val()
                },
                success: function(output) {
                    cropper.destroy();
                    $("#imageBackground-page-16-2-4").attr('src', 'uploadedimages/' + output)
                    getBase64Image(document.getElementById("imageBackground-page-16-2-4"), function(base64) {
                        $("#page-16-2-img-4").attr('src', 'uploadedimages/' + output)
                        $("input[name=page_16_2_img_4]").val('uploadedimages/' + output);
                    });
                    $(".page-16-2").css("display", "block");
                }
            });

        } /*, 'image/png' */ );
    }


    function startCropper_page_17_2_1() {
        var image = document.getElementById("imageBackground-page-17-2-1");
        $(".page-17-2").css("display", "none");
        cropper = new Cropper(image, {
            minContainerHeight: 500
        });
    }

    function imageBackgroundInputChanged_page_17_2_1() {
        var form_data = new FormData();
        form_data.append("file", $("#imageBackgroundInput-page-17-2-1")[0].files[0]);
        $.ajax({
            url: '/uploadimage',
            data: form_data,
            type: 'post',
            cache: false,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-Token': $('[name="_token"]').val()
            },
            success: function(output) {
                $("#imageBackground-page-17-2-1").attr('src', 'uploadedimages/' + output)
                getBase64Image(document.getElementById("imageBackground-page-17-2-1"), function(base64) {
                    $("#page-17-2-img-1").attr('src', 'uploadedimages/' + output)
                    $("input[name=page_17_2_img_1]").val('uploadedimages/' + output);
                });
            }
        });
    }

    function cropImage_page_17_2_1() {
        cropper.getCroppedCanvas().toBlob((blob) => {
            console.log("getCroppedCanvas")
            const form_data = new FormData();
            form_data.append('file', blob, 'example.png');
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: 'post',
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-Token': $('[name="_token"]').val()
                },
                success: function(output) {
                    cropper.destroy();
                    $("#imageBackground-page-17-2-1").attr('src', 'uploadedimages/' + output)
                    getBase64Image(document.getElementById("imageBackground-page-17-2-1"), function(base64) {
                        $("#page-17-2-img-1").attr('src', 'uploadedimages/' + output)
                        $("input[name=page_17_2_img_1]").val('uploadedimages/' + output);
                    });
                    $(".page-17-2").css("display", "block");
                }
            });

        } /*, 'image/png' */ );
    }

    function startCropper_page_17_2_2() {
        var image = document.getElementById("imageBackground-page-17-2-2");
        $(".page-17-2").css("display", "none");
        cropper = new Cropper(image, {
            minContainerHeight: 500
        });
    }

    function imageBackgroundInputChanged_page_17_2_2() {
        var form_data = new FormData();
        form_data.append("file", $("#imageBackgroundInput-page-17-2-2")[0].files[0]);
        $.ajax({
            url: '/uploadimage',
            data: form_data,
            type: 'post',
            cache: false,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-Token': $('[name="_token"]').val()
            },
            success: function(output) {
                $("#imageBackground-page-17-2-2").attr('src', 'uploadedimages/' + output)
                getBase64Image(document.getElementById("imageBackground-page-17-2-2"), function(base64) {
                    $("#page-17-2-img-2").attr('src', 'uploadedimages/' + output)
                    $("input[name=page_17_2_img_2]").val('uploadedimages/' + output);
                });
            }
        });
    }

    function cropImage_page_17_2_2() {
        cropper.getCroppedCanvas().toBlob((blob) => {
            console.log("getCroppedCanvas")
            const form_data = new FormData();
            form_data.append('file', blob, 'example.png');
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: 'post',
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-Token': $('[name="_token"]').val()
                },
                success: function(output) {
                    cropper.destroy();
                    $("#imageBackground-page-17-2-2").attr('src', 'uploadedimages/' + output)
                    getBase64Image(document.getElementById("imageBackground-page-17-2-2"), function(base64) {
                        $("#page-17-2-img-2").attr('src', 'uploadedimages/' + output)
                        $("input[name=page_17_2_img_2]").val('uploadedimages/' + output);
                    });
                    $(".page-17-2").css("display", "block");
                }
            });

        } /*, 'image/png' */ );
    }

    function startCropper_page_17_2_3() {
        var image = document.getElementById("imageBackground-page-17-2-3");
        $(".page-17-2").css("display", "none");
        cropper = new Cropper(image, {
            minContainerHeight: 500
        });
    }

    function imageBackgroundInputChanged_page_17_2_3() {
        var form_data = new FormData();
        form_data.append("file", $("#imageBackgroundInput-page-17-2-3")[0].files[0]);
        $.ajax({
            url: '/uploadimage',
            data: form_data,
            type: 'post',
            cache: false,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-Token': $('[name="_token"]').val()
            },
            success: function(output) {
                $("#imageBackground-page-17-2-3").attr('src', 'uploadedimages/' + output)
                getBase64Image(document.getElementById("imageBackground-page-17-2-3"), function(base64) {
                    $("#page-17-2-img-3").attr('src', 'uploadedimages/' + output)
                    $("input[name=page_17_2_img_3]").val('uploadedimages/' + output);
                });
            }
        });
    }

    function cropImage_page_17_2_3() {
        cropper.getCroppedCanvas().toBlob((blob) => {
            console.log("getCroppedCanvas")
            const form_data = new FormData();
            form_data.append('file', blob, 'example.png');
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: 'post',
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-Token': $('[name="_token"]').val()
                },
                success: function(output) {
                    cropper.destroy();
                    $("#imageBackground-page-17-2-3").attr('src', 'uploadedimages/' + output)
                    getBase64Image(document.getElementById("imageBackground-page-17-2-3"), function(base64) {
                        $("#page-17-2-img-3").attr('src', 'uploadedimages/' + output)
                        $("input[name=page_17_2_img_3]").val('uploadedimages/' + output);
                    });
                    $(".page-17-2").css("display", "block");
                }
            });

        } /*, 'image/png' */ );
    }

    function startCropper_page_17_2_4() {
        var image = document.getElementById("imageBackground-page-17-2-4");
        $(".page-17-2").css("display", "none");
        cropper = new Cropper(image, {
            minContainerHeight: 500
        });
    }

    function imageBackgroundInputChanged_page_17_2_4() {
        var form_data = new FormData();
        form_data.append("file", $("#imageBackgroundInput-page-17-2-4")[0].files[0]);
        $.ajax({
            url: '/uploadimage',
            data: form_data,
            type: 'post',
            cache: false,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-Token': $('[name="_token"]').val()
            },
            success: function(output) {
                $("#imageBackground-page-17-2-4").attr('src', 'uploadedimages/' + output)
                getBase64Image(document.getElementById("imageBackground-page-17-2-4"), function(base64) {
                    $("#page-17-2-img-4").attr('src', 'uploadedimages/' + output)
                    $("input[name=page_17_2_img_4]").val('uploadedimages/' + output);
                });
            }
        });
    }

    function cropImage_page_17_2_4() {
        cropper.getCroppedCanvas().toBlob((blob) => {
            console.log("getCroppedCanvas")
            const form_data = new FormData();
            form_data.append('file', blob, 'example.png');
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: 'post',
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-Token': $('[name="_token"]').val()
                },
                success: function(output) {
                    cropper.destroy();
                    $("#imageBackground-page-17-2-4").attr('src', 'uploadedimages/' + output)
                    getBase64Image(document.getElementById("imageBackground-page-17-2-4"), function(base64) {
                        $("#page-17-2-img-4").attr('src', 'uploadedimages/' + output)
                        $("input[name=page_17_2_img_4]").val('uploadedimages/' + output);
                    });
                    $(".page-17-2").css("display", "block");
                }
            });

        } /*, 'image/png' */ );
    }
</script>

</html>