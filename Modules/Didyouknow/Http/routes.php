<?php

	#####################################
	#									#
	#			Main website			#
	#									#
	#####################################


	Route::group(['middleware' => 'web', 'prefix' => 'weetjes', 'namespace' => 'Modules\Didyouknow\Http\Controllers\Main'], function()
	{
		Route::get('/', 'DidyouknowController@index')->name('main.didyouknow.index');



	});


	#####################################
	#									#
	#			Board website			#
	#									#
	#####################################


	Route::group(['middleware' => 'web', 'prefix' => 'bestuur/weetjes', 'namespace' => 'Modules\Didyouknow\Http\Controllers\Board'], function()
	{

		Route::get('informatie/', 'DidyouknowInformationController@index')->name('board.didyouknow.information.index');

		Route::post('informatie/', 'DidyouknowInformationController@store')->name('board.didyouknow.information.store');


		Route::get('informatie/{id}/edit', 'DidyouknowInformationController@edit')->name('board.didyouknow.information.edit');

		Route::get('informatie/{id}', 'DidyouknowInformationController@show')->name('board.didyouknow.information.show');

		Route::patch('informatie/{id}', 'DidyouknowInformationController@update')->name('board.didyouknow.information.update');




		Route::get('/', 'DidyouknowController@index')->name('board.didyouknow.index');


		Route::get('/create', 'DidyouknowController@create')->name('board.didyouknow.create');

		Route::post('/', 'DidyouknowController@store')->name('board.didyouknow.store');


		Route::get('/{id}/edit', 'DidyouknowController@edit')->name('board.didyouknow.edit');

		Route::get('/{id}', 'DidyouknowController@show')->name('board.didyouknow.show');

		Route::patch('/{id}', 'DidyouknowController@update')->name('board.didyouknow.update');


		Route::delete('/{id}', 'DidyouknowController@delete')->name('board.didyouknow.delete');


		Route::delete('/{id}', 'DidyouknowController@destroy')->name('board.didyouknow.destroy');



	});


	#####################################
	#									#
	#				API					#
	#									#
	#####################################



	Route::group(['middleware' => 'web', 'prefix' => 'api/board/dyk/', 'namespace' => 'Modules\Didyouknow\Http\Controllers\Board'], function()
	{

		Route::post('information/create', 'DidyouknowInformationController@store')->name('api.didyouknow.information.store');

		Route::post('information/update', 'DidyouknowInformationController@update')->name('api.didyouknow.information.update');

		Route::post('information/restore', 'DidyouknowInformationController@restore')->name('api.didyouknow.information.restore');

		Route::get('information/{id}/delete', 'DidyouknowInformationController@delete')->name('board.didyouknow.information.delete');

		Route::get('information/{id}/destroy', 'DidyouknowInformationController@destroy')->name('api.didyouknow.information.destroy');



		Route::post('information/settings', 'DidyouknowSettingsController@update')->name('api.didyouknow.settings.update');


	});
