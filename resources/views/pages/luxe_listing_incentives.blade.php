@extends('layouts.app', ['active' => 'marketing_branding', 'subactive' => 'luxe_listing_incentives'])

@section('content')
    <style>
        /* General Styles */
        * {
            font-family: 'Montserrat', sans-serif;
        }

        h2.under-contract {
            background: #262626;
            color: white;
            padding: 15px;
            border-radius: 15px;
            text-transform: uppercase;
            margin-bottom: 30px;
        }

        .section-title {
            margin-bottom: 20px;
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }

        ul {
            list-style-type: disc;
            padding-left: 20px;
            margin-bottom: 20px;
        }

        ul li {
            font-size: 16px;
            margin-bottom: 10px;
            line-height: 1.5;
        }

        ul ul {
            list-style-type: circle;
            padding-left: 20px;
        }


        .package-card {
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            background-color: #fff;
            display: flex;
            flex-direction: column;
            height: 100%;
            transition: box-shadow 0.3s ease;
        }

        .package-card:hover {
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        /* Make cards the same height */
        .row {
            display: flex;
            flex-wrap: wrap;
        }

        .col-md-4 {
            display: flex;
            align-items: stretch;
            margin-bottom: 20px;
        }

        .package-card {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        /* Responsive Styling */
        @media (max-width: 767px) {
            .col-md-4 {
                flex: 0 0 100%;
                max-width: 100%;
            }
        }
    </style>

    <div class="container-fluid mb-4">
        <div class="text-center">
            <h2 class="under-contract">Luxury Listing Incentives</h2>
        </div>

        <div class="row gap-4">
            <!-- $2M Listing Package -->
            <div class="col-md-4">
                <div class="package-card p-3">
                    <h4 class="section-title">$2M Listing Package:</h4>
                    <ul>
                        <li>Sign Post</li>
                        <li>LUXE Photos (Max. $150 shoot)</li>
                        <li>Zillow Showcase Listing ($999 value)
                            <ul>
                                <li>
                                    3D Tour & Floorplan not included
                                </li>
                            </ul>
                        </li>
                        <li>25 Qty Printed Brochures ($80 value)</li>
                        <li>25 Qty Printed Floorplans ($30 value)</li>
                        <li>25 Qty Printed Spec Sheets ($30 value)</li>
                        <li>IG Boosted Post ($100 value)</li>
                    </ul>
                </div>
            </div>

            <!-- $3M Listing Package -->
            <div class="col-md-4">
                <div class="package-card p-3">
                    <h4 class="section-title">$3M Listing Package:</h4>
                    <ul>
                        <li>Sign Post</li>
                        <li>Zillow Showcase Listing Package ($1,500 value)</li>
                        <li>Includes photos, 3D Tour & Floorplan</li>
                        <li>LUXE Tours ($500 value)</li>
                        <li>25 Qty Printed Brochures ($80 value)</li>
                        <li>25 Qty Printed Floorplans ($30 value)</li>
                        <li>25 Qty Printed Spec Sheets ($30 value)</li>
                        <li>IG Boosted Post ($100 value)</li>
                    </ul>
                </div>
            </div>

            <!-- $5M+ Listing Package -->
            <div class="col-md-4">
                <div class="package-card p-3">
                    <h4 class="section-title">$5M+ Listing Package:</h4>
                    <ul>
                        <li>Sign Post</li>
                        <li>Zillow Showcase Listing Package ($1,500 value)</li>
                        <li>Includes photos, 3D Tour & Floorplan</li>
                        <li>LUXE Tours ($500 value)</li>
                        <li>25 Qty Printed Brochures ($80 value)</li>
                        <li>25 Qty Printed Floorplans ($30 value)</li>
                        <li>25 Qty Printed Spec Sheets ($30 value)</li>
                        <li>IG Boosted Post ($100 value)</li>
                        <li>Magazine Feature ($2,000 value)</li>
                        <li>LUXVT ($1,000 Value)</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 d-md-flex justify-content-center">
                <button class="btn btn-luxe d-flex align-items-center gap-2" style="height: fit-content;"
                    onclick="window.location.href='/general/form/other/request-your-luxury-listing-package'">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        class="mr-2">
                        <g id="vuesax_linear_save-add" data-name="vuesax/linear/save-add" transform="translate(-620 -188)">
                            <g id="save-add">
                                <path id="Vector"
                                    d="M14,3.11V14.47c0,1.45-1.04,2.06-2.31,1.36L7.76,13.64a1.76,1.76,0,0,0-1.52,0L2.31,15.83c-1.27.7-2.31.09-2.31-1.36V3.11A3.12,3.12,0,0,1,3.11,0h7.78A3.12,3.12,0,0,1,14,3.11Z"
                                    transform="translate(622 193.88)" fill="none" stroke="#fff" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="1.5" />
                                <path id="Vector-2" data-name="Vector"
                                    d="M14,3.11V14.47c0,1.45-1.04,2.06-2.31,1.36L8,13.77V6.99A3.12,3.12,0,0,0,4.89,3.88H0V3.11A3.12,3.12,0,0,1,3.11,0h7.78A3.12,3.12,0,0,1,14,3.11Z"
                                    transform="translate(628 190)" fill="none" stroke="#fff" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="1.5" />
                                <path id="Vector-3" data-name="Vector" d="M0,0H4" transform="translate(627 200)"
                                    fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" />
                                <path id="Vector-4" data-name="Vector" d="M0,4V0" transform="translate(629 198)"
                                    fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" />
                                <path id="Vector-5" data-name="Vector" d="M0,0H24V24H0Z" transform="translate(620 188)"
                                    fill="none" opacity="0" />
                            </g>
                        </g>
                    </svg>
                    Request Your Luxury Listing Package
                </button>
            </div>
        </div>

        <div class="col-md-6">
            <h4 class="section-title mt-4">Requirements:</h4>
            <ul>
                <li>Minimum 5% gross commission (2.5% on listing side)</li>
                <li>Residential properties only</li>
                <li>Vacant or Staged Property</li>
                <li>No cars in front of property</li>
                <li>No high grass</li>
                <li>No clutter - clean kitchen & bathroom countertops</li>
                <li>5 pictures of the home must be submitted for review</li>
            </ul>
        </div>

        <h4 class="section-title mt-4">Disclaimers:</h4>
        <ul>
            <li>If property does not sell, you will be charged $300 for the listing package on your next closing.</li>
            <li>Yearly Top Producers whose photos are covered cannot claim two sets of photos; either their Platinum
                photo status is applied or the Luxury Packages below.
            </li>
            <li>"LUXE Photoshoots" are to be performed by LUXE approved photographers only. You cannot book your own
                photographer.
            </li>
            <li>If the property is not approved based on the photos submitted:
                <ul>
                    <li>You can resubmit photos once the property has been cleaned and is up to par.</li>
                    <li>You can purchase the items below a la carte to be done with the property conditions as-is.</li>
                </ul>
            </li>
        </ul>
    </div>
@endsection
