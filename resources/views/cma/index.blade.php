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
                            Sold Listings
                        </div>
                        <div class="chart yellow border-left">
                            Active Listings
                        </div>
                        <div class="chart green border-left">
                            Listing Listings
                        </div>
                        <div class="chart orange border-left">
                            CMA Reports
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 mt-5">
            <div class="box-charts row">
                <div class="table-box w-100 px-2">
                    <div class="table-box-header d-flex align-items-center justify-content-between w-100">
                        <h5>Seller CMA</h5>
                        <a href="{{ route('cma.search') }}" class="btn-luxe">Add Seller CMA</a>
                    </div>

                    <div class="table-box-body">
                        <div class="table-action d-flex align-items-center justify-content-between my-3">
                            <div>
                                <!-- <a href="#">Show 10 rows</a> -->
                                <a href="#" class="btn-action">CSV</a>
                                <a href="#" class="btn-action">Print</a>
                            </div>
                            <div>
                                <input type="search" class="form-control" placeholder="Search">
                            </div>
                        </div>
                        <table id="cma-report">
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
                text: 'CMA Reports'
            },
            xAxis: {
                categories: ['January', 'February', 'March']
            },
            yAxis: {
                title: {
                    text: 'Number of New Users'
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },
            plotOptions: {
                series: {
                    allowPointSelect: true
                }
            },
            series: [{
                name: 'New Users',
                data: [10, 20, 30]
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