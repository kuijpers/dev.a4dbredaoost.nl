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

Route::get('/main', function () {return view('welcome');});
Route::get('/logout', 'Auth\LoginController@Logout')->name('logout');

Auth::routes();

Route::get('/home', 'Main\HomeController@index')->name('home');




Route::prefix('deelnemer')->group(function(){
//    Login / log out routes
    Route::post('/logout', 'Auth\LoginController@userLogout')->name('user.logout');
});



Route::prefix('vrijwilliger')->group(function(){

//  Login / log out routes
    Route::get('/login', 'Auth\VolunteerLoginController@showLoginForm')->name('volunteer.login');
    Route::post('/login', 'Auth\VolunteerLoginController@login')->name('volunteer.login.submit');
    Route::post('/logout', 'Auth\VolunteerLoginController@logout')->name('volunteer.logout');

//  Password reset routes
    Route::post('/password/email', 'Auth\VolunteerForgotPasswordController@sendResetLinkEmail')->name('volunteer.password.email');

    Route::post('/password/reset', 'Auth\VolunteerResetPasswordController@reset');

    Route::get('/password/reset', 'Auth\VolunteerForgotPasswordController@showLinkRequestForm')->name('volunteer.password.request');

    Route::get('/password/reset/{token}', 'Auth\VolunteerResetPasswordController@showResetForm')->name('volunteer.password.reset');


//  Page routes
    Route::get('/', 'Volunteer\HomeController@index')->name('volunteer.home');
});


Route::prefix('bestuur')->group(function(){
//  Login / log out routes
    Route::get('/login', 'Auth\BoardmemberLoginController@showLoginForm')->name('board.login');
    Route::post('/login', 'Auth\BoardmemberLoginController@login')->name('board.login.submit');
    Route::post('/logout', 'Auth\BoardmemberLoginController@logout')->name('board.logout');

//  Password reset routes
    Route::post('/password/email', 'Auth\BoardmemberForgotPasswordController@sendResetLinkEmail')->name('board.password.email');

    Route::post('/password/reset', 'Auth\BoardmemberResetPasswordController@reset');

    Route::get('/password/reset', 'Auth\BoardmemberForgotPasswordController@showLinkRequestForm')->name('board.password.request');

    Route::get('/password/reset/{token}', 'Auth\BoardmemberResetPasswordController@showResetForm')->name('board.password.reset');

//  Page routes
    Route::get('/', 'Board\HomeController@index')->name('board.home');




//    Route::get('/lid', 'Board\HomeController@index')->name('board.member');

    Route::get('/lid/profiel', 'Board\MemberProfileController@index')->name('board.member.profile');

    Route::get('/lid/instellingen', 'Board\MemberSettingsController@index')->name('board.member.settings');


});


Route::prefix('api')->group(function(){

	Route::post('/board/member/settings/theme-select', 'Board\MemberSettingsController@post_theme');

});
