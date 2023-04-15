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
                        <h5>Subject Property</h5>
                        <a href="{{ route('cma.index') }}" class="btn-luxe">Back to List</a>
                    </div>

                    <div class="table-box-body">
                        <div class="table-action d-flex align-items-start justify-content-between my-3" style="column-gap: 15px;">
                            <div class="subject-property-filter">
                                <div>
                                    <div class="icon">
                                        <i class="fa-solid fa-house-chimney"></i>
                                    </div>
                                </div>
                                <div class="">
                                    <h4 class="p-0 m-0">27709 coconut ave</h4>
                                    <p class="p-0 m-0">Luis j moreno</p>

                                    <div>
                                        <p class="p-0 m-0">MLS price by</p>
                                        <select class="form-control">
                                            <option value="">--</option>
                                            <option value="role" selected>Role</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="subject-property-details d-flex align-items-center">
                                <div>
                                    <h5>2 <br> Bed</h5>
                                </div>
                                <div>
                                    <h5>3.5 <br> Bath</h5>
                                </div>
                                <div>
                                    <h5>2005 <br> Built</h5>
                                </div>
                                <div>
                                    <h5>1,963 <br> SqFt</h5>
                                </div>
                                <div>
                                    <h5>1,963 <br> T.SqFt</h5>
                                </div>
                                <div>
                                    <h5>0 <br> Size</h5>
                                </div>
                                <div class="border-none">
                                    <select class="form-control">
                                        <option value="">None selected</option>
                                    </select>
                                    <h5>Extras</h5>
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
                        <h5>Market Analysis <small>(by price)</small></h5>
                        <a href="{{ route('cma.index') }}" class="">View Market Data</a>
                    </div>

                    <div class="table-box-body">
                        <div class="table-action d-flex align-items-start justify-content-between my-3" style="column-gap: 15px;">
                            <div>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.387759900309!2d-74.00987042341329!3d40.70947963776896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a18049ba121%3A0xebaf26c536e06652!2s123%20William%20St%2C%20New%20York%2C%20NY%2010038%2C%20USA!5e0!3m2!1sen!2s!4v1681568456111!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="table-box-footer w-100">
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="{{ route('cma.search') }}" class="btn-action"><i class="fa-solid fa-chevron-left"></i> Previous</a>
                            <a href="" class="btn-action">Next<i class="fa-solid fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>        
            </div>
        </div>
    </div>
</div>

@endsection
