<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\ProcessController;
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

Route::post('/registerUser', [AccountController::class, 'registerUser'])->name("registerUser");
Route::post('/loginUser', [AccountController::class, 'loginUser'])->name("loginUser");
Route::post('/uploadCv', [ProcessController::class, 'uploadCv'])->name("uploadCv");
Route::post('/uploadPhoto', [ProcessController::class, 'uploadPhoto'])->name("uploadPhoto");
