@extends('layouts.app')

@section('css')
<style>
    .box-item {
        background-color: #F7F7F7;
        text-align: center;
        height: 311px;
        margin-bottom: 26px;
        border-radius: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
    }

    .box-item img {
        object-fit: cover;
        width: 100%;
    }

    .box-item .icon {
        width: 70px;
        height: 70px;
        object-fit: cover;
    }

    .box-item p {
        font-size: 25px;
        font-family: 'gothicregular';
    }

    .container-fluid {
        margin-top: 60px;
        padding-left: 60px;
        padding-right: 60px;
    }

    @media screen and (max-width: 500px) {
        .box-item p {
            font-size: 18px;
        }
    }

    @media (min-width: 768px) and (max-width: 980px) {
        .box-item p {
            font-size: 20px;
        }
    }

    .title h1 {
        font-family: 'gothicbold';
        text-align: center;
    }
</style>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row box-items">
        @if(!isset($_GET['dir']))
        <div class="col-12 title mb-3">
            <h1>Welcome to LUXE</h1>
        </div>
        @endif
        @if(!isset($_GET['dir']))
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location='{{ url("/home?dir=marketing_branding") }}'">
                <div>
                    <img class="icon" src="/images/index-page/services_staff_requests-icon.svg" alt="">
                    <p>Marketing & Branding</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location='{{ url("/home?dir=training_knowledge_center") }}'">
                <div>
                    <img class="icon" src="/images/index-page/training_events-icon.svg" alt="">
                    <p>Training & Knowledge Center</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location='{{ url("/home?dir=leads_services_support") }}'">
                <div>
                    <img class="icon" src="/images/index-page/leads-icon.svg" alt="">
                    <p>Leads, Services & Support</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location='{{ url("/form") }}'">
                <div>
                    <img class="icon" src="/images/index-page/luxe_lending-icon.svg" alt="">
                    <p>Referral Partners</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location='{{ url("/home?dir=luxe_apparel") }}'">
                <div>
                    <img class="icon" src="/images/index-page/luxe_product_store-icon.svg" alt="">
                    <p>LUXE MARKETPLACE</p>
                </div>
            </div>
        </div>
        {{-- <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location='{{ url("/home?dir=tools_training_videos") }}'">
                <div>
                    <img class="icon" src="/images/index-page/tools_training_videos-icon.svg" alt="">
                    <p>Tools & Training <br> Videos</p>
                </div>
            </div>
        </div> --}}
        {{-- <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location='{{ url("/home?dir=marketing") }}'">
                <div>
                    <img class="icon" src="/images/index-page/marketing-icon.svg" alt="">
                    <p>Marketing</p>
                </div>
            </div>
        </div> --}}
        {{-- <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location='{{ url("/home?dir=service_staff_requests") }}'">
                <div>
                    <img class="icon" src="/images/index-page/services_staff_requests-icon.svg" alt="">
                    <p>Services & Staff <br> Requests</p>
                </div>
            </div>
        </div> --}}
        {{-- <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location='{{ url("/store") }}'">
                <div>
                    <img class="icon" src="/images/index-page/luxe_product_store-icon.svg" alt="">
                    <p>Luxe Product <br> Store</p>
                </div>
            </div>
        </div> --}}
        {{-- <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location='{{ url("/office-locations") }}'">
                <div>
                    <img class="icon" src="/images/index-page/office_locations-icon.svg" alt="">
                    <p>Office <br> Locations</p>
                </div>
            </div>
        </div> --}}
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location='{{ url('/home?dir=office_staff_directory') }}'">
                <div>
                    <img class="icon" src="/images/index-page/office_locations-icon.svg" alt="">
                    <p>Office & Staff Directory</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location='{{ url("/user/events") }}'">
                <div>
                    <img class="icon" src="/images/index-page/training_events-icon.svg" alt="">
                    <p>Events</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location='{{ route('profile.my_profile') }}'">
                <div>
                    <img class="icon" src="/images/index-page/services_staff_requests-icon.svg" alt="">
                    <p>My Profile</p>
                </div>
            </div>
        </div>
        @elseif($_GET['dir'] == 'marketing_branding')
        <div class="col-12 title mb-3">
            <h1>Welcome to Marketing & Branding</h1>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location='{{ route('user.diy-templates') }}'">
                <div>
                    <img class="icon" src="/images/index-page/diy_marketing.svg" alt="">
                    <p>Online Marketing <br>Designer</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location='{{ route('canva.marketing.requests') }}'">
                <div>
                    <img class="icon" src="/images/index-page/canva_templates.svg" alt="">
                    <p>Canva Marketing <br>Designer</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location = 'https://realtorprint.com/collections/luxe'">
                <div>
                    <img src="/images/index-page/print_marketing.svg" class="icon" alt="">
                    <p>Print Marketing</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location = '{{ url('user/guides')}}'">
                <div>
                    <img src="/images/index-page/downloadable_guides.svg" class="icon" alt="">
                    <p>Downloadable Presentations</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location = '{{ url('/home?dir=signs_photo_design_requests')}}'">
                <div>
                    <img src="/images/index-page/print_marketing.svg" class="icon" alt="">
                    <p>Signs, Photo, & Design Requests</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.open('{{ url("resume")}}')">
                <div>
                    <img src="/images/index-page/resume_builder.svg" class="icon" alt="">
                    <p>Resume Builder</p>
                </div>
            </div>
        </div>
        @elseif($_GET['dir'] == 'signs_photo_design_requests')
        <div class="col-12 title mb-3">
            <h1>Welcome to Signs, Photo, & Design Requests</h1>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location = '{{ url("general/form/other/logo-creation-request")}}'">
                <div>
                    <img src="/images/index-page/logo_creation_request.svg" class="icon" alt="">
                    <p>Create A Logo</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location = '{{ url("general/form/other/photoshoots-for-listings")}}'">
                <div>
                    <img src="/images/index-page/photoshoot_for_listings.svg" class="icon" alt="">
                    <p>Schedule Photoshoots For Listings</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location = '{{ url('/store/photo-fees')}}'">
                <div>
                    <img src="/images/index-page/luxe_product_store-icon.svg" class="icon" alt="">
                    <p>Photo Fees</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location = '{{ url('/store/custom-items')}}'">
                <div>
                    <img src="/images/index-page/luxe_product_store-icon.svg" class="icon" alt="">
                    <p>Custom Signs</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location = '{{ route('marketing.requests')}}'">
                <div>
                    <img src="/images/index-page/print_marketing.svg" class="icon" alt="">
                    <p>Design Requests</p>
                </div>
            </div>
        </div>
        @elseif($_GET['dir'] == 'leads_services_support')
        <div class="col-12 title mb-3">
            <h1>Welcome to Leads, Services, & Support</h1>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location='{{ url('/home?dir=leads') }}'">
                <div>
                    <img class="icon" src="/images/index-page/services_staff_requests-icon.svg" alt="">
                    <p>Get Leads</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location='{{url('/home?dir=request_listing_closing_coordinators')}}'">
                <div>
                    <img class="icon" src="/images/index-page/closing_coordinators.svg" alt="">
                    <p>Request Listing/Closing Coordinators</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location = '{{ url("general/form/escrow/index")}}'">
                <div>
                    <img src="/images/index-page/rental_escrow.svg" class="icon" alt="">
                    <p>Rental Escrow <br> Disbursement</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location = '{{ url("appointments/create")}}'">
                <div>
                    <img src="/images/index-page/open_house_signup.svg" class="icon" alt="">
                    <p>Open House Signup</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location = '{{ url('/home?dir=coming_soon')}}'">
                <div>
                    <img src="/images/index-page/wire_instructions_request.svg" class="icon" alt="">
                    <p>Get Contract Help</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location = '{{ route('marketing.requests')}}'">
                <div>
                    <img src="/images/index-page/print_marketing.svg" class="icon" alt="">
                    <p>Design Requests</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location = '{{ url("general/form/other/wire-instructions-request")}}'">
                <div>
                    <img src="/images/index-page/wire_instructions_request.svg" class="icon" alt="">
                    <p>Wire Instructions <br> Request</p>
                </div>
            </div>
        </div>
        @elseif($_GET['dir'] == 'request_listing_closing_coordinators')
        <?php
                $active='leads_services_support';
                $subactive="request_listing_closing_coordinators";
                ?>
        <div class="col-12 title mb-3">
            <h1>Welcome to Request Listing/Closing Coordinators</h1>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location = '{{ url("listing-coordinators")}}'">
                <div>
                    <img src="/images/index-page/listing_coordinators.svg" class="icon" alt="">
                    <p>Listing Coordinators</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location = '{{ url("general/form/other/closing-coordinators-agents")}}'">
                <div>
                    <img src="/images/index-page/closing_coordinators.svg" class="icon" alt="">
                    <p>Closing Coordinators</p>
                </div>
            </div>
        </div>
        @elseif($_GET['dir'] == 'leads')
        <?php
        $active='leads_services_support';
        $subactive="get_leads";
        ?>
        <div class="col-12 title mb-3">
            <h1>Welcome to Leads</h1>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location = '{{ url("general/form/leads/index")}}'">
                <div>
                    <img src="/images/index-page/partner_1-removebg-preview.png" alt="">
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location = '{{ url("general/form/leads/request-leads")}}'">
                <div>
                    <img src="/images/index-page/partner_2-removebg-preview.png" alt="">
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location = '{{ url("general/form/leads/opcity-leads")}}'">
                <div>
                    <img src="/images/index-page/partner_3-removebg-preview.png" alt="">
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location = '{{ url("general/form/leads/prime-street-leads")}}'">
                <div>
                    <img src="/images/index-page/partner_4-removebg-preview.png" alt="">
                </div>
            </div>
        </div>
        @elseif($_GET['dir'] == 'training_knowledge_center')
        <style>
            .video {
                min-height: 300px;
                transition: .2s;
                border: 1px solid rgb(246, 246, 246);
                display: flex;
                align-items: center;
                box-shadow: 0px 0px 12px 0px rgb(0 0 0 / 9%);
                border-radius: 10px;
            }

            .video img {
                width: 100%;
                object-fit: cover !important;
                height: 303px;
                border-radius: 10px 10px 0px 0px;
            }

            .video .title {
                font-size: 18px;
                font-family: 'gothicbold';
            }

            .video .time {
                font-size: 16px;
                font-family: 'gothicregular';
            }

            .video a {
                width: 100%;
                color: #262626;
            }
        </style>
        <div class="col-12 title mb-3">
            <h1>Welcome to Training & Knowledge Center</h1>
        </div>
        @foreach (App\Models\Video\Video::take(3)->get() as $video)
        <div class="col-12 col-lg-4 mb-4">
            <div class="video mb-2">
                <a href="{{route('video.single_video', $video->id)}}">
                    <!-- /images/files/video-folder.svg -->
                    <img src="{{ $video->vimeo_details['thumbnail'] }}" alt="" class="img">
                    <div class="p-4">
                        <p class="title">
                            {{ $video->vimeo_details['name'] }}
                        </p>
                        <div class="d-flex justify-content-between">
                            <p class="time p-0 m-0">{{ $video->vimeo_details['created_at'] }}</p>
                            <p class="time p-0 m-0">By <span class="title">LUXE Properties</span></p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        @endforeach
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location = '{{ url("user/videos")}}'">
                <div>
                    <img src="/images/index-page/training_videos.svg" class="icon" alt="">
                    <p>LUXE Online University</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location='{{ url("/user/events") }}'">
                <div>
                    <img class="icon" src="/images/index-page/training_events-icon.svg" alt="">
                    <p>Events</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location = '{{ url("user/files")}}'">
                <div>
                    <img src="/images/index-page/office_documents.svg" class="icon" alt="">
                    <p>Downloadable Docs, Guides & Excels</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location = '{{ url("agreement-agents")}}'">
                <div>
                    <img src="/images/index-page/mentors.svg" class="icon" alt="">
                    <p>Mentors</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location = '{{url('/home?dir=email_addendum_verbiage_builder')}}'">
                <div>
                    <img src="/images/index-page/email_templates.svg" class="icon" alt="">
                    <p>Email & Addendum Verbiage Builder</p>
                </div>
            </div>
        </div>
        @elseif($_GET['dir'] == 'email_addendum_verbiage_builder')
        <?php
                $active='Tools&TrainingVideos';
                $subactive="email_addendum_verbiage_builder";
                ?>
        <div class="col-12 title mb-3">
            <h1>Welcome to Email & Addendum Verbiage Builder</h1>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location = '{{ url("user/written-email-templates")}}'">
                <div>
                    <img src="/images/index-page/email_templates.svg" class="icon" alt="">
                    <p>Email Templates</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location = ('{{ route('addendum-templates.index')}}')">
                <div>
                    <img src="/images/index-page/email_templates.svg" class="icon" alt="">
                    <p>Addendum Templates</p>
                </div>
            </div>
        </div>
        @elseif($_GET['dir'] == 'office_staff_directory')
        <div class="col-12 title mb-3">
            <h1>Welcome to Office & Staff Directory</h1>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location='{{ url('/office-locations') }}'">
                <div>
                    <img class="icon" src="/images/index-page/office_locations-icon.svg" alt="">
                    <p>Office Locations</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location = '{{ url("bookings")}}'">
                <div>
                    <img src="/images/index-page/conference_room.svg" class="icon" alt="">
                    <p>Conference Room Reservations</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location = '{{ url('/home?dir=coming_soon')}}'">
                <div>
                    <img src="/images/index-page/leads-icon.svg" class="icon" alt="">
                    <p>Your LUXE Staff</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location = '{{ url('general/form/agent_referrals/index')}}'">
                <div>
                    <img src="/images/index-page/new_agents_referrals.svg" class="icon" alt="">
                    <p>New Agents & Referrals</p>
                </div>
            </div>
        </div>
        @elseif($_GET['dir'] == 'luxe_apparel')
        <div class="col-12 title mb-3 text-center">
            <h1>Welcome to LUXE MARKETPLACE</h1>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location='{{ url('store/grab-go-merchandise') }}'">
                <div>
                    <img class="icon" src="/images/index-page/luxe_product_store-icon.svg" alt="">
                    <p>Grab & Go Merchandise</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location='{{ url('store/luxe-apparel') }}'">
                <div>
                    <img class="icon" src="/images/index-page/luxe_product_store-icon.svg" alt="">
                    <p>LUXE Apparel</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location='{{ url('store/product/sign-post-login-realpost') }}'">
                <div>
                    <img class="icon" src="/images/index-page/luxe_product_store-icon.svg" alt="">
                    <p>Sign Post</p>
                </div>
            </div>
        </div>
        @elseif($_GET['dir'] == 'tools_training_videos')
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location = '{{ url("user/videos")}}'">
                <div>
                    <img src="/images/index-page/training_videos.svg" class="icon" alt="">
                    <p>Training Videos</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location = '{{ url("user/written-email-templates")}}'">
                <div>
                    <img src="/images/index-page/email_templates.svg" class="icon" alt="">
                    <p>Email Templates</p>
                </div>
            </div>
        </div>
        <!-- <div class="col-12 col-md-6 col-lg-4">
                <div class="box-item" onclick="window.location = '{{ url("user/links")}}'">
                    <div>
                        <img src="/images/index-page/links_to_other_services.svg" class="icon" alt="">
                        <p>Links to other services</p>
                    </div>
                </div>
            </div> -->
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location = '{{ url("general/form/agent_referrals/index")}}'">
                <div>
                    <img src="/images/index-page/new_agents_referrals.svg" class="icon" alt="">
                    <p>New Agents & Referrals</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location = '{{ url("bookings")}}'">
                <div>
                    <img src="/images/index-page/conference_room.svg" class="icon" alt="">
                    <p>Conference Room</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location = '{{ url("user/files")}}'">
                <div>
                    <img src="/images/index-page/office_documents.svg" class="icon" alt="">
                    <p>Office Documents</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location = '{{ url("general/form/other/photoshoots-for-listings")}}'">
                <div>
                    <img src="/images/index-page/photoshoot_for_listings.svg" class="icon" alt="">
                    <p>Photoshoot for Listings</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.open('{{ url("resume")}}')">
                <div>
                    <img src="/images/index-page/resume_builder.svg" class="icon" alt="">
                    <p>Resume Builder</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location = ('{{ route('addendum-templates.index')}}')">
                <div>
                    <img src="/images/index-page/email_templates.svg" class="icon" alt="">
                    <p>Addendum Templates</p>
                </div>
            </div>
        </div>
        @elseif($_GET['dir'] == 'marketing')
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location = '{{ route('user.diy-templates')}}'">
                <div>
                    <img src="/images/index-page/diy_marketing.svg" class="icon" alt="">
                    <p>DIY Marketing</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location = 'https://realtorprint.com/collections/luxe'">
                <div>
                    <img src="/images/index-page/print_marketing.svg" class="icon" alt="">
                    <p>Print Marketing</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location = '{{ url('user/guides')}}'">
                <div>
                    <img src="/images/index-page/downloadable_guides.svg" class="icon" alt="">
                    <p>Downloadable Guides</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location = '{{ route('canva.marketing.requests') }}'">
                <div>
                    <img src="/images/index-page/canva_templates.svg" class="icon" alt="">
                    <p>Canva Templates</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location = '{{ url('marketing-home') }}'">
                <div>
                    <img src="/images/index-page/print_marketing.svg" class="icon" alt="">
                    <p>Marketing Requests</p>
                </div>
            </div>
        </div>
        @elseif($_GET['dir'] == 'service_staff_requests')
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location = '{{ url("general/form/escrow/index")}}'">
                <div>
                    <img src="/images/index-page/rental_escrow.svg" class="icon" alt="">
                    <p>Rental Escrow <br> Disbursement</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location = '{{ url("listing-coordinators")}}'">
                <div>
                    <img src="/images/index-page/listing_coordinators.svg" class="icon" alt="">
                    <p>Listing Coordinators</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location = '{{ url("general/form/other/closing-coordinators-agents")}}'">
                <div>
                    <img src="/images/index-page/closing_coordinators.svg" class="icon" alt="">
                    <p>Closing Coordinators</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location = '{{ url("agreement-agents")}}'">
                <div>
                    <img src="/images/index-page/mentors.svg" class="icon" alt="">
                    <p>Mentors</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location = '{{ url("general/form/other/photoshoots-for-listings")}}'">
                <div>
                    <img src="/images/index-page/photoshoot_for_listings.svg" class="icon" alt="">
                    <p>Photoshoot <br> for Listings</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location = '{{ url("general/form/other/wire-instructions-request")}}'">
                <div>
                    <img src="/images/index-page/wire_instructions_request.svg" class="icon" alt="">
                    <p>Wire Instructions <br> Request</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location = '{{ url("general/form/other/logo-creation-request")}}'">
                <div>
                    <img src="/images/index-page/logo_creation_request.svg" class="icon" alt="">
                    <p>Logo Creation <br> Request</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location = '{{ url("general/form/staff-request/new-agent-business-plan")}}'">
                <div>
                    <img src="/images/index-page/new_agent_business_plan.svg" class="icon" alt="">
                    <p>New Agent <br> Business Plan</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location = '{{ url("general/form/staff-request/2022-business-plan")}}'">
                <div>
                    <img src="/images/index-page/2022_business_plan.svg" class="icon" alt="">
                    <p>2022 Business <br> Plan</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location = '{{ url("general/form/staff-request/follow-up-business-plan")}}'">
                <div>
                    <img src="/images/index-page/follow_up_business_plan.svg" class="icon" alt="">
                    <p>Follow-up <br> Business Plan</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item" onclick="window.location = '{{ url("appointments/create")}}'">
                <div>
                    <img src="/images/index-page/open_house_signup.svg" class="icon" alt="">
                    <p>Open House Signup</p>
                </div>
            </div>
        </div>
        @elseif($_GET['dir'] == 'coming_soon')
        <div class="col-12 title mb-3">
            <h1>Coming Soon ...</h1>
        </div>
        @endif
    </div>
</div>
@endsection