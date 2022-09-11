<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    @yield("title")
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/images/favicon.ico">
    <!-- Bootstrap -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons -->
    <link href="/assets/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
    <link rel="stylesheet" href="/assets/vendor/carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/vendor/carousel/owl.theme.green.min.css">
    <!-- Slider -->
    <link rel="stylesheet" href="/assets/css/tiny-slider.css" />
    <link href="/assets/css/style.css" rel="stylesheet" type="text/css" />
    <!-- Main Css -->
    <link href="/assets/css/colors/default.css" rel="stylesheet" id="color-opt">

</head>

<body>

    <div id="app">
        <!-- Loader -->
        <vue-loader></vue-loader>


        <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div>

        <!-- Navbar STart -->
        <header id="topnav" class="defaultscroll sticky bg-primary">
            <div class="container-fluid">
                <!-- Logo container-->
                <a class="logo d-flex align-items-center" style="height: 74px;" href="/">
                    <img src="/assets/images/logo.png" height="50" class="logo-light-mode" alt="">
                    <div class="d-flex px-4 align-items-center" style="border-left: 2px solid white; height: 100%;">
                        <h3 class="fs-5 text-white m-0 p-0">Application Process</h3>
                    </div>
                </a>

                <!-- Logo End -->
                <!-- End Logo container-->
                <div class="menu-extras">
                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </div>
                </div>

                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu bg-primary justify-content-end">
                        <li class="has-submenu parent-parent-menu-item">
                            <a href="javascript:void(0)">
                                <span class="text-white-50">{{auth()->user()->first_name}} {{auth()->user()->last_name}}</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="submenu m-0">
                                <li>
                                    <form action="{{route('logout')}}" method="post">
                                        <button href="/jobs" class="btn sub-menu-item"> Sign out</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!--end navigation menu-->
                </div>
                <!--end navigation-->
            </div>
            <!--end container-->
        </header>
        <!--end header-->
        <!-- Navbar End -->

        @yield("content")
        <!-- Footer Start -->
        <footer class="footer footer-light">
            <div class="footer-py-30 bg-footer  text-white-50 border-top">
                <div class="container text-center">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="text-sm-start">
                                <p class="mb-0">© 2022 Smart Force <span class="text-muted">Developer : </span> <a href="https://maxedge.co.uk/" target="_blank" class="text-reset">Maxedge UK Ltd</a>.</p>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-sm-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                            <ul class="list-unstyled text-sm-end mb-0">
                                <li class="list-inline-item"><a href="javascript:void(0)"><img src="images/payments/american-ex.png" class="avatar avatar-ex-sm" title="American Express" alt=""></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)"><img src="images/payments/discover.png" class="avatar avatar-ex-sm" title="Discover" alt=""></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)"><img src="images/payments/master-card.png" class="avatar avatar-ex-sm" title="Master Card" alt=""></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)"><img src="images/payments/paypal.png" class="avatar avatar-ex-sm" title="Paypal" alt=""></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)"><img src="images/payments/visa.png" class="avatar avatar-ex-sm" title="Visa" alt=""></a></li>
                            </ul>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </div>
        </footer>
        <!--end footer-->
        <!-- Footer End -->

    </div>
    <!-- Back to top -->
    <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fs-5"><i data-feather="arrow-up" class="fea icon-sm icons align-middle"></i></a>
    <!-- Back to top -->
    <!-- javascript -->
    <script src="/js/app.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <!-- SLIDER -->
    <script src="/assets/js/tiny-slider.js "></script>
    <!-- Icons -->
    <script src="/assets/js/feather.min.js"></script>

    <!-- jquery -->
    <script src="/assets/js/jquery.min.js"></script>

    <!-- carousel -->
    <script src="/assets/vendor/carousel/owl.carousel.min.js"></script>
    <script src="/assets/js/plugins.init.js"></script>
    <!--Note: All init js like tiny slider, counter, countdown, maintenance, lightbox, gallery, swiper slider, aos animation etc.-->
    <script src="/assets/js/app.js"></script>
    <!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->
</body>

</html>