<?php

Route::group(['middleware' => 'web', 'prefix' => 'sponsors', 'namespace' => 'Modules\Sponsors\Http\Controllers\Main'], function()
{
    Route::get('/', 'SponsorsController@index')->name('main.sponsors.index');

    Route::get('/ga-naar/{slug}', 'SponsorsController@click')->name('main.sponsors.click');
});
