<?php

Route::group(['middleware' => 'web', 'prefix' => 'socialmedia', 'namespace' => 'Modules\SocialMedia\Http\Controllers\Main'], function()
{
    Route::get('/ga-naar/{slug}', 'SocialMediaController@click')->name('main.socialmedia.click');
});
