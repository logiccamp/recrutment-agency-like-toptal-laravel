<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Account - Verification - Smart Force</title>
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
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>

    <!-- Hero Start -->
    <section class="bg-home d-flex align-items-center position-relative">
        <div class="bg-circle-gradiant2 w-100 position-absolute " style="height: 100%;"></div>
        <div class="bg-overlay bg-overlay-white"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-8">
                    <div class="rounded text-center mb-4">
                        <a href="/" class="btn btn-icon btn-primary">
                            <img src="/assets/images/logo.png" height="50" alt="">
                        </a>
                    </div>
                    <div class="card login-page bg-white shadow rounded border-0">
                        <div class="card-body">
                            <h5 class="fs-2 text-center">Confirm your Email</h5>
                            <p>Thank you creating an <strong>SmartForce</strong> account.</p>
                            <p>We sent an email with a verification link to <strong>{{auth()->user()->email}}</strong>. If you didn’t receive the email, check your spam folder, <a href="#?" onclick="window.location.reload()">click here</a> to resend it.</p>
                            <p>This link will be active for 30 min from the time this email was sent.</p>
                        </div>
                    </div>
                    <!---->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- Hero End -->


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


    <!-- Back to top -->
    <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fs-5"><i data-feather="arrow-up" class="fea icon-sm icons align-middle"></i></a>
    <!-- Back to top -->
    <!-- javascript -->
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