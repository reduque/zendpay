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
            <a href="{{ route('home') }}" class="logo">Labtest</a>
            <div class="menu">
                    <div class="menu1">
                        <div class="infocontacto">
                            <a href="{{ route('aboutus') }}#contactus">CONTACT US</a>
                            <span>Se habla español</span>
                        </div>
                        <form action="" method="get">
                            <input type="text" placeholder="search text">
                            <button></button>
                        </form>
                        <a href="{{ route('login') }}" class="botones">Log in</a>
                        <a href="{{ route('register') }}" class="botones">Regist</a>
                        <a href="" class="carrito"><img src="img/shopping-cart.svg" alt=""></a>
                    </div>
                    <nav>
                        <ul>
                            <li><a href="{{ route('home') }}">HOME</a></li>
                            <li><a href="{{ route('howitworks') }}">HOW IT WORKS</a></li>
                            <li><a href="{{ route('category') }}">CATEGORIES</a></li>
                            <li><a href="">INDIVIDUAL TESTS</a></li>
                            <li><a href="{{ route('locator') }}">LOCATIONS</a></li>
                            <li><a href="">BLOOD DRAW AT HOME</a></li>
                            <li><a href="{{ route('aboutus') }}">ABOUT US</a></li>
                        </ul>
                    </nav>
            </div>
        </header>
    @yield('content')
    <footer>
        <ul>
            <li class="logo_diapo">
                <img src="img/logo_diapo.svg">
            </li>
            <li>
                <br>
                <ul>
                    <li><a href="{{ route('faq') }}">FAQ's</a></li>
                    <li><a href="{{ route('terms_and_conditions') }}">Terms and Conditions</a></li>
                    <li><a href="{{ route('privacypolicy') }}">Privacy and Security</a></li>
                    <li><a href="{{ route('payment_options') }}">Payment Options</a></li>
                    <li><a href="{{ route('refund_policy') }}">Refund Policy</a></li>
                    <li><a href="{{ route('why_ltod') }}">Why Ltod</a></li>
                </ul>
            </li>
            <li>
                Get in Touch<br>
                <ul class="ul_f_c">
                    <li>
                        Request A Test, Ltd<br> 
                        7027 Mill Road, Suite 201<br> 
                        Cleveland, OH 44141
                    </li>
                    <li>1-888-732-2348 <br>1-866-383-2766 (Español)</li>
                    <li><a href="mailto:info@requestatest.com">info@requestatest.com</a></li>
                </ul>
            </li>
        </ul>
    </footer>
    </div>



    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/modernizr-3.5.0.min.js"></script>
    @yield('javascript')
</body>
</html>
