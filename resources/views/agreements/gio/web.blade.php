@extends('layouts.app', ['active' => 'Service&StaffRequests', 'subactive' => 'mentors'])
@section('content')
<style>
    label {
        background-color: #262626;
        color: #fff;
        padding: 10px;
        display: block;
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
        font-family: "Lato";
        font-weight: 600;
        font-size: 18px;
        padding: 20px;
        background-color: #262626;
        border: none;
        color: white;
        border-radius: 10px;
        font-family: 'gothicbold';
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
        <div class="container mb-5 mt-4">
            <div class="row mb-5">
                <div class="row-image">
                    <div class="page">
                        <div class="">
                            <img src="{{asset('images/generate_logo.jpg')}}" alt="" style="width:270px">
                        </div>
                        <div class="body">
                            <br>
                            <p class="text-center p-luxe"><b>{{$agent->name}} - Mentorship Agreement</b></p>
                            <ul style="padding: 0">
                                <li>3 TRANSACTIONS WITH MENTOR</li>
                                <li>25% OF LISTINGS</li>
                                <li>25% OF SALES</li>
                            </ul>
                            <br>
                            <p>Agent Name:<span
                                    class="underline">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            </p>
                            <br>
                            <p>Agent agrees to join mentorship program and use mentor for assistance in three real
                                estate transactions.
                                There is no time limit for completion of these transactions. Agent will be responsible
                                for procuring
                                business leads to work and mentor will provide two 30-minute weekly coaching calls to
                                make sure the
                                agent is progressing through the program. Mentee will complete a questionnaire prepared
                                by the mentor
                                in order to better assess the mentee’s needs. Mentor will also take out mentee to lunch
                                initially to get
                                to know them better!</p>
                            <p>Compensation will be as follows.</p>
                            <p>Listing Transactions - Agent agrees to pay Mentor a 25% referral for any listing
                                transactions. Mentor
                                will
                                attend listing presentation; prepare CMA, open house and guide agent through sales
                                process and
                                marketing.</p>
                            <p>Buyer Transactions - Agent agrees to pay Mentor a 25% referral for any buyer
                                transactions. Mentor will
                                coach agent through buyer consultations, showings, comparables, negotiation and contract
                                preparation.
                            </p>
                            <p>Agent agrees to use a Luxe Transaction Coordinator for these transactions. Agent agrees
                                to be solely
                                responsible for any and all fees associated with the Transaction Coordinator, Attorney
                                fees, staging,
                                photography, video, etc. The Mentor will not take on more than two mentees at any time.
                            </p>
                            <p>The Mentor will work diligently to ensure the agent achieves success.<br>
                                Everyone should be respectful of each other's time and will work together towards
                                success!</p>
                            <p>Additional services upon request</p>
                            <p>Agent Signature: <span
                                    class="underline handwritten">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            </p>
                            <p>Date Signed:<span
                                    class="underline">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            </p>
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
                        <input type="hidden" name="agreement_type" value="gio-agreement">
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