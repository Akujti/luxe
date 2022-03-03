@extends('layouts.app')
@section('content')
<style>
    label {
        background-color: #FFCF40;
        padding: 10px;
        display: block;
        border: 1px solid black;
        margin-bottom: 0 !important;
    }

    input,
    textarea {
        font-size: 15px;
        margin-top: 10px;
        margin-bottom: 5px;
        width: 100%;
        border: 1px solid #FFCF40;
        font-family: Lato;
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
        /* color: white; */
        text-decoration: none;
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
        font-family: 'Times New Roman';
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
        <div class="container mb-5">
            <div class="row mb-5">
                <div class="row-image">
                    <div class="page">
                        <div class="header">
                            <img src="{{asset('images/generate_logo.jpg')}}" alt="" style="width:270px">
                        </div>
                        <div class="body">
                            <br>
                            <p class="text-center"><b>{{$agent->name}} - Mentorship Agreement</b></p>
                            <ul style="padding: 0">
                                <li>3 TRANSACTIONS WITH MENTOR</li>
                                <li>25% OF LISTINGS</li>
                                <li>25% OF SALES</li>
                            </ul>
                            <p>Agent Name:____________________
                            </p>
                            <br>
                            <p>Agent agrees to join mentorship program and use mentor for assistance in three real
                                estate transactions.
                                There is no
                                time limit for completion of these transactions. Associate will be responsible for
                                procuring business
                                leads to work and
                                mentor will provide a 30 minute weekly coaching call to make sure agent is progressing
                                through the
                                program.</p>
                            <p>Compensation will be as follows.</p>
                            <p>Listing Transactions - Agent agrees to pay Mentor a 25% referral for any listing
                                transactions. Mentor
                                will attend
                                listing presentation; prepare CMA, open house and guide agent through sales process and
                                marketing.</p>
                            <p>Buyer Transactions - Agent agrees to pay Mentor a 25% referral for any buyer
                                transactions. Mentor will
                                coach agent
                                through showings, comparables, negotiation and contract preparation.</p>
                            <p>Agent agrees to use closing coordinator for these transactions and mentor will not take
                                on more than
                                three mentees at
                                any time.</p>
                            <p>Additional services upon request</p>
                            <br><br>
                            <p>Agent Signature: ____________________
                            </p>
                            <p>Date Signed:________________________
                            </p>
                            <br><br>
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
                        <input type="hidden" name="agreement_type" value="agreement-agent">
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