@extends('layouts.base')

@section('title', 'Sign in')

@section('body')
    <body class="login-page">
        <div class="login-box">
            <div class="logo">
                <a href="javascript:void(0);">Admin<b>BSB</b></a>
                <small>Admin BootStrap Based - Material Design</small>
            </div>
            <div class="card">
                <div class="body">
                    <div class="card-header"></div>
                    <form id="sign_in" method="POST" action="{{ route('login') }}">

                        @csrf

                        <div class="msg">{{ __('Sign in') }}</div>

                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">email</i>
                            </span>
                            <div class="form-line">
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="{{ __('E-Mail Address') }}">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">lock</i>
                            </span>
                            <div class="form-line">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="{{ __('Password') }}" required>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-8 p-t-5">
                                    <input class="filled-in chk-col-pink" type="checkbox" name="rememberme" id="rememberme" {{ old('rememberme') ? 'checked' : '' }}>
                                <label for="rememberme">{{ __('Remember Me') }}</label>

                            </div>
                            <div class="col-xs-4">
                                <button type="submit" class="btn btn-block bg-pink waves-effect">{{ __('SIGN IN') }}</button>
                            </div>
                        </div>
                        <div class="row m-t-15 m-b--20">
                            <div class="col-xs-6">
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}">{{ __('Register Now!') }}</a>
                                @endif
                            </div>
                            <div class="col-xs-6 align-right">
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
@endsection
