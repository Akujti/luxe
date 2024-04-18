@extends('layouts.app', ['active' => 'leads_services_support', 'subactive' => 'get_leads'])
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <x-verbiage-form-text :formInfo=$formInfo :afterSubmit="session()->get('modal')"/>
                <form action="{{ route('general.email.post') }}" class="card form mb-5 p-3" method="POST"
                      enctype="multipart/form-data">
                    @csrf

                    <div class="card-header">
                        <h1 class="text-center my-4">Join LUXE Rentals</h1>
                    </div>

                    <input type="hidden" name="form_title" value="Join LUXE Rentals">
                    <input type="hidden" name="form_verbiages_text" value="{{ $formInfo->email_verbiages_text }}">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Full name</label>
                                <input type="text" name="agent_full_name" class="form-control" required
                                       value="{{ auth()->user()->profile->fullname }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Phone</label>
                                <input type="text" name="phone" class="form-control"
                                       value="{{ auth()->user()->profile->phone }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Email</label>
                                <input type="text" name="agent_email" class="form-control"
                                       value="{{ auth()->user()->email }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">How long have you been practicing real estate?</label>
                                <input type="text" name="how_long_have_you_been_practicing_real_estate"
                                       class="form-control" required>
                            </div>
                            {{--                            <div class="form-group col-md-6">--}}
                            {{--                                <label for="name">Agent zillow profile link **Please note if you do not have a Zillow--}}
                            {{--                                    profile, your application will not be reviewed</label>--}}
                            {{--                                <input type="text" name="zillo_profile_link" class="form-control" required>--}}
                            {{--                            </div>--}}
                            <div class="form-group col-md-6">
                                <label for="name">How many transactions have you closed in the past year?</label>
                                <input type="text" name="how_many_transactions_have_you_closed_in_the_past_year"
                                       class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">What was your total volume for the past year?</label>
                                <input type="text" name="what_was_your_total_volume_for_the_past_year"
                                       class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">What is your home address?</label>
                                <input type="text" name="what_is_your_home_address" class="form-control map-search"
                                       required placeholder="Type your home address">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">What languages do you speak fluently?</label>
                                <input type="text" name="what_languages_do_you_speak_fluently" class="form-control"
                                       required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Have you been set up on the LUXE Agent Subscription?</label>
                                <select name="have_you_been_set_up_on_the_LUXE_agent_subscription"
                                        class="form-control" required id="">
                                    <option value>-</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Are you working full-time or part-time in real estate?</label>
                                <select name="are_you_working_full_time_or_part_time_in_real_estate"
                                        class="form-control" required id="">
                                    <option value>-</option>
                                    <option value="Full Time">Full Time</option>
                                    <option value="Part Time">Part Time</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Do you have an active MLS?</label>
                                <select name="do_you_have_an_active_mls" class="form-control" required id="">
                                    <option value>-</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Real Estate License Number</label>
                                <input type="text" name="real_estate_license_number" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Do you currently have a Follow Up Boss account?</label>
                                <select name="do_you_currently_have_a_follow_boss_account" class="form-control"
                                        required>
                                    <option value>-</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Are you a member of another team within LUXE? </label>
                                <select name="are_you_a_member_of_another_team_within_LUXE" class="form-control"
                                        required>
                                    <option value>-</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="form-group form-footer col-12">
                                <input id="submit-button" type="submit" class="btn btn-luxe w-100" value="SUBMIT">
                                <p id="cannot-submit-text" class="text-center d-none text-danger font-weight-bold">Thank
                                    you for your form. Only Full Time Agents Can Join</p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function canSubmitForm (select) {
            const input = $(select).val()
            if (input == 'Part Time') {
                $('#submit-button').addClass('d-none')
                $('#cannot-submit-text').removeClass('d-none')
            } else {
                $('#submit-button').removeClass('d-none')
                $('#cannot-submit-text').addClass('d-none')
            }
        }
    </script>
@endsection
