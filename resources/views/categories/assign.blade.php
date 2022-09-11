@extends("layouts.management")


@section("content")
<div class="page_header">
    <h3 class="text-dark">Assign Job</h3>
    <small>{{$category->title}}</small>
</div>

<section class="section">
    @if (Session::has('status'))
    <div class="alert alert-success">
        Job assigned successfully.... <a class="btn btn-link" href="/management/workers">Go to workers</a>
    </div>
    @endif
    <div class="container">
        <div class="row clearfix my-4">
            <div class="col-xl-6 col-lg-6 col-md-12">
                <div class="card profile-header">
                    <div class="body">
                        <div class="row p-2 py-3">


                            @if ($user->Profile != null)
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="profile-image float-md-right"> <img src="/storage/{{$user->Profile->picture}}" alt="">
                                </div>
                            </div>
                            @endif
                            <div class="col-lg-8 col-md-8 col-12">
                                <h4 class="mt-0 mb-0 text-uppercase color_black"><strong> {{$user->first_name}} {{$user->last_name}}</strong></h4>
                                <span class="job_post color_black">Candidate</span>
                                @if ($user->Profile != null)
                                <p class="m-0 color_black">{{$user->Profile->location}}</p>
                                @endif
                                <p class="color_black">{{$user->email}}</p>
                                <div class="d-flex">
                                    @if ($user->status == true)
                                    <form action="{{route('updateUserStatus', $user->id)}}" method="POST">
                                        @csrf
                                        <input hidden value="0" name="status" />
                                        <button class="btn filled-button bg-danger">Block</button>
                                    </form>
                                    @else
                                    <form action="{{route('updateUserStatus', $user->id)}}" method="POST">
                                        @csrf
                                        <input hidden value="1" name="status" />
                                        <button class="btn filled-button bg-danger">Approve</button>
                                    </form>
                                    @endif

                                    @if ($user->status == true)
                                    <button class="btn btn-link text-success">Active</button>
                                    @else
                                    <button class="btn btn-link text-warning">Pending Approval</button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4>All Jobs</h4>
                </div>
                <div class="card-body p-3">
                    <div class="table-responsive">
                        <table class="table table-striped" id="jobsTable">
                            <thead>
                                <tr>
                                    <th>Job ID</th>
                                    <th>Title</th>
                                    <th>Duration</th>
                                    <th>Location</th>
                                    <th>Company</th>
                                    <th>Rate</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($category->Jobs as $job)
                                <tr>
                                    <form action="{{route('assignJob', $user->id)}}" method="post">
                                        <td>{{ $job->id }}</td>
                                        <td>{{ $job->title }}</td>
                                        <td>{{ $job->duration }}</td>
                                        <td>{{ $job->location }}</td>
                                        <td>{{ $job->company }}</td>
                                        <td>{{ $job->rate }}/ {{$job->paymentMode}}</td>
                                        <td>
                                            <input type="date" required style="width: 100px" id="start_on" class="form-control" name="start_on">
                                        </td>
                                        <td>
                                            <input type="date" id="end_on" style="width: 100px" class="form-control" name="end_on" placeholder="End date">
                                        </td>
                                        @if ($job->location == $user->Profile->location || $user->isRelocate == "Yes")
                                        <td>
                                            @csrf
                                            <input type="text" name="job" value="{{$job->id}}" hidden>
                                            <button type="submit" class="btn filled-button">Assign</button>
                                        </td>
                                        @else
                                        <td>
                                            <a href="#?" class="btn btn-outline-danger disabled">Not Applicable</a>
                                        </td>
                                        @endif
                                    </form>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>

        </section>

    </div>
</section>
@endsection


@section("scripts")
<script>
    $(".nav-tabs").on('click', "li", function() {
        $(".tab").removeClass("active");
        var thisid = $(this).attr("data-toggle")

        $(".tab-content #" + thisid).addClass("active")

        $(".nav-tabs li a").removeClass("active")
        $("#" + thisid + " a").addClass("active")
        console.log(thisid);
    })
</script>
@endsection