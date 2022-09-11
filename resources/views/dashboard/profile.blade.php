@extends("layouts.dashboard")


@section("content")
<div class="container-fluid p-0" id="mainPage">
    <div>
        <p class="text-muted">Welcome back, {{auth()->user()->first_name}}</p>
        <h6 class="fs-11">Profile</h6>
    </div>

    <div class="containcer">
        <div class="row clearfix my-4">
            <div class="col-xl-6 col-lg-6 col-md-12">
                <div class="shadow-md rounded bg-white profile-header">
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
                            </div>
                        </div>
                    </div>


                    <div class="tab tab-panel body active p-2" id="about">
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
                </div>
            </div>


            <div class="col-xl-6 col-lg-5 col-md-12">
                <div class="row clearfix">
                    @if ($user->Profile)
                    <div class="col-md-12">
                        <div class="card p-2 px-1">
                            <div class="tab-codtent py-3">
                                <div class="tab tab-panel body" id="cv">
                                    <small class="text-muted">Dowload CV: </small>
                                    <p>
                                        <a target="_blank" class="color_black" href="/storage/{{$user->Profile->cv}}">click here</a>
                                    </p>
                                    <hr>

                                    <small class="text-muted">Primary Interest: </small>
                                    <h6>{{$user->Profile->Pinterest->title}}</h6>

                                    <p class="m-0">
                                        <small>Years of Experience : </small>
                                        <small>{{$user->Profile->primaryExperience}}</small>
                                    </p>

                                    <hr>

                                    <small class="text-muted">Secondary Interest: </small>
                                    @if ($user->Profile->Sinterest)
                                    <h6>{{$user->Profile->Sinterest->title}}</h6>
                                    <p class="m-0">
                                        <small>Years of Experience : </small>
                                        <small>{{$user->Profile->secondaryExperience}}</small>
                                    </p>
                                    @endif
                                    <hr>
                                </div>


                                <div class="tab tab-panel body" id="interest">


                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>

            </div>


        </div>
    </div>

</div>
@endsection