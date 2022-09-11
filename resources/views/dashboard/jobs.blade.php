@extends("layouts.dashboard")


@section("content")
<div class="container-fluid p-md-2 p-sm-0" id="mainPage">
    <div>
        <p class="text-muted">Welcome back, {{auth()->user()->first_name}}</p>
        <h6 class="fs-11">My Jobs</h6>
    </div>

    <div class="containerd">
        <div class="row">
            @foreach ($userjobs as $userjob)
            <div class="col-lg-4 my-5">
                <a href="/myjob/{{$userjob->id}}" class="features feature-primary d-flex justify-content-between align-items-center bg-white rounded shadow p-3">
                    <div class="d-flex align-items-center jobs_flex">
                        <div class="icon text-center rounded-pill">
                            <i class="uil uil-fire fs-4 mb-0"></i>
                        </div>
                        <div class="flex-1 ms-3">
                            <h3 class="mb-2 fw-bold text-muted">{{$userjob->job->title}}</h3>
                            <p class="text-muted">
                                {{strlen($userjob->job->description) > 100 ? substr($userjob->job->description, 0, 100).'...' : $userjob->job->description}}
                            </p>
                            <div class="row align-items-center">
                                <div class="col-md-6 d-flex align-items-center">
                                    <p>
                                        <i class="iconify rounded shadow-sm bg-light bg-opacity-1 p-2 text-muted" data-width="34" data-icon="carbon:location-company" style="margin-right: 10px;"></i>
                                    </p>
                                    <p class="fs-6 text-dark fw-bold mb-0">
                                        {{$userjob->job->company}}
                                    </p>
                                </div>
                                <div class="col-md-6 fw-bold">
                                    <i class="iconify rounded shadow-sm bg-light bg-opacity-1 p-2 text-muted" data-width="34" data-icon="ic:outline-attach-money"></i>
                                    <small class="fs-6 text-dark fw-bold mb-0">$ {{$userjob->job->rate}} / {{$userjob->job->paymentMode}}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <!--end col-->

            @endforeach

        </div>
    </div>
</div>

</div>
@endsection