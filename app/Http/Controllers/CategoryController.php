<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoryController extends Controller
{


    public function store(Request $request){

        $validated = $request->validate([
            'name' => 'required'
        ]);

        Categories::create($validated);

        return redirect('/admin/category');

    }

    

    public function edit(Categories $categories){
        return view('admin.category-edit', compact('categories'));
    }

    public function update(Categories $categories, Request $request){

        $validated = $request->validate([
            'name' => 'required'
        ]);

        $categories->update($validated);

        return redirect('/admin/category');

    }

    public function destroy(Categories $categories){
        $categories->delete();
        return back(); 
    }

}
