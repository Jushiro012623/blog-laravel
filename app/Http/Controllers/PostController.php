<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;


class PostController extends Controller
{
    //show all post
    public function show(){
        
        $allpost = Post::orderBy('created_at' , 'desc')->paginate(3);
        // $id = Post::find('user_id');
        // $postedBy = User::all();
        // 'postedBy' => $postedBy
        return view('pages.blog' ,['allpost' => $allpost]);
    }
    
    //store all post to db
    public function store(Request $request){
        $validated = $request->validate([
            'title' => ['required'],
            'content' => ['required'],
            'user_id' => ['required'] 
        ]);
        Post::create($validated);
        
        return redirect('/')->with('success', 'Post Created');
    }
    
    //add page
    public function add(){   
        return view('pages.addpost');
    }

    public function view($id){
        $post = Post::find($id);
        if(!$post){
            abort(404);
        }
        return view('pages.viewpost' ,['post' => $post]);
    }

    public function viewuser($id){
        $posts = Post::where('user_id', $id)->get();
        $userName = User::find($id);
        // dd($userName);
        return view('pages.viewprofile',['posts' => $posts , 'userName' => $userName]);
    }
}
