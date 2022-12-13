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
            <h1>CINC - Select Form</h1>
        </div>
        <div class="grid grid-layout-two">
            <div class="box-item box-item-center">
                <a href="{{ route('general.email.index', ['folder' => 'cinc', 'form' => 'join-cinc-buyer-team']) }}">Join
                    CINC Buyer
                    Team</a>
            </div>
            <div class="box-item box-item-center">
                <a href="{{ route('general.email.index', ['folder' => 'cinc', 'form' => 'cinc-leads-weekly-update']) }}">CINC
                    Leads
                    Weekly Update</a>
            </div>
        </div>
    </div>
@endsection