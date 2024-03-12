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
                        <a href="http://127.0.0.1:8000/user/cma-report/download" class="btn-luxe">Download</a>
                    </div>

                    <div class="table-box-body">
                        <div class="table-responsive">
                            <table class="table" id="cma-report">
                                <thead>
                                    <tr>
                                        <th># ID</th>
                                        <th>Agent Name</th>
                                        <th>Last Modified</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody id="table-body">

                                    @if($rows)
                                        @foreach($rows as $row)
                                            @php $listingIds = '';

                                            foreach($row->listings as $key => $listing) {
                                                if($key > 0) {
                                                    $listingIds .= ','.$listing->listing_id;
                                                } else {
                                                    $listingIds .= $listing->listing_id;
                                                }
                                            }
                                            @endphp
                                            <tr>
                                                <td>{{ $row->id }}</td>
                                                <td>{{ auth()->user()->profile->fullname }}</td>
                                                <td>{{ $row->updated_at}}</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <form action="{{ route('cma.delete', $row->id) }}" method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit" class="p-0 m-0 bg-transparent" style="border:none">
                                                                <img src="{{ asset('images/files/delete-icon.svg') }}">
                                                            </button>
                                                        </form>
                                                        <a target="_blank" style="background:black;color:white;padding:3px 7px;border-radius:20px;" href="{{ route('cma.showReport') }}?listingId={{ $row->address }}&listingIds={{ $listingIds }}&watch=true">
                                                            View
                                                        </a>

                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
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
@section('js')
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('js/moment.min.js') }}"></script>
<script>
    $(document).ready(function() {
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
