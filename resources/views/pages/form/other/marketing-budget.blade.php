@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <form action="{{ route('general.email.post') }}" class="card form mb-5 p-3" method="POST">
                    @csrf
                    <div class="card-header">
                        <h1 class="text-center my-4">Quarterly Top Producer Marketing Budget</h1>
                        <h5 class="text-center">Congratulations on your success & thank you for all you do for LUXE!</h5>
                    </div>
                    <input type="hidden" name="form_title" value="Quarterly Top Producer Marketing Budget">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="name">Full name</label>
                                <input type="text" name="agent_full_name" class="form-control" required
                                    value="{{ auth()->user() ? auth()->user()->profile->fullname : '' }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="name">Phone</label>
                                <input type="text" name="phone" class="form-control"
                                    value="{{ auth()->user() ? auth()->user()->profile->phone : '' }}" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="name">Email</label>
                                <input type="text" name="agent_email" class="form-control"
                                    value="{{ auth()->user() ? auth()->user()->email : '' }}" required>
                            </div>
                            <div class="col-12">
                                <p class="font-weight-bold">Please choose from the items below. You can select one or more
                                    items.</p>
                                <div class="form-group">
                                    <div>
                                        <input type="checkbox" name="options[]"
                                            value="1 - Mailers/ Door Hangers/Flyers/Postcards from our approved vendor Planet Marketing(Print Marketing Store)"
                                            id="opt1">
                                        <label for="opt1" class="font-weight-normal">1 - Mailers/ Door
                                            Hangers/Flyers/Postcards from our approved vendor Planet Marketing(Print
                                            Marketing Store)</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="options[]"
                                            value="2 - For Sale Signs, Open House Signs, Open House Flags, Car Magnets from our approved vendor Planet Marketing(Print Marketing Store)"
                                            id="opt2">
                                        <label for="opt2" class="font-weight-normal">2 - For Sale Signs, Open House
                                            Signs, Open House Flags, Car Magnets from our approved vendor Planet
                                            Marketing(Print Marketing Store)</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="options[]"
                                            value="3 - Business cards from our approved vendor Planet Marketing(Print Marketing Store)"
                                            id="opt3">
                                        <label for="opt3" class="font-weight-normal">3 - Business cards from our
                                            approved vendor Planet Marketing(Print Marketing Store)</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="options[]" value="4 - Brand Package" id="opt4">
                                        <label for="opt4" class="font-weight-normal">4 - Brand Package</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="options[]"
                                            value="5 - Creation of Google Business/Facebook Business" id="opt5">
                                        <label for="opt5" class="font-weight-normal">5 - Creation of Google
                                            Business/Facebook Business</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="options[]"
                                            value="6 - Set Up Zillow & Realtor.com Profiles" id="opt6">
                                        <label for="opt6" class="font-weight-normal">6 - Set Up Zillow & Realtor.com
                                            Profiles</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="options[]" value="7 - Write Blog Post" id="opt7">
                                        <label for="opt7" class="font-weight-normal">7 - Write Blog Post</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="options[]" value="8 - Create A Landing Page"
                                            id="opt8">
                                        <label for="opt8" class="font-weight-normal">8 - Create A Landing Page</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="options[]"
                                            value="9 - Boosting Facebook Ads/Instagram Ads" id="opt9">
                                        <label for="opt9" class="font-weight-normal">9 - Boosting Facebook Ads/Instagram
                                            Ads</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="options[]" value="10 - Google Ads Set Up - PPC"
                                            id="opt10">
                                        <label for="opt10" class="font-weight-normal">10 - Google Ads Set Up -
                                            PPC</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="options[]" value="11 - Printed LUXE Guides"
                                            id="opt11">
                                        <label for="opt11" class="font-weight-normal">11 - Printed LUXE Guides</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="options[]"
                                            value="12 - Doorhanger w/ Business Card Slits" id="opt12">
                                        <label for="opt12" class="font-weight-normal">12 - Doorhanger w/ Business Card
                                            Slits</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="options[]"
                                            value="13 - Hard Cover Book - For Listing Presentations" id="opt13">
                                        <label for="opt13" class="font-weight-normal">13 - Hard Cover Book - For
                                            Listing Presentations</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="options[]" value="14 - LUXE Holiday Cards"
                                            id="opt14">
                                        <label for="opt14" class="font-weight-normal">14 - LUXE Holiday Cards</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="options[]" value="15 - Skip Trace" id="opt15">
                                        <label for="opt15" class="font-weight-normal">15 - Skip Trace</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="options[]" value="16 - MLS Input" id="opt16">
                                        <label for="opt16" class="font-weight-normal">16 - MLS Input</label>
                                    </div>
                                    {{-- <div>
                                        <input type="checkbox" name="options[]"
                                            value="1 - Mailers and/or Door Hangers from our approved vendors Planet Marketing or RSP Pro"
                                            id="opt1">
                                        <label for="opt1" class="font-weight-normal">1 - Mailers and/or Door Hangers
                                            from
                                            our approved vendors
                                            Planet
                                            Marketing or RSP Pro</label>
                                    </div> --}}
                                    {{-- <div>
                                        <input type="checkbox" name="options[]"
                                            value="2 - Gifts for past clients from Client Giant or Fountain Gifts"
                                            id="opt2">
                                        <label for="opt2" class="font-weight-normal">2 - Gifts for past clients from
                                            Client Giant or Fountain
                                            Gifts</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="options[]" value="3 - Property Boost in KV Core"
                                            id="opt3">
                                        <label for="opt3" class="font-weight-normal">3 - Property Boost in KV
                                            Core</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="options[]"
                                            value="4 - Any photoshoot for a property or personal from one of our photographers. You can do a neighborhood video for example."
                                            id="opt4">
                                        <label for="opt4" class="font-weight-normal">4 - Any photoshoot for a property
                                            or personal from one of our
                                            photographers. You can do a neighborhood video for example.</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="options[]"
                                            value="5 - Marketing Supplies - ex. Business cards, for sale signs, open house signs, banners"
                                            id="opt5">
                                        <label for="opt5" class="font-weight-normal">5 - Marketing Supplies - ex.
                                            Business cards, for sale signs,
                                            open
                                            house signs, banners</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="options[]" value="6 - Online Marketing ad spent"
                                            id="opt6">
                                        <label for="opt6" class="font-weight-normal">6 - Online Marketing ad
                                            spent</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="options[]"
                                            value="7 - If you have a different marketing idea, please send in full details for us to review & approve"
                                            id="opt7" onchange="displayTextarea()">
                                        <label for="opt7" class="font-weight-normal">7 - If you have a different
                                            marketing idea, please send in
                                            full
                                            details for us to review & approve</label>
                                    </div>
                                    <div class="col-md-6">
                                        <textarea name="special_request" id="textarea" rows="4" class="w-100 form-control"
                                            placeholder="Explain your special request here" style="display: none"></textarea>
                                    </div> --}}
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
    <script>
        function displayTextarea() {
            var checkbox = $('#opt7')
            if (checkbox.is(":checked")) {
                $('#textarea').css('display', 'block')
            } else {
                $('#textarea').css('display', 'none')
            }
        }
    </script>
@endsection
