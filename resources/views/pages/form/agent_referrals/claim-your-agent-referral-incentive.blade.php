@extends('layouts.app', ['active' => 'office_staff_directory', 'subactive' => 'new_agents_referrals'])
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <form action="{{ route('general.email.post') }}" class="card form p-3" method="POST">
                    @csrf
                    <div class="card-header">
                        <h1 class="text-center my-4">Claim Your Agent Referral Incentive</h1>
                    </div>
                    <input type="hidden" name="form_title" value="Claim Your Agent Referral Incentive">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Full Name</label>
                                <input type="text" name="agent_full_name" class="form-control"
                                    value="{{ auth()->user()->profile->fullname }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Email</label>
                                <input type="text" name="agent_email" class="form-control"
                                    value="{{ auth()->user()->email }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Phone Number</label>
                                <input type="text" name="phone_number" class="form-control"
                                    value="{{ auth()->user()->profile->phone }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="branch_manager">Branch Manager:</label>
                                <input type="text" name="branch_manager" class="form-control"
                                    value="{{ auth()->user()->profile ? auth()->user()->profile->support_specialist_name : '' }}"
                                    required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Name of Agent Referred</label>
                                <input type="text" name="name_of_agent_referred" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Have they closed their first deal with LUXE?</label>
                                <select name="have_they_closed_their_first_deal_with_luxe" class="form-control" required>
                                    <option value="">-</option>
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
@endsection
