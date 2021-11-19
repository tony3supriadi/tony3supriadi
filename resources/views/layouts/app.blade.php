<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {!! SEO::generate(true) !!}

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-grid.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/animations.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/perfect-scrollbar.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" type="text/css">
</head>

<body>
    <!-- Animated Background -->
    <div class="lm-animated-bg" style="background-image: url(img/main_bg.png);"></div>
    <!-- /Animated Background -->

    <!-- Loading animation -->
    <div class="preloader">
        <div class="preloader-animation">
            <div class="preloader-spinner">
            </div>
        </div>
    </div>
    <!-- /Loading animation -->

    <!-- Page content -->
    <div class="page">
        <div class="page-content">
            <header id="site_header" class="header mobile-menu-hide">
                <div class="header-content">
                    <div class="header-photo">
                        <img src="img/main_photo.jpg" alt="Toni Tri Supriadi">
                    </div>
                    <div class="header-titles">
                        <h2>Toni Tri Supriadi</h2>
                        <h4>Web Programmer</h4>
                    </div>
                </div>

                <ul class="main-menu">
                    <li class="active">
                        <a href="#home" class="nav-anim">
                            <span class="menu-icon lnr lnr-home"></span>
                            <span class="link-text">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="#about-me" class="nav-anim">
                            <span class="menu-icon lnr lnr-user"></span>
                            <span class="link-text">About Me</span>
                        </a>
                    </li>
                    <li>
                        <a href="#resume" class="nav-anim">
                            <span class="menu-icon lnr lnr-graduation-hat"></span>
                            <span class="link-text">Resume</span>
                        </a>
                    </li>
                    <li>
                        <a href="#portfolio" class="nav-anim">
                            <span class="menu-icon lnr lnr-briefcase"></span>
                            <span class="link-text">Portfolio</span>
                        </a>
                    </li>
                    <li>
                        <a href="#blog" class="nav-anim">
                            <span class="menu-icon lnr lnr-book"></span>
                            <span class="link-text">Blog</span>
                        </a>
                    </li>
                    <li>
                        <a href="#contact" class="nav-anim">
                            <span class="menu-icon lnr lnr-envelope"></span>
                            <span class="link-text">Contact</span>
                        </a>
                    </li>
                </ul>

                <div class="social-links">
                    <ul>
                        <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    </ul>
                </div>

                <div class="header-buttons">
                    <a href="#" target="_blank" class="btn btn-primary">Download CV</a>
                </div>

                <div class="copyrights">© 2020 All rights reserved.</div>
            </header>

            <!-- Mobile Navigation -->
            <div class="menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <!-- End Mobile Navigation -->

            <!-- Arrows Nav -->
            <div class="lmpixels-arrows-nav">
                <div class="lmpixels-arrow-right"><i class="lnr lnr-chevron-right"></i></div>
                <div class="lmpixels-arrow-left"><i class="lnr lnr-chevron-left"></i></div>
            </div>
            <!-- End Arrows Nav -->

            <!-- Content area -->
            <div class="content-area">
                <div class="animated-sections">
                    @yield('content')
                </div>
            </div>
            <!-- /Content area -->
        </div>
    </div>
    <!-- /Page content -->

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/modernizr.custom.js') }}"></script>
    <script src="{{ asset('js/animating.js') }}"></script>

    <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>

    <script src=" {{ asset('js/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('js/jquery.shuffle.min.js') }}"></script>
    <script src="{{ asset('js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCrDf32aQTCVENBhFJbMBKOUTiUAABtC2o"></script>
    <script src="{{ asset('js/jquery.googlemap.js') }}"></script>
    <script src="{{ asset('js/validator.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>