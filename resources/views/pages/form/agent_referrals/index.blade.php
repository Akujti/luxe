@extends('layouts.app', ['active' => 'office_staff_directory', 'subactive' => 'new_agents_referrals'])
<style>
    .box {
        margin: 5px;
        color: #262626;
        background-color: #F7F7F7;
        border-radius: 15px;
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
        cursor: pointer;
    }
</style>
@section('content')
    <div class="container-fluid">
        <div class="card-title text-center">
            <h1>New Agents & Referrals</h1>
        </div>
        <div class="grid grid-layout">
            {{-- <div class="box-item box-item-center">
                <a href="{{ route('general.email.index', ['folder' => 'agent_referrals', 'form' => 'agent-form']) }}">Agent
                    Form</a>
            </div> --}}
            <div class="box-item box-item-center">
                <a href="{{ route('general.email.index', ['folder' => 'agent_referrals', 'form' => 'refer-an-agent']) }}">
                    Refer An Agent</a>
            </div>
            <div class="box-item box-item-center">
                <a
                    href="{{ route('general.email.index', ['folder' => 'agent_referrals', 'form' => 'claim-your-agent-referral-incentive']) }}">
                    Claim Your Agent Referral Incentive</a>
            </div>
            {{-- <div class="box-item box-item-center">
                <a href="{{ route('general.email.index', ['folder' => 'agent_referrals', 'form' => 'flex-agent-form']) }}">Flex
                    Agent Form</a>
            </div> --}}
            <div class="box-item box-item-center">
                <a target="_blank" href="{{ url('user/w-9') }}">W-9 Form</a>
            </div>
        </div>
    </div>
@endsection
