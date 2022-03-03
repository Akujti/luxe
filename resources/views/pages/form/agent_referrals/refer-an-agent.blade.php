@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center my-4">
        <div class="col-md-12">

            <form action="{{route('general.email.post')}}" class="card form my-4 p-3" method="POST">
                @csrf
                <div class="card-header">
                    <h1 class="text-center my-4">Refer An Agent</h1>
                </div>
                <input type="hidden" name="form_title" value="Refer An Agent">
                <input type="hidden" name="to_email[]" value="marketing@luxeknows.com">
                <input type="hidden" name="to_email[]" value="operations@luxeknows.com">
                <input type="hidden" name="to_email[]" value="support@luxeknows.com">
                <input type="hidden" name="to_email[]" value="receptionist@luxeknows.com">
                <input type="hidden" name="to_email[]" value="email@luxeknows.com">
                <input type="hidden" name="to_email[]" value="yesenia@luxeknows.com">
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name">Full Name</label>
                            <input type="text" name="agent_full_name" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Number</label>
                            <input type="text" name="number" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Email</label>
                            <input type="text" name="agent_email" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">New Licensee</label>
                            <select name="new_licensee" class="form-control" id="">
                                <option value="-">-</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Current Brokerage</label>
                            <input type="text" name="current_brokerage" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Years In Real Estate</label>
                            <input type="text" name="years_in_real_estate" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">License Number</label>
                            <input type="text" name="license_number" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Referring LUXE Agent Name</label>
                            <input type="text" name="referring_LUXE_agent_name" class="form-control" required>
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