<?php

	#####################################
	#									#
	#			Main website			#
	#									#
	#####################################


	Route::group(['middleware' => 'web', 'prefix' => 'sponsors', 'namespace' => 'Modules\Sponsors\Http\Controllers\Main'], function()
	{
		Route::get('/', 'SponsorsController@index')->name('main.sponsors.index');

		Route::get('/ga-naar/{slug}', 'SponsorsController@click')->name('main.sponsors.click');
	});



	#####################################
	#									#
	#			Board website			#
	#									#
	#####################################


	Route::group(['middleware' => 'web', 'prefix' => 'bestuur/sponsors', 'namespace' => 'Modules\Sponsors\Http\Controllers\Board'], function()
	{

		// INFORMATION SECTION
		Route::get('informatie/', 'SponsorsInformationController@index')->name('board.sponsors.information.index');

		Route::post('informatie/', 'SponsorsInformationController@store')->name('board.sponsors.information.store');


		Route::get('informatie/{id}/edit', 'SponsorsInformationController@edit')->name('board.sponsors.information.edit');

		Route::get('informatie/{id}', 'SponsorsInformationController@show')->name('board.sponsors.information.show');

		Route::patch('informatie/{id}', 'SponsorsInformationController@update')->name('board.sponsors.information.update');


		// SETTINGS SECTION
		Route::get('settings/', 'SponsorsSettingsController@index')->name('board.sponsors.settings.index');


		// MAIN SECTION
		Route::get('/', 'SponsorsController@index')->name('board.sponsors.index');


		Route::post('/create', 'SponsorsController@create')->name('board.sponsors.create');

		Route::post('/', 'SponsorsController@store')->name('board.sponsors.store');


		Route::post('/author-edit', 'SponsorsController@author_edit')->name('board.sponsors.author.edit');

		Route::post('/editor-edit', 'SponsorsController@editor_edit')->name('board.sponsors.editor.edit');

		Route::post('/treasurer-edit', 'SponsorsController@treasurer_edit')->name('board.sponsors.treasurer.edit');

		Route::post('/publisher-edit', 'SponsorsController@publisher_edit')->name('board.sponsors.publisher.edit');

		Route::post('/published-edit', 'SponsorsController@published_edit')->name('board.sponsors.published.edit');

	});


	#####################################
	#									#
	#				API					#
	#									#
	#####################################



	Route::group(['middleware' => 'web', 'prefix' => 'api/board/sponsors/', 'namespace' => 'Modules\Sponsors\Http\Controllers\Board'], function()
	{
		// Information section

		Route::post('information/create', 'SponsorsInformationController@store')->name('api.sponsors.information.store');

		Route::post('information/update', 'SponsorsInformationController@update')->name('api.sponsors.information.update');

		Route::post('information/restore', 'SponsorsInformationController@restore')->name('api.sponsors.information.restore');

		Route::get('information/{id}/delete', 'SponsorsInformationController@delete')->name('board.sponsors.information.delete');

		Route::get('information/{id}/destroy', 'SponsorsInformationController@destroy')->name('api.sponsors.information.destroy');


		Route::post('information/settings', 'SponsorsSettingsController@update')->name('api.sponsors.settings.update');


		// Sponsor section

		Route::get('sponsor/{id}/delete', 'SponsorsController@delete_article')->name('board.sponsors.sponsor.delete');

		Route::get('sponsor/{id}/destroy', 'SponsorsController@destroy_article')->name('api.sponsors.sponsor.destroy');



	});
