@extends("layouts.management")


@section("content")
<div class="page_header">
    <h3 class="text-dark">WORK DETAILS </h3>
</div>

<section class="section">
    <div class="container px-md-1">
        <div class="">
            <div class="card profile-header">
                <div class="body">
                    <div class="row py-3 px-3">
                        <div class="col-md-6 col-12">
                            <div class="profile-image p-2">
                                <h3>{{$userjob->Job->title}}</h3>
                                <a href="management/job/{{$userjob->Job->id}}">view job details</a><br>
                                <pay-user jobname="{{$userjob->Job->title}}" userjobid="{{$userjob->id}}" rate=" {{$userjob->Job->rate}}" jobid="{{$userjob->Job->id}}" username="{{$userjob->Worker->name}}" userid="{{$userjob->Worker->id}}" paymentmode="{{$userjob->Job->paymentMode}}"></pay-user>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="profile-image text-center">
                                <img src="/storage/{{$userjob->Worker->Profile->picture}}" alt="{{$userjob->Worker->name}}" class="my-2" /> <br>
                                <h4>{{$userjob->Worker->name}}</h4>
                                <a href=" /management/user/{{$userjob->Worker->id}}">View User</a>
                            </div>
                        </div>
                        <div class="col-12 my-5">
                            <h6>Transaction History</h6>
                            <table class="table table-striped" id="agentsTable">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($transactions as $transaction)
                                    <tr>
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
</section>
@endsection


@section("scripts")
<script>
    $(".nav-tabs").on('click', "li", function() {
        $(".tab").removeClass("active");
        var thisid = $(this).attr("data-toggle")

        $(".tab-content #" + thisid).addClass("active")

        $(".nav-tabs li a").removeClass("active")
        $("#" + thisid + " a").addClass("active")
        console.log(thisid);
    })
</script>
@endsection