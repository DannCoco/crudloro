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

/**
 * 1. Usuarios
 */
Route::get('users', 'UserController@index');
Route::get('users/{user_id}', 'UserController@show');
Route::post('users', 'UserController@store');
Route::put('users/{user_id}', 'UserController@update');
