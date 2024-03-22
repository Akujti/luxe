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
            <div class="col-12">
                <div class="box-charts row">
                    <div class="table-box w-100 px-2">
                        <div class="table-box-header d-flex align-items-center justify-content-between w-100">
                            <h5>View Report</h5>
                            <a href="{{ route('cma.index') }}" class="btn-luxe">Home</a>
                        </div>

                        <div class="table-box-body pt-3">
                            <div class="d-none" id="loading-report">
                                <div class="mr-4">
                                    <div class="spinner"></div>
                                </div>
                                <p>Processing your report! Please wait...</p>
                            </div>
                            <button id="generate-btn" class="btn-luxe" onclick="create()">Generate Report</button>
                            <a target="_blank" class="btn-luxe d-none" id="download-report">Download Report</a>
                            <a target="_blank" class="btn-luxe d-none" id="view-report">View Report</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script>
        function create () {
            $('#loading-report').removeClass('d-none')
            $('#loading-report').addClass('d-flex')
            $('#generate-btn').addClass('d-none')

            $.ajax({
                url: '{{ route('cma.create') }}',
                type: 'post',
                data: {
                    listing_id: "{{ request()->get('listingId') }}",
                    listings_id: "{{ request()->get('listingIds') }}"
                },
                headers: {
                    'X-CSRF-Token': $('[name="_token"]').val()
                },
                success: function (output) {
                    console.log(output)
                    $('#view-report').removeClass('d-none')
                    $('#view-report').attr('href', '/cma-report/show-report/' + output)
                    $('#download-report').attr('href', '/user/cma-report/pdf/' + output)
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    console.log(xhr.status)
                    console.log(thrownError)
                }, finish: function () {
                    $('#loading-report').removeClass('d-flex')
                    $('#loading-report').addClass('d-none')
                }
            })
        }
    </script>

    <!--  -->
@endsection
