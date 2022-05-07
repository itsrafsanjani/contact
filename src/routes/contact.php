<?php

Route::group(['namespace' => 'ItsRafsanJani\Contact\Http\Controllers', 'middleware' => 'web'], function () {
    Route::get('contact', 'ContactController@showForm')->name('contact.form');
    Route::post('contact-submit', 'ContactController@send')->name('contact.submit');
});
