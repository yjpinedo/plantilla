@extends('layouts.app')

@section('body')
<body class="container">
    <div class="signup-box">
        <div class="logo">
                <a href="javascript:void(0);">Admin<b>BSB</b></a>
                <small>Admin BootStrap Based - Material Design</small>
        </div>
        <div class="card">
            <div class="body">
                    <div class="msg">{{ __('Verify Your Email Address') }}</div>
                @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                @endif

                {{ __('Before proceeding, please check your email for a verification link.') }}
                {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
            </div>
        </div>
    </div>
</body>
@endsection
