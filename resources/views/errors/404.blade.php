@extends('layouts.app')

<style>
    main, #id, body, .container {
        height: 100%;
    }
</style>
@section('content')
    <div class="container">
        <div class="row justify-content-center align-items-center h-100">
            <img src="{{asset('images/404.jpg')}}" alt="" class="w-100 h-75">
        </div>
    </div>

@endsection
