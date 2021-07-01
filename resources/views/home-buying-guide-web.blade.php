<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Home Buying Guide</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.9/cropper.js"
        integrity="sha512-oqBsjjSHWqkDx4UKoU+5IUZN2nW2qDp2GFSKw9+mcFm+ZywqfBKp79nfWmGPco2wzTWuE46XpjtCjZ9tFmI12g=="
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.9/cropper.css"
        integrity="sha512-949FvIQOibfhLTgmNws4F3DVlYz3FmCRRhJznR22hx76SKkcpZiVV5Kwo0iwK9L6BFuY+6mpdqB2+vDIGVuyHg=="
        crossorigin="anonymous" />

    <style>
        @import url("https://fonts.googleapis.com/css?family=Lato:300,400,700");
        @import url("https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap");
        @import url("https://fonts.googleapis.com/css2?family=Lato:wght@900&display=swap");

        * {
            font-family: 'Lato';
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

        .flex div {
            width: 50%;
        }

        .flex label {
            margin: 10px auto 30px auto !important;
        }

        .page {
            max-width: 650px;
        }

        .row-image {
            height: 1000px;
        }

        h1 {
            font-size: 80px;
            margin: 0;
        }

        h4 {
            font-size: 45px;
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
            position: relative;
            bottom: 0px;
            width: 650px;
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
            position: relative;
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

        .mb-0 {
            margin-bottom: 0;
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
            position: relative;
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
            margin: auto 0;
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
            position: relative;
            background-repeat: no-repeat;
            background-size: auto;
            background-position: right;
            text-align: right;
        }

        .page-number h2 {
            margin: 0px auto;
            font-size: 40px;
            line-height: 25px;
        }

        .page-number h3 {
            margin: 10px auto;
            font-size: 40px;
            line-height: 25px;
        }

        .page-number h4 {
            margin: 0px auto;
            font-size: 20px;
            line-height: 12px;
            padding-top: 30px;
        }

        .page-number .text {
            padding-top: 30px;
            padding-bottom: 70px;
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

        .golden-radius {
            border-top-right-radius: 129px;
            border-bottom-right-radius: 129px;
            border-top-left-radius: 129px;
            border-bottom-left-radius: 129px;
            margin-left: 75px;
        }
    </style>
</head>

<body>
    <form method="post" action=" {{ route('pdf.home.buying') }} " method="POST">
        @csrf
        <div class="row">
            <div class="row-image">
                <div class="page page-1">
                    <div class="container">
                        <div class="absolute" style="top:30%">
                            <h1 class="big-title font-thin page-1-text-1">THE</h1>
                            <h1 class="big-title gold font-thin page-1-text-2">HOME </h1>
                            <h1 class="big-title gold font-thin page-1-text-3">BUYING</h1>
                            <h1 class="font-thin page-1-text-4">GUIDE</h1>
                        </div>
                        <div class="page-bottom text-center">
                            <img src="images/Asset 1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <label for="page-1-text-1">First Title</label>
                <input type="text" id="page-1-text-1" name="page_1_text_1" value="THE">

                <label for="page-1-text-2">Seond Title</label>
                <input type="text" id="page-1-text-2" name="page_1_text_2" value="HOME">

                <label for="page-1-text-3">Third Title</label>
                <input type="text" id="page-1-text-3" name="page_1_text_3" value="BUYING">

                <label for="page-1-text-4">Fourth Title</label>
                <input type="text" id="page-1-text-4" name="page_1_text_4" value="GUIDE">
            </div>
        </div>

        <div class="row-divider"></div>

        <div class="row">
            <div class="row-image">
                <div class="page page-2 page-background" style="background-image:url('images/home-buying/page-1.jpg')">
                    <img src="" id="imageBackground-page-2" style="display: none">
                    <input hidden name="page_2_img_1" value="images/home-buying/page-1.jpg">
                    <div class="container">
                        <div class="absolute" style="top:760px;">
                            <h1 class="cover-page gold">LUXE</h1>
                            <h2 class="cover-page white">PROPERTIES</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <div class="button">
                    <label>Background Image</label>
                    <input type="file" id="imageBackgroundInput-page-2" onchange="imageBackgroundInputChanged_page_2()">
                    <button type="button" onclick="startCropper_page_2()">Crop</button>
                    <button type="button" onclick="cropImage_page_2()">Save Crop</button>
                </div>
            </div>
        </div>
        <script>

        </script>

        <div class="row-divider"></div>

        <div class="row">
            <div class="row-image">
                <div class="page page-3 page-background"
                    style="background-image:url('images/single-property/page-3.png')">
                    <div class="container">
                        <div class="absolute" style="top:5%;left:50px;">
                            <h2 class="font-thin mb-0 page-3-text-1" style="font-size:40px;">A New Breed of Realtors
                                Redefining</h2>
                            <h1 class="gold font-thin mb-0 page-3-text-2" style="font-size:95px;">The Real Estate</h1>
                            <h1 class="font-thin mb-0 page-3-text-3" style="font-size:95px;">Experience</h1>
                        </div>

                        <div class="absolute" style="top:18%;left:250px;width:450px;">
                            <p class="font-thin text-20 page-3-text-4">At LUXE Properties, we take pride in building
                                relationships
                                based on
                                the premise and understanding that each client is unique, along with their respective
                                properties.
                                We aim to delight and surprise our clients, deliver exceptional service and exceed
                                expectations
                                throughout the transaction. Our company utilizes the latest technology to stay abreast
                                of market
                                trends and deliver innovative solutions for our LUXE clients.</p>
                            <br>
                            <p class="font-thin text-20 page-3-text-5">The LUXE Properties team seeks to partner with
                                you
                                every step of the way. So, whether you are buying, selling, or considering real estate
                                in South
                                Florida,
                                LUXE Properties is here to make your LUXE real estate experience your best move yet.</p>
                        </div>

                        <div class="page-number"
                            style="background-image: url('images/single-property/02.png');top:37%;">
                            <div class="text" style="margin-right: 150px;">
                                <h4 class="font-thin">THE HOME</h4>
                                <h3 class="font-thin gold">BUYING</h3>
                                <h2 class="font-thin">GUIDE</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <label for="page-3-text-1">First Title</label>
                <input type="text" id="page-3-text-1" name="page_3_text_1" value="A New Breed of Realtors Redefining">

                <label for="page-3-text-2">Second Title</label>
                <input type="text" id="page-3-text-2" name="page_3_text_2" value="The Real Estate">

                <label for="page-3-text-3">Third Title</label>
                <input type="text" id="page-3-text-3" name="page_3_text_3" value="Experience">

                <label for="page-3-text-4">First Text</label>
                <textarea id="page-3-text-4" name="page_3_text_4" rows="4">At LUXE Properties, we take pride in building relationships based on the premise and understanding that each client is unique, along with their respective properties. We aim to delight and surprise our clients, deliver exceptional service and exceed expectations throughout the transaction. Our company utilizes the latest technology to stay abreast of market trends and deliver innovative solutions for our LUXE clients.
                </textarea>

                <label for="page-3-text-5">Second Text</label>
                <textarea id="page-3-text-5" name="page_3_text_5"
                    rows="4">The LUXE Properties team seeks to partner with you every step of the way. So, whether you are buying, selling, or considering real estate in South Florida, LUXE Properties is here to make your LUXE real estate experience your best move yet.</textarea>
            </div>
        </div>

        <div class="row-divider"></div>

        <div class="row">
            <div class="row-image">
                <div class="page page-4">
                    <div class="container" style="margin-left: 50px;">
                        <h2 class="cover-page-thin font-thin mb-0 " style="margin-top:10px;">Our</h2>
                        <h1 class="cover-page-thin font-thin gold">Commitment</h1>
                        <hr class="gold">
                        <h2 class="gold page-4-text-1">We Are Your Advisor</h2>
                        <ul class="page-4-text-2 enter" id="result-4-2"
                            style="list-style-image: url('images/home-buying/check.png');width:80%;">
                            <li class="font-thin">We will identify homes that represent the best value and also match
                                your needs.
                            </li>
                            <li class="font-thin">Advise on different options for ﬁnancing and provide comparable homes
                                to determine
                                fair market value.</li>
                            <li class="font-thin">Research the history of the homes you are interested in and request a
                                proper
                                seller’s disclosure.</li>
                            <li class="font-thin">Guide you on any trends or developments in your areas of interest
                                along with
                                possible off market or coming soon opportunities.</li>
                        </ul>
                        <h2 class="gold page-4-text-3">Responsiveness</h2>
                        <ul class="page-4-text-4" id="result-4-4"
                            style="list-style-image: url('images/home-buying/check.png');width:80%;">
                            <li class="font-thin">We answer the phone! We will get back to you no later than the same
                                day.</li>
                            <li class="font-thin">Our team has buyer agents with open availability to show homes at your
                                preference.
                            </li>
                            <li class="font-thin">We will attend inspections, appraisals and closing.</li>
                            <li class="font-thin">Once you have found the one, we also have an assigned closing
                                coordinator to
                                assist with follow up from contract to closing.</li>
                        </ul>
                        <h2 class="gold page-4-text-5">Negotiator</h2>
                        <ul class="page-4-text-6" id="result-4-6"
                            style="list-style-image: url('images/home-buying/check.png');width:80%;">
                            <li class="font-thin">We are expert negotiators and will always negotiate on your behalf
                                along with
                                transparency on how negotiations progress.</li>
                            <li class="font-thin">Compile market analysis data and comparable data from recent sales in
                                area to
                                decide on the strongest and most competitive offer.</li>
                            <li class="font-thin">Research seller’s objectives and needs prior to negotiating in order
                                to develop
                                the best strategy in the event of a counteroffer.</li>
                            <li class="font-thin">Guide you through additional negotiations if needed during inspection
                                and
                                appraisal.</li>
                            <li class="font-thin">Work with lenders and title companies to make sure any fees charged
                                are fair and
                                in line with going prices.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <label for="page-4-text-1">First Title</label>
                <input type="text" id="page-4-text-1" name="page_4_text_1" value="We Are Your Advisor">

                <label for="page-4-text-2">First Text</label>
                <textarea id="page-4-text-2" name="page_4_text_2" rows="4">We will identify homes that represent the best value and also match your needs.
                    Advise on different options for ﬁnancing and provide comparable homes to determine fair market value.
                    Research the history of the homes you are interested in and request a proper seller’s disclosure.
                    Guide you on any trends or developments in your areas of interest along with possible off market or coming soon opportunities.
                </textarea>

                <label for="page-4-text-3">Second Title</label>
                <input type="text" id="page-4-text-3" name="page_4_text_3" value="Responsiveness">

                <label for="page-4-text-4">Second Text</label>
                <textarea id="page-4-text-4" name="page_4_text_4" rows="4">
                    We answer the phone! We will get back to you no later than the same day.
                    Our team has buyer agents with open availability to show homes at your preference.
                    We will attend inspections, appraisals and closing.
                    Once you have found the one, we also have an assigned closing coordinator to assist with follow up from contract to closing.
                </textarea>

                <label for="page-4-text-5">Third Title</label>
                <input type="text" id="page-4-text-5" name="page_4_text_5" value="Negotiator">

                <label for="page-4-text-6">Third Text</label>
                <textarea id="page-4-text-6" name="page_4_text_6" rows="4">
                    We are expert negotiators and will always negotiate on your behalf along with transparency on how negotiations progress.
                    Compile market analysis data and comparable data from recent sales in area to decide on the strongest and most competitive offer.
                    Research seller’s objectives and needs prior to negotiating in order to develop the best strategy in the event of a counteroffer.
                    Guide you through additional negotiations if needed during inspection and appraisal.
                    Work with lenders and title companies to make sure any fees charged are fair and in line with going prices.
                </textarea>
            </div>
        </div>

        <div class="row-divider"></div>

        <div class="row">
            <div class="row-image">
                <div class="page page-5 page-background" style="background-image:url('images/home-buying/page-5.jpg')">
                    <img src="" id="imageBackground-page-5" style="display: none">
                    <input hidden name="page_5_img_1" value="images/home-buying/page-5.jpg">
                    <div class="container">
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <div class="button">
                    <label>Background Image</label>
                    <input type="file" id="imageBackgroundInput-page-5" onchange="imageBackgroundInputChanged_page_5()">
                    <button type="button" onclick="startCropper_page_5()">Crop</button>
                    <button type="button" onclick="cropImage_page_5()">Save Crop</button>
                </div>
            </div>
        </div>
        <script>

        </script>

        <div class="row-divider"></div>

        <div class="row">
            <div class="row-image">
                <div class="page page-6 page-background" style="background-image:url('images/home-buying/page-6.jpg')">
                    <div class="container">
                        <img src="" id="imageBackground-page-6" style="display: none">
                        <input hidden name="page_6_img_1" value="images/home-buying/page-6.jpg">
                        <div class="absolute" style="top:700px;">
                            <h2 class="cover-page-thin font-thin"
                                style="font-size: 40px;margin-left:158px;margin-bottom:9px;margin-top: 0;">The
                                Home</h2>
                            <h1 class="big-title gold" style="margin-top: -65px;margin-bottom: -50px;">Buying</h1>
                            <h1 class="font-thin" style="margin-left: 250px;margin-top:10px;">Process</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <div class="button">
                    <label>Background Image</label>
                    <input type="file" id="imageBackgroundInput-page-6" onchange="imageBackgroundInputChanged_page_6()">
                    <button type="button" onclick="startCropper_page_6()">Crop</button>
                    <button type="button" onclick="cropImage_page_6()">Save Crop</button>
                </div>
            </div>
        </div>
        <script>

        </script>

        <div class="row-divider"></div>

        <div class="row">
            <div class="row-image">
                <div class="page page-7 page-background" style="background-image:url('images/home-buying/page-7.jpg')">
                    <img src="" id="imageBackground-page-7" style="display: none">
                    <input hidden name="page_7_img_1" value="images/home-buying/page-7.jpg">
                    <div class="container">
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <div class="button">
                    <label>Background Image</label>
                    <input type="file" id="imageBackgroundInput-page-7" onchange="imageBackgroundInputChanged_page_7()">
                    <button type="button" onclick="startCropper_page_7()">Crop</button>
                    <button type="button" onclick="cropImage_page_7()">Save Crop</button>
                </div>
            </div>
        </div>
        <script>

        </script>

        <div class="row-divider"></div>

        <div class="row">
            <div class="row-image">
                <div class="page page-8 page-background"
                    style="background-image:url('images/home-buying/page-8.jpg');background-position:center;">
                    <div class="container">
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input">

            </div>
        </div>

        <div class="row-divider"></div>

        <div class="row">
            <div class="row-image">
                <div class="page page-9 page-background"
                    style="background-image:url('images/home-buying/page-9.jpg');background-position: -600px -5px;">
                    <div class="container" style="margin-left: 170px;">
                        <h2 class="white page-9-text-1" style="background-color: #C9A668;margin-top: 0;">LUXEKNOWS.COM
                            CAN PROVIDE ALL
                            OF THE TOOLS
                            YOU NEED FOR
                            PRODUCTIVE PROPERTY SEARCHES, INCLUWDING:</h2>

                        <ul class="golden-list page-9-text-2" id="result-9-2">
                            <li class="font-thin">Ability to search at your leisure</li>
                            <li class="font-thin">Direct data straight from our MLS system</li>
                            <li class="font-thin">Concierge-style automatic notifications of new homes</li>
                            <li class="font-thin">Real time dynamic search functionality</li>
                            <li class="font-thin">Display of all property listing data on the map according to the
                                search
                                characteristics from your selection
                            </li>
                            <li class="font-thin">The ability to draw custom search boundaries using the interactive
                                ‘polygon’
                                search tool
                            </li>
                            <li class="font-thin">Point-of-Interest Plotting, enabling the buyer to search for area
                                shops, services
                                and amenities such as restaurants and schools
                            </li>
                            <li class="font-thin">Satellite photos of entire search areas as well as close-up
                                ‘Street-view’
                                photographs of any neighborhood
                            </li>
                            <li class="font-thin">Market data and statistics for recent sales
                            </li>
                            <li class="font-thin">Relevant information that aligns with your LUXE lifestyle. Categories
                                include
                                Events, Restaurants, Things to Do, Theatre and Arts, Music and Concerts and Sports
                            </li>
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
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <label for="page-9-text-1">First Title</label>
                <input type="text" id="page-9-text-1" name="page_9_text_1"
                    value="LUXEKNOWS.COM CAN PROVIDE ALL OF THE TOOLS YOU NEED FOR PRODUCTIVE PROPERTY SEARCHES, INCLUDING:">

                <label for="page-9-text-2">First Text</label>
                <textarea id="page-9-text-2" name="page_9_text_2" rows="4">Ability to search at your leisure
                    Direct data straight from our MLS system
                    Concierge-style automatic notifications of new homes
                    Real time dynamic search functionality
                    Display of all property listing data on the map according to the search characteristics from your selection
                    The ability to draw custom search boundaries using the interactive ‘polygon’ search tool
                    Point-of-Interest Plotting, enabling the buyer to search for area shops, services and amenities such as restaurants and schools
                    Satellite photos of entire search areas as well as close-up ‘Street-view’ photographs of any neighborhood
                    Market data and statistics for recent sales
                    Relevant information that aligns with your LUXE lifestyle. Categories include Events, Restaurants, Things to Do, Theatre and Arts, Music and Concerts and Sports
                </textarea>
            </div>
        </div>

        <div class="row-divider"></div>

        <div class="row">
            <div class="row-image">
                <div class="page page-10 page-background"
                    style="background-image:url('images/home-buying/page-10.jpg');">
                    <img src="" id="imageBackground-page-10" style="display: none">
                    <input hidden name="page_10_img_1" value="images/home-buying/page-10.jpg">
                    <div class="container">
                        <div class="absolute" style="width: 85%;top: 650px;left:50px;">
                            <h2 class="font-thin white" style="font-size:80px;margin-top: 0;">Type Of</h2>
                            <h1 class="font-thin gold" style="font-size:150px;margin-top:-120px;">Loans</h1>
                            <hr class="gold">
                            <p class="white">**Some homes in poor condition, with title issues or in need of a fast sale
                                may be “cash
                                only”.
                                Additionally, some condo buildings will not qualify for all loan types.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <div class="button">
                    <label>Background Image</label>
                    <input type="file" id="imageBackgroundInput-page-10"
                        onchange="imageBackgroundInputChanged_page_10()">
                    <button type="button" onclick="startCropper_page_10()">Crop</button>
                    <button type="button" onclick="cropImage_page_10()">Save Crop</button>
                </div>
            </div>
        </div>
        <script>

        </script>


        <div class="row-divider"></div>

        <div class="row">
            <div class="row-image">
                <div class="page page-11 page-background"
                    style="background-image:url('images/single-property/page-3.png')">

                    <div class="container" style="padding-left:10px;">
                        <h2 class="font-thin page-11-text-1 " style="font-size:40px;margin-top:0;">The Most Common Loans
                        </h2>
                        <hr>
                        <p class="font-thin page-11-text-2">There is no easy answer to which loan is the best. You
                            should review all
                            options and
                            pick what is best
                            for you.</p>

                        <h2 class="gold page-11-text-3" style="margin-bottom: -20px;">FHA</h2>
                        <ul class="page-11-text-4" style="list-style-image: url('images/home-buying/check.png');"
                            id="result-11-4">
                            <li class="font-thin">Max Loan Amount - $345,000</li>
                            <li class="font-thin">This is a low down payment option, sometimes only 3.5% down</li>
                            <li class="font-thin">Accepts lower credit scores and high qualifying ratios allowing you to
                                purchase
                                higher up to the loan limit.</li>
                            <li class="font-thin">This loan does have mortgage insurance for the life of the loan</li>
                            <li class="font-thin">Condos must be FHA approved to qualify and the amount in each county
                                that are
                                approved is quite low</li>
                            <li class="font-thin">You do not need to be a first-time homebuyer</li>
                        </ul>

                        <h2 class="gold page-11-text-5" style="margin-bottom: -20px;margin-top: -10px;">VA</h2>
                        <ul class="page-11-text-6" style="list-style-image: url('images/home-buying/check.png');"
                            id="result-11-6">
                            <li class="font-thin">This loan has the same guidelines as FHA for the property.</li>
                            <li class="font-thin">The borrower must be a veteran and receive special financing
                                incentives.</li>
                            <li class="font-thin">Loan amount can be up to 100%.</li>
                            <li class="font-thin">Seller will sometimes cover additional closing costs.</li>
                        </ul>

                        <h2 class="gold page-11-text-7" style="margin-bottom: -20px;margin-top: -10px;">Conventional
                        </h2>
                        <ul class="page-11-text-8" style="list-style-image: url('images/home-buying/check.png');"
                            id="result-11-8">
                            <li class="font-thin">Max Loan Amount - $453,100</li>
                            <li class="font-thin">These loans can be used for investment loans or owner occupants.</li>
                            <li class="font-thin">Lower down payments allowed in this program as well.</li>
                            <li class="font-thin">Mortgage insurance can be removed once loan value reaches 80%</li>
                            <li class="font-thin">This loan has many more options for condo financing</li>
                            <li class="font-thin">Typically requires higher credit scores</li>
                        </ul>

                        <h2 class="gold page-11-text-9" style="margin-bottom: -20px;margin-top: -10px;">Jumbo</h2>
                        <ul class="page-11-text-10" style="list-style-image: url('images/home-buying/check.png');"
                            id="result-11-10">
                            <li class="font-thin">These are loans over Fannie Mae limit of $450,000</li>
                            <li class="font-thin">Sometimes there are special programs, which have conventional first
                                mortgage and
                                jumbo loan second.</li>
                            <li class="font-thin">Guidelines will vary from bank to bank and take slightly longer to
                                approve</li>
                        </ul>

                        <h2 class="gold page-11-text-11" style="margin-bottom: -20px;margin-top: -10px;">Hard
                            Money/Private Financing
                        </h2>
                        <ul class="page-11-text-12" style="list-style-image: url('images/home-buying/check.png');"
                            id="result-11-12">
                            <li class="font-thin">These are loans, which do not necessarily require good credit from
                                borrower in
                                exchange for a higher interest rate and down payment</li>
                            <li class="font-thin">Great option for homes that require repairs or have violations</li>
                            <li class="font-thin">These loans also have shorter terms and may require payment within a
                                year</li>
                            <li class="font-thin">Very hard to get for owner occupants</li>
                            <li class="font-thin">These loans can have prepayment penalties</li>
                        </ul>

                        <h2 class="gold page-11-text-13" style="margin-bottom: -20px;margin-top: -10px;">Seller
                            Financing</h2>
                        <ul class="page-11-text-14" style="list-style-image: url('images/home-buying/check.png');"
                            id="result-11-14">
                            <li class="font-thin">In some instances albeit rare, the seller can offer to extend a loan
                                to you out of
                                their equity</li>
                            <li class="font-thin">The seller will need to have the home free and clear or enough equity
                                to not
                                receive the cash at closing</li>
                            <li class="font-thin">These loans tend to have higher interest rates and shorter</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <label for="page-11-text-1">First Title</label>
                <input type="text" id="page-11-text-1" name="page_11_text_1" value="The Most Common Loans">

                <label for="page-11-text-2">First Text</label>
                <input type="text" id="page-11-text-2" name="page_11_text_2"
                    value="There is no easy answer to which loan is the best. You should review all options and pick what is best for you.">
                <div class="flex">
                    <div>
                        <label for="page-11-text-3">Second Title</label>
                        <input type="text" id="page-11-text-3" name="page_11_text_3" value="FHA">

                        <label for="page-11-text-4">Second Text</label>
                        <textarea id="page-11-text-4" name="page_11_text_4" rows="4">Max Loan Amount - $345,000
                    This is a low down payment option, sometimes only 3.5% down
                    Accepts lower credit scores and high qualifying ratios allowing you to purchase higher up to the loan limit.
                    This loan does have mortgage insurance for the life of the loan
                    Condos must be FHA approved to qualify and the amount in each county that are approved is quite low
                    You do not need to be a first-time homebuyer
                    </textarea>
                    </div>

                    <div>
                        <label for="page-11-text-5">Third Title</label>
                        <input type="text" id="page-11-text-5" name="page_11_text_5" value="VA">

                        <label for="page-11-text-6">Third Text</label>
                        <textarea id="page-11-text-6" name="page_11_text_6" rows="4">This loan has the same guidelines as FHA for the property.
                    The borrower must be a veteran and receive special financing incentives.
                    Loan amount can be up to 100%.
                    Seller will sometimes cover additional closing costs.
                </textarea>
                    </div>
                </div>
                <div class="flex">
                    <div>
                        <label for="page-11-text-7">Fourth Title</label>
                        <input type="text" id="page-11-text-7" name="page_11_text_7" value="Conventional">

                        <label for="page-11-text-8">Fourth Text</label>
                        <textarea id="page-11-text-8" name="page_11_text_8" rows="4">
                    Max Loan Amount - $453,100
                    These loans can be used for investment loans or owner occupants.
                    Lower down payments allowed in this program as well.
                    Mortgage insurance can be removed once loan value reaches 80%
                    This loan has many more options for condo financing
                    Typically requires higher credit scores
                </textarea>
                    </div>
                    <div>
                        <label for="page-11-text-9">Fifth Title</label>
                        <input type="text" id="page-11-text-9" name="page_11_text_9" value="Jumbo">

                        <label for="page-11-text-10">Fifth Text</label>
                        <textarea id="page-11-text-10" name="page_11_text_10" rows="4">
                    These are loans over Fannie Mae limit of $450,000
                    Sometimes there are special programs, which have conventional first mortgage and jumbo loan second.
                    Guidelines will vary from bank to bank and take slightly longer to approve
                </textarea>
                    </div>
                </div>

                <div class="flex">
                    <div>
                        <label for="page-11-text-11">Sixth Title</label>
                        <input type="text" id="page-11-text-11" name="page_11_text_11"
                            value="Hard Money/Private Financing">

                        <label for="page-11-text-12">Sixth Text</label>
                        <textarea id="page-11-text-12" name="page_11_text_12" rows="4">These are loans, which do not necessarily require good credit from borrower in exchange for a higher interest rate and down payment
                    Great option for homes that require repairs or have violations
                    These loans also have shorter terms and may require payment within a year
                    Very hard to get for owner occupants
                    These loans can have prepayment penalties
                </textarea>
                    </div>
                    <div>
                        <label for="page-11-text-13">Seventh Title</label>
                        <input type="text" id="page-11-text-13" name="page_11_text_13" value="Seller Financing">

                        <label for="page-11-text-14">Seventh Text</label>
                        <textarea id="page-11-text-14" name="page_11_text_14" rows="4">
                    In some instances albeit rare, the seller can offer to extend a loan to you out of their equity
                    The seller will need to have the home free and clear or enough equity to not receive the cash at closing
                    These loans tend to have higher interest rates and shorter
                </textarea>
                    </div>
                </div>
            </div>
        </div>

        <div class="row-divider"></div>

        <div class="row">
            <div class="row-image">
                <div class="page page-12">
                    <img src="" id="imageBackground-page-12-1" style="display: none">
                    <input hidden name="page_12_img_1" value="images/home-buying/page-12-1.jpg">
                    <img src="" id="imageBackground-page-12-2" style="display: none">
                    <input hidden name="page_12_img_2" value="images/home-buying/page-12-2.jpg">
                    <div class="container">
                        <div>
                            <img class="half-page-img" id="section12-1" src="images/home-buying/page-12-1.jpg" alt="">
                        </div>
                        <div>
                            <img class="half-page-img" id="section12-2" src="images/home-buying/page-12-2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <div class="button">
                    <label>Image Top</label>
                    <input type="file" id="imageBackgroundInput-page-12-1"
                        onchange="imageBackgroundInputChanged_page_12_1()">
                    <button type="button" onclick="startCropper_page_12_1()">Crop</button>
                    <button type="button" onclick="cropImage_page_12_1()">Save Crop</button>
                </div>
                <div class="button">
                    <label>Image Bottom</label>
                    <input type="file" id="imageBackgroundInput-page-12-2"
                        onchange="imageBackgroundInputChanged_page_12_2()">
                    <button type="button" onclick="startCropper_page_12_2()">Crop</button>
                    <button type="button" onclick="cropImage_page_12_2()">Save Crop</button>
                </div>
            </div>
        </div>
        <script>

        </script>


        <div class="row-divider"></div>

        <div class="row">
            <div class="row-image">
                <div class="page page-13">
                    <div class="container">
                        <p class="font-thin page-13-text-1" style="font-size:30px;">While both older and newer homes
                            have <span class="gold">pros
                                &</span> <b>cons,</b> considering them at the start of your search can help
                            guide you in the right direction</p>
                        <h1 class="gold page-13-text-2" style="font-size:35px;">Older Homes</h1>
                        <p class="page-13-text-3">Usually located in centralized, urban locations. Within more
                            established
                            neighborhoods.
                            Closer to shops,
                            schools, etc.</p>
                        <ul style="list-style-image: url('images/home-buying/check.png');">
                            <li class="gold page-13-text-4" style="font-size:25px;margin-bottom:-18px;">Cons -</li>
                        </ul>
                        <ul class="golden-list page-13-text-5" id="result-13-5">
                            <li class="font-thin">Typically do not have warranties as to conditions</li>
                            <li class="font-thin">High insurance costs in some instances
                            </li>
                            <li class="font-thin">Have many unforeseen issues and repairs that can arise</li>
                        </ul>
                        <ul style="list-style-image: url('images/home-buying/check.png');">
                            <li class="gold page-13-text-6" style="font-size:25px;margin-bottom:-18px;">Pros -</li>
                        </ul>
                        <ul class="golden-list page-13-text-7" id="result-13-7">
                            <li class="font-thin">You can sometimes get a better value if willing to renovate
                            </li>
                            <li class="font-thin">Uniqueness and charm found in some homes</li>
                            <li class="font-thin">Typically in well-established communities</li>
                            <li class="font-thin">More variety in terms of style and architecture</li>
                        </ul>

                        <h1 class="gold page-13-text-8" style="font-size:35px;">Newer Homes</h1>
                        <p class="page-13-text-9">Usually located in suburbs, farther than away from city life. Tend to
                            be in quieter
                            areas.
                            High
                            technology usually included.</p>
                        <ul style="list-style-image: url('images/home-buying/check.png');">
                            <li class="gold page-13-text-10" style="font-size:25px;margin-bottom:-18px;">Cons -</li>
                        </ul>
                        <ul class="golden-list page-13-text-11" id="result-13-11">
                            <li class="font-thin">Mostly in communities with HOA</li>
                            <li class="font-thin">Limited options for design; builder fees</li>
                            <li class="font-thin">Some new areas can have high taxes due to community
                                development
                                districts</li>
                        </ul>
                        <ul style="list-style-image: url('images/home-buying/check.png');">
                            <li class="gold page-13-text-12" style="font-size:25px;margin-bottom:-18px;">Pros -</li>
                        </ul>
                        <ul class="golden-list page-13-text-13" id="result-13-13">
                            <li class="font-thin">Special financing incentives</li>
                            <li class="font-thin">Builders provide 1-10 year warranties; lower insurance costs
                            </li>
                            <li class="font-thin">Typically no repairs needed and able to move right in</li>
                            <li class="font-thin">More energy efficient</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <label for="page-13-text-1">Title</label>
                <textarea id="page-13-text-1" name="page_13_text_1" rows="4">While both older and newer homes have 
                    <span class="gold">pros &</span> <b>cons,</b> considering them at the start of your search can help
                guide you in the right direction</textarea>

                <label for="page-13-text-2">Title</label>
                <input type="text" id="page-13-text-2" name="page_13_text_2" value="Older Homes">

                <label for="page-13-text-3">Text</label>
                <textarea id="page-13-text-3" name="page_13_text_3"
                    rows="4">Usually located in centralized, urban locations. Within more established neighborhoods. Closer to shops, schools, etc.</textarea>

                <div class="flex">
                    <div>
                        <label for="page-13-text-4">Title</label>
                        <input type="text" id="page-13-text-4" name="page_13_text_4" value="Cons -">

                        <label for="page-13-text-5">Text</label>
                        <textarea id="page-13-text-5" name="page_13_text_5" rows="4">Typically do not have warranties as to conditions
                    High insurance costs in some instances
                    Have many unforeseen issues and repairs that can arise
                </textarea>
                    </div>
                    <div>
                        <label for="page-13-text-6">Title</label>
                        <input type="text" id="page-13-text-6" name="page_13_text_6" value="Pros -">

                        <label for="page-13-text-7">Text</label>
                        <textarea id="page-13-text-7" name="page_13_text_7" rows="4">You can sometimes get a better value if willing to renovate
                    Uniqueness and charm found in some homes
                    Typically in well-established communities
                    More variety in terms of style and architecture
                </textarea>
                    </div>
                </div>

                <label for="page-13-text-8">Title</label>
                <input type="text" id="page-13-text-8" name="page_13_text_8" value="Newer Homes">

                <label for="page-13-text-9">Text</label>
                <textarea id="page-13-text-9" name="page_13_text_9"
                    rows="4">Usually located in suburbs, farther than away from city life. Tend to be in quieter areas. High technology usually included.</textarea>

                <div class="flex">
                    <div>
                        <label for="page-13-text-10">Title</label>
                        <input type="text" id="page-13-text-10" name="page_13_text_10" value="Cons -">

                        <label for="page-13-text-11">Text</label>
                        <textarea id="page-13-text-11" name="page_13_text_11" rows="4">Mostly in communities with HOA
                    Limited options for design; builder fees
                    Some new areas can have high taxes due to community development districts
                </textarea>
                    </div>
                    <div>
                        <label for="page-13-text-12">Title</label>
                        <input type="text" id="page-13-text-12" name="page_13_text_12" value="Pros -">

                        <label for="page-13-text-13">Text</label>
                        <textarea id="page-13-text-13" name="page_13_text_13" rows="4">Special financing incentives
                    Builders provide 1-10 year warranties; lower insurance costs
                    Typically no repairs needed and able to move right in
                    More energy efficient
                </textarea>
                    </div>
                </div>
            </div>
        </div>

        <div class="row-divider"></div>

        <div class="row">
            <div class="row-image">
                <div class="page page-14 page-background"
                    style="background-image:url('images/home-buying/page-14.jpg')">
                    <img src="" id="imageBackground-page-14" style="display: none">
                    <input hidden name="page_14_img_1" value="images/home-buying/page-14.jpg">
                    <div class="container">
                        <div class="absolute" style="top: 710px;">
                            <h2 class="white font-thin"
                                style="font-size:100px;margin-left:110px;margin-bottom:15px;margin-top:0;">
                                HOA’s &</h2>
                            <h1 class="gold font-thin" style="font-size:180px;margin-top: -100px;">Condo’s</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <div class="button">
                    <label>Background Image</label>
                    <input type="file" id="imageBackgroundInput-page-14"
                        onchange="imageBackgroundInputChanged_page_14()">
                    <button type="button" onclick="startCropper_page_14()">Crop</button>
                    <button type="button" onclick="cropImage_page_14()">Save Crop</button>
                </div>
            </div>
        </div>
        <script>

        </script>

        <div class="row-divider"></div>

        <div class="row">
            <div class="row-image">
                <div class="page page-15 page-background"
                    style="background-image:url('images/home-buying/page-14.jpg');background-position:-600px;">
                    <div class="container" style="margin-left:175px;">
                        <p class="font-thin page-15-text-1" style="font-size:22px;margin-top:0;padding-top:10px;">Some
                            single-family
                            homes and
                            condos have associations</p>
                        <h1 class="gold page-15-text-2" style="font-size:35px;">Homeowners Association</h1>
                        <ul class="page-15-text-3" style="list-style-image: url('images/home-buying/check.png');"
                            id="result-15-3">
                            <li class="font-thin">These associations set rules, regulations and typically
                                appearance guidelines for homes within the association</li>
                            <li class="font-thin">They create yearly budgets to cover these services
                                and homeowners must pay dues in installments</li>
                            <li class="font-thin">Some require the buyer to apply for approval
                                prior to closing</li>
                            <li class="font-thin">Has board of directors who manage the properties
                                alongside management company</li>
                            <li class="font-thin">Fees and rules can change with votes in community</li>
                        </ul>

                        <h1 class="gold page-15-text-4" style="font-size:35px;">Condo Association</h1>
                        <ul class="page-15-text-6" style="list-style-image: url('images/home-buying/check.png');"
                            id="result-15-6">
                            <li class="font-thin">Condos are similar to HOA’s but are more
                                comprehensive in service</li>
                            <li class="font-thin">Condos typically share insurance costs and have limited common
                                elements that all
                                owners have the right to use</li>
                            <li class="font-thin">Some condos have both a condo association and a
                                master homeowners association</li>
                            <li class="font-thin">Fees and rules can change with votes in community</li>
                            <li class="font-thin">In the event of major repairs or poor management,
                                special assessments can be charged so we review documents and ﬁnancials for you
                            </li>
                        </ul>

                        <div class="page-number"
                            style="background-image: url('images/single-property/14.png');top:37%;">
                            <div class="text" style="margin-top: 150px;margin-right: 150px;">
                                <h4 class="font-thin">THE HOME</h4>
                                <h3 class="font-thin gold">BUYING</h3>
                                <h2 class="font-thin">GUIDE</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <label for="page-15-text-1">Title</label>
                <input type="text" id="page-15-text-1" name="page_15_text_1"
                    value="Some single-family homes and condos have associations">

                <label for="page-15-text-2">Title</label>
                <input type="text" id="page-15-text-2" name="page_15_text_2" value="Homeowners Association">

                <label for="page-15-text-3">Text</label>
                <textarea id="page-15-text-3" name="page_15_text_3" rows="4">These associations set rules, regulations and typically appearance guidelines for homes within the association
                    They create yearly budgets to cover these services and homeowners must pay dues in installments
                    Some require the buyer to apply for approval prior to closing
                    Has board of directors who manage the properties alongside management company
                    Fees and rules can change with votes in community
                </textarea>

                <label for="page-15-text-4">Title</label>
                <input type="text" id="page-15-text-4" name="page_15_text_4" value="Condo Association">

                <label for="page-15-text-6">Text</label>
                <textarea id="page-15-text-6" name="page_15_text_6" rows="4">Condos are similar to HOA’s but are more comprehensive in service
                    Condos typically share insurance costs and have limited common elements that all owners have the right to use
                    Some condos have both a condo association and a master homeowners association
                    Fees and rules can change with votes in community
                    In the event of major repairs or poor management, special assessments can be charged so we review documents and ﬁnancials for you
                </textarea>
            </div>
        </div>

        <div class="row-divider"></div>

        <div class="row">
            <div class="row-image">
                <div class="page page-16 page-background"
                    style="background-image:url('images/home-buying/page-16.jpg')">
                    <img src="" id="imageBackground-page-16" style="display: none">
                    <input hidden name="page_16_img_1" value="images/home-buying/page-16.jpg">
                    <div class="container">
                        <div class="absolute" style="top:10px;">
                            <h2 class="white font-thin"
                                style="font-size:50px;margin-left:110px;margin-bottom:15px;text-align:right;margin-top:0;">
                                What are
                            </h2>
                            <h1 class="gold font-thin" style="font-size:90px;text-align:right;margin-top: -45px;">
                                Foreclosures</h1>
                            <h2 class="white font-thin"
                                style="font-size:60px;margin-right:110px;margin-top:-15px;text-align:right;">
                                Short
                                Sales?</h2>
                            <h2 class="white font-thin absolute" style="font-size:160px;left: 20%;top: -240px;;">&
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <div class="button">
                    <label>Background Image</label>
                    <input type="file" id="imageBackgroundInput-page-16"
                        onchange="imageBackgroundInputChanged_page_16()">
                    <button type="button" onclick="startCropper_page_16()">Crop</button>
                    <button type="button" onclick="cropImage_page_16()">Save Crop</button>
                </div>
            </div>
        </div>
        <script>

        </script>

        <div class="row-divider"></div>

        <div class="row">
            <div class="row-image">
                <div class="page page-17 page-background"
                    style="background-image:url('images/home-buying/page-16.jpg');background-position:-600px;">
                    <div class="container" style="margin-left:175px;">
                        <h1 class="gold page-17-text-1" style="font-size:35px;padding-top:30px;">Short Sale</h1>
                        <ul class="page-17-text-2" style="list-style-image: url('images/home-buying/check.png');"
                            id="result-17-2">
                            <li class="font-thin">When an owner has ﬁnancial difﬁculty and falls into
                                “pre-foreclosure”,
                                the owner
                                can request relief in the form of a short sale</li>
                            <li class="font-thin">A short sale is when an owner needs to sell for less than what
                                is owed
                                on the home
                                and ask the bank to approve a lower payoff to complete the sale</li>
                            <li class="font-thin">Since the lender is not a party to the contract, they do not
                                legally
                                have to
                                accept but many times will because it is in their best interest.</li>
                            <li class="font-thin">The contracts are typically contingent on clear title unless
                                otherwise
                                indicated
                            </li>
                        </ul>

                        <h1 class="gold page-17-text-3" style="font-size:35px;">Foreclosures</h1>
                        <ul class="page-17-text-4" style="list-style-image: url('images/home-buying/check.png');"
                            id="result-17-4">
                            <li class="font-thin">Repossessed homes which the bank is trying to liquidate</li>
                            <li class="font-thin">It is considered a foreclosure once the bank owns it</li>
                            <li class="font-thin">Also known as reo, bank-owned, foreclosed home</li>
                            <li class="font-thin">Typically sold ‘As-Is’ condition with any and all violations
                            </li>
                            <li class="font-thin">You must follow bank guidelines to purchase the home</li>
                            <li class="font-thin">They are typically contingent upon clear title unless
                                otherwise
                                indicated</li>
                        </ul>

                        <h1 class="gold page-17-text-5" style="font-size:35px;">Foreclosure Court Auctions</h1>
                        <ul class="page-17-text-6" style="list-style-image: url('images/home-buying/check.png');"
                            id="result-17-6">
                            <li class="font-thin">These are court ordered sales in an auction format</li>
                            <li class="font-thin">Properties must be purchased in cash and paid in full within
                                24 hours
                                from auction
                                date</li>
                            <li class="font-thin">These home have no title insurance and may have major title
                                issues
                            </li>
                            <li class="font-thin">These home must be purchased site unseen and in an ‘As-Is
                                Where Is’
                                condition</li>
                        </ul>

                        <div class="page-number" style="background-image: url('images/home-buying/16.png');top:37%;">
                            <div class="text" style="margin-right: 150px;">
                                <h4 class="font-thin">THE HOME</h4>
                                <h3 class="font-thin gold">BUYING</h3>
                                <h2 class="font-thin">GUIDE</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <label for="page-17-text-1">Title</label>
                <input type="text" id="page-17-text-1" name="page_17_text_1" value="Short Sale">

                <label for="page-17-text-2">Text</label>
                <textarea id="page-17-text-2" name="page_17_text_2" rows="4">When an owner has ﬁnancial difﬁculty and falls into “pre-foreclosure”, the owner can request relief in the form of a short sale
                    A short sale is when an owner needs to sell for less than what is owed on the home and ask the bank to approve a lower payoff to complete the sale
                    Since the lender is not a party to the contract, they do not legally have to accept but many times will because it is in their best interest.
                    The contracts are typically contingent on clear title unless otherwise indicated
                </textarea>

                <label for="page-17-text-3">Title</label>
                <input type="text" id="page-17-text-3" name="page_17_text_3" value="Foreclosures">

                <label for="page-17-text-4">Text</label>
                <textarea id="page-17-text-4" name="page_17_text_4" rows="4">Repossessed homes which the bank is trying to liquidate
                    It is considered a foreclosure once the bank owns it
                    Also known as reo, bank-owned, foreclosed home
                    Typically sold ‘As-Is’ condition with any and all violations
                    You must follow bank guidelines to purchase the home
                    They are typically contingent upon clear title unless otherwise indicated
                </textarea>

                <label for="page-17-text-5">Title</label>
                <input type="text" id="page-17-text-5" name="page_17_text_5" value="Foreclosure Court Auctions">

                <label for="page-17-text-6">Text</label>
                <textarea id="page-17-text-6" name="page_17_text_6" rows="4">These are court ordered sales in an auction format
                    Properties must be purchased in cash and paid in full within 24 hours from auction date
                    These home have no title insurance and may have major title issues
                    These home must be purchased site unseen and in an ‘As-Is Where Is’ condition
                </textarea>
            </div>
        </div>

        <div class="row-divider"></div>

        <div class="row">
            <div class="row-image">
                <div class="page page-18 page-background"
                    style="background-image:url('images/home-buying/page-16.jpg')">
                    <img src="" id="imageBackground-page-18" style="display: none">
                    <input hidden name="page_18_img_1" value="images/home-buying/page-16.jpg">
                    <div class="container">
                        <div class="absolute" style="top:10px;">
                            <h2 class="white font-thin"
                                style="font-size:50px;margin-left:140px;margin-bottom:15px;margin-top:0;">The
                            </h2>
                            <h1 class="gold font-thin" style="font-size:150px;margin-top: -95px;">Contract</h1>
                            <h2 class="white font-thin"
                                style="font-size:70px;margin-left:110px;margin-top:-15px;text-align:right;">
                                Guidelines</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <div class="button">
                    <label>Background Image</label>
                    <input type="file" id="imageBackgroundInput-page-18"
                        onchange="imageBackgroundInputChanged_page_18()">
                    <button type="button" onclick="startCropper_page_18()">Crop</button>
                    <button type="button" onclick="cropImage_page_18()">Save Crop</button>
                </div>
            </div>
        </div>
        <script>

        </script>

        <div class="row-divider"></div>

        <div class="row">
            <div class="row-image">
                <div class="page page-19 page-background"
                    style="background-image:url('images/home-buying/page-16.jpg');background-position:-600px;">
                    <div class="container" style="margin-left:175px;">
                        <h1 class="gold font-bold page-19-text-1" style="font-size:25px;">Things to Keep in
                            Consideration:</h1>
                        <ul style="list-style-image: url('images/home-buying/check.png');">
                            <li class="gold font-bold page-19-text-2" style="font-size: 20px;">Escrow Deposit -</li>
                            <p class="font-thin page-19-text-3">This is a good faith deposit to remove the home from the
                                market
                                and its
                                availability to other
                                purchasers. It is recommended to place at least 2% – 5% of sale price in escrow.
                            </p>
                        </ul>
                        <ul style="list-style-image: url('images/home-buying/check.png');">
                            <li class="gold font-bold page-19-text-4" style="font-size: 20px;">Inspection -</li>
                            <p class="font-thin page-19-text-5">Your contract has a clause to add an inspection
                                contingency if
                                desired.
                                We
                                recommend it and if you
                                are not satisfied with this condition, you can cancel and get your deposit
                                returned.</p>
                        </ul>
                        <ul style="list-style-image: url('images/home-buying/check.png');">
                            <li class="gold font-bold page-19-text-6" style="font-size: 20px;">Financing Contingency -
                            </li>
                            <p class="font-thin page-19-text-7">In the event you need a loan to purchase your home, we
                                will add
                                a
                                financing
                                contingency that allows you a certain amount of time to qualify and secure a
                                loan
                                commitment from a
                                lender. If your loan is denied but time periods are met, your deposit will be
                                returned.
                            </p>
                        </ul>
                        <ul style="list-style-image: url('images/home-buying/check.png');">
                            <li class="gold font-bold page-19-text-8" style="font-size: 20px;">Appraisal -</li>
                            <p class="font-thin page-19-text-9">Whether cash or financing, we can add in an appraisal
                                clause
                                stating if
                                the home
                                appraises for less—you guessed it—you get your money back.</p>
                        </ul>
                        <ul style="list-style-image: url('images/home-buying/check.png');">
                            <li class="gold font-bold page-19-text-10" style="font-size: 20px;">Title -</li>
                            <p class="font-thin page-19-text-11">Our contracts are contingent upon clear title. There
                                are some
                                disputes
                                regarding
                                whether open permits are title issues so we will put in a clause protection
                                against any
                                open permits
                                at the time of closing that you might assume.</p>
                        </ul>
                        <ul style="list-style-image: url('images/home-buying/check.png');">
                            <li class="gold font-bold page-19-text-12" style="font-size: 20px;">What Stays or What Goes
                                from the
                                Home -
                            </li>
                            <p class="font-thin page-19-text-13">Typically all appliances and light fixtures stay with
                                the home
                                unless
                                specified in
                                the purchase and sale contract. Furniture and personal belongings are typically
                                removed.
                            </p>
                        </ul>
                        <ul style="list-style-image: url('images/home-buying/check.png');">
                            <li class="gold font-bold page-19-text-14" style="font-size: 20px;">The Condition of Home at
                                Closing
                                -</li>
                            <p class="font-thin page-19-text-15">The seller is required to keep the home in the same
                                condition
                                from when
                                the home
                                was shown unless repairs are negotiated.</p>
                        </ul>
                        <ul style="list-style-image: url('images/home-buying/check.png');">
                            <li class="gold font-bold page-19-text-16" style="font-size: 20px;">Closing Date -</li>
                            <p class="font-thin page-19-text-17">Make sure you negotiate enough time to close because
                                the seller
                                is not
                                obligated to
                                extend.</p>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <label for="page-19-text-1">Title</label>
                <input type="text" id="page-19-text-1" name="page_19_text_1" value="Things to Keep in Consideration:">

                <div class="flex">
                    <label for="page-19-text-2">Title</label>
                    <input type="text" id="page-19-text-2" name="page_19_text_2" value="Escrow Deposit -">

                    <label for="page-19-text-3">Text</label>
                    <textarea id="page-19-text-3" name="page_19_text_3"
                        rows="4">This is a good faith deposit to remove the home from the market and its availability to other purchasers. It is recommended to place at least 2% – 5% of sale price in escrow.</textarea>
                </div>
                <div class="flex">
                    <label for="page-19-text-4">Title</label>
                    <input type="text" id="page-19-text-4" name="page_19_text_4" value="Inspection -">

                    <label for="page-19-text-5">Text</label>
                    <textarea id="page-19-text-5" name="page_19_text_5"
                        rows="4">Your contract has a clause to add an inspection contingency if desired. We recommend it and if you are not satisfied with this condition, you can cancel and get your deposit returned.</textarea>
                </div>
                <div class="flex">
                    <label for="page-19-text-6">Title</label>
                    <input type="text" id="page-19-text-6" name="page_19_text_6" value="Financing Contingency -">

                    <label for="page-19-text-7">Text</label>
                    <textarea id="page-19-text-7" name="page_19_text_7"
                        rows="4">In the event you need a loan to purchase your home, we will add a financing contingency that allows you a certain amount of time to qualify and secure a loan commitment from a lender. If your loan is denied but time periods are met, your deposit will be returned.</textarea>
                </div>
                <div class="flex">
                    <label for="page-19-text-8">Title</label>
                    <input type="text" id="page-19-text-8" name="page_19_text_8" value="Appraisal -">

                    <label for="page-19-text-9">Text</label>
                    <textarea id="page-19-text-9" name="page_19_text_9"
                        rows="4">Whether cash or financing, we can add in an appraisal clause stating if the home appraises for less—you guessed it—you get your money back.</textarea>
                </div>
                <div class="flex">
                    <label for="page-19-text-10">Title</label>
                    <input type="text" id="page-19-text-10" name="page_19_text_10" value="Title -">

                    <label for="page-19-text-11">Text</label>
                    <textarea id="page-19-text-11" name="page_19_text_11"
                        rows="4">Our contracts are contingent upon clear title. There are some disputes regarding whether open permits are title issues so we will put in a clause protection against any open permits at the time of closing that you might assume.</textarea>
                </div>
                <div class="flex">
                    <label for="page-19-text-12">Title</label>
                    <input type="text" id="page-19-text-12" name="page_19_text_12"
                        value="What Stays or What Goes from the Home -">

                    <label for="page-19-text-13">Text</label>
                    <textarea id="page-19-text-13" name="page_19_text_13"
                        rows="4">Typically all appliances and light fixtures stay with the home unless specified in the purchase and sale contract. Furniture and personal belongings are typically removed.</textarea>
                </div>
                <div class="flex">
                    <label for="page-19-text-14">Title</label>
                    <input type="text" id="page-19-text-14" name="page_19_text_14"
                        value="The Condition of Home at Closing -">

                    <label for="page-19-text-15">Text</label>
                    <textarea id="page-19-text-15" name="page_19_text_15"
                        rows="4">The seller is required to keep the home in the same condition from when the home was shown unless repairs are negotiated.</textarea>
                </div>
                <div class="flex">
                    <label for="page-19-text-16">Title</label>
                    <input type="text" id="page-19-text-16" name="page_19_text_16" value="Closing Date -">

                    <label for="page-19-text-17">Text</label>
                    <textarea id="page-19-text-17" name="page_19_text_17"
                        rows="4">Make sure you negotiate enough time to close because the seller is not obligated to extend.</textarea>
                </div>
            </div>
        </div>

        <div class="row-divider"></div>

        <div class="row">
            <div class="row-image">
                <div class="page page-20 page-background"
                    style="background-image:url('images/home-buying/page-20.jpg');background-position:center;">
                    <img src="" id="imageBackground-page-20" style="display: none">
                    <input hidden name="page_20_img_1" value="images/home-buying/page-20.jpg">
                    <div class="container">
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <div class="button">
                    <label>Background Image</label>
                    <input type="file" id="imageBackgroundInput-page-20"
                        onchange="imageBackgroundInputChanged_page_20()">
                    <button type="button" onclick="startCropper_page_20()">Crop</button>
                    <button type="button" onclick="cropImage_page_20()">Save Crop</button>
                </div>
            </div>
        </div>
        <script>

        </script>

        <div class="row-divider"></div>

        <div class="row">
            <div class="row-image">
                <div class="page page-21 page-background"
                    style="background-image:url('images/home-buying/page-20.jpg');background-position:-600px;">
                    <div class="container" style="margin-left:175px;">
                        <p class="font-thin page-21-text-1" style="font-size: 25px;margin-top:0;padding-top:20px;">So
                            you found
                            the
                            one! What happens next is
                            typically
                            inspections.</p>
                        <p class="font-thin mb-40 page-21-text-2" style="font-size: 25px;">Many times the home
                            inspection
                            report will
                            identify
                            issues
                            that need to be addressed. One of three things can happen:.</p>
                        <div class="mb-40">
                            <img src="images/home-buying/1.png" alt="">
                            <p class="font-thin mb-40 absolute page-21-text-3" style="width:250px;left: 55px;
                            margin-top: -110px;page-21-text-3">You are happy
                                with the
                                condition of the home and decide to proceed to the
                                next step of continuing with financing or to closing.</p>
                        </div>
                        <div class="mb-40" style="margin-left: 50px;">
                            <img src="images/home-buying/2.png" alt="">
                            <p class="font-thin mb-40 absolute page-21-text-4 " style="width:250px;left: 90px;
                            margin-top: -110px;">You are happy
                                with the
                                condition of the home and decide to proceed to the
                                next step of continuing with financing or to closing.</p>
                        </div>
                        <div class="mb-40" style="margin-left: 100px;">
                            <img src="images/home-buying/3.png" alt="">
                            <p class="font-thin mb-40 absolute page-21-text-5" style="width:250px;left: 90px;
                            margin-top: -110px;">You are happy
                                with the
                                condition of the home and decide to proceed to the
                                next step of continuing with financing or to closing.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <label for="page-21-text-1">Title</label>
                <input type="text" id="page-21-text-1" name="page_21_text_1"
                    value="So you found the one! What happens next is typically inspections.">

                <label for="page-21-text-2">Title</label>
                <input type="text" id="page-21-text-2" name="page_21_text_2"
                    value="Many times the home inspection report will identify issues that need to be addressed. One of three things can happen:.">

                <label for="page-21-text-3">Text 1</label>
                <textarea id="page-21-text-3" name="page_21_text_3"
                    rows="4">You are happy with the condition of the home and decide to proceed to the next step of continuing with financing or to closing.</textarea>

                <label for="page-21-text-4">Text 2</label>
                <textarea id="page-21-text-4" name="page_21_text_4"
                    rows="4">You are happy with the condition of the home and decide to proceed to the next step of continuing with financing or to closing.</textarea>

                <label for="page-21-text-5">Text 3</label>
                <textarea id="page-21-text-5" name="page_21_text_5"
                    rows="4">You are happy with the condition of the home and decide to proceed to the next step of continuing with financing or to closing.</textarea>
            </div>
        </div>

        <div class="row-divider"></div>

        <div class="row">
            <div class="row-image">
                <div class="page page-22">
                    <img src="" id="imageBackground-page-22" style="display: none">
                    <input hidden name="page_22_img_1" value="images/home-buying/page-22.jpg">
                    <div class="container">
                        <div style="margin-left:50px;">
                            <h2 class="font-thin mb-10" style="font-size: 40px;margin-left:100px;">Buyer
                                Representation
                            </h2>
                            <h1 class="cover-page-thin font-thin gold">Agreement</h1>
                            <hr class="gold mb-50">
                            <div style="margin-left:100px;margin-right:50px;">
                                <p class="font-thin mb-20 page-22-text-1">If you’ve started looking for a home—and a
                                    real
                                    estate
                                    professional to
                                    assist you—your
                                    buyer’s representative may ask you to sign a Buyer Representation Agreement.
                                    What is
                                    this form?
                                    Why
                                    should you sign it?
                                </p>
                                <p class="font-thin page-22-text-2">A Buyer Representation Agreement is a legal document
                                    that
                                    formalized your
                                    working
                                    relationship with a particular buyer’s representative, detailing what
                                    services you
                                    are entitled
                                    to and
                                    what your buyer’s rep expects from you in return. While the language used in
                                    the
                                    document is
                                    formal,
                                    homebuyers should view it as an important and helpful tool for clarifying
                                    expectations,
                                    developing
                                    mutual loyalty, and most importantly, elevating the services you will
                                    receive.
                                </p>
                            </div>
                        </div>
                        <div class="absolute" style="bottom:0;">
                            <img class="half-page-img" id="section-22" src="images/home-buying/page-22.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <div class="button">
                    <label for="page-22-text-1">Text</label>
                    <textarea id="page-22-text-1" name="page_22_text_1"
                        rows="4">If you’ve started looking for a home—and a real estate professional to assist you—your buyer’s representative may ask you to sign a Buyer Representation Agreement. What is this form? Why should you sign it?</textarea>

                    <label for="page-22-text-2">Text</label>
                    <textarea id="page-22-text-2" name="page_22_text_2"
                        rows="4">A Buyer Representation Agreement is a legal document that formalized your working relationship with a particular buyer’s representative, detailing what services you are entitled to and what your buyer’s rep expects from you in return. While the language used in the document is formal, homebuyers should view it as an important and helpful tool for clarifying expectations, developing mutual loyalty, and most importantly, elevating the services you will receive.</textarea>

                    <label>Background Image</label>
                    <input type="file" id="imageBackgroundInput-page-22"
                        onchange="imageBackgroundInputChanged_page_22()">
                    <button type="button" onclick="startCropper_page_22()">Crop</button>
                    <button type="button" onclick="cropImage_page_22()">Save Crop</button>
                </div>
            </div>
        </div>
        <script>

        </script>

        <div class="row-divider"></div>

        <div class="row">
            <div class="row-image">
                <div class="page page-23 page-background"
                    style="background-image:url('images/home-buying/page-22.jpg');background-position:-550px 650px; background-size:contain;">
                    <div class="container" style="margin-left:175px;">
                        <p class="font-thin mb-50 page-23-text-1" style="font-size:40px;width:500px;margin-top:0px;">
                            Benefits
                            of
                            Signing a
                            <strong>Buyer’s</strong> <span class="gold">Representation Agreement</span></p>
                        <p class="font-thin mb-50 page-23-text-2" style="font-size: 20px;">While the fiduciary duty
                            really is
                            the main
                            reason to
                            sign a
                            Bey’s Rep Agreement, having one in place will also provide you with many benefits
                            during
                            your home
                            search & purchase</p>
                        <ul class="page-23-text-3" id="result-23-3"
                            style="list-style-image: url('images/home-buying/check.png');">
                            <li class="font-thin" style="font-size: 20px;">You are able to get a better idea of
                                the
                                scope of
                                services the broker/agent owes you as a client, as they are outlined in the
                                agreement &
                                discussed at
                                time to signing.</li>
                            <li class="font-thin" style="font-size: 20px;">You will be treated as a client
                                instead of a
                                customer,
                                therefore being entitled to superior services.
                            </li>
                            <li class="font-thin" style="font-size: 20px;">With full attention, accountability &
                                disclosure from
                                your buyer’s rep, your best interests will be top priority during your search,
                                negotiation & closing
                            </li>
                            <li class="font-thin" style="font-size: 20px;">With a formalised agency agreement in
                                place,
                                you & your
                                agent will be working as a team to make your home buying process a positive
                                experience
                                with positive
                                results.
                            </li>
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
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <label for="page-23-text-1">Text 1</label>
                <textarea id="page-23-text-1" name="page_23_text_1" rows="4">Benefits
                    of
                    Signing a
                    <strong>Buyer’s</strong> <span class="gold">Representation Agreement</span></textarea>

                <label for="page-23-text-2">Text 2</label>
                <textarea id="page-23-text-2" name="page_23_text_2" rows="4">While the fiduciary duty really is the main reason to sign a Bey’s Rep Agreement, having one in place will also provide you with many benefits during your home search & purchase
                </textarea>

                <label for="page-23-text-3">Text 3</label>
                <textarea id="page-23-text-3" name="page_23_text_3" rows="4">You are able to get a better idea of the scope of services the broker/agent owes you as a client, as they are outlined in the agreement & discussed at time to signing.
                    You will be treated as a client instead of a customer, therefore being entitled to superior services.
                    With full attention, accountability & disclosure from your buyer’s rep, your best interests will be top priority during your search, negotiation & closing
                    With a formalised agency agreement in place, you & your agent will be working as a team to make your home buying process a positive experience with positive results.
                </textarea>

            </div>
        </div>

        <div class="row-divider"></div>

        <div class="row">
            <div class="row-image">
                <div class="page page-24 page-background"
                    style="background-image:url('images/home-buying/page-24.jpg');background-position:center;">
                    <img src="" id="imageBackground-page-24" style="display: none">
                    <input hidden name="page_24_img_1" value="images/home-buying/page-24.jpg">
                    <div class="container" style="padding-top: 100%;">
                        <div class="absolute" style="left:70px;">
                            <h2 class="white font-thin"
                                style="font-size:90px;margin-left:125px;margin-bottom:10px;margin-top:0;">
                                Meet</h2>
                            <h1 class="gold font-thin" style="font-size:125px;margin-top: -50px;">The Agent</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <div class="button">
                    <label>Background Image</label>
                    <input type="file" id="imageBackgroundInput-page-24"
                        onchange="imageBackgroundInputChanged_page_24()">
                    <button type="button" onclick="startCropper_page_24()">Crop</button>
                    <button type="button" onclick="cropImage_page_24()">Save Crop</button>
                </div>
            </div>
        </div>
        <script>

        </script>


        <div class="row-divider"></div>

        <div class="row">
            <div class="row-image">
                <div class="page page-25 page-background"
                    style="background-image:url('images/home-buying/page-24.jpg');background-position:-600px;">
                    <div class="container" style="margin-left:186px;">
                        <p class="font-thin gold page-25-text-1"
                            style="font-size:120px;margin-left:-135px;margin-bottom:-60px;margin-top:0;padding-top:20px;">
                            Fernando
                        </p>
                        <p class="font-thin page-25-text-2" style="font-size:70px;margin-top:30px;">J. Grullon</p>
                        <p class="font-thin mb-50 page-25-text-3" style="font-size:16px;">
                            Fernando is a Certiﬁed Residential Specialist (CRS) which is the highest credential
                            awarded
                            to
                            residential sales agents, managers and brokers by the National Association of
                            Realtors.
                            Along with his
                            successful real estate career, Fernando holds a Masters Degree in International
                            Business
                            Administration
                            from Spain and a Law Degree from the Dominican Republic.<br><br>

                            Fernando has served as a Council Member of the Young Professionals Network
                            Leadership Board
                            and as a
                            State Director for the Miami Association of Realtors since 2016. He has been a Real
                            Estate
                            Professional
                            in Miami since 2014, winning the Leading-Edge Society Award of BHHS Florida Realty
                            in 2015,
                            and
                            recognized since 2016 as a "Top Producer" at Luxe Properties.<br><br>

                            Fernando Grullon guides every client through the real estate process with empathy,
                            commitment, and
                            integrity, Offering them a pleasant experience and a memorable transaction from
                            beginning to
                            end.
                        </p>
                        <div class="page-number absolute" style="background-image: url('images/home-buying/24.png');">
                            <div class="text" style="margin-top: 130px;margin-right: 150px;">
                                <h4 class="font-thin">THE HOME</h4>
                                <h3 class="font-thin gold">BUYING</h3>
                                <h2 class="font-thin">GUIDE</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <label for="page-25-text-1">First Name</label>
                <input type="text" id="page-25-text-1" name="page_25_text_1" value="Fernando">

                <label for="page-25-text-2">Last Name</label>
                <input type="text" id="page-25-text-2" name="page_25_text_2" value="J. Grullon">

                <label for="page-25-text-3">Text</label>
                <textarea id="page-25-text-3" name="page_25_text_3"
                    rows="10">Fernando is a Certiﬁed Residential Specialist (CRS) which is the highest credential awarded to residential sales agents, managers and brokers by the National Association of Realtors. Along with his successful real estate career, Fernando holds a Masters Degree in International Business Administration from Spain and a Law Degree from the Dominican Republic.<br><br>

                    Fernando has served as a Council Member of the Young Professionals Network Leadership Board and as a State Director for the Miami Association of Realtors since 2016. He has been a Real Estate Professional in Miami since 2014, winning the Leading-Edge Society Award of BHHS Florida Realty in 2015, and recognized since 2016 as a "Top Producer" at Luxe Properties.<br><br>

                    Fernando Grullon guides every client through the real estate process with empathy, commitment, and integrity, Offering them a pleasant experience and a memorable transaction frombeginning to end.</textarea>
            </div>
        </div>

        <div class="row-divider"></div>

        <div class="row">
            <div class="row-image">
                <div class="page page-26 page-background"
                    style="background-image:url('images/home-buying/page-26.jpg');background-position:center;">
                    <img src="" id="imageBackground-page-26" style="display: none">
                    <input hidden name="page_26_img_1" value="images/home-buying/page-26.jpg">
                    <div class="container">
                        <div class="absolute" style="top:30%;left:70px;padding-top: 100%;">
                            <h2 class="font-thin white mb-0" style="font-size:100px;margin-top:0;">Recent</h2>
                            <h1 class="font-thin gold" style="font-size:140px;">Lisitings</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <div class="button">
                    <label>Background Image</label>
                    <input type="file" id="imageBackgroundInput-page-26"
                        onchange="imageBackgroundInputChanged_page_26()">
                    <button type="button" onclick="startCropper_page_26()">Crop</button>
                    <button type="button" onclick="cropImage_page_26()">Save Crop</button>
                </div>
            </div>
        </div>
        <script>

        </script>

        <div class="row-divider"></div>

        <div class="row">
            <div class="row-image">
                <div class="page page-27 page-background"
                    style="background-image:url('images/home-buying/page-26.jpg');background-position:-600px;">
                    <img src="" id="imageBackground-page-27-1" style="display: none">
                    <input hidden name="page_27_img_1" value="images/home-buying/page-27-1.jpg">

                    <img src="" id="imageBackground-page-27-2" style="display: none">
                    <input hidden name="page_27_img_2" value="images/home-buying/page-27-2.jpg">

                    <img src="" id="imageBackground-page-27-3" style="display: none">
                    <input hidden name="page_27_img_3" value="images/home-buying/page-27-3.jpg">

                    <img src="" id="imageBackground-page-27-4" style="display: none">
                    <input hidden name="page_27_img_4" value="images/home-buying/page-27-4.jpg">

                    <div class="container" style="margin-left:200px;">
                        <div class="absolute" style="top:30px;">
                            <div style="background-color: #C6A467;padding:5px;width:176px;border-radius: 600%;">
                                <div style="background-color:white;padding:5px;border-radius: 550%;">
                                    <img id="page-27-img-1" src="images/home-buying/page-27-1.jpg" alt="" width="166"
                                        height="166" style="border-radius: 500%;">
                                </div>
                            </div>
                        </div>
                        <div class="absolute" style="top: -175px;left: 200px;width:450px;">
                            <p class="gold page-27-text-1" style="font-size:24px;">6495 SW 15 TERRACE</p>
                            <p class="page-27-text-2">PRICE: $2,375,000</p>
                            <p class="page-27-text-3">BEDS/BATHS: 6/6</p>
                            <p class="page-27-text-4">LIVING AREA: 6,395 SQ FT</p>
                            <p class="page-27-text-5">LOT SIZE: 38,768 SQ FT</p>
                        </div>

                        <div class="absolute" style="top: -130px;left: -130px;">
                            <div style="background-color: black;padding:5px;width:176px;border-radius: 600%;">
                                <div style="background-color:white;padding:5px;border-radius: 550%;">
                                    <img id="page-27-img-2" src="images/home-buying/page-27-2.jpg" alt="" width="166"
                                        height="166" style="border-radius: 500%;">
                                </div>
                            </div>
                        </div>
                        <div class="absolute" style="left: 70px;width: 450px;top: -340px;">
                            <p class="page-27-text-6" style="font-size:24px; ">6495 SW 15 TERRACE</p>
                            <p class="page-27-text-7">PRICE: $2,375,000</p>
                            <p class="page-27-text-8">BEDS/BATHS: 6/6</p>
                            <p class="page-27-text-9">LIVING AREA: 6,395 SQ FT</p>
                            <p class="page-27-text-10">LOT SIZE: 38,768 SQ FT</p>
                        </div>

                        <div class="absolute" style="top: -290px;">
                            <div style="background-color: #C6A467;padding:5px;width:176px;border-radius: 600%;">
                                <div style="background-color:white;padding:5px;border-radius: 550%;">
                                    <img id="page-27-img-3" src="images/home-buying/page-27-3.jpg" alt="" width="166"
                                        height="166" style="border-radius: 500%;">
                                </div>
                            </div>
                        </div>
                        <div class="absolute" style="top: -500px;left: 200px;width:450px;">
                            <p class="gold page-27-text-11" style="font-size:24px;">6495 SW 15 TERRACE</p>
                            <p class="page-27-text-12">PRICE: $2,375,000</p>
                            <p class="page-27-text-13">BEDS/BATHS: 6/6</p>
                            <p class="page-27-text-14">LIVING AREA: 6,395 SQ FT</p>
                            <p class="page-27-text-15">LOT SIZE: 38,768 SQ FT</p>
                        </div>

                        <div class="absolute" style="top: -475px;left: -130px;">
                            <div style="background-color: black;padding:5px;width:176px;border-radius: 600%;">
                                <div style="background-color:white;padding:5px;border-radius: 550%;">
                                    <img id="page-27-img-4" src="images/home-buying/page-27-2.jpg" alt="" width="166"
                                        height="166" style="border-radius: 500%;">
                                </div>
                            </div>
                        </div>
                        <div class="absolute" style="top:-675px;left:80px;width:450px;">
                            <p class="page-27-text-16" style="font-size:24px;">6495 SW 15 TERRACE</p>
                            <p class="page-27-text-17">PRICE: $2,375,000</p>
                            <p class="page-27-text-18">BEDS/BATHS: 6/6</p>
                            <p class="page-27-text-19">LIVING AREA: 6,395 SQ FT</p>
                            <p class="page-27-text-20">LOT SIZE: 38,768 SQ FT</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <label for="page-27-text-1">Title</label>
                <input type="text" id="page-27-text-1" name="page_27_text_1" value="6495 SW 15 TERRACE"
                    style="margin-bottom: -35px;">
                <div class="flex" style="margin-bottom: -35px;">
                    <label for="page-27-text-2">PRICE</label>
                    <input type="text" id="page-27-text-2" name="page_27_text_2" value="PRICE: $2,375,000">
                    <label for="page-27-text-3">BEDS/BATHS</label>
                    <input type="text" id="page-27-text-3" name="page_27_text_3" value="BEDS/BATHS: 6/6">
                </div>
                <div class="flex" style="margin-bottom: -35px;">
                    <label for="page-27-text-4">LIVING AREA</label>
                    <input type="text" id="page-27-text-4" name="page_27_text_4" value="LIVING AREA: 6,395 SQ FT">
                    <label for="page-27-text-5">LOT SIZE</label>
                    <input type="text" id="page-27-text-5" name="page_27_text_5" value="LOT SIZE: 38,768 SQ FT">
                </div>

                <div class="button">
                    <label>Image 1</label>
                    <input type="file" id="imageBackgroundInput-page-27-1"
                        onchange="imageBackgroundInputChanged_page_27_1()">
                    <button type="button" onclick="startCropper_page_27_1()">Crop</button>
                    <button type="button" onclick="cropImage_page_27_1()">Save Crop</button>
                </div>

                <label for="page-27-text-6">Title</label>
                <input type="text" id="page-27-text-6" name="page_27_text_6" value="6495 SW 15 TERRACE"
                    style="margin-bottom: -35px;">
                <div class="flex" style="margin-bottom: -35px;">
                    <label for="page-27-text-7">PRICE</label>
                    <input type="text" id="page-27-text-7" name="page_27_text_7" value="PRICE: $2,375,000">
                    <label for="page-27-text-3">BEDS/BATHS</label>
                    <input type="text" id="page-27-text-8" name="page_27_text_8" value="BEDS/BATHS: 6/6">
                </div>
                <div class="flex" style="margin-bottom: -35px;">
                    <label for="page-27-text-9">LIVING AREA</label>
                    <input type="text" id="page-27-text-9" name="page_27_text_9" value="LIVING AREA: 6,395 SQ FT">
                    <label for="page-27-text-5">LOT SIZE</label>
                    <input type="text" id="page-27-text-10" name="page_27_text_10" value="LOT SIZE: 38,768 SQ FT">
                </div>



                <label for="page-27-text-11">Title</label>
                <input type="text" id="page-27-text-11" name="page_27_text_11" value="6495 SW 15 TERRACE"
                    style="margin-bottom: -35px;">
                <div class="flex" style="margin-bottom: -35px;">
                    <label for="page-27-text-12">PRICE</label>
                    <input type="text" id="page-27-text-12" name="page_27_text_12" value="PRICE: $2,375,000">
                    <label for="page-27-text-3">BEDS/BATHS</label>
                    <input type="text" id="page-27-text-13" name="page_27_text_13" value="BEDS/BATHS: 6/6">
                </div>
                <div class="flex" style="margin-bottom: -35px;">
                    <label for="page-27-text-14">LIVING AREA</label>
                    <input type="text" id="page-27-text-14" name="page_27_text_14" value="LIVING AREA: 6,395 SQ FT">
                    <label for="page-27-text-5">LOT SIZE</label>
                    <input type="text" id="page-27-text-15" name="page_27_text_15" value="LOT SIZE: 38,768 SQ FT">
                </div>

                <div class="button">
                    <label>Image 2</label>
                    <input type="file" id="imageBackgroundInput-page-27-2"
                        onchange="imageBackgroundInputChanged_page_27_2()">
                    <button type="button" onclick="startCropper_page_27_2()">Crop</button>
                    <button type="button" onclick="cropImage_page_27_2()">Save Crop</button>
                </div>
                <div class="button">
                    <label>Image 3</label>
                    <input type="file" id="imageBackgroundInput-page-27-3"
                        onchange="imageBackgroundInputChanged_page_27_3()">
                    <button type="button" onclick="startCropper_page_27_3()">Crop</button>
                    <button type="button" onclick="cropImage_page_27_3()">Save Crop</button>
                </div>


                <label for="page-27-text-16">Title</label>
                <input type="text" id="page-27-text-16" name="page_27_text_16" value="6495 SW 15 TERRACE"
                    style="margin-bottom: -35px;">
                <div class="flex" style="margin-bottom: -35px;">
                    <label for="page-27-text-17">PRICE</label>
                    <input type="text" id="page-27-text-17" name="page_27_text_17" value="PRICE: $2,375,000">
                    <label for="page-27-text-3">BEDS/BATHS</label>
                    <input type="text" id="page-27-text-18" name="page_27_text_18" value="BEDS/BATHS: 6/6">
                </div>
                <div class="flex" style="margin-bottom: -35px;">
                    <label for="page-27-text-19">LIVING AREA</label>
                    <input type="text" id="page-27-text-19" name="page_27_text_19" value="LIVING AREA: 6,395 SQ FT">
                    <label for="page-27-text-5">LOT SIZE</label>
                    <input type="text" id="page-27-text-20" name="page_27_text_20" value="LOT SIZE: 38,768 SQ FT">
                </div>
                <div class="button">
                    <label>Image 4</label>
                    <input type="file" id="imageBackgroundInput-page-27-4"
                        onchange="imageBackgroundInputChanged_page_27_4()">
                    <button type="button" onclick="startCropper_page_27_4()">Crop</button>
                    <button type="button" onclick="cropImage_page_27_4()">Save Crop</button>
                </div>
            </div>
        </div>

        <div class="row-divider"></div>

        <div class="row">
            <div class="row-image">
                <div class="page page-28 page-background"
                    style="background-image:url('images/home-buying/page-28.jpg');background-position:center;">
                    <img src="" id="imageBackground-page-28" style="display: none">
                    <input hidden name="page_28_img_1" value="images/home-buying/page-28.jpg">
                    <div class="container">
                        <div class="absolute" style="top:30%;left:70px;padding-top: 105%;">
                            <h2 class="font-thin white mb-0" style="font-size:100px;margin-top: 0;">Recent</h2>
                            <h1 class="font-thin gold" style="font-size:140px;">Sales</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <div class="button">
                    <label>Background Image</label>
                    <input type="file" id="imageBackgroundInput-page-28"
                        onchange="imageBackgroundInputChanged_page_28()">
                    <button type="button" onclick="startCropper_page_28()">Crop</button>
                    <button type="button" onclick="cropImage_page_28()">Save Crop</button>
                </div>
            </div>
        </div>
        <script>


        </script>





        <script>

        </script>


        <div class="row-divider"></div>

        <div class="row">
            <div class="row-image">
                <div class="page page-29 page-background"
                    style="background-image:url('images/home-buying/page-28.jpg');background-position:-600px;">

                    <img src="" id="imageBackground-page-29-1" style="display: none">
                    <input hidden name="page_29_img_1" value="images/home-buying/page-27-1.jpg">
                    <img src="" id="imageBackground-page-29-2" style="display: none">
                    <input hidden name="page_29_img_2" value="images/home-buying/page-27-2.jpg">
                    <img src="" id="imageBackground-page-29-3" style="display: none">
                    <input hidden name="page_29_img_3" value="images/home-buying/page-27-3.jpg">
                    <img src="" id="imageBackground-page-29-4" style="display: none">
                    <input hidden name="page_29_img_4" value="images/home-buying/page-27-4.jpg">

                    <div class="container">
                        <div class="mb-20 golden-radius" style="background-color: #C6A467;padding:5px;">
                            <div style="background-color:white;padding:5px;border-radius: 550%;width:169px;">
                                <img id="page-29-img-1" src="images/home-buying/page-27-1.jpg" alt="" width="166"
                                    height="166" style="border-radius: 500%;">
                            </div>
                        </div>

                        <div class="absolute" style="top: -205px;left: 275px;width:450px;">
                            <p class="white page-29-text-1" style="font-size:24px;">6495 SW 15 TERRACE</p>
                            <p class="page-29-text-2">PRICE: $2,375,000</p>
                            <p class="page-29-text-3">BEDS/BATHS: 6/6</p>
                            <p class="page-29-text-4">LIVING AREA: 6,395 SQ FT</p>
                            <p class="page-29-text-5">LOT SIZE: 38,768 SQ FT</p>
                        </div>

                        <div class="mb-20 golden-radius"
                            style="background-color: #C6A467;padding:5px;margin-top: -135px;">
                            <div style="background-color:white;padding:5px;border-radius: 550%;width:169px;">
                                <img id="page-29-img-2" src="images/home-buying/page-27-2.jpg" alt="" width="166"
                                    height="166" style="border-radius: 500%;">
                            </div>
                        </div>
                        <div class="absolute" style="top: -210px;left: 275px;width:450px;">
                            <p class="white page-29-text-6" style="font-size:24px;">6495 SW 15 TERRACE</p>
                            <p class="page-29-text-7">PRICE: $2,375,000</p>
                            <p class="page-29-text-8">BEDS/BATHS: 6/6</p>
                            <p class="page-29-text-9">LIVING AREA: 6,395 SQ FT</p>
                            <p class="page-29-text-10">LOT SIZE: 38,768 SQ FT</p>
                        </div>

                        <div class="mb-20 golden-radius"
                            style="background-color: #C6A467;padding:5px;margin-top: -135px;">
                            <div style="background-color:white;padding:5px;border-radius: 550%;width:169px;">
                                <img id="page-29-img-3" src="images/home-buying/page-27-3.jpg" alt="" width="166"
                                    height="166" style="border-radius: 500%;">
                            </div>
                        </div>
                        <div class="absolute" style="top: -210px;left: 275px;width:450px;">
                            <p class="white page-29-text-11" style="font-size:24px;">6495 SW 15 TERRACE</p>
                            <p class="page-29-text-12">PRICE: $2,375,000</p>
                            <p class="page-29-text-13">BEDS/BATHS: 6/6</p>
                            <p class="page-29-text-14">LIVING AREA: 6,395 SQ FT</p>
                            <p class="page-29-text-15">LOT SIZE: 38,768 SQ FT</p>
                        </div>

                        <div class="golden-radius" style="background-color: #C6A467;padding:5px;margin-top: -135px;">
                            <div style="background-color:white;padding:5px;border-radius: 550%;width:169px;">
                                <img id="page-29-img-4" src="images/home-buying/page-27-4.jpg" alt="" width="166"
                                    height="166" style="border-radius: 500%;">
                            </div>
                        </div>
                        <div class="absolute" style="top: -205px;left: 275px;width:450px;">
                            <p class="white page-29-text-16" style="font-size:24px;">6495 SW 15 TERRACE</p>
                            <p class="page-29-text-17">PRICE: $2,375,000</p>
                            <p class="page-29-text-18">BEDS/BATHS: 6/6</p>
                            <p class="page-29-text-19">LIVING AREA: 6,395 SQ FT</p>
                            <p class="page-29-text-20">LOT SIZE: 38,768 SQ FT</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <label for="page-29-text-1">Title</label>
                <input type="text" id="page-29-text-1" name="page_29_text_1" value="6495 SW 15 TERRACE"
                    style="margin-bottom: -35px;">
                <div class="flex" style="margin-bottom: -35px;">
                    <label for="page-29-text-2">PRICE</label>
                    <input type="text" id="page-29-text-2" name="page_29_text_2" value="PRICE: $2,375,000">
                    <label for="page-29-text-3">BEDS/BATHS</label>
                    <input type="text" id="page-29-text-3" name="page_29_text_3" value="BEDS/BATHS: 6/6">
                </div>
                <div class="flex" style="margin-bottom: -35px;">
                    <label for="page-29-text-4">LIVING AREA</label>
                    <input type="text" id="page-29-text-4" name="page_29_text_4" value="LIVING AREA: 6,395 SQ FT">
                    <label for="page-29-text-5">LOT SIZE</label>
                    <input type="text" id="page-29-text-5" name="page_29_text_5" value="LOT SIZE: 38,768 SQ FT">
                </div>
                <div class="button">
                    <label>Background Image</label>
                    <input type="file" id="imageBackgroundInput-page-29-1"
                        onchange="imageBackgroundInputChanged_page_29_1()">
                    <button type="button" onclick="startCropper_page_29_1()">Crop</button>
                    <button type="button" onclick="cropImage_page_29_1()">Save Crop</button>
                </div>

                <label for="page-29-text-6">Title</label>
                <input type="text" id="page-29-text-6" name="page_29_text_6" value="6495 SW 15 TERRACE"
                    style="margin-bottom: -35px;">
                <div class="flex" style="margin-bottom: -35px;">
                    <label for="page-29-text-7">PRICE</label>
                    <input type="text" id="page-29-text-7" name="page_29_text_7" value="PRICE: $2,375,000">
                    <label for="page-29-text-8">BEDS/BATHS</label>
                    <input type="text" id="page-29-text-8" name="page_29_text_8" value="BEDS/BATHS: 6/6">
                </div>
                <div class="flex" style="margin-bottom: -35px;">
                    <label for="page-29-text-9">LIVING AREA</label>
                    <input type="text" id="page-29-text-9" name="page_29_text_9" value="LIVING AREA: 6,395 SQ FT">
                    <label for="page-29-text-10">LOT SIZE</label>
                    <input type="text" id="page-29-text-10" name="page_29_text_10" value="LOT SIZE: 38,768 SQ FT">
                </div>
                <div class="button">
                    <label>Background Image</label>
                    <input type="file" id="imageBackgroundInput-page-29-2"
                        onchange="imageBackgroundInputChanged_page_29_2()">
                    <button type="button" onclick="startCropper_page_29_2()">Crop</button>
                    <button type="button" onclick="cropImage_page_29_2()">Save Crop</button>
                </div>

                <label for="page-29-text-11">Title</label>
                <input type="text" id="page-29-text-11" name="page_29_text_11" value="6495 SW 15 TERRACE"
                    style="margin-bottom: -35px;">
                <div class="flex" style="margin-bottom: -35px;">
                    <label for="page-29-text-12">PRICE</label>
                    <input type="text" id="page-29-text-12" name="page_29_text_12" value="PRICE: $2,375,000">
                    <label for="page-29-text-13">BEDS/BATHS</label>
                    <input type="text" id="page-29-text-13" name="page_29_text_13" value="BEDS/BATHS: 6/6">
                </div>
                <div class="flex" style="margin-bottom: -35px;">
                    <label for="page-29-text-14">LIVING AREA</label>
                    <input type="text" id="page-29-text-14" name="page_29_text_14" value="LIVING AREA: 6,395 SQ FT">
                    <label for="page-29-text-10">LOT SIZE</label>
                    <input type="text" id="page-29-text-15" name="page_29_text_15" value="LOT SIZE: 38,768 SQ FT">
                </div>
                <div class="button">
                    <label>Background Image</label>
                    <input type="file" id="imageBackgroundInput-page-29-3"
                        onchange="imageBackgroundInputChanged_page_29_3()">
                    <button type="button" onclick="startCropper_page_29_3()">Crop</button>
                    <button type="button" onclick="cropImage_page_29_3()">Save Crop</button>
                </div>

                <label for="page-29-text-16">Title</label>
                <input type="text" id="page-29-text-16" name="page_29_text_16" value="6495 SW 15 TERRACE"
                    style="margin-bottom: -35px;">
                <div class="flex" style="margin-bottom: -35px;">
                    <label for="page-29-text-17">PRICE</label>
                    <input type="text" id="page-29-text-17" name="page_29_text_17" value="PRICE: $2,375,000">
                    <label for="page-29-text-18">BEDS/BATHS</label>
                    <input type="text" id="page-29-text-18" name="page_29_text_18" value="BEDS/BATHS: 6/6">
                </div>
                <div class="flex" style="margin-bottom: -35px;">
                    <label for="page-29-text-19">LIVING AREA</label>
                    <input type="text" id="page-29-text-19" name="page_29_text_19" value="LIVING AREA: 6,395 SQ FT">
                    <label for="page-29-text-20">LOT SIZE</label>
                    <input type="text" id="page-29-text-20" name="page_29_text_20" value="LOT SIZE: 38,768 SQ FT">
                </div>
                <div class="button">
                    <label>Background Image</label>
                    <input type="file" id="imageBackgroundInput-page-29-4"
                        onchange="imageBackgroundInputChanged_page_29_4()">
                    <button type="button" onclick="startCropper_page_29_4()">Crop</button>
                    <button type="button" onclick="cropImage_page_29_4()">Save Crop</button>
                </div>
            </div>
        </div>
        <script>

        </script>


        <div class="row-divider"></div>

        <div class="row">
            <div class="row-image">
                <div class="page page-30 page-background"
                    style="background-image:url('images/home-buying/page-30.jpg');background-position:center;">
                    <img src="" id="imageBackground-page-30" style="display: none">
                    <input hidden name="page_30_img_1" value="images/home-buying/page-30.jpg">
                    <div class="container" style="position: absolute;bottom: 0;">
                        <h2 class="mb-30"
                            style="font-weight: 300;color:white;font-size:80px;margin-left:150px;margin-bottom: 0;">
                            Happy
                        </h2>
                        <h1 style="font-weight: 300;color:#C5A367;font-size:140px;margin-left:120px;">Clients
                        </h1>
                        <h2 style="font-weight: 300;color:white;font-size:40px;margin: 0;margin-left:230px;">
                            Testimonials</h2>
                    </div>
                </div>
            </div>

            <div class="column-divider"></div>
            <div class="row-input">
                <div class="button">
                    <label>Background Image</label>
                    <input type="file" id="imageBackgroundInput-page-30"
                        onchange="imageBackgroundInputChanged_page_30()">
                    <button type="button" onclick="startCropper_page_30()">Crop</button>
                    <button type="button" onclick="cropImage_page_30()">Save Crop</button>
                </div>
            </div>
        </div>
        <script>

        </script>
        <div class="row-divider"></div>

        <div class="row">
            <div class="row-image">
                <div class="page page-31 page-background"
                    style="background-image:url('images/home-buying/page-30.jpg');background-position:-600px;">
                    <img src="" id="imageBackground-page-31-1" style="display: none">
                    <input hidden name="page_31_img_1" value="images/home-selling/Asset 27.png">

                    <img src="" id="imageBackground-page-31-2" style="display: none">
                    <input hidden name="page_31_img_2" value="images/home-selling/Asset 27.png">

                    <img src="" id="imageBackground-page-31-3" style="display: none">
                    <input hidden name="page_31_img_3" value="images/home-selling/Asset 27.png">
                    <div class="container" style="margin-left:70px;padding-top:30px;margin-right:50px;">
                        <div class="section" style="border:1px solid gray;margin-bottom:20px;padding-bottom:0px;">
                            <img id="page31-1" src="images/home-selling/Asset 27.png" alt=""
                                style="float: left;margin-bottom:-30px;" height="230px">
                            <img src="images/home-selling/divider-1.png" alt="" height="230px"
                                style="margin-left:-114px;z-index:100;margin-top:0;">
                            <div class="text" style="position: absolute;padding-left:30px;padding-top:30px;top: 0px;left: 255px;
                            width: 300px;">
                                <p class="page-31-text-2" style="font-weight: 300;font-size:16px;">"Awesomeness Customer
                                    Services!!!
                                    Dedication
                                    and Total
                                    commitment to his client's, He help us with care to ﬁnd us our Home. We
                                    highly
                                    recommend Mrs.
                                    Fernando Grullon"</p>
                                <p class="page-31-text-1" style="font-size: 22px;color: #C5A367;margin-left:25px;">-
                                    Mrs. Mercy</p>
                            </div>
                        </div>

                        <div class="section" style="border:1px solid gray;margin-bottom:20px;padding-bottom:0px;">
                            <img id="page31-2" src="images/home-selling/Asset 27.png" alt=""
                                style="float: left;margin-bottom:-30px;" height="230px">
                            <img src="images/home-selling/divider-1.png" alt="" height="230px"
                                style="margin-left:-114px;z-index:100;margin-top:0;">
                            <div class="text" style="position: absolute;padding-left:30px;padding-top:30px;top:265px;left: 255px;
                            width: 300px;">
                                <p class="page-31-text-4" style="font-weight: 300;font-size:16px;">"Awesomeness Customer
                                    Services!!!
                                    Dedication
                                    and Total
                                    commitment to his client's, He help us with care to ﬁnd us our Home. We
                                    highly
                                    recommend Mrs.
                                    Fernando Grullon"</p>
                                <p class="page-31-text-3" style="font-size: 22px;color: #C5A367;margin-left:25px;">-
                                    Mrs. Mercy</p>
                            </div>
                        </div>

                        <div class="section" style="border:1px solid gray;margin-bottom:20px;padding-bottom:0px;">
                            <img id="page31-3" id="section15" src="images/home-selling/Asset 27.png" alt=""
                                style="float: left;margin-bottom:-30px;" height="230px">
                            <img src="images/home-selling/divider-1.png" alt="" height="230px"
                                style="margin-left:-114px;z-index:100;margin-top:0;">
                            <div class="text" style="position: absolute;padding-left:30px;padding-top:30px;top:520px;left: 255px;
                            width: 300px;">
                                <p class="page-31-text-6" style="font-weight: 300;font-size:16px;">"Awesomeness Customer
                                    Services!!!
                                    Dedication
                                    and Total
                                    commitment to his client's, He help us with care to ﬁnd us our Home. We
                                    highly
                                    recommend Mrs.
                                    Fernando Grullon"</p>
                                <p class="page-31-text-5" style="font-size: 22px;color: #C5A367;margin-left:25px;">-
                                    Mrs. Mercy</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input">
                <div class="flex">
                    <label for="page-31-text-1">Name</label>
                    <input type="text" id="page-31-text-1" name="page_31_text_1" value="- Mrs. Mercy">

                    <label for="page-31-text-2">Text</label>
                    <textarea id="page-31-text-2" name="page_31_text_2"
                        rows="4">"Awesomeness Customer Services!!! Dedication and Total commitment to his client's, He help us with care to ﬁnd us our Home. We highly recommend Mrs. Fernando Grullon"</textarea>
                </div>
                <div class="button">
                    <label>Image 1</label>
                    <input type="file" id="imageBackgroundInput-page-31-1"
                        onchange="imageBackgroundInputChanged_page_31_1()">
                    <button type="button" onclick="startCropper_page_31_1()">Crop</button>
                    <button type="button" onclick="cropImage_page_31_1()">Save Crop</button>
                </div>

                <div class="flex">
                    <label for="page-31-text-3">Name</label>
                    <input type="text" id="page-31-text-3" name="page_31_text_3" value="- Mrs. Mercy">

                    <label for="page-31-text-4">Text</label>
                    <textarea id="page-31-text-4" name="page_31_text_4" rows="4">"Awesomeness Customer Services!!! Dedication and Total commitment to his client's, He help us with care to ﬁnd us our Home. We highly recommend Mrs. Fernando Grullon"
                </textarea>
                </div>
                <div class="button">
                    <label>Image 2</label>
                    <input type="file" id="imageBackgroundInput-page-31-2"
                        onchange="imageBackgroundInputChanged_page_31_2()">
                    <button type="button" onclick="startCropper_page_31_2()">Crop</button>
                    <button type="button" onclick="cropImage_page_31_2()">Save Crop</button>
                </div>
                <div class="flex">
                    <label for="page-31-text-5">Name</label>
                    <input type="text" id="page-31-text-5" name="page_31_text_5" value="- Mrs. Mercy">

                    <label for="page-31-text-6">Text</label>
                    <textarea id="page-31-text-6" name="page_31_text_6" rows="4">"Awesomeness Customer Services!!! Dedication and Total commitment to his client's, He help us with care to ﬁnd us our Home. We highly recommend Mrs. Fernando Grullon"
                </textarea>
                </div>
                <div class="button">
                    <label>Image 3</label>
                    <input type="file" id="imageBackgroundInput-page-31-3"
                        onchange="imageBackgroundInputChanged_page_31_3()">
                    <button type="button" onclick="startCropper_page_31_3()">Crop</button>
                    <button type="button" onclick="cropImage_page_31_3()">Save Crop</button>
                </div>
            </div>
        </div>

        <script>

        </script>
        <div class="row-divider"></div>

        <div class="row">
            <div class="row-image">
                <div class="page page-32">
                    <div class="page-bottom" style="text-align: center;">
                        <img src="images/last.png" alt="">
                    </div>
                </div>
            </div>
            <div class="column-divider"></div>
            <div class="row-input" style="margin:0;">
                <div class="button">
                    <button style="" type="submit" name="action" value="Generate" class="generate"
                        style="">Generate</button>
                    <button type="submit" name="action" value="Save" class="generate">Save</button>

                    <br />
                    JSON Upload:
                    <input type="file" id="jsonFileUpload" onchange="jsonFileUploaded()" />
                </div>
            </div>
        </div>
    </form>
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
 if (event_id == "page-3-text-4") {
     var text = $("#page-3-text-4").val();
     var array = document.getElementsByClassName("page-3-text-4");
     var textarea = array[0];
     textarea.innerHTML = text;
 } 
 else if (event_id == "page-3-text-5") {
         var arrayOfLines = $('#page-3-text-5').val().split('\n');
         var text = "";
         var i;
         for (i = 0; i < arrayOfLines.length; i++) {
             text += "<li>" + arrayOfLines[i] + "</li>";
         }
         var event_element = $("#" + event_id)
            var export_var = $("." + event_id);
            export_var.text(event_element.val());
        }
 else if (event_id == "page-4-text-2") {
         var arrayOfLines = $('#page-4-text-2').val().split('\n');
         var text = "";
         var i;
         for (i = 0; i < arrayOfLines.length; i++) {
             text += "<li>" + arrayOfLines[i] + "</li>";
         }
         document.getElementById("result-4-2").innerHTML = text;
         
        //    export_var.text(event_element.val());    
     } else if (event_id == "page-4-text-4") {
         var arrayOfLines = $('#page-4-text-4').val().split('\n');
         var text = "";
         var i;
         for (i = 0; i < arrayOfLines.length; i++) {
             text += "<li>" + arrayOfLines[i] + "</li>";
         }
         document.getElementById("result-4-4").innerHTML = text;
        }
        else if (event_id == "page-4-text-6") {
         var arrayOfLines = $('#page-4-text-6').val().split('\n');
         var text = "";
         var i;
         for (i = 0; i < arrayOfLines.length; i++) {
             text += "<li>" + arrayOfLines[i] + "</li>";
         }
         document.getElementById("result-4-6").innerHTML = text;
        }
        else if (event_id == "page-9-text-2") {
         var arrayOfLines = $('#page-9-text-2').val().split('\n');
         var text = "";
         var i;
         for (i = 0; i < arrayOfLines.length; i++) {
             text += "<li>" + arrayOfLines[i] + "</li>";
         }
         document.getElementById("result-9-2").innerHTML = text;
        }
        else if (event_id == "page-11-text-4") {
         var arrayOfLines = $('#page-11-text-4').val().split('\n');
         var text = "";
         var i;
         for (i = 0; i < arrayOfLines.length; i++) {
             text += "<li>" + arrayOfLines[i] + "</li>";
         }
         document.getElementById("result-11-4").innerHTML = text;
        }
        else if (event_id == "page-11-text-6") {
         var arrayOfLines = $('#page-11-text-6').val().split('\n');
         var text = "";
         var i;
         for (i = 0; i < arrayOfLines.length; i++) {
             text += "<li>" + arrayOfLines[i] + "</li>";
         }
         document.getElementById("result-11-6").innerHTML = text;
        }
        else if (event_id == "page-11-text-8") {
         var arrayOfLines = $('#page-11-text-8').val().split('\n');
         var text = "";
         var i;
         for (i = 0; i < arrayOfLines.length; i++) {
             text += "<li>" + arrayOfLines[i] + "</li>";
         }
         document.getElementById("result-11-8").innerHTML = text;
        }
        else if (event_id == "page-11-text-10") {
         var arrayOfLines = $('#page-11-text-10').val().split('\n');
         var text = "";
         var i;
         for (i = 0; i < arrayOfLines.length; i++) {
             text += "<li>" + arrayOfLines[i] + "</li>";
         }
         document.getElementById("result-11-10").innerHTML = text;
        }
        else if (event_id == "page-11-text-12") {
         var arrayOfLines = $('#page-11-text-12').val().split('\n');
         var text = "";
         var i;
         for (i = 0; i < arrayOfLines.length; i++) {
             text += "<li>" + arrayOfLines[i] + "</li>";
         }
         document.getElementById("result-11-12").innerHTML = text;
        }
        else if (event_id == "page-11-text-14") {
         var arrayOfLines = $('#page-11-text-14').val().split('\n');
         var text = "";
         var i;
         for (i = 0; i < arrayOfLines.length; i++) {
             text += "<li>" + arrayOfLines[i] + "</li>";
         }
         document.getElementById("result-11-14").innerHTML = text;
        }
        else if (event_id == "page-13-text-5") {
         var arrayOfLines = $('#page-13-text-5').val().split('\n');
         var text = "";
         var i;
         for (i = 0; i < arrayOfLines.length; i++) {
             text += "<li>" + arrayOfLines[i] + "</li>";
         }
         document.getElementById("result-13-5").innerHTML = text;
        }
        else if (event_id == "page-13-text-7") {
         var arrayOfLines = $('#page-13-text-7').val().split('\n');
         var text = "";
         var i;
         for (i = 0; i < arrayOfLines.length; i++) {
             text += "<li>" + arrayOfLines[i] + "</li>";
         }
         document.getElementById("result-13-7").innerHTML = text;
        }
        else if (event_id == "page-13-text-11") {
         var arrayOfLines = $('#page-13-text-11').val().split('\n');
         var text = "";
         var i;
         for (i = 0; i < arrayOfLines.length; i++) {
             text += "<li>" + arrayOfLines[i] + "</li>";
         }
         document.getElementById("result-13-11").innerHTML = text;
        }
        else if (event_id == "page-13-text-13") {
         var arrayOfLines = $('#page-13-text-13').val().split('\n');
         var text = "";
         var i;
         for (i = 0; i < arrayOfLines.length; i++) {
             text += "<li>" + arrayOfLines[i] + "</li>";
         }
         document.getElementById("result-13-13").innerHTML = text;
        }
        else if (event_id == "page-15-text-3") {
         var arrayOfLines = $('#page-15-text-3').val().split('\n');
         var text = "";
         var i;
         for (i = 0; i < arrayOfLines.length; i++) {
             text += "<li>" + arrayOfLines[i] + "</li>";
         }
         document.getElementById("result-15-3").innerHTML = text;
        }
        else if (event_id == "page-15-text-6") {
         var arrayOfLines = $('#page-15-text-6').val().split('\n');
         var text = "";
         var i;
         for (i = 0; i < arrayOfLines.length; i++) {
             text += "<li>" + arrayOfLines[i] + "</li>";
         }
         document.getElementById("result-15-6").innerHTML = text;
        }
        else if (event_id == "page-17-text-2") {
         var arrayOfLines = $('#page-17-text-2').val().split('\n');
         var text = "";
         var i;
         for (i = 0; i < arrayOfLines.length; i++) {
             text += "<li>" + arrayOfLines[i] + "</li>";
         }
         document.getElementById("result-17-2").innerHTML = text;
        }
        else if (event_id == "page-17-text-4") {
         var arrayOfLines = $('#page-17-text-4').val().split('\n');
         var text = "";
         var i;
         for (i = 0; i < arrayOfLines.length; i++) {
             text += "<li>" + arrayOfLines[i] + "</li>";
         }
         document.getElementById("result-17-4").innerHTML = text;
        } 
         else if (event_id == "page-17-text-6") {
         var arrayOfLines = $('#page-17-text-6').val().split('\n');
         var text = "";
         var i;
         for (i = 0; i < arrayOfLines.length; i++) {
             text += "<li>" + arrayOfLines[i] + "</li>";
         }
         document.getElementById("result-17-6").innerHTML = text;
        }
        else if (event_id == "page-19-text-3") {
         var arrayOfLines = $('#page-19-text-3').val().split('\n');
         var text = "";
         var i;
         for (i = 0; i < arrayOfLines.length; i++) {
             text += "<li>" + arrayOfLines[i] + "</li>";
         }
         var event_element = $("#" + event_id)
            var export_var = $("." + event_id);
            export_var.text(event_element.val());
        }
        else if (event_id == "page-19-text-5") {
         var arrayOfLines = $('#page-19-text-5').val().split('\n');
         var text = "";
         var i;
         for (i = 0; i < arrayOfLines.length; i++) {
             text += "<li>" + arrayOfLines[i] + "</li>";
         }
         var event_element = $("#" + event_id)
            var export_var = $("." + event_id);
            export_var.text(event_element.val());
        }
        else if (event_id == "page-19-text-7") {
         var arrayOfLines = $('#page-19-text-7').val().split('\n');
         var text = "";
         var i;
         for (i = 0; i < arrayOfLines.length; i++) {
             text += "<li>" + arrayOfLines[i] + "</li>";
         }
         var event_element = $("#" + event_id)
            var export_var = $("." + event_id);
            export_var.text(event_element.val());
        }
        else if (event_id == "page-19-text-9") {
         var arrayOfLines = $('#page-19-text-9').val().split('\n');
         var text = "";
         var i;
         for (i = 0; i < arrayOfLines.length; i++) {
             text += "<li>" + arrayOfLines[i] + "</li>";
         }
         var event_element = $("#" + event_id)
            var export_var = $("." + event_id);
            export_var.text(event_element.val());
        }
        else if (event_id == "page-19-text-11") {
         var arrayOfLines = $('#page-19-text-11').val().split('\n');
         var text = "";
         var i;
         for (i = 0; i < arrayOfLines.length; i++) {
             text += "<li>" + arrayOfLines[i] + "</li>";
         }
         var event_element = $("#" + event_id)
            var export_var = $("." + event_id);
            export_var.text(event_element.val());
        }
        else if (event_id == "page-19-text-13") {
         var arrayOfLines = $('#page-19-text-13').val().split('\n');
         var text = "";
         var i;
         for (i = 0; i < arrayOfLines.length; i++) {
             text += "<li>" + arrayOfLines[i] + "</li>";
         }
         var event_element = $("#" + event_id)
            var export_var = $("." + event_id);
            export_var.text(event_element.val());
        }
        else if (event_id == "page-19-text-15") {
         var arrayOfLines = $('#page-19-text-15').val().split('\n');
         var text = "";
         var i;
         for (i = 0; i < arrayOfLines.length; i++) {
             text += "<li>" + arrayOfLines[i] + "</li>";
         }
         var event_element = $("#" + event_id)
            var export_var = $("." + event_id);
            export_var.text(event_element.val());
        }
        else if (event_id == "page-19-text-17") {
         var arrayOfLines = $('#page-19-text-17').val().split('\n');
         var text = "";
         var i;
         for (i = 0; i < arrayOfLines.length; i++) {
             text += "<li>" + arrayOfLines[i] + "</li>";
         }
         var event_element = $("#" + event_id)
            var export_var = $("." + event_id);
            export_var.text(event_element.val());
        }
        else if (event_id == "page-21-text-3") {
         var arrayOfLines = $('#page-21-text-3').val().split('\n');
         var text = "";
         var i;
         for (i = 0; i < arrayOfLines.length; i++) {
             text += "<li>" + arrayOfLines[i] + "</li>";
         }
         var event_element = $("#" + event_id)
            var export_var = $("." + event_id);
            export_var.text(event_element.val());
        }
        else if (event_id == "page-21-text-4") {
         var arrayOfLines = $('#page-21-text-4').val().split('\n');
         var text = "";
         var i;
         for (i = 0; i < arrayOfLines.length; i++) {
             text += "<li>" + arrayOfLines[i] + "</li>";
         }
         var event_element = $("#" + event_id)
            var export_var = $("." + event_id);
            export_var.text(event_element.val());
        }
        else if (event_id == "page-21-text-5") {
         var arrayOfLines = $('#page-21-text-5').val().split('\n');
         var text = "";
         var i;
         for (i = 0; i < arrayOfLines.length; i++) {
             text += "<li>" + arrayOfLines[i] + "</li>";
         }
         var event_element = $("#" + event_id)
            var export_var = $("." + event_id);
            export_var.text(event_element.val());
        }
        else if (event_id == "page-22-text-1") {
         var arrayOfLines = $('#page-22-text-1').val().split('\n');
         var text = "";
         var i;
         for (i = 0; i < arrayOfLines.length; i++) {
             text += "<li>" + arrayOfLines[i] + "</li>";
         }
         var event_element = $("#" + event_id)
            var export_var = $("." + event_id);
            export_var.text(event_element.val());
        }
        else if (event_id == "page-22-text-2") {
         var arrayOfLines = $('#page-22-text-2').val().split('\n');
         var text = "";
         var i;
         for (i = 0; i < arrayOfLines.length; i++) {
             text += "<li>" + arrayOfLines[i] + "</li>";
         }
         var event_element = $("#" + event_id)
            var export_var = $("." + event_id);
            export_var.text(event_element.val());
        }
        else if (event_id == "page-23-text-1") {
            var arrayOfLines = $('#page-23-text-1').val().split('\n');
         var text = "";
         var i;
         for (i = 0; i < arrayOfLines.length; i++) {
             text +=  arrayOfLines[i] ;
         }
         document.getElementsByClassName("page-23-text-1")[0].innerHTML = text;
        }
        else if (event_id == "page-23-text-2") {
         var arrayOfLines = $('#page-23-text-2').val().split('\n');
         var text = "";
         var i;
         for (i = 0; i < arrayOfLines.length; i++) {
             text += "<li>" + arrayOfLines[i] + "</li>";
         }
         var event_element = $("#" + event_id)
            var export_var = $("." + event_id);
            export_var.text(event_element.val());
        }
        else if (event_id == "page-23-text-3") {
         var arrayOfLines = $('#page-23-text-3').val().split('\n');
         var text = "";
         var i;
         for (i = 0; i < arrayOfLines.length; i++) {
             text += "<li>" + arrayOfLines[i] + "</li>";
         }
         document.getElementById("result-23-3").innerHTML = text;
        }
        else if (event_id == "page-25-text-3") {
         var arrayOfLines = $('#page-25-text-3').val().split('\n');
         var text = "";
         var i;
         for (i = 0; i < arrayOfLines.length; i++) {
             text += "<li>" + arrayOfLines[i] + "</li>";
         }
         var event_element = $("#" + event_id)
            var export_var = $("." + event_id);
            export_var.text(event_element.val());
        }
        else if (event_id == "page-31-text-2") {
         var arrayOfLines = $('#page-31-text-2').val().split('\n');
         var text = "";
         var i;
         for (i = 0; i < arrayOfLines.length; i++) {
             text += "<li>" + arrayOfLines[i] + "</li>";
         }
         var event_element = $("#" + event_id)
            var export_var = $("." + event_id);
            export_var.text(event_element.val());
        }
        else if (event_id == "page-31-text-4") {
         var arrayOfLines = $('#page-31-text-4').val().split('\n');
         var text = "";
         var i;
         for (i = 0; i < arrayOfLines.length; i++) {
             text += "<li>" + arrayOfLines[i] + "</li>";
         }
         var event_element = $("#" + event_id)
            var export_var = $("." + event_id);
            export_var.text(event_element.val());
        }
        else if (event_id == "page-31-text-6") {
         var arrayOfLines = $('#page-31-text-6').val().split('\n');
         var text = "";
         var i;
         for (i = 0; i < arrayOfLines.length; i++) {
             text += "<li>" + arrayOfLines[i] + "</li>";
         }
         var event_element = $("#" + event_id)
            var export_var = $("." + event_id);
            export_var.text(event_element.val());
        }
        else if (event_id == "page-13-text-1") {
         var arrayOfLines = $('#page-13-text-1').val().split('\n');
         var text = "";
         var i;
         for (i = 0; i < arrayOfLines.length; i++) {
             text +=  arrayOfLines[i] ;
         }
         document.getElementsByClassName("page-13-text-1")[0].innerHTML = text;
        }
        else if (event_id == "page-13-text-9") {
         var arrayOfLines = $('#page-13-text-9').val().split('\n');
         var text = "";
         var i;
         for (i = 0; i < arrayOfLines.length; i++) {
             text += "<li>" + arrayOfLines[i] + "</li>";
         }
         var event_element = $("#" + event_id)
            var export_var = $("." + event_id);
            export_var.text(event_element.val());
        }
        else if (event_id == "page-13-text-3") {
         var arrayOfLines = $('#page-13-text-3').val().split('\n');
         var text = "";
         var i;
         for (i = 0; i < arrayOfLines.length; i++) {
             text += "<li>" + arrayOfLines[i] + "</li>";
         }
         var event_element = $("#" + event_id)
            var export_var = $("." + event_id);
            export_var.text(event_element.val());
        }
       
     
 });
});
</script>

