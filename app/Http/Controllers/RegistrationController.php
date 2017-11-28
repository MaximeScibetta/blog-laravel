<?php

namespace Blog\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function register(){
        return view('auth.create-registration');
    }

    public function store(){
        
    }
} 
