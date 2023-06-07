@extends('layouts.app', ['active' => 'Tools&TrainingVideos', 'subactive' => 'coaching'])
@section('css')
    <style>
        .title h1 {
            font-family: 'gothicbold';
            text-align: center;
        }

        .title p {
            font-family: 'gothicregular';
            text-align: center;
        }

        .box-items {
            font-family: 'gothicregular';
            font-size: 18px;
        }

        .btn-luxe {
            border-radius: 10px;
            cursor: pointer;
        }

        .coaching-text li {
            font-size: 16px;
        }

        .coaching-text p {
            font-size: 17px;
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="col-12 title mb-3">
            <h1>LUXE Coaching</h1>
            <p>30 Days to Success - Unlock Your Potential!</p>

            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-show="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Success</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>You have successfully signed up for the Next Level Sales Coaching & the coach will reach out
                                to you soon!</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            @if (session()->get('modal'))
                <script type="text/javascript">
                    $(window).on('load', function() {
                        $('#exampleModalCenter').modal('show');
                    });
                </script>
            @endif
        </div>
        <div class="row box-items py-4">
            <div class="col-lg-12 coaching-text">
                <div>
                    <p>Are you ready to take your real estate career to new heights? Are you looking to maximize your
                        earning potential and achieve unparalleled success in the dynamic world of real estate? Look no
                        further! Our 30 days to success program are designed to empower you with the knowledge, skills, and
                        strategies you need to thrive in today's competitive market.</p>
                    <p><b>Knowledge is Power:</b> Gain access to a treasure trove of industry-leading insights and proven
                        techniques that will propel your career forward. We have a deep understanding of the real estate
                        landscape and will provide you with expert guidance tailored to your unique goals and aspirations.
                    </p>
                    <p>
                        <b>Accelerate Your Growth:</b> Whether you're just starting out or an experienced agent looking for
                        a
                        refresher course, our class is designed to get you back to basics and understanding the process of
                        real estate.
                    </p>
                    <p>
                        <b>Unleash Your Entrepreneurial Spirit:</b> Real estate is not just a job; it's an opportunity to
                        build
                        your own business and create a life of financial freedom. We will empower you with the
                        entrepreneurial mindset needed to build a thriving real estate empire. From lead generation to
                        building a robust referral network, we'll guide you every step of the way.
                    </p>
                    <p>
                        <b>Dominate Your Market:</b> In today's rapidly evolving real estate landscape, staying ahead of the
                        curve
                        is crucial. Our classes will equip you with the latest market trends, cutting-edge technology tools,
                        and innovative sales strategies to dominate your market. We'll help you identify emerging
                        opportunities and adapt to changing consumer behaviors.
                    </p>
                    <p><b>Personalized Support:</b> We understand that every real estate professional is unique, with
                        individual
                        strengths and areas for growth. That's why our coaching program is tailored to your specific needs.
                        Our teacher will provide one-on-one guidance, offering personalized feedback, accountability, and
                        support to ensure you achieve exceptional results.</p>
                </div>

                <div class="row p-0 m-0 justify-content-center">
                    {{-- <form action="{{ route('general.email.post') }}" method="POST">
                        @csrf
                        <input type="hidden" name="form_title" value="LUXE Coaching">
                        <input type="hidden" name="agent_full_name" value="{{ auth()->user()->profile->fullname }}">
                        <input type="hidden" name="agent_email" value="{{ auth()->user()->email }}">
                        <input type="hidden" name="agent_phone" value="{{ auth()->user()->profile->phone }}">
                        <input type="hidden" name="agent_address" value="{{ auth()->user()->profile->address }}">
                        <input type="hidden" name="agent_languages"
                            value="{{ auth()->user()->profile->languages ? implode(',', auth()->user()->profile->languages) : null }}">
                        <button type="submit" class="btn-luxe">Sign Up</button>
                    </form> --}}
                    <a href="{{ route('coaching.form') }}" class="btn-luxe">Sign Up</a>
                </div>
            </div>
        </div>
    </div>
@endsection
