@extends('layouts.app')
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
            <div id="popup" class="card">
                <div class="card-header text-center">
                    <h5>You must agree to the following terms:</h5>
                </div>
                <div class="card-body">
                    <pre style="font-family: Arial;">
                    Due to wire fraud, the client and/or title company must call our office to verbally verify the account information prior
                    to sending the wire. Just to ensure that our accounts have not been hacked.

                    <b>Please note there is a $25 wire fee that will be deducted from the agent's final commission after the split.</b>

                    Here is an informational video you can provide the client. If the client does not call, we will not be responsible for
                    the lost wire.

                    <a href="http://www.floridarealtors.org/MediaLibrary/media.cfm?id=345322">http://www.floridarealtors.org/MediaLibrary/media.cfm?id=345322</a></pre>
                </div>
                <div class="card-footer">
                    <button onclick="showForm()" class="btn btn-luxe w-100">I Agree</button>
                </div>
            </div>

            <form action="{{route('general.email.post')}}" class="card form p-3 d-none" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="card-header">
                    <h1 class="text-center my-4">WIRE INSTRUCTIONS REQUEST</h1>
                </div>
                <input type="hidden" name="form_title" value="WIRE INSTRUCTIONS REQUEST">
                <!-- <input type="hidden" name="to_email[]" value="marketing@luxeknows.com">
                <input type="hidden" name="to_email[]" value="operations@luxeknows.com">
                <input type="hidden" name="to_email[]" value="support@luxeknows.com">
                <input type="hidden" name="to_email[]" value="receptionist@luxeknows.com">
                <input type="hidden" name="to_email[]" value="email@luxeknows.com"> -->
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
                            <label for="name">What type of wire instructions are you requesting?</label>
                            <select name="what_type_of_wire_instructions_are_you_requesting" class="form-control"
                                required id="">
                                <option value="-">-</option>
                                <option value="Agent Commission">Agent Commission</option>
                                <option value="Rental Escrow Deposit">Rental Escrow Deposit</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Property Address For Wire</label>
                            <input type="text" name="property_address_for_wire" class="form-control" required>
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
<script>
    function showForm(){
        $('#popup').addClass('d-none')
        $('form').removeClass('d-none')
    }
</script>
@endsection