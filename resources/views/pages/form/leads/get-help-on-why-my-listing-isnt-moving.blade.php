@extends('layouts.app', ['active' => 'leads_services_support', 'subactive' => 'get_help_my_listing_isnt_moving'])
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <form action="{{ route('general.email.post') }}" class="card form p-3" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="card-header">
                        <h1 class="text-center my-4">Get Help on Why My Listing Isn't Moving</h1>
                    </div>
                    <input type="hidden" name="form_title" value="Get Help on Why My Listing Isn't Moving">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="">Agent Name</label>
                                <input type="text" name="agent_full_name" class="form-control"
                                    value="{{ auth()->user()->profile->fullname }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Agent Phone</label>
                                <input type="text" name="agent_phone" class="form-control"
                                    value="{{ auth()->user()->profile->phone }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Agent Email</label>
                                <input type="text" name="agent_email" class="form-control"
                                    value="{{ auth()->user()->email }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Property Address</label>
                                <input type="text" name="property_address" class="form-control map-search" required
                                    placeholder="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Zillow Link to Listing</label>
                                <input type="text" name="zillow_link_to_listing" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">MLS Link to Listing</label>
                                <input type="text" name="mls_link_to_listing" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Number of Showings</label>
                                <input type="number" name="number_of_showings" class="form-control mb-3" required>

                                <div class="form-group">
                                    <label for="">What is your feedback from showings?</label>
                                    <textarea name="what_is_your_feedback_from_showings" class="form-control" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="how_many_days_on_the_market">How many days on the market?</label>
                                    <input type="number" id="how_many_days_on_the_market"
                                        name="how_many_days_on_the_market" class="form-control mb-3" required>
                                </div>
                                <div class="form-group">
                                    <label for="what_is_the_average_days_on_market_for_this_area">What is average days
                                        on market for this area/building?</label>
                                    <input type="number" id="what_is_the_average_days_on_market_for_this_area"
                                        name="what_is_the_average_days_on_market_for_this_area" class="form-control mb-3"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="what_are_the_offers_you_have_received_and_why_werent_they_accepted">What are
                                        the offers you have received and why weren't they accepted?</label>
                                    <textarea name="what_are_the_offers_you_have_received_and_why_werent_they_accepted" rows="3" required
                                        class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">What Marketing Have You Done? Select All That Apply</label>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" value="Property Website"
                                            name="marketing[]">Property Website
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" value="Property Website"
                                            name="marketing[]">Email Blast
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" value="Postcard Mailers"
                                            name="marketing[]">Postcard Mailers
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" value="Doorhangers"
                                            name="marketing[]">Doorhangers
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" value="YouTube Ads"
                                            name="marketing[]">YouTube Ads
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" value="Google Ads"
                                            name="marketing[]">Google Ads
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" value="Facebook Ads"
                                            name="marketing[]">Facebook Ads
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" value="Instagram Ads"
                                            name="marketing[]">Instagram Ads
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" value="Open House"
                                            name="marketing[]">Open House
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" value="Other"
                                            name="marketing[]">Other
                                    </label>
                                </div>

                                <div class="form-group mt-2">
                                    <label for="have_you_received_any_offers">Have you received any offers?</label>
                                    <select type="text" id="have_you_received_any_offers"
                                        name="have_you_received_any_offers" class="form-control" required>
                                        <option value>-</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
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
        function showInput(param) {
            const val = $(param).val()
            if (val == 'Other') {
                $('#provide-type-div').removeClass('d-none')
                $('#provide-type-div input').attr('required', true)
            } else {
                $('#provide-type-div').addClass('d-none')
                $('#provide-type-div input').attr('required', false)
            }
        }
    </script>
@endsection
