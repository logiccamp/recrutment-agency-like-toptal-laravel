@extends("layouts.management")


@section("content")


<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6">
            <div class="card border-0 shadow rounded bg-white p-4 sticky-bar">
                <div class="mt-4">
                    <h4 class="title mb-3">
                        <h4 class="title text-dark mb-3"> {{$job->title}} </h4>
                    </h4>
                    <p class="para-desc text-muted">{{ substr($job->description, 0, 100)}}</p>
                    <ul class="list-unstyled mb-0">
                        <li class="list-inline-item mb-0 text-primary me-3"><span class="iconify" data-icon="akar-icons:location"></span>{{$job->location}}</li>
                        <li class="list-inline-item mb-0 text-primary"><span class="iconify" data-icon="carbon:dashboard-reference"></span>{{$job->Category->title}}</li>
                    </ul>
                </div>
            </div>
        </div>
        <!--end col-->

        <div class="col-lg-8">
            <div class="sidebar border-0">
                <h3 class="mb-0">Job Information</h3>
            </div>

            <div class="mt-4">
                <h5>Job Description: </h5>
                <div class="text-muted">
                    <p>{{$job->description}}</p>
                </div>



                <div class="row gx-3 gy-3">
                    <div class="col-lg-4 col-md-6">
                        <small>Location</small>
                        <p>{{$job->location}}</p>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <small>Company</small>
                        <p>{{$job->company}}</p>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <small>Payment Mode</small>
                        <p>{{$job->paymentMode}}</p>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <small>Rate</small>
                        <p>{{$job->rate}}</p>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <small>Duration</small>
                        <p>{{$job->duration}}</p>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <small>Category</small>
                        <p>{{$job->Category->title}}</p>
                    </div>

                    <!-- title, category_id, duration, rate, description, location, company, paymentMode -->
                </div>

                <div class="mt-4 d-flex justify-content-between">
                    <a href="/management/job/edit/{{$job->id}}" class="btn btn-outline-primary">Update <i class="mdi mdi-send"></i></a>
                    <a href="/management/job/delete/{{$job->id}}" class="btn btn-outline-danger">Delete <i class="mdi mdi-send"></i></a>
                </div>
            </div>

        </div>
        <!--end col-->
    </div>
    <!--end row-->
</div>
<!--end container-->


@endsection