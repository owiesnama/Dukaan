<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{--<!-- CSRF Token -->--}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Dukaan') }}</title>

    {{--<!-- Styles -->--}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
{{--    <link href="{{ asset('css/argon.css') }}" rel="stylesheet">--}}

    <link href="{{ asset('css/argon-rtl.css') }}" rel="stylesheet">
    {{--<!-- Fonts -->--}}
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    {{--icons--}}
    <link href="{{asset('vendor/nucleo/css/nucleo.css')}}" rel="stylesheet">
    <link href="{{asset('fonts/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <livewire:styles></livewire:styles>
</head>
<body>
<div id="app">
    @include('partials.admin.sidebar')

    <div class="main-content ml-0">

        @yield('content')

    </div>
</div>

<!-- Scripts -->
<livewire:scripts></livewire:scripts>
<script src="{{ asset('js/app.js') }}"></script>
<script src="/vendor/jquery/dist/jquery.min.js"></script>
<script src="/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- Argon JS -->
<script src="/js/argon.js?v=1.0.0"></script>
@stack('js')
</body>
</html>