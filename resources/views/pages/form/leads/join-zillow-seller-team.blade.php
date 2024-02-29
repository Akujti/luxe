@extends('layouts.app', ['active' => 'leads_services_support', 'subactive' => 'get_leads'])
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <x-verbiage-form-text :formInfo=$formInfo :afterSubmit="session()->get('modal')" />
                <div id="popup" class="card mb-5">
                    <div class="card-header text-center">
                        <h5>Please agree to the following terms to apply to the Zillow Seller Team:</h5>
                        <h5>Agents must work full time in real estate and have at least 6 closed listings in the past 12
                            months. </h5>
                    </div>
                    <div class="card-body row justify-content-center">
                        <div class="col-md-8">
                            <p>Below is a breakdown of the compensation structure and team terms. </p>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>COMPENSATION STRUCTURE</th>
                                        <th>Agent</th>
                                        <th>Broker</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Listings Under $1,000,000</td>
                                        <td>40%</td>
                                        <td>60%</td>
                                    </tr>
                                    <tr>
                                        <td>Listings Over $1,000,000</td>
                                        <td>35%</td>
                                        <td>65%</td>
                                    </tr>
                                    <tr>
                                        <td>Unrepresented Buyer Under $1,000,000</td>
                                        <td>60%</td>
                                        <td>40%</td>
                                    </tr>
                                    <tr>
                                        <td>Unrepresented Buyer Over $1,000,000</td>
                                        <td>50%</td>
                                        <td>50%</td>
                                    </tr>
                                </tbody>
                            </table>
                            <p>The above compensation structure applies to gross commissions for real estate brokerage
                                services and real estate agency services (including any bonuses, processing fees, or
                                transaction fees). The compensation structure applies for any and all leads and referrals
                                from lead within five (5) years of being assigned, including any and all real estate
                                transactions involving the lead, lead's spouse, or immediate family from lead, including
                                through marriage.</p>
                            <ul class="list-unstyled">
                                <li>• As per Zillow rules, agent agrees to use a transaction coordinator.</li>
                                <li>• As per Zillow rules, Zillow Home Loans is the preferred lender.</li>
                                <li>• Agent agrees to refer Law Offices of Adorno-Cunill & Damas and Capital Title Group as
                                    title companies for seller title work.</li>
                                <li>• Agent agrees to charge a $295 processing fee to seller and buyer.</li>
                                <li>• As per Zillow rules, all listings shall be closed out on the MLS under Team Leader as
                                    first agent. Agent will be second agent on MLS.</li>
                                <li>• Agent agrees to maintain a Tech and Lead Subscription, which includes FollowUpBoss, in
                                    order to be an active agent with Broker. FollowUpBoss must be used and updated as per
                                    Zillow rules. In the event that Agent is delinquent in the payment of the subscription,
                                    all access to the leads will be terminated.</li>
                                <li>• If agent needs assistance on listing presentation, it will be referred to Team Leader.
                                </li>
                                <li>• Agent agrees that any leads not contacted in 30 minutes shall be reassigned to a Team
                                    Leader.</li>
                                <li>• Agent agrees the leads shall be worked by an ISA.</li>
                                <li>• Agent shall execute said Referral/Exit Agreement within 24 hours of terminating its
                                    relations with the team.</li>
                                <li>• Agent agrees that all leads assigned will always be considered property of Broker and
                                    the commission split fee is due in the event the agent severs its relations with Broker.
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <button onclick="showForm()" class="btn btn-luxe px-4">I Agree</button>
                    </div>
                </div>
                <form id="regForm" action="{{ route('general.email.post') }}" class="d-none card form mb-5 p-3"
                    method="POST">
                    @csrf
                    <div class="card-header">
                        <h1 class="text-center my-4">Join Zillow Seller Team</h1>
                        <h5 class="text-center">Agents must work full time in real estate and have at least 6 closed
                            listings in the past 12
                            months. </h5>
                    </div>
                    <input type="hidden" name="form_title" value="Join Zillow Seller Team">

                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Agent Name</label>
                                <input type="text" name="agent_full_name" class="form-control"
                                    value="{{ auth()->user()->profile->fullname }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Agent Phone Number</label>
                                <input type="text" name="agent_phone_number" class="form-control"
                                    value="{{ auth()->user()->profile->phone }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Agent Email</label>
                                <input type="text" name="agent_email" class="form-control"
                                    value="{{ auth()->user()->email }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Agent Address</label>
                                <input type="text" name="agent_address" class="form-control"
                                    value="{{ auth()->user()->profile->address }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Years of Experience</label>
                                <input type="number" name="years_of_experience" class="form-control" value=""
                                    min="0" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Are you comfortable overcoming objections?</label>
                                <select name="are_you_comfortable_overcoming_objections" class="form-control" required>
                                    <option value>-</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Are you comfortable with the listing presentation?</label>
                                <select name="are_you_comfortable_with_the_listing_presentation" class="form-control"
                                    required>
                                    <option value>-</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Are you a full time or part time real estate agent?</label>
                                <select name="are_you_a_full_time_or_part_time_real_estate_agent" class="form-control"
                                    required onchange="canSubmitForm(this)">
                                    <option value>-</option>
                                    <option value="Full Time">Full Time</option>
                                    <option value="Part Time">Part Time</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">What do you typically bring to your listing presentations?</label>
                                <input type="text" name="what_do_you_typically_bring_to_your_listing_presentations"
                                    class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">How long are your listing presentations?</label>
                                <input type="text" name="how_long_are_your_listing_presentations" class="form-control"
                                    required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">What steps do you take to prequalify a seller prior to meeting with
                                    them?</label>
                                <input type="text"
                                    name="what_steps_do_you_take_to_prequalify_a_seller_prior_to_meeting_with_them"
                                    class="form-control" required>
                            </div>
                            <div class="col-12">
                                <label for="name">Please list the addresses of the listings you listed and have closed
                                    in the past 12 months.</label>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" name="listing_address_1" placeholder="Address 1" required
                                    class="form-control mb-3">
                                <input type="text" name="listing_address_2" placeholder="Address 2" required
                                    class="form-control mb-3">
                                <input type="text" name="listing_address_3" placeholder="Address 3" required
                                    class="form-control mb-3">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" name="listing_address_4" placeholder="Address 4" required
                                    class="form-control mb-3">
                                <input type="text" name="listing_address_5" placeholder="Address 5" required
                                    class="form-control mb-3">
                                <input type="text" name="listing_address_6" placeholder="Address 6" required
                                    class="form-control mb-3">
                            </div>
                            <div class="form-group form-footer col-12">
                                <input id="submit-button" type="submit" class="btn btn-luxe w-100" value="SUBMIT">
                                <p id="cannot-submit-text" class="text-center d-none text-danger font-weight-bold">Thank
                                    you
                                    for your form. Only Full Time Agents Can Join</p>
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
        function showForm() {
            $('#popup').addClass('d-none')
            $('#regForm').removeClass('d-none')
        }

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

        function canSubmitForm(select) {
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
