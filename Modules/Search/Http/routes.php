<?php

Route::group(['middleware' => 'web', 'prefix' => 'zoeken', 'namespace' => 'Modules\Search\Http\Controllers'], function()
{
    Route::post('/', 'SearchController@index')->name('main.search.index');
});
