<?php

Route::group(['middleware' => 'web', 'prefix' => 'cookie', 'namespace' => 'Modules\Cookie\Http\Controllers'], function()
{
    Route::get('/', 'CookieController@index');
});
