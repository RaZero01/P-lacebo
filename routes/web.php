<?php

Route::get('/', 'HomeController')->name('home');

Auth::routes();

Route::resource('categories', 'CategoryController')->except(['index']);
Route::resource('categories.collections', 'CollectionController')->except(['index']);

Route::get('/aaa', function () {
    return view('layouts.app');
})->name('empty');
