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
                        <div class="box-title mb-4 d-flex justify-content-between align-items-center w-100">
                            <h3 class="p-0 m-0">Notes</h3>
                            <button class="btn btn-luxe" onclick="toggleNoteForm()">Add Staff Note</button>
                        </div>
                        <div class="col-12 p-0">
                            @forelse($notes as $note)
                                <div class="row-col">
                                    <div class="row-details">
                                        <img src="{{ $note->user_author->avatar }}" alt="">
                                        <div>
                                            <h4>{{ $note->user_author->profile->fullname }}</h4>
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

                        <div class="w-100 d-flex justify-content-center">
                            {{ $notes->links() }}
                        </div>

                        <div class="col-12 p-0 mb-4 d-none" id="create-note-section">
                            <form action="{{ route('create_note') }}" method="POST" class="row p-0 m-0">
                                @csrf
                                <input type="hidden" name="user_id" value="{{ $user->id }}">
                                <div class="form-group col-12 p-0">
                                    <label for="">Text</label>
                                    <div class="input-group">
                                        <textarea name="body" id="note-text" class="form-control"></textarea>
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
    <script>
        function toggleNoteForm() {
            $('#create-note-section').toggleClass('d-none')
            $('#note-text').focus()
        }
    </script>
@endsection
