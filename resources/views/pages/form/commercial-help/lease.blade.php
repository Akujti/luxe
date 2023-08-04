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
                        <h1 class="text-center my-4">Commercial Lease</h1>
                    </div>
                    <input type="hidden" name="form_title" value="Commercial Lease">
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
                            <div class="form-group col-md-12" id="property-type">
                                <label for="name">Property Type</label>
                                <select name="property_type" class="form-control" required onchange="toggleOptions(this)">
                                    <option value="">-</option>
                                    <option value="Industrial Warehouse">Industrial Warehouse</option>
                                    <option value="Commercial Office">Commercial Office</option>
                                    <option value="Commercial Retail">Commercial Retail</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6" data-property="industrial">
                                <label for="name">Will this be their first location and is it a New Business? Or
                                    expanding into their second or
                                    third location?</label>
                                <input type="text" name="will_this_be_their_first_location_and_is_it_a_new_business"
                                    class="form-control" required>
                                <ul class="m-0 pl-3">
                                    <li class="mb-0">Deposit and or Personal Guarantee will come to play</li>
                                    <li class="mb-0">Institutional landlords like established businesses. Meanwhile,
                                        Private
                                        landlords will take a chance with small/individual companies.</li>
                                    <li class="mb-0">Will there be any manufacturing and assembly facilities?</li>
                                </ul>
                            </div>
                            <div class="form-group col-md-6 justify-content-start" data-property="industrial">
                                <label for="name">Location - which industrial area?</label>
                                <br>
                                <input type="text" name="location_which_industrial_area" class="form-control" required>
                                <ul class="m-0 pl-3">
                                    <li class="mb-0">For example Airport West (Doral, Hialeah, or Medley)</li>
                                </ul>
                            </div>
                            <div class="form-group col-md-6 justify-content-start" data-property="industrial">
                                <label for="name">Warehouse Specifics</label>
                                <input type="text" name="warehouse_specifics" class="form-control" required>
                                <ul class="m-0 pl-3">
                                    <li class="mb-0">Ceiling Height?</li>
                                    <li class="mb-0">Bay Doors</li>
                                    <li class="mb-0">Dock High?</li>
                                    <li class="mb-0">HVAC system throughout?</li>
                                    <li class="mb-0">3 Phase Electrical?</li>
                                </ul>
                            </div>
                            <div class="form-group col-md-6 justify-content-start" data-property="industrial">
                                <label for="name">How much will the amount of Square Footage Needed?</label>
                                <input type="text" name="how_much_will_the_amount_of_square_footage_needed"
                                    class="form-control" required>
                                <ul class="m-0 pl-3">
                                    <li class="mb-0">Too much or Too little</li>
                                    <li class="mb-0">Office and or warehouse space</li>
                                </ul>
                            </div>
                            <div class="form-group col-md-6 justify-content-start" data-property="industrial">
                                <label for="name">It also helps to know for licensing</label>
                                <br>
                                <input type="text" name="it_also_helps_to_know_for_licensing" class="form-control"
                                    required>
                                <ul class="m-0 pl-3">
                                    <li class="mb-0">Permits</li>
                                    <li class="mb-0">Required use or equipment</li>
                                    <li class="mb-0">State Lic. County and or Municipality</li>
                                </ul>
                            </div>
                            <div class="form-group col-md-6 justify-content-start" data-property="industrial">
                                <label for="name">Do they want to stand-alone building or within an industrial warehouse
                                    condos?</label>
                                <input type="text"
                                    name="do_they_want_to_stand-alone_building_or_within_an_industrial_warehouse_condos"
                                    class="form-control" required>
                                <ul class="m-0 pl-3">
                                    <li class="mb-0">Est. amount Parking spaces needed, will delivery vehicles need
                                        parking (18 wheelers)</li>
                                </ul>
                            </div>
                            <div class="form-group col-md-6 justify-content-start" data-property="industrial">
                                <label for="name">How much rent are they looking to pay on a monthly basis?</label>
                                <input type="text" name="how_much_rent_are_they_looking_to_pay_on_a_monthly_basis"
                                    class="form-control" required>
                            </div>
                            <div class="form-group col-md-6 justify-content-start" data-property="industrial">
                                <label for="name">How soon is the client looking to move into the warehouse
                                    space?</label>
                                <input type="text"
                                    name="how_soon_is_the_client_looking_to_move_into_the_warehouse_space"
                                    class="form-control" required>
                            </div>

                            {{-- OFFICE --}}
                            <div class="form-group col-md-6 justify-content-start" data-property="office">
                                <label for="name">Will this be their first location and is it a New Business? Or
                                    expanding into their second or
                                    third location?</label>
                                <input type="text" name="will_this_be_their_first_location_and_is_it_a_new_business"
                                    class="form-control" required>
                                <ul class="m-0 pl-3">
                                    <li class="mb-0">Deposit and or Personal Guarantee will come to play</li>
                                    <li class="mb-0">Institutional landlords like established businesses. Meanwhile,
                                        Private landlords will take a
                                        chance with small/individual businesses.</li>
                                </ul>
                            </div>
                            <div class="form-group col-md-6 justify-content-start" data-property="office">
                                <label for="name">Location -Lease an A, B, or C class building the higher the $ SQ
                                    FT</label>
                                <br>
                                <input type="text" name="location" class="form-control" required>
                                <ul class="m-0 pl-3">
                                    <li class="mb-0">Gables, Brickell most class A</li>
                                    <li class="mb-0">Dadeland, Aventura most class B</li>
                                    <li class="mb-0">Class A - New development - Brickell City Center, Aventura Mall,
                                        Telemundo Studios Etc.</li>
                                    <li class="mb-0">Class B - Luxe HQ building, Dadeland Mall, Etc.</li>
                                    <li class="mb-0">The more the population density the more higher the monthly rate.
                                    </li>
                                </ul>
                            </div>
                            <div class="form-group col-md-6 justify-content-start" data-property="office">
                                <label for="name">Landlord will want to know what type of business will take place and
                                    procedures or services</label>
                                <input type="text" name="what_type_of_business_will_take_place" class="form-control"
                                    required>
                                <ul class="m-0 pl-3">
                                    <li class="mb-0">Landlord may request a business plan</li>
                                </ul>
                            </div>
                            <div class="form-group col-md-6 justify-content-start" data-property="office">
                                <label for="name">How much will Square Footage Needed?</label>
                                <input type="text" name="how_much_will_square_footage_needed" class="form-control"
                                    required>
                                <ul class="m-0 pl-3">
                                    <li class="mb-0">Too much or Too little - office space given that most services use
                                        the Hybrid model</li>
                                    <li class="mb-0">Medical space, will they need access to water, bathrooms, electrical
                                        (X-ray machine)</li>
                                </ul>
                            </div>
                            <div class="form-group col-md-6 justify-content-start" data-property="office">
                                <label for="name">Will they want the space already Built-Out - save cost but will not
                                    be to their preference?</label>
                                <input type="text" name="will_they_want_the_space_already_built_out"
                                    class="form-control" required>
                                <ul class="m-0 pl-3">
                                    <li class="mb-0">With permits and construction it may take a minimum of 6 to 9 months
                                        to get the business up
                                        and running</li>
                                    <li class="mb-0">Negotiate with the Landlord on Free Rent (Rent abatement)</li>
                                    <li class="mb-0">It also helps to know for licensing - permits - required use or
                                        equipment</li>
                                    <li class="mb-0">State Lic. County and or Municipality</li>
                                </ul>
                            </div>
                            <div class="form-group col-md-6 justify-content-start" data-property="office">
                                <label for="name">Do they want to be within a highrise or small office
                                    building?</label>
                                <br>
                                <input type="text" name="do_they_want_to_be_within_a_highrise_or_small_office_building"
                                    class="form-control" required>
                                <ul class="m-0 pl-3">
                                    <li class="mb-0">Est. amount Parking spaces needed, Will the client want to piggyback
                                        off another established
                                        business (Embassy/Immigration Attorney) (Dentist w/ Day Spa)</li>
                                </ul>
                            </div>
                            <div class="form-group col-md-6 justify-content-start" data-property="office">
                                <label for="name">How much rent are they looking to pay on a monthly basis?</label>
                                <input type="text" name="how_much_rent_are_they_looking_to_pay_on_a_monthly_basis"
                                    class="form-control" required>
                            </div>
                            <div class="form-group col-md-6 justify-content-start" data-property="office">
                                <label for="name">How soon is the client looking to move into the warehouse
                                    space?</label>
                                <input type="text"
                                    name="how_soon_is_the_client_looking_to_move_into_the_warehouse_space"
                                    class="form-control" required>
                            </div>


                            {{-- RETAIL --}}
                            <div class="form-group col-md-6 justify-content-start" data-property="retail">
                                <label for="name">Will this be their first location and is it a New Business? Or
                                    expanding into their second or
                                    third location?</label>
                                <input type="text" name="will_this_be_their_first_location_and_is_it_a_new_business"
                                    class="form-control" required>
                                <ul class="m-0 pl-3">
                                    <li class="mb-0">Deposit and or Personal Guarantee will come to play</li>
                                    <li class="mb-0">Institutional landlords like established businesses. Meanwhile,
                                        Private landlords will take a
                                        chance with small/individual businesses.</li>
                                </ul>
                            </div>
                            <div class="form-group col-md-6 justify-content-start" data-property="retail">
                                <label for="name">Location - If you are at an End Cap or Class A building the higher
                                    the
                                    $ SQ FT</label>
                                <br>
                                <input type="text" name="location" class="form-control" required>
                                <ul class="m-0 pl-3">
                                    <li class="mb-0">If you are at an End Cap or Class A building the higher the $ SQ FT
                                    </li>
                                    <li class="mb-0">If you are at an End Cap or Class A building the higher the $ SQ FT
                                    </li>
                                    <li class="mb-0">If you are at an End Cap or Class A building the higher the $ SQ FT
                                    </li>
                                    <li class="mb-0">The more the population density the more higher is the monthly rate.
                                    </li>
                                    </li>
                                </ul>
                            </div>
                            <div class="form-group col-md-6 justify-content-start" data-property="retail">
                                <label for="name">Landlord will want to know what type of business will take place and
                                    procedures or services</label>
                                <input type="text" name="what_type_of_business_will_take_place" class="form-control"
                                    required>
                                <ul class="m-0 pl-3">
                                    <li class="mb-0">For Non-Competes</li>
                                    <li class="mb-0">Starbucks, Supercuts, Publix supermarkets, LA Fitness, Smoothie King
                                    </li>
                                    <li class="mb-0">Landlord may request a business plan</li>
                                </ul>
                            </div>
                            <div class="form-group col-md-6 justify-content-start" data-property="retail">
                                <label for="name">How much Square Footage will be Needed?</label>
                                <br>
                                <input type="text" name="how_much_sqaure_footage_will_be_needed" class="form-control"
                                    required>
                                <ul class="m-0 pl-3">
                                    <li class="mb-0">Too much or Too little - office or warehouse space.</li>
                                </ul>
                            </div>
                            <div class="form-group col-md-6 justify-content-start" data-property="retail">
                                <label for="name">Will they want the space already Built-Out - save cost but will not
                                    be to their preference?</label>
                                <input type="text" name="will_they_want_the_space_already_built_out"
                                    class="form-control" required>
                                <ul class="m-0 pl-3">
                                    <li class="mb-0">With permits and construction it may take a minimum of 6 to 9 months
                                        to get the business up
                                        and running</li>
                                    <li class="mb-0">Negotiate with the Landlord on Free Rent (Rent abatement)</li>
                                    <li class="mb-0">It also helps to know for licensing - permits - required use or
                                        equipment</li>
                                    <li class="mb-0">State Lic. County and or Municipality</li>
                                </ul>
                            </div>
                            <div class="form-group col-md-6 justify-content-start" data-property="retail">
                                <label for="name">Do they want to stand alone building or within a shopping
                                    center?</label>
                                <br>
                                <input type="text"
                                    name="do_they_want_to_stand-alone_building_or_within_a_shopping_center"
                                    class="form-control" required>
                                <ul class="m-0 pl-3">
                                    <li class="mb-0">Est. amount Parking spaces needed, Will the client want to piggyback
                                        off another established
                                        business (Gym w/ Healthy Rest.) (Dentist w/ Nail Salon)</li>
                                </ul>
                            </div>
                            <div class="form-group col-md-6 justify-content-start" data-property="retail">
                                <label for="name">How much rent are they looking to pay on a monthly basis?</label>
                                <input type="text" name="how_much_rent_are_they_looking_to_pay_on_a_monthly_basis"
                                    class="form-control" required>
                            </div>
                            <div class="form-group col-md-6 justify-content-start" data-property="retail">
                                <label for="name">How soon is the client looking to move into the warehouse
                                    space?</label>
                                <input type="text"
                                    name="how_soon_is_the_client_looking_to_move_into_the_warehouse_space"
                                    class="form-control" required>
                            </div>


                            <div class="form-group col-md-12 justify-content-start" data-property="industrial">
                                <p class="text-center">Commercial leases are calculated based on Price per Square Foot.
                                    $/SF</p>
                                <p class="text-center">Please feel free to reach out to the commercial division at Luxe
                                    should you need further clarification on the questions
                                    above.</p>
                            </div>
                            <div class="form-group col-md-12 justify-content-start" data-property="office">
                                <p class="text-center">Commercial leases are calculated based on Price per Square Foot.
                                    $/SF</p>
                                <p class="text-center">Please feel free to reach out to the commercial division at Luxe
                                    should you need further clarification on the questions
                                    above.</p>
                            </div>
                            <div class="form-group col-md-12 justify-content-start" data-property="retail">
                                <p class="text-center">Commercial leases are calculated based on Price per Square Foot.
                                    $/SF</p>
                                <p class="text-center">Please feel free to reach out to the commercial division at Luxe
                                    should you need further clarification on the questions
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
        var industrialDivs = $('div[data-property="industrial"]')
        var officeDivs = $('div[data-property="office"]')
        var retailDivs = $('div[data-property="retail"]')
        var targetDiv = $("#property-type");
        $('div[data-property]').remove()

        function toggleOptions(option) {
            var value = option.value
            if (value == 'Industrial Warehouse') {
                $('div[data-property]').remove()
                industrialDivs.clone().insertAfter(targetDiv);
            } else if (value == 'Commercial Office') {
                $('div[data-property]').remove()
                officeDivs.clone().insertAfter(targetDiv);
            } else if (value == 'Commercial Retail') {
                $('div[data-property]').remove()
                retailDivs.clone().insertAfter(targetDiv);
            } else
                $('div[data-property]').remove()
        }
    </script>
@endsection
