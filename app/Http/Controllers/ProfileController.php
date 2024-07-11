<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function show()
    {
        $id = auth()->user()->id;
        $posts = Post::where('user_id', $id)->get();
        return view('pages.profile', ['posts' => $posts]);
    }
}
