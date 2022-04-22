@extends('layouts.app', ['active' => 'Tools&TrainingVideos'])
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
    <div class="container-fluid d-flex align-items-center" style="height: 70vh">
        <div class="row justify-content-center w-100 m-0 p-0">
            <div class="col-md-12">
                <div class="">
                    <div class="card-title text-center">
                        <h1>New Agents & Referrals - Select Form</h1>
                    </div>
                    <div class="card-body">
                        <div class="row m-0 p-0">
                            <div class="col-lg-3 mb-4">
                                <div class="box">
                                    <a href="{{route('general.email.index',['folder'=>'agent_referrals','form'=>'agent-form'])}}"
                                        class="btn d-flex align-items-center justify-content-center"
                                        style="height: 70px">Agent Form</a>
                                </div>
                            </div>
                            <div class="col-lg-3 mb-4">
                                <div class="box">
                                    <a href="{{route('general.email.index',['folder'=>'agent_referrals','form'=>'refer-an-agent'])}}"
                                        class="btn d-flex align-items-center justify-content-center"
                                        style="height: 70px">Refer An Agent</a>
                                </div>
                            </div>
                            <div class="col-lg-3 mb-4">
                                <div class="box">
                                    <a href="{{route('general.email.index',['folder'=>'agent_referrals','form'=>'flex-agent-form'])}}"
                                        class="btn d-flex align-items-center justify-content-center"
                                        style="height: 70px">Flex Agent Form</a>
                                </div>
                            </div>
                            <div class="col-lg-3 mb-4">
                                <div class="box">
                                    <a target="_blank" href="{{url('user/w-9')}}"
                                        class="btn d-flex align-items-center justify-content-center"
                                        style="height: 70px">W-9 Form</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection