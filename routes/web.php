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



Route::get('/vrijwilliger', 'Volunteer\HomeController@index')->name('volunteer.home');





Route::get('/bestuur', 'Board\HomeController@index')->name('board.home');
