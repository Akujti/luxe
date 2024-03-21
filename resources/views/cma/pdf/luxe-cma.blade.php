<!DOCTYPE html>
<html>

<head>
    <title>CMA Report</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap');

        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wdth,wght@500&display=swap');

        :root {
            --gold: #C6A467;
        }

        * {
            font-family: Montserrat, serif;
            font-weight: 400;
        }

        .open-sans {
            font-family: "Montserrat", sans-serif;
            font-optical-sizing: auto;
            font-weight: 500;
            font-style: normal;
        }

        h1.title {
            font-size: 27px;
            border-bottom: 2px solid #C6A467;
        }

        .fw-bold {
            font-weight: 600;
        }

        .fw-semibold {
            font-weight: 500;
        }

        .fw-700 {
            font-weight: 700;
        }

        .p-0 {
            padding: 0;
        }

        .m-0 {
            margin: 0;
        }

        .w-100 {
            width: 100%;
        }

        .w-50 {
            width: 50%;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table.stats {
            font-size: 10px;
        }

        .stats th.border-top-theme {
            border-top: 1px solid #C6A467;
        }

        .stats th.border-top-black {
            border-top: 1px solid black;
        }

        .stats th.border-side-black {
            border-left: 1px solid black;
            border-right: 1px solid black;
        }

        .stats th.border-side-theme {
            border-left: 1px solid #C6A467;
            border-right: 1px solid #C6A467;
        }

        .stats th {
            font-weight: 600;
        }

        .stats th:first-child {
            border-top: none;
        }

        .stats th:last-child {
            border-right: 1px solid #C6A467;
        }

        .stats td {
            font-weight: 300;
            border: 1px solid #C6A467;
        }

        .stats tr td:first-child {
            border-left: none;
        }

        .stats th, .stats td {
            padding: 8px;
            text-align: center;
        }

        .stats tbody tr:first-of-type td {
            border-top: 2px solid black;
        }

        .stats tbody tr:last-of-type td {
            border-bottom: 2px solid black;
        }

        .bg-light-theme {
            background-color: #FAF4ED;
        }

        .text-left {
            text-align: left !important;
        }

        .text-right {
            text-align: right;
        }

        .text-center {
            text-align: center;
        }

        .text-white {
            color: white;
        }

        .text-theme {
            color: #C6A467;
        }

        .text-black {
            color: black;
        }

        .bg-black {
            background-color: black;
        }

        .bg-theme {
            background-color: #C6A467;
        }

        .circle {
            border-radius: 11px;
            padding: 5px;
            line-height: 9px;
            width: 12px;
            height: 12px;
            text-align: center;
            margin: 0 auto;
        }

        .circle-gray {
            background-color: #bbbbbb;
        }

        .circle-theme {
            background-color: #C6A467;
        }

        .page-break {
            page-break-before: always;
        }

        .property {
            border: 1px solid #b4b4b4;
        }

        .property table {
            font-size: 14px;
            border-collapse: collapse;
        }

        .property th {
            text-align: left !important;
            font-weight: 600;
            padding: 0;
        }


        .property td {
            padding: 0;
        }

        .property .table-wrapper {
            border-top: 1px solid #C6A467;
            margin-top: 20px;
            padding-top: 20px;
            margin-bottom: 20px;
            padding-bottom: 20px;
        }

        .property .table-divider {
            border-top: 1px solid #C6A467;
            height: 15px;
        }

        .property .table-divider-bottom {
            height: 25px;
        }

        .property-image {
            width: 100%;
            height: 200px;
            background-size: cover;
        }

        .property-header {
            padding-right: 20px;
            padding-left: 20px;
            padding-bottom: 5px;
            vertical-align: middle;
        }

        .property-price {
            font-size: 30px;
            padding: 20px 0;
        }

        .property-tag {
            line-height: 14px;
            text-align: center;
            margin-top: 40px;
        }

        .property-address {
            background-color: #F1F2F2;
            padding: 20px;
        }

        .property-address p {
            margin-left: 38px;
            max-width: 200px;
            letter-spacing: -1px;
            margin-top: -2px;
        }

        .property-details {
            padding: 15px 25px 0 25px;
        }

        .bg-page-3 {
            position: absolute;
            top: 90px;
            left: 0;
        }

        .absolute {
            position: absolute;
        }

        .relative {
            position: relative;
        }

        .comparables td {
            vertical-align: top;
        }

        .comparables tr td.w-50:first-child {
            padding-right: 10px;
        }

        .comparables tr td.w-50:last-child {
            padding-left: 10px;
        }
    </style>
</head>

<body>
<div>
    <h1 class="p-0 m-0 title">COMPARABLE PROPERTIES</h1>
    <img
        src="images/cma/google_map.jpg"
        alt="" class="w-100" style="filter: grayscale(1);margin-top:30px;margin-bottom:30px">
    <table class="stats">
        <thead>
        <tr>
            <th></th>
            <th class="bg-black border-top-black border-side-black text-white">MLS</th>
            <th class="border-top-theme">STATUS</th>
            <th class="bg-theme border-top-theme border-side-theme text-white">ADDRESS</th>
            <th class="border-top-theme">PRICE</th>
            <th class="bg-black border-top-black border-side-black text-white">BEDS</th>
            <th class="border-top-theme">BATHS</th>
            <th class="bg-theme border-top-theme border-side-theme text-white">H/BATHS</th>
            <th class="border-top-theme">SQFT</th>
        </tr>
        </thead>
        <tbody>
        @foreach($listings as $listing)
            <tr>
                <td>{{$listing->order}}</td>
                <td class="bg-light-theme">{{$listing->listing_id}}</td>
                <td class="text-center">
                    <div
                        class="circle {{$listing->status_color}} text-white">
                        {{$listing->status}}
                    </div>
                </td>
                <td class="text-left">{{$listing->data['UnparsedAddress'] ?? ''}}</td>
                <td>${{number_format($listing->data['ClosePrice']??$listing->data['ListPrice']) ?? '-'}}</td>
                <td class="bg-light-theme">{{$listing->data['BedroomsTotal'] ?? '-'}}</td>
                <td>{{$listing->data['BathroomsTotalInteger'] ?? '-'}}</td>
                <td class="bg-light-theme">{{$listing->data['BathroomsHalf'] ?? '-'}}</td>
                <td>{{number_format($listing->data['LivingArea'] ?? 0)}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<div class="page-break"></div>
<div>
    @for($j = 0;$j<count($listings)/2;$j++)
        <h1 class="p-0 m-0 title">TOP COMPARABLES</h1>
        <table style="margin-top:30px" class="comparables">
            <tbody>
            <tr>
                @for($i = 0;$i<=1;$i++)
                    @php
                        $listing = $listings[$j*2 + $i] ?? null;
                    @endphp
                    @if($listing)
                        <td class="w-50">
                            <div class="property">
                                <table class="property-header">
                                    <tr>
                                        <td>
                                            <p class="property-price m-0 p-0 fw-bold">
                                                ${{number_format($listing->data['ClosePrice']??$listing->data['ListPrice']) ?? '-'}}</p>
                                        </td>
                                        <td class="text-right">
                                            <p class="text-white bg-theme fw-bold property-tag">
                                                {{$listing->data['MlsStatus']}}
                                            </p>
                                        </td>
                                    </tr>
                                </table>
                                <div class="property-image"
                                     style="background: url({{$listing->data['Media'][0]['MediaURL'] ?? ''}});"
                                ></div>
                                <div class="property-address relative">
                                    <img src="images/cma/drop-pin.png" alt="" width="28px" class="absolute"
                                         style="top:10px">
                                    <p class="m-0 p-0 open-sans">{{$listing->data['UnparsedAddress']}}</p>
                                </div>
                                <div class="property-details">
                                    <p class="text-center m-0 p-0">{{$listing->data['BedroomsTotal'] ?? '-'}} BEDS
                                        | {{$listing->data['BathroomsTotalInteger'] ?? '-'}} BATHS
                                        | {{$listing->data['LivingArea'] ?? '-'}} SQFT</p>
                                    <div class="table-wrapper">
                                        <table>
                                            <tbody>
                                            <tr>
                                                <th>Prop Type</th>
                                                <td>{{$listing->data['PropertyType'] ?? 'N/A'}}</td>
                                            </tr>
                                            <tr>
                                                <th>Style</th>
                                                <td>{{$listing->data['MIAMIRE_Style'] ?? 'N/A'}}</td>
                                            </tr>
                                            <tr>
                                                <th>Lot size</th>
                                                <td>{{$listing->data['LotSizeSquareFeet'] ?? 'N/A'}}</td>
                                            </tr>
                                            <tr>
                                                <th>On Market</th>
                                                <td>{{$listing->data['DaysOnMarket'] ?? 'N/A'}} Days</td>
                                            </tr>
                                            <tr>
                                                <th>Garage(s)</th>
                                                <td>{{$listing->data['GarageSpaces'] ?? 'N/A'}}</td>
                                            </tr>
                                            <tr>
                                                <th>Pool</th>
                                                <td>{{$listing->data['MIAMIRE_PoolYN'] ? 'Yes':'No'}}</td>
                                            </tr>
                                            <tr>
                                                <th>Waterfront</th>
                                                <td>{{$listing->data['WaterfrontYN'] ? 'Yes':'No'}}</td>
                                            </tr>
                                            <tr>
                                                <th>Flooring</th>
                                                <td>
                                                    @if($listing->data['Flooring'])
                                                        {{implode(', ', $listing->data['Flooring'])}}
                                                    @else
                                                        'N/A'
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Furnished</th>
                                                <td>{{$listing->data['Furnished'] ?? 'N/A'}}</td>
                                            </tr>
                                            <tr>
                                                <th>Direction Faces</th>
                                                <td>{{$listing->data['DirectionFaces'] ?? 'N/A'}}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="table-divider-bottom"></div>
                                                    <div class="table-divider"></div>
                                                </td>
                                                <td>
                                                    <div class="table-divider-bottom"></div>
                                                    <div class="table-divider">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>List Date</th>
                                                <td>{{$listing->data['ListingContractDate'] ?? 'N/A'}}</td>
                                            </tr>
                                            <tr>
                                                <th>Off-Market Date</th>
                                                <td>{{$listing->data['OffMarketDate'] ?? 'N/A'}}</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </td>
                    @endif
                @endfor
            </tr>
            </tbody>
        </table>
        <div class="page-break"></div>
    @endfor
</div>
<div class="" style="position: relative">
    <img src="images/cma/bg-page-3.png" class="bg-page-3" alt="" width="100%">
    <h1 class="p-0 m-0 title">SUGGESTED LIST PRICE</h1>
    <p class="p-0 m-0 text-center" style="font-size: 16px;margin-top: 7px;">Analysis of the comparable properties a
        list price of:</p>
    <p class="m-0 text-center absolute fw-semibold" style="top:88px;left: 103px;font-size: 27px">
        ${{$avg_price_all}}</p>
    <p class="m-0 text-center absolute fw-700 text-white" style="top:95px;left: 460px;font-size: 20px">
        ${{$avg_price_per_sqft_all}} /
        SQFT</p>
    <div class="absolute" style="top: 134px">
        <p class="text-center fw-700" style="font-size: 15px;color:#231F20">COMPARABLE AVERAGES PER STATUS</p>
    </div>
    <div class="absolute" style="top: 182px;left:60px">
        <p style="font-size: 14px;color:#231F20">{{$price_sold_counter}} SOLD</p>
    </div>
    <div class="absolute" style="top: 205px;left:30px">
        <p class="fw-bold" style="font-size: 20px;">${{$avg_price_sold}} <span
                style="font-size: 12px;">${{$avg_price_per_sqft}} / Sqft</span></p>
    </div>
    <div class="absolute" style="top: 270px;left:30px">
        <p style="font-size: 12px;">{{$avg_days_on_market}} Days on Market</p>
    </div>

    <div class="absolute" style="top: 182px;left:295px">
        <p style="font-size: 14px;color:#231F20">{{$price_pending_counter}} PENDING</p>
    </div>
    <div class="absolute" style="top: 205px;left:265px">
        <p class="fw-bold" style="font-size: 20px;">${{$avg_price_pending}} <span style="font-size: 12px;">${{$avg_price_per_sqft_pending}} / Sqft</span>
        </p>
    </div>
    <div class="absolute" style="top: 270px;left:265px">
        <p style="font-size: 12px;">{{$avg_days_on_market_pending}} Days on Market</p>
    </div>

    <div class="absolute" style="top: 182px;left:530px">
        <p style="font-size: 14px;color:#231F20">{{$price_active_counter}} ACTIVE</p>
    </div>
    <div class="absolute" style="top: 205px;left:500px">
        <p class="fw-bold" style="font-size: 20px;">${{$avg_price_active}} <span style="font-size: 12px;">${{$avg_price_per_sqft_active}} / Sqft</span>
        </p>
    </div>
    <div class="absolute" style="top: 270px;left:500px">
        <p style="font-size: 12px;">{{$avg_days_on_market_active}} Days on Market</p>
    </div>

    <div class="relative" style="margin-top: 245px">
        <p class="fw-700 text-theme" style="font-size: 16px;margin-bottom: 3px;">DISCLAIMER</p>
        <p class="m-0 p-0" style="font-size: 14px">The CMA is a side-by-side comparison of homes for sale and
            homes that have recently sold in the same neighborhood and price range. This information is further sorted
            by data fields such as single-family or condo, number of bedrooms, number of baths, postal codes, and many
            other factors. Its purpose is to show fair market value, based on what other buyers and sellers have
            determined through past sales, pending sales and homes recently put on the market.</p>
    </div>
    <div class="absolute" style="top: 477px;left: 30px">
        <p class="" style="font-size: 18px;">AVERAGE PRICE PER SQ FT</p>
    </div>
    <div class="absolute" style="top: 525px;left: 30px;max-width: 300px">
        <p class="text-theme fw-bold m-0 p-0" style="font-size: 30px;">${{$avg_price_per_sqft}} <span class="text-black"
                                                                                                      style="font-size: 16px;">SQFT</span>
        </p>
        <p class="m-0 p-0" style="font-size: 14px;text-align: justify;">Comparable homes sold for an average of
            ${{$avg_price_per_sqft}} / sqft. Many factors such as location, use of space, condition, quality, and
            amenities determine the market value per square foot, so reviewing each comp carefully is important.</p>
    </div>
    <div class="absolute" style="top: 720px;left: 30px;max-width: 300px">
        <img src="images/cma/chart.png" alt="" width="300px">
    </div>
    {{--    <div class="absolute" style="top: 929px;left: 60px">--}}
    {{--        <p class="m-0 p-0" style="font-size: 12px">Subject Property</p>--}}
    {{--        <p class="m-0 p-0" style="font-size: 12px;margin-top: 7px">Trendline (Based on SOLD Listing only)</p>--}}
    {{--    </div>--}}

    <div class="absolute" style="top: 477px;left: 383px">
        <p class="" style="font-size: 18px;">TIME TO SELL</p>
    </div>
    <div class="absolute" style="top: 525px;left: 385px;max-width: 300px">
        <p class="text-theme fw-bold m-0 p-0" style="font-size: 30px;">{{$avg_days_on_market}} <span class="text-black"
                                                                                                     style="font-size: 16px;">DAYS ON MARKET</span>
        </p>
        <p class="m-0 p-0" style="font-size: 14px;text-align: justify;">Sold homes were on the market for an average of
            {{$avg_days_on_market}} days before they accepted an offer. These homes sold for an average
            of {{$avg_price_percentage}}% of
            list price.</p>
    </div>
    <div class="absolute" style="top: 720px;left: 385px;max-width: 300px">
        <img src="images/cma/chart_2.png" alt="" width="300px">
    </div>
    {{--    <div class="absolute" style="top: 929px;left: 415px">--}}
    {{--        <p class="m-0 p-0" style="font-size: 12px">Original list price</p>--}}
    {{--        <p class="m-0 p-0" style="font-size: 12px;margin-top: 7px">Most recent price or sold price</p>--}}
    {{--    </div>--}}
</div>
</body>
</html>
