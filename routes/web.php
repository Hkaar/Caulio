<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix("/register")->group(function() {
    Route::get("/", [AuthController::class, "register"])->name("auth.register.show");
    Route::post("/", [AuthController::class, "store"])->name("auth.register");
});

Route::prefix("/login")->group(function() {
    Route::get("/", [AuthController::class, "login"])->name("auth.login.show");
    Route::post("/", [AuthController::class, "authenticate"])->name("auth.login");
});
