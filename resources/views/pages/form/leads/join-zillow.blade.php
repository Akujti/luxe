@extends('layouts.app', ['active' => 'leads_services_support', 'subactive' => 'get_leads'])
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="modal modal-new fade" id="modal">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content bg-white">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Update From Team
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <div class="modal-body">
                                <p style="font-family: 'gothicregular';">We are currently at capacity for new agents to
                                    join. You can still fill out the form
                                    and we will notify you once we have space on the team.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <x-verbiage-form-text :formInfo=$formInfo :afterSubmit="session()->get('modalVerbiage')" />
                
                <form action="{{ route('general.email.post') }}" class="card form mb-5 p-3" method="POST">
                    @csrf

                    <div class="card-header">
                        <h1 class="text-center my-4">Join Zillow</h1>
                    </div>
                    
                    <input type="hidden" name="form_title" value="Join Zillow">
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
                                <label for="name">Agent zillow profile link</label>
                                <input type="text" name="zillo_profile_link" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">How long have you been practicing real estate?</label>
                                <input type="text" name="how_long_have_you_been_practicing_real_estate"
                                    class="form-control" required>
                            </div>
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
                                <label for="name">What zip code do you live in?</label>
                                <input type="text" name="what_zip_code_do_you_live_in" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">What languages do you speak fluently?</label>
                                <input type="text" name="what_languages_do_you_speak_fluently" class="form-control"
                                    required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Have you been set up on the Bundle?</label>
                                <input type="text" name="have_you_been_set_up_on_the_bundle" class="form-control"
                                    required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Are you working full-time or part-time in real estate?</label>
                                <select name="are_you_working_full_time_or_part_time_in_real_estate" class="form-control"
                                    required id="">
                                    <option value="-">-</option>
                                    <option value="Full-time">Full-time</option>
                                    <option value="Part-time">Part-time</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Do you have an active MLS?</label>
                                <select name="do_you_have_an_active_mls" class="form-control" required id="">
                                    <option value="-">-</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="name">Real Estate License Number</label>
                                <input type="text" name="real_estate_license_number" class="form-control" required>
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
    <script type="text/javascript">
        $(window).on('load', function() {
            // $('#modal').modal('show');
            // $('#modalVerbiages').modal('show');
        });
    </script>
@endsection
