<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController as Post;
use App\Http\Controllers\CategoryController as Category;
use App\Http\Controllers\TagController as Tag;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [Post::class, 'index'])->name('home');
Route::get('/show/{slug}', [Post::class, 'show'])->name('home.show');
Route::get('/category/{slug}', [Category::class, 'show'])->name('category.show');
Route::get('/tag/{slug}', [Tag::class, 'show'])->name('tag.show');

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/', [MainController::class, 'index'])->name('admin.index');
    Route::resource('/categories', CategoryController::class);
    Route::resource('/tags', TagController::class);
    Route::resource('/posts', PostController::class);
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [UserController::class, 'create'])->name('user.create');
    Route::post('/register', [UserController::class, 'store'])->name('user.store');
    Route::get('/login', [UserController::class, 'loginForm'])->name('user.loginForm');
    Route::post('/login', [UserController::class, 'login'])->name('user.login');
});

Route::get('logout', [UserController::class, 'logout'])->name('user.logout')->middleware('auth');
