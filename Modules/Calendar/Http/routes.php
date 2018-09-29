<?php

Route::group(['middleware' => 'web', 'prefix' => 'kalender', 'namespace' => 'Modules\Calendar\Http\Controllers'], function()
{
    Route::get('/', 'CalendarController@index')->name('main.calendar.index');
});