<script>
    var cropper;

    function startCropper_page_2() {
              var image = document.getElementById("imageBackground-page-2");
              $(".page-2 .absolute").css("display", "none");
              cropper = new Cropper(image, {
                  minContainerHeight: 500,
              });
          }
  
          function imageBackgroundInputChanged_page_2() {
              var form_data = new FormData();
              form_data.append("file", $("#imageBackgroundInput-page-2")[0].files[0]);
              $.ajax({
                  url: '/uploadimage',
                  data: form_data,
                  type: "post",
                  cache: false,
                  contentType: false,
                  processData: false,
                  headers: {
                      "X-CSRF-Token": $('[name="_token"]').val(),
                  },
                  success: function (output) {
                      var imageurl="uploadedimages/";
                      $("#imageBackground-page-2").attr("src", "uploadedimages/" + output);
                      getBase64Image(document.getElementById("imageBackground-page-2"), function (base64) {
                        $(".page-2").css("background-image", "url("+imageurl + output + ")");
                          $("input[name=page_2_img_1]").val("uploadedimages/" + output);
                      });
                  },
              });
          }
  
          function cropImage_page_2() {
              cropper.getCroppedCanvas().toBlob(
                  (blob) => {
                      console.log("getCroppedCanvas");
                      const form_data = new FormData();
                      form_data.append("file", blob, "example.png");
                      $.ajax({
                          url: '/uploadimage',
                          data: form_data,
                          type: "post",
                          cache: false,
                          contentType: false,
                          processData: false,
                          headers: {
                              "X-CSRF-Token": $('[name="_token"]').val(),
                          },
                          success: function (output) {
                            var imageurl="uploadedimages/";
                              cropper.destroy();
                              $("#imageBackground-page-2").attr("src", "uploadedimages/" + output);
                              getBase64Image(document.getElementById("imageBackground-page-2"), function (base64) {
                                $(".page-2").css("background-image", "url("+imageurl + output + ")");
                                  $("input[name=page_2_img_1]").val("uploadedimages/" + output);
                              });
                              $(".page-2 .absolute").css("display", "block");
                          },
                      });
                  } /*, 'image/png' */
              );
          }   

 function startCropper_page_5() {
            var image = document.getElementById("imageBackground-page-5");
            $(".page-5 .absolute").css("display", "none");
            cropper = new Cropper(image, {
                minContainerHeight: 500,
            });
        }

        function imageBackgroundInputChanged_page_5() {
            var form_data = new FormData();
            form_data.append("file", $("#imageBackgroundInput-page-5")[0].files[0]);
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: "post",
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    "X-CSRF-Token": $('[name="_token"]').val(),
                },
                success: function (output) {
                    var imageurl="uploadedimages/";
                    $("#imageBackground-page-5").attr("src", "uploadedimages/" + output);
                    getBase64Image(document.getElementById("imageBackground-page-5"), function (base64) {
                        $(".page-5").css("background-image", "url("+imageurl + output + ")");
                        $("input[name=page_5_img_1]").val("uploadedimages/" + output);
                    });
                },
            });
        }

        function cropImage_page_5() {
            cropper.getCroppedCanvas().toBlob(
                (blob) => {
                    console.log("getCroppedCanvas");
                    const form_data = new FormData();
                    form_data.append("file", blob, "example.png");
                    $.ajax({
                        url: '/uploadimage',
                        data: form_data,
                        type: "post",
                        cache: false,
                        contentType: false,
                        processData: false,
                        headers: {
                            "X-CSRF-Token": $('[name="_token"]').val(),
                        },
                        success: function (output) {
                            var imageurl="uploadedimages/";
                            cropper.destroy();
                            $("#imageBackground-page-5").attr("src", "uploadedimages/" + output);
                            getBase64Image(document.getElementById("imageBackground-page-5"), function (base64) {
                                $(".page-5").css("background-image", "url("+imageurl + output + ")");
                                $("input[name=page_5_img_1]").val("uploadedimages/" + output);
                            });
                            $(".page-5 .absolute").css("display", "block");
                        },
                    });
                } /*, 'image/png' */
            );
        }   

 function startCropper_page_6() {
              var image = document.getElementById("imageBackground-page-6");
              $(".page-6 .absolute").css("display", "none");
              cropper = new Cropper(image, {
                  minContainerHeight: 500,
              });
          }
  
          function imageBackgroundInputChanged_page_6() {
              var form_data = new FormData();
              form_data.append("file", $("#imageBackgroundInput-page-6")[0].files[0]);
              $.ajax({
                  url: '/uploadimage',
                  data: form_data,
                  type: "post",
                  cache: false,
                  contentType: false,
                  processData: false,
                  headers: {
                      "X-CSRF-Token": $('[name="_token"]').val(),
                  },
                  success: function (output) {
                    var imageurl="uploadedimages/";
                      $("#imageBackground-page-6").attr("src", "uploadedimages/" + output);
                      getBase64Image(document.getElementById("imageBackground-page-6"), function (base64) {
                          $(".page-6").css("background-image", "url("+imageurl + output + ")");
                          $("input[name=page_6_img_1]").val("uploadedimages/" + output);
                      });
                  },
              });
          }
  
          function cropImage_page_6() {
              cropper.getCroppedCanvas().toBlob(
                  (blob) => {
                      console.log("getCroppedCanvas");
                      const form_data = new FormData();
                      form_data.append("file", blob, "example.png");
                      $.ajax({
                          url: '/uploadimage',
                          data: form_data,
                          type: "post",
                          cache: false,
                          contentType: false,
                          processData: false,
                          headers: {
                              "X-CSRF-Token": $('[name="_token"]').val(),
                          },
                          success: function (output) {
                              cropper.destroy();
                              var imageurl="uploadedimages/";
                              $("#imageBackground-page-6").attr("src", "uploadedimages/" + output);
                              getBase64Image(document.getElementById("imageBackground-page-6"), function (base64) {
                                  $(".page-6").css("background-image", "url("+imageurl + output + ")");
                                  $("input[name=page_6_img_1]").val("uploadedimages/" + output);
                              });
                              $(".page-6 .absolute").css("display", "block");
                          },
                      });
                  } /*, 'image/png' */
              );
          }   

