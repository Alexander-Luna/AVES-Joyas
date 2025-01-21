<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', env('APP_NAME', 'Electro - Ecommerce'))</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts and Icons -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Stylesheets -->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/nouislider.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Vite -->
    @vite(['resources/js/app.js', 'resources/css/app.css'])

    <!-- Additional Scripts -->
    @stack('head')
</head>

<body>
    @include('layouts.components.header')
    @include('layouts.components.navigation')

    <main>
        @yield('content')
    </main>

    @include('layouts.components.newsletter')
    @include('layouts.components.footer')

    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/nouislider.min.js') }}"></script>
    <script src="{{ asset('js/jquery.zoom.min.js') }}"></script>
    <script src="{{ asset('js/fontawesome-icons-6.3.0.js') }}"></script>

    
    <script src="{{ asset('js/main.js') }}"></script>
    @stack('scripts')
</body>

</html>
