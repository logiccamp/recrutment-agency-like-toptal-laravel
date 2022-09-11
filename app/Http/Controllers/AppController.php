<?php

namespace App\Http\Controllers;

use App\Models\JobCategory;
use App\Models\User;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        $categories = JobCategory::with("Jobs")->get();
        $uss = User::with('Profile')->where('status', true)->get()->take(10);
        $users = array();
        for ($i = 0; $i < 8; $i++) {
            $users[] = $uss[0];
        }
        return view("app.index", compact("categories", "users"));
    }

    public function about()
    {
        return view("app.about");
    }


    public function categories()
    {
        $categories = JobCategory::with("Jobs")->get();
        $uss = User::with('Profile')->where('status', true)->get()->take(10);
        $users = array();
        for ($i = 0; $i < 8; $i++) {
            $users[] = $uss[0];
        }
        return view("app.categories", compact("categories", "users"));
    }

    public function contact()
    {
        return view("app.contact");
    }

    public function terms()
    {
        return view("app.terms");
    }


    public function privacy()
    {
        return view("app.privacy");
    }
}