function startCropper_page_7() {
              var image = document.getElementById("imageBackground-page-7");
              $(".page-7 .absolute").css("display", "none");
              cropper = new Cropper(image, {
                  minContainerHeight: 500,
              });
          }
  
          function imageBackgroundInputChanged_page_7() {
              var form_data = new FormData();
              form_data.append("file", $("#imageBackgroundInput-page-7")[0].files[0]);
              $.ajax({
                  url: '/uploadimage',
                  data: form_data,
                  type: "post",
                  cache: false,
                  contentType: false,
                  processData: false,
                  headers: {
                      "X-CSRF-Token": $('[name="_token"]').val(),
                  },
                  success: function (output) {
                    var imageurl="uploadedimages/";
                      $("#imageBackground-page-7").attr("src", "uploadedimages/" + output);
                      getBase64Image(document.getElementById("imageBackground-page-7"), function (base64) {
                          $(".page-7").css("background-image", "url("+imageurl + output + ")");
                          $("input[name=page_7_img_1]").val("uploadedimages/" + output);
                      });
                  },
              });
          }
  
          function cropImage_page_7() {
              cropper.getCroppedCanvas().toBlob(
                  (blob) => {
                      console.log("getCroppedCanvas");
                      const form_data = new FormData();
                      form_data.append("file", blob, "example.png");
                      $.ajax({
                          url: '/uploadimage',
                          data: form_data,
                          type: "post",
                          cache: false,
                          contentType: false,
                          processData: false,
                          headers: {
                              "X-CSRF-Token": $('[name="_token"]').val(),
                          },
                          success: function (output) {
                            var imageurl="uploadedimages/";
                              cropper.destroy();
                              $("#imageBackground-page-7").attr("src", "uploadedimages/" + output);
                              getBase64Image(document.getElementById("imageBackground-page-7"), function (base64) {
                                  $(".page-7").css("background-image", "url("+imageurl + output + ")");
                                  $("input[name=page_7_img_1]").val("uploadedimages/" + output);
                              });
                              $(".page-7 .absolute").css("display", "block");
                          },
                      });
                  } /*, 'image/png' */
              );
          }   

  function startCropper_page_10() {
              var image = document.getElementById("imageBackground-page-10");
              $(".page-10 .absolute").css("display", "none");
              cropper = new Cropper(image, {
                  minContainerHeight: 500,
              });
          }
  
          function imageBackgroundInputChanged_page_10() {
              var form_data = new FormData();
              form_data.append("file", $("#imageBackgroundInput-page-10")[0].files[0]);
              $.ajax({
                  url: '/uploadimage',
                  data: form_data,
                  type: "post",
                  cache: false,
                  contentType: false,
                  processData: false,
                  headers: {
                      "X-CSRF-Token": $('[name="_token"]').val(),
                  },
                  success: function (output) {
                    var imageurl="uploadedimages/";
                      $("#imageBackground-page-10").attr("src", "uploadedimages/" + output);
                      getBase64Image(document.getElementById("imageBackground-page-10"), function (base64) {
                          $(".page-10").css("background-image", "url("+imageurl + output + ")");
                          $("input[name=page_10_img_1]").val("uploadedimages/" + output);
                      });
                  },
              });
          }
  
          function cropImage_page_10() {
              cropper.getCroppedCanvas().toBlob(
                  (blob) => {
                      console.log("getCroppedCanvas");
                      const form_data = new FormData();
                      form_data.append("file", blob, "example.png");
                      $.ajax({
                          url: '/uploadimage',
                          data: form_data,
                          type: "post",
                          cache: false,
                          contentType: false,
                          processData: false,
                          headers: {
                              "X-CSRF-Token": $('[name="_token"]').val(),
                          },
                          success: function (output) {
                            var imageurl="uploadedimages/";
                              cropper.destroy();
                              $("#imageBackground-page-10").attr("src", "uploadedimages/" + output);
                              getBase64Image(document.getElementById("imageBackground-page-10"), function (base64) {
                                  $(".page-10").css("background-image", "url("+imageurl + output + ")");
                                  $("input[name=page_10_img_1]").val("uploadedimages/" + output);
                              });
                              $(".page-10 .absolute").css("display", "block");
                          },
                      });
                  } /*, 'image/png' */
              );
          }   

   function startCropper_page_12_1() {
            var image = document.getElementById("imageBackground-page-12-1");
            $(".page-12 #section12-1").css("display", "none");
            cropper = new Cropper(image, {
                minContainerHeight: 500,
            });
        }

        function imageBackgroundInputChanged_page_12_1() {
            var form_data = new FormData();
            form_data.append("file", $("#imageBackgroundInput-page-12-1")[0].files[0]);
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: "post",
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    "X-CSRF-Token": $('[name="_token"]').val(),
                },
                success: function (output) {
                    var imageurl="uploadedimages/";
                    $("#imageBackground-page-12-1").attr("src", "uploadedimages/" + output);
                    getBase64Image(document.getElementById("imageBackground-page-12-1"), function (base64) {
                        // $("#inner-section1 ").css("background-image", "url("+ base64 + ")");
                        $("#section12-1").attr("src", "uploadedimages/" + output);
                        $("input[name=page_12_img_1]").val("uploadedimages/" + output);
                    });
                },
            });
        }

        function cropImage_page_12_1() {
            cropper.getCroppedCanvas().toBlob(
                (blob) => {
                    console.log("getCroppedCanvas");
                    const form_data = new FormData();
                    form_data.append("file", blob, "example.png");
                    $.ajax({
                        url: '/uploadimage',
                        data: form_data,
                        type: "post",
                        cache: false,
                        contentType: false,
                        processData: false,
                        headers: {
                            "X-CSRF-Token": $('[name="_token"]').val(),
                        },
                        success: function (output) {
                            var imageurl="uploadedimages/";
                            cropper.destroy();
                            $("#imageBackground-page-12-1").attr("src", "uploadedimages/" + output);
                            getBase64Image(document.getElementById("imageBackground-page-12-1"), function (base64) {
                                $("#section12-1").attr("src", "uploadedimages/" + output);
                                $("input[name=page_12_img_1]").val("uploadedimages/" + output);
                            });
                            $("#section12-1").css("display", "block");
                        },
                    });
                } /*, 'image/png' */
            );
        }
        function startCropper_page_12_2() {
            var image = document.getElementById("imageBackground-page-12-2");
            $(".page-12 #section12-2").css("display", "none");
            cropper = new Cropper(image, {
                minContainerHeight: 500,
            });
        }

        function imageBackgroundInputChanged_page_12_2() {
            var form_data = new FormData();
            form_data.append("file", $("#imageBackgroundInput-page-12-2")[0].files[0]);
            $.ajax({
                url: '/uploadimage',
                data: form_data,
                type: "post",
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    "X-CSRF-Token": $('[name="_token"]').val(),
                },
                success: function (output) {
                    var imageurl="uploadedimages/";
                    $("#imageBackground-page-12-2").attr("src", "uploadedimages/" + output);
                    getBase64Image(document.getElementById("imageBackground-page-12-2"), function (base64) {
                        // $("#inner-section1 ").css("background-image", "url("+ base64 + ")");
                        $("#section12-2").attr("src", "uploadedimages/" + output);
                        $("input[name=page_12_img_2]").val("uploadedimages/" + output);
                    });
                },
            });
        }

        function cropImage_page_12_2() {
            cropper.getCroppedCanvas().toBlob(
                (blob) => {
                    console.log("getCroppedCanvas");
                    const form_data = new FormData();
                    form_data.append("file", blob, "example.png");
                    $.ajax({
                        url: '/uploadimage',
                        data: form_data,
                        type: "post",
                        cache: false,
                        contentType: false,
                        processData: false,
                        headers: {
                            "X-CSRF-Token": $('[name="_token"]').val(),
                        },
                        success: function (output) {
                            var imageurl="uploadedimages/";
                            cropper.destroy();
                            $("#imageBackground-page-12-2").attr("src", "uploadedimages/" + output);
                            getBase64Image(document.getElementById("imageBackground-page-12-2"), function (base64) {
                                $("#section12-2").attr("src", "uploadedimages/" + output);
                                $("input[name=page_12_img_2]").val("uploadedimages/" + output);
                            });
                            $("#section12-2").css("display", "block");
                        },
                    });
                } /*, 'image/png' */
            );
        }
        

 function startCropper_page_14() {
              var image = document.getElementById("imageBackground-page-14");
              $(".page-10 .absolute").css("display", "none");
              cropper = new Cropper(image, {
                  minContainerHeight: 500,
              });
          }
  
          function imageBackgroundInputChanged_page_14() {
              var form_data = new FormData();
              form_data.append("file", $("#imageBackgroundInput-page-14")[0].files[0]);
              $.ajax({
                  url: '/uploadimage',
                  data: form_data,
                  type: "post",
                  cache: false,
                  contentType: false,
                  processData: false,
                  headers: {
                      "X-CSRF-Token": $('[name="_token"]').val(),
                  },
                  success: function (output) {
                    var imageurl="uploadedimages/";
                      $("#imageBackground-page-14").attr("src", "uploadedimages/" + output);
                      getBase64Image(document.getElementById("imageBackground-page-14"), function (base64) {
                          $(".page-14").css("background-image", "url("+imageurl + output + ")");
                          $(".page-15").css("background-image", "url("+imageurl + output + ")");
                          $("input[name=page_14_img_1]").val("uploadedimages/" + output);
                      });
                  },
              });
          }
  
          function cropImage_page_14() {
              cropper.getCroppedCanvas().toBlob(
                  (blob) => {
                      console.log("getCroppedCanvas");
                      const form_data = new FormData();
                      form_data.append("file", blob, "example.png");
                      $.ajax({
                          url: '/uploadimage',
                          data: form_data,
                          type: "post",
                          cache: false,
                          contentType: false,
                          processData: false,
                          headers: {
                              "X-CSRF-Token": $('[name="_token"]').val(),
                          },
                          success: function (output) {
                            var imageurl="uploadedimages/";
                              cropper.destroy();
                              $("#imageBackground-page-14").attr("src", "uploadedimages/" + output);
                              getBase64Image(document.getElementById("imageBackground-page-14"), function (base64) {
                                  $(".page-14").css("background-image", "url("+imageurl + output + ")");
                                  $(".page-15").css("background-image", "url("+imageurl + output + ")");
                                  $("input[name=page_14_img_1]").val("uploadedimages/" + output);
                              });
                              $(".page-10 .absolute").css("display", "block");
                          },
                      });
                  } /*, 'image/png' */
              );
          }   

 function startCropper_page_16() {
              var image = document.getElementById("imageBackground-page-16");
              $(".page-16 .absolute").css("display", "none");
              cropper = new Cropper(image, {
                  minContainerHeight: 500,
              });
          }
  
          function imageBackgroundInputChanged_page_16() {
              var form_data = new FormData();
              form_data.append("file", $("#imageBackgroundInput-page-16")[0].files[0]);
              $.ajax({
                  url: '/uploadimage',
                  data: form_data,
                  type: "post",
                  cache: false,
                  contentType: false,
                  processData: false,
                  headers: {
                      "X-CSRF-Token": $('[name="_token"]').val(),
                  },
                  success: function (output) {
                    var imageurl="uploadedimages/";
                      $("#imageBackground-page-16").attr("src", "uploadedimages/" + output);
                      getBase64Image(document.getElementById("imageBackground-page-16"), function (base64) {
                          $(".page-16").css("background-image", "url("+imageurl + output + ")");
                          $(".page-17").css("background-image", "url("+imageurl + output + ")");
                          $("input[name=page_16_img_1]").val("uploadedimages/" + output);
                      });
                  },
              });
          }
  
          function cropImage_page_16() {
              cropper.getCroppedCanvas().toBlob(
                  (blob) => {
                      console.log("getCroppedCanvas");
                      const form_data = new FormData();
                      form_data.append("file", blob, "example.png");
                      $.ajax({
                          url: '/uploadimage',
                          data: form_data,
                          type: "post",
                          cache: false,
                          contentType: false,
                          processData: false,
                          headers: {
                              "X-CSRF-Token": $('[name="_token"]').val(),
                          },
                          success: function (output) {
                            var imageurl="uploadedimages/";
                              cropper.destroy();
                              $("#imageBackground-page-16").attr("src", "uploadedimages/" + output);
                              getBase64Image(document.getElementById("imageBackground-page-16"), function (base64) {
                                  $(".page-16").css("background-image", "url("+imageurl + output + ")");
                                  $("input[name=page_16_img_1]").val("uploadedimages/" + output);
                                  $(".page-17").css("background-image", "url("+imageurl + output + ")");
                              });
                              $(".page-16 .absolute").css("display", "block");
                          },
                      });
                  } /*, 'image/png' */
              );
          }   

   function startCropper_page_18() {
              var image = document.getElementById("imageBackground-page-18");
              $(".page-18 .absolute").css("display", "none");
              cropper = new Cropper(image, {
                  minContainerHeight: 500,
              });
          }
  
          function imageBackgroundInputChanged_page_18() {
              var form_data = new FormData();
              form_data.append("file", $("#imageBackgroundInput-page-18")[0].files[0]);
              $.ajax({
                  url: '/uploadimage',
                  data: form_data,
                  type: "post",
                  cache: false,
                  contentType: false,
                  processData: false,
                  headers: {
                      "X-CSRF-Token": $('[name="_token"]').val(),
                  },
                  success: function (output) {
                    var imageurl="uploadedimages/";
                      $("#imageBackground-page-18").attr("src", "uploadedimages/" + output);
                      getBase64Image(document.getElementById("imageBackground-page-18"), function (base64) {
                          $(".page-18").css("background-image", "url("+imageurl + output + ")");
                          $(".page-19").css("background-image", "url("+imageurl + output + ")");
                          $("input[name=page_18_img_1]").val("uploadedimages/" + output);
                      });
                  },
              });
          }
  
          function cropImage_page_18() {
              cropper.getCroppedCanvas().toBlob(
                  (blob) => {
                      console.log("getCroppedCanvas");
                      const form_data = new FormData();
                      form_data.append("file", blob, "example.png");
                      $.ajax({
                          url: '/uploadimage',
                          data: form_data,
                          type: "post",
                          cache: false,
                          contentType: false,
                          processData: false,
                          headers: {
                              "X-CSRF-Token": $('[name="_token"]').val(),
                          },
                          success: function (output) {
                              cropper.destroy();
                              var imageurl="uploadedimages/";
                              $("#imageBackground-page-18").attr("src", "uploadedimages/" + output);
                              getBase64Image(document.getElementById("imageBackground-page-18"), function (base64) {
                                  $(".page-18").css("background-image", "url("+imageurl + output + ")");
                                  $(".page-19").css("background-image", "url("+imageurl + output + ")");
                                  $("input[name=page_18_img_1]").val("uploadedimages/" + output);
                              });
                              $(".page-18 .absolute").css("display", "block");
                          },
                      });
                  } /*, 'image/png' */
              );
          }   

