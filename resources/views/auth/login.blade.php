@extends("layouts.auth")

@section('title')
<title>Login - SmartForce</title>
@endSection

@section("main")
<!-- Hero Start -->
<section class="bg-home d-flex align-items-center position-relative">
    <div class="bg-circle-gradiant2 w-100 position-absolute " style="height: 100%;"></div>
    <div class="bg-overlay bg-overlay-white"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-8">
                <div class="rounded text-center mb-4">
                    <a href="/" class="btn btn-icon btn-primary">
                        <img src="assets/images/logo.png" height="50" alt="">
                    </a>
                </div>
                <div class="card login-page bg-white shadow rounded border-0">
                    <div class="card-body">
                        <h4 class="card-title text-center">Login</h4>
                        <form class="login-form mt-4" method="POST" action="{{route('loginUser')}}">
                            @csrf
                            @if (Session::has('errors'))
                            <ul class="text-danger">
                                <li>All fields are required</li>
                            </ul>
                            @endif


                            @if (Session::has('message'))
                            <ul class="text-danger">
                                <li>{{Session::get('message')}}</li>
                            </ul>
                            @endif
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="form-label">Your Email <span class="text-danger">*</span></label>
                                        <div class="form-icon position-relative">
                                            <i data-feather="user" class="fea icon-sm icons"></i>
                                            <input type="email" name="email" class="form-control ps-5" placeholder="Email" name="email" required="">
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->

                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="form-label">Password <span class="text-danger">*</span></label>
                                        <div class="form-icon position-relative">
                                            <i data-feather="key" class="fea icon-sm icons"></i>
                                            <input name="password" type="password" class="form-control ps-5" placeholder="Password" required="">
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->

                                <div class="col-lg-12">
                                    <div class="d-flex justify-content-between">
                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">Remember me</label>
                                            </div>
                                        </div>
                                        <p class="forgot-pass mb-0"><a href="/forgot-password" class="text-dark fw-bold">Forgot password ?</a></p>
                                    </div>
                                </div>
                                <!--end col-->

                                <div class="col-lg-12 mb-0">
                                    <div class="d-grid">
                                        <button class="btn btn-primary">Sign in</button>
                                    </div>
                                </div>
                                <!--end col-->

                                <div class="col-lg-12 mt-4 text-center d-none">
                                    <h6>Or Login With</h6>
                                    <div class="row">
                                        <div class="col-6 mt-3">
                                            <div class="d-grid">
                                                <a href="javascript:void(0)" class="btn btn-light"><i class="mdi mdi-facebook text-primary"></i> Facebook</a>
                                            </div>
                                        </div>
                                        <!--end col-->

                                        <div class="col-6 mt-3">
                                            <div class="d-grid">
                                                <a href="javascript:void(0)" class="btn btn-light"><i class="mdi mdi-google text-danger"></i> Google</a>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                </div>
                                <!--end col-->

                                <div class="col-12 text-center">
                                    <p class="mb-0 mt-3"><small class="text-dark me-2">Don't have an account ?</small> <a href="/register" class="text-dark fw-bold">Sign Up</a></p>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </form>
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
@endSection