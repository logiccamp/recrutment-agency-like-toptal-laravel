<?php

namespace App\Http\Controllers;

use App\Mail\AccountVerification;
use App\Models\Job;
use App\Models\JobCategory;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpKernel\Event\RequestEvent;

class ProcessController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function emailverify()
    {
        $token = substr(str_shuffle("alsafklafdkaeiohadflsaklfdhaeilhasdlfhaieihail"), 0, 11);
        $user = User::where("id", auth()->user()->id)->first();

        $user->emailtoken = $token;
        $user->save();

        $data = [
            "name" => $user->first_name . " " . $user->last_name,
            "email" => $user->email,
            "token" => $token,
        ];
        Mail::send(new AccountVerification($data));
        return view("process.verify");
    }

    public function step1()
    {
        $jobs = JobCategory::all();
        return view("process.step1", compact("jobs"));
    }


    public function step1Post(Request $request)
    {
        $this->validate($request, [
            "gender" => "required",
            "mobile" => "required",
            "dob" => "required",
            "location" => "required",
            "toRelocate" => "required",
            "primary_id" => "required",
            "primaryExperience" => "required",
            "secondary_id" => "required",
            "secondaryExperience" => "required",
            "hearaboutus" => "required",
        ]);

        $isProfileExist = Profile::where("user_id", auth()->user()->id)->first();

        if (!$isProfileExist) {
            $profile = Profile::create([
                "user_id" => auth()->user()->id,
                "gender" => $request->gender,
                "mobile" => $request->mobile,
                "dob" => $request->dob,
                "location" => $request->location,
                "toRelocate" => $request->toRelocate,
                "primary_id" => $request->primary_id,
                "primaryExperience" => $request->primaryExperience,
                "secondary_id" => $request->secondary_id,
                "secondaryExperience" => $request->secondaryExperience,
                "hearaboutus" => $request->hearaboutus,
            ]);

            if ($profile) {
                return redirect("/process/step-2");
            } else {
                return redirect()->back()->with("message", "Something went wrong. Please try again");
            }
        } else {
            $isProfileExist->gender = $request->gender;
            $isProfileExist->mobile = $request->mobile;
            $isProfileExist->dob = $request->dob;
            $isProfileExist->location = $request->location;
            $isProfileExist->toRelocate = $request->toRelocate;
            $isProfileExist->primary_id = $request->primary_id;
            $isProfileExist->primaryExperience = $request->primaryExperience;
            $isProfileExist->secondary_id = $request->secondary_id;
            $isProfileExist->secondaryExperience = $request->secondaryExperience;
            $isProfileExist->hearaboutus = $request->hearaboutus;
            $isProfileExist->save();
            return redirect("/process/step-2");
        }
    }


    public function step2()
    {
        return view("process.step2");
    }

    public function step3()
    {
        return view("process.step3");
    }


    public function uploadCv(Request $request)
    {
        $this->validate($request, [
            'Image' => ['required', 'file'],
        ]);



        $path = $request->file('Image')->store('cv', 'public');

        $profile = Profile::where("user_id", auth()->user()->id)->first();
        $data = [];
        if (!$profile) {
            $data["status"] = false;
            $data["message"] = "An error occur. please reload the pag";
            return response()->json($data, 200);
        }


        $profile->cv = $path;
        $profile->save();
        $data = [];
        $data["status"] = true;
        $data["message"] = "";
        return response()->json($data, 200);
    }

    public function uploadPhoto(Request $request)
    {
        $this->validate($request, [
            'Image' => ['required', 'file'],
        ]);

        $path = $request->file('Image')->store('photos', 'public');

        $profile = Profile::where("user_id", auth()->user()->id)->first();
        $data = [];
        if (!$profile) {
            $data["status"] = false;
            $data["message"] = "An error occur. please reload the pag";
            return response()->json($data, 200);
        }

        $profile->picture = $path;
        $profile->save();
        $user = User::where("id", auth()->user()->id)->first();
        $user->isProfileComplete = true;
        $user->save();

        $data = [];
        $data["status"] = true;
        $data["message"] = "";
        return response()->json($data, 200);
    }
}
