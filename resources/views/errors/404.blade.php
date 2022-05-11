@extends('layouts.app')

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
@section('content')
    <div class="container">
        <div class="row align-items-center h-100">
            <div class="col-12">
                <h1 class="m-0">404</h1>
                <p>Resource not found</p>
            </div>
        </div>
    </div>
@endsection
