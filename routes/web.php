<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

// Booking Routes
Route::get('/bookings/create', 'BookingsController@create')->name('bookings.create');
Route::post('/bookings', 'BookingsController@store')->name('bookings.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
 * ***************
 * Admin Routes  *
 * **************
 * */

// Airports Routes
Route::get('/airports', 'AirportsController@index')->name('airports.index');
Route::get('/airports/search', 'AirportsController@search')->name('airports.search');
Route::get('/airports/{airport}', 'AirportsController@show')->name('airports.show');
