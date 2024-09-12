@extends('layouts.app', ['active' => 'leads_services_support', 'subactive' => 'request_credit_letter_for_transaction'])
@section('content')
    <div class="{{ auth()->check() ? 'container-fluid' : 'container mt-4' }}">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <form action="{{ route('general.email.post') }}" class="card form mb-5 p-3" method="POST"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="card-header">
                        <h1 class="text-center my-4">Request Credit Letter For A Transaction</h1>
                    </div>
                    <input type="hidden" name="form_title" value="Request Credit Letter For A Transaction">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Agent Name:</label>
                                <input type="text" name="agent_name" class="form-control"
                                       value="{{ auth()->user()->profile->fullname }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Agent Email:</label>
                                <input type="text" name="agent_email" class="form-control"
                                       value="{{ auth()->user()->email }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Agent Number:</label>
                                <input type="text" name="agent_number" class="form-control"
                                       value="{{ auth()->user()->profile->phone }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Property Address</label>
                                <input type="text" name="property_address" class="form-control map-search" required
                                       placeholder="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="who_are_you_crediting">Who are you crediting?</label>
                                <select name="who_are_you_crediting" id="who_are_you_crediting" class="form-control"
                                        required>
                                    <option value>-</option>
                                    <option value="Buyer">Buyer</option>
                                    <option value="Seller">Seller</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="help_select">What is the lead source for this client?</label>
                                <select name="what_is_the_lead_source_for_this_client" class="form-control"
                                        id="help_select"
                                        required
                                        onchange="toggleOptionsRepresenting()">
                                    <option value>-</option>
                                    <option value="Zillow Buyer">Zillow Buyer</option>
                                    <option value="Zillow Seller">Zillow Seller</option>
                                    <option value="Opcity">Opcity</option>
                                    <option value="LUXE Lead">LUXE Lead</option>
                                    <option value="Personal">Personal</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div id="please_explain_div" class="form-group col-md-6 d-none">
                                <label for="please_specify">Please Specify:</label>
                                <input type="text" name="please_specify" id="please_specify" class="form-control p-1">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="dollar_amount_of_credit">Dollar Amount of Credit:</label>
                                <input type="text" name="dollar_amount_of_credit" id="dollar_amount_of_credit"
                                       class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="is_the_file_on_broker_sumo">Is the file on Broker Sumo?</label>
                                <select name="is_the_file_on_broker_sumo" id="is_the_file_on_broker_sumo"
                                        onchange="toggleBrokerSumo()"
                                        class="form-control" required>
                                    <option value>-</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <p class="d-none" id="broker_sumo_text">Although you can proceed with submitting this
                                    request below. Credit letters cannot be reviewed or processed by Accounting
                                    Department unless all corresponding paperwork is on Broker Sumo. Please add the
                                    transaction as soon as possible. Thank you
                                </p>
                            </div>

                            <div class="form-group form-footer col-12">
                                <input type="submit" class="btn btn-luxe w-100" value="SUBMIT">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function toggleOptionsRepresenting() {
            const value = $('#help_select').val();

            if (value === 'Other') {
                $('#please_explain_div').removeClass('d-none');
                $('input[name="please_specify"]').attr('required', true);
            } else {
                $('#please_explain_div').addClass('d-none');
                $('input[name="please_specify"]').removeAttr('required')
            }
        }

        function toggleBrokerSumo() {
            const value = $('#is_the_file_on_broker_sumo').val();
            if (value === 'No') {
                $('#broker_sumo_text').removeClass('d-none')
            } else {
                $('#broker_sumo_text').addClass('d-none')
            }
        }
    </script>
@endsection
