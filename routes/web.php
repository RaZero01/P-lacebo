<?php

Route::get('/', 'HomeController')->name('home');

Auth::routes();

Route::resource('categories', 'CategoryController')->except(['index', 'show']);
Route::get('/categories/{category}', 'CategoryController@show')->name('categories.show');

Route::resource('categories.collections', 'CollectionController')->except(['index', 'show']);
Route::get('categories/{category}/collections/{collection}', 'CollectionController@show')->name('categories.collections.show');

Route::get('/aaa', function () {
    return view('layouts.app');
})->name('empty');
