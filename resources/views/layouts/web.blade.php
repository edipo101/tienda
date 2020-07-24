<!DOCTYPE html>
<html lang="en">
<!-- molla/index-19.html  22 Nov 2019 10:00:58 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name') }} - @yield('title')</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{config('app.url')}}/assets/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{config('app.url')}}/assets/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{config('app.url')}}/assets/images/icons/favicon-16x16.png">
    <link rel="manifest" href="{{config('app.url')}}/assets/images/icons/site.html">
    <link rel="mask-icon" href="{{config('app.url')}}/assets/images/icons/safari-pinned-tab.svg" color="#666666">
    <link rel="shortcut icon" href="{{config('app.url')}}/assets/images/icons/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="{{config('app.url')}}/assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="{{config('app.url')}}/assets/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css">

    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{config('app.url')}}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{config('app.url')}}/assets/css/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="{{config('app.url')}}/assets/css/plugins/magnific-popup/magnific-popup.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{config('app.url')}}/assets/css/style.css">
    <link rel="stylesheet" href="{{config('app.url')}}/assets/css/skins/skin-demo-19.css">
    <link rel="stylesheet" href="{{config('app.url')}}/assets/css/demos/demo-19.css">
    <link rel="stylesheet" href="{{config('app.url')}}/assets/css/plugins/nouislider/nouislider.css">

    <link rel="stylesheet" href="{{config('app.url')}}/assets/css/web_style.css">
</head>

<body>
    <div class="page-wrapper">
        <div class="wrap-container">
            @include('layouts.web.header')

            <main class="main">
                @yield('breadcrumb')
                @yield('content')
            </main><!-- End .main -->

            @include('layouts.web.footer')
        </div>
    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay">
    </div><!-- End .mobil-menu-overlay -->

    @include('partials.mobile_menu')

    <!-- Sign in / Register Modal -->
    @include('partials.sign_in')

    @include('partials.newsletter_popup')

    <!-- Plugins JS File -->
    <script src="{{config('app.url')}}/assets/js/jquery.min.js"></script>
    <script src="{{config('app.url')}}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{config('app.url')}}/assets/js/jquery.hoverIntent.min.js"></script>
    <script src="{{config('app.url')}}/assets/js/jquery.waypoints.min.js"></script>
    <script src="{{config('app.url')}}/assets/js/superfish.min.js"></script>
    <script src="{{config('app.url')}}/assets/js/owl.carousel.min.js"></script>
    <script src="{{config('app.url')}}/assets/js/bootstrap-input-spinner.js"></script>
    {{-- <script src="{{config('app.url')}}/assets/js/jquery.elevateZoom.min.js"></script> --}}
    <script src="{{config('app.url')}}/assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Main JS File -->
    <script src="{{config('app.url')}}/assets/js/main.js"></script>
    <script src="{{config('app.url')}}/assets/js/demos/demo-19.js"></script>
</body>


<!-- molla/index-19.html  22 Nov 2019 10:01:15 GMT -->
</html>