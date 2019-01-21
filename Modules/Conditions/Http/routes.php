<?php

Route::group(['middleware' => 'web', 'prefix' => 'conditions', 'namespace' => 'Modules\Conditions\Http\Controllers'], function()
{
    Route::get('/', 'ConditionsController@index');
});
