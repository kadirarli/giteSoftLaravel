<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/films');
    //return view('welcome');
});

Route::get('films', 'FilmController@index');
Route::get('films/create', 'FilmController@create');
Route::post('films/create', 'FilmController@store');
Route::put('films/{film}', 'FilmController@update');
Route::delete('films/{film}', 'FilmController@delete');
Route::get('films/{slug}', 'FilmController@show');

Route::post('films/{slug}/comments/create', 'CommentController@store');