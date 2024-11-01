@extends('layouts.app', ['active' => 'office_staff_directory', 'subactive' => 'new_agents_referrals'])
@section('content')
    <div class="{{ auth()->check() ? 'container-fluid' : 'container mt-4' }}">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <form action="{{ route('general.email.post') }}" class="card form mb-5 p-3" method="POST">
                    @csrf
                    <div class="card-header">
                        <h1 class="text-center my-4">Agent Form</h1>
                    </div>
                    <input type="hidden" name="form_title" value="Agent Form">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Legal Name</label>
                                <input type="text" name="agent_full_name" class="form-control"
                                    value="{{ auth()->check() ? auth()->user()->profile->fullname : '' }}" required>
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
                                <input type="text" name="agent_email" class="form-control"
                                    value="{{ auth()->check() ? auth()->user()->email : '' }}" required>
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
                            <div class="form-group col-md-6">
                                <label for="name">Do you have a preferred real estate email you want to use? If you do
                                    not have one we can make you one</label>
                                <select name="do_you_have_a_preferred_real_estate_email_you_want_to_use "
                                    class="form-control" onchange="preferredEmail(this)">
                                    <option value>-</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Would you like to sign up as a showing agent? Check out our current
                                    showing agents on <a href="https://myluxehub.com/showing-agents" target="_blank">this
                                        page</a></label>
                                <select name="would_you_like_to_sign_up_as_a_showing_agent " class="form-control">
                                    <option value>-</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6 d-none" id="preferred-email">
                                <br>
                                <label>Please provide your preferred email so we can add you to our email
                                    list</label>
                                <input type="text" name="preferred_email" class="form-control">
                            </div>
                            <div class="form-group col-md-12 d-none" id="info-paragraph">
                                <p class="text-center">If you would like a LUXE email, the standard LUXE Email format is
                                    your firstname@luxeknows.com<br>
                                    Since we are over 300 agents it is possible that it may not be available. Please provide
                                    three options below in the order of preference to be used should the standard format not
                                    be available. Or make a note below if you would not like the standard email format and
                                    have a special request.</p>
                            </div>
                            <div id="email-options" class="col-12 row d-none">
                                <div class="form-group col-md-4">
                                    <label for="name">Option A</label>
                                    <input type="text" name="option_a" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="name">Option B</label>
                                    <input type="text" name="option_b" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="name">Option C</label>
                                    <input type="text" name="option_c" class="form-control">
                                </div>
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
                            {{-- <div class="form-group form-footer col-12">
                                <input type="submit" class="btn btn-luxe w-100" value="SUBMIT">
                            </div> --}}
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function preferredEmail(elem) {
            let value = $(elem).val();
            if (value === 'Yes') {
                $('#preferred-email').removeClass('d-none')
                $('#preferred-email input').attr("required", true);
                $('#email-options').addClass('d-none')
                $('#info-paragraph').addClass('d-none')
                $('#email-options input').attr("required", false);
            } else if (value === 'No') {
                $('#info-paragraph').removeClass('d-none')
                $('#preferred-email').addClass('d-none')
                $('#preferred-email input').attr("required", false);
                $('#email-options').removeClass('d-none')
                $('#email-options input').attr("required", true);
            }
        }
    </script>
@endsection
