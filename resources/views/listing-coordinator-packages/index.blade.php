@extends('layouts.app', ['active' => 'leads_services_support', 'subactive' => 'request_listing_closing_coordinators'])
@section('content')
    <style>
        .h1-luxe {
            font-family: 'gothicbold';
        }

        .pricing-title {
            font-size: 22px;
            margin: 0;
            font-weight: normal;
            text-align: center;
        }

        .pricing-price {
            font-size: 40px;
            margin: 10px 0 10px 0;
            text-align: center;
        }

        .pricing-button {
            font-size: 14px;
            background-color: #262626;
            border-radius: 20px;
            color: white !important;
            padding: 10px 20px;
            border: 0;
            width: 100%;
        }

        .table td:not(:first-child) {
            text-align: center;
        }

        .table tr:first-child th {
            border-top: 0;
        }

        .table .highlight {
            background-color: #f3f3f3;
        }

        .package-highlight {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
    </style>
    <div class="container-fluid agents">

        <div>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">
                        <h1 class="h1-luxe">PACKAGES</h1>
                    </th>
                    <th scope="col">
                        <div class="pricing">
                            <p class="pricing-title">Silver Package</p>
                            <p class="pricing-price">$99</p>
                            <button class="pricing-button"
                                    onclick="window.location.href='/listing-coordinator-packages/silver'">Buy Package
                            </button>
                        </div>
                    </th>
                    <th scope="col">
                        <div class="pricing">
                            <p class="pricing-title">Gold Package</p>
                            <p class="pricing-price">$149</p>
                            <button class="pricing-button"
                                    onclick="window.location.href='/listing-coordinator-packages/gold'">Buy Package
                            </button>
                        </div>
                    </th>
                    <th scope="col" class="highlight package-highlight ">
                        <div class="pricing">
                            <p class="pricing-title">Platinum Package</p>
                            <p class="pricing-price">$299</p>
                            <button class="pricing-button"
                                    onclick="window.location.href='/listing-coordinator-packages/platinum'">Buy Package
                            </button>
                        </div>
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>MLS Input Only</td>
                    <td><img src="/images/checkmark.svg" alt="" class="text-center"></td>
                    <td><img src="/images/checkmark.svg" alt="" class="text-center"></td>
                    <td class="highlight"><img src="/images/checkmark.svg" alt="" class="text-center"></td>
                </tr>
                <tr>
                    <td>Prepare Property Description</td>
                    <td></td>
                    <td><img src="/images/checkmark.svg" alt="" class="text-center"></td>
                    <td class="highlight"><img src="/images/checkmark.svg" alt="" class="text-center"></td>
                </tr>
                <tr>
                    <td>Schedule Photos</td>
                    <td></td>
                    <td><img src="/images/checkmark.svg" alt="" class="text-center"></td>
                    <td class="highlight"><img src="/images/checkmark.svg" alt="" class="text-center"></td>
                </tr>
                <tr>
                    <td>Order Sign & Sign Post</td>
                    <td></td>
                    <td><img src="/images/checkmark.svg" alt="" class="text-center"></td>
                    <td class="highlight"><img src="/images/checkmark.svg" alt="" class="text-center"></td>
                </tr>
                <tr>
                    <td>Edits to MLS: price changes, open houses, status changes</td>
                    <td></td>
                    <td><img src="/images/checkmark.svg" alt="" class="text-center"></td>
                    <td class="highlight"><img src="/images/checkmark.svg" alt="" class="text-center"></td>
                </tr>
                <tr>
                    <td>Add listing agreement to Broker Sumo</td>
                    <td></td>
                    <td></td>
                    <td class="highlight"><img src="/images/checkmark.svg" alt="" class="text-center"></td>
                </tr>
                <tr>
                    <td>Outreach to owner(s) (ex photos, open houses, information)</td>
                    <td></td>
                    <td></td>
                    <td class="highlight"><img src="/images/checkmark.svg" alt="" class="text-center"></td>
                </tr>
                <tr>
                    <td>Obtain Seller Property Disclosure</td>
                    <td></td>
                    <td></td>
                    <td class="highlight"><img src="/images/checkmark.svg" alt="" class="text-center"></td>
                </tr>
                <tr>
                    <td>Obtain Information for Spec Sheet</td>
                    <td></td>
                    <td></td>
                    <td class="highlight"><img src="/images/checkmark.svg" alt="" class="text-center"></td>
                </tr>
                <tr>
                    <td>Obtain HOA application & attach to MLS</td>
                    <td></td>
                    <td></td>
                    <td class="highlight"><img src="/images/checkmark.svg" alt="" class="text-center"></td>
                </tr>
                <tr>
                    <td>Obtain budget for HOA</td>
                    <td></td>
                    <td></td>
                    <td class="highlight"><img src="/images/checkmark.svg" alt="" class="text-center"></td>
                </tr>
                <tr>
                    <td>Obtain condo docs</td>
                    <td></td>
                    <td></td>
                    <td class="highlight"><img src="/images/checkmark.svg" alt="" class="text-center"></td>
                </tr>
                <tr>
                    <td>
                        <div>
                            Assist with marketing materials/content
                            <ul>
                                <li>Social Media Posts</li>
                                <li>Property Website</li>
                                <li>Luxury Brochure</li>
                                <li>Spec Sheet</li>
                                <li>Email Blast</li>
                            </ul>
                        </div>
                    </td>
                    <td></td>
                    <td></td>
                    <td class="highlight"><img src="/images/checkmark.svg" class="text-center"></td>
                </tr>
                <tr>
                    <td>Order Brochure</td>
                    <td></td>
                    <td></td>
                    <td class="highlight"><img src="/images/checkmark.svg" alt="" class="text-center"></td>
                </tr>
                <tr>
                    <td>Order Mailers</td>
                    <td></td>
                    <td></td>
                    <td class="highlight"><img src="/images/checkmark.svg" alt="" class="text-center"></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
