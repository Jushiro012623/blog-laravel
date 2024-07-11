<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    //
    public function destroy()
    {

        if (auth()->guest()) {
            return redirect('/');
        }

        auth()->logout();
        return redirect('/login')->with('success', 'Goodbye');
    }
    //Login
    public function create()
    {
        return view('pages.login');
    }

    public function store(Request $request)
    {
        // dump($request);
        $loginReq = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (auth()->attempt($loginReq)) {
            return redirect('/')->with('success', 'Welcome Back');
        }
        // dd($loginReq);
        return back()
            ->withInput()
            ->withErrors(['password' => 'Your Credentials are invalid']);
    }
}
