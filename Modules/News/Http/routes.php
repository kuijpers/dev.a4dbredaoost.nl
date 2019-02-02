<?php

Route::group(['middleware' => 'web', 'prefix' => 'nieuws', 'namespace' => 'Modules\News\Http\Controllers\Main'], function()
{
    Route::get('/', 'NewsController@index')->name('main.news.index');
});
