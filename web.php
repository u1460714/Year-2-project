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

Route::get('all', 'FilmController@index');

Route::get('details/{filmId}', 'FilmController@details');

Route::get('addform', 'FilmController@addForm');

Route::get('addform', 'FilmController@addForm')->middleware('can:create,App\Film');

Route::post('addfilm', 'FilmController@addFilm');

Route::get('deleteform', 'FilmController@deleteForm');

Route::post('deletefilms', 'FilmController@deleteFilms');

Route::get('login', 'LoginController@loginForm');

Route::post('login', 'LoginController@login');

Route::get('getlogout', 'LoginController@logout');



//Route::get('addform', 'FilmController@addForm');
//
//Route::get('addform', 'FilmController@addForm')->middleware('can:create,App\Film');
//
//Route::post('addfilm', 'FilmController@addFilm');


Route::get('registerForm', 'AuthController@viewregisterForm');

Route::get('registerform', 'AuthController@viewregisterForm')->middleware('can:create,App\User');

Route::post('registerForm', 'AuthController@viewregisterUser');



Route::get('/', function () {
    return view('welcome');
});