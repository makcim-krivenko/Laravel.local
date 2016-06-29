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
    return "Заглушка для главной страницы";
});

Route::group(['prefix' => 'adminzone'], function()
{
   Route::get('/', function()
   {
       return view('admin.dashboard');
   });

    Route::resource('articles', 'ArticlesController');
    Route::resource('pages', 'PagesController');
    Route::resource('categories', 'CategoriesController');
});


