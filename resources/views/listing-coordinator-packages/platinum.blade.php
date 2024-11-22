@extends('layouts.app', ['active' => 'leads_services_support', 'subactive' => 'request_listing_closing_coordinators'])
@section('content')
    <style>
        #paypal-button-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            max-height: 40px;
        }

        #paypal-button-container {
            min-width: 70%;
        }
    </style>
    <div class="container-fluid">
        <div class="row justify-content-center mb-4">
            <div class="col-md-12">
                <form id="form" action="{{ route('general.email.post') }}" class="card form p-3" method="POST">
                    @csrf
                    <div class="card-header">
                        <h1 class="text-center my-4">Listing Coordinator - {{ $type->coordinator->name }}</h1>
                        <h6 id="agent-text" class="text-center" style="font-size: 21px;">PLATINUM PACKAGE
                            ${{ $type->price }}</h6>
                        <h5 class="text-center">Coordinator Will Reach Out Within 1 Business Day</h5>
                    </div>
                    <input type="hidden" name="form_title" value="LISTING COORDINATORS - {{ $type->coordinator->name }}">
                    <input type="hidden" name="form_title_value" value="LISTING COORDINATORS">
                    <input type="hidden" name="special" value="Coordinator Will Reach Out Within 1 Business Day">
                    <input type="hidden" name="to_email[]" value="{{ $type->coordinator->email }}">
                    <input type="hidden" name="package" value="{{ ucfirst($type->package) }}">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Agent Name</label>
                                <input type="text" name="agent_full_name" class="form-control"
                                    value="{{ auth()->user()->profile->fullname }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Agent Phone Number</label>
                                <input type="text" name="agent_number" class="form-control"
                                    value="{{ auth()->user()->profile->phone }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Agent Email</label>
                                <input type="text" name="agent_email" class="form-control"
                                    value="{{ auth()->user()->email }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Property Address</label>
                                <input type="text" name="property_address" class="form-control map" required
                                    placeholder="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Property Type</label>
                                <select name="property_type" class="form-control" required>
                                    <option value>-</option>
                                    <option value="Single family">Single family</option>
                                    <option value="Condo">Condo</option>
                                    <option value="Townhome">Townhome</option>
                                    <option value="Duplex">Duplex</option>
                                    <option value="Triplex">Triplex</option>
                                    <option value="Fourplex">Fourplex</option>
                                    <option value="Entire condo building">Entire condo building</option>
                                    <option value="Commercial">Commercial</option>
                                    <option value="Land">Land</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Listing Date</label>
                                <input type="date" name="listing_date" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">List Date to go live on MLS</label>
                                <input type="date" name="list_date_to_go_live_on_mls" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">What is list price?</label>
                                <input type="text" name="what_is_list_price" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Terms Considered - Select all that apply</label>
                                <div class="">
                                    @php
                                        $terms = ['FHA', 'Conventional', 'VA', 'Cash', 'Cash Only'];
                                    @endphp
                                    @foreach ($terms as $key => $term)
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="{{ $term }}"
                                                id="terms-{{ $key }}" name="terms_considered[]">
                                            <label class="form-check-label" for="terms-{{ $key }}">
                                                {{ $term }}
                                            </label>
                                        </div>
                                    @endforeach
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="customOption"
                                            onclick="toggleCustomInput('customInput')">
                                        <label class="form-check-label" for="customOption">
                                            Other
                                        </label>
                                        <input type="text" class="form-control mt-2" id="customInput"
                                            name="terms_considered[]" style="display:none;" placeholder="Type here">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Please upload executed listing agreement</label>
                                <input type="file" name="executed_listing_agreement" class="form-control p-1"
                                    required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Is there an HOA or Condo Association?</label>
                                <select name="is_there_an_hoa_or_condo_association" class="form-control"
                                    onchange="toggleDescription(this)" required>
                                    <option value="-">-</option>
                                    <option value="HOA">HOA</option>
                                    <option value="Condo Association">Condo Association</option>
                                    <option value="Both">Both</option>
                                    <option value="None">None</option>
                                </select>
                            </div>
                            <div class="listing-desc d-none form-group col-md-6">
                                <label for="name">Contact Information for HOA/Condo Association - Phone Number &
                                    Email</label>
                                <input type="text" name="contact_information_for_hoa_condo_association"
                                    class="form-control" />
                            </div>
                            <div class="d-none form-group col-md-6">
                                <label for="name">Do you need us to get association application & put it in the
                                    attachments on the MLS?</label>
                                <select name="do_you_need_us_to_get_association_application" class="form-control">
                                    <option value="-">-</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="listing-desc d-none form-group col-md-6">
                                <label for="name">Floors Description - Select all that apply</label>
                                <div class="">
                                    @php
                                        $floors = [
                                            'Tile',
                                            'Hard Wood',
                                            'Engineered Wood',
                                            'Laminate',
                                            'Porcelain',
                                            'Marble',
                                            'Carpet',
                                        ];
                                    @endphp
                                    @foreach ($floors as $key => $floor)
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="{{ $floor }}"
                                                id="floors-{{ $key }}" name="floors[]">
                                            <label class="form-check-label" for="floors-{{ $key }}">
                                                {{ $floor }}
                                            </label>
                                        </div>
                                    @endforeach
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="customOption"
                                            onclick="toggleCustomInput('customInputFloors')">
                                        <label class="form-check-label" for="customOption">
                                            Other
                                        </label>
                                        <input type="text" class="form-control mt-2" id="customInputFloors"
                                            name="floors[]" style="display:none;" placeholder="Type here">
                                    </div>
                                </div>
                            </div>
                            <div class="listing-desc d-none form-group col-md-6">
                                <label for="name">Construction Type - Select all that apply</label>
                                <div class="">
                                    @php
                                        $types = [
                                            'Concrete Block',
                                            'Aluminum Siding',
                                            'Brick Exterior',
                                            'CBS',
                                            'Stucco Exterior',
                                            'New Construction',
                                            'Under Construction',
                                        ];
                                    @endphp
                                    @foreach ($types as $key => $floor)
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="{{ $floor }}"
                                                id="construction-types-{{ $key }}" name="construction_types[]">
                                            <label class="form-check-label" for="construction-types-{{ $key }}">
                                                {{ $floor }}
                                            </label>
                                        </div>
                                    @endforeach
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox"
                                            id="customOptionConstructionOption"
                                            onclick="toggleCustomInput('customOptionConstruction')">
                                        <label class="form-check-label" for="customOptionConstruction">
                                            Other
                                        </label>
                                        <input type="text" class="form-control mt-2" id="customOptionConstruction"
                                            name="construction_types[]" style="display:none;" placeholder="Type here">
                                    </div>
                                </div>
                            </div>
                            <div class="listing-desc d-none form-group col-md-6">
                                <label for="name">Roof Description</label>
                                <div class="">
                                    @php
                                        $roofs = ['Barrel', 'Shingle', 'Flat Tile', 'Aluminum', 'Metal', 'Concrete'];
                                    @endphp
                                    <select name="roof_description" class="form-control mt-2">
                                        <option value="-">-</option>
                                        @foreach ($roofs as $key => $item)
                                            <option value="{{ $item }}">{{ $item }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="listing-desc form-group col-md-6">
                                <label class="form-check-label">Number of A/C Units</label>
                                <input type="number" class="form-control mt-2" name="number_of_ac_units" />
                            </div>
                            <div class="listing-desc form-group col-md-6">
                                <label class="form-check-label">Are pets allowed</label>
                                <select class="form-control mt-2" name="pets_allowed">
                                    <option value="">-</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <div>
                                    <label for="name">Anything that differs from tax records?</label>
                                    <textarea name="anything_that_differs_from_tax_records" rows="3" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Please select any property upgrades or special features from the
                                    below. Please select as many as apply.</label>
                                <div class="">
                                    @php
                                        $upgrades = [
                                            'Impact Windows',
                                            'Impact Doors',
                                            'Generator',
                                            'Guest House',
                                            'Sauna',
                                            'Jacuzzi',
                                            'Covered Terrace',
                                            'Gazebo',
                                            'Shed',
                                            'Smart-house',
                                            'Sound System',
                                            'Security System',
                                            'Alarm System',
                                            'Tankless Water Heater',
                                            'Solar Panels',
                                            'Zero-Threshold Showers',
                                            'Quartz Countertops',
                                            'Automatic Blinds',
                                            'Zebra Blinds',
                                            'Outdoor Kitchen',
                                            'Automatic Gate',
                                        ];
                                    @endphp
                                    @foreach ($upgrades as $key => $term)
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="{{ $term }}"
                                                id="terms-{{ $key }}" name="property_upgrades[]">
                                            <label class="form-check-label" for="terms-{{ $key }}">
                                                {{ $term }}
                                            </label>
                                        </div>
                                    @endforeach
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="customOption"
                                            onclick="toggleCustomInput('customInput2')">
                                        <label class="form-check-label" for="customOption">
                                            Other
                                        </label>
                                        <input type="text" class="form-control mt-2" id="customInput2"
                                            name="property_upgrades[]" style="display:none;" placeholder="Type here">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-check-label">Please select from the below, regarding photos for the
                                    property</label>
                                <select class="form-control mt-2" name="photos_of_the_property" required>
                                    <option value="">-</option>
                                    <option value="Need to schedule photos">Need to schedule photos</option>
                                    <option value="Already scheduled photos">Already scheduled photos</option>
                                    <option value="Already scheduled photos">Already scheduled photos</option>
                                    <option value="Pictures are complete">Pictures are complete</option>
                                    <option value="Need to wait on getting photos">Need to wait on getting photos
                                    </option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-check-label">Any coagents or special instructions for broker
                                    remarks?</label>
                                <input type="text" class="form-control mt-2" name="coagents_or_special_instructions"
                                    required />
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-check-label">Do you want us to make the property description?</label>
                                <select class="form-control mt-2" required
                                    name="do_you_want_us_to_make_the_property_description">
                                    <option value="">-</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-check-label">Would you like for us to reach out to the owner on your
                                    behalf? **This would be for the seller property disclosure and scheduling on photos
                                    or open houses. </label>
                                <select class="form-control mt-2"
                                    name="would_you_like_for_us_to_reach_out_to_the_owner_on_your_behalf"
                                    onchange="toggleHiddenClass(this,'reach-owner')">
                                    <option value="">-</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="reach-owner d-none form-group col-md-6">
                                <label class="form-check-label">Contact Information For Owner(s) - Name, Phone Number,
                                    Email</label>
                                <textarea class="form-control mt-2" name="contact_information_for_owner"></textarea>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-check-label">Do you have a seller property disclosure?</label>
                                <select class="form-control mt-2" required
                                    name="do_you_have_a_seller_property_disclosure">
                                    <option value="">-</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No, I will get one">No, I will get one</option>
                                    <option value="No, please request from owner(s)">No, please request from owner(s)
                                    </option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-check-label">Would you like for us to order a sign post? **There is a
                                    cost for the post. </label>
                                <select class="form-control mt-2" required
                                    name="would_you_like_for_us_to_order_a_sign_post">
                                    <option value="">-</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-check-label">Do you have a for sale sign to hang?</label>
                                <select class="form-control mt-2" required name="do_you_have_a_for_sale_sign_to_hang">
                                    <option value="">-</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option value="Order from Marketing">Order from Marketing</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-check-label">Do you have an open house scheduled?</label>
                                <select class="form-control mt-2" required name="do_you_have_an_open_house_scheduled"
                                    onchange="toggleHiddenClass(this,'open-house')">
                                    <option value="">-</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="open-house d-none form-group col-md-6">
                                <label class="form-check-label">Please provide date & time of open house.</label>
                                <input type="datetime-local" class="form-control mt-2"
                                    name="date_and_time_of_open_house" />
                            </div>
                            <div class="open-house d-none form-group col-md-6">
                                <label class="form-check-label">Do you need an email blast for the open house?</label>
                                <select class="form-control mt-2" name="do_you_need_an_email_blast_for_the_open_house">
                                    <option value="">-</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-check-label">Do you have a broker's open scheduled?</label>
                                <select class="form-control mt-2" onchange="toggleHiddenClass(this,'broker-scheduled')"
                                    name="do_you_have_a_brokers_open_scheduled">
                                    <option value="">-</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="broker-scheduled d-none form-group col-md-6">
                                <label class="form-check-label">Please provide date & time of broker's open.</label>
                                <input type="datetime-local" class="form-control mt-2"
                                    name="date_and_time_of_broker's_open" />
                            </div>
                            <div class="broker-scheduled d-none form-group col-md-6">
                                <label class="form-check-label">Do you need an email blast for the broker's
                                    open?</label>
                                <select class="form-control mt-2" name="do_you_need_an_email_blast_for_the_broker's_open">
                                    <option value="">-</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-check-label">Would you like a property spec sheet?</label>
                                <select class="form-control mt-2" name="would_you_like_a_property_spec_sheet">
                                    <option value="">-</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-check-label">Would you like property brochures? **There is a printing
                                    cost, approximately $100. </label>
                                <select class="form-control mt-2" name="would_you_like_property_brochures">
                                    <option value="">-</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-check-label">Would you like property mailers (EDDM)? **There is a
                                    cost for printing & postage.</label>
                                <select class="form-control mt-2" name="would_you_like_property_mailers">
                                    <option value="">-</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-check-label">Would you like a custom social media post?</label>
                                <select class="form-control mt-2" required
                                    name="would_you_like_a_custom_social_media_post">
                                    <option value="">-</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-check-label">Would you like a custom email blast? **This may have
                                    extra cost.</label>
                                <select class="form-control mt-2" required name="would_you_like_a_custom_email_blast">
                                    <option value="">-</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option value="Standard is ok - Free">Standard is ok - Free</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-check-label">Would you like a custom property website? **This may
                                    have extra cost.</label>
                                <select class="form-control mt-2" required
                                    name="would_you_like_a_custom_property_website">
                                    <option value="">-</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option value="Standard is ok - Free">Standard is ok - Free</option>
                                </select>
                            </div>
                            <div class="form-group col-12 mt-3">
                                <div id="paypal-button-wrapper">
                                    <div id="paypal-button-container"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function toggleCustomInput(input) {
            const customInput = document.getElementById(input)
            if (customInput.style.display === 'none' || customInput.style.display === '') {
                customInput.style.display = 'block'
            } else {
                customInput.style.display = 'none'
            }
        }

        function toggleDescription(select) {
            if (select.value == 'HOA' || select.value == 'Condo Association' || select.value == 'Both') {
                $('.listing-desc').removeClass('d-none')
            } else {
                $('.listing-desc').addClass('d-none')
            }
        }

        function toggleHiddenClass(select, itemToShowHide) {
            if (select.value == 'Yes') {
                $('.' + itemToShowHide).removeClass('d-none')
            } else {
                $('.' + itemToShowHide).addClass('d-none')
            }
        }

        function toggleUploadImage(select) {
            if (select.value == 'Yes') {
                document.getElementById('pictures_desc').classList.remove('d-none')
            } else {
                document.getElementById('pictures_desc').classList.add('d-none')
            }
        }
    </script>
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
                tagline: 'false',
                color: 'black'
            },
            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: <?php echo json_encode($type->price); ?>
                        }
                    }]
                })
            },
            onClick: function() {
                const form = document.getElementById('form')
                if (form.checkValidity()) {
                    return true
                } else {
                    form.reportValidity()
                    return false
                }
            },
            onApprove: function(data, actions) {
                return actions.order.capture().then(function(details) {
                    document.getElementById('form').submit()
                })
            }
        }).render('#paypal-button-container')
    </script>
@endsection
