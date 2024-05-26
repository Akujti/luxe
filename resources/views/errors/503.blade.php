@extends('layouts.app')

<style>
    .sidebar.d-none.d-lg-flex {
        display: none !important
    }

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
                <h1 class="m-0">503</h1>
                <p>The Hub is currently down for maintenance. We'll be back soon!</p>
            </div>
        </div>
    </div>
@endsection
