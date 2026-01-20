<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function togglePostLike(Posts $posts){
        $userId = Auth::id();
        $like = $posts->likes()->where('user_id', $userId)->first();

        if($like){
            $like->delete();
        }else{
            $posts->likes()->create(['user_id' => $userId]);
        }

        return back();
    }
}
