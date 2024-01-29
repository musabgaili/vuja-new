<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ __('VujaDe Innovation') }} | {{ __('Home') }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/hero2.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Reveal
  * Updated: Jan 09 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>



    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex justify-content-between">

            <div id="logo" style="z-index: 100">
                <h1><a href="/" class=" d-block logo-link"
                        style="width: 880px;height: 80px;position: relative;top: -15px;"><img
                            src="{{ asset('assets/img/new-logo.png') }}" class="logo"
                            style=" width : 100px ;height : 100px" alt=""></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt=""></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    @if (  $page != 'details')
                    <li><a class="nav-link scrollto active" href="#hero">{{ __('Home') }}</a></li>

                    <li><a class="nav-link scrollto" href="#about">{{ __('About') }}</a></li>
                    <li><a class="nav-link scrollto" href="#services">{{ __('Services') }}</a></li>
                    <li><a class="nav-link scrollto " href="#portfolio">{{ __('Portfolio') }}</a></li>
                    {{-- <li><a class="nav-link scrollto" href="#team">{{ __('Team') }}</a></li> --}}

                    <li><a class="nav-link scrollto" href="#contact">{{ __('Contact') }}</a></li>

                    @else
                    <li><a class="nav-link scrollto active" href="{{route('home')}}">{{ __('Home') }}</a></li>


                    @endif

                    @if (App::getLocale() == 'en')
                        <li><a class="nav-link scrollto" href="{{route('locale',['locale'=> 'ar'])}}">{{ __('Ar') }}</a></li>
                    @else
                        <li><a class="nav-link scrollto" href="{{route('locale',['locale'=> 'en'])}}">{{ __('En') }}</a></li>
                    @endif


                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    @yield('content')

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>VujadeSA</strong>.
            </div>
            <div class="credits">
                <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Reveal
      -->
                {{-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> --}}
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
