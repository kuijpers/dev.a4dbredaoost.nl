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

	// Changes made by user
		Route::post('/password/change', 'Board\MemberProfileController@change_password')->name('board.password.change');


//  Page routes
		Route::get('/', 'Board\HomeController@index')->name('board.home');




		Route::get('/lid', 'Board\MemberProfileController@index')->name('board.member');

		Route::get('/lid/profiel', 'Board\MemberProfileController@index')->name('board.member.profile');

		Route::post('/lid/profiel/update', 'Board\MemberProfileController@update_profile')->name('board.member.profile.update');

		Route::post('/lid/aboutme/update', 'Board\MemberProfileController@update_about_me')->name('board.member.aboutme.update');

		Route::post('/lid/avatar/update', 'Board\MemberProfileController@update_avatar')->name('board.member.avatar.update');

		Route::get('/lid/instellingen', 'Board\MemberSettingsController@index')->name('board.member.settings');


		Route::get('/leden', 'Board\MemberController@index')->name('board.boardmembers.index');



	});