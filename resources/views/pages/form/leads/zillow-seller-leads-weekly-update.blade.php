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
                <form action="{{ route('general.email.post') }}" class="card form mb-5 p-3" method="POST">
                    @csrf
                    <div class="card-header">
                        <h1 class="text-center my-4">Zillow Seller Leads Weekly Update</h1>
                        <input type="hidden" name="form_title" value="Zillow Seller Leads Weekly Update">
                    </div>
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
                                <label for="name">Number of <b>Total</b> FULLY executed <b>Zillow</b> Listings. Sorry to
                                    capitalize fully but we have had some confusion on agents as to what a fully executed
                                    listing agreement is?</label>
                                <select name="number_of_fully_executed_listings" class="form-control" required
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
                                <label for="name">Please list the addresses of the fully executed Zillow Listings along
                                    with the Seller Name as it appears on Zillow</label>
                                <textarea name="list_the_addresses_of_fully_executed_zillows_listings_along_with_the_seller_name" class="form-control"
                                    required></textarea>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Were any of the contracts above executed in the last 7 days?</label>
                                <select name="were_any_of_the_contracts_above_executed_in_the_last_7_days"
                                    class="form-control" required>
                                    <option value>-</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Have you cancelled any Zillow listings in the past 7 days?</label>
                                <select name="have_you_cancelled_any_zillow_listings_in_the_past_7_days"
                                    class="form-control" required>
                                    <option value>-</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Are you currently paused?</label>
                                <select name="are_you_currently_paused" class="form-control" required>
                                    <option value>-</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Do you need to be paused and/or remain paused?</label>
                                <select name="do_you_need_to_be_paused_and_or_remain_paused" class="form-control" required>
                                    <option value>-</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">In the past 7 days, have you met with any Zillow Sellers?</label>
                                <br><br>
                                <select id="showDivSelect" name="in_the_past_7_days_have_you_met_with_any_zillow_sellers"
                                    class="form-control" required>
                                    <option value>-</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div id="zillowDiv" class="d-none form-group col-md-6">
                                <label for="name">Please list names as shown on Zillow CRM</label>
                                <textarea name="list_names_as_shown_on_zillow_crm" class="form-control" rows="4"></textarea>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Do you have any listing appointments with Zillow Sellers scheduled
                                    for the next 7 days?</label>
                                <select id="listing_appointments_select"
                                    name="do_you_have_any_listing_appointments_with_zillow_sellers_scheduled_for_the_next_7_days"
                                    class="form-control" required>
                                    <option value>-</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div id="listing_appointments_div" class="d-none form-group col-md-6">
                                <label for="name">Please list names as shown on Zillow CRM and date of
                                    appointment</label>
                                <textarea name="list_names_as_shown_on_zillow_crm_and_date_of_appointment" class="form-control" rows="4"></textarea>
                            </div>
                            <div class="form-group form-footer col-12">
                                <input type="submit" class="btn btn-luxe w-100" value="SUBMIT">
                            </div>
                        </div>
                    </div>
                </form>
                <form action="{{ route('getCsv') }}" method="post" id="csv">
                    @csrf
                    <input type="hidden" name="title" value="Zillow Seller Leads Weekly Update">
                </form>
                <form action="{{ route('deleteSubmissions') }}" method="POST" id="deleteSubmissions">
                    @csrf
                    @method('delete')
                    <input type="hidden" name="title" value="Zillow Seller Leads Weekly Update">
                </form>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#listing_appointments_select').on('change', function() {
                console.log($(`input[name="list_names_as_shown_on_zillow_crm"]`));
                var selectedValue = $(this).val();
                if (selectedValue === 'Yes') {
                    $('#listing_appointments_div').removeClass('d-none');
                    $(`textarea[name="list_names_as_shown_on_zillow_crm_and_date_of_appointment"]`).attr(
                        'required', true)
                } else {
                    $('#listing_appointments_div').addClass('d-none');
                    $('textarea[name="list_names_as_shown_on_zillow_crm_and_date_of_appointment"]').attr(
                        'required', false)
                }
            });

            $('#showDivSelect').on('change', function() {
                var selectedValue = $(this).val();
                if (selectedValue === 'Yes') {
                    $('#zillowDiv').removeClass('d-none');
                    $(`textarea[name="list_names_as_shown_on_zillow_crm"]`).attr('required', true)
                } else {
                    $('#zillowDiv').addClass('d-none');
                    $(`textarea[name="list_names_as_shown_on_zillow_crm"]`).attr('required', false);
                }
            });

        });

        function createCsv() {
            $('#csv').submit()
        }

        function deleteSubmissions() {
            if (confirm('Are you sure, you want to delete all submissions for this form?'))
                $('#deleteSubmissions').submit()
        }
    </script>
@endsection