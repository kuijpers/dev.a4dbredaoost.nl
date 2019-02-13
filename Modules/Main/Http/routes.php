<?php

Route::group(['middleware' => 'web', 'namespace' => 'Modules\Main\Http\Controllers\Main'], function()
{
    Route::get('/', 'MainController@index')->name('main.main.index');

    Route::get('/in-het-zonnetje/{slug}', 'MainController@spotlight_index')->name('main.spotlight.index');
});
