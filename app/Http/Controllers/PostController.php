<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;


class PostController extends Controller
{
    //show all post
    public function show()
    {

        $allpost = Post::orderBy('created_at', 'desc')->paginate(3);
        return view('pages.blog', ['allpost' => $allpost]);
    }

    //store all post to db
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required'],
            'content' => ['required']
        ]);
        $validated['user_id'] = auth()->id();

        // dd($validated);
        Post::create($validated);

        return redirect('/')->with('success', 'Post Created');
    }

    //add page
    public function add()
    {
        return view('pages.addpost');
    }

    public function view($id)
    {
        $post = Post::find($id);
        if (!$post) {
            abort(404);
        }
        return view('pages.viewpost', ['post' => $post]);
    }

    public function viewuser($id)
    {
        $user = User::find($id);
        if (!$user) {
            abort(404);
        }
        $userpost = $user->post;
        return view('pages.viewprofile', ['posts' => $userpost, 'user' => $user]);
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('pages.editpost', ['post' => $post]);
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->update($request->all());
        return redirect('/profile')->with('success', 'Post Updated');
    }
    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('/profile')->with('success', 'Post Deleted');
    }
}
