@extends('layouts.app', ['active' => 'Store'])

@section('content')
    <style>
        .staff-image {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 15px;
        }

        .staff-box {
            margin-bottom: 30px;
        }

        .staff-box p {
            margin: 0
        }

        .title {
            font-family: 'gothicbold';
        }

        .staff-name {
            margin-top: 15px !important;
            font-weight: bold;
            font-size: 20px;
        }
    </style>
    <div class="container">
        <div class="row my-5">
            <div class="col-12 title mb-3 text-center">
                <h1>Your LUXE Staff</h1>
            </div>
            <div class="col-md-3 staff-box">
                <img src="{{ asset('images/staff/bianca.jpg') }}" class="staff-image">
                <p class="staff-name">Bianca Guevara</p>
                <p class="staff-role">Midtown Manager</p>
                <p class="staff-email">bianca@luxeknows.com</p>
            </div>
            <div class="col-md-3 staff-box">
                <img src="{{ asset('images/staff/bianca-p.jpg') }}" class="staff-image">
                <p class="staff-name">Bianca Perez</p>
                <p class="staff-role">Operations Manager</p>
                <p class="staff-email">operation@luxeknows.com</p>
            </div>
            <div class="col-md-3 staff-box">
                <img src="{{ asset('images/staff/user.jpg') }}" class="staff-image">
                <p class="staff-name">Christian Benedico</p>
                <p class="staff-role">Marketing Coordinator</p>
                <p class="staff-email">designs@luxeknows.com</p>
            </div>
            <div class="col-md-3 staff-box">
                <img src="{{ asset('images/staff/justin.png') }}" class="staff-image">
                <p class="staff-name">Justin Kirkwood</p>
                <p class="staff-role">VP of Sales</p>
                <p class="staff-email">justink@luxeknows.com</p>
            </div>
            <div class="col-md-3 staff-box">
                <img src="{{ asset('images/staff/kristy.jpg') }}" class="staff-image">
                <p class="staff-name">Kristy Martinez</p>
                <p class="staff-role">South Miami Manager</p>
                <p class="staff-email">kristy@luxeknows.com</p>
            </div>
            <div class="col-md-3 staff-box">
                <img src="{{ asset('images/staff/user.jpg') }}" class="staff-image">
                <p class="staff-name">Monica Estupinan</p>
                <p class="staff-role">Education Specialist & Agent Onboarding</p>
                <p class="staff-email">monica@luxeknows.com</p>
            </div>
            <div class="col-md-3 staff-box">
                <img src="{{ asset('images/staff/user.jpg') }}" class="staff-image">
                <p class="staff-name">Sabrina Mirabent</p>
                <p class="staff-role">Support Partner</p>
                <p class="staff-email">support@luxeknows.com</p>
            </div>
            <div class="col-md-3 staff-box">
                <img src="{{ asset('images/staff/shanut.jpg') }}" class="staff-image">
                <p class="staff-name">Shanut Anaut</p>
                <p class="staff-role">South Miami Manager</p>
                <p class="staff-email">shanut@luxeknows.com</p>
            </div>
            <div class="col-md-3 staff-box">
                <img src="{{ asset('images/staff/user.jpg') }}" class="staff-image">
                <p class="staff-name">Tania Roberts</p>
                <p class="staff-role">Homestead Manager</p>
                <p class="staff-email">tania@luxeknows.com</p>
            </div>
            <div class="col-md-3 staff-box">
                <img src="{{ asset('images/staff/wesley.jpg') }}" class="staff-image">
                <p class="staff-name">Wesley Ulloa</p>
                <p class="staff-role">Broker</p>
                <p class="staff-email">wesley@luxeknows.com</p>
            </div>
            <div class="col-md-3 staff-box">
                <img src="{{ asset('images/staff/user.jpg') }}" class="staff-image">
                <p class="staff-name">Yailin Garcia</p>
                <p class="staff-role">Support Partner</p>
                <p class="staff-email">support@luxeknows.com</p>
            </div>
            <div class="col-md-3 staff-box">
                <img src="{{ asset('images/staff/user.jpg') }}" class="staff-image">
                <p class="staff-name">Yesenia Ferro</p>
                <p class="staff-role">Miami Lakes Manager</p>
                <p class="staff-email">yesenia@luxeknows.com</p>
            </div>
        </div>
    </div>
@endsection
