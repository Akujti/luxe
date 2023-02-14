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
            /* align-items: center; */
            margin-bottom: 20px !important;
            margin: auto 0px auto 0px;
            min-height: 235px;
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

        .option .btn {
            background: #262626;
            border-radius: 15px;
            color: white !important;
            padding-left: 20px;
            padding-right: 20px;
            font-family: 'gothicbold';
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
                            {{-- <input type="hidden" name="price" id="option-price">
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
                            </div> --}}
                            @php
                                $brand_package = \App\Models\LuxeStore\LuxeStoreProduct::whereSlug('brand-package')->first();
                                $create_google_business_page = \App\Models\LuxeStore\LuxeStoreProduct::whereSlug('create-google-business-page')->first();
                                $create_facebook_business_page = \App\Models\LuxeStore\LuxeStoreProduct::whereSlug('create-facebook-business-page')->first();
                                $write_blog_post = \App\Models\LuxeStore\LuxeStoreProduct::whereSlug('write-blog-post')->first();
                                $mls_input = \App\Models\LuxeStore\LuxeStoreProduct::whereSlug('mls-input')->first();
                                $property_website = \App\Models\LuxeStore\LuxeStoreProduct::whereSlug('property-website')->first();
                                $create_landing_page = \App\Models\LuxeStore\LuxeStoreProduct::whereSlug('create-landing-page')->first();
                                $set_up_zillow = \App\Models\LuxeStore\LuxeStoreProduct::whereSlug('set-up-zillow-realtorcom-profiles')->first();
                                $custom_bio = \App\Models\LuxeStore\LuxeStoreProduct::whereSlug('custom-bio')->first();
                                
                                $boost_facebook_ads = \App\Models\LuxeStore\LuxeStoreProduct::whereSlug('boosting-facebook-ads')->first();
                                $boost_instagram_ads = \App\Models\LuxeStore\LuxeStoreProduct::whereSlug('boosting-instagram-ads')->first();
                                $google_ads_set_up = \App\Models\LuxeStore\LuxeStoreProduct::whereSlug('google-ads-set-up-ppc')->first();
                                
                                $email_blast = \App\Models\LuxeStore\LuxeStoreProduct::whereSlug('email-blast')->first();
                                $social_media_posts = \App\Models\LuxeStore\LuxeStoreProduct::whereSlug('social-media-posts')->first();
                                $custom_email_signature = \App\Models\LuxeStore\LuxeStoreProduct::whereSlug('custom-email-signature')->first();
                                
                                $door_hangers = \App\Models\LuxeStore\LuxeStoreProduct::whereSlug('door-hangers')->first();
                                $flyers = \App\Models\LuxeStore\LuxeStoreProduct::whereSlug('flyers')->first();
                                $design_custom_signage = \App\Models\LuxeStore\LuxeStoreProduct::whereSlug('design-custom-signage')->first();
                                $design_custom_business_cards = \App\Models\LuxeStore\LuxeStoreProduct::whereSlug('design-custom-business-cards')->first();
                                $design_custom_banner = \App\Models\LuxeStore\LuxeStoreProduct::whereSlug('design-custom-banner')->first();
                                $mailers = \App\Models\LuxeStore\LuxeStoreProduct::whereSlug('mailerseddm-postcard-creation-community-routes')->first();
                            @endphp
                            <div class="form-group col-12 form-options mb-0">
                                <h4>Custom & Copyright Services</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <x-marketing-menu-product :product="$brand_package" />
                                    </div>
                                    <div class="col-md-6">
                                        <x-marketing-menu-product :product="$create_google_business_page" />
                                    </div>
                                    <div class="col-md-6">
                                        <x-marketing-menu-product :product="$create_facebook_business_page" />
                                    </div>
                                    <div class="col-md-6">
                                        <x-marketing-menu-product :product="$write_blog_post" />
                                    </div>
                                    <div class="col-md-6">
                                        <x-marketing-menu-product :product="$mls_input" />
                                    </div>
                                    <div class="col-md-6">
                                        <x-marketing-menu-product :product="$property_website" />
                                    </div>
                                    <div class="col-md-6">
                                        <x-marketing-menu-product :product="$create_landing_page" />
                                    </div>
                                    <div class="col-md-6">
                                        <x-marketing-menu-product :product="$set_up_zillow" />
                                    </div>
                                    <div class="col-md-6">
                                        <x-marketing-menu-product :product="$custom_bio" />
                                    </div>
                                </div>
                                <h4>Paid Advertising</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <x-marketing-menu-product :product="$boost_facebook_ads" />
                                    </div>
                                    <div class="col-md-6">
                                        <x-marketing-menu-product :product="$boost_instagram_ads" />
                                    </div>
                                    <div class="col-md-6">
                                        <x-marketing-menu-product :product="$google_ads_set_up" />
                                    </div>
                                </div>
                                <h4>Digital Designs</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <x-marketing-menu-product :product="$email_blast" />
                                    </div>
                                    <div class="col-md-6">
                                        <x-marketing-menu-product :product="$social_media_posts" />
                                    </div>
                                    <div class="col-md-6">
                                        <x-marketing-menu-product :product="$custom_email_signature" />
                                    </div>
                                </div>
                                <h4>Print Designs</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <x-marketing-menu-product :product="$door_hangers" />
                                    </div>
                                    <div class="col-md-6">
                                        <x-marketing-menu-product :product="$flyers" />
                                    </div>
                                    <div class="col-md-6">
                                        <x-marketing-menu-product :product="$design_custom_signage" />
                                    </div>
                                    <div class="col-md-6">
                                        <x-marketing-menu-product :product="$design_custom_business_cards" />
                                    </div>
                                    <div class="col-md-6">
                                        <x-marketing-menu-product :product="$design_custom_banner" />
                                    </div>
                                    <div class="col-md-6">
                                        <x-marketing-menu-product :product="$mailers" />
                                    </div>
                                </div>
                                {{-- <hr> --}}
                                {{-- <div class="form-group">
                                    <label for="files">Notes</label>
                                    <textarea id="notes-area" class="w-100 form-control" rows="3" disabled name="notes"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="files">Upload Files</label>
                                    <input id="file-upload-area" type="file" class="form-control-file form-control p-1"
                                        id="files" name="files[]" multiple disabled>
                                </div> --}}
                            </div>
                            {{-- <div class="form-group form-footer col-12">
                                <button type="button" class="btn-luxe w-100" data-toggle="modal"
                                    data-target="#exampleModal">Request</button>
                            </div> --}}
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
                                    <div id="email-blast-questions" class="d-none">
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
