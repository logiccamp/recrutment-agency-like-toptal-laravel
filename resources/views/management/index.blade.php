@extends("layouts.management")


@section("content")


<section>
    <div class="row ">
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                        <div class="row ">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                <div class="card-content">
                                    <h5 class="font-15">All Users</h5>
                                    <h2 class="mb-3 font-18">{{ count($users)}}</h2>
                                    <!-- <p class="mb-0"><span class="col-green">10%</span> Increase</p> -->
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                <div class="banner-img">
                                    <img class="p-3" style="height: 100px; width: 100px; object-fit: contain;" src="/admin/assets/img/banner/1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                        <div class="row ">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                <div class="card-content">
                                    <h5 class="font-15">Job Categories</h5>
                                    <h2 class="mb-3 font-18">{{count($categories)}}</h2>
                                    <!-- <p class="mb-0"><span class="col-orange">09%</span> Decrease</p> -->
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                <div class="banner-img">
                                    <img class="p-2 img-fluid" style="height: 100px; width: 100px; object-fit: contain" src="/admin/assets/img/banner/6.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                        <div class="row ">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                <div class="card-content">
                                    <h5 class="font-15">Jobs</h5>
                                    <h2 class="mb-3 font-18">{{count($jobs)}}</h2>
                                    <!-- <p class="mb-0"><span class="col-green">18%</span> -->
                                    <!-- Increase</p> -->
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                <div class="banner-img">
                                    <img class="p-2 img-fluid" style="height: 100px; width: 100px; object-fit: contain" src="/admin/assets/img/banner/5.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                        <div class="row ">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                <div class="card-content">
                                    <h5 class="font-15">Settings</h5>

                                    <!-- <p class="mb-0"><span class="col-green">42%</span> Increase</p> -->
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                <div class="banner-img">
                                    <img class="p-2 img-fluid" style="height: 100px; width: 100px; object-fit: contain" src="/admin/assets/img/banner/4.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Candidates</h4>
                </div>
                <div class="card-body p-3">
                    <div class="table-responsive">
                        <table class="table table-striped" id="agentsTable">
                            <thead>
                                <tr>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Gender</th>
                                    <th>Interest</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($regcomplete as $user)
                                <tr>

                                    <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{$user->Profile->mobile}}</td>
                                    <td>{{$user->Profile->gender}}</td>
                                    <td>{{$user->Profile->Pinterest->title}}</td>
                                    <td>
                                        @if ($user->status == true)
                                        <span class="text-uppercase badge badge-success">Verified</span>
                                        @else
                                        <span class="text-uppercase badge badge-danger">Not Verified</span>
                                        @endif
                                    </td>
                                    <td><a href="/management/user/{{$user->id}}" class="btn btn-success">View</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>
@endsection