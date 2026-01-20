<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth ;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index(){

        $user = Auth::user();

        return view('manager.profile', ["user" => $user]);
    }

    public function update(Request $request, $id){

        $user = User::findOrFail($id);

        $attributes = $request->validate([
            "name" => ["required", "min:3"],
            "designation" => [""],
            "bio" => [""],
        ]);

        if($request->hasFile('image')){

            if($user->image){
                Storage::disk('public')->delete($user->image);
            }

            $attributes['logo'] = $request->file('image')
                ->store('image', 'public');

        }


        $user->update($attributes);

        return back()->with('success', 'Profile updated');

    }

    public function publicprofile(User $user, string $name){

        $expectedname = Str::slug($user->name);

        if($expectedname !== $name){
            abort(404);
        }

        $posts = $user->posts()
            ->where('published', true)
            ->latest()
            ->paginate(5);
        
        return view('manager.public-profile', [
            "posts" => $posts,
            "user" => $user
        ]);
    }
    
}
