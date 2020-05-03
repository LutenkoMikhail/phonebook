<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','ContactController@index')->name('index');


Route::get('show/{contact}', 'ContactController@show')->name('contact.show');
Route::get('contact/create',  'ContactController@create')->name('contact.create');
Route::post('contact/store', 'ContactController@store')->name('contact.store');
Route::get('contact/{contact}/edit', 'ContactController@edit')->name('contact.edit');
Route::post('contact/{contact}', 'ContactController@update')->name('contact.update');
Route::get('contact/{contact}/delete', 'ContactController@delete')->name('contact.delete');


Route::get('phonenumber/create/{contactId}',  'PhoneNumberController@create')->name('phonenumber.create');
Route::post('phonenumber/store/{contactId}', 'PhoneNumberController@store')->name('phonenumber.store');
Route::get('phonenumber/{phonenumber}/edit', 'PhoneNumberController@edit')->name('phonenumber.edit');
Route::post('phonenumber/{phonenumberId}', 'PhoneNumberController@update')->name('phonenumber.update');
Route::get('phonenumber/{phonenumber}/delete', 'PhoneNumberController@delete')->name('phonenumber.delete');


Route::get('db/reset','ResetDataBaseController@reset')->name('db.reset');
