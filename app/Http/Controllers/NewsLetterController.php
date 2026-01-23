<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsLetterController extends Controller
{
    public function store(Request $request){

        $request->validate([
            "email" => ['required', 'email', 'max:255', 'unique:newsletters,email']
        ]);

        $newsletter = Newsletter::create([
            'email' => $request->email,
            'unsubscribe_token' => Str::random(64)
        ]);

        return back();
    }

    public function destroy(string $unsubscribe_token){

        $newsletter = Newsletter::where('unsubscribe_token', $unsubscribe_token)->firstOrFail();

        $newsletter->delete();
        return back();
    }
}
