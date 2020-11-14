<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" type="text/css" href="{{ asset('page/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('page/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('page/css/magnific-popup.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('page/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('page/css/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('page/css/nice-select.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('page/css/flaticon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('page/css/gijgo.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('page/css/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('page/css/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('page/css/slicknav.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('page/css/style.css') }}">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!-- header-start -->
    <header>
        <div class="header-area" style="background-color: #6c757d;">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid ">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo">
                                    <a href="/" style="color: white; font-weight: bold;">
                                        GOODFARM
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="/">Dashboard</a></li>
                                            <li><a href="/investor/list-mitra">Mitra</a></li>
                                            <!-- <li><a href="about.html">about</a></li>
                                            <li><a href="#">pages <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="apply.html">apply loan</a></li>
                                                    <li><a href="elements.html">elements</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">blog</a></li>
                                                    <li><a href="single-blog.html">single-blog</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="FAQ.html">FAQ</a></li>
                                            <li><a href="contact.html">Contact</a></li> -->
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="Appointment">
                                    <div class="phone_num d-none d-xl-block">
                                        <a href="#"> <i class="fa fa-phone"></i> +10 673 567 367</a>
                                    </div>
                                    <div class="d-none d-lg-block" style="padding: 10 10 10 10;">
                                        <div class="main-menu  d-none d-lg-block">
                                            <nav>
                                                <ul id="navigation">
                                                    <li><a href="#">Profil <i class="ti-angle-down"></i></a>
                                                        <ul class="submenu">
                                                            <li><a href="/logout">logout</a></li>
                                                            <!-- <li><a href="single-blog.html">single-blog</a></li> -->
                                                        </ul>
                                                    </li>
                                                    
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @yield('content')
    <!-- footer start -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-3">
                        <div class="footer_widget wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="img/footer_logo.png" alt="">
                                </a>
                            </div>
                            <p>
                            goodfarm@support.com <br>
                            +10 873 672 6782 <br>
                            600/D, Green road, NewYork
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="footer_widget wow fadeInUp" data-wow-duration="1.1s" data-wow-delay=".4s">
                            <h3 class="footer_title">
                                Services
                            </h3>
                            <ul>
                                <li><a href="#">SEO/SEM </a></li>
                                <li><a href="#">Web design </a></li>
                                <li><a href="#">Ecommerce</a></li>
                                <li><a href="#">Digital marketing</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".5s">
                            <h3 class="footer_title">
                                Useful Links
                            </h3>
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#"> Contact</a></li>
                                <li><a href="#">Support</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".6s">
                            <!-- <h3 class="footer_title">
                            Goodfarm Terdaftar dan Diawasi Oleh
                            </h3>
                            <img src="{{ asset('page/img/ojk.png') }}" alt=""> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text wow fadeInUp" data-wow-duration="1.4s" data-wow-delay=".3s">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com/" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ footer end  -->
</body>
    <!-- JS here -->
    <script src="{{ asset('page/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ asset('page/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('page/js/popper.min.js') }}"></script>
    <script src="{{ asset('page/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('page/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('page/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('page/js/ajax-form.js') }}"></script>
    <script src="{{ asset('page/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('page/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('page/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('page/js/scrollIt.js') }}"></script>
    <script src="{{ asset('page/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('page/js/wow.min.js') }}"></script>
    <script src="{{ asset('page/js/nice-select.min.js') }}"></script>
    <script src="{{ asset('page/js/jquery.slicknav.min.js') }}"></script>
    <script src="{{ asset('page/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('page/js/plugins.js') }}"></script>
    <script src="{{ asset('page/js/gijgo.min.js') }}"></script>
    <script src="{{ asset('page/js/slick.min.js') }}"></script>
    <!--contact js-->
    <script src="{{ asset('page/js/contact.js') }}"></script>
    <script src="{{ asset('page/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('page/js/jquery.form.js') }}"></script>
    <script src="{{ asset('page/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('page/js/mail-script.js') }}"></script>
    <script src="{{ asset('page/js/main.js') }}"></script>

</html>
