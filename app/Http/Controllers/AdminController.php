<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function show()
    {

        $users = User::where('admin', 0)->get();
        return view('pages.users', ['users' => $users]);
    }
    public function destroy($id)
    {
        $user = User::find($id);

        $userpost = $user->post;
        foreach ($userpost as $post) {
            $post->delete();
        }
        $user->delete();
        return redirect('/users')->with('success', 'User deleted successfully');
    }
}
