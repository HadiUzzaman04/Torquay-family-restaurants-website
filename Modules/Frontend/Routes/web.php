<?php
use Illuminate\Support\Facades\Route;
use Modules\Frontend\Http\Controllers\FrontendController;

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
Route::get('/', function () {
    return redirect()->route('home');
});


Route::prefix('website')->group(function() {
    Route::get('/home', 'FrontendController@index')->name('home');
    Route::get('booking','FrontendController@booking')->name('booking');
    Route::get('/menu','FrontendController@menu')->name('menu');
    Route::get('/aboutus','FrontendController@aboutus')->name('aboutus');


    //contactus
    Route::get('/contactus','ContactusController@contact')->name('contactus');
    Route::post('/contactus/store','ContactusController@store')->name('contactus.store');

    //booking
    Route::post('/booking/store','BookingController@store')->name('booking.store');

});
