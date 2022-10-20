@extends('layouts.app', ['active' => 'marketing_branding', 'subactive' => 'wire_instructions_requests'])
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <form action="{{ route('general.email.post') }}" class="card form p-3" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="card-header">
                        <h1 class="text-center my-4">MARKETING MENU</h1>
                        <h5 class="text-center">Please select one or more items below for our Marketing Coordinators to
                            prepare.</h5>
                    </div>
                    <input type="hidden" name="form_title" value="MARKETING MENU">
                    <div class="card-body">
                        <div class="row">

                            <div class="form-group col-md-4">
                                <label for="name">Agent Name</label>
                                <input type="text" name="agent_full_name" class="form-control"
                                    value="{{ auth()->user()->profile->fullname }}" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="name">Agent Number</label>
                                <input type="text" name="agent_number" class="form-control"
                                    value="{{ auth()->user()->profile->phone }}" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="name">Agent Email</label>
                                <input type="text" name="agent_email" class="form-control"
                                    value="{{ auth()->user()->email }}" required>
                            </div>
                            <div class="form-group col-12">
                                <div>
                                    <input type="checkbox" name="options[]" value="Create Facebook Business Page ">
                                    <label for="opt1" class="font-weight-normal">Create Facebook Business Page </label>
                                </div>
                                <div>
                                    <input type="checkbox" name="options[]" value="Facebook Ads ">
                                    <label for="opt1" class="font-weight-normal">Facebook Ads </label>
                                </div>
                                <div>
                                    <input type="checkbox" name="options[]" value="Instagram Ads ">
                                    <label for="opt1" class="font-weight-normal">Instagram Ads </label>
                                </div>
                                <div>
                                    <input type="checkbox" name="options[]" value="Create Google Business Page ">
                                    <label for="opt1" class="font-weight-normal">Create Google Business Page </label>
                                </div>
                                <div>
                                    <input type="checkbox" name="options[]" value="Google Ads - PPC">
                                    <label for="opt1" class="font-weight-normal">Google Ads - PPC</label>
                                </div>
                                <div>
                                    <input type="checkbox" name="options[]"
                                        value="Email Blast (just listed, just sold, under contract, open house, broker's open)">
                                    <label for="opt1" class="font-weight-normal">Email Blast (just listed, just sold,
                                        under contract, open house, broker's open)</label>
                                </div>
                                <div>
                                    <input type="checkbox" name="options[]"
                                        value="
                                    Door Hangers (just listed, just sold, under contract, open house, broker's open)">
                                    <label for="opt1" class="font-weight-normal">
                                        Door Hangers (just listed, just sold, under contract, open house, broker's open)
                                    </label>
                                </div>
                                <div>
                                    <input type="checkbox" name="options[]"
                                        value="Flyers (just listed, just sold, under contract, open house, broker's open)">
                                    <label for="opt1" class="font-weight-normal">Flyers (just listed, just sold, under
                                        contract, open house, broker's open)</label>
                                </div>
                                <hr>
                                <div>
                                    <input type="checkbox" name="options[]"
                                        value="Social Media Posts (new agent, just listed, just sold, under contract, open house, broker's open)">
                                    <label for="opt1" class="font-weight-normal">Social Media Posts (new agent, just
                                        listed, just sold, under contract, open house, broker's open)</label>
                                </div>
                                <div>
                                    <input type="checkbox" name="options[]"
                                        value="Design Custom Signage (for sale signs, open house signs, etc)">
                                    <label for="opt1" class="font-weight-normal">Design Custom Signage (for sale signs,
                                        open house signs, etc)</label>
                                </div>
                                <div>
                                    <input type="checkbox" name="options[]" value="Design Custom Business Cards">
                                    <label for="opt1" class="font-weight-normal">Design Custom Business Cards</label>
                                </div>
                                <div>
                                    <input type="checkbox" name="options[]" value="Design Custom Banner (digital or print)">
                                    <label for="opt1" class="font-weight-normal">Design Custom Banner (digital or
                                        print)</label>
                                </div>
                                <div>
                                    <input type="checkbox" name="options[]" value="Custom Email Signature ">
                                    <label for="opt1" class="font-weight-normal">Custom Email Signature </label>
                                </div>
                                <div>
                                    <input type="checkbox" name="options[]"
                                        value="Mailers/EDDM - Postcard creation & community routes">
                                    <label for="opt1" class="font-weight-normal">Mailers/EDDM - Postcard creation &
                                        community routes</label>
                                </div>
                                <div>
                                    <input type="checkbox" name="options[]" value="Create RelaHQ Property Sites ">
                                    <label for="opt1" class="font-weight-normal">Create RelaHQ Property Sites </label>
                                </div>
                                <div>
                                    <input type="checkbox" name="options[]"
                                        value="Create landing pages (requires kvCORE or other third-party provider)">
                                    <label for="opt1" class="font-weight-normal">Create landing pages (requires kvCORE
                                        or other third-party provider)</label>
                                </div>
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
