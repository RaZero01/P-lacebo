<?php

Route::get('/', 'HomeController')->name('home');

Auth::routes();

Route::resource('categories', 'CategoriesController')->except(['index']);
Route::resource('categories.collections', 'CollectionsController')->except(['index']);
Route::resource('people', 'PeopleController')->except(['index']);
Route::resource('partners', 'PartnersController')->except(['show']);

Route::get('about', 'AboutController')->name('about');
Route::get('contacts', 'ContactsController')->name('contacts');

Route::get('/aaa', function () {
    return view('layouts.app');
})->name('empty');
