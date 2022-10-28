@extends('layouts.app', ['active' => 'leads_services_support', 'subactive' => 'get_leads'])
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <form id="luxe_form" action="{{ route('general.email.post') }}" class="card form p-3" method="POST">
                    @csrf
                    <div class="card-header">
                        <h1 class="text-center my-4">Pause Request</h1>
                    </div>
                    <input type="hidden" name="form_title" value="Pause Request">
                    <input type="hidden" name="to_email[]" id="team_email" value=""> <input type="hidden"
                        name="to_email[]" value="irais@luxeknows.com">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Agent Name</label>
                                <input type="text" name="agent_full_name" class="form-control"
                                    value="{{ auth()->user()->profile->fullname }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Agent Number</label>
                                <input type="text" name="agent_number" class="form-control"
                                    value="{{ auth()->user()->profile->phone }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Agent Email</label>
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
                                <label for="name">Reason for Zillow Pause</label>
                                <select name="zillow_team" class="form-control" required id="">
                                    <option value="-">-</option>
                                    <option value="Family">Family</option>
                                    <option value="Sick">Sick</option>
                                    <option value="Vacation">Vacation</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            {{-- <div class="form-group col-md-6">
                            <label for="name">Zillow Team</label>
                            <select name="zillow_team" class="form-control" required id="">
                                <option value="-">-</option>
                                <option value="Team FLEX">Team FLEX</option>
                                <option value="Team DADE">Team DADE</option>
                            </select>
                        </div> --}}
                            <div class="form-group col-md-6">
                                <label for="name">Start Pause Date</label>
                                <input type="date" name="start_pause_date" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">End Pause Date</label>
                                <input type="date" name="end_pause_date" class="form-control" required>
                            </div>

                            <div class="form-group form-footer col-12">
                                {{-- <input type="submit" class="btn btn-luxe w-100" value="SUBMIT"> --}}
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        history.back()

        function setTeamEmail(element) {
            if (element.value == 'Team Flex') {
                // document.getElementById('luxe_form').appendChild(
                //     '<input type="hidden" name="to_email[]" id="team_email_2" value="ramee@luxeknows.com">')
                document.getElementById('team_email').value = 'ramee@luxeknows.com'
            } else if (element.value == 'Team Dade')
                document.getElementById('team_email').value = 'gabrielas@luxeknows.com'
        }
    </script>
@endsection
