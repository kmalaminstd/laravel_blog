<?php

namespace App\Http\Controllers;

use App\Models\comments;
use App\Http\Requests\StorecommentsRequest;
use App\Http\Requests\UpdatecommentsRequest;
use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Posts $posts, Request $request)
    {
        $text = $request->text;
        if(!$text){
           return back(); 
        };
        // $posts->comments;
        $posts->comments()->create([
            'user_id' => Auth::id(),
            'text' => $text
        ]);
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(comments $comments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(comments $comments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecommentsRequest $request, comments $comments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(comments $comments)
    {
        //
    }
}
