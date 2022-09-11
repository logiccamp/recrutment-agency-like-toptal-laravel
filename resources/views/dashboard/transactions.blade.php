@extends("layouts.dashboard")


@section("content")
<div class="container-fluid p-md-2 p-sm-0" id="mainPage">
    <div>
        <p class="text-muted">Welcome back, {{auth()->user()->first_name}}</p>
        <h6 class="fs-11">Transaction History</h6>
    </div>


    <div class="my-5">
        <div class="card shadow profile-header">
            <div class="body" style="width: 100%; max-width: 1300px; margin: 0 auto;">
                <div class="d-flex justify-content-between align-items-center px-2">
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


@endsection