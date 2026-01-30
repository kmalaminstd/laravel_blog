<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function posts(){
        $posts = Posts::latest()->with(['user', 'category', 'comments', 'likes'])->paginate(5);
        return view('admin.posts', [
            "posts" => $posts 
        ]);
    }

    public function users(){
        return view('admin.users');
    }

    public function creators(){

        $creators = User::has('posts')->paginate(10);
        
        return view('admin.creators', [
            "creators" => $creators
        ]);
    }

    public function settings(){
        return view('admin.settings');
    }

    public function setPostFeature(Posts $post){
        $isFeatured = $post->featured;
        
        if($isFeatured){
            $post->update(['featured' => false]);
        }else{
            $post->update(['featured' => true]);
        }

        return back();
    }


}