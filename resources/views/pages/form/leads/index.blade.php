@extends('layouts.app', ['active' => 'Leads', 'subactive' => 'zillow_premiere'])
<style>
    .box {
        margin: 5px;
        color: #262626;
        background-color: #F7F7F7;
        border-radius: 30px;
    }
    .box a{
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


    <div class="container-fluid d-flex">
        <div class="row justify-content-center w-100 p-0 m-0 align-items-center" style="height: 70vh">
            <div class="col-md-12">
                <div class="">
                    <div class="card-title text-center">
                        <h1>Leads - Select Form</h1>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4 mb-4">
                                <div class="box">
                                    <a href="{{route('general.email.index',['folder'=>'leads','form'=>'join-zillow'])}}"
                                        class="btn w-100 d-flex align-items-center justify-content-center">Join Zillow</a>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <div class="box">
                                    <a href="{{route('general.email.index',['folder'=>'leads','form'=>'team-dade-pause-request'])}}"
                                        class="btn w-100 d-flex align-items-center justify-content-center">Team Dade - Pause Request</a>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <div class="box">
                                    <a href="{{route('general.email.index',['folder'=>'leads','form'=>'pause-request'])}}"
                                        class="btn w-100 d-flex align-items-center justify-content-center">Team Flex - Pause Request</a>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <div class="box">
                                    <a href="{{route('general.email.index',['folder'=>'leads','form'=>'request-zillow-nurtures'])}}"
                                        class="btn w-100 d-flex align-items-center justify-content-center">Request Zillow Nurtures</a>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <div class="box">
                                    <a href="{{route('general.email.index',['folder'=>'leads','form'=>'zillow-leads-weekly-update'])}}"
                                        class="btn w-100 d-flex align-items-center justify-content-center">Team Flex - <br> Zillow Leads Weeky Update</a>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <div class="box">
                                    <a href="{{route('general.email.index',['folder'=>'leads','form'=>'team-dade-zillow-leads-weekly-update'])}}"
                                    class="btn w-100 d-flex align-items-center justify-content-center">Team Dade -<br> Zillow Leads Weeky Update</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection