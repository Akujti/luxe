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
                        <h1 class="text-center my-4">Submit A Zillow Listing Agreement</h1>
                    </div>
                    <input type="hidden" name="form_title" value="Submit A Zillow Listing Agreement">
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
                                <label for="name">Listing Date</label>
                                <input type="date" name="listing_date" class="form-control"
                                       required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Expiration Date</label>
                                <input type="date" name="expiration_date" class="form-control"
                                       required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Listing Commission Percentage</label>
                                <input type="text" name="listing_commission_percentage" class="form-control"
                                       required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Upload Fully Executed Listing Agreement</label>
                                <input type="file" name="upload_fully_executed_listing_agreement"
                                       class="form-control p-1"
                                       required>
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
