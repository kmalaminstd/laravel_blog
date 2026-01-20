<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class RegisterController extends Controller
{
    public function create() : View{
        return view('auth.register');
    }

    public function store(Request $request){
        $attributes = $request->validate([
            "name" => ['required', 'min:3'],
            "designation" => [""],
            "email" => ['required', 'email', 'unique:users,email'],
            "password" => ['required', 'min:6']
        ]);

        $user = User::create($attributes);

        Auth::login($user);

        return redirect('/manage');
    }

}
