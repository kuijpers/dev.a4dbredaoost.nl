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


	Route::get('information/create', 'DidyouknowInformationController@create')->name('board.didyouknow.information.create');

	Route::post('information/', 'DidyouknowInformationController@store')->name('board.didyouknow.information.store');


	Route::get('information/{id}/edit', 'DidyouknowInformationController@edit')->name('board.didyouknow.information.edit');

	Route::get('information/{id}', 'DidyouknowInformationController@show')->name('board.didyouknow.information.show');

	Route::patch('information/{id}', 'DidyouknowInformationController@update')->name('board.didyouknow.information.update');


	Route::delete('information/{id}', 'DidyouknowInformationController@delete')->name('board.didyouknow.information.delete');



	Route::get('/', 'DidyouknowController@index')->name('board.didyouknow.index');


	Route::get('/create', 'DidyouknowController@create')->name('board.didyouknow.create');

	Route::post('/', 'DidyouknowController@store')->name('board.didyouknow.store');


	Route::get('/{id}/edit', 'DidyouknowController@edit')->name('board.didyouknow.edit');

	Route::get('/{id}', 'DidyouknowController@show')->name('board.didyouknow.show');

	Route::patch('/{id}', 'DidyouknowController@update')->name('board.didyouknow.update');


	Route::delete('/{id}', 'DidyouknowController@delete')->name('board.didyouknow.delete');



});
