<?php

Route::get('contact','TEST\ContactForm\Http\Controllers\ContactFormController@index')->name('contact.index');
Route::post('contact/save','TEST\ContactForm\Http\Controllers\ContactFormController@store')->name('contact.store');
