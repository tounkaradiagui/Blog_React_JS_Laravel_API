<?php

namespace App\Providers;

use App\Models\Post;
use App\Models\User;
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
        Gate::define('admin|author', function (User $user) {
            if($user->role_id === 1 || $user->role_id === 2){
                return true;
            }
        });


        Gate::define('admin-post|author-post', function (User $user, Post $post) {
            if($user->role_id === 1 || $user->role_id === 2 && $post->user_id ==1){
                return true;
            }
        });
    }
}
