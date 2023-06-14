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
                        <div class="d-flex" id="loading-report">
                            <div class="mr-4">
                                <div class="spinner"></div>
                            </div>
                            <p>Processing your report! Please wait...</p>
                        </div>
                        <a target="_blank" href="{{ route('cma.showReport') }}?@querystring" onclick="create();return false;" class="btn-luxe d-none" id="view-report">View Report</a>
                    </div>
                </div>        
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
<script>
    $(document).ready(function() {
        setTimeout(() => {
            $('#loading-report').addClass('d-none')
            $('#loading-report').removeClass('d-flex')
            $('#view-report').removeClass('d-none')
        }, 3000);
    })

    function create() {

        var watch = '{{request()->get("watch") }}';

        console.log($('#view-report').attr('href'));

        if(watch) {
            window.open($('#view-report').attr('href'), '_blank');
            return;
        } else {
            $.ajax({
                url: '{{ route('cma.create') }}',
                type: 'post',
                // cache: false,
                // contentType: false,
                // processData: false,
                data: {
                    listing_id: "{{ request()->get('listingId') }}",
                    listings_id: "{{ request()->get('listingIds') }}"
                },
                headers: {
                    'X-CSRF-Token': $('[name="_token"]').val()
                },
                success: function(output) {
                    window.open($('#view-report').attr('href'), '_blank');
                }
            });
        }
    }
</script>

<!--  -->
@endsection