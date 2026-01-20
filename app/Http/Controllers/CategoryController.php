<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __invoke(Categories $categories) {
        $posts = $categories->posts()
            ->where('published', true)
            ->with('user')
            ->paginate(5)
            ->withQueryString();

        return view('blogs.result', ["posts" => $posts]);
    }
}
