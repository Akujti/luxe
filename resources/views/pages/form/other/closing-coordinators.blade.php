@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center my-4">
        <div class="col-md-12">
            <form action="{{route('general.email.post')}}" class="card form my-4 p-3" method="POST"
                onsubmit="addAgentEmail()">
                @csrf
                <div class="card-header">
                    <h1 class="text-center my-4">CLOSING COORDINATORS</h1>
                    <h6 id="agent-text" class="text-center" style="font-size: 21px;">{{$coordinator->sentence}}</h6>
                </div>
                <input type="hidden" name="form_title" value="CLOSING COORDINATORS">
                <input type="hidden" name="to_email[]" value="marketing@luxeknows.com">
                <input type="hidden" name="to_email[]" value="operations@luxeknows.com">
                <input type="hidden" name="to_email[]" value="wesley@luxehomeloan.com">
                <input type="hidden" name="to_email[]" value="{{$coordinator->email}}">
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name">Agent Name</label>
                            <input type="text" name="agent_full_name" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Agent Phone Number</label>
                            <input type="text" name="agent_number" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Agent Email</label>
                            <input type="text" name="agent_email" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Property Address</label>
                            <input type="text" name="property_address" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Effective date</label>
                            <input type="date" name="effective_date" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Lender Name</label>
                            <input type="text" name="lender_name" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Lender Email</label>
                            <input type="text" name="lender_email" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Lender Phone Number</label>
                            <input type="text" name="lender_number" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Co-op Agent Name</label>
                            <input type="text" name="co_op_agent_name" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Co-op Agent Email</label>
                            <input type="text" name="co_op_agent_email" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Co-op Agent Phone Number</label>
                            <input type="text" name="co_op_agent_number" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Attorney/Title Company Name</label>
                            <input type="text" name="attorney_name" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Attorney/Title Company Email</label>
                            <input type="text" name="attorney_email" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Attorney/Title Company Phone Number</label>
                            <input type="text" name="attorney_number" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">HOA Name</label>
                            <input type="text" name="hoa_name" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">HOA Email</label>
                            <input type="text" name="hoa_email" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">HOA Phone Number</label>
                            <input type="text" name="hoa_number" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Is this a LUXE Zillow lead?</label>
                            <select name="is_this_luxe_zillow_lead" class="form-control">
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
        </div>
    </div>
</div>
@endsection