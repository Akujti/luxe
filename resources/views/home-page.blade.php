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
            display: flex;
            justify-content: center;
            cursor: pointer;
            border-radius: 10px;
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
            height: 320px;
            width: 100%;
            object-fit: cover;
        }

        .email-blasts-box .box-item {
            height: auto !important;
        }

        @media (min-width: 1720px) {
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
        @if (!isset($_GET['dir']))

            <div class="col-12 title mb-3">
                <h1>WELCOME TO MYLUXEHUB</h1>
            </div>

            <div class="row p-0 m-0 mb-6 mt-4">
                <div class="col-12 col-lg-5 mt-3 agent-logs">
                    <x-brokersumo-tiers :user="auth()->user()" :row="true"/>
                </div>
                <div class="col-12 col-lg-3 mt-3 agent-logs">
                    <div class="w-100">
                        <div class="form-group">
                            <label for="">Branch Manager</label>
                            <div class="input-group">
                                <input type="text" class="form-control p-2"
                                       value="{{ auth()->user()->profile->support_specialist_name }}" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="w-100">
                        <div class="form-group">
                            <label for="">Loan Officer</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control p-2"
                                       value="{{ auth()->user()->profile->loan_officer_name }}" readonly>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 mt-3 agent-logs">
                    <div class="w-100" style="cursor: pointer">
                        <label for=""></label>
                        <a href="/leaderboard/sales"
                           class="btn btn-luxe d-flex align-items-center w-100"
                           target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                 class="bi bi-trophy" viewBox="0 0 16 16">
                                <path
                                    d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5q0 .807-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33 33 0 0 1 2.5.5m.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935m10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935M3.504 1q.01.775.056 1.469c.13 2.028.457 3.546.87 4.667C5.294 9.48 6.484 10 7 10a.5.5 0 0 1 .5.5v2.61a1 1 0 0 1-.757.97l-1.426.356a.5.5 0 0 0-.179.085L4.5 15h7l-.638-.479a.5.5 0 0 0-.18-.085l-1.425-.356a1 1 0 0 1-.757-.97V10.5A.5.5 0 0 1 9 10c.516 0 1.706-.52 2.57-2.864.413-1.12.74-2.64.87-4.667q.045-.694.056-1.469z"/>
                            </svg>
                            <span class="ml-3">View Leaderboard</span>
                        </a>
                        <a href="https://myluxehub.com/storage/files/171051148701rwFvMwnr.pdf"
                           class="btn btn-luxe mt-2 d-flex align-items-center"
                           target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                 class="bi bi-question-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                <path
                                    d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286m1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94"/>
                            </svg>
                            <span class="ml-3">LUXE FAQ</span>
                        </a>
                        <a href="https://cal.com/luxeproperties/ana-g.-contract-specialist-1-on-1"
                           class="btn btn-luxe mt-2 w-100 text-left d-flex align-items-center" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <g id="vuesax_linear_save-add" data-name="vuesax/linear/save-add"
                                   transform="translate(-620 -188)">
                                    <g id="save-add">
                                        <path id="Vector"
                                              d="M14,3.11V14.47c0,1.45-1.04,2.06-2.31,1.36L7.76,13.64a1.76,1.76,0,0,0-1.52,0L2.31,15.83c-1.27.7-2.31.09-2.31-1.36V3.11A3.12,3.12,0,0,1,3.11,0h7.78A3.12,3.12,0,0,1,14,3.11Z"
                                              transform="translate(622 193.88)" fill="none" stroke="#fff"
                                              stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                                        <path id="Vector-2" data-name="Vector"
                                              d="M14,3.11V14.47c0,1.45-1.04,2.06-2.31,1.36L8,13.77V6.99A3.12,3.12,0,0,0,4.89,3.88H0V3.11A3.12,3.12,0,0,1,3.11,0h7.78A3.12,3.12,0,0,1,14,3.11Z"
                                              transform="translate(628 190)" fill="none" stroke="#fff"
                                              stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                                        <path id="Vector-3" data-name="Vector" d="M0,0H4" transform="translate(627 200)"
                                              fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
                                              stroke-width="1.5"/>
                                        <path id="Vector-4" data-name="Vector" d="M0,4V0" transform="translate(629 198)"
                                              fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
                                              stroke-width="1.5"/>
                                        <path id="Vector-5" data-name="Vector" d="M0,0H24V24H0Z"
                                              transform="translate(620 188)" fill="none" opacity="0"/>
                                    </g>
                                </g>
                            </svg>
                            <span class="ml-3">Get Contract Help</span>
                        </a>
                        <a href="https://cal.com/luxeproperties"
                           class="btn btn-luxe mt-2 w-100 text-left d-flex align-items-center"
                           target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24">
                                <g id="vuesax_linear_calendar" data-name="vuesax/linear/calendar"
                                   transform="translate(-492 -188)">
                                    <g id="calendar">
                                        <path id="Vector" d="M0,0V3" transform="translate(500 190)" fill="none"
                                              stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
                                              stroke-width="1.5"/>
                                        <path id="Vector-2" data-name="Vector" d="M0,0V3" transform="translate(508 190)"
                                              fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
                                              stroke-width="1.5"/>
                                        <path id="Vector-3" data-name="Vector" d="M0,0H17"
                                              transform="translate(495.5 197.09)" fill="none" stroke="#fff"
                                              stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                                        <path id="Vector-4" data-name="Vector"
                                              d="M18,5v8.5c0,3-1.5,5-5,5H5c-3.5,0-5-2-5-5V5C0,2,1.5,0,5,0h8C16.5,0,18,2,18,5Z"
                                              transform="translate(495 191.5)" fill="none" stroke="#fff"
                                              stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                                        <path id="Vector-5" data-name="Vector" d="M0,0H24V24H0Z"
                                              transform="translate(492 188)" fill="none" opacity="0"/>
                                        <path id="Vector-6" data-name="Vector" d="M.495.5H.5"
                                              transform="translate(507.2 201.2)" fill="none" stroke="#fff"
                                              stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                        <path id="Vector-7" data-name="Vector" d="M.495.5H.5"
                                              transform="translate(507.2 204.2)" fill="none" stroke="#fff"
                                              stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                        <path id="Vector-8" data-name="Vector" d="M.495.5H.5"
                                              transform="translate(503.501 201.2)" fill="none" stroke="#fff"
                                              stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                        <path id="Vector-9" data-name="Vector" d="M.495.5H.5"
                                              transform="translate(503.501 204.2)" fill="none" stroke="#fff"
                                              stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                        <path id="Vector-10" data-name="Vector" d="M.495.5H.5"
                                              transform="translate(499.8 201.2)" fill="none" stroke="#fff"
                                              stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                        <path id="Vector-11" data-name="Vector" d="M.495.5H.5"
                                              transform="translate(499.8 204.2)" fill="none" stroke="#fff"
                                              stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                    </g>
                                </g>
                            </svg>

                            <span class="ml-3">Book A Marketing Appointment</span>
                        </a>
                    </div>
                </div>
                <div class="col-12 mb-3">
                    <hr class="mb-4" style="border-bottom: 2px solid #00000014;">
                    <div class=" row m-0 align-items-start justify-content-start m-0 p-0" style="">
                        <div class="col-md-5">
                            <div class="mb-4">
                                <div class="mb-4 log-title">
                                    LUXE Platforms & Tech
                                </div>
                                <div class="grid grid-left" style=" grid-template-columns:33% 33% 33%">
                                    @foreach($sso_icons as $sso)
                                        <div class="bg-box" onclick="window.open('{{ $sso['url'] }}','_blank')">
                                            <div>
                                                <img src="/images/index-page/sso/{{$sso['icon']}}" class="icon" alt="">
                                                {{--                                                <p>{{$sso['name']}}</p>--}}
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="mb-4 log-title">
                                    Office Requests
                                </div>
                                <div class="box-item log-item row m-0 align-items-start justify-content-start m-0 p-0">
                                    <div class="row m-0 logs w-100">
                                        @forelse(auth()->user()->load(['form_submits'=>function($q){$q->where('created_at','>=',now()->subDays(31));}])->form_submits->take(3) as $form_submit)
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
                            <div class="mb-4">
                                <div class="log-title mb-4">
                                    Marketing Requests
                                </div>
                                <div class="box-item log-item row m-0 align-items-start justify-content-start m-0 p-0">
                                    <div class="row m-0 logs">
                                        @forelse($marketing_orders as $order)
                                            <div>
                                                <span>#{{ $order->id }}&nbsp;</span>- {{ $order->created_at->diffForHumans() }}
                                                - {{ $order->status }}
                                            </div>
                                        @empty
                                            <div>
                                                No marketing request submissions found.
                                            </div>
                                        @endforelse
                                    </div>

                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="mb-4 log-title">
                                    Orders
                                </div>
                                <div class="box-item log-item row m-0 align-items-start justify-content-start m-0 p-0">
                                    <div class="row m-0 logs">
                                        @forelse($orders as $order)
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
                            <div class="mb-4">
                                <div class="log-title mb-4">
                                    Attending Events
                                </div>
                                <div class="box-item log-item row m-0 align-items-start justify-content-start m-0 p-0">
                                    <div class="row m-0 logs">

                                        @forelse(auth()->user()->load(['attending_events'=>function($q){$q->where('events.date','>=',now());}])->attending_events->take(3) as $attend_event)
                                            <div>
                                                <span>{{ $attend_event->title }}&nbsp;</span>-
                                                {{ \Carbon\Carbon::parse($attend_event->date)->diffForHumans() }}
                                            </div>
                                        @empty
                                            <div>
                                                No attending events found.
                                            </div>
                                        @endforelse
                                    </div>

                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="log-title mb-4">
                                    Favorite Videos
                                </div>
                                <div class="box-item log-item row m-0 align-items-start justify-content-start m-0 p-0">
                                    <div class="row m-0 logs">
                                        @forelse(auth()->user()->favoriteVideos as $video)
                                            <div>
                                                <a href="{{route('video.single_video',$video)}}">{{$video->title}}</a>
                                            </div>
                                        @empty
                                            <div>
                                                No favorite videos found.
                                            </div>
                                        @endforelse
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-7 pl-md-4">
                            <div class="mb-2 log-title">
                                News Feed
                            </div>
                            @php
                                $news_feed = App\Models\CustomSection::whereTitle('News Feed')->first();
                            @endphp
                            <div style="overflow: auto">
                                @if ($news_feed)
                                    {!! $news_feed->text !!}
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 title my-3">
                <h1>LUXE Services</h1>
            </div>
        @endif
        <div class="mb-3">
            @if (!isset($_GET['dir']))
                <div class="grid grid-layout">
                    <div class="box-item box-item-padding "
                         onclick="window.location='{{ url('/home?dir=marketing_branding') }}'">
                        <div>
                            <img class="icon" src="/images/index-page/services_staff_requests-icon.svg" alt="">
                            <p>Marketing & Branding</p>
                        </div>
                    </div>
                    <div class="box-item box-item-padding"
                         onclick="window.location='{{ url('/home?dir=training_knowledge_center') }}'">
                        <div>
                            <img class="icon" src="/images/index-page/training_events-icon.svg" alt="">
                            <p>Training & Knowledge Center</p>
                        </div>
                    </div>
                    <div class="box-item box-item-padding "
                         onclick="window.location='{{ url('/home?dir=leads_services_support') }}'">
                        <div>
                            <img class="icon" src="/images/index-page/leads-icon.svg" alt="">
                            <p>Leads, Services & Support</p>
                        </div>
                    </div>
                    <div class="box-item box-item-padding "
                         onclick="window.location='{{ route('referral-partner-category.index') }}'">
                        <div>
                            <img class="icon" src="/images/index-page/luxe_lending-icon.svg" alt="">
                            <p>Referral Partners</p>
                        </div>
                    </div>
                    <div class="box-item box-item-padding"
                         onclick="window.location='{{ url('/home?dir=luxe_apparel') }}'">
                        <div>
                            <img class="icon" src="/images/index-page/luxe_product_store-icon.svg" alt="">
                            <p>LUXE Marketplace</p>
                        </div>
                    </div>
                    <div class="box-item box-item-padding"
                         onclick="window.location='{{ url('/home?dir=office_staff_directory') }}'">
                        <div>
                            <img class="icon" src="/images/index-page/office_locations-icon.svg" alt="">
                            <p>Office & Staff Directory</p>
                        </div>
                    </div>
                    <div class="box-item box-item-padding" onclick="window.location='{{ url('/user/events') }}'">
                        <div>
                            <img class="icon" src="/images/index-page/training_events-icon.svg" alt="">
                            <p>Live Classes & Events</p>
                        </div>
                    </div>
                    <div class="box-item box-item-padding" onclick="window.location='{{ route('listings.index') }}'">
                        <div>
                            <img class="icon" src="/images/index-page/services_staff_requests-icon.svg" alt="">
                            <p>Coming Soon & Off Market Properties</p>
                        </div>
                    </div>
                    <div class="box-item box-item-padding"
                         onclick="window.location = '{{ url('/store/product/zillow-listing-showcase-shoot') }}'">
                        <div>
                            <img src="/images/index-page/zillow-icon.png" class="icon" alt="">
                            <p>Zillow Listing Showcase</p>
                        </div>
                    </div>
                </div>
            @elseif($_GET['dir'] == 'marketing_branding')
                <div class="col-12 title mb-3">
                    <h1>Marketing & Branding</h1>
                </div>
                <div class="d-md-flex justify-content-center" style="gap:14px;">
                    <div class="grid grid-layout p-0 mb-auto">
                        <div class="box-item box-item-small-padding"
                             onclick="window.location='{{ route('canva.marketing.requests') }}'">
                            <div>
                                <img class="icon p-1" src="/images/index-page/online-marketing-designer.svg"
                                     alt="">
                                <p>Marketing Designer </p>
                            </div>
                        </div>

                        <div class="box-item box-item-small-padding"
                             onclick="window.open('https://realtorprint.com/pages/luxe')">
                            <div>
                                <img src="/images/index-page/print_marketing.svg" class="icon" alt="">
                                <p>Print Marketing<br></p>
                            </div>
                        </div>

                        <div class="box-item box-item-small-padding"
                             onclick="window.location = '{{ url('/home?dir=signs_photo_design_requests') }}'">
                            <div>
                                <img src="/images/index-page/print_marketing.svg" class="icon" alt="">
                                <p>Photo & Design Requests</p>
                            </div>
                        </div>
                        <div class="box-item box-item-small-padding"
                             onclick="window.location = '{{ url('/store/product/zillow-listing-showcase-shoot') }}'">
                            <div>
                                <img src="/images/index-page/zillow-icon.png" class="icon" alt="">
                                <p>Zillow Listing Showcase</p>
                            </div>
                        </div>
                        <div class="box-item box-item-small-padding" onclick="window.location = '{{ url('resume') }}'">
                            <div>
                                <img src="/images/index-page/resume_builder.svg" class="icon" alt="">
                                <p>Resume Builder</p>
                            </div>
                        </div>
                        <div class="box-item box-item-small-padding" onclick="window.location='/user/files?id=22'">
                            <div>
                                <img class="icon" src="/images/favicon.png" alt="">
                                <p>Logos</p>
                            </div>
                        </div>

                        <div class="box-item box-item-small-padding"
                             onclick="window.location='/general/form/other/marketing-menu'">
                            <div>
                                <img class="icon" src="/images/index-page/logo_creation_request.svg" alt="">
                                <p>Marketing Menu & Services</p>
                            </div>
                        </div>
                        <div class="box-item box-item-small-padding"
                             onclick="window.location='/coming-soon'">
                            <div>
                                <img class="icon" src="/images/index-page/training_videos.svg" alt="">
                                <p>Video Content</p>
                            </div>
                        </div>
                    </div>
                    <style>
                        #marketing-template-requests .box-guide img {
                            width: 52px;
                            height: 52px;
                        }

                        @media (max-width: 1539px) {
                            #marketing-template-requests .box-guide img {
                                width: 46px;
                                height: 46px;
                            }
                        }

                        @media (min-width: 768px) {
                            .h-md-100 {
                                height: 100% !important;
                            }
                        }
                    </style>
                </div>
                <div id="marketing-template-requests"
                     class="box-guides row px-4">
                    <div class="w-100 p-0 m-0">
                        <h3 class="px-4 my-4">
                            Submit Marketing Template Requests
                        </h3>
                        <div class="row px-4">
                            <div class="col-md-6 col-12">
                                <div class="row">
                                    @forelse($marketing_requests as $marketing_request)
                                        @if ($marketing_request->title != 'Presentation Booklet')
                                            <div class="box-guide col-3 text-center">
                                                <a href="{{ route('marketing.requests') }}?type={{ $marketing_request->title }}"
                                                   class="text-luxe" style="flex-direction:column;">
                                                    <img src="{{ $marketing_request->image }}" alt=""
                                                         style="object-fit:contain">
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
                            <div class="col-md-6 col-12 d-flex justify-content-center align-items-center">
                                <a href="https://cal.com/luxeproperties" class="btn btn-luxe mb-3 px-5"
                                   style="text-wrap:wrap"
                                   target="_blank">
                                    Schedule 1-ON-1 with Marketing Coordinator
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="row p-0 m-0 w-100 mb-3" style="border-bottom: 3px solid #00000014;"></div>
        <style>
            .box-guide p {
                text-align: center;
            }
        </style>
        <div class="row w-100 p-0 m-0">
            <div class="col-12 col-md-4">
                <div class="box-item align-items-start box-guides row p-0 m-0"
                     style="min-height: 490px !important;height:100% !important;">
                    <div class="w-100 row p-0 m-0">
                        <h3 class="row m-0 p-0 w-100 justify-content-between mt-4 mb-3 px-4">
                            <span>Latest Social Media Posts</span>
                            <a class="text-luxe" href="{{ route('file-posts.index') }}">See more</a>
                        </h3>

                        @forelse($social_media_posts as $post)
                            <div class="box-guide col-6">
                                <a href="/storage/{{ $post->file }}"
                                   download="{{ $post->title }}.{{ $post->type_file }}" target="_blank"
                                   class="text-dark" style="flex-direction:column;">
                                    <img src="/storage/{{ $post->thumbnail ? $post->thumbnail : $post->file }}"
                                         alt="" style="width: 100px;height:100px;">
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
            <div class="col-12 col-md-4">
                <div class="box-item align-items-start box-guides row p-0 m-0"
                     style="min-height: 490px !important;height:100% !important;">
                    <div class="w-100 row p-0 m-0">
                        <h3 class="row m-0 p-0 w-100 justify-content-between mt-4 mb-3 px-4">
                            <span>Downloadable Guides</span>
                            <a class="text-luxe" href="{{ route('guides.index') }}">See more</a>
                        </h3>
                        @php
                            $guide = $guides->where('title', 'The Home Selling Guide')->first();
                        @endphp
                        @if ($guide)
                            <div class="box-guide col-6">
                                <a href="{{ '/storage/' . $guide->file }}"
                                   download="{{ $guide->title }}.{{ $guide->type_file }}" target="_blank"
                                   class="text-dark" style="flex-direction:column;">
                                    <img src="{{ '/storage/' . $guide->thumbnail }}" alt=""
                                         style="width: 100px;height:100px;">
                                    <p>{{ $guide->title }}</p>
                                </a>
                            </div>
                        @endif
                        @php
                            $guide = $guides->where('title', 'The Home Buying Guide')->first();
                        @endphp
                        @if ($guide)
                            <div class="box-guide col-6">
                                <a href="{{ '/storage/' . $guide->file }}"
                                   download="{{ $guide->title }}.{{ $guide->type_file }}" target="_blank"
                                   class="text-dark" style="flex-direction:column;">
                                    <img src="{{ '/storage/' . $guide->thumbnail }}" alt=""
                                         style="width: 100px;height:100px;">
                                    <p>{{ $guide->title }}</p>
                                </a>
                            </div>
                        @endif
                        @php
                            $guide = $guides->where('title', 'FSBO Guide')->first();
                        @endphp
                        @if ($guide)
                            <div class="box-guide col-6">
                                <a href="{{ '/storage/' . $guide->file }}"
                                   download="{{ $guide->title }}.{{ $guide->type_file }}" target="_blank"
                                   class="text-dark">
                                    <img src="{{ '/storage/' . $guide->thumbnail }}" alt=""
                                         style="width: 100px;height:100px;">
                                    <p>{{ $guide->title }}</p>
                                </a>
                            </div>
                        @endif
                        @php
                            $guide = $guides->where('title', "Expired Guide - My House Didn't Sell... Now What?")->first();
                        @endphp
                        @if ($guide)
                            <div class="box-guide col-6">
                                <a href="{{ '/storage/' . $guide->file }}"
                                   download="{{ $guide->title }}.{{ $guide->type_file }}" target="_blank"
                                   class="text-dark">
                                    <img src="{{ '/storage/' . $guide->thumbnail }}" alt=""
                                         style="width: 100px;height:100px;">
                                    <p>{{ $guide->title }}</p>
                                </a>
                            </div>
                        @endif
                        @php
                            $guide = $guides->where('title', 'The Commercial Real Estate Guide')->first();
                        @endphp
                        @if ($guide)
                            <div class="box-guide col-6">
                                <a href="{{ '/storage/' . $guide->file }}"
                                   download="{{ $guide->title }}.{{ $guide->type_file }}" target="_blank"
                                   class="text-dark">
                                    <img src="{{ '/storage/' . $guide->thumbnail }}" alt=""
                                         style="width: 100px;height:100px;">
                                    <p>{{ $guide->title }}</p>
                                </a>
                            </div>
                        @endif
                        @php
                            $guide = $guides->where('title', 'Miami Neighborhood Guide')->first();
                        @endphp
                        @if ($guide)
                            <div class="box-guide col-6">
                                <a href="{{ '/storage/' . $guide->file }}"
                                   download="{{ $guide->title }}.{{ $guide->type_file }}" target="_blank"
                                   class="text-dark">
                                    <img src="{{ '/storage/' . $guide->thumbnail }}" alt=""
                                         style="width: 100px;height:100px;">
                                    <p>{{ $guide->title }}</p>
                                </a>
                            </div>
                        @endif

                        @if ($guides->count() == 0)
                            <div class="box-guide justify-content-start pl-4">
                                <p>No results found.</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="box-item align-items-start box-guides row p-0 m-0"
                     style="min-height: 490px !important;height: 100% !important;">
                    <div class="w-100 row p-0 m-0">
                        <h3 class="row m-0 p-0 w-100 justify-content-between mt-4 mb-3 px-4">
                            <span>Unbranded Posts</span>
                            <a class="text-luxe"
                               href="{{ route('files.index') . '?id=' . $unbranded_media_posts_folder_id }}">See
                                more</a>
                        </h3>
                        @forelse($unbranded_media_posts as $post)
                            <div class="box-guide col-6">
                                <a href="/storage/{{ $post->file }}"
                                   download="{{ $post->title }}.{{ $post->type_file }}" target="_blank"
                                   class="text-dark" style="flex-direction:column;">
                                    <img src="/storage/{{ $post->thumbnail ? $post->thumbnail : $post->file }}"
                                         alt="" style="width: 100px;height:100px;">
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
        </div>
        <div class="row p-0 m-0 w-100 mb-3 mt-4" style="border-bottom: 3px solid #00000014;"></div>
        <div id="email-blasts" class="row w-100 mt-4 p-0 email-blasts-box m-0">
            <h3 class="row m-0 p-0 w-100 justify-content-start mt-4 mb-4 pl-4"
                style="font-family: gothicbold;font-size:20px">Click to view our recent email blasts</h3>
            @forelse($email_blasts as $email_blast)
                <div class="col-12 col-md-6 col-lg-4 mb-4 mb-md-auto">
                    <div class="box-item align-items-start bg-transparent row p-0 m-0">
                        <p class="pt-2" style="font-size:22px">{{ $email_blast->title }}</p>
                        <div class="w-100">
                            <x-preview-image>
                                <img src="{{ $email_blast->image_url }}" class="rounded modal-target"
                                     style="object-position: top" alt="">
                            </x-preview-image>

                            <p class="text-center mt-1" style="font-family: gothicregular;font-size:15px">
                                Click here to view full design</p>
                            @if ($email_blast->title == 'Monthly Properties')
                                <div class="modal modal-new" id="monthly_properties">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content bg-white" style="height: 300px !important;">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Inquiry</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body pb-0">
                                                <form action="{{ route('general.email.post') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="form_title"
                                                           value="Email Blast Design Request">
                                                    <input type="hidden" name="agent_name"
                                                           value="{{ auth()->user()->profile->fullname }}">
                                                    <input type="hidden" name="agent_email"
                                                           value="{{ auth()->user()->email }}">
                                                    <input type="hidden" name="email_blast"
                                                           value="{{ $email_blast->title }}">
                                                    <p>Please select one or more from below</p>
                                                    <div class="mb-3">
                                                        <div class="form-check-inline">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" class="form-check-input"
                                                                       value="Miami-Dade"
                                                                       style="height: auto !important"
                                                                       name="locations[]">Miami-Dade
                                                            </label>
                                                        </div>
                                                        <div class="form-check-inline">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" class="form-check-input"
                                                                       value="Broward" style="height: auto !important"
                                                                       name="locations[]">Broward
                                                            </label>
                                                        </div>
                                                        {{-- <div class="form-check-inline">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" class="form-check-input"
                                                                    value="Luxury" style="height: auto !important"
                                                                    name="locations[]">Luxury
                                                            </label>
                                                        </div> --}}
                                                    </div>
                                                    <button class="btn-luxe btn-block mb-0">Submit your request</button>
                                                </form>
                                            </div>
                                            {{-- <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>

                                <button class="btn-luxe btn-block mb-3" onclick="toggleModal('monthly_properties')">
                                    Submit
                                    your request
                                </button>
                            @else
                                <div class="modal modal-new" id="email-blast-modal-{{ $email_blast->id }}">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content bg-white" style="height: 255px !important;">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Confirmation</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body pb-0">
                                                <form action="{{ route('general.email.post') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="form_title"
                                                           value="Email Blast Design Request">
                                                    <input type="hidden" name="agent_name"
                                                           value="{{ auth()->user()->profile->fullname }}">
                                                    <input type="hidden" name="agent_email"
                                                           value="{{ auth()->user()->email }}">
                                                    <input type="hidden" name="email_blast"
                                                           value="{{ $email_blast->title }}">
                                                    <p>Are you sure you want to submit your request for this email
                                                        blast?
                                                    </p>
                                                    <button class="btn-luxe btn-block mb-0">Submit your request</button>
                                                </form>
                                            </div>
                                            {{-- <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                                <button class="btn-luxe btn-block mb-3"
                                        onclick="toggleModal('email-blast-modal-{{ $email_blast->id }}')">Submit
                                    your request
                                </button>
                            @endif
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
        <!-- <div class="box-guides">
                                                                                                                                                                                                                            <h3 class="row m-0 p-0 w-100 justify-content-between mt-4 mb-4 px-4 ">
                                                                                                                                                                                                                                <span>Most popular marketing templates</span>
                                                                                                                                                                                                                                <a href="{{ route('canva.marketing.requests') }}" class="text-luxe text-bold" style="font-size:16px">See
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
            @if ($diy->title !== 'Business Cards' && $diy->title !== 'Postcards')
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


























































































































































































































































































































































            @endif
        @endforeach
        </div> -->
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
            <h1>Photo & Design Requests</h1>
        </div>
        <div class="grid grid-layout">
            <div class="box-item box-item-padding"
                 onclick="window.location = '{{ url('general/form/other/logo-creation-request') }}'">
                <div>
                    <img src="/images/index-page/logo_creation_request.svg" class="icon" alt="">
                    <p>Create A Logo<br>&nbsp;</p>
                </div>
            </div>
            <div class="box-item box-item-padding"
                 onclick="window.location = '{{ url('general/form/other/photoshoots-for-listings') }}'">
                <div>
                    <img src="/images/index-page/photoshoot_for_listings.svg" class="icon" alt="">
                    <p>Schedule Photoshoots For Listings</p>
                </div>
            </div>
            <div class="box-item box-item-padding" onclick="window.location = '{{ url('/store/photo-fees') }}'">
                <div>
                    <img src="/images/index-page/luxe_product_store-icon.svg" class="icon" alt="">
                    <p>Photo Fees</p>
                </div>
            </div>
            <div class="box-item box-item-padding"
                 onclick="window.location = '{{ url('store/product/sign-post-login-realpost') }}'">
                <div>
                    <img src="/images/blend.svg" class="icon" alt="">
                    <p>Sign Posts</p>
                </div>
            </div>
            <div class="box-item box-item-padding" onclick="window.location = '{{ route('marketing.requests') }}'">
                <div>
                    <img src="/images/index-page/print_marketing.svg" class="icon" alt="">
                    <p>Custom Design Requests</p>
                </div>
            </div>
            <div class="box-item box-item-padding"
                 onclick="window.location = '{{ url('/store/product/zillow-listing-showcase-shoot') }}'">
                <div>
                    <img src="/images/index-page/zillow-icon.png" class="icon" alt="">
                    <p>Zillow Listing Showcase</p>
                </div>
            </div>
            <div class="box-item box-item-padding" onclick="window.open('https://mlsblast.com/', '_blank') ">
                <div>
                    <img src="/images/index-page/blast.svg" class="icon" alt="">
                    <p>MLS Blast</p>
                </div>
            </div>
        </div>
    @elseif($_GET['dir'] == 'leads_services_support')
        <div class="col-12 title mb-3">
            <h1>Leads, Services, & Support</h1>
        </div>
        <div class="grid grid-layout">
            <div class="box-item box-item-padding" onclick="window.location='{{ url('/home?dir=leads') }}'">
                <div>
                    <img class="icon" src="/images/index-page/services_staff_requests-icon.svg" alt="">
                    <p>Get Leads</p>
                </div>
            </div>
            <div class="box-item box-item-padding"
                 onclick="window.location='{{ url('/home?dir=request_listing_closing_coordinators') }}'">
                <div>
                    <img class="icon" src="/images/index-page/closing_coordinators.svg" alt="">
                    <p>Request Listing/Closing Coordinators</p>
                </div>
            </div>
            <div class="box-item box-item-padding" onclick="window.location = '{{ url('general/form/escrow/index') }}'">
                <div>
                    <img src="/images/index-page/rental_escrow.svg" class="icon" alt="">
                    <p>Rental Escrow Disbursement</p>
                </div>
            </div>
            <div class="box-item box-item-padding" onclick="window.location = '{{ url('appointments/create') }}'">
                <div>
                    <img src="/images/index-page/open_house_signup.svg" class="icon" alt="">
                    <p>Open House Signup</p>
                </div>
            </div>
            <div class="box-item box-item-padding"
                 onclick="window.location = '{{ url('general/form/contract-help/index') }}'">
                <div>
                    <img src="/images/index-page/wire_instructions_request.svg" class="icon" alt="">
                    <p>Get Contract Help</p>
                </div>
            </div>
            <div class="box-item box-item-padding"
                 onclick="window.location = '{{ url('general/form/commercial-help/index') }}'">
                <div>
                    <img src="/images/index-page/wire_instructions_request.svg" class="icon" alt="">
                    <p>Get A Mentor/Partner For Commercial Transactions</p>
                </div>
            </div>
            {{-- <div class="box-item box-item-padding" onclick="window.location = '{{ route('marketing.requests') }}'">
                <div>
                    <img src="/images/index-page/print_marketing.svg" class="icon" alt="">
                    <p>Design Requests</p>
                </div>
            </div> --}}
            <div class="box-item box-item-padding"
                 onclick="window.location = '{{ url('general/form/other/wire-instructions-request') }}'">
                <div>
                    <img src="/images/index-page/wire_instructions_request.svg" class="icon" alt="">
                    <p>Wire Instructions Request</p>
                </div>
            </div>
            <div class="box-item box-item-padding" onclick="window.location = '{{ url('/home?dir=calculators') }}'">
                <div>
                    <img src="/images/index-page/calculator.svg" class="icon" alt="">
                    <p>Real Estate Worksheets</p>
                </div>
            </div>
            <div class="box-item box-item-padding"
                 onclick="window.location = '{{ url('general/form/agent_referrals/get-your-referral-agreement-signed') }}'">
                <div>
                    <img src="/images/index-page/wire_instructions_request.svg" class="icon" alt="">
                    <p>Get Your Referral Agreement Signed</p>
                </div>
            </div>
            <div class="box-item box-item-padding"
                 onclick="window.open('https://cal.com/luxeproperties/vulcan-7', '_blank');">
                <div>
                    <img src="/images/index-page/vulcan.png" class="icon" alt="">
                    <p>Vulcan 7 Reservation</p>
                </div>
            </div>
            <div class="box-item box-item-padding"
                 onclick="window.open('https://cal.com/luxeproperties/reonomy-reservation', '_blank');">
                <div>
                    <img src="/images/index-page/open_house_signup.svg" class="icon" alt="">
                    <p>Reonomy Reservation</p>
                </div>
            </div>
            <div class="box-item box-item-padding"
                 onclick="window.location = '{{ url('general/form/other/invoice-request') }}'">
                <div>
                    <img src="/images/index-page/wire_instructions_request.svg" class="icon" alt="">
                    <p>Invoice Request</p>
                </div>
            </div>
            <div class="box-item box-item-padding"
                 onclick="window.location = '{{ url('general/form/leads/get-your-property-listed-on-costar-loopnet') }}'">
                <div>
                    <img src="/images/index-page/wire_instructions_request.svg" class="icon" alt="">
                    <p>Get Your Property Listed on Costar/Loopnet</p>
                </div>
            </div>
            <div class="box-item box-item-padding"
                 onclick="window.location = '{{ url('general/form/leads/get-legal-help') }}'">
                <div>
                    <img src="/images/index-page/wire_instructions_request.svg" class="icon" alt="">
                    <p>Get Legal Help</p>
                </div>
            </div>
            <div class="box-item box-item-padding"
                 onclick="window.location = '{{ url('general/form/leads/get-help-on-why-my-listing-isnt-moving') }}'">
                <div>
                    <img src="/images/index-page/wire_instructions_request.svg" class="icon" alt="">
                    <p>Get Help On Why My Listing Isn't Moving</p>
                </div>
            </div>
            <div class="box-item box-item-padding"
                 onclick="window.location = '{{ url('general/form/leads/mls-cancellation') }}'">
                <div>
                    <img src="/images/index-page/wire_instructions_request.svg" class="icon" alt="">
                    <p>Request MLS Listing Cancellation</p>
                </div>
            </div>
            {{--            <div class="box-item box-item-padding"--}}
            {{--                 onclick="window.location = '{{ route('newconstructionsearch') }}'">--}}
            {{--                <div>--}}
            {{--                    <img src="/images/index-page/construction.svg" class="icon" alt="">--}}
            {{--                    <p>New Construction Search</p>--}}
            {{--                </div>--}}
            {{--            </div>--}}
        </div>
    @elseif($_GET['dir'] == 'request_listing_closing_coordinators')
            <?php
            $active = 'leads_services_support';
            $subactive = 'request_listing_closing_coordinators';
            ?>
        <div class="col-12 title mb-3">
            <h1>Request Listing/Closing Coordinators</h1>
        </div>
        <div class="grid grid-layout-two">
            <div class="box-item box-item-padding" onclick="window.location = '{{ url('listing-coordinators') }}'">
                <div>
                    <img src="/images/index-page/listing_coordinators.svg" class="icon" alt="">
                    <p>Listing Coordinators</p>
                </div>
            </div>
            <div class="box-item box-item-padding"
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
        <div class="grid grid-layout-three">
            <div class="box-item box-item-center" onclick="window.location = '{{ url('general/form/cinc/index') }}'">
                <div>
                    <img src="/images/index-page/seller-team.png" alt="">
                </div>
            </div>
            <div class="box-item box-item-center"
                 onclick="window.location = '{{ url('general/form/luxe/join-luxe-buyers') }}'">
                <div>
                    <img src="/images/index-page/buyer-team.png" alt="">
                </div>
            </div>
            <div class="box-item box-item-center"
                 onclick="window.location = '{{ url('general/form/luxe/join-luxe-rentals') }}'">
                <div>
                    <img src="/images/index-page/rental-team.png" alt="">
                </div>
            </div>
            <div class="box-item box-item-center" onclick="window.location = '{{ url('general/form/leads/index') }}'">
                <div>
                    <img src="/images/index-page/partner_1-removebg-preview.png" alt="">
                </div>
            </div>
            <div class="box-item box-item-center"
                 onclick="window.location = '{{ url('general/form/leads/opcity-leads') }}'">
                <div>
                    <img src="/images/index-page/partner_3-removebg-preview.png" alt="">
                </div>
            </div>
            {{--            <div class="box-item box-item-center"--}}
            {{--                 onclick="window.location = '{{ url('general/form/leads/prime-street-leads') }}'">--}}
            {{--                <div>--}}
            {{--                    <img src="/images/index-page/partner_4-removebg-preview.png" alt="">--}}
            {{--                </div>--}}
            {{--            </div>--}}
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
                                                    <p class="time p-0 m-0">By <span
                                                            class="title">LUXE Properties</span>
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
            <div class="w-100 text-center my-3">
                <a href="{{ route('videos') }}" class="btn btn-luxe">View all training videos</a>
                <a href="{{ route('favorite.videos') }}" class="btn btn-luxe">View all favorite videos</a>
            </div>
        </div>
        <div class="row p-0 m-0 w-100 mb-3 mx-2" style="border-bottom: 3px solid #00000014;"></div>
        <script type="text/javascript" src="{{ asset('js/tiny-slider.js') }}"></script>
        <div class="col-12 mb-4">
            <h2 class="title-video">More ways to keep expanding your knowledge</h2>
        </div>
        <div class="row">
            <div class="d-md-flex" style="gap:10px;">
                <div class="grid grid-left grid-layout-three">
                    <div class="box-item box-item-padding" onclick="window.location = '{{ url('user/videos') }}'">
                        <div class="inside-box">
                            <img src="/images/index-page/training_videos.svg" class="icon" alt="">
                            <p>LUXE Online Video University</p>
                        </div>
                    </div>

                    <div class="box-item box-item-padding" onclick="window.location='{{ url('/user/events') }}'">
                        <div class="inside-box">
                            <img class="icon" src="/images/index-page/training_events-icon.svg" alt="">
                            <p>Training & Events <br>Calendar</p>
                        </div>
                    </div>

                    <div class="box-item box-item-padding" onclick="window.location = '{{ url('user/files') }}'">
                        <div class="inside-box">
                            <img src="/images/index-page/office_documents.svg" class="icon" alt="">
                            <p>Downloadable Docs, Guides & Excels</p>
                        </div>
                    </div>

                    <div class="box-item box-item-padding"
                         onclick="window.location = '{{ url('/home?dir=email_addendum_verbiage_builder') }}'">
                        <div class="inside-box">
                            <img src="/images/index-page/email_templates.svg" class="icon" alt="">
                            <p>Email & Addendum Verbiage Builder</p>
                        </div>
                    </div>
                    <div class="box-item box-item-padding"
                         onclick="window.location = '{{ url('/home?dir=calculators') }}'">
                        <div class="inside-box">
                            <img src="/images/index-page/calculator.svg" class="icon" alt="">
                            <p>Real Estate Worksheets</p>
                        </div>
                    </div>
                    <div class="box-item box-item-padding" onclick="window.location = '{{ url('user/coaching') }}'">
                        <div class="inside-box">
                            <img src="/images/index-page/mentors.svg" class="icon" alt="">
                            <p>LUXE Coaching</p>
                        </div>
                    </div>
                </div>
                <div class="box-item align-items-start box-guides row p-0 m-0 w-100"
                     style="height:auto !important;width:100%">
                    <h3 class="row m-0 p-0 w-100 justify-content-between mt-4 mb-4 px-4">
                        <span>Upcoming Events</span>
                    </h3>

                    @forelse($upcoming_events as $event)
                        <div class="box-guide col-12">
                            <a href="{{ route('events.index') }}" class="text-dark">
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
        <div class="grid grid-layout-two">
            <div class="box-item box-item-padding"
                 onclick="window.location = '{{ url('user/written-email-templates') }}'">
                <div>
                    <img src="/images/index-page/email-icon.svg" class="icon" alt="">
                    <p>Email Templates</p>
                </div>
            </div>
            <div class="box-item box-item-padding"
                 onclick="window.location = ('{{ route('addendum-templates.index') }}')">
                <div>
                    <img src="/images/index-page/addendum-icon.svg" class="icon" alt="">
                    <p>Addendum Templates</p>
                </div>
            </div>
        </div>
    @elseif($_GET['dir'] == 'office_staff_directory')
        <div class="col-12 title mb-3">
            <h1>Office & Staff Directory</h1>
        </div>
        <div class="grid grid-layout">
            <div class="box-item box-item-padding" onclick="window.location='{{ url('/office-locations') }}'">
                <div>
                    <img class="icon" src="/images/index-page/office_locations-icon.svg" alt="">
                    <p>Office Locations<br>&nbsp;</p>
                </div>
            </div>
            <div class="box-item box-item-padding" onclick="window.location = '{{ url('bookings') }}'">
                <div>
                    <img src="/images/index-page/conference_room.svg" class="icon" alt="">
                    <p>Conference Room <br>Reservations</p>
                </div>
            </div>
            <div class="box-item box-item-padding" onclick="window.location = '{{ route('luxe.staff.index') }}'">
                <div>
                    <img src="/images/index-page/leads-icon.svg" class="icon" alt="">
                    <p>Your LUXE Staff<br>&nbsp;</p>
                </div>
            </div>
            <div class="box-item box-item-padding" onclick="window.location = '{{ route('luxe.managers.index') }}'">
                <div>
                    <img src="/images/index-page/leads-icon.svg" class="icon" alt="">
                    <p>Your LUXE Managers<br>&nbsp;</p>
                </div>
            </div>
            <div class="box-item box-item-padding" onclick="window.location = '{{ route('real.estate.teams') }}'">
                <div>
                    <img src="/images/index-page/leads-icon.svg" class="icon" alt="">
                    <p>Real Estate Teams<br>&nbsp;</p>
                </div>
            </div>
            <div class="box-item box-item-padding"
                 onclick="window.location = '{{ route('luxe.loan.officers.index') }}'">
                <div>
                    <img src="/images/index-page/leads-icon.svg" class="icon" alt="">
                    <p>Your LUXE Loan Officers<br>&nbsp;</p>
                </div>
            </div>
            <div class="box-item box-item-padding"
                 onclick="window.location = '{{ url('general/form/agent_referrals/index') }}'">
                <div>
                    <img src="/images/index-page/new_agents_referrals.svg" class="icon" alt="">
                    <p>New Agents To Join LUXE<br>&nbsp;</p>
                </div>
            </div>
            <div class="box-item box-item-padding" onclick="window.location = '{{ route('optin.agents.index') }}'">
                <div>
                    <img src="/images/index-page/leads-icon.svg" class="icon" alt="">
                    <p>Referral Agents With LUXE<br>&nbsp;</p>
                </div>
            </div>
            <div class="box-item box-item-padding" onclick="window.location = '{{ route('showing.agents.index') }}'">
                <div>
                    <img src="/images/index-page/services_staff_requests-icon.svg" class="icon" alt="">
                    <p>Showing Agents<br>&nbsp;</p>
                </div>
            </div>
            <div class="box-item box-item-padding" onclick="window.location = '{{ route('mls-directory') }}'">
                <div>
                    <img src="/images/index-page/global-search.svg" class="icon" alt="">
                    <p>MLS Directory</p>
                </div>
            </div>
            <div class="box-item box-item-padding"
                 onclick="window.location = '{{route('events.galleries.index')}}'">
                <div>
                    <img src="/images/index-page/events-gallery.png" class="icon p-1" alt="">
                    <p>Events Gallery</p>
                </div>
            </div>

            <div class="box-item box-item-padding" onclick="window.location = '{{ route('photographers.index') }}'">
                <div>
                    <img src="/images/index-page/photography.svg" class="icon" alt="">
                    <p>Photographers</p>
                </div>
            </div>
        </div>
    @elseif($_GET['dir'] == 'luxe_apparel')
        <div class="col-12 title mb-3 text-center">
            <h1>LUXE Marketplace</h1>
        </div>
        <div class="grid grid-layout">
            <div class="box-item box-item-padding" onclick="window.location='{{ url('store/printed-guides') }}'">
                <div>
                    <img class="icon" src="/images/index-page/luxe_product_store-icon.svg" alt="">
                    <p>Printed Guides</p>
                </div>
            </div>
            <div class="box-item box-item-padding" onclick="window.location='{{ url('store/luxe-apparel') }}'">
                <div>
                    <img class="icon" src="/images/index-page/luxe_product_store-icon.svg" alt="">
                    <p>LUXE Apparel</p>
                </div>
            </div>
            <div class="box-item box-item-padding"
                 onclick="window.location = '{{ url('store/product/sign-post-login-realpost') }}'">
                <div>
                    <img src="/images/blend.svg" class="icon" alt="">
                    <p>Sign Posts</p>
                </div>
            </div>
            {{--            <div class="box-item box-item-padding" onclick="window.location='{{ url('store/client-screening') }}'">--}}
            {{--                <div>--}}
            {{--                    <img class="icon" src="/images/index-page/luxe_product_store-icon.svg" alt="">--}}
            {{--                    <p>Client Screening</p>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            {{-- <div class="box-item box-item-padding" onclick="window.location='{{ url('store/product/background-check') }}'">
                <div>
                    <img class="icon" src="/images/index-page/luxe_product_store-icon.svg" alt="">
                    <p>Client Screening</p>
                </div>
            </div> --}}
            <div class="box-item box-item-padding"
                 onclick="window.location='{{ url('store/product/fiu-course-real-estate-investment-decision-making-advising-high-net-worth-clients') }}'">
                <div>
                    <img class="icon" src="/images/index-page/luxe_product_store-icon.svg" alt="">
                    <p>Real Estate Course</p>
                </div>
            </div>
            {{--        <div class="box-item box-item-padding"--}}
            {{--            onclick="window.location='{{ url('store/product/luxe-holiday-cards') }}'">--}}
            {{--            <div>--}}
            {{--                <img class="icon" src="/images/tree.svg" alt="">--}}
            {{--                <p>LUXE Holiday Cards</p>--}}
            {{--            </div>--}}
            {{--        </div>--}}
            <div class="box-item box-item-padding" onclick="window.location='{{ url('store/crm-services') }}'">
                <div>
                    <img class="icon" src="/images/index-page/luxe_product_store-icon.svg" alt="">
                    <p>CRM Services</p>
                </div>
            </div>
            <div class="box-item box-item-padding" onclick="window.location = '{{ url('/store/custom-items') }}'">
                <div>
                    <img src="/images/index-page/luxe_product_store-icon.svg" class="icon" alt="">
                    <p>Open House Signs & Kit</p>
                </div>
            </div>
            <div class="box-item box-item-padding" onclick="window.location='{{ url('store/luxe-merch') }}'">
                <div>
                    <img class="icon" src="/images/index-page/luxe_product_store-icon.svg" alt="">
                    <p>LUXE Merch</p>
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
            <div class="box-item"
                 onclick="window.location = '{{ url('general/form/other/photoshoots-for-listings') }}'">
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
            <div class="box-item"
                 onclick="window.location = '{{ url('general/form/other/photoshoots-for-listings') }}'">
                <div>
                    <img src="/images/index-page/photoshoot_for_listings.svg" class="icon" alt="">
                    <p>Photoshoot <br> for Listings</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="box-item"
                 onclick="window.location = '{{ url('general/form/other/wire-instructions-request') }}'">
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
                <li><a href="mailto:kelly@klginsurancegroup.com" class="text-luxe"><img
                            src="/images/index-page/link_web.svg"
                            alt=""> kelly@klginsurancegroup.com</a></li>
                <li><a href="#" class="text-luxe"><img src="/images/index-page/location-1.svg" alt=""> 7154
                        Pembroke Rd, Miramar, FL 33023</a>
                </li>
                <li><a href="http://www.klginsurancegroup.com" class="text-luxe"><img
                            src="/images/index-page/website.svg"
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
        <div class="grid grid-layout-three">
            <div class="box-item box-item-padding"
                 onclick="window.location= '{{ route('calculators.cap_rate') }}'">
                <div>
                    <img src="/images/index-page/calculator.svg" class="icon" alt="">
                    <p>Cap Rate Calculator</p>
                </div>
            </div>
            <div class="box-item box-item-padding"
                 onclick="window.location= '{{ route('calculators.flipping_house') }}'">
                <div>
                    <img src="/images/index-page/open_house_signup.svg" class="icon" alt="">
                    <p>Fix & Flip Calculator</p>
                </div>
            </div>
            <div class="box-item box-item-padding"
                 onclick="window.location= '{{ route('calculators.seller_net_sheet') }}'">
                <div>
                    <img src="/images/index-page/luxe_lending-icon.svg" class="icon" alt="">
                    <p>Seller Net Calculator</p>
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
                <li><a href="#" class="text-luxe"><img src="/images/index-page/luxe_lending.svg" alt="">
                        LUXE
                        Lending</a></li>
                <li><a href="tel: (305) 907 7081" class="text-luxe"><img src="/images/index-page/phone-black-1.svg"
                                                                         alt=""> 305.907.7081</a></li>
                <li><a href="mailto:info@luxehomeloan.com" class="text-luxe"><img src="/images/index-page/link_web.svg"
                                                                                  alt=""> info@luxehomeloan.com</a></li>
            </ul>
        </div>
        @endif
        </div>
        </div>
        @endsection

        <script>
            function toggleModal(id) {
                $('#' + id).modal('show')
            }
        </script>
