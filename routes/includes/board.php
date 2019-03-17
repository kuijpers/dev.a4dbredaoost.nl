<?php

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




		Route::get('/lid', 'Board\MemberProfileController@index')->name('board.member');

		Route::get('/lid/profiel', 'Board\MemberProfileController@index')->name('board.member.profile');

		Route::get('/lid/instellingen', 'Board\MemberSettingsController@index')->name('board.member.settings');


		Route::get('/leden', 'Board\MemberController@index')->name('board.boardmembers.index');



	});