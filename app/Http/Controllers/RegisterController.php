<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    //
    public function create(){
       return view('pages.signup');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'username' => ['required','min:5', 'unique:users,username'],
            'email' =>['required','email', 'unique:users,email'],
            'password' => ['required', 'min:8']
        ]);
        

        $signedInUser = User::create($validated);
        auth()->login($signedInUser);
        return redirect('/')->with('success', 'You Have Successfully Registered');
        }
}
