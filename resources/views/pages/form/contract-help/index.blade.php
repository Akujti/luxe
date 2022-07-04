@extends('layouts.app', ['active' => 'leads_services_support', 'subactive' => 'get_contract_help'])
@section('content')
    <div class="{{ auth()->check() ? 'container-fluid' : 'container mt-4' }}">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <form action="{{ route('general.email.post') }}" class="card form mb-5 p-3" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="card-header">
                        <h1 class="text-center my-4">Get Contract Help</h1>
                        <h6 id="agent-text" class="text-center" style="font-size: 21px;">Contract Specialist Will Reach You
                            Out</h6>
                    </div>
                    <input type="hidden" name="form_title" value="Get Contract Help">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Agent Name:</label>
                                <input type="text" name="agent_full_name" class="form-control"
                                    value="{{ auth()->user()->profile->fullname }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Agent Phone:</label>
                                <input type="text" name="agent_phone" class="form-control"
                                    value="{{ auth()->user()->profile->phone }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Personal Email:</label>
                                <input type="text" name="agent_email" class="form-control"
                                    value="{{ auth()->user()->email }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Transaction Type:</label>
                                <select name="transaction_type" id="transaction_type" class="form-control"
                                    onchange="toggleOptions('transaction_type')" required>
                                    <option value="">-</option>
                                    <option value="Sale">Sale</option>
                                    <option value="Rental">Rental</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Who are you representing?</label>
                                <select name="who_are_you_representing?" id="representing_select" class="form-control"
                                    required>
                                    <option value="">-</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Upload Document You Would Like Reviewed:</label>
                                <input type="file" name="upload_document_you_would_like_reviewed"
                                    class="form-control p-1" required>
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

    <script>
        function toggleOptions(select_id) {
            var value = $('#' + select_id).val();

            if (value == 'Sale') {
                $('#representing_select').html(`
                    <option value="">-</option>
                    <option value="Buyer">Buyer</option>
                    <option value="Seller">Seller</option>
                `)
            } else {
                $('#representing_select').html(`
                    <option value="">-</option>
                    <option value="Tenant">Tenant</option>
                    <option value="Landlord">Landlord</option>
                `)
            }
        }
    </script>
@endsection
