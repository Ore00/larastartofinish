<?php

use App\Models\Tag;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\TaskController;
use Brick\Math\RoundingMode;

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
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/', function () {
//     $articles = Article::all();
//     $tags = Tag::all();
//     return view('welcome', ['articles'=> $articles, 'tags'=> $tags]);
// });
Route::resources([
    'users' => 'UserController',
    'profiles' => 'ProfileController',
    'articles' => 'ArticleController',
    'comments' => 'CommentController'
  ]);
Route::resource('tasks', 'TaskController');
Route::get('/users/{id}/articles', 'ArticleController@articles');
Route::get('/', 'ArticleController@main');
