@extends('layouts.app', ['active' => 'referral_partners'])
@section('js')
@endsection
@section('css')
    <style>
        .box-grid-item {
            text-align: center;
            min-height: 200px;
            margin-bottom: 26px;
            display: flex;
            align-items: end;
            justify-content: center;
            cursor: pointer;
            background-size: cover !important;
            background-color: #262626 !important;
            box-shadow: 0px 0px 12px 0px rgb(0 0 0 / 9%);
            border-radius: 5px;
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
            font-weight: bold;
            color: white;
            padding-bottom: 15px;
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
                <h1 class="font-weight-bold">Referral Partners</h1>
            </div>
            @foreach ($categories as $item)
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="box-grid-item"
                        style="background-image: linear-gradient(0deg, rgba(0,0,0,0.7) 0%, rgba(255,255,255,0) 100%), url({{ asset('storage/' . $item->icon) }})"
                        onclick="window.location = '{{ route('referral-partner-category.show', $item) }}'">
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
