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
                    </div>

                    <div class="table-box-body pt-3">
                        <div class="d-flex" id="loading-report">
                            <div class="mr-4">
                                <div class="spinner"></div>
                            </div>
                            <p>Processing your report! Please wait...</p>
                        </div>
                        <a href="{{ route('cma.showReport') }}" class="btn-luxe d-none" id="view-report">View Report</a>
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
</script>
@endsection