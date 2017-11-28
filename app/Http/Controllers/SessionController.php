<?php

namespace Blog\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function create(){
        return view('auth.create-session');
    }

    public function destroy(){
        auth()->logout();
        return redirect('/login');
    }

    public function authenticate(){
        request()->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if(auth()->attempt(request(['email', 'password']))){
            return redirect()->home();
        }
        return back();
    }
}
