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

		Route::get('information/', 'DidyouknowInformationController@index')->name('board.didyouknow.information.index');

		Route::post('information/', 'DidyouknowInformationController@store')->name('board.didyouknow.information.store');


		Route::get('information/{id}/edit', 'DidyouknowInformationController@edit')->name('board.didyouknow.information.edit');

		Route::get('information/{id}', 'DidyouknowInformationController@show')->name('board.didyouknow.information.show');

		Route::patch('information/{id}', 'DidyouknowInformationController@update')->name('board.didyouknow.information.update');




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



	Route::group(['middleware' => 'web', 'prefix' => 'api', 'namespace' => 'Modules\Didyouknow\Http\Controllers\Board'], function()
	{

		Route::post('board/information/create', 'DidyouknowInformationController@store')->name('api.didyouknow.information.store');

		Route::post('board/information/update', 'DidyouknowInformationController@update')->name('api.didyouknow.information.update');

		Route::post('board/information/restore', 'DidyouknowInformationController@restore')->name('api.didyouknow.information.restore');

		Route::get('board/information/{id}/delete', 'DidyouknowInformationController@delete')->name('board.didyouknow.information.delete');

		Route::get('board/information/{id}/destroy', 'DidyouknowInformationController@destroy')->name('api.didyouknow.information.destroy');



		Route::post('board/information/settings', 'DidyouknowSettingsController@update')->name('api.didyouknow.settings.update');


	});
