<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use App\Models\UserAccount;
use App\Models\UserJob;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use PhpOption\None;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (!auth()->user()->isVerify) {
            return redirect("/account/verify");
        }

        $user = User::with("Profile")->where("id", auth()->user()->id)->first();


        $userjobs = UserJob::with("Job")->where("user_id", auth()->user()->id)->get();
        if (!$user->Profile || !$user->isProfileComplete) {
            return redirect("/process/step-1");
        }

        return view('dashboard.index', compact("userjobs"));
    }


    public function profile()
    {
        $user = User::with('Profile')->where("id", auth()->user()->id)->first();

        return view('dashboard.profile', compact("user"));
    }

    public function wallet()
    {
        $user = User::with('Account')->where("id", auth()->user()->id)->first();
        return view('dashboard.wallet', compact("user"));
    }

    public function addUserAccount(Request $request)
    {
        $this->validate($request, [
            "bank_name" => "required",
            "account_name" => "required",
            "account_number" => "required",
        ]);

        // action
        if ($request->action == null || $request->action == "") {
            return redirect()->back()->with("message", "action");
        }

        if ($request->action == "update") {
            $userAccount = UserAccount::where("user_id", auth()->user()->id)->first();
            if ($userAccount) {
                $userAccount->bank_name = $request->bank_name;
                $userAccount->account_name = $request->account_name;
                $userAccount->account_number = $request->account_number;

                $userAccount->save();
            }
        } else {
            $data = [
                "bank_name" => $request->bank_name,
                "account_name" => $request->account_name,
                "account_number" => $request->account_number,
                "user_id" => auth()->user()->id,
            ];
            UserAccount::create($data);
        }


        return redirect()->back()->with("message", "success");
    }

    public function jobs()
    {
        $user = User::with('UserJobs')->where("id", auth()->user()->id)->first();
        $userjobs = UserJob::with("Job")->where("user_id", auth()->user()->id)->get();

        return view('dashboard.jobs', compact("user", "userjobs"));
    }

    public function userjobs($id)
    {
        $userjob = UserJob::with(["Job", "Worker", "Transactions"])->where("id", $id)->where("user_id", auth()->user()->id)->firstOrFail();
        // dd($userjob);
        $transactions = Transaction::where("userjob_id", $id)->orderBy("id", "desc")->get();
        foreach ($transactions as $transaction) {
            $transaction["date"] = Carbon::createFromDate($transaction["created_at"]);
        }
        $total = $transactions->sum("amount");
        return view("dashboard.work", compact("userjob", "transactions", "total"));
    }

    public function transactions()
    {
        $transactions = Transaction::where("user_id", auth()->user()->id)->orderBy("id", "desc")->get();
        foreach ($transactions as $transaction) {
            $transaction["date"] = Carbon::createFromDate($transaction["created_at"])->diffForHumans();
        }
        $total = $transactions->sum("amount");
        return view("dashboard.transactions", compact("transactions", "total"));
    }

    public function settings()
    {
        $user = User::with('Profile')->where("id", auth()->user()->id)->first();
        $userjobs = UserJob::with("Job")->where("user_id", auth()->user()->id)->get();

        return view('dashboard.settings', compact("user", "userjobs"));
    }

    public function dashboardPasswordReset(Request $request)
    {
        $this->validate($request, [
            'email' => 'required'
        ]);

        if ($request->email != auth()->user()->email) {
            return redirect()->back()->with("emailErr", "Please enter your email");
        }
        $status = Password::sendResetLink(
            $request->only('email')
        );
        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);
    }
}
