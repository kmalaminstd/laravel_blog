<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Posts;
use App\Models\Tags;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $tags = Tags::withCount('posts')->orderByDesc('posts_count')->take(5)->get();

        $featuredPost = Posts::where('featured', true)
            ->with(['category', 'user'])
            ->get();
        
        $latestPosts = Posts::where('published', true)
            ->latest()
            ->with(['category'])
            ->limit(4)
            ->get();

        $categories = Categories::latest()->get();

        $creators = User::has('posts')
            ->withCount('posts')
            ->orderByDesc('posts_count')
            ->take(4)
            ->get();

        return view('home', [
            'featuredPost' => $featuredPost[0],
            'latestPosts' => $latestPosts,
            'categories' => $categories,
            'tags' => $tags,
            'creators' => $creators
        ]);
    }
}
