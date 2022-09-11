@extends("layouts.process")
@section("title")
<title>Upload Picture - INFO</title>
@endsection


@section("content")
<div class="my-4"> </div>
<section class="section who-we-are">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="section-title mb-0 pb-2 d-flex justify-content-between w-100">
                    <p class="text-muted text-start mb-0">Step 3</p>
                    <a href="" class="text-muted mb-0">Go back</a>
                </div>
                <div class="">
                    <h2 class="fs-5 mb-4">Hi {{auth()->user()->first_name}} — Please upload a Profile Picture...</h2>
                </div>

                <upload-photo></upload-photo>

            </div>
            <!--end col-->

            <div class="col-lg-5">

            </div>

        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
@endSection