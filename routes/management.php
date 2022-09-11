<?php

use App\Http\Controllers\Mgt\DashboardController;
use App\Http\Controllers\Mgt\JobCategoriesController;
use App\Http\Controllers\Mgt\JobsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get("/", [DashboardController::class, 'index']);
Route::get("/users", [DashboardController::class, 'users']);
Route::get("/users/verified", [DashboardController::class, 'verified']);
Route::get("/users/pending", [DashboardController::class, 'pending']);
Route::get("/user/{id}", [DashboardController::class, 'user']);
Route::get("/assign/job/{id}/{job}", [DashboardController::class, 'assignJob']);
Route::get("/jobs", [JobsController::class, 'index']);
Route::get("/job/add", [JobsController::class, 'create']);
Route::get("/job/edit/{id}", [JobsController::class, 'edit']);
Route::get("/job/{id}", [JobsController::class, 'show']);
Route::get("/job-categories", [JobCategoriesController::class, 'index']);
Route::get("/job-categories/destroy/{slug}", [JobCategoriesController::class, 'destroy']);
Route::get("/job-categories/add", [JobCategoriesController::class, 'create']);
Route::get("/assigned", [JobsController::class, 'UserJob'])->name("UserJob");
Route::get("/assigned/{id}", [JobsController::class, 'UserJobView'])->name("UserJobView");


Route::post("/users/update/{id}", [DashboardController::class, 'updateStatus'])->name("updateUserStatus");
Route::post("/assign/job/assign/{id}", [JobsController::class, 'assignJobpost'])->name("assignJob");
Route::post("/job-categories/add/a", [JobsController::class, 'store'])->name("addJob");
Route::post("/job/addjob", [JobCategoriesController::class, 'store'])->name("addIndustry");
Route::post("/job/updatejob/{id}", [JobsController::class, 'update'])->name("updateJob");






// vue js 

Route::post("/payuser", [JobsController::class, 'payUser'])->name("payUser");
Route::get("/fetchTransaction/{userjobid}", [JobsController::class, 'fetchTransaction']);
