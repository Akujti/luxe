@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center my-4">
        <div class="col-md-12">
            <form action="{{route('general.email.post')}}" class="card form my-4 p-3" method="POST"
                onsubmit="event.preventDefault(); addAgentEmail()">
                @csrf
                <div class="card-header">
                    <h1 class="text-center my-4">CLOSING COORDINATORS</h1>
                </div>
                <input type="hidden" name="form_title" value="CLOSING COORDINATORS">
                <input type="hidden" name="to_email[]" value="">
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
    function addAgentEmail(){
        if(getUrlParameter('agent_email')){
            $('[name="to_email[]"]').val(getUrlParameter('agent_email'))
            return true;
        }
        return false;
    }
    var getUrlParameter = function getUrlParameter(sParam) {
        var sPageURL = window.location.search.substring(1),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;    
        for (i = 0; i < sURLVariables.length; i++) { sParameterName=sURLVariables[i].split('=');
    
            if (sParameterName[0] === sParam) {
                return typeof sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
            }
        }
        return false;
    };
</script>
@endsection