<?php

Route::get('/', 'HomeController@index')->name('home');
Route::get('lang/{lang}', ['as'=>'lang.switch', 'uses'=>'LanguageController@switchLang']);
Auth::routes();


