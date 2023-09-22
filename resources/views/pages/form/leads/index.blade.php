@extends('layouts.app', ['active' => 'leads_services_support', 'subactive' => 'get_leads'])
<style>
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
            <h1>Leads - Select Form</h1>
        </div>
        <div class="grid grid-layout">
            <div class="box-item">
                <p>
                    <a href="{{ route('general.email.index', ['folder' => 'leads', 'form' => 'join-zillow']) }}"
                        class="">Join Zillow</a>
                </p>
            </div>
            <div class="box-item">
                <p>
                    <a href="{{ route('general.email.index', ['folder' => 'leads', 'form' => 'request-zillow-nurtures']) }}"
                        class="">Request Zillow <br>
                        Nurtures</a>
                </p>
            </div>
            <div class="box-item">
                <p>
                    <a href="{{ route('general.email.index', ['folder' => 'leads', 'form' => 'zillow-leads-weekly-update']) }}"
                        class="">Zillow Leads
                        Weekly Update</a>
                </p>
            </div>
            <div class="box-item">
                <p>
                    <a href="{{ route('general.email.index', ['folder' => 'leads', 'form' => 'zillow-seller-leads-weekly-update']) }}"
                        class="">Zillow Seller Leads Weekly Update</a>
                </p>
            </div>
        </div>
    </div>
@endsection
