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

        #loading {
            justify-content: center;
            align-items: center;
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
                            <a href="{{ route('cma.search') }}" class="btn-luxe">Back</a>
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
                                        <h4 class="p-0 m-0 d-flex align-items-center h-title"><span
                                                id="UnparsedAddress"></span>
                                        </h4>
                                        <p class="p-0 m-0 p-luxe text-uppercase"><span id="BuyerAgentFullName"></span>
                                        </p>
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
                                            <h5 class="h-title"><span id="LivingArea"></span> <br> SqFt
                                            </h5>
                                        </div>
                                        <div>
                                            <h5 class="h-title"><span id="GarageYN"></span> <br> Garage
                                            </h5>
                                        </div>
                                        <div>
                                            <h5 class="h-title"><span id="MIAMIRE_PoolYN"></span> <br> Pool
                                            </h5>
                                        </div>
                                        {{--                                        <div> --}}
                                        {{--                                            <h5 class="h-title"><span id="MIAMIRE_LPAmtSqFt"></span> <br> T.SqFt</h5> --}}
                                        {{--                                        </div> --}}
                                        {{--                                        <div class="border-none"> --}}
                                        {{--                                            <h5 class="h-title"><span id="PropertyType"></span> <br> Type</h5> --}}
                                        {{--                                        </div> --}}
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
                            <a href="{{ route('cma.index') }}" class="text-dark">View Market Data</a>
                        </div>

                        <div class="table-box-body">
                            <div class="table-action row my-3">
                                <div class="col-12 col-xl-6">
                                    <style>
                                        #map {
                                            height: 100%;
                                            max-height: 600px;
                                        }

                                        #search-map-btn {
                                            left: 10px;
                                            bottom: 0;
                                            position: absolute;
                                            cursor: pointer;
                                        }
                                    </style>
                                    <div id="map"></div>
                                    <a id="search-map-btn" class="btn-luxe" onclick="filterSearch()">
                                        <span>
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                        </span>
                                        Click To Update Map Area
                                    </a>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <div class="market-anysis-rows-header">
                                        <p class="p-0 m-0">
                                            <span>
                                                <span id="results-scan">0/0</span> <span id="results-status"></span> Compos
                                                Selected
                                            </span>
                                            <i class="fa-solid fa-circle-play"></i>
                                        </p>


                                        <div class="d-flex align-items-center">
                                            <div class="filter-buttons">
                                                <div class="d-inline-block">
                                                    <div class="dropdown" id="search-dropdown">
                                                        <button type="button" id="dropdownMenuButton"
                                                            onclick="toggleFilters()">
                                                            <i class="fa-solid fa-bars"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="dropdown-search-filter p-4 d-none" id="drop-filter"
                                        onclick="event.stopPropagation()" aria-labelledby="dropdownMenuButton">
                                        <form class="row" id="form">
                                            <div class="col-12">
                                                <h5 class="h5-title text-center">Search Filter
                                                    Form</h5>
                                            </div>
                                            <div class="col-12 col-xl-6">
                                                <div class="form-group mb-1">
                                                    <label for="">Closing Date</label>
                                                    <div class="">
                                                        <input type="date" class="form-control" id="date-search">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-xl-6">
                                                <div class="form-group mb-1">
                                                    <label for="">Pool</label>
                                                    <select class="form-control" id="pool">
                                                        <option value="">--</option>
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 col-xl-6">
                                                <div class="form-group mb-1">
                                                    <label for="">Waterfront</label>
                                                    <select class="form-control" id="waterfront">
                                                        <option value="">--</option>
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-12 col-xl-6 d-none">
                                                <div class="form-group mb-1">
                                                    <label for="">MLS #</label>
                                                    <select class="form-control" id="mls">
                                                        <option value="">--</option>
                                                        <option value="mls">mls</option>
                                                    </select>
                                                </div>
                                            </div>
                                            {{-- <div class="col-12 col-xl-6">
                                                                    <div class="form-group mb-1">
                                                                        <label for="">Lotsize</label>
                                                                        <div class="form-min-max">
                                                                            <input type="text" id="lot-size-min"
                                                                                class="form-control m-0" placeholder="Min">
                                                                            <div>
                                                                                -
                                                                            </div>
                                                                            <input type="text" id="lot-size-max"
                                                                                class="form-control m-0"
                                                                                placeholder="Max">
                                                                        </div>
                                                                    </div>
                                                                </div> --}}
                                            <div class="col-12 col-xl-6">
                                                <div class="form-group mb-1">
                                                    <label for="">Property SqFt</label>
                                                    <div class="form-min-max">
                                                        <input id="lot-size-min" type="text" class="form-control m-0"
                                                            placeholder="Min">
                                                        <div>
                                                            -
                                                        </div>
                                                        <input id="lot-size-max" type="text" class="form-control m-0"
                                                            placeholder="Max">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-xl-6">
                                                <div class="form-group mb-1">
                                                    <label for="">Living SqFt</label>
                                                    <div class="form-min-max">
                                                        <input id="living-area-min" type="text"
                                                            class="form-control m-0" placeholder="Min">
                                                        <div>
                                                            -
                                                        </div>
                                                        <input id="living-area-max" type="text"
                                                            class="form-control m-0" placeholder="Max">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-xl-6">
                                                <div class="form-group mb-1">
                                                    <label for="">Bedrooms</label>
                                                    <div class="">
                                                        <input type="number" id="bed-room-min" class="form-control m-0"
                                                            placeholder="">
                                                        {{-- <div>
                                                                                -
                                                                            </div>
                                                                            <input type="text" id="bed-room-max"
                                                                                class="form-control m-0"
                                                                                placeholder="Max"> --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-xl-6">
                                                <div class="form-group mb-1">
                                                    <label for="">Full Baths</label>
                                                    <div class="">
                                                        <input type="number" id="full-bath-min" class="form-control m-0"
                                                            placeholder="">
                                                        {{-- <div>
                                                                                -
                                                                            </div>
                                                                            <input type="text" id="full-bath-max"
                                                                                class="form-control m-0"
                                                                                placeholder="Max"> --}}
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 col-xl-6">
                                                <div class="form-group mb-1">
                                                    <label for="">Half Baths</label>
                                                    <div class="">
                                                        <input type="number" id="half-bath-min" class="form-control m-0"
                                                            placeholder="">
                                                        {{-- <div>
                                                                                -
                                                                            </div>
                                                                            <input type="text" id="half-bath-max"
                                                                                class="form-control m-0"
                                                                                placeholder="Max"> --}}
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 col-xl-6">
                                                <div class="form-group mb-1">
                                                    <label for="">Garage Spaces</label>
                                                    <div class="">
                                                        <input type="number" id="garage-spaces-min"
                                                            class="form-control m-0" placeholder="">
                                                        {{-- <div>
                                                                                -
                                                                            </div>
                                                                            <input type="text" id="half-bath-max"
                                                                                class="form-control m-0"
                                                                                placeholder="Max"> --}}
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 col-xl-6">
                                                <div class="form-group mb-1">
                                                    <label for="">Year Built</label>
                                                    <div class="form-min-max">
                                                        <input type="text" id="year-built-min"
                                                            class="form-control m-0" placeholder="Min">
                                                        <div>
                                                            -
                                                        </div>
                                                        <input type="text" id="year-built-max"
                                                            class="form-control m-0" placeholder="Max">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 col-xl-6">
                                                <div class="form-group mb-1">
                                                    <label for="">Property Type</label>
                                                    <div class="">
                                                        <select id="property-type" class="form-control"
                                                            name="property_type" id="">
                                                            <option value>
                                                                Select Property Type
                                                            </option>
                                                            <option value="Residential">
                                                                Residential
                                                            </option>
                                                            <option value="Residential Lease">
                                                                Residential Lease
                                                            </option>
                                                            <option value="Lease">Lease</option>
                                                            <option value="Land">Land</option>
                                                            <option value="Mobile">Mobile</option>
                                                            <option value="Commercial Sale">
                                                                Commercial Sale
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 text-center pt-4">
                                                <a class="btn-luxe" style="cursor:pointer;" onclick="filterSearch()">
                                                    <span>
                                                        <i class="fa-solid fa-magnifying-glass"></i>
                                                    </span>
                                                    Search
                                                </a>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="market-analysis-rows" id="listing-results">
                                        <div></div>
                                        <button class="mt-2 w-100 btn-luxe d-none" id="view-more"
                                            onclick="filterSearch(limit = limit + 20)">View more
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-box-footer w-100">
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="{{ route('cma.search') }}" class="btn-action text-dark"><i
                                    class="fa-solid fa-chevron-left"></i> Previous</a>
                            <a href="#0" id="next-btn" onclick="nextPage()" class="btn-action text-dark">Next<i
                                    class="fa-solid fa-angle-right"></i></a>
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
        var showFilters = true
        var statusGl = 'Closed'
        var showByIdRow = null,
            showRows = null,
            checkedIds = []

        $(document).ready(async function() {
            loadingDiv(1)
            await mounted()
            // $('#dropdownMenuButton').dropdown('toggle')
            $('#results-status').html(statusGl)
            loadingDiv(0)
            initMap()
            toggleFilters()
        })

        function loadingDiv(status) {
            if (status) {
                $('#loading').removeClass('d-none')
                $('#loading').addClass('d-flex')
            } else {
                $('#loading').addClass('d-none')
                $('#loading').removeClass('d-flex')
            }
        }

        function toggleFilters() {
            $('#drop-filter').toggleClass('d-none')
            $('#listing-results').toggleClass('d-none')
        }

        var limit = 20

        async function nextPage() {
            limit = 20
            if (statusGl == 'Closed')
                statusGl = 'Active'
            else if (statusGl == 'Active')
                statusGl = 'Pending'
            if (statusGl != 'Closed') {
                $('#date-search').val(null)
            }
            locations = []
            $('#results-status').html(statusGl)
            $('#results-scan').html('0/20')

            await filterSearch()
        }

        async function filterSearch(limit) {
            $('#drop-filter').addClass('d-none')
            $('#listing-results').removeClass('d-none')
            const urlParams = new URLSearchParams(window.location.search)
            loadingDiv(1)
            var pool = $('#pool').val()
            var waterfront = $('#waterfront').val()
            var mls = $('#mls').val()
            var lotsizeMin = $('#lot-size-min').val()
            var lotsizeMax = $('#lot-size-max').val()
            var livingAreaMin = $('#living-area-min').val()
            var livingAreaMax = $('#living-area-max').val()
            var bedroomsMin = $('#bed-room-min').val()
            var bedroomsMax = $('#bed-room-max').val()
            var fullbathMin = $('#full-bath-min').val()
            var fullbathMax = $('#full-bath-max').val()
            var halfbathMin = $('#half-bath-min').val()
            var halfbathMax = $('#half-bath-max').val()
            var garageSpacesMin = $('#garage-spaces-min').val()
            var yearbuiltMin = $('#year-built-min').val()
            var yearbuiltMax = $('#year-built-max').val()
            var propertyType = $('#property-type').val()
            var dateSearch = $('#date-search').val()

            var data = []

            if (yearbuiltMax && yearbuiltMin) {
                data['YearBuilt.gte'] = yearbuiltMin
                data['YearBuilt.lte'] = yearbuiltMax
            }

            if (lotsizeMin && lotsizeMax) {
                data['LotSizeSquareFeet.gte'] = lotsizeMin
                data['LotSizeSquareFeet.lte'] = lotsizeMax
            }

            if (livingAreaMin && livingAreaMax) {
                data['LivingArea.gte'] = livingAreaMin
                data['LivingArea.lte'] = livingAreaMax
            }

            if (bedroomsMin) {
                data['BedroomsTotal.eq'] = bedroomsMin
                // data['BedroomsTotal.lte'] = bedroomsMax
            }

            if (fullbathMin) {
                data['BathroomsFull.eq'] = fullbathMin
                // data['BathroomsFull.lte'] = fullbathMax
            }

            if (halfbathMin) {
                data['BathroomsHalf.eq'] = halfbathMin
                // data['BathroomsHalf.lte'] = halfbathMax
            }

            if (garageSpacesMin) {
                data['GarageSpaces.eq'] = garageSpacesMin
                // data['BathroomsHalf.lte'] = halfbathMax
            }

            if (pool)
                data['PoolPrivateYN'] = pool

            if (waterfront)
                data['WaterfrontYN'] = waterfront

            if (mls)
                data['MlsStatus'] = mls

            if (propertyType)
                data['PropertyType.eq'] = propertyType

            if (dateSearch)
                data['CloseDate.gte'] = dateSearch

            await getMatchedListings(data)

            await checkedListings()

            await loadingDiv(0)

            $('#drop-filter').removeClass('show')
        }

        var coordinates = []
        var box = ''
        var first_search = true

        async function mounted() {
            const urlParams = new URLSearchParams(window.location.search)
            const listingId = urlParams.get('listingId')

            var response = await axiosInc(`listings/${listingId}`, 'get', null)
            if (response.data) {
                coordinates = response.data.bundle.Coordinates
                var data = response.data.bundle

                showByIdRow = data
                const validate = validateString

                $('#UnparsedAddress').html(validate(data['UnparsedAddress']))
                $('#BuyerAgentFullName').html(validate(data['BuyerAgentFullName']))
                $('#BedroomsTotal').html(validate(data['BedroomsTotal']))
                $('#BathroomsTotalInteger').html(validate(data['BathroomsTotalInteger']))
                $('#YearBuilt').html(validate(data['YearBuilt']))
                $('#LivingArea').html(validate(data['LivingArea']))
                $('#GarageYN').html(data['GarageYN'] ? 'Yes' : 'No')
                $('#MIAMIRE_PoolYN').html(data['MIAMIRE_PoolYN'] ? 'Yes' : 'No')
            }
        }

        var checkedIds = []

        function checkedListings() {
            $('.checkbox-check').change(function() {
                var checkedCheckbox = $('.checkbox-check:checked')

                if (checkedCheckbox.length > 3) {
                    $(this).prop('checked', false)
                    return
                }

                checkedCheckbox.map(el => {
                    let row = checkedCheckbox[el]
                    if (checkedIds.includes(row.value)) {
                        delete checkedIds[row.value]
                    } else {
                        checkedIds.push(row.value)
                    }
                    return
                })

                var checkedCheckbox1 = $('.checkbox-check:not(:checked)')

                checkedCheckbox1.map(el => {
                    let row = checkedCheckbox1[el]
                    if (checkedIds.includes(row.value)) {
                        var inx = checkedIds.findIndex(el1 => el1 == row.value)
                        checkedIds.splice(inx, 1)
                    }
                    return
                })

                if (statusGl == 'Pending') {
                    var nextBtn = $('#next-btn')
                    var nextBtnHref = "{{ route('cma.finishPage') }}"
                    nextBtn.attr('href',
                        `${nextBtnHref}?listingId=${showByIdRow.ListingId}&listingIds=${checkedIds.toString()}`)
                }

                var resultScan = $('#results-scan')
                var html = resultScan.html().split('/')[1]

                resultScan.html(`${checkedCheckbox.length}/${html}`)
            })
        }

        let locations = []

        async function getMatchedListings(request = null) {
            var mergeData = null

            mergeData = {
                ...request
            }

            mergeData['StandardStatus'] = statusGl
            // mergeData['near'] = coordinates[0] + ',' + coordinates[1]

            mergeData['limit'] = limit
            mergeData['box'] = box
            var response = await axiosInc('listings', 'get', mergeData)
            if (response.data) {
                if (response.data.total > limit) {
                    $('#view-more').removeClass('d-none')
                } else {
                    $('#view-more').addClass('d-none')
                }
                $('#results-scan').html('0/' + response.data.bundle.length)
                locations = []
                const resForHtml = response.data.bundle.map(item => {
                    locations.push([item.BuyerAgentFullName, item.Latitude, item.Longitude])
                    let html = `<div class="market-analysis-row">
                    <div class="position-relative">
                        <div class="image-checkbox">
                            <div class="form-check">
                                <input class="form-check-input checkbox-check" type="checkbox" value="${item.ListingId}" id="flexCheckDefault">
                            </div>
                        </div>
                        <img src="${(item.Media && item.Media.length) ? item.Media[0].MediaURL : ''}">
                        <div class="image-overlay">
                            <div class="image-overlay-div">
                                <div>
                                    <p class="sqft-price">
<!--                                        <i class="fa-solid fa-star"></i>-->
                                        <b>$${validateString(status === 'Closed'  ? item.ClosePrice :item.ListPrice).toLocaleString()} | $${validateString(item.MIAMIRE_RATIO_CurrentPrice_By_SQFT)}/Sq.Ft</b>
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
                                        <h6>${item.LotSizeSquareFeet ? validateString(item.LotSizeSquareFeet) : '-'} <br> SqFt</h6>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <p class="location">${validateString(item.City)} ${validateString(item.PostalCode)}</p>
                            </div>
                        </div>
                    </div>
                    <div class="div-table-market-analysis">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 striped">
                                    <div class="d-flex justify-content-between">
                                        <p>MLS</p>
                                        <p>${item.ListAgentMlsId}</p>
                                    </div>
                                </div>
                                <div class="col-md-6 striped">
                                    <div class="d-flex justify-content-between">
                                        <p>Year Built</p>
                                        <p>${item.YearBuilt}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex justify-content-between">
                                        <p>Pool</p>
                                        <p>${item.PoolPrivateYN ? 'Yes' : 'No'}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex justify-content-between">
                                        <p>Lot Size</p>
                                        <p>${item.LotSizeDimensions ? validateString(item.LotSizeDimensions) : '-'}</p>
                                    </div>
                                </div>
                                <div class="col-md-6 striped">
                                    <div class="d-flex justify-content-between">
                                        <p>Living Sq.Ft.</p>
                                        <p>${item.LivingArea}</p>
                                    </div>
                                </div>
                                <div class="col-md-6 striped">
                                    <div class="d-flex justify-content-between">
                                        <p>On Market</p>
                                        <p>${item.DaysOnMarket ? item.DaysOnMarket + ' Days' : 'No'}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex justify-content-between">
                                        <p>Sold</p>
                                        <p>${item.CloseDate ? moment().diff(moment(item.CloseDate, 'YYYY-MM-DD'), 'days') + ' Days ago' : 'Not Yet'}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex justify-content-between">
                                        <p>Status</p>
                                        <p>${item.StandardStatus}</p>
                                    </div>
                                </div>
                                <div class="col-12 striped">
                                    <div class="d-flex justify-content-between">
                                        <p>Prop. Type</p>
                                        <p>${item.PropertyType}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex justify-content-between">
                                        <p>Water Front</p>
                                        <p>${item.WaterfrontYN ? 'Yes' : 'No'}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex justify-content-between">
                                        <p>Listing Price</p>
                                        <p>$${(item.ListPrice ?? '').toLocaleString()}</p>
                                    </div>
                                    ${statusGl === 'Closed' ? `
                                                            <div class="d-flex justify-content-between">
                                                                <p>Sale Price</p>
                                                                <p>$${(item.ClosePrice ?? '').toLocaleString()}</p>
                                                            </div>` : ''}
                                </div>
                                <div class="col-md-6 striped">
                                    <div class="d-flex justify-content-between">
                                        <p>${status === 'Closed' ? 'Agent' : 'Listing Agent'}</p>
                                        <p>${status === 'Closed' ? item.BuyerAgentFullName : item.ListAgentFullName}</p>
                                    </div>
                                </div>
                                <div class="col-md-6 striped">
                                    <div class="d-flex justify-content-between">
                                        <p>Phone</p>
                                        <p>${status === 'Closed' ? item.BuyerAgentDirectPhone : item.ListAgentDirectPhone}</p>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="d-flex justify-content-between">
                                        <p>Company</p>
                                        <p>${status === 'Closed' ? item.BuyerOfficeName : item.ListOfficeName}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>`
                    return html
                })
                $('.market-analysis-rows div').html(resForHtml)

                $('.market-analysis-row div').scrollTop(0)

                var marketDiv = $('.market-analysis-rows')
                var innerDiv = marketDiv.find('div')

                marketDiv.scrollTop(innerDiv.offset().top - marketDiv.offset().top)

                addMarkersToMap()
            }
        }

        function validateString(string, isNumber = true) {
            return string ?? (isNumber ? 0 : 'N/A')
        }

        var map
        var should_search = false

        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                zoom: 17,
                center: new google.maps.LatLng(coordinates[1], coordinates[0]),
                mapTypeId: google.maps.MapTypeId.ROADMAP
            })

            google.maps.event.addListener(map, 'idle', async function(e) {
                var bounds = map.getBounds()
                var southWest = bounds.getSouthWest()
                var northEast = bounds.getNorthEast()
                box = southWest.lng() + ',' + southWest.lat() + ',' + northEast.lng() + ',' + northEast.lat()
            })
        }

        var markers = []

        function addMarkersToMap() {
            for (let i = 0; i < markers.length; i++) {
                markers[i].setMap(null)
            }
            var infowindow = new google.maps.InfoWindow()

            var marker, i
            const svgMarker = {
                path: 'M10.453 14.016l6.563-6.609-1.406-1.406-5.156 5.203-2.063-2.109-1.406 1.406zM12 2.016q2.906 0 4.945 2.039t2.039 4.945q0 1.453-0.727 3.328t-1.758 3.516-2.039 3.070-1.711 2.273l-0.75 0.797q-0.281-0.328-0.75-0.867t-1.688-2.156-2.133-3.141-1.664-3.445-0.75-3.375q0-2.906 2.039-4.945t4.945-2.039z',
                fillColor: 'black',
                fillOpacity: 0.72,
                strokeWeight: 0,
                rotation: 0,
                scale: 2,
                anchor: new google.maps.Point(15, 30),
            }

            for (i = 0; i < locations.length; i++) {
                marker = new google.maps.Marker({
                    position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                    icon: svgMarker,
                    map: map
                })
                markers.push(marker)

                google.maps.event.addListener(marker, 'click', (function(marker, i) {
                    return function() {
                        infowindow.setContent(locations[i][0])
                        infowindow.open(map, marker)
                    }
                })(marker, i))
            }
        }
    </script>
@endsection
