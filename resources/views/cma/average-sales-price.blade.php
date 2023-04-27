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
        <div class="col-12 col-xl-6 mt-5">
            <div class="box-charts row m-0">
                <div class="table-box w-100 px-2">
                    <div class="table-box-header d-flex align-items-center justify-content-between w-100">
                        <h5>Average Sales Price <small>(by price)</small></h5>
                        <div>
                            <select class="form-control">
                                <option value="" selected>MLS Price</option>
                            </select>
                        </div>
                    </div>

                    <div class="table-box-body">
                        <div class="big-chart" id="big-chart"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-6 mt-5">
            <div class="box-charts rowm-0">
                <div class="table-box w-100 px-2">
                    <div class="table-box-header d-flex align-items-center justify-content-between w-100">
                        <h5>Metrics</h5>
                    </div>

                    <div class="table-box-body p-2 pt-4">
                        <div>
                            <h4 class="gothicbold pb-2">Selected Market Comparables</h4>
                            <div class="d-flex align-items-start justify-content-around border-bottom mb-3 pb-2">
                                <div class="circle-analytic">
                                    <div class="circle">
                                        <span>$659</span>
                                    </div>
                                    <p>$ / SqFt (Sold)</p>
                                </div>
                                <div class="circle-analytic">
                                    <div class="circle">
                                        <span>$757</span>
                                    </div>
                                    <p>$ / SqFt (Active)</p>
                                </div>
                                <div class="circle-analytic">
                                    <div class="circle">
                                        <span>158</span>
                                    </div>
                                    <p>Avg Days (Sold)</p>
                                </div>
                                <div class="circle-analytic">
                                    <div class="circle">
                                        <span>209</span>
                                    </div>
                                    <p>Avg Days (Active)</p>
                                </div>
                                <div class="circle-analytic">
                                    <div class="circle">
                                        <span>7%</span>
                                    </div>
                                    <p>Discount</p>
                                </div>
                            </div>
                        </div>

                        <div>
                            <h4 class="gothicbold pb-2">Benchmark (by price)</h4>
                            <div class="d-flex align-items-start justify-content-around">
                                <div class="circle-analytic">
                                    <div class="circle">
                                        <span>$774</span>
                                    </div>
                                    <p>$ / SqFt</p>
                                </div>
                                <div class="circle-analytic">
                                    <div class="circle">
                                        <span>1k/537</span>
                                    </div>
                                    <p>Closed vs Active <br> (12 Months)</p>
                                </div>
                                <div class="circle-analytic">
                                    <div class="circle">
                                        <span>115</span>
                                    </div>
                                    <p>Avg Days (Sold)</p>
                                </div>
                                <div class="circle-analytic">
                                    <div class="circle">
                                        <span>7%</span>
                                    </div>
                                    <p>AVG Discount</p>
                                </div>
                                <!-- <div class="circle-analytic">
                                    <div class="circle">
                                        <span>$659</span>
                                    </div>
                                    <p>$ / SqFt (Sold)</p>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-2 mb-5 justify-content-start p-0 m-0">
        <div class="col-12 col-xl-6 mt-5">
            <div class="box-charts row m-0">
                <div class="table-box w-100 px-2">
                    <div class="table-box-header d-flex align-items-center justify-content-between w-100">
                        <h5>Days on Market / Discount Percentage <small>(by price)</small></h5>
                    </div>

                    <div class="table-box-body">
                        <div class="big-chart" id="chart-market"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-6 mt-5">
            <div class="box-charts rowm-0">
                <div class="table-box w-100 px-2">
                    <div class="table-box-header d-flex align-items-center justify-content-between w-100">
                        <h5>Number of Sales / Average Sales Price <small>(by price)</small></h5>
                    </div>

                    <div class="table-box-body">
                        <div class="big-chart" id="chart-sale"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-2 mb-5 justify-content-start p-0 m-0">
        <div class="col-12 col-xl-8 mt-5">
            <div class="box-charts row m-0">
                <div class="table-box w-100 px-2">
                    <div class="table-box-header d-flex align-items-center justify-content-between w-100">
                        <h5>Inventory Snapshot & Closed Sales <small>(by price)</small></h5>
                    </div>

                    <div class="table-box-body">
                        <div class="big-chart" id="chart-inventory"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-4 mt-5">
            <div class="box-charts rowm-0">
                <div class="table-box w-100 px-2">
                    <div class="table-box-header d-flex align-items-center justify-content-between w-100">
                        <h5>Buyer Commission <small>(by price)</small></h5>
                    </div>

                    <div class="table-box-body">
                        <div class="big-chart" id="chart-buyer"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-2 mb-5 justify-content-start p-0 m-0">
        <div class="col-12 col-xl-4 mt-5">
            <div class="box-charts row m-0">
                <div class="table-box w-100 px-2">
                    <div class="table-box-header d-flex align-items-center justify-content-between w-100">
                        <h5>Comparables</h5>
                    </div>

                    <div class="table-box-body">
                        <div>
                            <div class="comparables-div border-bottom-div">
                                <p class="title-p green">Active Price</p>
                                <p class="price">$1,413,360</p>
                                <p class="under-price">$/FT $720</p>

                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="price-div">$1,060,020 <br> <span>$/FT $540</span></p>

                                    <div class="input-range">
                                        <input type="range" class="form-range" id="customRange1">
                                    </div>

                                    <p class="price-div">$1,060,020 <br> <span>$/FT $540</span></p>
                                </div>

                                <p class="last-p">Active Price Range</p>
                            </div>

                            <div class="borderdivider">
                                <div class="bordermask"></div><span></span>
                            </div>

                            <div class="comparables-div">
                                <p class="title-p orange">Sold Price</p>
                                <p class="price">$1,252,394</p>
                                <p class="under-price">$/FT $638</p>

                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="price-div">$1,018,797 <br> <span>$/FT $519</span></p>

                                    <div class="input-range">
                                        <input type="range" class="form-range" id="customRange1">
                                    </div>

                                    <p class="price-div">$1,609,660 <br> <span>$/FT $820</span></p>
                                </div>

                                <p class="last-p">Sold Price Range</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-4 mt-5">
            <div class="box-charts row m-0">
                <div class="table-box w-100 px-2">
                    <div class="table-box-header d-flex align-items-center justify-content-between w-100">
                        <h5>Other Opinion</h5>
                    </div>

                    <div class="table-box-body">
                        <div>
                            <div class="comparables-div border-bottom-div">
                                <p class="title-p grey">Zillow Price</p>
                                <p class="price">$1,413,360</p>
                                <p class="under-price">$/FT $720</p>

                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="price-div">$1,060,020 <br> <span>$/FT $540</span></p>

                                    <div class="input-range">
                                        <input type="range" class="form-range" id="customRange1">
                                    </div>

                                    <p class="price-div">$1,060,020 <br> <span>$/FT $540</span></p>
                                </div>

                                <p class="last-p">Zestimate Range</p>
                            </div>

                            <div class="borderdivider">
                                <div class="bordermask"></div><span></span>
                            </div>

                            <div class="comparables-div">
                                <p class="title-p grey">RPR Price</p>
                                <p class="price">$1,252,394</p>
                                <p class="under-price">$/FT $638</p>

                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="price-div">$1,018,797 <br> <span>$/FT $519</span></p>

                                    <div class="input-range">
                                        <input type="range" class="form-range" id="customRange1">
                                    </div>

                                    <p class="price-div">$1,609,660 <br> <span>$/FT $820</span></p>
                                </div>

                                <p class="last-p">Estimate Range</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-4 mt-5">
            <div class="box-charts row m-0">
                <div class="table-box w-100 px-2">
                    <div class="table-box-header d-flex align-items-center justify-content-between w-100">
                        <h5>Price Range</h5>
                    </div>

                    <div class="table-box-body">
                        <div>
                            <div class="comparables-div border-bottom-div">
                                <p class="title-p green">Possibility Price</p>
                                <p class="price">$1,236,390</p>
                                <p class="under-price">$/FT $630</p>

                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="price-div">$1,060,020 <br> <span>$/FT $540</span></p>

                                    <div class="input-range">
                                        <input type="range" class="form-range" id="customRange1">
                                    </div>

                                    <p class="price-div">$1,609,660 <br> <span>$/FT $820</span></p>
                                </div>

                                <p class="last-p">Possibility Range</p>
                            </div>

                            <div class="borderdivider">
                                <div class="bordermask"></div><span></span>
                            </div>

                            <div class="comparables-div">
                                <p class="title-p orange">Probability Price</p>
                                <p class="price">$1,390,458</p>
                                <p class="under-price">$/FT $708</p>

                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="price-div">$1,018,797 <br> <span>$/FT $519</span></p>

                                    <div class="input-range">
                                        <input type="range" class="form-range" id="customRange1">
                                    </div>

                                    <p class="price-div">$1,988,519 <br> <span>$/FT $1,013</span></p>
                                </div>

                                <p class="last-p">Probability Range</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-2 mb-5 justify-content-start p-0 m-0">
        <div class="col-12 col-xl-8 mt-5">
            <div class="box-charts row m-0">
                <div class="table-box w-100 px-2">
                    <div class="table-box-header d-flex align-items-center justify-content-between w-100">
                        <h5>Suggested Range</h5>
                    </div>

                    <div class="table-box-body p-2 pt-3">
                        <h4 class="gothicbold">Your Suggested Range</h4>

                        <div class="row suggested-range">
                            <div class="col-12 col-xl-4">
                                <div class="form-group">
                                    <label class="bg-danger text-white">Low</label>
                                    <input type="text" value="$1,061,000" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-xl-4">
                                <div class="form-group">
                                    <label class="bg-warning text-white">Mid</label>
                                    <input type="text" value="$1,237,000" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-xl-4">
                                <div class="form-group">
                                    <label class="bg-success text-white">High</label>
                                    <input type="text" value="$1,610,000" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-4 mt-5">
            <div class="box-charts rowm-0">
                <div class="table-box w-100 px-2">
                    <div class="table-box-header d-flex align-items-center justify-content-between w-100">
                        <h5>Remarks</h5>
                    </div>

                    <div class="table-box-body p-2 pt-3">
                        <div class="form-group">
                            <textarea class="form-control" rows="4"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <div class="row mt-2 mb-5 justify-content-start p-0 m-0">
        <div class="col-12 col-xl-8 mt-5">
            <div class="box-charts row m-0">
                <div class="table-box w-100 px-2">
                    <div class="table-box-header d-flex align-items-center justify-content-between w-100">
                        <h5>Buyers Coming From <small>(by price)</small></h5>
                    </div>

                    <div class="table-box-body">
                        <div class="big-chart" id="chart-buyer-coming"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-4 mt-5">
            <div class="box-charts rowm-0">
                <div class="table-box w-100 px-2">
                    <div class="table-box-header d-flex align-items-center justify-content-between w-100">
                        <h5>Buyer Intel</h5>
                    </div>

                    <div class="table-box-body">
                        <div>
                            <div class="comparables-div border-bottom-div">
                                <p class="title-p grey">Potential Buyers</p>

                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="price-div">$900K</p>

                                    <div class="borderdivider pt-3">
                                        <div class="bordermask"></div><span></span>
                                    </div>

                                    <p class="price-div">$1.6M</p>
                                </div>

                                <p class="last-p">13 Per Month</p>
                            </div>

                            <div class="comparables-div">
                                <p class="title-p grey">Potential Buyer</p>

                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="price-div">$239K</p>

                                    <div class="borderdivider pt-3">
                                        <div class="bordermask"></div><span></span>
                                    </div>

                                    <p class="price-div">$387K</p>
                                </div>

                                <p class="last-p">Income Range</p>
                            </div>

                            <div class="comparables-div">
                                <p class="title-p grey">Potential Buyer</p>

                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="price-div">$6.9K</p>

                                    <div class="borderdivider pt-3">
                                        <div class="bordermask"></div><span></span>
                                    </div>

                                    <p class="price-div">$11K</p>
                                </div>

                                <p class="last-p">Rental Marketing Range</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-2 mb-5 justify-content-start p-0 m-0">
        <div class="col-12 col-xl-4 mt-5">
            <div class="box-charts row m-0">
                <div class="table-box w-100 px-2">
                    <div class="table-box-header d-flex align-items-center justify-content-between w-100">
                        <h5>Type of Closing <small>(by price)</small></h5>
                    </div>

                    <div class="table-box-body">
                        <div class="big-chart" id="chart-type"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-4 mt-5">
            <div class="box-charts row m-0">
                <div class="table-box w-100 px-2">
                    <div class="table-box-header d-flex align-items-center justify-content-between w-100">
                        <h5>Type of Ownership <small>(by price)</small></h5>
                    </div>

                    <div class="table-box-body">
                        <div class="big-chart" id="chart-type1"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-4 mt-5">
            <div class="box-charts row m-0">
                <div class="table-box w-100 px-2">
                    <div class="table-box-header d-flex align-items-center justify-content-between w-100">
                        <h5>Marketing List</h5>

                        <div>
                            <select class="form-control">
                                <option value="">5 Miles</option>
                            </select>
                        </div>
                    </div>

                    <div class="table-box-body pt-3">
                        <div class="circle-last d-flex align-items-start justify-content-around mb-3 pb-2">
                            <div class="circle-analytic">
                                <div class="circle">
                                    <span>30</span>
                                </div>
                                <p class="p-0 m-0 pb-1">Potential Buyers That Rent</p>
                                <a href="#">
                                    Download Report
                                    <span>
                                        <i class="fa-solid fa-download"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="circle-analytic">
                                <div class="circle">
                                    <span>174</span>
                                </div>
                                <p class="p-0 m-0 pb-1">Potential Realtors</p>
                                <a href="#">
                                    Download Report
                                    <span>
                                        <i class="fa-solid fa-download"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 mb-5">
        <div class="box-charts row m-0">
            <div class="table-box w-100 px-2">
                <div class="table-box-footer border-none w-100">
                    <div class="d-flex align-items-center justify-content-between">
                        <a href="{{ route('cma.show') }}" class="btn-action"><i class="fa-solid fa-chevron-left"></i> Previous</a>
                        <a href="{{ route('cma.propertyTaxes') }}" class="btn-action">Next<i class="fa-solid fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
