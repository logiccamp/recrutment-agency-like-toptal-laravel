@extends("layouts.management")


@section("content")
<div class="page_header">
    <h3 class="text-dark">{{$page}} Candidates</h3>
</div>

<section>
    <div class="card p-2">
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
</section>

@endsection