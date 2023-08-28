@extends('layouts.app', ['active' => 'leads_services_support', 'subactive' => 'get_commercial_help'])
@section('content')
    <style>
        .form-group {
            justify-content: space-between;
            flex-direction: column;
            display: flex;
        }
    </style>
    <div class="{{ auth()->check() ? 'container-fluid' : 'container mt-4' }}">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <form action="{{ route('general.email.post') }}" class="card form mb-5 p-3" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="card-header">
                        <h1 class="text-center my-4">Commercial Purchase</h1>
                    </div>
                    <input type="hidden" name="form_title" value="Commercial Purchase">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Agent Name:</label>
                                <input type="text" name="agent_full_name" class="form-control"
                                    value="{{ auth()->user()->profile->fullname }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Agent Phone:</label>
                                <input type="text" name="agent_phone" class="form-control"
                                    value="{{ auth()->user()->profile->phone }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Agent Email:</label>
                                <input type="email" name="agent_email" class="form-control"
                                    value="{{ auth()->user()->email }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Client Name:</label>
                                <input type="text" name="client_name" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">What type of Asset is the client looking to purchase?</label>
                                <select name="what_type_of_asset_is_the_client_looking_to_purchase" class="form-control"
                                    required>
                                    <option value="">-</option>
                                    <option value="Multi-family">Multi-family</option>
                                    <option value="Warehouse">Warehouse</option>
                                    <option value="Vacant Land">Vacant Land</option>
                                    <option value="Business">Business</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">
                                    Will the purchase be for an investment or for their own business?
                                </label>
                                <select name="will_the_purchase_be_for_an_investment_or_for_their_own_business"
                                    class="form-control" required>
                                    <option value="">-</option>
                                    <option value="Investment">Investment</option>
                                    <option value="Own business">Own business</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">
                                    Have they purchased a CRE property before?
                                </label>
                                <select name="have_they_purchased_a_cre_property_before" class="form-control" required>
                                    <option value="">-</option>
                                    <option value="YES - How was the financing Done?">YES - How was the financing Done?
                                    </option>
                                    <option value="NO - Have they secured the Financing?">NO - Have they secured the
                                        Financing?</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Answer</label>
                                <input type="text" name="answer" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">
                                    If the purchase is for their business please refer to the
                                    qualifications as a tenant guide to know what type of building and or space they need
                                </label>
                                <input type="text" name="qualifications_as_a_tenant_guide" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">IF the purchase is an investment, what are they looking to achieve
                                    from the purchase?</label>
                                <select
                                    name="if_the_purchase_is_an_investment_what_are_they_looking_to_achieve_from_the_purchase"
                                    class="form-control" required>
                                    <option value="">-</option>
                                    <option value="% Cap Rate">% Cap Rate</option>
                                    <option value="Value Add">Value Add</option>
                                    <option value="Passive Income">Passive Income</option>
                                    <option value="Cash on Cash Return">Cash on Cash Return</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Why is the Client choosing that specific investment
                                    strategy?</label>
                                <input type="text" name="why_is_the_client_choosing_that_specifig_investment_strategy"
                                    class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">What is the amount the client is willing to Invest in the
                                    purchase?</label>
                                <input type="text"
                                    name="what_is_the_amount_the_client_is_willing_to_invest_in_the_purchase"
                                    class="form-control" required>
                            </div>
                            {{-- <div class="form-group col-md-6">
                                <label for="name">IF the purchase is an investment, what are they looking to achieve
                                    from the purchase?</label>
                                <select
                                    name="if_the_purchase_is_an_investment_what_are_they_looking_to_achieve_from_the_purchase"
                                    class="form-control" required>
                                    <option value="">-</option>
                                    <option value="% Cap Rate">% Cap Rate</option>
                                    <option value="Value Add">Value Add</option>
                                    <option value="Passive Income">Passive Income</option>
                                    <option value="Cash on Cash Return">Cash on Cash Return</option>
                                </select>
                            </div> --}}
                            <div class="form-group col-md-6">
                                <label for="name">Location - Is the Client looking to purchase in a specific sub-market?
                                    - Doral, Hialeah, Medley, Little River, Little Havana, or Allapattah</label>
                                <input type="text"
                                    name="location_-_is_the_client_looking_to_purchase_in_a_specific_sub-market"
                                    class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Is the client looking to purchase within the next 30, 60, or 90
                                    days?</label>
                                <input type="text"
                                    name="is_the_client_looking_to_purchase_within_the_next_30_60_or_90_days"
                                    class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Are they working exclusively with you?</label>
                                <input type="text" name="are_they_working_exclusively_with_you" class="form-control"
                                    required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Best time to set up a conference call with a CRE specialist?</label>
                                <input type="text" name="best_time_to_set_up_a_conference_call_with_a_cre_specialist"
                                    class="form-control" required>
                            </div>
                            <div class="col-12">
                                <p class="text-center">Please feel free to reach out to the commercial division at Luxe
                                    should you need further
                                    clarification on the questions
                                    above.</p>
                            </div>

                            <div class="form-group form-footer col-12 align-items-center">
                                <input type="submit" class="btn btn-luxe w-100" value="SUBMIT">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function toggleOptions(select_id) {
            var value = $('#' + select_id).val();

            if (value == 'Sale') {
                $('#representing_select').html(`
                    <option value="">-</option>
                    <option value="Buyer">Buyer</option>
                    <option value="Seller">Seller</option>
                `)
            } else {
                $('#representing_select').html(`
                    <option value="">-</option>
                    <option value="Tenant">Tenant</option>
                    <option value="Landlord">Landlord</option>
                `)
            }
        }
    </script>
@endsection
