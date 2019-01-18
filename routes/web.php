<?php

Route::get('/', 'HomeController')->name('home');
Route::resource('categories', 'CategoryController')->except(['index', 'show']);
Route::get('/categories/{slug}', 'CategoryController@show')->name('categories.show');
Route::get('/aaa', function () {
    return view('layouts.app');
})->name('empty');

Auth::routes();
