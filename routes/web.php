<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
use App\Article;

Route::get('/', function () {
    $articles = Article::all();
    return view('welcome', compact('articles'));
});

Auth::routes();
Route::get('articulos', 'ArticlesController@getArticles');
Route::get('articulos/{section}/{subSection}/{url}', 'ArticlesController@getArticle');
