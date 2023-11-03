@extends('layouts.app', ['active' => 'office_staff_directory', 'subactive' => 'new_agents_referrals'])
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <form action="{{ route('general.email.post') }}" class="card form p-3" method="POST">
                    @csrf
                    <div class="card-header">
                        <h1 class="text-center my-4">Refer An Agent - Profit Sharing</h1>
                        <h5 class="text-center">The agent you refer has 45 days, from the date this form is submitted,
                            to
                            sign with LUXE in order
                            to qualify for your profit sharing.</h5>
                        <h5 class="text-center">This is a private link that can never be shared. Do not share this with
                            other
                            agents. Do not share this with the agent you are referring.</h5>
                    </div>
                    <input type="hidden" name="form_title" value="Refer An Agent - Profit Sharing">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Full Name of Agent Referral</label>
                                <input type="text" name="full_name_of_agent_referral" class="form-control" value=""
                                       required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Phone Number for Agent Referral</label>
                                <input type="text" name="phone_number_for_agent_referral" class="form-control"
                                       value="" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Email for Agent Referral</label>
                                <input type="text" name="email_for_agent_referral" class="form-control" value=""
                                       required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Is Your Agent Referral A New Licensee?</label>
                                <select name="is_your_agent_referral_a_new_licensee" class="form-control" id=""
                                        required>
                                    <option value>-</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Current Brokerage of Agent Referral</label>
                                <input type="text" name="current_brokerage" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Years In Real Estate for Agent Referral</label>
                                <input type="text" name="years_in_real_estate_for_agent_referral" class="form-control"
                                       required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">License Number of Agent Referral</label>
                                <input type="text" name="license_number_of_agent_referral" class="form-control"
                                       required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Referring LUXE Agent Name</label>
                                <input type="text" name="referring_LUXE_agent_name" class="form-control"
                                       {{(auth()->user()->role == 'admin' || auth()->user()->role == 'other') ? '':'disabled'}}
                                       value="{{auth()->user()->profile->fullname}}">
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
@endsection
