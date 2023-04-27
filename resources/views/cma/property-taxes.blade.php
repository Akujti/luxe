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
                        <h5>Client Property Mortgage and Taxes</h5>
                    </div>

                    <div class="table-box-body table-form">

                        <div class="row">
                            <div class="col-12 col-xl-4">
                                <h4 class="gothicBold mt-3">Adjustments</h4>

                                <div class="form-group">
                                    <label for="">1st Mortgage</label>
                                    <input type="text" value="$0.00" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="">2and Mortgage</label>
                                    <input type="text" value="$0.00" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="">Avanti Way Commission %</label>
                                    <input type="text" value="3%" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="">Buyer Agent Commission %</label>
                                    <input type="text" value="3%" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-xl-4">
                                <h4 class="gothicBold mt-3">Other Adjustment</h4>

                                <div class="form-group">
                                    <label for="">Property Taxes</label>
                                    <input type="text" value="$6369" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="">Month of Closing</label>
                                    <select class="form-control">
                                        <option value="">September</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="">Other Owed</label>
                                    <input type="text" value="$0.00" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="">Other Fees</label>
                                    <input type="text" value="$0.00" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-xl-4">
                                <div class="d-flex w-100 align-items-center justify-content-between mt-3">
                                    <h4 class="gothicBold">Closing Costs</h4>
    
                                    <div>
                                        <input type="checkbox"> Edit
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="">Doc Stamp %</label>
                                    <input type="text" value="0.6%" class="form-control" disabled>
                                </div>

                                <div class="form-group">
                                    <label for="">Abstract Con.</label>
                                    <input type="text" value="$200.00" class="form-control" disabled>
                                </div>

                                <div class="form-group">
                                    <label for="">Attorney Fees</label>
                                    <input type="text" value="$750.00" class="form-control" disabled>
                                </div>

                                <div class="form-group">
                                    <label for="">Transfer Fees</label>
                                    <input type="text" value="$350.00" class="form-control" disabled>
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
                    <div class="table-box-header d-flex align-items-center justify-content-between w-100" style="border-bottom: none !important;">
                        <h5>Closing Proceeds</h5>
                    </div>

                    <div class="table-box-body">
                        <div class="table-responsive">
                            <table class="table w-100 table-cma">
                                <thead>
                                    <tr>
                                        <th>Description of Cost</th>
                                        <th>Scenario A</th>
                                        <th>Scenario B</th>
                                        <th>Scenario C</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <th>Selling price</th>
                                        <th class="center">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <span></span>
                                                <span>$1,100,000</span>
                                                <span>
                                                    <i class="fa-solid fa-pen"></i>
                                                </span>
                                            </div>
                                        </th>
                                        <th class="center">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <span></span>
                                                <span>
                                                    $1,100,000
                                                </span>
                                                <span>
                                                    <i class="fa-solid fa-pen"></i>
                                                </span>
                                            </div>
                                        </th>
                                        <th class="center">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <span></span>
                                                <span>
                                                    $900,000
                                                </span>
                                                <span>
                                                    <i class="fa-solid fa-pen"></i>
                                                </span>
                                            </div>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>Closing Costs</th>
                                        <td class="center"></td>
                                        <td class="center"></td>
                                        <td class="center"></td>
                                    </tr>
                                    <tr>
                                        <td>Doc. Stamp(0.6%)</td>
                                        <td class="center">$6,600</td>
                                        <td class="center">$6,000</td>
                                        <td class="center">$5,400</td>
                                    </tr>
                                    <tr>
                                        <td>Abst. Continuation</td>
                                        <td class="center">$200</td>
                                        <td class="center">$200</td>
                                        <td class="center">$200</td>
                                    </tr>
                                    <tr>
                                        <td>Attomey Fees</td>
                                        <td class="center">$750</td>
                                        <td class="center">$750</td>
                                        <td class="center">$750</td>
                                    </tr>
                                    <tr>
                                        <td>Transfer Fees</td>
                                        <td class="center">$350</td>
                                        <td class="center">$350</td>
                                        <td class="center">$350</td>
                                    </tr>
                                    <tr>
                                        <td>Taxes in Arrears</td>
                                        <td class="center">$4,777</td>
                                        <td class="center">$4,777</td>
                                        <td class="center">$4,777</td>
                                    </tr>
                                    <tr>
                                        <td>Others Fees</td>
                                        <td class="center">$0</td>
                                        <td class="center">$0</td>
                                        <td class="center">$0</td>
                                    </tr>
                                    <tr>
                                        <td>Brokerage Fees (6%)</td>
                                        <td class="center">$66,000</td>
                                        <td class="center">$60,000</td>
                                        <td class="center">$54,000</td>
                                    </tr>
                                    <tr>
                                        <th>Total Closing Cost</th>
                                        <th class="center">$78,677</th>
                                        <th class="center">$72,077</th>
                                        <th class="center">$65,477</th>
                                    </tr>
                                    <tr>
                                        <th>Deductions</th>
                                        <td class="center"></td>
                                        <td class="center"></td>
                                        <td class="center"></td>
                                    </tr>
                                    <tr>
                                        <td>1st Mortgage</td>
                                        <td class="center">$0</td>
                                        <td class="center">$0</td>
                                        <td class="center">$0</td>
                                    </tr>
                                    <tr>
                                        <td>2nd Mortgage</td>
                                        <td class="center">$0</td>
                                        <td class="center">$0</td>
                                        <td class="center">$0</td>
                                    </tr>
                                    <tr>
                                        <td>Other Balance</td>
                                        <td class="center">$0</td>
                                        <td class="center">$0</td>
                                        <td class="center">$0</td>
                                    </tr>
                                    <tr>
                                        <th>Total Deduction</th>
                                        <td class="center">$0</td>
                                        <td class="center">$0</td>
                                        <td class="center">$0</td>
                                    </tr>
                                    <tr>
                                        <th>Net Proceeds</th>
                                        <td class="center">$1,021,323</td>
                                        <td class="center">$927,923</td>
                                        <td class="center">$834,523</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="table-box-footer w-100">
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="{{ route('cma.averageSalePrice') }}" class="btn-action"><i class="fa-solid fa-chevron-left"></i> Previous</a>
                            <a href="{{ route('cma.finishPage') }}" class="btn-action">Next<i class="fa-solid fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>        
            </div>
        </div>
    </div>
</div>

@endsection