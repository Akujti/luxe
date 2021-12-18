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
    @import url('https://fonts.googleapis.com/css2?family=Petemoss&display=swap');

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

    .text-center {
        text-align: center;
    }

    .underline {
        text-decoration: underline;
    }

    .handwritten {
        font-family: Petemoss;
        font-size: 35px
    }

    .footer {
        position: absolute;
        width: 100%;
        text-align: center;
        bottom: 0px;
        color: gray
    }
</style>

<body>
    <div class="page">
        <div class="header">
            <img src="images/generate_logo.jpg" alt="" style="width:270px">
        </div>
        <div class="body">
            <br><br>
            <p class="text-center"><b>{{$mentor_name}} - Mentorship Agreement</b></p>
            <br><br>
            <p>Agent Name:<span
                    class="underline">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$text_1}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            </p>
            <br>
            <p>Agent agrees to join mentorship program and use mentor for assistance in three real estate transactions.
                There is no
                time limit for completion of these transactions.
                Associate will be responsible for procuring business leads to work and mentor will provide a 30 minute
                weekly coaching
                call to make sure agent is progressing through the program.</p>
            <p>Compensation will be as follows.</p>
            <p>Listing Transactions - Agent agrees to pay Mentor a 35% referral for any listing transactions. Mentor
                will attend
                listing presentation; prepare CMA, open house and guide agent through sales process and marketing.</p>
            <p>Buyer Transactions - Agent agrees to pay Mentor a 35% referral for any buyer transactions. Mentor will
                coach agent
                through showings, comparables, negotiation and contract preparation.</p>
            <p>Agent agrees to use closing coordinator for these transactions and mentor will not take on more than
                three mentees at
                any time.</p>
            <p>Additional services upon request</p>
            <p>Agent Signature: <span
                    class="underline handwritten">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$text_1}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            </p>
            <p>Date Signed:<span
                    class="underline">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$text_2}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            </p>
        </div>
        <div class="footer">
            55 Merrick Way Suite 402, Coral Gables, FL 33134&nbsp;&nbsp;&nbsp;O: (305) 809-7650 F: (305) 938-8054
        </div>
    </div>
</body>

</html>