function startCropper_page_20() {
              var image = document.getElementById("imageBackground-page-20");
              $(".page-20 .absolute").css("display", "none");
              cropper = new Cropper(image, {
                  minContainerHeight: 500,
              });
          }
  
          function imageBackgroundInputChanged_page_20() {
              var form_data = new FormData();
              form_data.append("file", $("#imageBackgroundInput-page-20")[0].files[0]);
              $.ajax({
                  url: '/uploadimage',
                  data: form_data,
                  type: "post",
                  cache: false,
                  contentType: false,
                  processData: false,
                  headers: {
                      "X-CSRF-Token": $('[name="_token"]').val(),
                  },
                  success: function (output) {
                    var imageurl="uploadedimages/";
                      $("#imageBackground-page-20").attr("src", "uploadedimages/" + output);
                      getBase64Image(document.getElementById("imageBackground-page-20"), function (base64) {
                          $(".page-20").css("background-image", "url("+imageurl + output + ")");
                          $(".page-21").css("background-image", "url("+imageurl + output + ")");
                          $("input[name=page_20_img_1]").val("uploadedimages/" + output);
                      });
                  },
              });
          }
  
          function cropImage_page_20() {
              cropper.getCroppedCanvas().toBlob(
                  (blob) => {
                      console.log("getCroppedCanvas");
                      const form_data = new FormData();
                      form_data.append("file", blob, "example.png");
                      $.ajax({
                          url: '/uploadimage',
                          data: form_data,
                          type: "post",
                          cache: false,
                          contentType: false,
                          processData: false,
                          headers: {
                              "X-CSRF-Token": $('[name="_token"]').val(),
                          },
                          success: function (output) {
                              cropper.destroy();
                              var imageurl="uploadedimages/";
                              $("#imageBackground-page-20").attr("src", "uploadedimages/" + output);
                              getBase64Image(document.getElementById("imageBackground-page-20"), function (base64) {
                                  $(".page-20").css("background-image", "url("+imageurl + output + ")");
                                  $(".page-21").css("background-image", "url("+imageurl + output + ")");
                                  $("input[name=page_20_img_1]").val("uploadedimages/" + output);
                              });
                              $(".page-20 .absolute").css("display", "block");
                          },
                      });
                  } /*, 'image/png' */
              );
          }   

 function startCropper_page_22() {
              var image = document.getElementById("imageBackground-page-22");
              $(".page-22 .absolute").css("display", "none");
              cropper = new Cropper(image, {
                  minContainerHeight: 500,
              });
          }
  
          function imageBackgroundInputChanged_page_22() {
              var form_data = new FormData();
              form_data.append("file", $("#imageBackgroundInput-page-22")[0].files[0]);
              $.ajax({
                  url: '/uploadimage',
                  data: form_data,
                  type: "post",
                  cache: false,
                  contentType: false,
                  processData: false,
                  headers: {
                      "X-CSRF-Token": $('[name="_token"]').val(),
                  },
                  success: function (output) {
                    var imageurl="uploadedimages/";
                      $("#imageBackground-page-22").attr("src", "uploadedimages/" + output);
                      getBase64Image(document.getElementById("imageBackground-page-22"), function (base64) {
                             $("#section-22").attr("src", "uploadedimages/" + output);
                             $(".page-23").css("background-image", "url("+imageurl + output + ")");
                            $("input[name=page_22_img_1]").val("uploadedimages/" + output);
                      });
                  },
              });
          }
  
          function cropImage_page_22() {
              cropper.getCroppedCanvas().toBlob(
                  (blob) => {
                      console.log("getCroppedCanvas");
                      const form_data = new FormData();
                      form_data.append("file", blob, "example.png");
                      $.ajax({
                          url: '/uploadimage',
                          data: form_data,
                          type: "post",
                          cache: false,
                          contentType: false,
                          processData: false,
                          headers: {
                              "X-CSRF-Token": $('[name="_token"]').val(),
                          },
                          success: function (output) {
                              cropper.destroy();
                              var imageurl="uploadedimages/";
                              $("#imageBackground-page-22").attr("src", "uploadedimages/" + output);
                              getBase64Image(document.getElementById("imageBackground-page-22"), function (base64) {
                                $("#section-22").attr("src", "uploadedimages/" + output);
                                $(".page-23").css("background-image", "url("+imageurl + output + ")");
                               $("input[name=page_22_img_1]").val("uploadedimages/" + output);
                              });
                              $(".page-22 .absolute").css("display", "block");
                          },
                      });
                  } /*, 'image/png' */
              );
          }   

 function startCropper_page_24() {
              var image = document.getElementById("imageBackground-page-24");
              $(".page-24 .absolute").css("display", "none");
              cropper = new Cropper(image, {
                  minContainerHeight: 500,
              });
          }
  
          function imageBackgroundInputChanged_page_24() {
              var form_data = new FormData();
              form_data.append("file", $("#imageBackgroundInput-page-24")[0].files[0]);
              $.ajax({
                  url: '/uploadimage',
                  data: form_data,
                  type: "post",
                  cache: false,
                  contentType: false,
                  processData: false,
                  headers: {
                      "X-CSRF-Token": $('[name="_token"]').val(),
                  },
                  success: function (output) {
                    var imageurl="uploadedimages/";
                      $("#imageBackground-page-24").attr("src", "uploadedimages/" + output);
                      getBase64Image(document.getElementById("imageBackground-page-24"), function (base64) {
                          $(".page-24").css("background-image", "url("+imageurl + output + ")");
                          $(".page-25").css("background-image", "url("+imageurl + output + ")");
                          $("input[name=page_24_img_1]").val("uploadedimages/" + output);
                      });
                  },
              });
          }
  
          function cropImage_page_24() {
              cropper.getCroppedCanvas().toBlob(
                  (blob) => {
                      console.log("getCroppedCanvas");
                      const form_data = new FormData();
                      form_data.append("file", blob, "example.png");
                      $.ajax({
                          url: '/uploadimage',
                          data: form_data,
                          type: "post",
                          cache: false,
                          contentType: false,
                          processData: false,
                          headers: {
                              "X-CSRF-Token": $('[name="_token"]').val(),
                          },
                          success: function (output) {
                            var imageurl="uploadedimages/";
                              cropper.destroy();
                              $("#imageBackground-page-24").attr("src", "uploadedimages/" + output);
                              getBase64Image(document.getElementById("imageBackground-page-24"), function (base64) {
                                  $(".page-24").css("background-image", "url("+imageurl + output + ")");
                                  $(".page-25").css("background-image", "url("+imageurl + output + ")");
                                  $("input[name=page_24_img_1]").val("uploadedimages/" + output);
                              });
                              $(".page-24 .absolute").css("display", "block");
                          },
                      });
                  } /*, 'image/png' */
              );
          }   

  function startCropper_page_26() {
              var image = document.getElementById("imageBackground-page-26");
              $(".page-26 .absolute").css("display", "none");
              cropper = new Cropper(image, {
                  minContainerHeight: 500,
              });
          }
  
          function imageBackgroundInputChanged_page_26() {
              var form_data = new FormData();
              form_data.append("file", $("#imageBackgroundInput-page-26")[0].files[0]);
              $.ajax({
                  url: '/uploadimage',
                  data: form_data,
                  type: "post",
                  cache: false,
                  contentType: false,
                  processData: false,
                  headers: {
                      "X-CSRF-Token": $('[name="_token"]').val(),
                  },
                  success: function (output) {
                    var imageurl="uploadedimages/";
                      $("#imageBackground-page-26").attr("src", "uploadedimages/" + output);
                      getBase64Image(document.getElementById("imageBackground-page-26"), function (base64) {
                          $(".page-26").css("background-image", "url("+imageurl + output + ")");
                          $(".page-27").css("background-image", "url("+imageurl + output + ")");
                          $("input[name=page_26_img_1]").val("uploadedimages/" + output);
                      });
                  },
              });
          }
  
          function cropImage_page_26() {
              cropper.getCroppedCanvas().toBlob(
                  (blob) => {
                      console.log("getCroppedCanvas");
                      const form_data = new FormData();
                      form_data.append("file", blob, "example.png");
                      $.ajax({
                          url: '/uploadimage',
                          data: form_data,
                          type: "post",
                          cache: false,
                          contentType: false,
                          processData: false,
                          headers: {
                              "X-CSRF-Token": $('[name="_token"]').val(),
                          },
                          success: function (output) {
                            var imageurl="uploadedimages/";
                              cropper.destroy();
                              $("#imageBackground-page-26").attr("src", "uploadedimages/" + output);
                              getBase64Image(document.getElementById("imageBackground-page-26"), function (base64) {
                                  $(".page-26").css("background-image", "url("+imageurl + output + ")");
                                  $(".page-27").css("background-image", "url("+imageurl + output + ")");
                                  $("input[name=page_26_img_1]").val("uploadedimages/" + output);
                              });
                              $(".page-26 .absolute").css("display", "block");
                          },
                      });
                  } /*, 'image/png' */
              );
          }   


