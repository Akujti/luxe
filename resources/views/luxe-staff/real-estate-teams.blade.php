@extends('layouts.app', ['active' => 'office_staff_directory', 'subactive' => 'real_estate_teams'])

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
                <h1>Real Estate Teams</h1>
            </div>
            <div class="col-md-6 staff-box">
                <img src="{{ asset('images/real-estate/balestra.jpg') }}" class="staff-image">
                <p class="staff-name">Balestra Group</p>
                <p class="staff-role">Team Leader: Annette Balestra</p>
                <p class="staff-email">D: <a href="tel:305.335.5967">305.335.5967</a></p>
                <p class="staff-email">E: <a href="mailto:annette@luxeknows.com">annette@luxeknows.com</a></p>
            </div>
            {{-- <div class="col-md-6 staff-box">
                <img src="{{ asset('images/real-estate/emg.jpg') }}" class="staff-image">
                <p class="staff-name">Empire Miami Group</p>
                <p class="staff-role">Team Leader: Meisha Jattin</p>
                <p class="staff-email">D: <a href="tel:786.203.6277">786.203.6277</a></p>
                <p class="staff-email">E: <a href="mailto:meishamiami@luxeknows.com">meishamiami@luxeknows.com</a></p>
            </div> --}}
            {{-- <div class="col-md-6 staff-box">
                <img src="{{ asset('images/real-estate/llc.jpg') }}" class="staff-image" style="object-position: top;">
                <p class="staff-name">Luxury Lifestyle Collective</p>
                <p class="staff-role">Team Leader: Nina Millman</p>
                <p class="staff-email">D: <a href="tel:305.333.8292">305.333.8292</a></p>
                <p class="staff-email">E: <a href="mailto:nina@luxeknows.com">nina@luxeknows.com</a></p>
            </div> --}}
            <div class="col-md-6 staff-box">
                <img src="{{ asset('images/real-estate/mcc.jpg') }}"
                     class="staff-image" style="object-fit:contain">
                <p class="staff-name">Miami Casa Collective</p>
                <p class="staff-role">Team Leader: Melissa Concepcion</p>
                <p class="staff-email">D: <a href="tel:305.965.3727">305.965.3727</a></p>
                <p class="staff-email">E: <a href="mailto:melissa@luxeknows.com">melissa@luxeknows.com</a></p>
            </div>
            <div class="col-md-6 staff-box">
                <img src="{{ asset('images/real-estate/mep.jpg') }}" class="staff-image">
                <p class="staff-name">Miami Elite Properties</p>
                <p class="staff-role">Team Leader: Julio Blandon</p>
                <p class="staff-email">D: <a href="tel:786.487.4651">786.487.4651</a></p>
                <p class="staff-email">E: <a href="mailto:julioblandon@luxeknows.com">julioblandon@luxeknows.com</a></p>
            </div>
            <div class="col-md-6 staff-box">
                <img src="{{ asset('images/real-estate/people.jpg') }}" class="staff-image">
                <p class="staff-name">The Akers Group</p>
                <p class="staff-role">Team Leader: Zach Akers</p>
                <p class="staff-email">D: <a href="tel:305.343.5371">305.343.5371</a></p>
                <p class="staff-email">E: <a href="mailto:zdakers@outlook.com">zdakers@outlook.com</a></p>
            </div>
            <div class="col-md-6 staff-box">
                <img src="{{ asset('images/real-estate/people.jpg') }}" class="staff-image">
                <p class="staff-name">The Bocanegra Group</p>
                <p class="staff-role">Team Leader:</p>
                <p class="staff-email">D: <a href="tel:786.205.6319">786.205.6319</a></p>
                <p class="staff-email">E: <a
                        href="mailto:bocanegramiamirealestate@gmail.com">bocanegramiamirealestate@gmail.com</a></p>
            </div>
            <div class="col-md-6 staff-box">
                <img src="{{ asset('images/real-estate/tce.jpeg') }}" class="staff-image">
                <p class="staff-name">The Calderin Estates</p>
                <p class="staff-role">Team Leader: Zuly Calderin</p>
                <p class="staff-email">D: <a href="tel:786.717.4706">786.717.4706</a></p>
                <p class="staff-email">E: <a
                        href="mailto:zulycalderinrealtor@gmail.com">zulycalderinrealtor@gmail.com</a>
                </p>
            </div>
            <div class="col-md-6 staff-box">
                <img src="{{ asset('images/real-estate/people.jpg') }}" class="staff-image">
                <p class="staff-name">The Calimano Team</p>
                <p class="staff-role">Team Leader: Giovanna Calimano</p>
                <p class="staff-email">D: <a href="tel:786.797.0012">786.797.0012</a></p>
                <p class="staff-email">E: <a href="mailto:g.calimano@gmail.com">g.calimano@gmail.com</a></p>
            </div>
            <div class="col-md-6 staff-box">
                <img src="{{ asset('images/real-estate/rld.jpg') }}" class="staff-image">
                <p class="staff-name">The RLD Team</p>
                <p class="staff-role">Team Leaders: Lysandra Wu & Devona Wu</p>
                <p class="staff-email">D: <a href="tel:786.325.2566">786.325.2566</a> or <a
                        href="tel:786.202.5484">786.202.5484</a></p>
                <p class="staff-email">E: <a href="mailto:info@therldteam.com">info@therldteam.com</a></p>
            </div>
            <div class="col-md-6 staff-box">
                <img src="{{ asset('images/real-estate/olmedillo.jpg') }}" class="staff-image">
                <p class="staff-name">Olmedillo Group</p>
                <p class="staff-role">Team Leader: Aya Olmedillo</p>
                <p class="staff-email">D: <a href="tel:3053219861">305.321.9861</a> or <a
                        href="tel:786.202.5484">786.202.5484</a></p>
                <p class="staff-email">E: <a href="mailto:aya@luxeknows.com">aya@luxeknows.com</a></p>
            </div>
            {{--            <div class="col-md-6 staff-box">--}}
            {{--                <img src="{{ asset('images/real-estate/premier.jpeg') }}" class="staff-image">--}}
            {{--                <p class="staff-name">Premier Luxe Group</p>--}}
            {{--                <p class="staff-role">Team Leader: Sergio Martins</p>--}}
            {{--                <p class="staff-email">D: <a href="tel:7864878527">786.487.8527</a></p>--}}
            {{--                <p class="staff-email">E: <a href="mailto:s.martins@luxeknows.com">s.martins@luxeknows.com</a></p>--}}
            {{--            </div>--}}
            <div class="col-md-6 staff-box">
                <img src="{{ asset('images/real-estate/ssm.jpg') }}" class="staff-image">
                <p class="staff-name">SamSellsMiami Group</p>
                <p class="staff-role">Team Leader: Samuel Juarez</p>
                <p class="staff-email">D: <a href="tel:7862224176">786.222.4176</a></p>
                <p class="staff-email">E: <a href="mailto:sam@samsellsmiami.com">sam@samsellsmiami.com</a></p>
            </div>
        </div>
    </div>
@endsection
