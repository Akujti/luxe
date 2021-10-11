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
                <input type="hidden" name="to_email[]" value="wesley@luxeknows.com">
                <input type="hidden" name="to_email[]" value="marketing@luxeknows.com">
                <input type="hidden" name="to_email[]" value="zillowluxe@gmail.com">
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name">First Name</label>
                            <input type="text" name="first_name" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Last Name</label>
                            <input type="text" name="last_name" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Email</label>
                            <input type="text" name="email" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">License #</label>
                            <input type="text" name="license" class="form-control" required>
                        </div>
                        <div class="form-group col-md-12" style="padding-left: 35px">
                            <input type="checkbox" name="accept" class="form-check-input" required>
                            <label class="form-check-label">I certify that I’m a licensed Real Estate Agent in good
                                standing
                                sponsored
                                by: <b>LUXE Properties</b></label>
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