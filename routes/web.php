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
Route::get('login', 'HomeController@login');

Route::get('/', 'HomeController@browse');

Route::group(['prefix' => 'news', 'middleware' => 'auth'], function() {
    Route::get('create', 'NewsController@add');
    Route::post('create', 'NewsController@create');
    Route::get('/', 'NewsController@index');
    Route::get('edit', 'NewsController@edit');
    Route::post('edit', 'NewsController@update');
    Route::get('delete', 'NewsController@delete');
});

Route::get('news/details', 'BrowseController@browse');
Route::get('news/list', 'BrowseController@index');

Route::group(['prefix' => 'contact'], function() {
    Route::get('', 'ContactController@form')->name('contact');
    Route::post('confirm', 'ContactController@confirm')->name('contact.confirm');
    Route::post('sent', 'ContactController@finish')->name('contact.finish');
});

Route::get('reservation', 'ReservationController@main')->name('reservation');

Auth::routes();


