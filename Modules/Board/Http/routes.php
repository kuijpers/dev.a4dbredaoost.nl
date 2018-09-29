<?php

Route::group(['middleware' => 'web', 'prefix' => 'bestuur', 'namespace' => 'Modules\Board\Http\Controllers'], function()
{
    Route::get('/', 'BoardController@index')->name('main.board.index');
});
