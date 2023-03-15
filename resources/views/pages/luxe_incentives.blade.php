@extends('layouts.app', ['active' => 'luxe_incentives'])
@section('content')
    <style>
        h4 {
            margin-bottom: 15px;
        }

        ul li {
            margin-bottom: 15px;
            font-size: 24px;
        }

        ul {
            margin-bottom: 35px;
        }

        h2.under-contract {
            background: #262626;
            color: white;
            padding: 10px;
            border-radius: 15px
        }

        .container-fluid {
            margin-top: 0px !important;
        }

        h4.text-center {
            letter-spacing: 6px;
        }

        .incentive-img {
            border-radius: 10px;
            width: 100%;
            object-fit: contain;
        }

        .shadow-img {
            box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15)
        }

        p {
            font-family: gothicregular;
            margin-top: 20px;
            margin-bottom: 0px;
        }
    </style>
    <div class="container-fluid mb-4">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="text-center">
                    <h2 class="under-contract my-5">LUXE INCENTIVES</h2>
                </div>
                <h4 class="text-center">2022 TOP PRODUCERS</h4>
                <ul class="list-unstyled">
                    <li>★ $5 Million in Yearly Sales - $250 Monthly Marketing Budget</li>
                    <li>★ $10 Million in Yearly Sales - $500 Monthly Marketing Budget</li>
                    <li>★ $15 Million in Yearly Sales - $1,000 Monthly Marketing Budget </li>
                </ul>
                <hr>
                <h4 class="text-center">LEGACY INCENTIVES</h4>
                <div class="row text-center align-items-end">
                    <h4 class="col-12">$10 Million Dollar Club</h4>
                    <div class="col-md-6">
                        <img src="/images/incentives/capital.png" alt="" class="incentive-img" height="120px">
                        <p>Dinner at Capital Grille</p>
                    </div>
                    <div class="col-md-6">
                        <img src="/images/incentives/miami.png" alt="" class="incentive-img" height="160px">
                        <p>2 Heat Tickets</p>
                    </div>
                </div>
                <hr>
                <div class="row text-center justify-content-center">
                    <h4 class="col-12">$25 Million Dollar Club</h4>
                    <div class="col-md-6">
                        <img src="/images/incentives/macbook.png" alt="" class="incentive-img">
                        <p>Macbook Pro</p>
                    </div>
                </div>
                <hr>
                <div class="row text-center justify-content-center">
                    <h4 class="col-12">$50 Million Dollar Club</h4>
                    <div class="col-md-6">
                        <img src="/images/incentives/hotel.jpg" alt="" class="incentive-img shadow-img">
                    </div>
                    <div class="col-12">
                        <p>3-Night Trip to All-Inclusive Resort - Tropical Destination</p>
                    </div>
                </div>
                <hr>
                <div class="row text-center justify-content-center">
                    <h4 class="col-12">$75 Million Dollar Club</h4>
                    <div class="col-md-6">
                        <img src="/images/incentives/watch.png" alt="" class="incentive-img" height="200px">
                        <p>Rolex Oyster Perpetual</p>
                    </div>
                </div>
                <hr>
                <div class="row text-center justify-content-center">
                    <h4 class="col-12">$100 Million Dollar Club</h4>
                    <div class="col-md-6">
                        <img src="/images/incentives/paris.jpg" alt="" class="incentive-img shadow-img">
                        <p>10-Day Trip to Europe</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