function startCropper_page_28() {
              var image = document.getElementById("imageBackground-page-28");
              $(".page-28 .absolute").css("display", "none");
              cropper = new Cropper(image, {
                  minContainerHeight: 500,
              });
          }
  
          function imageBackgroundInputChanged_page_28() {
              var form_data = new FormData();
              form_data.append("file", $("#imageBackgroundInput-page-28")[0].files[0]);
              $.ajax({
                  url: '/uploadimage',
                  data: form_data,
                  type: "post",
                  cache: false,
                  contentType: false,
                  processData: false,
                  headers: {
                      "X-CSRF-Token": $('[name="_token"]').val(),
                  },
                  success: function (output) {
                    var imageurl="uploadedimages/";
                      $("#imageBackground-page-28").attr("src", "uploadedimages/" + output);
                      getBase64Image(document.getElementById("imageBackground-page-28"), function (base64) {
                          $(".page-28").css("background-image", "url("+imageurl + output + ")");
                          $(".page-29").css("background-image", "url("+imageurl + output + ")");
                          $("input[name=page_28_img_1]").val("uploadedimages/" + output);
                      });
                  },
              });
          }
  
          function cropImage_page_28() {
              cropper.getCroppedCanvas().toBlob(
                  (blob) => {
                      console.log("getCroppedCanvas");
                      const form_data = new FormData();
                      form_data.append("file", blob, "example.png");
                      $.ajax({
                          url: '/uploadimage',
                          data: form_data,
                          type: "post",
                          cache: false,
                          contentType: false,
                          processData: false,
                          headers: {
                              "X-CSRF-Token": $('[name="_token"]').val(),
                          },
                          success: function (output) {
                            var imageurl="uploadedimages/";
                              cropper.destroy();
                              $("#imageBackground-page-28").attr("src", "uploadedimages/" + output);
                              getBase64Image(document.getElementById("imageBackground-page-28"), function (base64) {
                                  $(".page-28").css("background-image", "url("+imageurl + output + ")");
                                  $(".page-29").css("background-image", "url("+imageurl + output + ")");
                                  $("input[name=page_28_img_1]").val("uploadedimages/" + output);
                              });
                              $(".page-28 .absolute").css("display", "block");
                          },
                      });
                  } /*, 'image/png' */
              );
          }   

