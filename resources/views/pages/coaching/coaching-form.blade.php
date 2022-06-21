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
            border-bottom:1px solid #262626;
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

            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-show="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Success</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>You have successfully signed up for the Next Level Sales Coaching & the coach will reach out
                                to you soon!</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            @if (session()->get('modal'))
                <script type="text/javascript">
                    $(window).on('load', function() {
                        $('#exampleModalCenter').modal('show');
                    });
                </script>
            @endif
        </div>
        <div class="row box-items py-4">
            <div class="col-12 col-md-12 col-lg-7 coaching-text">
                <div>
                    Option #1 - <b class="gothicbold">$149 per month</b> (minimum 6-month commitment)<br>
                    Option #2 - <b class="gothicbold">Additional 10% fee on your next 6 transactions</b> (12 months of coaching from the date of this agreement)
                </div>
                <div class="inputs ml-2 mt-4">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="d-flex align-items-end mr-1">Full Name:</span>
                        </div>
                        <input type="text" name="full_name" class="form-control" readonly>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="d-flex align-items-end mr-1">Signature:</span>
                        </div>
                        <input type="text" name="signature" class="form-control" readonly>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="d-flex align-items-end mr-1">Date:</span>
                        </div>
                        <input type="text" name="date" class="form-control" readonly>
                    </div>
                </div>

                <div class="mt-5">
                    <p style="border-bottom:2px solid black" class="pb-1 font-italic">Please complete the credit card authorization below if you selected Option #1 above.</p>

                    <p>I authorize the company to regularly charge my card on the amount indicated in this form on a regular basis,
                        and shall remain in effect until I request for the cancellation or termination. <br><br>
                        I likewise certify that I am the authorized user of the Credit Card that shall be submitted through this form.
                        As long as the transactions correspond to the terms and conditions indicated in this authorization, I shall not raise 
                        disputes against the company.
                    </p>

                    <div class="inputs mt-5">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="d-flex align-items-end mr-1">Name of Cardholder:</span>
                            </div>
                            <input type="text" class="form-control" readonly>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="d-flex align-items-end mr-1">Address of Cardholder:</span>
                            </div>
                            <input type="text" class="form-control" readonly>
                        </div>
                        <br>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="d-flex align-items-end mr-1">Credit Card Number(s):</span>
                            </div>
                            <input type="text" class="form-control" readonly>
                        </div>
                        <p style="font-size:15px">Type of Credit Card:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;American Express&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Visa&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mastercard</p>
                        <div class="row p-0 m-0" style="gap: 20px">
                            <div class="input-group mb-3 col-6 p-0">
                                <div class="input-group-prepend">
                                    <span class="d-flex align-items-end mr-1">Expiration Date:</span>
                                </div>
                                <input type="text" class="form-control" readonly>
                            </div>
                            <div class="input-group mb-3 col-4">
                                <div class="input-group-prepend">
                                    <span class="d-flex align-items-end mr-1">CVV:</span>
                                </div>
                                <input type="text" class="form-control" readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-5">
                <form action="{{ route('coaching.form.submit') }}" method="POST" class="row p-0 m-0">
                    @csrf
                    <input type="hidden" name="form_title" value="LUXE Coaching">
                    <input type="hidden" name="agent_full_name" value="{{ auth()->user()->profile->fullname }}">
                    <input type="hidden" name="agent_email" value="{{ auth()->user()->email }}">
                    <input type="hidden" name="agent_phone" value="{{ auth()->user()->profile->phone }}">
                    <input type="hidden" name="agent_address" value="{{ auth()->user()->profile->address }}">
                    <input type="hidden" name="agent_languages"
                        value="{{ auth()->user()->profile->languages ? implode(',', auth()->user()->profile->languages) : null }}">
                    <div class="col-12 mb-4">
                        <input type="radio" name="enrollment_type" value="$149 per month (minimum 6-month commitment)" checked="" onclick="toggleDetails(this)"> - <b class="gothicbold">$149 per month</b> (minimum 6-month commitment)<br>
                        <input type="radio" name="enrollment_type" value="Additional 10% fee on your next 6 transactions (12 months of coaching from the date of this agreement)" onclick="toggleDetails(this)"> - <b class="gothicbold">Additional 10% fee on your next 6 transactions</b> (12 months of coaching from the date of this agreement)
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
                            <input type="text" class="form-control" name="date_signed" required>
                        </div>
                    </div>
                    <div class="row p-0 m-0 w-100" id="credit-card-inputs">
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
            if(e.value != '$149 per month (minimum 6-month commitment)') {
                $("#credit-card-inputs :input").prop("disabled", true);
            } else {
                $("#credit-card-inputs :input").prop("disabled", false);
            }
        }
    </script>
@endsection
