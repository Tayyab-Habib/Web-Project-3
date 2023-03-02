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

Route::get('/', 'App\Http\Controllers\WelcomeCOntroller@index');
Route::post('/addAdmin', 'App\Http\Controllers\AdminCOntroller@storeAdmin');

Route::get('/admin', 'App\Http\Controllers\AdminController@index');
Route::get('/signup', 'App\Http\Controllers\SignupController@index');
Route::post('/adminLogin', 'App\Http\Controllers\UserController@matchAdmin');
Route::get('/employees', 'App\Http\Controllers\UserController@view');
Route::get('/addEmployeeForm', 'App\Http\Controllers\EmployeeController@index');
Route::post('/addEmployee', 'App\Http\Controllers\UserController@storeEmployee');
Route::get('/edit', 'App\Http\Controllers\UserController@viewEmployee');
Route::post('/update/{id}', 'App\Http\Controllers\UserController@updateEmployee');
Route::get('/delete', 'App\Http\Controllers\UserController@deleteEmployee')->name('delete');
Route::get('/rooms', 'App\Http\Controllers\RoomsController@viewRooms');
Route::get('/addRooms', 'App\Http\Controllers\RoomsController@viewForm');

Route::post('/addRoom', 'App\Http\Controllers\RoomsController@storeRoom');
Route::get('/editRoom', 'App\Http\Controllers\RoomsController@viewEdit');
Route::post('/updateRoom/{id}', 'App\Http\Controllers\RoomsController@updateRooms');
Route::get('/deleteRoom', 'App\Http\Controllers\RoomsController@deleteRoom')->name('deleteRoom');
Route::get('/about', 'App\Http\Controllers\AboutController@index');
Route::get('/employeeHome', 'App\Http\Controllers\employeeHomeController@index');
Route::post('/employeeLogin', 'App\Http\Controllers\UserController@matchEmployee');
Route::get('/bye', 'App\Http\Controllers\UserController@logout');
// Route::get('/guest', 'App\Http\Controllers\GuestController@index');

Route::get('/addGuest', 'App\Http\Controllers\GuestController@viewForm');
Route::post('/addGuest', 'App\Http\Controllers\GuestController@storeGuest');
Route::get('/guest', 'App\Http\Controllers\GuestController@viewGuest');
Route::get('/guestEdit', 'App\Http\Controllers\GuestController@viewEdit');
Route::post('/updateGuest/{id}', 'App\Http\Controllers\GuestController@updateGuest');
Route::get('/deleteGuest', 'App\Http\Controllers\GuestController@deleteGuest')->name('delete');
Route::get('/reservations', 'App\Http\Controllers\ReservationController@index');
Route::get('/employeeAbout', 'App\Http\Controllers\AboutController@employeeAbout');
