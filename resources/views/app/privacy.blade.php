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
                    <h1 class="fw-900 text-uppercase text-white main-title">Privacy and Policy</h1>
                </div>
            </div>
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!--end section-->
<!-- Hero End -->

<section class="mb-1" style="margin-top: 100px !important;">
    <div class="container">
        <div class="row">
            <div class="col-12 ">
                <div class="section-title mb-0 pb-2">
                    <h3 class="mx-auto mb-0">Privacy and Policy</h3>
                </div>
            </div>
            <!--end col-->

            <div class="col-lg-12">
                <p>Welcome to Smart Force!
                    These terms and conditions outline the rules and regulations for the use of Smart Force's Website,
                    located at www.smartforce.com.
                    By accessing this website we assume you accept these terms and conditions. Do not continue to use
                    Smart Force if you do not agree to take all of the terms and conditions stated on this page.
                    The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer
                    Notice and all Agreements: "Client", "You" and "Your" refers to you, the person log on this website and
                    compliant to the Company’s terms and conditions. "The Company", "Ourselves", "We", "Our" and "Us",
                    refers to our Company. "Party", "Parties", or "Us", refers to both the Client and ourselves. All terms refer
                    to the offer, acceptance and consideration of payment necessary to undertake the process of our
                    assistance to the Client in the most appropriate manner for the express purpose of meeting the Client’s
                    needs in respect of provision of the Company’s stated services, in accordance with and subject to,
                    prevailing law of United Kingdom. Any use of the above terminology or other words in the singular,
                    plural, capitalization and/or he/she or they, are taken as interchangeable and therefore as referring to
                    same.</p>
            </div>

        </div>

    </div>
    <!--end container-->
</section>

<div class="my-5"></div>



@endSection("mainSection")