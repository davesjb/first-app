<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Support\Facades\Route;

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

Route::any('/login', [LoginController::class, "show"]);

Route::get('/profile/{id}', [ProfileController::class, "show"]);

Route::any('/products', [ProductController::class, "show"])->middleware("redirectIfAuthenticated");

Route::any('/user', [UserController::class, "show"]);

// Route::redirect("/user", "/");

// Route::post("/login", [LoginController::class, "store"]);
