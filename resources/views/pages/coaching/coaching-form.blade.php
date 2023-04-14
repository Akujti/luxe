@extends('layouts.app', ['active' => 'Tools&TrainingVideos', 'subactive' => 'coaching'])
@section('css')
    <style>
        .title h1 {
            font-family: 'gothicbold';
            text-align: center;
            text-decoration: underline;
            font-size: 35px;
        }

        .title p {
            font-family: 'gothicregular';
            text-align: center;
            font-size: 19px;
        }

        .box-items {
            font-family: 'gothicregular';
            font-size: 18px;
        }

        .btn-luxe {
            border-radius: 10px;
            cursor: pointer;
        }

        .coaching-text li {
            font-size: 16px;
        }

        .coaching-text p {
            font-size: 17px;
        }

        .inputs input {
            border: none;
            border-bottom: 1px solid #262626;
            border-radius: 0px;
        }

        .inputs input:focus {
            outline: none !important;
            box-shadow: 5px 10px transparent !important;
        }

        .inputs input:read-only {
            background-color: transparent !important;
        }

        .gothicbold {
            font-family: 'gothicbold';
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="col-12 title mb-3">
            <div class="d-flex justify-content-center mb-3">
                <img src="/images/logo-black.png" height="116px" alt="">
            </div>
            <h1>NEXT LEVEL SALES COACHING REGISTRATION FORM</h1>
            <p>Please select your enrollment type from the options below in order to sign up for the coaching program.</p>
        </div>
        <div class="row box-items py-4 justify-content-center">
            <div class="col-12 col-md-12 col-lg-6">
                <x-verbiage-form-text :formInfo=$formInfo :afterSubmit="session()->get('modal')" />
                <form action="{{ route('coaching.form.submit') }}" method="POST" class="row p-0 m-0">
                    @csrf
                    <input type="hidden" name="form_title" value="LUXE Coaching">
                    <input type="hidden" name="form_verbiages_text" value="{{ $formInfo->email_verbiages_text }}">
                    <input type="hidden" name="agent_full_name" value="{{ auth()->user()->profile->fullname }}">
                    <input type="hidden" name="agent_email" value="{{ auth()->user()->email }}">
                    <input type="hidden" name="agent_phone" value="{{ auth()->user()->profile->phone }}">
                    <input type="hidden" name="agent_address" value="{{ auth()->user()->profile->address }}">
                    <input type="hidden" name="agent_languages"
                        value="{{ auth()->user()->profile->languages ? implode(',', auth()->user()->profile->languages) : null }}">
                    <div class="col-12 mb-4">

                        <input type="radio" name="enrollment_type" value="$249 per month (minimum 6-month commitment)"
                            onclick="toggleDetails(this)" required> - <b class="gothicbold">
                            {{ \Carbon\Carbon::parse('2022-07-16') <= \Carbon\Carbon::now()->timezone('America/New_York') ? '$249' : '$149' }}
                            per month</b> (minimum
                        6-month commitment)<br>
                        <input type="radio" name="enrollment_type"
                            value="Additional 10% fee on your next 6 transactions (12 months of coaching from the date of this agreement)"
                            onclick="toggleDetails(this)" required> - <b class="gothicbold">Additional 10% fee on your next
                            6 transactions</b> (12 months of coaching from the date of this agreement)
                    </div>
                    <div class="form-group col-12">
                        <label for="">Full Name:</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="full_name" required>
                        </div>
                    </div>
                    <div class="form-group col-12">
                        <label for="">Date:</label>
                        <div class="input-group">
                            <input type="date" class="form-control" name="date_signed" required>
                        </div>
                    </div>
                    <div class="row p-0 m-0 w-100 d-none" id="credit-card-inputs">
                        <div class="col-12">
                            <p style="font-size:17px">I authorize the company to regularly charge my card on the amount
                                indicated in this form on a regular basis,
                                and shall remain in effect until I request for the cancellation or termination. <br><br>
                                I likewise certify that I am the authorized user of the Credit Card that shall be submitted
                                through this form.
                                As long as the transactions correspond to the terms and conditions indicated in this
                                authorization, I shall not raise
                                disputes against the company.
                            </p>
                        </div>
                        <div class="form-group col-12">
                            <label for="">Name of Cardholder:</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="name_of_cardholder">
                            </div>
                        </div>
                        <div class="form-group col-12">
                            <label for="">Address of Cardholder:</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="address_of_cardholder">
                            </div>
                        </div>
                        <div class="form-group col-12">
                            <label for="">Credit Card Number(s):</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="credit_card_numbers">
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label for="">Expiration Date:</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="expiration_date">
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label for="">CVV:</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="cvv">
                            </div>
                        </div>
                        <div class="form-group col-12">
                            <label for="">Type of Credit Card:</label>
                            <div class="input-group">
                                <select name="type_of_credit_card" id="" class="form-control">
                                    <option value="">-- Choose an Option --</option>
                                    <option value="American Express">American Express</option>
                                    <option value="Visa">Visa</option>
                                    <option value="Mastercard">Mastercard</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn-luxe">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <script>
        function toggleDetails(e) {
            if (e.value == '$249 per month (minimum 6-month commitment)') {
                $("#credit-card-inputs :input").prop("disabled", false);
                $("#credit-card-inputs :input").prop('required', true);
                $('#credit-card-inputs').removeClass('d-none')
            } else {
                $("#credit-card-inputs :input").prop("disabled", true);
                $("#credit-card-inputs :input").prop('required', false);
                $('#credit-card-inputs').addClass('d-none')
            }
        }
    </script>
@endsection
