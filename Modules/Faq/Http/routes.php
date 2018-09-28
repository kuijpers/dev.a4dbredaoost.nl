<?php

Route::group(['middleware' => 'web', 'prefix' => 'faq', 'namespace' => 'Modules\Faq\Http\Controllers'], function()
{
    Route::get('/', 'FaqController@index');
});
