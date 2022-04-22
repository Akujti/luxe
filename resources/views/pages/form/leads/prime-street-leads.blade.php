@extends('layouts.app', ['active' => 'Leads'])
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <form action="{{route('general.email.post')}}" class="card form p-3" method="POST">
                @csrf
                <div class="card-header">
                    <h1 class="text-center my-4">Prime Street Leads</h1>
                </div>
                <input type="hidden" name="form_title" value="Prime Street Leads">
                <!-- <input type="hidden" name="to_email[]" value="denisse@luxeknows.com">
                <input type="hidden" name="to_email[]" value="receptionist@luxeknows.com">
                <input type="hidden" name="to_email[]" value="support@luxeknows.com">
                <input type="hidden" name="to_email[]" value="email@luxeknows.com"> -->
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name">Full Name</label>
                            <input type="text" name="agent_full_name" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Email</label>
                            <input type="text" name="agent_email" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Mobile Phone Number</label>
                            <input type="text" name="mobile_phone" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Have you closed a minimum of 5 transactions?</label>
                            <select name="have_you_closed_a_minimum_of_5_transactions" class="form-control" id="">
                                <option value="-">-</option>
                                <option value="Miami-Dade">Yes</option>
                                <option value="Broward">No</option>
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