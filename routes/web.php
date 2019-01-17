<?php

Route::get('/', 'HomeController')->name('home');
Route::resource('categories', 'CategoryController')->except(['index']);
Route::get('/aaa', function () {
    return view('layouts.app');
})->name('empty');

Auth::routes();
