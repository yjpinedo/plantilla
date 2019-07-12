<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') . ' | ' }}@yield('title')</title>

    <!-- Jquery Core Js -->
    <script type="text/javascript" src="{{ asset('plugins/jquery/jquery.min.js') }}" defer></script>

    <!-- Bootstrap Core Js -->
    <script type="text/javascript" src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}" defer></script>

    <!-- Select Plugin Js -->
    <script type="text/javascript" src="{{ asset('plugins/bootstrap-select/js/bootstrap-select.js') }}"defer></script>

    <!-- Slimscroll Plugin Js -->
    <script type="text/javascript" src="{{ asset('plugins/jquery-slimscroll/jquery.slimscroll.js') }}"defer></script>

    <!-- Waves Effect Plugin Js -->
    <script type="text/javascript" src="{{ asset('plugins/node-waves/waves.js') }}"defer></script>

    <!-- Jquery CountTo Plugin Js -->
    <script type="text/javascript" src="{{ asset('plugins/jquery-countto/jquery.countTo.js') }}"defer></script>

    <!-- Morris Plugin Js -->
    <script type="text/javascript" src="{{ asset('plugins/raphael/raphael.min.js') }}"defer></script>
    <script type="text/javascript" src="{{ asset('plugins/morrisjs/morris.js') }}"defer></script>

    <!-- ChartJs -->
    <script type="text/javascript" src="{{ asset('plugins/chartjs/Chart.bundle.js') }}"defer></script>

    <!-- Flot Charts Plugin Js -->
    <script type="text/javascript" src="{{ asset('plugins/flot-charts/jquery.flot.js') }}"defer></script>
    <script type="text/javascript" src="{{ asset('plugins/flot-charts/jquery.flot.resize.js') }}"defer></script>
    <script type="text/javascript" src="{{ asset('plugins/flot-charts/jquery.flot.pie.js') }}"defer></script>
    <script type="text/javascript" src="{{ asset('plugins/flot-charts/jquery.flot.categories.js') }}"defer></script>
    <script type="text/javascript" src="{{ asset('plugins/flot-charts/jquery.flot.time.js') }}"defer></script>

    <!-- Sparkline Chart Plugin Js -->
    <script type="text/javascript" src="{{ asset('plugins/jquery-sparkline/jquery.sparkline.js') }}"defer></script>

    <!-- Custom Js -->
    <script type="text/javascript" src="{{ asset('plugins/jquery/jquery.min.js') }}" defer></script>
    <script type="text/javascript" src="{{ asset('js/admin.js') }}"defer></script>
    <!-- Demo Js -->
    <script src="{{ asset('js/demo.js') }}"defer></script>
    <script type="text/javascript" src="{{ asset('plugins/jquery-validation/jquery.validate.js') }}"defer></script>
    <script type="text/javascript" src="{{ asset('js/pages/examples/sign-in.js') }}" defer></script>
    <script type="text/javascript" src="{{ asset('js/pages/examples/sign-up.js') }}" defer></script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}" defer></script>

    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}"  rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{ asset('plugins/node-waves/waves.css') }}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{ asset('plugins/animate-css/animate.css') }}" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="{{ asset('plugins/morrisjs/morris.css') }}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{ asset('css/themes/all-themes.css') }}" rel="stylesheet" />




</head>

    @yield('body')

</html>
