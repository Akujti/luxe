@extends('layouts.app', ['active' => 'referral_partners', 'subactive' => $referralPartnerCategory->title])
@section('js')
@endsection
@section('css')
    <style>
        .box-grid-item {
            background-color: #F7F7F7;
            text-align: center;
            min-height: 200px;
            margin-bottom: 26px;
            border-radius: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        .box-grid-item img {
            object-fit: cover;
            width: 100%;
        }

        .box-grid-item .icon {
            width: 70px;
            height: 70px;
            object-fit: cover;
        }

        .box-grid-item p {
            font-size: 18px;
            font-family: 'gothicregular';
            text-transform: uppercase;
            margin: 0 !important;
            font-weight: bold
        }

        @media screen and (max-width: 500px) {
            .box-grid-item p {
                font-size: 18px;
            }
        }

        @media (min-width: 768px) and (max-width: 980px) {
            .box-grid-item p {
                font-size: 18px;
            }
        }
    </style>
@endsection
@section('content')
    <style>
    </style>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 title mb-3 text-center">
                <h1 class="font-weight-bold">{{ $referralPartnerCategory->title }}</h1>
            </div>
            @foreach ($referralPartnerCategory->children as $item)
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="box-grid-item"
                        onclick="window.location = '{{ $item->path ? url($item->path) : route('referral-partner-category.show', $item->id) }}'">
                        <div>
                            {{-- <img src="/images/index-page/landing_services.svg" class="icon" alt=""> --}}
                            <p>{{ $item->title }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
            @foreach ($referralPartnerCategory->referral_partners as $item)
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="box-grid-item"
                        onclick="window.location = '{{ $item->path ? url($item->path) : route('referral-partners.show', $item->id) }}'">
                        <div>
                            {{-- <img src="/images/index-page/landing_services.svg" class="icon" alt=""> --}}
                            <p>{{ $item->title }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
