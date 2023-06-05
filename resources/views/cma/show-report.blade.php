@extends('cma.layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('/css/cma-report.css') }}">
<link rel="stylesheet" href="{{ asset('/css/cma-report-show.css') }}">
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

    .section-header {
        background-image: url("{{ asset('images/index-page/section_background1.png') }}");
        background-repeat: no-repeat;
        background-size: 100%;
    }

    .section-info {
        background-image: url("{{ asset('images/index-page/section_background2.jpg') }}");
        background-repeat: no-repeat;
        background-size: 100%;
    }

    .section-comparables {
        background-image: unset !important;
        background-color: white;
    }
</style>
@endsection
@section('content')

<section class="section-header">
    <section class="section-img">
        <h1>LUXE Properties</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
    </section>

    <section class="section-details">
        <div class="d-flex align-items-center justify-content-around">
            <p>
                <i class="fa-solid fa-location-dot"></i>
                <span class="UnparsedAddress"></span>
            </p>
            <p>
                <i class="fa-solid fa-table-cells-large"></i>
                <span class="MIAMIRE_MaximumLeasableSqft"></span>
                sqft
            </p>
            <p>
                <i class="fa-solid fa-bed"></i>
                <span class="BedroomsTotal"></span>
                beds
            </p>
            <p>
                <i class="fa-solid fa-toilet"></i>
                <span class="BathroomsTotalInteger"></span>
                toilets
            </p>
        </div>
    </section>
</section>

<section class="section-map">
    <div>
        <style>
            #map {
                height: 100%;
                width: 100%;
            }
        </style>
        <div id="map"></div>
    </div>
</section>

<section class="section-header section-info">
    <section class="section-img">
        <div class="section-info-overlay">
            <div class="main-overlay">
                <div class="full position-relative">
                    <div class="position-absolute logo">
                        <img src="{{ asset('/images/logo-black.png') }}" alt="">
                    </div>
                    <span>&nbsp;Marketing +</span>


                    <div class="position-absolute text">
                        <b>We</b> <br>

                        Reach the right target of buyers through a powerful marketing exposure system
                    </div>
                </div>
                <div class="overlay">
                    <span>
                        &nbsp;Servicing&nbsp; + &nbsp;
                    </span>
                    <span>
                        Pricing =
                    </span>
                    <span>
                        Maximum <br> Value
                    </span>
                </div>
            </div>
        </div>
    </section>
</section>

<section class="section-header section-comparables">
    <section class="section-img">
        <h1>Comparables Properties</h1>
        <div>
            <div class="table-responsive">
                <table class="table table-report">
                    <thead>
                        <tr>
                            <th>MLS</th>
                            <th>Status</th>
                            <th>Buyer Name</th>
                            <th>List Price</th>
                            <th>Beds</th>
                            <th>Baths</th>
                            <th>H/Baths</th>
                            <th>Address</th>
                        </tr>
                    </thead>
                    <tbody id="table-comparables">
                        <tr>
                            <td colspan="8">Loading...</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="section-footer mt-4">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex">
                        <div class="d-flex text-dark mr-2 gothicRegular">
                            <div class="circle bg-primary">A</div>&nbsp;
                            Active
                        </div>
                        <div class="d-flex text-dark gothicRegular">
                            <div class="circle bg-warning">S</div>&nbsp;
                            Sold
                        </div>
                    </div>

                    <div class="logo">
                        <img src="{{ asset('images/logo-black.png') }}" height="95px">
                    </div>

                    <div class="text-dark gothicRegular">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>

<section class="section-header section-comparables section-top-comparables" style="height:auto;min-height:100vh;max-height:300vh;">
    <section class="section-img" style="position:relative;transform:unset !important;top:unset;left:unset;">
        <h1>Top Comparables</h1>
        <div>
            <div class="row p-0 m-0" id="top-comparables">
                <h1 class="text-center" style="color:black;font-size:20px;text-align:center;width:100%;">Loading...</h1>
            </div>
        </div>
    </section>
</section>

<section class="section-header section-comparables section-top-comparables">
    <section class="section-img">
        <h1>Buyer Major Sources</h1>
        <div>
            <div class="row p-0 m-0">
                <div class="col-12">
                    <div class="col-xl-6 ml-auto">
                        <div class="chart" id="chart"></div>
                    </div>
                </div>

                <div class="col-12 col-xl-6">
                    <div class="chart" id="chart1"></div>
                </div>
            </div>
        </div>
    </section>
</section>

<section class="section-header" style="border-bottom: unset;">
    <section class="section-img">
        <h1>LUXE Properties</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
    </section>

    <section class="section-details">
        <div class="d-flex align-items-center justify-content-around">
            <p>
                <i class="fa-solid fa-location-dot"></i>
                <span class="UnparsedAddress"></span>
            </p>
            <p>
                <i class="fa-solid fa-table-cells-large"></i>
                <span class="MIAMIRE_MaximumLeasableSqft"></span> sqft
            </p>
            <p>
                <i class="fa-solid fa-bed"></i>
                <span class="BedroomsTotal"></span> beds
            </p>
            <p>
                <i class="fa-solid fa-toilet"></i>
                <span class="BathroomsTotalInteger"></span> toilets
            </p>
        </div>
    </section>
</section>

@endsection

