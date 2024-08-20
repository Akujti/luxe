@extends('layouts.app', ['active' => 'leads_services_support', 'subactive' => 'mls_listing_cancellation'])
@section('content')
<div class="{{ auth()->check() ? 'container-fluid' : 'container mt-4' }}">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <form action="{{ route('general.email.post') }}" class="card form mb-5 p-3" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="card-header">
                    <h1 class="text-center my-4">Request MLS Listing Cancellation</h1>
                    <h6 id="agent-text" class="text-center" style="font-size: 21px;">
                        It is against MLS rules to cancel and relist a property. While agents are sometimes doing this and not getting caught by submitting this form you agree to be 100% responsible for any fines incurred by the brokerage. MLS fine is $5,000 per instance.
                        <br>Please note it is company policy to withdraw listings. Although you may have a signed cancellation, all cancellations must be approved by broker.
                    </h6>
                </div>
                <input type="hidden" name="form_title" value="Request MLS Listing Cancellation">
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
                            <label for="">Property Address</label>
                            <input type="text" name="property_address" class="form-control map-search" required
                                placeholder="">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Client Name</label>
                            <input type="text" name="client_name" class="form-control" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="name">Reason for Cancellation</label>
                            <select name="reason_for_cancellation" class="form-control" id="help_select" required
                                onchange="toggleOptionsRepresenting()">
                                <option value>-</option>
                                <option value="Owner wants to relist with someone else">Owner wants to relist with
                                    someone else
                                </option>
                                <option value="Legal Demand">Legal Demand</option>
                                <option value="No longer want to work with client">No longer want to work with
                                    client
                                </option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div id="please_explain_div" class="form-group col-md-6 d-none">
                            <label for="name">Please Explain:</label>
                            <input type="text" name="please_explain" class="form-control p-1">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Are You Collecting a Cancellation Fee or Reimbursement of
                                Marketing?</label>
                            <select name="are_you_collecting_a_cancellation_fee_or_reimbursement_of_marketing"
                                id="collecting_select"
                                onchange="toggleCollecting()"
                                class="form-control" required>
                                <option value>-</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6 d-none" id="how_much">
                            <label for="name">How Much?</label>
                            <input id="how_much" type="text" class="form-control" name="how_much">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Please Upload The Status Change Form Signed By The Seller</label>
                            <input type="file" name="upload_the_status_change_form_signed_by_the_seller"
                                class="form-control p-1">
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