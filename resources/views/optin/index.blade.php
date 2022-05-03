@extends('layouts.app')
@section('content')
<style>
    .row-col {
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: 1px solid #E6E6E6;
        padding: 15px 0px
    }

    .row-col img {
        width: 58px;
        height: 58px;
        border-radius: 50%;
        margin-right: 20px;
    }

    .row-col .row-details {
        display: flex;
        justify-content: center;
        align-items: center;
        color: #262626;
    }

    .row-details h4 {
        font-size: 20px;
        font-family: 'gothicbold';
    }

    .row-details p {
        font-family: 'gothicregular';
        font-size: 16px;
        margin: 0px;
        padding: 0px;
    }

    .row-date p {
        font-family: 'gothicregular';
        font-size: 16px;
        margin: 0px;
        padding: 0px;
    }
</style>
<div class="container-fluid">
    <div class="row justify-content-center">
        <h1>Referral Agents</h1>
    </div>
    <div class="mt-3">
        <form action="{{route('optin.agents.index')}}" method="GET" class="d-block">
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="name">Address</label>
                    <input type="text" name="address" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="name">Language</label>
                    <input type="text" name="language" class="form-control">
                </div>
            </div>
            <div class="form-footer text-right p-0">
                <input type="submit" class="btn btn-luxe m-0" value="Search">
            </div>
        </form>
    </div>
    <div class="row my-4">
        @foreach ($agents as $agent)
        <div class="col-md-6">
            <div class="row-col">
                <div class="row-details">
                    <img src="{{$agent->avatar}}" alt="">
                    <div>
                        <h4>{{$agent->profile->fullname}}&nbsp;</h4>
                        <p>Phone: {{$agent->profile->phone}}&nbsp;</p>
                        <p>Languages:
                            @if ($agent->profile->languages)
                            @foreach ($agent->profile->languages as $language)
                            <span>{{$language}} @if(!$loop->last)
                                ,
                                @endif</span>
                            @endforeach
                            @endif
                            &nbsp;
                        </p>
                        <p>Address: {{$agent->profile->address}}</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    {{$agents->links()}}
</div>

@endsection