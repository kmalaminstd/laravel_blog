<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\Savepost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SavePostController extends Controller
{
    public function store(Posts $posts){

        $savedPost = Auth::user()->saveposts()->where('posts_id', $posts->id)->first();

        if($savedPost){
            $savedPost->delete();
        }else{
            Auth::user()->saveposts()->create(["posts_id" => $posts->id]);
        }


        return back();
    }

    public function userSavedPosts(){
        $posts = Auth::user()->savedposts()->paginate(5);
        // dd($posts);
        return view('manager.saved', [
            "posts" => $posts
        ]);
    }
}
