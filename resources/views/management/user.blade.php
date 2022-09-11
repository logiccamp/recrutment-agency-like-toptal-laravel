@extends("layouts.management")


@section("content")
<div class="page_header">
    <h3 class="text-dark">Candidate Profile</h3>
</div>

<section class="section">

    <div class="container">
        <div class="row clearfix my-4">
            <div class="col-xl-6 col-lg-6 col-md-12">
                <div class="card profile-header">
                    <div class="body">
                        <div class="row p-2 py-3">
                            @if ($user->Profile != null)
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="profile-image float-md-right"> <img src="/storage/{{$user->Profile->picture}}" alt=""> </div>
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


            <div class="col-xl-6 col-lg-5 col-md-12">
                <div class="row clearfix">
                    @if ($user->Profile)
                    <div class="col-md-12">
                        <div class="card p-2">
                            <ul class="nav nav-tabs">
                                <li data-toggle="about" id="about" class="nav-item"><a class="nav-link color_black active" href="#about">About</a></li>
                                @if ($user->status)
                                <li data-toggle="interest" id="interest" class="nav-item"><a class="nav-link color_black" href="#interest">Interests</a></li>
                                @endif
                                <li data-toggle="cv" id="cv" class="nav-item"><a class="nav-link color_black" href="#cv">CV</a></li>
                            </ul>
                            <div class="tab-content py-3">
                                <div class="tab tab-panel body active" id="about">
                                    <small class="text-muted">Email address: </small>
                                    <p class="color_black">{{$user->email}}</p>
                                    <hr>

                                    <small class="text-muted">Mobile: </small>
                                    <p class="color_black">{{$user->Profile->mobile}}</p>
                                    <hr>
                                    <small class="text-muted">Birth Date: </small>
                                    <p class="mb-0 color_black"> {{$user->Profile->dob}}</p>
                                    <hr>

                                    <small class="text-muted">Willing to Relocate: </small>
                                    <p class="mb-0 color_black"> {{$user->Profile->toRelocate}}</p>
                                    <hr>
                                </div>

                                <div class="tab tab-panel body" id="cv">
                                    <small class="text-muted">Dowload CV: </small>
                                    <p>
                                        <a target="_blank" class="color_black" href="/storage/{{$user->Profile->cv}}">click here</a>
                                    </p>
                                    <hr>
                                </div>


                                <div class="tab tab-panel body" id="interest">
                                    <small class="text-muted">Primary Interest: </small>
                                    <h6>{{$user->Profile->Pinterest->title}}</h6>

                                    <p class="m-0">
                                        <small>Years of Experience : </small>
                                        <small>{{$user->Profile->primaryExperience}}</small>
                                    </p>
                                    <p>
                                        <a class="color_black" href="/management/assign/job/{{$user->id}}/{{$user->Profile->primary_id}}">Assign Job</a>
                                    </p>
                                    <hr>

                                    <small class="text-muted">Secondary Interest: </small>
                                    @if ($user->Profile->Sinterest)
                                    <h6>{{$user->Profile->Sinterest->title}}</h6>
                                    <p class="m-0">
                                        <small>Years of Experience : </small>
                                        <small>{{$user->Profile->secondaryExperience}}</small>
                                    </p>
                                    <p>
                                        <a class="color_black" href="/management/assign/job/{{$user->id}}/{{$user->Profile->secondary_id}}">Assign Job</a>
                                    </p>
                                    @endif
                                    <hr>

                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>

            </div>


        </div>
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