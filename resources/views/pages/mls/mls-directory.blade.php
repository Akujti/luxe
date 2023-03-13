@extends('layouts.app', ['active' => 'MLS Directory'])
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
                <h2>The MIAMI Association of Realtors </h2>
                <p>MLS Name: MiamiMLS</p>
                <p>Phone: <a href="tel:305.468.7005">305.468.7005</a></p>
                <p>Website To Join: <a href="https://join.miamirealtors.com/ver4">Click Here</a></p>
                <p>Cost: $862 - price due to change without notice</p>
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
                <p>Cost: $1,130.09 - price due to change without notice</p>
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
                <p>Cost: $499 - price due to change without notice</p>
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
    </div>
@endsection
