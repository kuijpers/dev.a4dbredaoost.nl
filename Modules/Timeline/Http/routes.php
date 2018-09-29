<?php

Route::group(['middleware' => 'web', 'prefix' => 'tijdlijn', 'namespace' => 'Modules\Timeline\Http\Controllers'], function()
{
    Route::get('/', 'TimelineController@index')->name('main.timeline.index');
});
