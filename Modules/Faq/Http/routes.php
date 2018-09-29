<?php

Route::group(['middleware' => 'web', 'prefix' => 'veelgestelde-vragen', 'namespace' => 'Modules\Faq\Http\Controllers'], function()
{
    Route::get('/', 'FaqController@index')->name('main.faq.index');
});
