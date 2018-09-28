<?php

Route::group(['middleware' => 'web', 'prefix' => 'didyouknow', 'namespace' => 'Modules\Didyouknow\Http\Controllers'], function()
{
    Route::get('/', 'DidyouknowController@index');
});
