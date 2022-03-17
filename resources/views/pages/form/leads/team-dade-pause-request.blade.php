@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center my-4">
        <div class="col-md-12">

            <form action="{{route('general.email.post')}}" class="card form my-4 p-3" method="POST">
                @csrf
                <div class="card-header">
                    <h1 class="text-center my-4">Team Dade - Pause Request</h1>
                </div>
                <input type="hidden" name="form_title" value="Team Dade - Pause Request">
                <input type="hidden" name="to_email[]" value="email@luxeknows.com">
                <input type="hidden" name="to_email[]" value="jkirkwood316@gmail.com">
                <input type="hidden" name="to_email[]" value="gabrielas@luxeknows.com>
                <div class=" card-body">
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
                        <label for="name">Zillow Team</label>
                        <select name="zillow_team" class="form-control" required id="">
                            <option value="-">-</option>
                            <option value="Team FLEX">Team FLEX</option>
                            <option value="Team DADE">Team DADE</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name">Start Pause Date</label>
                        <input type="date" name="start_pause_date" class="form-control" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name">End Pause Date</label>
                        <input type="date" name="end_pause_date" class="form-control" required>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="name">Reason for Zillow Pause</label>
                        <select name="zillow_team" class="form-control" required id="">
                            <option value="-">-</option>
                            <option value="Family">Family</option>
                            <option value="Sick">Sick</option>
                            <option value="Vacation">Vacation</option>
                            <option value="Other">Other</option>
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