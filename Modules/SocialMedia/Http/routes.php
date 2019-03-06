<?php

Route::group(['middleware' => 'web', 'prefix' => 'socialmedia', 'namespace' => 'Modules\SocialMedia\Http\Controllers'], function()
{
    Route::get('/', 'SocialMediaController@index');
});
