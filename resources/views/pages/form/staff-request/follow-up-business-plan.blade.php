@extends('layouts.app', ['active' => 'Service&StaffRequests', 'subactive' => 'follow_business_plan'])
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <form action="{{route('general.email.post')}}" class="card form mb-5 p-3" method="POST">
                @csrf
                <div class="card-header">
                    <h1 class="text-center my-4 text-uppercase">Follow-Up Business Plan</h1>
                </div>
                <input type="hidden" name="form_title" value="Follow-Up Business Plan">
                <!-- <input type="hidden" name="to_email[]" value="email@luxeknows.com">
                <input type="hidden" name="to_email[]" value="operations@luxeknows.com">
                <input type="hidden" name="to_email[]" value="support@luxeknows.com"> -->
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name">Agent Name</label>
                            <input type="text" name="agent_full_name" class="form-control"
                                value="{{auth()->user()->profile->fullname}}" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Agent Phone Number</label>
                            <input type="text" name="agent_phone_number" class="form-control"
                                value="{{auth()->user()->profile->phone}}" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Agent Email</label>
                            <input type="text" name="agent_email" class="form-control" value="{{auth()->user()->email}}"
                                required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Did you call 50 CINC Leads?</label>
                            <select name="did_you_call_50_cinc_leads" id="" required class="form-control">
                                <option value="-">-</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Did you create a schedule?</label>
                            <select name="did_you_create_a_schedule" id="" required class="form-control">
                                <option value="-">-</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Did you find a networking opportunity?</label>
                            <select name="did_you_find_a_networking_opportunity" id="" required class="form-control">
                                <option value="-">-</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Have you decided on Farming?</label>
                            <select name="have_you_decided_on_farming" id="" required class="form-control">
                                <option value="-">-</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">If yes to the above, what area?</label>
                            <input type="text" name="if_yes_to_the_above_what_area" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Have you called everyone you know?</label>
                            <select name="have_you_called_everyone_you_know" id="" required class="form-control">
                                <option value="-">-</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Did you build an email list?</label>
                            <select name="did_you_build_an_email_list" id="" required class="form-control">
                                <option value="-">-</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Did you sign Up for OpCity, Zillow, Referrals?</label>
                            <select name="did_you_sign_up_for_opcity_zillow_referrals" id="" required
                                class="form-control">
                                <option value="-">-</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Did you watch Researching Your Market Video?</label>
                            <select name="did_you_watch_researching_your_market_video" id="" required
                                class="form-control">
                                <option value="-">-</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Did you watch Rent Linx Video and Start it?</label>
                            <select name="did_you_watch_rent_linx_video_and_start_it" id="" required
                                class="form-control">
                                <option value="-">-</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Have you done 2 Social Media posts?</label>
                            <select name="have_you_done_2_social_media_posts" id="" required class="form-control">
                                <option value="-">-</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Did you host an Open House?</label>
                            <select name="did_you_host_an_open_house" id="" required class="form-control">
                                <option value="-">-</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
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