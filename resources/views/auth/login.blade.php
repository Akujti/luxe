@extends('layouts.app')

@section('content')
<style>
    /* main {
        background-image: url("{{asset('images/login_bg.jpg')}}") !important;
        background-position: center !important;
        background-repeat: no-repeat !important;
        background-size: cover !important;
        min-height: 100vh;
        background: #0000004a;
        background-blend-mode: color;
    } */

    header {
        background-color: rgba(35, 35, 35, .5) !important;
    }

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
    .form-check-label, .forgot-password {
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
        text-transform: uppercase;
        font-weight: bold;
        font-size: 24px;
        padding: 10px 20px;
        /* background-image: url(https://myluxehub.com/wp-content/themes/Luxe/img/loginbg.png); */
        /* background-repeat: no-repeat; */
        /* background-size: contain; */
        margin-top: 20px;
        line-height: 30px;
        cursor: pointer;
    }
    .card {
        color: #262626 !important
    }

    /*.card form{*/
    /*    margin-left: -18%;*/
    /*}*/
    @media (max-width: 767.98px) {
        .min-input {
            min-width: auto !important;
        }

        .custom-padding {
            padding-top: 0 !important;
        }
    }
</style>
<div class="container custom-padding">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center" style="background:#FFCF40;font-size:20px;"><img class="login-logo"
                        src="https://myluxehub.com/wp-content/uploads/2018/10/logo-big-391x130.png" alt=""
                        height="110px"><br>All templates here. <br>Just login and customize your desired theme.
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" class="flex-column">
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

                        <div class="row">
                            <label for="password" class="card-label col-md-3 col-form-label text-md-right">{{
                                __('Password') }}</label>

                            <div class="col-md-9">
                                <input id="password" type="password"
                                    class="min-input card-input @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-9 offset-md-3">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember"
                                                id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <a class="forgot-password"
                                            href="https://myluxehub.com/my-account/lost-password/">Forgot your
                                            password?</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-9 offset-md-3 text-center">
                                <input type="submit" class="submit-button" value="{{ __('Login') }}">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection