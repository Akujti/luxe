@extends('layouts.app', ['active' => 'leads_services_support', 'subactive' => 'get_leads'])
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <x-verbiage-form-text :formInfo=$formInfo :afterSubmit="session()->get('modal')" />
                <form id="regForm" action="{{ route('general.email.post') }}" class="card form mb-5 p-3" method="POST">
                    @csrf
                    <div class="card-header">
                        <h1 class="text-center my-4">Join CINC Seller Team</h1>
                    </div>
                    <input type="hidden" name="form_title" value="Join CINC Seller Team">

                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Agent Name</label>
                                <input type="text" name="agent_full_name" class="form-control"
                                    value="{{ auth()->user()->profile->fullname }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Agent Phone Number</label>
                                <input type="text" name="agent_phone_number" class="form-control"
                                    value="{{ auth()->user()->profile->phone }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Email</label>
                                <input type="text" name="agent_email" class="form-control"
                                    value="{{ auth()->user()->email }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Agent Address</label>
                                <input type="text" name="agent_address" class="form-control"
                                    value="{{ auth()->user()->profile->address }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Years of Experience</label>
                                <input type="number" name="years_of_experience" class="form-control" value=""
                                    min="0" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Are you comfortable overcoming objections?</label>
                                <select name="are_you_comfortable_overcoming_objections" class="form-control" required>
                                    <option value>-</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Are you comfortable with the listing presentation?</label>
                                <select name="are_you_comfortable_with_the_listing_presentation" class="form-control"
                                    required>
                                    <option value>-</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Are you a full time or part time real estate agent?</label>
                                <select name="are_you_a_full_time_or_part_time_real_estate_agent" class="form-control"
                                    required onchange="canSubmitForm(this)">
                                    <option value>-</option>
                                    <option value="Full Time">Full Time</option>
                                    <option value="Part Time">Part Time</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">What do you typically bring to your listing presentations?</label>
                                <input type="text" name="what_do_you_typically_bring_to_your_listing_presentations"
                                    class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">How long are your listing presentations?</label>
                                <input type="text" name="how_long_are_your_listing_presentations" class="form-control"
                                    required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">What steps do you take to prequalify a seller prior to meeting with
                                    them?</label>
                                <input type="text"
                                    name="what_steps_do_you_take_to_prequalify_a_seller_prior_to_meeting_with_them"
                                    class="form-control" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="name">Please list the addresses of the listings you listed and have closed
                                    in the past 12 months.</label>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" name="listing_address_1" placeholder="Address 1"
                                    class="form-control mb-3">
                                <input type="text" name="listing_address_2" placeholder="Address 2"
                                    class="form-control mb-3">
                                <input type="text" name="listing_address_3" placeholder="Address 3"
                                    class="form-control mb-3">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" name="listing_address_4" placeholder="Address 4"
                                    class="form-control mb-3">
                                <input type="text" name="listing_address_5" placeholder="Address 5"
                                    class="form-control mb-3">
                                <input type="text" name="listing_address_6" placeholder="Address 6"
                                    class="form-control mb-3">
                            </div>
                            <div class="form-group form-footer col-12">
                                <input id="submit-button" type="submit" class="btn btn-luxe w-100" value="SUBMIT">
                                <p id="cannot-submit-text" class="text-center d-none text-danger font-weight-bold">Thank
                                    you for your form. Only Full Time Agents Can Join</p>
                            </div>
                        </div>
                    </div>
                </form>
                <form action="{{ route('getCsv') }}" method="post" id="csv">
                    @csrf
                    <input type="hidden" name="title" value="ZILLOW LEADS WEEKLY UPDATE">
                </form>
                <form action="{{ route('deleteSubmissions') }}" method="POST" id="deleteSubmissions">
                    @csrf
                    @method('delete')
                    <input type="hidden" name="title" value="ZILLOW LEADS WEEKLY UPDATE">
                </form>
            </div>
        </div>
    </div>

    <script>
        function canSubmitForm(select) {
            const input = $(select).val()
            if (input == 'Part Time') {
                $('#submit-button').addClass('d-none')
                $('#cannot-submit-text').removeClass('d-none')
            } else {
                $('#submit-button').removeClass('d-none')
                $('#cannot-submit-text').addClass('d-none')
            }
        }
    </script>
@endsection
