<?php

Route::group(['middleware' => 'web', 'prefix' => 'workgroup', 'namespace' => 'Modules\Workgroup\Http\Controllers'], function()
{
    Route::get('/', 'WorkgroupController@index');
});
