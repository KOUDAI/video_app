<?php

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
    return view('index');
});

Route::delete('/videos/holiday', 'CalendarController@deleteHoliday');
Route::resource('videos', 'VideoController');
Route::get('/videos/{id}/editH', 'VideoController@getHoliday');
Route::post('/videos/{id}/editH', 'VideoController@postHoliday');

Route::get('/videos/{id}/editH', 'VideoController@editH');

Route::resource('calendars', 'CalendarController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/test/menu', 'Test\MenuController@menu');

// Route::get('/videos/holiday', 'CalendarController@getHoliday');
// Route::post('/videos/holiday', 'CalendarController@postHoliday');
// // Route::get('/videos/{id}', 'CalendarController@index');
// Route::get('/videos/holiday', 'CalendarController@getHolidayId');
