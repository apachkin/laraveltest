<?php

Route::get('/','BaseController@getIndex');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');










// роутер по умолчанию
Route::get('{url}', 'StaticController@getIndex');