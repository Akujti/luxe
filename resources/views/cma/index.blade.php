@extends('layouts.app', ['active' => 'CMA'])
@section('css')
<link rel="stylesheet" href="{{ asset('/css/cma-report.css') }}">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
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
                <div class="col-12 col-xl-6">
                    <div class="big-chart" id="big-chart"></div>
                </div>
                <div class="col-12 col-xl-6">
                    <div class="small-charts">
                        <div class="chart blue border-left">
                            <div class="d-flex">
                                <div class="circle mr-2">
                                    <i class="fa-solid fa-dollar-sign"></i>
                                </div>
                                <div>
                                    <span>
                                        Sold Listings
                                    </span><br>
                                    <span class="value">2</span>
                                    <hr class="p-0 m-0">
                                    <p>(LAST 12 MONTHS)</p>
                                </div>
                            </div>
                        </div>
                        <div class="chart yellow border-left">
                            <div class="d-flex">
                                <div class="circle mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="130" height="130" viewBox="0 0 130 130">
                                        <g id="Group_57" data-name="Group 57" transform="translate(-203 -609)">
                                            <circle id="Ellipse_22" data-name="Ellipse 22" cx="65" cy="65" r="65" transform="translate(203 609)" fill="#f6c232"/>
                                            <rect id="Rectangle_128" data-name="Rectangle 128" width="5" height="84" transform="translate(238 632)" fill="#fff"/>
                                            <rect id="Rectangle_129" data-name="Rectangle 129" width="5" height="77" transform="translate(232 650) rotate(-90)" fill="#fff"/>
                                            <rect id="Rectangle_130" data-name="Rectangle 130" width="59" height="40" rx="5" transform="translate(246 654)" fill="#fff"/>
                                            <rect id="Rectangle_131" data-name="Rectangle 131" width="5" height="17" transform="translate(263 646)" fill="#fff"/>
                                            <rect id="Rectangle_132" data-name="Rectangle 132" width="5" height="17" transform="translate(279 646)" fill="#fff"/>
                                        </g>
                                    </svg>
                                </div>
                                <div>
                                    <span>
                                        Active Listings
                                    </span><br>
                                    <span class="value">0</span>
                                    <hr class="p-0 m-0">
                                    <p>(CURRENT)</p>
                                </div>
                            </div>
                        </div>
                        <div class="chart green border-left">
                            <div class="d-flex">
                                <div class="circle mr-2">
                                    <i class="fa-solid fa-file-contract"></i>
                                </div>
                                <div>
                                    <span>
                                        Listing Contracts
                                    </span><br>
                                    <span class="value">0</span>
                                    <hr class="p-0 m-0">
                                    <p>(LAST 12 MONTHS)</p>
                                </div>
                            </div>
                        </div>
                        <div class="chart orange border-left">
                            <div class="d-flex">
                                <div class="circle mr-2">
                                    <i class="fa-solid fa-chart-line"></i>
                                </div>
                                <div>
                                    <span>
                                        CMA Reports
                                    </span><br>
                                    <span class="value">5</span>
                                    <hr class="p-0 m-0">
                                    <p>(LAST 12 MONTHS)</p>
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
                        <h5 class="h5-title">Seller CMA</h5>
                        <a href="{{ route('cma.search') }}" class="btn-luxe">Add Seller CMA</a>
                    </div>

                    <div class="table-box-body">
                        <div class="table-action d-flex align-items-center justify-content-between my-3">
                            <div>
                                <div class="btn-action-div">
                                    <a href="#" class="btn-action">CSV</a>
                                </div>
                                <div class="btn-action-div">
                                    <a href="#" class="btn-action">Print</a>
                                </div>
                            </div>
                            <div>
                                <input type="search" class="form-control" placeholder="Search">
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table" id="cma-report">
                                <thead>
                                    <tr>
                                        <th># ID</th>
                                        <th>Seller Name</th>
                                        <th>Address</th>
                                        <th>Last Modified</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>9203</td>
                                        <td>DALOMAFA LLC</td>
                                        <td>3131 NE 7TH AVE # 2804</td>
                                        <td>2023-01-03 16:34:14</td>
                                        <td>
                                            <a href="#">
                                                <img src="{{ asset('images/files/delete-icon.svg') }}">
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>9202</td>
                                        <td>MARY A PAYAN</td>
                                        <td>ALVARO HURTADO</td>
                                        <td>2023-01-03 16:34:14</td>
                                        <td>
                                            <a href="#">
                                                <img src="{{ asset('images/files/delete-icon.svg') }}">
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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
<script>
    $(document).ready(function() {
        addChart();
        addTable();
    })
    function addTable() {
        let table = new DataTable('#cma-report', {
            bPaginate: false,
            paging: false,
            bInfo: false,
            searching: false
        });
    }
    function addChart() {
        Highcharts.chart('big-chart', {
            title: {
                text: null
            },
            xAxis: {
                categories: ['2022-02', '2022-03', '2022-04','2022-05', '2022-06', '2022-07','2022-08', '2022-09', '2022-10','2022-11', '2022-12', '2023-01']
            },
            yAxis: {
                title: {
                    text: null
                }
            },
            legend: {
                layout: 'vertical',
                align: 'top',
                verticalAlign: 'top'
            },
            plotOptions: {
                series: {
                    allowPointSelect: true
                }
            },
            series: [{
                name: 'CMA Reports',
                data: [10, 20, 30, 14, 23, 44, 10, 8, 25, 13, 70, 100]
            }],
            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'bottom'
                        }
                    }
                }]
            }
        });
    }
</script>
@endsection