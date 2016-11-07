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
Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function(){

    Route::get('/', function(){
        return view('admin.dashboard');
    });

    Route::group(['prefix' => 'articles'], function(){
        Route::get('/','Admin\ArticleController@index');
        Route::get('/create','Admin\ArticleController@create');
        Route::get('/edit/{id}','Admin\ArticleController@edit');
        Route::post('/update/{id}','Admin\ArticleController@update');
        Route::get('/delete/{id}','Admin\ArticleController@delete');
        Route::post('/store','Admin\ArticleController@store');
        Route::get('/show/{id}','Admin\ArticleController@show');
    });

    Route::group(['prefix' => 'users'], function(){
        Route::get('/','Admin\UserController@index');
        Route::get('/create/','Admin\UserController@create');
        Route::get('/edit/{id}','Admin\UserController@edit');
        Route::post('/update/{id}','Admin\UserController@update');
        Route::post('/store','Admin\UserController@store');
        Route::get('/delete/{id}','Admin\UserController@destroy');
    });

});


