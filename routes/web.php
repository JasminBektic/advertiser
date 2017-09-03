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

Auth::routes();

Route::get('home', 'AdvertisementController@index');
// Route::resource('advertisement', 'AdvertisementController', ['only' => [
//     'show'
// ]]);
Route::get('advertisement/{id}', 'AdvertisementController@show')->where('id', '[0-9]+');



Route::group(['middleware' => 'auth'], function() {
    Route::resource('account', 'AccountController');

    Route::resource('advertisement', 'AdvertisementController');
});
