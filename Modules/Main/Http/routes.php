<?php

Route::group(['middleware' => 'web', 'prefix' => 'index', 'namespace' => 'Modules\Main\Http\Controllers'], function()
{
    Route::get('/', 'MainController@index')->name('main.main.index');
});
