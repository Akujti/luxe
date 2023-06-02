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
                2759 COCONUT AVE MIAMI FL 33133
            </p>
            <p>
                <i class="fa-solid fa-table-cells-large"></i>
                1,963 sqft
            </p>
            <p>
                <i class="fa-solid fa-bed"></i>
                2 beds
            </p>
            <p>
                <i class="fa-solid fa-toilet"></i>
                2 toilets
            </p>
        </div>
    </section>
</section>

<section class="section-map">
    <div>
        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14377.148685373455!2d-80.27733083339375!3d25.72801527140639!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9b7c4a72958db%3A0x277e3b9f623100fb!2sCoconut%20Grove%2C%20Miami%2C%20FL%2C%20USA!5e0!3m2!1sen!2s!4v1682631578934!5m2!1sen!2s" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
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

    <!-- <section class="section-details">
        <div class="d-flex align-items-center justify-content-around">
            <p>
                <i class="fa-solid fa-location-dot"></i>
                2759 COCONUT AVE MIAMI FL 33133
            </p>
            <p>
                <i class="fa-solid fa-table-cells-large"></i>
                1,963 sqft
            </p>
            <p>
                <i class="fa-solid fa-bed"></i>
                2 beds
            </p>
            <p>
                <i class="fa-solid fa-toilet"></i>
                2 toilets
            </p>
        </div>
    </section> -->
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

