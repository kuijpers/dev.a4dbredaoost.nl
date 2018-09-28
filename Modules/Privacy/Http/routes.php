<?php

Route::group(['middleware' => 'web', 'prefix' => 'privacy', 'namespace' => 'Modules\Privacy\Http\Controllers'], function()
{
    Route::get('/', 'PrivacyController@index');
});
