@extends('layouts.app', ['active' => 'leads_services_support', 'subactive' => 'get_your_property_listed'])
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <form action="{{ route('general.email.post') }}" class="card form p-3" method="POST">
                    @csrf
                    <div class="card-header">
                        <h1 class="text-center my-4">Get Your Property Listed on Costar/Loopnet</h1>
                    </div>
                    <input type="hidden" name="form_title" value="Get Your Property Listed on Costar/Loopnet">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="">Agent Name</label>
                                <input type="text" name="agent_full_name" class="form-control"
                                       value="{{ auth()->user()->profile->fullname }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Agent Phone</label>
                                <input type="text" name="agent_phone" class="form-control"
                                       value="{{ auth()->user()->profile->phone }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Agent Email</label>
                                <input type="text" name="agent_email" class="form-control"
                                       value="{{ auth()->user()->email }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Address for Listing</label>
                                <input type="text" name="address_for_listing" class="form-control map-search" required
                                       placeholder="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Property Type</label>
                                <select type="text" name="property_type" class="form-control" required>
                                    <option value>-</option>
                                    <option value="Office">Office</option>
                                    <option value="Retail">Retail</option>
                                    <option value="Multifamily">Multifamily</option>
                                    <option value="Industrial">Industrial</option>
                                    <option value="Land">Land</option>
                                    <option value="Special Purpose">Special Purpose</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">List Date to go on Costar/Loopnet</label>
                                <input type="date" name="list_date" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Anything that differs from tax records?</label>
                                <input type="text" name="anything_that_differs_from_tax_records" class="form-control"
                                       required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Please list any upgrades or special features ex - impact windows,
                                    generator, pool</label>
                                <textarea name="upgrades_or_special_features" class="form-control p-1"
                                          required rows="2"></textarea>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Where can we find photos?</label>
                                <input type="text" name="where_can_we_find_photos" class="form-control"
                                       required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Any coagents or special instructions?</label>
                                <textarea name="any_coagents_or_special_instructions" class="form-control p-1"
                                          required rows="2"></textarea>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Do you want us to make the description?</label>
                                <select type="text" name="do_you_want_us_to_make_the_description" class="form-control"
                                        required>
                                    <option value>-</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Upload Executed Listing Agreement</label>
                                <input type="file" name="executed_listing_agreement" class="form-control p-1" required>
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
