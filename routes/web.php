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

Route::get('/', 'HomeController@browse');

Route::get('contact', 'ContactController@form')->name('contact');
Route::post('contact/confirm', 'ContactController@confirm')->name('contact.confirm');
Route::post('contact/sent', 'ContactController@finish')->name('contact.finish');

Route::get('reservation', 'ReservationController@main')->name('reservation');
