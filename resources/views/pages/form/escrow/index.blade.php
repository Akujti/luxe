@extends('layouts.app', ['active' => 'leads_services_support', 'subactive' => 'rental_escrow_disbursement'])
<style>
    .box {
        margin: 5px;
        color: #262626;
        background-color: #F7F7F7;
        border-radius: 30px;
    }

    .box a {
        color: #262626 !important;
        font-family: 'gothicbold';
        min-height: 100px;
    }

    .card-title h1 {
        font-family: 'gothicbold';
        margin-bottom: 30px;
    }

    @media (max-width: 576px) {
        .box a {
            font-size: 13px;
        }
    }
</style>
@section('content')
<div class="container d-flex align-items-center" style="height: 76vh">
    <div class="row justify-content-center w-100 m-0 p-0">
        <div class="col-md-8">
            <div class="">
                <div class="card-title text-center">
                    <h1>Escrow - Select Form</h1>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col mb-4">
                            <div class="box">
                                <a href="{{route('general.email.index',['folder'=>'escrow','form'=>'request-store'])}}"
                                    class="btn w-100 d-flex align-items-center justify-content-center">Request Store
                                    -<br>Rental Escrow Disbursement</a>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="box">
                                <a href="{{route('general.email.index',['folder'=>'escrow','form'=>'request-escrow-letter'])}}"
                                    class="btn w-100 d-flex align-items-center justify-content-center">Request Escrow
                                    Letter</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection