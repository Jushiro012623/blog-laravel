<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Add Post
Route::get('blog', [PostController::class ,'show']);
Route::post('blog/addpost', [PostController::class ,'store']);
Route::get('blog/addpost', [PostController::class,'add']);
Route::get('blog/viewpost/{id}', [PostController::class,'view']);


