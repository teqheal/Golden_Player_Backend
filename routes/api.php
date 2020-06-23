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

Route::group(['middleware' => ['jsonResponse']], function () {
    Route::post('register', 'API\PlayerController@register');
    Route::post('login', 'API\PlayerController@login');
    Route::post('socialLogin', 'API\PlayerController@socialLogin');
    Route::get('privacypolicy', 'API\PrivacyPolicyController@privacypolicy');

    Route::middleware('auth:player')->group(function () {
        Route::get('getplayerdetail', 'API\PlayerController@getPlayerDetail');
        Route::post('editprofile', 'API\PlayerController@editProfile');
        Route::post('changepassword', 'API\PlayerController@changePassword');
        Route::get('getgoldengame', 'API\GoldenGameController@getGoldenGame');
        Route::post('addbet', 'API\PlayerBetController@addbet');
        Route::post('meetceleb', 'API\CelebrityController@meetCeleb');
        Route::get('getcelebs', 'API\CelebrityController@getCelebs');
        Route::get('getmygames', 'API\PlayerController@getMyGames');
        Route::get('getleaderboard', 'API\LeaderBoardController@getLeaderBoard');
        Route::get('faq', 'API\FaqController@faq');
    });
});
