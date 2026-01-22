<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\Models\User;
use Illuminate\Http\Request;

class UserFollowerController extends Controller
{
    
    public function store(User $user) {
        
        // dd($user);

        if($user->id === Auth::id()){
            return back();
        }

        $isFollower = $user->followers()->where('follower_id', Auth::id())->first();

        // dd($user->followers());

        if($isFollower){
            $isFollower->delete();
        }else{
            $user->followers()->create(['follower_id' => Auth::id()]);
        }

        return back();
    }

}
