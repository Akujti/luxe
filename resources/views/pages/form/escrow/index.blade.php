@extends('layouts.app')
<style>
    .box {
        background-color: red;
        margin: 5px;
        color: #262626;
        background-color: #F7F7F7;
        border-radius: 30px;
    }
    .box a{
        color: #262626 !important;
        font-family: 'gothicregular';
    }
    .card-title h1 {
        font-family: 'gothicbold';
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
                            <div class="col box">
                                <a href="{{route('general.email.index',['folder'=>'escrow','form'=>'request-store'])}}"
                                    class="btn w-100 d-flex align-items-center justify-content-center"
                                    style="height: 70px">Request Store - Rental Escrow Disbursement</a>
                            </div>
                            <div class="col box">
                                <a href="{{route('general.email.index',['folder'=>'escrow','form'=>'request-escrow-letter'])}}"
                                    class="btn w-100 d-flex align-items-center justify-content-center"
                                    style="height: 70px;">Request Escrow Letter</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection