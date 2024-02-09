@extends('layouts.app', ['active' => 'leads_services_support', 'subactive' => 'get_leads'])
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <x-verbiage-form-text :formInfo=$formInfo :afterSubmit="session()->get('modal')" />
                <form id="regForm" action="{{ route('general.email.post') }}" class="card form mb-5 p-3" method="POST">
                    @csrf
                    <div class="card-header">
                        <h1 class="text-center my-4">Join CINC Seller Team</h1>
                    </div>
                    <input type="hidden" name="form_title" value="Join CINC Seller Team">

                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Agent Name</label>
                                <input type="text" name="agent_full_name" class="form-control"
                                    value="{{ auth()->user()->profile->fullname }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Agent Phone Number</label>
                                <input type="text" name="agent_phone_number" class="form-control"
                                    value="{{ auth()->user()->profile->phone }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Email</label>
                                <input type="text" name="agent_email" class="form-control"
                                    value="{{ auth()->user()->email }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Are you a full time or part time real estate agent?</label>
                                <select name="are_you_a_full_time_or_part_time_real_estate_agent" class="form-control"
                                    required>
                                    <option value>-</option>
                                    <option value="Full Time">Full Time</option>
                                    <option value="Part Time">Part Time</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Please list the addresses of the listings you listed and have closed
                                    in the past 12 months.</label>
                                <textarea name="please_list_the_addresses_of_the_listings_you_listed_and_have_closed_in_the_past_12_months"
                                    rows="6" class="form-control">
1.  
2.  
3.  
4.  
5.  
6.  </textarea>
                            </div>
                            <div class="form-group form-footer col-12">
                                <input type="submit" class="btn btn-luxe w-100" value="SUBMIT">
                            </div>
                        </div>
                    </div>
                </form>
                <form action="{{ route('getCsv') }}" method="post" id="csv">
                    @csrf
                    <input type="hidden" name="title" value="ZILLOW LEADS WEEKLY UPDATE">
                </form>
                <form action="{{ route('deleteSubmissions') }}" method="POST" id="deleteSubmissions">
                    @csrf
                    @method('delete')
                    <input type="hidden" name="title" value="ZILLOW LEADS WEEKLY UPDATE">
                </form>
            </div>
        </div>
    </div>

    <script></script>
@endsection
