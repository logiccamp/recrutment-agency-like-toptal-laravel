@extends("layouts.management")


@section("content")
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card p-3 rounded">
                    <form action="{{route('addIndustry')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="header">
                            <h5 class="color_primary">Add New Industry </h5>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-12">

                                    @if (Session::has('success'))
                                    <div class="alert alert-success">
                                        Industry added successfully.... <a class="btn btn-link" href="/management/jobs">Go to jobs</a>
                                    </div>
                                    @endif

                                    <ul class="text-danger">
                                        @foreach ($errors->all() as $error)
                                        <li>{{$error}}</li>
                                        @endforeach
                                    </ul>

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input name="title" type="text" class="form-control">
                                            <label class="form-label">Title </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="file" class="form-control" name="image" id="category_image" accept=".jpg, .png, .jpeg">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <button class="btn btn-icon">ADD <span class="fa fa-arrow-right"></span></button>
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


@section("scripts")
<script>

</script>
@endsection