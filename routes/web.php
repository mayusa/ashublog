<?php

Route::get('/', 'HomeController@index')->name('home');
Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'LanguageController@switchLang']);
Route::get('/may', function () {
    return view('ashu.index');
});

Auth::routes();

// Github Auth Route
Route::group(['prefix' => 'auth/github'], function () {
    Route::get('/', 'Auth\AuthController@redirectToProvider');
    Route::get('callback', 'Auth\AuthController@handleProviderCallback');
    Route::get('register', 'Auth\AuthController@create');
    Route::post('register', 'Auth\AuthController@store');
});

// Link
Route::get('link', 'LinkController@index');

// Search
Route::get('search', 'HomeController@search');

// Category
Route::group(['prefix' => 'category'], function () {
    Route::get('{category}', 'CategoryController@show');
    Route::get('/', 'CategoryController@index');
});
// Tag
Route::group(['prefix' => 'tag'], function () {
    Route::get('/', 'TagController@index');
    Route::get('{tag}', 'TagController@show');
});

// Discussion
// Route::resource('discussion', 'DiscussionController', ['except' => 'destroy']);

// dashboard
Route::prefix('manage')->middleware('auth')->group(function () {
    // middleware('role:superadministrator|administrator')
    Route::get('/', 'ManageController@index');
    Route::get('/dashboard', 'ManageController@dashboard')->name('manage.dashboard');
    Route::get('/users', 'ManageController@users')->name('manage.users');
});

// User
Route::group(['prefix' => 'user'], function () {
    Route::get('/', 'UserController@index');

    Route::group(['middleware' => 'auth'], function () {
        Route::get('profile', 'UserController@edit')->name('user.profile');
        Route::put('profile/{id}', 'UserController@update');
        Route::post('follow/{id}', 'UserController@doFollow');
        Route::get('notification', 'UserController@notifications');
        Route::post('notification', 'UserController@markAsRead');
    });

    Route::group(['prefix' => '{username}'], function () {
        Route::get('/', 'UserController@show')->name('user.profile');
        Route::get('comments', 'UserController@comments');
        Route::get('following', 'UserController@following');
        Route::get('discussions', 'UserController@discussions');
    });
});
