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
    return view('welcome');
});
Route::view('/admin','admin.index');

// room type
Route::get('/admin/room-type', 'RoomTypeController@index');
Route::get('/admin/room-type/create', 'RoomTypeController@create');
Route::post('save-room-type', 'RoomTypeController@store')->name('save-room-type');
Route::get('/admin/room-type/{id}/destroy','RoomTypeController@destroy')->name('delete-room-type');
Route::get('/admin/room-type/{id}/edit','RoomTypeController@edit')->name('edit-room-type');
Route::patch('/admin/room-type/{id}/update','RoomTypeController@update')->name('update-room-type');

// facility room
Route::get('/admin/facility-room', 'FacilityRoomController@index')->name('');
Route::post('save-facility-room', 'FacilityRoomController@store')->name('save-facility-room');
Route::get('/admin/facility-room/{id}/edit','FacilityRoomController@edit')->name('edit-facility-room');
Route::patch('/admin/facility-room/{id}/update','FacilityRoomController@update')->name('update-facility-room');
Route::get('/admin/facility-room/{id}/destroy','FacilityRoomController@destroy')->name('delete-facility-room');

// facility hotel
Route::get('/admin/facility-hotel', 'FacilityHotelController@index')->name('');
Route::post('save-facility-hotel', 'FacilityHotelController@store')->name('save-facility-hotel');
Route::get('/admin/facility-hotel/{id}/edit','FacilityHotelController@edit')->name('edit-facility-hotel');
Route::patch('/admin/facility-hotel/{id}/update','FacilityHotelController@update')->name('update-facility-hotel');
Route::get('/admin/facility-hotel/{id}/destroy','FacilityHotelController@destroy')->name('delete-facility-hotel');

// room
Route::get('/admin/room','RoomController@index');
Route::get('/admin/room/create','RoomController@create');
Route::post('save-room', 'RoomController@store')->name('save-room');
Route::get('/admin/room/{id}/edit','RoomController@edit')->name('edit-room');
Route::patch('/admin/room/{id}/update','RoomController@update')->name('update-room');
Route::get('/admin/room/{id}/destroy','RoomController@destroy')->name('delete-room');