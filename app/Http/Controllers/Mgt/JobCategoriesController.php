<?php

namespace App\Http\Controllers\Mgt;

use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\JobCategory;
use App\Models\UserJob;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class JobCategoriesController extends Controller
{
    public function index()
    {
        $categories = JobCategory::with("Jobs")->get();
        return view("categories.index", compact("categories"));
    }


    public function create()
    {
        // job-categories/add
        return view("categories.add");
    }

    public function destroy($slug)
    {
        $category = JobCategory::with("Jobs")->where("slug", $slug)->firstOrFail();


        foreach ($category->jobs as $job) {

            $userjobs = UserJob::where("job_id", $job->id)->get();
            foreach ($userjobs as $uJob) {
                $uj = UserJob::where("id", $uJob->id)->first();
                if ($uj) {
                    $uj->delete();
                }
            }

            $j = Job::where("id", $job->id)->first();
            if ($j) {
                $j->delete();
            }
        }

        $category->delete();
        return redirect()->back("/management/job-categories");
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            "title" => "required",
            "image" => "required",
        ]);

        $path = $request->file("image")->store('categories', 'public');

        JobCategory::create([
            "title" => $request->title,
            "slug" => Str::slug($request->title),
            "image_link" => $path,
        ]);

        return redirect()->back()->with("success", "Record added successfully");
    }
}
