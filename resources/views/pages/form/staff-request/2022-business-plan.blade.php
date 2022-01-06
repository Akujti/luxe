@extends('layouts.app')
@section('content')
<style>
    .answer-btn {
        font-size: 24px;
        width: 200px;
        height: 50px;
        margin: 10px
    }

    .container {
        min-height: 85vh;
        display: flex;
        flex-flow: column;
        justify-content: center;
    }
</style>
<div class="container">
    <div class="row justify-content-center my-4">
        <div id="question" class="col-md-12">
            <div class="card-header">
                <h2 class="text-center my-4 text-uppercase">Have you completed an initial Business Plan before?</h2>
            </div>
            <div class="d-flex justify-content-center">
                <button class="btn btn-luxe answer-btn" onclick="display(true)">Yes</button>
                <button class="btn btn-luxe answer-btn" onclick="display(false)">No</button>
            </div>
        </div>
        <div id="no-answer" class="col-md-12 d-none">
            <div class="card-header">
                <h2 class="text-center my-4">Please reach out to <a
                        href="mailto:support@luxeknows.com">support@luxeknows.com</a> to schedule your
                    initial business plan. Thanks!</h2>
            </div>
        </div>
        <div id="form" class="col-md-12 d-none">
            <form action="{{route('general.email.post')}}" class="card form my-4 p-3" method="POST">
                @csrf
                <div class="card-header">
                    <h1 class="text-center my-4 text-uppercase">2022 Business Plan</h1>
                </div>
                <input type="hidden" name="form_title" value="2022 Business Plan">
                <input type="hidden" name="to_email[]" value="wesley@luxeknows.com">
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
                            <label for="name">What is your Gross Commission Income goal for 2022?</label><br><br>
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
                            <label for="name">What is your target market?</label><br><br>
                            <input type="text" name="what_is_your_target_market" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">How many transactions have you completed in 2021? Volume? Number?</label>
                            <input type="text" name="how_many_transactions_have_you_completed_in_2021"
                                class="form-control" required>
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
<script>
    function display(cond){
        if(cond)
            $('#form').removeClass('d-none')
        else
            $('#no-answer').removeClass('d-none')
        $('#question').addClass('d-none')
    }
</script>
@endsection