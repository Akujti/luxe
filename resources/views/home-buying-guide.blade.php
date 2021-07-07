<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Buying Guide</title>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Lato:300,400,700');
        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@900&display=swap');

        * {
            font-family: 'Lato';
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p {
            margin: 0;
        }

        h1 {
            font-size: 80px;
            line-height: 45px;
        }

        h4 {
            font-size: 45px;
            line-height: 25px;
        }

        .page_break {
            page-break-before: always;
        }

        @page {
            padding: 0px;
            margin: 0px;
        }

        body {
            padding: 0px;
            margin: 0px;
        }

        .page-background {
            background-repeat: no-repeat;
            background-size: cover;
            height: 100%;
            position: absolute;
            bottom: 0px;
            width: 100%;
        }

        .black {
            color: black !important;
        }

        .gold {
            color: #C9A668 !important;
        }

        .white {
            color: white !important;
        }

        .font-thin {
            font-weight: 300;
        }

        .font-regular {
            font-weight: 400;
        }

        .font-700 {
            font-weight: 700
        }

        .font-bold {
            font-weight: 900;
        }

        .font-size-20 {
            font-size: 20px;
        }

        .font-size-25 {
            font-size: 25px;
        }

        .text-center {
            text-align: center;
        }

        .absolute {
            position: absolute;
        }

        .background-right {
            background-position: right;
        }

        .background-left {
            background-position: left;
        }

        .background-center {
            background-position: center;
        }

        .float-right {
            float: right;
        }

        .list-style-none {
            list-style: none;
        }

        .mb-10 {
            margin-bottom: 10px;
        }

        .mb-15 {
            margin-bottom: 15px;
        }

        .mb-20 {
            margin-bottom: 20px;
        }

        .mb-25 {
            margin-bottom: 25px;
        }

        .mb-30 {
            margin-bottom: 30px;
        }

        .mb-35 {
            margin-bottom: 35px;
        }

        .mb-40 {
            margin-bottom: 40px;
        }

        .mb-50 {
            margin-bottom: 50px;
        }

        .mb-60 {
            margin-bottom: 60px;
        }

        .mb-70 {
            margin-bottom: 70px;
        }

        .mb-80 {
            margin-bottom: 80px;
        }

        .mb-100 {
            margin-bottom: 100px;
        }

        .mb-150 {
            margin-bottom: 150px;
        }

        .page-bottom {
            position: absolute;
            bottom: 0px;
            width: 100%;
        }

        .big-title {
            letter-spacing: 15px;
            font-size: 120px;
        }

        h1.cover-page {
            font-size: 170px;
            line-height: 160px;
            font-weight: 300;
            margin: -10px 0;
        }

        h2.cover-page {
            font-size: 72px;
            line-height: 67px;
            font-weight: 900;
            padding-left: 13px;
            letter-spacing: -4px;
            margin-top: -15px;
            margin-bottom: 2px;
        }

        .text-20 {
            font-size: 20px;
        }

        .page-number {
            height: 17%;
            position: absolute;
            background-repeat: no-repeat;
            background-size: auto;
            background-position: right;
            text-align: right;
        }

        .page-number h2 {
            font-size: 40px;
            line-height: 25px;
        }

        .page-number h3 {
            font-size: 40px;
            line-height: 25px;
        }

        .page-number h4 {
            font-size: 20px;
            line-height: 12px;
        }

        h2.cover-page-thin {
            font-size: 70px;
            margin-left: 100px;
        }

        h1.cover-page-thin {
            font-size: 120px;
        }

        ul.golden-list {
            list-style: none;
            width: 80%;
        }

        ul.golden-list li {
            font-size: 18px;
        }

        ul.golden-list li::before {
            content: "\2022";
            margin-right: 15px;
            color: #C9A668;
        }

        img.half-page-img {
            object-fit: cover;
            width: 100%;
        }

        img.half-page-img-2 {
            object-fit: cover;
            width: 100%;
            height: 560px;
        }

        .absolute {
            position: absolute;
        }
    </style>
</head>

<body>
    <div class="page page-1">
        <div class="container">
            <div class="absolute" style="top:30%;left:20px;">
                <h1 class="big-title font-thin mb-40">{{$page_1_text_1}}</h1>
                <h1 class="big-title gold font-thin mb-40" style="font-size: 160px;line-height:70px;">
                    {{$page_1_text_2}} </h1>
                <h1 class="big-title gold font-thin mb-20" style="font-size: 160px;line-height:70px;">{{$page_1_text_3}}
                </h1>
                <h1 class="font-thin" style="letter-spacing: 50px;">{{$page_1_text_4}}</h1>
            </div>
            <div class="page-bottom text-center">
                <img src="images/Asset 1.png" alt="">
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-2 page-background" style="background-image:url('{{$page_2_img_1}}')">
        <div class="container">
            <div class="absolute" style="top:37%;">
                <h1 class="cover-page gold">LUXE</h1>
                <h2 class="cover-page white">PROPERTIES</h2>
            </div>
        </div>
    </div>

    <div class="page_break"></div>


    <div class="page page-3 page-background" style="background-image:url('images/single-property/page-3.png')">
        <div class="container">
            <div class="absolute" style="top:5%;left:50px;">
                <h2 class="font-thin mb-20" style="font-size:45px;">{{$page_3_text_1}}</h2>
                <h1 class="gold font-thin mb-20" style="font-size:105px;">{{$page_3_text_2}}</h1>
                <h1 class="font-thin" style="font-size:105px;">{{$page_3_text_3}}</h1>
            </div>

            <div class="absolute" style="top:18%;left:250px;width:450px;">
                <p class="font-thin text-20">{{$page_3_text_4}}</p>
                <br>
                <p class="font-thin text-20">{{$page_3_text_5}}</p>
            </div>

            <div class="page-number" style="background-image: url('images/single-property/02.png');top:37%;">
                <div class="text" style="margin-top: 150px;margin-right: 150px;">
                    <h4 class="font-thin">THE HOME</h4>
                    <h3 class="font-thin gold">BUYING</h3>
                    <h2 class="font-thin">GUIDE</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-4">
        <div class="container" style="margin-left: 50px;">
            <h2 class="cover-page-thin font-thin mb-10">Our</h2>
            <h1 class="cover-page-thin font-thin gold">Commitment</h1>
            <hr class="gold">
            <h2 class="gold">{{$page_4_text_1}}</h2>
            <ul style="list-style-image: url('images/home-buying/check.png');width:80%;">
                <?php $page_4_text_2_array = explode("\n", $page_4_text_2); ?>
                @foreach ($page_4_text_2_array as $string_array)

                <li class="font-thin">{{$string_array}}
                </li>
                @endforeach
            </ul>
            <h2 class="gold">{{$page_4_text_3}}</h2>
            <ul style="list-style-image: url('images/home-buying/check.png');width:80%;">
                <?php $page_4_text_4_array = explode("\n", $page_4_text_4); ?>
                @foreach ($page_4_text_4_array as $string_array)

                <li class="font-thin">{{$string_array}}
                </li>
                @endforeach
            </ul>
            <h2 class="gold">{{$page_4_text_5}}</h2>
            <ul style="list-style-image: url('images/home-buying/check.png');width:80%;">
                <?php $page_4_text_6_array = explode("\n", $page_4_text_6); ?>
                @foreach ($page_4_text_6_array as $string_array)

                <li class="font-thin">{{$string_array}}
                </li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-5 page-background" style="background-image:url('{{$page_5_img_1}}')">
        <div class="container">
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-6 page-background" style="background-image:url('{{$page_6_img_1}}')">
        <div class="container">
            <div class="absolute" style="top:37%;">
                <h2 class="cover-page-thin font-thin" style="font-size: 40px;margin-left:152px;margin-bottom:30px;">The
                    Home</h2>
                <h1 class="big-title gold">Buying</h1>
                <h1 class="font-thin" style="margin-left: 250px;margin-top:10px;">Process</h1>
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-7 page-background" style="background-image:url('{{$page_7_img_1}}')">
        <div class="container">
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-8 page-background"
        style="background-image:url('images/home-buying/page-8.jpg');background-position:center;">
        <div class="container">
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-9 page-background"
        style="background-image:url('images/home-buying/page-9.jpg');background-position: -700px -5px;">
        <div class="container" style="margin-left: 170px;">
            <h2 class="white" style="background-color: #C9A668;">{{$page_9_text_1}}</h2>

            <ul class="golden-list">
                <?php $page_9_text_2_array = explode("\n", $page_9_text_2); ?>
                @foreach ($page_9_text_2_array as $string_array)
                <li class="font-thin">{{$string_array}}
                </li>
                @endforeach
            </ul>

            <div class="page-number" style="background-image: url('images/home-buying/08.png');top:37%;">
                <div class="text" style="margin-top: 150px;margin-right: 150px;">
                    <h4 class="font-thin">THE HOME</h4>
                    <h3 class="font-thin gold">BUYING</h3>
                    <h2 class="font-thin">GUIDE</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-10 page-background" style="background-image:url('{{$page_10_img_1}}');">
        <div class="container">
            <div class="absolute" style="top:35%;left:50px;right:100px;">
                <h2 class="font-thin white" style="font-size:80px;">Types Of</h2>
                <h1 class="font-thin gold" style="font-size:150px;margin-top:60px;">Loans</h1>
                <hr class="gold">
                <p class="white">**Some homes in poor condition, with title issues or in need of a fast sale may be
                    “cash only”.
                    Additionally, some condo buildings will not qualify for all loan types.</p>
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-11 page-background" style="background-image:url('images/single-property/page-3.png')">
        <div class="container" style="padding-left:10px;">
            <h2 class="font-thin" style="font-size:40px">{{$page_11_text_1}}</h2>
            <hr>
            <p class="font-thin">{{$page_11_text_2}}</p>

            <h2 class="gold" style="margin-bottom: -20px;">{{$page_11_text_3}}</h2>
            <ul style="list-style-image: url('images/home-buying/check.png');">
                <?php $page_11_text_4_array = explode("\n", $page_11_text_4); ?>
                @foreach ($page_11_text_4_array as $string_array)
                <li class="font-thin">{{$string_array}}
                </li>
                @endforeach
            </ul>

            <h2 class="gold" style="margin-bottom: -20px;margin-top: -10px;">{{$page_11_text_5}}</h2>
            <ul style="list-style-image: url('images/home-buying/check.png');">
                <?php $page_11_text_6_array = explode("\n", $page_11_text_6); ?>
                @foreach ($page_11_text_6_array as $string_array)
                <li class="font-thin">{{$string_array}}
                </li>
                @endforeach
            </ul>

            <h2 class="gold" style="margin-bottom: -20px;margin-top: -10px;">{{$page_11_text_7}}</h2>
            <ul style="list-style-image: url('images/home-buying/check.png');">
                <?php $page_11_text_8_array = explode("\n", $page_11_text_8); ?>
                @foreach ($page_11_text_8_array as $string_array)
                <li class="font-thin">{{$string_array}}
                </li>
                @endforeach
            </ul>

            <h2 class="gold" style="margin-bottom: -20px;margin-top: -10px;">{{$page_11_text_9}}</h2>
            <ul style="list-style-image: url('images/home-buying/check.png');">
                <?php $page_11_text_10_array = explode("\n", $page_11_text_10); ?>
                @foreach ($page_11_text_10_array as $string_array)
                <li class="font-thin">{{$string_array}}
                </li>
                @endforeach
            </ul>

            <h2 class="gold" style="margin-bottom: -20px;margin-top: -10px;">{{$page_11_text_11}}</h2>
            <ul style="list-style-image: url('images/home-buying/check.png');">
                <?php $page_11_text_12_array = explode("\n", $page_11_text_12); ?>
                @foreach ($page_11_text_12_array as $string_array)
                <li class="font-thin">{{$string_array}}
                </li>
                @endforeach
            </ul>

            <h2 class="gold" style="margin-bottom: -20px;margin-top: -10px;">{{$page_11_text_13}}</h2>
            <ul style="list-style-image: url('images/home-buying/check.png');">
                <?php $page_11_text_14_array = explode("\n", $page_11_text_14); ?>
                @foreach ($page_11_text_14_array as $string_array)
                <li class="font-thin">{{$string_array}}
                </li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-12">
        <div class="container">
            <div class="absolute" style="top: 0">
                <img class="half-page-img-2" src="{{$page_12_img_1}}" alt="">
            </div>
            <div class="absolute" style="bottom: 0">
                <img class="half-page-img-2" src="{{$page_12_img_2}}" alt="">
            </div>
            <div class="absolute" style="top: 350px;left:250px;">
                <img src="images/home-buying/page-12-3.png" alt="" width="300px">
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-13">
        <div class="container" style="padding:30px;">
            <p class="font-thin" style="font-size:30px;"><?php echo $page_13_text_1 ?></p>
            <h1 class="gold" style="font-size:35px;">{{$page_13_text_2}}</h1>
            <p>{{$page_13_text_3}}</p>
            <ul style="list-style-image: url('images/home-buying/check.png');">
                <li class="gold" style="font-size:25px;margin-bottom:-18px;">{{$page_13_text_4}}</li>
            </ul>
            <ul class="golden-list">
                <?php $page_13_text_5_array = explode("\n", $page_13_text_5); ?>
                @foreach ($page_13_text_5_array as $string_array)
                <li class="font-thin">{{$string_array}}
                </li>
                @endforeach
            </ul>
            <ul style="list-style-image: url('images/home-buying/check.png');">
                <li class="gold" style="font-size:25px;margin-bottom:-18px;">{{$page_13_text_6}}</li>
            </ul>
            <ul class="golden-list">
                <?php $page_13_text_7_array = explode("\n", $page_13_text_7); ?>
                @foreach ($page_13_text_7_array as $string_array)
                <li class="font-thin">{{$string_array}}
                </li>
                @endforeach
            </ul>

            <h1 class="gold" style="font-size:35px;">{{$page_13_text_8}}</h1>
            <p>{{$page_13_text_9}}</p>
            <ul style="list-style-image: url('images/home-buying/check.png');">
                <li class="gold" style="font-size:25px;margin-bottom:-18px;">{{$page_13_text_10}}</li>
            </ul>
            <ul class="golden-list">
                <?php $page_13_text_11_array = explode("\n", $page_13_text_11); ?>
                @foreach ($page_13_text_11_array as $string_array)
                <li class="font-thin">{{$string_array}}
                </li>
                @endforeach
            </ul>
            <ul style="list-style-image: url('images/home-buying/check.png');">
                <li class="gold" style="font-size:25px;margin-bottom:-18px;">{{$page_13_text_12}}</li>
            </ul>
            <ul class="golden-list">
                <?php $page_13_text_13_array = explode("\n", $page_13_text_13); ?>
                @foreach ($page_13_text_13_array as $string_array)
                <li class="font-thin">{{$string_array}}
                </li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-14 page-background" style="background-image:url('{{$page_14_img_1}}')">
        <div class="container">
            <div class="absolute" style="top:65%;">
                <h2 class="white font-thin" style="font-size:100px;margin-left:110px;margin-bottom:15px;">HOA’s &</h2>
                <h1 class="gold font-thin" style="font-size:180px;">Condo’s</h1>
            </div>
        </div>
    </div>

    <div class="page_break"></div>
    <div
        style="top:0;bottom:0;right:550px;position:absolute;background-image: url('{{$page_14_img_1}}');background-size: cover;background-position:bottom right;background-repeat: no-repeat;height:100%">
        <h1></h1>
    </div>

    <div class="page page-15 page-background" style="background-position:-600px;">
        <div class="container" style="margin-left:300px;margin-top:30px;">
            <p class="font-thin" style="font-size:22px;">{{$page_15_text_1}}</p>
            <h1 class="gold" style="font-size:35px;font-weight:900;">{{$page_15_text_2}}</h1>
            <ul style="list-style-image: url('images/home-buying/check.png');">
                <?php $page_15_text_3_array = explode("\n", $page_15_text_3); ?>
                @foreach ($page_15_text_3_array as $string_array)
                <li class="font-thin">{{$string_array}}</li>
                @endforeach
            </ul>

            <h1 class="gold" style="font-size:35px;font-weight:900;">{{$page_15_text_4}}</h1>
            <ul style="list-style-image: url('images/home-buying/check.png');">
                <?php $page_15_text_5_array = explode("\n", $page_15_text_6); ?>
                @foreach ($page_15_text_5_array as $string_array)
                <li class="font-thin">{{$string_array}}</li>
                @endforeach
            </ul>

            <div class="page-number" style="background-image: url('images/single-property/14.png');top:37%;">
                <div class="text" style="margin-top: 150px;margin-right: 150px;">
                    <h4 class="font-thin">THE HOME</h4>
                    <h3 class="font-thin gold">BUYING</h3>
                    <h2 class="font-thin">GUIDE</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-16 page-background" style="background-image:url('{{$page_16_img_1}}')">
        <div class="container">
            <div class="absolute" style="top:800px;">
                <h2 class="white font-thin"
                    style="font-size:50px;margin-left:110px;margin-bottom:15px;text-align:right;">What are</h2>
                <h1 class="gold font-thin" style="font-size:90px;text-align:right;">Foreclosures</h1>
                <h2 class="white font-thin"
                    style="font-size:60px;margin-right:110px;margin-top:-15px;text-align:right;">Short Sales?</h2>
                <h2 class="white font-thin absolute" style="font-size:160px;left:25%;top:25px;">&</h2>
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div
        style="top:0;bottom:0;right:550px;position:absolute;background-image: url('{{$page_16_img_1}}');background-size: cover;background-position:bottom right;background-repeat: no-repeat;height:100%">
        <h1></h1>
    </div>
    <div class="page page-17 page-background" style="background-position:-600px;">
        <div class="container" style="margin-left:300px;margin-top:30px;">
            <h1 class="gold" style="font-size:35px;font-weight:900;">{{$page_17_text_1}}</h1>
            <ul style="list-style-image: url('images/home-buying/check.png');">
                <?php $page_17_text_2_array = explode("\n", $page_17_text_2); ?>
                @foreach ($page_17_text_2_array as $string_array)
                <li class="font-thin">{{$string_array}}</li>
                @endforeach
            </ul>

            <h1 class="gold" style="font-size:35px;font-weight:900;">{{$page_17_text_3}}</h1>
            <ul style="list-style-image: url('images/home-buying/check.png');">
                <?php $page_17_text_4_array = explode("\n", $page_17_text_4); ?>
                @foreach ($page_17_text_4_array as $string_array)
                <li class="font-thin">{{$string_array}}</li>
                @endforeach
            </ul>

            <h1 class="gold" style="font-size:35px;font-weight:900;">{{$page_17_text_5}}</h1>
            <ul style="list-style-image: url('images/home-buying/check.png');">
                <?php $page_17_text_6_array = explode("\n", $page_17_text_6); ?>
                @foreach ($page_17_text_6_array as $string_array)
                <li class="font-thin">{{$string_array}}</li>
                @endforeach
            </ul>

            <div class="page-number" style="background-image: url('images/home-buying/16.png');top:37%;">
                <div class="text" style="margin-top: 150px;margin-right: 150px;">
                    <h4 class="font-thin">THE HOME</h4>
                    <h3 class="font-thin gold">BUYING</h3>
                    <h2 class="font-thin">GUIDE</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-18 page-background" style="background-image:url('{{$page_18_img_1}}')">
        <div class="container">
            <div class="absolute" style="top:800px;">
                <h2 class="white font-thin" style="font-size:50px;margin-left:140px;margin-bottom:15px;">The</h2>
                <h1 class="gold font-thin" style="font-size:150px;">Contract</h1>
                <h2 class="white font-thin" style="font-size:70px;margin-left:110px;margin-top:-15px;text-align:right;">
                    Guidelines</h2>
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div
        style="top:0;bottom:0;right:550px;position:absolute;background-image: url('{{$page_18_img_1}}');background-size: cover;background-position:bottom right;background-repeat: no-repeat;height:100%">
        <h1></h1>
    </div>
    <div class="page page-19 page-background" style="background-position:-600px;">
        <div class="container" style="margin-left:300px;margin-top:30px;">
            <h1 class="gold font-bold" style="font-size:25px;">{{$page_19_text_1}}</h1>
            <ul style="list-style-image: url('images/home-buying/check.png');">
                <li class="gold font-bold" style="font-size: 20px;">{{$page_19_text_2}}</li>
                <p class="font-thin">{{$page_19_text_3}}</p>
            </ul>
            <ul style="list-style-image: url('images/home-buying/check.png');">
                <li class="gold font-bold" style="font-size: 20px;">{{$page_19_text_4}}</li>
                <p class="font-thin">{{$page_19_text_5}}</p>
            </ul>
            <ul style="list-style-image: url('images/home-buying/check.png');">
                <li class="gold font-bold" style="font-size: 20px;">{{$page_19_text_6}}</li>
                <p class="font-thin">{{$page_19_text_7}}</p>
            </ul>
            <ul style="list-style-image: url('images/home-buying/check.png');">
                <li class="gold font-bold" style="font-size: 20px;">{{$page_19_text_8}}</li>
                <p class="font-thin">{{$page_19_text_9}}</p>
            </ul>
            <ul style="list-style-image: url('images/home-buying/check.png');">
                <li class="gold font-bold" style="font-size: 20px;">{{$page_19_text_10}}</li>
                <p class="font-thin">{{$page_19_text_11}}</p>
            </ul>
            <ul style="list-style-image: url('images/home-buying/check.png');">
                <li class="gold font-bold" style="font-size: 20px;">{{$page_19_text_12}}</li>
                <p class="font-thin">{{$page_19_text_13}}</p>
            </ul>
            <ul style="list-style-image: url('images/home-buying/check.png');">
                <li class="gold font-bold" style="font-size: 20px;">{{$page_19_text_14}}</li>
                <p class="font-thin">{{$page_19_text_15}}</p>
            </ul>
            <ul style="list-style-image: url('images/home-buying/check.png');">
                <li class="gold font-bold" style="font-size: 20px;">{{$page_19_text_16}}</li>
                <p class="font-thin">{{$page_19_text_17}}</p>
            </ul>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-20 page-background"
        style="background-image:url('{{$page_20_img_1}}');background-position:center;">
        <div class="container">
            <div class="absolute" style="top:800px;">
                <h2 class="white font-thin" style="font-size:40px;margin-left:40px;margin-bottom:30px;">Inspection,
                    Seller Disclosures &
                    Insurances</h2>
                <h1 class="gold font-thin" style="font-size:150px;margin-left:10px;">Insurances</h1>
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div
        style="top:0;bottom:0;right:550px;position:absolute;background-image: url('{{$page_20_img_1}}');background-size: cover;background-position:bottom right;background-repeat: no-repeat;height:100%">
        <h1></h1>
    </div>
    <div class="page page-21 page-background" style="background-position:-600px;">
        <div class="container" style="margin-left:300px;margin-top:30px;">
            <p class="font-thin" style="font-size: 25px;">{{$page_21_text_1}}</p>
            <p class="font-thin mb-40" style="font-size: 25px;">{{$page_21_text_2}}</p>
            <div class="mb-40">
                <img src="images/home-buying/1.png" alt="">
                <p class="font-thin mb-40 absolute" style="width:250px; top:250px;left:380px;">{{$page_21_text_3}}</p>
            </div>
            <div class="mb-40" style="margin-left: 50px;">
                <img src="images/home-buying/2.png" alt="">
                <p class="font-thin mb-40 absolute" style="width:250px; top:450px;left:460px;">{{$page_21_text_4}}</p>
            </div>
            <div class="mb-40" style="margin-left: 100px;">
                <img src="images/home-buying/3.png" alt="">
                <p class="font-thin mb-40 absolute" style="width:250px; top:650px;left:520px;">{{$page_21_text_5}}</p>
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-22">
        <div class="container">
            <div style="margin-left:50px;">
                <h2 class="font-thin mb-10" style="font-size: 40px;margin-left:100px;">Buyer Representation</h2>
                <h1 class="cover-page-thin font-thin gold">Agreement</h1>
                <hr class="gold mb-50">
                <div style="margin-left:100px;margin-right:50px;">
                    <p class="font-thin mb-20">{{$page_22_text_1}}</p>
                    <p class="font-thin">{{$page_22_text_2}} </p>
                </div>
            </div>
            <div class="absolute" style="bottom:0;">
                <img class="half-page-img" src="{{$page_22_img_1}}" alt="">
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-23 page-background"
        style="background-image:url('{{$page_22_img_1}}');background-position:-600px 650px; background-size:contain;">
        <div class="container" style="margin-left:250px;margin-top:80px;margin-right:30px;">
            <p class="font-thin mb-50" style="font-size:40px;width:500px;"><?php echo $page_23_text_1?></p>
            <p class="font-thin mb-50" style="font-size: 20px;">{{$page_23_text_2}}</p>
            <ul style="list-style-image: url('images/home-buying/check.png');">
                <?php $page_23_text_3_array = explode("\n", $page_23_text_3); ?>
                @foreach ($page_23_text_3_array as $string_array)
                <li class="font-thin" style="font-size: 20px;">{{$string_array}}</li>
                @endforeach
            </ul>

            <div class="page-number absolute"
                style="background-image: url('images/home-buying/22.png');top:850px; right:20px;;">
                <div class="text" style="margin-top: 100px;margin-right: 150px;">
                    <h4 class="font-thin">THE HOME</h4>
                    <h3 class="font-thin gold">BUYING</h3>
                    <h2 class="font-thin">GUIDE</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-24 page-background"
        style="background-image:url('{{$page_24_img_1}}');background-position:center;">
        <div class="container">
            <div class="absolute" style="top:30%;left:70px;">
                <h2 class="white font-thin" style="font-size:90px;margin-left:125px;margin-bottom:10px;">Meet</h2>
                <h1 class="gold font-thin" style="font-size:160px;">The Agent</h1>
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div
        style="top:0;bottom:0;right:550px;position:absolute;background-image: url('{{$page_24_img_1}}');background-size: cover;background-position:bottom right;background-repeat: no-repeat;height:100%">
        <h1></h1>
    </div>
    <div class="page page-25 page-background" style="background-position:-600px;">
        <div class="container" style="margin-left:280px;margin-top:30px;">
            <p class="font-thin gold"
                style="font-size:120px;margin-left:-165px;margin-bottom:-60px;white-space: nowrap">{{$page_25_text_1}}
            </p>
            <p class="font-thin" style="font-size:70px;">{{$page_25_text_2}}</p>
            <p class="font-thin mb-50" style="font-size:16px;"><?php echo $page_25_text_3;?></p>
            <div class="page-number absolute"
                style="background-image: url('images/home-buying/24.png');top:850px; right:20px;;">
                <div class="text" style="margin-top: 130px;margin-right: 150px;">
                    <h4 class="font-thin">THE HOME</h4>
                    <h3 class="font-thin gold">BUYING</h3>
                    <h2 class="font-thin">GUIDE</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-26 page-background"
        style="background-image:url('{{$page_26_img_1}}');background-position:center;">
        <div class="container">
            <div class="absolute" style="top:30%;left:70px;">
                <h2 class="font-thin white mb-30" style="font-size:100px;">Recent</h2>
                <h1 class="font-thin gold" style="font-size:140px;">Lisitings</h1>
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div
        style="top:0;bottom:0;right:550px;position:absolute;background-image: url('{{$page_26_img_1}}');background-size: cover;background-position:bottom right;background-repeat: no-repeat;height:100%">
        <h1></h1>
    </div>
    <div class="page page-27 page-background" style="background-position:-600px;">
        <div class="container" style="margin-left:300px;margin-top:30px;">
            <div class="absolute" style="top:30px;left:270px;">
                <div style="background-color: #C6A467;padding:5px;width:176px;border-radius: 600%;">
                    <div style="background-color:white;padding:5px;border-radius: 550%;">
                        <img src="{{$page_27_img_1}}" alt="" width="166" height="166" style="border-radius: 500%;">
                    </div>
                </div>
            </div>
            <div class="absolute" style="top:40px;left:475px;width:450px;">
                <p class="gold" style="font-size:24px;">{{$page_27_text_1}}</p>
                <p>{{$page_27_text_2}}</p>
                <p>{{$page_27_text_3}}</p>
                <p>{{$page_27_text_4}}</p>
                <p>{{$page_27_text_5}}</p>
            </div>

            <div class="absolute" style="top:230px;left:170px;">
                <div style="background-color: black;padding:5px;width:176px;border-radius: 600%;">
                    <div style="background-color:white;padding:5px;border-radius: 550%;">
                        <img src="{{$page_27_img_2}}" alt="" width="166" height="166" style="border-radius: 500%;">
                    </div>
                </div>
            </div>
            <div class="absolute" style="top:250px;left:370px;width:450px;">
                <p class="" style="font-size:24px;">{{$page_27_text_6}}</p>
                <p>{{$page_27_text_7}}</p>
                <p>{{$page_27_text_8}}</p>
                <p>{{$page_27_text_9}}</p>
                <p>{{$page_27_text_10}}</p>
            </div>

            <div class="absolute" style="top:450px;left:270px;">
                <div style="background-color: #C6A467;padding:5px;width:176px;border-radius: 600%;">
                    <div style="background-color:white;padding:5px;border-radius: 550%;">
                        <img src="{{$page_27_img_3}}" alt="" width="166" height="166" style="border-radius: 500%;">
                    </div>
                </div>
            </div>
            <div class="absolute" style="top:470px;left:475px;width:450px;">
                <p class="gold" style="font-size:24px;">{{$page_27_text_11}}</p>
                <p>{{$page_27_text_12}}</p>
                <p>{{$page_27_text_13}}</p>
                <p>{{$page_27_text_14}}</p>
                <p>{{$page_27_text_15}}</p>
            </div>

            <div class="absolute" style="top:650px;left:170px;">
                <div style="background-color: black;padding:5px;width:176px;border-radius: 600%;">
                    <div style="background-color:white;padding:5px;border-radius: 550%;">
                        <img src="{{$page_27_img_4}}" alt="" width="166" height="166" style="border-radius: 500%;">
                    </div>
                </div>
            </div>
            <div class="absolute" style="top:680px;left:370px;width:450px;">
                <p class="" style="font-size:24px;">{{$page_27_text_16}}</p>
                <p>{{$page_27_text_17}}</p>
                <p>{{$page_27_text_18}}</p>
                <p>{{$page_27_text_19}}</p>
                <p>{{$page_27_text_20}}</p>
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-28 page-background"
        style="background-image:url('{{$page_28_img_1}}');background-position:center;">
        <div class="container">
            <div class="absolute" style="top:30%;left:70px;">
                <h2 class="font-thin white mb-30" style="font-size:100px;">Recent</h2>
                <h1 class="font-thin gold" style="font-size:140px;">Sales</h1>
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div
        style="top:0;bottom:0;right:550px;position:absolute;background-image: url('{{$page_28_img_1}}');background-size: cover;background-position:bottom right;background-repeat: no-repeat;height:100%">
        <h1></h1>
    </div>
    <div class="page page-29 page-background" style="background-position:-600px;">
        <div class="container" style="margin-left:170px;margin-top:30px;">

            <div class="mb-20" style="background-color: #C6A467;padding:5px;border-radius:600%;">
                <div style="background-color:white;padding:5px;border-radius: 550%;width:169px;">
                    <img src="{{$page_29_img_1}}" alt="" width="166" height="166" style="border-radius: 500%;">
                </div>
            </div>
            <div class="absolute" style="top:40px;left:390px;width:450px;">
                <p class="white" style="font-size:24px;">{{$page_29_text_1}}</p>
                <p>{{$page_29_text_2}}</p>
                <p>{{$page_29_text_3}}</p>
                <p>{{$page_29_text_4}}</p>
                <p>{{$page_29_text_5}}</p>
            </div>

            <div class="mb-20" style="background-color: #C6A467;padding:5px;border-radius:600%;">
                <div style="background-color:white;padding:5px;border-radius: 550%;width:169px;">
                    <img src="{{$page_29_img_2}}" alt="" width="166" height="166" style="border-radius: 500%;">
                </div>
            </div>
            <div class="absolute" style="top:250px;left:390px;width:450px;">
                <p class="white" style="font-size:24px;">{{$page_29_text_6}}</p>
                <p>{{$page_29_text_7}}</p>
                <p>{{$page_29_text_8}}</p>
                <p>{{$page_29_text_9}}</p>
                <p>{{$page_29_text_10}}</p>
            </div>

            <div class="mb-20" style="background-color: #C6A467;padding:5px;border-radius:600%;">
                <div style="background-color:white;padding:5px;border-radius: 550%;width:169px;">
                    <img src="{{$page_29_img_3}}" alt="" width="166" height="166" style="border-radius: 500%;">
                </div>
            </div>
            <div class="absolute" style="top:460px;left:390px;width:450px;">
                <p class="white" style="font-size:24px;">{{$page_29_text_11}}</p>
                <p>{{$page_29_text_12}}</p>
                <p>{{$page_29_text_13}}</p>
                <p>{{$page_29_text_14}}</p>
                <p>{{$page_29_text_15}}</p>
            </div>

            <div style="background-color: #C6A467;padding:5px;border-radius:600%;">
                <div style="background-color:white;padding:5px;border-radius: 550%;width:169px;">
                    <img src="{{$page_29_img_4}}" alt="" width="166" height="166" style="border-radius: 500%;">
                </div>
            </div>
            <div class="absolute" style="top:660px;left:390px;width:450px;">
                <p class="white" style="font-size:24px;">{{$page_29_text_16}}</p>
                <p>{{$page_29_text_17}}</p>
                <p>{{$page_29_text_18}}</p>
                <p>{{$page_29_text_19}}</p>
                <p>{{$page_29_text_20}}</p>
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-30 page-background"
        style="background-image:url('{{$page_30_img_1}}');background-position:center;">
        <div class="container" style="position: absolute;bottom: 55%;">
            <h2 class="mb-30" style="font-weight: 300;color:white;font-size:80px;margin-left:150px;">Happy</h2>
            <h1 style="font-weight: 300;color:#C5A367;font-size:140px;margin-left:120px;">Clients</h1>
            <h2 style="font-weight: 300;color:white;font-size:40px;margin-left:230px;">Testimonials</h2>
        </div>
    </div>

    <div class="page_break"></div>

    <div
        style="top:0;bottom:0;right:550px;position:absolute;background-image: url('{{$page_30_img_1}}');background-size: cover;background-position:bottom right;background-repeat: no-repeat;height:100%">
        <h1></h1>
    </div>
    <div class="page page-31 page-background" style="background-position:-600px;">
        <div class="container" style="margin-left:70px;margin-top:30px;margin-right:50px;">

            <div class="section" style="border:1px solid gray;margin-bottom:20px;padding-bottom:0px;">
                <img src="{{$page_31_img_1}}" alt="" style="float: left;margin-bottom:-30px;" height="230px">
                <img src="images/home-selling/divider-1.png" alt="" height="230px"
                    style="margin-left:-114px;z-index:100;margin-top:47px;margin-bottom:-50px;">
                <div class="text" style="position: absolute;padding-left:30px;padding-top:30px;">
                    <p style="font-weight: 300;font-size:16px;">{{$page_31_text_2}}</p>
                    <p style="font-size: 22px;color: #C5A367;margin-left:25px;">{{$page_31_text_1}}</p>
                </div>
            </div>

            <div class="section" style="border:1px solid gray;margin-bottom:20px;padding-bottom:0px;">
                <img src="{{$page_31_img_2}}" alt="" style="float: left;margin-bottom:-30px;" height="230px">
                <img src="images/home-selling/divider-1.png" alt="" height="230px"
                    style="margin-left:-114px;z-index:100;margin-top:47px;margin-bottom:-50px;">
                <div class="text" style="position: absolute;padding-left:30px;padding-top:30px;">
                    <p style="font-weight: 300;font-size:16px;">{{$page_31_text_4}}</p>
                    <p style="font-size: 22px;color: #C5A367;margin-left:25px;">{{$page_31_text_3}}</p>
                </div>
            </div>

            <div class="section" style="border:1px solid gray;margin-bottom:20px;padding-bottom:0px;">
                <img src="{{$page_31_img_3}}" alt="" style="float: left;margin-bottom:-30px;" height="230px">
                <img src="images/home-selling/divider-1.png" alt="" height="230px"
                    style="margin-left:-114px;z-index:100;margin-top:47px;margin-bottom:-50px;">
                <div class="text" style="position: absolute;padding-left:30px;padding-top:30px;">
                    <p style="font-weight: 300;font-size:16px;">{{$page_31_text_6}}</p>
                    <p style="font-size: 22px;color: #C5A367;margin-left:25px;">{{$page_31_text_5}}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-32">
        <div class="page-bottom" style="position: absolute;bottom: 20px;text-align: center;">
            <img src="images/last.png" alt="">
        </div>
    </div>
</body>

</html>