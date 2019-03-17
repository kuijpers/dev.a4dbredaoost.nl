<?php

	Route::prefix('deelnemer')->group(function(){
//    Login / log out routes
		Route::post('/logout', 'Auth\LoginController@userLogout')->name('user.logout');
	});