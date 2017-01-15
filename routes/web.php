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

/* FRONT CONTROLLERS */
Route::get('/', 'FrontController@getIndex');
Route::get('/{section}', 'FrontController@getSection');
Route::get('/{section}/{subSection}', 'FrontController@getSubSection');
Route::get('/{section}/{subSection}/{content}', 'FrontController@getContent');

// Auth::routes();
//
// /* BACKEND CONTROLLERS */
// Route::get('/backend', 'BackendController@index');
//
// Route::resource('/backend/sections', 'SectionsController');
// Route::get('/backend/sections/get/{section}', 'SectionsController@getBySection');
//
// Route::resource('/backend/articles', 'ArticlesController');
// Route::get('/backend/articles/section/{section}', 'ArticlesController@getBySection');
//
// Route::resource('/backend/videos', 'VideosController');
// Route::resource('/backend/audios', 'AudiosController');
