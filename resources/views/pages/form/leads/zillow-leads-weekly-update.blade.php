@extends('layouts.app', ['active' => 'leads_services_support', 'subactive' => 'get_leads'])
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @if (auth()->user() && auth()->user()->isAdmin)
                    <div class="form-group text-center">
                        <button class="btn btn-luxe" onclick="createCsv()">EXPORT CSV</button>
                        <button class="btn btn-danger" onclick="deleteSubmissions()">DELETE SUBMISSIONS</button>
                    </div>
                @endif

                <x-verbiage-form-text :formInfo=$formInfo :afterSubmit="session()->get('modal')" />
                <form action="{{ route('general.email.post') }}" class="card form mb-5 p-3" method="POST">
                    @csrf
                    <div class="card-header">
                        <h1 class="text-center my-4">ZILLOW LEADS WEEKLY UPDATE</h1>

                    </div>
                    <input type="hidden" name="form_title" value="ZILLOW LEADS WEEKLY UPDATE">
                    <input type="hidden" name="form_verbiages_text" value="{{ $formInfo->email_verbiages_text }}">
                    <input type="hidden" name="to_email[]" id="team_email" value="">
                    <input type="hidden" name="to_email[]" id="team_email_2" value="">
                    <!-- <input type="hidden" name="to_email[]" value="email@luxeknows.com">
                                                                                                                                                                            <input type="hidden" name="to_email[]" value="irais@luxeknows.com">
                                                                                                                                                                            <input type="hidden" name="to_email[]" value="zillowluxe@gmail.com"> -->
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Agent Name</label>
                                <input type="text" name="agent_full_name" class="form-control"
                                    value="{{ auth()->user()->profile->fullname }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Email</label>
                                <input type="text" name="agent_email" class="form-control"
                                    value="{{ auth()->user()->email }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Which team do you belong to?</label>
                                <select name="which_team_do_you_belong_to" class="form-control" required
                                    onchange="setTeamEmail(this)">
                                    <option value>-</option>
                                    <option value="Team Flex">Team Flex</option>
                                    <option value="Team Dade">Team Dade</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Number of <b>Total</b> FULLY executed <b>Zillow</b> contracts. Sorry
                                    to
                                    capitalize fully but we have had some confusion on agents as to what a fully executed
                                    contract is?</label>
                                <select name="number_of_fully_executed_contracts" class="form-control" required
                                    id="">
                                    <option value>-</option>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Please list the addresses of the fully executed <b>Zillow</b>
                                    contracts
                                    along
                                    with the Buyer Name as it appears on Zillow</label>
                                <textarea name="addresses_of_the_fully_executed_contracts" id="" rows="3" class="form-control" required>-</textarea>
                            </div>
                            {{-- <div class="form-group col-md-6">
                            <label for="name">Number of offers outstanding awaiting a response from seller, listing
                                agent or buyer?</label>
                            <select name="number_of_offers_outstanding_awaiting_a_response_from_seller"
                                class="form-control" required id="">
                                <option value>-</option>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                            </select>
                        </div> --}}
                            <div class="form-group col-md-6">
                                <label for="name">Were any of the contracts above executed in the last 7 days?</label>
                                <select name="were_any_of_the_contracts_above_executed_in_the_last_7_days" required
                                    class="form-control">
                                    <option value>-</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Number of Signed Listing Agreements For Zillow Contacts</label>
                                <input type="text" name="number_of_signed_listing_agreements_for_zillow_contacts"
                                    required class="form-control" />
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Address of Signed Listing Agreements For Zillow Contacts</label>
                                <input type="text" name="address_of_signed_agreements_for_zillow_contacts" required
                                    class="form-control" />
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Have you cancelled any Zillow contracts in the past 7 days?</label>
                                <input type="text" name="have_you_cancalled_any_zillow_contract_in_the_past_7_days"
                                    required class="form-control" />
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Address of cancelled transaction</label>
                                <input type="text" name="address_of_cancelled_transactions" required
                                    class="form-control" />
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Were any of the listing agreements executed this week?</label>
                                <select name="were_any_of_the_listing_agreements_executed_this_week" required
                                    class="form-control">
                                    <option value>-</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Number of ACTIVE buyers you have shown in the last 10 days that plan
                                    to
                                    continue working with you?</label>
                                <select name="number_of_active_buyers_you_have_shows_in_the_last_10_days"
                                    class="form-control" required id="">
                                    <option value>-</option>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                </select>
                            </div>
                            {{-- <div class="form-group col-md-6">
                            <label for="name">Please answer the next questions in Yes/no Format unless paused. Are
                                you
                                receiving an adequate number of calls you can
                                handle?</label>
                            <select name="are_you_receiving_an_adequate_number_of_calls_you_can_handle"
                                class="form-control" required id="">
                                <option value>-</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                                <option value="Paused">Paused</option>
                            </select>
                        </div> --}}
                            {{-- <div class="form-group col-md-6">
                            <label for="name">If the above is no, can you handle more/less leads while updating
                                your CRM
                                as per Zillow guidelines?</label>
                            <select name="if_yes_can_you_handle_more/less_leads_while_updating_your_crm"
                                class="form-control" required id="">
                                <option value>-</option>
                                <option value="MORE">MORE</option>
                                <option value="LESS">LESS</option>
                                <option value="PAUSED">PAUSED</option>
                            </select>
                        </div> --}}
                            {{-- <div class="form-group col-md-6">
                            <label for="name">Do you need to be paused?</label>
                            <select class="form-control" name="do_you_need_to_be_paused" required id="pausedToggle"
                                onchange="togglePausedSelect('pausedToggle')">
                                <option value>-</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div> --}}
                            <div class="form-group col-md-6">
                                <label for="name">Are you currently paused? </label>
                                <select class="form-control" name="are_you_currently_paused" required>
                                    <option value>-</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Do you need to be paused and/or remain paused?</label>
                                <select class="form-control" name="do_you_need_to_be_paused" required id="pausedToggle"
                                    onchange="togglePausedSelect('pausedToggle')">
                                    <option value>-</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6 d-none" id="paused_reason">
                                <label for="name">Reason for Pause</label>
                                <input id="reason_zillow_pause" type="text" class="form-control" name="reason_pause">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Clients referred to LUXE Lending for the week</label>
                                <input type="text" class="form-control"
                                    name="clients_referred_to_LUXE_Lending_for_the_week">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Clients referred to Zillow Home Loans for the Week</label>
                                <input type="text" class="form-control"
                                    name="clients_referred_to_zillow_home_loans_for_the_week">
                            </div>
                            {{-- <div class="form-group col-md-6">
                                <label for="name">Are you receiving an adequate number of calls you can handle?</label>
                                <select class="form-control"
                                    name="are_you_receiving_an_adequate_number_of_calls_you_can_handle" required>
                                    <option value>-</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div> --}}
                            {{-- <div class="form-group col-md-6">
                                <label for="name">Can you handle more/less leads while updating your CRM as per Zillow
                                    guidelines?</label>
                                <select class="form-control"
                                    name="can_you_handle_more_less_leads_while_updating_your_CRM_as_per_Zillow_guidelines"
                                    required>
                                    <option value>-</option>
                                    <option value="More">More</option>
                                    <option value="Less">Less</option>
                                    <option value="Same">Same</option>
                                </select>
                            </div> --}}
                            {{-- <div class="form-group col-md-6">
                            <label for="name">If Paused, please advise if you would like to stay paused in Yes/No
                                format</label>
                            <select name="if_paused_please_advise_if_you_would_like_to_stay_paused" class="form-control"
                                required id="">
                                <option value>-</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div> --}}
                            {{-- <div class="form-group col-md-6">
                                <label for="name">How many homes have you shown this past week?</label>
                                <select name="how_many_home_have_you_shown_this_past_week" class="form-control" required>
                                    <option value>-</option>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                </select>
                            </div> --}}


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

    <script>
        function setTeamEmail(element) {
            if (element.value == 'Team Flex') {
                document.getElementById('team_email').value = 'ramee@luxeknows.com'
                document.getElementById('team_email_2').value = 'asesoresmaster.op6@gmail.com'
            } else if (element.value == 'Team Dade') {
                document.getElementById('team_email').value = 'gabrielas@luxeknows.com'
                document.getElementById('team_email_2').value = 'asesoresmaster.78@gmail.com'
            }
        }

        function createCsv() {
            $('#csv').submit()
        }

        function deleteSubmissions() {
            if (confirm('Are you sure, you want to delete all submissions for this form?'))
                $('#deleteSubmissions').submit()
        }

        function togglePausedSelect(select_id) {
            var value = $('#' + select_id).val();
            if (value == 'Yes') {
                $('#reason_zillow_pause').attr('required', true);
                $('#paused_reason').removeClass('d-none')
            } else {
                $('#reason_zillow_pause').attr('required', false);
                $('#paused_reason').addClass('d-none')
            }
        }
    </script>
@endsection
