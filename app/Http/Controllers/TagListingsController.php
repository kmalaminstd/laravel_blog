<?php

namespace App\Http\Controllers;

use App\Models\tag_listings;
use App\Http\Requests\Storetag_listingsRequest;
use App\Http\Requests\Updatetag_listingsRequest;

class TagListingsController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Storetag_listingsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(tag_listings $tag_listings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tag_listings $tag_listings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatetag_listingsRequest $request, tag_listings $tag_listings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tag_listings $tag_listings)
    {
        //
    }
}
