<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\UserController;

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
})->name("/");

Route::prefix("/register")->group(function() {
    Route::get("/", [AuthController::class, "register"])->name("register");
    Route::post("/", [AuthController::class, "store"])->name("register");
});

Route::prefix("/login")->group(function() {
    Route::get("/", [AuthController::class, "login"])->name("login");
    Route::post("/", [AuthController::class, "authenticate"])->name("login");
});

Route::get("/logout", [AuthController::class, "logout"])->name("logout");

Route::prefix("/manage")->middleware("auth")->group(function() {
    Route::resource("/users", UserController::class)->names("users");
    Route::resource("/forums", ForumController::class)->names("forums");
    Route::resource("/posts", PostController::class)->names("posts");
    Route::resource("/comments", CommentController::class)->names("comments");
    Route::resource("/replies", ReplyController::class)->names("reply");
});

Route::redirect("/manage", "/manage/users");
