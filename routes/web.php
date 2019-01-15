<?php

Route::get('/', 'HomeController@index')->name('home');
Route::resource('categories', 'CategoryController')->except(['index']);

Auth::routes();
