@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center my-4">
        <div class="col-md-12">
            <form action="{{route('general.email.post')}}" class="card form my-4 p-3" method="POST">
                @csrf
                <div class="card-header">
                    <h1 class="text-center my-4">Opcity Leads</h1>
                </div>
                <input type="hidden" name="form_title" value="Opcity Leads">
                <input type="hidden" name="to_email[]" value="email@luxeknows.com">
                <input type="hidden" name="to_email[]" value="operations@luxeknows.com">
                <input type="hidden" name="to_email[]" value="support@luxeknows.com">
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
                            <label for="name">Are you a Full Time or Part Time Agent?</label>
                            <select name="are_you_a_full_time_or_part_time_agent" class="form-control" required id="">
                                <option value="-">-</option>
                                <option value="Full Time">Full Time</option>
                                <option value="Part Time">Part Time</option>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="name">How long have you been in real estate?</label>
                            <input id="years" type="number" name="how_long_have_you_been_in_real_estate"
                                class="form-control" required value="0" min="0" max="50">
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
    var num_input = document.getElementById('years')
    num_input.addEventListener('input', function (event,val) {
    if(num_input.value > 50)
        num_input.value = 50
    
    else if(num_input.value <0)
        num_input.value = 0
    });
</script>
@endsection