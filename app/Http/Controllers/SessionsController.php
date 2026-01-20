<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function create () {
        return view('auth.login');
    }

    public function store() {
    
        $attributes = request()->validate([
            "email" => ['required', 'email'],
            "password" => ['required'] 
        ]);

        if(! Auth::attempt($attributes, true)){
            throw ValidationException::withMessages([
                "email" => "Email or password doesn't match"
            ]);
        }

        request()->session()->regenerate();

        return redirect("/manage");

    }

    public function destroy () {
        Auth::logout();

        return redirect('/');
    }
}
