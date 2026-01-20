<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManageController extends Controller
{
    public function index() {

        $latestPost = Auth::user()->posts()->with('category')->latest()->take(3)->get();

        // dd($latestPost);

        return view('manager.index', ["latestPosts" => $latestPost]);
    }
}
