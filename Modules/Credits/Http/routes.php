<?php

Route::group(['middleware' => 'web', 'prefix' => 'credits', 'namespace' => 'Modules\Credits\Http\Controllers'], function()
{
    Route::get('/', 'CreditsController@index');
});
