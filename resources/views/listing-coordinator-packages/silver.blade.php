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
                        <h6 id="agent-text" class="text-center" style="font-size: 21px;">LISTING INPUT ONLY
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
        function toggleDescription(select) {
            if (select.value == 'No') {
                document.getElementById('listing_desc').classList.remove('d-none')
            } else {
                document.getElementById('listing_desc').classList.add('d-none')
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
