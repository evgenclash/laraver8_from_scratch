<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

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

Route::get('/posts/{post:slug}', [PostController::class, 'show'])->name('post');

Route::get('/' , [PostController::class, 'index'])->name('home');

Route::get('/register', [RegisterController::class, 'create']);

Route::post('/register', [RegisterController::class, 'store']);



//Route::get('/categories/{category:slug}', function (Category $category) {
//
//    return view('posts', [
//        'posts' => $category->posts->load(['category','author']),
//        'currentCategory' => $category,
//        'categories' => Category::all()
//    ]);
//})->name('category');

//Route::get('/author/{author:username}', function (User $author){
//
////    dd($author->posts->load(['category','author']));
//
//    return view('posts.index',[
//        'posts' => $author->posts->load(['category','author'])
//        ]);
//});
