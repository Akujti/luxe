@extends('layouts.app', ['active' => 'office_staff_directory', 'subactive' => 'your_luxe_staff'])

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
                <h1>Your LUXE Staff</h1>
            </div>
            <div class="col-md-3 staff-box">
                <img src="{{ asset('images/staff/ana.jpg') }}" class="staff-image">
                <p class="staff-name">Ana Gonzalez</p>
                <p class="staff-role">Contract Specialist</p>
                <p class="staff-email">ana.gonzalez@luxeknows.com</p>
                <p class="staff-email">305.479.0254</p>
            </div>
            <div class="col-md-3 staff-box">
                <img src="{{ asset('images/staff/bianca-p.jpg') }}" class="staff-image">
                <p class="staff-name">Bianca Perez</p>
                <p class="staff-role">Operations Manager</p>
                <p class="staff-email">operation@luxeknows.com</p>
            </div>
            <div class="col-md-3 staff-box">
                <img src="{{ asset('images/staff/cheila.jpeg') }}" class="staff-image">
                <p class="staff-name">Cheila Gonzalez</p>
                <p class="staff-role">IDX & MLS Specialist</p>
                <p class="staff-email">support@luxeknows.com</p>
            </div>
            <div class="col-md-3 staff-box">
                <img src="{{ asset('images/staff/christian.jpg') }}" class="staff-image">
                <p class="staff-name">Christian Benedico</p>
                <p class="staff-role">Marketing Director</p>
                <p class="staff-email">marketing@luxeknows.com</p>
                <p class="staff-email">305.908.1116</p>
            </div>
            <div class="col-md-3 staff-box">
                <img src="{{ asset('images/staff/daniela.jpeg') }}" class="staff-image">
                <p class="staff-name">Daniela River</p>
                <p class="staff-role">General Support Specialist</p>
                <p class="staff-email">support@luxeknows.com</p>
            </div>
            <div class="col-md-3 staff-box">
                <img src="{{ asset('images/staff/fritz.jpg') }}" class="staff-image">
                <p class="staff-name">Fritz Moise</p>
                <p class="staff-role">Marketing Coordinator</p>
                <p class="staff-email">marketingcoordinator@luxeknows.com</p>
                <p class="staff-email">305.908.1116</p>
            </div>
            <div class="col-md-3 staff-box">
                <img src="{{ asset('images/staff/gabriela.jpeg') }}" class="staff-image">
                <p class="staff-name">Gabriela Suarez</p>
                <p class="staff-role">Zillow Flex Team Leader</p>
                <p class="staff-email">gabrielas@luxeknows.com</p>
                <p class="staff-email">786.388.0971</p>
            </div>
            <div class="col-md-3 staff-box">
                <img src="{{ asset('images/staff/jennifer.jpg') }}" class="staff-image">
                <p class="staff-name">Jennifer Bru Escobar</p>
                <p class="staff-role">Education Specialist</p>
                <p class="staff-email">trainings@luxeknows.com</p>
                <p class="staff-email">786.310.3141</p>
            </div>
            <div class="col-md-3 staff-box">
                <img src="{{ asset('images/staff/jorge.jpg') }}" class="staff-image">
                <p class="staff-name">Jorge Fernandez</p>
                <p class="staff-role">Lead Director</p>
                <p class="staff-email">jorgef@luxeknows.com</p>
                <p class="staff-email">786.388.0971</p>
            </div>
            <div class="col-md-3 staff-box">
                <img src="{{ asset('images/staff/kayleen.jpg') }}" class="staff-image">
                <p class="staff-name">Kayleen Chinea</p>
                <p class="staff-role">Agent Experience Specialist</p>
                <p class="staff-email">onboarding@luxeknows.com</p>
                <p class="staff-email">786.279.8225</p>
            </div>
            {{-- <div class="col-md-3 staff-box">
                <img src="{{ asset('images/staff/monica.jpg') }}" class="staff-image">
                <p class="staff-name">Monica Estupinan</p>
                <p class="staff-role">Education Specialist & Coaching</p>
                <p class="staff-email">monica@luxeknows.com</p>
            </div> --}}
            <div class="col-md-3 staff-box">
                <img src="{{ asset('images/staff/lucy.jpeg') }}" class="staff-image">
                <p class="staff-name">Lucy Rodriguez</p>
                <p class="staff-role">Zillow Team Flex Admin</p>
                <p class="staff-email">zillowflex@luxeknows.com</p>
                <p class="staff-email">786.388.0971</p>
            </div>
            <div class="col-md-3 staff-box">
                <img src="{{ asset('images/staff/romina.jpg') }}" class="staff-image">
                <p class="staff-name">Romina Arturi</p>
                <p class="staff-role">Zillow Team Dade Admin</p>
                <p class="staff-email">zillowdade@luxeknows.com</p>
                <p class="staff-email">786.388.0971</p>
            </div>
            <div class="col-md-3 staff-box">
                <img src="{{ asset('images/staff/sabrina.jpg') }}" class="staff-image">
                <p class="staff-name">Sabrina Mirabent</p>
                <p class="staff-role">Escrow Specialist</p>
                <p class="staff-email">escrow@luxeknows.com</p>
                <p class="staff-email">305.998.6239</p>
            </div>
            <div class="col-md-3 staff-box">
                <img src="{{ asset('images/staff/wesley.jpg') }}" class="staff-image">
                <p class="staff-name">Wesley Ulloa</p>
                <p class="staff-role">Broker</p>
                <p class="staff-email">wesley@luxeknows.com</p>
            </div>
            <div class="col-md-3 staff-box">
                <img src="{{ asset('images/staff/yesenia.jpg') }}" class="staff-image">
                <p class="staff-name">Yesenia Ferro</p>
                <p class="staff-role">Recruiting Specialist</p>
                <p class="staff-email">yesenia@luxeknows.com</p>
                <p class="staff-email">786.623.7531</p>
            </div>
            {{-- <div class="col-md-3 staff-box">
                <img src="{{ asset('images/staff/user.jpg') }}" class="staff-image">
                <p class="staff-name">Valentina Grad</p>
                <p class="staff-role">Marketing Coordinator</p>
                <p class="staff-email">marketingcoordinator@luxeknows.com</p>
            </div>
            <div class="col-md-3 staff-box">
                <img src="{{ asset('images/staff/kendra.jpeg') }}" class="staff-image">
                <p class="staff-name">Kendra Lopez</p>
                <p class="staff-role">Agent Onboarding</p>
                <p class="staff-email">onboarding@luxeknows.com</p>
            </div> --}}
            <!-- <div class="col-md-3 staff-box">
                                                                                <img src="{{ asset('images/staff/user.jpg') }}" class="staff-image">
                                                                                <p class="staff-name">Roxie Cordoba</p>
                                                                                <p class="staff-role">Lead Admin</p>
                                                                                <p class="staff-email">leadadmin@luxeknows.com</p>
                                                                            </div>
                                                                            <div class="col-md-3 staff-box">
                                                                                <img src="{{ asset('images/staff/albert.jpg') }}" class="staff-image">
                                                                                <p class="staff-name">Albert Babani</p>
                                                                                <p class="staff-role">Sales Coach</p>
                                                                                <p class="staff-email">albert@babaniproperties.com</p>
                                                                            </div> -->
        </div>
    </div>
@endsection
