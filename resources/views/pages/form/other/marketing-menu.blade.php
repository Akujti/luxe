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
            margin-bottom: 20px !important;
            margin: auto 0px auto 0px;
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
            margin-top: 0.45rem;
        }

        input[type=radio] {
            accent-color: #262626;
        }

        .form .btn-luxe {
            width: auto !important;
        }

        .option img {
            height: 200px;
            object-fit: cover;
            outline: 1px solid #d6d6d6;
        }
    </style>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <form id="form" action="{{ route('marketing.menu') }}" class="card form p-3 mb-5" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="card-header">
                        <h1 class="text-center my-4">MARKETING MENU</h1>
                        <h5 class="text-center">Please select one item below for our Marketing Coordinators to
                            prepare.</h5>
                    </div>
                    <input type="hidden" name="form_title" value="MARKETING MENU">
                    <div class="card-body">
                        <div class="row">
                            <input type="hidden" name="price" id="option-price">
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
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="option row">
                                            <div class="col-md-9 pl-0">
                                                <div class="option-title">
                                                    Brand Package
                                                </div>
                                                <div class="option-desc">
                                                    Includes custom logo, letterhead, & 4 Instagram Templates
                                                </div>
                                                <div class="option-price">
                                                    $150
                                                </div>

                                                <div class="mt-4 form-check">
                                                    <input class="form-check-input" type="radio" required name="option"
                                                        id="opt1" data-price="150" value="Brand Package">
                                                    <label class="form-check-label" for="opt1">
                                                        Click to Select
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 p-0">
                                                <img src="/images/marketing-menu/brand-package.jpg" alt=""
                                                    class="w-100 rounded" style=""
                                                    onclick="showModal('/images/marketing-menu/brand-package.jpg')">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="option row">
                                            <div class="col-md-9 pl-0">
                                                <div class="option-title">
                                                    Create Google Business Page
                                                </div>
                                                <div class="option-desc">
                                                    <br>
                                                    <br>
                                                </div>
                                                <div class="option-price">
                                                    $35
                                                </div>

                                                <div class="mt-4 form-check">
                                                    <input class="form-check-input" type="radio" required name="option"
                                                        id="opt2" data-price="35" value="Create Google Business Page">
                                                    <label class="form-check-label" for="opt2">
                                                        Click to Select
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 p-0">
                                                <img src="/images/marketing-menu/google-business-page.jpg" alt=""
                                                    class="w-100 rounded" style="height: 200px;object-fit:cover;"
                                                    onclick="showModal('/images/marketing-menu/google-business-page.jpg')">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="option row">
                                            <div class="col-md-9 pl-0">
                                                <div class="option-title">
                                                    Create Facebook Business Page
                                                </div>
                                                <div class="option-desc">
                                                    <br>
                                                    <br>
                                                </div>
                                                <div class="option-price">
                                                    $35
                                                </div>

                                                <div class="mt-4 form-check">
                                                    <input class="form-check-input" type="radio" required name="option"
                                                        id="opt3" data-price="35"
                                                        value="Create Facebook Business Page">
                                                    <label class="form-check-label" for="opt3">
                                                        Click to Select
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 p-0">
                                                <img src="/images/marketing-menu/facebook-business-page.jpg" alt=""
                                                    class="w-100 rounded"
                                                    onclick="showModal('/images/marketing-menu/facebook-business-page.jpg')">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="option row">
                                            <div class="col-md-9 pl-0">
                                                <div class="option-title">
                                                    Write Blog Post
                                                </div>
                                                <div class="option-desc">
                                                    <br>
                                                    <br>
                                                </div>
                                                <div class="option-price">
                                                    $35
                                                </div>

                                                <div class="mt-4 form-check">
                                                    <input class="form-check-input" type="radio" required
                                                        name="option" id="opt4" data-price="35"
                                                        value="Write Blog Post">
                                                    <label class="form-check-label" for="opt4">
                                                        Click to Select
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 p-0">
                                                <img src="/images/marketing-menu/write-blog-post.jpg" alt=""
                                                    class="w-100 rounded"
                                                    onclick="showModal('/images/marketing-menu/write-blog-post.jpg')">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="option row">
                                            <div class="col-md-9 pl-0">
                                                <div class="option-title">
                                                    MLS Input
                                                </div>
                                                <div class="option-desc">
                                                    With copyright description
                                                    <br>
                                                </div>
                                                <div class="option-price">
                                                    $100
                                                </div>

                                                <div class="mt-4 form-check">
                                                    <input class="form-check-input" type="radio" required
                                                        name="option" id="opt5" data-price="100"
                                                        value="MLS Input">
                                                    <label class="form-check-label" for="opt5">
                                                        Click to Select
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 p-0">
                                                <img src="/images/marketing-menu/mls-input.jpg" alt=""
                                                    class="w-100 rounded"
                                                    onclick="showModal('/images/marketing-menu/mls-input.jpg')">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="option row">
                                            <div class="col-md-9 pl-0">
                                                <div class="option-title">
                                                    Property Website
                                                </div>
                                                <div class="option-desc">
                                                    <br>
                                                    <br>
                                                    <br>
                                                </div>
                                                <div class="option-price">

                                                </div>

                                                <div class="mt-4 form-check">
                                                    <input class="form-check-input" type="radio" required
                                                        name="option" id="opt6" data-price="0"
                                                        value="Property Website">
                                                    <label class="form-check-label" for="opt6">
                                                        Click to Select
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 p-0">
                                                <img src="/images/marketing-menu/property-website.jpg" alt=""
                                                    class="w-100 rounded"
                                                    onclick="showModal('/images/marketing-menu/property-website.jpg')">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="option row">
                                            <div class="col-md-9 pl-0">
                                                <div class="option-title">
                                                    Create Landing Page
                                                </div>
                                                <div class="option-desc">
                                                    (Requires kvCORE or other third-party provider)
                                                </div>
                                                <div class="option-price">
                                                    $50
                                                </div>

                                                <div class="mt-4 form-check">
                                                    <input class="form-check-input" type="radio" required
                                                        name="option" id="opt7" data-price="50"
                                                        value="Create Landing Page">
                                                    <label class="form-check-label" for="opt7">
                                                        Click to Select
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 p-0">
                                                <img src="/images/marketing-menu/create-landing-page.jpg" alt=""
                                                    class="w-100 rounded"
                                                    onclick="showModal('/images/marketing-menu/create-landing-page.jpg')">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="option row">
                                            <div class="col-md-9 pl-0">
                                                <div class="option-title">
                                                    Set Up Zillow & Realtor.com Profiles
                                                </div>
                                                <div class="option-desc">
                                                    <br>
                                                </div>
                                                <div class="option-price">
                                                    $50
                                                </div>

                                                <div class="mt-4 form-check">
                                                    <input class="form-check-input" type="radio" required
                                                        name="option" id="opt8" data-price="50"
                                                        value="Set Up Zillow & Realtor.com Profiles">
                                                    <label class="form-check-label" for="opt7">
                                                        Click to Select
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 p-0">
                                                <img src="/images/marketing-menu/set-up-realtor-profile.jpg"
                                                    alt="" class="w-100 rounded"
                                                    onclick="showModal('/images/marketing-menu/set-up-realtor-profile.jpg')">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="option row">
                                            <div class="col-md-9 pl-0">
                                                <div class="option-title">
                                                    Custom Bio
                                                </div>
                                                <div class="option-desc">
                                                    <br><br>
                                                </div>
                                                <div class="option-price">
                                                </div>

                                                <div class="mt-4 form-check">
                                                    <input class="form-check-input" type="radio" required
                                                        name="option" id="opt9" data-price="0" value="Custom Bio">
                                                    <label class="form-check-label" for="opt9">
                                                        Click to Select
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 p-0">
                                                <img src="/images/marketing-menu/custom-bio.jpg" alt=""
                                                    class="w-100 rounded"
                                                    onclick="showModal('/images/marketing-menu/custom-bio.jpg')">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h4>Paid Advertising</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="option row">
                                            <div class="col-md-9 pl-0">
                                                <div class="option-title">
                                                    Boosting Facebook Ads
                                                </div>
                                                <div class="option-desc">
                                                    <br>
                                                </div>
                                                <div class="option-price">
                                                    $199
                                                </div>

                                                <div class="mt-4 form-check">
                                                    <input class="form-check-input" type="radio" required
                                                        name="option" id="opt10" data-price="199"
                                                        value="Boosting Facebook Ads">
                                                    <label class="form-check-label" for="opt10">
                                                        Click to Select
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 p-0">
                                                <img src="/images/marketing-menu/boost-facebook.jpg" alt=""
                                                    class="w-100 rounded" style=""
                                                    onclick="showModal('/images/marketing-menu/boost-facebook.jpg')">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="option row">
                                            <div class="col-md-9 pl-0">
                                                <div class="option-title">
                                                    Boosting Instagram Ads
                                                </div>
                                                <div class="option-desc">
                                                    <br>
                                                </div>
                                                <div class="option-price">
                                                    $199
                                                </div>
                                                <div class="mt-4 form-check">
                                                    <input class="form-check-input" type="radio" required
                                                        name="option" id="opt11" data-price="199"
                                                        value="Boosting Instagram Ads">
                                                    <label class="form-check-label" for="opt11">
                                                        Click to Select
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 p-0">
                                                <img src="/images/marketing-menu/boost-instagram.jpg" alt=""
                                                    class="w-100 rounded" style=""
                                                    onclick="showModal('/images/marketing-menu/boost-instagram.jpg')">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="option row">
                                            <div class="col-md-9 pl-0">
                                                <div class="option-title">
                                                    Google Ads Set Up - PPC
                                                </div>
                                                <div class="option-desc">
                                                    On Existing Website or Landing Page
                                                </div>
                                                <div class="option-price">
                                                    $199
                                                </div>
                                                <div class="mt-4 form-check">
                                                    <input class="form-check-input" type="radio" required
                                                        name="option" id="opt12" data-price="199"
                                                        value="Google Ads Set Up - PPC">
                                                    <label class="form-check-label" for="opt12">
                                                        Click to Select
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 p-0">
                                                <img src="/images/marketing-menu/google-adssetup.jpg" alt=""
                                                    class="w-100 rounded"
                                                    onclick="showModal('/images/marketing-menu/google-adssetup.jpg')">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h4>Digital Designs</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="option row">
                                            <div class="col-md-9 pl-0">
                                                <div class="option-title">
                                                    Email Blast
                                                </div>
                                                <div class="option-desc">
                                                    (just listed, just sold, under contract, open house, broker's open)
                                                </div>
                                                <div class="option-price">
                                                    <br>
                                                </div>

                                                <div class="mt-4 form-check">
                                                    <input class="form-check-input" type="radio" required
                                                        name="option" id="opt14" data-price="0"
                                                        value="Email Blast">
                                                    <label class="form-check-label" for="opt14">
                                                        Click to Select
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 p-0">
                                                <img src="/images/marketing-menu/email-blast.jpg" alt=""
                                                    class="w-100 rounded" style=""
                                                    onclick="showModal('/images/marketing-menu/email-blast.jpg')">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="option row">
                                            <div class="col-md-9 pl-0">
                                                <div class="option-title">
                                                    Social Media Posts
                                                </div>
                                                <div class="option-desc">
                                                    (new agent, just listed, just sold, under contract, open house, broker's
                                                    open)</div>
                                                <div class="option-price">
                                                    <br>
                                                </div>

                                                <div class="mt-4 form-check">
                                                    <input class="form-check-input" type="radio" required
                                                        name="option" id="opt14" data-price="0"
                                                        value="Social Media Posts">
                                                    <label class="form-check-label" for="opt14">
                                                        Click to Select
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 p-0">
                                                <img src="/images/marketing-menu/social-media.jpg" alt=""
                                                    class="w-100 rounded" style=""
                                                    onclick="showModal('/images/marketing-menu/social-media.jpg')">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="option row">
                                            <div class="col-md-9 pl-0">
                                                <div class="option-title">
                                                    Custom Email Signature
                                                </div>
                                                <div class="option-desc">
                                                    <br>
                                                </div>
                                                <div class="option-price">
                                                    <br>
                                                </div>

                                                <div class="mt-4 form-check">
                                                    <input class="form-check-input" type="radio" required
                                                        name="option" id="opt15" data-price="0"
                                                        value="Custom Email Signature">
                                                    <label class="form-check-label" for="opt15">
                                                        Click to Select
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 p-0">
                                                <img src="/images/marketing-menu/custom-email-signature.jpg"
                                                    alt="" class="w-100 rounded" style=""
                                                    onclick="showModal('/images/marketing-menu/custom-email-signature.jpg')">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h4>Print Designs</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="option row">
                                            <div class="col-md-9 pl-0">
                                                <div class="option-title">
                                                    Door Hangers
                                                </div>
                                                <div class="option-desc">
                                                    (just listed, just sold, under contract, open house, broker's open)
                                                </div>
                                                <div class="option-price">
                                                    <br>
                                                </div>

                                                <div class="mt-4 form-check">
                                                    <input class="form-check-input" type="radio" required
                                                        name="option" id="opt16" data-price="0"
                                                        value="Door Hangers">
                                                    <label class="form-check-label" for="opt16">
                                                        Click to Select
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 p-0">
                                                <img src="/images/marketing-menu/door-hangers.jpg" alt=""
                                                    class="w-100 rounded" style=""
                                                    onclick="showModal('/images/marketing-menu/door-hangers.jpg')">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="option row">
                                            <div class="col-md-9 pl-0">
                                                <div class="option-title">
                                                    Flyers
                                                </div>
                                                <div class="option-desc">
                                                    (just listed, just sold, under contract, open house, broker's open)
                                                </div>
                                                <div class="option-price">
                                                    <br>
                                                </div>

                                                <div class="mt-4 form-check">
                                                    <input class="form-check-input" type="radio" required
                                                        name="option" id="opt18" data-price="0" value="Flyers">
                                                    <label class="form-check-label" for="opt16">
                                                        Click to Select
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 p-0">
                                                <img src="/images/marketing-menu/flyers.jpg" alt=""
                                                    class="w-100 rounded" style=""
                                                    onclick="showModal('/images/marketing-menu/flyers.jpg')">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="option row">
                                            <div class="col-md-9 pl-0">
                                                <div class="option-title">
                                                    Design Custom Signage
                                                </div>
                                                <div class="option-desc">
                                                    (for sale signs, open house signs, etc)
                                                </div>
                                                <div class="option-price">
                                                    <br><br>
                                                </div>

                                                <div class="mt-4 form-check">
                                                    <input class="form-check-input" type="radio" required
                                                        name="option" id="opt18" data-price="0"
                                                        value="Design Custom Signage">
                                                    <label class="form-check-label" for="opt18">
                                                        Click to Select
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 p-0">
                                                <img src="/images/marketing-menu/design-custom-signage.jpg" alt=""
                                                    class="w-100 rounded" style=""
                                                    onclick="showModal('/images/marketing-menu/design-custom-signage.jpg')">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="option row">
                                            <div class="col-md-9 pl-0">
                                                <div class="option-title">
                                                    Design Custom Business Cards
                                                </div>
                                                <div class="option-desc">
                                                    <br>
                                                </div>
                                                <div class="option-price">
                                                    <br><br>
                                                </div>

                                                <div class="mt-4 form-check">
                                                    <input class="form-check-input" type="radio" required
                                                        name="option" id="opt20" data-price="0"
                                                        value="Design Custom Business Cards">
                                                    <label class="form-check-label" for="opt20">
                                                        Click to Select
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 p-0">
                                                <img src="/images/marketing-menu/business-cards.jpg" alt=""
                                                    class="w-100 rounded" style=""
                                                    onclick="showModal('/images/marketing-menu/business-cards.jpg')">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="option row">
                                            <div class="col-md-9 pl-0">
                                                <div class="option-title">
                                                    Design Custom Banner
                                                </div>
                                                <div class="option-desc">
                                                    (digital or print)
                                                </div>
                                                <div class="option-price">
                                                    <br><br>
                                                </div>
                                                <div class="mt-4 form-check">
                                                    <input class="form-check-input" type="radio" required
                                                        name="option" id="opt20" data-price="0"
                                                        value="Design Custom Banner">
                                                    <label class="form-check-label" for="opt20">
                                                        Click to Select
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 p-0">
                                                <img src="/images/marketing-menu/custom-banner.jpg" alt=""
                                                    class="w-100 rounded" style=""
                                                    onclick="showModal('/images/marketing-menu/custom-banner.jpg')">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="option row">
                                            <div class="col-md-9 pl-0">
                                                <div class="option-title">
                                                    Mailers/EDDM - Postcard creation & community routes
                                                </div>
                                                <div class="option-desc">
                                                    <br>
                                                </div>
                                                <div class="option-price">
                                                    <br>
                                                </div>
                                                <div class="mt-4 form-check">
                                                    <input class="form-check-input" type="radio" required
                                                        name="option" id="opt21" data-price="0"
                                                        value="Mailers/EDDM - Postcard creation & community routes">
                                                    <label class="form-check-label" for="opt20">
                                                        Click to Select
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 p-0">
                                                <img src="/images/marketing-menu/mailers.jpg" alt=""
                                                    class="w-100 rounded" style=""
                                                    onclick="showModal('/images/marketing-menu/mailers.jpg')">
                                            </div>
                                        </div>
                                    </div>
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
                                <button type="button" class="btn-luxe w-100" data-toggle="modal"
                                    data-target="#exampleModal">Request</button>
                            </div>
                        </div>
                    </div>


                    <div id="exampleModal" class="modal fade modal-new" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Marketing Menu</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p id="modal-question">Are you sure you want to submit this form?</p>
                                    <div id="email-blast-questions">
                                        <div class="form-group">
                                            <label for="">What is the purpose of this email blast?</label>
                                            <input type="text" class="form-control" name="purpose_of_email_blast">
                                        </div>
                                        <div class="form-group">
                                            <label for="">What type of color palette would you like for this
                                                email blast?</label>
                                            <input type="text" class="form-control"
                                                name="what_type_of_color_palette_would_you_like_for_this_email_blast">
                                        </div>
                                        <div class="form-group">
                                            <label for="">About clickable bottoms: would you like to
                                                redirect to website or personal acc?</label>
                                            <input type="text" class="form-control"
                                                name="about_clickable_bottoms_would_you_like_to_redirect_to_website_or_personal_acc">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Would you like the contacts icons to redirect to
                                                your website / social media?</label>
                                            <input type="text" class="form-control"
                                                name="would_you_like_the_contacts_icons_to_redirect_to_your_website_or_social_media">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Would you like to add features / highlights for
                                                the property to the email blast?</label>
                                            <input type="text" class="form-control"
                                                name="would_you_like_to_add_features_or_highlights_for_the_property_to_the_email_blast">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Do you have pictures for the property?
                                                (photoshoot, if not we can offer photo / video services)</label>
                                            <input type="text" class="form-control"
                                                name="do_you_have_pictures_for_the_property">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Would you like the email blast to be rebranded to
                                                your name / add your custom contact information?</label>
                                            <input type="text" class="form-control"
                                                name="would_you_like_the_email_blast_to_be_rebranded_to_your_name_or_add_your_custom_contact_information">
                                        </div>
                                        <div class="form-group">
                                            <label for="">What would you like to add to the email blast -
                                                specifically?</label>
                                            <input type="text" class="form-control"
                                                name="what_would_you_like_to_add_to_the_email_blast_specifically">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer pt-0 d-flex justify-content-center">
                                    <input id="submit-btn" type="submit" class="btn btn-luxe w-100"
                                        style="height:auto !important;width:100% !important;" value="SUBMIT">
                                    <div id="paypal-button-container" class="d-none"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div id="imgModal" class="create-event modal fade modal-new" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Image</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="text-center">
                            <img id="modalImage" src="" alt="" class="w-100 mb-5">
                        </div>
                        {{-- <p>Here are our services</p>
                        <ul>
                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                            <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco</li>
                            <li>Duis aute irure dolor in reprehenderit in voluptate velit esse</li>
                            <li>Excepteur sint occaecat cupidatat non proident, sunt in culpa</li>
                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                        </ul> --}}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                    </form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>
    </div>
    <script>
        function showModal(url) {
            $("#modalImage").attr("src", url);
            $("#imgModal").modal("show");
        }

        $('input[type=radio][name=option]').change(function(event) {
            $("#file-upload-area").attr("disabled", false)
            $("#notes-area").attr("disabled", false)
            var price = this.getAttribute('data-price');
            $('#option-price').val(price)
            if (price > 0) {
                $('#paypal-button-container').removeClass('d-none')
                $('#submit-btn').addClass('d-none')
            } else {
                $('#paypal-button-container').addClass('d-none')
                $('#submit-btn').removeClass('d-none')
            }

            if ($(this).val() === 'Email Blast') {
                $('#email-blast-questions').removeClass('d-none')
                $('#modal-question').addClass('d-none')
            } else {
                $('#modal-question').removeClass('d-none')
                $('#email-blast-questions').addClass('d-none')
            }
        });
    </script>
    <script
        src="https://www.paypal.com/sdk/js?client-id={{ config('app.paypal_client_id') }}&disable-funding=credit&components=buttons">
    </script>
    <script>
        paypal.Buttons({
            style: {
                layout: 'horizontal',
                size: 'small',
                label: 'pay',
                height: 40,
                tagline: 'false',
                color: 'black'
            },
            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: $('#option-price').val()
                        }
                    }]
                });
            },
            onInit: function(data, actions) {
                actions.disable();
                document.querySelectorAll('input, textarea').forEach(item => {
                    item.addEventListener('input', () => {
                        if (document.getElementById("form").checkValidity()) {
                            actions.enable();
                        } else {
                            actions.disable();
                        }
                    });
                });
            },
            onClick: function() {
                document.getElementById("form").reportValidity()
            },
            onApprove: function(data, actions) {
                return actions.order.capture().then(function(details) {
                    console.log(details);
                    document.getElementById("form").submit();
                });
            }
        }).render('#paypal-button-container');
    </script>
@endsection
