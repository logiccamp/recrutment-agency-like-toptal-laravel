@extends("layouts.dashboard")


@section("content")
<div class="container-fluid p-md-2 p-sm-0" id="mainPage">
    <div>
        <p class="text-muted">Welcome back, {{auth()->user()->first_name}}</p>
        <h6 class="fs-11">Wallet</h6>
    </div>

    <div class="container">
        <div class="row clearfix my-4 justify-content-center">
            <div class="col-xl-4 col-lg-4 col-md-5 ">
                @if (Session::has("errors"))
                <ul class="text-danger">
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
                @endif
                <div>
                    <div class="shadow-sm rounded bg-white profile-header p-2 py-4">
                        <div class="body text-center">
                            <h4 class="mt-0 mb-0 text-uppercase text-dark fs-1"><sup>$</sup><strong> {{$user->wallet}}</strong></h4>
                            <span class="text-danger">Next pay day : 27 - {{date('m')}} - {{date('Y')}}</span>
                        </div>
                    </div>
                    <div class="text-center mt-2">
                        <a href="/transactions" class="btn btn-outline-primary">Transactions</a>
                    </div>
                </div>

                <div class="my-5">
                    <form action="{{route('addUserAccount')}}" method="post">
                        @csrf
                        <input type="text" hidden name="action" value="{{$user->Account != null ? 'update' : 'fresh'}}">
                        <div class="form-group my-2">
                            <label for="bank_name" class="control-label">Bank Name</label>
                            <input value="{{$user->Account != null ? $user->Account->bank_name : ''}}" type="text" class="form-control" id="bank_name" name="bank_name">
                        </div>

                        <div class="form-group my-2">
                            <label for="account_name" class="control-label">Account Name</label>
                            <input type="text" value="{{$user->Account != null ? $user->Account->account_name : ''}}" class="form-control" id="account_name" name="account_name">
                        </div>

                        <div class="form-group my-2">
                            <label for="account_number" class="control-label">Account Number</label>
                            <input type="text" value="{{$user->Account != null ? $user->Account->account_number : ''}}" class="form-control" id="account_number" name="account_number">
                        </div>

                        <div class="form-group my-2">
                            <button type="submit" class="w-100 btn btn-primary">UPDATE</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
@endsection