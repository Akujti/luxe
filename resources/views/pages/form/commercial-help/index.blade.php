@extends('layouts.app', ['active' => 'leads_services_support', 'subactive' => 'get_commercial_help'])
@section('content')
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
    </style>
    <div class="{{ auth()->check() ? 'container-fluid' : 'container mt-4' }}">
        <div class="col-12 title mb-3">
            <h1>Get A Mentor/Partner For Commercial Transactions</h1>
        </div>
        <div class="grid grid-layout">
            <div></div>
            <div class="box-item box-item-padding"
                onclick="window.location='{{ url('general/form/commercial-help/purchase') }}'">
                <div>
                    <img class="icon" src="/images/index-page/closing_coordinators.svg" alt="">
                    <p>Commercial Purchase</p>
                </div>
            </div>
            <div class="box-item box-item-padding"
                onclick="window.location='{{ url('general/form/commercial-help/lease') }}'">
                <div>
                    <img class="icon" src="/images/index-page/closing_coordinators.svg" alt="">
                    <p>Commercial Lease</p>
                </div>
            </div>
        </div>
    </div>
@endsection
