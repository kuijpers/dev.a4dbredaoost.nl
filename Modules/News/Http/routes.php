<?php

Route::group(['middleware' => 'web', 'prefix' => 'nieuws', 'namespace' => 'Modules\News\Http\Controllers\Main'], function()
{
    Route::get('/', 'NewsController@index')->name('main.news.index');

    Route::get('/post/{slug}', 'NewsController@show')->name('main.news.post');

    Route::get('/categorie/{slug}', 'NewsController@categorie')->name('main.news.categorie');

    Route::get('/tag/{slug}', 'NewsController@tag')->name('main.news.tag');

    Route::get('/auteur/{slug}', 'NewsController@author')->name('main.news.author');

});
