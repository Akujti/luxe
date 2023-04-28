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
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14377.148685373455!2d-80.27733083339375!3d25.72801527140639!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9b7c4a72958db%3A0x277e3b9f623100fb!2sCoconut%20Grove%2C%20Miami%2C%20FL%2C%20USA!5e0!3m2!1sen!2s!4v1682631578934!5m2!1sen!2s" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                            <th>Complex Name</th>
                            <th>List Price</th>
                            <th>Beds</th>
                            <th>Baths</th>
                            <th>H/Baths</th>
                            <th>Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>A11206816</td>
                            <td>
                                <div class="circle bg-warning">S</div>
                            </td>
                            <td>TRAPP AVENUE CONDO</td>
                            <td>$1,100,000.00</td>
                            <td>3</td>
                            <td>2</td>
                            <td>1</td>
                            <td>2566 Trapp Ave 25661 Miami, FL 33133</td>
                        </tr>
                        <tr>
                            <td>A11186857</td>
                            <td>
                                <div class="circle bg-warning">S</div>
                            </td>
                            <td>MONTAGE TH CONDO</td>
                            <td>$957,500.00</td>
                            <td>2</td>
                            <td>2</td>
                            <td>1</td>
                            <td>3108 Mcdonald St Coconut Grove, FL 33133</td>
                        </tr>
                        <tr>
                            <td>A11222609</td>
                            <td>
                                <div class="circle bg-warning">S</div>
                            </td>
                            <td>MONTAGE TH PHASE 1</td>
                            <td>$1,220,000.00</td>
                            <td>2</td>
                            <td>2</td>
                            <td>1</td>
                            <td>3204 Shipping Ave Coconut Grove, FL 33133</td>
                        </tr>
                        <tr>
                            <td>R10776683</td>
                            <td>
                                <div class="circle bg-warning">S</div>
                            </td>
                            <td>Edgewater of Coral Gables</td>
                            <td>$245,000.00</td>
                            <td>1</td>
                            <td>1</td>
                            <td>0</td>
                            <td>35 Edgewater Drive 104 Coral Gables, FL 33133</td>
                        </tr>
                        <tr>
                            <td>F10326043</td>
                            <td>
                                <div class="circle bg-warning">S</div>
                            </td>
                            <td>VILLAGGIO IN THE GROVE</td>
                            <td>$320,000.00</td>
                            <td>3</td>
                            <td>2</td>
                            <td>1</td>
                            <td>2566 Trapp Ave 25661 Miami, FL 33133</td>
                        </tr>
                        <tr>
                            <td>A11206816</td>
                            <td>
                                <div class="circle bg-warning">S</div>
                            </td>
                            <td>TRAPP AVENUE CONDO</td>
                            <td>$1,100,000.00</td>
                            <td>3</td>
                            <td>2</td>
                            <td>1</td>
                            <td>2566 Trapp Ave 25661 Miami, FL 33133</td>
                        </tr>
                        <tr>
                            <td>A11206816</td>
                            <td>
                                <div class="circle bg-warning">S</div>
                            </td>
                            <td>TRAPP AVENUE CONDO</td>
                            <td>$1,100,000.00</td>
                            <td>3</td>
                            <td>2</td>
                            <td>1</td>
                            <td>2566 Trapp Ave 25661 Miami, FL 33133</td>
                        </tr>
                        <tr>
                            <td>A11206816</td>
                            <td>
                                <div class="circle bg-warning">S</div>
                            </td>
                            <td>TRAPP AVENUE CONDO</td>
                            <td>$1,100,000.00</td>
                            <td>3</td>
                            <td>2</td>
                            <td>1</td>
                            <td>2566 Trapp Ave 25661 Miami, FL 33133</td>
                        </tr>
                        <tr>
                            <td>A11206816</td>
                            <td>
                                <div class="circle bg-warning">S</div>
                            </td>
                            <td>TRAPP AVENUE CONDO</td>
                            <td>$1,100,000.00</td>
                            <td>3</td>
                            <td>2</td>
                            <td>1</td>
                            <td>2566 Trapp Ave 25661 Miami, FL 33133</td>
                        </tr>
                        <tr>
                            <td>F10356101</td>
                            <td>
                                <div class="circle bg-primary">A</div>
                            </td>
                            <td>HIBISCUS GARDENS</td>
                            <td>$840,000.00</td>
                            <td>3</td>
                            <td>2</td>
                            <td>1</td>
                            <td>3061 Hibiscus St 3061 Miami, FL 33133</td>
                        </tr>
                        <tr>
                            <td>A11206816</td>
                            <td>
                                <div class="circle bg-primary">S</div>
                            </td>
                            <td>TRAPP AVENUE CONDO</td>
                            <td>$1,100,000.00</td>
                            <td>3</td>
                            <td>2</td>
                            <td>1</td>
                            <td>2566 Trapp Ave 25661 Miami, FL 33133</td>
                        </tr>
                        <tr>
                            <td>A11206816</td>
                            <td>
                                <div class="circle bg-primary">S</div>
                            </td>
                            <td>TRAPP AVENUE CONDO</td>
                            <td>$1,100,000.00</td>
                            <td>3</td>
                            <td>2</td>
                            <td>1</td>
                            <td>2566 Trapp Ave 25661 Miami, FL 33133</td>
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
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
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
        },  {
            name: 'Yard Sign',
            y: 4.86
        },  {
            name: 'Open House',
            y: 4.86
        }]
    }]
});


</script>
@endsection