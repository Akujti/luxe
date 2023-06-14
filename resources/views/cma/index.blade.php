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
                                <tbody id="table-body"></tbody>
                            </table>
                        </div>
                    </div>
                </div>        
            </div>
        </div>
    </div>
</div>

@endsection
@section('js')
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('js/moment.min.js') }}"></script>
<script>
    $(document).ready(function() {
        addTable();

        getApiRoutes();
    })
    async function getApiRoutes() {
        var response = await axiosInc('Property', 'get', null);

        let body = '';
        if(response.data) {
            for(index in response.data.value) {
                let row = response.data.value[index];

                body += `<tr>
                            <td>...${row.ListingKey.substr(row.ListingKey.length / 2, 100)}</td>
                            <td>DALOMAFA LLC</td>
                            <td>${row.StreetName ?? 'N/A'} ${row.StreetName ? row.StreetNumber : ''}</td>
                            <td>${ moment(row.ModificationTimestamp).format('YYYY-MM-DD HH:mm:ss')}</td>
                            <td>
                                <a href="#">
                                    <img src="{{ asset('images/files/delete-icon.svg') }}">
                                </a>
                            </td>
                        </tr>`;

                $('#table-body').html(body);
            }
        }
    }
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