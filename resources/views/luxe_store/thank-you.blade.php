@extends('layouts.app', ['active' => 'Store'])

@section('css')
    <style>
        .thankyou-wrapper {
            width: 100%;
            height: auto;
            margin: auto;
            background: #ffffff;
            padding: 10px 0px 50px;
        }

        .thankyou-wrapper h1 {
            font: 100px Arial, Helvetica, sans-serif;
            text-align: center;
            color: #333333;
            padding: 0px 10px 10px;
        }

        .thankyou-wrapper p {
            font-family: 'gothicregular';
            font-size: 26px;
            text-align: center;
            color: #333333;
            padding: 5px 10px 10px;
        }

        .thankyou-wrapper a {
            text-align: center;
            display: block;
            text-decoration: none;
            width: 250px;
            margin: 10px auto 0px;
            padding: 15px 20px 15px;
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row m-0 justify-content-center">
            <section class="login-main-wrapper">
                <div class="main-container">
                    <div class="login-process">
                        <div class="login-main-container">
                            <div class="thankyou-wrapper">
                                <h1><img src="/images/thanks.png" alt="Thank you" width="100%" /></h1>
                                <a class="btn btn-luxe" href="{{ url('/home') }}">Back to Home</a>
                                <div class="clr"></div>
                            </div>
                            <div class="clr"></div>
                        </div>
                    </div>
                    <div class="clr"></div>
                </div>
            </section>

        </div>
    </div>
@endsection
