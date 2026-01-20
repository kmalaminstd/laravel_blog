<?php

namespace App\Http\Controllers;

use App\Models\Tags;

class TagsController extends Controller
{
    public function posts(Tags $tags)
    {   

        $posts = $tags->posts()
            ->with('user', 'category')
            ->paginate(5)
            ->withQueryString();

        // dd($tags->posts);
            
        return view("blogs.result", ["posts" => $posts]);
    }

    public function destroy() {
        
    }
}
