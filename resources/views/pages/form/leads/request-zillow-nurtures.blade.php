@extends('layouts.app', ['active' => 'leads_services_support', 'subactive' => 'get_leads'])
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            
            <x-verbiage-form-text :formInfo=$formInfo  :afterSubmit="session()->get('modal')" />
            <form action="{{route('general.email.post')}}" class="card form p-3" method="POST">
                @csrf
                <div class="card-header">
                    <h1 class="text-center my-4">Request Zillow Nurtures</h1>
                </div>
                <input type="hidden" name="form_title" value="Request Zillow Nurtures">
                <input type="hidden" name="form_verbiages_text" value="{{ $formInfo->email_verbiages_text }}">
                <!-- <input type="hidden" name="to_email[]" value="email@luxeknows.com">
                <input type="hidden" name="to_email[]" value="marketing@luxeknows.com">
                <input type="hidden" name="to_email[]" value="operations@luxeknows.com">
                <input type="hidden" name="to_email[]" value="zillowluxe@gmail.com">
                <input type="hidden" name="to_email[]" value="irais@luxeknows.com">
                <input type="hidden" name="to_email[]" value="jkirkwood316@gmail.com"> -->
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name">Agent Name</label>
                            <input type="text" name="agent_full_name" class="form-control"
                                value="{{auth()->user()->profile->fullname}}" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Agent Number</label>
                            <input type="text" name="agent_number" value="{{auth()->user()->profile->phone}}"
                                class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Agent Email</label>
                            <input type="text" name="agent_email" class="form-control" value="{{auth()->user()->email}}"
                                required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Zillow Team</label>
                            <select name="zillow_team" class="form-control" required id="">
                                <option value="-">-</option>
                                <option value="Team FLEX">Team FLEX</option>
                                <option value="Team DADE">Team DADE</option>
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