@section('js')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<script>
    $(document).ready(async function() {
        await mounted();
        await getMatchedListings();
    })
    function validateString(string, isNumber = true) {
        return string ?? (isNumber ? 0 : 'N/A');
    }

    async function mounted() {
        var listingId = "{{ request()->get('listingId') }}";
        var response = await axiosInc(`listings/${listingId}`, 'get', null);
        if (response.data) {
            var data = response.data.bundle;

            var validate = validateString;

            Object.keys(data).forEach((el) => {
                let row = data[el];
                $('.' + el).html(validate(data[el]));
            })

        }
    }
    var listingsIdsData = [];
    let locations = [];
    async function getMatchedListings() {
        var listingIds = "{{ request()->get('listingIds') }}".split(',');
        let html = ``,
            html2 = ``;
        let rows = await Promise.all(listingIds.map(async el => {
            var response = await axiosInc(`listings/${el}`, 'get', null);
            if (response.data) {
                var data = response.data.bundle;
                listingsIdsData.push(data);
                html += `<tr>
                            <td>${data.ListingId}</td>
                            <td>
                                ${data.StandardStatus == 'Active' ? `<div class="circle bg-success">A</div>`: `<div class="circle bg-warning">S</div>`}
                            </td>
                            <td>${data.BuyerAgentFullName}</td>
                            <td>$${data.ListPrice}</td>
                            <td>${data.BedroomsTotal ?? 0}</td>
                            <td>${data.BathroomsTotalInteger ?? 0}</td>
                            <td>${data.BathroomsHalf ?? 0}</td>
                            <td>${data.UnparsedAddress}</td>
                        </tr>`;

                html2 += `<div class="col-12 col-xl-4">
                    <div class="top-post">
                        <div class="img-top-post">
                            <img src="${data.Media.length ? data.Media[0].MediaURL : ''}" width="100%">
                            <div class="sold">SOLD</div>
                            <div class="price">$${data.ListPrice}</div>
                            <div class="details">
                                <div>
                                    <p>${data.UnparsedAddress}</p>
                                    <p>${data.BathroomsTotalInteger ?? 0} <br>Baths</p>
                                    <p>2,119 <br>Sq.Ft.</p>
                                </div>
                            </div>
                        </div>
                        <div class="under-img">
                            ${data.BuyerAgentFullName}
                        </div>
                        <div class="details-top-post">
                            <div class="d-flex">
                                <div class="d-flex w-100 justify-content-between">
                                    <p class="d-inline-block">Year ${data.YearBuilt ?? 'N/A'}</p>
                                    <p class="d-inline-block"> Lot size ${data.LotSizeDimensions ?? 'N/A'}</p>
                                </div>

                            </div>
                            <div class="d-flex w-100 justify-content-between">
                                <p class="d-inline-block">On Market ${data.DaysOnMarket ? data.DaysOnMarket + ' Days': 'No'}</p>
                                <p class="d-inline-block">Association</p>
                            </div>
                            <div class="d-flex w-100 justify-content-between">
                                <p class="d-inline-block">Pool ${data.PoolPrivateYN ? 'Yes': 'No'}</p>
                                <p class="d-inline-block">Waterfront ${data.WaterfrontYN ? 'Yes': 'No'}</p>
                            </div>
                        </div>
                    </div>
                </div>`;
                locations.push([data.BuyerAgentFullName, data.Latitude, data.Longitude])
            }
            return [data.BuyerAgentFullName, data.Latitude, data.Longitude];
        }));
        $('#table-comparables').html(html)
        $('#top-comparables').html(html2)
        initMap()
        fillCharts();

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

    function fillCharts() {
        Highcharts.chart('chart', {
            chart: {
                zoomType: 'xy'
            },
            title: {
                text: null,
                align: 'left'
            },
            subtitle: {
                text: null
            },
            xAxis: [{
                categories: Object.values(listingsIdsData).map(el => el.BuyerAgentFullName),
                crosshair: true
            }],
            yAxis: [{ // Primary yAxis
                labels: {
                    format: '{value}',
                    style: {
                        color: Highcharts.getOptions().colors[1]
                    }
                },
                title: {
                    text: null,
                    style: {
                        color: Highcharts.getOptions().colors[1]
                    }
                }
            }, { // Secondary yAxis
                title: {
                    text: null,
                    style: {
                        color: Highcharts.getOptions().colors[0]
                    }
                },
                labels: {
                    format: '{value}',
                    style: {
                        color: Highcharts.getOptions().colors[0]
                    }
                },
                opposite: true
            }],
            tooltip: {
                shared: true
            },
            legend: {
                align: 'left',
                x: 80,
                verticalAlign: 'top',
                y: 80,
                floating: true,
                backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || 'rgba(255,255,255,0.25)'
            },
            series: [ {
                name: 'List Price',
                type: 'spline',
                data: Object.values(listingsIdsData).map(el => el.ListPrice),
                tooltip: {
                    valueSuffix: ''
                }
            }, {
                name: 'Close Price',
                type: 'spline',
                data: Object.values(listingsIdsData).map(el => el.ClosePrice),
                tooltip: {
                    valueSuffix: ''
                }
            }]
        });

        Highcharts.chart('chart1', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: null,
                align: 'left'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b>: ${point.y}'
                    }
                }
            },
            series: [{
                name: 'Brands',
                colorByPoint: true,
                data: Object.values(listingsIdsData).map(el => {return { name: el.BuyerAgentFullName, y: el.ListPrice }})
            }]
        });
    }
</script>
@endsection