@extends('layouts.app', ['active' => 'office_staff_directory', 'subactive' => 'your_luxe_staff'])

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
            font-family: 'gothicbold';
        }
    </style>
    <div class="container">
        <div class="row my-5">
            <div class="col-12 title mb-3 text-center">
                <h1>Your LUXE Staff</h1>
            </div>
            <div class="col-md-3 staff-box">
                <img src="{{ asset('images/staff/user.jpg') }}" class="staff-image">
                <p class="staff-name">Ana Gonzalez</p>
                <p class="staff-role">Contract Specialist</p>
                <p class="staff-email">ana.gonzalez.white@gmail.com</p>
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
                <img src="{{ asset('images/staff/user.jpg') }}" class="staff-image">
                <p class="staff-name">Jorge Fernandez</p>
                <p class="staff-role">Lead Director</p>
                <p class="staff-email">jorgef@luxeknows.com</p>
            </div>
            <div class="col-md-3 staff-box">
                <img src="{{ asset('images/staff/justin.png') }}" class="staff-image">
                <p class="staff-name">Justin Kirkwood</p>
                <p class="staff-role">VP of Sales</p>
                <p class="staff-email">justink@luxeknows.com</p>
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
        </div>
    </div>
@endsection
