@extends('layouts.app', ['active' => 'leads_services_support', 'subactive' => 'get_leads'])
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <form action="{{ route('general.email.post') }}" class="card form p-3" method="POST">
                    @csrf
                    <div class="card-header">
                        <h1 class="text-center my-4">Opcity Leads</h1>
                    </div>
                    <input type="hidden" name="form_title" value="Opcity Leads">
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
                                <label for="name">Are you a Full Time or Part Time Agent?</label>
                                <select name="are_you_a_full_time_or_part_time_agent" class="form-control" required
                                    id="">
                                    <option value="-">-</option>
                                    <option value="Full Time">Full Time</option>
                                    <option value="Part Time">Part Time</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">How long have you been in real estate?</label>
                                <input id="years" type="number" name="how_long_have_you_been_in_real_estate"
                                    class="form-control" required value="0" min="0" max="50">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Are you on the Zillow Team? </label>
                                <select name="are_you_on_the_zillow_team" class="form-control" required id="">
                                    <option value="-">-</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="name">Are you on the CINC Team? </label>
                                <select name="are_you_on_the_CINC_team" class="form-control" required id="">
                                    <option value="-">-</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
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
    <script>
        var num_input = document.getElementById('years')
        num_input.addEventListener('input', function(event, val) {
            if (num_input.value > 50)
                num_input.value = 50

            else if (num_input.value < 0)
                num_input.value = 0
        });
    </script>
@endsection
