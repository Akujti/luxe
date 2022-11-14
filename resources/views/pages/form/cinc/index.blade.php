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
        font-size: 20px;
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
    <div class="container-fluid d-flex">
        <div class="row justify-content-center w-100 p-0 m-0 align-items-center" style="height: 70vh">
            <div class="col-md-12">
                <div class="">
                    <div class="card-title text-center">
                        <h1>CINC - Select Form</h1>
                    </div>
                    <div class="card-body">
                        <div class="row box-items justify-content-center">
                            <div class="col-md-6 col-lg-4 col-xl-3 mb-4">
                                <div class="box-item">
                                    <a href="{{ route('general.email.index', ['folder' => 'cinc', 'form' => 'join-cinc-buyer-team']) }}"
                                        class="btn w-100 d-flex align-items-center justify-content-center">Join CINC Buyer
                                        Team</a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3 mb-4">
                                <div class="box-item">
                                    <a href="{{ route('general.email.index', ['folder' => 'cinc', 'form' => 'cinc-leads-weekly-update']) }}"
                                        class="btn w-100 d-flex align-items-center justify-content-center">CINC Leads<br>
                                        Weekly Update</a>
                                </div>
                            </div>
                            {{-- <div class="col-lg-4 col-xl-3 mb-4">
                                <div class="box-item">
                                    <a href="{{ route('general.email.index', ['folder' => 'leads', 'form' => 'team-dade-zillow-leads-weekly-update']) }}"
                                        class="btn w-100 d-flex align-items-center justify-content-center">Team Dade -
                                        Zillow <br>Leads Weekly Update</a>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
