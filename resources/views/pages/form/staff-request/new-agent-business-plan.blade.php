@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center my-4">
        <div class="col-md-12">

            <form action="{{route('general.email.post')}}" class="card form my-4 p-3" method="POST">
                @csrf
                <div class="card-header">
                    <h1 class="text-center my-4 text-uppercase">New Agent Business Plan</h1>
                </div>
                <input type="hidden" name="form_title" value="New Agent Business Plan">
                <input type="hidden" name="to_email[]" value="email@luxeknows.com">
                <input type="hidden" name="to_email[]" value="operations@luxeknows.com">
                <input type="hidden" name="to_email[]" value="support@luxeknows.com">
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name">Agent Name</label>
                            <input type="text" name="agent_full_name" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Agent Email</label>
                            <input type="text" name="agent_email" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">What is your Gross Commission Income goal?</label><br><br>
                            <input type="text" name="what_is_your_gross_comission_income_goal_for_2022"
                                class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">How Many Transactions are you looking to complete? How do you plan to
                                accomplish it?</label>
                            <input type="text" name="how_many_transactions_are_you_looking_to_complete"
                                class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">What is your target market?</label>
                            <input type="text" name="what_is_your_target_market" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">How many transactions have you completed? Volume? Number?</label>
                            <input type="text" name="how_many_transactions_have_you_completed" class="form-control"
                                required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">How long have you been an agent</label>
                            <input type="text" name="how_long_have_you_been_an_agent" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">What did you do prior to becoming a realtor?</label>
                            <input type="text" name="what_did_you_do_prior_to_becoming_a_realtor" class="form-control"
                                required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Do you have any designations or degrees?</label><br><br>
                            <input type="text" name="do_you_have_any_designations_or_degrees" class="form-control"
                                required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">What are your biggest strengths and weaknesses for your target
                                market?</label>
                            <input type="text"
                                name="what_are_your_biggest_strengths_and_weaknesses_for_your_target_market"
                                class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">How many hours can you work a week?</label><br><br>
                            <input type="text" name="how_many_hours_can_you_work_a_week" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Do you have a set schedule for time blocking? If not, can you make one and
                                follow it?</label>
                            <input type="text" name="do_you_have_a_set_schedule_for_time_blocking" class="form-control"
                                required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">What other areas would you like to cover in business plan or learn more
                                about for next year?</label>
                            <input type="text"
                                name="what_other_areas_would_you_like_to_cover_in_business_plan_or_learn_more"
                                class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">What is the most you have ever made yearly? In real estate or other
                                professions</label>
                            <input type="text" name="what_is_the_most_you_have_ever_made_yearly" class="form-control"
                                required>
                        </div>
                        <div class="form-group col-12">
                            <input type="submit" class="btn btn-luxe w-100" value="SUBMIT">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection