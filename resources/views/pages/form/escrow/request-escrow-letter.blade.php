@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center my-4">
        <div class="col-md-12">

            <form action="{{route('general.email.post')}}" class="card form my-4 p-3" method="POST">
                @csrf
                <div class="card-header">
                    <h1 class="text-center my-4">Request Escrow Letter</h1>
                </div>
                <input type="hidden" name="form_title" value="Request Escrow Letter">
                <input type="hidden" name="to_email[]" value="support@luxeknows.com">
                <input type="hidden" name="to_email[]" value="marketing@luxeknows.com">
                <input type="hidden" name="to_email[]" value="operations@luxeknows.com">
                <input type="hidden" name="to_email[]" value="receptionist@luxeknows.com">
                <input type="hidden" name="to_email[]" value="wesley@luxehomeloan.com">
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name">Agent Name</label>
                            <input type="text" name="agent_full_name" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Agent Number</label>
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
                            <label for="name">Tenant Name</label>
                            <input type="text" name="tenant_name" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Escrow Amount</label>
                            <input type="number" name="escrow_amount" class="form-control" required>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="name">Which office were funds dropped off</label>
                            <input type="text" name="which_office_were_funds_dropped_off" class="form-control" required>
                        </div>
                        <div class="form-group col-12 text-center">
                            <h6>**Contract to Lease or Lease must be on Broker Sumo for escrow letter to be released**
                            </h6>
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