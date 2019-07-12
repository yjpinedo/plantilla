@extends('layouts.base')

@section('body')
    <body class="theme-indigo">
        @include('includes.navbar')
        @include('includes.leftsidebar')
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <section class="content">
                <div class="container-fluid">
                    <div class="block-header">
                        <h2>@yield('titlePage')</h2>
                    </div>
                    @yield('content')
                </div>
        </section>
    </body>
@endsection


