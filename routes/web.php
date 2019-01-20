<?php

Route::get('/', 'HomeController')->name('home');

Auth::routes();

Route::resource('categories', 'CategoryController')->except(['index']);
Route::resource('categories.collections', 'CollectionController')->except(['index']);
Route::resource('person', 'PersonController')->except(['index', 'show']);

Route::get('about', 'PersonController@index')->name('person.index');
Route::get('about/{person}', 'PersonController@show')->name('person.show');

Route::get('/aaa', function () {
    return view('layouts.app');
})->name('empty');
