<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Google Font: Source Sans Pro -->

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    {{--
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ Vite::template('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ Vite::template('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ Vite::template('dist/css/adminlte.min.css') }}"> --}}
    <!-- Scripts -->
    {{-- @vite(['resources/css/app.css', 'resources/sass/app.scss', 'resources/js/app.js']) --}}
    @vite([
    'resources/assets/template/plugins/fontawesome-free/css/all.min.css', // font awesome
    'resources/assets/template/plugins/icheck-bootstrap/icheck-bootstrap.min.css', // icheck
    'resources/assets/template/dist/css/adminlte.min.css', // admin lte
    ])

</head>
{{-- class="hold-transition login-page" --}}

<body @class([ 'hold-transition' , 'login-page'=> Route::is('login'),
    'register-page'=>Route::is('register'),])
    >
    {{ $slot }}

    @vite([
    'resources/assets/template/plugins/jquery/jquery.min.js', // jqery
    'resources/assets/template/plugins/bootstrap/js/bootstrap.bundle.min.js', // bootstrap bundle
    'resources/assets/template/dist/js/adminlte.min.js', // admin lte
    ])
    {{--
    <!-- jQuery -->
    <script src="{{ Vite::template('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ Vite::template('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ Vite::template('dist/js/adminlte.min.js') }}"></script> --}}

</html>
