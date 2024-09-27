@extends('layouts.app')
@section('css')
    <style>
        .container {
            height: 88vh;
        }

        .container * {
            font-family: "gothicregular";
        }

        h1 {
            font-size: 4rem !important
        }

        p {
            font-size: 2rem
        }
    </style>
@endsection
@section('content')
    <div class="container">
        <div class="row align-items-center h-100">
            <div class="col-12">
                <h1 class="mb-4">Coming Soon</h1>
                <a href="{{ url()->previous() }}" class="btn-luxe">Go Back</a>
            </div>
        </div>
    </div>
@endsection
