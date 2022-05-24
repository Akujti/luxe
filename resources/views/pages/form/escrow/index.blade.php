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
        .box-item a {
            font-size: 13px;
        }
    }
    .box-item {
        background-color: #F7F7F7;
        text-align: center;
        height: 311px;
        margin-bottom: 26px;
        border-radius: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
    }

    .box-item img {
        object-fit: cover;
        width: 100%;
    }

    .box-item .icon {
        width: 70px;
        height: 70px;
        object-fit: cover;
    }

    .box-item a {
        font-size: 25px;
        font-family: 'gothicregular';
        color: #262626;
    }
    .box-item a:hover {
        color: #262626;
    }
    a:focus {
        outline: none;
    }
</style>
@section('content')
<div class="container d-flex align-items-center" style="height: 76vh">
    <div class="row justify-content-center w-100 m-0 p-0">
        <div class="col-md-12">
            <div class="">
                <div class="card-title text-center">
                    <h1>Escrow - Select Form</h1>
                </div>
                    <div class="row justify-content-center">
                        <div class="col-md-4 mb-4">
                            <div class="box-item">
                                <a href="{{route('general.email.index',['folder'=>'escrow','form'=>'request-store'])}}"
                                    class="btn w-100 d-flex align-items-center justify-content-center">Request Store
                                    -Rental<br> Escrow Disbursement</a>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="box-item">
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
@endsection