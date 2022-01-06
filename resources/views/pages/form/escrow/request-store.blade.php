@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center my-4">
        <div class="col-md-12">

            <form action="{{route('general.email.post')}}" class="card form my-4 p-3" method="POST">
                @csrf
                <div class="card-header">
                    <h1 class="text-center my-4 text-uppercase">Request Store - Rental Escrow Disbursement</h1>
                    <h6 id="agent-text" class="text-center " style="font-size: 21px;"><b>ESCROW DISBURSEMENTS TAKE 24-48
                            HOURS TO BE PROCESSED.</b></h6>
                </div>
                <input type="hidden" name="form_title" value="Request Store - Rental Escrow Disbursement">
                <input type="hidden" name="to_email[]" value="wesley@luxeknows.com">
                <input type="hidden" name="to_email[]" value="support@luxeknows">
                <input type="hidden" name="to_email[]" value="marketing@luxeknows.com">
                <input type="hidden" name="to_email[]" value="operations@luxeknows.com">
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name">Agent Name</label>
                            <input type="text" name="agent_full_name" class="form-control" required>
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
                            <label for="name">Do you represent tenant or landlord?</label>
                            <select name="tenant_landlord" class="form-control" id="">
                                <option value="-">-</option>
                                <option value="Tenant">Tenant</option>
                                <option value="Landlord">Landlord</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Client Name</label>
                            <input type="text" name="client_name" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Client Email</label>
                            <input type="text" name="client_email" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Lead Source</label>
                            <select name="lead_source" class="form-control" id="">
                                <option value="-">-</option>
                                <option value="Personal">Personal</option>
                                <option value="CINC">CINC</option>
                                <option value="Zillow">Zillow</option>
                                <option value="Opcity">Opcity</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Lease Start Date</label>
                            <input type="text" name="lease_start_date" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Walkthrough Date</label>
                            <input type="text" name="walkthrough_date" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Is your walkthrough in the morning or afternoon?</label>
                            <select name="morning_afternoon" class="form-control" id="">
                                <option value="-">-</option>
                                <option value="Morning">Morning</option>
                                <option value="Afternoon">Afternoon</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Amount Held In Escrow</label>
                            <input type="number" name="amount_held_in_escrow" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Amount Due To LUXE Agent (before split)</label>
                            <input type="number" name="amount_due_to_LUXE_agent" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Amount Due To Co-op Agent</label>
                            <input type="number" name="amount_due_to_co_op_agent" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Co-op Brokerage Name</label>
                            <input type="text" name="co_op_brokerage_name" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Amount Due To Landlord (if applicable)</label>
                            <input type="number" name="amount_dute_to_landlord" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <b>Other Required Documents Along With This Form - Must Be Uploaded To Broker
                                Sumo</b>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Fully Executed Contract to Lease (if one was used)</label>
                            <select name="fully_executed_contract" class="form-control" id="">
                                <option value="-">-</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Fully Executed Lease PG's 1-18</label>
                            <select name="fully_executed_lease" class="form-control" id="">
                                <option value="-">-</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">HOA Approval Letter Or Email Proof</label>
                            <select name="hoa_approval_letter" class="form-control" id="">
                                <option value="-">-</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                                <option value="N/A">N/A - No HOA for property</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Landlord W9 (if applicable)</label>
                            <select name="landlord_w9" class="form-control" id="">
                                <option value="-">-</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                                <option value="N/A">N/A</option>
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