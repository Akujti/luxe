@extends('layouts.app')

@section('content')
<style>
    .container {
        padding-top: 250px !important;
    }

    .card {
        background: transparent;
        border: none;
        color: white !important;
    }

    .card-header {
        background: transparent !important;
        color: #262626;
        font-family: 'gothicbold';
    }

    .login-logo {
        margin-bottom: 20px;
    }

    .card .card-input {
        background-color: #F7F7F7;
        min-width: 334px;
        border-radius: 5px;
        border: 1px solid #fff;
        padding: 5px 20px;
        color: #262626;
        margin-bottom: 10px;
        width: 100%;
        outline: none;
    }

    .card .card-label {
        font-size: 18px;
        color: #262626;
        font-family: 'gothicbold';
    }

    .form-check-label,
    .forgot-password {
        font-family: 'gothicbold';
        font-size: 15px !important;
        color: #262626;
    }

    .card .submit-button {
        background-color: #262626;
        color: #fff;
        border-radius: 10px;
        border: transparent;
        min-width: 250px;
        font-weight: bold;
        font-size: 24px;
        padding: 10px 20px;
        margin-top: 20px;
        line-height: 30px;
        cursor: pointer;
    }

    .card {
        color: #262626 !important
    }

    @media (max-width: 767.98px) {
        .min-input {
            min-width: auto !important;
        }

        .custom-padding {
            padding-top: 0 !important;
        }
    }
</style>
<div class="container-fluid">
    <div class="row justify-content-center align-items-center" style="height:70vh">
        <div class="col-md-10 col-lg-6">
            <div class="card">
                <div class="card-header text-center" style="background:#FFCF40;font-size:20px;"><img class="login-logo"
                        src="{{asset('images/logo-black.png')}}" alt="" height="110px"><br>Reset Password
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('password.email') }}" class="flex-column">
                        @csrf
                        <div class="row">
                            <label for="email" class="card-label col-md-3 col-form-label text-md-right">{{ __('Email')
                                }}</label>

                            <div class="col-md-9">
                                <input id="email" type="email"
                                    class="min-input card-input @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                        </div>


                        <div class="">
                            <div class="text-center">
                                <input type="submit" class="submit-button" value="{{ __('Send Password Reset Link') }}">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
