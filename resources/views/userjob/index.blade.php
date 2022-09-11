@extends("layouts.management")


@section("content")
<div class="page_header">
    <h3 class="text-dark">All Workers</h3>
    <a class="btn btn-link text-dark" href="/management/users/verified">Add</a>
</div>

<section>
    <div class="card p-2">

        <div class="card-body p-3">
            <div class="table-responsive">
                <table class="table table-striped" id="jobsTable">
                    <thead>
                        <tr>
                            <th></th>
                            <th>User</th>
                            <th>Phone</th>
                            <th>Job</th>
                            <th>Job Category</th>
                            <th>Company</th>
                            <th>Rate</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($userjob as $job)
                        <tr>
                            <td> <img src="/storage/{{$job->Worker->Profile->picture}}" height="100" width="100" style="object-fit: cover" /> </td>
                            <td>{{ $job->Worker->name }}</td>
                            <td>{{ $job->Worker->Profile->mobile }}</td>
                            <td>{{ $job->Job->title }}</td>
                            <td>{{ $job->Job->Category->title }}</td>
                            <td>{{ $job->Job->company }}</td>
                            <td>{{ $job->Job->rate }} / {{ $job->Job->paymentMode }} </td>
                            <td><a href="/management/assigned/{{$job->id}}" class="btn btn-success">View</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

@endsection