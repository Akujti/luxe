@extends('layouts.app', ['active' => 'office_staff_directory', 'subactive' => 'new_agents_referrals'])
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <form action="{{ route('general.email.post') }}" enctype="multipart/form-data" class="card form p-3"
                      method="POST">
                    @csrf
                    <div class="card-header">
                        <h1 class="text-center my-4">Get Your Referral Agreement Signed</h1>
                        <h5 class="text-center">Please upload a referral agreement that is completely filled out and
                            ready
                            for review.</h5>
                    </div>
                    <input type="hidden" name="form_title" value="Get Your Referral Agreement Signed">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Agent Name</label>
                                <input type="text" name="agent_full_name" class="form-control"
                                       value="{{ auth()->user()->profile->fullname }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Agent Phone</label>
                                <input type="text" name="agent_phone" class="form-control"
                                       value="{{ auth()->user()->profile->phone }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Agent Email</label>
                                <input type="text" name="agent_email" class="form-control"
                                       value="{{ auth()->user()->email }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Upload Referral Agreement</label>
                                <input type="file" name="referral_agreement" class="form-control p-1" required>
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
