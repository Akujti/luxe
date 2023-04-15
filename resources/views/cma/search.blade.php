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

        <div class="col-12 mt-5">
            <div class="box-charts row">
                <div class="table-box w-100 px-2">
                    <div class="table-box-header d-flex align-items-center justify-content-between w-100">
                        <h5>Subject Property Search</h5>
                        <a href="{{ route('cma.index') }}" class="btn-luxe">Back to List</a>
                    </div>

                    <div class="table-box-body">
                        <div class="table-action d-flex align-items-center justify-content-center my-3" style="column-gap: 15px;">
                            <div class="filter-select">
                                <select class="form-control">
                                    <option value="">--</option>
                                    <option value="role" selected>Role</option>
                                </select>
                            </div>
                            <div class="filter-search">
                                <input type="search" class="form-control" placeholder="Search by address">
                            </div>
                        </div>
                    </div>
                    <div class="table-box-footer w-100">
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="{{ route('cma.index') }}" class="btn-action"><i class="fa-solid fa-chevron-left"></i> Previous</a>
                            <a href="{{ route('cma.show') }}" class="btn-action">Next<i class="fa-solid fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>        
            </div>
        </div>
    </div>
</div>

@endsection
