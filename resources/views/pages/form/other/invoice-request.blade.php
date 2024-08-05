@extends('layouts.app', ['active' => 'leads_services_support', 'subactive' => 'invoice_request'])
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <x-verbiage-form-text :formInfo=$formInfo :afterSubmit="session()->get('modal')"/>
                <form action="{{ route('general.email.post') }}" class="card form p-3" method="POST"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="card-header">
                        <h1 class="text-center my-4">Invoice Request</h1>
                        <h5 class="text-center">Please fill out the form below to request an invoice for commissions
                            from rental buildings, commercial deals, or anything else you may need.</h5>
                    </div>
                    <input type="hidden" name="form_title" value="Invoice Request">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Agent Name</label>
                                <input type="text" name="agent_full_name" class="form-control"
                                       value="{{ auth()->user()->profile->fullname }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Agent Number</label>
                                <input type="text" name="agent_number" class="form-control"
                                       value="{{ auth()->user()->profile->phone }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Who should the invoice be addressed to (name of individual or
                                    corporation)</label>
                                <input type="text" name="who_should_the_invoice_be_addressed_to" class="form-control"
                                       required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Memo for Invoice</label>
                                <input type="text" name="memo_for_invoice" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Amount for Invoice ($)</label>
                                <input type="text" name="amount_for_invoice" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Notes</label>
                                <input type="text" name="notes" class="form-control" required>
                            </div>
                            <div class="form-group form-footer col-12">
                                <input type="submit" class="btn btn-luxe w-100" value="SUBMIT">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
