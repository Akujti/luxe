@extends('layouts.app', ['active' => 'Agents'])
@section('css')
    <style>
        @media (max-width: 576px) {
            .form-group {
                padding: 0px !important;
            }

            #profile-image img {
                width: 169px !important;
                height: 169px !important;
            }
        }

        #profile-image img {
            width: 237px;
            height: 237px;
            border-radius: 50%;
        }

        #email-box,
        #phone-box {
            width: 63px;
            height: 63px;
            border-radius: 50%;
            border: 2px solid #262626;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .profile-title {
            width: 100%;
            text-align: center;
            margin-top: 20px;
        }

        .profile-title h4 {
            font-family: 'gothicbold';
            font-size: 24px;
            color: #262626;
        }

        .profile-level {
            margin-top: 20px;
        }

        .profile-level span {
            background-color: #DEDEDE;
            width: 20px;
            height: 6px;
            border-radius: 4px;
        }

        .profile-level span.filled {
            background-color: #262626;
        }

        .profile-level .level-title {
            text-align: center;
            font-family: 'gothicbold';
            font-size: 18px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .profile-level .level-title #regular {
            color: #DEDEDE;
        }

        .profile-details div p {
            font-family: 'gothicbold';
            font-size: 18px;
            color: #DEDEDE;
            margin: 0px;
            margin-bottom: 10px;
            padding: 0px;
        }

        .profile-details div h4 {
            font-family: 'gothicbold';
            font-size: 22px !important;
            color: #262626;
        }

        .row-col {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-top: 1px solid #E6E6E6;
            padding: 15px 0px
        }

        .row-col img {
            width: 58px;
            height: 58px;
            border-radius: 50%;
            margin-right: 20px;
        }

        .row-col .row-details {
            display: flex;
            justify-content: center;
            align-items: center;
            color: #262626;
        }

        .row-details h4 {
            font-size: 20px;
            font-family: 'gothicbold';
        }

        .row-details p {
            font-family: 'gothicregular';
            font-size: 16px;
            margin: 0px;
            padding: 0px;
        }

        .row-date p {
            font-family: 'gothicregular';
            font-size: 16px;
            margin: 0px;
            padding: 0px;
        }

        label {
            font-size: 20px;
            font-family: 'gothicbold';
            color: #262626;
        }

        .form-control:disabled,
        .form-control[readonly] {
            background-color: #F7F7F7 !important;
            border: 1px solid #F7F7F7;
            font-family: 'gothicregular';
            padding: 10px;
            border-radius: 5px;
        }

        button:focus {
            outline: none;
            box-shadow: 0 0 0 0.2rem rgb(0 123 255 / 0%) !important;
        }

        button {
            cursor: pointer;
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row m-0 justify-content-center">
            <div class="col-12 col-lg-12 col-md-12 row p-0 m-0">
                <div class="col-12 col-lg-4 col-md-12">
                    <div class="row p-0 m-0">
                        <div class="col-12 d-flex justify-content-between align-items-center">
                            <div id="email-box">
                                <img src="/images/index-page/email-icon.svg"
                                     onclick="window.location = 'mailto:{{ $user->email }}'" alt="">
                            </div>
                            <div id="profile-image">
                                <img src="{{ $user->avatar }}" alt="">
                            </div>
                            <div id="phone-box">
                                <img src="/images/index-page/phone-black.svg"
                                     onclick="window.location = 'tel:{{ $user->profile->phone }}'" alt="">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="profile-title">
                                <h4>{{ $user->profile->fullname }}</h4>
                            </div>
                            <x-brokersumo-tiers :user="$user"/>
                            <div class="d-flex justify-content-center mt-3 mb-2" style="gap: 10px">
                                @if($user->profile->facebook)
                                    <a href="{{$user->profile->facebook}}" target="_blank" class="text-dark">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                             fill="currentColor"
                                             class="bi bi-facebook" viewBox="0 0 16 16">
                                            <path
                                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                                        </svg>
                                    </a>
                                @endif
                                @if($user->profile->instagram)
                                    <a href="{{$user->profile->instagram}}" target="_blank" class="text-dark">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                             fill="currentColor"
                                             class="bi bi-instagram" viewBox="0 0 16 16">
                                            <path
                                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                                        </svg>
                                    </a>
                                @endif
                                @if($user->profile->linkedin)
                                    <a href="{{$user->profile->linkedin}}" target="_blank" class="text-dark">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                             fill="currentColor"
                                             class="bi bi-linkedin" viewBox="0 0 16 16">
                                            <path
                                                d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
                                        </svg>
                                    </a>
                                @endif
                            </div>
                            <div class="profile-details row p-0 m-0">
                                <div class="col-12 col-md-7">
                                    <p>Phone</p>
                                    <h4>{{ $user->profile->phone }}</h4>
                                </div>
                                <div class="col-12 col-md-5">
                                    <p>Language</p>
                                    @if ($user->profile && $user->profile->languages)
                                        @foreach ($user->profile->languages as $key => $language)
                                            <h4>{{ $language }}@if ($key == count($user->profile->languages) - 1)
                                                @else
                                                    ,
                                                @endif
                                            </h4>
                                        @endforeach
                                    @endif
                                </div>
                                <div class="col-12 mt-3">
                                    <p>Address</p>
                                    <h4>{{ $user->profile->address }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-8 col-md-12 mt-3">
                    <div class="row p-0 m-0">
                        <div class="form-group col-12 col-md-6">
                            <label for="">Branch Manager</label>
                            <div class="input-group">
                                <input type="text" class="form-control"
                                       value="{{ $user->profile->support_specialist_name }}" readonly>
                            </div>
                        </div>
                        <div class="form-group col-12 col-md-6 p-0">
                            <label for="">Loan Officer</label>
                            <div class="input-group">
                                <input type="text" class="form-control" value="{{ $user->profile->loan_officer_name }}"
                                       readonly>
                            </div>
                        </div>
                        {{-- <div class="box-title mt-5 mb-4">
                        <h3>Referrals</h3>
                    </div>

                    <div class="col-12 p-0">
                        <div class="row-col">
                            <div class="row-details">
                                <img src="/images/agents/ana.jpg" alt="">
                                <div>
                                    <h4>John Doe</h4>
                                    <p>English</p>
                                </div>
                            </div>
                            <div class="row-date">
                                <p>Date Registered: <b>03.11.2022</b></p>
                            </div>
                        </div>
                        <div class="row-col">
                            <div class="row-details">
                                <img src="/images/agents/ana.jpg" alt="">
                                <div>
                                    <h4>John Doe</h4>
                                    <p>English</p>
                                </div>
                            </div>
                            <div class="row-date">
                                <p>Date Registered: <b>03.11.2022</b></p>
                            </div>
                        </div>
                    </div> --}}
                        @if (auth()->user()->role == 'other' || auth()->user()->role == 'admin')
                            <div class="box-title mt-5 mb-4">
                                <h3>Orders</h3>
                            </div>

                            <div class="col-12 p-0">
                                @forelse($orders as $order)
                                    <div class="row-col">
                                        <div class="row-details">
                                            <!-- <img src="/images/agents/ana.jpg" alt=""> -->
                                            <div>
                                                <h4>#{{ $order->id }}</h4>
                                                <p>Total: ${{ $order->payment->total_price }}</p>
                                            </div>
                                        </div>
                                        <div class="row-date">
                                            <p>Date Registered: <b>{{ $order->created_at->toDateString() }}</b></p>
                                        </div>
                                    </div>
                                @empty
                                    <div>
                                        <p>No orders found</p>
                                    </div>
                                @endforelse
                            </div>

                            <div class="col-12 border-bottom mt-3"></div>
                            <div class="box-title mt-3 mb-3 d-flex justify-content-between w-100">
                                <h3>Add Staff Notes</h3>
                                <a href="{{ route('notes', $user->id) }}?staff=true" class="btn btn-luxe">View All
                                    Notes</a>
                            </div>
                            <div class="col-12 p-0 mb-4">
                                @forelse($notes as $note)
                                    <x-staff-notes :note="$note"/>
                                @empty
                                    <div>
                                        <p>No Notes Found.</p>
                                    </div>
                                @endforelse
                            </div>
                            <div class="col-12 p-0 mb-4">
                                <form action="{{ route('create_note') }}" method="POST" class="row p-0 m-0">
                                    @csrf
                                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                                    <div class="form-group col-12 p-0 ">
                                        <label for="">Text</label>
                                        <div class="input-group">
                                            <textarea name="body" class="form-control"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-12 p-0">
                                        <button type="submit" class="btn btn-luxe">Submit</button>
                                    </div>

                                </form>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
