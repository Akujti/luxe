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
                                <label for="name">Agent Email</label>
                                <input type="text" name="agent_email" class="form-control"
                                    value="{{ auth()->user()->email }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Create Facebook Business Page</label>
                                <input type="text" name="create_facebook_business_page" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Facebook Ads</label>
                                <input type="text" name="facebook_ads" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Instagram Ads</label>
                                <input type="text" name="instagram_ads" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Create Google Business Page</label>
                                <input type="text" name="create_google_business_page" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Google Ads - PPC</label>
                                <input type="text" name="google_ads_ppc" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Email Blast</label>
                                <select name="emails_blast" class="form-control" required id="">
                                    <option value="-">-</option>
                                    <option value="just_listed">Just Listed</option>
                                    <option value="just_sold">Just Sold</option>
                                    <option value="under_contract">Under Contract</option>
                                    <option value="open_house">Open House</option>
                                    <option value="brokers_open">Broker's Open</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Door Hangers</label>
                                <select name="door_hangers" class="form-control" required id="">
                                    <option value="-">-</option>
                                    <option value="just_listed">Just Listed</option>
                                    <option value="just_sold">Just Sold</option>
                                    <option value="under_contract">Under Contract</option>
                                    <option value="open_house">Open House</option>
                                    <option value="brokers_open">Broker's Open</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Flyers</label>
                                <select name="flyers" class="form-control" required id="">
                                    <option value="-">-</option>
                                    <option value="just_listed">Just Listed</option>
                                    <option value="just_sold">Just Sold</option>
                                    <option value="under_contract">Under Contract</option>
                                    <option value="open_house">Open House</option>
                                    <option value="brokers_open">Broker's Open</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Social Media Posts</label>
                                <select name="social_media_posts" class="form-control" required id="">
                                    <option value="-">-</option>
                                    <option value="new_agent">New Agent</option>
                                    <option value="just_listed">Just Listed</option>
                                    <option value="just_sold">Just Sold</option>
                                    <option value="under_contract">Under Contract</option>
                                    <option value="open_house">Open House</option>
                                    <option value="brokers_open">Broker's Open</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Design Custom Signage</label>
                                <select name="design_custom_signage" class="form-control" required id="">
                                    <option value="-">-</option>
                                    <option value="for_sale_signs">For Sale Signs</option>
                                    <option value="open_house_signs">Open House Signs</option>
                                    <option value="etc">Etc</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Design Custom Business Cards</label>
                                <input type="text" name="design_custom_business_cards" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Design Custom Banner</label>
                                <select name="design_custom_banner" class="form-control" required id="">
                                    <option value="-">-</option>
                                    <option value="digital">Digital</option>
                                    <option value="print">Print</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Custom Email Signature</label>
                                <input type="text" name="custom_email_signature" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Mailers/EDDM - Postcard creation & community routes</label>
                                <input type="text" name="mailers_eddm_postcard_creation" class="form-control"
                                    required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Create RelaHQ Property Sites</label>
                                <input type="text" name="create_relahq_property_sites" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Create landing pages (requires kvCORE or other third-party
                                    provider)</label>
                                <input type="text" name="create_landing_pages_kvcore" class="form-control" required>
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
