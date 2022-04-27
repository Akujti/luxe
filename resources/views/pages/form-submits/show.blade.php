@extends('layouts.app')
@section('css')
<style>
    .wrapper h1 {
        font-weight: 400;
        letter-spacing: 2px;
        background: #262626;
        padding: 10px;
        border: 1px solid #dadada;
        border-radius: 10px;
        color: #fff;
    }
</style>
@endsection
@section('content')
<div class="container-fluid">
    <div class="wrapper">
        <h1 class="text-center mb-4">Form Submission</h1>
    </div>
    <div class="row m-0 w-100">
        @foreach($details as $key=>$val)
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
        @endforeach
    </div>
</div>
@endsection