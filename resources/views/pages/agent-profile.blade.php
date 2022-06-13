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
                            <x-brokersumo-tiers :user="$user" />
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
                            <label for="">Support Specialist</label>
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
                                <div class="row-col w-100 position-relative" style="border:none">
                                    <div class="row-details w-100">
                                        <img src="{{ $note->user_author->avatar }}" alt="">
                                        <div class="w-100">
                                            <div class="d-flex justify-content-between w-100">
                                                <h4>{{ !$note->user_author->profile ? '' : $note->user_author->profile->fullname }}</h4>
                                                <div class="row justify-content-end p-0 m-0">
                                                    @if($note->author == auth()->id())
                                                    <div class="btn-group">
                                                        <button type="button" class="btn bg-transparent p-0 pl-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span><i class="fa-solid fa-ellipsis"></i></span>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <form method="POST" action="{{ route('delete_note') }}">
                                                                @method('delete')
                                                                @csrf
                                                                <input type="hidden" name="id" value="{{ $note->id }}">
                                                                <button class="dropdown-item text-danger" type="submit"><i class="fa-solid fa-trash"></i> Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    @endif
                                                    <p class="w-100 text-right">{{ $note->created_at }}</p>

                                                </div>
                                            </div>
                                            <p>{{ $note->body }}</p>
                                        </div>
                                    </div>
                                </div>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
