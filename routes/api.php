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

Route::get('films', 'FilmController@index');
Route::get('films/create', 'FilmController@create');
Route::post('films/create', 'FilmController@store');
Route::put('films/{film}', 'FilmController@update');
Route::delete('films/{film}', 'FilmController@delete');
Route::get('films/{slug}', 'FilmController@show');

Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout');
Route::post('register', 'Auth\RegisterController@register');

