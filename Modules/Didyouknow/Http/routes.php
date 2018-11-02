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



});
