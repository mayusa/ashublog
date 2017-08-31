<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/testuser', function (Request $request) {
    return $request->user();
});

Route::resource('user', 'UserController', ['except' => ['create', 'show']]);
Route::resource('post', 'PostController', ['except' => ['create', 'show']]);

Route::group(['middleware'=>'auth:api', 'prefix'=>'v1', 'namespace' => 'User'], function () {
    Route::post('avatar-upload', 'UserApiController@avatarUpload');
});

Route::group(['middleware'=>'auth:api', 'prefix'=>'v1'], function () {
    Route::post('media-upload', 'MediaController@uploadMediaImage');
});
