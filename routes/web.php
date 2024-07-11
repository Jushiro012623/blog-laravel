<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Middleware\LoginedUser;

Route::get('/', function () {
    return view('welcome');
});

Route::get('users/', [AdminController::class, 'show']);
Route::get('users/{id}', [AdminController::class, 'destroy']);


//Post
Route::get('blog', [PostController::class, 'show']);
Route::post('blog/addpost', [PostController::class, 'store']);
Route::get('blog/addpost', [PostController::class, 'add'])->middleware('login');
Route::get('blog/viewpost/{id}', [PostController::class, 'view']);
Route::get('blog/user/{id}', [PostController::class, 'viewuser']);
Route::get('editpost/{id}', [PostController::class, 'edit'])->middleware('login');
Route::patch('editpost/{id}', [PostController::class, 'update'])->middleware('login');
Route::get('delete/{id}', [PostController::class, 'delete'])->middleware('login');

//Register 
Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

//Session
Route::get('logout', [SessionController::class, 'destroy']);
//Login
Route::get('login', [SessionController::class, 'create'])->middleware('guest');
Route::post('login', [SessionController::class, 'store'])->middleware('guest');

Route::get('profile', [ProfileController::class, 'show'])->middleware('login');
