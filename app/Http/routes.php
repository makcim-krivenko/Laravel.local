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
    return "�������� ��� ������� ��������";
});

Route::group(['prefix' => 'adminzone'], function()
{
   Route::get('/', function()
   {
       return view('admin.dashboard');
   });

    Route::resource('Articles', 'ArticlesController');
    Route::resource('Pages', 'PagesController');
    Route::resource('Categories', 'CategoriesController');
});


