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
                <x-verbiage-form-text :formInfo=$formInfo />
                <form action="{{ route('general.email.post') }}" class="card form mb-5 p-3" method="POST">
                    @csrf
                    <div class="card-header">
                        <h1 class="text-center my-4">CINC LEADS WEEKLY UPDATE</h1>

                    </div>
                    <input type="hidden" name="form_title" value="CINC LEADS WEEKLY UPDATE">
                    {{-- <input type="hidden" name="to_email[]" id="team_email" value="">
                    <input type="hidden" name="to_email[]" id="team_email_2" value=""> --}}
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
                                    <option value="Buyer Team">Buyer Team</option>
                                    <option value="Listing Team">Listing Team</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Number of <b>Total</b> FULLY executed <b>CINC</b> contracts. Sorry
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
                                <label for="name">Please list the addresses of the fully executed <b>CINC</b>
                                    contracts
                                    along
                                    with the Buyer Name as it appears on CINC</label>
                                <textarea name="addresses_of_the_fully_executed_contracts" id="" rows="3" class="form-control" required>-</textarea>
                            </div>
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
                                <label for="name">Number of Signed Listing Agreements For CINC Contacts</label>
                                <input type="text" name="number_of_signed_listing_agreements_for_CINC_contacts" required
                                    class="form-control" />
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Address of Signed Listing Agreements For CINC Contacts</label>
                                <input type="text" name="address_of_signed_agreements_for_CINC_contacts" required
                                    class="form-control" />
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Have you cancelled any CINC contracts in the past 7 days?</label>
                                <input type="text" name="have_you_cancalled_any_CINC_contract_in_the_past_7_days"
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
                            <div class="form-group form-footer col-12">
                                <input type="submit" class="btn btn-luxe w-100" value="SUBMIT">
                            </div>
                        </div>
                    </div>
                </form>
                <form action="{{ route('getCsv') }}" method="post" id="csv">
                    @csrf
                    <input type="hidden" name="title" value="CINC LEADS WEEKLY UPDATE">
                </form>
                <form action="{{ route('deleteSubmissions') }}" method="POST" id="deleteSubmissions">
                    @csrf
                    @method('delete')
                    <input type="hidden" name="title" value="CINC LEADS WEEKLY UPDATE">
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
