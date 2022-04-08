@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <form action="{{route('general.email.post')}}" class="card form mb-5 p-3" method="POST"
                onsubmit="addAgentEmail()" enctype="multipart/form-data">
                @csrf
                <div class="card-header">
                    <h1 class="text-center my-4">CLOSING COORDINATORS - {{$coordinator->name}}</h1>
                    <h6 id="agent-text" class="text-center" style="font-size: 21px;">{{$coordinator->sentence}}</h6>
                </div>
                <input type="hidden" name="form_title" value="CLOSING COORDINATORS - {{$coordinator->name}}">
                <input type="hidden" name="form_title_value" value="CLOSING COORDINATORS - Accept Params">
                <!-- <input type="hidden" name="to_email[]" value="marketing@luxeknows.com">
                <input type="hidden" name="to_email[]" value="operations@luxeknows.com">
                <input type="hidden" name="to_email[]" value="email@luxeknows.com">
                <input type="hidden" name="to_email[]" value="support@luxeknows.com">
                <input type="hidden" name="to_email[]" value="receptionist@luxeknows.com"> -->
                <input type="hidden" name="to_email" value="{{$coordinator->email}}">
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
                        <div class="form-group col-md-12">
                            <label for="name">Upload Fully Executed Contract</label>
                            <input type="file" name="contract" class="form-control p-1">
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