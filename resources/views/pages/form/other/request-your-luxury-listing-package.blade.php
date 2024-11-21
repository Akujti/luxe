@extends('layouts.app', ['active' => 'leads_services_support', 'subactive' => 'mls_listing_cancellation'])
@section('content')
    <div class="{{ auth()->check() ? 'container-fluid' : 'container mt-4' }}">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <form action="{{ route('general.email.post') }}" class="card form mb-5 p-3" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="card-header">
                        <h1 class="text-center my-4">Request Your Luxury Listing Package</h1>
                        <h5 class="text-center">
                            Please review all available packages, requirements & disclaimers <a
                                href="/luxury-listing-incentives">here</a>
                        </h5>
                        <ul class="">
                            <li>If property does not sell, you will be charged $300 for the listing package on your next
                                closing.</li>
                            <li>Yearly Top Producers whose photos are covered cannot claim two sets of photos; either their
                                Platinum
                                photo status is applied or the Luxury Packages below.
                            </li>
                            <li>"LUXE Photoshoots" are to be performed by LUXE approved photographers only. You cannot book
                                your own
                                photographer.
                            </li>
                            <li>If the property is not approved based on the photos submitted:
                                <ul>
                                    <li>You can resubmit photos once the property has been cleaned and is up to par.</li>
                                    <li>You can purchase the items below a la carte to be done with the property conditions
                                        as-is.</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <input type="hidden" name="form_title" value="Request Your Luxury Listing Package">
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
                                <label for="name">Property Type</label>
                                <select type="text" name="property_type" class="form-control" required>
                                    <option value>-</option>
                                    <option value="Single Family">Single Family</option>
                                    <option value="Condo/Apartment">Condo/Apartment</option>
                                    <option value="Duplex">Duplex</option>
                                    <option value="Triplex">Triplex</option>
                                    <option value="Quadplex">Quadplex</option>
                                    <option value="Entire Condo Building">Entire Condo Building</option>
                                    <option value="Commercial">Commercial</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Property Address</label>
                                <input type="text" name="property_address" class="form-control map-search" required
                                    placeholder="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Property Living Area Square Footage</label>
                                <input type="text" name="property_living_area_square_footage" class="form-control"
                                    required placeholder="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Date Expected to Go Live on MLS</label>
                                <input type="date" name="listing_date" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Total Commission For Listing</label>
                                <input type="text" name="total_commission_for_listing" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">% to LUXE - Listing Side Commission</label>
                                <input type="text" name="listing_side_commission" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Listing Sales Price</label>
                                <input type="text" name="listing_sales_price" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">What is the lead source for this listing?</label>
                                <select name="what_is_the_lead_source_for_this_listing" class="form-control" required>
                                    <option value>-</option>
                                    <option value="Personal">Personal</option>
                                    <option value="Zillow Seller Team">Zillow Seller Team</option>
                                    <option value="Zillow Buyer Team">Zillow Buyer Team</option>
                                    <option value="CINC Seller Team">CINC Seller Team</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Upload Listing Agreement </label>
                                <input type="file" name="upload_listing_agreement" class="form-control p-1">
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
                $('input[name="please_explain"]').attr('required', true);
            } else {
                $('#please_explain_div').addClass('d-none');
                $('input[name="please_explain"]').removeAttr('required')
            }
        }

        function toggleCollecting() {
            const value = $('#collecting_select').val();
            if (value === 'Yes') {
                $('#collecting_select').attr('required', true)
                $('#how_much').removeClass('d-none')
            } else {
                $('#collecting_select').attr('required', false)
                $('#how_much').addClass('d-none')
            }
        }
    </script>
@endsection
