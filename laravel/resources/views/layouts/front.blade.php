<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Roboto" rel="stylesheet">
    <base href="{{ asset('/') }}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }} - @yield('title')</title>
    <!-- Styles -->
    <link href="css/main.css?v?{{ rand() }}" rel="stylesheet">

    <!-- IE -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <!-- other browsers -->
    <link rel="icon" type="image/x-icon" href="favicon.ico" />

    <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#00a300">
    <meta name="theme-color" content="#ffffff">

    @yield('css')
</head>
<body>
    <div class="cuerpo">
        <header>
            cabecera
        </header>
    @yield('content')
    <footer>
        pie
    </footer>
    </div>



    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/modernizr-3.5.0.min.js"></script>
    @yield('javascript')
</body>
</html>
