<?php

Route::group(['middleware' => 'web', 'prefix' => 'organisatie', 'namespace' => 'Modules\Organisation\Http\Controllers'], function()
{
    Route::get('/', 'OrganisationController@index')->name('main.organisation.index');
});
