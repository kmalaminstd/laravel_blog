<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserFollower;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManageController extends Controller
{
    public function index() {

        $latestPost = Auth::user()->posts()->with('category')->latest()->take(3)->get();

        // dd($latestPost);

        return view('manager.index', ["latestPosts" => $latestPost]);
    }

    public function following(){

        $followings = UserFollower::where('follower_id', Auth::id())->get();

        // dd($following);

        return view('manager.following', [
            'followings' => $followings
        ]);
    }

    public function followers(){

        $myfollowers = Auth::user()->followers()->with('follower')->get();
        $countFollowers = $myfollowers->count();

        // dd($followers->user);

        return view('manager.followers', [
            "followers" => $myfollowers,
            "countFollowers" => $countFollowers
        ]);
    }
}
