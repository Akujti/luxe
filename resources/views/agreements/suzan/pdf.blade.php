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
            <p>Agent agrees to join and abide by the mentorship program and use a mentor for assistance in three real
                estate
                transactions. There is no time limit for completion of these transactions. Agent will be responsible for
                procuring
                business leads to work and the mentor will provide a 30 minute weekly group coaching call to make sure
                the agent is
                progressing through the program.
                Compensation will be as follows.</p>
            <p><b>Listing Transactions</b> - Agent agrees to pay Mentor a 50% referral for any listing transactions. The
                Mentor will attend the listing presentation;
                assist with the preparation of the CMA, assist with open house, and guide the agent through the sales
                process and
                marketing. In addition, too, coordinate, organize, and assist with staging, decluttering, photography,
                video, assists
                with scheduling inspections, & showings, Q&A, etc. Duties will vary as depends on the transaction. Agent
                is solely
                responsible for the Transaction Coordinator Fees, Attorney fees, etc. The Agent will remain positive at
                all times, open
                to learning and receiving education, and develop a strong mental mindset. Agent understands that Wesley
                Ulloa is their
                Broker and any question deemed needing an answer from the Broker, at my discretion, will be sent to
                Wesley.</p>
            <p><b>Buyer Transactions</b> - Agent agrees to pay Mentor a 30% referral for any buyer transactions. The
                Mentor will coach the agent through showings,
                comparables, assist with the preparation of the CMA, verification of data, negotiations, and contract
                preparation. In
                addition, too, coordinate, organize, and assist with scheduling inspections, & showings, etc. Duties
                will vary as
                depends on the transaction. Agent is solely responsible for the Transaction Coordinator Fees, Attorney
                Fees, etc. The
                Agent will remain positive at all times, open to learning and receiving education, and develop a strong
                mental mindset.
                Agent understands that Wesley Ulloa is their Broker and any question deemed needing an answer from the
                Broker, at my
                discretion, will be sent to Wesley.</p>
            <p>Agent agrees to use and be solely responsible for any and all fees associated with the Transaction
                Coordinator, staging,
                photography, video,etc., and an Attorney fee for these transactions and the mentor will not take on more
                than seven
                mentees at any time.</p>
            <div class="footer">
                55 Merrick Way Suite 402, Coral Gables, FL 33134&nbsp;&nbsp;&nbsp;O: (305) 809-7650 F: (305) 938-8054
            </div>
            <div class="page_break"></div>
            <p>Agent success is solely determined by the agent. The Agent will be prepared, fully engaged, and ready to
                work towards
                their success. The Agent will be committed and dedicated to achieving success and successfully
                graduating from the
                Mentorship Agreement Program. The Agent should not compare themselves to others and will work with
                ethics to ensure
                their own individual success and work with the group as needed to ensure everyone’s success. We all
                succeed together.</p>
            <p>The Mentor will work diligently to ensure the agent achieves success.</p>
            <p>Everyone will be respectful of each other's time and will work together for success!</p>
            <p>Additional services upon request (additional fees are/may be possible).</p>
            <br><br>
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