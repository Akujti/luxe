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
    @media (min-width: 768px) and (max-width: 980px){
        .box-item p {
            font-size: 20px;
        }
    }
</style>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row box-items">
        @if(!isset($_GET['dir']))
            <div class="col-12 col-md-6 col-lg-3">
                <div class="box-item" onclick="window.location='{{ url("/home?dir=leads") }}'">
                    <div>
                        <img class="icon" src="/images/index-page/leads-icon.svg" alt="">
                        <p>Leads</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="box-item" onclick="window.location='{{ url("/home?dir=tools_training_videos") }}'">
                    <div>
                        <img class="icon" src="/images/index-page/tools_training_videos-icon.svg" alt="">
                        <p>Tools & Training <br> Videos</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="box-item" onclick="window.location='{{ url("/home?dir=marketing") }}'">
                    <div>
                        <img class="icon" src="/images/index-page/marketing-icon.svg" alt="">
                        <p>Marketing</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="box-item" onclick="window.location='{{ url("/user/events") }}'">
                    <div>
                        <img class="icon" src="/images/index-page/training_events-icon.svg" alt="">
                        <p>Trainings & <br> Events</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="box-item" onclick="window.location='{{ url("/home?dir=service_staff_requests") }}'">
                    <div>
                        <img class="icon" src="/images/index-page/services_staff_requests-icon.svg" alt="">
                        <p>Services & Staff <br> Requests</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="box-item" onclick="window.location='{{ url("/store") }}'">
                    <div>
                        <img class="icon" src="/images/index-page/luxe_product_store-icon.svg" alt="">
                        <p>Luxe Product <br> Store</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="box-item" onclick="window.location='{{ url("/form") }}'">
                    <div>
                        <img class="icon" src="/images/index-page/luxe_lending-icon.svg" alt="">
                        <p>Luxe Lending</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="box-item" onclick="window.location='{{ url("/office-locations") }}'">
                    <div>
                        <img class="icon" src="/images/index-page/office_locations-icon.svg" alt="">
                        <p>Office <br> Locations</p>
                    </div>
                </div>
            </div>
        @elseif($_GET['dir'] == 'leads')
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
        @elseif($_GET['dir'] == 'tools_training_videos')
            <div class="col-12 col-md-6 col-lg-4">
                <div class="box-item bg-transparent" onclick="window.location = '{{ url("user/videos")}}'">
                    <div>
                        <p>Training Videos</p>
                        <img src="/images/index-page/training_videos_dir.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="box-item bg-transparent" onclick="window.location = '{{ url("user/written-email-templates")}}'">
                    <div>
                        <p>Email Templates</p>
                        <img src="/images/index-page/email_templates_dir.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="box-item bg-transparent" onclick="window.location = '{{ url("user/links")}}'">
                    <div>
                        <p>Links to other services</p>
                        <img src="/images/index-page/link_to_other_services_dir.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="box-item bg-transparent" onclick="window.location = '{{ url("general/form/agent_referrals/index")}}'">
                    <div>
                        <p>New Agents & Referrals</p>
                        <img src="/images/index-page/new_agents_referrals_dir.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="box-item bg-transparent" onclick="window.location = '{{ url("bookings")}}'">
                    <div>
                        <p>Conference Room</p>
                        <img src="/images/index-page/conference_room_dir.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="box-item bg-transparent" onclick="window.location = '{{ url("user/files")}}'">
                    <div>
                        <p>Office Documents</p>
                        <img src="/images/index-page/office_documents_dir.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="box-item bg-transparent" onclick="window.location = '{{ url("general/form/other/photoshoots-for-listings")}}'">
                    <div>
                        <p>Photoshoot for Listings</p>
                        <img src="/images/index-page/photoshoot_for_listings_dir.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="box-item bg-transparent" onclick="window.location = '{{ url("resume")}}'">
                    <div>
                        <p>Resume Builder</p>
                        <img src="/images/index-page/resume_builder_dir.png" alt="">
                    </div>
                </div>
            </div>
        @elseif($_GET['dir'] == 'marketing')
            <div class="col-12 col-md-6 col-lg-4">
                <div class="box-item bg-transparent" onclick="window.location = '{{ url("marketing-home")}}'">
                    <div>
                        <p>DIY Marketing</p>
                        <img src="/images/index-page/diy_marketing_dir.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="box-item bg-transparent" onclick="window.location = 'https://realtorprint.com/collections/luxe'">
                    <div>
                        <p>Print Marketing</p>
                        <img src="/images/index-page/print_marketing_dir.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="box-item bg-transparent" onclick="window.location = '{{ url("user/guides")}}'">
                    <div>
                        <p>Downloadble Guides</p>
                        <img src="/images/index-page/downloadble_guides_dir.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="box-item bg-transparent" onclick="window.location = '{{ route("canva.marketing.requests") }}'">
                    <div>
                        <p>Canva Templates</p>
                        <img src="/images/index-page/canva_templates_dir.png" alt="">
                    </div>
                </div>
            </div>
        @elseif($_GET['dir'] == 'service_staff_requests')
            <div class="col-12 col-md-6 col-lg-4">
                <div class="box-item bg-transparent" onclick="window.location = '{{ url("general/form/escrow/index")}}'">
                    <div>
                        <p>Rental Escrow Disbursement</p>
                        <img src="/images/index-page/diy_marketing_dir.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="box-item bg-transparent" onclick="window.location = '{{ url("listing-coordinators")}}'">
                    <div>
                        <p>Listing Coordinators</p>
                        <img src="/images/index-page/print_marketing_dir.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="box-item bg-transparent" onclick="window.location = '{{ url("general/form/other/closing-coordinators-agents")}}'">
                    <div>
                        <p>Closing Coordinators</p>
                        <img src="/images/index-page/print_marketing_dir.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="box-item bg-transparent" onclick="window.location = '{{ url("agreement-agents")}}'">
                    <div>
                        <p>Mentors</p>
                        <img src="/images/index-page/downloadble_guides_dir.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="box-item bg-transparent" onclick="window.location = '{{ url("general/form/other/photoshoots-for-listings")}}'">
                    <div>
                        <p>Photoshoot for Listings</p>
                        <img src="/images/index-page/canva_templates_dir.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="box-item bg-transparent" onclick="window.location = '{{ url("general/form/other/wire-instructions-request")}}'">
                    <div>
                        <p>Wire Instructions Request</p>
                        <img src="/images/index-page/diy_marketing_dir.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="box-item bg-transparent" onclick="window.location = '{{ url("general/form/other/logo-creation-request")}}'">
                    <div>
                        <p>Logo Creation Request</p>
                        <img src="/images/index-page/print_marketing_dir.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="box-item bg-transparent" onclick="window.location = '{{ url("general/form/staff-request/new-agent-business-plan")}}'">
                    <div>
                        <p>New Agent Business Plan</p>
                        <img src="/images/index-page/downloadble_guides_dir.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="box-item bg-transparent" onclick="window.location = '{{ url("general/form/staff-request/2022-business-plan")}}'">
                    <div>
                        <p>2022 Business Plan</p>
                        <img src="/images/index-page/canva_templates_dir.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="box-item bg-transparent" onclick="window.location = '{{ url("general/form/staff-request/follow-up-business-plan")}}'">
                    <div>
                        <p>Follow-up Business Plan</p>
                        <img src="/images/index-page/diy_marketing_dir.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="box-item bg-transparent" onclick="window.location = '{{ url("appointments/create")}}'">
                    <div>
                        <p>Open House Signup</p>
                        <img src="/images/index-page/print_marketing_dir.png" alt="">
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
@endsection
