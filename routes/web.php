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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'Main\HomeController@index')->name('home');

Route::prefix('vrijwilliger')->group(function(){
    Route::get('/login', 'Auth\VolunteerLoginController@showLoginForm')->name('volunteer.login');
    Route::post('/login', 'Auth\VolunteerLoginController@login')->name('volunteer.login.submit');
    Route::get('/', 'Volunteer\HomeController@index')->name('volunteer.home');
});


Route::prefix('bestuur')->group(function(){
    Route::get('/login', 'Auth\BoardmemberLoginController@showLoginForm')->name('board.login');
    Route::post('/login', 'Auth\BoardmemberLoginController@login')->name('board.login.submit');
    Route::get('/', 'Board\HomeController@index')->name('board.home');
});







Route::get('/bestuur', 'Board\HomeController@index')->name('board.home');
