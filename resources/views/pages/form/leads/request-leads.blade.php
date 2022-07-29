@extends('layouts.app', ['active' => 'leads_services_support', 'subactive' => 'get_leads'])
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <form action="{{ route('general.email.post') }}" class="card form p-3" method="POST">
                    @csrf
                    <div class="card-header">
                        <h1 class="text-center mt-4">Request 25 CINC Leads</h1>
                        <h6 class="text-center mb-4">**THE LEADS WILL BE REROUTED IF NOT CONTACTED WITHIN 2 HOURS**</h6>
                    </div>
                    <input type="hidden" name="form_title" value="Request 25 CINC Leads">
                    <!-- <input type="hidden" name="to_email[]" value="receptionist@luxeknows.com">
                                <input type="hidden" name="to_email[]" value="support@luxeknows.com">
                                <input type="hidden" name="to_email[]" value="email@luxeknows.com"> -->
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Full name</label>
                                <input type="text" name="agent_full_name" class="form-control"
                                    value="{{ auth()->user()->profile->fullname }}" required>
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
                                <label for="name">Which CINC are you on?</label>
                                <select name="which_CINC_are_you_on" class="form-control" id="">
                                    <option value="-">-</option>
                                    <option value="Miami-Dade">Miami-Dade</option>
                                    <option value="Broward">Broward</option>
                                </select>
                            </div>

                            {{-- <div class="form-group form-footer col-12">
                                <input type="submit" class="btn btn-luxe w-100" value="SUBMIT">
                            </div> --}}
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        history.back()
    </script>
@endsection
