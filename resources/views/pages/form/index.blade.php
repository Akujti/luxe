@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <form action="{{route('form.store')}}" class="card form p-3" method="POST">
                @csrf
                <div class="card-header">
                    <h1 class="text-center my-4">Pre-Approval Form</h1>
                    @if (auth()->user() && auth()->user()->isAdmin)
                    <div class="form-group text-center">
                        <button class="btn btn-luxe" onclick="createCsv()">EXPORT CSV</button>
                    </div>
                    @endif
                </div>
                <input type="hidden" name="form_title" value="Pre-Approval Form">
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name">Client's Full Name *</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Client's Phone Number *</label>
                            <input type="text" name="phone" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Client's Email *</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Agent's Email *</label>
                            <input type="email" name="agent_email" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Referring Agent *</label>
                            <input type="text" name="agent" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Interested in a specific property? Please provide the full address
                                below. </label>
                            <input type="text" name="full_address" class="form-control" required value="-">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Best Time To Be Reached - Please provide 2 options. *</label>
                            <input type="text" name="time" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Any particular loan officer you want to work with?</label>
                            <select name="loan_officer" class="form-control" id="" required>
                                <option value="-">-</option>
                                <option value="Alfonso Rojas">Alfonso Rojas</option>
                                <option value="Anais Delgado">Anais Delgado</option>
                                <option value="Lissete Garcia">Lissete Garcia</option>
                                <option value="Monica Estupinan">Monica Estupinan</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Any other additional information may be provided below.</label>
                            <input type="text" name="additional" class="form-control" required value="-">
                        </div>
                        <div class="form-group form-footer col-12">
                            <input type="submit" class="btn btn-luxe w-100" value="SUBMIT">
                        </div>
                    </div>
                </div>
            </form>
            <form action="{{route('getCsv')}}" method="post" id="csv">
                @csrf
                <input type="hidden" name="title" value="Pre-Approval Form">
            </form>
        </div>
    </div>
</div>
<script>
    function createCsv(){
        $('#csv').submit()
    }
</script>
@endsection