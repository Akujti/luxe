@extends('layouts.app', ['active' => 'luxe_incentives'])
@section('content')
    <style>
        h4 {
            margin-bottom: 15px;
        }

        * {
            font-family: 'Montserrat'
        }

        ul.list-unstyled {
            list-style: none;
            padding: 0;
        }

        ul.list-unstyled li {
            margin-bottom: 15px;
            font-size: 20px;

        }

        ul.inside-text li {
            display: flex;
            /* align-items: center; */
        }

        ul.inside-text li::before {
            content: "•";
            margin-right: 5px;
            /* Adjust as needed */
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
        <div class="row">
            <div class="col-md-6">
                <div class="text-center">
                    <h2 class="under-contract my-5">LUXE INCENTIVES</h2>
                </div>
                <h4 class="text-center">ANNUAL TOP PRODUCERS</h4>
                <h6 class="text-center">2023 Edition</h6>

                <p class="text-center">Yearly Top Producers are reviewed in January for the previous calendar year and
                    marketing budgets are released in February.</p>
                <ul class="list-unstyled my-5">
                    <li>★ $6 Million in Yearly Sales - $250 Monthly Marketing Budget</li>
                    <li>★ $11 Million in Yearly Sales - $500 Monthly Marketing Budget</li>
                    <li class="mb-0">★ $16 Million in Yearly Sales - $1,000 Monthly Marketing Budget </li>
                </ul>
                <p>Please take a moment to review the below:</p>
                <ul class="pl-0 inside-text" style="list-style-position: inside;">
                    <li class="ms-0">Yearly top producers are the top 5% of agents who have been with the brokerage for at
                        least 6 months
                        or more.</li>
                    <li>The sales volume tiers below are subject to change every year dependent of the top 5%.</li>
                    <li>Minimum company dollars based on a 3% commission at that sales volume must be met in order to
                        qualify for a marketing budget.</li>
                    <li>Marketing budgets will have set duration periods for 3 months.</li>
                    <li>Company leads such as Zillow and CINC are excluded from sales volume calculation.</li>
                    <li>Only Team Leaders Qualify for these Incentives.</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h2 class="under-contract my-5 text-center">LEGACY INCENTIVES</h2>
                <p class="text-center mb-4">Any rewards will be paid out in the proceeding quarter, after you hit the
                    required sales volume. It will
                    not be paid in the same quarter.</p>
                <div class="row text-center align-items-end">
                    <h4 class="col-12">$10 Million Dollar Club</h4>
                    <div class="col-md-6">
                        <img src="/images/incentives/ruth-christ.jpg" alt="" class="incentive-img" height="120px">
                        <p>Dinner at Ruth's Chris Steak House</p>
                    </div>
                    <div class="col-md-6">
                        <img src="/images/incentives/miami.png" alt="" class="incentive-img" height="160px">
                        <p>2 Heat Tickets</p>
                    </div>
                </div>
                <hr>
                <div class="row text-center justify-content-center">
                    <div class="col-md-6">
                        <h4 class="col-12">$25 Million Dollar Club</h4>
                        <img src="/images/incentives/macbook-air.png" alt="" class="incentive-img shadow-img">
                        <p>Macbook Air</p>
                    </div>
                    <div class="col-md-6">
                        <h4 class="col-12">$50 Million Dollar Club</h4>
                        <img src="/images/incentives/hotel.jpg" alt="" class="incentive-img shadow-img">
                        <p>3-Night Trip to All-Inclusive Resort - Tropical Destination</p>
                    </div>
                    <hr class="col-12">
                    <div class="col-md-6">
                        <h4 class="">$75 Million Dollar Club</h4>
                        <img src="/images/incentives/watch.png" alt="" class="incentive-img" height="200px">
                        <p>Rolex Oyster Perpetual</p>
                    </div>
                    <div class="col-md-6">
                        <h4>$100 Million Dollar Club</h4>
                        <img src="/images/incentives/paris.jpg" alt="" class="incentive-img shadow-img">
                        <p>10-Day Trip to Europe</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