<section class="section-header section-comparables section-top-comparables">
    <section class="section-img">
        <h1>Top Comparables</h1>
        <div>

            <div class="row p-0 m-0">
                <div class="col-12 col-xl-4">
                    <div class="top-post">
                        <div class="img-top-post">
                            <img src="{{ asset('images/cma/house.jpeg') }}" width="100%">
                            <div class="sold">SOLD</div>
                            <div class="price">$1,100,000</div>
                            <div class="details">
                                <div>
                                    <p>2566 Trapp Ave 25661 <br> Miami, FL 33133</p>
                                    <p>2.5 <br>Baths</p>
                                    <p>2,119 <br>Sq.Ft.</p>
                                </div>
                            </div>
                        </div>
                        <div class="under-img">
                            TRAPP AVENUE CONDO
                        </div>
                        <div class="details-top-post">
                            <div class="d-flex">
                                <div class="d-flex w-100 justify-content-between">
                                    <p class="d-inline-block">Year 2006</p>
                                    <p class="d-inline-block"> Lot size 2,119</p>
                                </div>

                            </div>
                            <div class="d-flex w-100 justify-content-between">
                                <p class="d-inline-block">On Market 203 days</p>
                                <p class="d-inline-block">Association</p>
                            </div>
                            <div class="d-flex w-100 justify-content-between">
                                <p class="d-inline-block">Pool No</p>
                                <p class="d-inline-block">Waterfront No</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-4">
                    <div class="top-post">
                        <div class="img-top-post">
                            <img src="{{ asset('images/cma/house1.jpeg') }}" width="100%">
                            <div class="sold">SOLD</div>
                            <div class="price">$1,100,000</div>
                            <div class="details">
                                <div>
                                    <p>2566 Trapp Ave 25661 <br> Miami, FL 33133</p>
                                    <p>2.5 <br>Baths</p>
                                    <p>2,119 <br>Sq.Ft.</p>
                                </div>
                            </div>
                        </div>
                        <div class="under-img">
                            TRAPP AVENUE CONDO
                        </div>
                        <div class="details-top-post">
                            <div class="d-flex">
                                <div class="d-flex w-100 justify-content-between">
                                    <p class="d-inline-block">Year 2006</p>
                                    <p class="d-inline-block"> Lot size 2,119</p>
                                </div>

                            </div>
                            <div class="d-flex w-100 justify-content-between">
                                <p class="d-inline-block">On Market 203 days</p>
                                <p class="d-inline-block">Association</p>
                            </div>
                            <div class="d-flex w-100 justify-content-between">
                                <p class="d-inline-block">Pool No</p>
                                <p class="d-inline-block">Waterfront No</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-4">
                    <div class="top-post">
                        <div class="img-top-post">
                            <img src="{{ asset('images/cma/house2.jpeg') }}" width="100%">
                            <div class="sold">SOLD</div>
                            <div class="price">$1,100,000</div>
                            <div class="details">
                                <div>
                                    <p>2566 Trapp Ave 25661 <br> Miami, FL 33133</p>
                                    <p>2.5 <br>Baths</p>
                                    <p>2,119 <br>Sq.Ft.</p>
                                </div>
                            </div>
                        </div>
                        <div class="under-img">
                            TRAPP AVENUE CONDO
                        </div>
                        <div class="details-top-post">
                            <div class="d-flex">
                                <div class="d-flex w-100 justify-content-between">
                                    <p class="d-inline-block">Year 2006</p>
                                    <p class="d-inline-block"> Lot size 2,119</p>
                                </div>

                            </div>
                            <div class="d-flex w-100 justify-content-between">
                                <p class="d-inline-block">On Market 203 days</p>
                                <p class="d-inline-block">Association</p>
                            </div>
                            <div class="d-flex w-100 justify-content-between">
                                <p class="d-inline-block">Pool No</p>
                                <p class="d-inline-block">Waterfront No</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-4">
                    <div class="top-post">
                        <div class="img-top-post">
                            <img src="{{ asset('images/cma/house3.jpeg') }}" width="100%">
                            <div class="sold">SOLD</div>
                            <div class="price">$1,100,000</div>
                            <div class="details">
                                <div>
                                    <p>2566 Trapp Ave 25661 <br> Miami, FL 33133</p>
                                    <p>2.5 <br>Baths</p>
                                    <p>2,119 <br>Sq.Ft.</p>
                                </div>
                            </div>
                        </div>
                        <div class="under-img">
                            TRAPP AVENUE CONDO
                        </div>
                        <div class="details-top-post">
                            <div class="d-flex">
                                <div class="d-flex w-100 justify-content-between">
                                    <p class="d-inline-block">Year 2006</p>
                                    <p class="d-inline-block"> Lot size 2,119</p>
                                </div>

                            </div>
                            <div class="d-flex w-100 justify-content-between">
                                <p class="d-inline-block">On Market 203 days</p>
                                <p class="d-inline-block">Association</p>
                            </div>
                            <div class="d-flex w-100 justify-content-between">
                                <p class="d-inline-block">Pool No</p>
                                <p class="d-inline-block">Waterfront No</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-4">
                    <div class="top-post">
                        <div class="img-top-post">
                            <img src="{{ asset('images/cma/house4.jpeg') }}" width="100%">
                            <div class="sold">SOLD</div>
                            <div class="price">$1,100,000</div>
                            <div class="details">
                                <div>
                                    <p>2566 Trapp Ave 25661 <br> Miami, FL 33133</p>
                                    <p>2.5 <br>Baths</p>
                                    <p>2,119 <br>Sq.Ft.</p>
                                </div>
                            </div>
                        </div>
                        <div class="under-img">
                            TRAPP AVENUE CONDO
                        </div>
                        <div class="details-top-post">
                            <div class="d-flex">
                                <div class="d-flex w-100 justify-content-between">
                                    <p class="d-inline-block">Year 2006</p>
                                    <p class="d-inline-block"> Lot size 2,119</p>
                                </div>

                            </div>
                            <div class="d-flex w-100 justify-content-between">
                                <p class="d-inline-block">On Market 203 days</p>
                                <p class="d-inline-block">Association</p>
                            </div>
                            <div class="d-flex w-100 justify-content-between">
                                <p class="d-inline-block">Pool No</p>
                                <p class="d-inline-block">Waterfront No</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-4">
                    <div class="top-post">
                        <div class="img-top-post">
                            <img src="{{ asset('images/cma/house5.jpeg') }}" width="100%">
                            <div class="sold">SOLD</div>
                            <div class="price">$1,100,000</div>
                            <div class="details">
                                <div>
                                    <p>2566 Trapp Ave 25661 <br> Miami, FL 33133</p>
                                    <p>2.5 <br>Baths</p>
                                    <p>2,119 <br>Sq.Ft.</p>
                                </div>
                            </div>
                        </div>
                        <div class="under-img">
                            TRAPP AVENUE CONDO
                        </div>
                        <div class="details-top-post">
                            <div class="d-flex">
                                <div class="d-flex w-100 justify-content-between">
                                    <p class="d-inline-block">Year 2006</p>
                                    <p class="d-inline-block"> Lot size 2,119</p>
                                </div>

                            </div>
                            <div class="d-flex w-100 justify-content-between">
                                <p class="d-inline-block">On Market 203 days</p>
                                <p class="d-inline-block">Association</p>
                            </div>
                            <div class="d-flex w-100 justify-content-between">
                                <p class="d-inline-block">Pool No</p>
                                <p class="d-inline-block">Waterfront No</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-footer mt-4">
                <div class="d-flex align-items-center justify-content-between">
                    <div></div>

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
                2759 COCONUT AVE MIAMI FL 33133
            </p>
            <p>
                <i class="fa-solid fa-table-cells-large"></i>
                1,963 sqft
            </p>
            <p>
                <i class="fa-solid fa-bed"></i>
                2 beds
            </p>
            <p>
                <i class="fa-solid fa-toilet"></i>
                2 toilets
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

    async function mounted() {
        var listingId = "{{ request()->get('listingId') }}";
        var response = await axiosInc(`listings/${listingId}`, 'get', null);
        if (response.data) {
            var data = response.data.bundle;

            // console.log(data);
            // Object.keys(data).forEach((el) => {
            //     let row = data[el];
            //     $('#' + el).html(validate(data[el]));
            // })

        }
    }

    let locations = [];
    async function getMatchedListings() {
        var listingIds = "{{ request()->get('listingIds') }}".split(',');
        let html = ``;
        let rows = await Promise.all(listingIds.map(async el => {
            var response = await axiosInc(`listings/${el}`, 'get', null);
            if (response.data) {
                var data = response.data.bundle;
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
                console.log(data)
                locations.push([data.BuyerAgentFullName, data.Latitude, data.Longitude])
            }
            return [data.BuyerAgentFullName, data.Latitude, data.Longitude];
        }));
        $('#table-comparables').html(html)
        initMap()

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
    Highcharts.chart('chart', {
        chart: {
            type: 'bar'
        },
        title: {
            text: null,
            align: 'left'
        },
        subtitle: {
            text: null,
            align: 'left'
        },
        xAxis: {
            categories: ['Internet', 'Real Estate Agent', 'Yard Sign', 'Open House'],
            title: {
                text: null
            },
            gridLineWidth: 1,
            lineWidth: 0
        },
        yAxis: {
            min: 0,
            title: {
                text: null,
                align: 'high'
            },
            labels: {
                overflow: 'justify'
            },
            gridLineWidth: 0
        },
        tooltip: {
            valueSuffix: ' millions'
        },
        plotOptions: {
            bar: {
                borderRadius: '50%',
                dataLabels: {
                    enabled: true
                },
                groupPadding: 0.1
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 80,
            floating: true,
            borderWidth: 1,
            backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
            shadow: true
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'Year 2020',
            data: [631, 727, 3202, 721]
        }, {
            name: 'Year 2021',
            data: [814, 841, 3714, 726]
        }, {
            name: 'Year 2022',
            data: [1044, 944, 4170, 735]
        }, {
            name: 'Year 2023',
            data: [1276, 1007, 4561, 746]
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
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                }
            }
        },
        series: [{
            name: 'Brands',
            colorByPoint: true,
            data: [{
                name: 'Internet',
                y: 70.67,
                sliced: true,
                selected: true
            }, {
                name: 'Real Estate Agent',
                y: 14.77
            }, {
                name: 'Yard Sign',
                y: 4.86
            }, {
                name: 'Open House',
                y: 4.86
            }]
        }]
    });
</script>
@endsection