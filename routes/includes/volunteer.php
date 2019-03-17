<?php

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