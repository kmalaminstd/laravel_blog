<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Posts;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $featuredPost = Posts::where('featured', true)
            ->with(['category', 'user'])
            ->get();
        
        $latestPosts = Posts::where('published', true)
            ->latest()
            ->with('category')
            ->limit(4)
            ->get();

        $categories = Categories::latest()->get();

        return view('home', [
            'featuredPost' => $featuredPost[0],
            'latestPosts' => $latestPosts,
            'categories' => $categories
        ]);
    }
}
