@extends('layouts.app')
@section('content')
<style>
    .wrapper h1 {
        font-weight: 400;
        letter-spacing: 2px;
        background: #FFCF40;
        padding: 10px;
        border: 1px solid #dadada;
        border-radius: 10px;
    }

    .address {
        border-bottom: 1px solid rgb(236, 236, 236)
    }

    .location {
        margin-bottom: 0;
        font-size: 20px;
        letter-spacing: 1px;
    }
</style>
<div class="container">
    <div class="row justify-content-center my-4">
        <div class="col-md-12">
            <div class="card form p-3">
                <div class="wrapper">
                    <h1 class="text-center my-4">Office Locations</h1>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <p class="location">Coral Gables</p>
                            <p class="address">55 Merrick Way #402, Coral Gables, FL 33134</p>
                        </div>
                        <div class="form-group col-md-6">
                            <p class="location">Midtown</p>
                            <p class="address">30 NW 34 Street #102, Miami, FL 33127</p>
                        </div>
                        <div class="form-group col-md-6">
                            <p class="location">Kendall</p>
                            <p class="address">12464 SW 127 Avenue, Miami, FL 33186</p>
                        </div>
                        <div class="form-group col-md-6">
                            <p class="location">Miami Lakes</p>
                            <p class="address">17670 NW 78th Avenue #206, Hialeah, FL 33015</p>
                        </div>
                        <div class="form-group col-md-6">
                            <p class="location">Homestead</p>
                            <p class="address">2016 NE 8 Street, Homestead, FL 33033</p>
                        </div>
                        <div class="form-group col-md-6">
                            <p class="location">Aventura</p>
                            <p class="address">2875 NE 191 Street #PH5, Aventura, FL 33180</p>
                        </div>
                        <div class="form-group col-md-6">
                            <p class="location">Hollywood</p>
                            <p class="address">2028 Harrison Street #102, Hollywood, FL 33020</p>
                        </div>
                        <div class="form-group col-md-6">
                            <p class="location">Orlando</p>
                            <p class="address">301 N Tubb Street #104, Oakland, FL 34760</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection