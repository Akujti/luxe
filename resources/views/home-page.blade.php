@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/tiny-slider.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.js"></script>
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
            font-size: 20px;
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

            .logs div {
                font-size: 13px !important;
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

        .logs,
        .agent-logs input {
            font-family: 'gothicregular';
        }

        .agent-logs label,
        .log-title {
            font-family: 'gothicbold';
        }

        .logs {
            display: flex;
            height: 200px;
            padding: 10px 20px;
        }

        .logs div {
            display: flex;
            width: 100%;
            align-items: center;
        }

        .logs div span {
            font-family: 'gothicbold';
        }

        .log-item {
            height: 200px !important;
        }

        .box-guides a {
            color: #262626;
        }

        .box-guides .box-guide a {
            display: flex;
            align-items: center;
            width: 90%;
            gap: 0px 10px;
            color: #262626;
        }

        .box-guide p {
            padding: 0px;
            margin: 0px;
            font-size: 16px;
            text-align: left;
        }

        .box-guides h3 {
            font-family: 'gothicbold';
            font-size: 20px;
        }

        .box-guides h3 a {
            font-size: 16px;
        }

        .box-guide {
            width: 100%;
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .box-guides .box-guide img {
            width: 60px;
            height: 60px;
            border-radius: 10px;
        }

        .email-blasts-box {
            background-color: #F7F7F7;
            border-radius: 30px;
        }

        .email-blasts-box img {
            height: 250px;
            width: 100%;
            object-fit: cover;
        }

        .email-blasts-box .box-item {
            height: auto !important;
        }

        @media(min-width: 1720px) {
            .small-box {
                width: 225px !important;
                height: 228px !important;
            }

            .box-item .inside-box {
                height: 151px;
            }
        }

        .box-item .inside-box {
            height: 136px;
        }

        .contact_information {
            background-color: #F7F7F7;
            border-radius: 10px;
            padding: 20px 35px;
        }

        .contact_information ul {
            list-style: none;
            padding: 0;
        }

        .contact_information li {
            font-size: 20px;
            font-family: 'gothicregular';
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .contact_information li a {
            display: flex;
            align-items: center;
            gap: 10px;
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid">
        @if (auth()->user()->role == 'agent' && !isset($_GET['dir']))
            <div class="col-12 title mb-3">
                <h1>WELCOME TO MYLUXEHUB</h1>
            </div>

            <div class="row p-0 m-0 mb-5 mt-4">
                <div class="col-12 col-lg-6 mt-3 agent-logs">
                    <x-brokersumo-tiers :user="auth()->user()" :row="true" />
                </div>
                <div class="col-12 col-lg-6 mt-3 agent-logs">
                    <div class="w-100">
                        <div class="form-group">
                            <label for="">Support Specialist</label>
                            <div class="input-group">
                                <input type="text" class="form-control p-2"
                                    value="{{ auth()->user()->profile->support_specialist_name }}" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="w-100">
                        <div class="form-group">
                            <label for="">Loan Officer</label>
                            <div class="input-group">
                                <input type="text" class="form-control p-2"
                                    value="{{ auth()->user()->profile->loan_officer_name }}" readonly>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-3">
                    <div class="mb-2 log-title">
                        News Feed
                    </div>
                    <div class=" row m-0 align-items-start justify-content-start m-0 p-0" style="">
                        <div class="border rounded p-2 w-100" style="border-color: #F7F7F7;">
                            @php
                                $news_feed = App\Models\CustomSection::whereTitle('News Feed')->first();
                            @endphp
                            @if ($news_feed)
                                {!! $news_feed->text !!}
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="mb-2 log-title">
                        Office Requests
                    </div>
                    <div class="box-item log-item row m-0 align-items-start justify-content-start m-0 p-0">
                        <div class="row m-0 logs w-100">
                            @forelse(auth()->user()->load('form_submits')->form_submits->take(3) as $form_submit)
                                <div>
                                    <span>{{ $form_submit->form_title }}&nbsp;</span>-
                                    {{ $form_submit->created_at->diffForHumans() }}
                                    - {{ $form_submit->status ? 'Completed' : 'Pending' }}
                                </div>
                            @empty
                                <div class="w-100">
                                    No form submissions found.
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="log-title mb-2">
                        Marketing Requests
                    </div>
                    <div class="box-item log-item row m-0 align-items-start justify-content-start m-0 p-0">
                        <div class="row m-0 logs">

                            @forelse(auth()->user()->load('template_submits')->template_submits->take(3) as $template_submit)
                                <div>
                                    <span>{{ json_decode($template_submit->details, true)['template'] }}&nbsp;</span>-
                                    {{ $template_submit->created_at->diffForHumans() }} -
                                    {{ $template_submit->status ? 'Completed' : 'Pending' }}
                                </div>
                            @empty
                                <div>
                                    No marketing request submissions found.
                                </div>
                            @endforelse
                        </div>

                    </div>
                </div>
                <div class="col-12 col-lg-6 mt-2">
                    <div class="mb-2 log-title">
                        Orders
                    </div>
                    <div class="box-item log-item row m-0 align-items-start justify-content-start m-0 p-0">
                        <div class="row m-0 logs">
                            @forelse(auth()->user()->load('orders')->orders->take(3) as $order)
                                <div>
                                    <span>#{{ $order->id }}&nbsp;</span>- {{ $order->created_at->diffForHumans() }}
                                    - {{ $order->status }}
                                </div>
                            @empty
                                <div>
                                    No orders found.
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 mt-2">
                    <div class="log-title mb-2">
                        Attending Events
                    </div>
                    <div class="box-item log-item row m-0 align-items-start justify-content-start m-0 p-0">
                        <div class="row m-0 logs">

                            @forelse(auth()->user()->load('attending_events')->attending_events->take(3) as $attend_event)
                                <div>
                                    <span>{{ $attend_event->title }}&nbsp;</span>-
                                    {{ $attend_event->created_at->diffForHumans() }}
                                </div>
                            @empty
                                <div>
                                    No attending events found.
                                </div>
                            @endforelse
                        </div>

                    </div>
                </div>
            </div>
        @endif
        <div class="row box-items p-0 m-0">
            @if (!isset($_GET['dir']))
                <div class="col-12 title mb-3">
                    <h1>LUXE Services</h1>
                </div>
            @endif
            @if (!isset($_GET['dir']))
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="box-item" onclick="window.location='{{ url('/home?dir=marketing_branding') }}'">
                        <div>
                            <img class="icon" src="/images/index-page/services_staff_requests-icon.svg" alt="">
                            <p>Marketing & Branding<br>&nbsp;</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="box-item" onclick="window.location='{{ url('/home?dir=training_knowledge_center') }}'">
                        <div>
                            <img class="icon" src="/images/index-page/training_events-icon.svg" alt="">
                            <p>Training &<br> Knowledge Center</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="box-item" onclick="window.location='{{ url('/home?dir=leads_services_support') }}'">
                        <div>
                            <img class="icon" src="/images/index-page/leads-icon.svg" alt="">
                            <p>Leads, Services <br>& Support</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="box-item" onclick="window.location='{{ route('referral-partner-category.index') }}'">
                        <div>
                            <img class="icon" src="/images/index-page/luxe_lending-icon.svg" alt="">
                            <p>Referral Partners<br>&nbsp;</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="box-item" onclick="window.location='{{ url('/home?dir=luxe_apparel') }}'">
                        <div>
                            <img class="icon" src="/images/index-page/luxe_product_store-icon.svg" alt="">
                            <p>LUXE Marketplace</p>
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
                    <div class="box-item" onclick="window.location='{{ url('/user/events') }}'">
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
                    <h1>Marketing & Branding</h1>
                </div>
                <style>
                    .small-box {
                        height: 165px;
                        padding: 15px;
                        width: 165px;
                    }

                    .small-box p {
                        font-size: 15px;
                    }

                    .pr-sm-0 {
                        padding-right: 9px !important;
                    }

                    .pl-sm-0 {
                        padding-left: 9px !important;
                    }

                    .row-small-boxes {
                        margin-bottom: 26px !important;
                    }

                    .row-small-boxes .box-item {
                        margin-bottom: 0px;
                    }

                    @media screen and (max-width: 500px) {
                        .small-box {
                            width: 47%;
                        }

                        .row-small-boxes {
                            justify-content: center;
                        }

                        .pr-sm-0 {
                            padding-right: 0px !important;
                        }

                        .pl-sm-0 {
                            padding-left: 0px !important;
                        }
                    }
                </style>
                <div class="row p-0 m-0 row-small-boxes" style="gap: 13px">
                    <div class="box-item small-box"
                        onclick="window.location='{{ route('canva.marketing.requests') }}'">
                        <div>
                            <img class="icon" src="/images/index-page/canva_templates.svg" alt="">
                            <p>Canva Marketing <br>Designer</p>
                        </div>
                    </div>

                    <div class="box-item small-box" onclick="window.open('https://realtorprint.com/collections/luxe')">
                        <div>
                            <img src="/images/index-page/print_marketing.svg" class="icon" alt="">
                            <p>Print Marketing<br>&nbsp;</p>
                        </div>
                    </div>

                    <div class="box-item small-box"
                        onclick="window.location = '{{ url('/home?dir=signs_photo_design_requests') }}'">
                        <div>
                            <img src="/images/index-page/print_marketing.svg" class="icon" alt="">
                            <p>Signs, Photo, & Design Requests</p>
                        </div>
                    </div>

                    {{-- <div class="box-item small-box" onclick="window.location = '{{ url('user/guides') }}'">
                        <div>
                            <img src="/images/index-page/downloadable_guides.svg" class="icon" alt="">
                            <p>Downloadable Presentations</p>
                        </div>
                    </div> --}}

                    <div class="box-item small-box" onclick="window.location = '{{ url('resume') }}'">
                        <div>
                            <img src="/images/index-page/resume_builder.svg" class="icon" alt="">
                            <p>Resume Builder<br>&nbsp;</p>
                        </div>
                    </div>

                    <div class="box-item small-box" onclick="window.location='{{ route('user.diy-templates') }}'">
                        <div>
                            <img class="icon" src="/images/index-page/online-marketing-designer.svg" alt="">
                            <p>Online Marketing <br>Designer</p>
                        </div>
                    </div>

                    <div class="box-item small-box" onclick="window.location='/user/files?id=22'">
                        <div>
                            <img class="icon" src="/images/favicon.png" alt="">
                            <p>Logos<br>&nbsp;</p>
                        </div>
                    </div>

                    {{-- <div class="box-item small-box" onclick="window.location = '{{ url('user/file-posts') }}'">
                        <div>
                            <img src="/images/index-page/downloadable_guides.svg" class="icon" alt="">
                            <p>Pre Made <br>Social Media</p>
                        </div>
                    </div> --}}
                </div>
        </div>
        <div class="row p-0 m-0 w-100 mb-3" style="border-bottom: 3px solid #00000014;"></div>
        <div class="row w-100 p-0 m-0">
            <div class="col-12 col-md-4 mb-4 mb-md-auto pl-0 pr-sm-0">
                <div class="box-item align-items-start box-guides row p-0 m-0"
                    style="min-height: 400px !important;height:auto !important;">
                    <div class="w-100 row p-0 m-0">
                        <h3 class="row m-0 p-0 w-100 justify-content-between mt-4 mb-3 px-4">
                            <span>Latest Social Media Posts</span>
                            <a class="text-luxe" href="{{ route('file-posts.index') }}">See more</a>
                        </h3>

                        {{-- <div class="template-box-images">
                            <img src="/images/templates-examples/template1.png" alt="">
                            <img src="/images/templates-examples/template2.png" alt="">
                            <img src="/images/templates-examples/template3.png" alt="">
                            <img src="/images/templates-examples/template4.png" alt="">
                        </div>
                        <div class="mt-2 px-4 w-100">
                            <a class="text-luxe btn-luxe btn-block" style="font-family:gothicbold;"
                                href="{{ route('marketing.requests') }}">Click Here</a>
                        </div> --}}

                        @forelse($social_media_posts as $post)
                            <div class="box-guide col-6">
                                <a href="/storage/{{ $post->file }}" download target="_blank" class="text-dark">
                                    <img src="/storage/{{ $post->thumbnail }}" alt=""
                                        style="width: 100px;height:100px">
                                    <p>{{ $post->title }}</p>
                                </a>
                            </div>
                        @empty
                            <div class="box-guide justify-content-start pl-4">
                                <p>No results found.</p>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4 mb-md-auto pl-0 pr-sm-0">
                <div class="box-item align-items-start box-guides row p-0 m-0"
                    style="min-height: 400px !important;height:100% !important;">
                    <div class="w-100 row p-0 m-0">
                        <h3 class="row m-0 p-0 w-100 justify-content-between mt-4 mb-3 px-4">
                            <span>Submit Marketing Template Requests</span>
                        </h3>

                        {{-- <div class="template-box-images">
                            <img src="/images/templates-examples/template1.png" alt="">
                            <img src="/images/templates-examples/template2.png" alt="">
                            <img src="/images/templates-examples/template3.png" alt="">
                            <img src="/images/templates-examples/template4.png" alt="">
                        </div>
                        <div class="mt-2 px-4 w-100">
                            <a class="text-luxe btn-luxe btn-block" style="font-family:gothicbold;"
                                href="{{ route('marketing.requests') }}">Click Here</a>
                        </div> --}}

                        @forelse($marketing_requests as $marketing_request)
                            @if ($marketing_request->title != 'Presentation Booklet')
                                <div class="box-guide col-12 pl-4">
                                    <a href="{{ route('marketing.request', $marketing_request) }}"
                                        class="text-luxe w-100">
                                        <img src="{{ $marketing_request->image }}" alt="">
                                        <p>{{ $marketing_request->title }}</p>
                                    </a>
                                </div>
                            @endif
                        @empty
                            <div class="box-guide justify-content-start pl-4">
                                <p>No results found.</p>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
            <div class="col-md-4 pr-0 pl-sm-0">
                <div class="box-item align-items-start box-guides row p-0 m-0"
                    style="min-height: 400px !important;height:100% !important;">
                    <div class="w-100 row p-0 m-0">
                        <h3 class="row m-0 p-0 w-100 justify-content-between mt-4 mb-3 px-4">
                            <span>Downloadable Guides</span>
                            <a class="text-luxe" href="{{ route('guides.index') }}">See more</a>
                        </h3>
                        @php
                            $guide = $guides->where('title', 'The Home Selling Guide')->first();
                        @endphp
                        @if ($guide)
                            <div class="box-guide col-md-12">
                                <a href="{{ '/storage/' . $guide->file }}" download target="_blank" class="text-dark">
                                    <img src="{{ '/storage/' . $guide->thumbnail }}" alt="">
                                    <p>{{ $guide->title }}</p>
                                </a>
                            </div>
                        @endif
                        {{-- @php
                            $guide = $guides->where('title', 'FSBO Guide')->first();
                        @endphp
                        @if ($guide)
                            <div class="box-guide col-md-6">
                                <a href="{{ '/storage/' . $guide->file }}" download target="_blank" class="text-dark">
                                    <img src="{{ '/storage/' . $guide->thumbnail }}" alt="">
                                    <p>{{ $guide->title }}</p>
                                </a>
                            </div>
                        @endif --}}

                        @php
                            $guide = $guides->where('title', 'The Home Buying Guide')->first();
                        @endphp
                        @if ($guide)
                            <div class="box-guide col-md-12">
                                <a href="{{ '/storage/' . $guide->file }}" download target="_blank" class="text-dark">
                                    <img src="{{ '/storage/' . $guide->thumbnail }}" alt="">
                                    <p>{{ $guide->title }}</p>
                                </a>
                            </div>
                        @endif

                        {{-- @php
                            $guide = $guides->where('title', 'Miami-Dade Neighborhood Guide')->first();
                        @endphp
                        @if ($guide)
                            <div class="box-guide col-md-6">
                                <a href="{{ '/storage/' . $guide->file }}" download target="_blank" class="text-dark">
                                    <img src="{{ '/storage/' . $guide->thumbnail }}" alt="">
                                    <p>{{ $guide->title }}</p>
                                </a>
                            </div>
                        @endif --}}

                        @php
                            $guide = $guides->where('title', 'Spanish - Home Selling Guide')->first();
                        @endphp
                        @if ($guide)
                            <div class="box-guide col-md-12">
                                <a href="{{ '/storage/' . $guide->file }}" download target="_blank" class="text-dark">
                                    <img src="{{ '/storage/' . $guide->thumbnail }}" alt="">
                                    <p>{{ $guide->title }}</p>
                                </a>
                            </div>
                        @endif

                        {{-- @php
                            $guide = $guides->where('title', 'The Commercial Real Estate Guide')->first();
                        @endphp
                        @if ($guide)
                            <div class="box-guide col-md-6">
                                <a href="{{ '/storage/' . $guide->file }}" download target="_blank" class="text-dark">
                                    <img src="{{ '/storage/' . $guide->thumbnail }}" alt="">
                                    <p>{{ $guide->title }}</p>
                                </a>
                            </div>
                        @endif --}}

                        @php
                            $guide = $guides->where('title', 'Spanish - Home Buying Guide')->first();
                        @endphp
                        @if ($guide)
                            <div class="box-guide col-md-12">
                                <a href="{{ '/storage/' . $guide->file }}" download target="_blank" class="text-dark">
                                    <img src="{{ '/storage/' . $guide->thumbnail }}" alt="">
                                    <p>{{ $guide->title }}</p>
                                </a>
                            </div>
                        @endif

                        {{-- @php
                            $guide = $guides->where('title', "Expired Guide - My House Didn't Sell... Now What?")->first();
                        @endphp
                        @if ($guide)
                            <div class="box-guide col-md-6">
                                <a href="{{ '/storage/' . $guide->file }}" download target="_blank" class="text-dark">
                                    <img src="{{ '/storage/' . $guide->thumbnail }}" alt="">
                                    <p>{{ $guide->title }}</p>
                                </a>
                            </div>
                        @endif --}}

                        @if ($guides->count() == 0)
                            <div class="box-guide justify-content-start pl-4">
                                <p>No results found.</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="row p-0 m-0 w-100 mb-3 mt-4" style="border-bottom: 3px solid #00000014;"></div>
        <div class="row w-100 mt-4 p-0 email-blasts-box m-0">
            <h3 class="row m-0 p-0 w-100 justify-content-start mt-4 mb-4 pl-4"
                style="font-family: gothicbold;font-size:20px">Click to view our recent email blasts</h3>
            @forelse($email_blasts as $email_blast)
                <div class="col-12 col-md-6 col-lg-4 mb-4 mb-md-auto">
                    <span class="row m-0 p-0 w-100 justify-content-start pl-2 mb-2"
                        style="font-family: gothicregular;font-size:15px">Click here to view full design</span>
                    <div class="box-item align-items-start bg-transparent row p-0 m-0">
                        <div class="w-100">
                            <x-preview-image>
                                <img src="{{ $email_blast->image_url }}" class="rounded modal-target"
                                    style="object-position: top" alt="">
                            </x-preview-image>
                            <p class="pt-2">{{ $email_blast->title }}</p>
                            <form action="{{ route('marketing.sendemail') }}" method="POST">
                                @csrf
                                <input type="hidden" name="form_title" value="Email Blast Design Request">
                                <input type="hidden" name="agent_name"
                                    value="{{ auth()->user()->profile->fullname }}">
                                <input type="hidden" name="agent_email" value="{{ auth()->user()->email }}">
                                <input type="hidden" name="email_blast" value="{{ $email_blast->title }}">
                                <button class="btn-luxe btn-block mb-3">Submit your request</button>
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <div class="box-guide justify-content-start pl-4">
                    <p>No results found.</p>
                </div>
            @endforelse
        </div>
        <div class="row p-0 m-0 w-100 mb-3 mt-4" style="border-bottom: 3px solid #00000014;"></div>
        <div class="box-guides">
            <h3 class="row m-0 p-0 w-100 justify-content-between mt-4 mb-4 px-4 ">
                <span>Most popular marketing templates</span>
                <a href="{{ route('canva.marketing.requests') }}" class="text-luxe text-bold"
                    style="font-size:16px">See
                    more</a>
            </h3>
        </div>
        <div class="row w-100 my-4 px-4">
            <style>
                .canva-img {
                    height: 160px;
                    object-fit: cover;
                    object-position: top;
                }
            </style>
            @foreach ($featured_categories as $diy)
                <div class="col-md-6">
                    <p><b>{{ $diy->title }}</b></p>
                    <div class="row">
                        @foreach ($diy->featured_templates as $item)
                            <div class="col-md-4 mb-3">
                                <a class="text-dark" href="{{ $item->url }}">
                                    <img src="{{ $item->image_url }}" style="border-radius: 10px;"
                                        class="w-100 canva-img">
                                    <p class="ml-2 mt-2">{{ $item->title }}</p>
                                </a>
                            </div>
                        @endforeach
                    </div>

                    <div class="row">
                        @foreach ($diy->categories as $category)
                            @foreach ($category->featured_templates as $item)
                                <div class="col-md-4 mb-3">
                                    <a class="text-dark" href="{{ $item->url }}">
                                        <img src="{{ $item->image_url }}" style="border-radius: 10px;"
                                            class="w-100 canva-img">
                                        <p class="ml-2 mt-2">{{ $item->title }}</p>
                                    </a>
                                </div>
                            @endforeach
                        @endforeach
                    </div>
                    {{-- <p class="text-dark w-100">
                                    <img src="{{ asset('storage/' . $diy->image) }}" alt="">
                                </p> --}}
                </div>
            @endforeach
        </div>
        {{-- <div class="col-md-6">
                <div class="box-item align-items-start box-guides row p-0 m-0 bg-transparent"
                    style="height: 470px !important;">
                    <div class="w-100 row p-0 m-0">
                        <h3 class="row m-0 p-0 w-100 justify-content-between mt-4 mb-4 px-4">
                            <span>Latest Social Media Posts</span>
                            <a class="text-luxe" href="{{ route('file-posts.index') }}">See more</a>
                        </h3>
                        @forelse($social_media_posts as $post)
                            <div class="box-guide col-6">
                                <a href="/storage/{{ $post->file }}" download target="_blank" class="text-dark">
                                    <img src="/storage/{{ $post->thumbnail }}" alt="">
                                    <p>{{ $post->title }}</p>
                                </a>
                            </div>
                        @empty
                            <div class="box-guide justify-content-start pl-4">
                                <p>No results found.</p>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div> --}}
    </div>
@elseif($_GET['dir'] == 'signs_photo_design_requests')
    <div class="col-12 title mb-3">
        <h1>Signs, Photo, & Design Requests</h1>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
        <div class="box-item" onclick="window.location = '{{ url('general/form/other/logo-creation-request') }}'">
            <div>
                <img src="/images/index-page/logo_creation_request.svg" class="icon" alt="">
                <p>Create A Logo<br>&nbsp;</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
        <div class="box-item" onclick="window.location = '{{ url('general/form/other/photoshoots-for-listings') }}'">
            <div>
                <img src="/images/index-page/photoshoot_for_listings.svg" class="icon" alt="">
                <p>Schedule Photoshoots For Listings</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
        <div class="box-item" onclick="window.location = '{{ url('/store/photo-fees') }}'">
            <div>
                <img src="/images/index-page/luxe_product_store-icon.svg" class="icon" alt="">
                <p>Photo Fees<br>&nbsp;</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
        <div class="box-item" onclick="window.location = '{{ url('/store/custom-items') }}'">
            <div>
                <img src="/images/index-page/luxe_product_store-icon.svg" class="icon" alt="">
                <p>Custom Signs<br>&nbsp;</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
        <div class="box-item" onclick="window.location = '{{ route('marketing.requests') }}'">
            <div>
                <img src="/images/index-page/print_marketing.svg" class="icon" alt="">
                <p>Custom Design Requests</p>
            </div>
        </div>
    </div>
@elseif($_GET['dir'] == 'leads_services_support')
    <div class="col-12 title mb-3">
        <h1>Leads, Services, & Support</h1>
    </div>
    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
        <div class="box-item" onclick="window.location='{{ url('/home?dir=leads') }}'">
            <div>
                <img class="icon" src="/images/index-page/services_staff_requests-icon.svg" alt="">
                <p>Get Leads<br>&nbsp;</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
        <div class="box-item" onclick="window.location='{{ url('/home?dir=request_listing_closing_coordinators') }}'">
            <div>
                <img class="icon" src="/images/index-page/closing_coordinators.svg" alt="">
                <p>Request Listing/Closing Coordinators</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
        <div class="box-item" onclick="window.location = '{{ url('general/form/escrow/index') }}'">
            <div>
                <img src="/images/index-page/rental_escrow.svg" class="icon" alt="">
                <p>Rental Escrow <br> Disbursement</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
        <div class="box-item" onclick="window.location = '{{ url('appointments/create') }}'">
            <div>
                <img src="/images/index-page/open_house_signup.svg" class="icon" alt="">
                <p>Open House Signup<br>&nbsp;</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
        <div class="box-item" onclick="window.location = '{{ url('general/form/contract-help/index') }}'">
            <div>
                <img src="/images/index-page/wire_instructions_request.svg" class="icon" alt="">
                <p>Get Contract Help<br>&nbsp;</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
        <div class="box-item" onclick="window.location = '{{ route('marketing.requests') }}'">
            <div>
                <img src="/images/index-page/print_marketing.svg" class="icon" alt="">
                <p>Design Requests<br>&nbsp;</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
        <div class="box-item" onclick="window.location = '{{ url('general/form/other/wire-instructions-request') }}'">
            <div>
                <img src="/images/index-page/wire_instructions_request.svg" class="icon" alt="">
                <p>Wire Instructions <br> Request</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
        <div class="box-item" onclick="window.location = '{{ url('/home?dir=calculators') }}'">
            <div>
                <img src="/images/index-page/calculator.svg" class="icon" alt="">
                <p>Real Estate Worksheets</p>
            </div>
        </div>
    </div>
@elseif($_GET['dir'] == 'request_listing_closing_coordinators')
    <?php
    $active = 'leads_services_support';
    $subactive = 'request_listing_closing_coordinators';
    ?>
    <div class="col-12 title mb-3">
        <h1>Request Listing/Closing Coordinators</h1>
    </div>
    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
        <div class="box-item" onclick="window.location = '{{ url('listing-coordinators') }}'">
            <div>
                <img src="/images/index-page/listing_coordinators.svg" class="icon" alt="">
                <p>Listing Coordinators</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
        <div class="box-item"
            onclick="window.location = '{{ url('general/form/other/closing-coordinators-agents') }}'">
            <div>
                <img src="/images/index-page/closing_coordinators.svg" class="icon" alt="">
                <p>Closing Coordinators</p>
            </div>
        </div>
    </div>
@elseif($_GET['dir'] == 'leads')
    <?php
    $active = 'leads_services_support';
    $subactive = 'get_leads';
    ?>
    <div class="col-12 title mb-3">
        <h1>Leads</h1>
    </div>
    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
        <div class="box-item" onclick="window.location = '{{ url('general/form/leads/index') }}'">
            <div>
                <img src="/images/index-page/partner_1-removebg-preview.png" alt="">
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
        <div class="box-item" onclick="window.location = '{{ url('general/form/leads/request-leads') }}'">
            <div>
                <img src="/images/index-page/partner_2-removebg-preview.png" alt="">
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
        <div class="box-item" onclick="window.location = '{{ url('general/form/leads/opcity-leads') }}'">
            <div>
                <img src="/images/index-page/partner_3-removebg-preview.png" alt="">
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
        <div class="box-item" onclick="window.location = '{{ url('general/form/leads/prime-street-leads') }}'">
            <div>
                <img src="/images/index-page/partner_4-removebg-preview.png" alt="">
            </div>
        </div>
    </div>
@elseif($_GET['dir'] == 'training_knowledge_center')
    <style>
        .video {
            transition: .2s;
            border: 1px solid rgb(246, 246, 246);
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
            height: 57px;
            font-size: 18px;
            font-family: 'gothicbold';
        }

        .video .time {
            font-size: 15px;
            font-family: 'gothicregular';
        }

        .video a {
            width: 100%;
            color: #262626;
            word-break: break-all;
        }

        @media (min-width: 1633px) and (max-width: 1836px) {
            .video .title {
                margin-bottom: 25px;
            }

            .video .time:nth-child(2) {
                text-align: right;
            }
        }

        @media (min-width: 1329px) and (max-width: 1633px) {
            .video .title {
                margin-bottom: 25px;
                font-size: 15px;
            }

            .video .time:nth-child(2) {
                text-align: right;
            }
        }
    </style>
    <div class="col-12 title mb-3">
        <h1>Training & Knowledge Center</h1>
    </div>
    <div class="col-12 w-100">
        <section id="slider" class="w-100">
            <div class="container-slide">
                <div class="subcontainer">
                    <div class="slider-wrapper">
                        <div class="controller p-1">
                            <div>
                                <h2 class="title-video">Most watched training videos</h2>
                            </div>
                            <div id="controls">
                                <button class="previous"><i class="fa-solid fa-angle-left"></i></button>
                                <button class="next"><i class="fa-solid fa-angle-right"></i></button>
                            </div>
                        </div>
                        <br>
                        <div class="my-slider">
                            @foreach ($videos as $key => $video)
                                <div>
                                    <div class="slide video m-1">
                                        <div class="slide-img img-{{ $key + 1 }}"
                                            style="background-image: url({{ $video->vimeo_details['thumbnail'] }})">
                                        </div>
                                        <div class="p-2">
                                            <p class="title"><a
                                                    href="{{ route('video.single_video', $video->id) }}">{{ Str::limit($video->vimeo_details['name'], 60) }}</a>
                                            </p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="time p-0 m-0">{{ $video->vimeo_details['created_at'] }}
                                                </p>
                                                <p class="time p-0 m-0">By <span class="title">LUXE Properties</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="w-100 text-center mb-3">
            <a href="{{ route('videos') }}" class="btn btn-luxe">View all training videos</a>
        </div>
    </div>
    <div class="row p-0 m-0 w-100 mb-3 mx-2" style="border-bottom: 3px solid #00000014;"></div>
    <script type="text/javascript" src="{{ asset('js/tiny-slider.js') }}"></script>
    <div class="col-12 mb-4">
        <h2 class="title-video">More ways to keep expanding your knowledge</h2>
    </div>
    <style>
        .small-box {
            height: 165px;
            padding: 15px;
            width: 165px;
        }

        .small-box p {
            font-size: 15px;
        }

        .row-small-boxes .box-item {
            margin-bottom: 0px;
        }

        @media screen and (max-width: 500px) {
            .small-box {
                width: 47%;
            }

            .row-small-boxes {
                justify-content: center;
            }
        }
    </style>
    <div class="row p-0 m-0 row-small-boxes mb-4 w-100">
        <div class="col-md-12 col-12 col-lg-8 row row-small-boxes p-0 m-0"
            style="gap:13px;display: grid;
    grid-template-columns: repeat(3, 1fr);">
            <div class="box-item small-box" onclick="window.location = '{{ url('user/videos') }}'">
                <div class="inside-box">
                    <img src="/images/index-page/training_videos.svg" class="icon" alt="">
                    <p>LUXE Online University</p>
                </div>
            </div>

            <div class="box-item small-box" onclick="window.location='{{ url('/user/events') }}'">
                <div class="inside-box">
                    <img class="icon" src="/images/index-page/training_events-icon.svg" alt="">
                    <p>Training & Events <br>Calendar</p>
                </div>
            </div>

            <div class="box-item small-box" onclick="window.location = '{{ url('user/coaching') }}'">
                <div class="inside-box">
                    <img src="/images/index-page/mentors.svg" class="icon" alt="">
                    <p>LUXE Coaching</p>
                </div>
            </div>

            <div class="box-item small-box" onclick="window.location = '{{ url('user/files') }}'">
                <div class="inside-box">
                    <img src="/images/index-page/office_documents.svg" class="icon" alt="">
                    <p>Downloadable Docs, Guides & Excels</p>
                </div>
            </div>

            <div class="box-item small-box"
                onclick="window.location = '{{ url('/home?dir=email_addendum_verbiage_builder') }}'">
                <div class="inside-box">
                    <img src="/images/index-page/email_templates.svg" class="icon" alt="">
                    <p>Email & Addendum Verbiage Builder</p>
                </div>
            </div>
            <!-- <div class="box-item small-box" onclick="window.location = '{{ url('agreement-agents') }}'">
                        <div class="inside-box">
                            <img src="/images/index-page/mentors.svg" class="icon" alt="">
                            <p>LUXE Mentors</p>
                        </div>
                    </div> -->
            <div class="box-item small-box" onclick="window.location = '{{ url('/home?dir=calculators') }}'">
                <div class="inside-box">
                    <img src="/images/index-page/calculator.svg" class="icon" alt="">
                    <p>Real Estate Worksheets</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-12 col-lg-4">
            <div class="box-item align-items-start box-guides row p-0 m-0" style="height:auto !important">
                <h3 class="row m-0 p-0 w-100 justify-content-between mt-4 mb-4 px-4">
                    <span>Upcoming Events</span>
                </h3>

                @forelse($upcoming_events as $event)
                    <div class="box-guide col-12">
                        <a href="" class="text-dark">
                            <p>{{ $event->title }} - {{ $event->date }}</p>
                        </a>
                    </div>
                @empty
                    <div class="box-guide justify-content-start pl-4">
                        <p>No results found.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
@elseif($_GET['dir'] == 'email_addendum_verbiage_builder')
    <?php
    $active = 'Tools&TrainingVideos';
    $subactive = 'email_addendum_verbiage_builder';
    ?>
    <div class="col-12 title mb-3">
        <h1>Email & Addendum Verbiage Builder</h1>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
        <div class="box-item" onclick="window.location = '{{ url('user/written-email-templates') }}'">
            <div>
                <img src="/images/index-page/email_templates.svg" class="icon" alt="">
                <p>Email Templates</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
        <div class="box-item" onclick="window.location = ('{{ route('addendum-templates.index') }}')">
            <div>
                <img src="/images/index-page/email_templates.svg" class="icon" alt="">
                <p>Addendum Templates</p>
            </div>
        </div>
    </div>
@elseif($_GET['dir'] == 'office_staff_directory')
    <div class="col-12 title mb-3">
        <h1>Office & Staff Directory</h1>
    </div>
    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
        <div class="box-item" onclick="window.location='{{ url('/office-locations') }}'">
            <div>
                <img class="icon" src="/images/index-page/office_locations-icon.svg" alt="">
                <p>Office Locations<br>&nbsp;</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
        <div class="box-item" onclick="window.location = '{{ url('bookings') }}'">
            <div>
                <img src="/images/index-page/conference_room.svg" class="icon" alt="">
                <p>Conference Room <br>Reservations</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
        <div class="box-item" onclick="window.location = '{{ url('/home?dir=coming_soon') }}'">
            <div>
                <img src="/images/index-page/leads-icon.svg" class="icon" alt="">
                <p>Your LUXE Staff<br>&nbsp;</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
        <div class="box-item" onclick="window.location = '{{ url('general/form/agent_referrals/index') }}'">
            <div>
                <img src="/images/index-page/new_agents_referrals.svg" class="icon" alt="">
                <p>New Agents & Referrals<br>&nbsp;</p>
            </div>
        </div>
    </div>
@elseif($_GET['dir'] == 'luxe_apparel')
    <div class="col-12 title mb-3 text-center">
        <h1>LUXE Marketplace</h1>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
        <div class="box-item" onclick="window.location='{{ url('store/grab-go-merchandise') }}'">
            <div>
                <img class="icon" src="/images/index-page/luxe_product_store-icon.svg" alt="">
                <p>Printed Guides</p>
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
        <div class="box-item" onclick="window.location='{{ url('store/signs-posts') }}'">
            <div>
                <img class="icon" src="/images/index-page/luxe_product_store-icon.svg" alt="">
                <p>Signs & Posts</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
        <div class="box-item" onclick="window.location='{{ url('store/product/background-check') }}'">
            <div>
                <img class="icon" src="/images/index-page/luxe_product_store-icon.svg" alt="">
                <p>Client Screening</p>
            </div>
        </div>
    </div>
@elseif($_GET['dir'] == 'tools_training_videos')
    <div class="col-12 col-md-6 col-lg-3">
        <div class="box-item" onclick="window.location = '{{ url('user/videos') }}'">
            <div>
                <img src="/images/index-page/training_videos.svg" class="icon" alt="">
                <p>Training Videos</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
        <div class="box-item" onclick="window.location = '{{ url('user/written-email-templates') }}'">
            <div>
                <img src="/images/index-page/email_templates.svg" class="icon" alt="">
                <p>Email Templates</p>
            </div>
        </div>
    </div>
    <!-- <div class="col-12 col-md-6 col-lg-4">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <div class="box-item" onclick="window.location = '{{ url('user/links') }}'">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <img src="/images/index-page/links_to_other_services.svg" class="icon" alt="">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <p>Links to other services</p>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </div> -->
    <div class="col-12 col-md-6 col-lg-3">
        <div class="box-item" onclick="window.location = '{{ url('general/form/agent_referrals/index') }}'">
            <div>
                <img src="/images/index-page/new_agents_referrals.svg" class="icon" alt="">
                <p>New Agents & Referrals</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
        <div class="box-item" onclick="window.location = '{{ url('bookings') }}'">
            <div>
                <img src="/images/index-page/conference_room.svg" class="icon" alt="">
                <p>Conference Room</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
        <div class="box-item" onclick="window.location = '{{ url('user/files') }}'">
            <div>
                <img src="/images/index-page/office_documents.svg" class="icon" alt="">
                <p>Office Documents</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
        <div class="box-item" onclick="window.location = '{{ url('general/form/other/photoshoots-for-listings') }}'">
            <div>
                <img src="/images/index-page/photoshoot_for_listings.svg" class="icon" alt="">
                <p>Photoshoot for Listings</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
        <div class="box-item" onclick="window.open('{{ url('resume') }}')">
            <div>
                <img src="/images/index-page/resume_builder.svg" class="icon" alt="">
                <p>Resume Builder</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
        <div class="box-item" onclick="window.location = ('{{ route('addendum-templates.index') }}')">
            <div>
                <img src="/images/index-page/email_templates.svg" class="icon" alt="">
                <p>Addendum Templates</p>
            </div>
        </div>
    </div>
@elseif($_GET['dir'] == 'marketing')
    <div class="col-12 col-md-6 col-lg-3">
        <div class="box-item" onclick="window.location = '{{ route('user.diy-templates') }}'">
            <div>
                <img src="/images/index-page/diy_marketing.svg" class="icon" alt="">
                <p>DIY Marketing</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
        <div class="box-item" onclick="window.open('https://realtorprint.com/collections/luxe')">
            <div>
                <img src="/images/index-page/print_marketing.svg" class="icon" alt="">
                <p>Print Marketing</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
        <div class="box-item" onclick="window.location = '{{ url('user/guides') }}'">
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
        <div class="box-item" onclick="window.location = '{{ url('general/form/escrow/index') }}'">
            <div>
                <img src="/images/index-page/rental_escrow.svg" class="icon" alt="">
                <p>Rental Escrow <br> Disbursement</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
        <div class="box-item" onclick="window.location = '{{ url('listing-coordinators') }}'">
            <div>
                <img src="/images/index-page/listing_coordinators.svg" class="icon" alt="">
                <p>Listing Coordinators</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
        <div class="box-item"
            onclick="window.location = '{{ url('general/form/other/closing-coordinators-agents') }}'">
            <div>
                <img src="/images/index-page/closing_coordinators.svg" class="icon" alt="">
                <p>Closing Coordinators</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
        <div class="box-item" onclick="window.location = '{{ url('agreement-agents') }}'">
            <div>
                <img src="/images/index-page/mentors.svg" class="icon" alt="">
                <p>Mentors</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
        <div class="box-item" onclick="window.location = '{{ url('general/form/other/photoshoots-for-listings') }}'">
            <div>
                <img src="/images/index-page/photoshoot_for_listings.svg" class="icon" alt="">
                <p>Photoshoot <br> for Listings</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
        <div class="box-item" onclick="window.location = '{{ url('general/form/other/wire-instructions-request') }}'">
            <div>
                <img src="/images/index-page/wire_instructions_request.svg" class="icon" alt="">
                <p>Wire Instructions <br> Request</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
        <div class="box-item" onclick="window.location = '{{ url('general/form/other/logo-creation-request') }}'">
            <div>
                <img src="/images/index-page/logo_creation_request.svg" class="icon" alt="">
                <p>Logo Creation <br> Request</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
        <div class="box-item"
            onclick="window.location = '{{ url('general/form/staff-request/new-agent-business-plan') }}'">
            <div>
                <img src="/images/index-page/new_agent_business_plan.svg" class="icon" alt="">
                <p>New Agent <br> Business Plan</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
        <div class="box-item"
            onclick="window.location = '{{ url('general/form/staff-request/2022-business-plan') }}'">
            <div>
                <img src="/images/index-page/2022_business_plan.svg" class="icon" alt="">
                <p>2022 Business <br> Plan</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
        <div class="box-item"
            onclick="window.location = '{{ url('general/form/staff-request/follow-up-business-plan') }}'">
            <div>
                <img src="/images/index-page/follow_up_business_plan.svg" class="icon" alt="">
                <p>Follow-up <br> Business Plan</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
        <div class="box-item" onclick="window.location = '{{ url('appointments/create') }}'">
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
@elseif($_GET['dir'] == 'referral_partners')
    <div class="col-12 title mb-3">
        <h1>Referral Partners</h1>
    </div>
    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
        <div class="box-item" onclick="window.location = '{{ route('referral-partner-category.index') }}'">
            <div>
                <img src="/images/index-page/landing_services.svg" class="icon" alt="">
                <p>Lending Services</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
        <div class="box-item" onclick="window.location = '{{ url('home?dir=title') }}'">
            <div>
                <img src="/images/index-page/title.svg" class="icon" alt="">
                <p>Title</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
        <div class="box-item" onclick="window.location = '{{ url('home?dir=insurance') }}'">
            <div>
                <img src="/images/index-page/insurance.svg" class="icon" alt="">
                <p>Insurance</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
        <div class="box-item" onclick="window.location = '{{ url('home?dir=home_inspectors') }}'">
            <div>
                <img src="/images/index-page/inspectors.svg" class="icon" alt="">
                <p>Home Inspectors</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
        <div class="box-item" onclick="window.location = '{{ url('home?dir=accountant') }}'">
            <div>
                <img src="/images/index-page/tax_accountants.svg" class="icon" alt="">
                <p>Accountant</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
        <div class="box-item" onclick="window.location = '{{ url('home?dir=moving_company') }}'">
            <div>
                <img src="/images/index-page/moving-company.png" class="icon" alt="">
                <p>Moving Company</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
        <div class="box-item" onclick="window.location = '{{ url('home?dir=staging_company') }}'">
            <div>
                <img src="/images/index-page/staging-company.svg" class="icon" alt="">
                <p>Staging Company</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
        <div class="box-item" onclick="window.location = '{{ url('home?dir=marketing_company') }}'">
            <div>
                <img src="/images/index-page/marketing-company.svg" class="icon" alt="">
                <p>Marketing Company</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
        <div class="box-item" onclick="window.location = '{{ url('home?dir=coming_soon') }}'">
            <div>
                <img src="/images/index-page/contractors.svg" class="icon" alt="">
                <p>Contractors</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
        <div class="box-item" onclick="window.location = '{{ url('home?dir=coming_soon') }}'">
            <div>
                <img src="/images/index-page/permit-runners.svg" class="icon" alt="">
                <p>Permit Runners</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
        <div class="box-item" onclick="window.location = '{{ url('home?dir=attorneys') }}'">
            <div>
                <img src="/images/index-page/attorneys.svg" class="icon" alt="">
                <p>Attorneys</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
        <div class="box-item" onclick="window.location = '{{ url('home?dir=cleaning_company') }}'">
            <div>
                <img src="/images/index-page/wipe.png" class="icon" alt="">
                <p>Cleaning Company</p>
            </div>
        </div>
    </div>
@elseif($_GET['dir'] == 'lending_services')
    <?php
    $active = 'referral_partners';
    $subactive = 'lending_services';
    ?>
    <div class="col-12 title mb-3">
        <h1>Lending Services</h1>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
        <div class="box-item" onclick="window.location='{{ url('/form') }}'">
            <div>
                <p>Pre-Approval Form</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
        <div class="box-item" onclick="window.location = '{{ url('home?dir=contact_information') }}'">
            <div>
                <p>Contact Information</p>
            </div>
        </div>
    </div>
@elseif($_GET['dir'] == 'title')
    <?php
    $active = 'referral_partners';
    $subactive = 'title';
    ?>
    <div class="col-12 title mb-3">
        <h1>Title</h1>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
        <div class="box-item" onclick="window.location= '{{ url('home?dir=coming_soon') }}'">
            <div>
                <p>Capital Title Group</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
        <div class="box-item" onclick="window.location= '{{ url('home?dir=coming_soon') }}'">
            <div>
                <p>Law Offices of Adorno-Cunill & Damas, PL</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
        <div class="box-item" onclick="window.location= '{{ url('home?dir=coming_soon') }}'">
            <div>
                <p>Title Answers</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
        <div class="box-item" onclick="window.location= '{{ url('home?dir=coming_soon') }}'">
            <div>
                <p>Home Sweet Home Title</p>
            </div>
        </div>
    </div>
@elseif($_GET['dir'] == 'insurance')
    <?php
    $active = 'referral_partners';
    $subactive = 'insurance';
    ?>
    <div class="col-12 title mb-3">
        <h1>Insurance</h1>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
        <div class="box-item" onclick="window.location= '{{ url('home?dir=coming_soon') }}'">
            <div>
                <p>Florida First Insurance</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
        <div class="box-item" onclick="window.location= '{{ url('home?dir=coming_soon') }}'">
            <div>
                <p>EnTrust Insurance </p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
        <div class="box-item" onclick="window.location= '{{ url('home?dir=kelley_guerra') }}'">
            <div>
                <p>Kelly Guerra company</p>
            </div>
        </div>
    </div>
@elseif($_GET['dir'] == 'kelley_guerra')
    <div class="col-12 title mb-3">
        <h1>Contact Information</h1>
    </div>
    <div class="m-auto contact_information">
        <ul>
            <li><a href="#" class="text-luxe"><img src="/images/index-page/luxe_lending.svg" alt=""> KLG
                    Insurance Group</a></li>
            <li><a href="mailto:kelly@klginsurancegroup.com" class="text-luxe"><img src="/images/index-page/link_web.svg"
                        alt=""> kelly@klginsurancegroup.com</a></li>
            <li><a href="#" class="text-luxe"><img src="/images/index-page/location-1.svg" alt=""> 7154
                    Pembroke Rd, Miramar, FL 33023</a>
            </li>
            <li><a href="http://www.klginsurancegroup.com" class="text-luxe"><img src="/images/index-page/website.svg"
                        alt=""> www.klginsurancegroup.com</a>
            </li>
            <li><a href="tel: (305) 984 4352" class="text-luxe"><img src="/images/index-page/phone-black-1.svg"
                        alt=""> C: 305.984.4352</a></li>
            <li><a href="tel: (954) 893 0005" class="text-luxe"><img src="/images/index-page/phone-black-1.svg"
                        alt=""> O: 954.893.0005</a></li>
        </ul>
    </div>
@elseif($_GET['dir'] == 'home_inspectors')
    <?php
    $active = 'referral_partners';
    $subactive = 'inspectors';
    ?>
    <div class="col-12 title mb-3">
        <h1>Home Inspectors</h1>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
        <div class="box-item" onclick="window.location= '{{ url('home?dir=coming_soon') }}'">
            <div>
                <p>Truview Inspections</p>
            </div>
        </div>
    </div>
@elseif($_GET['dir'] == 'accountant')
    <?php
    $active = 'referral_partners';
    $subactive = 'accountant';
    ?>
    <div class="col-12 title mb-3">
        <h1>Accountant</h1>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
        <div class="box-item" onclick="window.location= '{{ url('home?dir=coming_soon') }}'">
            <div>
                <p>Allegiant Accounting & Tax</p>
            </div>
        </div>
    </div>
@elseif($_GET['dir'] == 'moving_company')
    <?php
    $active = 'referral_partners';
    $subactive = 'moving_company';
    ?>
    <div class="col-12 title mb-3">
        <h1>Moving Company</h1>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
        <div class="box-item" onclick="window.location= '{{ url('home?dir=coming_soon') }}'">
            <div>
                <p>ETG Moving & Delivery LLC</p>
            </div>
        </div>
    </div>
@elseif($_GET['dir'] == 'staging_company')
    <?php
    $active = 'referral_partners';
    $subactive = 'staging_company';
    ?>
    <div class="col-12 title mb-3">
        <h1>Staging Company</h1>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
        <div class="box-item" onclick="window.location= '{{ url('home?dir=coming_soon') }}'">
            <div>
                <p>Elite Home Staging</p>
            </div>
        </div>
    </div>
@elseif($_GET['dir'] == 'marketing_company')
    <?php
    $active = 'referral_partners';
    $subactive = 'marketing_company';
    ?>
    <div class="col-12 title mb-3">
        <h1>Marketing Company</h1>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
        <div class="box-item" onclick="window.location= '{{ url('home?dir=coming_soon') }}'">
            <div>
                <p>Planet Marketing</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
        <div class="box-item" onclick="window.location= '{{ url('home?dir=coming_soon') }}'">
            <div>
                <p>Print4Humans</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
        <div class="box-item" onclick="window.location= '{{ url('home?dir=coming_soon') }}'">
            <div>
                <p>Live Colors</p>
            </div>
        </div>
    </div>
@elseif($_GET['dir'] == 'attorneys')
    <?php
    $active = 'referral_partners';
    $subactive = 'attorneys';
    ?>
    <div class="col-12 title mb-3">
        <h1>Attorneys</h1>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
        <div class="box-item" onclick="window.location= '{{ url('home?dir=attorneys_evictions') }}'">
            <div>
                <p>Evictions</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
        <div class="box-item" onclick="window.location= '{{ url('home?dir=attorneys_probates') }}'">
            <div>
                <p>Probates</p>
            </div>
        </div>
    </div>
@elseif($_GET['dir'] == 'attorneys_evictions')
    <div class="col-12 title mb-3">
        <h1>Evictions</h1>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
        <div class="box-item" onclick="window.location= '{{ url('home?dir=coming_soon') }}'">
            <div>
                <p>Alex E Borel</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
        <div class="box-item" onclick="window.location= '{{ url('home?dir=coming_soon') }}'">
            <div>
                <p>Law Offices of Samir Masri</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
        <div class="box-item" onclick="window.location= '{{ url('home?dir=coming_soon') }}'">
            <div>
                <p>Pensky & Kim PA</p>
            </div>
        </div>
    </div>
@elseif($_GET['dir'] == 'attorneys_probates')
    <div class="col-12 title mb-3">
        <h1>Probates</h1>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
        <div class="box-item" onclick="window.location= '{{ url('home?dir=coming_soon') }}'">
            <div>
                <p>Barbara Sanjurjo</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
        <div class="box-item" onclick="window.location= '{{ url('home?dir=coming_soon') }}'">
            <div>
                <p>Justin Stivers</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
        <div class="box-item" onclick="window.location= '{{ url('home?dir=coming_soon') }}'">
            <div>
                <p>Chevallier law</p>
            </div>
        </div>
    </div>
@elseif($_GET['dir'] == 'calculators')
    <?php
    $active = 'training_knowledge_center';
    $subactive = 'calculators';
    ?>
    <div class="col-12 title mb-3">
        <h1>Real Estate Worksheets</h1>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
        <div class="box-item" onclick="window.location= '{{ route('calculators.cap_rate') }}'">
            <div>
                <p>CAP RATE CALCULATOR</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
        <div class="box-item" onclick="window.location= '{{ route('calculators.flipping_house') }}'">
            <div>
                <p>FLIPPING HOUSE SHEET</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
        <div class="box-item" onclick="window.location= '{{ route('calculators.seller_net_sheet') }}'">
            <div>
                <p>SELLER NET SHEET</p>
            </div>
        </div>
    </div>
@elseif($_GET['dir'] == 'cleaning_company')
    <?php
    $active = 'referral_partners';
    $subactive = 'cleaning_company';
    ?>
    <div class="col-12 title mb-3">
        <h1>Cleaning Company</h1>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
        <div class="box-item" onclick="window.location= '{{ url('home?dir=coming_soon') }}'">
            <div>
                <p>Miami Top Cleaning Service (commercial)</p>
            </div>
        </div>
    </div>
@elseif($_GET['dir'] == 'contact_information')
    <div class="col-12 title mb-3">
        <h1>Contact Information</h1>
    </div>
    <div class="m-auto contact_information">
        <ul>
            <li><a href="#" class="text-luxe"><img src="/images/index-page/luxe_lending.svg" alt=""> LUXE
                    Lending</a></li>
            <li><a href="tel: (305) 907 7081" class="text-luxe"><img src="/images/index-page/phone-black-1.svg"
                        alt=""> 305.907.7081</a></li>
            <li><a href="mailto:info@luxehomelean.com" class="text-luxe"><img src="/images/index-page/link_web.svg"
                        alt=""> info@luxehomelean.com</a></li>
        </ul>
    </div>
    @endif
    </div>
    </div>
@endsection
