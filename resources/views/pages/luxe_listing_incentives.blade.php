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

        <!-- Requirements -->
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

        <!-- Disclaimers -->
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
