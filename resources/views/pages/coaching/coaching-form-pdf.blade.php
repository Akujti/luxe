<html>

<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Petemoss&display=swap');

        @font-face {
            font-family: "gothicbold";
            src: local("gothicbold"),
                url("fonts/index-page/gothicbold.ttf") format("truetype");
        }

        @font-face {
            font-family: "gothicregular";
            src: local("gothicregular"),
                url("fonts/index-page/gothicregular.ttf") format("truetype");
        }

        .title .h1 {
            text-align: center;
            text-decoration: underline;
            font-size: 25px;
        }

        .title p {
            font-family: 'gothicregular';
        }

        .box-items {
            font-family: 'gothicregular';
            font-size: 18px;
        }

        .btn-luxe {
            border-radius: 10px;
            cursor: pointer;
        }

        .coaching-text p {
            font-size: 17px;
        }

        .inputs input {
            border: none;
            border-bottom: 1px solid #262626;
            width: 580px;
        }

        .inputs .date {
            border: none;
            border-bottom: 1px solid #262626;
            width: 620px;
        }

        .inputs input:focus {
            outline: none !important;
            box-shadow: 5px 10px transparent !important;
        }

        .inputs .signature {
            font-family: Petemoss;
            font-size: 28px;
            width: 585px;
        }

        .gothicbold {
            font-family: 'gothicbold' !important;
        }

        .rounded {
            border: 1px solid black;
            border-radius: 10px;
            padding: 4px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="col-12 title mb-3">
            <div class="d-flex justify-content-center mb-3">
                <center><img src="images/logo-black.png" height="100px" alt=""></center>
            </div>
            <div class="gothicbold h1">NEXT LEVEL SALES COACHING REGISTRATION FORM</div>
            <p>Please select your enrollment type from the options below in order to sign up for the coaching program.
            </p>
        </div>
        <div class="row box-items py-4">
            <div class="col-12 col-md-12 col-lg-7 coaching-text">
                <div>

                    @if ($enrollment_type == '$249 per month (minimum 6-month commitment)')
                        <div>Option #1 - <span class="gothicbold">$249 per month</span> (minimum 6-month commitment)
                        </div>
                    @else
                        <div>Option #2 - <span class="gothicbold">Additional 10% fee on your next 6 transactions</span>
                            (12 months of coaching from the date of this agreement)</div>
                    @endif
                </div>

                <div class="inputs" style="margin-top:20px;margin-left:5px;">
                    <div class="input-group mb-3" style="margin-bottom: 15px">
                        <span style="font-size:16px;">Full Name:</span>
                        <input type="text" name="full_name" class="form-control" value="{{ $full_name }}">
                    </div>
                    <div class="input-group mb-3" style="margin-bottom: 15px">
                        <span style="font-size:16px;">Signature:</span>
                        <input type="text" name="signature" class="form-control signature"
                            value="{{ $full_name }}">
                    </div>
                    <div class="input-group mb-3" style="margin-bottom: 15px">
                        <span style="font-size:16px;">Date:</span>
                        <input type="text" name="date" class="form-control date" value="{{ $date_signed }}">
                    </div>
                </div>
                <div style="margin-bottom:30px;">
                    <p style="border-bottom:2px solid black;padding-bottom:5px; font-style:italic;font-size:20px">Please
                        complete the credit card authorization below if you selected Option #1 above.</p>

                    <p>I authorize the company to regularly charge my card on the amount indicated in this form on a
                        regular basis,
                        and shall remain in effect until I request for the cancellation or termination. <br><br>
                        I likewise certify that I am the authorized user of the Credit Card that shall be submitted
                        through this form.
                        As long as the transactions correspond to the terms and conditions indicated in this
                        authorization, I shall not raise
                        disputes against the company.
                    </p>
                    <div class="inputs mt-5">
                        <div style="margin-bottom: 20px">
                            <span style="font-size:16px;">Name of Cardholder:</span>
                            <input type="text" class="form-control" style="width: 500px"
                                value="{{ $name_of_cardholder }}">
                        </div>
                        <div>
                            <span style="font-size:16px;">Address of Cardholder:</span>
                            <input type="text" class="form-control" style="width: 487px"
                                value="{{ $address_of_cardholder }}">
                        </div>
                        <br>
                        <div>
                            <span style="font-size:16px;">Credit Card Number(s):</span>
                            <input type="text" class="form-control" style="width: 485px"
                                value="{{ $credit_card_numbers }}">
                        </div>
                        <div style="font-size:15px;margin-bottom:15px;margin-top:15px;">Type of Credit
                            Card:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
                                class="{{ $type_of_credit_card == 'American Express' ? 'rounded' : '' }}">American
                                Express</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
                                class="{{ $type_of_credit_card == 'Visa' ? 'rounded' : '' }}">Visa</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
                                class="{{ $type_of_credit_card == 'Mastercard' ? 'rounded' : '' }}">Mastercard</span>
                        </div>
                        <div>
                            <div style="display:inline-block;width: 350px;padding:0px;margin: 0px">
                                <span style="font-size:16px;">Expiration Date:</span>
                                <input type="text" style="width:200px" value="{{ $expiration_date }}">
                            </div>
                            <div style="display:inline-block;width: 300px;padding:0px;margin: 0px">
                                <span style="font-size:16px;">CVV:</span>
                                <input type="text" style="width:130px" value="{{ $cvv }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
