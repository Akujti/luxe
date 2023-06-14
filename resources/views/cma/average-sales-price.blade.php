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
        <div class="col-12 col-xl-12 mt-5">
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
                                        <span id="sqftS"></span>
                                    </div>
                                    <p>$ / SqFt (Sold)</p>
                                </div>
                                <div class="circle-analytic">
                                    <div class="circle">
                                        <span id="sqftA"></span>
                                    </div>
                                    <p>$ / SqFt (Active)</p>
                                </div>
                                <div class="circle-analytic">
                                    <div class="circle">
                                        <span id="daysS"></span>
                                    </div>
                                    <p>Avg Days (Sold)</p>
                                </div>
                                <div class="circle-analytic">
                                    <div class="circle">
                                        <span id="daysA"></span>
                                    </div>
                                    <p>Avg Days (Active)</p>
                                </div>

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
                        <h5>Comparables</h5>
                    </div>

                    <div class="table-box-body">
                        <div>
                            <div class="comparables-div border-bottom-div">
                                <p class="title-p green">Active Price</p>
                                <p class="price" id="active-range">&nbsp;</p>
                                <p class="under-price">$/FT</p>

                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="price-div"><span id="lowestPriceA"></span></p>

                                    <div class="input-range">
                                        <input type="range" id="active-range-input" min="" max="" class="form-range" id="customRange1">
                                    </div>

                                    <p class="price-div"><span id="biggestPriceA"></span></p>
                                </div>

                                <p class="last-p">Active Price Range</p>
                            </div>

                            <div class="borderdivider">
                                <div class="bordermask"></div><span></span>
                            </div>

                            <div class="comparables-div">
                                <p class="title-p orange">Sold Price</p>
                                <p class="price" id="sold-range">&nbsp;</p>
                                <p class="under-price">$/FT</p>

                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="price-div"><span id="lowestPriceS"></span></p>

                                    <div class="input-range">
                                        <input type="range" id="sold-range-input" min="" max="" class="form-range" id="customRange1">
                                    </div>

                                    <p class="price-div"><span id="biggestPriceS"></span></p>
                                </div>

                                <p class="last-p">Sold Price Range</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                                    <input type="text" value="" id="low" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-xl-4">
                                <div class="form-group">
                                    <label class="bg-warning text-white">Mid</label>
                                    <input type="text" value="" id="mid" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-xl-4">
                                <div class="form-group">
                                    <label class="bg-success text-white">High</label>
                                    <input type="text" value="" id="high" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-6 mt-5">
            <div class="box-charts row m-0">
                <div class="table-box w-100 px-2">
                    <div class="table-box-header d-flex align-items-center justify-content-between w-100">
                        <h5>Type of Ownership <small>(by price)</small></h5>
                    </div>

                    <div class="table-box-body">
                        <div class="big-chart" id="chart-type"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-6 mt-5">
            <div class="box-charts row m-0">
                <div class="table-box w-100 px-2">
                    <div class="table-box-header d-flex align-items-center justify-content-between w-100">
                        <h5>Type of Property Type <small>(by price)</small></h5>
                    </div>

                    <div class="table-box-body">
                        <div class="big-chart" id="chart-type1"></div>
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
                        <a href="{{ route('cma.finishPage') }}?@querystring" class="btn-action">Next<i class="fa-solid fa-angle-right"></i></a>
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

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<script>
    $(document).ready(async function() {
        await mounted();
        await getMatchedListings();
        await addTypeChart();
        await addType1Chart();
    })

    function validateString(string, isNumber = true) {
        return string ?? (isNumber ? 0 : 'N/A');
    }

    async function mounted() {
        var listingId = "{{ request()->get('listingId') }}";
        var response = await axiosInc(`listings/${listingId}`, 'get', null);
        if (response.data) {
            var data = response.data.bundle;
            console.log(data)

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
            html2 = ``,
            sqftS = 0,
            sqftA = 0,
            daysA = 0,
            daysS = 0,
            daysSC = 0,
            daysAC = 0,
            lowestPrice = {
                active: 0,
                sold: 0
            },
            biggestPrice = {
                active: 0,
                sold: 0
            };
        let rows = await Promise.all(listingIds.map(async el => {
            var response = await axiosInc(`listings/${el}`, 'get', null);
            if (response.data) {
                var data = response.data.bundle;

                if (data.StandardStatus == 'Active') {
                    if (data.ListPrice > biggestPrice.active) {
                        biggestPrice.active = data.ListPrice
                    } else {
                        lowestPrice.active = data.ListPrice
                    }
                    sqftA += Number(data.MIAMIRE_RATIO_CurrentPrice_By_SQFT);
                    daysA += Number(data.DaysOnMarket);
                    daysAC++;
                } else {
                    if (data.ListPrice > biggestPrice.sold) {
                        biggestPrice.sold = data.ListPrice
                    } else {
                        lowestPrice.sold = data.ListPrice
                    }
                    sqftS += Number(data.MIAMIRE_RATIO_CurrentPrice_By_SQFT);
                    daysS += Number(data.DaysOnMarket);
                    daysSC++;
                }

                listingsIdsData.push(data);
            }
        }));

        $('#sqftA').html("$" + parseFloat(sqftA).toFixed(0));
        $('#sqftS').html("$" + parseFloat(sqftS).toFixed(0));
        $('#daysA').html("$" + parseFloat(isNaN(daysA / daysAC) ? 0 : daysA / daysAC).toFixed(0));
        $('#daysS').html("$" + parseFloat(isNaN(daysS / daysSC) ? 0 : daysS / daysSC).toFixed(0));

        $('#lowestPriceA').html('$' + lowestPrice.active)
        $('#biggestPriceA').html('$' + biggestPrice.active)
        $("#active-range-input").attr('min', lowestPrice.active)
        $("#active-range-input").attr('max', biggestPrice.active)
        $('#lowestPriceS').html('$' + lowestPrice.sold)
        $('#biggestPriceS').html('$' + biggestPrice.sold)
        $("#sold-range-input").attr('min', lowestPrice.sold)
        $("#sold-range-input").attr('max', biggestPrice.sold)

        $(document).on('input change', '#active-range-input', function() {
            $('#active-range').html( "$" + $(this).val() );
        });

        $(document).on('input change', '#sold-range-input', function() {
            $('#sold-range').html( "$" + $(this).val() );
        });

        let low = (lowestPrice.sold < lowestPrice.active) ? lowestPrice.sold : lowestPrice.active;
        let high = (biggestPrice.sold > biggestPrice.active) ? biggestPrice.sold : biggestPrice.active;
        $('#low').val(`$${low}`)
        $('#high').val(`$${high}`)
        $('#mid').val(`$${parseFloat(Number(high) + Number(low)).toFixed(0) / 2}`)
    }

    function addTypeChart() {
        let rows = [];
        Object.values(listingsIdsData).forEach(el => {
            var row = rows.find(fr => fr.name === el.OwnershipType);
            if(row) {
                row.price += Number(el.ListPrice);
            } else {
                rows.push({ id: el.ListingId, price: el.ListPrice, name: el.OwnershipType});
            }
        })
        let obj = Object.values(listingsIdsData).map(el => {
            return getRandomColor()
        })
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
                    'Name: <b>{point.name}</b><br/>' +
                    'Value: <b>{point.z}</b><br/>'
            },
            series: [{
                minPointSize: 10,
                innerSize: '20%',
                zMin: 0,
                name: 'countries',
                borderRadius: 5,
                data: rows.map(el => {
                    return {
                        name: el.name,
                        y: el.price,
                        z: el.price
                    }
                }),
                colors: obj
            }]
        });
    }

    function addType1Chart() {
        let rows = [];
        Object.values(listingsIdsData).forEach(el => {
            var row = rows.find(fr => fr.name === el.PropertySubType);
            if(row) {
                row.price += Number(el.ListPrice);
            } else {
                rows.push({ id: el.ListingId, price: el.ListPrice, name: el.PropertySubType});
            }
        })
        let obj = Object.values(listingsIdsData).map(el => {
            return getRandomColor()
        })
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
                    'Name: <b>{point.name}</b><br/>' +
                    'Value: <b>{point.z}</b><br/>'
            },
            series: [{
                minPointSize: 10,
                innerSize: '20%',
                zMin: 0,
                name: 'countries',
                borderRadius: 5,
                data: rows.map(el => {
                    return {
                        name: el.name,
                        y: el.price,
                        z: el.price
                    }
                }),
                colors: obj
            }]
        });
    }

    function getRandomColor() {
        var letters = '0123456789ABCDEF';
        var color = '#';

        for (var i = 0; i < 6; i++) {
            color += letters[Math.floor(Math.random() * 16)];
        }

        return color;
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