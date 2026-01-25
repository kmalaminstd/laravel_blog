<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\CreatorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\ManageController;
use App\Http\Controllers\NewsLetterController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SavePostController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserFollowerController;
use App\Mail\Test;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'index']);


Route::get('/blogs', [PostsController::class, 'allBlogs']);
Route::get('/blog/{posts}', [PostsController::class, 'show']);

Route::get('/tags/{tags:name}', [TagsController::class, 'posts']);
Route::get('/category/{categories:name}', CategoryController::class);


Route::get('/search', SearchController::class);

Route::post('/post/like/{posts}', [LikeController::class, 'togglePostLike']);

Route::get('/public-profile/{user}/{name}', [UserController::class, 'publicprofile']);

// newsletter controller
Route::post('/newsletter', [NewsLetterController::class, 'store']);
Route::post('/newsletter/unsubscibe/{newsletter:unsubscribe_token}', [NewsLetterController::class, 'destroy']);

// creators controller
Route::get('/creators', [CreatorController::class, 'index']);

Route::get('/test-email', function(){
    //  Mail::send('alaminkhanstd@gmail')->queue(new Test());

    // return 'Email sent!';
});

// guest routes
Route::middleware('guest')->group(function(){

    Route::get('/login', [SessionsController::class, 'create'])->name('login');
    Route::post('/login', [SessionsController::class, 'store']);

    Route::get('/register', [RegisterController::class, 'create']);
    Route::post('/register', [RegisterController::class, 'store']);

});

// auth routes
Route::middleware('auth')->group(function(){
    Route::get('/manage/profile', [UserController::class, 'index']);
    Route::put('/manage/profile/{user}', [UserController::class, 'update']);

    // follower
    Route::post('/follow/{user}', [UserFollowerController::class, 'store']);

    // comments
    Route::post('/manage/comments/{posts}', [CommentsController::class, 'store']);
    Route::delete('/comment/delete/{comments}', [CommentsController::class, 'destroy'])->can('delete-comment', 'comments');

    // manage routes
    Route::get('/manage', [ManageController::class, 'index']);
    Route::get('/manage/create-post', [PostsController::class, 'create']);
    Route::post('/manage/create-post', [PostsController::class, 'store']);
    Route::delete('/post/delete/{posts}', [PostsController::class, 'destroy'])->can('delete-post', 'posts');
    Route::get('/manage/posts', [PostsController::class, 'index']);
    Route::get('/manage/post-edit/{post}', [PostsController::class, 'edit'])->can('edit-post', 'post');
    Route::patch('/posts/{posts}', [PostsController::class, 'update'])->can('edit-post', 'posts');

    Route::get('/manage/following', [ManageController::class, 'following']);
    Route::get('/manage/followers', [ManageController::class, 'followers']);

    Route::post('/savepost/{posts}', [SavePostController::class, 'store']);

    Route::get('/manage/analytics', function(){
        return view('manager.analytics');
    });

    // saved post route
    Route::get('/manage/saved-post', [SavePostController::class, 'userSavedPosts']);

    Route::delete('/delete-tag/{posts}/{tags}', [PostsController::class, 'tagRemove']);

    Route::get('/logout', [SessionsController::class, 'destroy']);
    Route::delete('/logout', [SessionsController::class, 'destroy']);
});