function startCropper_page_27_1() {
              var image = document.getElementById("imageBackground-page-27-1");
              $(".page-27 .absolute").css("display", "none");
              cropper = new Cropper(image, {
                  minContainerHeight: 500,
              });
          }
  
          function imageBackgroundInputChanged_page_27_1() {
              var form_data = new FormData();
              form_data.append("file", $("#imageBackgroundInput-page-27-1")[0].files[0]);
              $.ajax({
                  url: '/uploadimage',
                  data: form_data,
                  type: "post",
                  cache: false,
                  contentType: false,
                  processData: false,
                  headers: {
                      "X-CSRF-Token": $('[name="_token"]').val(),
                  },
                  success: function (output) {
                    var imageurl="uploadedimages/";
                      $("#imageBackground-page-27-1").attr("src", "uploadedimages/" + output);
                      getBase64Image(document.getElementById("imageBackground-page-27-1"), function (base64) {
                             $("#page-27-img-1").attr("src", "uploadedimages/" + output);
                            $("input[name=page_27_img_1]").val("uploadedimages/" + output);
                      });
                  },
              });
          }
  
          function cropImage_page_27_1() {
              cropper.getCroppedCanvas().toBlob(
                  (blob) => {
                      console.log("getCroppedCanvas");
                      const form_data = new FormData();
                      form_data.append("file", blob, "example.png");
                      $.ajax({
                          url: '/uploadimage',
                          data: form_data,
                          type: "post",
                          cache: false,
                          contentType: false,
                          processData: false,
                          headers: {
                              "X-CSRF-Token": $('[name="_token"]').val(),
                          },
                          success: function (output) {
                            var imageurl="uploadedimages/";
                              cropper.destroy();
                              $("#imageBackground-page-27-1").attr("src", "uploadedimages/" + output);
                              getBase64Image(document.getElementById("imageBackground-page-27-1"), function (base64) {
                                $("#page-27-img-1").attr("src", "uploadedimages/" + output);
                               $("input[name=page_27_img_1]").val("uploadedimages/" + output);
                              });
                              $(".page-27 .absolute").css("display", "block");
                          },
                      });
                  } /*, 'image/png' */
              );
          }   

          function startCropper_page_27_2() {
              var image = document.getElementById("imageBackground-page-27-2");
              $(".page-27 .absolute").css("display", "none");
              cropper = new Cropper(image, {
                  minContainerHeight: 500,
              });
          }
  
          function imageBackgroundInputChanged_page_27_2() {
              var form_data = new FormData();
              form_data.append("file", $("#imageBackgroundInput-page-27-2")[0].files[0]);
              $.ajax({
                  url: '/uploadimage',
                  data: form_data,
                  type: "post",
                  cache: false,
                  contentType: false,
                  processData: false,
                  headers: {
                      "X-CSRF-Token": $('[name="_token"]').val(),
                  },
                  success: function (output) {
                    var imageurl="uploadedimages/";
                      $("#imageBackground-page-27-2").attr("src", "uploadedimages/" + output);
                      getBase64Image(document.getElementById("imageBackground-page-27-2"), function (base64) {
                             $("#page-27-img-2").attr("src", "uploadedimages/" + output);
                            $("input[name=page_27_img_2]").val("uploadedimages/" + output);
                      });
                  },
              });
          }
  
          function cropImage_page_27_2() {
              cropper.getCroppedCanvas().toBlob(
                  (blob) => {
                      console.log("getCroppedCanvas");
                      const form_data = new FormData();
                      form_data.append("file", blob, "example.png");
                      $.ajax({
                          url: '/uploadimage',
                          data: form_data,
                          type: "post",
                          cache: false,
                          contentType: false,
                          processData: false,
                          headers: {
                              "X-CSRF-Token": $('[name="_token"]').val(),
                          },
                          success: function (output) {
                              cropper.destroy();
                              var imageurl="uploadedimages/";
                              $("#imageBackground-page-27-2").attr("src", "uploadedimages/" + output);
                              getBase64Image(document.getElementById("imageBackground-page-27-2"), function (base64) {
                                $("#page-27-img-2").attr("src", "uploadedimages/" + output);
                               $("input[name=page_27_img_2]").val("uploadedimages/" + output);
                              });
                              $(".page-27 .absolute").css("display", "block");
                          },
                      });
                  } /*, 'image/png' */
              );
          }   
          function startCropper_page_27_3() {
              var image = document.getElementById("imageBackground-page-27-3");
              $(".page-27 .absolute").css("display", "none");
              cropper = new Cropper(image, {
                  minContainerHeight: 500,
              });
          }
  
          function imageBackgroundInputChanged_page_27_3() {
              var form_data = new FormData();
              form_data.append("file", $("#imageBackgroundInput-page-27-3")[0].files[0]);
              $.ajax({
                  url: '/uploadimage',
                  data: form_data,
                  type: "post",
                  cache: false,
                  contentType: false,
                  processData: false,
                  headers: {
                      "X-CSRF-Token": $('[name="_token"]').val(),
                  },
                  success: function (output) {
                    var imageurl="uploadedimages/";
                      $("#imageBackground-page-27-3").attr("src", "uploadedimages/" + output);
                      getBase64Image(document.getElementById("imageBackground-page-27-3"), function (base64) {
                             $("#page-27-img-3").attr("src", "uploadedimages/" + output);
                            $("input[name=page_27_img_3]").val("uploadedimages/" + output);
                      });
                  },
              });
          }
  
          function cropImage_page_27_3() {
              cropper.getCroppedCanvas().toBlob(
                  (blob) => {
                      console.log("getCroppedCanvas");
                      const form_data = new FormData();
                      form_data.append("file", blob, "example.png");
                      $.ajax({
                          url: '/uploadimage',
                          data: form_data,
                          type: "post",
                          cache: false,
                          contentType: false,
                          processData: false,
                          headers: {
                              "X-CSRF-Token": $('[name="_token"]').val(),
                          },
                          success: function (output) {
                              cropper.destroy();
                              var imageurl="uploadedimages/";
                              $("#imageBackground-page-27-3").attr("src", "uploadedimages/" + output);
                              getBase64Image(document.getElementById("imageBackground-page-27-3"), function (base64) {
                                $("#page-27-img-3").attr("src", "uploadedimages/" + output);
                               $("input[name=page_27_img_3]").val("uploadedimages/" + output);
                              });
                              $(".page-27 .absolute").css("display", "block");
                          },
                      });
                  } /*, 'image/png' */
              );
          } 
          function startCropper_page_27_4() {
              var image = document.getElementById("imageBackground-page-27-4");
              $(".page-27 .absolute").css("display", "none");
              cropper = new Cropper(image, {
                  minContainerHeight: 500,
              });
          }
  
          function imageBackgroundInputChanged_page_27_4() {
              var form_data = new FormData();
              form_data.append("file", $("#imageBackgroundInput-page-27-4")[0].files[0]);
              $.ajax({
                  url: '/uploadimage',
                  data: form_data,
                  type: "post",
                  cache: false,
                  contentType: false,
                  processData: false,
                  headers: {
                      "X-CSRF-Token": $('[name="_token"]').val(),
                  },
                  success: function (output) {
                    var imageurl="uploadedimages/";
                      $("#imageBackground-page-27-4").attr("src", "uploadedimages/" + output);
                      getBase64Image(document.getElementById("imageBackground-page-27-4"), function (base64) {
                             $("#page-27-img-4").attr("src", "uploadedimages/" + output);
                            $("input[name=page_27_img_4]").val("uploadedimages/" + output);
                      });
                  },
              });
          }
  
          function cropImage_page_27_4() {
              cropper.getCroppedCanvas().toBlob(
                  (blob) => {
                      console.log("getCroppedCanvas");
                      const form_data = new FormData();
                      form_data.append("file", blob, "example.png");
                      $.ajax({
                          url: '/uploadimage',
                          data: form_data,
                          type: "post",
                          cache: false,
                          contentType: false,
                          processData: false,
                          headers: {
                              "X-CSRF-Token": $('[name="_token"]').val(),
                          },
                          success: function (output) {
                              cropper.destroy();
                              var imageurl="uploadedimages/";
                              $("#imageBackground-page-27-4").attr("src", "uploadedimages/" + output);
                              getBase64Image(document.getElementById("imageBackground-page-27-4"), function (base64) {
                                $("#page-27-img-4").attr("src", "uploadedimages/" + output);
                               $("input[name=page_27_img_4]").val("uploadedimages/" + output);
                              });
                              $(".page-27 .absolute").css("display", "block");
                          },
                      });
                  } /*, 'image/png' */
              );
          }     

