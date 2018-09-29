<?php

Route::group(['middleware' => 'web', 'prefix' => 'weetjes', 'namespace' => 'Modules\Didyouknow\Http\Controllers'], function()
{
    Route::get('/', 'DidyouknowController@index')->name('main.didyouknow.index');
});
