<?php

Route::group(['middleware' => 'web', 'prefix' => 'sponsors', 'namespace' => 'Modules\Sponsors\Http\Controllers'], function()
{
    Route::get('/', 'SponsorsController@index');
});
