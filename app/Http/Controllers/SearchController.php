<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke(){
        $posts = Posts::query()
            ->with(['user', 'category', 'tags'])
            ->where('title', 'LIKE', '%'.request('q').'%')
            ->where('published', true)
            ->paginate(5)
            ->withQueryString();

        return view('blogs.result', ['posts' => $posts]);
    }
}
