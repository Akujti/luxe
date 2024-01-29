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
        border-radius: 15px;
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
</style>
@section('content')
    <div class="container-fluid">
        <div class="card-title text-center">
            <h1>Escrow - Select Form</h1>
        </div>
        <div class="grid grid-layout-three">
            <div class="box-item">
                <a href="{{ route('general.email.index', ['folder' => 'escrow', 'form' => 'request-store']) }}">Request Store
                    - Rental Escrow Disbursement</a>
            </div>

            <div class="box-item">
                <a href="{{ route('general.email.index', ['folder' => 'escrow', 'form' => 'request-escrow-letter']) }}">Request
                    Escrow Letter</a>
            </div>

            <div class="box-item">
                <a
                    href="{{ route('general.email.index', ['folder' => 'escrow', 'form' => 'request-escrow-client-refund']) }}">
                    Request Escrow Client Refund</a>
            </div>
        </div>
    </div>
@endsection
