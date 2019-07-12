@extends('layouts.base')

@section('title', 'Reset Password')

@section('body')
<body class="fp-page">
    <div class="fp-box">
        <div class="logo">
            <a href="javascript:void(0);">Admin<b>BSB</b></a>
            <small>Admin BootStrap Based - Material Design</small>
        </div>
        <div class="card">
            <div class="body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form id="forgot_password" method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="msg">{{ __('Reset Password') }}</div>

                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="{{ __('E-Mail Address') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">{{ __('Send Password Reset Link') }}</button>

                    <div class="row m-t-20 m-b--5 align-center">
                        <a href="{{ route('login') }}">{{ __('Sign In!') }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
@endsection
