<?php

Route::get('/', 'HomeController')->name('home');

Auth::routes();

Route::resource('categories', 'CategoriesController')->except(['index']);
Route::resource('categories.collections', 'CollectionsController')->except(['index']);
Route::resource('people', 'PeopleController')->except(['index']);
Route::resource('partners', 'PartnersController')->except(['show']);
Route::resource('events', 'EventsController')->except(['show']);
Route::resource('collection.items', 'CollectionItemsController')->except(['index', 'show']);
Route::resource('collection.item.images', 'CollectionItemImagesController')->except(['index', 'show']);

Route::get('about', 'AboutController')->name('about');
Route::get('contacts', 'ContactsController')->name('contacts');
