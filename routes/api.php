<?php

use Illuminate\Support\Facades\Route;

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

Route::post('register', 'API\UserController@register');
Route::post('login', 'API\UserController@login');
Route::post('socialLogin', 'API\UserController@socialLogin');

Route::middleware('auth:api')->group(function () {
    Route::post('editprofile', 'API\UserController@editProfile');
    Route::post('changepassword', 'API\UserController@changePassword');
    Route::get('celebs', 'API\CelebrityController@getCelebs');
});
