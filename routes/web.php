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

Route::get('/', 'FrontController@getIndex');

Auth::routes();
Route::get('articulos', 'FrontController@getArticles');
Route::get('articulos/{section}/{subSection}/{url}', 'FrontController@getArticle');
Route::get('videos', 'FrontController@getVideos');
Route::get('videos/{section}/{url}', 'FrontController@getVideo');
