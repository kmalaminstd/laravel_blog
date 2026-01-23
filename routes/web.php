<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\ManageController;
use App\Http\Controllers\NewsLetterController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserFollowerController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/login', [SessionsController::class, 'create'])->name('login');
Route::post('/login', [SessionsController::class, 'store']);
Route::delete('/logout', [SessionsController::class, 'destroy']);

Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/logout', [SessionsController::class, 'destroy'])->middleware('auth');

Route::get('/blogs', [PostsController::class, 'allBlogs']);
Route::get('/blog/{posts}', [PostsController::class, 'show']);

Route::get('/tags/{tags:name}', [TagsController::class, 'posts']);
Route::get('/category/{categories:name}', CategoryController::class);

Route::delete('/delete-tag/{posts}/{tags}', [PostsController::class, 'tagRemove']);

Route::get('/search', SearchController::class);

Route::get('/manage', [ManageController::class, 'index'])->middleware('auth');


Route::get('/manage/analytics', function(){
    return view('manager.analytics');
});

Route::post('/post/like/{posts}', [LikeController::class, 'togglePostLike']);

Route::get('/public-profile/{user}/{name}', [UserController::class, 'publicprofile']);

// comments
Route::post('/manage/comments/{posts}', [CommentsController::class, 'store']);
Route::delete('/comment/delete/{comments}', [CommentsController::class, 'destroy'])->can('delete-comment', 'comments');

Route::get('/manage/create-post', [PostsController::class, 'create'])->middleware('auth');
Route::post('/manage/create-post', [PostsController::class, 'store'])->middleware('auth');
Route::delete('/post/delete/{posts}', [PostsController::class, 'destroy'])->middleware('auth')->can('delete-post', 'posts');

Route::get('/manage/posts', [PostsController::class, 'index'])->middleware('auth');

Route::get('/manage/post-edit/{post}', [PostsController::class, 'edit'])->middleware('auth')->can('edit-post', 'post');
Route::patch('/posts/{posts}', [PostsController::class, 'update'])->can('edit-post', 'posts');

// follower
Route::post('/follow/{user}', [UserFollowerController::class, 'store']);

Route::get('/manage/profile', [UserController::class, 'index'])->middleware('auth');
Route::put('/manage/profile/{user}', [UserController::class, 'update'])->middleware('auth');

// newsletter controller
Route::post('/newsletter', [NewsLetterController::class, 'store']);
Route::post('/newsletter/unsubscibe/{newsletter:unsubscribe_token}', [NewsLetterController::class, 'destroy']);