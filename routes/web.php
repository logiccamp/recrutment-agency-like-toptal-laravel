<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\ProcessController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
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


Route::get('/', [AppController::class, 'index']);
Route::get('/about', [AppController::class, 'about']);
Route::get('/categories', [AppController::class, 'categories']);
Route::get('/contact', [AppController::class, 'contact']);
Route::get('/t-and-c', [AppController::class, 'terms']);
Route::get('/privacy', [AppController::class, 'privacy']);

Route::get('/account/verify', [ProcessController::class, 'emailverify'])->name("verify");
Route::get('/verify-me/{email}/{token}', [AccountController::class, 'verifyMe'])->name("verifyMe");
Route::get('/process/step-1', [ProcessController::class, 'step1'])->name("step1");
Route::post('/process/step-1', [ProcessController::class, 'step1Post'])->name("step1Post");
Route::get('/process/step-2', [ProcessController::class, 'step2'])->name("step2");
Route::get('/process/step-3', [ProcessController::class, 'step3'])->name("step3");

Route::get('/forgot-password', function () {
    $token = Str::random();
    return view('auth.passwords.email', compact("token"));
})->middleware('guest')->name('password.request');


Route::post('/forgot-password', [PasswordController::class, 'sendResetLink'])->name("password.email");

Route::post('/verifyme/', [AccountController::class, 'verifyLogin'])->name("verifyMe");


Route::get("/dashboard", [HomeController::class, 'index']);
Route::get("/profile", [HomeController::class, 'profile']);
Route::get("/wallet", [HomeController::class, 'wallet']);
Route::get("/myjobs", [HomeController::class, 'jobs']);
Route::get("/myjob/{id}", [HomeController::class, 'userjobs']);
Route::get("/transactions", [HomeController::class, 'transactions']);
Route::get("/settings", [HomeController::class, 'settings']);
Route::post("/settings", [HomeController::class, 'dashboardPasswordReset'])->name("dashboardPasswordReset");



Route::post('/wallet/account', [HomeController::class, 'addUserAccount'])->name("addUserAccount");
