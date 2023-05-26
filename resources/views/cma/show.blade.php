@extends('layouts.app', ['active' => 'CMA'])
@section('css')
<link rel="stylesheet" href="{{ asset('/css/cma-report.css') }}">
<style>
    a {
        text-decoration: none;
        color: black;
    }

    a:hover {
        color: black;
    }

    .row img {
        object-fit: cover;
    }
</style>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row box-title p-0 m-0">
        <h3 class="text-center">Seller CMA</h3>
    </div>
    <div class="row mt-2 mb-5 justify-content-start p-0 m-0">
        <div class="col-12">
            <div class="box-charts row">
                <div class="table-box w-100 px-2">
                    <div class="table-box-header d-flex align-items-center justify-content-between w-100">
                        <h5>Subject Property</h5>
                        <a href="{{ route('cma.index') }}" class="btn-luxe">Back</a>
                    </div>

                    <div class="table-box-body">
                        <div class="table-action row p-0 m-0 w-100 align-items-start justify-content-between my-3">
                            <div class="subject-property-filter col-12 col-xl-4">
                                <div>
                                    <div class="icon">
                                        <i class="fa-solid fa-house-chimney"></i>
                                    </div>
                                </div>
                                <div class="">
                                    <h4 class="p-0 m-0 d-flex align-items-center h-title"><span id="UnparsedAddress"></span>
                                        <div class="edit-btn ml-2"><i class="fa-solid fa-pen"></i></div>
                                    </h4>
                                    <p class="p-0 m-0 p-luxe text-uppercase"><span id="BuyerAgentFullName"></span></p>
                                </div>
                            </div>
                            <div class="col-12 col-xl-8">
                                <div class="subject-property-details">
                                    <div>
                                        <h5 class="h-title"><span id="BedroomsTotal"></span> <br> Bed</h5>
                                    </div>
                                    <div>
                                        <h5 class="h-title"><span id="BathroomsTotalInteger"></span> <br> Bath</h5>
                                    </div>
                                    <div>
                                        <h5 class="h-title"><span id="YearBuilt"></span> <br> Built</h5>
                                    </div>
                                    <div>
                                        <h5 class="h-title"><span id="MIAMIRE_MaximumLeasableSqft"></span> <br> SqFt</h5>
                                    </div>
                                    <div>
                                        <h5 class="h-title"><span id="MIAMIRE_LPAmtSqFt"></span> <br> T.SqFt</h5>
                                    </div>
                                    <div class="border-none">
                                        <h5 class="h-title"><span id="LotSizeDimensions"></span> <br> Size</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 mt-5">
            <div class="box-charts row">
                <div class="table-box w-100 px-2">
                    <div class="table-box-header d-flex align-items-center justify-content-between w-100">
                        <h5>Market Analysis <small>(by price)</small></h5>
                        <a href="{{ route('cma.index') }}" class="">View Market Data</a>
                    </div>

                    <div class="table-box-body">
                        <div class="table-action row my-3">
                            <div class="col-12 col-xl-6">
                                <style>
                                    #map {
                                        height: 100%;
                                    }
                                </style>
                                <div id="map"></div>
                            </div>
                            <div class="col-12 col-xl-6">
                                <div class="market-anysis-rows-header">
                                    <p class="p-0 m-0">
                                        0/3 Solds Compos Selected
                                        <i class="fa-solid fa-circle-play"></i>
                                    </p>

                                    <div class="d-flex align-items-center">
                                        <p class="p-0 m-0 pr-4">5/6 Results</p>
                                        <div class="filter-buttons">
                                            <button>
                                                <i class="fa-solid fa-arrow-up-z-a"></i>
                                            </button>
                                            <button>
                                                <i class="fa-solid fa-plus"></i>
                                            </button>
                                            <div class="d-inline-block">
                                                <div class="dropdown" id="search-dropdown">
                                                    <button type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fa-solid fa-bars"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-search-filter" onclick="event.stopPropagation()" aria-labelledby="dropdownMenuButton">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <h5 class="h5-title text-center">Search Filter Form</h5>
                                                            </div>
                                                            <div class="col-12 col-xl-6">
                                                                <div class="form-group mb-1">
                                                                    <label for="">Search Area</label>
                                                                    <select class="form-control">
                                                                        <option value="">--</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-xl-6">
                                                                <div class="form-group mb-1">
                                                                    <label for="">Amenities</label>
                                                                    <select class="form-control">
                                                                        <option value="">--</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-xl-6">
                                                                <div class="form-group mb-1">
                                                                    <label for="">Complex | Builing | Subdivision</label>
                                                                    <select class="form-control">
                                                                        <option value="">--</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-xl-6">
                                                                <div class="form-group mb-1">
                                                                    <label for="">Sold since</label>
                                                                    <select class="form-control">
                                                                        <option value="">--</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-xl-6">
                                                                <div class="form-group mb-1">
                                                                    <label for="">MLS #</label>
                                                                    <select class="form-control">
                                                                        <option value="">--</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-xl-6">
                                                                <div class="form-group mb-1">
                                                                    <label for="">Lotsize</label>
                                                                    <div class="form-min-max">
                                                                        <input type="text" class="form-control m-0" placeholder="Min">
                                                                        <div>
                                                                            -
                                                                        </div>
                                                                        <input type="text" class="form-control m-0" placeholder="Max">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-xl-6">
                                                                <div class="form-group mb-1">
                                                                    <label for="">TSQ Feet</label>
                                                                    <div class="form-min-max">
                                                                        <input type="text" class="form-control m-0" placeholder="Min">
                                                                        <div>
                                                                            -
                                                                        </div>
                                                                        <input type="text" class="form-control m-0" placeholder="Max">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-xl-6">
                                                                <div class="form-group mb-1">
                                                                    <label for="">LSQ Feet</label>
                                                                    <div class="form-min-max">
                                                                        <input type="text" class="form-control m-0" placeholder="Min">
                                                                        <div>
                                                                            -
                                                                        </div>
                                                                        <input type="text" class="form-control m-0" placeholder="Max">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-xl-6">
                                                                <div class="form-group mb-1">
                                                                    <label for="">Bed Rooms</label>
                                                                    <div class="form-min-max">
                                                                        <input type="text" class="form-control m-0" placeholder="Min">
                                                                        <div>
                                                                            -
                                                                        </div>
                                                                        <input type="text" class="form-control m-0" placeholder="Max">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-xl-6">
                                                                <div class="form-group mb-1">
                                                                    <label for="">Full Bath</label>
                                                                    <div class="form-min-max">
                                                                        <input type="text" class="form-control m-0" placeholder="Min">
                                                                        <div>
                                                                            -
                                                                        </div>
                                                                        <input type="text" class="form-control m-0" placeholder="Max">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-xl-6">
                                                                <div class="form-group mb-1">
                                                                    <label for="">Half Bath</label>
                                                                    <div class="form-min-max">
                                                                        <input type="text" class="form-control m-0" placeholder="Min">
                                                                        <div>
                                                                            -
                                                                        </div>
                                                                        <input type="text" class="form-control m-0" placeholder="Max">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-xl-6">
                                                                <div class="form-group mb-1">
                                                                    <label for="">Year Built</label>
                                                                    <div class="form-min-max">
                                                                        <input type="text" class="form-control m-0" placeholder="Min">
                                                                        <div>
                                                                            -
                                                                        </div>
                                                                        <input type="text" class="form-control m-0" placeholder="Max">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-12 text-center pt-4">
                                                                <a class="btn-luxe">
                                                                    <span>
                                                                        <i class="fa-solid fa-magnifying-glass"></i>
                                                                    </span>
                                                                    Search
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="market-analysis-rows"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-box-footer w-100">
                    <div class="d-flex align-items-center justify-content-between">
                        <a href="{{ route('cma.search') }}" class="btn-action"><i class="fa-solid fa-chevron-left"></i> Previous</a>
                        <a href="{{ route('cma.averageSalePrice') }}" class="btn-action">Next<i class="fa-solid fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
