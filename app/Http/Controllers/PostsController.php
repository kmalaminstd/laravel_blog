<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Http\Requests\UpdatePostsRequest;
use App\Mail\NewsletterPost;
use App\Models\Categories;
use App\Models\Newsletter;
use App\Models\Tags;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
// use Carbon\Carbon;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $query = Auth::user()->posts();

        if($request->query('sort') === 'published'){
            $query->where('published', true);
        }
 
        if($request->query('sort') === 'draft'){
            $query->where('published', false);
        }

        // dd($posts);

        $posts = $query->latest()->paginate(5);

        $count = Auth::user()->posts()
            ->where('published', true)
            ->whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year)
            ->count();

        return view('manager.posts', 
            [   
                'posts' => $posts, 
                'request' => $request, 
                'currentMonthPost' => $count
            ]
        );
    }

    public function allBlogs () {
        
        $posts = Posts::where('published', true)
            ->with(['category', 'user'])
            ->latest()
            ->paginate(5);
        // dd($posts);
        return view('blogs.all-blogs', [
            "posts" => $posts
        ]);
    }

    public function userposts(User $user){
        $posts = $user->posts()
            ->where('published', true)
            ->latest()
            ->paginate(5);
        
        return view();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $categories = Categories::all();

        return view('manager.new-post', ["categories" => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);

        $attributes = $request->validate([
            "title" => ['required', 'min:10', 'max-:255'],
            "description" => ['required', 'min:10'],
            "categories_id" => ['required', 'exists:categories,id'],
            "tags" => ["nullable"],
            "image" => ['required', 'image', 'mimes:png,jpg,jpeg,webp', 'max:2048'],
        ]);

        $attributes['image'] = $request->file('image')->store('blog_image', 'public');

        $action = $request->action;

        if($action === 'draft'){
            $attributes['published'] = false;
        }else{
            $attributes['published'] = true;
        }

         

        $post = Auth::user()->posts()->create(Arr::except($attributes, 'tags'));

        if($attributes['tags']){
            $postTags = explode(",", $attributes['tags']);
            foreach($postTags as $tag){
                $post->tag($tag);
            }
        }

        Newsletter::where('email', '!=', Auth::user()->email)->chunk(100, function($emails) use ($post){
            foreach($emails as $email){
                Mail::to($email->email)
                    ->queue(new NewsletterPost($post));
            };
        });


        return redirect("/manage/posts");
    }

    public function tagRemove(Posts $posts, Tags $tags) {
        $posts->removeTag($tags->id);

        return redirect("/manage/post-edit/$posts->id");
    }

    /**
     * Display the specified resource.
     */
    public function show(Posts $posts)
    {
        
        $relatedPosts = $posts->user->posts()
            ->where('id', '!=', $posts->id)->take(4)->get();

        return view('blogs.blog', ["post" => $posts, 'relatedPosts' => $relatedPosts]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Posts $post)
    {


        $categories = Categories::all();
        return view('manager.post-edit', ['post' => $post, "categories" => $categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Posts $posts, Request $request)
    {


        $attributes = request()->validate([
            "title" => ['required', 'min:3'],
            "categories_id" => ['required', 'exists:categories,id'],
            "image" => ['nullable', 'image'],
            "tags" => ['nullable'],
            "description" => ['required', 'min:10'],
            "action" => ['required', Rule::in(['draft', 'publish'])]
        ]);


        $action = $request->action;

        // dd($action);

        if($action === 'draft'){
            $attributes['published'] = false;
        }

        if($action === 'publish'){
            $attributes['published'] = true;
        }

        if($attributes['tags']){
            foreach(explode(",", $attributes['tags']) as $tag){
                $posts->tag($tag);
            }
        }
        // dd($attributes['action']);
        if(request()->file('image')){

            if($posts->image){
                Storage::disk('public')->delete($posts->image);  
            }
    
            $attributes['image'] = request()->file('image')->store('blog_image', 'public');

        }

        $posts->update(Arr::except($attributes, ['tags', 'action']));

        return redirect("/blog/$posts->id");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Posts $posts)
    {

        // $this->authorize('delete', $posts);

        $posts->delete();

        return back();
    }

    public function published() {
        return Auth::user()->posts()->get(['published']);
    }
}
