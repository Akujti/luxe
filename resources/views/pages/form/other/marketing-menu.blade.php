@extends('layouts.app', ['active' => 'marketing_branding', 'subactive' => 'marketing_menu'])
@section('content')
    <style>
        h4 {
            margin-bottom: 20px;
        }

        .form label {
            font-weight: 400 !important;
        }

        .form .option {
            border: 1px solid #d5d5d5;
            border-radius: 5px;
            padding: 10px;
            align-items: center;
            margin-bottom: 20px;
        }

        .form .option-title {
            font-size: 22px;
        }

        .form .option-price {
            font-size: 24px;
        }

        .form-options label {
            display: block !important;
        }

        .form-check-input {
            margin-top: 1.35rem;
        }

        input[type=radio] {
            accent-color: #262626;
        }
    </style>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <form action="{{ route('marketing.menu') }}" class="card form p-3" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-header">
                        <h1 class="text-center my-4">MARKETING MENU</h1>
                        <h5 class="text-center">Please select one item below for our Marketing Coordinators to
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
                            <div class="form-group col-12 form-options">
                                <h4>Custom & Copyright Services</h4>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="option" id="opt1"
                                        data-price="150" value="Brand Package">
                                    <label class="form-check-label" for="opt1">
                                        <div class="row option">
                                            <div class="col-md-5 option-title">
                                                Brand Package
                                            </div>
                                            <div class="col-md-5 option-desc">
                                                Includes custom logo, letterhead, & 4 Instagram Templates
                                            </div>
                                            <div class="col-md-2 option-price">
                                                $150
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="option" id="opt2"
                                        data-price="35" value="Create Google Business Page">
                                    <label class="form-check-label" for="opt2">
                                        <div class="row option">
                                            <div class="col-md-5 option-title">
                                                Create Google Business Page
                                            </div>
                                            <div class="col-md-5 option-desc">

                                            </div>
                                            <div class="col-md-2 option-price">
                                                $35
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="option" id="opt3"
                                        data-price="35" value="Create Facebook Business Page">
                                    <label class="form-check-label" for="opt3">
                                        <div class="row option">
                                            <div class="col-md-5 option-title">
                                                Create Facebook Business Page
                                            </div>
                                            <div class="col-md-5 option-desc">

                                            </div>
                                            <div class="col-md-2 option-price">
                                                $35
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="option" id="opt4"
                                        data-price="35" value="Write Blog Post">
                                    <label class="form-check-label" for="opt4">
                                        <div class="row option">
                                            <div class="col-md-5 option-title">
                                                Write Blog Post
                                            </div>
                                            <div class="col-md-5 option-desc">

                                            </div>
                                            <div class="col-md-2 option-price">
                                                $35
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="option" id="opt5"
                                        data-price="100" value="MLS Input">
                                    <label class="form-check-label" for="opt5">
                                        <div class="row option">
                                            <div class="col-md-5 option-title">
                                                MLS Input
                                            </div>
                                            <div class="col-md-5 option-desc">
                                                With copyright description
                                            </div>
                                            <div class="col-md-2 option-price">
                                                $100
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="option"
                                        id="opt6" data-price="0" value="Create RelaHQ Property Sites">
                                    <label class="form-check-label" for="opt3">
                                        <div class="row option">
                                            <div class="col-md-5 option-title">
                                                Create RelaHQ Property Sites
                                            </div>
                                            <div class="col-md-5 option-desc">

                                            </div>
                                            <div class="col-md-2 option-price">

                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="option"
                                        id="opt7" data-price="50" value="Create Landing Page">
                                    <label class="form-check-label" for="opt3">
                                        <div class="row option">
                                            <div class="col-md-5 option-title">
                                                Create Landing Page
                                            </div>
                                            <div class="col-md-5 option-desc">
                                                (Requires kvCORE or other third-party provider)
                                            </div>
                                            <div class="col-md-2 option-price">
                                                $50
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="option"
                                        id="opt8" data-price="50" value="Set Up Zillow & Realtor.com Profiles">
                                    <label class="form-check-label" for="opt3">
                                        <div class="row option">
                                            <div class="col-md-5 option-title">
                                                Set Up Zillow & Realtor.com Profiles
                                            </div>
                                            <div class="col-md-5 option-desc">

                                            </div>
                                            <div class="col-md-2 option-price">
                                                $50
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="option"
                                        id="opt9" data-price="0" value="Custom Bio">
                                    <label class="form-check-label" for="opt3">
                                        <div class="row option">
                                            <div class="col-md-5 option-title">
                                                Custom Bio
                                            </div>
                                            <div class="col-md-5 option-desc">
                                            </div>
                                            <div class="col-md-2 option-price">
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <h4>Paid Advertising</h4>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="option"
                                        id="opt10" data-price="199" value="Boosting Facebook Ads">
                                    <label class="form-check-label" for="opt10">
                                        <div class="row option">
                                            <div class="col-md-5 option-title">
                                                Boosting Facebook Ads
                                            </div>
                                            <div class="col-md-5 option-desc">
                                            </div>
                                            <div class="col-md-2 option-price">
                                                $199
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="option"
                                        id="opt11" data-price="199" value="Boosting Instagram Ads">
                                    <label class="form-check-label" for="opt11">
                                        <div class="row option">
                                            <div class="col-md-5 option-title">
                                                Boosting Instagram Ads
                                            </div>
                                            <div class="col-md-5 option-desc">
                                            </div>
                                            <div class="col-md-2 option-price">
                                                $199
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="option"
                                        id="opt12" data-price="199" value="Google Ads Set Up - PPC">
                                    <label class="form-check-label" for="opt12">
                                        <div class="row option">
                                            <div class="col-md-5 option-title">
                                                Google Ads Set Up - PPC
                                            </div>
                                            <div class="col-md-5 option-desc">
                                                On Existing Website or Landing Page
                                            </div>
                                            <div class="col-md-2 option-price">
                                                $199
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <h4>Digital Designs</h4>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="option"
                                        id="opt13" data-price="0" value="Email Blast">
                                    <label class="form-check-label" for="opt13">
                                        <div class="row option">
                                            <div class="col-md-5 option-title">
                                                Email Blast
                                            </div>
                                            <div class="col-md-5 option-desc">
                                                (just listed, just sold, under contract, open house, broker's open)
                                            </div>
                                            <div class="col-md-2 option-price">
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="option"
                                        id="opt14" data-price="0" value="Social Media Posts">
                                    <label class="form-check-label" for="opt14">
                                        <div class="row option">
                                            <div class="col-md-5 option-title">
                                                Social Media Posts
                                            </div>
                                            <div class="col-md-5 option-desc">
                                                (new agent, just listed, just sold, under contract, open house, broker's
                                                open)
                                            </div>
                                            <div class="col-md-2 option-price">
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="option"
                                        id="opt15" data-price="0" value="Custom Email Signature">
                                    <label class="form-check-label" for="opt15">
                                        <div class="row option">
                                            <div class="col-md-5 option-title">
                                                Custom Email Signature
                                            </div>
                                            <div class="col-md-5 option-desc">
                                            </div>
                                            <div class="col-md-2 option-price">
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <h4>Print Designs</h4>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="option"
                                        id="opt16" data-price="0" value="Door Hangers">
                                    <label class="form-check-label" for="opt16">
                                        <div class="row option">
                                            <div class="col-md-5 option-title">
                                                Door Hangers
                                            </div>
                                            <div class="col-md-5 option-desc">
                                                (just listed, just sold, under contract, open house, broker's open)
                                            </div>
                                            <div class="col-md-2 option-price">
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="option"
                                        id="opt17" data-price="0" value="Flyers">
                                    <label class="form-check-label" for="opt17">
                                        <div class="row option">
                                            <div class="col-md-5 option-title">
                                                Flyers
                                            </div>
                                            <div class="col-md-5 option-desc">
                                                (just listed, just sold, under contract, open house, broker's open)
                                            </div>
                                            <div class="col-md-2 option-price">
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="option"
                                        id="opt18" data-price="0" value="Design Custom Signage">
                                    <label class="form-check-label" for="opt18">
                                        <div class="row option">
                                            <div class="col-md-5 option-title">
                                                Design Custom Signage
                                            </div>
                                            <div class="col-md-5 option-desc">
                                                (for sale signs, open house signs, etc)
                                            </div>
                                            <div class="col-md-2 option-price">
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="option"
                                        id="opt19" data-price="0" value="Design Custom Business Cards">
                                    <label class="form-check-label" for="opt19">
                                        <div class="row option">
                                            <div class="col-md-5 option-title">
                                                Design Custom Business Cards
                                            </div>
                                            <div class="col-md-5 option-desc">
                                            </div>
                                            <div class="col-md-2 option-price">
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="option"
                                        id="opt20" data-price="0" value="Design Custom Banner">
                                    <label class="form-check-label" for="opt20">
                                        <div class="row option">
                                            <div class="col-md-5 option-title">
                                                Design Custom Banner
                                            </div>
                                            <div class="col-md-5 option-desc">
                                                (digital or print)
                                            </div>
                                            <div class="col-md-2 option-price">
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="option"
                                        id="opt21" data-price="0"
                                        value="Mailers/EDDM - Postcard creation & community routes">
                                    <label class="form-check-label" for="opt21">
                                        <div class="row option">
                                            <div class="col-md-5 option-title">
                                                Mailers/EDDM - Postcard creation & community routes
                                            </div>
                                            <div class="col-md-5 option-desc">
                                            </div>
                                            <div class="col-md-2 option-price">
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label for="files">Notes</label>
                                    <textarea id="notes-area" class="w-100 form-control" rows="3" disabled name="notes"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="files">Upload Files</label>
                                    <input id="file-upload-area" type="file"
                                        class="form-control-file form-control p-1" id="files" name="files[]" multiple
                                        disabled>
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
        $('input[type=radio][name=option]').change(function() {
            console.log(this);
            $("#file-upload-area").attr("disabled", false)
            $("#notes-area").attr("disabled", false)
            var price = this.getAttribute('data-price');
            console.log(price);
        });
    </script>
@endsection
