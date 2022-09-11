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
                            <th>Total Jobs</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $job)
                        <tr>
                            <td>{{ $job->title }}</td>
                            <td>{{ count($job->Jobs) }}</td>
                            <td> <img src="/storage/{{ $job->image_link }}" height="80" width="80" style="object-fit: cover" /></td>
                            <td style="width: 100px" align="center">
                                <a href="/management/job-category/{{$job->slug}}" class="btn btn-primary mb-2">Edit</a>
                                <a onclick="deleteController('{{$job->slug}}')" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

@endsection


@section("scripts")
<script>
    function deleteController(slug) {
        if (confirm("Are you sure to delete \n All jobs and assigned jobs related to this will be deleted")) {
            window.location.assign(`/management/job-categories/destroy/${slug}`)
        }
    }
</script>

@endsection