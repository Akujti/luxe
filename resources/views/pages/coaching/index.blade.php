@extends('layouts.app', ['active' => '', 'subactive' => ''])
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

        .box-items p {
            text-decoration: underline;
        }

        .btn-luxe {
            border-radius: 10px;
            cursor: pointer;
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="col-12 title mb-3">
            <h1>LUXE Coaching</h1>
            <p>"Taking your real estate business to the Next Level".</p>

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
                            <p>You have successfully signed up and the Next Level Sales Coach will reach you out.</p>
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
        <div class="row align-items-center justify-content-center box-items">
            <div class="col-12 col-md-12 col-lg-7">
                <div>
                    <p>Group Coaching</p>
                    <ul>
                        <li>High impact in person group coaching twice a week for 90 minutes at one of our offices</li>
                        <li>Grow your business with a proven sales process used by top agents all over North America</li>
                        <li>Learn and practice dialogues that will take your business to the next level</li>
                    </ul>
                </div>
                <div>
                    <p>On Demand Coaching 24/7 and 365 days a year</p>
                    <ul>
                        <li>3 powerful lessons available online every week to help you "next level" your business</li>
                        <li>Learn how to build a predictable and duplicatable business</li>
                        <li>Next level your business by using techniques that having you
                            thinking bigger so you can have the life and business that you want</li>
                    </ul>
                </div>
                <div>
                    <p>One in person half day seminar a month</p>
                    <ul>
                        <li>Once a month participate in an in person half day
                            seminar that will help keep you focused on your goals and providing your with the
                            road map to take your business to the next level</li>
                    </ul>
                </div>
                <div>
                    <p>Online platform connecting a community of like-minded agents</p>
                    <ul>
                        <li>Exclusive access to all learning materials and lessons from one easy to use
                            online platform that is accessible from your desktop or any mobile device
                        </li>
                        <li>Online community chat for additional support to all coaching clients</li>
                    </ul>
                </div>

                <div class="row p-0 m-0 justify-content-center">
                    <form action="{{ route('general.email.post') }}" method="POST">
                        @csrf
                        <input type="hidden" name="form_title" value="LUXE Coaching">
                        <input type="hidden" name="agent_full_name" value="{{ auth()->user()->profile->fullname }}">
                        <input type="hidden" name="agent_email" value="{{ auth()->user()->email }}">
                        <input type="hidden" name="agent_phone" value="{{ auth()->user()->profile->phone }}">
                        <input type="hidden" name="agent_address" value="{{ auth()->user()->profile->address }}">
                        <input type="hidden" name="agent_languages"
                            value="{{ auth()->user()->profile->languages ? implode(',', auth()->user()->profile->languages) : null }}">
                        <button type="submit" class="btn-luxe">Sign Up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