@section('js')
<script src="{{ asset('js/moment.min.js') }}"></script>
<script>
    var showByIdRow = null,
        showRows = null;
    $(document).ready(function() {
        mounted();
    })

    async function mounted() {
        const urlParams = new URLSearchParams(window.location.search);
        const listingId = urlParams.get('listingId');

        var response = await axiosInc(`listings/${listingId}`, 'get', null);
        if (response.data) {
            var data = response.data.bundle;

            showByIdRow = data;
            const validate = validateString;

            Object.keys(data).forEach((el) => {
                let row = data[el];
                $('#' + el).html(validate(data[el]));
            })

        }

        await getMatchedListings();
    }
    let locations = [];
    async function getMatchedListings() {
        var data = {
            'ListPrice.lte': showByIdRow.ListPrice
        }
        var response = await axiosInc('listings', 'get', data);

        if (response.data) {
            const resForHtml = response.data.bundle.map(item => {
                console.log(item.UnparsedAddress)
                locations.push([item.BuyerAgentFullName, item.Latitude, item.Longitude])
                let html = `<div class="market-analysis-row">
                    <div class="position-relative">

                        <div class="image-checkbox">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            </div>
                        </div>
                        <img src="${item.Media.length ? item.Media[0].MediaURL : ''}">

                        <div class="image-overlay">
                            <div class="image-overlay-div">
                                <div>
                                    <p class="sqft-price">
                                        <i class="fa-solid fa-star"></i>
                                        <b>$${validateString(item.ListPrice)} | $${validateString(item.MIAMIRE_RATIO_CurrentPrice_By_SQFT)} Sq.Ft</b>
                                    </p>
                                    <p class="sqft-price">
                                        ${validateString(item.UnparsedAddress.split(',')[0])}
                                    </p>
                                </div>

                                <div class="subject-property-details d-flex align-items-center justify-content-end">
                                    <div>
                                        <h6>${validateString(item.BedroomsTotal)} <br> Beds</h6>
                                    </div>
                                    <div>
                                        <h6>${validateString(item.BathroomsFull)} <br> Baths</h6>
                                    </div>
                                    
                                    <div class="border-none">
                                        <h6>${validateString(item.MIAMIRE_MaximumLeasableSqft)} <br> SqFt</h6>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <p class="location">${validateString(item.City)} ${validateString(item.PostalCode)}</p>
                            </div>
                        </div>
                    </div>
                    <div class="div-table-market-analysis">
                        <table class="table-market-analysis">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="flex">
                                            <p>MLS</p>
                                            <p>${item.ListAgentMlsId}</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex">
                                            <p>Year Built</p>
                                            <p>${item.YearBuilt}</p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="flex">
                                            <p>Pool</p>
                                            <p>${item.PoolPrivateYN ? 'Yes': 'No'}</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex">
                                            <p>Lot Size</p>
                                            <p>${validateString(item.LotSizeDimensions)}</p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="flex">
                                            <p>Living Sq.Ft.</p>
                                            <p>${item.LivingArea}</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex">
                                            <p>On Market</p>
                                            <p>${item.DaysOnMarket ? item.DaysOnMarket + ' Days': 'No'}</p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="flex">
                                            <p>Sold</p>
                                            <p>${item.CloseDate ? moment().diff(moment(item.CloseDate, 'YYYY-MM-DD'), 'days') + ' Days ago' : 'Not Yet'}</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex">
                                            <p>Status</p>
                                            <p>${item.StandardStatus}</p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4">
                                        <div class="flex">
                                            <p>Prop. Type</p>
                                            <p>${item.PropertyType}</p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="flex">
                                            <p>Water Front</p>
                                            <p>${item.WaterfrontYN ? 'Yes': 'No'}</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex">
                                            <p>Listing Price</p>
                                            <p>$${item.ListPrice}</p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="flex">
                                            <p>Agent</p>
                                            <p>${item.BuyerAgentFullName}</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex">
                                            <p>Phone</p>
                                            <p>${item.BuyerAgentDirectPhone}</p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4">
                                        <div class="flex">
                                            <p>Company</p>
                                            <p>${item.BuyerOfficeName}</p>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>`;
                return html;
            });

            $('.market-analysis-rows').html(resForHtml.toString().replaceAll(',', '\n'))
            initMap()
        }
    }

    function validateString(string, isNumber = true) {
        return string ?? (isNumber ? 0 : 'N/A');
    }

    function initMap() {

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 10,
            center: new google.maps.LatLng(25.751360, -80.255580),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        var infowindow = new google.maps.InfoWindow();

        var marker, i;
        const svgMarker = {
            path: "M10.453 14.016l6.563-6.609-1.406-1.406-5.156 5.203-2.063-2.109-1.406 1.406zM12 2.016q2.906 0 4.945 2.039t2.039 4.945q0 1.453-0.727 3.328t-1.758 3.516-2.039 3.070-1.711 2.273l-0.75 0.797q-0.281-0.328-0.75-0.867t-1.688-2.156-2.133-3.141-1.664-3.445-0.75-3.375q0-2.906 2.039-4.945t4.945-2.039z",
            fillColor: "black",
            fillOpacity: 0.72,
            strokeWeight: 0,
            rotation: 0,
            scale: 2,
            anchor: new google.maps.Point(15, 30),
        };
        for (i = 0; i < locations.length; i++) {
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                icon: svgMarker,
                map: map
            });

            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    infowindow.setContent(locations[i][0]);
                    infowindow.open(map, marker);
                }
            })(marker, i));
        }
    }
</script>
@endsection