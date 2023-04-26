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
                        <a href="{{ route('cma.index') }}" class="btn-luxe">Back</a>
                    </div>

                    <div class="table-box-body">
                        <div class="table-action row p-0 m-0 w-100 align-items-start justify-content-between my-3">
                            <div class="subject-property-filter col-12 col-xl-4">
                                <div>
                                    <div class="icon">
                                        <i class="fa-solid fa-house-chimney"></i>
                                    </div>
                                </div>
                                <div class="">
                                    <h4 class="p-0 m-0 d-flex align-items-center h-title">27709 coconut ave
                                        <div class="edit-btn ml-2"><i class="fa-solid fa-pen"></i></div>
                                    </h4>
                                    <p class="p-0 m-0 p-luxe text-uppercase">Luis j moreno</p>

                                    <div>
                                        <p class="p-0 m-0 p-luxe">MLS price by</p>
                                        <select class="form-control form-role">
                                            <option value="">--</option>
                                            <option value="role" selected>Role</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-8">
                                <div class="subject-property-details">
                                    <div>
                                        <h5 class="h-title">2 <br> Bed</h5>
                                    </div>
                                    <div>
                                        <h5 class="h-title">3.5 <br> Bath</h5>
                                    </div>
                                    <div>
                                        <h5 class="h-title">2005 <br> Built</h5>
                                    </div>
                                    <div>
                                        <h5 class="h-title">1,963 <br> SqFt</h5>
                                    </div>
                                    <div>
                                        <h5 class="h-title">1,963 <br> T.SqFt</h5>
                                    </div>
                                    <div>
                                        <h5 class="h-title">0 <br> Size</h5>
                                    </div>
                                    <div class="border-none">
                                        <select class="form-control">
                                            <option value="">None selected</option>
                                        </select>
                                        <h5 class="h-title">Extras</h5>
                                    </div>
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
                        <div class="table-action row my-3">
                            <div class="col-12 col-xl-6">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.387759900309!2d-74.00987042341329!3d40.70947963776896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a18049ba121%3A0xebaf26c536e06652!2s123%20William%20St%2C%20New%20York%2C%20NY%2010038%2C%20USA!5e0!3m2!1sen!2s!4v1681568456111!5m2!1sen!2s" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <div class="col-12 col-xl-6">
                                <div class="market-anysis-rows-header">
                                    <p class="p-0 m-0">
                                        0/3 Solds Compos Selected
                                        <i class="fa-solid fa-circle-play"></i>
                                    </p>

                                    <div class="d-flex align-items-center">
                                        <p class="p-0 m-0 pr-4">5/6 Results</p>
                                        <div class="filter-buttons">
                                            <button>
                                                <i class="fa-solid fa-arrow-up-z-a"></i>
                                            </button>
                                            <button>
                                                <i class="fa-solid fa-plus"></i>
                                            </button>
                                            <div class="d-inline-block">
                                                <div class="dropdown" id="search-dropdown">
                                                    <button type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fa-solid fa-bars"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-search-filter" onclick="event.stopPropagation()" aria-labelledby="dropdownMenuButton">
                                                        <div class="row">
                                                            <div class="col-12"> <h5 class="h5-title text-center">Search Filter Form</h5></div>
                                                            <div class="col-12 col-xl-6">
                                                                <div class="form-group mb-1">
                                                                    <label for="">Search Area</label>
                                                                    <select class="form-control">
                                                                        <option value="">--</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-xl-6">
                                                                <div class="form-group mb-1">
                                                                    <label for="">Amenities</label>
                                                                    <select class="form-control">
                                                                        <option value="">--</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-xl-6">
                                                                <div class="form-group mb-1">
                                                                    <label for="">Complex | Builing | Subdivision</label>
                                                                    <select class="form-control">
                                                                        <option value="">--</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-xl-6">
                                                                <div class="form-group mb-1">
                                                                    <label for="">Sold since</label>
                                                                    <select class="form-control">
                                                                        <option value="">--</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-xl-6">
                                                                <div class="form-group mb-1">
                                                                    <label for="">MLS #</label>
                                                                    <select class="form-control">
                                                                        <option value="">--</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-xl-6">
                                                                <div class="form-group mb-1">
                                                                    <label for="">Lotsize</label>
                                                                    <div class="form-min-max">
                                                                        <input type="text" class="form-control m-0" placeholder="Min">
                                                                        <div>
                                                                            -
                                                                        </div>
                                                                        <input type="text" class="form-control m-0" placeholder="Max">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-xl-6">
                                                                <div class="form-group mb-1">
                                                                    <label for="">TSQ Feet</label>
                                                                    <div class="form-min-max">
                                                                        <input type="text" class="form-control m-0" placeholder="Min">
                                                                        <div>
                                                                            -
                                                                        </div>
                                                                        <input type="text" class="form-control m-0" placeholder="Max">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-xl-6">
                                                                <div class="form-group mb-1">
                                                                    <label for="">LSQ Feet</label>
                                                                    <div class="form-min-max">
                                                                        <input type="text" class="form-control m-0" placeholder="Min">
                                                                        <div>
                                                                            -
                                                                        </div>
                                                                        <input type="text" class="form-control m-0" placeholder="Max">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-xl-6">
                                                                <div class="form-group mb-1">
                                                                    <label for="">Bed Rooms</label>
                                                                    <div class="form-min-max">
                                                                        <input type="text" class="form-control m-0" placeholder="Min">
                                                                        <div>
                                                                            -
                                                                        </div>
                                                                        <input type="text" class="form-control m-0" placeholder="Max">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-xl-6">
                                                                <div class="form-group mb-1">
                                                                    <label for="">Full Bath</label>
                                                                    <div class="form-min-max">
                                                                        <input type="text" class="form-control m-0" placeholder="Min">
                                                                        <div>
                                                                            -
                                                                        </div>
                                                                        <input type="text" class="form-control m-0" placeholder="Max">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-xl-6">
                                                                <div class="form-group mb-1">
                                                                    <label for="">Half Bath</label>
                                                                    <div class="form-min-max">
                                                                        <input type="text" class="form-control m-0" placeholder="Min">
                                                                        <div>
                                                                            -
                                                                        </div>
                                                                        <input type="text" class="form-control m-0" placeholder="Max">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-xl-6">
                                                                <div class="form-group mb-1">
                                                                    <label for="">Year Built</label>
                                                                    <div class="form-min-max">
                                                                        <input type="text" class="form-control m-0" placeholder="Min">
                                                                        <div>
                                                                            -
                                                                        </div>
                                                                        <input type="text" class="form-control m-0" placeholder="Max">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-12 text-center pt-4">
                                                                <a class="btn-luxe">
                                                                    <span>
                                                                        <i class="fa-solid fa-magnifying-glass"></i>
                                                                    </span>
                                                                    Search
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="market-analysis-rows">
                                    @for($i = 0; $i < 5; $i++)
                                        <div class="market-analysis-row">
                                            <div class="position-relative">

                                                <div class="image-checkbox">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    </div>
                                                </div>
                                                <img src="https://images.unsplash.com/photo-1625602812206-5ec545ca1231?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8YW1lcmljYW4lMjBob3VzZXN8ZW58MHx8MHx8&w=1000&q=80" alt="">

                                                <div class="image-overlay">
                                                    <div class="image-overlay-div">
                                                        <div>
                                                            <p class="sqft-price">
                                                                <i class="fa-solid fa-star"></i>
                                                                <b>$699,9999 | $373 Sq.Ft</b>
                                                            </p>
                                                            <p class="sqft-price">
                                                                2765 Coconut Ave 2765
                                                            </p>
                                                        </div>

                                                        <div class="subject-property-details d-flex align-items-center justify-content-end">
                                                            <div>
                                                                <h6>2 <br> Beds</h6>
                                                            </div>
                                                            <div>
                                                                <h6>3.5 <br> Baths</h6>
                                                            </div>
                                                            
                                                            <div class="border-none">
                                                                <h6>1,963 <br> SqFt</h6>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <p class="location">Miami, FL 33133</p>
                                                        <p class="location">Villaggio in The Grove Con</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="div-table-market-analysis">
                                                <table class="table-market-analysis">
                                                    <tbody>
                                                        @for($j = 0; $j < 10;$j++)
                                                            <tr>
                                                                <td>
                                                                    <div class="flex">
                                                                        <p>MLS</p>
                                                                        <p>A111445522</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="flex">
                                                                        <p>Year Built</p>
                                                                        <p>2005</p>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        @endfor
                                                            <tr>
                                                                <td>
                                                                    <div class="flex">
                                                                        <p>Agent</p>
                                                                        <p>Jenilyn Martine</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="flex">
                                                                        <p>Phone</p>
                                                                        <p>305-330-5481</p>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="4">
                                                                    <div class="flex">
                                                                        <p>Company</p>
                                                                        <p>Compass Florida, LLC</p>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    @endfor
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-box-footer w-100">
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="{{ route('cma.search') }}" class="btn-action"><i class="fa-solid fa-chevron-left"></i> Previous</a>
                            <a href="{{ route('cma.averageSalePrice') }}" class="btn-action">Next<i class="fa-solid fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>        
            </div>
        </div>
    </div>
</div>

@endsection