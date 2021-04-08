<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\eventController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', function () {
    return view('login');
});

// Route::get('/event_registration', function () {
//     return view('event_registration');
// });

// Route::get('/add_event', function () {
//     return view('add_event');
// });

// Route::get('/add_admin', function () {
//     return view('add_admin');
// });


Route::get('/add_admin','App\Http\Controllers\eventController@viewadmin')->middleware('auth');

Route::post('/save_admin','App\Http\Controllers\eventController@save_admin')->middleware('auth');

Route::post('/save_reg','App\Http\Controllers\eventController@save_reg')->middleware('auth');

Route::get('/event_registration','App\Http\Controllers\eventController@event_registration')->middleware('auth');

Route::post('/save_event','App\Http\Controllers\eventController@save_event')->middleware('auth');

Route::get('/add_event','App\Http\Controllers\eventController@event_list')->middleware('auth');

Route::get('/delete/{id}','App\Http\Controllers\eventController@event_delete' )->middleware('auth');

Route::get('/','App\Http\Controllers\eventController@eve_list' );

Route::post('/admin','App\Http\Controllers\eventController@adminlogin' );

Route::get('/logout','App\Http\Controllers\eventController@logout')->middleware('auth');

Route::get('/update/{id}','App\Http\Controllers\eventController@update_eve_data' )->middleware('auth');

Route::post('/update','App\Http\Controllers\eventController@update_event' )->middleware('auth');

Route::get('/delete_admin/{id}','App\Http\Controllers\eventController@admin_delete')->middleware('auth');

Route::get('/delete_reg/{id}','App\Http\Controllers\eventController@reg_delete')->middleware('auth');

