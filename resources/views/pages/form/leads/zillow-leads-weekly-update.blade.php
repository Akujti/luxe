@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center my-4">
        <div class="col-md-12">

            <form action="{{route('general.email.post')}}" class="card form my-4 p-3" method="POST">
                @csrf
                <div class="card-header">
                    <h1 class="text-center my-4">ZILLOW LEADS WEEKLY UPDATE</h1>
                    @if (auth()->user() && auth()->user()->isAdmin)
                    <div class="form-group text-center">
                        <button class="btn btn-luxe" onclick="createCsv()">EXPORT CSV</button>
                    </div>
                    @endif
                </div>
                <input type="hidden" name="form_title" value="ZILLOW LEADS WEEKLY UPDATE">
                <input type="hidden" name="to_email[]" value="wesley@luxeknows.com">
                <input type="hidden" name="to_email[]" value="support@luxeknows.com">
                <input type="hidden" name="to_email[]" value="irais@luxeknows.com">
                <input type="hidden" name="to_email[]" value="zillowluxe@gmail.com">
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name">Agent Name</label>
                            <input type="text" name="agent_full_name" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Email</label>
                            <input type="text" name="agent_email" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Number of <b>Total</b> FULLY executed contracts. Sorry to capitalize fully
                                but we have
                                had some confusion on agents as to what a
                                fully executed contract is?</label>
                            <select name="number_of_fully_executed_contracts" class="form-control" required id="">
                                <option value="-">-</option>
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
                            <label for="name">Please list the addresses of the fully executed contracts along with the
                                Buyer Name as it appears on Zillow</label><br><br>
                            <textarea name="addresses_of_the_fully_executed_contracts" id="" rows="3"
                                class="form-control" required>-</textarea>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Number of offers outstanding awaiting a response from seller, listing
                                agent or buyer?</label>
                            <select name="number_of_offers_outstanding_awaiting_a_response_from_seller"
                                class="form-control" required id="">
                                <option value="-">-</option>
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
                            <label for="name">Number of ACTIVE buyers you have shown in the last 10 days that plan to
                                continue working with you?</label>
                            <select name="number_of_active_buyers_you_have_shows_in_the_last_10_days"
                                class="form-control" required id="">
                                <option value="-">-</option>
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
                            <label for="name">Please answer the next questions in Yes/no Format unless paused. Are you
                                receiving an adequate number of calls you can
                                handle?</label>
                            <select name="are_you_receiving_an_adequate_number_of_calls_you_can_handle"
                                class="form-control" required id="">
                                <option value="-">-</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                                <option value="Paused">Paused</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">If the above is no, can you handle more/less leads while updating your CRM
                                as per Zillow guidelines?</label>
                            <select name="if_yes_can_you_handle_more/less_leads_while_updating_your_crm"
                                class="form-control" required id="">
                                <option value="-">-</option>
                                <option value="MORE">MORE</option>
                                <option value="LESS">LESS</option>
                                <option value="PAUSED">PAUSED</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">If Paused, please advise if you would like to stay paused in Yes/No
                                format</label>
                            <select name="if_paused_please_advise_if_you_would_like_to_stay_paused" class="form-control"
                                required id="">
                                <option value="-">-</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group col-12">
                            <input type="submit" class="btn btn-luxe w-100" value="SUBMIT">
                        </div>
                    </div>
                </div>
            </form>
            <form action="{{route('getCsv')}}" method="post" id="csv">
                @csrf
                <input type="hidden" name="title" value="ZILLOW LEADS WEEKLY UPDATE">
            </form>
        </div>
    </div>
</div>

<script>
    function createCsv(){
        $('#csv').submit()
    }
</script>
@endsection