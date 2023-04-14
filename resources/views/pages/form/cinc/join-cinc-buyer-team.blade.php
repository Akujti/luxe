@extends('layouts.app', ['active' => 'leads_services_support', 'subactive' => 'get_leads'])
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <x-verbiage-form-text :formInfo=$formInfo :afterSubmit="session()->get('modal')" />
                <form action="{{ route('general.email.post') }}" class="card form p-3 mb-5" method="POST">
                    @csrf
                    <div class="card-header">
                        <h1 class="text-center mt-4">Join CINC Buyer Team </h1>
                        <h6 class="text-center mb-4">**Reminder you cannot join two lead teams. You cannot be on CINC Team if
                            you are on Zillow.**</h6>
                    </div>
                    <input type="hidden" name="form_title" value="Join CINC Buyer Team">
                    <input type="hidden" name="form_verbiages_text" value="{{ $formInfo->email_verbiages_text }}">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Name</label>
                                <input type="text" name="agent_full_name" class="form-control"
                                    value="{{ auth()->user()->profile->fullname }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Phone</label>
                                <input type="text" name="phone" class="form-control"
                                    value="{{ auth()->user()->profile->phone }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Email</label>
                                <input type="email" name="agent_email" class="form-control"
                                    value="{{ auth()->user()->email }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">How long have you been practicing real estate?</label>
                                <input type="number" name="how_long_have_you_been_practicing_real_estate"
                                    class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">How many transactions have you closed in the past year?</label>
                                <input type="number" name="how_many_transactions_have_you_closed_in_the_past_year"
                                    class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">What was your total volume for the past year?</label>
                                <input type="number" name="what_was_your_total_volume_for_the_past_year"
                                    class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">What county do you live in?</label>
                                <select name="what_county_do_you_live_in" class="form-control" id="" required>
                                    <option value>-</option>
                                    <option value="Miami-Dade">Miami-Dade</option>
                                    <option value="Broward County">Broward County</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">What zip code do you live in?</label>
                                <input type="text" name="what_zip_code_do_you_live_in" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">What languages do you speak fluently?</label>
                                <input type="text" name="what_languages_do_you_speak_fluently" class="form-control"
                                    required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Have you been set up on the Tech & Lead Subscription? </label>
                                <input type="text" name="have_you_been_set_up_on_the_tech_&_lead_subscription"
                                    class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Are you working full-time or part-time in real estate?</label>
                                <select name="are_you_working_full_time_or_part_time_in_reals_estate" class="form-control"
                                    required>
                                    <option value>-</option>
                                    <option value="Full-Time">Full-Time</option>
                                    <option value="Part-Time">Part-Time</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Do you have an active MLS? </label>
                                <select name="do_you_have_an_active_MLS" class="form-control" required>
                                    <option value>-</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
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
