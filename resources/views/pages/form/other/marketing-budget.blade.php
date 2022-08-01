@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <form action="{{ route('general.email.post') }}" class="card form mb-5 p-3" method="POST">
                    @csrf
                    <div class="card-header">
                        <h1 class="text-center my-4">LUXE MARKETING BUDGET</h1>
                    </div>
                    <input type="hidden" name="form_title" value="LUXE Marketing Budget">
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
                                            value="1 - Mailers and/or Door Hangers from our approved vendors Planet Marketing or RSP Pro"
                                            id="opt1">
                                        <label for="opt1" class="font-weight-normal">1 - Mailers and/or Door Hangers
                                            from
                                            our approved vendors
                                            Planet
                                            Marketing or RSP Pro</label>
                                    </div>
                                    <div>

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
                                        <input type="checkbox" name="options[]"
                                            value="6 - If you have a different marketing idea, please send in full details for us to review & approve"
                                            id="opt6" onchange="displayTextarea()">
                                        <label for="opt6" class="font-weight-normal">6 - If you have a different
                                            marketing idea, please send in
                                            full
                                            details for us to review & approve</label>
                                    </div>
                                    <div class="col-md-6">
                                        <textarea name="special_request" id="textarea" rows="4" class="w-100 form-control"
                                            placeholder="Explain your special request here" style="display: none"></textarea>
                                    </div>
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
            var checkbox = $('#opt6')
            if (checkbox.is(":checked")) {
                $('#textarea').css('display', 'block')
            } else {
                $('#textarea').css('display', 'none')
            }
        }
    </script>
@endsection
