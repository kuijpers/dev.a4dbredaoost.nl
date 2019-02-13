<?php

Route::group(['middleware' => 'web', 'prefix' => 'het-bestuur', 'namespace' => 'Modules\Board\Http\Controllers\Main'], function()
{
    Route::get('/', 'TheBoardController@index')->name('main.board.index');
});
