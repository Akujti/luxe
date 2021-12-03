@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center my-4">
        <div class="col-md-12">

            <form action="{{route('general.email.post')}}" class="card form my-4 p-3" method="POST">
                @csrf
                <div class="card-header">
                    <h1 class="text-center my-4">Agent Form</h1>
                </div>
                <input type="hidden" name="form_title" value="Agent Form">
                <input type="hidden" name="to_email[]" value="marketing@luxeknows.com">
                <input type="hidden" name="to_email[]" value="support@luxeknows.com">
                <input type="hidden" name="to_email[]" value="receptionist@luxeknows.com">
                <input type="hidden" name="to_email[]" value="wesley@luxehomeloan.com">
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name">Legal Name</label>
                            <input type="text" name="agent_full_name" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">If applicable: Preferred Name to be used by Marketing:</label>
                            <input type="text" name="preferred_name" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Joining Office Location:</label>
                            <input type="text" name="joining_office_location" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Joining Date:</label>
                            <input type="text" name="joining_date" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Business Phone number:</label>
                            <input type="text" name="business_phone_number" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Personal Email:</label>
                            <input type="text" name="agent_email" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Date of Birth – Month/Day:</label>
                            <input type="text" name="date_of_birth" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Mailing Address:</label>
                            <input type="text" name="mailing_address" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Emergency Contact:</label>
                            <input type="text" name="emergency_contact" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Emergency Contact Phone:</label>
                            <input type="text" name="emergency_contact_phone" class="form-control" required>
                        </div>
                        <div class="form-group col-md-12">
                            <p class="text-center">The standard LUXE Email format is your firstname@luxeknows.com<br>
                                Since we are over 300 agents it is possible that it may not be available. Please provide
                                three options below in the
                                order of preference to be used should the standard format not be available. Or make a
                                note below if you would not like
                                the standard email format and have a special request.</p>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="name">Option A</label>
                            <input type="text" name="option_a" class="form-control" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="name">Option B</label>
                            <input type="text" name="option_b" class="form-control" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="name">Option C</label>
                            <input type="text" name="option_c" class="form-control" required>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="name">Note:</label>
                            <input type="text" name="note" class="form-control" required>
                        </div>
                        <div class="form-group col-md-12">
                            <p class="text-center">Occasionally we will feature Agents, Listings and Closing. Please
                                provide your Social Media addresses below</p>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="name">Facebook</label>
                            <input type="text" name="facebook" class="form-control" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="name">Instagram</label>
                            <input type="text" name="instagram" class="form-control" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="name">Twitter</label>
                            <input type="text" name="twitter" class="form-control" required>
                        </div>
                        <div class="form-group col-md-12">
                            <p class="text-center">LUXE Properties provides kvCore for agents CRM, CINC and RelaHQ at
                                the low cost of $60/Month. Please provide your
                                monthly payment method below for this technology fee.</p>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Credit Card Number:</label>
                            <input type="text" name="credit_card_number" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">CVC:</label>
                            <input type="text" name="cvc" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Expiration Date:</label>
                            <input type="text" name="expiration_date" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Zip Code:</label>
                            <input type="text" name="zip_code" class="form-control" required>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="name">Notes or Special Requests:</label>
                            <input type="text" name="notes_special_requests" class="form-control" required>
                        </div>
                        <div class="form-group col-12">
                            <input type="submit" class="btn btn-luxe w-100" value="SUBMIT">
                        </div>
                    </div>
                </div>


            </form>
        </div>
    </div>
</div>
@endsection