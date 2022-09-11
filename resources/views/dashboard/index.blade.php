@extends("layouts.dashboard")


@section("content")
<div class="container-fluid" id="mainPage">
    <div>
        <p class="text-muted">Welcome back, {{auth()->user()->first_name}}</p>
        <h6 class="fs-11">Dashboard</h6>
    </div>

    @if (auth()->user()->status != true)
    <div class="alert alert-danger position-relative w-100">
        Account verification/screening in progress, you will recieve a call or sms from us.
        <a href="#?" class="position-absolute right-0" style="right: 0; top: 4px">
            <i class="iconify rounded shadow-sm bg-light bg-opacity-1 p-2 text-muted" data-width="32" data-icon="ep:close-bold"></i>
        </a>
    </div>
    @endif

    <div class="row ">
        <div class="col-lg-3 mt-4">
            <a href="/myjobs" class="features feature-primary d-flex justify-content-between align-items-center bg-white rounded shadow p-3">
                <div class="d-flex align-items-center">
                    <div class="icon text-center rounded-pill">
                        <i class="uil uil-analysis fs-4 mb-0"></i>
                    </div>
                    <div class="flex-1 ms-3">
                        <h6 class="mb-0 text-muted">Jobs</h6>
                        <p class="fs-5 text-dark fw-bold mb-0"><span class="counters-value">{{count(auth()->user()->UserJobs)}}</span></p>
                    </div>
                </div>
            </a>
        </div>
        <!--end col-->

        <div class="col-lg-3 mt-4">
            <a href="/wallet" class="features feature-primary d-flex justify-content-between align-items-center bg-white rounded shadow p-3">
                <div class="d-flex align-items-center">
                    <div class="icon text-center rounded-pill">
                        <i class="uil uil-usd-circle fs-4 mb-0"></i>
                    </div>
                    <div class="flex-1 ms-3">
                        <h6 class="mb-0 text-muted">Wallet</h6>
                        <p class="fs-5 text-dark fw-bold mb-0">$<span class="counter-valued">{{auth()->user()->wallet}}</span></p>
                    </div>
                </div>
            </a>
        </div>
        <!--end col-->

        <div class="col-lg-3 mt-4">
            <a href="/transactions" class="features feature-primary d-flex justify-content-between align-items-center bg-white rounded shadow p-3">
                <div class="d-flex align-items-center">
                    <div class="icon text-center rounded-pill">
                        <i class="uil uil-usd-circle fs-4 mb-0"></i>
                    </div>
                    <div class="flex-1 ms-3">
                        <h6 class="mb-0 text-muted">Transactions</h6>
                        <p class="fs-5 text-dark fw-bold mb-0"><span class="counter-valued">View</span></p>
                    </div>
                </div>
            </a>
        </div>
        <!--end col-->

        <div class="col-lg-3 mt-4">
            <a href="/profile" class="features feature-primary d-flex justify-content-between align-items-center bg-white rounded shadow p-3">
                <div class="d-flex align-items-center">
                    <div class="icon text-center rounded-pill">
                        <i class="uil uil-user fs-4 mb-0"></i>
                    </div>
                    <div class="flex-1 ms-3">
                        <h6 class="mb-0 text-muted">Profile</h6>
                        <p class="fs-5 text-dark fw-bold mb-0">view</p>
                    </div>
                </div>
            </a>
        </div>
        <!--end col-->

        <div class="col-lg-3 mt-4">
            <a href="/notifications" class="features feature-primary d-flex justify-content-between align-items-center bg-white rounded shadow p-3">
                <div class="d-flex align-items-center">
                    <div class="icon text-center rounded-pill">
                        <i class="uil uil-bell fs-4 mb-0"></i>
                    </div>
                    <div class="flex-1 ms-3">
                        <h6 class="mb-0 text-muted">Notifications</h6>
                        <p class="fs-5 text-dark fw-bold mb-0"><span class="counter-value">3</span></p>
                    </div>
                </div>
            </a>
        </div>
        <!--end col-->

        <div class="col-lg-3 mt-4">
            <a href="/settings" class="features feature-primary d-flex justify-content-between align-items-center bg-white rounded shadow p-3">
                <div class="d-flex align-items-center">
                    <div class="icon text-center rounded-pill">
                        <i class="uil uil-setting fs-4 mb-0"></i>
                    </div>
                    <div class="flex-1 ms-3">
                        <h6 class="mb-0 text-muted">Settings</h6>
                        <p class="fs-5 text-dark fw-bold mb-0">view</p>
                    </div>
                </div>
            </a>
        </div>
        <!--end col-->
    </div>
    <!--end row-->

    @if(count($userjobs) > 0)
    <div class="row">

        <div class="col-lg-4 my-5">
            <h6 class="fs-11">Current Job</h6>
            <a href="#!" class="features feature-primary d-flex justify-content-between align-items-center bg-white rounded shadow p-3">
                <div class="d-flex align-items-center">
                    <div class="icon text-center rounded-pill">
                        <i class="uil uil-fire fs-4 mb-0"></i>
                    </div>
                    <div class="flex-1 ms-3">
                        <h6 class="mb-0 text-muted">{{$userjobs[0]->job->title}}</h6>
                        <p class="text-muted">
                            <small>
                                {{strlen($userjobs[0]->job->description) > 100 ? substr($userjobs[0]->job->description, 0, 100).'...' : $userjobs[0]->job->description}}
                            </small>
                        </p>
                        <div class="row">
                            <div class="col-12 d-flex">
                                <i class="iconify rounded shadow-sm bg-light bg-opacity-1 p-2 text-muted" data-width="34" data-icon="carbon:location-company" style="margin-right: 10px;"></i>
                                <p class="fs-6 text-dark fw-bold mb-0">
                                    {{$userjobs[0]->job->company}}
                                </p>
                            </div>
                            <div class="col-12 fw-bold">
                                <i class="iconify rounded shadow-sm bg-light bg-opacity-1 p-2 text-muted" data-width="34" data-icon="ic:outline-attach-money"></i>
                                <small class="fs-6 text-dark fw-bold mb-0">$ {{$userjobs[0]->job->rate}} / {{$userjobs[0]->job->paymentMode}}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <!--end col-->

    </div>
    @endif


</div>
@endsection