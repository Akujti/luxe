@extends('admin.layouts.app', ['active' => 'Marketing_requests'])
@section('css')
<style>
    .wrapper h1 {
        font-weight: 400;
        letter-spacing: 2px;
        background: #262626;
        padding: 10px;
        color: white;
        border-radius: 10px;
    }
</style>
@endsection
@section('content')
<div class="container-fluid">
    <div class="w-100 mb-5">
        <h5 class="h5-luxe">Marketing Request</h5>
    </div>
    <div class="row m-0 w-100">
        @foreach($details as $key=>$val)
        @if (gettype($val) != 'object')
        <div class="col-12 col-md-6">
            <p class="bold-text"><b>{{ucwords(str_replace('_',' ',$key))}}:</b>
                @if(preg_match("(storage/images/marketing|marketing)",$val))
                <a href="{{$val}}" target="_blank">Click to open.</a>
                @else
                {{$val}}
                @endif
            </p>
            <hr>
        </div>
        @endif
        @endforeach
    </div>
</div>
@endsection