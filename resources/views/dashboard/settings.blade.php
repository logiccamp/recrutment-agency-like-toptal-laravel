@extends("layouts.dashboard")


@section("content")
<div class="container-fluid" id="mainPage">

    <div>
        <p class="text-muted">Welcome back, {{auth()->user()->first_name}}</p>
        <h6 class="fs-11">Settings</h6>
    </div>
    <div class="my-5">
        <div class="lg-3">
            <div class="row gy-3 p-2">
                <div class="col-lg-4 p-2">
                    <div class="card ">

                        <form action="{{route('dashboardPasswordReset')}}" method="POST" class="form row gy-3 p-3">
                            @csrf
                            @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                            @endif
                            <h6>Change Password</h6>
                            <p class="text-danger">Enter your email address to continue</p>
                            <div class="form-group col-12">
                                <label for="">Email address</label>
                                <input type="email" name="email" class="form-control">
                                @if (Session::has('errors'))
                                <div class="text-danger">Email field is required</div>
                                @endif

                                @if (Session::has('emailErr'))

                                <strong class="text-danger">{{ Session::get('emailErr') }}</strong>

                                @endif
                            </div>

                            <div class="form-group col-6">
                                <button class="btn btn-primary text-white">Continue</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-4 p-2">
                    <div class="card ">
                        <div class="profile_image d-flex align-items-center flex-column">
                            <div class="image_preview" style="width: 200px; height: 200px; border: 1px dotted gray;">
                                <img src="/storage/{{$user->Profile->picture}}" alt="" class="img-fluid" style="width: 200px; height: 200px;">
                            </div>

                            <form action="" class="form my-2">
                                <label for="profile_pic" class="change_profile_label d-flex align-items-center justify-content-center rounded shadow-sm py-2 px-3">
                                    <span class="iconify" data-icon="ant-design:camera-filled" data-height="24" data-width="24" style="color: #51585e"></span>
                                    <span class="text">Change</span>
                                </label>
                                <input type="file" id="profile_pic" hidden>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection