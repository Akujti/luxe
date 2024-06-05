@extends('layouts.app', ['active' => 'office_staff_directory', 'subactive' => 'luxe_loan_officers'])

@section('content')
    <style>
        .staff-image {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 10px;
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
                <h1>LUXE Lending - Your LUXE Loan Officers</h1>
            </div>
            <div class="col-md-3 staff-box">
                <img src="{{ asset('images/staff/alfonso.jpg') }}" class="staff-image">
                <p class="staff-name">Alfonso Rojas</p>
                <p class="staff-role">Senior Mortgage Loan Officer</p>
                <p class="staff-email"><a href="tel:3052405976">305.240.5976</a></p>
                <p class="staff-email"><a href="mailto:alfonso@luxehomeloan.com">alfonso@luxehomeloan.com</a></p>
            </div>
            <div class="col-md-3 staff-box">
                <img src="{{ asset('images/staff/alex.jpg') }}" class="staff-image">
                <p class="staff-name">Alex Ramirez</p>
                <p class="staff-role">Mortgage Loan Officer</p>
                <p class="staff-email"><a href="tel:7862390668">786.239.0668</a></p>
                <p class="staff-email"><a href="mailto:alex@luxehomeloan.com">alex@luxehomeloan.com</a></p>

                <a target="_blank" href="https://2086660.my1003app.com/1743529/register"
                   class="btn-luxe d-block text-center mt-2">APPLY NOW</a>
            </div>
            <div class="col-md-3 staff-box">
                <img src="{{ asset('images/staff/ana-arias.jpg') }}" class="staff-image">
                <p class="staff-name">Ana Arias</p>
                <p class="staff-role">Mortgage Loan Officer</p>
                <p class="staff-email"><a href="tel:3057331932">305.733.1932</a></p>
                <p class="staff-email"><a href="mailto:ana@luxehomeloan.com">ana@luxehomeloan.com</a></p>

                <a target="_blank" href="https://2086660.my1003app.com/2093307/register"
                   class="btn-luxe d-block text-center mt-2">APPLY NOW</a>
            </div>
            <div class="col-md-3 staff-box">
                <img src="{{ asset('images/staff/anais.jpg') }}" class="staff-image">
                <p class="staff-name">Anais Delgado</p>
                <p class="staff-role">Mortgage Loan Officer</p>
                <p class="staff-email"><a href="tel:3056070512">305.607.0512</a></p>
                <p class="staff-email"><a href="mailto:anais@luxehomeloan.com">anais@luxehomeloan.com</a></p>

                <a target="_blank" href="https://2086660.my1003app.com/2142886/register"
                   class="btn-luxe d-block text-center mt-2">APPLY NOW</a>
            </div>
            {{--            <div class="col-md-3 staff-box">--}}
            {{--                <img src="{{ asset('images/staff/brandon.jpg') }}" class="staff-image">--}}
            {{--                <p class="staff-name">Brandon Beyrle</p>--}}
            {{--                <p class="staff-role">Mortgage Loan Officer</p>--}}
            {{--                <p class="staff-email"><a href="tel:3057533264">305.753.3264</a></p>--}}
            {{--                <p class="staff-email"><a href="mailto:brandon@luxehomeloan.com">brandon@luxehomeloan.com</a></p>--}}

            {{--                <a target="_blank" href="https://2086660.my1003app.com/1266291/register"--}}
            {{--                   class="btn-luxe d-block text-center mt-2">APPLY NOW</a>--}}
            {{--            </div>--}}
            <div class="col-md-3 staff-box">
                <img src="{{ asset('images/staff/christian.jpg') }}" class="staff-image">
                <p class="staff-name">Christian Benedico</p>
                <p class="staff-role">Mortgage Loan Officer</p>
                <p class="staff-email"><a href="tel:7866510775">786.651.0775</a></p>
                <p class="staff-email"><a href="mailto:Christian@luxehomeloan.com">Christian@luxehomeloan.com</a></p>

                <a target="_blank" href="https://2086660.my1003app.com/2054824/register"
                   class="btn-luxe d-block text-center mt-2">APPLY NOW</a>
            </div>
            <div class="col-md-3 staff-box">
                <img src="{{ asset('images/staff/ducene.jpg') }}" class="staff-image">
                <p class="staff-name">Ducene Raphael</p>
                <p class="staff-role">Mortgage Loan Officer</p>
                <p class="staff-email"><a href="tel:7862602777">786.260.2777</a></p>
                <p class="staff-email"><a href="mailto:ducene@luxehomeloan.com">ducene@luxehomeloan.com</a></p>

                <a target="_blank" href="https://2086660.my1003app.com/1895607/register"
                   class="btn-luxe d-block text-center mt-2">APPLY NOW</a>
            </div>
            <div class="col-md-3 staff-box">
                <img src="{{ asset('images/staff/eddie.jpg') }}" class="staff-image">
                <p class="staff-name">Eddie Peña</p>
                <p class="staff-role">Mortgage Loan Officer</p>
                <p class="staff-email"><a href="tel:7863551488">786.355.1488</a></p>
                <p class="staff-email"><a href="mailto:eddie@luxehomeloan.com">eddie@luxehomeloan.com</a></p>

                <a target="_blank" href="https://2086660.my1003app.com/498845/register"
                   class="btn-luxe d-block text-center mt-2">APPLY NOW</a>
            </div>
            <div class="col-md-3 staff-box">
                <img src="{{ asset('images/staff/elda.jpg') }}" class="staff-image">
                <p class="staff-name">Elda Diaz</p>
                <p class="staff-role">Loan Processor</p>
                <p class="staff-email"><a href="tel:7866180515">786.618.0515</a></p>
                <p class="staff-email"><a
                            href="mailto:elda.processor@luxehomeloan.com">elda.processor@luxehomeloan.com</a>
                </p>
            </div>
            <div class="col-md-3 staff-box">
                <img src="{{ asset('images/staff/lissette.jpg') }}" class="staff-image">
                <p class="staff-name">Lissette Garcia</p>
                <p class="staff-role">Mortgage Loan Officer</p>
                <p class="staff-email"><a href="tel:7862539088">786.253.9088</a></p>
                <p class="staff-email"><a href="mailto:lissette@luxehomeloan.com">lissette@luxehomeloan.com</a></p>
                <a target="_blank" href="https://2086660.my1003app.com/2144327/register"
                   class="btn-luxe d-block text-center mt-2">APPLY NOW</a>
            </div>
            <!-- <div class="col-md-3 staff-box">
                    <img src="{{ asset('images/staff/user.jpg') }}" class="staff-image">
                    <p class="staff-name">Michael Castro</p>
                    <p class="staff-role">Mortgage Loan Officer</p>
                    <p class="staff-email"><a href="tel:3057901754">305.790.1754</a></p>
                    <p class="staff-email"><a href="mailto:michael@luxehomeloan.com">michael@luxehomeloan.com</a></p>
                </div>
                <div class="col-md-3 staff-box">
                    <img src="{{ asset('images/staff/user.jpg') }}" class="staff-image">
                    <p class="staff-name">Orlando Castillo</p>
                    <p class="staff-role">Mortgage Loan Officer</p>
                    <p class="staff-email"><a href="tel:7865567543">786.556.7543</a></p>
                    <p class="staff-email"><a href="mailto:orlando@luxehomeloan.com">orlando@luxehomeloan.com</a></p>
                </div> -->
        </div>
    </div>
@endsection
