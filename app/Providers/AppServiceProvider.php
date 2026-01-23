<?php

namespace App\Providers;

use App\Models\Comments;
use App\Models\Posts;
use App\Models\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useTailwind();

        Gate::define('delete-post' , function(User $user, Posts $posts){
            return $posts->user()->is($user);
        });

        Gate::define('edit-post', function(User $user, Posts $posts){
            return $posts->user()->is($user);
        });

        Gate::define('delete-comment', function(User $user, Comments $comments){
            return $comments->user()->is($user);
        });

        Gate::define('user-follow', function(User $user, User $creator){
            return $user->id !== $creator->id;
        });
    }
}
