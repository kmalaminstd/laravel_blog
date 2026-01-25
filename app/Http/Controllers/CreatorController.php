<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;

class CreatorController extends Controller
{
    public function index(){

        $creators = User::has('posts')->paginate(5);

        return view('creator', [
            'creators' => $creators
        ]);

    }
}
