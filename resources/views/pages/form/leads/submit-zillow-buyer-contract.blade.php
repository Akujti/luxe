@extends('layouts.app', ['active' => 'leads_services_support', 'subactive' => 'get_leads'])
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <x-verbiage-form-text :formInfo=$formInfo :afterSubmit="session()->get('modal')"/>
                <form action="{{ route('general.email.post') }}" class="card form p-3 mb-3" method="POST"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="card-header">
                        <h1 class="text-center my-4">Submit A Zillow Buyer Contract</h1>
                    </div>
                    <input type="hidden" name="form_title" value="Submit A Zillow Buyer Contract">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Agent Name</label>
                                <input type="text" name="agent_full_name" class="form-control"
                                       value="{{ auth()->user()->profile->fullname }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Agent Email</label>
                                <input type="text" name="agent_email" class="form-control"
                                       value="{{ auth()->user()->email }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Agent Number</label>
                                <input type="text" name="agent_number" class="form-control"
                                       value="{{ auth()->user()->profile->phone }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Lead Name as it appears on Zillow</label>
                                <input type="text" name="lead_name_as_it_appears_on_Zillow" class="form-control"
                                       required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Lead Phone Number as it appears on Zillow</label>
                                <input type="text" name="lead_phone_number_as_it_appears_on_Zillow" class="form-control"
                                       required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Lead Email as it appears on Zillow</label>
                                <input type="text" name="lead_email_as_it_appears_on_Zillow" class="form-control"
                                       required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Property Address</label>
                                <input type="text" name="property_address" class="form-control"
                                       required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Effective Date</label>
                                <input type="date" name="effective_date" class="form-control"
                                       required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Lender Name</label>
                                <input type="text" name="lender_name" class="form-control"
                                       required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Lender Email</label>
                                <input type="text" name="lender_email" class="form-control"
                                       required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Lender Phone Number</label>
                                <input type="text" name="lender_phone_number" class="form-control"
                                       required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Co-op Agent Name</label>
                                <input type="text" name="co_op_agent_name" class="form-control"
                                       required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Co-op Agent Email</label>
                                <input type="text" name="co_op_agent_email" class="form-control"
                                       required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Co-op Agent Phone Number</label>
                                <input type="text" name="co_op_agent_phone_number" class="form-control"
                                       required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Attorney/Title Company Name</label>
                                <input type="text" name="attorney_title_company_name" class="form-control"
                                       required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Attorney/Title Company Email</label>
                                <input type="text" name="attorney_title_company_email" class="form-control"
                                       required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Attorney/Title Company Phone Number</label>
                                <input type="text" name="attorney_title_company_phone_number" class="form-control"
                                       required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">HOA Name</label>
                                <input type="text" name="HOA_name" class="form-control"
                                       required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">HOA Email</label>
                                <input type="text" name="HOA_email" class="form-control"
                                       required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">HOA Phone Number</label>
                                <input type="text" name="HOA_phone_number" class="form-control"
                                       required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Client Name</label>
                                <input type="text" name="client_name" class="form-control"
                                       required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Client Email</label>
                                <input type="text" name="client_email" class="form-control"
                                       required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Client Phone Number</label>
                                <input type="text" name="client_phone_number" class="form-control"
                                       required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Upload Fully Executed Contract and Addendums</label>
                                <input type="file" name="contracts[]"
                                       class="form-control p-1" required multiple>
                                <small><i>* You can select multiple files to upload</i></small>
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
        var num_input = document.getElementById('years')
        num_input.addEventListener('input', function (event, val) {
            if (num_input.value > 50)
                num_input.value = 50

            else if (num_input.value < 0)
                num_input.value = 0
        })
    </script>
@endsection
