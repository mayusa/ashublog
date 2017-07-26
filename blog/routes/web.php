<?php

Route::get('/', 'HomeController@index')->name('home');
Route::get('lang/{lang}', ['as'=>'lang.switch', 'uses'=>'LanguageController@switchLang']);

Auth::routes();

Route::prefix('manage')->middleware('role:superadministrator|administrator')->group(function(){
	Route::get('/dashboard', 'ManageController@dashboard')->name('manage.dashboard');
});
