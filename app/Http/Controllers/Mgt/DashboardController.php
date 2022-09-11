<?php

namespace App\Http\Controllers\Mgt;

use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\JobCategory;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::all();
        $categories = JobCategory::all();
        $jobs = Job::all();
        $regcomplete = User::with('Profile')->where("isProfileComplete", true)->get()->take(10);
        foreach ($regcomplete as $user) {
            $profile = Profile::with(["Pinterest", "Sinterest"])->where("user_id", $user->id)->first();
            $user["p"] = $profile;
        }
        return view("management.index", compact("users", "categories", "jobs", "regcomplete"));
    }

    public function users()
    {
        $page = "All";

        $regcomplete = User::with('Profile')->where("isProfileComplete", true)->get();
        foreach ($regcomplete as $user) {
            $profile = Profile::with(["Pinterest", "Sinterest"])->where("user_id", $user->id)->first();
            $user["p"] = $profile;
        }
        return view("management.users", compact("regcomplete", "page"));
    }

    public function verified()
    {
        $page = "Verified";

        $regcomplete = User::with('Profile')->where("isProfileComplete", true)->where("status", true)->get();
        foreach ($regcomplete as $user) {
            $profile = Profile::with(["Pinterest", "Sinterest"])->where("user_id", $user->id)->first();
            $user["p"] = $profile;
        }
        return view("management.users", compact("regcomplete", "page"));
    }

    public function pending()
    {
        $page = "Pending";

        $regcomplete = User::with('Profile')->where("isProfileComplete", true)->where("status", false)->get();
        foreach ($regcomplete as $user) {
            $profile = Profile::with(["Pinterest", "Sinterest"])->where("user_id", $user->id)->first();
            $user["p"] = $profile;
        }
        return view("management.users", compact("regcomplete", "page"));
    }

    public function user($id)
    {
        $user = User::with('Profile')->where("id", $id)->first();
        return view("management.user", compact("user"));
    }

    public function updateStatus(Request $request, $id)
    {
        $user = User::where("id", $id)->first();
        if ($request->status == "1") {
            $user->status = true;
        } else {
            $user->status = false;
        }

        $user->save();

        return redirect()->back();
    }

    public function assignJob($user, $jobCategory)
    {
        $user = User::with('Profile')->where("id", $user)->firstOrFail();
        $category = JobCategory::with("Jobs")->where("id", $jobCategory)->firstOrFail();
        return view("job.assign", compact("user", "category"));
    }
}
