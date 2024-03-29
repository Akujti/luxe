@extends('layouts.app', ['active' => 'CMA'])
@section('content')
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
    <div class="container-fluid">
        <div class="row box-title p-0 m-0">
            <h3 class="text-center">Seller CMA</h3>
            <p class="m-0">A Seller Comparative Market Analysis (CMA) is a tool used by real estate agents to help
                homeowners
                determine the optimal listing price for their property. The CMA provides data on recently sold homes in
                the same area as the subject property as well as information on homes currently on the market. By
                analyzing this data, agents can estimate the value of the seller's property and recommend a competitive
                listing price. Please click on the button "Add Seller CMA" to begin using our easy-to-use, in-house CMA
                builder. All CMAs prepared will be saved below.</p>
        </div>
        <div class="row mt-2 mb-5 justify-content-start p-0 m-0">
            <div class="col-12 mt-3">
                <div class="box-charts row">
                    <div class="table-box w-100 px-2">
                        <div class="table-box-header d-flex align-items-center justify-content-between w-100">
                            <h5 class="h5-title">Seller CMA</h5>
                            <a href="{{ route('cma.search') }}" class="btn-luxe">Add Seller CMA</a>
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
                                                        <form action="{{ route('cma.delete', $row->id) }}"
                                                              method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit" class="p-0 m-0 bg-transparent"
                                                                    style="border:none">
                                                                <img src="{{ asset('images/files/delete-icon.svg') }}">
                                                            </button>
                                                        </form>
                                                        @if($row)
                                                            <a target="_blank" class="theme"
                                                               style="background:black;color:white;padding:3px 10px;border-radius:20px;margin-right:3px;font-family: 'Montserrat'"
                                                               href="{{ route('cma.showReport',$row) }}">
                                                                View
                                                            </a>
                                                        @endif
                                                        <a href="{{route('cma.pdf',$row->id)}}"
                                                           style="background:black;color:white;padding:3px 10px;border-radius:20px;font-family: 'Montserrat'"
                                                        >Download</a>
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
        $(document).ready(function () {
        })

        function addTable () {
            let table = new DataTable('#cma-report', {
                bPaginate: false,
                paging: false,
                bInfo: false,
                searching: false
            })
        }

        function addChart () {
            Highcharts.chart('big-chart', {
                title: {
                    text: null
                },
                xAxis: {
                    categories: ['2022-02', '2022-03', '2022-04', '2022-05', '2022-06', '2022-07', '2022-08', '2022-09', '2022-10', '2022-11', '2022-12', '2023-01']
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
            })
        }
    </script>
@endsection
