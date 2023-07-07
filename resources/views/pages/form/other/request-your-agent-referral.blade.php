@extends('layouts.app', ['active' => 'office_staff_directory', 'subactive' => 'request_your_agent'])
@section('content')
    <style>
        @media(min-width:1200px) {
            pre {
                padding-left: 150px;
            }
        }
    </style>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <x-verbiage-form-text :formInfo=$formInfo :afterSubmit="session()->get('modal')" />
                <form action="{{ route('general.email.post') }}" class="card form p-3" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="card-header">
                        <h1 class="text-center my-4">Request Your Agent Referral</h1>
                        <h5 class="text-center">When an agent you refer reaches their first $1K Company Dollars, you earn a
                            $1K referral payout. </h5>
                        <h5 class="text-center">Referral Payouts occur the first 15<sup>th</sup> or 30<sup>th</sup> of every
                            month.</h5>
                    </div>
                    <input type="hidden" name="form_title" value="Request Your Agent Referral">
                    <input type="hidden" name="form_verbiages_text" value="{{ $formInfo->email_verbiages_text }}">
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
                                <label for="name">Name of Agent You Referred</label>
                                <input type="text" name="referred_agent_name" class="form-control" required>
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
@endsection
