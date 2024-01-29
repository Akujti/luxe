@extends('layouts.app', ['active' => 'leads_services_support', 'subactive' => 'rental_escrow_disbursement'])
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <form action="{{ route('general.email.post') }}" class="card form mb-5 p-3" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="card-header">
                        <h1 class="text-center my-4 text-uppercase">Request Escrow Client Refund</h1>
                        <input type="hidden" name="form_title" value="Request Escrow Client Refund">
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="name">Was there a Contract to Lease or Lease Agreement signed?</label>
                                <select id="was-there-a-contract-signed"
                                    name="was_there_a_contract_to_lease_or_lease_agreement_signed" class="form-control"
                                    required>
                                    <option value>-</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="answer-yes form-group col-md-6 d-none">
                                <label for="name">Upload Release & Cancellation</label>
                                <input type="file" name="release_&_cancellation" class="form-control p-1">
                            </div>
                            <div class="answer-yes form-group col-md-6 d-none">
                                <label for="name">Upload Signed Contract/Agreement</label>
                                <input type="file" name="signed_contract_agreement" class="form-control p-1">
                            </div>
                            <div class="answer-no form-group col-md-6 d-none">
                                <label for="name">Agent Name</label>
                                <input type="text" name="agent_name" class="form-control"
                                    value="{{ auth()->user()->profile->fullname }}">
                            </div>
                            <div class="answer-no form-group col-md-6 d-none">
                                <label for="name">Property Address</label>
                                <input type="text" name="property_address" class="form-control">
                            </div>
                            <div class="answer-no form-group col-md-6 d-none">
                                <label for="name">Deposit Amount</label>
                                <input type="text" name="deposit_amount" class="form-control">
                            </div>
                            <div class="answer-no form-group col-md-6 d-none">
                                <label for="name">How were funds received?</label>
                                <select name="how_were_funds_received" class="form-control" required>
                                    <option value>-</option>
                                    <option value="Depositlink">Depositlink</option>
                                    <option value="Physical check">Physical check</option>
                                </select>
                            </div>
                            <div class="answer-no form-group col-md-6 d-none">
                                <label for="name">File already on Broker sumo?</label>
                                <select name="file_already_on_broker_sumo" class="form-control" required>
                                    <option value>-</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="answer-no form-group col-md-6 d-none">
                                <label for="name">Contract To Lease uploaded?</label>
                                <select name="contract_to_lease_uploaded" class="form-control" required>
                                    <option value>-</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-footer col-12">
                        <input type="submit" class="btn btn-luxe w-100" value="SUBMIT">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $('#was-there-a-contract-signed').change(function() {
            var option = $(this).val()
            if (option == 'Yes') {
                $('.answer-yes').removeClass('d-none')
                $('.answer-no').addClass('d-none')
                $('.answer-yes input, .answer-yes select').prop('required', true);
                $('.answer-no input, .answer-no select').prop('required', false);
            } else if (option == 'No') {
                $('.answer-yes').addClass('d-none')
                $('.answer-no').removeClass('d-none')
                $('.answer-yes input, .answer-yes select').prop('required', false);
                $('.answer-no input, .answer-no select').prop('required', true);
            } else {
                $('.answer-yes').addClass('d-none')
                $('.answer-no').addClass('d-none')
                $('.answer-yes input, .answer-yes select').prop('required', false);
                $('.answer-no input, .answer-no select').prop('required', false);
            }
        });
    </script>
@endsection
