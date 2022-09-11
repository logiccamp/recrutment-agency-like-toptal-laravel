@extends("layouts.app")
<!-- Hero Start -->
@section("titleSection")
<title>Home - Smart Force</title>
@endSection("titleSection")


@section("mainSection")
<section class="bg-half-170 d-table w-100" id="" style="height: 50vh; overflow: hidden">
    <div class="mt-sm-0 pt-sm-0 clip no-clip" style="position: absolute; top: 0; height: 50vh; width: 100%; z-index: 0">
        <div class="owl-carousel">
            <div class="item">
                <img src="/assets/images/slider/1.jpeg" style="height: 100vh; object-fit: cover; " alt="">
            </div>
            <div class="item">
                <img src="/assets/images/slider/2.webp" style="height: 100vh; object-fit: cover; " alt="">
            </div>
            <div class="item">
                <img src="/assets/images/slider/3.jpeg" style="height: 100vh; object-fit: cover; " alt="">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-7">
                <div class="title-heading title-heading2 mt-4 p-3 shadow-md rounded " style="width: fit-content">
                    <h1 class="fw-900 text-uppercase text-white main-title">Industries</h1>
                </div>
            </div>
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!--end section-->
<!-- Hero End -->



<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h4 class="title mb-4">Popular Categories</h4>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

        <div class="row">
            @foreach($categories as $category)
            <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">

                <div class="card categories overflow-hidden rounded shadow border-0">
                    <img style="height: 210px; object-fit:cover" src="storage/{{$category->image_link}}" class="img-fluid" alt="{{$category->title}}">
                    <!-- <img src="/assets/images/work/1.jpg" class="img-fluid" alt="{{$category->title}}"> -->
                    <div class="card-body">
                        <ul class="list-unstyled d-flex justify-content-between mb-0">
                            <li><a href="javascript:void(0)" class="title h6 text-dark">{{$category->title}}</a></li>
                            <li class="h6 mb-0 jobs">{{$category->job_count}} Jobs</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--end col-->
            @endforeach

        </div>
        <!--end row-->

    </div>
    <!--end container-->

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h4 class="title mb-4">Join our staff list</h4>
                    <p class="text-muted para-desc mx-auto mb-0">How to get started? You can join our workers list with the following steps.</p>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

        <div class="row">
            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="card how-it-works overflow-hidden rounded shadow border-0 position-relative">
                    <img src="/assets/images/agent3.jpg" class="img-fluid" alt="">
                    <div class="card-body position-absolute bottom-0 bg-primary w-100 h-fit-content">
                        <a href="/register" class="d-flex p-0 m-0 justify-content-between text-white">
                            <span>Sign Up</span>
                            <span>></span>
                        </a>
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="card how-it-works overflow-hidden rounded shadow border-0 position-relative">
                    <img src="/assets/images/agent2.jpg" class="img-fluid" alt="">
                    <div class="card-body position-absolute bottom-0 bg-primary w-100 h-fit-content">
                        <a href="/dashboard" class="d-flex p-0 m-0 justify-content-between text-white">
                            <span>Create Profile</span>
                            <span>></span>
                        </a>
                    </div>
                </div>
            </div>
            <!--end col-->


            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="card how-it-works overflow-hidden rounded shadow border-0 position-relative">
                    <img src="/assets/images/cv.jpg" class="img-fluid" alt="">
                    <div class="card-body position-absolute bottom-0 bg-primary bg-opacity-0 w-100 h-fit-content">
                        <a href="/dashboard" class="d-flex p-0 m-0 justify-content-between text-white">
                            <span>Upload CV</span>
                            <span>></span>
                        </a>
                    </div>
                </div>
            </div>
            <!--end col-->

        </div>
        <!--end row-->
    </div>
</section>


<!-- Start -->
<section>
    <div id="map">
        <!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
-->
        <iframe src="https://maps.google.com/maps?q=Av.+Lúcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
</section>

@endSection("mainSection")