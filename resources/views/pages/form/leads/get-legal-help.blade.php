@extends('layouts.app', ['active' => 'leads_services_support', 'subactive' => 'get_legal_help'])
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <form action="{{ route('general.email.post') }}" class="card form p-3" method="POST"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="card-header">
                        <h1 class="text-center my-4">Get Legal Help</h1>
                    </div>
                    <input type="hidden" name="form_title" value="Get Legal Help">
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
                                <label for="">Issue Being Experiencing</label>
                                <select type="text" name="issue_being_experiencing" class="form-control" required
                                        onchange="showInput(this)">
                                    <option value>-</option>
                                    <option value="Deposit Dispute">Deposit Dispute</option>
                                    <option value="Contract Dispute">Contract Dispute</option>
                                    <option value="Client Complaint">Client Complaint</option>
                                    <option value="Listing Cancellation">Listing Cancellation</option>
                                    <option value="Procuring Cause">Procuring Cause</option>
                                    <option value="Ethics Complaint">Ethics Complaint</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div id="provide-type-div" class="form-group col-md-6 d-none">
                                <label for="">Please Provide Type</label>
                                <input type="text" name="please_provide_type" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Property Address</label>
                                <input type="text" name="property_address" class="form-control map-search" required
                                       placeholder="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Who are you representing?</label>
                                <select type="text" name="issue_being_experiencing" class="form-control" required>
                                    <option value>-</option>
                                    <option value="Buyer">Buyer</option>
                                    <option value="Seller">Seller</option>
                                    <option value="Buyer & Seller">Buyer & Seller</option>
                                    <option value="Tenant">Tenant</option>
                                    <option value="Landlord">Landlord</option>
                                    <option value="Tenant & Landlord">Tenant & Landlord</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">What is the problem or legal dispute? Please provide as much detail as
                                    possible in chronological order to understand how we have arrived at the present
                                    situation</label>
                                <textarea name="what_is_the_problem_or_legal_dispute" class="form-control"
                                          required></textarea>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Please upload all documents pertaining to this transaction such as
                                    contract, addendums, listing agreement, text or emails with written evidence</label>
                                <input type="file" name="documents[]" class="form-control p-1" required
                                       multiple>
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
        function showInput (param) {
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
