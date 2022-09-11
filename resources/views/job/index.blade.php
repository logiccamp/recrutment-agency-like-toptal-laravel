@extends("layouts.management")


@section("content")
<div class="page_header">
    <h3 class="text-dark">All Jobs</h3>
    <a class="btn btn-link text-dark" href="/management/job/add">Add</a>
</div>

<section>
    <div class="card p-2">

        <div class="card-body p-3">
            <div class="table-responsive">
                <table class="table table-striped" id="jobsTable">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Duration</th>
                            <th>Payment Mode</th>
                            <th>Rate</th>
                            <th>Company</th>
                            <th>Location</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jobs as $job)
                        <tr>
                            <td>{{ $job->title }}</td>
                            <td>{{ $job->Category->title }}</td>
                            <td>{{ $job->duration }}</td>
                            <td>{{ $job->paymentMode }}</td>
                            <td>{{ $job->rate }}</td>
                            <td>{{ $job->company }}</td>
                            <td>{{ $job->location }}</td>

                            <td><a href="/management/job/{{$job->id}}" class="btn btn-success">View</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

@endsection