@section('js')
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/series-label.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script src="https://code.highcharts.com/modules/variable-pie.js"></script>


<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/map.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
<script>
    $(document).ready(function() {
        addChart();
        addMarketChart('chart-market');
        addMarketChart('chart-sale');
        addInventoryChart();
        addBuyerChart();
        addTypeChart();
        addType1Chart();
        addWorldChart();
    })

    function addChart() {
        Highcharts.chart('big-chart', {

            data: {
                csvURL: '/files/analytics.csv',
                beforeParse: function(csv) {
                    return csv.replace(/\n\n/g, '\n');
                }
            },

            title: {
                text: '',
                align: 'left'
            },

            subtitle: {
                text: '',
                align: 'left'
            },

            xAxis: {
                // categories: ['January', 'February', 'March']
            },

            yAxis: {
                title: {
                    text: null
                }
            },

            legend: {
                align: 'left',
                verticalAlign: 'top',
                borderWidth: 0
            },

            tooltip: {
                shared: true,
                crosshairs: true
            },

            plotOptions: {
                series: {
                    cursor: 'pointer',
                    className: 'popup-on-click',
                    marker: {
                        lineWidth: 1
                    }
                }
            },

            series: [{
                name: 'All sessions',
                lineWidth: 4,
                marker: {
                    radius: 4
                },
                data: [10, 20, 30]
            }]
        });
    }

    function addMarketChart(chartName) {
        Highcharts.chart(chartName, {
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
                categories: ['Jan-Mar-23', 'Apr-Jun-23', 'Jul-Sep-23', 'Oct-Dec-23', 'Jan-Mar-24', 'Apr-Jun-24',
                    'Jul-Sep-24', 'Oct-Dec-24'
                ],
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
                    text: 'Num of Days',
                    style: {
                        color: Highcharts.getOptions().colors[1]
                    }
                }
            }, { // Secondary yAxis
                title: {
                    text: 'Percent',
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
                backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || // theme
                    'rgba(255,255,255,0.25)'
            },
            series: [{
                name: 'Percent',
                type: 'column',
                yAxis: 1,
                data: [27.6, 28.8, 21.7, 34.1, 29.0, 28.4, 45.6, 51.7],
                tooltip: {
                    valueSuffix: ''
                }

            }, {
                name: 'Num of Days',
                type: 'spline',
                data: [-13.6, -14.9, -5.8, -0.7, 3.1, 13.0, 14.5, 10.8],
                tooltip: {
                    valueSuffix: ''
                }
            }]
        });
    }

    function addInventoryChart() {
        Highcharts.chart('chart-inventory', {
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
                categories: ['Jan-Mar-23', 'Apr-Jun-23', 'Jul-Sep-23', 'Oct-Dec-23', 'Jan-Mar-24'],
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
                    text: 'Num of Days',
                    style: {
                        color: Highcharts.getOptions().colors[1]
                    }
                }
            }, { // Secondary yAxis
                title: {
                    text: 'Percent',
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
                backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || // theme
                    'rgba(255,255,255,0.25)'
            },
            series: [{
                name: 'Monthly Inventory',
                type: 'column',
                yAxis: 1,
                data: [27.6, 28.8, 21.7, 34.1, 29.0],
                tooltip: {
                    valueSuffix: ''
                }

            }, {
                name: 'Actives',
                type: 'spline',
                data: [-13.6, -14.9, -5.8, -0.7, 3.1],
                tooltip: {
                    valueSuffix: ''
                }
            }, {
                name: 'Solds',
                type: 'spline',
                data: [-10.5, -14.9, -5.8, -1.5, 3.1],
                tooltip: {
                    valueSuffix: ''
                }
            }]
        });
    }

    function addBuyerChart() {
        Highcharts.chart('chart-buyer', {
            chart: {
                type: 'variablepie'
            },
            title: {
                text: null,
                align: 'left'
            },
            tooltip: {
                headerFormat: '',
                pointFormat: '<span style="color:{point.color}">\u25CF</span> <b> {point.y}</b><br/>' +
                    'Name: <b>{point.y}</b><br/>' +
                    'Value: <b>{point.z}</b><br/>'
            },
            series: [{
                minPointSize: 10,
                innerSize: '20%',
                zMin: 0,
                name: 'countries',
                borderRadius: 5,
                data: [{
                    name: '5%',
                    y: 5,
                    z: 92
                }, {
                    name: '25%',
                    y: 25,
                    z: 119
                }, {
                    name: '50%',
                    y: 50,
                    z: 121
                }],
                colors: [
                    '#8DC7E6',
                    '#0D4A76',
                    '#768995',
                ]
            }]
        });
    }

    function addTypeChart() {
        Highcharts.chart('chart-type', {
            chart: {
                type: 'variablepie'
            },
            title: {
                text: null,
                align: 'left'
            },
            tooltip: {
                headerFormat: '',
                pointFormat: '<span style="color:{point.color}">\u25CF</span> <b> {point.y}</b><br/>' +
                    'Name: <b>{point.y}</b><br/>' +
                    'Value: <b>{point.z}</b><br/>'
            },
            series: [{
                minPointSize: 10,
                innerSize: '20%',
                zMin: 0,
                name: 'countries',
                borderRadius: 5,
                data: [{
                    name: '0.4%',
                    y: 0.4,
                    z: 92
                }, {
                    name: '12.4%',
                    y: 12.4,
                    z: 119
                }, {
                    name: '87.2%',
                    y: 87.2,
                    z: 121
                }],
                colors: [
                    '#8DC7E6',
                    '#0D4A76',
                    '#768995',
                ]
            }]
        });
    }

    function addType1Chart() {
        Highcharts.chart('chart-type1', {
            chart: {
                type: 'variablepie'
            },
            title: {
                text: null,
                align: 'left'
            },
            tooltip: {
                headerFormat: '',
                pointFormat: '<span style="color:{point.color}">\u25CF</span> <b> {point.y}</b><br/>' +
                    'Name: <b>{point.y}</b><br/>' +
                    'Value: <b>{point.z}</b><br/>'
            },
            series: [{
                minPointSize: 10,
                innerSize: '20%',
                zMin: 0,
                name: 'countries',
                borderRadius: 5,
                data: [{
                    name: '78.7%',
                    y: 78.7,
                    z: 92
                }, {
                    name: '21.3%',
                    y: 21.3,
                    z: 119
                }],
                colors: [
                    '#8DC7E6',
                    '#768995',
                ]
            }]
        });
    }

    function addWorldChart() {
        am5.ready(function() {
            var root = am5.Root.new("chart-buyer-coming");

            root.setThemes([
                am5themes_Animated.new(root)
            ]);

            var chart = root.container.children.push(am5map.MapChart.new(root, {
                panX: "translateX",
                panY: "translateY",
                projection: am5map.geoMercator()
            }));

            var polygonSeries = chart.series.push(am5map.MapPolygonSeries.new(root, {
                geoJSON: am5geodata_worldLow,
                exclude: ["AQ"]
            }));

            polygonSeries.mapPolygons.template.setAll({
                tooltipText: "{name}",
                toggleKey: "active",
                interactive: true
            });

            polygonSeries.mapPolygons.template.states.create("hover", {
                fill: root.interfaceColors.get("primaryButtonHover")
            });

            polygonSeries.mapPolygons.template.states.create("active", {
                fill: root.interfaceColors.get("primaryButtonHover")
            });

            var previousPolygon;

            polygonSeries.mapPolygons.template.on("active", function(active, target) {
                if (previousPolygon && previousPolygon != target) {
                    previousPolygon.set("active", false);
                }
                if (target.get("active")) {
                    polygonSeries.zoomToDataItem(target.dataItem);
                } else {
                    chart.goHome();
                }
                previousPolygon = target;
            });


            chart.set("zoomControl", am5map.ZoomControl.new(root, {}));

            chart.chartContainer.get("background").events.on("click", function() {
                chart.goHome();
            })

            chart.appear(1000, 100);
        });
    }
</script>
@endsection
<style>
    #chart-buyer-coming {
        width: 100%;
        height: 500px;
        overflow: hidden;
    }
</style>