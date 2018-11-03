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

	Route::get('/', 'DidyouknowController@index')->name('board.didyouknow.index');


	Route::get('/create', 'DidyouknowController@create')->name('board.didyouknow.create');

	Route::post('/', 'DidyouknowController@store')->name('board.didyouknow.store');


	Route::get('/{id}/edit', 'DidyouknowController@edit')->name('board.didyouknow.edit');

	Route::get('/{id}', 'DidyouknowController@show')->name('board.didyouknow.show');

	Route::patch('/{id}', 'DidyouknowController@update')->name('board.didyouknow.update');


	Route::delete('/{id}', 'DidyouknowController@delete')->name('board.didyouknow.delete');



});
