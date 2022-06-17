@extends('layouts.app', ['active' => 'office_staff_directory', 'subactive' => 'new_agents_referrals'])
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
    <div class="row justify-content-center w-100 m-0 p-0 align-items-center" style="height: 70vh">
        <div class="col-md-12">
            <div class="">
                <div class="card-title text-center">
                    <h1>New Agents & Referrals - Select Form</h1>
                </div>
                <div class="card-body">
                    <div class="row m-0 p-0">
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="box-item">
                                <a href="{{route('general.email.index',['folder'=>'agent_referrals','form'=>'agent-form'])}}"
                                    class="btn d-flex align-items-center justify-content-center"
                                    style="height: 70px">Agent Form</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="box-item">
                                <a href="{{route('general.email.index',['folder'=>'agent_referrals','form'=>'refer-an-agent'])}}"
                                    class="btn d-flex align-items-center justify-content-center"
                                    style="height: 70px">Refer An Agent</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="box-item">
                                <a href="{{route('general.email.index',['folder'=>'agent_referrals','form'=>'flex-agent-form'])}}"
                                    class="btn d-flex align-items-center justify-content-center"
                                    style="height: 70px">Flex Agent Form</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="box-item">
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