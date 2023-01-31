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
    </style>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="text-center">
                    <h2 class="under-contract my-5">LUXE INCENTIVES</h2>
                </div>
                <h4 class="text-center">2022 TOP PRODUCERS</h4>
                <ul>
                    <li>$5 Million in Yearly Sales - $250 Monthly Marketing Budget</li>
                    <li>$10 Million in Yearly Sales - $500 Monthly Marketing Budget</li>
                    <li>$15 Million in Yearly Sales - $1,000 Monthly Marketing Budget </li>
                </ul>
                <hr>
                <h4 class="text-center">LEGACY INCENTIVES</h4>
                <div class="row">
                    <div class="col-md-6">
                        <h4>$10 Million Dollar Club</h4>
                        <ul>
                            <li>Dinner at Capital Grille</li>
                            <li>2 Heat Tickets</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h4>$25 Million Dollar Club</h4>
                        <ul>
                            <li>Macbook Pro</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h4>$50 Million Dollar Club</h4>
                        <ul>
                            <li>3-Night Trip to All-Inclusive Resort - Tropical Destination </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h4>$75 Million Dollar Club</h4>
                        <ul>
                            <li>Rolex Oyster Perpetual</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h4>$100 Million Dollar Club</h4>
                        <ul>
                            <li>10-Day Trip to Europe </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
