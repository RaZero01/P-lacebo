<?php

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();
