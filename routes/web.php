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

Auth::routes();
//
// /* BACKEND CONTROLLERS */
Route::get('/backend', 'BackendController@index');
Route::resource('/backend/sections', 'SectionsController');
Route::resource('/backend/contents', 'ContentsController');
Route::get('/backend/contents/{section}/createBySection', 'ContentsController@createBySection');
Route::get('/backend/contents/{subSection}/getBySection/', 'ContentsController@getContentBySubSection');
Route::get('backend/tags/create/{tag}', 'ContentsController@addNewTag');

/* FRONT CONTROLLERS */
Route::get('/', 'FrontController@getIndex');
Route::get('/moreHomeVideos', 'FrontController@getMoreHomeVideos');
Route::get('/{section}', 'FrontController@getSection');
Route::get('/{section}/{subSection}', 'FrontController@getSubSection');
Route::get('/{section}/{subSection}/{content}', 'FrontController@getContent');

// /* OTHERS BACKEND CONTROLLERS */
Route::get('/backend/sections/{section}', 'SectionsController@getBySection');
Route::get('/backend/contents/section/{section}', 'ContentsController@getBySection');
Route::get('/backend/contents/subSection/{subSection}', 'ContentsController@getBySubSection');
