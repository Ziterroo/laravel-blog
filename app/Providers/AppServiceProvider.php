<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        view()->composer(['layouts/layout', 'layouts/category_layout'], function ($view) {
            $categories = Category::withCount('posts')->get();
            $popularPosts = Post::orderByDesc('views')->limit(3)->get();
            $recentPosts = Post::orderByDesc('created_at')->limit(3)->get();
            return $view->with(['categories' => $categories, 'popularPosts' => $popularPosts,
                'recentPosts' => $recentPosts]);
        });
    }
}
