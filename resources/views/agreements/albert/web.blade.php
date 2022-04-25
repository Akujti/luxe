@extends('layouts.app', ['active' => 'Service&StaffRequests'])
@section('content')
<style>
    label {
        background-color: #262626;
        color: #fff;
        padding: 10px;
        display: block;
        border: 1px solid black;
        margin-bottom: 0 !important;
        font-family: 'gothicbold';
    }

    input,
    textarea {
        font-size: 15px;
        margin-top: 10px;
        margin-bottom: 5px;
        width: 100%;
        border: 1px solid #262626;
        font-family: 'gothicregular';
    }

    .button {
        margin-top: 50px;
    }

    .generate {
        font-family: "gothicbold";
        font-weight: 600;
        font-size: 18px;
        padding: 20px;
        background-color: #262626;
        color: #fff;
        text-decoration: none;
        border-radius: 10px;
        border: none;
    }

    .light-gray {
        color: rgb(165, 165, 165)
    }

    .row-image {
        max-width: 620px
    }

    .row-input {
        width: 480px;
        margin-left: 20px
    }

    .underline {
        text-decoration: underline;
    }

    .body {
        font-family: 'gothicregular';
    }

    .footer {
        width: 100%;
        text-align: center;
        color: gray
    }
    .p-luxe {
        font-family: 'gothicregular';
        font-size: 20px;
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
    <form action="{{ route('agreement.submit') }}" method="POST">
        @csrf
        <div class="container mt-4 mb-5">
            <div class="row mb-5">
                <div class="row-image">
                    <div class="page">
                        <div class="page-header">
                            <img src="{{asset('images/generate_logo.jpg')}}" alt="" style="width:270px">
                        </div>
                        <div class="body">
                            <br>
                            <p class="text-center p-luxe"><b>{{$agent->name}} - Mentorship Agreement</b></p>
                            <ul style="padding: 0">
                                <li>3 TRANSACTIONS WITH MENTOR</li>
                                <li>50% OF LISTINGS</li>
                                <li>35% OF SALES</li>
                                <li>25% IF IT'S A ZILLOW LEAD</li>
                            </ul>
                            <br>
                            <p>Agent Name:<span
                                    class="underline">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            </p>
                            <br>
                            <p>Agent agrees to join mentorship program and use mentor for assistance in three real
                                estate transactions. There is no time limit for completion of these transactions.
                                Associate will be responsible for procuring business leads to work and mentor will
                                provide a 30 minute weekly coaching call to make sure agent is progressing through
                                the program.</p>
                            <p>Compensation will be as follows.</p>
                            <p>Listing Transactions - Agent agrees to pay Mentor a 50% referral for any listing
                                transactions. Mentor will:</p>
                            <ol>
                                <li>Help you pre-qualify the listing presentation</li>
                                <li>Help prepare a pre-listing package</li>
                                <li>Attend the listing appointment</li>
                                <li>Present or assist to present on the listing appointment</li>
                                <li>Help to prepare CMA</li>
                                <li>Help with listing agreement and disclosures preparation</li>
                                <li>Attend open house and guide agent through sales process and marketing</li>
                            </ol>
                            <p>Buyer Transactions – Agent agrees to pay Mentor a 35% referral for any buyer
                                transactions that where the lead is generated by the agent and 25% when the lead
                                comes from Zillow. Mentor will:</p>
                            <ol>
                                <li>Coach agent on how to pre-qualify a buyer</li>
                                <li>Assist agent in helping to obtain buyer financing</li>
                                <li>Coach agent through the buying process</li>
                                <li>Assist with comparables</li>
                                <li>Assist with purchase price negotiation and contract preparation</li>
                                <li>Assist with negotiating the inspections</li>
                                <li>Assist with appraisal negotiations</li>
                            </ol>
                            <p>Agent agrees to use closing coordinator for these transactions and pay for closing
                                coordinator.</p>
                            <p>Additional services upon request</p>
                            <p>Agent Signature: <span
                                    class="underline handwritten">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            </p>
                            <p>Date Signed:<span
                                    class="underline">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            </p>
                            <div class="footer">
                                55 Merrick Way Suite 402, Coral Gables, FL 33134&nbsp;&nbsp;&nbsp;O: (305) 809-7650 F:
                                (305) 938-8054
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row-input" style="display: flex;flex-flow: column;align-self: center;">
                    <div>
                        <input type="hidden" name="form_title" value="{{$agent->name}} - Mentorship Agreement">
                        <input type="hidden" name="to_email[]" value="email@luxeknows.com">
                        <input type="hidden" name="to_email[]" value="support@luxeknows.com">
                        <input type="hidden" name="to_email[]" value="operations@luxeknows.com">
                        <input type="hidden" name="to_email[]" value="{{$agent->email}}">
                        <input type="hidden" name="mentor_name" value="{{$agent->name}}">
                        <input type="hidden" name="agreement_type" value="albert-agreement">
                        <label for="page-1-img-1">Full Name</label>
                        <input type="text" name="agent_full_name" id="text-1" value="" required>
                        <label for="page-1-img-1">Email</label>
                        <input type="text" name="agent_email" id="text-2" value="" required>
                        <label for="page-1-img-1">Date Signed</label>
                        <input type="text" name="date_signed" id="text-2" value="" required>
                        <label for="page-1-img-1">Phone</label>
                        <input type="text" name="phone" id="text-2" value="" required>
                        <div class="" style="margin-top:10px;">
                            <button type="submit" class="generate w-100">SUBMIT</button>
                        </div>
                    </div>
                </div>
            </div>
    </form>
</body>
<script>
    $("textarea,input").change(function(event) {
        var event_id = event.target.id;
        var text = $("#"+event_id).val();
        $('.'+event_id).html(text);
    });
</script>
@endsection