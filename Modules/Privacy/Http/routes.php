<?php

Route::group(['middleware' => 'web', 'prefix' => 'privacyverklaring', 'namespace' => 'Modules\Privacy\Http\Controllers'], function()
{
    Route::get('/', 'PrivacyController@index')->name('main.privacy.index');
});
