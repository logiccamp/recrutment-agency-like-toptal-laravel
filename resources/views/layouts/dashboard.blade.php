<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    @yield("title")
    <link rel="shortcut icon" href="/assets/images/favicon.ico">
    <!-- Bootstrap -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons -->
    <link href="/assets/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
    <link rel="stylesheet" href="/assets/vendor/carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/vendor/carousel/owl.theme.green.min.css">
    <link rel="stylesheet" href="/assets/simplebar.css">
    <!-- Slider -->
    <link rel="stylesheet" href="/assets/css/tiny-slider.css" />
    <link href="/assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/dashboard.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('agents/assets/css/app.min.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('agents/assets/css/style.css') }}"> -->
    <!-- Main Css -->
    <link href="/assets/css/colors/default.css" rel="stylesheet" id="color-opt">

</head>

<body style="width: 100%;">
    <!-- Loader -->
    <!-- <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div> -->
    <!-- Loader -->

    <div class="page-wrapper bg-light toggled">
        <div class="sidebar shadow-md bg-white">
            <div class="sidebar-header py-3 px-2 shadow-sm">
                <img src="/assets/images/logo.png" alt="" height="30">
            </div>

            <div class="sidebar-content">
                <ul class="sidebar-menu">
                    <li class="">
                        <a href="/dashboard" class="text-primary d-flex align-items-center">
                            <i class="iconify rounded shadow-sm bg-light bg-opacity-1 p-2 text-muted" data-width="34" data-icon="fe:home"></i>
                            <span class="hideContent">Dashboard</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="/myjobs" class="text-primary d-flex align-items-center">
                            <i class="iconify rounded shadow-sm bg-light bg-opacity-1 p-2 text-muted" data-width="34" data-icon="fe:diamond"></i>
                            <span class="hideContent">My Jobs</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="/wallet" class="text-primary d-flex align-items-center">
                            <i class="iconify rounded shadow-sm bg-light bg-opacity-1 p-2 text-muted" data-width="34" data-icon="fe:wallet"></i>
                            <span class="hideContent">Wallet</span>
                        </a>
                    </li>

                    <li class="">
                        <a href="/transactions" class="text-primary d-flex align-items-center">
                            <i class="iconify rounded shadow-sm bg-light bg-opacity-1 p-2 text-muted" data-width="34" data-icon="fe:wallet"></i>
                            <span class="hideContent">Transactions</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="/notifications" class="text-primary d-flex align-items-center">
                            <i class="iconify rounded shadow-sm bg-light bg-opacity-1 p-2 text-muted" data-width="34" data-icon="clarity:notification-line"></i>
                            <span class="hideContent">Notification</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="/profile" class="text-primary d-flex align-items-center">
                            <i class="iconify rounded shadow-sm bg-light bg-opacity-1 p-2 text-muted" data-width="34" data-icon="fe:user"></i>
                            <span class="hideContent">Profile</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="/settings" class="text-primary d-flex align-items-center">
                            <i class="iconify rounded shadow-sm bg-light bg-opacity-1 p-2 text-muted" data-width="34" data-icon="ep:setting"></i>
                            <span class="hideContent">Account Settings</span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>

        <main class="main" style="overflow: scroll;">
            <header class="bg-white py-3 w-100 px-3 shadow-sm">
                <a class="hideContent2" onclick="toggleSidebar()" href="#?">
                    <span class="iconify rounded shadow-sm bg-light bg-opacity-1 p-2 text-muted" data-width="30" data-icon="ant-design:menu-unfold-outlined"></span>
                </a>

                <a class="hideContent" href="#?" onclick="toggleSidebar()">
                    <span class="iconify rounded shadow-sm bg-light bg-opacity-1 p-2 text-muted" data-width="30" data-icon="ci:close-big"></span>
                </a>
            </header>

            <div class="main-wrapper">
                <div class="main-content py-3">
                    @yield("content")
                </div>
                <!-- Footer Start -->
                <!-- <footer class="footer position-fixed bottom-0 shadow-sm text-center py-1">
                    <div class="container text-center">
                        <p class="mb-0">© 2022 Smart Force <span class="text-muted">Developer : </span> <a href="https://maxedge.co.uk/" target="_blank" class="text-reset">Maxedge UK Ltd</a>.</p>
                    </div>
                    
                </footer> -->
                <!--end footer-->
                <!-- Footer End -->

            </div>

        </main>


    </div>


    @yield("mainSection")


    <!-- Back to top -->
    <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fs-5"><i data-feather="arrow-up" class="fea icon-sm icons align-middle"></i></a>
    <!-- Back to top -->
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <!-- javascript -->
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <!-- SLIDER -->
    <script src="/assets/js/tiny-slider.js "></script>
    <!-- Icons -->
    <script src="/assets/js/feather.min.js"></script>

    <!-- jquery -->
    <script src="/assets/js/jquery.min.js"></script>

    <!-- carousel -->
    <script src="/assets/js/plugins.init.js"></script>
    <!--Note: All init js like tiny slider, counter, countdown, maintenance, lightbox, gallery, swiper slider, aos animation etc.-->
    <script src="/assets/js/app.js"></script>
    <script src="/assets/dashboard/js/app.js"></script>
    <!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->
    <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>

</body>

</html>