<?php

Route::group(['middleware' => 'web', 'prefix' => 'nieuws', 'namespace' => 'Modules\News\Http\Controllers'], function()
{
    Route::get('/', 'NewsController@index')->name('main.news.index');
});
