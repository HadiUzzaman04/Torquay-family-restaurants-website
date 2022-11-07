<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::prefix('admin')->group(function() {
    Route::get('/contactus', 'ContactusController@contactus')->name('contactus');
    Route::get('/contactus/delete/{id}','ContactusController@delete')->name('contactus.delete');
    Route::get('/booking','BackendController@booking')->name('booking');
    Route::get('/booking/delete/{id}','BackendController@delete')->name('booking.delete');

    //contact info
    Route::get('/contactinfo','ContactinfoController@contactinfo')->name('contactinfo');
    Route::post('/contactinfo/store','ContactinfoController@create')->name('contactinfo.store');
    Route::get('/contactinfo/delete/{id}','ContactinfoController@delete')->name('contactinfo.delete');
    Route::get('/contactinfo/edit/{id}','ContactinfoController@edit')->name('contactinfo.edit');
    Route::put('/contactinfo/update/{id}','ContactinfoController@update')->name('contactinfo.update');
});
