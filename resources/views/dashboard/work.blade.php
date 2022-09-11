@extends("layouts.dashboard")


@section("content")
<div class="container-fluid p-md-2 p-sm-0" id="mainPage" >
    <div>
        <p class="text-muted">Welcome back, {{auth()->user()->first_name}}</p>
        <h6 class="fs-11">Job Details</h6>
    </div>


    <div class="my-5">
        <div class="card shadow profile-header">
            <div class="body" style="width: 100%; max-width: 1300px; margin: 0 auto;">
                <div class="row py-3 px-3">
                    <div class="col-md-6 col-12">
                        <div class="profile-image p-2">
                            <h3>{{$userjob->Job->title}}</h3>
                            <div class="my-2">
                                <p> Rate: <strong>$ {{$userjob->job->rate}} / {{$userjob->job->paymentMode}}</strong></p>


                                <h6 class="my-2 mt-4">Description</h6>
                                <div class="shadow-sm rounded p-2">
                                    <h3 class="fs-5">
                                        {{$userjob->job->description}}
                                    </h3>
                                </div>

                                <h6 class="my-2 mt-4">Company</h6>
                                <div class="shadow-sm rounded p-2">
                                    <h3 class="fs-5">
                                        {{$userjob->job->company}}
                                    </h3>
                                </div>

                                <h6 class="my-2 mt-4">Location</h6>
                                <div class="shadow-sm rounded p-2">
                                    <h3 class="fs-5">
                                        {{$userjob->job->location}}
                                    </h3>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 ">
                        <div class="d-flex justify-content-between align-items-center">
                            <h6 class="my-3">Transaction History</h6>
                            <a href="#?" class="btn btn-primary">$ {{$total}}</a>
                        </div>
                        <table class="table table-striped" id="agentsTable">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($transactions as $transaction)
                                <tr class="py-2">
                                    <td>{{ $transaction->date }}</td>
                                    <td>&#163;{{ $transaction->amount }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


@endsection