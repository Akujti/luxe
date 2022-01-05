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

    .footer {
        width: 100%;
        text-align: center;
        color: gray
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
                            <br><br>
                            <p class="text-center"><b>{{$agent->name}} - Mentorship Agreement</b></p>
                            <br><br>
                            <p>Agent Name:<span
                                    class="underline">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            </p>
                            <br>
                            <p>Agent agrees to join and abide by the mentorship program and use a mentor for assistance
                                in three real
                                estate
                                transactions. There is no time limit for completion of these transactions. Agent will be
                                responsible for
                                procuring
                                business leads to work and the mentor will provide a 30 minute weekly group coaching
                                call to make sure
                                the agent is
                                progressing through the program.
                                Compensation will be as follows.</p>
                            <p><b>Listing Transactions</b> - Agent agrees to pay Mentor a 50% referral for any listing
                                transactions. The
                                Mentor will attend the listing presentation;
                                assist with the preparation of the CMA, assist with open house, and guide the agent
                                through the sales
                                process and
                                marketing. In addition, too, coordinate, organize, and assist with staging,
                                decluttering, photography,
                                video, assists
                                with scheduling inspections, & showings, Q&A, etc. Duties will vary as depends on the
                                transaction. Agent
                                is solely
                                responsible for the Transaction Coordinator Fees, Attorney fees, etc. The Agent will
                                remain positive at
                                all times, open
                                to learning and receiving education, and develop a strong mental mindset. Agent
                                understands that Wesley
                                Ulloa is their
                                Broker and any question deemed needing an answer from the Broker, at my discretion, will
                                be sent to
                                Wesley.</p>
                            <p><b>Buyer Transactions</b> - Agent agrees to pay Mentor a 50% referral for any buyer
                                transactions. The
                                Mentor will coach the agent through showings,
                                comparables, assist with the preparation of the CMA, verification of data, negotiations,
                                and contract
                                preparation. In
                                addition, too, coordinate, organize, and assist with scheduling inspections, & showings,
                                etc. Duties
                                will vary as
                                depends on the transaction. Agent is solely responsible for the Transaction Coordinator
                                Fees, Attorney
                                Fees, etc. The
                                Agent will remain positive at all times, open to learning and receiving education, and
                                develop a strong
                                mental mindset.
                                Agent understands that Wesley Ulloa is their Broker and any question deemed needing an
                                answer from the
                                Broker, at my
                                discretion, will be sent to Wesley.</p>
                            <p>Agent agrees to use and be solely responsible for any and all fees associated with the
                                Transaction
                                Coordinator, staging,
                                photography, video,etc., and an Attorney fee for these transactions and the mentor will
                                not take on more
                                than seven
                                mentees at any time.</p>
                            <p>Agent success is solely determined by the agent. The Agent will be prepared, fully
                                engaged, and ready to
                                work towards
                                their success. The Agent will be committed and dedicated to achieving success and
                                successfully
                                graduating from the
                                Mentorship Agreement Program. The Agent should not compare themselves to others and will
                                work with
                                ethics to ensure
                                their own individual success and work with the group as needed to ensure everyone’s
                                success. We all
                                succeed together.</p>
                            <p>The Mentor will work diligently to ensure the agent achieves success.</p>
                            <p>Everyone will be respectful of each other's time and will work together for success!</p>
                            <p>Additional services upon request (additional fees are/may be possible).</p>
                            <br><br>
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
                        <input type="hidden" name="to_email[]" value="wesley@luxeknows.com">
                        <input type="hidden" name="to_email[]" value="support@luxeknows.com">
                        <input type="hidden" name="to_email[]" value="operations@luxeknows.com">
                        <input type="hidden" name="to_email[]" value="{{$agent->email}}">
                        <input type="hidden" name="mentor_name" value="{{$agent->name}}">
                        <input type="hidden" name="agreement_type" value="suzan-agreement">
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