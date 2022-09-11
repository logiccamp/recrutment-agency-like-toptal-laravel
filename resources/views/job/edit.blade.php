@extends("layouts.management")


@section("content")
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card p-3 rounded">
                    <form action="{{route('updateJob', $job->id)}}" method="POST">
                        @csrf
                        <div class="header">
                            <h5 class="color_primary">Edit - {{$job->title}} </h5>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    @if (Session::has('status'))
                                    <div class="alert alert-success">
                                        Job Updated successfully.... <a class="btn btn-link" href="/management/jobs">Go to jobs</a>
                                    </div>
                                    @endif
                                    <ul class="text-danger">
                                        @foreach ($errors->all() as $error)
                                        <li>{{$error}}</li>
                                        @endforeach
                                    </ul>

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input name="title" type="text" value="{{$job->title}}" class="form-control">
                                            <label class="form-label">Job Title </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input name="location" type="text" class="form-control" value="{{$job->location}}">
                                            <label class="form-label">Location</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input name="company" type="text" class="form-control" value="{{$job->company}}">
                                            <label class="form-label">Company Name</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <select name="duration" id="" class="form-control form-select">
                                                <option selected value="{{$job->duration}}">{{$job->duration}}</option>
                                                <option value="">Please Select</option>
                                                <option value="Full time">Full time</option>
                                                <option value="Days">Days</option>
                                                <option value="Weeks">Weeks</option>
                                                <option value="Months">Months</option>
                                            </select>
                                            <label class="form-label">Duration</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group ">
                                                <div class="form-line">
                                                    <select name="paymentMode" type="text" class="form-control form-select">
                                                        <option selected value="{{$job->paymentMode}}">{{$job->paymentMode}}</option>
                                                        <option value="">Select</option>
                                                        <option value="Hour">Hourly</option>
                                                        <option value="Month">Monthly</option>
                                                    </select>
                                                    <label class="form-label">Payment Mode</label>
                                                </div>
                                            </div>
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input name="rate" value="{{$job->rate}}" type="text" class="form-control">
                                                    <label class="form-label">Rate &#163;</label>
                                                </div>
                                            </div>
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <select name="category_id" type="text" class="form-control form-select">
                                                        <option value="{{$job->category_id}}">{{$job->Category->title}}</option>
                                                        <option value="">Select</option>
                                                        @foreach ($categories as $cat)
                                                        <option value="{{$cat->id}}">{{$cat->title}}</option>
                                                        @endforeach
                                                    </select>
                                                    <label class="form-label">Category</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="description" style="height: 40vh !important;" class="form-control textarea" placeholder="Job Description">{{$job->description}}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <button class="btn btn-primary">Update <span class="fa fa-arrow-right"></span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    </div>
</section>
@endsection