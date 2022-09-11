<?php

namespace App\Http\Controllers\Mgt;

use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\JobCategory;
use App\Models\Transaction;
use App\Models\User;
use App\Models\UserJob;
use Carbon\Carbon;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::with("Category")->get();
        return view("job.index", compact("jobs"));
    }

    public function assignJobpost(Request $request, $user)
    {
        $job = Job::where("id", $request->job)->first();
        UserJob::create([
            "user_id" => $user,
            "job_id" => $request->job,
            "rate" => $job->rate,
            "paymentMode" => $job->paymentMode,
            "start_on" => $request->start_on,
            "end_on" => $request->end_on == null || $request->end_on == "" ? $request->start_on : $request->end_on,
        ]);


        return redirect()->back()->with("status", true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = JobCategory::all();
        return view("job.add", compact("categories"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "title" => "required",
            "category_id" => "required",
            "duration" => "required",
            "rate" => "required",
            "description" => "required",
            "location" => "required",
            "company" => "required",
            "paymentMode" => "required",
        ]);

        Job::create([
            "title" => $request->title,
            "category_id" => $request->category_id,
            "duration" => $request->duration,
            "rate" => $request->rate,
            "description" => $request->description,
            "location" => $request->location,
            "company" => $request->company,
            "paymentMode" => $request->paymentMode,
        ]);

        return redirect()->back()->with("status", true);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $job = Job::with("Category")->where("id", $id)->firstOrFail();
        return view("job.show", compact("job"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = JobCategory::all();

        $job = Job::with("Category")->where("id", $id)->firstOrFail();
        return view("job.edit", compact("job", "categories"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $job = Job::where("id", $id)->first();

        if (!$job) {
            return redirect()->back()->with("status", false);
        }

        $job->title = $request->title;
        $job->category_id = $request->category_id;
        $job->duration = $request->duration;
        $job->rate = $request->rate;
        $job->description = $request->description;
        $job->location = $request->location;
        $job->company = $request->company;
        $job->paymentMode = $request->paymentMode;

        $job->save();

        return redirect()->back()->with("status", true);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function UserJob()
    {
        $userjob = UserJob::with(["Job", "Worker"])->get();
        foreach ($userjob as $job) {
            $job["user"] = User::with("Profile")->where("id", $job->user_id)->first();
        }

        return view("userjob.index", compact("userjob"));
    }

    public function UserJobView($id)
    {
        $userjob = UserJob::with(["Job", "Worker", "Transactions"])->where("id", $id)->firstOrFail();
        // dd($userjob);
        $transactions = Transaction::where("userjob_id", $id)->orderBy("id", "desc")->get();
        foreach ($transactions as $transaction) {
            $transaction["date"] = Carbon::createFromDate($transaction["created_at"]);
        }
        return view("userjob.work", compact("userjob", "transactions"));
    }

    public function payUser(Request $request)
    {
        $this->validate($request, [
            "amount" => "required",
            "job_id" => "required",
            "user_id" => "required",
            "userjob_id" => "required",
        ]);

        Transaction::create([
            "amount" => $request->amount,
            "job_id" => $request->job_id,
            "user_id" => $request->user_id,
            "userjob_id" => $request->userjob_id,
        ]);

        $user = User::where("id", $request->user_id)->first();

        $wallet = $user->wallet;

        $user->wallet = $wallet + $request->amount;
        $user->save();
        // send mail to user

        return response()->json(true, 200);
    }

    public function fetchTransaction($userjob)
    {
        $transactions = Transaction::all();
        return response()->json($transactions, 200);
    }
}
