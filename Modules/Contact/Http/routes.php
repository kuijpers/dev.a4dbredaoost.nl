<?php

Route::group(['middleware' => 'web', 'prefix' => 'contact', 'namespace' => 'Modules\Contact\Http\Controllers\Main'], function()
{
    Route::get('/', 'ContactController@index')->name('main.contact.index');

    Route::get('/email/{web_id}', 'ContactController@received_email')->name('main.contact.received_email');
});


Route::group(['middleware' => 'web', 'prefix' => 'api', 'namespace' => 'Modules\Contact\Http\Controllers\Main'], function()
{
    Route::post('/contact/email', 'ContactController@send_contact_email')->name('main.contact.mail');
});
