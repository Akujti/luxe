@extends('layouts.app', ['active' => 'office_staff_directory', 'subactive' => 'MLS Directory'])
@section('css')
    <style>
        #map {
            height: 100%;
        }

        * {
            font-family: gothicregular;
        }

        h1 {
            font-weight: 400;
            letter-spacing: 2px;
            background: #262626;
            padding: 10px;
            border: 1px solid #dadada;
            border-radius: 10px;
            color: #fff;
        }

        .map-image {
            max-height: 400px;
        }

        .col-md-6 {
            text-align: center;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        h2 {
            font-family: 'gothicbold'
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid">
        <h1 class="text-center">MLS Directory</h1>

        <div class="row my-5">
            <div class="col-md-6">
                <h2>The MIAMI Association of Realtors</h2>
                <p>MLS Name: MiamiMLS</p>
                <p>Phone: <a href="tel:305.468.7005">305.468.7005</a></p>
                <p>Website To Join: <a href="https://join.miamirealtors.com/ver4">Click Here</a></p>
                <p>Secondary Membership: <a href="https://join.miamirealtors.com/ver6/join.cfm?type=RS">Click Here</a></p>
                <p>Primary Membership Cost: $1,043.00</p>
                <p>Secondary Membership Cost: $424</p>
                <ul>
                    <li>St. Lucie</li>
                    <li>Martin</li>
                    <li>Palm Beach</li>
                    <li>Broward</li>
                    <li>Miami</li>
                </ul>
            </div>
            <div class="col-md-6">
                <img src="/images/mls/map1.png" alt="" class="map-image">
            </div>
        </div>
        <hr>
        <div class="row my-5">
            <div class="col-md-6">
                <h2>Orlando Regional REALTORS Association</h2>
                <p>MLS Name: Stellar MLS</p>
                <p>Phone: <a href="tel:407.253.3580">407.253.3580</a></p>
                <p>Website To Join: <a href="https://www.orlandorealtors.org/joinrealtor">Click Here</a>
                </p>
                <p>Secondary Membership: <a href="https://www.orlandorealtors.org/othermembertypes">Click Here</a>
                </p>
                <p>Primary Cost: $1188.65</p>
                <p>Secondary Cost: $802.92</p>
                <p>Reciprocal Listings: Yes $125.00 per listing</p>
            </div>
            <div class="col-md-6">
                <img src="/images/mls/map2.png" alt="" class="map-image">
            </div>
        </div>
        <hr>
        <div class="row my-5">
            <div class="col-md-6">
                <h2>Broward, Palm Beaches & St. Lucie Realtors</h2>
                <p>MLS Name: Beaches MLS</p>
                <p>Phone: <a href="tel:561.585.4544">561.585.4544</a></p>
                <p>Website To Join: <a href="https://form.jotform.com/220874294480158">Click Here</a>
                </p>
                <p>Secondary Membership: <a href="https://www.orlandorealtors.org/othermembertypes">Click Here</a>
                </p>
                <p>Primary Cost: $315.33</p>
                <p>Secondary Cost: $99.50</p>
                <p>Reciprocal listing: No</p>
                <ul>
                    <li>Port St. Lucie</li>
                    <li>Palm Beach Gardens</li>
                    <li>West Palm Beach</li>
                    <li>Fort Lauderdale</li>
                    <li>Tamarac</li>
                    <li>Pembrook Pines</li>
                    <li>Hollywood</li>
                </ul>
            </div>
            <div class="col-md-6">
                <img src="/images/mls/map3.png" alt="" class="map-image">
            </div>
        </div>
        <hr>
        <div class="row my-5">
            <div class="col-md-6">
                <h2>The Florida Keys Board of REALTORS </h2>
                <p>MLS Name: FlexMLS</p>
                <p>Phone: <a href="tel:305-852-9294">305-852-9294</a></p>
                <p>Application: <a
                        href="https://www.flkeysboardofrealtors.com/wp-content/uploads/2018/02/FKBR_Realtor_Membership_Application-2018.pdf">Click
                        Here</a>
                </p>
                <p>Cost To Join: $200 one-time fee plus $45/month</p>
            </div>
            <div class="col-md-6">
                <img src="/images/mls/map.png" alt="" class="map-image">
            </div>
        </div>
        <hr>
        <div class="row my-5">
            <div class="col-md-6">
                <h2>Space Coast Association of REALTORS</h2>
                <p>MLS Name: FlexMLS</p>
                <p>Phone: <a href="tel:321.242.2211">321.242.2211</a></p>
                <p>Website To Join: <a
                        href="https://www.spacecoastmls.com/membership/association-member-application/mls-only-membership">Click
                        Here</a>
                </p>
                <p>Cost: $150 one-time fee plus $92 per quarter, prorated</p>
            </div>
            <div class="col-md-6">
                <img src="/images/mls/map.png" alt="" class="map-image">
            </div>
        </div>
        <hr>
        <div class="row my-5">
            <div class="col-md-6">
                <h2>Tallahassee Board of REALTORS</h2>
                <p>MLS Name: Paragon 5 MLS</p>
                <p>Phone: <a href="tel:850.224.7713">850.224.7713</a></p>
                <p>Application: <a
                        href="https://www.tbrnet.org/transaction-forms-forms-menu/tbr-document-uploads/realtor-applications/205-realtor-application-3/file.html">Click
                        Here</a>
                </p>
                <p>Primary Mambership Cost: $372.83</p>
                <p>Secondary Membership: This Board does not have this as an option</p>
                <p>Reciprocal listing: No</p>
            </div>
            <div class="col-md-6">
                <img src="/images/mls/map5.png" alt="" class="map-image">
            </div>
        </div>
        <hr>
        <div class="row my-5">
            <div class="col-md-6">
                <h2>The Naples Area Board of REALTORS</h2>
                <p>MLS Name: SWFLMLS</p>
                <p>Phone: <a href="tel:239.597.1666">239.597.1666</a></p>
                <p>Website To Join: <a href="https://www.nabor.com/membership/join">Click
                        Here</a>
                </p>
                <p>Primary Cost: $611.25</p>
                <p>Secondary Cost: $135.42 (active in another Florida board) <br> $395.42 (not active in another florida
                    board)</p>
                <p>Reciprocal listing: No</p>
            </div>
            <div class="col-md-6">
                <img src="/images/mls/map6.png" alt="" class="map-image">
            </div>
        </div>
        <hr>
        <div class="row my-5">
            <div class="col-md-6">
                <h2>Royal Palm</h2>
                <p>MLS Name: Florida Gulf Coast MLS</p>
                <p>Phone: <a href="tel:(239)-936-3537">(239)-936-3537</a></p>
                <p>Website To Join: <a href="https://rpcra.org/index.php/en/membership/join">Click Here</a></p>
                <p>Secondary Membership: <a href="https://swflrealtors.formstack.com/forms/membership_app__agent">Click
                        Here</a></p>
                <p>Primary Membership Cost: $590.83</p>
                <p>Secondary Membership Cost: $375</p>
                <p>Reciprocal Listings: $200</p>
                <ul>
                    <li>Lee County</li>
                    <li>Hendry County</li>
                    <li>Collier County</li>
                </ul>
            </div>
            <div class="col-md-6">
                <img src="/images/mls/map.png" alt="" class="map-image">
            </div>
        </div>
        <hr>
        <div class="row my-5">
            <div class="col-md-6">
                <h2>Osceola County Association of Realtors</h2>
                <p>MLS Name: Stellar MLS</p>
                <p>Phone: <a href="tel:(407)- 846-0117">(407)- 846-0117</a></p>
                <p>Website To Join: <a href="https://www.osceolarealtors.org/become-a-member/">Click Here</a></p>
                <p>Secondary Membership: <a
                        href="https://www.osceolarealtors.org/index.php?src=pages&ref=membership-forms">Click Here</a></p>
                <p>Primary Membership Cost: $1138.75</p>
                <p>Secondary Membership Cost: $922.92</p>
                <p>Reciprocal Listings: Yes $125.00 per listing</p>
                <p>Forms: <a href="https://www.stellarmls.com/documents/listing-forms">Click Here</a></p>
            </div>
            <div class="col-md-6">
                <img src="/images/mls/map7.png" alt="" class="map-image">
            </div>
        </div>
        <hr>
        <div class="row my-5">
            <div class="col-md-6">
                <h2>Greater Tampa Realtors</h2>
                <p>MLS Name: Stellar MLS</p>
                <p>Phone: <a href="tel:(813)879-7010">(813)879-7010</a></p>
                <p>Website To Join: <a href="https://www.tamparealtors.org/membership/">Click Here</a></p>
                <p>Secondary Membership: <a href="https://analytics.clickdimensions.com/cn/aba7v/NewMemberApp">Click
                        Here</a></p>
                <p>Primary Membership Cost: $1,114.00</p>
                <p>Secondary Membership Cost: $723.17</p>
                <p>Reciprocal Listings: Yes $125.00 per listing</p>
                <p>Forms: <a href="https://www.stellarmls.com/documents/listing-forms">Click Here</a></p>
            </div>
            <div class="col-md-6">
                <img src="/images/mls/map8.png" alt="" class="map-image">
            </div>
        </div>
    </div>
@endsection
