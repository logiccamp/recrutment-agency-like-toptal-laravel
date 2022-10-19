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
                    <h1 class="fw-900 text-uppercase text-white main-title">About Us</h1>
                </div>
            </div>
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!--end section-->
<!-- Hero End -->

<section class="section who-we-are">
    <div class="container">
        <div class="row">
            <div class="col-12 ">
                <div class="section-title mb-0 pb-2">
                    <p class="text-muted mx-auto mb-0">Who We Are</p>
                </div>
            </div>
            <!--end col-->

            <div class="col-lg-6">
                <h2 class="heading mb-4">SMARTFORCE RECRUITMENT AGENCY</h2>
                <p class="para-desc text-muted">Our target is to serve as a bridge between potential job seekers and
                    companies or organization using our vast years of HR consulting
                    experience and business support to enhance productivity of the
                    organization and self development of the individuals. <br>
                    With the competitive market of job seekers, finding the perfect job is a key
                    step in getting the best. Smart force is working with over 30 employees and
                    over 10 companies in the United Kingdom. We have the exclusive network
                    to merge companies and organization with the best applicants. <br>
                    Carving a niche for ourselves has been one of our pivotal points, as we
                    work with demands from companies in the UK to recruit qualified
                    candidates for them in the Security sector, health Care Sector, Janitors, etc.</p>
            </div>

            <div class="col-lg-6 agent_img">
                <img src="/assets/images/agent.jpg" class="img-fluid" alt="">
            </div>
        </div>

    </div>
    <!--end container-->
</section>



<section>
    <div id="map">
        <!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
-->
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.229781419312!2d-0.08285047571919431!3d51.509000262816066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876034e9b040e8d%3A0x68ee8a2535f08ec4!2s12%20Tower%20Hill%2C%20London%20EC3N%204EE%2C%20UK!5e0!3m2!1sen!2sng!4v1666210349341!5m2!1sen!2sng" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    </div>
</section>

@endSection("mainSection")