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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('users/{id}', 'ArticleController@index');

Route::get('users/{id}', 'ArticleController@show');

Route::post('users/{id}', 'ArticleController@store');

Route::put('users/{id}', 'ArticleController@update');

Route::delete('users/{id}', 'ArticleController@destroy');