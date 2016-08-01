<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/




Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/articles','ArticleController@index');
Route::get('/articles/create','ArticleController@create');
Route::get('/articles/edit/{id}','ArticleController@edit');
Route::post('/articles/update/{id}','ArticleController@update');
Route::get('/articles/delete/{id}','ArticleController@delete');
Route::post('/articles/store','ArticleController@store');
Route::get('/articles/show/{id}','ArticleController@show');