function startCropper_page_29_1() {
              var image = document.getElementById("imageBackground-page-29-1");
              $(".page-29 .absolute").css("display", "none");
              cropper = new Cropper(image, {
                  minContainerHeight: 500,
              });
          }
  
          function imageBackgroundInputChanged_page_29_1() {
              var form_data = new FormData();
              form_data.append("file", $("#imageBackgroundInput-page-29-1")[0].files[0]);
              $.ajax({
                  url: '/uploadimage',
                  data: form_data,
                  type: "post",
                  cache: false,
                  contentType: false,
                  processData: false,
                  headers: {
                      "X-CSRF-Token": $('[name="_token"]').val(),
                  },
                  success: function (output) {
                    var imageurl="uploadedimages/";
                      $("#imageBackground-page-29-1").attr("src", "uploadedimages/" + output);
                      getBase64Image(document.getElementById("imageBackground-page-29-1"), function (base64) {
                             $("#page-29-img-1").attr("src", "uploadedimages/" + output);
                            $("input[name=page_29_img_1]").val("uploadedimages/" + output);
                      });
                  },
              });
          }
  
          function cropImage_page_29_1() {
              cropper.getCroppedCanvas().toBlob(
                  (blob) => {
                      console.log("getCroppedCanvas");
                      const form_data = new FormData();
                      form_data.append("file", blob, "example.png");
                      $.ajax({
                          url: '/uploadimage',
                          data: form_data,
                          type: "post",
                          cache: false,
                          contentType: false,
                          processData: false,
                          headers: {
                              "X-CSRF-Token": $('[name="_token"]').val(),
                          },
                          success: function (output) {
                              cropper.destroy();
                              var imageurl="uploadedimages/";
                              $("#imageBackground-page-29-1").attr("src", "uploadedimages/" + output);
                              getBase64Image(document.getElementById("imageBackground-page-29-1"), function (base64) {
                                $("#page-29-img-1").attr("src", "uploadedimages/" + output);
                            $("input[name=page_29_img_1]").val("uploadedimages/" + output);
                              });
                              $(".page-29 .absolute").css("display", "block");
                          },
                      });
                  } /*, 'image/png' */
              );
          }   
          function startCropper_page_29_2() {
              var image = document.getElementById("imageBackground-page-29-2");
              $(".page-29 .absolute").css("display", "none");
              cropper = new Cropper(image, {
                  minContainerHeight: 500,
              });
          }
  
          function imageBackgroundInputChanged_page_29_2() {
              var form_data = new FormData();
              form_data.append("file", $("#imageBackgroundInput-page-29-2")[0].files[0]);
              $.ajax({
                  url: '/uploadimage',
                  data: form_data,
                  type: "post",
                  cache: false,
                  contentType: false,
                  processData: false,
                  headers: {
                      "X-CSRF-Token": $('[name="_token"]').val(),
                  },
                  success: function (output) {
                    var imageurl="uploadedimages/";
                      $("#imageBackground-page-29-2").attr("src", "uploadedimages/" + output);
                      getBase64Image(document.getElementById("imageBackground-page-29-2"), function (base64) {
                             $("#page-29-img-2").attr("src", "uploadedimages/" + output);
                            $("input[name=page_29_img_2]").val("uploadedimages/" + output);
                      });
                  },
              });
          }
  
          function cropImage_page_29_2() {
              cropper.getCroppedCanvas().toBlob(
                  (blob) => {
                      console.log("getCroppedCanvas");
                      const form_data = new FormData();
                      form_data.append("file", blob, "example.png");
                      $.ajax({
                          url: '/uploadimage',
                          data: form_data,
                          type: "post",
                          cache: false,
                          contentType: false,
                          processData: false,
                          headers: {
                              "X-CSRF-Token": $('[name="_token"]').val(),
                          },
                          success: function (output) {
                              cropper.destroy();
                              var imageurl="uploadedimages/";
                              $("#imageBackground-page-29-2").attr("src", "uploadedimages/" + output);
                              getBase64Image(document.getElementById("imageBackground-page-29-2"), function (base64) {
                                $("#page-29-img-2").attr("src", "uploadedimages/" + output);
                               $("input[name=page_29_img_2]").val("uploadedimages/" + output);
                              });
                              $(".page-29 .absolute").css("display", "block");
                          },
                      });
                  } /*, 'image/png' */
              );
          }   
          function startCropper_page_29_3() {
              var image = document.getElementById("imageBackground-page-29-3");
              $(".page-29 .absolute").css("display", "none");
              cropper = new Cropper(image, {
                  minContainerHeight: 500,
              });
          }
  
          function imageBackgroundInputChanged_page_29_3() {
              var form_data = new FormData();
              form_data.append("file", $("#imageBackgroundInput-page-29-3")[0].files[0]);
              $.ajax({
                  url: '/uploadimage',
                  data: form_data,
                  type: "post",
                  cache: false,
                  contentType: false,
                  processData: false,
                  headers: {
                      "X-CSRF-Token": $('[name="_token"]').val(),
                  },
                  success: function (output) {
                    var imageurl="uploadedimages/";
                      $("#imageBackground-page-29-3").attr("src", "uploadedimages/" + output);
                      getBase64Image(document.getElementById("imageBackground-page-29-3"), function (base64) {
                             $("#page-29-img-3").attr("src", "uploadedimages/" + output);
                            $("input[name=page_29_img_3]").val("uploadedimages/" + output);
                      });
                  },
              });
          }
  
          function cropImage_page_29_3() {
              cropper.getCroppedCanvas().toBlob(
                  (blob) => {
                      console.log("getCroppedCanvas");
                      const form_data = new FormData();
                      form_data.append("file", blob, "example.png");
                      $.ajax({
                          url: '/uploadimage',
                          data: form_data,
                          type: "post",
                          cache: false,
                          contentType: false,
                          processData: false,
                          headers: {
                              "X-CSRF-Token": $('[name="_token"]').val(),
                          },
                          success: function (output) {
                              cropper.destroy();
                              var imageurl="uploadedimages/";
                              $("#imageBackground-page-29-3").attr("src", "uploadedimages/" + output);
                              getBase64Image(document.getElementById("imageBackground-page-29-3"), function (base64) {
                                $("#page-29-img-3").attr("src", "uploadedimages/" + output);
                            $("input[name=page_29_img_3]").val("uploadedimages/" + output);
                              });
                              $(".page-29 .absolute").css("display", "block");
                          },
                      });
                  } /*, 'image/png' */
              );
          }  
          function startCropper_page_29_4() {
              var image = document.getElementById("imageBackground-page-29-4");
              $(".page-29 .absolute").css("display", "none");
              cropper = new Cropper(image, {
                  minContainerHeight: 500,
              });
          }
  
          function imageBackgroundInputChanged_page_29_4() {
              var form_data = new FormData();
              form_data.append("file", $("#imageBackgroundInput-page-29-4")[0].files[0]);
              $.ajax({
                  url: '/uploadimage',
                  data: form_data,
                  type: "post",
                  cache: false,
                  contentType: false,
                  processData: false,
                  headers: {
                      "X-CSRF-Token": $('[name="_token"]').val(),
                  },
                  success: function (output) {
                    var imageurl="uploadedimages/";
                      $("#imageBackground-page-29-4").attr("src", "uploadedimages/" + output);
                      getBase64Image(document.getElementById("imageBackground-page-29-4"), function (base64) {
                             $("#page-29-img-4").attr("src", "uploadedimages/" + output);
                            $("input[name=page_29_img_4]").val("uploadedimages/" + output);
                      });
                  },
              });
          }
  
          function cropImage_page_29_4() {
              cropper.getCroppedCanvas().toBlob(
                  (blob) => {
                      console.log("getCroppedCanvas");
                      const form_data = new FormData();
                      form_data.append("file", blob, "example.png");
                      $.ajax({
                          url: '/uploadimage',
                          data: form_data,
                          type: "post",
                          cache: false,
                          contentType: false,
                          processData: false,
                          headers: {
                              "X-CSRF-Token": $('[name="_token"]').val(),
                          },
                          success: function (output) {
                              cropper.destroy();
                              var imageurl="uploadedimages/";
                              $("#imageBackground-page-29-4").attr("src", "uploadedimages/" + output);
                              getBase64Image(document.getElementById("imageBackground-page-29-4"), function (base64) {
                                $("#page-29-img-4").attr("src", "uploadedimages/" + output);
                            $("input[name=page_29_img_4]").val("uploadedimages/" + output);
                              });
                              $(".page-29 .absolute").css("display", "block");
                          },
                      });
                  } /*, 'image/png' */
              );
          }    

 function startCropper_page_30() {
              var image = document.getElementById("imageBackground-page-30");
              $(".page-30 .absolute").css("display", "none");
              cropper = new Cropper(image, {
                  minContainerHeight: 500,
              });
          }
  
          function imageBackgroundInputChanged_page_30() {
              var form_data = new FormData();
              form_data.append("file", $("#imageBackgroundInput-page-30")[0].files[0]);
              $.ajax({
                  url: '/uploadimage',
                  data: form_data,
                  type: "post",
                  cache: false,
                  contentType: false,
                  processData: false,
                  headers: {
                      "X-CSRF-Token": $('[name="_token"]').val(),
                  },
                  success: function (output) {
                    var imageurl="uploadedimages/";
                      $("#imageBackground-page-30").attr("src", "uploadedimages/" + output);
                      getBase64Image(document.getElementById("imageBackground-page-30"), function (base64) {
                          $(".page-30").css("background-image", "url("+imageurl + output + ")");
                          $(".page-31").css("background-image", "url("+imageurl + output + ")");
                          $("input[name=page_30_img_1]").val("uploadedimages/" + output);
                      });
                  },
              });
          }
  
          function cropImage_page_30() {
              cropper.getCroppedCanvas().toBlob(
                  (blob) => {
                      console.log("getCroppedCanvas");
                      const form_data = new FormData();
                      form_data.append("file", blob, "example.png");
                      $.ajax({
                          url: '/uploadimage',
                          data: form_data,
                          type: "post",
                          cache: false,
                          contentType: false,
                          processData: false,
                          headers: {
                              "X-CSRF-Token": $('[name="_token"]').val(),
                          },
                          success: function (output) {
                              cropper.destroy();
                              var imageurl="uploadedimages/";
                              $("#imageBackground-page-30").attr("src", "uploadedimages/" + output);
                              getBase64Image(document.getElementById("imageBackground-page-30"), function (base64) {
                                  $(".page-30").css("background-image", "url("+ base64 + ")");
                                  $(".page-31").css("background-image", "url("+ base64 + ")");
                                  $("input[name=page_30_img_1]").val("uploadedimages/" + output);
                              });
                              $(".page-30 .absolute").css("display", "block");
                          },
                      });
                  } /*, 'image/png' */
              );
          }   

 function startCropper_page_31_1() {
              var image = document.getElementById("imageBackground-page-31-1");
              $(".page-31 .flex").css("display", "none");
              cropper = new Cropper(image, {
                  minContainerHeight: 500,
              });
          }
  
          function imageBackgroundInputChanged_page_31_1() {
              var form_data = new FormData();
              form_data.append("file", $("#imageBackgroundInput-page-31-1")[0].files[0]);
              $.ajax({
                  url: '/uploadimage',
                  data: form_data,
                  type: "post",
                  cache: false,
                  contentType: false,
                  processData: false,
                  headers: {
                      "X-CSRF-Token": $('[name="_token"]').val(),
                  },
                  success: function (output) {
                    var imageurl="uploadedimages/";
                      $("#imageBackground-page-31-1").attr("src", "uploadedimages/" + output);
                      getBase64Image(document.getElementById("imageBackground-page-31-1"), function (base64) {
                             $("#page31-1").attr("src", "uploadedimages/" + output);
                            $("input[name=page_31_img_1]").val("uploadedimages/" + output);
                      });
                  },
              });
          }
  
          function cropImage_page_31_1() {
              cropper.getCroppedCanvas().toBlob(
                  (blob) => {
                      console.log("getCroppedCanvas");
                      const form_data = new FormData();
                      form_data.append("file", blob, "example.png");
                      $.ajax({
                          url: '/uploadimage',
                          data: form_data,
                          type: "post",
                          cache: false,
                          contentType: false,
                          processData: false,
                          headers: {
                              "X-CSRF-Token": $('[name="_token"]').val(),
                          },
                          success: function (output) {
                              cropper.destroy();
                              var imageurl="uploadedimages/";
                              $("#imageBackground-page-31-1").attr("src", "uploadedimages/" + output);
                              getBase64Image(document.getElementById("imageBackground-page-31-1"), function (base64) {
                                $("#page31-1").attr("src", "uploadedimages/" + output);
                            $("input[name=page_31_img_1]").val("uploadedimages/" + output);
                              });
                              $(".page-31 .flex").css("display", "block");
                          },
                      });
                  } /*, 'image/png' */
              );
          }  
          function startCropper_page_31_2() {
              var image = document.getElementById("imageBackground-page-31-2");
              $(".page-31 .flex").css("display", "none");
              cropper = new Cropper(image, {
                  minContainerHeight: 500,
              });
          }
  
          function imageBackgroundInputChanged_page_31_2() {
              var form_data = new FormData();
              form_data.append("file", $("#imageBackgroundInput-page-31-2")[0].files[0]);
              $.ajax({
                  url: '/uploadimage',
                  data: form_data,
                  type: "post",
                  cache: false,
                  contentType: false,
                  processData: false,
                  headers: {
                      "X-CSRF-Token": $('[name="_token"]').val(),
                  },
                  success: function (output) {
                    var imageurl="uploadedimages/";
                      $("#imageBackground-page-31-2").attr("src", "uploadedimages/" + output);
                      getBase64Image(document.getElementById("imageBackground-page-31-2"), function (base64) {
                             $("#page31-2").attr("src", "uploadedimages/" + output);
                            $("input[name=page_31_img_2]").val("uploadedimages/" + output);
                      });
                  },
              });
          }
  
          function cropImage_page_31_2() {
              cropper.getCroppedCanvas().toBlob(
                  (blob) => {
                      console.log("getCroppedCanvas");
                      const form_data = new FormData();
                      form_data.append("file", blob, "example.png");
                      $.ajax({
                          url: '/uploadimage',
                          data: form_data,
                          type: "post",
                          cache: false,
                          contentType: false,
                          processData: false,
                          headers: {
                              "X-CSRF-Token": $('[name="_token"]').val(),
                          },
                          success: function (output) {
                              cropper.destroy();
                              var imageurl="uploadedimages/";
                              $("#imageBackground-page-31-2").attr("src", "uploadedimages/" + output);
                              getBase64Image(document.getElementById("imageBackground-page-31-2"), function (base64) {
                                $("#page31-2").attr("src", "uploadedimages/" + output);
                            $("input[name=page_31_img_2]").val("uploadedimages/" + output);
                              });
                              $(".page-31 .flex").css("display", "block");
                          },
                      });
                  } /*, 'image/png' */
              );
          }   
          function startCropper_page_31_3() {
              var image = document.getElementById("imageBackground-page-31-3");
              $(".page-31 .flex").css("display", "none");
              cropper = new Cropper(image, {
                  minContainerHeight: 500,
              });
          }
  
          function imageBackgroundInputChanged_page_31_3() {
              var form_data = new FormData();
              form_data.append("file", $("#imageBackgroundInput-page-31-3")[0].files[0]);
              $.ajax({
                  url: '/uploadimage',
                  data: form_data,
                  type: "post",
                  cache: false,
                  contentType: false,
                  processData: false,
                  headers: {
                      "X-CSRF-Token": $('[name="_token"]').val(),
                  },
                  success: function (output) {
                    var imageurl="uploadedimages/";
                      $("#imageBackground-page-31-3").attr("src", "uploadedimages/" + output);
                      getBase64Image(document.getElementById("imageBackground-page-31-3"), function (base64) {
                             $("#page31-3").attr("src", "uploadedimages/" + output);
                            $("input[name=page_31_img_3]").val("uploadedimages/" + output);
                      });
                  },
              });
          }
  
          function cropImage_page_31_3() {
              cropper.getCroppedCanvas().toBlob(
                  (blob) => {
                      console.log("getCroppedCanvas");
                      const form_data = new FormData();
                      form_data.append("file", blob, "example.png");
                      $.ajax({
                          url: '/uploadimage',
                          data: form_data,
                          type: "post",
                          cache: false,
                          contentType: false,
                          processData: false,
                          headers: {
                              "X-CSRF-Token": $('[name="_token"]').val(),
                          },
                          success: function (output) {
                              cropper.destroy();
                              var imageurl="uploadedimages/";
                              $("#imageBackground-page-31-3").attr("src", "uploadedimages/" + output);
                              getBase64Image(document.getElementById("imageBackground-page-31-3"), function (base64) {
                                $("#page31-3").attr("src", "uploadedimages/" + output);
                            $("input[name=page_31_img_3]").val("uploadedimages/" + output);
                              });
                              $(".page-31 .flex").css("display", "block");
                          },
                      });
                  } /*, 'image/png' */
              );
          }   


    function startCropper() {
        var image = document.getElementById("imageBackground");
        $(".page-4.page-4-1 .text").css("display", "none");
        cropper = new Cropper(image, {
            minContainerHeight: 500
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
                var imageurl="uploadedimages/";
                $("#imageBackground").attr('src', 'uploadedimages/' + output)
                getBase64Image(document.getElementById("imageBackground"), function(base64) {
                    $(".page-4-1 .luxe-pro-info").css('background-image', 'url(' + base64 + ')')
                    $(".page-4-2").css('background-image', 'url(' + output + ')')
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
                    var imageurl="uploadedimages/";
                    $("#imageBackground").attr('src', 'uploadedimages/' + output)
                    getBase64Image(document.getElementById("imageBackground"), function(base64) {
                        $(".page-4-1 .luxe-pro-info").css('background-image', 'url(' + base64 + ')')
                        $("input[name=page_4_1_img_1]").val(output);
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
        var obj = JSON.parse(event.target.result);
        jQuery.each(obj, function(i, val) {
            var item = $("[name =" + i + "]");
            $(item).val(val);
            console.log("i: " + i + " - val: " + val);
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
</script>

</html>