<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Yoga Studio Template">
    <meta name="keywords" content="Yoga, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Violet | Template</title>
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
    rel="stylesheet">
    
    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/assets/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/assets/css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/assets/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/assets/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/assets/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/assets/css/style.css') }}" type="text/css">
    
    @stack('css')
</head>

<body>
    
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    
    <!-- Search model -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->
    
    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="inner-header">
               {{--  <div class="logo">
                    <a href="{{ route('website.home') }}"><img src="{{ asset('public/assets/img/logo.png') }}" alt=""></a>
                </div> --}}
                @include('website.layouts.menu')
            </div>
        </div>
    </header>
    
    @yield('content')
    <footer class="footer-section spad">
        
        </footer>
        <!-- Footer Section End -->
        
        <!-- Js Plugins -->
        <script src="{{ asset('public/assets/js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('public/assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('public/assets/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('public/assets/js/jquery.slicknav.js') }}"></script>
        <script src="{{ asset('public/assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('public/assets/js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('public/assets/js/mixitup.min.js') }}"></script>
        <script src="{{ asset('public/assets/js/main.js') }}"></script>
        
        @stack('scripts')
    </body>
    
    </html>