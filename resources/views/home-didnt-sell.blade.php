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

        @import url('https://fonts.googleapis.com/css2?family=Oswald&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@600&display=swap');


        @page {
            padding: 0px;
            margin: 0px;
            size: 1000px 1254px;
        }

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

        body {
            padding: 0px;
            margin: 0px;
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

        .oswald {
            font-family: 'Oswald';
            font-weight: 400;
        }

        .oswald-med {
            font-family: 'Oswald';
            font-weight: 500;
        }

        .oswald-bold {
            font-family: 'Oswald';
            font-weight: 600;
        }

        .text-center {
            text-align: center;
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

        .absolute {
            position: absolute;
        }

        .page-number-left {
            top: 47px;
            left: 95px;
            font-size: 20px;
        }

        .page-number-right {
            top: 47px;
            left: 840px;
            font-size: 20px;
        }

        .w-100 {
            width: 100%;
        }

        /* ul li::before {
            content: ' ';
            position: absolute;
            left: -20px;
            top: 100%;
            width: 8px;
            height: 8px;
            background-color: #C6A467;
            border-radius: 4px;
            margin-top: -3px;
        } */
    </style>
</head>

<body>
    {{-- <div class="page page-1">
        <div class="absolute" style="top:450px;left:50px;">
            <img src="images/home-didnt-sell/page-1-bg.jpg" alt="" width="900px" height="700px">
        </div>
        <div class="absolute" style="top:0;left:0;">
            <img src="images/home-didnt-sell/page-1.png" alt="">
        </div>
        <div class="absolute" style="top:100px;left:150px;">
            <p class="gold font-thin" style="font-size: 80px;">My Home</p>
        </div>
        <div class="absolute" style="top:190px;left:270px;">
            <p class="font-bold" style="font-size: 80px;">Didn't Sell...</p>
        </div>
        <div class="absolute" style="top:1160px;left:650px;">
            <p class="font-bold" style="font-size: 18px;letter-spacing:6px;">LUXE PROPERTIES LLC</p>
        </div>
    </div>

    <div class="page_break"></div> 

    <div class="page page-2">
        <div class="absolute" style="top:130px;right:0;">
            <div style="height:700px;width:320px;
                background:url('images/home-didnt-sell/page-2-bg.jpg');
                background-size:cover;
                background-position: left;
            ">
                <h1></h1>
            </div>
        </div>
        <div class="absolute" style="top:0;left:0;">
            <img src="images/home-didnt-sell/page-2.png" alt="">
        </div>
        <div class="absolute page-number-left">
            <p>Page 02</p>
        </div>
        <div class="absolute" style="top:200px;right:400px;text-align:right;">
            <p class="font-thin" style="font-size: 60px;">Table of</p>
            <p class="font-bold gold" style="font-size: 75px;margin-top:-35px;">Content</p>
        </div>
        <div class="absolute" style="top:500px;right:700px;text-align:right;">
            <p class="oswald-bold white" style="font-size: 65px;">3</p>
            <p class="oswald-bold white" style="font-size: 65px;margin-top:-20px;">7</p>
            <p class="oswald-bold white" style="font-size: 65px;margin-top:-20px;">10</p>
            <p class="oswald-bold white" style="font-size: 65px;margin-top:-20px;">13</p>
            <p class="oswald-bold white" style="font-size: 65px;margin-top:-20px;">17</p>
            <p class="oswald-bold white" style="font-size: 65px;margin-top:-20px;">20</p>
        </div>
        <div class="absolute" style="top:500px;left:350px;">
            <p class="oswald-med white" style="font-size:20px;line-height:65px;">RESULTS • DREAMS • GOALS</p>
            <p class="oswald-med white" style="font-size:20px;line-height:65px;">TESTIMONIALS</p>
            <p class="oswald-med white" style="font-size:20px;line-height:65px;">LISTING AND SERVICES PLANS</p>
            <p class="oswald-med white" style="font-size:20px;line-height:65px;">A NEW APPROACH</p>
            <p class="oswald-med white" style="font-size:20px;line-height:65px;">POINTS OF DIFFERENCE</p>
            <p class="oswald-med white" style="font-size:20px;line-height:65px;">OUR STORY</p>
        </div>
    </div>
    
    <div class="page_break"></div>

    <div class="page page-3">
        <div class="absolute" style="top:0;left:0;">
            <img src="images/home-didnt-sell/page-3.png" alt="">
        </div>
        <div class="absolute" style="top:150px;left:-2px;">
            <img src="images/home-didnt-sell/page-2-bg.jpg" alt="" width="840px" height="600px">
        </div>
        <div class="absolute page-number-right">
            <p>Page 03</p>
        </div>
        <div class="absolute" style="top:820px;left:220px;">
            <p class="font-thin" style="font-size: 38px;">Do any of These</p>
            <p class="font-bold gold" style="font-size: 45px;margin-top:-25px;">Empty Promises Sound Familiar?</p>
        </div>
        <div class="absolute" style="top:970px;left:220px;right:60px;">
            <p class="font-thin" style="font-size: 18px;">Hello Mr. and Mrs. Flores,<br>
                Since your properties are no longer actively on the market, you’ve probably received innumerable calls
                from real estate
                agents all making quite a few promises:</p>
            <ul style="list-style: none;display: table;width:100%;">
                <li>I’ll sell your home or buy it myself!</li>
                <li>I have the most listings in the area!</li>
                <li>I have a buyer for your home.</li>
                <li>I’m the neighborhood specialist.</li>
            </ul>
        </div>
    </div>
    
    
    <div class="page_break"></div>

    <div class="page page-4">
        <div class="absolute" style="top:130px;right:0;">
            <div style="height:700px;width:420px;
                        background:url('images/home-didnt-sell/page-2-bg.jpg');
                        background-size:cover;
                        background-position: left;
                    ">
                <h1></h1>
            </div>
        </div>
        <div class="absolute" style="top:0;left:0;">
            <img src="images/home-didnt-sell/page-4.png" alt="">
        </div>
        <div class="absolute page-number-left">
            <p>Page 04</p>
        </div>
        <div class="absolute" style="top:220px;left:130px;">
            <p class="font-thin" style="font-size: 38px;">The Only Result</p>
            <p class="font-bold gold" style="font-size: 45px;margin-top:-25px;">That Matters is Sold</p>
        </div>
        <div class="absolute" style="top:370px;left:130px;width:42%;">
            <p class="font-thin" style="font-size: 18px;">Wesley Ulloa and LUXE Properties knows that a promise is only
                as good as the end result. And the only result that
                ultimately matters is that your home gets said - and sold for the right amount and in the time frame
                that works for your
                plans.</p>
        </div>
        <div class="absolute" style="top:600px;left:160px;width:42%;">
            <p class="font-thin" style="font-size: 18px;text-align:justify;">Real estate agents will often say anything
                to get the LISTING,
                but many follow a business model that “Lists to List!”.
                They want to dominate the market with LISTINGS, but are not as concerned if all of the homes really
                SELL. They are going
                for a “numbers game” business model: list enough properties and SOME will sell. You can normally spot
                these agents as
                they might have a high number of listings. They will take them at any commission and on any terms just
                to keep a high
                number of listings going. Where they fall short, however, is that they do not put their money where
                their mouth is.
                Their marketing, effort and presence seem to diminish greatly once the listing agreement is signed. Then
                they are off
                getting the next listing rather than SELLING their listings. Their listings often “expire” from the
                market, unsold, just
                as yours unfortunately has.</p>
        </div>
        <div class="absolute" style="top:900px;left:680px;">
            <p class="font-thin" style="font-size: 32px;line-height:25px;">Our<br>motto is<br>simple,</p>
            <p class="font-bold gold" style="font-size: 40px;line-height:35px;">“List to<br>Sell!”</p>
        </div>
    </div>
    
    <div class="page_break"></div>
    
    <div class="page page-5">
        <div class="absolute" style="top:0;left:0;">
            <img src="images/home-didnt-sell/page-5.png" alt="">
        </div>
        <div class="absolute" style="top:130px;left:-2px;">
            <div style="height:600px;width:490px;
                                background:url('images/home-didnt-sell/page-2-bg.jpg');
                                background-size:cover;
                                background-position: left;
                            ">
                <h1></h1>
            </div>
        </div>
        <div class="absolute page-number-right">
            <p>Page 05</p>
        </div>
        <div class="absolute" style="top:220px;left:520px;">
            <p class="font-thin" style="font-size: 38px;">Your Dreams</p>
            <p class="font-bold gold" style="font-size: 45px;margin-top:-25px;">And Goals Matter</p>
        </div>
        <div class="absolute" style="top:390px;left:520px;right:100px;">
            <p class="font-thin" style="font-size: 18px;text-align:justify;">When things don't go as planned in the sale
                of a home, it can be easy for a seller to give up on the excitement to move
                that they once had. You may even be sitting there reading this thinking that it's best to throw the
                towel in and give up
                on the dream of selling. Perhaps you are thinking that it is better to wait for an extended period "when
                the market is
                better". You may even be questioning whether or not to even work with a real estate agent. You are
                probably thinking
                that there must be a better way.</p>
        </div>
        <div class="absolute" style="top:830px;left:180px;width:300px;">
            <p class="font-thin" style="font-size: 18px;text-align:justify;">You are not alone. In fact, competition for
                qualified Buyers is fierce. The Seller and the Real Estate Professional need
                to work as a team to make sure that they are getting the home in front of the largest pool of qualified
                buyers. If this
                effort falls short, most often through marketing to a large enough selection of well targeted buyers,
                the property has a
                good chance of not being seen by the right buyer and therefore does not sell.</p>
        </div>
        <div class="absolute" style="top:830px;left:520px;width:380px;">
            <p class="font-thin" style="font-size: 18px;text-align:justify;">Once a Seller has been through the sales
                process, I know how frustrating it can be to consider starting the process all
                over. Having your hopes up, keeping the house in tip top condition, being on call" with short notice to
                accommodate
                buyers. You are likely just ready for this process to be over and to be on to the next chapter of your
                life.</p>
        </div>
    </div>
    
    <div class="page_break"></div>

    <div class="page page-6">
        <div class="absolute" style="top:0;left:0;">
            <img src="images/home-didnt-sell/page-6.png" alt="">
        </div>
        <div class="absolute" style="top:130px;right:0;">
            <div style="height:608px;width:320px;
                        background:url('images/home-didnt-sell/page-2-bg.jpg');
                        background-size:cover;
                        background-position: left;
                    ">
                <h1></h1>
            </div>
        </div>
        <div class="absolute page-number-left">
            <p>Page 06</p>
        </div>
        <div class="absolute" style="top:200px;left:130px;">
            <p class="font-thin" style="font-size: 38px;">Your Dreams</p>
            <p class="font-bold gold" style="font-size: 45px;margin-top:-25px;">And Goals Matter</p>
        </div>
        <div class="absolute" style="top:350px;left:130px;width:380px;">
            <p class="font-thin" style="font-size: 18px;text-align:justify;">I truly understand your frustration and am
                here to tell you it does not have to be like this. You can and will sell your
                property. The key is to position it correctly and maximize marketing exposure. This is my specialty. I
                am not excited
                about listing homes. I am excited about marketing them fully and seeing the delight in my Sellers when
                they are able to
                move on with their Dreams. That is why I love my chosen career so much.</p>
        </div>
        <div class="absolute" style="top:800px;left:150px;right:250px;">
            <p class="font-thin white" style="font-size: 18px;text-align:justify;">Marketing homes is our specialty.
                Wesley Ulloa, LUXE Properties’ founder has been recognized as a top real estate
                marketing expert nationwide. She speaks and teaches nationally on marketing homes, especially luxury
                properties as she
                has been a member of CLHMS for numerous years. She also obtained a Master’s of Science in International
                Real Estate from
                Florida International University. She now brings ALL of this vast marketing knowledge and experience now
                to South
                Florida to help Sellers market and sell their home. We’d be honored to meet with you to assess your
                home, the market and
                create a marketing plan to sell your home.</p>
        </div>
    </div>
   
    <div class="page_break"></div>
--}}
    <div class="page page-7">
        <div class="absolute" style="top:130px;left:-2px;">
            <div style="height:608px;width:420px;
                                background:url('images/home-didnt-sell/page-2-bg.jpg');
                                background-size:cover;
                                background-position: left;
                            ">
                <h1></h1>
            </div>
        </div>
        <div class="absolute" style="top:0;left:0;">
            <img src="images/home-didnt-sell/page-7.png" alt="">
        </div>
        <div class="absolute page-number-right">
            <p>Page 07</p>
        </div>
        <div class="absolute" style="top:220px;left:460px;">
            <p class="font-thin" style="font-size: 38px;">Your Dreams</p>
            <p class="font-bold gold" style="font-size: 45px;margin-top:-25px;">And Goals Matter</p>
        </div>
        <div class="absolute" style="top:350px;left:460px;right:100px;">
            <p class="font-thin" style="font-size: 18px;text-align:justify;">After having my property on the market for
                little over a year and no offers, we decided to change realtors. Wesley was
                highly recommended by a friend and we really liked her presentation and professionalism. The property's
                listing was 100%
                better with professional photos and videos, and the house started having showings and offers in less
                than a month. We
                sold the property and were VERY pleased with the services provided by Wesley & LUXE Properties.”</p>
            <p class="gold font-bold" style="text-align: right;font-size:20px;margin-top:20px;">— Sandra Leatherwood</p>
        </div>
        <div class="absolute" style="top:750px;left:190px;width:300px;">
            <p class="font-thin" style="font-size: 18px;text-align:justify;">“I really can't picture my home buying
                experience without Wesley. Her knowledge of real estate is endless. Her keen eye
                for architecture and design is an enormous plus when you're trying to decide on the right home. Every
                step of the way I
                felt informed and secure in my decisions thanks to her. I would highly recommend Wesley to anyone
                looking to buy, sell
                or invest in properties.”</p>
            <p class="gold font-bold" style="text-align: right;font-size:20px;margin-top:20px;">— Marisa Navarro</p>
        </div>
        <div class="absolute" style="top:670px;left:570px;width:330px;">
            <p class="font-thin" style="font-size: 18px;text-align:justify;">"We hired Wesley to handle the sale of our
                condominium in Brickell. Wesley was very attentive and hands on making sure
                the property was marketed properly by taking high quality photographs and including the property in
                mailing lists which
                generated a large pool of buyers. Her strategy for pricing the property allowed us to sell the property
                within our
                desired time frame. Would strongly recommend her if you are looking for an agent in the area who has the
                knowledge to
                navigate you through a real estate transaction quickly and efficiently.”</p>
            <p class="gold font-bold" style="text-align: right;font-size:20px;margin-top:20px;">— Jonathan Alfonso</p>
        </div>
    </div>
    {{--
    <div class="page_break"></div>

    <div class="page page-8">
        <div class="absolute" style="top:0;left:0;">
            <img src="images/home-didnt-sell/page-8.png" alt="">
        </div>
        <div class="absolute page-number-left">
            <p>Page 08</p>
        </div>
    </div>

    <div class="page_break"></div>

    <div class="page page-9">
        <div class="absolute" style="top:0;left:0;">
            <img src="images/home-didnt-sell/page-9.png" alt="">
        </div>
        <div class="absolute page-number-right">
            <p>Page 09</p>
        </div>
    </div> --}}
</body>

</html>