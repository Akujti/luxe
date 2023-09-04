@extends('layouts.app', ['active' => 'Tools&TrainingVideos', 'subactive' => 'coaching'])
@section('css')
    <style>
        .title h1 {
            font-family: 'gothicbold';
            text-align: center;
            text-decoration: underline;
            font-size: 22px;
        }

        .title p {
            font-family: 'gothicregular';
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
    <div class="container-fluid ">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8 title mb-3 ">
                <div class="d-flex justify-content-center mb-3">
                    <img src="/images/logo-black.png" height="100px" alt="">
                </div>

                <h1>LUXE COACHING - 30 DAYS TO SUCCESS ACCOUNTABILITY AGREEMENT</h1>
                <p>This agreement outlines the terms and conditions of the $100 deposit for the
                    coaching program.</p>
                <p>30 Days to Success Accountability program will be hosted at the Coral Gables
                    office from 10am to 12pm Monday through Friday. There are 20 instructional
                    days of the 30 days from the start date of the program. Weekends are meant
                    for independent work provided by your coach.</p>
                <p>
                    Your $100 deposit will be returned to you after the 30 Days to Success is
                    completed. The refund is contingent upon the following conditions being met:
                    16 of the 20 instructional days must be completed and 2 hours need to be
                    completed on each instructional day.
                </p>
                <p>If you fail to attend the minimum required day within the specified time above,
                    a refund will not be issued.</p>
            </div>
        </div>
        <div class="row box-items py-4 justify-content-center">
            <div class="col-12 col-md-12 col-lg-6">
                <x-verbiage-form-text :formInfo=$formInfo :afterSubmit="session()->get('modal')" />
                <form id="form" action="{{ route('general.email.post') }}" method="POST" class="row p-0 m-0">
                    @csrf
                    <input type="hidden" name="form_title" value="LUXE Coaching">
                    <input type="hidden" name="form_verbiages_text" value="{{ $formInfo->email_verbiages_text }}">
                    <input type="hidden" name="agent_full_name" value="{{ auth()->user()->profile->fullname }}">
                    <input type="hidden" name="agent_email" value="{{ auth()->user()->email }}">
                    <input type="hidden" name="agent_languages"
                        value="{{ auth()->user()->profile->languages ? implode(',', auth()->user()->profile->languages) : null }}">
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
                    <div class="col-12">
                        <div id="paypal-button-container"></div>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <script
        src="https://www.paypal.com/sdk/js?client-id={{ config('app.paypal_client_id') }}&disable-funding=credit&components=buttons">
    </script>
    <script>
        paypal.Buttons({
            style: {
                layout: 'horizontal',
                size: 'small',
                label: 'pay',
                height: 40,
                tagline: 'false'
            },
            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: 100
                        }
                    }]
                });
            },
            onInit: function(data, actions) {
                actions.disable();
                document.querySelectorAll('input').forEach(item => {
                    item.addEventListener('input', () => {
                        if (document.getElementById("form").checkValidity()) {
                            actions.enable();
                        } else {
                            actions.disable();
                        }
                    });
                });
            },
            onClick: function() {
                document.getElementById("form").reportValidity()
            },
            onApprove: function(data, actions) {
                return actions.order.capture().then(function(details) {
                    document.getElementById("form").submit();
                });
            }
        }).render('#paypal-button-container');
    </script>
@endsection
