<?php

Route::get('/', 'HomeController@index')->name('home');
Route::get('lang/{lang}', ['as'=>'lang.switch', 'uses'=>'LanguageController@switchLang']);

Auth::routes();

Route::prefix('manage')->middleware('auth')->group(function(){
	// middleware('role:superadministrator|administrator')
	Route::get('/', 'ManageController@index');
	Route::get('/dashboard', 'ManageController@dashboard')->name('manage.dashboard');
	Route::resource('/users', 'UserController');
});
