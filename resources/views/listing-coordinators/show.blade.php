@extends('layouts.app', ['active' => 'leads_services_support', 'subactive' => 'request_listing_closing_coordinators'])
@section('content')
    <style>
        #paypal-button-container {
            display: flex;
            justify-content: center;
            background: #FFC33A;
            position: relative;
            z-index: 0;
        }

        /* #paypal-button-container:hover {
                                                        background: #F2BA36
                                                    } */

    </style>
    <div class="container-fluid">
        <div class="row justify-content-center mb-4">
            <div class="col-md-12">
                <form id="form" action="{{ route('general.email.post') }}" class="card form p-3" method="POST">
                    @csrf
                    <div class="card-header">
                        <h1 class="text-center my-4">LISTING COORDINATOR - {{ $listingCoordinator->name }}</h1>
                        <h6 id="agent-text" class="text-center" style="font-size: 21px;">LISTING INPUT ONLY $100</h6>
                    </div>
                    <input type="hidden" name="form_title" value="LISTING COORDINATORS - {{ $listingCoordinator->name }}">
                    <input type="hidden" name="form_title_value" value="LISTING COORDINATORS">
                    {{-- <input type="hidden" name="to_email[]" value="email@luxeknows.com">
                <input type="hidden" name="to_email[]" value="support@luxeknows.com">
                <input type="hidden" name="to_email[]" value="receptionist@luxeknows.com">
                <input type="hidden" name="to_email[]" value="operations@luxeknows.com"> --}}
                    <input type="hidden" name="to_email[]" value="{{ $listingCoordinator->email }}">
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
                                <label for="name">Address for Listing</label>
                                <input type="text" name="address_for_listing" class="form-control map" required
                                    placeholder="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">List Date to go on MLS</label>
                                <input type="date" name="list_date_to_go_to_mls" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Anything that differs from tax records?</label>
                                <textarea name="anything_that_differs_from_tax_records" class="form-control" rows="3" required></textarea>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Please list any upgrades or special features ex - impact windows,
                                    generator, pool,</label>
                                <input type="text" name="upgrades_or_special_features" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Open house date?</label>
                                <input type="text" name="open_house_date" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Where can I find photos?</label>
                                <input type="text" name="where_can_i_find_photos" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Any coagents or special instructions for broker remarks?</label>
                                <textarea name="coagents_or_special_instructions" class="form-control" rows="3" required></textarea>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Do you want us to make the description?</label>
                                <select name="do_you_want_us_to_make_the_description" class="form-control"
                                    onchange="toggleDescription(this)">
                                    <option value="-">-</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Do you want us to upload pictures?</label>
                                <select id="upload_pic" name="do_you_want_us_to_upload_pictures" class="form-control"
                                    onchange="toggleUploadImage(this)">
                                    <option value="-">-</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <div id="listing_desc" class="d-none">
                                    <label for="name">Listing Description</label>
                                    <textarea name="listing_description" rows="3" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div id="pictures_desc" class="d-none">
                                    <label for="name">Link to pictures or instructions to access (if in podio please
                                        specify)</label>
                                    <textarea name="link_to_pictures_or_instructions" rows="3" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group col-12">
                                {{-- <input type="submit" class="btn btn-luxe w-100" value="SUBMIT"> --}}
                                <div id="paypal-button-container"></div>
                            </div>
                            <!-- <input type="submit" value="Submit"> -->
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function toggleDescription(select) {
            if (select.value == 'No') {
                document.getElementById('listing_desc').classList.remove("d-none");
            } else {
                document.getElementById('listing_desc').classList.add("d-none");
            }
        }

        function toggleUploadImage(select) {
            if (select.value == 'Yes') {
                document.getElementById('pictures_desc').classList.remove("d-none");
            } else {
                document.getElementById('pictures_desc').classList.add("d-none");
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
                tagline: 'false'
            },
            createOrder: function(data, actions) {

                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: '100'
                        }
                    }]
                });
            },
            onInit: function(data, actions) {
                actions.disable();
                document.querySelectorAll('input, textarea').forEach(item => {
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
