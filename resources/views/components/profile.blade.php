<div>
    <style>
        a {
            text-decoration: none;
            color: black;
        }

        a:hover {
            color: black;
        }

        .row img {
            object-fit: cover;
        }

        #image-profile {
            width: 205px;
            height: 205px;
            border-radius: 50%;
        }

        .buttons button {
            font-family: 'gothicbold';
            font-size: 16px;
            border: none;
            border-radius: 10px;
            padding: 10px;
            display: block;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 5px;
            margin-bottom: 10px;
        }

        .buttons button:first-child {
            background-color: #262626;
            color: #fff;
        }

        .buttons button:last-child {
            background-color: #F7F7F7;
            color: #262626;
        }

        .small-title {
            font-size: '18px';
            font-family: 'gothicregular';
            color: #757575;
        }

        .form-group label {
            font-family: 'gothicregular';
            font-size: 18px;
            color: #757575;
            margin-bottom: 20px;
        }

        .form-group input {
            padding: 10px;
            border-radius: 10px;
            font-family: 'gothicbold';
            font-size: 18px;
            border: 1px solid #DEDEDE;
        }

        .form-group {
            margin-bottom: 30px;
        }

        .language-item {
            display: flex;
            width: 100%;
            justify-content: space-between;
            align-items: center;
            font-family: 'gothicregular';
            margin-bottom: 7px;
        }

        .language-item input {
            padding: 7px;
            height: 45px;
            margin: 0px;
        }
    </style>
    
    <div class="row box-title p-0 m-0 justify-content-between align-items-center">
        <h3 class="p-0 m-0">{{ $my_profile ? 'My Profile' : $user->profile->fullname }}</h3>
        @if($my_profile)
        <div>
            <a href="{{ route('optin.agents.index') }}" class="btn btn-luxe">Referral Agents</a>
            <a href="{{ route('my_orders') }}" class="btn btn-luxe">My Orders</a>
        </div>
        @endif
    </div>
    <div class="row my-3 justify-content-center">
        <div class="col-12 col-md-10 col-lg-6">
            <div>
                <div class="small-title mb-4">Profile Image</div>

                <div class="col-12 pl-0">
                    <div class="row p-0 m-0">
                        <div class="col pl-0">
                            <img src="{{ auth()->user()->avatar }}" id="image-profile" alt="">
                        </div>
                        @if($my_profile)
                        <div class="col-12 col-md-12 col-lg-8 d-flex align-items-center mt-2">
                            <div class="buttons w-100">
                                <button type="button" onclick="open_avatar_input()"><img src="/images/index-page/upload-image.svg" alt=""> Change Image</button>
                                <button type="button" onclick="remove_image()"><img src="/images/index-page/delete-icon.svg" alt=""> Remove Image</button>
                            </div>
                        </div>
                        @endif
                    </div>

                    <div class="row p-0 m-0 mt-4">
                        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" class="row p-0 m-0 w-100">
                            @method('put')
                            @csrf
                            <input type="hidden" name="id" value="{{ auth()->id() }}">
                            <input type="hidden" name="remove_image" id="remove-image-input" value="0">
                            <input type="file" name="profile[avatar]" id="avatar-input" style="display:none" onchange="onFileChanged(this)">
                            @if($my_profile)
                                @if(auth()->user()->role == 'agent')
                                <div class="form-group col-12 col-md-6">
                                    <label for="">Support Specialist</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="{{ !auth()->user()->profile ? '' : auth()->user()->profile->support_specialist_name }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <label for="">Loan Officer</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="{{ !auth()->user()->profile ? '' : auth()->user()->profile->loan_officer_name }}" readonly>
                                    </div>
                                </div>
                                @endif
                            @endif
                            <div class="form-group col-12">
                                <label for="">Full Name</label>
                                <div class="input-group">
                                    <input type="text" name="profile[fullname]" class="form-control" value="{{ !$user->profile ? '' : $user->profile->fullname }}" readonly>
                                </div>
                            </div>
                            <div class="form-group col-12">
                                <label for="">Phone Number</label>
                                <div class="input-group">
                                    <input type="text" name="profile[phone]" class="form-control" value="{{ !$user->profile ? '' : $user->profile->phone }}" @if(!$my_profile) readonly @endif >
                                </div>
                            </div>
                            <div class="form-group col-12 mb-0">
                                <label>
                                    Would you like to opt-in to be displayed as a referral agent within LUXE?
                                </label>
                                <input class="" type="checkbox" name="optin" {{$user->optin ? 'checked':''}}>
                            </div>
                            <div class="form-group col-12">
                                <label for="">Address</label>
                                <div class="input-group">
                                    <input type="text" name="profile[address]" class="form-control" value="{{ !$user->profile ? '' : $user->profile->address }}" @if(!$my_profile) readonly @endif >
                                </div>
                            </div>
                            <div class="form-group col-12">
                                <label for="">Language</label>
                                <div class="d-flex">
                                    @php
                                        $languages = '';
                                    @endphp
                                    @if($user->profile->languages)
                                        @foreach($user->profile->languages as $key => $language)
                                            @if($key == 0)
                                                @php $languages .= $language @endphp
                                            @else
                                                @php $languages .= ', '. $language @endphp
                                            @endif
                                        @endforeach
                                    @endif
                                    <input type="text" class="form-control" id="language" value="{{ !$my_profile ? $languages : '' }}" @if(!$my_profile) readonly @endif>
                                    @if($my_profile)
                                    <button type="button" class="btn btn-luxe px-3 ml-2" onclick="add_language()">+</button>
                                    @endif
                                </div>
                                @if($my_profile)
                                <i>Type the language and press + to add it in the list of languages</i>
                                <div class="language-section mt-2">
                                    @if ($user->profile->languages)
                                    @foreach($user->profile->languages as $language)
                                    <div class="language-item">
                                        <input type="text" name="languages[]" class="form-control" value="{{ $language }}">
                                        <button type="button" class="btn btn-danger ml-3" onclick="remove_language(this)">&times;</button>
                                    </div>
                                    @endforeach
                                    @endif
                                </div>
                                @endif
                            </div>

                            @if($my_profile)
                            <div class="col-12">
                                <button class="btn btn-luxe btn-block py-2" style="border-radius:10px;">Save
                                    changes</button>
                            </div>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>